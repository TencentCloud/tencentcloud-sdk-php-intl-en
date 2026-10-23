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
 * Additional parameter when the safe execution action is Allow.

This parameter is used to specify the extra handling action taken by the system when a security rule is hit and an Allow action is executed.
Different handling actions are configured with different fixed parameter combinations. The system will determine the actually effective handling action type according to the configured parameter combination.
During the same release execution, only one handling action can be configured and made effective. Parameter composites for multiple handling actions cannot appear simultaneously; otherwise, it is deemed an invalid configuration. If empty, the default release handling action is used.
AllowActionParameters supports the following additional handling actions: <li>Default: When AllowActionParameters is empty, skip the remaining rules of the current security module immediately and continue matching subsequent security modules.</li><li>Delayed pass: Add response delay to the request and continue matching the remaining rules of the current module. Corresponding parameters: MinDelayTime, MaxDelayTime.</li>
 *
 * @method string getMinDelayTime() Obtain Minimum latency response time. when configured as 0s, it means no delay for direct response. supported units: <li>s: seconds, value ranges from 0 to 5.</li>.
 * @method void setMinDelayTime(string $MinDelayTime) Set Minimum latency response time. when configured as 0s, it means no delay for direct response. supported units: <li>s: seconds, value ranges from 0 to 5.</li>.
 * @method string getMaxDelayTime() Obtain Maximum delayed response time. supported units: <li>s: seconds, value ranges from 5 to 10.</li>.
 * @method void setMaxDelayTime(string $MaxDelayTime) Set Maximum delayed response time. supported units: <li>s: seconds, value ranges from 5 to 10.</li>.
 */
class AllowActionParameters extends AbstractModel
{
    /**
     * @var string Minimum latency response time. when configured as 0s, it means no delay for direct response. supported units: <li>s: seconds, value ranges from 0 to 5.</li>.
     */
    public $MinDelayTime;

    /**
     * @var string Maximum delayed response time. supported units: <li>s: seconds, value ranges from 5 to 10.</li>.
     */
    public $MaxDelayTime;

    /**
     * @param string $MinDelayTime Minimum latency response time. when configured as 0s, it means no delay for direct response. supported units: <li>s: seconds, value ranges from 0 to 5.</li>.
     * @param string $MaxDelayTime Maximum delayed response time. supported units: <li>s: seconds, value ranges from 5 to 10.</li>.
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
        if (array_key_exists("MinDelayTime",$param) and $param["MinDelayTime"] !== null) {
            $this->MinDelayTime = $param["MinDelayTime"];
        }

        if (array_key_exists("MaxDelayTime",$param) and $param["MaxDelayTime"] !== null) {
            $this->MaxDelayTime = $param["MaxDelayTime"];
        }
    }
}
