<?php
class LoremIpsumGenerator {
	/**
	*	Copyright (c) 2009, Mathew Tinsley (tinsley@tinsology.net)
	*	All rights reserved.
	*
	*	Redistribution and use in source and binary forms, with or without
	*	modification, are permitted provided that the following conditions are met:
	*		* Redistributions of source code must retain the above copyright
	*		  notice, this list of conditions and the following disclaimer.
	*		* Redistributions in binary form must reproduce the above copyright
	*		  notice, this list of conditions and the following disclaimer in the
	*		  documentation and/or other materials provided with the distribution.
	*		* Neither the name of the organization nor the
	*		  names of its contributors may be used to endorse or promote products
	*		  derived from this software without specific prior written permission.
	*
	*	THIS SOFTWARE IS PROVIDED BY MATHEW TINSLEY ''AS IS'' AND ANY
	*	EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
	*	WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
	*	DISCLAIMED. IN NO EVENT SHALL <copyright holder> BE LIABLE FOR ANY
	*	DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
	*	(INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
	*	LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND
	*	ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
	*	(INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
	*	SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
	*/
	
	private $words, $wordsPerParagraph, $wordsPerSentence;
	
	function __construct($wordsPer = 100)
	{
		$this->wordsPerParagraph = $wordsPer;
		$this->wordsPerSentence = 24.460;
		$this->words = array(
		'lorem',
		'ipsum',
		'dolor',
		'sit',
		'amet',
		'consectetur',
		'adipiscing',
		'naked',
		'elit',
		'curabitur',
		'vel',
		'hendrerit',
		'hendrix',
		'zappa',
		'libero',
		'velluvial matrix',
		'elephant',
		'bandit',
		'nun',
		'ordinary',
		'odious',
		'coupling',
		'U-joint',
		'Johnson rod',
		'ut',
		'hut',
		'butt',
		'landing strip',
		'orci',
		'orca',
		'porcine',
		'gravida',
		'gravity',
		'gravy',
		'fragment',
		'pull tab',
		'whale tail',
		'thong',
		'backless',
		'imperdiet',
		'naked Anne Hathaway',
		'purus',
		'porcelain',
		'putrid',
		'odius',
		'lacinia',
		'a',
		'pretium',
		'quis',
		'nude',
		'congue',
		'congo',
		'conga',
		'aluminum',
		'praesent',
		'sagittis',
		'salami',
		'effendi',
		'laoreet',
		'auctor',
		'mauris',
		'nude Jennifer Lopez',
		'non',
		'velit',
		'eros',
		'coprophagus',
		'dictum',
		'proin',
		'groin',
		'booty shorts',
		'accumsan',
		'sapien',
		'nec',
		'massa',
		'volutpat',
		'Maroon 5 torrent',
		'venenatis',
		'sed',
		'eu',
		'molestie',
		'boobies',
		'sweater meat',
		'sweater puppies',
		'Bulgarian Fun Bags',
		'boner juice',
		'delenda',
		'Cary Grant',
		'Danny Thomas',
		'Leo DiCaprio',
		'Justin Bieber',
		'Selena Gomez',
		'Mary Tyler Moore',
		'Sydney Sweeney',
		'lacus',
		'sheet metal screws',
		'quisque',
		'porttitor',
		'ligula',
		'dui',
		'mollis',
		'tempus',
		'buck naked',
		'buckwild',
		'at',
		'magna',
		'vestibulum',
		'turpis',
		'turgid',
		'ac',
		'diam',
		'tincidunt',
		'id',
		'ego',
		'superego',
		'condimentum',
		'halter top',
		'tube top',
		'booty shorts',
		'lingerie',
		'camisole',
		'tap pants',
		'Wicked Weasel',
		'ketchup',
		'salt',
		'pepper',
		'tabasco',
		'taco sauce',
		'mustard',
		'mayonaise',
		'pickle relish',
		'drawn butter',
		'ketchup',
		'salt',
		'pepper',
		'tabasco',
		'sandwich sauce',
		'mustard',
		'aoli',
		'mayonaise',
		'pickle relish',
		'drawn butter',
		'ketchup',
		'salt',
		'pepper',
		'tabasco',
		'taco sauce',
		'mustard',
		'mayonaise',
		'pickle relish',
		'drawn butter',
		'mint chutney',
		'rag weed',
		'sauerkraut',
		'kraut',
		'grilled onions',
		'meteoritic',
		'octahedral',
		'Liberace',
		'Matt Damon',
		'Jennifer Lopez',
		'Jennifer Lawrence',
		'enim',
		'taint',
		'beach body',
		'baby bounce back body',
		'sodales',
		'partially nude',
		'in',
		'revealing gown',
		'hac',
		'panties',
		'lingerie',
		'habitasse',
		'platea',
		'dictumst',
		'aenean',
		'Parisian',
		'Scotsman',
		'Suomi',
		'Burgundian',
		'neque',
		'Royalty',
		'Aristocracy',
		'Portia Rossi',
		'completely nude',
		'armigerous',
		'lyonnais',
		'fusce',
		'augue',
		'Eliot Spitzer',
		'Nancy Grace',
		'Don Jr',
		'leo',
		'eget',
		'semper',
		'mattis',
		'tortor',
		'scelerisque',
		'nulla',
		'chafing the apricot',
		'interdum',
		'tellus',
		'malesuada',
		'rhoncus',
		'Rhonda',
		'Rhoda',
		'Vladimir Putin',
		'unclothed',
		'porta',
		'sem',
		'aliquet',
		'et',
		'nam',
		'spit',
		'spitto',
		'suspendisse',
		'potenti',
		'vivamus',
		'luctus',
		'fringilla',
		'erat',
		'donec',
		'justo',
		'vehicula',
		'ultricies',
		'varius',
		'ante',
		'topless',
		'see-through',
		'primis',
		'Lindsey Lohan',
		'bikini',
		'bikini-a-day',
		'bikini-a-go-go',
		'faucibus',
		'ultrices',
		'posuere',
		'cubilia',
		'curae',
		'etiam',
		'cursus',
		'aliquam',
		'quam',
		'dapibus',
		'nisl',
		'nubile',
		'feugiat',
		'egestas',
		'class',
		'strapless',
		'bodice',
		'aptent',
		'egotastic',
		'craptastic',
		'crapaganda',
		'Jimmy Hoffa',
		'Jimmy Fallon',
		'Seth Meyers',
		'Jimmy Carter',
		'Jimmy The Greek',
		'taciti',
		'sociosqu',
		'ad',
		'litora',
		'degrading',
		'clitoris',
		'torquent',
		'per',
		'conubia',
		'conubial bliss',
		'nostra',
		'inceptos',
		'himenaeos',
		'los hermanos',
		'phasellus',
		'nubile',
		'Windows 7',
		'Windows 8',
		'Windows 10',
		'Snow leopard',
		'iPod',
		'iPad',
		'iPhone',
		'iOS',
		'bare-ass',
		'nibh',
		'pulvinar',
		'vitae',
		'urna',
		'iaculis',
		'lobortis',
		'stark naked',
		'nisi',
		'viverra',
		'arcu',
		'morbi',
		'pellentesque',
		'metus',
		'Harry Potter',
		'flagrante delecti',
		'commodo',
		'ut',
		'butt naked',
		'facilisis',
		'Emma Watson',
		'felis',
		'tristique',
		'ullamcorper',
		'placerat',
		'aenean',
		'convallis',
		'sollicitudin',
		'integer',
		'rutrum',
		'duis',
		'est',
		'etiam',
		'bibendum',
		'donec',
		'bukakke',
		'hentai',
		'phallus',
		'gangnam style!',
		'Harlem Shake',
		'maecenas',
		'mi',
		'fermentum',
		'Cindy Crawford',
		'Brandi Glanville',
		'Blake Lively',
		'Greg Louganis',
		'Matt Lauer',
		'A-Rod',
		'Arthur Murray',
		'thigh-high leather boots',
		'consequat',
		'suscipit',
		'decroded',
		'nekkid',
		'unclothed',
		'sky-clad',
		'aliquam',
		'habitant',
		'senectus',
		'netus',
		'fetus',
		'fames',
		'quisque',
		'euismod',
		'Jennifer Love Hewitt',
		'chrono-synclastic infundibulum',
		'curabitur',
		'lectus',
		'fornicatu',
		'tempor',
		'risus',
		'booty',
		'sideboob',
		'bewb',
		'boobs',
		'ta tas',
		'cray cray',
		'cras' );
	}
		
