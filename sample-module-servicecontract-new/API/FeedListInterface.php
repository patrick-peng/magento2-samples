<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\SampleServiceContractNew\API;

interface FeedListInterface
{
    /**
     * @return \Magento\SampleServiceContractNew\API\Data\FeedInterface[]
     */
    public function getFeeds();
}
