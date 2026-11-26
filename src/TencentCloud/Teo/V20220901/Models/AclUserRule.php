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
 * User-defined rules
 *
 * @method string getRuleName() Obtain Rule name.
 * @method void setRuleName(string $RuleName) Set Rule name.
 * @method string getAction() Obtain Penalty action. Valid values:
<li>trans: pass;</li>
<li>drop: block;</li>
<li>monitor: observation;</li>
<li>ban: IP block;</li>
<li>redirect: Redirection;</li>
<li>page: Specified page;</li>
<li>alg: JavaScript challenge.</li>
 * @method void setAction(string $Action) Set Penalty action. Valid values:
<li>trans: pass;</li>
<li>drop: block;</li>
<li>monitor: observation;</li>
<li>ban: IP block;</li>
<li>redirect: Redirection;</li>
<li>page: Specified page;</li>
<li>alg: JavaScript challenge.</li>
 * @method string getRuleStatus() Obtain Rule status. Valid values:
<li>`on`: Take effect;</li>
<li>off: Disable.</li>
 * @method void setRuleStatus(string $RuleStatus) Set Rule status. Valid values:
<li>`on`: Take effect;</li>
<li>off: Disable.</li>
 * @method array getAclConditions() Obtain Custom rule.
 * @method void setAclConditions(array $AclConditions) Set Custom rule.
 * @method integer getRulePriority() Obtain Rule priority. Value range: 0-100.
 * @method void setRulePriority(integer $RulePriority) Set Rule priority. Value range: 0-100.
 * @method integer getRuleID() Obtain Rule Id. Output only.
 * @method void setRuleID(integer $RuleID) Set Rule Id. Output only.
 * @method string getUpdateTime() Obtain Update time. For output usage only.
 * @method void setUpdateTime(string $UpdateTime) Set Update time. For output usage only.
 * @method integer getPunishTime() Obtain Penalty duration for ip blocking. Required when Action is ban. It cannot be empty and the value ranges from 0 to 2 days.
 * @method void setPunishTime(integer $PunishTime) Set Penalty duration for ip blocking. Required when Action is ban. It cannot be empty and the value ranges from 0 to 2 days.
 * @method string getPunishTimeUnit() Obtain Penalty time unit for ip blocking. Valid values:
<li>second: second;</li>
<li>minutes: minute;</li>
<li>hour: hour.</li>Default: second.
 * @method void setPunishTimeUnit(string $PunishTimeUnit) Set Penalty time unit for ip blocking. Valid values:
<li>second: second;</li>
<li>minutes: minute;</li>
<li>hour: hour.</li>Default: second.
 * @method string getName() Obtain Name of the custom return page. Required when Action is page, and cannot be empty.	
 * @method void setName(string $Name) Set Name of the custom return page. Required when Action is page, and cannot be empty.	
 * @method integer getPageId() Obtain Instance Id for the custom return page. Default value: 0, which means the system default blocking page is used. This parameter is deprecated.
 * @method void setPageId(integer $PageId) Set Instance Id for the custom return page. Default value: 0, which means the system default blocking page is used. This parameter is deprecated.
 * @method string getCustomResponseId() Obtain Custom response Id, which can be obtained through the API for querying the custom error page list. The default value is default, which uses the system default page. Required and cannot be empty when Action is page.	
 * @method void setCustomResponseId(string $CustomResponseId) Set Custom response Id, which can be obtained through the API for querying the custom error page list. The default value is default, which uses the system default page. Required and cannot be empty when Action is page.	
 * @method integer getResponseCode() Obtain code of the custom return page. Required when Action is page. The value cannot be empty. Value range: 100-600. 3xx response codes are unsupported. Default value: 567.
 * @method void setResponseCode(integer $ResponseCode) Set code of the custom return page. Required when Action is page. The value cannot be empty. Value range: 100-600. 3xx response codes are unsupported. Default value: 567.
 * @method string getRedirectUrl() Obtain Address for redirection. Required when Action is `redirect` and cannot be empty.	
 * @method void setRedirectUrl(string $RedirectUrl) Set Address for redirection. Required when Action is `redirect` and cannot be empty.	
 */
class AclUserRule extends AbstractModel
{
    /**
     * @var string Rule name.
     */
    public $RuleName;

    /**
     * @var string Penalty action. Valid values:
<li>trans: pass;</li>
<li>drop: block;</li>
<li>monitor: observation;</li>
<li>ban: IP block;</li>
<li>redirect: Redirection;</li>
<li>page: Specified page;</li>
<li>alg: JavaScript challenge.</li>
     */
    public $Action;

    /**
     * @var string Rule status. Valid values:
<li>`on`: Take effect;</li>
<li>off: Disable.</li>
     */
    public $RuleStatus;

    /**
     * @var array Custom rule.
     */
    public $AclConditions;

    /**
     * @var integer Rule priority. Value range: 0-100.
     */
    public $RulePriority;

    /**
     * @var integer Rule Id. Output only.
     */
    public $RuleID;

    /**
     * @var string Update time. For output usage only.
     */
    public $UpdateTime;

    /**
     * @var integer Penalty duration for ip blocking. Required when Action is ban. It cannot be empty and the value ranges from 0 to 2 days.
     */
    public $PunishTime;

    /**
     * @var string Penalty time unit for ip blocking. Valid values:
<li>second: second;</li>
<li>minutes: minute;</li>
<li>hour: hour.</li>Default: second.
     */
    public $PunishTimeUnit;

    /**
     * @var string Name of the custom return page. Required when Action is page, and cannot be empty.	
     */
    public $Name;

    /**
     * @var integer Instance Id for the custom return page. Default value: 0, which means the system default blocking page is used. This parameter is deprecated.
     */
    public $PageId;

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
     * @param string $RuleName Rule name.
     * @param string $Action Penalty action. Valid values:
<li>trans: pass;</li>
<li>drop: block;</li>
<li>monitor: observation;</li>
<li>ban: IP block;</li>
<li>redirect: Redirection;</li>
<li>page: Specified page;</li>
<li>alg: JavaScript challenge.</li>
     * @param string $RuleStatus Rule status. Valid values:
<li>`on`: Take effect;</li>
<li>off: Disable.</li>
     * @param array $AclConditions Custom rule.
     * @param integer $RulePriority Rule priority. Value range: 0-100.
     * @param integer $RuleID Rule Id. Output only.
     * @param string $UpdateTime Update time. For output usage only.
     * @param integer $PunishTime Penalty duration for ip blocking. Required when Action is ban. It cannot be empty and the value ranges from 0 to 2 days.
     * @param string $PunishTimeUnit Penalty time unit for ip blocking. Valid values:
<li>second: second;</li>
<li>minutes: minute;</li>
<li>hour: hour.</li>Default: second.
     * @param string $Name Name of the custom return page. Required when Action is page, and cannot be empty.	
     * @param integer $PageId Instance Id for the custom return page. Default value: 0, which means the system default blocking page is used. This parameter is deprecated.
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
