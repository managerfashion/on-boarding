require('dotenv').config()
const express = require('express')
const cors = require('cors')
const bodyParser = require('body-parser')
const router = require('./src/router')
const app = express()

app.use(cors());
app.use(bodyParser.json());

app.use('/',router);
app.use('/register',router);
app.use('/list',router);
app.listen(3333);
