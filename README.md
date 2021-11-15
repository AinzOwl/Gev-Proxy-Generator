# Gev Proxy Generator

GPG is a simple PHP script that generate a proxy using free services on the web, the proxy is HTTP(s) and it generate it in json format, it was made using websites crawlers, 6 years old open-source code that I don't where to find it again... anyway its working like a charm :)

## Installation

anyway first you need to upload pr.php and get its link, since you'll be using it in the proxy.php after you upload it go to proxy.php at the very top you'll find this line 


```php

$prphp = 'domain.tld/pr.php';

```
just edit it with your pr.php location and then upload proxy.php and it should work :)

ps. if you are installing in a server or vps, you'll need php-curl and php-xml

## output example:
(IP / Port were censored)
```json
[
  {
    "result": {
      "success": true,
      "proxy": {
        "ip": "xx.xx.xx.xx",
        "port": "xxxx",
        "speed": 1866,
        "type": "http(s)"
      }
    }
  },
  {
    "ipAddress": "77.37.157.204",
    "continentCode": "EU",
    "continentName": "Europe",
    "countryCode": "RU",
    "countryName": "Russia",
    "stateProv": "Moscow",
    "city": "Moscow"
  }
]
```
/ [Get Free Server](https://discord.gg/wsSz5RSUGV) / [iDev](https://idev.pw) / [0x](https://0x.fit)

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT License](https://choosealicense.com/licenses/mit/)

Copyright (c) 2021 Gev

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
