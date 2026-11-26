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
 * RateLimit rule
 *
 * @method integer getThreshold() Obtain Rate limit statistical threshold, in times. Value range: 0-4294967294.
 * @method void setThreshold(integer $Threshold) Set Rate limit statistical threshold, in times. Value range: 0-4294967294.
 * @method integer getPeriod() Obtain Rate limit statistical time. Value range: 10/20/30/40/50/60. Unit: seconds.
 * @method void setPeriod(integer $Period) Set Rate limit statistical time. Value range: 10/20/30/40/50/60. Unit: seconds.
 * @method string getRuleName() Obtain Rule name can only contain English characters, digits, and underscores, and cannot begin with an underscore.
 * @method void setRuleName(string $RuleName) Set Rule name can only contain English characters, digits, and underscores, and cannot begin with an underscore.
 * @method string getAction() Obtain Handling action. Valid values: <li>monitor: observe;</li> <li>drop: block;</li><li> redirect: redirect;</li><li> page: specified page;</li><li>alg: JavaScript challenge.</li>	
 * @method void setAction(string $Action) Set Handling action. Valid values: <li>monitor: observe;</li> <li>drop: block;</li><li> redirect: redirect;</li><li> page: specified page;</li><li>alg: JavaScript challenge.</li>	
 * @method integer getPunishTime() Obtain Penalty duration. Value range: 0-2 days.
 * @method void setPunishTime(integer $PunishTime) Set Penalty duration. Value range: 0-2 days.
 * @method string getPunishTimeUnit() Obtain Penalty duration unit. Valid values:
<li>second: second;</li>
<li>minutes: minute;</li>
<li>hour: hour.</li>
 * @method void setPunishTimeUnit(string $PunishTimeUnit) Set Penalty duration unit. Valid values:
<li>second: second;</li>
<li>minutes: minute;</li>
<li>hour: hour.</li>
 * @method string getRuleStatus() Obtain Rule status. Valid values:
<li>on: enabled</li>
<li>off: Disable.</li>Default on takes effect.
 * @method void setRuleStatus(string $RuleStatus) Set Rule status. Valid values:
<li>on: enabled</li>
<li>off: Disable.</li>Default on takes effect.
 * @method array getAclConditions() Obtain Rule details.
 * @method void setAclConditions(array $AclConditions) Set Rule details.
 * @method integer getRulePriority() Obtain Rule weight. Value range: 0-100.
 * @method void setRulePriority(integer $RulePriority) Set Rule weight. Value range: 0-100.
 * @method integer getRuleID() Obtain Rule Id. Output only.
 * @method void setRuleID(integer $RuleID) Set Rule Id. Output only.
 * @method array getFreqFields() Obtain Filter word. Valid values:
<li>sip: Client IP.</li>
Defaults to an empty string.
 * @method void setFreqFields(array $FreqFields) Set Filter word. Valid values:
<li>sip: Client IP.</li>
Defaults to an empty string.
 * @method string getUpdateTime() Obtain Update time. Output usage only. Defaults to the current time when modified.
 * @method void setUpdateTime(string $UpdateTime) Set Update time. Output usage only. Defaults to the current time when modified.
 * @method array getFreqScope() Obtain Statistical scope. Valid values:
<li>source_to_eo: (Response) Origin server to EdgeOne;</li>
<li>client_to_eo: (request) Client to EdgeOne.</li>
Default value: source_to_eo.
 * @method void setFreqScope(array $FreqScope) Set Statistical scope. Valid values:
<li>source_to_eo: (Response) Origin server to EdgeOne;</li>
<li>client_to_eo: (request) Client to EdgeOne.</li>
Default value: source_to_eo.
 * @method string getName() Obtain Name of the custom return page. Required when Action is page, and cannot be empty.
 * @method void setName(string $Name) Set Name of the custom return page. Required when Action is page, and cannot be empty.
 * @method string getCustomResponseId() Obtain Custom response Id, which can be obtained through the API for querying the custom error page list. The default value is default, which uses the system default page. Required and cannot be empty when Action is page.	
 * @method void setCustomResponseId(string $CustomResponseId) Set Custom response Id, which can be obtained through the API for querying the custom error page list. The default value is default, which uses the system default page. Required and cannot be empty when Action is page.	
 * @method integer getResponseCode() Obtain code of the custom return page. Required when Action is page. The value cannot be empty. Value range: 100-600. 3xx response codes are unsupported. Default value: 567.
 * @method void setResponseCode(integer $ResponseCode) Set code of the custom return page. Required when Action is page. The value cannot be empty. Value range: 100-600. 3xx response codes are unsupported. Default value: 567.
 * @method string getRedirectUrl() Obtain Address for redirection. Required when Action is `redirect` and cannot be empty.
 * @method void setRedirectUrl(string $RedirectUrl) Set Address for redirection. Required when Action is `redirect` and cannot be empty.
 */
class RateLimitUserRule extends AbstractModel
{
    /**
     * @var integer Rate limit statistical threshold, in times. Value range: 0-4294967294.
     */
    public $Threshold;

    /**
     * @var integer Rate limit statistical time. Value range: 10/20/30/40/50/60. Unit: seconds.
     */
    public $Period;

    /**
     * @var string Rule name can only contain English characters, digits, and underscores, and cannot begin with an underscore.
     */
    public $RuleName;

    /**
     * @var string Handling action. Valid values: <li>monitor: observe;</li> <li>drop: block;</li><li> redirect: redirect;</li><li> page: specified page;</li><li>alg: JavaScript challenge.</li>	
     */
    public $Action;

    /**
     * @var integer Penalty duration. Value range: 0-2 days.
     */
    public $PunishTime;

