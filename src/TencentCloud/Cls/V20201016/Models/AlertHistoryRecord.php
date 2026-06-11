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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Alarm record details
 *
 * @method string getRecordId() Obtain Alarm record ID
 * @method void setRecordId(string $RecordId) Set Alarm record ID
 * @method string getAlarmId() Obtain Alarm policy ID
 * @method void setAlarmId(string $AlarmId) Set Alarm policy ID
 * @method string getAlarmName() Obtain Alarm policy name
 * @method void setAlarmName(string $AlarmName) Set Alarm policy name
 * @method string getTopicId() Obtain ID of the monitored object
 * @method void setTopicId(string $TopicId) Set ID of the monitored object
 * @method string getTopicName() Obtain Name of the monitored object
 * @method void setTopicName(string $TopicName) Set Name of the monitored object
 * @method string getRegion() Obtain Region of the monitored object
 * @method void setRegion(string $Region) Set Region of the monitored object
 * @method string getTrigger() Obtain Trigger condition
 * @method void setTrigger(string $Trigger) Set Trigger condition
 * @method integer getTriggerCount() Obtain Number of cycles for which the alarm lasts. An alarm will be triggered only after the trigger condition is met for the number of cycles specified by `TriggerCount`.
 * @method void setTriggerCount(integer $TriggerCount) Set Number of cycles for which the alarm lasts. An alarm will be triggered only after the trigger condition is met for the number of cycles specified by `TriggerCount`.
 * @method integer getAlarmPeriod() Obtain Alert notification sent frequency, in minutes
 * @method void setAlarmPeriod(integer $AlarmPeriod) Set Alert notification sent frequency, in minutes
 * @method array getNotices() Obtain Notification group
 * @method void setNotices(array $Notices) Set Notification group
 * @method integer getDuration() Obtain Duration of the alarm in minutes
 * @method void setDuration(integer $Duration) Set Duration of the alarm in minutes
 * @method integer getStatus() Obtain Alarm status. Valid values: `0` (uncleared), `1` (cleared), `2` (expired)
 * @method void setStatus(integer $Status) Set Alarm status. Valid values: `0` (uncleared), `1` (cleared), `2` (expired)
 * @method integer getCreateTime() Obtain Alarm occurrence time, Unix timestamp in milliseconds (ms)
 * @method void setCreateTime(integer $CreateTime) Set Alarm occurrence time, Unix timestamp in milliseconds (ms)
 * @method array getGroupTriggerCondition() Obtain Corresponding group information when alarm grouping is triggered
 * @method void setGroupTriggerCondition(array $GroupTriggerCondition) Set Corresponding group information when alarm grouping is triggered
 * @method integer getAlarmLevel() Obtain Alarm level. 0: warning (Warn); 1: reminder (Info); 2: urgent (Critical).
 * @method void setAlarmLevel(integer $AlarmLevel) Set Alarm level. 0: warning (Warn); 1: reminder (Info); 2: urgent (Critical).
 * @method integer getMonitorObjectType() Obtain Monitored object type.
`0`: The same object is specified for all statements. `1`: An object is separately specified for each statement.
 * @method void setMonitorObjectType(integer $MonitorObjectType) Set Monitored object type.
`0`: The same object is specified for all statements. `1`: An object is separately specified for each statement.
 * @method integer getSendType() Obtain Notification channel type. 0 represents the internal notification channel of cls. 1 represents the Tencent Cloud observability platform notification channel.
 * @method void setSendType(integer $SendType) Set Notification channel type. 0 represents the internal notification channel of cls. 1 represents the Tencent Cloud observability platform notification channel.
 */
class AlertHistoryRecord extends AbstractModel
{
    /**
     * @var string Alarm record ID
     */
    public $RecordId;

    /**
     * @var string Alarm policy ID
     */
    public $AlarmId;

    /**
     * @var string Alarm policy name
     */
    public $AlarmName;

    /**
     * @var string ID of the monitored object
     */
    public $TopicId;

    /**
     * @var string Name of the monitored object
     */
    public $TopicName;

    /**
     * @var string Region of the monitored object
     */
    public $Region;

    /**
     * @var string Trigger condition
     */
    public $Trigger;

    /**
     * @var integer Number of cycles for which the alarm lasts. An alarm will be triggered only after the trigger condition is met for the number of cycles specified by `TriggerCount`.
     */
    public $TriggerCount;

