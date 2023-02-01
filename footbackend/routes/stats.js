var express = require('express');
const { Op } = require("sequelize");
var router = express.Router();
const { Sequelize } = require('../models');
const League = require('../models').league ;
const Teams = require('../models').teams;
const Players = require('../models').players;


router.get('/', function(req, res, next) {
   res.send("NO DEFINIDA");
});


//TEAMS: Pedro Bajaña

router.get('/teams',function(req,res,next){
  Teams.findAll().
  then(data=>{
    res.json(data)
  }).catch(e=>{
    console.log(e)

  })
}
)

router.get('/teams/:idteams', function(req, res, next) {
  let idP = req.params.idteams
   Teams.findOne({
      where:{
        idteams:idP
      }
   }).
   then(data =>{
    console.log(data)
    res.send(data);
   })
   .catch(e=>{
    console.log(e)
   
 
   })
 })
router.get('/teams/:idleague', function(req, res, next) {
  let idP = req.params.idleague
   Teams.findAll({
      where:{
        idleague:idP
      }
   }).
   then(data =>{
    console.log(data)
    res.send(data);
   })
   .catch(e=>{
    console.log(e)
   
 
   })
 })

 router.delete('/teams/:idteams', async function(req, res, next) {
  let idP = req.params.idteams
  try {
    const ply = await Teams.findOne({
      where:{
        idteams:idP
      }
    });
    if (!ply) {
      return res.status(404).send({ error: 'Equipo no Encontrado' });
    }
    await ply.destroy();
    return res.status(204).send();
  } catch (error) {
    return res.status(500).send({ error: error.message });
  }

 })


router.post('/teams/', function(req, res, next) {
  // Validate request
  if (!req.body) {
      console.log(res)
    res.status(400).send({
      message: "Content can not be empty!"
    });
    return;
  }

  const teams = {
    idteams :req.body.idteams,
    nameteam: req.body.nameteam,
    ab : req.body.ab,
    budget:req.body.budget,
    points:req.body.points,
    titles:req.body.titles,
    idleague:req.body.idleague
  };


  Teams.create(teams)
    .then(data => {
      res.send(data);
    })
    .catch(err => {
      res.status(500).send({
        message:
          err.message || "Some error occurred while creating the Tutorial."
      });
    });
})
 
router.put('/teams/:idteams', function(req, res, next){
  let idP = req.params.idteams

  Teams.update(req.body, {
    where: {  idteams:idP}
  })

    .then(num => {
      if (num == 1) {
        res.send({
          message: "Teams was updated successfully."
        });
      } else {
        res.send({
          message: `Cannot update Teams with id=${idP}. Maybe Teams was not found or req.body is empty!`
        });
      }
    })
    .catch(err => {
      res.status(500).send({
        message: "Error updating Tutorial with id=" + id
      });
    });
});



//LEAGUE: Aaron Franco

router.get('/league',function(req,res,next){
  League.findAll().
  then(data=>{
    res.json(data)
  }).catch(e=>{
    console.log(e)

  })
});

router.get('/league/:idleague', function(req, res, next) {
  let idP = req.params.idleague
   League.findOne({
      where:{
        idleague:idP
      }
   }).
   then(data =>{
    console.log(data)
    res.send(data);
   })
   .catch(e=>{
    console.log(e)
   
 
   })
 })
 router.delete('/league/:idleague', async function(req, res, next) {
  let idP = req.params.idleague
  try {
    const ply = await League.findOne({
      where:{
        idleague:idP
      }
    });
    if (!ply) {
      return res.status(404).send({ error: 'Liga no Encontrada' });
    }
    await ply.destroy();
    return res.status(204).send();
  } catch (error) {
    return res.status(500).send({ error: error.message });
  }

 })
 
router.post('/league/', function(req, res, next) {
  // Validate request
  if (!req.body) {
    console.log(res)
    res.status(400).send({
      message: "Content can not be empty!"
    });
    return;
  }

  const league = {
    idleague :req.body.idleague,
    leaguename: req.body.leaguename,
    budget : req.body.budget
  };


  League.create(league)
    .then(data => {
      res.send(data);
    })
    .catch(err => {
      res.status(500).send({
        message:
          err.message || "Some error occurred while creating the Tutorial."
      });
    });
})

router.put('/league/:idleague', function(req, res, next){
  let idP = req.params.idleague

  League.update(req.body, {
    where: {  idleague:idP}
  })
    .then(num => {
      if (num == 1) {
        res.send({
          message: "Leagues was updated successfully."
        });
      } else {
        res.send({
          message: `Cannot update League with id=${id}. Maybe League was not found or req.body is empty!`
        });
      }
    })
    .catch(err => {
      res.status(500).send({
        message: "Error updating League with id=" + id
      });
    });
});




//PLAYERS: Fabrizzio Ontaneda
 router.get('/players', function(req, res, next) {
  Players.findAll().
  then(data=>{
    res.json(data);
  })
  .catch(e=>{
    console.log(e);
  })
 })

 
router.post('/players', function(req, res, next) {
  // Validate request
  if (!req.body.idplayers) {
    res.status(400).send({
      message: "Content can not be empty!"
    });
    return;
  }

  const players = {
    idplayers :req.body.idplayers,
    first_name: req.body.first_name,
    last_name : req.body.last_name,
    position : req.body.position,
    salary : req.body.salary,
    goals : req.body.goals,
    matches: req.body.matches,
    date_birth: req.body.date_birth,
    id_team: req.body.id_team
  };


  Players.create(players)
    .then(data => {
      res.send(data);
    })
    .catch(err => {
      res.status(500).send({
        message:
          err.message || "Some error occurred while creating the Tutorial."
      });
    });
})

router.put('/players/:idplayers', function(req, res, next){
  let idP = req.params.idplayers

  Tutorial.update(req.body, {
    where: {  idplayers:idp}
  })
    .then(num => {
      if (num == 1) {
        res.send({
          message: "Players was updated successfully."
        });
      } else {
        res.send({
          message: `Cannot update Tutorial with id=${id}. Maybe Tutorial was not found or req.body is empty!`
        });
      }
    })
    .catch(err => {
      res.status(500).send({
        message: "Error updating Tutorial with id=" + id
      });
    });
});

router.delete('/players/:idplayers', function(req, res, next) {
  let idP = req.params.idplayers
   League.findAll({
      where:{
        idplayers:idp
      }
   }).
   then(data =>{
    console.log(data)
    res.send(data);
   })
   .catch(e=>{
    console.log(e)
   })
 })

module.exports = router;