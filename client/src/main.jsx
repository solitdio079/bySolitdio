import React from 'react'
import ReactDOM from 'react-dom/client'
import { createBrowserRouter, RouterProvider } from 'react-router-dom'
import Root, {loader as userLoader} from './routes/root'
import Login, {action as loginAction} from './routes/login'
import  {action as logoutAction} from './routes/logout'
import ErrorPage from './error-page'
import './index.css'
//import EditorJSONPreview from './routes/editor'
//import Tiptap from './components/tiptap'
import AdminRoot from './routes/admin/adminRoot'
import CreateCategory, { action as categoryAction } from './routes/admin/categories/createCategory'
import { loader as categoryLoader } from './routes/loaders/categories'
import { loader as allPostsLoader} from './routes/loaders/allPosts'
import { loader as categoryPostsLoader} from './routes/loaders/categoryPosts'
import {action as deleteAction} from './routes/admin/categories/deleteCategory'
import ViewCategoires from './routes/admin/categories/viewCategories'
import {action as uploadPostImagesAction} from './routes/admin/posts/uploadImages'
import CreatePost, {action as createPostAction} from './routes/admin/posts/createPost'
import GetAllPosts from './routes/admin/posts/getAllPosts'
import EditPost, {
  action as editPostAction,
  loader as editPostLoader
} from './routes/admin/posts/editPost'
import SinglePost, {loader as singlePostLoader} from './routes/singlePost'
import Home from './routes/home'
import CategoryPosts from './routes/category'



const router = createBrowserRouter([
  {
    path: '/',
    element: <Root />,
    errorElement: <ErrorPage />,
    loader: userLoader,
    children: [
      {
        index: true,
        element: <Home />,
        errorElement: <ErrorPage/>
    },
      {
        path: '/loaders',
        children: [
          {
            path: '/loaders/categories',
            loader: categoryLoader,
          },
          {
            path: '/loaders/posts',
            loader: allPostsLoader
          }, {
            path: '/loaders/categoryPosts',
            loader: categoryPostsLoader
          }
        ],
      },
      {
        path: '/admin',
        element: <AdminRoot />,
        errorElement: <ErrorPage />,
        children: [
          {
            path: '/admin/categories/create',
            element: <CreateCategory />,
            action: categoryAction,
            errorElement: <ErrorPage />,
          },
          {
            path: '/admin/categories/view',
            element: <ViewCategoires />,
            errorElement: <ErrorPage />,
          },
          {
            path: '/admin/categories/delete/:id',
            action: deleteAction,
            errorElement: <ErrorPage />,
          },
          {
            path: '/admin/posts/create',
            element: <CreatePost />,
            action: createPostAction,
            errorElement: <ErrorPage />,
          },
          {
            path: '/admin/posts/edit/:id',
            element: <EditPost/>,
            action: editPostAction,
            loader: editPostLoader,
            errorElement: <ErrorPage />,
          },
          {
            path: '/admin/posts/view',
            element: <GetAllPosts />,
            errorElement: <ErrorPage/>
          },
          {
            path: '/admin/posts/imagesUpload',
            action: uploadPostImagesAction,
            errorElement: <ErrorPage />,
          },
        ],
      },
      {
        path: '/post/:id',
        element: <SinglePost />,
        loader: singlePostLoader,
        errorElement: <ErrorPage/>
      },
      {
        path: '/category/:name',
        element: <CategoryPosts />,
        errorElement: <ErrorPage/>
      },
      {
        path: '/login',
        element: <Login />,
        action: loginAction,
      },
      {
        path: '/logout',
        action: logoutAction,
      },
    ],
  },
])
ReactDOM.createRoot(document.getElementById('root')).render(
  <React.StrictMode>
    <RouterProvider router={router}/>
  </React.StrictMode>,
)