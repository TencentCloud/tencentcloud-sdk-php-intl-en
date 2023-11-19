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
 * The custom rule
 *
 * @method string getRuleName() Obtain The rule name.
 * @method void setRuleName(string $RuleName) Set The rule name.
 * @method string getAction() Obtain The action. Values:
<li>`trans`: Allow</li>
<li>`drop`: Block the request</li>
<li>`monitor`: Observe</li>
<li>`ban`: Block the IP</li>
<li>`redirect`: Redirect the request</li>
<li>`page`: Return the specified page</li>
<li>`alg`: JavaScript challenge</li>
 * @method void setAction(string $Action) Set The action. Values:
<li>`trans`: Allow</li>
<li>`drop`: Block the request</li>
<li>`monitor`: Observe</li>
<li>`ban`: Block the IP</li>
<li>`redirect`: Redirect the request</li>
<li>`page`: Return the specified page</li>
<li>`alg`: JavaScript challenge</li>
 * @method string getRuleStatus() Obtain The rule status. Values:
<li>`on`: Enabled</li>
<li>`off`: Disabled</li>
 * @method void setRuleStatus(string $RuleStatus) Set The rule status. Values:
<li>`on`: Enabled</li>
<li>`off`: Disabled</li>
 * @method array getAclConditions() Obtain The custom rule.
 * @method void setAclConditions(array $AclConditions) Set The custom rule.
 * @method integer getRulePriority() Obtain The rule priority. Value range: 0-100.
 * @method void setRulePriority(integer $RulePriority) Set The rule priority. Value range: 0-100.
 * @method integer getRuleID() Obtain Rule ID, which is only used as an output parameter.
 * @method void setRuleID(integer $RuleID) Set Rule ID, which is only used as an output parameter.
 * @method string getUpdateTime() Obtain The update time, which is only used as an output parameter.
 * @method void setUpdateTime(string $UpdateTime) Set The update time, which is only used as an output parameter.
 * @method integer getPunishTime() Obtain IP ban duration. Range: 0-2 days. It's required when `Action=ban`. 
 * @method void setPunishTime(integer $PunishTime) Set IP ban duration. Range: 0-2 days. It's required when `Action=ban`. 
 * @method string getPunishTimeUnit() Obtain The unit of the IP ban duration. Values:
<li>`second`: Second</li>
<li>`minutes`: Minute</li>
<li>`hour`: Hour</li>Default value: `second`.
 * @method void setPunishTimeUnit(string $PunishTimeUnit) Set The unit of the IP ban duration. Values:
<li>`second`: Second</li>
<li>`minutes`: Minute</li>
<li>`hour`: Hour</li>Default value: `second`.
 * @method string getName() Obtain Name of the custom return page. It's required when `Action=page`.	
 * @method void setName(string $Name) Set Name of the custom return page. It's required when `Action=page`.	
 * @method integer getPageId() Obtain (Disused) ID of the custom return page. The default value is 0, which means that the system default blocking page is used. 
 * @method void setPageId(integer $PageId) Set (Disused) ID of the custom return page. The default value is 0, which means that the system default blocking page is used. 
 * @method string getCustomResponseId() Obtain ID of custom response. The ID can be obtained via the `DescribeCustomErrorPages` API. It's required when `Action=page`.	
 * @method void setCustomResponseId(string $CustomResponseId) Set ID of custom response. The ID can be obtained via the `DescribeCustomErrorPages` API. It's required when `Action=page`.	
 * @method integer getResponseCode() Obtain The response code to trigger the return page. It's required when `Action=page`. Value: 100-600. 3xx response codes are not supported. Default value: 567.
 * @method void setResponseCode(integer $ResponseCode) Set The response code to trigger the return page. It's required when `Action=page`. Value: 100-600. 3xx response codes are not supported. Default value: 567.
 * @method string getRedirectUrl() Obtain The redirection URL. It's required when `Action=redirect`.	
 * @method void setRedirectUrl(string $RedirectUrl) Set The redirection URL. It's required when `Action=redirect`.	
 */
class AclUserRule extends AbstractModel
{
    /**
     * @var string The rule name.
     */
    public $RuleName;

    /**
     * @var string The action. Values:
<li>`trans`: Allow</li>
<li>`drop`: Block the request</li>
<li>`monitor`: Observe</li>
<li>`ban`: Block the IP</li>
<li>`redirect`: Redirect the request</li>
<li>`page`: Return the specified page</li>
<li>`alg`: JavaScript challenge</li>
     */
    public $Action;

    /**
     * @var string The rule status. Values:
<li>`on`: Enabled</li>
<li>`off`: Disabled</li>
     */
    public $RuleStatus;

    /**
     * @var array The custom rule.
     */
    public $AclConditions;

    /**
     * @var integer The rule priority. Value range: 0-100.
     */
    public $RulePriority;

    /**
     * @var integer Rule ID, which is only used as an output parameter.
     */
    public $RuleID;

    /**
     * @var string The update time, which is only used as an output parameter.
     */
    public $UpdateTime;

    /**
     * @var integer IP ban duration. Range: 0-2 days. It's required when `Action=ban`. 
     */
    public $PunishTime;

    /**
     * @var string The unit of the IP ban duration. Values:
<li>`second`: Second</li>
<li>`minutes`: Minute</li>
<li>`hour`: Hour</li>Default value: `second`.
     */
    public $PunishTimeUnit;

    /**
     * @var string Name of the custom return page. It's required when `Action=page`.	
     */
    public $Name;

    /**
     * @var integer (Disused) ID of the custom return page. The default value is 0, which means that the system default blocking page is used. 
     */
    public $PageId;

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
     * @param string $RuleName The rule name.
     * @param string $Action The action. Values:
<li>`trans`: Allow</li>
<li>`drop`: Block the request</li>
<li>`monitor`: Observe</li>
<li>`ban`: Block the IP</li>
<li>`redirect`: Redirect the request</li>
<li>`page`: Return the specified page</li>
<li>`alg`: JavaScript challenge</li>
     * @param string $RuleStatus The rule status. Values:
<li>`on`: Enabled</li>
<li>`off`: Disabled</li>
     * @param array $AclConditions The custom rule.
     * @param integer $RulePriority The rule priority. Value range: 0-100.
     * @param integer $RuleID Rule ID, which is only used as an output parameter.
     * @param string $UpdateTime The update time, which is only used as an output parameter.
     * @param integer $PunishTime IP ban duration. Range: 0-2 days. It's required when `Action=ban`. 
     * @param string $PunishTimeUnit The unit of the IP ban duration. Values:
<li>`second`: Second</li>
<li>`minutes`: Minute</li>
<li>`hour`: Hour</li>Default value: `second`.
     * @param string $Name Name of the custom return page. It's required when `Action=page`.	
     * @param integer $PageId (Disused) ID of the custom return page. The default value is 0, which means that the system default blocking page is used. 
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

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("PunishTime",$param) and $param["PunishTime"] !== null) {
            $this->PunishTime = $param["PunishTime"];
        }

        if (array_key_exists("PunishTimeUnit",$param) and $param["PunishTimeUnit"] !== null) {
            $this->PunishTimeUnit = $param["PunishTimeUnit"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("PageId",$param) and $param["PageId"] !== null) {
            $this->PageId = $param["PageId"];
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
