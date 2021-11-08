<?php

namespace App\Http\Controllers;

class LoremIpsumController extends Controller
{
  private $loremIpsumRepository;

  public function __construct(LoremIpsumRepositoryInterface $loremIpsumRepository)
  {
    $this->loremIpsumRepository = $loremIpsumRepository;
  }

  public function getContentForPath()
  {
    $loremIpsum = $this->loremIpsumRepository->find('');

    return $loremIpsum;
  }
}