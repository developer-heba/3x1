<div class="form-group"  @if($data['validation']) :class="{'has-danger': errors.has('{{ $data['name'] }}'), 'has-success': fields.{{ $data['name'] }} && fields.{{ $data['name'] }}.valid }" @endif>
    <input class="form-check-input" type="checkbox"  @if($data['custom']) @if($data['model']) v-model="{{ $data['model ']}}" @endif @else v-model="form.{{ $data['name'] }}" @endif @if($data['validation']) v-validate="'{{$data['validation']}}'" @input="validate($event)" @endif data-vv-name="{{ $data['name'] }}"  @if($data['custom']) @if($data['id']) id="{{ $data['id']}}" @endif @else id="{{$data['name']}}" @endif name="{{ $data['name'] }}" >
    <label class="form-check-label" for="{{ $data['name'] }}">
        {{$data['label']}}
    </label>
    <input type="hidden" name="{{ $data['name'] }}" :value="form.{{ $data['name'] }}">
    @if($data['validation']) <div v-if="errors.has('{{ $data['name'] }}')" class="invalid-feedback" v-cloak>{{'@{{'}} errors.first('{{ $data['name'] }}') }}</div> @endif
</div>