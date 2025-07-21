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
 * Adaptive frequency control.
 *
 * @method string getEnabled() Obtain Whether adaptive frequency control is enabled. valid values: <li>on: enable;</li> <li>off: disable.</li>.
 * @method void setEnabled(string $Enabled) Set Whether adaptive frequency control is enabled. valid values: <li>on: enable;</li> <li>off: disable.</li>.
 * @method string getSensitivity() Obtain The restriction level of adaptive frequency control. required when Enabled is on. valid values: <li>Loose: Loose</li><li>Moderate: Moderate</li><li>Strict: Strict</li>.
 * @method void setSensitivity(string $Sensitivity) Set The restriction level of adaptive frequency control. required when Enabled is on. valid values: <li>Loose: Loose</li><li>Moderate: Moderate</li><li>Strict: Strict</li>.
 * @method SecurityAction getAction() Obtain The handling method of adaptive frequency control. this field is required when Enabled is on. valid values for SecurityAction Name: <li>Monitor: observation;</li> <li>Deny: block;</li> <li>Challenge: Challenge, where ChallengeActionParameters.Name only supports JSChallenge.</li>.
 * @method void setAction(SecurityAction $Action) Set The handling method of adaptive frequency control. this field is required when Enabled is on. valid values for SecurityAction Name: <li>Monitor: observation;</li> <li>Deny: block;</li> <li>Challenge: Challenge, where ChallengeActionParameters.Name only supports JSChallenge.</li>.
 */
class AdaptiveFrequencyControl extends AbstractModel
{
    /**
     * @var string Whether adaptive frequency control is enabled. valid values: <li>on: enable;</li> <li>off: disable.</li>.
     */
    public $Enabled;

    /**
     * @var string The restriction level of adaptive frequency control. required when Enabled is on. valid values: <li>Loose: Loose</li><li>Moderate: Moderate</li><li>Strict: Strict</li>.
     */
    public $Sensitivity;

    /**
     * @var SecurityAction The handling method of adaptive frequency control. this field is required when Enabled is on. valid values for SecurityAction Name: <li>Monitor: observation;</li> <li>Deny: block;</li> <li>Challenge: Challenge, where ChallengeActionParameters.Name only supports JSChallenge.</li>.
     */
    public $Action;

    /**
     * @param string $Enabled Whether adaptive frequency control is enabled. valid values: <li>on: enable;</li> <li>off: disable.</li>.
     * @param string $Sensitivity The restriction level of adaptive frequency control. required when Enabled is on. valid values: <li>Loose: Loose</li><li>Moderate: Moderate</li><li>Strict: Strict</li>.
     * @param SecurityAction $Action The handling method of adaptive frequency control. this field is required when Enabled is on. valid values for SecurityAction Name: <li>Monitor: observation;</li> <li>Deny: block;</li> <li>Challenge: Challenge, where ChallengeActionParameters.Name only supports JSChallenge.</li>.
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

        if (array_key_exists("Sensitivity",$param) and $param["Sensitivity"] !== null) {
            $this->Sensitivity = $param["Sensitivity"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = new SecurityAction();
            $this->Action->deserialize($param["Action"]);
        }
    }
}
