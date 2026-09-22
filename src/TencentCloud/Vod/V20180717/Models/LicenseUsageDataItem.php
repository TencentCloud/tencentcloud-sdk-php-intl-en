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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * License request count statistics.
 *
 * @method string getTime() Obtain Start time of the time interval where the data resides, in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52). For example, if the time granularity is day, 2018-12-01T00:00:00+08:00 means the interval from December 1, 2018 (inclusive) to December 2, 2018 (exclusive).
 * @method void setTime(string $Time) Set Start time of the time interval where the data resides, in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52). For example, if the time granularity is day, 2018-12-01T00:00:00+08:00 means the interval from December 1, 2018 (inclusive) to December 2, 2018 (exclusive).
 * @method integer getCount() Obtain License request count.
 * @method void setCount(integer $Count) Set License request count.
 */
class LicenseUsageDataItem extends AbstractModel
{
    /**
     * @var string Start time of the time interval where the data resides, in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52). For example, if the time granularity is day, 2018-12-01T00:00:00+08:00 means the interval from December 1, 2018 (inclusive) to December 2, 2018 (exclusive).
     */
    public $Time;

    /**
     * @var integer License request count.
     */
    public $Count;

    /**
     * @param string $Time Start time of the time interval where the data resides, in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52). For example, if the time granularity is day, 2018-12-01T00:00:00+08:00 means the interval from December 1, 2018 (inclusive) to December 2, 2018 (exclusive).
     * @param integer $Count License request count.
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
        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}
