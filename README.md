notas sobre php.
 FUNDAMENTO.
 Pq n usar a tag de fechamento na ultima linha do bloco? ao usar a tag de fechamento, espaços em branco indesejados irão aparecer ao final dos arquivos, se vc não usar, não irão aparecer.  Sobre tipos de variáveis, existem diferentes tipos com diferentes syntaxes. Podemos ter uma variável de tipo booleano, uma variável do tipo string e uma variável int (variável do tipo inteiro)
	TIPOS DE VARIÁVEIS, DEFINIÇÕES.
		Booleano - declarações lógicas onde algo pode ser considerado verdadeiro ou falso com o uso de 0 e 1 para a elaboração lógica. 		String - Sequência de caracteres usados para nomear algo, normalmente dentro de aspas simples, ‘ ‘. mas pode ser acompanhado por outros comandos, para fazer quebra de linha e coisas do gênero. 		Inteiro - Variáveis do tipo inteiro guardam valores numéricos.										  Números de ponto flutuante “float” - São representações dos números racionais nas linguagens de computador, muito usada ao se transformar uma string em “float” ou “int” para armazenar carácteres convertidos em números, para que se possa realizar alguma conta com os números.  		Arrays- Um array no php funciona como um mapa ordenado, correlacionando um valor à uma chave.
$array = array(		//exemplo array de várias linhas      
	CHAVE 1 => VALOR 1,
	CHAVE 2 => VALOR 2,
	CHAVE 3 => VALOR 3,
	); *lembrando que a , no final do último valor não é necessário mas é uma boa prática para que se possa adicionar mais linda de forma mais fácil no futuro. 
Existem arrays de uma única linha como por exemplo: 	$array = array(1, 2) 	//onde é melhor em boas práticas manter o último caractere sem a vírgula após.
 *A partir do PHP 5.4 você também pode utilizar a sintaxe contraída de array, que troca array() por [].

	$array = array(	//originalmente no php
    “grill” => "beef”,
    "beef” => “grill”,
	);

	$array = [		// à partir da versão 5.4
    "grill” => "beef",
    "beef" => "grill”,
	];

A chave de um array pode ser um valor numérico (int) ou uma string. A chave pode receber qualquer tipo de valor, porém cada um adicionará uma coerção diferente à chave:

* Strings contendo inteiros válidos, serão convertidos para o tipo inteiro. Por exemplo, a chave"8" será, na verdade, armazenada como 8. Entretanto, "08" não será convertido, por não ser um inteiro decimal válido.
* Floats também são convertidos para inteiros, isso significa que a parte fracionada será removida. Por exemplo, a chave 8.7 será na verdade armazenada como 8.
* Booleanos são convertidos para inteiros, igualmente, por exemplo, a chave true, será na verdade armazenada como 1 e a chave false como 0.
* Null será convertido para uma string vazia, por exemplo, a chave null na verdade será armazenada como "".
* Arrays e objetos não podem ser usados como chaves. Fazer isso resultará em um aviso: Illegal offset type.

	*Se vc usar vários valores para a mesma chave fique ciente de que somente o último valor sera utilizado.  		Recursos - Recursos é uma função que trás recursos externos de fora da máquina e os checa com a engine da Zad para certificar que eles tem em si a referência armazenada, como por exemplo o link do bootstrap   		Variáveis - Cada variável pode ter um tipo diferente dependendo da forma que é utilizada, se ela tiver um numero inteiro decimal válido ela se torna um (int), enquanto que se vc utilizar um valor string variável irá se comportar como (string), se vc quiser você sempre tem a opção de usar o comando  settype(), para vc conseguir decidir como vc gostaria que a sua variável funcionasse. Os tipos disponíveis são:
