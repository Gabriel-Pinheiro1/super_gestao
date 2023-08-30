<form action="/contato" method="post">
    @csrf
    <input type="text" placeholder="Nome" class="borda-preta" name="name">
    <br>
    <input type="text" placeholder="Telefone" class="borda-preta" name="phone">
    <br>
    <input type="text" placeholder="E-mail" class="borda-preta" name="email">
    <br>
    <select class="borda-preta" name="reason">
        <option value="">Qual o motivo do contato?</option>
        <option value="">Dúvida</option>
        <option value="">Elogio</option>
        <option value="">Reclamação</option>
    </select>
    <br>
    <textarea class="borda-preta">Preencha aqui a sua mensagem</textarea>
    <br>
    <button type="submit" class="borda-preta">ENVIAR</button>
</form>