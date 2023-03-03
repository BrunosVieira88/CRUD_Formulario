@extends('layouts.app')
@section('content')     
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
@if(isset($form))
    <script>
        Swal.fire({
            icon: 'Success',
            title: 'Cadastrado com sucesso',
            text: 'Deseja ver todos os cadastrados?',
            footer: '<a href="/resultado">Clique Aqui para ver todos os cadastrados</a>',
            timer: 3500
        });
    </script>
@endif
<h1 class="mt-3 mb-3 text-center">Cadastro de Funcionario</h1>
<section class="container">
    <form action="/cadastro/formulario" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
    
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" placeholder="José da silva" id="nome" name="nome" required>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input type="email" class="form-control" id="email" placeholder="jose@provedor.com" name="email" required>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="telefone">Telefone:</label>
                    <input type="tel" class="form-control" id="telefone" maxlength="11" placeholder="11999999999" name="telefone" >
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label for="cpf">cpf</label>
                    <input type="text" class="form-control" name="cpf" id="cpf">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="cep">CEP</label>
                    <input type="text" class="form-control" name="cep" id="cep">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="rua">rua</label>
                    <input type="text" class="form-control" name="rua" id="rua">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="">numero</label>
                    <input type="text" class="form-control" name="numero" id="numero">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="">cidade</label>
                    <input type="text" class="form-control" name="cidade" id="cidade">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <label for="mensagem">Mensagem:</label>
                <textarea class="form-control" id="mensagem" name="mensagem" rows="5" required></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-3" onclick="verificaFormulario(event)">Enviar</button>
    </form>
</section>

<script>

const cepInput = document.getElementById('cep');
const ruaInput = document.getElementById('rua');
const cidadeInput = document.getElementById('cidade');

cepInput.addEventListener('blur', () => {
  const cep = cepInput.value;
  const url = `https://viacep.com.br/ws/${cep}/json/`;

  fetch(url)
    .then(response => response.json())
    .then(data => {
      if (data.erro) {
        // CEP não encontrado
      } else {
        ruaInput.value = data.logradouro;
        cidadeInput.value = data.localidade;
        // Preencha outros campos de endereço aqui, se necessário
      }
    })
    .catch(error => {
      // Trate erros na requisição, como falha de rede
    });
});



</script>
@endsection