* (int), (integer) - molde para inteiro
* (bool), (boolean) - converte para booleano
* (float), (double), (real) - converte para número de ponto flutuante
* (string) - converte para string
* (array) - converte para array
* (object) - converte para objeto
* (unset) - converte para NULL
	* Lembrando que a conversão de tipos no PHP funciona assim: O nome de um tipo desejado é escrito entre parênteses antes da variável que se deseja converter e pronto, só continuar a programar.  Nota para eu mesmo (Achei melhor apagar a minha explicação sobre como escapar o HTML e copiar a do site do php, menos confuso dessa forma. https://www.php.net/manual/pt_BR/language.basic-syntax.phpmode.php

Escapando o HTML ¶
Tudo o que estiver fora das tags PHP é ignorado pelo interpretador, o que permite arquivos PHP de conteúdo misto. Permite que o PHP seja incluído dentro de documentos HTML, para, por exemplo, a criação de templates.
//exemplo
<p>Isto vai ser ignorado pelo PHP e exibido peçp navegador.</p>
<?php echo 'Enquanto isto vai ser interpretado.'; ?>
<p>Isto também vai ser ignorado pelo PHP e exibido pelo navegador.</p>

Isso funcionará porque quando o interpretador do PHP encontra ?>, a tag de fechamento, ele simplesmente começa a repassar qualquer coisa que encontre (exceto um fim de linha imediato, ver a seção sobre separação de instruções), até que ele encontre outra tag de abertura a não ser que esteja no meio de uma instrução condicional, onde então o interpretador vai determinar o resultado da condicional e assim decidir qual caminho tomar. Veja no próximo exemplo.
Utilizando estruturas avançadas
*Nota minha para eu mesmo (esta parte à cima é fácil de entender, mas atenção a parte de baixo que ira vir agora 
No PHP 5 existem cinco diferentes pares de tags de abertura e fechamento disponíveis, dependendo de como o interpretador estiver configurado. Dois deles, <?php ?> e <script language="php"> </script> estão sempre disponíveis. Também a tag curta de echo <?= ?>, que está sempre disponível desde o PHP 5.4.0.
As outras duas opções são as tags curtas e tags estilo ASP. 

*****Assim, embora algumas pessoas achem as tags curtas e ASP convenientes, são menos portáveis, e geralmente não recomendadas.***** 

FUNÇÕES.

	Constantes - São formas de identificação para valores únicos, que não podem ser alterados durante a execução do seu script e (exceto as constantes mágicas, que não são constantes de verdade). As constantes são case-sensitive por padrão. Por convenção, identificadores de constantes são sempre em maiúsculas. A nomeação deve ser sempre iniciada com uma letra ou um underline. 	*Não é recomendado que se tente mudar o valor ou o nome da constante em nenhum caso, mas é possível com os comandos  define() para valor e  constant() para o nome ou para tentar recuperar o valor de dentro da constante.  	Expressões - Em php como em outras línguas também as expressões são “coisas” (constantes ou variáveis) que tem algum valor atribuído a elas, e podemos fazer operações com essas expressões ocasionando incrementos as variáveis, se colocarmos o símbolo ++$a antes da variável o php ira adicionar 1 + $a o valor da variável e se digitarmos $a++ acrescentamos 1 após o valor da variável, esse é um processo de adição, e também podemos fazer processos de comparação com os símbolos <=; <; >; =>; ==; ! (Maior ou igual, maior, menor, menor ou igual, igual e diferente).

	Estruturas de controle - São instruções que podem ser dadas com os comandos do php, para criar listas de repetição ou até mesmo instruções vazias que não fazem nada e todas podem ser agrupadas dentro de chaves gerando uma nova instrução 
	*Instruções geralmente terminam com um ponto e vírgula.  

LISTA DE COMANDOS - if, caracteriza algo como objetivo por exemplo se x for igual a y em código ficaria if ($x == $y) // ele da uma condição. else (se não), se caracteriza por dar a resposta a condição. if ($x == $y):
	echo “isso esta correto” 
else ($x ! $y):
	echo “isso esta errado”
elseif ou else if tem o propósito de dar a instrução ao decodificado de texto de criar mais um parâmetro if dependendo se o else for false ou não.

https://www.php.net/manual/pt_BR/control-structures.alternative-syntax.php https://www.php.net/manual/pt_BR/language.functions.php

*estava ficando muito confuso o conteúdo do caderno, ler a partir do tópico while por aqui.

