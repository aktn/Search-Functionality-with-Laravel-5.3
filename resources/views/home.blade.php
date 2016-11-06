<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Search function with Laravel & vue.js !</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="well well-sm">

                <div class="alert alert-danger" role="alert" v-if="error">
                    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                    @{{ noResult }}
                </div>

                <div class="form-group">

                    <div class="input-group input-group-md">
                        <div class="icon-addon addon-md">
                            <input type="text" placeholder="Search here!" v-mode"query" class="form-control">
                        </div>

                        <span class="input-group-btn">
                            <button class="btn btn-default" v-if="!loading" type="button" @click="search()">Search Now</button>
                            <button class="btn btn-default" v-if="loading" disabled="disabled" type="button">Searching.....</button>
                        </span>

                    </div>
                </div>
            </div>
            <div id="products" class="row list-group">
            </div>
        </div>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/1.0.1/vue-resource.min.js"></script>
        <script src="/js/app.js"></script>
    </body>
</html>