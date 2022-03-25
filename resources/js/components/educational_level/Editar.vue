<template>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header"><h4>Editar NIVEL DE EDUCACION</h4></div>
                <div class="card-body">
                    <form @submit.prevent="actualizar">
                         <div class="row">
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>NOMBRE</label>
                                    <input type="text" class="form-control" v-model="educational_level.name">
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
    name:"editar-educational_level",
    data(){
        return {
            educational_level:{
                name:"",
            }
        }
    },
    mounted(){
        this.mostrarEducational_level()
    },
    methods:{
        async mostrarEducational_level(){
            await this.axios.get(`/api/educational_level/${this.$route.params.id}`).then(response=>{
                const { name} = response.data
                this.educational_level.name = name
               
            }).catch(error=>{
                console.log(error)
            })
        },
        async actualizar(){
            await this.axios.put(`/api/educational_level/${this.$route.params.id}`,this.educational_level).then(response=>{
                this.$router.push({name:"mostrarEducational_level"})
            }).catch(error=>{
                console.log(error)
            })
        }
    }
}
</script>