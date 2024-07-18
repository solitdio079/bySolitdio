import express from 'express'
import mongoose from 'mongoose'
import authRouter from './routes/auth.mjs'
import passport from 'passport'
import session from 'express-session'
import MongoStore from 'connect-mongo'
import cookieParser from 'cookie-parser'



try {
    const connection = await mongoose.connect('mongodb://127.0.0.1:27017/bySolitdio')
    console.log('Database connected')
} catch {
    console.log("Error occured");
}


const app = express()
app.use(express.json())
app.use(cookieParser('yes'))
app.use(
  session({
    secret: 'keyboard cat',
    resave: false,
    saveUninitialized: false,
    store: MongoStore.create({
      client: mongoose.connection.getClient(),
      dbName: 'mern-starter',
    }),
  })
)
app.use(passport.initialize())
app.use(passport.session())
app.use('/auth', authRouter)

const port = process.env.PORT || 5500

app.get("/", (req, res) => {
    res.send("Hello, homepage here!")
})


app.listen(port, () => {
    console.log("Listening to port 5500!");
})