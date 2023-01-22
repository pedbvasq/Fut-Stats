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


router.get('/teams',function(req,res,next){
  Teams.findAll().
  then(data=>{
    res.json(data)
  }).catch(e=>{
    console.log(e)

  })
}
)

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

 router.delete('/teams/:idteams', function(req, res, next) {
  let idP = req.params.idteams
   Teams.findAll({
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


router.create('/teams/', function(req, res, next) {
  // Validate request
  if (!req.body.nameteam) {
    res.status(400).send({
      message: "Content can not be empty!"
    });
    return;
  }

  const teams = {
    idteams :req.body.idteams,
    nameteam: req.body.nameteam,
    ab : req.body.ab,
    budget:req.body.ab,
    points:req.body.points,
    titles:req.body.titles
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
 
routes.update('/teams/:idteams', function(req, res, next){
  let idP = req.params.idteams

  Tutorial.update(req.body, {
    where: {  idleague:idP}
  })
    .then(num => {
      if (num == 1) {
        res.send({
          message: "Tutorial was updated successfully."
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
router.get('/league',function(req,res,next){
  League.findAll().
  then(data=>{
    res.json(data)
  }).catch(e=>{
    console.log(e)

  })
}
)





 router.get('/players', function(req, res, next) {
  Players.findAll().
  then(data=>{
    res.json(data);
  })
  .catch(e=>{
    console.log(e);
  })
 })


module.exports = router;