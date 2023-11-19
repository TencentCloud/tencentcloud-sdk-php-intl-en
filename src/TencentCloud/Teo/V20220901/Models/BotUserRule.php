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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Custom bot rules
 *
 * @method string getRuleName() Obtain 
 * @method void setRuleName(string $RuleName) Set 
 * @method string getAction() Obtain The action. Values:
<li>`drop`: Block the request</li>
<li>`monitor`: Observe</li>
<li>`trans`: Allow</li>
<li>`redirect`: Redirect the request</li>
<li>`page`: Return the specified page</li>
<li>`alg`: JavaScript challenge</li>
<li>`captcha`: Managed challenge</li>
<li>`random`: Handle the request randomly by the weight</li>
<li>`silence`: Keep the connection but do not response to the client</li>
<li>`shortdelay`: Add a short latency period</li>
<li>`longdelay`: Add a long latency period</li>
 * @method void setAction(string $Action) Set The action. Values:
<li>`drop`: Block the request</li>
<li>`monitor`: Observe</li>
<li>`trans`: Allow</li>
<li>`redirect`: Redirect the request</li>
<li>`page`: Return the specified page</li>
<li>`alg`: JavaScript challenge</li>
<li>`captcha`: Managed challenge</li>
<li>`random`: Handle the request randomly by the weight</li>
<li>`silence`: Keep the connection but do not response to the client</li>
<li>`shortdelay`: Add a short latency period</li>
<li>`longdelay`: Add a long latency period</li>
 * @method string getRuleStatus() Obtain The rule status. Values:
<li>`on`: Enabled</li>
<li>`off`: Disabled</li>Default value: `on`
 * @method void setRuleStatus(string $RuleStatus) Set The rule status. Values:
<li>`on`: Enabled</li>
<li>`off`: Disabled</li>Default value: `on`
 * @method array getAclConditions() Obtain Details of the rule.
 * @method void setAclConditions(array $AclConditions) Set Details of the rule.
 * @method integer getRulePriority() Obtain The rule weight. Value range: 0-100.
 * @method void setRulePriority(integer $RulePriority) Set The rule weight. Value range: 0-100.
 * @method integer getRuleID() Obtain Rule ID, which is only used as an output parameter.
 * @method void setRuleID(integer $RuleID) Set Rule ID, which is only used as an output parameter.
 * @method array getExtendActions() Obtain [Currently unavailable] Specify the random action and percentage.
 * @method void setExtendActions(array $ExtendActions) Set [Currently unavailable] Specify the random action and percentage.
 * @method array getFreqFields() Obtain The filter. Values:
<li>`sip`: Client IP</li>
This parameter is left empty by default.
 * @method void setFreqFields(array $FreqFields) Set The filter. Values:
<li>`sip`: Client IP</li>
This parameter is left empty by default.
 * @method string getUpdateTime() Obtain The update time, which is only used as an output parameter.
 * @method void setUpdateTime(string $UpdateTime) Set The update time, which is only used as an output parameter.
 * @method array getFreqScope() Obtain Query scope. Values:
<li>`source_to_eo`: (Response) Traffic going from the origin to EdgeOne.</li>
<li>`client_to_eo`: (Request) Traffic going from the client to EdgeOne.</li>
Default: `source_to_eo`.
 * @method void setFreqScope(array $FreqScope) Set Query scope. Values:
<li>`source_to_eo`: (Response) Traffic going from the origin to EdgeOne.</li>
<li>`client_to_eo`: (Request) Traffic going from the client to EdgeOne.</li>
Default: `source_to_eo`.
 * @method string getName() Obtain Name of the custom return page. It's required when `Action=page`.
 * @method void setName(string $Name) Set Name of the custom return page. It's required when `Action=page`.
 * @method string getCustomResponseId() Obtain ID of custom response. The ID can be obtained via the `DescribeCustomErrorPages` API. It's required when `Action=page`.	
 * @method void setCustomResponseId(string $CustomResponseId) Set ID of custom response. The ID can be obtained via the `DescribeCustomErrorPages` API. It's required when `Action=page`.	
 * @method integer getResponseCode() Obtain The response code to trigger the return page. It's required when `Action=page`. Value: 100-600. 3xx response codes are not supported. Default value: 567.
 * @method void setResponseCode(integer $ResponseCode) Set The response code to trigger the return page. It's required when `Action=page`. Value: 100-600. 3xx response codes are not supported. Default value: 567.
 * @method string getRedirectUrl() Obtain The redirection URL. It's required when `Action=redirect`.
 * @method void setRedirectUrl(string $RedirectUrl) Set The redirection URL. It's required when `Action=redirect`.
 */
