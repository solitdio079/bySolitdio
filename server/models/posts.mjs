import mongoose, { Schema } from 'mongoose'

const postSchema = new Schema({
    title: {
        type: String,
        required: true
    },
    image: String,
    video_link: String,
    constent: {
        type: String,
        required: true
    },
    author: {
        id: mongoose.Types.ObjectId,
        email: String,
        name: String,
    },
    category: {
        name: String
    },
    comments: Array,
}, { timestamps: true })

const Posts = mongoose.model('Post', postSchema) 

export default Posts