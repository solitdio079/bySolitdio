import React from 'react'
import ReactDOM from 'react-dom/client'
import { createBrowserRouter, RouterProvider } from 'react-router-dom'
import Root, {loader as userLoader} from './routes/root'
import Login, {action as loginAction} from './routes/login'
import  {action as logoutAction} from './routes/logout'
import ErrorPage from './error-page'
import './index.css'
import EditorJSONPreview from './routes/editor'
import Tiptap from './components/tiptap'
import AdminRoot from './routes/admin/adminRoot'
import CreateCategory, { action as categoryAction } from './routes/admin/categories/createCategory'
import { loader as categoryLoader } from './routes/loaders/categories'
import {action as deleteAction} from './routes/admin/categories/deleteCategory'
import ViewCategoires from './routes/admin/categories/viewCategories'



const router = createBrowserRouter([
  {
    path: '/',
    element: <Root />,
    errorElement: <ErrorPage />,
    loader: userLoader,
    children: [
      {
        path: '/loaders',
        children: [
          {
            path: '/loaders/categories',
            loader: categoryLoader,
          },
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
        ],
      },
      {
        path: '/parent',
        element: (
          <div className="p-10">
            <Tiptap />
          </div>
        ),
        children: [
          {
            path: '/parent/editor',
            element: <EditorJSONPreview />,
            errorElement: <ErrorPage />,
          },
        ],
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