<script>
export default {
    methods: {
        alert(text, tipe) {
            if (tipe === 1) {
                this.$swal({
                    title: "Succes",
                    text: text,
                    icon: "success"
                });
            } else if (tipe === 2) {
                this.$swal({
                    title: "Something Wrong",
                    text: text,
                    icon: "error"
                });
            } else if (tipe === 3) {
                this.$swal({
                    title: "Are you sure ?",
                    text: text,
                    icon: "warning",
                    buttons: ["Cancel", "Delete"],
                    dangerMode: true
                }).then(willDelete => {
                    if (willDelete) {
                        this.alert("Data has been deleted !", 1);
                    }
                });
            } else if (tipe === 4) {
                this.$swal({
                    title: "Are you sure ?",
                    text: text,
                    icon: "warning",
                    buttons: ["Cancel", "Update"],
                    dangerMode: false
                }).then(willDelete => {
                    if (willDelete) {
                        this.alert("Data has been deleted !", 1);
                    }
                });
            }
        }
    }
};
</script>