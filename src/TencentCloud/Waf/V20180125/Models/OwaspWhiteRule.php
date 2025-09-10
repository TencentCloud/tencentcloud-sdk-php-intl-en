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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Rule engine allowlist.
 *
 * @method integer getRuleId() Obtain Rule ID of the allowlist.
 * @method void setRuleId(integer $RuleId) Set Rule ID of the allowlist.
 * @method string getName() Obtain Rule Name
 * @method void setName(string $Name) Set Rule Name
 * @method array getIds() Obtain ID list of allowlisted rules.
 * @method void setIds(array $Ids) Set ID list of allowlisted rules.
 * @method integer getStatus() Obtain Allowlist rule state. valid values: 0 (disabled), 1 (enabled).
 * @method void setStatus(integer $Status) Set Allowlist rule state. valid values: 0 (disabled), 1 (enabled).
 * @method integer getType() Obtain Allowlist type. valid values: 0 (allowlisting by specific rule ID), 1 (allowlisting by rule type).
 * @method void setType(integer $Type) Set Allowlist type. valid values: 0 (allowlisting by specific rule ID), 1 (allowlisting by rule type).
 * @method array getStrategies() Obtain Rule-Based matching policy list.
 * @method void setStrategies(array $Strategies) Set Rule-Based matching policy list.
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method string getUpdateTime() Obtain Modification time
 * @method void setUpdateTime(string $UpdateTime) Set Modification time
 * @method string getJobType() Obtain Scheduled task type
 * @method void setJobType(string $JobType) Set Scheduled task type
 * @method JobDateTime getJobDateTime() Obtain Scheduled task configuration
 * @method void setJobDateTime(JobDateTime $JobDateTime) Set Scheduled task configuration
 * @method string getCronType() Obtain Periodic task granularity.
 * @method void setCronType(string $CronType) Set Periodic task granularity.
 * @method boolean getValidStatus() Obtain Whether there is currently valid.
 * @method void setValidStatus(boolean $ValidStatus) Set Whether there is currently valid.
 */
class OwaspWhiteRule extends AbstractModel
{
    /**
     * @var integer Rule ID of the allowlist.
     */
    public $RuleId;

    /**
     * @var string Rule Name
     */
    public $Name;

    /**
     * @var array ID list of allowlisted rules.
     */
    public $Ids;

    /**
     * @var integer Allowlist rule state. valid values: 0 (disabled), 1 (enabled).
     */
    public $Status;

    /**
     * @var integer Allowlist type. valid values: 0 (allowlisting by specific rule ID), 1 (allowlisting by rule type).
     */
    public $Type;

    /**
     * @var array Rule-Based matching policy list.
     */
    public $Strategies;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var string Modification time
     */
    public $UpdateTime;

    /**
     * @var string Scheduled task type
     */
    public $JobType;

    /**
     * @var JobDateTime Scheduled task configuration
     */
    public $JobDateTime;

    /**
     * @var string Periodic task granularity.
     */
    public $CronType;

    /**
     * @var boolean Whether there is currently valid.
     */
    public $ValidStatus;

    /**
     * @param integer $RuleId Rule ID of the allowlist.
     * @param string $Name Rule Name
     * @param array $Ids ID list of allowlisted rules.
     * @param integer $Status Allowlist rule state. valid values: 0 (disabled), 1 (enabled).
     * @param integer $Type Allowlist type. valid values: 0 (allowlisting by specific rule ID), 1 (allowlisting by rule type).
     * @param array $Strategies Rule-Based matching policy list.
     * @param string $CreateTime Creation time
     * @param string $UpdateTime Modification time
     * @param string $JobType Scheduled task type
     * @param JobDateTime $JobDateTime Scheduled task configuration
     * @param string $CronType Periodic task granularity.
     * @param boolean $ValidStatus Whether there is currently valid.
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Ids",$param) and $param["Ids"] !== null) {
            $this->Ids = $param["Ids"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Strategies",$param) and $param["Strategies"] !== null) {
            $this->Strategies = [];
            foreach ($param["Strategies"] as $key => $value){
                $obj = new Strategy();
                $obj->deserialize($value);
                array_push($this->Strategies, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
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

        if (array_key_exists("ValidStatus",$param) and $param["ValidStatus"] !== null) {
            $this->ValidStatus = $param["ValidStatus"];
        }
    }
}
