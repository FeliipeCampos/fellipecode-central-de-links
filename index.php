<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-CBM89PBJ1D"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-CBM89PBJ1D');
</script>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fellipe Campos - Links das Redes Sociais e Contato</title>
    <meta name="description" content="Acesse os links para as redes sociais e informações de contato de Fellipe Campos. Encontre-o no Instagram, TikTok, YouTube e mais.">
    <link rel="icon" type="image/png" href="images/flaticon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <img src="images/icone.jpeg" class="profile-pic" alt="Ícone de perfil de Fellipe Campos">
                    <h1 class="title">Fellipe Campos</h1>
                    <p class="subtitle">Redes Sociais</p>
                    <a href="https://www.instagram.com/fellipecode/" target="_blank" class="link-box" rel="noopener noreferrer">
                        <i class="bi bi-instagram"></i>Instagram - @fellipecode
                    </a>
                    <a href="https://www.tiktok.com/@fellipecode" target="_blank" class="link-box" rel="noopener noreferrer">
                        <i class="bi bi-tiktok"></i>TikTok - @fellipecode
                    </a>
                    <a href="https://www.youtube.com/@fellipecode" target="_blank" class="link-box" rel="noopener noreferrer">
                        <i class="bi bi-youtube"></i>YouTube - @fellipecode
                    </a>
                    <p class="subtitle">Contato</p>
                    <a href="#" class="link-box" onclick="copyEmail(event)">
                        <i class="bi bi-envelope-fill"></i>contatofellipecampos@gmail.com
                    </a>
                    <small class="subtitle text-muted" style="font-size: 11px;">Clique para copiar o e-mail</small>
                </div>
                
                <div id="copyAlert" class="alert alert-dark" style="display: none; margin-top: 10px;">
                    Email copiado!
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function copyEmail(event) {
        const email = "contatofellipecampos@gmail.com";
        navigator.clipboard.writeText(email);
        document.getElementById("copyAlert").style.display = "block";
        setTimeout(function(){
            document.getElementById("copyAlert").style.display = "none";
        }, 2000);
        event.preventDefault(); 
    }
</script>
</html>
