<?php

namespace App\Repository\Eloquent;

use App\Models\LoremIpsum;
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

  public function getSection($section_id)
  {
    $content = $this->model->where('section_id', $section_id)->get();

    return $content;
  }
}