<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminPanel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>

<div class="py-4">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-12">
                <h1>Добавить баннер</h1>
                <form method="POST" enctype="multipart/form-data"
                      action="{{route('admin.banners.store')}}"
                >
                    @csrf
                    <br>
                    <div class="input-group row">
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="title" id="title"
                                   value="{{old('name')}}" placeholder="Название">
                        </div>
                        @error('title')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <br>
                    <div class="input-group row">
                        <div class="col-sm-6">
                            <textarea name="description" id="description" cols="72" rows="7"
                                      placeholder="Описание">{{old('description')}}</textarea>
                        </div>
                        @error('description')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <br>
                    <div class="input-group row">
                        <label for="image" class="col-sm-2 col-form-label">Картинка: </label>
                        <div class="col-sm-10">
                            <label class="btn btn-outline-dark btn-file">
                                Загрузить <input type="file" name="image" style="display: none;" name="image"
                                                 id="image">
                            </label>
                        </div>
                    </div>
                    @error('image')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                    <br>
                    <button class="btn btn-success">Сохранить</button>

                </form>
            </div>
        </div>
    </div>

{{--                        <div class="input-group row">--}}
{{--                            <label for="count" class="col-sm-2 col-form-label">Кол-во: </label>--}}
{{--                            <div class="col-sm-2">--}}
{{--                                <input type="text" class="form-control" name="count" id="count"--}}
{{--                                       value="">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <br>--}}
{{--                        <div class="form-group row">--}}
{{--                            <label for="code" class="col-sm-2 col-form-label">Хит: </label>--}}
{{--                            <div class="col-sm-10">--}}
{{--                                <input type="checkbox" name="hit" id="hit"--}}
{{--                                >--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <br>--}}
{{--                        <div class="form-group row">--}}
{{--                            <label for="code" class="col-sm-2 col-form-label">Новинка: </label>--}}
{{--                            <div class="col-sm-10">--}}
{{--                                <input type="checkbox" name="new" id="new"--}}
{{--                                >--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <br>--}}
{{--                        <div class="form-group row">--}}
{{--                            <label for="code" class="col-sm-2 col-form-label">Рекомендуемые: </label>--}}
{{--                            <div class="col-sm-10">--}}
{{--                                <input type="checkbox" name="recommend" id="recommend"--}}
{{--                                >--}}
{{--                            </div>--}}
{{--                        </div>--}}


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>

</html>
