<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-M8J4SNB');</script>
    <!-- End Google Tag Manager -->
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Including css file -->
    <link rel="stylesheet" href="{{asset('public/css/style.css')}}">
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M8J4SNB"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="page-full">
    <div class="row" style="margin: 0px">
        <div class="col-md-5 form-col" style="direction: ltr">
            @if(count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if(session()->has('message'))
                <div class="alert alert-success" align="center">
                    {{ session()->get('message') }}
                </div>
            @elseif(session()->has('message_fales'))
                <div class="alert alert-danger" align="center">
                    {{ session()->get('message_fales') }}
                </div>
            @endif
            <div class="form-content">
                <form id="create" action="{{url('store')}}" method="POST">
                    <h1 class="formtitle">How can we help you?</h1>

                    {{csrf_field()}}
                    <div class="row" >
                        <div class="col-md-6"> <div class="form-group{{ $errors->has('first_name') ? ' has-error' : "" }}">
                                <input type="text" style="-webkit-appearance: none;" name="first_name" class="form-control form-input" value="{{Request::old('first_name')}}"
                                       placeholder="First Name">
                            </div></div>
                        <div class="col-md-6"> <div class="form-group{{ $errors->has('last_name') ? ' has-error' : "" }}">
                                <input type="text" style="-webkit-appearance: none;" name="last_name" class="form-control form-input"
                                       value="{{Request::old('last_name')}}" placeholder="Last Name">
                            </div></div>
                    </div>
                    <div class="row" >
                        <div class="col-md-6"> <div class="form-group{{ $errors->has('email') ? ' has-error' : "" }}">
                                <input type="email" style="-webkit-appearance: none;" name="email" class="form-control form-input" value="{{Request::old('email')}}"
                                       placeholder="Email">
                            </div></div>
                        <div class="col-md-6"> <div class="form-group{{ $errors->has('mobile') ? ' has-error' : "" }}">
                                <input type="number" style="-webkit-appearance: none;" name="mobile" class="form-control form-input"
                                       value="{{Request::old('mobile')}}" placeholder="Mobile">
                            </div></div>
                    </div>


                    <div  class="form-group{{ $errors->has('city') ? ' has-error' : "" }}">
                        <div class="ques" >City/ Governorate</div>
                        <select id="city" name="city" class="form-control form-input classic">
                            <option value="" selected disabled>select</option>
                            <option value="Cairo">Cairo</option>
                            <option value="Giza">Giza</option>
                            <option value="Alex">Alex</option>
                            <option value="Mansoura">Mansoura</option>
                            <option value="Delta Region">Delta Region</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                    <div  class="form-group{{ $errors->has('car_model') ? ' has-error' : "" }}">
                        <div class="ques" >Car Model</div>
                        <select id="car_model" name="car_model" class="form-control form-input classic">
                            <option value="" selected disabled>select</option>
                            <option value="Kodiaq">Kodiaq</option>
                            <option value="Karoq">Karoq</option>
                            <option value="Octavia">Octavia</option>
                            <option value="Superb">Superb</option>
                        </select>
                    </div>
                    <div  class="form-group{{ $errors->has('kind_request') ? ' has-error' : "" }}">
                        <div class="ques" >Request To</div>
                        <select id="kind_request" name="kind_request" class="form-control form-input classic">
                            <option value="" selected disabled>select</option>
                            <option value="Book Test Drive">Book Test Drive</option>
                            <option value="Receive Sales Call"> Receive Sales Call</option>
                        </select>
                    </div>
                    <br>
                    <button type="submit" class="btn submit-btn">submit</button>
                </form>
            </div>
        </div>
        <div class="col-md-7">
            <img class="image_ads" src="{{asset('public/Imgs/skoda.png')}}" style="width: 100%;height: 100%">
        </div>
    </div>
</div>
</body>
<!-- these files must included here (header won't work correctly if not!) -->
<script src="{{asset('public/Files/jquery.min.js')}}"></script>
<script src="{{asset('public/Files/popper.min.js')}}"></script>
<script src="{{asset('public/Files/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('public/vendor/jsvalidation/js/jsvalidation.js')}}"></script>
{!! JsValidator::formRequest('App\Http\Requests\SkodaADSCreateRequest','#create') !!}

</html>