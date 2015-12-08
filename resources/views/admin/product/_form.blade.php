<div class="col-md-12">
    <label>Name</label>
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="col-md-12">
    <label>Description</label>
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>
<div class="col-md-12">
    <label>Price</label>
    {!! Form::text('price', null, ['class' => 'form-control']) !!}
</div>
<div class="col-md-12">
    <label>Featured</label>
    {!! Form::select('featured', ['Select', 'SIM', 'NÃO'], null, ['class' => 'form-control']) !!}
</div>
<div class="col-md-12">
    <label>Recommend</label>
    {!! Form::select('recommend', ['Select', 'SIM', 'NÃO'], null, ['class' => 'form-control']) !!}
</div>