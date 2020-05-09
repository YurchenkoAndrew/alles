{{--input title--}}
<div class="form-group row">
    <label for="inputTitle" class="col-sm-2 col-form-label">Заголовок</label>
    <div class="col-sm-10">
        <input type="text" name="title" class="form-control" id="inputTitle" value="{{$contact->title}}" required>
    </div>
</div>
{{--input description--}}
<div class="form-group row">
    <label for="inputDescription" class="col-sm-2 col-form-label">Описание</label>
    <div class="col-sm-10">
        <input type="text" name="description" class="form-control" id="inputDescription"
               value="{{$contact->description}}">
    </div>
</div>
{{--input address--}}
<div class="form-group row">
    <label for="inputAddress" class="col-sm-2 col-form-label">Адрес</label>
    <div class="col-sm-10">
        <input type="text" name="address" class="form-control" id="inputAddress"
               value="{{$contact->address}}" required>
    </div>
</div>
{{--input email--}}
<div class="form-group row">
    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
        <input type="email" name="email" class="form-control" id="inputEmail"
               value="{{$contact->email}}">
    </div>
</div>
{{--input phone_one--}}
<div class="form-group row">
    <label for="inputPhoneOne" class="col-sm-2 col-form-label">Телефон</label>
    <div class="col-sm-10">
        <input type="text" name="phone_one" class="form-control" id="inputPhoneOne"
               value="{{$contact->phone_one}}" required>
    </div>
</div>
{{--input phone_two--}}
<div class="form-group row">
    <label for="inputPhoneTwo" class="col-sm-2 col-form-label">Телефон</label>
    <div class="col-sm-10">
        <input type="text" name="phone_two" class="form-control" id="inputPhoneTwo"
               value="{{$contact->phone_two}}" required>
    </div>
</div>
{{--input facebook--}}
<div class="form-group row">
    <label for="inputFacebook" class="col-sm-2 col-form-label">Facebook</label>
    <div class="col-sm-10">
        <input type="text" name="facebook" class="form-control" id="inputFacebook"
               value="{{$contact->facebook}}">
    </div>
</div>
{{--input instagram--}}
<div class="form-group row">
    <label for="inputInstagram" class="col-sm-2 col-form-label">Instagram</label>
    <div class="col-sm-10">
        <input type="text" name="instagram" class="form-control" id="inputInstagram"
               value="{{$contact->instagram}}">
    </div>
</div>
{{--input vkontakte--}}
<div class="form-group row">
    <label for="inputVkontakte" class="col-sm-2 col-form-label">ВКонтакте</label>
    <div class="col-sm-10">
        <input type="text" name="vkontakte" class="form-control" id="inputVkontakte"
               value="{{$contact->vkontakte}}">
    </div>
</div>
{{--input odnoklassninki--}}
<div class="form-group row">
    <label for="inputOdnoklassninki" class="col-sm-2 col-form-label">Одноклассники</label>
    <div class="col-sm-10">
        <input type="text" name="odnoklassniki" class="form-control" id="inputOdnoklassninki"
               value="{{$contact->odnoklassniki}}">
    </div>
</div>


<div class="form-group row">
    <div class="col-sm-10">
        <button type="submit" class="btn btn-success">Сохранить</button>
    </div>
</div>
