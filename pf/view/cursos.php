<div class="container">
  <div class="row">

    <?php
      foreach( $dados as $cursos) { ?>

    <div class="col">
      <div class="card" style="width: 12rem;">
        <img src="/pf/imagens/<?=$cursos['imagem']?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?=$cursos['nome']?></h5>
          <a href="/cursos/<?=$cursos['pagina']?>"  class="btn btn-primary">Ver Curso</a>
        </div>
      </div>
    </div>



    <?php } ?>


  </div>
</div>
