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
 * Adaptive frequency control
 *
 * @method string getEnabled() Obtain Whether adaptive frequency control is enabled. Valid values: <li>on: enabled;</li><li>off: disabled.</li>
 * @method void setEnabled(string $Enabled) Set Whether adaptive frequency control is enabled. Valid values: <li>on: enabled;</li><li>off: disabled.</li>
 * @method string getId() Obtain Rule ID of adaptive frequency control, returned only as an output parameter.
 * @method void setId(string $Id) Set Rule ID of adaptive frequency control, returned only as an output parameter.
 * @method string getSensitivity() Obtain The limitation level of adaptive frequency control. This field is required when Enabled is on. Valid values: <li>Loose: loose;</li><li>Moderate: moderate;</li><li>Strict: strict.</li>
 * @method void setSensitivity(string $Sensitivity) Set The limitation level of adaptive frequency control. This field is required when Enabled is on. Valid values: <li>Loose: loose;</li><li>Moderate: moderate;</li><li>Strict: strict.</li>
 * @method SecurityAction getAction() Obtain Handling method of adaptive frequency control. This field is required when Enabled is on. Supported values for SecurityAction Name: <li>Monitor: monitor;</li><li>Deny: block;</li><li>Challenge: challenge. ChallengeActionParameters.Name only supports JSChallenge.</li>
 * @method void setAction(SecurityAction $Action) Set Handling method of adaptive frequency control. This field is required when Enabled is on. Supported values for SecurityAction Name: <li>Monitor: monitor;</li><li>Deny: block;</li><li>Challenge: challenge. ChallengeActionParameters.Name only supports JSChallenge.</li>
 */
class AdaptiveFrequencyControl extends AbstractModel
{
    /**
     * @var string Whether adaptive frequency control is enabled. Valid values: <li>on: enabled;</li><li>off: disabled.</li>
     */
    public $Enabled;

    /**
     * @var string Rule ID of adaptive frequency control, returned only as an output parameter.
     */
    public $Id;

    /**
     * @var string The limitation level of adaptive frequency control. This field is required when Enabled is on. Valid values: <li>Loose: loose;</li><li>Moderate: moderate;</li><li>Strict: strict.</li>
     */
    public $Sensitivity;

    /**
     * @var SecurityAction Handling method of adaptive frequency control. This field is required when Enabled is on. Supported values for SecurityAction Name: <li>Monitor: monitor;</li><li>Deny: block;</li><li>Challenge: challenge. ChallengeActionParameters.Name only supports JSChallenge.</li>
     */
    public $Action;

    /**
     * @param string $Enabled Whether adaptive frequency control is enabled. Valid values: <li>on: enabled;</li><li>off: disabled.</li>
     * @param string $Id Rule ID of adaptive frequency control, returned only as an output parameter.
     * @param string $Sensitivity The limitation level of adaptive frequency control. This field is required when Enabled is on. Valid values: <li>Loose: loose;</li><li>Moderate: moderate;</li><li>Strict: strict.</li>
     * @param SecurityAction $Action Handling method of adaptive frequency control. This field is required when Enabled is on. Supported values for SecurityAction Name: <li>Monitor: monitor;</li><li>Deny: block;</li><li>Challenge: challenge. ChallengeActionParameters.Name only supports JSChallenge.</li>
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

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
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
