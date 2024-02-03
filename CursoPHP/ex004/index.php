<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tipos primitivos</title>
</head>
<body>
    <h1>
        <?php 
            #resumo das possibilidades de tipos primitivos escalares
            $sobrenome = "silva"; #string
            $idade = 18; #integer
            $peso = 76.2; #float ou double (real não existe dps do php7.4)    
            $casado = false; #boolean
        
        ?>
<br>
        <?php 
            # 0x = hexadecimal
            # 0b = binario
            # 0  = octal
            $num = 0x1a;
            echo "o valor da variavel é $num";

        ?>
<br>
        <?php 
            #var_dump servirá para informar o dado da variavel e seu tipo        
            $v = 300;
            var_dump($v);
        
        ?>
<br>
        <?php 
            #sempre que o numero for elevado, será passado para float, a menos que utilize o "$n = (int) 3e2"
            $n = 3e2;
            var_dump($n);
        
        ?>
<br>
        <?php 
            #é possivel fazer a coerção dos valores em php: 
            $num1 = (int) "69";
            var_dump($num1); // será considerado variavel inteira
        
        ?>
<br>
        <?php 
            #a resposta dessa linha de codigo pode tomar dois rumos         
            $casadinho = false; #seu resultado será " ", pois, em php, false não é somente 0, pode ser também null, ou no caso do exemplo, void
            $casadinho1 = true; #nesse caso o resultado não será muito diferente do de outras linguagens, respondendo "1"
            echo "o valor casadinho é $casadinho ][ o valor casadinho é $casadinho1";

        ?>
<br>
        <?php 
            #os arrays, ou vetores, em php
            $vet = [1, 010, "t", 4.1, (0.1+0.2), false]; #na tentativa de usar echo nesse tipo de vaariavel teremos um erro, pois o php não converterá variaveis que estão em uma lista para o tipo string
            var_dump($vet);
            
        ?>
<br>
        <?php 
            #assim é feita a declaração de um objeto em php
            class pessoa {
                private string $nome2;
            }

            $p = new pessoa;
            var_dump($p);

        ?>
<br><br>
        <?php 
			
            $string_1 = "el lobo sempre cuida de su loba";
			$string_2 = "auuuuuuuuuu & ";
			#o + não serve para concatenarmos as strings, em php, utilizamos o .
			$string_1 = $string_1.$string_2;
			echo "o resultado é $string_1";

			$dif = "opa \u{1F30F}";
            echo "$dif";
        
        ?>
<br><br>
        <?php 

            $string_1 = 'el lobo sempre cuida de su loba';
            $string_2 = 'auuuuuuuuuu';
            #o + não serve para concatenarmos as strings, em php, utilizamos o .
            $string_1 = $string_1.$string_2;
            echo 'o resultado é $string_1 ';

            $dif = 'opa \u{1F30F}';
            echo '$dif';

        ?>
    </h1>
</body>
</html>