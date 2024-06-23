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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Rule Group Execution Result
 *
 * @method integer getRuleGroupExecId() Obtain Rule Group Execution ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRuleGroupExecId(integer $RuleGroupExecId) Set Rule Group Execution ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getRuleGroupId() Obtain Rule Group ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRuleGroupId(integer $RuleGroupId) Set Rule Group ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getTriggerType() Obtain Execution Trigger Type (1: Manual Trigger, 2: In-process Scheduling Trigger, 3: Periodic Scheduling Trigger)
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTriggerType(integer $TriggerType) Set Execution Trigger Type (1: Manual Trigger, 2: In-process Scheduling Trigger, 3: Periodic Scheduling Trigger)
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getExecTime() Obtain Execution time yyyy-MM-dd HH:mm:ss
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setExecTime(string $ExecTime) Set Execution time yyyy-MM-dd HH:mm:ss
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getStatus() Obtain Execution Status (1. Submitted, 2. Under detection, 3. Normal, 4. Abnormal)
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setStatus(integer $Status) Set Execution Status (1. Submitted, 2. Under detection, 3. Normal, 4. Abnormal)
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getAlarmRuleCount() Obtain Number of Exceptional Rules
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setAlarmRuleCount(integer $AlarmRuleCount) Set Number of Exceptional Rules
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getTotalRuleCount() Obtain Total Number of Rules
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTotalRuleCount(integer $TotalRuleCount) Set Total Number of Rules
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTableOwnerName() Obtain Source Table Responsible Person
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTableOwnerName(string $TableOwnerName) Set Source Table Responsible Person
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTableName() Obtain Source Table Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTableName(string $TableName) Set Source Table Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTableId() Obtain Table ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTableId(string $TableId) Set Table ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getDatabaseId() Obtain Database ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDatabaseId(string $DatabaseId) Set Database ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getDatasourceId() Obtain Data Source ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDatasourceId(string $DatasourceId) Set Data Source ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method boolean getPermission() Obtain Permission Availability
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setPermission(boolean $Permission) Set Permission Availability
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getExecDetail() Obtain Execution Details, Scheduling Plan, or Associated Production Task ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setExecDetail(string $ExecDetail) Set Execution Details, Scheduling Plan, or Associated Production Task ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getEngineType() Obtain Actual Execution Engine
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setEngineType(string $EngineType) Set Actual Execution Engine
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getRuleExecResultVOList() Obtain Rule Execution Result
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRuleExecResultVOList(array $RuleExecResultVOList) Set Rule Execution Result
Note: This field may return null, indicating that no valid value can be obtained.
 */
class RuleGroupExecResult extends AbstractModel
{
    /**
     * @var integer Rule Group Execution ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $RuleGroupExecId;

    /**
     * @var integer Rule Group ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $RuleGroupId;

    /**
     * @var integer Execution Trigger Type (1: Manual Trigger, 2: In-process Scheduling Trigger, 3: Periodic Scheduling Trigger)
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TriggerType;

    /**
     * @var string Execution time yyyy-MM-dd HH:mm:ss
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ExecTime;

    /**
     * @var integer Execution Status (1. Submitted, 2. Under detection, 3. Normal, 4. Abnormal)
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Status;

    /**
     * @var integer Number of Exceptional Rules
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $AlarmRuleCount;

    /**
     * @var integer Total Number of Rules
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TotalRuleCount;

    /**
     * @var string Source Table Responsible Person
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TableOwnerName;

    /**
     * @var string Source Table Name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TableName;

    /**
     * @var string Table ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TableId;

    /**
     * @var string Database ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DatabaseId;

    /**
     * @var string Data Source ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DatasourceId;

    /**
     * @var boolean Permission Availability
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Permission;

    /**
     * @var string Execution Details, Scheduling Plan, or Associated Production Task ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ExecDetail;

    /**
     * @var string Actual Execution Engine
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $EngineType;

    /**
     * @var array Rule Execution Result
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $RuleExecResultVOList;

    /**
     * @param integer $RuleGroupExecId Rule Group Execution ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $RuleGroupId Rule Group ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $TriggerType Execution Trigger Type (1: Manual Trigger, 2: In-process Scheduling Trigger, 3: Periodic Scheduling Trigger)
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ExecTime Execution time yyyy-MM-dd HH:mm:ss
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $Status Execution Status (1. Submitted, 2. Under detection, 3. Normal, 4. Abnormal)
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $AlarmRuleCount Number of Exceptional Rules
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $TotalRuleCount Total Number of Rules
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TableOwnerName Source Table Responsible Person
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TableName Source Table Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TableId Table ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $DatabaseId Database ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $DatasourceId Data Source ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param boolean $Permission Permission Availability
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ExecDetail Execution Details, Scheduling Plan, or Associated Production Task ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $EngineType Actual Execution Engine
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $RuleExecResultVOList Rule Execution Result
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("RuleGroupExecId",$param) and $param["RuleGroupExecId"] !== null) {
            $this->RuleGroupExecId = $param["RuleGroupExecId"];
        }

        if (array_key_exists("RuleGroupId",$param) and $param["RuleGroupId"] !== null) {
            $this->RuleGroupId = $param["RuleGroupId"];
        }

        if (array_key_exists("TriggerType",$param) and $param["TriggerType"] !== null) {
            $this->TriggerType = $param["TriggerType"];
        }

        if (array_key_exists("ExecTime",$param) and $param["ExecTime"] !== null) {
            $this->ExecTime = $param["ExecTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AlarmRuleCount",$param) and $param["AlarmRuleCount"] !== null) {
            $this->AlarmRuleCount = $param["AlarmRuleCount"];
        }

        if (array_key_exists("TotalRuleCount",$param) and $param["TotalRuleCount"] !== null) {
            $this->TotalRuleCount = $param["TotalRuleCount"];
        }

        if (array_key_exists("TableOwnerName",$param) and $param["TableOwnerName"] !== null) {
            $this->TableOwnerName = $param["TableOwnerName"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("TableId",$param) and $param["TableId"] !== null) {
            $this->TableId = $param["TableId"];
        }

        if (array_key_exists("DatabaseId",$param) and $param["DatabaseId"] !== null) {
            $this->DatabaseId = $param["DatabaseId"];
        }

        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }

        if (array_key_exists("Permission",$param) and $param["Permission"] !== null) {
            $this->Permission = $param["Permission"];
        }

        if (array_key_exists("ExecDetail",$param) and $param["ExecDetail"] !== null) {
            $this->ExecDetail = $param["ExecDetail"];
        }

        if (array_key_exists("EngineType",$param) and $param["EngineType"] !== null) {
            $this->EngineType = $param["EngineType"];
        }

        if (array_key_exists("RuleExecResultVOList",$param) and $param["RuleExecResultVOList"] !== null) {
            $this->RuleExecResultVOList = [];
            foreach ($param["RuleExecResultVOList"] as $key => $value){
                $obj = new RuleExecResult();
                $obj->deserialize($value);
                array_push($this->RuleExecResultVOList, $obj);
            }
        }
    }
}
