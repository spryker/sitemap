<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Yves\Sitemap\Dependency\Service;

interface SitemapToFlysystemServiceInterface
{
    public function readStream(string $filesystemName, string $path): mixed;

    public function getTimestamp(string $filesystemName, string $path): ?int;

    public function has(string $filesystemName, string $path): bool;
}
