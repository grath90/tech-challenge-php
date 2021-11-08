<?php

namespace App\Repository;

use App\Model\FormContent;
use Illuminate\Support\Collection;

interface FormContentRepositoryInterface
{
  public function find(): ?Model;
}