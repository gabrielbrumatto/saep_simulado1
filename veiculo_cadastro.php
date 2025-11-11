<?php include("includes/header.php"); ?>

<h1>Veículos Formulário</h1>

<form action="actions/veiculo_gravar.php" method="POST">
<label>Tipo combustivel</label>
<select name="tipo"> 
    <option value="">Selecione o Tipo</option>
    <option value="1">Diesel</option>
    <option value="2">Flex</option>
    <option value="3">Etanol</option>
    <option value="4">Gasolina</option>
</select><br>

<label>Placa</label>
<input name="placa" type="text" placeholder="Escreva a placa"/><br>

<label>Ano</label>
<input name="ano" type="text" placeholder="Escreva o ano"/><br>

<label>Cor</label>
<input name="cor" type="text" placeholder="Escreva a cor"/><br>

<select name="status_op">
    <option value="">Selecione o status</option> 
    <option value="1">Disponível</option>
    <option value="2">Em Rota</option>
    <option value="3">Manutenção</option>
</select>

<label>Km Inicial</label>
<input name="km_inicial"type="date" placeholder="Escreva a data"/><br>

<label>Data Última Manutenção</label>
<input name="data_ultimamanutencao" type="datetime-local" placeholder="Escreva a data"/><br>

<label>Intervalo Manutenção (Dias)</label>
<input name="intervalo_manutencao" type="text" placeholder="Escreva em dias"/><br>

<input type="submit" value="Gravar">
<input type="button" value="Cancelar" onclick="window.location = 'veiculos.php'">
</form>


<?php include("includes/footer.php");