	function getContent($count, $format = 'html', $loremipsum = false)
	{
		$format = strtolower($format);
		
		if($count <= 0)
			return '';

		switch($format)
		{
			case 'txt':
				return $this->getText($count, $loremipsum);
			case 'plain':
				return $this->getPlain($count, $loremipsum);
			default:
				return $this->getHTML($count, $loremipsum);
		}
	}
	
	private function getWords(&$arr, $count, $loremipsum)
	{
		$i = 0;
		if($loremipsum)
		{
			$i = 2;
			$arr[0] = 'lorem';
			$arr[1] = 'ipsum';
		}
		
		for($i; $i < $count; $i++)
		{
			$index = array_rand($this->words);
			$word = $this->words[$index];
			//echo $index . '=>' . $word . '<br />';
			
			if($i > 0 && $arr[$i - 1] == $word)
				$i--;
			else
				$arr[$i] = $word;
		}
	}
	
	private function getPlain($count, $loremipsum, $returnStr = true)
	{
		$words = array();
		$this->getWords($words, $count, $loremipsum);
		//print_r($words);
		
		$delta = $count;
		$curr = 0;
		$sentences = array();
		while($delta > 0)
		{
			$senSize = $this->gaussianSentence();
			//echo $curr . '<br />';
			if(($delta - $senSize) < 4)
				$senSize = $delta;

			$delta -= $senSize;
			
			$sentence = array();
			for($i = $curr; $i < ($curr + $senSize); $i++)
				$sentence[] = $words[$i];

			$this->punctuate($sentence);
			$curr = $curr + $senSize;
			$sentences[] = $sentence;
		}
		
		if($returnStr)
		{
			$output = '';
			foreach($sentences as $s)
				foreach($s as $w)
					$output .= $w . ' ';
					
			return $output;
		}
		else
			return $sentences;
	}
	
