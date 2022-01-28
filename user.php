<?php

declare(strict_types=1);
/**
 *
 */
class User
{
  // プロパティ
  public int $height;
  public int $weight;

  // コンストラクタ
  public function __construct(int $height, int $weight)
  {
    if (!is_numeric($height) && !is_numeric($height)) {
      $height = 0;
      $weight = 0;
    }
    $this->height = $height;
    $this->weight = $weight;
  }
  // メソッド
  // set
  public function set_value(int $height, int $weight): void
  {
    if (!is_numeric($height) && !is_numeric($height)) {
      $height = 0;
      $weight = 0;
    }
    $this->height = $height;
    $this->weight = $weight;
  }
  // get_bmi
  public function get_bmi()
  {
    return $this->weight / pow($this->height / 100, 2);
  }
  // get_appropriate_weight
  public function get_appropriate_weight()
  {
    return pow($this->height / 100, 2) * 22;
  }
  // get_result
  public function get_result()
  {
    $bmi = $this->get_bmi();
    if ($bmi < 18.5) {
      return '低体重(痩せ型)';
    }
    if ($bmi < 25) {
      return '普通体重';
    }
    if ($bmi < 30) {
      return '肥満(1度)';
    }
    if ($bmi < 35) {
      return '肥満(2度)';
    }
    if ($bmi < 40) {
      return '肥満(3度)';
    }
    if (40 <= $bmi) {
      return '肥満(4度)';
    }
  }
  // get_result_color
  public function get_result_color()
  {
    $bmi = $this->get_bmi();
    if ($bmi < 18.5) {
      return '低体重';
    } elseif ($bmi < 25) {
      return '適正体重';
    } elseif ($bmi >= 25) {
      return '肥満';
    }
  }
}

$niimi = new User(184, 64);
// var_dump($niimi->set_values());
var_dump($niimi->get_bmi());
var_dump($niimi->get_appropriate_weight());
var_dump($niimi->get_result());
var_dump($niimi->get_result_color());
