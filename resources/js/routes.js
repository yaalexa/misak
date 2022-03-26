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
// componentes para areas
const MostrarAreas = () => import('./components/areas/Mostrar.vue')
const CrearAreas= () => import('./components/areas/Crear.vue')
const EditarAreas= () => import('./components/areas/Editar.vue')
// componentes para editorial
const MostrarEditorial = () => import('./components/editorial/Mostrar.vue')
const CrearEditorial= () => import('./components/editorial/Crear.vue')
const EditarEditorial= () => import('./components/editorial/Editar.vue')
// componentes para editorial
const MostrarEducational_level = () => import('./components/educational_level/Mostrar.vue')
const CrearEducational_level= () => import('./components/educational_level/Crear.vue')
const EditarEducational_level= () => import('./components/educational_level/Editar.vue')
// componentes para tipo de materiales
const MostrarType_material = () => import('./components/type_material/Mostrar.vue')
const CrearType_material= () => import('./components/type_material/Crear.vue')
const EditarType_material= () => import('./components/type_material/Editar.vue')
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
    //rutas de los componentes de tipo de areas
{
    name: 'mostrarAreas',
    path: '/areas',
    component: MostrarAreas
},
{
    name: 'crearAreas',
    path: '/crear',
    component: CrearAreas
},
{
    name: 'editarAreas',
    path: '/editar/:id',
    component: EditarAreas
},
     //rutas de los componentes de tipo de editorial
{
    name: 'mostrarEditorial',
    path: '/editorial',
    component: MostrarEditorial
},
{
    name: 'crearEditorial',
    path: '/crear',
    component: CrearEditorial
},
{
    name: 'editarEditorial',
    path: '/editar/:id',
    component: EditarEditorial
},
 //rutas de los componentes nivel educativo
 {
    name: 'mostrarEducational_level',
    path: '/educational_level',
    component: MostrarEducational_level
},
{
    name: 'crearEducational_level',
    path: '/crear',
    component: CrearEducational_level
},
{
    name: 'editarEducational_level',
    path: '/editar/:id',
    component: EditarEducational_level
},
//rutas de los componentes tipo de componentes
{
    name: 'MostrarType_material',
    path: '/type_material',
    component: MostrarType_material
},
{
    name: 'crearType_material',
    path: '/crear',
    component: CrearType_material
},
{
    name: 'editarType_material',
    path: '/editar/:id',
    component: EditarType_material
},
    // formulario contacto
     {
        name: 'contacto',
        path: '/contacto',
        component: Contacto
    }
]