	private function getText($count, $loremipsum)
	{
		$sentences = $this->getPlain($count, $loremipsum, false);
		$paragraphs = $this->getParagraphArr($sentences);
		
		$paragraphStr = array();
		foreach($paragraphs as $p)
		{
			$paragraphStr[] = $this->paragraphToString($p);
		}
		
		$paragraphStr[0] = "\t" . $paragraphStr[0];
		return implode("\n\n\t", $paragraphStr);
	}
	
	private function getParagraphArr($sentences)
	{
		$wordsPer = $this->wordsPerParagraph;
		$sentenceAvg = $this->wordsPerSentence;
		$total = count($sentences);
		
		$paragraphs = array();
		$pCount = 0;
		$currCount = 0;
		$curr = array();
		
		for($i = 0; $i < $total; $i++)
		{
			$s = $sentences[$i];
			$currCount += count($s);
			$curr[] = $s;
			if($currCount >= ($wordsPer - round($sentenceAvg / 2.00)) || $i == $total - 1)
			{
				$currCount = 0;
				$paragraphs[] = $curr;
				$curr = array();
				//print_r($paragraphs);
			}
			//print_r($paragraphs);
		}
		
		return $paragraphs;
	}
	
	private function getHTML($count, $loremipsum)
	{
		$sentences = $this->getPlain($count, $loremipsum, false);
		$paragraphs = $this->getParagraphArr($sentences);
		//print_r($paragraphs);
		
		$paragraphStr = array();
		foreach($paragraphs as $p)
		{
			$paragraphStr[] = "<p>\n" . $this->paragraphToString($p, true) . '</p>';
		}
		
		//add new lines for the sake of clean code
		return implode("\n", $paragraphStr);
	}
	
	private function paragraphToString($paragraph, $htmlCleanCode = false)
	{
		$paragraphStr = '';
		foreach($paragraph as $sentence)
		{
			foreach($sentence as $word)
				$paragraphStr .= $word . ' ';
				
			if($htmlCleanCode)
				$paragraphStr .= "\n";
		}		
		return $paragraphStr;
	}
	
	/*
	* Inserts commas and periods in the given
	* word array.
	*/
	private function punctuate(& $sentence)
	{
		$count = count($sentence);
		$sentence[$count - 1] = $sentence[$count - 1] . '.';
		
		if($count < 4)
			return $sentence;
		
		$commas = $this->numberOfCommas($count);
		
		for($i = 1; $i <= $commas; $i++)
		{
			$index = (int) round($i * $count / ($commas + 1));
			
			if($index < ($count - 1) && $index > 0)
			{
				$sentence[$index] = $sentence[$index] . ',';
			}
		}
	}
	
