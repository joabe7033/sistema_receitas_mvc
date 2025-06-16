<?php

class MensagensController
{
    public static function exibir($mensagem, $tipo = 'info', $redirecionar = null, $tempo = 2)
    {
        $cor = match ($tipo) {
            'erro' => 'red',
            'sucesso' => 'green',
            'alerta' => 'orange',
            default => 'black'
        };

        echo "<div style='text-align:center; font-family:sans-serif; margin-top:20px; color:{$cor};'>
                {$mensagem}
              </div>";

        if ($redirecionar) {
            echo "<script>
                    setTimeout(function() {
                        window.location.href = '{$redirecionar}';
                    }, " . ($tempo * 1000) . ");
                  </script>";
        }
    }
}
