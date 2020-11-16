<?php

namespace Galoa\ExerciciosPhp\TextWrap;

/**
 * Implemente sua resolução nessa classe.
 *
 * Depois disso:
 * - Crie um PR no github com seu código
 * - Veja o resultado da correção automática do seu código
 * - Commit até os testes passarem
 * - Passou tudo, melhore a cobertura dos testes
 * - Ficou satisfeito, envie seu exercício para a gente! <3
 *
 * Boa sorte :D
 */
class Resolucao implements TextWrapInterface {

  /**
   * {@inheritdoc}
   *
   * Apague o conteúdo do método abaixo e escreva sua própria implementação,
   * nós colocamos esse mock para poder rodar a análise de cobertura dos
   * testes unitários.
   */
  public function textWrap(string $text, int $length): array {
    $strArray = explode(' ', $text);
			
			print_r($strArray);

            $auxArr = array();

            $size = sizeof($strArray);

            for ($i = 0; $i < $size ; $i++) {

                if (sizeof($auxArr) >= 0){
                    array_push($auxArr, $strArray[$i]);

                    unset($strArray[$i]);

                    if(strlen($auxArr[sizeof($auxArr)-1]) + strlen($strArray[$i + 1]) <= $length){
                        if(strlen($auxArr[sizeof($auxArr)-1]) > 0){
                            $auxArr[sizeof($auxArr)-1] = $auxArr[sizeof($auxArr)-1].' '.$strArray[$i + 1];
                            unset($strArray[$i]);
                        }
                    } else {
                        array_push($auxArray, $strArray[i + 1]);
                        unset($strArray[$i]);
                    }
                }
            }

			return $auxArr;
  }

}
