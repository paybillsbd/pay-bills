<form>
  <div class="row text-left">
      <div class="col-md-6">
      <label class="custom-control custom-radio">
        <input id="radio1" name="radio" type="radio" class="custom-control-input">
        <span class="custom-control-indicator"></span>
        <span class="custom-control-description">Prepaid</span>
      </label>
      </div>
      <div class="col-md-6">                                    
          <label class="custom-control custom-radio">
            <input id="radio2" name="radio" type="radio" class="custom-control-input">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">Postpaid</span>
          </label>
      </div>
  </div>
  <br>
  <div class="row">
  
    <div class="col-md-6">
      <input required type="text"
      pattern="^(?:\+?88)?01[15-9]\d{8}$" class="form-control" id="formGroupExampleInput2" placeholder="Enter a Valid Mobile Number">
    </div>
    <div class="col-md-6">
        <input required type="number" class="form-control" id="formGroupExampleInput2" placeholder="Recharge Amount">
    </div>
  </div>
  <br>
  <div class="form-group">
      <button type="submit" id="recharge-submit-first" class="btn btn-primary btn-block">Proceed To Recharge</button>
  </div>
</form> 