class BotUserRule extends AbstractModel
{
    /**
     * @var string 
     */
    public $RuleName;

    /**
     * @var string The action. Values:
<li>`drop`: Block the request</li>
<li>`monitor`: Observe</li>
<li>`trans`: Allow</li>
<li>`redirect`: Redirect the request</li>
<li>`page`: Return the specified page</li>
<li>`alg`: JavaScript challenge</li>
<li>`captcha`: Managed challenge</li>
<li>`random`: Handle the request randomly by the weight</li>
<li>`silence`: Keep the connection but do not response to the client</li>
<li>`shortdelay`: Add a short latency period</li>
<li>`longdelay`: Add a long latency period</li>
     */
    public $Action;

    /**
     * @var string The rule status. Values:
<li>`on`: Enabled</li>
<li>`off`: Disabled</li>Default value: `on`
     */
    public $RuleStatus;

    /**
     * @var array Details of the rule.
     */
    public $AclConditions;

    /**
     * @var integer The rule weight. Value range: 0-100.
     */
    public $RulePriority;

    /**
     * @var integer Rule ID, which is only used as an output parameter.
     */
    public $RuleID;

    /**
     * @var array [Currently unavailable] Specify the random action and percentage.
     */
    public $ExtendActions;

    /**
     * @var array The filter. Values:
<li>`sip`: Client IP</li>
This parameter is left empty by default.
     */
    public $FreqFields;

    /**
     * @var string The update time, which is only used as an output parameter.
     */
    public $UpdateTime;

    /**
     * @var array Query scope. Values:
<li>`source_to_eo`: (Response) Traffic going from the origin to EdgeOne.</li>
<li>`client_to_eo`: (Request) Traffic going from the client to EdgeOne.</li>
Default: `source_to_eo`.
     */
    public $FreqScope;

    /**
     * @var string Name of the custom return page. It's required when `Action=page`.
     */
    public $Name;

    /**
     * @var string ID of custom response. The ID can be obtained via the `DescribeCustomErrorPages` API. It's required when `Action=page`.	
     */
    public $CustomResponseId;

    /**
     * @var integer The response code to trigger the return page. It's required when `Action=page`. Value: 100-600. 3xx response codes are not supported. Default value: 567.
     */
    public $ResponseCode;

    /**
     * @var string The redirection URL. It's required when `Action=redirect`.
     */
    public $RedirectUrl;

    /**
     * @param string $RuleName 
     * @param string $Action The action. Values:
<li>`drop`: Block the request</li>
<li>`monitor`: Observe</li>
<li>`trans`: Allow</li>
<li>`redirect`: Redirect the request</li>
<li>`page`: Return the specified page</li>
<li>`alg`: JavaScript challenge</li>
<li>`captcha`: Managed challenge</li>
<li>`random`: Handle the request randomly by the weight</li>
<li>`silence`: Keep the connection but do not response to the client</li>
<li>`shortdelay`: Add a short latency period</li>
<li>`longdelay`: Add a long latency period</li>
     * @param string $RuleStatus The rule status. Values:
<li>`on`: Enabled</li>
<li>`off`: Disabled</li>Default value: `on`
     * @param array $AclConditions Details of the rule.
     * @param integer $RulePriority The rule weight. Value range: 0-100.
     * @param integer $RuleID Rule ID, which is only used as an output parameter.
     * @param array $ExtendActions [Currently unavailable] Specify the random action and percentage.
     * @param array $FreqFields The filter. Values:
<li>`sip`: Client IP</li>
This parameter is left empty by default.
     * @param string $UpdateTime The update time, which is only used as an output parameter.
     * @param array $FreqScope Query scope. Values:
<li>`source_to_eo`: (Response) Traffic going from the origin to EdgeOne.</li>
<li>`client_to_eo`: (Request) Traffic going from the client to EdgeOne.</li>
Default: `source_to_eo`.
     * @param string $Name Name of the custom return page. It's required when `Action=page`.
     * @param string $CustomResponseId ID of custom response. The ID can be obtained via the `DescribeCustomErrorPages` API. It's required when `Action=page`.	
     * @param integer $ResponseCode The response code to trigger the return page. It's required when `Action=page`. Value: 100-600. 3xx response codes are not supported. Default value: 567.
     * @param string $RedirectUrl The redirection URL. It's required when `Action=redirect`.
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
        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
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

        if (array_key_exists("ExtendActions",$param) and $param["ExtendActions"] !== null) {
            $this->ExtendActions = [];
            foreach ($param["ExtendActions"] as $key => $value){
                $obj = new BotExtendAction();
                $obj->deserialize($value);
                array_push($this->ExtendActions, $obj);
            }
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
