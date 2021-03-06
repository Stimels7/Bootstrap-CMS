{{ Form::open(array('url' => $form['url'], 'method' => $form['method'], 'class' => 'form-horizontal')) }}

    <div class="control-group{{ ($errors->has('first_name')) ? ' error' : '' }}">
        <label class="control-label" for="first_name">First Name</label>
        <div class="controls">
            <input name="first_name" id="first_name" value="{{ Request::old('first_name', $form['defaults']['first_name']) }}" type="text" class="input-xlarge" placeholder="First Name">
            {{ ($errors->has('first_name') ? $errors->first('first_name') : '') }}
        </div>
    </div>

    <div class="control-group{{ ($errors->has('last_name')) ? ' error' : '' }}">
        <label class="control-label" for="last_name">Last Name</label>
        <div class="controls">
            <input name="last_name" id="last_name" value="{{ Request::old('last_name', $form['defaults']['last_name']) }}" type="text" class="input-xlarge" placeholder="Last Name">
            {{ ($errors->has('last_name') ? $errors->first('last_name') : '') }}
        </div>
    </div>

    <div class="control-group{{ ($errors->has('email')) ? ' error' : '' }}">
        <label class="control-label" for="email">Email</label>
        <div class="controls">
            <input name="email" id="email" value="{{ Request::old('email', $form['defaults']['email']) }}" type="text" class="input-xlarge" placeholder="Email">
            {{ ($errors->has('email') ? $errors->first('email') : '') }}
        </div>
    </div>

    @foreach ($groups as $group)
        <div class="control-group">
            <label class="control-label" for="email">{{ $group->name }}</label>
            <div class="controls">
                <div class="make-switch" data-on-label="<i class='icon-ok icon-white'></i>" data-off-label="<i class='icon-remove'>">
                    <input name="group_{{ $group->id }}" id="group_{{ $group->id }}" type="checkbox"{{ (Request::old('group_'.$group->id, $form['defaults']['group_'.$group->id]) == true) ? ' checked' : '' }}>
                </div>
            </div>
        </div>
    @endforeach

    <div class="form-actions">
        <button class="btn btn-primary" type="submit"><i class="icon-rocket"></i> {{ $form['button'] }}</button>
    </div>
{{ Form::close() }}