    /**
     * @var integer Alert notification sent frequency, in minutes
     */
    public $AlarmPeriod;

    /**
     * @var array Notification group
     */
    public $Notices;

    /**
     * @var integer Duration of the alarm in minutes
     */
    public $Duration;

    /**
     * @var integer Alarm status. Valid values: `0` (uncleared), `1` (cleared), `2` (expired)
     */
    public $Status;

    /**
     * @var integer Alarm occurrence time, Unix timestamp in milliseconds (ms)
     */
    public $CreateTime;

    /**
     * @var array Corresponding group information when alarm grouping is triggered
     */
    public $GroupTriggerCondition;

    /**
     * @var integer Alarm level. 0: warning (Warn); 1: reminder (Info); 2: urgent (Critical).
     */
    public $AlarmLevel;

    /**
     * @var integer Monitored object type.
`0`: The same object is specified for all statements. `1`: An object is separately specified for each statement.
     */
    public $MonitorObjectType;

    /**
     * @var integer Notification channel type. 0 represents the internal notification channel of cls. 1 represents the Tencent Cloud observability platform notification channel.
     */
    public $SendType;

    /**
     * @param string $RecordId Alarm record ID
     * @param string $AlarmId Alarm policy ID
     * @param string $AlarmName Alarm policy name
     * @param string $TopicId ID of the monitored object
     * @param string $TopicName Name of the monitored object
     * @param string $Region Region of the monitored object
     * @param string $Trigger Trigger condition
     * @param integer $TriggerCount Number of cycles for which the alarm lasts. An alarm will be triggered only after the trigger condition is met for the number of cycles specified by `TriggerCount`.
     * @param integer $AlarmPeriod Alert notification sent frequency, in minutes
     * @param array $Notices Notification group
     * @param integer $Duration Duration of the alarm in minutes
     * @param integer $Status Alarm status. Valid values: `0` (uncleared), `1` (cleared), `2` (expired)
     * @param integer $CreateTime Alarm occurrence time, Unix timestamp in milliseconds (ms)
     * @param array $GroupTriggerCondition Corresponding group information when alarm grouping is triggered
     * @param integer $AlarmLevel Alarm level. 0: warning (Warn); 1: reminder (Info); 2: urgent (Critical).
     * @param integer $MonitorObjectType Monitored object type.
`0`: The same object is specified for all statements. `1`: An object is separately specified for each statement.
     * @param integer $SendType Notification channel type. 0 represents the internal notification channel of cls. 1 represents the Tencent Cloud observability platform notification channel.
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
        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("AlarmId",$param) and $param["AlarmId"] !== null) {
            $this->AlarmId = $param["AlarmId"];
        }

        if (array_key_exists("AlarmName",$param) and $param["AlarmName"] !== null) {
            $this->AlarmName = $param["AlarmName"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Trigger",$param) and $param["Trigger"] !== null) {
            $this->Trigger = $param["Trigger"];
        }

        if (array_key_exists("TriggerCount",$param) and $param["TriggerCount"] !== null) {
            $this->TriggerCount = $param["TriggerCount"];
        }

        if (array_key_exists("AlarmPeriod",$param) and $param["AlarmPeriod"] !== null) {
            $this->AlarmPeriod = $param["AlarmPeriod"];
        }

        if (array_key_exists("Notices",$param) and $param["Notices"] !== null) {
            $this->Notices = [];
            foreach ($param["Notices"] as $key => $value){
                $obj = new AlertHistoryNotice();
                $obj->deserialize($value);
                array_push($this->Notices, $obj);
            }
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("GroupTriggerCondition",$param) and $param["GroupTriggerCondition"] !== null) {
            $this->GroupTriggerCondition = [];
            foreach ($param["GroupTriggerCondition"] as $key => $value){
                $obj = new GroupTriggerConditionInfo();
                $obj->deserialize($value);
                array_push($this->GroupTriggerCondition, $obj);
            }
        }

        if (array_key_exists("AlarmLevel",$param) and $param["AlarmLevel"] !== null) {
            $this->AlarmLevel = $param["AlarmLevel"];
        }

        if (array_key_exists("MonitorObjectType",$param) and $param["MonitorObjectType"] !== null) {
            $this->MonitorObjectType = $param["MonitorObjectType"];
        }

        if (array_key_exists("SendType",$param) and $param["SendType"] !== null) {
            $this->SendType = $param["SendType"];
        }
    }
}
