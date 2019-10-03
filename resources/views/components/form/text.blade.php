<div class="form-group">
    {{ Form::label($name, null, ['class' => 'form-text']) }}
    {{ Form::text($name, $value, array_merge(['class' => 'form-control'], $attributes)) }}
</div>