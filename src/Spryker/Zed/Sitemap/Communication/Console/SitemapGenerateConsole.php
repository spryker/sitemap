<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\Sitemap\Communication\Console;

use Spryker\Zed\Kernel\Communication\Console\Console;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * @method \Spryker\Zed\Sitemap\Business\SitemapFacadeInterface getFacade()
 */
class SitemapGenerateConsole extends Console
{
    /**
     * @var string
     */
    public const COMMAND_NAME = 'sitemap:generate';

    /**
     * @var string
     */
    public const DESCRIPTION = 'Generates sitemap XML files';

    protected function configure(): void
    {
        $this->setName(static::COMMAND_NAME);
        $this->setDescription(static::DESCRIPTION);

        parent::configure();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $this->getFacade()->generateSitemapFiles();

        return static::CODE_SUCCESS;
    }
}
