<?php

namespace App\Http\Controllers;

use App\Repository\FormContentRepositoryInterface;
use Exception;

class FormContentController extends Controller
{
  private $formContentController;

  public function __construct(FormContentRepositoryInterface $formContentController)
  {
    $this->repository = $formContentController;
  }

  public function createContactPost($data)
  {
    try {
      if (!array_key_exists('email', $data)) {
        throw new Exception('Email is required!');
      }

      $exists = $this->repository->find($data['email']);

      if ($exists) {
        throw new Exception('User has already submitted a contact form.');
      }

      $this->repository->create($data);

      return;
    } catch (Exception $e) {
      throw $e;
    }
  }
}