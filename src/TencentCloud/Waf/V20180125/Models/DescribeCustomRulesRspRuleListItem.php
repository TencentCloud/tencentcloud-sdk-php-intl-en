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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Complex type in the DescribeCustomRules interface response packet
 *
 * @method string getActionType() Obtain Action type
 * @method void setActionType(string $ActionType) Set Action type
 * @method string getBypass() Obtain Skipped Policy
 * @method void setBypass(string $Bypass) Set Skipped Policy
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method string getExpireTime() Obtain Expiration time
 * @method void setExpireTime(string $ExpireTime) Set Expiration time
 * @method string getName() Obtain Policy name
 * @method void setName(string $Name) Set Policy name
 * @method string getRedirect() Obtain URL for redirection
 * @method void setRedirect(string $Redirect) Set URL for redirection
 * @method string getRuleId() Obtain Policy ID
 * @method void setRuleId(string $RuleId) Set Policy ID
 * @method string getSortId() Obtain Priority
 * @method void setSortId(string $SortId) Set Priority
 * @method string getStatus() Obtain Status
 * @method void setStatus(string $Status) Set Status
 * @method array getStrategies() Obtain Policy details
 * @method void setStrategies(array $Strategies) Set Policy details
 * @method string getEventId() Obtain Event ID

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEventId(string $EventId) Set Event ID

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getModifyTime() Obtain Modification time

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setModifyTime(string $ModifyTime) Set Modification time

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getValidStatus() Obtain Effective status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setValidStatus(integer $ValidStatus) Set Effective status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSource() Obtain Source
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSource(string $Source) Set Source
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getJobType() Obtain Scheduled task type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setJobType(string $JobType) Set Scheduled task type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method JobDateTime getJobDateTime() Obtain Scheduled task configuration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setJobDateTime(JobDateTime $JobDateTime) Set Scheduled task configuration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCronType() Obtain Periodic task granularity
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCronType(string $CronType) Set Periodic task granularity
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLabel() Obtain Custom tag in risk control rules, indicating whether a rule is built-in or user-defined
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLabel(string $Label) Set Custom tag in risk control rules, indicating whether a rule is built-in or user-defined
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPageId() Obtain ID of the blocked page
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPageId(string $PageId) Set ID of the blocked page
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDomain() Obtain Domain name

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDomain(string $Domain) Set Domain name

Note: This field may return null, indicating that no valid values can be obtained.
 */
class DescribeCustomRulesRspRuleListItem extends AbstractModel
{
    /**
     * @var string Action type
     */
    public $ActionType;

    /**
     * @var string Skipped Policy
     */
    public $Bypass;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var string Expiration time
     */
    public $ExpireTime;

    /**
     * @var string Policy name
     */
    public $Name;

    /**
     * @var string URL for redirection
     */
    public $Redirect;

    /**
     * @var string Policy ID
     */
    public $RuleId;

    /**
     * @var string Priority
     */
    public $SortId;

    /**
     * @var string Status
     */
    public $Status;

    /**
     * @var array Policy details
     */
    public $Strategies;

    /**
     * @var string Event ID

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EventId;

    /**
     * @var string Modification time

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ModifyTime;

    /**
     * @var integer Effective status
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ValidStatus;

    /**
     * @var string Source
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Source;

    /**
     * @var string Scheduled task type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $JobType;

    /**
     * @var JobDateTime Scheduled task configuration
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $JobDateTime;

    /**
     * @var string Periodic task granularity
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CronType;

    /**
     * @var string Custom tag in risk control rules, indicating whether a rule is built-in or user-defined
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Label;

    /**
     * @var string ID of the blocked page
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PageId;

    /**
     * @var string Domain name

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Domain;

    /**
     * @param string $ActionType Action type
     * @param string $Bypass Skipped Policy
     * @param string $CreateTime Creation time
     * @param string $ExpireTime Expiration time
     * @param string $Name Policy name
     * @param string $Redirect URL for redirection
     * @param string $RuleId Policy ID
     * @param string $SortId Priority
     * @param string $Status Status
     * @param array $Strategies Policy details
     * @param string $EventId Event ID

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ModifyTime Modification time

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ValidStatus Effective status
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Source Source
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $JobType Scheduled task type
Note: This field may return null, indicating that no valid values can be obtained.
     * @param JobDateTime $JobDateTime Scheduled task configuration
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CronType Periodic task granularity
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Label Custom tag in risk control rules, indicating whether a rule is built-in or user-defined
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PageId ID of the blocked page
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Domain Domain name

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
        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("Bypass",$param) and $param["Bypass"] !== null) {
            $this->Bypass = $param["Bypass"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Redirect",$param) and $param["Redirect"] !== null) {
            $this->Redirect = $param["Redirect"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("SortId",$param) and $param["SortId"] !== null) {
            $this->SortId = $param["SortId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Strategies",$param) and $param["Strategies"] !== null) {
            $this->Strategies = [];
            foreach ($param["Strategies"] as $key => $value){
                $obj = new Strategy();
                $obj->deserialize($value);
                array_push($this->Strategies, $obj);
            }
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("ValidStatus",$param) and $param["ValidStatus"] !== null) {
            $this->ValidStatus = $param["ValidStatus"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("JobType",$param) and $param["JobType"] !== null) {
            $this->JobType = $param["JobType"];
        }

        if (array_key_exists("JobDateTime",$param) and $param["JobDateTime"] !== null) {
            $this->JobDateTime = new JobDateTime();
            $this->JobDateTime->deserialize($param["JobDateTime"]);
        }

        if (array_key_exists("CronType",$param) and $param["CronType"] !== null) {
            $this->CronType = $param["CronType"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("PageId",$param) and $param["PageId"] !== null) {
            $this->PageId = $param["PageId"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }
    }
}
