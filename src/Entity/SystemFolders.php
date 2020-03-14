<?php
/**
 * This file is part of the arhitector/yandex-disk library.
 *
 * (c) Dmitry Arhitector <dmitry.arhitector@yandex.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Arhitector\Yandex\Entity;

use Arhitector\Yandex\Entity;

/**
 * Addresses of system folders in the user's Disk.
 *
 * @package Arhitector\Yandex\Entity
 */
class SystemFolders extends Entity
{

    /**
     * @return string Path to the downloads folder
     */
    public function getDownloads(): string
    {
        return $this->get('downloads');
    }

    /**
     * @return string Path to the applications folder
     */
    public function getApplications(): string
    {
        return $this->get('applications');
    }

}