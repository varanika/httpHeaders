<?php
/** @var xPDOTransport $transport */
/** @var array $options */
/** @var modX $modx */
if ($transport->xpdo) {
    $modx =& $transport->xpdo;

    $dev = MODX_BASE_PATH . 'Extras/httpHeaders/';
    /** @var xPDOCacheManager $cache */
    $cache = $modx->getCacheManager();
    if (file_exists($dev) && $cache) {
        if (!is_link($dev . 'assets/components/httpheaders')) {
            $cache->deleteTree(
                $dev . 'assets/components/httpheaders/',
                ['deleteTop' => true, 'skipDirs' => false, 'extensions' => []]
            );
            symlink(MODX_ASSETS_PATH . 'components/httpheaders/', $dev . 'assets/components/httpheaders');
        }
        if (!is_link($dev . 'core/components/httpheaders')) {
            $cache->deleteTree(
                $dev . 'core/components/httpheaders/',
                ['deleteTop' => true, 'skipDirs' => false, 'extensions' => []]
            );
            symlink(MODX_CORE_PATH . 'components/httpheaders/', $dev . 'core/components/httpheaders');
        }
    }
}

return true;