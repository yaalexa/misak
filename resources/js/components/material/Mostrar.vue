<template>
    <div class="row">
        <div class="col-12 mb-2">
            <!-- llamamos al componente para Crear   -->
            <router-link :to='{name:"crearMaterial"}' class="btn btn-success"><i class="fas fa-plus-circle"></i></router-link>
        </div>
        <div class="col text-center">
               <h1> MATERIAL </h1>
            </div>
        <div class="col-12">             
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>ISBN</th>
                                    <th>AÑO</th>
                                    <th>NUMERO DE PAGINAS</th>
                                    <th>ARCHIVO PDF</th>
                                    <th>IMAGENES</th>
                                 
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="material in material" :key="material.id">
                                    <td>{{ material.id }}</td>
                                    <td>{{ material.name }}</td>
                                    <td>{{ material.isbn }}</td>
                                    <td>{{ material.anio }}</td>
                                    <td>{{ material.num_pages }}</td>
                                    <td>{{ material.pdf }}</td>
                                    <td>{{ material.imagenes }}</td>
                                    <td>
                                        <!-- llamamos al componente para Editar     -->
                                        <router-link :to='{name:"editarMaterial",params:{id:material.id}}' class="btn btn-info"><i class="fas fa-edit"></i></router-link>
                                        <a type="button" @click="borrarMaterial(material.id)" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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
    name:"material",
    data(){
        return {
            material:[]
        }
    },
    mounted(){
        this.mostrarMaterial()
    },
    methods:{
        async mostrarMaterial(){
            await this.axios.get('/api/material').then(response=>{
                this.material = response.data
            }).catch(error=>{
                console.log(error)
                this.material = []
            })
        },
        borrarMaterial(id){
            if(confirm("¿Confirma eliminar el Material seleccionado?")){
                this.axios.delete(`/api/material/${id}`).then(response=>{
                    this.mostrarMaterial()
                }).catch(error=>{
                    console.log(error)
                })
            }
        }
    }
}
</script>