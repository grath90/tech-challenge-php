<?php

namespace App\Repository\Eloquent;

use App\Model\FormContent;
use App\Repository\FormContentRepositoryInterface;
use Illuminate\Support\Collection;

class FormContentRepository extends BaseRepository implements FormContentRepositoryInterface
{
  /**
   * Constructor
   * 
   * @param FormContent $model
   */
  public function __construct(FormContent $model)
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