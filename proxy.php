<?php


  set_time_limit(600000);

  // edit here:
  $prphp = 'domain.tld/pr.php';



  // don't touch
  $url = 'https://free-proxy-list.net/';

  $c = curl_init();
  curl_setopt($c, CURLOPT_URL, $url);
  curl_setopt($c, CURLOPT_TIMEOUT, 15);
  curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($c, CURLOPT_USERAGENT,
      'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:17.0) Gecko/20100101 Firefox/17.0');

  $link = curl_exec($c);


  $dom = new DOMDocument();
  @$dom->loadHTML($link);
  $xpath = new DOMXPath($dom);
  $nodes = $xpath->query('//textarea[@class="form-control"]');
  $i = 0;

  foreach($nodes as $node) {


      $array = preg_split("/\r\n|\n|\r/", $node->nodeValue);

      $res = array();

      $i = 0;


      foreach ($array as $key ) {
        $proxy = preg_replace("/[^0-9.:]/", "", $key);
        $prox = explode(':',$proxy);
        if(count(explode('.',$proxy)) > 1){
          $check = json_decode(file_get_contents($prphp . '?ip='.$prox[0].'&port='.$prox[1].'&timeout=5'), true);
          if($check['result']['success'] == true){
              $res[] = $check;

              $c = curl_init();
              curl_setopt($c, CURLOPT_URL, 'http://api.db-ip.com/v2/free/'.$prox[0]);
              curl_setopt($c, CURLOPT_TIMEOUT, 15);
              curl_setopt($c, CURLOPT_PROXY, $proxy);
              curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
              curl_setopt($c, CURLOPT_USERAGENT,
                  'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:17.0) Gecko/20100101 Firefox/17.0');
              $content = curl_exec($c);
              $res[] = json_decode($content, true);

              echo json_encode($res, true);

            exit();
          }
        }
      }

  }
echo 'no working proxy was found';
