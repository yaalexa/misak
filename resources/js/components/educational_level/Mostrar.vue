<template>
    <div class="row">
        <div class="col-12 mb-2">
            <!-- llamamos al componente para Crear   -->
            <router-link :to='{name:"crearEducational_level"}' class="btn btn-success"><i class="fas fa-plus-circle"></i></router-link>
        </div>
        <div class="col text-center">
               <h1> NIVEL DE EDUCACION </h1>
            </div>
        <div class="col-12">             
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                 
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="educational_level in educational_level" :key="educational_level.id">
                                    <td>{{ educational_level.id }}</td>
                                    <td>{{ educational_level.name }}</td>
                                    <td>
                                        <!-- llamamos al componente para Editar     -->
                                        <router-link :to='{name:"editarEducational_level",params:{id:educational_level.id}}' class="btn btn-info"><i class="fas fa-edit"></i></router-link>
                                        <a type="button" @click="borrarEducational_level(educational_level.id)" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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
    name:"educational_level",
    data(){
        return {
            educational_level:[]
        }
    },
    mounted(){
        this.mostrarEducational_level()
    },
    methods:{
        async mostrarEducational_level(){
            await this.axios.get('/api/educational_level').then(response=>{
                this.educational_level = response.data
            }).catch(error=>{
                console.log(error)
                this.educational_level = []
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