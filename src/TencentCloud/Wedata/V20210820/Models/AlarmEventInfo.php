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
 * Alarm Event Details
 *
 * @method string getAlarmId() Obtain Alert ID
 * @method void setAlarmId(string $AlarmId) Set Alert ID
 * @method string getAlarmTime() Obtain Alarm Time
 * @method void setAlarmTime(string $AlarmTime) Set Alarm Time
 * @method string getTaskId() Obtain Task ID
 * @method void setTaskId(string $TaskId) Set Task ID
 * @method string getRegularName() Obtain Rule name
 * @method void setRegularName(string $RegularName) Set Rule name
 * @method integer getAlarmLevel() Obtain Alert level, 0 for normal, 1 for important, 2 for urgent
 * @method void setAlarmLevel(integer $AlarmLevel) Set Alert level, 0 for normal, 1 for important, 2 for urgent
 * @method integer getAlarmWay() Obtain Alert Method, separated by commas (1: email, 2: SMS, 3: WeChat, 4: voice call, 5: represents WeCom, 6: http)
 * @method void setAlarmWay(integer $AlarmWay) Set Alert Method, separated by commas (1: email, 2: SMS, 3: WeChat, 4: voice call, 5: represents WeCom, 6: http)
 * @method string getAlarmRecipientId() Obtain Alert Recipient ID, separated by commas
 * @method void setAlarmRecipientId(string $AlarmRecipientId) Set Alert Recipient ID, separated by commas
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method integer getAlarmIndicator() Obtain Alert Metrics, 0 for task failure, 1 for task run timeout, 2 for task stop, 3 for task pause
 * @method void setAlarmIndicator(integer $AlarmIndicator) Set Alert Metrics, 0 for task failure, 1 for task run timeout, 2 for task stop, 3 for task pause
 * @method string getAlarmIndicatorDesc() Obtain Alert Metric Description
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setAlarmIndicatorDesc(string $AlarmIndicatorDesc) Set Alert Metric Description
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getTriggerType() Obtain Metric threshold, 1 indicates the first run failure of the offline task, 2 indicates failure after all retries of the offline task
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTriggerType(integer $TriggerType) Set Metric threshold, 1 indicates the first run failure of the offline task, 2 indicates failure after all retries of the offline task
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getEstimatedTime() Obtain Estimated timeout, minute level
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setEstimatedTime(integer $EstimatedTime) Set Estimated timeout, minute level
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getInstanceId() Obtain Instance IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setInstanceId(string $InstanceId) Set Instance IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getTaskName() Obtain Task NameNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setTaskName(string $TaskName) Set Task NameNote: This field may return null, indicating that no valid value can be obtained.
 * @method integer getIsSendSuccess() Obtain 0: Partial Success, 1: Complete Success, 2: Complete Failure
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setIsSendSuccess(integer $IsSendSuccess) Set 0: Partial Success, 1: Complete Success, 2: Complete Failure
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getInQuitePeriods() Obtain During Do Not Disturb time, 0: No, 1: Yes
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setInQuitePeriods(integer $InQuitePeriods) Set During Do Not Disturb time, 0: No, 1: Yes
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getRecordId() Obtain Alert Record ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRecordId(integer $RecordId) Set Alert Record ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getMessageId() Obtain Message ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setMessageId(string $MessageId) Set Message ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getOperator() Obtain Threshold Calculation Operator, 1: Greater than, 2: Less than
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setOperator(integer $Operator) Set Threshold Calculation Operator, 1: Greater than, 2: Less than
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getRegularId() Obtain Alert Rule ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRegularId(string $RegularId) Set Alert Rule ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getAlarmRecipientName() Obtain Alert Recipient Nickname
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setAlarmRecipientName(string $AlarmRecipientName) Set Alert Recipient Nickname
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getTaskType() Obtain Alert Task Type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTaskType(integer $TaskType) Set Alert Task Type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getSendResult() Obtain Send Result
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSendResult(string $SendResult) Set Send Result
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getMonitorObjectId() Obtain Monitoring Object ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setMonitorObjectId(string $MonitorObjectId) Set Monitoring Object ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getMonitorObjectName() Obtain Monitoring Object Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setMonitorObjectName(string $MonitorObjectName) Set Monitoring Object Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method float getThreshold() Obtain Metric Threshold
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setThreshold(float $Threshold) Set Metric Threshold
Note: This field may return null, indicating that no valid value can be obtained.
 */
class AlarmEventInfo extends AbstractModel
{
    /**
     * @var string Alert ID
     */
    public $AlarmId;

    /**
     * @var string Alarm Time
     */
    public $AlarmTime;

    /**
     * @var string Task ID
     */
    public $TaskId;

    /**
     * @var string Rule name
     */
    public $RegularName;

    /**
     * @var integer Alert level, 0 for normal, 1 for important, 2 for urgent
     */
    public $AlarmLevel;

    /**
     * @var integer Alert Method, separated by commas (1: email, 2: SMS, 3: WeChat, 4: voice call, 5: represents WeCom, 6: http)
     */
    public $AlarmWay;

    /**
     * @var string Alert Recipient ID, separated by commas
     */
    public $AlarmRecipientId;

    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var integer Alert Metrics, 0 for task failure, 1 for task run timeout, 2 for task stop, 3 for task pause
     */
    public $AlarmIndicator;

