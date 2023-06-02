<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cor = $_POST["cor"] ?? "";
    $modelo = $_POST["modelo"] ?? "";
    $acessorios = $_POST["acessorios"] ?? array();
    $observacoes = $_POST["observacoes"] ?? "";

    if (!empty($cor) && !empty($modelo) && !empty($acessorios)) {
        echo "<h2>Dados do formulário:</h2>";
        echo "<p><strong>Cor do veículo:</strong> $cor</p>";
        echo "<p><strong>Modelo do veículo:</strong> $modelo</p>";
        echo "<p><strong>Acessórios selecionados:</strong></p>";
        echo "<ul>";
        foreach ($acessorios as $acessorio) {
            echo "<li>$acessorio</li>";
        }
        echo "</ul>";
        echo "<p><strong>Observações:</strong> $observacoes</p>";
    } else {
        echo "<p>Por favor, preencha todos os campos obrigatórios.</p>";
    }
}
?>