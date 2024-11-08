import mongoose, { Schema } from 'mongoose'

const notificationSchema = new Schema({
    title: {
        type: String,
        required: true
    },
    content: {
        type: String,
        required: true
    },
    user_id: mongoose.Types.ObjectId
})


const Notification = mongoose.model('Notification', notificationSchema)

export default Notification