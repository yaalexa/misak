<template>
    <div class="row">
        <div class="col-12 mb-2">
            <!-- llamamos al componente para Crear   -->
            <router-link :to='{name:"crearAuthor"}' class="btn btn-success"><i class="fas fa-plus-circle"></i></router-link>
        </div>
        <div class="col text-center">
               <h1> AUTORES </h1>
            </div>
        <div class="col-12">             
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Direccion</th>
                                    <th>Telefono</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="author in author" :key="author.id">
                                    <td>{{ author.id }}</td>
                                    <td>{{ author.name }}</td>
                                    <td>{{ author.address }}</td>
                                    <td>{{ author.phone }}</td>
                                    <td>
                                        <!-- llamamos al componente para Editar     -->
                                        <router-link :to='{name:"editarAuthor",params:{id:author.id}}' class="btn btn-info"><i class="fas fa-edit"></i></router-link>
                                        <a type="button" @click="borrarAuthor(author.id)" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                            
                        </table>
                    </div>                          
        </div>
    </div>
</template>

<script>
export default {
    name:"author",
    data(){
        return {
            author:[]
        }
    },
    mounted(){
        this.mostrarAuthor()
    },
    methods:{
        async mostrarAuthor(){
            await this.axios.get('/api/author').then(response=>{
                this.author = response.data
            }).catch(error=>{
                console.log(error)
                this.author = []
            })
        },
        borrarAuthor(id){
            if(confirm("¿Confirma eliminar el registro?")){
                this.axios.delete(`/api/author/${id}`).then(response=>{
                    this.mostrarAuthor()
                }).catch(error=>{
                    console.log(error)
                })
            }
        }
    }
}
</script>