<?php
error_reporting(0);
print 'Running ...';
system('sudo apt-get install python3');
system('clear');
$secret = /*readline('secret : ')*/'01010101010101010101010101010101';
$port = /*readline('port : ')*/'1';
$tag = /*readline('tag : ')*/'106b1fbbd9e008d7edb77dcef5504b96';
$tls = /*readline('tls : ')*/'lib.arvancloud.com';
system('clear');
print 'Running ...';
try {
system('curl -o MTProo.sh -L https://git.io/fjo34');
$ok = 'echo -e "'.$port.'\nMTProo\n1\n'.$secret.'\nn\nn\n3\ny\n'.$tag.'\n'.$tls.'\n\n" | bash MTProo.sh';
$proxy = shell_exec($ok);
preg_match('~proxy?server=(?:[\w|\.\-]+)&port=\d+&secret=.+$~i', $proxy, $match);
print 'Proxy : https://t.me/'.$match[0];
} catch (\Throwable $e) {
print $e->getMessage();
}
/*
system('sudo systemctl start mtprotoproxy');
system('echo -e "2\ny" | bash MTProo.sh');
system('echo -e "9\ny" | bash MTProo.sh');*/
?>