    /**
     * @var string Penalty duration unit. Valid values:
<li>second: second;</li>
<li>minutes: minute;</li>
<li>hour: hour.</li>
     */
    public $PunishTimeUnit;

    /**
     * @var string Rule status. Valid values:
<li>on: enabled</li>
<li>off: Disable.</li>Default on takes effect.
     */
    public $RuleStatus;

    /**
     * @var array Rule details.
     */
    public $AclConditions;

    /**
     * @var integer Rule weight. Value range: 0-100.
     */
    public $RulePriority;

    /**
     * @var integer Rule Id. Output only.
     */
    public $RuleID;

    /**
     * @var array Filter word. Valid values:
<li>sip: Client IP.</li>
Defaults to an empty string.
     */
    public $FreqFields;

    /**
     * @var string Update time. Output usage only. Defaults to the current time when modified.
     */
    public $UpdateTime;

    /**
     * @var array Statistical scope. Valid values:
<li>source_to_eo: (Response) Origin server to EdgeOne;</li>
<li>client_to_eo: (request) Client to EdgeOne.</li>
Default value: source_to_eo.
     */
    public $FreqScope;

    /**
     * @var string Name of the custom return page. Required when Action is page, and cannot be empty.
     */
    public $Name;

    /**
     * @var string Custom response Id, which can be obtained through the API for querying the custom error page list. The default value is default, which uses the system default page. Required and cannot be empty when Action is page.	
     */
    public $CustomResponseId;

    /**
     * @var integer code of the custom return page. Required when Action is page. The value cannot be empty. Value range: 100-600. 3xx response codes are unsupported. Default value: 567.
     */
    public $ResponseCode;

    /**
     * @var string Address for redirection. Required when Action is `redirect` and cannot be empty.
     */
    public $RedirectUrl;

    /**
     * @param integer $Threshold Rate limit statistical threshold, in times. Value range: 0-4294967294.
     * @param integer $Period Rate limit statistical time. Value range: 10/20/30/40/50/60. Unit: seconds.
     * @param string $RuleName Rule name can only contain English characters, digits, and underscores, and cannot begin with an underscore.
     * @param string $Action Handling action. Valid values: <li>monitor: observe;</li> <li>drop: block;</li><li> redirect: redirect;</li><li> page: specified page;</li><li>alg: JavaScript challenge.</li>	
     * @param integer $PunishTime Penalty duration. Value range: 0-2 days.
     * @param string $PunishTimeUnit Penalty duration unit. Valid values:
<li>second: second;</li>
<li>minutes: minute;</li>
<li>hour: hour.</li>
     * @param string $RuleStatus Rule status. Valid values:
<li>on: enabled</li>
<li>off: Disable.</li>Default on takes effect.
     * @param array $AclConditions Rule details.
     * @param integer $RulePriority Rule weight. Value range: 0-100.
     * @param integer $RuleID Rule Id. Output only.
     * @param array $FreqFields Filter word. Valid values:
<li>sip: Client IP.</li>
Defaults to an empty string.
     * @param string $UpdateTime Update time. Output usage only. Defaults to the current time when modified.
     * @param array $FreqScope Statistical scope. Valid values:
<li>source_to_eo: (Response) Origin server to EdgeOne;</li>
<li>client_to_eo: (request) Client to EdgeOne.</li>
Default value: source_to_eo.
     * @param string $Name Name of the custom return page. Required when Action is page, and cannot be empty.
     * @param string $CustomResponseId Custom response Id, which can be obtained through the API for querying the custom error page list. The default value is default, which uses the system default page. Required and cannot be empty when Action is page.	
     * @param integer $ResponseCode code of the custom return page. Required when Action is page. The value cannot be empty. Value range: 100-600. 3xx response codes are unsupported. Default value: 567.
     * @param string $RedirectUrl Address for redirection. Required when Action is `redirect` and cannot be empty.
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
        if (array_key_exists("Threshold",$param) and $param["Threshold"] !== null) {
            $this->Threshold = $param["Threshold"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("PunishTime",$param) and $param["PunishTime"] !== null) {
            $this->PunishTime = $param["PunishTime"];
        }

        if (array_key_exists("PunishTimeUnit",$param) and $param["PunishTimeUnit"] !== null) {
            $this->PunishTimeUnit = $param["PunishTimeUnit"];
        }

        if (array_key_exists("RuleStatus",$param) and $param["RuleStatus"] !== null) {
            $this->RuleStatus = $param["RuleStatus"];
        }

        if (array_key_exists("AclConditions",$param) and $param["AclConditions"] !== null) {
            $this->AclConditions = [];
            foreach ($param["AclConditions"] as $key => $value){
                $obj = new AclCondition();
                $obj->deserialize($value);
                array_push($this->AclConditions, $obj);
            }
        }

        if (array_key_exists("RulePriority",$param) and $param["RulePriority"] !== null) {
            $this->RulePriority = $param["RulePriority"];
        }

        if (array_key_exists("RuleID",$param) and $param["RuleID"] !== null) {
            $this->RuleID = $param["RuleID"];
        }

        if (array_key_exists("FreqFields",$param) and $param["FreqFields"] !== null) {
            $this->FreqFields = $param["FreqFields"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("FreqScope",$param) and $param["FreqScope"] !== null) {
            $this->FreqScope = $param["FreqScope"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("CustomResponseId",$param) and $param["CustomResponseId"] !== null) {
            $this->CustomResponseId = $param["CustomResponseId"];
        }

        if (array_key_exists("ResponseCode",$param) and $param["ResponseCode"] !== null) {
            $this->ResponseCode = $param["ResponseCode"];
        }

        if (array_key_exists("RedirectUrl",$param) and $param["RedirectUrl"] !== null) {
            $this->RedirectUrl = $param["RedirectUrl"];
        }
    }
}