	/*
	* Determines the number of commas for a
	* sentence of the given length. Average and
	* standard deviation are determined superficially
	*/
	private function numberOfCommas($len)
	{
		$avg = (float) log($len, 6);
		$stdDev = (float) $avg / 6.000;
		
		return (int) round($this->gauss_ms($avg, $stdDev));
	}
	
	/*
	* Returns a number on a gaussian distribution
	* based on the average word length of an english
	* sentence.
	* Statistics Source:
	*	http://hearle.nahoo.net/Academic/Maths/Sentence.html
	*	Average: 24.46
	*	Standard Deviation: 5.08
	*/
	private function gaussianSentence()
	{
		$avg = (float) 24.460;
		$stdDev = (float) 5.080;
		
		return (int) round($this->gauss_ms($avg, $stdDev));
	}
	
	/*
	* The following three functions are used to
	* compute numbers with a guassian distrobution
	* Source:
	* 	http://us.php.net/manual/en/function.rand.php#53784
	*/
	private function gauss()
	{   // N(0,1)
		// returns random number with normal distribution:
		//   mean=0
		//   std dev=1
		
		// auxilary vars
		$x=$this->random_0_1();
		$y=$this->random_0_1();
		
		// two independent variables with normal distribution N(0,1)
		$u=sqrt(-2*log($x))*cos(2*pi()*$y);
		$v=sqrt(-2*log($x))*sin(2*pi()*$y);
		
		// i will return only one, couse only one needed
		return $u;
	}

	private function gauss_ms($m=0.0,$s=1.0)
	{
		return $this->gauss()*$s+$m;
	}

	private function random_0_1()
	{
		return (float)rand()/(float)getrandmax();
	}

}

function delay_a_while() {
	$delays = array(1, 2, 3, 5, 7, 10, 11, 15, 17, 19, 20, 20, 21, 21, 22, 23, 23);
	$my_delay = $delays[array_rand($delays, 1)];
	echo "<!-- Sleeping $my_delay seconds -->\n";
	sleep($my_delay);
}

function rnd_bin($length)
{
    while(@$c++ * 16 < $length)
        @$tmp .= md5(mt_rand(), true);
    echo substr($tmp, 0, $length);
}

function send_favicon() {
	send_image_size('gif', 16, 16);
}

function send_image($suffix) {
	$width = rand(100, 500);
	$height = rand(100, 500);
	send_image_size($suffix, $width, $height);
}

function send_image_size($suffix, $width, $height) {

	$img = imagecreatetruecolor($width, $height);

	// define colors
	$red   = imagecolorallocate($img, rand(0, 255), rand(0, 255), rand(0, 255));
	$blue  = imagecolorallocate($img, rand(0, 255), rand(0, 255), rand(0, 255));
	$green = imagecolorallocate($img, rand(0, 255), rand(0, 255), rand(0, 255));
	$white = imagecolorallocate($img, rand(0, 255), rand(0, 255), rand(0, 255));
	$black = imagecolorallocate($img, rand(0, 255), rand(0, 255), rand(0, 255));
	$smurf = imagecolorallocate($img, rand(0, 255), rand(0, 255), rand(0, 255));
	$vulture = imagecolorallocate($img, rand(0, 255), rand(0, 255), rand(0, 255));

	$color = array($smurf, $vulture, $red, $blue, $green, $white, $black);

	// set background color
	imagefill($img, 0, 0, $red );

	// draw some filled rectangles
	$rect_cnt = rand(3, 20);
	for ($rect = 0; $rect < $rect_cnt; ++$rect) {
		$xyz = 10*($rect + 1);  // Make them smaller every iteration
		imagefilledrectangle(
			$img,
			rand($xyz, $width - $xyz),
			rand($xyz, $width - $xyz),
			rand($xyz, $height - $xyz),
			rand($xyz, $height - $xyz),
			$color[array_rand($color)]
		);
	}

	switch ($suffix) {
	case 'png':
		imagepng($img);
		break;
	case 'gif':
		imagegif($img);
		break;
	case 'jpeg':
	case 'jpg':
		imagejpeg($img, NULL, rand(0, 100));
		break;
	}
	imagedestroy($img);
}

