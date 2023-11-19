<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * Statistics
 *
 * @method string getTime() Obtain Start time of data time range in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I). For example, if the time granularity is 1-day, `2018-12-01T00:00:00+08:00` represents the time range between December 1, 2018 (inclusive) and December 2, 2018 (not inclusive).
<li>For data at hourly level, `2019-08-22T00:00:00+08:00` indicates the statistics between 00:00 and 01:00 AM on August 22, 2019.</li>
<li>For data at daily level, `2019-08-22T00:00:00+08:00` indicates statistics on August 22, 2019.</li>
 * @method void setTime(string $Time) Set Start time of data time range in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I). For example, if the time granularity is 1-day, `2018-12-01T00:00:00+08:00` represents the time range between December 1, 2018 (inclusive) and December 2, 2018 (not inclusive).
<li>For data at hourly level, `2019-08-22T00:00:00+08:00` indicates the statistics between 00:00 and 01:00 AM on August 22, 2019.</li>
<li>For data at daily level, `2019-08-22T00:00:00+08:00` indicates statistics on August 22, 2019.</li>
 * @method integer getValue() Obtain Data size. 
<li>The data of the storage space, the unit is bytes. </li>
<li>Transcoding duration data, unit is seconds. </li>
<li>Traffic data, unit is bytes. </li>
<li>Bandwidth data, unit is bits per second. </li>
<li>Live broadcast clip data, the unit is seconds. </li>
<li>Carousel data, unit is seconds. </li>
<li>The number of sub-applications, the unit is one. </li>
 * @method void setValue(integer $Value) Set Data size. 
<li>The data of the storage space, the unit is bytes. </li>
<li>Transcoding duration data, unit is seconds. </li>
<li>Traffic data, unit is bytes. </li>
<li>Bandwidth data, unit is bits per second. </li>
<li>Live broadcast clip data, the unit is seconds. </li>
<li>Carousel data, unit is seconds. </li>
<li>The number of sub-applications, the unit is one. </li>
 */
class StatDataItem extends AbstractModel
{
    /**
     * @var string Start time of data time range in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I). For example, if the time granularity is 1-day, `2018-12-01T00:00:00+08:00` represents the time range between December 1, 2018 (inclusive) and December 2, 2018 (not inclusive).
<li>For data at hourly level, `2019-08-22T00:00:00+08:00` indicates the statistics between 00:00 and 01:00 AM on August 22, 2019.</li>
<li>For data at daily level, `2019-08-22T00:00:00+08:00` indicates statistics on August 22, 2019.</li>
     */
    public $Time;

    /**
     * @var integer Data size. 
<li>The data of the storage space, the unit is bytes. </li>
<li>Transcoding duration data, unit is seconds. </li>
<li>Traffic data, unit is bytes. </li>
<li>Bandwidth data, unit is bits per second. </li>
<li>Live broadcast clip data, the unit is seconds. </li>
<li>Carousel data, unit is seconds. </li>
<li>The number of sub-applications, the unit is one. </li>
     */
    public $Value;

    /**
     * @param string $Time Start time of data time range in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I). For example, if the time granularity is 1-day, `2018-12-01T00:00:00+08:00` represents the time range between December 1, 2018 (inclusive) and December 2, 2018 (not inclusive).
<li>For data at hourly level, `2019-08-22T00:00:00+08:00` indicates the statistics between 00:00 and 01:00 AM on August 22, 2019.</li>
<li>For data at daily level, `2019-08-22T00:00:00+08:00` indicates statistics on August 22, 2019.</li>
     * @param integer $Value Data size. 
<li>The data of the storage space, the unit is bytes. </li>
<li>Transcoding duration data, unit is seconds. </li>
<li>Traffic data, unit is bytes. </li>
<li>Bandwidth data, unit is bits per second. </li>
<li>Live broadcast clip data, the unit is seconds. </li>
<li>Carousel data, unit is seconds. </li>
<li>The number of sub-applications, the unit is one. </li>
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
