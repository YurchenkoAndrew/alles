<div class="form-group row">
    <label for="inputTitle" class="col-sm-2 col-form-label">Заголовок блока</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="inputTitle" name="title" value="{{$whyAreWe->title}}" required>
        @error('title')<div class="alert alert-danger">{{$message}}</div>@enderror
    </div>
</div>
<div class="form-group row">
    <label for="inputSlogan" class="col-sm-2 col-form-label">Слоган блока</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="inputSlogan" name="slogan" value="{{$whyAreWe->slogan}}" required>
        @error('slogan')<div class="alert alert-danger">{{$message}}</div>@enderror
    </div>
</div>
<hr>
<div class="row">
    <div class="col-md">
        <div class="form-group">
            <label for="imageService1Old">Текущее изображение 1</label>
            <img style="width: 100%; max-width: 360px; max-height: 360px" src="{{asset($whyAreWe->image_service_1)}}"
                 alt="{{$whyAreWe->title_service_1}}" id="imageService1Old">
            <hr>
            <label for="imageService1">Выбрать изображение 1 <br> <span class="badge badge-danger">min = 200x200<br/>max = 360x360</span></label>
            <input type="file" class="form-control-file" id="imageService1" name="image_service_1">
            @error('image_service_1')<div class="alert alert-danger">{{$message}}</div>@enderror
        </div>
        <div class="form-group">
            <label for="inputTitleService1">Заголовок 1</label>
            <input type="text" class="form-control" id="inputTitleService1" name="title_service_1"
                   value="{{$whyAreWe->title_service_1}}" required>
            @error('title_service_1')<div class="alert alert-danger">{{$message}}</div>@enderror
        </div>
        <div class="form-group">
            <label for="inputDescriptionService1">Описание 1</label>
            <input type="text" class="form-control" id="inputDescriptionService1" name="description_service_1"
                   value="{{$whyAreWe->description_service_1}}" required>
            @error('description_service_1')<div class="alert alert-danger">{{$message}}</div>@enderror
        </div>
        <hr>
    </div>
    <div class="col-md">
        <div class="form-group">
            <label for="imageService2Old">Текущее изображение 2</label>
            <img style="width: 100%; max-width: 360px; max-height: 360px" src="{{asset($whyAreWe->image_service_2)}}"
                 alt="{{$whyAreWe->title_service_2}}" id="imageService2Old">
            <hr>
            <label for="imageService2">Выбрать изображение 2 <br> <span class="badge badge-danger">min = 200x200<br/>max = 360x360</span></label>
            <input type="file" class="form-control-file" id="imageService2" name="image_service_2">
            @error('image_service_2')<div class="alert alert-danger">{{$message}}</div>@enderror
        </div>
        <div class="form-group">
            <label for="inputTitleService2">Заголовок 2</label>
            <input type="text" class="form-control" id="inputTitleService2" name="title_service_2"
                   value="{{$whyAreWe->title_service_2}}" required>
            @error('title_service_2')<div class="alert alert-danger">{{$message}}</div>@enderror
        </div>
        <div class="form-group">
            <label for="inputDescriptionService2">Описание 2</label>
            <input type="text" class="form-control" id="inputDescriptionService2" name="description_service_2"
                   value="{{$whyAreWe->description_service_2}}" required>
            @error('description_service_2')<div class="alert alert-danger">{{$message}}</div>@enderror
        </div>
        <hr>
    </div>
    <div class="col-md">
        <div class="form-group">
            <label for="imageService3Old">Текущее изображение 3</label>
            <img style="width: 100%; max-width: 360px; max-height: 360px" src="{{asset($whyAreWe->image_service_3)}}"
                 alt="{{$whyAreWe->title_service_3}}" id="imageService3Old">
            <hr>
            <label for="imageService3">Выбрать изображение 3 <br> <span class="badge badge-danger">min = 200x200<br/>max = 360x360</span></label>
            <input type="file" class="form-control-file" id="imageService3" name="image_service_3">
            @error('image_service_3')<div class="alert alert-danger">{{$message}}</div>@enderror
        </div>
        <div class="form-group">
            <label for="inputTitleService3">Заголовок 3</label>
            <input type="text" class="form-control" id="inputTitleService3" name="title_service_3"
                   value="{{$whyAreWe->title_service_3}}" required>
            @error('title_service_3')<div class="alert alert-danger">{{$message}}</div>@enderror
        </div>
        <div class="form-group">
            <label for="inputDescriptionService3">Описание 3</label>
            <input type="text" class="form-control" id="inputDescriptionService3" name="description_service_3"
                   value="{{$whyAreWe->description_service_3}}" required>
            @error('description_service_3')<div class="alert alert-danger">{{$message}}</div>@enderror
        </div>
        <hr>
    </div>
</div>
<hr>
<div class="form-group row">
    <div class="col-sm-10">
        <button type="submit" class="btn btn-success">Сохранить</button>
    </div>
</div>
