<?php
require_once 'vendor/autoload.php';

use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\Label\LabelAlignment;
use Endroid\QrCode\Label\Font\NotoSans;
use Endroid\QrCode\RoundBlockSizeMode;
use Endroid\QrCode\Writer\PngWriter;

header('Content-Type: application/json');

// Get the text from the form
$text = $_POST['text'] ?? '';

// Create a QR Code builder
$qrCode = Builder::create()
    ->writer(new PngWriter())
    ->data($text)
    ->encoding(new Encoding('UTF-8'))
    ->errorCorrectionLevel(ErrorCorrectionLevel::High)
    ->size(300)
    ->margin(10)
    ->roundBlockSizeMode(RoundBlockSizeMode::Margin)
    ->labelText('')
    ->labelFont(new NotoSans(20))
    ->labelAlignment(LabelAlignment::Center)
    ->validateResult(false)
    ->build();

// Generate a data URI
$dataUri = $qrCode->getDataUri();

// Return JSON with the data URI
echo json_encode(['dataUri' => $dataUri]);
