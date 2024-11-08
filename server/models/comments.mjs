import mongoose, { Schema } from 'mongoose'


const commentSchema = new Schema({
  title: {
    type: String,
    required: true,
  },
  content: {
    type: String,
    required: true,
  },
  user: {
    id: mongoose.Types.ObjectId,
    email: String,
    name: String,
    },
    parent: {
        type: mongoose.Types.ObjectId,
        default: null
    },
    post: {
        id: mongoose.Types.ObjectId,
        title: String
    }
})


const Comments = mongoose.model('Comments', commentSchema)

export default Comments