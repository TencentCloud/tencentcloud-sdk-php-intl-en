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
 * Statistical data
 *
 * @method string getTime() Obtain Start time of the time interval where the data is located, using [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I). For example, when the time granularity is day, 2018-12-01T00:00:00+08:00 means the interval from December 1, 2018 (inclusive) to December 2, 2018 (exclusive).
<li>For hour-level data, 2019-08-22T00:00:00+08:00 refers to the stats from 0:00 to 1:00 on August 22, 2019.</li>
<li>For daily-level data, 2019-08-22T00:00:00+08:00 refers to the stats of 2019-08-22.</li>
 * @method void setTime(string $Time) Set Start time of the time interval where the data is located, using [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I). For example, when the time granularity is day, 2018-12-01T00:00:00+08:00 means the interval from December 1, 2018 (inclusive) to December 2, 2018 (exclusive).
<li>For hour-level data, 2019-08-22T00:00:00+08:00 refers to the stats from 0:00 to 1:00 on August 22, 2019.</li>
<li>For daily-level data, 2019-08-22T00:00:00+08:00 refers to the stats of 2019-08-22.</li>
 * @method integer getValue() Obtain Data size.
<li>Data of storage space, in bytes.</li>
<li>Transcoding duration data, in seconds.</li>
<li>Traffic data, in bytes.</li>
<li>Bandwidth statistics in bit/s.</li>
<li>Live stream editing data, in seconds.</li>
<li>Loop banner data, in seconds.</li>
<li>Number of sub-applications. The unit is count.</li>
<li>Log service usage data, in counts.</li>
 * @method void setValue(integer $Value) Set Data size.
<li>Data of storage space, in bytes.</li>
<li>Transcoding duration data, in seconds.</li>
<li>Traffic data, in bytes.</li>
<li>Bandwidth statistics in bit/s.</li>
<li>Live stream editing data, in seconds.</li>
<li>Loop banner data, in seconds.</li>
<li>Number of sub-applications. The unit is count.</li>
<li>Log service usage data, in counts.</li>
 */
class StatDataItem extends AbstractModel
{
    /**
     * @var string Start time of the time interval where the data is located, using [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I). For example, when the time granularity is day, 2018-12-01T00:00:00+08:00 means the interval from December 1, 2018 (inclusive) to December 2, 2018 (exclusive).
<li>For hour-level data, 2019-08-22T00:00:00+08:00 refers to the stats from 0:00 to 1:00 on August 22, 2019.</li>
<li>For daily-level data, 2019-08-22T00:00:00+08:00 refers to the stats of 2019-08-22.</li>
     */
    public $Time;

    /**
     * @var integer Data size.
<li>Data of storage space, in bytes.</li>
<li>Transcoding duration data, in seconds.</li>
<li>Traffic data, in bytes.</li>
<li>Bandwidth statistics in bit/s.</li>
<li>Live stream editing data, in seconds.</li>
<li>Loop banner data, in seconds.</li>
<li>Number of sub-applications. The unit is count.</li>
<li>Log service usage data, in counts.</li>
     */
    public $Value;

    /**
     * @param string $Time Start time of the time interval where the data is located, using [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I). For example, when the time granularity is day, 2018-12-01T00:00:00+08:00 means the interval from December 1, 2018 (inclusive) to December 2, 2018 (exclusive).
<li>For hour-level data, 2019-08-22T00:00:00+08:00 refers to the stats from 0:00 to 1:00 on August 22, 2019.</li>
<li>For daily-level data, 2019-08-22T00:00:00+08:00 refers to the stats of 2019-08-22.</li>
     * @param integer $Value Data size.
<li>Data of storage space, in bytes.</li>
<li>Transcoding duration data, in seconds.</li>
<li>Traffic data, in bytes.</li>
<li>Bandwidth statistics in bit/s.</li>
<li>Live stream editing data, in seconds.</li>
<li>Loop banner data, in seconds.</li>
<li>Number of sub-applications. The unit is count.</li>
<li>Log service usage data, in counts.</li>
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

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
