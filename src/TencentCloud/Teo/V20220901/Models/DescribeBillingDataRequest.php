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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBillingData request structure.
 *
 * @method string getStartTime() Obtain Start time.
 * @method void setStartTime(string $StartTime) Set Start time.
 * @method string getEndTime() Obtain End time.
 * @method void setEndTime(string $EndTime) Set End time.
 * @method string getInterval() Obtain Time granularity. Values:
<ul>
<li>`min`: One minute</li>
<li>`5min`: Five minutes</li>
<li>`hour`: One hour</li>
<li>`day`: One day</li>
</ul>
 * @method void setInterval(string $Interval) Set Time granularity. Values:
<ul>
<li>`min`: One minute</li>
<li>`5min`: Five minutes</li>
<li>`hour`: One hour</li>
<li>`day`: One day</li>
</ul>
 * @method string getMetricName() Obtain Metric item. Values:
<ul>
<li>`acc_flux`: Content acceleration traffic;</li>
<li>`quic_request`: QUIC requests;</li>
<li>`sec_flux`: Security traffic;</li>
<li>`sec_request_clean`: Clean security requests.</li>
</ul>
 * @method void setMetricName(string $MetricName) Set Metric item. Values:
<ul>
<li>`acc_flux`: Content acceleration traffic;</li>
<li>`quic_request`: QUIC requests;</li>
<li>`sec_flux`: Security traffic;</li>
<li>`sec_request_clean`: Clean security requests.</li>
</ul>
 * @method array getFilters() Obtain Filter item. Values:
<ul>
<li>`zone`: Site;</li>
<li>`plan`: Service plan;</li>
<li>`service`: L4 or L7;</li>
<li>`tagKey`: Tag key;</li>
<li>`tagValue`: Tag value.</li>
</ul>
 * @method void setFilters(array $Filters) Set Filter item. Values:
<ul>
<li>`zone`: Site;</li>
<li>`plan`: Service plan;</li>
<li>`service`: L4 or L7;</li>
<li>`tagKey`: Tag key;</li>
<li>`tagValue`: Tag value.</li>
</ul>
 */
class DescribeBillingDataRequest extends AbstractModel
{
    /**
     * @var string Start time.
     */
    public $StartTime;

    /**
     * @var string End time.
     */
    public $EndTime;

    /**
     * @var string Time granularity. Values:
<ul>
<li>`min`: One minute</li>
<li>`5min`: Five minutes</li>
<li>`hour`: One hour</li>
<li>`day`: One day</li>
</ul>
     */
    public $Interval;

    /**
     * @var string Metric item. Values:
<ul>
<li>`acc_flux`: Content acceleration traffic;</li>
<li>`quic_request`: QUIC requests;</li>
<li>`sec_flux`: Security traffic;</li>
<li>`sec_request_clean`: Clean security requests.</li>
</ul>
     */
    public $MetricName;

    /**
     * @var array Filter item. Values:
<ul>
<li>`zone`: Site;</li>
<li>`plan`: Service plan;</li>
<li>`service`: L4 or L7;</li>
<li>`tagKey`: Tag key;</li>
<li>`tagValue`: Tag value.</li>
</ul>
     */
    public $Filters;

    /**
     * @param string $StartTime Start time.
     * @param string $EndTime End time.
     * @param string $Interval Time granularity. Values:
<ul>
<li>`min`: One minute</li>
<li>`5min`: Five minutes</li>
<li>`hour`: One hour</li>
<li>`day`: One day</li>
</ul>
     * @param string $MetricName Metric item. Values:
<ul>
<li>`acc_flux`: Content acceleration traffic;</li>
<li>`quic_request`: QUIC requests;</li>
<li>`sec_flux`: Security traffic;</li>
<li>`sec_request_clean`: Clean security requests.</li>
</ul>
     * @param array $Filters Filter item. Values:
<ul>
<li>`zone`: Site;</li>
<li>`plan`: Service plan;</li>
<li>`service`: L4 or L7;</li>
<li>`tagKey`: Tag key;</li>
<li>`tagValue`: Tag value.</li>
</ul>
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

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new BillingDataFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
