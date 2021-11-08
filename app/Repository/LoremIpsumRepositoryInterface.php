<?php

namespace App\Repository;

use App\Model\LoremIpsum;
use Illuminate\Support\Collection;

interface LoremIpsumRepositoryInterface
{
  public function find(): ?Model;
}