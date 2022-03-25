<template>
    <div class="row">
        <div class="col-12 mb-2">
            <!-- llamamos al componente para Crear   -->
            <router-link :to='{name:"creartype_material"}' class="btn btn-success"><i class="fas fa-plus-circle"></i></router-link>
        </div>
        <div class="col text-center">
               <h1> TIPOS DE MATERIAL </h1>
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
                                <tr v-for="type_material in type_material" :key="type_material.id">
                                    <td>{{ type_material.id }}</td>
                                    <td>{{ type_material.name }}</td>
                                    
                                    <td>
                                        <!-- llamamos al componente para Editar     -->
                                        <router-link :to='{name:"editartype_material",params:{id:type_material.id}}' class="btn btn-info"><i class="fas fa-edit"></i></router-link>
                                        <a type="button" @click="borrartype_material(type_material.id)" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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
    name:"type_material",
    data(){
        return {
            type_material:[]
        }
    },
    mounted(){
        this.mostrartype_material()
    },
    methods:{
        async mostrartype_material(){
            await this.axios.get('/api/type_material').then(response=>{
                this.type_material = response.data
            }).catch(error=>{
                console.log(error)
                this.type_material = []
            })
        },
        borrartype_material(id){
            if(confirm("¿Confirma eliminar el registro?")){
                this.axios.delete(`/api/type_material/${id}`).then(response=>{
                    this.mostrartype_material()
                }).catch(error=>{
                    console.log(error)
                })
            }
        }
    }
}
</script>