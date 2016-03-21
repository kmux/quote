<form action="{{ url('/quote') }}" method="post" class="quote-form">
    {!! csrf_field(); !!}
    <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
        <label for="username">Your name:</label>
        <input type="text" name="username" id="username" class="form-control" value="{{ old('username') }}">

        @if($errors->has('username'))
            <span class="error-block">
                {{ $errors->first('username') }}
            </span>
        @endif
    </div>
    <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
        <label for="title">The quote:</label>
        <textarea name="title" id="title" class="form-control" rows="5">{{ old('title') }}</textarea>

        @if($errors->has('title'))
            <span class="error-block">
                {{ $errors->first('title') }}
            </span>
        @endif
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-info">Save quote</button>
    </div>
</form>