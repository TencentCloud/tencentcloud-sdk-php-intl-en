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
 * Basic configuration of slow attack.
 *
 * @method string getSwitch() Obtain Switch. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
 * @method void setSwitch(string $Switch) Set Switch. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
 * @method integer getInterval() Obtain Statistics interval in seconds. After the first packet transfer is complete, the data transmission axis is split by this parameter, and slow attacks are calculated separately for each shard.
 * @method void setInterval(integer $Interval) Set Statistics interval in seconds. After the first packet transfer is complete, the data transmission axis is split by this parameter, and slow attacks are calculated separately for each shard.
 * @method integer getThreshold() Obtain Rate threshold applied for statistics, in bps. If the transmission rate in this shard does not reach this parameter value, it is determined as a slow attack and the handling method for slow attacks is applied.
 * @method void setThreshold(integer $Threshold) Set Rate threshold applied for statistics, in bps. If the transmission rate in this shard does not reach this parameter value, it is determined as a slow attack and the handling method for slow attacks is applied.
 */
class SlowRateConfig extends AbstractModel
{
    /**
     * @var string Switch. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
     */
    public $Switch;

    /**
     * @var integer Statistics interval in seconds. After the first packet transfer is complete, the data transmission axis is split by this parameter, and slow attacks are calculated separately for each shard.
     */
    public $Interval;

    /**
     * @var integer Rate threshold applied for statistics, in bps. If the transmission rate in this shard does not reach this parameter value, it is determined as a slow attack and the handling method for slow attacks is applied.
     */
    public $Threshold;

    /**
     * @param string $Switch Switch. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
     * @param integer $Interval Statistics interval in seconds. After the first packet transfer is complete, the data transmission axis is split by this parameter, and slow attacks are calculated separately for each shard.
     * @param integer $Threshold Rate threshold applied for statistics, in bps. If the transmission rate in this shard does not reach this parameter value, it is determined as a slow attack and the handling method for slow attacks is applied.
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
