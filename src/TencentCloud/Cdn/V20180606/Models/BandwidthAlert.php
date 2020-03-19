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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getSwitch() Obtain Bandwidth cap configuration switch
on: enabled
off: disabled
 * @method void setSwitch(string $Switch) Set Bandwidth cap configuration switch
on: enabled
off: disabled
 * @method integer getBpsThreshold() Obtain Bandwidth cap threshold (in bps)
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setBpsThreshold(integer $BpsThreshold) Set Bandwidth cap threshold (in bps)
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getCounterMeasure() Obtain Action taken when threshold is reached
RESOLVE_DNS_TO_ORIGIN: requests will be forwarded to the origin server. This is only supported for domain names of external origin.
RETURN_404: a 404 error will be returned for all requests.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCounterMeasure(string $CounterMeasure) Set Action taken when threshold is reached
RESOLVE_DNS_TO_ORIGIN: requests will be forwarded to the origin server. This is only supported for domain names of external origin.
RETURN_404: a 404 error will be returned for all requests.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getLastTriggerTime() Obtain The last time the bandwidth cap threshold was triggered
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setLastTriggerTime(string $LastTriggerTime) Set The last time the bandwidth cap threshold was triggered
Note: this field may return null, indicating that no valid values can be obtained.
 */

/**
 *Bandwidth cap configuration. This is disabled by default.
 */
class BandwidthAlert extends AbstractModel
{
    /**
     * @var string Bandwidth cap configuration switch
on: enabled
off: disabled
     */
    public $Switch;

    /**
     * @var integer Bandwidth cap threshold (in bps)
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $BpsThreshold;

    /**
     * @var string Action taken when threshold is reached
RESOLVE_DNS_TO_ORIGIN: requests will be forwarded to the origin server. This is only supported for domain names of external origin.
RETURN_404: a 404 error will be returned for all requests.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CounterMeasure;

    /**
     * @var string The last time the bandwidth cap threshold was triggered
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $LastTriggerTime;
    /**
     * @param string $Switch Bandwidth cap configuration switch
on: enabled
off: disabled
     * @param integer $BpsThreshold Bandwidth cap threshold (in bps)
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $CounterMeasure Action taken when threshold is reached
RESOLVE_DNS_TO_ORIGIN: requests will be forwarded to the origin server. This is only supported for domain names of external origin.
RETURN_404: a 404 error will be returned for all requests.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $LastTriggerTime The last time the bandwidth cap threshold was triggered
Note: this field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("BpsThreshold",$param) and $param["BpsThreshold"] !== null) {
            $this->BpsThreshold = $param["BpsThreshold"];
        }

        if (array_key_exists("CounterMeasure",$param) and $param["CounterMeasure"] !== null) {
            $this->CounterMeasure = $param["CounterMeasure"];
        }

        if (array_key_exists("LastTriggerTime",$param) and $param["LastTriggerTime"] !== null) {
            $this->LastTriggerTime = $param["LastTriggerTime"];
        }
    }
}
