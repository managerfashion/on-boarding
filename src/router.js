const express = require('express');
const {Pool} = require("pg");
const router = express.Router();
const pool = new Pool({
    user:'postgres',
    host:'localhost',
    database:'agencybd',
    password:'----',
    port:5432,
})

router.get('/', (req, res) => {
    pool.query('SELECT * from talent', (err, response) => {
        
        res.json(response.rows);
        pool.end()
    })
});

router.post('/register', (req, res) => {
    if (req.body) {    
      const  name = req.body.name
  
     connection.query('INSERT INTO users(`name`) values(?)',[name],function(errors,result,fields){
      if (errors) throw error;
      res.status(200).send({
        "UserId":result.insertId
      })
     })
  
    } else {
      res.sendStatus(400)
    }
});

router.get('/list', (req, res) => {
    res.sendStatus(400)
  
})

module.exports = router;