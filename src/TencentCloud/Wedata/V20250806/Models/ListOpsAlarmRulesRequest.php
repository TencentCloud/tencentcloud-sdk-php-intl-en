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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListOpsAlarmRules request structure.
 *
 * @method string getProjectId() Obtain Project ID.
 * @method void setProjectId(string $ProjectId) Set Project ID.
 * @method integer getPageNumber() Obtain Page number for pagination. defaults to 1.
 * @method void setPageNumber(integer $PageNumber) Set Page number for pagination. defaults to 1.
 * @method integer getPageSize() Obtain Number of items to display per page, defaults to 20, minimum value 1, maximum value 200.
 * @method void setPageSize(integer $PageSize) Set Number of items to display per page, defaults to 20, minimum value 1, maximum value 200.
 * @method integer getMonitorObjectType() Obtain Monitoring Object Type

Task-level Monitoring - Can be configured by Task / Workflow / Project:
1 = Task (default)
2 = Workflow
3 = Project

Project-level Monitoring - Monitors overall task fluctuations within a project:
7 = Project fluctuation monitoring alarm
 * @method void setMonitorObjectType(integer $MonitorObjectType) Set Monitoring Object Type

Task-level Monitoring - Can be configured by Task / Workflow / Project:
1 = Task (default)
2 = Workflow
3 = Project

Project-level Monitoring - Monitors overall task fluctuations within a project:
7 = Project fluctuation monitoring alarm
 * @method string getTaskId() Obtain Based on task id, queries Alarm rules.
 * @method void setTaskId(string $TaskId) Set Based on task id, queries Alarm rules.
 * @method string getAlarmType() Obtain Alarm Rule Monitoring Types:

failure: Failure alarm

overtime: Timeout alarm

success: Success alarm

backTrackingOrRerunSuccess: Alarm when backfill/rerun succeeds

backTrackingOrRerunFailure: Alarm when backfill/rerun fails

projectFailureInstanceUpwardFluctuationAlarm: Alarm when the upward fluctuation rate of failed instances for the day exceeds the threshold

projectSuccessInstanceDownwardFluctuationAlarm: Alarm when the downward fluctuation rate of successful instances for the day exceeds the threshold

reconciliationFailure: Alarm when an offline reconciliation task fails

reconciliationOvertime: Alarm when an offline reconciliation task runs overtime

reconciliationMismatch: Alarm when the number of mismatched records in reconciliation exceeds the threshold
 * @method void setAlarmType(string $AlarmType) Set Alarm Rule Monitoring Types:

failure: Failure alarm

overtime: Timeout alarm

success: Success alarm

backTrackingOrRerunSuccess: Alarm when backfill/rerun succeeds

backTrackingOrRerunFailure: Alarm when backfill/rerun fails

projectFailureInstanceUpwardFluctuationAlarm: Alarm when the upward fluctuation rate of failed instances for the day exceeds the threshold

projectSuccessInstanceDownwardFluctuationAlarm: Alarm when the downward fluctuation rate of successful instances for the day exceeds the threshold

reconciliationFailure: Alarm when an offline reconciliation task fails

reconciliationOvertime: Alarm when an offline reconciliation task runs overtime

reconciliationMismatch: Alarm when the number of mismatched records in reconciliation exceeds the threshold
 * @method integer getAlarmLevel() Obtain Queries Alarm rules configured with corresponding Alarm levels.
Valid values: 1. ordinary, 2. important, 3. critical.
 * @method void setAlarmLevel(integer $AlarmLevel) Set Queries Alarm rules configured with corresponding Alarm levels.
