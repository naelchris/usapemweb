<div class="form-group {{$errors->has('name') ? 'has-error' : ''}}">
{{Form::label('product_name','Product Name')}}
{{Form::text('name','',['class'=>'form-control border-input ','placeholder'=>'table,etc'])}}
<span class="text-danger">{{$errors->has('name')?$errors->first('name'):''}}</span>
</div>


<div class="form-group {{$errors->has('name')? 'has-error': ''}}">
{{Form::label('price','Price')}}
{{Form::text('price','',['class'=>'form-control border-input','placeholder'=>'$2500'])}}
<span class="text-danger">{{$errors->has('name')?$errors->first('price'):''}}</span>

</div>

<div class="form-group {{$errors->has('name')? 'has-error': ''}}">
{{Form::label('description','Product Description')}}
{{Form::textarea('description','',['class'=>'form-control border-input','placeholder'=>'Product Description'])}}
<span class="text-danger">{{$errors->has('name')?$errors->first('description'):''}}</span>

</div>

<div class="form-group {{$errors->has('name')? 'has-error': ''}}">
{{Form::label('file','File')}}
{{Form::file('image',['class'=>'form-control border-input','id'=>'file-input'])}}
<div id="thumb-output"></div>
<span class="text-danger">{{$errors->has('name')?$errors->first('file'):''}}</span>
</div>