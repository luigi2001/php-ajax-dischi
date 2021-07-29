<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="css/style.css">
    <title> dischi </title>
</head>
<body>
    <div id="app">
    <header>
        <img src="https://cdn.smehost.net/michaeljacksoncom-uslegacyprod/wp-content/uploads/2016/01/michael-jackson20091.png" alt="Michael Jackson">
        <h1>Michael Jackson - official web site</h1>
    </header>
    <main>
        <h2>Alcuni dei sui dischi più venduti e più famosi:</h2>
        <div class="container">
            <div class="row">
                <div class="box" v-for="dischi in music">
                    <img :src="dischi.poster" :alt="dischi.title">
                    <h2> {{dischi.title}} </h2>
                    <h3> {{dischi.author}} </h3>
                    <h4> {{dischi.year}} </h4>
                </div>
            </div>
        </div>
    </main>
    </div>
    <script src="js/script.js"></script>
</body>
</html>