Valid values: 1. ordinary, 2. important, 3. critical.
 * @method string getAlarmRecipientId() Obtain Query the alarm rules associated with the configured alarm recipients.
 * @method void setAlarmRecipientId(string $AlarmRecipientId) Set Query the alarm rules associated with the configured alarm recipients.
 * @method string getKeyword() Obtain Queries the corresponding Alarm rule based on Alarm rule id or rule name.
 * @method void setKeyword(string $Keyword) Set Queries the corresponding Alarm rule based on Alarm rule id or rule name.
 * @method string getCreateUserUin() Obtain Specifies the creator filter for Alarm rule creation.
 * @method void setCreateUserUin(string $CreateUserUin) Set Specifies the creator filter for Alarm rule creation.
 * @method string getCreateTimeFrom() Obtain Start time of the Alarm rule create time range, in the format of 2025-08-17 00:00:00.
 * @method void setCreateTimeFrom(string $CreateTimeFrom) Set Start time of the Alarm rule create time range, in the format of 2025-08-17 00:00:00.
 * @method string getCreateTimeTo() Obtain End time of the Alarm rule creation time range, in the format of "2025-08-26 23:59:59".

 * @method void setCreateTimeTo(string $CreateTimeTo) Set End time of the Alarm rule creation time range, in the format of "2025-08-26 23:59:59".

 * @method string getUpdateTimeFrom() Obtain Filters Alarm rules by last update time, in the format of "2025-08-26 00:00:00".

 * @method void setUpdateTimeFrom(string $UpdateTimeFrom) Set Filters Alarm rules by last update time, in the format of "2025-08-26 00:00:00".

 * @method string getUpdateTimeTo() Obtain Filters Alarm rules by last update time in the format of "2025-08-26 23:59:59".

 * @method void setUpdateTimeTo(string $UpdateTimeTo) Set Filters Alarm rules by last update time in the format of "2025-08-26 23:59:59".
 */
class ListOpsAlarmRulesRequest extends AbstractModel
{
    /**
     * @var string Project ID.
     */
    public $ProjectId;

    /**
     * @var integer Page number for pagination. defaults to 1.
     */
    public $PageNumber;

    /**
     * @var integer Number of items to display per page, defaults to 20, minimum value 1, maximum value 200.
     */
    public $PageSize;

    /**
     * @var integer Monitoring Object Type

Task-level Monitoring - Can be configured by Task / Workflow / Project:
1 = Task (default)
2 = Workflow
3 = Project

Project-level Monitoring - Monitors overall task fluctuations within a project:
7 = Project fluctuation monitoring alarm
     */
    public $MonitorObjectType;

    /**
     * @var string Based on task id, queries Alarm rules.
     */
    public $TaskId;

    /**
     * @var string Alarm Rule Monitoring Types:

failure: Failure alarm

overtime: Timeout alarm

success: Success alarm

backTrackingOrRerunSuccess: Alarm when backfill/rerun succeeds

backTrackingOrRerunFailure: Alarm when backfill/rerun fails

projectFailureInstanceUpwardFluctuationAlarm: Alarm when the upward fluctuation rate of failed instances for the day exceeds the threshold

projectSuccessInstanceDownwardFluctuationAlarm: Alarm when the downward fluctuation rate of successful instances for the day exceeds the threshold

reconciliationFailure: Alarm when an offline reconciliation task fails

reconciliationOvertime: Alarm when an offline reconciliation task runs overtime

reconciliationMismatch: Alarm when the number of mismatched records in reconciliation exceeds the threshold
     */
    public $AlarmType;

    /**
     * @var integer Queries Alarm rules configured with corresponding Alarm levels.
Valid values: 1. ordinary, 2. important, 3. critical.
     */
    public $AlarmLevel;

    /**
     * @var string Query the alarm rules associated with the configured alarm recipients.
     */
    public $AlarmRecipientId;

    /**
     * @var string Queries the corresponding Alarm rule based on Alarm rule id or rule name.
     */
    public $Keyword;

    /**
     * @var string Specifies the creator filter for Alarm rule creation.
     */
    public $CreateUserUin;

    /**
     * @var string Start time of the Alarm rule create time range, in the format of 2025-08-17 00:00:00.
     */
    public $CreateTimeFrom;

    /**
     * @var string End time of the Alarm rule creation time range, in the format of "2025-08-26 23:59:59".

     */
    public $CreateTimeTo;

    /**
     * @var string Filters Alarm rules by last update time, in the format of "2025-08-26 00:00:00".

     */
    public $UpdateTimeFrom;

