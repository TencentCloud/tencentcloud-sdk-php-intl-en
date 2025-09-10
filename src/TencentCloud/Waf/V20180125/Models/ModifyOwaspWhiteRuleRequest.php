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
 * ModifyOwaspWhiteRule request structure.
 *
 * @method integer getRuleId() Obtain Rule ID
 * @method void setRuleId(integer $RuleId) Set Rule ID
 * @method string getName() Obtain Rule name
 * @method void setName(string $Name) Set Rule name
 * @method string getDomain() Obtain Domain name
 * @method void setDomain(string $Domain) Set Domain name
 * @method array getStrategies() Obtain Rule-Based matching policy list.
 * @method void setStrategies(array $Strategies) Set Rule-Based matching policy list.
 * @method array getIds() Obtain ID list of allowlisted rules.
 * @method void setIds(array $Ids) Set ID list of allowlisted rules.
 * @method integer getType() Obtain Allowlist type. valid values: 0 (allowlisting by specific rule ID), 1 (allowlisting by rule type).
 * @method void setType(integer $Type) Set Allowlist type. valid values: 0 (allowlisting by specific rule ID), 1 (allowlisting by rule type).
 * @method string getJobType() Obtain Rule execution mode: TimedJob indicates scheduled execution. CronJob indicates periodic execution.
 * @method void setJobType(string $JobType) Set Rule execution mode: TimedJob indicates scheduled execution. CronJob indicates periodic execution.
 * @method JobDateTime getJobDateTime() Obtain Scheduled task configuration
 * @method void setJobDateTime(JobDateTime $JobDateTime) Set Scheduled task configuration
 * @method integer getExpireTime() Obtain If the JobDateTime field is not set, this field is used. 0 means permanent, other values indicate the cutoff time for scheduled effect (unit: seconds).
 * @method void setExpireTime(integer $ExpireTime) Set If the JobDateTime field is not set, this field is used. 0 means permanent, other values indicate the cutoff time for scheduled effect (unit: seconds).
 * @method integer getStatus() Obtain Rule status. valid values: 0 (disabled), 1 (enabled). enabled by default.
 * @method void setStatus(integer $Status) Set Rule status. valid values: 0 (disabled), 1 (enabled). enabled by default.
 */
class ModifyOwaspWhiteRuleRequest extends AbstractModel
{
    /**
     * @var integer Rule ID
     */
    public $RuleId;

    /**
     * @var string Rule name
     */
    public $Name;

    /**
     * @var string Domain name
     */
    public $Domain;

    /**
     * @var array Rule-Based matching policy list.
     */
    public $Strategies;

    /**
     * @var array ID list of allowlisted rules.
     */
    public $Ids;

    /**
     * @var integer Allowlist type. valid values: 0 (allowlisting by specific rule ID), 1 (allowlisting by rule type).
     */
    public $Type;

    /**
     * @var string Rule execution mode: TimedJob indicates scheduled execution. CronJob indicates periodic execution.
     */
    public $JobType;

    /**
     * @var JobDateTime Scheduled task configuration
     */
    public $JobDateTime;

    /**
     * @var integer If the JobDateTime field is not set, this field is used. 0 means permanent, other values indicate the cutoff time for scheduled effect (unit: seconds).
     */
    public $ExpireTime;

    /**
     * @var integer Rule status. valid values: 0 (disabled), 1 (enabled). enabled by default.
     */
    public $Status;

    /**
     * @param integer $RuleId Rule ID
     * @param string $Name Rule name
     * @param string $Domain Domain name
     * @param array $Strategies Rule-Based matching policy list.
     * @param array $Ids ID list of allowlisted rules.
     * @param integer $Type Allowlist type. valid values: 0 (allowlisting by specific rule ID), 1 (allowlisting by rule type).
     * @param string $JobType Rule execution mode: TimedJob indicates scheduled execution. CronJob indicates periodic execution.
     * @param JobDateTime $JobDateTime Scheduled task configuration
     * @param integer $ExpireTime If the JobDateTime field is not set, this field is used. 0 means permanent, other values indicate the cutoff time for scheduled effect (unit: seconds).
     * @param integer $Status Rule status. valid values: 0 (disabled), 1 (enabled). enabled by default.
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

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Strategies",$param) and $param["Strategies"] !== null) {
            $this->Strategies = [];
            foreach ($param["Strategies"] as $key => $value){
                $obj = new Strategy();
                $obj->deserialize($value);
                array_push($this->Strategies, $obj);
            }
        }

        if (array_key_exists("Ids",$param) and $param["Ids"] !== null) {
            $this->Ids = $param["Ids"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("JobType",$param) and $param["JobType"] !== null) {
            $this->JobType = $param["JobType"];
        }

        if (array_key_exists("JobDateTime",$param) and $param["JobDateTime"] !== null) {
            $this->JobDateTime = new JobDateTime();
            $this->JobDateTime->deserialize($param["JobDateTime"]);
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
