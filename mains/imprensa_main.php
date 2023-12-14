<?php

$pagina = 1;
$elementos_por_pagina = 2;

$resultado = selectSQLUnico("SELECT Count(id) as id FROM imprensa");
$total_elementos = intval($resultado["id"]);
$total_paginas = ceil($total_elementos / $elementos_por_pagina);
$total_botoes = 2;

$form = isset($_GET["pagina"]);

if($form) {
    $pagina = intval($_GET["pagina"]);
    if($pagina < 1) {
        $pagina = 1;
    } elseif($pagina > $total_paginas) {
        $pagina = $total_paginas;
    }
}

$elementos_a_ignorar = ($pagina - 1) * $elementos_por_pagina;

$publicações = selectSQL("SELECT * FROM imprensa LIMIT $elementos_por_pagina OFFSET $elementos_a_ignorar");

?>

<main>

    <?php $contador = 0 ?>

    <?php foreach($publicações as $p): ?>
        <div class="caixa-imprensa container-fluid" id="lancamento">
            <div class="row">
                <div class="col-12">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 mx-auto">
                                <div class="container-fluid lançamento1">
                                    <div class="row ">
                                        <div class="col-12 col-lg-10 d-flex justify-content-start mt-5 ">
                                            <h3>
                                                <?= getTituloImprensa($p["id"]) ?>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="caixa-linha">
                                    <div class="row  mx-auto">
                                        <div class="col-12 text-center ">
                                            <hr id="linha-imprensa">
                                        </div>
                                    </div>
                                </div>
                                <div class="caixa px-2 mr-2">
                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-end pl-2 mt-2 mb-4 " id="publi">
                                            <h6 id="P-escuro">
                                                <?= getDataImprensa($p["id"]) ?>
                                            </h6>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="caixa-imagem-imprensa container-fluid" >
                        <div class="row ">
                            <div class="col-12 d-flex justify-content-center mb-5">
                                <img src="<?= getImagemImprensa($p["id"]) ?>" alt="livro imprensa" id="image-imprensa">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="texto-velho ">
                        <div class="row ">
                            <div class="col-8 mx-auto px-0 mb-5" id="P">
                                <p>
                                    <?= getTextoImprensa($p["id"]) ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <br>
        <br>


    <?php endforeach; ?>

    <div class="caixa-paginacao d-flex justify-content-center gap-5 ">
        <form action="">

            <button name="pagina" id="seta-esq" value="<?= ($pagina == 1) ? 1 : ($pagina - 1); ?>"></button>

            <?php if($pagina - $total_botoes > 1): ?>

                ...
                <?php for($i = $pagina - $total_botoes; $i < $pagina; $i++): ?>
                    <button class="<?= ($i == $pagina) ? 'dourado' : ''; ?>" id="numbotao" name="pagina" value=" <?= $i; ?>">
                        <?= $i; ?>
                    </button>
                <?php endfor; ?>

            <?php else: ?>

                <?php for($i = 1; $i < $pagina; $i++): ?>
                    <button class="<?= ($i == $pagina) ? 'dourado' : ''; ?>" id="numbotao" name="pagina" value="<?= $i; ?>">
                        <?= $i; ?>
                    </button>
                <?php endfor; ?>

            <?php endif; ?>

            <button class="<?= ($i == $pagina) ? 'dourado' : ''; ?>" id="numbotao" name="pagina" value="<?= $pagina; ?>"
                class="active">
                <?= $pagina; ?>
            </button>

            <?php if($pagina + $total_botoes < $total_paginas): ?>

                <?php for($i = $pagina + 1; $i <= $pagina + $total_botoes; $i++): ?>
                    <button class="<?= ($i == $pagina) ? 'dourado' : ''; ?>" id="numbotao" name="pagina" value="<?= $i; ?>">
                        <?= $i; ?>
                    </button>
                <?php endfor; ?>
                ...

            <?php else: ?>

                <?php for($i = $pagina + 1; $i <= $total_paginas; $i++): ?>
                    <button class="<?= ($i == $pagina) ? 'dourado' : ''; ?>" id="numbotao" name="pagina" value="<?= $i; ?>">
                        <?= $i; ?>
                    </button>
                <?php endfor; ?>

            <?php endif; ?>

            <button name="pagina" id="seta-drt"
                value="<?= ($pagina == $total_paginas) ? $total_paginas : ($pagina + 1); ?>"></button>

        </form>
    </div>
    <br><br><br>

</main>