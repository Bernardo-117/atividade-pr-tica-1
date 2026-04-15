<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ConectaDev</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Seu CSS customizado -->
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-light">

    <!-- Barra de navegação com itens -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
        <div class="container">
            <a class="navbar-brand" href="#">ConectaDev</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="#"><i class="fas fa-home"></i> Início</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-search"></i> Pesquisa</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-plus-circle"></i> Nova Postagem</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-user"></i> Perfil</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container">
        <!-- Cabeçalho do perfil -->
        <div class="card mb-4 p-3">
            <div class="row align-items-center">
                <div class="col-auto">
                    <!-- Placeholder do avatar (iniciais BC) -->
                    <div class="avatar-placeholder" style="width:80px; height:80px; font-size:32px;">
                        BC
                    </div>
                </div>
                <div class="col">
                    <h2 class="mb-0">Bernardo Colen</h2>
                    <p class="text-muted">@bernardocolen</p>
                </div>
                <div class="col-auto">
                    <button class="btn btn-outline-secondary" id="btnEditarPerfil">Editar Perfil</button>
                </div>
            </div>
        </div>

        <!-- Formulário de nova postagem -->
        <div class="card mb-4">
            <div class="card-body">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="No que você está pensando?" id="novaPostagemInput">
                    <button class="btn btn-primary" type="button" id="btnPostar">Postar</button>
                </div>
            </div>
        </div>

        <!-- Feed de postagens -->
        <section id="feed">
            <!-- Postagem 1 -->
            <div class="card mb-3 postagem">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2">
                        <div class="avatar-placeholder me-2" style="width:40px; height:40px; font-size:16px;">
                            BC
                        </div>
                        <div>
                            <strong>Bernardo Colen</strong> <span class="text-muted">@bernardocolen</span>
                        </div>
                    </div>
                    <p class="card-text">Hoje foi um ótimo dia para estudar programação!</p>
                    <div class="d-flex gap-3">
                        <button class="btn btn-link p-0 text-decoration-none text-danger like-btn">
                            <i class="fas fa-heart"></i> <span class="like-count">14</span> curtidas
                        </button>
                        <button class="btn btn-link p-0 text-decoration-none text-primary">
                            <i class="fas fa-comment"></i> 3 comentários
                        </button>
                    </div>
                </div>
            </div>

            <!-- Postagem 2 -->
            <div class="card mb-3 postagem">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2">
                        <div class="avatar-placeholder me-2" style="width:40px; height:40px; font-size:16px;">
                            BC
                        </div>
                        <div>
                            <strong>Bernardo Colen</strong> <span class="text-muted">@bernardocolen</span>
                        </div>
                    </div>
                    <p class="card-text">Alguém aí também está criando um mini feed com HTML e CSS?</p>
                    <div class="d-flex gap-3">
                        <button class="btn btn-link p-0 text-decoration-none text-danger like-btn">
                            <i class="fas fa-heart"></i> <span class="like-count">9</span> curtidas
                        </button>
                        <button class="btn btn-link p-0 text-decoration-none text-primary">
                            <i class="fas fa-comment"></i> 1 comentário
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Seu JavaScript -->
    <script src="script.js"></script>
</body>
</html>