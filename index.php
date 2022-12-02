<?php
$titulo = "Simulado";
$subtitulo = "Simulado";
include "cabecalho.php";
include "conexao.php" ;

?>
        <div class="card-body">

                <h3 > Faça uma pergunta <h3>

                <br>

                <label>Pergunta</label>
                <input type="text" name="A" />

                <br><br>

                <label>A)</label>
                <input type="radio" name="correta" value="A" />
                <input type="text" name="A" />
            
                <br><br>

                <label>B)</label>
                <input type="radio" name="correta" value="B" />
                <input type="text" name="B" />

                <br><br>

                <label>C)</label>
                <input type="radio" name="correta" value="C" />
                <input type="text" name="C" />

                <br><br>

                <label>D)</label>
                <input type="radio" name="correta" value="D" />
                <input type="text" name="D" />

                <br><br>

                <label>E)</label>
                <input type="radio" name="correta" value="E" />
                <input type="text" name="E" />
                
                <br><br>
           </div>
    </div>

    <button class="btn btn-success" type="submit">Enviar Pergunta</button>
</form>
<?php

$query = "select * from questoes order by rand() limit 10";
$questoes = mysqli_query($conexao, $query);
?>
        <?php
        while($linha = mysqli_fetch_array($questoes)){
            ?>
                    <div class="card-header">
                    <div style="width: 100%; border:1px solid;"> 
                    <div class="offset-2 col-5">
                    <h1> <?php echo $linha["pergunta"]; ?> </h1>
                    <div class="card-body">      
                            <h3><input type="radio" name="<?php echo $linha["id"]; ?>" value="A" />A) <?php echo $linha["a"]; ?> </h3>
                            <h3><input type="radio" name="<?php echo $linha["id"]; ?>" value="B" />B) <?php echo $linha["b"]; ?> </h3>
                            <h3><input type="radio" name="<?php echo $linha["id"]; ?>" value="C" />C) <?php echo $linha["c"]; ?> </h3>
                            <h3><input type="radio" name="<?php echo $linha["id"]; ?>" value="D" />D) <?php echo $linha["d"]; ?> </h3>
                            <h3><input type="radio" name="<?php echo $linha["id"]; ?>" value="E" />E) <?php echo $linha["e"]; ?> </h3>
                            <br><br>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
            <button class="btn btn-success" type="submit">Enviar Questionario</button>
    </form>
<?php
include "rodape.php";
?>