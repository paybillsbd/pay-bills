
<div class="input-group select2-bootstrap-append">
	<select class="{{ $context }} form-control selectpicker" data-ajax--url="{{ $route }}" data-ajax--cache="true">
	  <!-- <option value="0">I want to pay bills of ...</option> -->
	</select>
	<span class="input-group-btn">
		<button class="btn btn-default" type="button">@include('icons.glyphicon', [ 'name' => 'search' ])</button>
	</span>
</div>