function randomstring() {
	$ary = array(
		'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm',
		'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z',
		'.', '_', '-', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9',
		'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M',
		'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z',
		'?', ',', '"', '(', ')', '{', '}', '[', ']', ':', '!', '@', '#',
		'$', '%', '^', '*', '-', '+', '=', ' ', ' ', ' ', '	', '	'
	);

	$rstring = '';

	$max = rand(3,20);

	for ($i = 0; $i < $max; ++$i) {
		$letter = $ary[array_rand($ary)];
		$rstring .= $letter;
	}
	return $rstring;
}

function random_domain() {
	$suffixes = array(
		'com', 'net', 'org', 'info', 'mobi', 'xxx', 'uk', 'cn', 'mn',
		'tv', 'ca', 'us', 'fart', 'fr', 'uk', 'cx'
	);
	return $suffixes[array_rand($suffixes)];
}

function random_identifier() {
	$first_letter = array(
		'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm',
		'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z',
		'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M',
		'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'
	);
	$next_letter = array(
		'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm',
		'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z',
		'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M',
		'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z',
		'_', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9'
	);

	$random_ident = $first_letter[array_rand($first_letter)];

	$max = rand(3,20);

	for ($i = 0; $i < $max; ++$i) {
		$random_ident .= $next_letter[array_rand($next_letter)];
	}
	return $random_ident;
}

function random_img_url() {
	$img_url_suffixes = array('png', 'gif', 'jpg');
	$suffix = $img_url_suffixes[array_rand($img_url_suffixes)];
	$url = random_identifier() . '.'. $suffix;
	$depth = rand(0, 4);
	for ($i = 0; $i < $depth; ++$i) {
		$url = random_identifier().'/'.$url;
	}
	return $url;
}


function random_url() {
	$url_suffixes = array('shtml', 'jsp', 'cfm', 'htm', 'html', 'html', 'html', 'html', 'png', 'gif', 'jpg', 'mp3', 'torrent', 'tar.gz');
	$url = random_identifier() . '.'. $url_suffixes[array_rand($url_suffixes)];
	$depth = rand(0, 4);
	for ($i = 0; $i < $depth; ++$i) {
		$url = random_identifier().'/'.$url;
	}

	if (rand(0,5) == 5) {
		$url = 'http://' . random_identifier() . '.' . random_domain() . '/' . $url;
	}
	return $url;
}

# Set a bunch of cookies in the browser, none
# of them making any sense, some of them invalid,
# in that they have the wrong domain.
if (rand(0, 1)) {
	$host = $_SERVER["SERVER_NAME"];
	$expire = time()+60*60*24*rand(1,33);
	setcookie("user", randomstring(), $expire, $host);
	setcookie("JSESSIONID", randomstring(), $expire, $host);
	setcookie("PHPSESSIONID", randomstring(), $expire, $host);
	setcookie("SESSIONID", randomstring(), $expire, $host);
	setcookie(random_identifier(), randomstring(), $expire, $host);

	# These almost always have a domain that makes the browser not save them.
	# Who knows what a bot does with a cookie?
	setcookie(random_identifier(), randomstring(), $expire, ".".random_identifier().".com");
	$cookie_cnt = rand(0, 25);
	for ($i = 0; $i < $cookie_cnt; ++$i) {
		$expire = time()+60*60*24*rand(21, 67);
		setcookie(
			random_identifier(),
			randomstring(),
			$expire,
			$host
		);
	}
}

