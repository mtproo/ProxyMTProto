<?php
error_reporting(0);
print 'Running ...';
system('sudo apt-get install python3');
system('clear');
$secret = readline('secret : ') ?? '01010101010101010101010101010101';
$port = readline('port : ') ?? 443;
$tag = readline('tag : ') ?? '106b1fbbd9e008d7edb77dcef5504b96';
$tls = readline('tls : ') ?? 'lib.arvancloud.com';
system('clear');
print 'Running ...';
try {
  system('curl -o MTProo.sh -L https://git.io/fjo34');
  system("echo -n '$port\nMTProo\n1\n$secret\nn\nn\n3\ny\n$tag\n$tls\n\n' | bash MTProo.sh");
} catch (\Throwable $e) {
  print $e->getMessage();
}
system('sudo systemctl start mtprotoproxy');
system('echo -n "2\ny" | bash MTProo.sh');
system('echo -n "9\ny" | bash MTProo.sh');
system('clear');
$proxy = system('echo 1 | bash MTProo.sh');
?>
