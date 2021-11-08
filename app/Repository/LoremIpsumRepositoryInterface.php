<?php

namespace App\Repository;

use App\Models\LoremIpsum;
use Illuminate\Support\Collection;

interface LoremIpsumRepositoryInterface
{
  public function getSection($section_id);
}