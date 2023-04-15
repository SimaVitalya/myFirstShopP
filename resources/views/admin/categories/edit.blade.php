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
                <h1>Редактировать Категорию</h1>

                <form method="POST" enctype="multipart/form-data"
                      action="{{route('admin.categories.update',$category->id)}}"
                > @method('PATCH')
                    @csrf
                    <div>
                        <div class="input-group row">
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="code" id="code"
                                       value="{{$category->code}}" placeholder="Код">
                                @error('code')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="input-group row">
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="name" id="name"
                                       value="{{$category->name}}" PLACEHOLDER="Название">
                            </div>
                            @error('name')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <br>
                        <div class="input-group row">
                            <div class="col-sm-6">
                                <textarea name="description" id="description" cols="72" rows="7"
                                          placeholder="Описание">{{$category->description}}</textarea>
                                @error('description')
                                <div class="text-danger">{{$message}}</div>
                                @enderror

                            </div>
                            <div>
                                <img src="{{Storage::url($category->image)}}"
                                height="300px" ></td>
                            </div>
                        </div>
                        <br>
                        <div class="input-group row">
                            <label for="image" class="col-sm-2 col-form-label">Картинка: </label>
                            <div class="col-sm-10">
                                <label class="btn btn- btn-file">
                                    Загрузить <input type="file" style="display: none;" name="image" id="image">
                                </label>

                            </div>

                            @error('image')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <button class="btn btn-success">Сохранить</button>
                    </div>
                </form>
            </div>
        </div>
        <a  href="{{route('admin.categories.index')}}" class="btn btn-outline-dark mt-3">Перейти ко всем категория</a>

    </div>

</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>

</html>
