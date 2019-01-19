<?php

namespace App\Factories\Lang;

interface AbstractLang
{
    public function getDisplayName();

    public function getRepository();
}