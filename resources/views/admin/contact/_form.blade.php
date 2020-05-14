{{--input title--}}
<div class="form-group row">
    <label for="inputTitle" class="col-sm-2 col-form-label">Заголовок</label>
    <div class="col-sm-10">
        <input type="text" name="title" class="form-control" id="inputTitle" value="{{old('title') ?? $contact->title}}" required>
        @error('title')<div class="alert alert-danger">{{$message}}</div>@enderror
    </div>
</div>
{{--input description--}}
<div class="form-group row">
    <label for="inputDescription" class="col-sm-2 col-form-label">Описание</label>
    <div class="col-sm-10">
        <input type="text" name="description" class="form-control" id="inputDescription"
               value="{{old('description') ?? $contact->description}}">
        @error('description')<div class="alert alert-danger">{{$message}}</div>@enderror
    </div>
</div>
{{--input address--}}
<div class="form-group row">
    <label for="inputAddress" class="col-sm-2 col-form-label">Адрес</label>
    <div class="col-sm-10">
        <input type="text" name="address" class="form-control" id="inputAddress"
               value="{{old('address') ?? $contact->address}}" required>
        @error('address')<div class="alert alert-danger">{{$message}}</div>@enderror
    </div>
</div>
{{--input email--}}
<div class="form-group row">
    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
        <input type="email" name="email" class="form-control" id="inputEmail"
               value="{{old('email') ?? $contact->email}}">
        @error('email')<div class="alert alert-danger">{{$message}}</div>@enderror
    </div>
</div>
{{--input phone_one--}}
<div class="form-group row">
    <label for="inputPhoneOne" class="col-sm-2 col-form-label">Телефон</label>
    <div class="col-sm-10">
        <input type="text" name="phone_one" class="form-control" id="inputPhoneOne"
               value="{{old('phone_one') ?? $contact->phone_one}}" required>
        @error('phone_one')<div class="alert alert-danger">{{$message}}</div>@enderror
    </div>
</div>
{{--input phone_two--}}
<div class="form-group row">
    <label for="inputPhoneTwo" class="col-sm-2 col-form-label">Телефон</label>
    <div class="col-sm-10">
        <input type="text" name="phone_two" class="form-control" id="inputPhoneTwo"
               value="{{old('phone_two') ?? $contact->phone_two}}" required>
        @error('phone_two')<div class="alert alert-danger">{{$message}}</div>@enderror
    </div>
</div>
{{--input facebook--}}
<div class="form-group row">
    <label for="inputFacebook" class="col-sm-2 col-form-label">Facebook</label>
    <div class="col-sm-10">
        <input type="text" name="facebook" class="form-control" id="inputFacebook"
               value="{{old('facebook') ?? $contact->facebook}}">
        @error('facebook')<div class="alert alert-danger">{{$message}}</div>@enderror
    </div>
</div>
{{--input instagram--}}
<div class="form-group row">
    <label for="inputInstagram" class="col-sm-2 col-form-label">Instagram</label>
    <div class="col-sm-10">
        <input type="text" name="instagram" class="form-control" id="inputInstagram"
               value="{{old('instagram') ?? $contact->instagram}}">
        @error('instagram')<div class="alert alert-danger">{{$message}}</div>@enderror
    </div>
</div>
{{--input vkontakte--}}
<div class="form-group row">
    <label for="inputVkontakte" class="col-sm-2 col-form-label">ВКонтакте</label>
    <div class="col-sm-10">
        <input type="text" name="vkontakte" class="form-control" id="inputVkontakte"
               value="{{old('vkontakte') ?? $contact->vkontakte}}">
        @error('vkontakte')<div class="alert alert-danger">{{$message}}</div>@enderror
    </div>
</div>
{{--input odnoklassninki--}}
<div class="form-group row">
    <label for="inputOdnoklassninki" class="col-sm-2 col-form-label">Одноклассники</label>
    <div class="col-sm-10">
        <input type="text" name="odnoklassniki" class="form-control" id="inputOdnoklassninki"
               value="{{old('odnoklassniki') ?? $contact->odnoklassniki}}">
        @error('odnoklassniki')<div class="alert alert-danger">{{$message}}</div>@enderror
    </div>
</div>


<div class="form-group row">
    <div class="col-sm-10">
        <button type="submit" class="btn btn-success">Сохранить</button>
    </div>
</div>
