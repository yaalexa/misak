<template>
    <div class="row">
        <div class="col-12 mb-2">
            <!-- llamamos al componente para Crear   -->
            <router-link :to='{name:"crearAreas"}' class="btn btn-success"><i class="fas fa-plus-circle"></i></router-link>
        </div>
        <div class="col text-center">
               <h1> AREAS </h1>
            </div>
        <div class="col-12">             
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="areas in areas" :key="areas.id">
                                    <td>{{ areas.id }}</td>
                                    <td>{{ areas.name }}</td>
                                    
                                    <td>
                                        <!-- llamamos al componente para Editar     -->
                                        <router-link :to='{name:"editarAreas",params:{id:areas.id}}' class="btn btn-info"><i class="fas fa-edit"></i></router-link>
                                        <a type="button" @click="borrarAreas(areas.id)" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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
    name:"areas",
    data(){
        return {
            areas:[]
        }
    },
    mounted(){
        this.mostrarAreas()
    },
    methods:{
        async mostrarAreas(){
            await this.axios.get('/api/areas').then(response=>{
                this.areas = response.data
            }).catch(error=>{
                console.log(error)
                this.areas = []
            })
        },
        borrarAuthor(id){
            if(confirm("¿Confirma eliminar el registro?")){
                this.axios.delete(`/api/areas/${id}`).then(response=>{
                    this.mostrarAreas()
                }).catch(error=>{
                    console.log(error)
                })
            }
        }
    }
}
</script>