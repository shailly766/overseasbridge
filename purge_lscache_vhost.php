<?php
header('X-LiteSpeed-Purge: *');
header('Cache-Control: no-cache, must-revalidate');
echo 'PURGE_SENT_FOR_ALL_PAGES';
