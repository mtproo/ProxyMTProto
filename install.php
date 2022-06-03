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
