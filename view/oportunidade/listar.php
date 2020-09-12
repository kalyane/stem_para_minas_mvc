<link rel="stylesheet" href="assets/css/opportunities.css">
<script>
$(document).ready(function(){
  $(".opportunity").click(function(){
    window.location.href='?classe=oportunidade&acao=listar2';
  });
});
</script>

<section id = "opportunities">
  <div class="container">
    <div class="search">
      <form class="form-inline">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Pesquisar...">
          <select class="form-control">
            <option value="" disabled selected hidden>Categoria</option>
            <option>Bolsas</option>
            <option>Competicao</option>
            <option>Evento</option>
            <option>Programa</option>
            <option>Concurso</option>
          </select>
          <select class="form-control">
            <option value="" disabled selected hidden>Local</option>
            <option>Online</option>
            <option>Nacional</option>
            <option>Internacional</option>
          </select>
          <select class="form-control">
            <option value="" disabled selected hidden>Prazo</option>
            <option>Hoje</option>
            <option>1 Semana</option>
            <option>2 semanas</option>
          </select>
        </div>
        <button type="submit" class="btn">Pesquisar</button>
      </form>
    </div>
    <?php
      foreach ($oportunidades as $oportunidade){
      echo "<div class='row list'>";
            echo "<div class='row opportunity'>";
              echo "<div class='col-sm-4'>";
                echo "<img src='".$oportunidade->getUrlfoto()."'>";
              echo "</div>";
              echo "<div class='col-sm-8'>";
                echo "<h4>".$oportunidade->getIdcategoria()."</h4>";
                echo "<h2>".$oportunidade->getNome()."</h2>";
                echo "<p>".$oportunidade->getDescricao()."</p>";
                echo "<span>".$oportunidade->getLocal()." | ".$oportunidade->getPrazo()." </span>";
              echo "</div>";
            echo "</div>";
            echo "<hr style='height:1px;border-width:0;color:gray;background-color:gray; width: 100%;'>";
      echo "</div> ";
      }?>
  </div>
</section>