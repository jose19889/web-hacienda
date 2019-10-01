<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-wow-delay="1s">
 <i class="fa fa-search"></i>
</button>

<!-- Modal -->
<div class="modal fade wow fadeInDown" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <div class="form-control mr-sm-2">
         <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Buscar en el sitio.." aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form>
      </div>
     <div class="modal-header">
       
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  function testAnim(x) {
    $('.modal .modal-dialog').attr('class', 'modal-dialog  ' + x + '  animated');
};
$('#myModal').on('show.bs.modal', function (e) {
  var anim = $('#entrance').val();
      testAnim(anim);
})
$('#myModal').on('hide.bs.modal', function (e) {
  var anim = $('#exit').val();
      testAnim(anim);
})
</script>
