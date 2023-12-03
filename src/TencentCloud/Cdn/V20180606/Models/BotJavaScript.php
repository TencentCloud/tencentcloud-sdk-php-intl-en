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
 * Bot JS policy
 *
 * @method string getSwitch() Obtain Whether to enable bot JS policies. Values:
`on`: Enable
`off`: Disable
 * @method void setSwitch(string $Switch) Set Whether to enable bot JS policies. Values:
`on`: Enable
`off`: Disable
 * @method string getRuleType() Obtain Rule type, which can only be `file` currently.
 * @method void setRuleType(string $RuleType) Set Rule type, which can only be `file` currently.
 * @method array getRuleValue() Obtain Rule value. Valid values: `html` and `htm`.
 * @method void setRuleValue(array $RuleValue) Set Rule value. Valid values: `html` and `htm`.
 * @method string getAction() Obtain Action. Valid values: `monitor`, `intercept`, `redirect`, and `captcha`.
 * @method void setAction(string $Action) Set Action. Valid values: `monitor`, `intercept`, `redirect`, and `captcha`.
 * @method string getRedirectUrl() Obtain Redirection target page
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRedirectUrl(string $RedirectUrl) Set Redirection target page
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUpdateTime() Obtain Update time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set Update time
Note: This field may return null, indicating that no valid values can be obtained.
 */
class BotJavaScript extends AbstractModel
{
    /**
     * @var string Whether to enable bot JS policies. Values:
`on`: Enable
`off`: Disable
     */
    public $Switch;

    /**
     * @var string Rule type, which can only be `file` currently.
     */
    public $RuleType;

    /**
     * @var array Rule value. Valid values: `html` and `htm`.
     */
    public $RuleValue;

    /**
     * @var string Action. Valid values: `monitor`, `intercept`, `redirect`, and `captcha`.
     */
    public $Action;

    /**
     * @var string Redirection target page
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RedirectUrl;

    /**
     * @var string Update time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdateTime;

    /**
     * @param string $Switch Whether to enable bot JS policies. Values:
`on`: Enable
`off`: Disable
     * @param string $RuleType Rule type, which can only be `file` currently.
     * @param array $RuleValue Rule value. Valid values: `html` and `htm`.
     * @param string $Action Action. Valid values: `monitor`, `intercept`, `redirect`, and `captcha`.
     * @param string $RedirectUrl Redirection target page
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UpdateTime Update time
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("RuleValue",$param) and $param["RuleValue"] !== null) {
            $this->RuleValue = $param["RuleValue"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("RedirectUrl",$param) and $param["RedirectUrl"] !== null) {
            $this->RedirectUrl = $param["RedirectUrl"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
