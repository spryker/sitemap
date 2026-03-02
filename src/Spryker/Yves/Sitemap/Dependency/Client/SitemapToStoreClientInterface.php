<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Yves\Sitemap\Dependency\Client;

use Generated\Shared\Transfer\StoreTransfer;

interface SitemapToStoreClientInterface
{
    public function getCurrentStore(): StoreTransfer;
}
