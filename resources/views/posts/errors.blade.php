@if(count($errors))
                <div class="form-group">
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                        <li>
                            {{$error}}
                        </li>
                        @endforeach
                    </div>
                </div>
@endif

@if(session('success'))
<div class="alert alert-success alert-dismissible">
    <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    {{session('success')}}
</div>
@endif
@if(session('error'))
<div class="alert alert-danger alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    {{session('error')}}
</div>
@endif