$url = parse_url($_SERVER['SCRIPT_URL']);
$path = $url['path'];
if ($path == '/robots.txt') {
	header("Content-type: text/text");
?>
User-agent: *
Allow: /

User-agent: *
Disallow: /porn

User-agent: *
Disallow: /private

User-agent: *
Allow: /<?php
		echo random_identifier(). "\n";
		exit(0);  # robots.txt sent to a "robot".
} else if ($path == "/favicon.ico") {
	header("Content-type: image/x-icon");
	send_favicon();
	exit(0);
}
	if (strstr($path, ".jpg") || strstr($path, ".jpeg")) {
		header("Content-type: image/jpeg");
		send_image('jpg');
		exit(0);
	}
	if (strstr($path, ".gif")) {
		header("Content-type: image/gif");
		send_image('gif');
		exit(0);
	}
	if (strstr($path, ".png")) {
		header("Content-type: image/png");
		send_image('png');
		exit(0);
	}
	if (strstr($path, ".git/config")) {
		header("Content-Type: application/octet-stream");
?>[core]
	repositoryformatversion = 0
	filemode = true
	bare = false
	logallrefupdates = true
[remote "origin"]
	url = git@github.com:yorgi-gromolski/spintronic-tractor-parts.git
	fetch = +refs/heads/*:refs/remotes/origin/*
[branch "main"]
	remote = origin
	merge = refs/heads/main
[branch "fuck-you-moron"]
	remote = origin
	merge = refs/heads/fuck-you-moron
<?php
	}
	if (strstr($path, ".torrent")) {
		header("Content-Type: application/x-bittorrent");
		header("Content-Transfer-Encoding: binary");
		header("Content-Length: 2048");
		# Someday, this should send a torrent-a-like stream of randomness.
		rnd_bin(2048);
		exit(0);
	}
	if (strstr($path, ".mp3")) {
		header("Content-Type: audio/mpeg");
		header("Content-Transfer-Encoding: binary");
		header("Content-Length: 4096");
		# Someday, this should send an mp3-a-like stream of randomness.
		rnd_bin(4096);
		exit(0);
	}
	if (strstr($path, ".gz")) {
		header("Content-Type: application/octet-stream");
		header("Content-Transfer-Encoding: binary");
		# Should I experiment with sending more/less than
		# Content-Length says, just to be a punk?
		#header("Content-Length: 4096");
		rnd_bin(8192);
		exit(0);
	}
	if (($path != '/') && !strpos($path, ".htm") && !strpos($path, ".php")) {
		header("Content-Type: application/stupid-motherfucker");
		header("Content-Transfer-Encoding: binary");
		header("Content-Length: 4096");
		rnd_bin(mt_rand(1024, 8192));
		exit(0);
	}
	# Not sending robots.txt, not sending an image, just send semi-random
	# HTML.
	header("Content-type: text/html");

	$lig = new LoremIpsumGenerator();
?>
<html>
<head>
<meta name="google-site-verification" content="<?php echo random_identifier();?>" />
<title><?php echo $lig->getContent(rand(1, 5), 'txt'); ?></title>
</head>
<body>
<h1><?php echo $lig->getContent(rand(2, 6), 'txt'); ?></h1>
<?php

# Tarpit.
delay_a_while();

# About half the time, put a "mailto:" URL on the page.
if (rand(1,10) < 5) {
	echo "<center><a href=\"mailto:".random_identifier().'@'.random_identifier().'.'.random_domain()."\">".random_identifier()."</a></center>";
}

$para_cnt = rand(3, 15);  # How many paragraphs
for ($para = 0; $para < $para_cnt; ++$para) {

	# Put a header every so often
	if (rand(1,2) == 2) {
		echo "<h2>".$lig->getContent(rand(2,6))."</h2>\n";
	}

	# Do something for every "paragraph"
	switch  (rand(1, 4)) {
	case 1:  # An <img> URL - show a random image. Unless rewrite is correct
		# these will typically show as broken links.
		echo "<img src='" . random_img_url() . "' />\n";
		break;

	case 2: # Link to another URL, or to a random image.
		switch (rand(1,4)) {
		case 1:
			echo "<p><a href='" . random_url() . "'>Click Here</a></p>.\n";
			break;
		case 2:
			echo "<p>Click <a href='" . random_url() . "'>Here</a> for more details.</p>.\n";
			break;
		case 3:
			echo "<p><a href='" . random_img_url() . "'>See Boobs Here!</a></p>.\n";
			break;
		}
		break;

	case 3: # Some text
		echo $lig->getContent(rand(10, 120));
		# Link to "more" of the same.
		if (rand(1,2) == 1) {
			echo "<p>More <a href='" . random_url() . "'>Here</a></p>.\n";
		}
		break;

	case 4:  # A list, sometimes ordered, sometimes not.
		if (rand(1,2) == 1) {
			echo '<ul>'."\n";
			$endlist = '</ul>';
		} else {
			echo '<ol>'."\n";
			$endlist = '</ol>';
		}
		$li_cnt = rand(2, 10);
		for ($li = 0; $li < $li_cnt; ++$li) {
			echo "<li>";
			# Each list item has a 1-in-3 chance of being a link,
			# 2-in-3 chance of just being some text.
			if (rand(1,3) == 2) {
				echo "<a href='"
				.random_url()
				."'>click "
				. randomstring()
				. "</a>";
			} else {
				echo $lig->getContent(rand(1, 12));
			}
			echo "</li>";
		}
		echo $endlist."\n";
		break;
	}
}
?>
<p><em>Copyright (C) 2012 - 2013</em></p>
</body>
</html>
