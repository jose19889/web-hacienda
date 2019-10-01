<div class="tabs">
  <input type="radio" name="tabs" id="tabone" checked="checked">
  <label for="tabone">Anexo</label>
  <div class="tab">
    <h1>Tab One Content</h1>
    
  </div>
  
  <input type="radio" name="tabs" id="tabtwo">
  <label for="tabtwo">Ley</label>
  <div class="tab">
    <h1>Tab Two Content</h1>
    
  </div>
  
  <input type="radio" name="tabs" id="tabthree">
  <label for="tabthree">Liquidacion</label>
  <div class="tab">
    <h1>Tab Three Content</h1>
   
  </div>
</div>

<style type="">
	/**
 * Tabs
 */
.tabs {
	display: flex;
	flex-wrap: wrap; // make sure it wraps
}
.tabs label {
	order: 1; // Put the labels first
	display: block;
	padding: 1rem 2rem;
	margin-right: 0.2rem;
	cursor: pointer;
  background: #90CAF9;
  font-weight: bold;
  transition: background ease 0.2s;
}
.tabs .tab {
  order: 99; // Put the tabs last
  flex-grow: 1;
	width: 100%;
	display: none;
  padding: 1rem;
  background: #fff;
}
.tabs input[type="radio"] {
	display: none;
}
.tabs input[type="radio"]:checked + label {
	background: #fff;
}
.tabs input[type="radio"]:checked + label + .tab {
	display: block;
}

@media (max-width: 45em) {
  .tabs .tab,
  .tabs label {
    order: initial;
  }
  .tabs label {
    width: 100%;
    margin-right: 0;
    margin-top: 0.2rem;
  }
}

/**
 * Generic Styling
*/


</style>