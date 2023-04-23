<?php

namespace app\core;

abstract class Model
{

  public const RULE_REQUIRED = 'required';
  public const RULE_EMAIL = 'email';
  public const RULE_MIN = 'min';
  public const RULE_MAX = 'max';
  public const RULE_MATCH = 'match';

  public $errors = [];

  public function loadData($data)
  {
    foreach ($data as $key => $value) {
      if (property_exists($this, $key)) {
        $this->{$key} = $value;
      }
    }
  }

  abstract public function rules();

  public function validate()
  {

    foreach ($this->rules() as $attribute => $rules) {
      $value = $this->{$attribute} ?? null;
      foreach ($rules as $rule) {
        $ruleName = $rule;
        if (!is_string($ruleName)) {
          $ruleName = $rule[0];
        }

        if ($ruleName === self::RULE_REQUIRED && !$value) {
          $this->addError($attribute, self::RULE_REQUIRED);
        }

        if ($ruleName === self::RULE_EMAIL && !filter_var($value, FILTER_VALIDATE_EMAIL)){
          $this->addError($attribute, self::RULE_EMAIL);
        }
      }
    }
  }

  public  function addError(string $attribute, string $rule)
  {
    $this->errors[$attribute][] = $rule;
  }
}
