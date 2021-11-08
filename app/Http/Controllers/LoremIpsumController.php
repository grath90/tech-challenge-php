<?php

namespace App\Http\Controllers;

use App\Repository\LoremIpsumRepositoryInterface;

class LoremIpsumController extends Controller
{
  private $loremIpsumRepository;

  public function __construct(LoremIpsumRepositoryInterface $loremIpsumRepository)
  {
    $this->loremIpsumRepository = $loremIpsumRepository;
  }

  public function getContentForPath($section_id)
  {
    $loremIpsum = $this->loremIpsumRepository->getSection($section_id);
    
    return $loremIpsum;
  }
}