<?php
namespace projeto\Exercicios\funcoesPhp;


class Funcoes {
    private float $num1;
    private float $num2;
    private float $resultado;

    public function __construct() {
        $this->num1 = 0;
        $this->num2 = 0;
        $this->resultado = 0;
    }

    // Métodos de acesso e modificadores
    public function __get(string $dado): mixed {
        return $this->$dado;
    }

    public function __set(string $variavel, string $novoDado): void {
        $this->$variavel = $novoDado;
    }

    public function somarDoisNumeros(float $num1, float $num2) {
        $this->resultado = $num1 + $num2;
        return $this->resultado;
    }

    public function subtrairDoisNumeros(float $num1, float $num2) {
        $this->resultado = $num1 - $num2;
        return $this->resultado;
    }

    public function multiplicarDoisNumeros(float $num1, float $num2) {
        $this->resultado = $num1 * $num2;
        return $this->resultado;
    }

    public function dividirDoisNumeros(float $num1, float $num2) {
        if ($num2 == 0) {
            return "Impossível dividir por zero";
        } else {
            $this->resultado = $num1 / $num2;
            return $this->resultado;
        }
    }//fim do metodo divir

     public function delta(int $a, int $b, int $c) {
        $delta = pow($b, 2) - 4 * $a * $c;
        return $delta;
    }

    // Calculando X1 e X2
    public function calcularX1X2(int $a, int $b, int $c) {

        if ($a == 0) {
            return "O valor de A não pode ser zero!";
        }

        $delta = $this->delta($a, $b, $c);

        if ($delta < 0) {
            return "Impossível calcular X1 e X2, delta negativo!";
        } else {
            $x1 = (-$b + sqrt($delta)) / (2 * $a);
            $x2 = (-$b - sqrt($delta)) / (2 * $a);

            return "X1 = $x1 <br><br> X2 = $x2";
        }
    }

    public function dobroNum(float $num1){
        $this->resultado = 2 * $num1;
        return $this->resultado;
    }//fim do metodo

    public function calcularMediaTresNumeros(float $num1, float $num2, float $num3){
        $somar = $num1 + $num2 + $num3;
        $resultado = $somar/3;
        return $resultado;
    }//fim do metodo media ex3


    public function calcularRaizQuadrada(float $num1){
        $resultado = sqrt($num1);
        return $resultado;
    }//fim do metodo raiz quadrada ex4


    public function converterMetrosParaCentimetros(float $num1){
        $converter = $num1 * 100;
        $resultado = $converter;
        return $resultado;

    }//fim metodo converter m para cm ex5


    public function areaCirculo(float $num1){
        $area = pow($num1, 2) * 3.14 * 2;
        return $area;

    }//fim metodo area do circulo ex6

    
    public function celsiusFahrenheit(float $num1){
        $f = ($num1 * 1.8) + 32;
        return $f;

    }//fim metodo conversão de temperatura ex7


    public function descontoProduto(float $num1){
        $desconto = $num1 / 10;
        $valor = $num1 - $desconto;
        return $valor;

    }//fim metodo desconto de produto ex8



    public function idadeMeses(float $num1){
        $idade = $num1 * 12;
        return $idade;

    }//fim metodo idade ex9



    public function numerosParImpar(float $num1){
   
    if($num1 % 2 == 0){
        return "par";
    }else{
        return "impar";
    }

    }//fim metodo par ou impar ex10


    public function areaTriangulo(float $base, float $altura){
        $areaT = ($base * $altura) / 2;
        return $areaT;

    }//fim metodo area do triangulo ex11



    public function volumeCaixaRentagular(float $comprimento, float $largura, float $altura){
        $areaCaixa = $comprimento * $largura * $altura;
        return $areaCaixa;

    }//fim metodo volume caixa retangular ex12


    public function raizCubicaQuadrada(float $num1){
        $quadrada = sqrt($num1);
        $cubica = pow ($num1, 1/3);
        return "<br><br> quadrada: $quadrada <br><br> cubica: $cubica";
    }//fim metodo calcular raiz cubica e quadrada ex13



    public function calcularImposto(float $num1){
        $imposto = $num1 * 0.18;
        $valor = $num1 + $imposto;
        return $valor;

    }//fim calcular imposto ex14


    public function velocidadeMedia(float $distancia, float $tempo){
        $velocidadeM = $distancia / $tempo;
        return $velocidadeM;

    }//fim calcular velocidade media ex15


    public function calcularMediaAririmetica(float $num1, float $num2){
        $somar = $num1 + $num2;
        $resultado = $somar/2;
        return $resultado;
    }//fim do metodo media aritimetica ex16


    public function salarioMensal(float $valorHora, float $horaTrabalhada){
        $salario = $valorHora * $horaTrabalhada;
        return $salario;
    }//fim do metodo salario mensal ex17


    public function idadeDias(float $num1){
        $idade = $num1 * 365.25;
        return $idade;

    }//fim metodo idade dias ex18

    public function tempoRestante(float $num1){
        $tempoVida = 100 - $num1;
        return $tempoVida;

    }//fim metodo tempo restante de vida até 100 anos ex19


    public function somaMedia(float $num1, float $num2, float $num3){
        $somar = $num1 + $num2 + $num3;
        $media = $somar/3;
        return "<br><br> resultado da soma é: $somar <br><br> resultado da média: $media";
    }//fim do metodo media ex20



    public function areaTrapezio(float $num1, float $num2, float $num3) {
        $baseMaior = $num1;
        $baseMenor = $num2;
        $altura = $num3;
        $areaTrapezio = (($baseMaior + $baseMenor) * $altura) / 2;

        return "<br><br> A área do trapézio é: " . $areaTrapezio;
    }//fim do metodo area trapezio ex21


    public function diasParaSegundos(float $num1) {
        $dia = $num1;
        $segundos = $dia * 86400;;

        return "<br><br> total de segundos: " . $segundos;
    }//fim do metodo dias para segundos 


    public function somaDigitos(float $num1) {
    // Transforma o número em texto e separa cada dígito
    $digitos = str_split((string)$num1);
    
    // Soma todos os elementos do array
    $soma = array_sum($digitos);

    return "<br><br> Total da soma dos dígitos: " . $soma;
}
    

} //fim do metodos   
?> 
