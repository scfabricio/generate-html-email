<!DOCTYPE html>
<html>
<head>
    <title>Gerador de Emails</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Style custom CSS -->
    <link rel="stylesheet" href="style.css" type="text/css">

    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/tinymce/tinymce.min.js"></script>

    <script>
        tinymce.init({
            selector: 'textarea',
            height: 200,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table contextmenu paste code'
            ],
            toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
            content_css: 'css/bootstrap.min.css'
        });
    </script>
</head>
<body>
    <div class="container">

        <h1 class="col-lg-12">Gerador de Emails</h1>

        <form id="criaemail" method="post" role="form" class="center-block" action="core/geraEmail.php">

            <div class="form-group col-lg-12">
                <input type="submit" value="Gerar agora!" class="btn btn-success" />
            </div>

            <div class="form-group col-lg-6">
                <label>Nome do email (nome-email)</label>
                <input type="text" name="nomeEmail" class="form-control" value="nome-do-email" required />
            </div>

            <div class="form-group col-lg-6">
                <label>Direitório do email (pasta-email)</label>
                <input type="text" name="diretorioEmail" class="form-control" value="" required />
            </div>

            <div class="form-group col-lg-6">
                <label>Link do topo do email (http://url.com.br/topo.jpg)</label>
                <input type="text" name="topoEmail" class="form-control" value="" required />
            </div>

            <div class="form-group col-lg-6">
                <label>Altura do topo (150 default)</label>
                <input type="text" name="alturaTopoEmail" class="form-control" value="" required />
            </div>

            <div class="form-group col-lg-6">
                <label>Link do rodape do email (http://url.com.br/rodape.jpg)</label>
                <input type="text" name="rodapeEmail" class="form-control" value="" required />
            </div>

            <div class="form-group col-lg-6">
                <label>Altura do rodape (130 default)</label>
                <input type="text" name="alturaRodapeEmail" class="form-control" value="" required />
            </div>

            <div class="form-group col-lg-12">
                <label>Estilo texto do email (style="color:#000; padding:0 40px 0 40px; font-family:'Arial', Helvetica, sans-serif; font-size:16px;")</label>
                <input type="text" name="estiloEmail" class="form-control" value="style='color:#000; padding:0 40px 0 40px; font-family:Arial, Helvetica, sans-serif; font-size:16px;'" required />
            </div>

            <div class="col-lg-12">
                <div class="form-group col-lg-12">
                    <textarea name="conteudoEmail"></textarea>
                </div>
            </div>

        </form>

    </div>
</body>
</html>