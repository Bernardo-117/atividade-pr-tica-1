document.addEventListener('DOMContentLoaded', function() {
    // Botão Editar Perfil
    const btnEditar = document.getElementById('btnEditarPerfil');
    if (btnEditar) {
        btnEditar.addEventListener('click', function() {
            alert('Funcionalidade de editar perfil (em desenvolvimento)');
        });
    }

    // Botão Postar
    const btnPostar = document.getElementById('btnPostar');
    const inputPost = document.getElementById('novaPostagemInput');
    const feed = document.getElementById('feed');

    if (btnPostar && inputPost && feed) {
        btnPostar.addEventListener('click', function() {
            const texto = inputPost.value.trim();
            if (texto === '') {
                alert('Digite algo para postar!');
                return;
            }

            const novaPostagem = document.createElement('div');
            novaPostagem.className = 'card mb-3 postagem';
            novaPostagem.innerHTML = `
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2">
                        <div class="avatar-placeholder me-2" style="width:40px; height:40px; font-size:16px;">
                            BC
                        </div>
                        <div>
                            <strong>Bernardo Colen</strong> <span class="text-muted">@bernardocolen</span>
                        </div>
                    </div>
                    <p class="card-text">${texto}</p>
                    <div class="d-flex gap-3">
                        <button class="btn btn-link p-0 text-decoration-none text-danger like-btn">
                            <i class="fas fa-heart"></i> <span class="like-count">0</span> curtidas
                        </button>
                        <button class="btn btn-link p-0 text-decoration-none text-primary">
                            <i class="fas fa-comment"></i> 0 comentários
                        </button>
                    </div>
                </div>
            `;

            feed.prepend(novaPostagem);
            inputPost.value = '';
            adicionarEventoLikes();
        });
    }

    function adicionarEventoLikes() {
        const botoesCurtir = document.querySelectorAll('.like-btn');
        botoesCurtir.forEach(botao => {
            botao.removeEventListener('click', handleLike);
            botao.addEventListener('click', handleLike);
        });
    }

    function handleLike(event) {
        event.preventDefault();
        const likeSpan = this.querySelector('.like-count');
        if (likeSpan) {
            let curtidas = parseInt(likeSpan.textContent);
            curtidas += 1;
            likeSpan.textContent = curtidas;
        }
    }

    adicionarEventoLikes();
});