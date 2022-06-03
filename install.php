<?php
error_reporting(0);
print 'Running ...';
system('sudo apt-get install python3');
system('clear');
$secret = readline('secret : ');
$port = readline('port : ');
$tag = readline('tag : ');
$tls = readline('tls : ');
system('clear');
print 'Running ...';
try {
system('curl -o MTProo.sh -L https://git.io/fjo34');
print 'echo -e "'.$port.'\nMTProo\n1\n'.$secret.'\nn\nn\n3\ny\n'.$tag.'\n'.$tls.'\n\n" | bash MTProo.sh';
$proxy = shell_exec('echo -e "'.$port.'\nMTProo\n1\n'.$secret.'\nn\nn\n3\ny\n'.$tag.'\n'.$tls.'\n\n" | bash MTProo.sh');
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
