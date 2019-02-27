<?php

namespace App\Http\Controllers;
use App\Http\Formatter\Formatter as Formatter;
use Storage;

class FormatterController extends Controller
{
  public function index()
  {
    $file = Storage::disk('local')->get('public/hotels.csv');
    $json = Formatter::make($file,"csv",",")->toJson();
    $xml = Formatter::make($file,"csv",",")->toXml("xml","utf-8","true");
    $yaml = Formatter::make($file,"csv",",")->toYaml();
    $array = Formatter::make($file,"csv",",")->toArray();
    dd($array);

  }
}
