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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Custom ACL rule
 *
 * @method string getRuleName() Obtain Name of the rule
 * @method void setRuleName(string $RuleName) Set Name of the rule
 * @method string getAction() Obtain Action
 * @method void setAction(string $Action) Set Action
 * @method string getRuleStatus() Obtain Status of the rule
 * @method void setRuleStatus(string $RuleStatus) Set Status of the rule
 * @method array getConditions() Obtain ACL rule
 * @method void setConditions(array $Conditions) Set ACL rule
 * @method integer getRulePriority() Obtain Priority of the rule
 * @method void setRulePriority(integer $RulePriority) Set Priority of the rule
 * @method integer getRuleID() Obtain ID of the rule
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setRuleID(integer $RuleID) Set ID of the rule
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getUpdateTime() Obtain Update time
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set Update time
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method integer getPunishTime() Obtain IP blocking time
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setPunishTime(integer $PunishTime) Set IP blocking time
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getPunishTimeUnit() Obtain IP blocking time unit
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setPunishTimeUnit(string $PunishTimeUnit) Set IP blocking time unit
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getName() Obtain Name of the custom block page
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setName(string $Name) Set Name of the custom block page
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method integer getPageId() Obtain ID of the custom block page
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setPageId(integer $PageId) Set ID of the custom block page
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getRedirectUrl() Obtain Redirection URL, which must be a subdomain name of the site
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setRedirectUrl(string $RedirectUrl) Set Redirection URL, which must be a subdomain name of the site
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method integer getResponseCode() Obtain Return code configured on the custom block page
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setResponseCode(integer $ResponseCode) Set Return code configured on the custom block page
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class ACLUserRule extends AbstractModel
{
    /**
     * @var string Name of the rule
     */
    public $RuleName;

    /**
     * @var string Action
     */
    public $Action;

    /**
     * @var string Status of the rule
     */
    public $RuleStatus;

    /**
     * @var array ACL rule
     */
    public $Conditions;

    /**
     * @var integer Priority of the rule
     */
    public $RulePriority;

    /**
     * @var integer ID of the rule
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $RuleID;

    /**
     * @var string Update time
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $UpdateTime;

    /**
     * @var integer IP blocking time
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $PunishTime;

    /**
     * @var string IP blocking time unit
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $PunishTimeUnit;

    /**
     * @var string Name of the custom block page
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Name;

    /**
     * @var integer ID of the custom block page
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $PageId;

    /**
     * @var string Redirection URL, which must be a subdomain name of the site
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $RedirectUrl;

    /**
     * @var integer Return code configured on the custom block page
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $ResponseCode;

    /**
     * @param string $RuleName Name of the rule
     * @param string $Action Action
     * @param string $RuleStatus Status of the rule
     * @param array $Conditions ACL rule
     * @param integer $RulePriority Priority of the rule
     * @param integer $RuleID ID of the rule
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $UpdateTime Update time
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param integer $PunishTime IP blocking time
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $PunishTimeUnit IP blocking time unit
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $Name Name of the custom block page
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param integer $PageId ID of the custom block page
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $RedirectUrl Redirection URL, which must be a subdomain name of the site
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param integer $ResponseCode Return code configured on the custom block page
Note: This field may return `null`, indicating that no valid value can be obtained.
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

        if (array_key_exists("Conditions",$param) and $param["Conditions"] !== null) {
            $this->Conditions = [];
            foreach ($param["Conditions"] as $key => $value){
                $obj = new ACLCondition();
                $obj->deserialize($value);
                array_push($this->Conditions, $obj);
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

        if (array_key_exists("RedirectUrl",$param) and $param["RedirectUrl"] !== null) {
            $this->RedirectUrl = $param["RedirectUrl"];
        }

        if (array_key_exists("ResponseCode",$param) and $param["ResponseCode"] !== null) {
            $this->ResponseCode = $param["ResponseCode"];
        }
    }
}
