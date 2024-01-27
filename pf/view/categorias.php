<div class="container">
  <div class="row">

    <?php
      foreach( $dados as $categoria) { ?>

    <div class="col">
      <div class="card" style="width: 12rem;">
        <img src="/pf/imagens/<?=$categoria['imagem']?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?=$categoria['nome']?></h5>
          <a href="/categorias/<?=$categoria['pagina']?>" class="btn btn-primary">Cursos</a>
        </div>
      </div>
    </div>



    <?php } ?>


  </div>
</div>
