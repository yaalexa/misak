<template>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header"><h4>Crear Nivel Educativo</h4></div>
                <div class="card-body">
                    <form @submit.prevent="crear">
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
    name:"crear-educational_level",
    data(){
        return {
            educational_level:{
                name:"",
            }
        }
    },
    methods:{
        async crear(){
            await this.axios.post('/api/educational_level',this.educational_level).then(response=>{
                this.$router.push({name:"mostrarEducational_level"})
            }).catch(error=>{
                console.log(error)
            })
        }
    }
}
</script>