import { Router } from 'express'
import passport from 'passport'
import '../steategies/magic-link.mjs'


const router = Router()

router.get("/", (req, res) => {
    console.log("The main auth page!")
})


// Sending email requests and getting status messages
router.post("/login/email", passport.authenticate('magiclink', { action: 'requestToken', failureRedirect: '/auth/login/sendFailed'}), (req, res) => {
    res.redirect("/auth/login/sendSuccessful")
})
router.get('/login/sendSuccessful', (req, res) => {
  res.send({ msg: 'Email sent!' })
})
router.get('/login/sendFailed', (req, res) => {
    res.send({msg: "Email not sent!"})
})
// verifying link send by email

router.post("/login/email/verify", passport.authenticate('magiclink', { successReturnToOrRedirect: '/', failureRedirect: '/auth/login/verifyFailed' }))
router.get('/login/verifyFailed', (req, res) => {
    res.send('Token invalid')
})

export default router