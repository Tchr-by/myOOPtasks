<?php
// Класс который связан с базовым классом baseClass.php
class connectClass {
    public $options;

    public function __construct(baseClass $config) { // Конструктор принимающий аргументы для "baseClass"
        $this->options = $config; //Запись аргументов в переменную
    }

    public function val() { // Функция, которая образщается к методу baseClass, возвращая baseClass->getVal()
        return $this->options->getVal();
    }
}