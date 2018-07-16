<?php

\Magento\Framework\Component\ComponentRegistrar::register(
\Magento\Framework\Component\ComponentRegistrar::MODULE,
'AAXIS_Larry',
__DIR__
);

///打开app/etc/config/php文件后，发现没有刚才我们编写的module,
///这里需要利用终端进入到magento2的根目录执行magento命令：
//php bin/magento setup:upgrade
//执行完成之后，将会在config.php中看到刚才我们写的module。