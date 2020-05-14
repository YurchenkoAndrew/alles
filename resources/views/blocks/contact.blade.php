<div
    @foreach ($block as $item)
    @if ($item->id == 8)
    id="{{$item->slug}}"
    @endif
    @endforeach class="contact">
    <div class="section secondary-section">
        <div class="container">
            <div class="title">
                <h1>{{$contact->title}}</h1>
                <p>{{$contact->description}}</p>
            </div>
        </div>
        <div class="map-wrapper">
            <div class="map-canvas">
                <div style="width: 100%; height: 100%; background:rgba(0,0,0,0.25); position: absolute"></div>
                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ad8b0f9f13e1d33870491a187a965b185733db68fc2b755707b2b4acd9b65c99e&amp;source=constructor" width="100%" height="500" frameborder="0"></iframe>
            </div>
            <div class="container">
                <div class="row-fluid">
                    <div class="span5 contact-form centered">
                        <h3>Обратная связь</h3>
                        <div id="successSend" class="alert alert-success invisible">
                            <strong>Well done!</strong>Your message has been sent.
                        </div>
                        <div id="errorSend" class="alert alert-error invisible">There was an error.</div>
                        <form action="{{route('send-mail')}}" method="post">
                            {{@csrf_field()}}
                            <div class="control-group">
                                <div class="controls">
                                    <input class="span12" type="text" id="name" name="name"
                                           placeholder="* Ваше имя..." required/>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls">
                                    <input class="span12" type="email" name="email" id="email"
                                           placeholder="* Ваш email..." required/>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls">
                                        <textarea class="span12" name="comment" id="comment"
                                                  placeholder="* Комментарий..." required></textarea>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls">
                                    <button type="submit" class="message-btn">Отправить сообщение</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="span9 center contact-info">
                <p>{{$contact->address}}</p>
                @if ($contact->email != null)
                    <p class="info-mail">{{$contact->email}}</p>
                @endif
                <p>{{$contact->phone_one}}</p>
                @if ($contact->phone_two != null)
                    <p>{{$contact->phone_two}}</p>
                @endif
                <div class="title">
                    <h3>Мы в соц сетях</h3>
                </div>
            </div>
            <div class="row-fluid centered">
                <ul class="social">
                    @if ($contact->facebook != null)
                        <li>
                            <a href="{{$contact->facebook}}" target="_blank">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </li>
                    @endif
                    @if ($contact->instagram != null)
                        <li>
                            <a href="{{$contact->instagram}}" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                    @endif
                    @if ($contact->vkontakte != null)
                        <li>
                            <a href="{{$contact->vkontakte}}" target="_blank">
                                <i class="fab fa-vk"></i>
                            </a>
                        </li>
                    @endif
                    @if ($contact->odnoklassniki != null)
                        <li>
                            <a href="{{$contact->odnoklassniki}}" target="_blank">
                                <i class="fab fa-odnoklassniki"></i>
                            </a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>
