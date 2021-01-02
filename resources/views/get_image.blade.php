@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Please upload image png Width : 740 px  , Height : 423 px</div>
                <div class="panel-body">
                    <div class="row">
                    <div class="col-md-8">

                    <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="{{ url('/storeimage') }}">
                        {{ csrf_field() }}
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
                        <div class="form-group{{ $errors->has('image') ? ' has-error' : "" }}">
                            <table class="table">
                                <tr>
                                    <td width="40%" align="right"><label>Select File for Upload</label></td>
                                    <td width="30"><input type="file" value="{{Request::old('image')}}" name="image" /></td>
                                </tr>
                                <tr>
                                    <td width="40%" align="right"></td>
                                    <td width="30"><span class="text-muted">jpg</span></td>
                                </tr>
                            </table>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn"></i> Upload
                                </button>
                            </div>
                        </div>
                    </form>
                    </div>
                        <div class="col-md-4">
                            <form class="form-horizontal" role="form" method="get"  action="{{ url('/export_ADS_Skoda') }}">
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fa fa-btn"></i>Export Data
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection
