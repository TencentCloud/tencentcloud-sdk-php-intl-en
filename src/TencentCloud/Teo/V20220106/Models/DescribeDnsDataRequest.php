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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDnsData request structure.
 *
 * @method string getStartTime() Obtain Start time
 * @method void setStartTime(string $StartTime) Set Start time
 * @method string getEndTime() Obtain End time
 * @method void setEndTime(string $EndTime) Set End time
 * @method array getFilters() Obtain Filter parameters
 * @method void setFilters(array $Filters) Set Filter parameters
 * @method string getInterval() Obtain Time granularity. The default value is `min`. The server can adapt to the time granularity specified.
Valid values:
`min`: 1 minute
`5min`: 5 minutes
`hour`: 1 hour
`day`: 1 day
 * @method void setInterval(string $Interval) Set Time granularity. The default value is `min`. The server can adapt to the time granularity specified.
Valid values:
`min`: 1 minute
`5min`: 5 minutes
`hour`: 1 hour
`day`: 1 day
 */
class DescribeDnsDataRequest extends AbstractModel
{
    /**
     * @var string Start time
     */
    public $StartTime;

    /**
     * @var string End time
     */
    public $EndTime;

    /**
     * @var array Filter parameters
     */
    public $Filters;

    /**
     * @var string Time granularity. The default value is `min`. The server can adapt to the time granularity specified.
Valid values:
`min`: 1 minute
`5min`: 5 minutes
`hour`: 1 hour
`day`: 1 day
     */
    public $Interval;

    /**
     * @param string $StartTime Start time
     * @param string $EndTime End time
     * @param array $Filters Filter parameters
     * @param string $Interval Time granularity. The default value is `min`. The server can adapt to the time granularity specified.
Valid values:
`min`: 1 minute
`5min`: 5 minutes
`hour`: 1 hour
`day`: 1 day
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new DnsDataFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }
    }
}
