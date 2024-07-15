import express from 'express'


const app = express()

const port = process.env.PORT || 5500

app.get("/", (req, res) => {
    res.send("Hello, homepage here!")
})


app.listen(port, () => {
    console.log("Listening to port 5500!");
})