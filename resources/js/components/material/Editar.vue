<template>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header"><h4>Editar Material</h4></div>
                <div class="card-body">
                    <form @submit.prevent="actualizar">
                         <div class="row">
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>NOMBRE</label>
                                    <input type="text" class="form-control" v-model="material.name">
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>ISBN</label>
                                    <input type="text" class="form-control" v-model="material.isbn">
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>AÑO</label>
                                    <input type="text" class="form-control" v-model="material.anio">
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>NUMERO DE PAGINAS</label>
                                    <input type="text" class="form-control" v-model="material.num_pages">
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>ARCHIVO PDF</label>
                                    <input type="text" class="form-control" v-model="material.pdf">
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>IMAGENES</label>
                                    <input type="text" class="form-control" v-model="material.imagenes">
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>PRIORIDAD</label>
                                    <input type="text" class="form-control" v-model="material.prioridad">
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>                          
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name:"editar-material",
    data(){
        return {
            material:{
                name:"",
            }
        }
    },
    mounted(){
        this.mostrarMaterial()
    },
    methods:{
        async mostrarMaterial(){
            await this.axios.get(`/api/material/${this.$route.params.id}`).then(response=>{
                const { name} = response.data
                this.material.name = name
               
            }).catch(error=>{
                console.log(error)
            })
        },
        async actualizar(){
            await this.axios.put(`/api/material/${this.$route.params.id}`,this.material).then(response=>{
                this.$router.push({name:"mostrarMaterial"})
            }).catch(error=>{
                console.log(error)
            })
        }
    }
}
</script>