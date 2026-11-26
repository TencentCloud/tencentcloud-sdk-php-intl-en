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
 * Origin-pull request Cookie configuration.
 *
 * @method string getSwitch() Obtain Cookie configuration switch for origin-pull request parameters. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
 * @method void setSwitch(string $Switch) Set Cookie configuration switch for origin-pull request parameters. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
 * @method string getAction() Obtain Cookie mode for origin-pull requests. This parameter is required when Switch is on. Valid values:
<li>full: retain all;</li>
<li>ignore: ignore all;</li>
<li>includeCustom: means to reserve some parameters;</li>
<li>excludeCustom: means to ignore some parameters.</li>
 * @method void setAction(string $Action) Set Cookie mode for origin-pull requests. This parameter is required when Switch is on. Valid values:
<li>full: retain all;</li>
<li>ignore: ignore all;</li>
<li>includeCustom: means to reserve some parameters;</li>
<li>excludeCustom: means to ignore some parameters.</li>
 * @method array getValues() Obtain Specified parameter values. This parameter takes effect only when the query string mode Action is includeCustom or excludeCustom, and is used to specify the parameters to keep or ignore. Supports up to 10 parameters.
 * @method void setValues(array $Values) Set Specified parameter values. This parameter takes effect only when the query string mode Action is includeCustom or excludeCustom, and is used to specify the parameters to keep or ignore. Supports up to 10 parameters.
 */
class UpstreamRequestCookie extends AbstractModel
{
    /**
     * @var string Cookie configuration switch for origin-pull request parameters. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
     */
    public $Switch;

    /**
     * @var string Cookie mode for origin-pull requests. This parameter is required when Switch is on. Valid values:
<li>full: retain all;</li>
<li>ignore: ignore all;</li>
<li>includeCustom: means to reserve some parameters;</li>
<li>excludeCustom: means to ignore some parameters.</li>
     */
    public $Action;

    /**
     * @var array Specified parameter values. This parameter takes effect only when the query string mode Action is includeCustom or excludeCustom, and is used to specify the parameters to keep or ignore. Supports up to 10 parameters.
     */
    public $Values;

    /**
     * @param string $Switch Cookie configuration switch for origin-pull request parameters. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
     * @param string $Action Cookie mode for origin-pull requests. This parameter is required when Switch is on. Valid values:
<li>full: retain all;</li>
<li>ignore: ignore all;</li>
<li>includeCustom: means to reserve some parameters;</li>
<li>excludeCustom: means to ignore some parameters.</li>
     * @param array $Values Specified parameter values. This parameter takes effect only when the query string mode Action is includeCustom or excludeCustom, and is used to specify the parameters to keep or ignore. Supports up to 10 parameters.
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

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }
    }
}
