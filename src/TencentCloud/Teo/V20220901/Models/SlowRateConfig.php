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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The configuration to detect slow attacks
 *
 * @method string getSwitch() Obtain Switch. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
 * @method void setSwitch(string $Switch) Set Switch. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
 * @method integer getInterval() Obtain The statistics interval in seconds. after the first packet transfer, the data transmission axis is split by this parameter for separate computing of slow attacks on each shard.
 * @method void setInterval(integer $Interval) Set The statistics interval in seconds. after the first packet transfer, the data transmission axis is split by this parameter for separate computing of slow attacks on each shard.
 * @method integer getThreshold() Obtain Specifies the rate threshold applied during statistics in bps. if the transmission rate in this shard does not reach the parameter value, it is identified as a slow attack and the slow attack handling method is applied.
 * @method void setThreshold(integer $Threshold) Set Specifies the rate threshold applied during statistics in bps. if the transmission rate in this shard does not reach the parameter value, it is identified as a slow attack and the slow attack handling method is applied.
 */
class SlowRateConfig extends AbstractModel
{
    /**
     * @var string Switch. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
     */
    public $Switch;

    /**
     * @var integer The statistics interval in seconds. after the first packet transfer, the data transmission axis is split by this parameter for separate computing of slow attacks on each shard.
     */
    public $Interval;

    /**
     * @var integer Specifies the rate threshold applied during statistics in bps. if the transmission rate in this shard does not reach the parameter value, it is identified as a slow attack and the slow attack handling method is applied.
     */
    public $Threshold;

    /**
     * @param string $Switch Switch. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
     * @param integer $Interval The statistics interval in seconds. after the first packet transfer, the data transmission axis is split by this parameter for separate computing of slow attacks on each shard.
     * @param integer $Threshold Specifies the rate threshold applied during statistics in bps. if the transmission rate in this shard does not reach the parameter value, it is identified as a slow attack and the slow attack handling method is applied.
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("Threshold",$param) and $param["Threshold"] !== null) {
            $this->Threshold = $param["Threshold"];
        }
    }
}
