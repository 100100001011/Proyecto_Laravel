<template>
    <input
        type="submit"
        class="btn btn-danger d-block w-100 mb-1"
        value="Eliminar"
        v-on:click="eliminarDepartamento"
    />
</template>

<script>
export default {
    props: ["departamentoId"],
    mounted() {
        console.log("departamento actual", this.departamentoId);
    },
    methods: {
        eliminarDepartamento() {
            this.$swal({
                title: "Desea elimianr el departamento?",
                text: "Una vez eliminado no se puede recuperar!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Si",
                cancelButtonText: "No",
            }).then((result) => {
                if (result.isConfirmed) {
                    const params = {
                        id: this.departamentoId,
                    };
                    axios
                        .post(`/proyecto/${this.departamentoId}`, {
                            params,
                            _method: "delete ",
                        })
                        .then((respuesta) => {
                            console.log(respuesta);
                            this.$swal({
                                title: "Departamento Eliminada!",
                                text: "Se ha eliminado la Departamento",
                                icon: "success",
                            });
                            //ELIMINAR  DE LA VISTA
                            this.$el.parentNode.parentNode.parentNode.removeChild(
                                this.$el.parentNode.parentNode
                            );
                        })
                        .catch((error) => {
                            console.log(error);
                        });
                }
            });
        },
    },
};
</script>
