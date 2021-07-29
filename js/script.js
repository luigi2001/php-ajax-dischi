var app = new Vue(
    {
        el: '#app',
        data: {
            url: window.location.href + '/../db/api.php',
            music: ''
        },
        mounted(){
            axios
                 .get(this.url)
                 .then(risposta => {
                     this.music = risposta.data;
                 })
                 .catch(error =>{
                     console.log(error);
                 });
        }
    }
);