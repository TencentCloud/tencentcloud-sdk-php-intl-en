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
 * Bandwidth abuse protection configuration (chinese mainland only).
 *
 * @method string getEnabled() Obtain Whether bandwidth abuse protection (applicable to chinese mainland only) is enabled. valid values: <li>on: enabled;</li> <li>off: disabled.</li>.
 * @method void setEnabled(string $Enabled) Set Whether bandwidth abuse protection (applicable to chinese mainland only) is enabled. valid values: <li>on: enabled;</li> <li>off: disabled.</li>.
 * @method SecurityAction getAction() Obtain Bandwidth abuse protection (applicable to chinese mainland) handling method. required when Enabled is on. valid values for SecurityAction Name: <li>Monitor: observe;</li> <li>Deny: block;</li> <li>Challenge: Challenge, where ChallengeActionParameters.Name only supports JSChallenge.</li>.
 * @method void setAction(SecurityAction $Action) Set Bandwidth abuse protection (applicable to chinese mainland) handling method. required when Enabled is on. valid values for SecurityAction Name: <li>Monitor: observe;</li> <li>Deny: block;</li> <li>Challenge: Challenge, where ChallengeActionParameters.Name only supports JSChallenge.</li>.
 */
class BandwidthAbuseDefense extends AbstractModel
{
    /**
     * @var string Whether bandwidth abuse protection (applicable to chinese mainland only) is enabled. valid values: <li>on: enabled;</li> <li>off: disabled.</li>.
     */
    public $Enabled;

    /**
     * @var SecurityAction Bandwidth abuse protection (applicable to chinese mainland) handling method. required when Enabled is on. valid values for SecurityAction Name: <li>Monitor: observe;</li> <li>Deny: block;</li> <li>Challenge: Challenge, where ChallengeActionParameters.Name only supports JSChallenge.</li>.
     */
    public $Action;

    /**
     * @param string $Enabled Whether bandwidth abuse protection (applicable to chinese mainland only) is enabled. valid values: <li>on: enabled;</li> <li>off: disabled.</li>.
     * @param SecurityAction $Action Bandwidth abuse protection (applicable to chinese mainland) handling method. required when Enabled is on. valid values for SecurityAction Name: <li>Monitor: observe;</li> <li>Deny: block;</li> <li>Challenge: Challenge, where ChallengeActionParameters.Name only supports JSChallenge.</li>.
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
        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = new SecurityAction();
            $this->Action->deserialize($param["Action"]);
        }
    }
}
