const Home = () => import('./components/Home.vue')
const Contacto = () => import('./components/Contacto.vue')
//importamos los componentes para el blog
const Mostrar = () => import('./components/blog/Mostrar.vue')
const Crear = () => import('./components/blog/Crear.vue')
const Editar = () => import('./components/blog/Editar.vue')

// componentes para author
const MostrarA = () => import('./components/author/Mostrar.vue')
const CrearA = () => import('./components/author/Crear.vue')
const EditarA = () => import('./components/author/Editar.vue')

// componentes para author
const Mostrartype_material = () => import('./components/type_material/Mostrar.vue')
const Creartype_material = () => import('./components/type_material/Crear.vue')
const Editartype_material= () => import('./components/type_material/Editar.vue')

export const routes = [
    {
        name: 'home',
        path: '/',
        component: Home
    },
    {
        name: 'mostrarBlogs',
        path: '/blogs',
        component: Mostrar
    },
    {
        name: 'crearBlog',
        path: '/crear',
        component: Crear
    },
    {
        name: 'editarBlog',
        path: '/editar/:id',
        component: Editar
    },
    //rutas de los componentes de author
    {
        name: 'mostrarAuthor',
        path: '/author',
        component: MostrarA
    },
    {
        name: 'crearAuthor',
        path: '/crear',
        component: CrearA
    },
    {
        name: 'editarAuthor',
        path: '/editar/:id',
        component: EditarA
    },
//rutas de los componentes de tipo de material
{
    name: 'mostrartype_material',
    path: '/author',
    component: Mostrartype_material
},
{
    name: 'creartype_material',
    path: '/crear',
    component: Creartype_material
},
{
    name: 'editartype_material',
    path: '/editar/:id',
    component: Editartype_material
},
    // formulario contacto
     {
        name: 'contacto',
        path: '/contacto',
        component: Contacto
    }
]