    /**
     * @var string Alert Metric Description
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $AlarmIndicatorDesc;

    /**
     * @var integer Metric threshold, 1 indicates the first run failure of the offline task, 2 indicates failure after all retries of the offline task
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TriggerType;

    /**
     * @var integer Estimated timeout, minute level
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $EstimatedTime;

    /**
     * @var string Instance IDNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $InstanceId;

    /**
     * @var string Task NameNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $TaskName;

    /**
     * @var integer 0: Partial Success, 1: Complete Success, 2: Complete Failure
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $IsSendSuccess;

    /**
     * @var integer During Do Not Disturb time, 0: No, 1: Yes
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $InQuitePeriods;

    /**
     * @var integer Alert Record ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $RecordId;

    /**
     * @var string Message ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $MessageId;

    /**
     * @var integer Threshold Calculation Operator, 1: Greater than, 2: Less than
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Operator;

    /**
     * @var string Alert Rule ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $RegularId;

    /**
     * @var string Alert Recipient Nickname
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $AlarmRecipientName;

    /**
     * @var integer Alert Task Type
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TaskType;

    /**
     * @var string Send Result
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $SendResult;

    /**
     * @var string Monitoring Object ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $MonitorObjectId;

    /**
     * @var string Monitoring Object Name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $MonitorObjectName;

    /**
     * @var float Metric Threshold
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Threshold;

    /**
     * @param string $AlarmId Alert ID
     * @param string $AlarmTime Alarm Time
     * @param string $TaskId Task ID
     * @param string $RegularName Rule name
     * @param integer $AlarmLevel Alert level, 0 for normal, 1 for important, 2 for urgent
     * @param integer $AlarmWay Alert Method, separated by commas (1: email, 2: SMS, 3: WeChat, 4: voice call, 5: represents WeCom, 6: http)
     * @param string $AlarmRecipientId Alert Recipient ID, separated by commas
     * @param string $ProjectId Project ID
     * @param integer $AlarmIndicator Alert Metrics, 0 for task failure, 1 for task run timeout, 2 for task stop, 3 for task pause
     * @param string $AlarmIndicatorDesc Alert Metric Description
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $TriggerType Metric threshold, 1 indicates the first run failure of the offline task, 2 indicates failure after all retries of the offline task
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $EstimatedTime Estimated timeout, minute level
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $InstanceId Instance IDNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $TaskName Task NameNote: This field may return null, indicating that no valid value can be obtained.
     * @param integer $IsSendSuccess 0: Partial Success, 1: Complete Success, 2: Complete Failure
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $InQuitePeriods During Do Not Disturb time, 0: No, 1: Yes
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $RecordId Alert Record ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $MessageId Message ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $Operator Threshold Calculation Operator, 1: Greater than, 2: Less than
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $RegularId Alert Rule ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $AlarmRecipientName Alert Recipient Nickname
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $TaskType Alert Task Type
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $SendResult Send Result
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $MonitorObjectId Monitoring Object ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $MonitorObjectName Monitoring Object Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param float $Threshold Metric Threshold
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
        if (array_key_exists("AlarmId",$param) and $param["AlarmId"] !== null) {
            $this->AlarmId = $param["AlarmId"];
        }

        if (array_key_exists("AlarmTime",$param) and $param["AlarmTime"] !== null) {
            $this->AlarmTime = $param["AlarmTime"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("RegularName",$param) and $param["RegularName"] !== null) {
            $this->RegularName = $param["RegularName"];
        }

        if (array_key_exists("AlarmLevel",$param) and $param["AlarmLevel"] !== null) {
            $this->AlarmLevel = $param["AlarmLevel"];
        }

        if (array_key_exists("AlarmWay",$param) and $param["AlarmWay"] !== null) {
            $this->AlarmWay = $param["AlarmWay"];
        }

        if (array_key_exists("AlarmRecipientId",$param) and $param["AlarmRecipientId"] !== null) {
            $this->AlarmRecipientId = $param["AlarmRecipientId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("AlarmIndicator",$param) and $param["AlarmIndicator"] !== null) {
            $this->AlarmIndicator = $param["AlarmIndicator"];
        }

        if (array_key_exists("AlarmIndicatorDesc",$param) and $param["AlarmIndicatorDesc"] !== null) {
            $this->AlarmIndicatorDesc = $param["AlarmIndicatorDesc"];
        }

        if (array_key_exists("TriggerType",$param) and $param["TriggerType"] !== null) {
            $this->TriggerType = $param["TriggerType"];
        }

        if (array_key_exists("EstimatedTime",$param) and $param["EstimatedTime"] !== null) {
            $this->EstimatedTime = $param["EstimatedTime"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("IsSendSuccess",$param) and $param["IsSendSuccess"] !== null) {
            $this->IsSendSuccess = $param["IsSendSuccess"];
        }

        if (array_key_exists("InQuitePeriods",$param) and $param["InQuitePeriods"] !== null) {
            $this->InQuitePeriods = $param["InQuitePeriods"];
        }

        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("MessageId",$param) and $param["MessageId"] !== null) {
            $this->MessageId = $param["MessageId"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("RegularId",$param) and $param["RegularId"] !== null) {
            $this->RegularId = $param["RegularId"];
        }

        if (array_key_exists("AlarmRecipientName",$param) and $param["AlarmRecipientName"] !== null) {
            $this->AlarmRecipientName = $param["AlarmRecipientName"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("SendResult",$param) and $param["SendResult"] !== null) {
            $this->SendResult = $param["SendResult"];
        }

        if (array_key_exists("MonitorObjectId",$param) and $param["MonitorObjectId"] !== null) {
            $this->MonitorObjectId = $param["MonitorObjectId"];
        }

        if (array_key_exists("MonitorObjectName",$param) and $param["MonitorObjectName"] !== null) {
            $this->MonitorObjectName = $param["MonitorObjectName"];
        }

        if (array_key_exists("Threshold",$param) and $param["Threshold"] !== null) {
            $this->Threshold = $param["Threshold"];
        }
    }
}
