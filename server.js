require('dotenv').config()
const express = require('express')
const cors = require('cors')
const bodyParser = require('body-parser')
const PORT = process.env.PORT || 3000
const app = express()
const mysql      = require('mysql');
const connection = mysql.createConnection({
  host     : process.env.DB_HOST ||'localhost',
  user     : process.env.DB_USER ||'root',
  password : process.env.DB_PASS ||'',
  database : 'test'
});
app.use(cors())
app.use(bodyParser.json())

app.get('/', (req, res) => {
  res.json({
    message: 'Welcome to the API.'
  })
})


app.post('/register', (req, res) => {
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
})

app.get('/list', (req, res) => {
    res.sendStatus(400)
  
})


app.listen(PORT, () => {
  console.log(`Server started on port ${PORT}`)
})
