<?php
require 'vendor/autoload.php';

use Shotstack\Client\Api\EditApi;
use Shotstack\Client\Configuration;
use Shotstack\Client\Model\Edit;
use Shotstack\Client\Model\Output;
use Shotstack\Client\Model\Timeline;
use Shotstack\Client\Model\Track;
use Shotstack\Client\Model\Clip;
use Shotstack\Client\Model\VideoAsset;

$config = Configuration::getDefaultConfiguration()
    ->setHost('https://api.shotstack.io/stage')
    ->setApiKey('x-api-key', 'your_key_here'); // use the API key issued to you


$client = new EditApi(null, $config);
$file = fopen("mp4.csv","r");

while (! feof($file)) 
{
    $video_links[] = fgetcsv($file);
}

foreach ($video_links as $link)
{
	// print_r($link[0]);
	$client = new EditApi(null, $config);

	$videoAsset = new VideoAsset();
	$videoAsset
	    ->setSrc($link[0]);

	$videoClip = new Clip();
	$videoClip
	    ->setAsset($videoAsset)
	    ->setLength(25)
	    ->setStart(0);

	$track = new Track();
	$track->setClips([$videoClip]);


	$timeline = new Timeline();
	$timeline->setTracks([$track]);

	$output = new Output();
	$output
	    ->setFormat('mp3')
	    ->setResolution('preview');

	$edit = new Edit();
	$edit
	    ->setTimeline($timeline)
	    ->setOutput($output);


	try {
	        $response = $client->postRender($edit)->getResponse();
	    } 
	    catch (ApiException $e) 
	    {
	        die('Request failed: ' . $e->getMessage() . $e->getResponseBody());
	    }

	        echo $response->getMessage() . "\n";
	        echo ">> Now check the progress of your render by running:\n";
	        echo ">> php examples/status.php " . $response->getId() . "\n";

}

?>