    /**
     * @var string Filters Alarm rules by last update time in the format of "2025-08-26 23:59:59".

     */
    public $UpdateTimeTo;

    /**
     * @param string $ProjectId Project ID.
     * @param integer $PageNumber Page number for pagination. defaults to 1.
     * @param integer $PageSize Number of items to display per page, defaults to 20, minimum value 1, maximum value 200.
     * @param integer $MonitorObjectType Monitoring Object Type

Task-level Monitoring - Can be configured by Task / Workflow / Project:
1 = Task (default)
2 = Workflow
3 = Project

Project-level Monitoring - Monitors overall task fluctuations within a project:
7 = Project fluctuation monitoring alarm
     * @param string $TaskId Based on task id, queries Alarm rules.
     * @param string $AlarmType Alarm Rule Monitoring Types:

failure: Failure alarm

overtime: Timeout alarm

success: Success alarm

backTrackingOrRerunSuccess: Alarm when backfill/rerun succeeds

backTrackingOrRerunFailure: Alarm when backfill/rerun fails

projectFailureInstanceUpwardFluctuationAlarm: Alarm when the upward fluctuation rate of failed instances for the day exceeds the threshold

projectSuccessInstanceDownwardFluctuationAlarm: Alarm when the downward fluctuation rate of successful instances for the day exceeds the threshold

reconciliationFailure: Alarm when an offline reconciliation task fails

reconciliationOvertime: Alarm when an offline reconciliation task runs overtime

reconciliationMismatch: Alarm when the number of mismatched records in reconciliation exceeds the threshold
     * @param integer $AlarmLevel Queries Alarm rules configured with corresponding Alarm levels.
Valid values: 1. ordinary, 2. important, 3. critical.
     * @param string $AlarmRecipientId Query the alarm rules associated with the configured alarm recipients.
     * @param string $Keyword Queries the corresponding Alarm rule based on Alarm rule id or rule name.
     * @param string $CreateUserUin Specifies the creator filter for Alarm rule creation.
     * @param string $CreateTimeFrom Start time of the Alarm rule create time range, in the format of 2025-08-17 00:00:00.
     * @param string $CreateTimeTo End time of the Alarm rule creation time range, in the format of "2025-08-26 23:59:59".

     * @param string $UpdateTimeFrom Filters Alarm rules by last update time, in the format of "2025-08-26 00:00:00".

     * @param string $UpdateTimeTo Filters Alarm rules by last update time in the format of "2025-08-26 23:59:59".
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("MonitorObjectType",$param) and $param["MonitorObjectType"] !== null) {
            $this->MonitorObjectType = $param["MonitorObjectType"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("AlarmType",$param) and $param["AlarmType"] !== null) {
            $this->AlarmType = $param["AlarmType"];
        }

        if (array_key_exists("AlarmLevel",$param) and $param["AlarmLevel"] !== null) {
            $this->AlarmLevel = $param["AlarmLevel"];
        }

        if (array_key_exists("AlarmRecipientId",$param) and $param["AlarmRecipientId"] !== null) {
            $this->AlarmRecipientId = $param["AlarmRecipientId"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("CreateUserUin",$param) and $param["CreateUserUin"] !== null) {
            $this->CreateUserUin = $param["CreateUserUin"];
        }

        if (array_key_exists("CreateTimeFrom",$param) and $param["CreateTimeFrom"] !== null) {
            $this->CreateTimeFrom = $param["CreateTimeFrom"];
        }

        if (array_key_exists("CreateTimeTo",$param) and $param["CreateTimeTo"] !== null) {
            $this->CreateTimeTo = $param["CreateTimeTo"];
        }

        if (array_key_exists("UpdateTimeFrom",$param) and $param["UpdateTimeFrom"] !== null) {
            $this->UpdateTimeFrom = $param["UpdateTimeFrom"];
        }

        if (array_key_exists("UpdateTimeTo",$param) and $param["UpdateTimeTo"] !== null) {
            $this->UpdateTimeTo = $param["UpdateTimeTo"];
        }
    }
}
