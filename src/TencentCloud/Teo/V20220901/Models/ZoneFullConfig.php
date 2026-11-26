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
 * Complete site configuration architecture.
 *
 * @method string getFormatVersion() Obtain <p>Syntax version. It defaults to 1.0. An error will be reported if you input other values.</p>
 * @method void setFormatVersion(string $FormatVersion) Set <p>Syntax version. It defaults to 1.0. An error will be reported if you input other values.</p>
 * @method ZoneConfig getZoneConfig() Obtain <p>Site-level configuration, including all configuration items in "Site Acceleration". All items are required; otherwise, the configuration is invalid.</p>
 * @method void setZoneConfig(ZoneConfig $ZoneConfig) Set <p>Site-level configuration, including all configuration items in "Site Acceleration". All items are required; otherwise, the configuration is invalid.</p>
 * @method ZoneCustomVariables getZoneCustomVariables() Obtain <p>Site-level custom variable configuration, including variable definition and variable operations.</p>
 * @method void setZoneCustomVariables(ZoneCustomVariables $ZoneCustomVariables) Set <p>Site-level custom variable configuration, including variable definition and variable operations.</p>
 * @method array getRules() Obtain <p>Rule-level configuration, including all rules in the rule engine. The array can be empty, indicating that no rules are enabled.</p>
 * @method void setRules(array $Rules) Set <p>Rule-level configuration, including all rules in the rule engine. The array can be empty, indicating that no rules are enabled.</p>
 * @method WebSecurity getWebSecurity() Obtain <p>Web security protection settings, corresponding to the functions supported in "Security Protection - Web Protection" in the console.</p>
 * @method void setWebSecurity(WebSecurity $WebSecurity) Set <p>Web security protection settings, corresponding to the functions supported in "Security Protection - Web Protection" in the console.</p>
 * @method array getFunctionTriggers() Obtain <p>Edge function trigger rule configuration, including all rules in the edge function. The array can be empty, indicating that no rules are enabled.</p>
 * @method void setFunctionTriggers(array $FunctionTriggers) Set <p>Edge function trigger rule configuration, including all rules in the edge function. The array can be empty, indicating that no rules are enabled.</p>
 */
class ZoneFullConfig extends AbstractModel
{
    /**
     * @var string <p>Syntax version. It defaults to 1.0. An error will be reported if you input other values.</p>
     */
    public $FormatVersion;

    /**
     * @var ZoneConfig <p>Site-level configuration, including all configuration items in "Site Acceleration". All items are required; otherwise, the configuration is invalid.</p>
     */
    public $ZoneConfig;

    /**
     * @var ZoneCustomVariables <p>Site-level custom variable configuration, including variable definition and variable operations.</p>
     */
    public $ZoneCustomVariables;

    /**
     * @var array <p>Rule-level configuration, including all rules in the rule engine. The array can be empty, indicating that no rules are enabled.</p>
     */
    public $Rules;

    /**
     * @var WebSecurity <p>Web security protection settings, corresponding to the functions supported in "Security Protection - Web Protection" in the console.</p>
     */
    public $WebSecurity;

    /**
     * @var array <p>Edge function trigger rule configuration, including all rules in the edge function. The array can be empty, indicating that no rules are enabled.</p>
     */
    public $FunctionTriggers;

    /**
     * @param string $FormatVersion <p>Syntax version. It defaults to 1.0. An error will be reported if you input other values.</p>
     * @param ZoneConfig $ZoneConfig <p>Site-level configuration, including all configuration items in "Site Acceleration". All items are required; otherwise, the configuration is invalid.</p>
     * @param ZoneCustomVariables $ZoneCustomVariables <p>Site-level custom variable configuration, including variable definition and variable operations.</p>
     * @param array $Rules <p>Rule-level configuration, including all rules in the rule engine. The array can be empty, indicating that no rules are enabled.</p>
     * @param WebSecurity $WebSecurity <p>Web security protection settings, corresponding to the functions supported in "Security Protection - Web Protection" in the console.</p>
     * @param array $FunctionTriggers <p>Edge function trigger rule configuration, including all rules in the edge function. The array can be empty, indicating that no rules are enabled.</p>
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
        if (array_key_exists("FormatVersion",$param) and $param["FormatVersion"] !== null) {
            $this->FormatVersion = $param["FormatVersion"];
        }

        if (array_key_exists("ZoneConfig",$param) and $param["ZoneConfig"] !== null) {
            $this->ZoneConfig = new ZoneConfig();
            $this->ZoneConfig->deserialize($param["ZoneConfig"]);
        }

        if (array_key_exists("ZoneCustomVariables",$param) and $param["ZoneCustomVariables"] !== null) {
            $this->ZoneCustomVariables = new ZoneCustomVariables();
            $this->ZoneCustomVariables->deserialize($param["ZoneCustomVariables"]);
        }

        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = [];
            foreach ($param["Rules"] as $key => $value){
                $obj = new ConfigGroupRuleEngineItem();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }

        if (array_key_exists("WebSecurity",$param) and $param["WebSecurity"] !== null) {
            $this->WebSecurity = new WebSecurity();
            $this->WebSecurity->deserialize($param["WebSecurity"]);
        }

        if (array_key_exists("FunctionTriggers",$param) and $param["FunctionTriggers"] !== null) {
            $this->FunctionTriggers = [];
            foreach ($param["FunctionTriggers"] as $key => $value){
                $obj = new ConfigGroupFunctionTrigger();
                $obj->deserialize($value);
                array_push($this->FunctionTriggers, $obj);
            }
        }
    }
}
