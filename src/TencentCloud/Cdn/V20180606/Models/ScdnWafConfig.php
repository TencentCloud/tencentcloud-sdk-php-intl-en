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
 * WAF configuration
 *
 * @method string getSwitch() Obtain Whether to enable SCDN WAF configuration. Values:
`on`: Enable
`off`: Disable
 * @method void setSwitch(string $Switch) Set Whether to enable SCDN WAF configuration. Values:
`on`: Enable
`off`: Disable
 * @method string getMode() Obtain WAF protection mode. Valid values: `intercept` and `observe`. Default value: `intercept`.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setMode(string $Mode) Set WAF protection mode. Valid values: `intercept` and `observe`. Default value: `intercept`.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method ScdnErrorPage getErrorPage() Obtain Redirection error page
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setErrorPage(ScdnErrorPage $ErrorPage) Set Redirection error page
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getWebShellSwitch() Obtain Whether to enable webshell blocking. Values:
`on`: Enable
`off`: Disable
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setWebShellSwitch(string $WebShellSwitch) Set Whether to enable webshell blocking. Values:
`on`: Enable
`off`: Disable
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method array getRules() Obtain Attack blocking rules
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setRules(array $Rules) Set Attack blocking rules
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getLevel() Obtain WAF rule level. Valid values: 100, 200, and 300.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setLevel(integer $Level) Set WAF rule level. Valid values: 100, 200, and 300.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method array getSubRuleSwitch() Obtain Whether to enable WAF sub-rules. Values:
`on`: Enable
`off`: Disable
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setSubRuleSwitch(array $SubRuleSwitch) Set Whether to enable WAF sub-rules. Values:
`on`: Enable
`off`: Disable
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class ScdnWafConfig extends AbstractModel
{
    /**
     * @var string Whether to enable SCDN WAF configuration. Values:
`on`: Enable
`off`: Disable
     */
    public $Switch;

    /**
     * @var string WAF protection mode. Valid values: `intercept` and `observe`. Default value: `intercept`.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Mode;

    /**
     * @var ScdnErrorPage Redirection error page
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $ErrorPage;

    /**
     * @var string Whether to enable webshell blocking. Values:
`on`: Enable
`off`: Disable
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $WebShellSwitch;

    /**
     * @var array Attack blocking rules
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Rules;

    /**
     * @var integer WAF rule level. Valid values: 100, 200, and 300.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Level;

    /**
     * @var array Whether to enable WAF sub-rules. Values:
`on`: Enable
`off`: Disable
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $SubRuleSwitch;

    /**
     * @param string $Switch Whether to enable SCDN WAF configuration. Values:
`on`: Enable
`off`: Disable
     * @param string $Mode WAF protection mode. Valid values: `intercept` and `observe`. Default value: `intercept`.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param ScdnErrorPage $ErrorPage Redirection error page
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $WebShellSwitch Whether to enable webshell blocking. Values:
`on`: Enable
`off`: Disable
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param array $Rules Attack blocking rules
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $Level WAF rule level. Valid values: 100, 200, and 300.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param array $SubRuleSwitch Whether to enable WAF sub-rules. Values:
`on`: Enable
`off`: Disable
Note: This field may return `null`, indicating that no valid values can be obtained.
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

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("ErrorPage",$param) and $param["ErrorPage"] !== null) {
            $this->ErrorPage = new ScdnErrorPage();
            $this->ErrorPage->deserialize($param["ErrorPage"]);
        }

        if (array_key_exists("WebShellSwitch",$param) and $param["WebShellSwitch"] !== null) {
            $this->WebShellSwitch = $param["WebShellSwitch"];
        }

        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = [];
            foreach ($param["Rules"] as $key => $value){
                $obj = new ScdnWafRule();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("SubRuleSwitch",$param) and $param["SubRuleSwitch"] !== null) {
            $this->SubRuleSwitch = [];
            foreach ($param["SubRuleSwitch"] as $key => $value){
                $obj = new WafSubRuleStatus();
                $obj->deserialize($value);
                array_push($this->SubRuleSwitch, $obj);
            }
        }
    }
}
