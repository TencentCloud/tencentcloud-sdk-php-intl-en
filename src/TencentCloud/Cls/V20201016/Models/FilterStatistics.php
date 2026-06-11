<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Task data filtering statistical information for delivery
 *
 * @method integer getOriginalCount() Obtain <p>Number of raw logs</p>
 * @method void setOriginalCount(integer $OriginalCount) Set <p>Number of raw logs</p>
 * @method integer getFilteredCount() Obtain <p>Number of filtered logs</p>
 * @method void setFilteredCount(integer $FilteredCount) Set <p>Number of filtered logs</p>
 * @method array getFilteredResult() Obtain <p>Filtered results</p>
 * @method void setFilteredResult(array $FilteredResult) Set <p>Filtered results</p>
 */
class FilterStatistics extends AbstractModel
{
    /**
     * @var integer <p>Number of raw logs</p>
     */
    public $OriginalCount;

    /**
     * @var integer <p>Number of filtered logs</p>
     */
    public $FilteredCount;

    /**
     * @var array <p>Filtered results</p>
     */
    public $FilteredResult;

    /**
     * @param integer $OriginalCount <p>Number of raw logs</p>
     * @param integer $FilteredCount <p>Number of filtered logs</p>
     * @param array $FilteredResult <p>Filtered results</p>
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("OriginalCount",$param) and $param["OriginalCount"] !== null) {
            $this->OriginalCount = $param["OriginalCount"];
        }

        if (array_key_exists("FilteredCount",$param) and $param["FilteredCount"] !== null) {
            $this->FilteredCount = $param["FilteredCount"];
        }

        if (array_key_exists("FilteredResult",$param) and $param["FilteredResult"] !== null) {
            $this->FilteredResult = $param["FilteredResult"];
        }
    }
}
