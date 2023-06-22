<?php

return new \Kiboko\Component\Runtime\Pipeline\Console(new \Symfony\Component\Console\Output\ConsoleOutput(), new \Kiboko\Component\Pipeline\Pipeline(new \Kiboko\Component\Pipeline\PipelineRunner(new \Psr\Log\NullLogger())));