<?php

namespace App\Repository\Eloquent;

use App\Model\LoremIpsum;
use App\Repository\LoremIpsumRepositoryInterface;
use Illuminate\Support\Collection;

class LoremIpsumRepository extends BaseRepository implements LoremIpsumRepositoryInterface
{
  /**
   * Constructor
   * 
   * @param LoremIpsum $model
   */
  public function __construct(LoremIpsum $model)
  {
    parent::__construct($model);
  }

  /**
   * @return Collection
   */
  public function all(): Collection
  {
    return $this->model->all();
  }
}