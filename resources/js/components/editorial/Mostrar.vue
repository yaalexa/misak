<template>
    <div class="row">
        <div class="col-12 mb-2">
            <!-- llamamos al componente para Crear   -->
            <router-link :to='{name:"crearEditorial"}' class="btn btn-success"><i class="fas fa-plus-circle"></i></router-link>
        </div>
        <div class="col text-center">
               <h1> EDITORIALES </h1>
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
                                <tr v-for="editorial in editorial" :key="editorial.id">
                                    <td>{{ editorial.id }}</td>
                                    <td>{{ editorial.name }}</td>
                                    
                                    <td>
                                        <!-- llamamos al componente para Editar     -->
                                        <router-link :to='{name:"editarEditorial",params:{id:editorial.id}}' class="btn btn-info"><i class="fas fa-edit"></i></router-link>
                                        <a type="button" @click="borrarEditorial(editorial.id)" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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
    name:"editorial",
    data(){
        return {
            editorial:[]
        }
    },
    mounted(){
        this.mostrarEditorial()
    },
    methods:{
        async mostrarEditorial(){
            await this.axios.get('/api/editorial').then(response=>{
                this.editorial = response.data
            }).catch(error=>{
                console.log(error)
                this.areas = []
            })
        },
        borrarEditorial(id){
            if(confirm("¿Confirma eliminar el registro?")){
                this.axios.delete(`/api/editorial/${id}`).then(response=>{
                    this.mostrarEditorial()
                }).catch(error=>{
                    console.log(error)
                })
            }
        }
    }
}
</script>