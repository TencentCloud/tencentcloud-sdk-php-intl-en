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
 * @method integer getAlarmPeriod() Obtain Alarm notification frequency (minutes)
 * @method void setAlarmPeriod(integer $AlarmPeriod) Set Alarm notification frequency (minutes)
 * @method array getNotices() Obtain Notification group
 * @method void setNotices(array $Notices) Set Notification group
 * @method integer getDuration() Obtain Alarm duration (minutes)
 * @method void setDuration(integer $Duration) Set Alarm duration (minutes)
 * @method integer getStatus() Obtain Alarm status. Valid values: `0` (uncleared), `1` (cleared), `2` (expired)
 * @method void setStatus(integer $Status) Set Alarm status. Valid values: `0` (uncleared), `1` (cleared), `2` (expired)
 * @method integer getCreateTime() Obtain Alarm generation time, which is a Unix timestamp in ms
 * @method void setCreateTime(integer $CreateTime) Set Alarm generation time, which is a Unix timestamp in ms
 * @method array getGroupTriggerCondition() Obtain Group information corresponding to triggering by group
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGroupTriggerCondition(array $GroupTriggerCondition) Set Group information corresponding to triggering by group
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getAlarmLevel() Obtain Alarm severity. Valid values: `0` (Warn), `1` (Info), `2` (Critical)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAlarmLevel(integer $AlarmLevel) Set Alarm severity. Valid values: `0` (Warn), `1` (Info), `2` (Critical)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMonitorObjectType() Obtain Type of the monitored object
`0`: The same object is specified for all statements. `1`: An object is separately specified for each statement. 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMonitorObjectType(integer $MonitorObjectType) Set Type of the monitored object
`0`: The same object is specified for all statements. `1`: An object is separately specified for each statement. 
Note: This field may return null, indicating that no valid values can be obtained.
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
     * @var integer Alarm notification frequency (minutes)
     */
    public $AlarmPeriod;

    /**
     * @var array Notification group
     */
    public $Notices;

    /**
     * @var integer Alarm duration (minutes)
     */
    public $Duration;

    /**
     * @var integer Alarm status. Valid values: `0` (uncleared), `1` (cleared), `2` (expired)
     */
    public $Status;

    /**
     * @var integer Alarm generation time, which is a Unix timestamp in ms
     */
    public $CreateTime;

    /**
     * @var array Group information corresponding to triggering by group
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $GroupTriggerCondition;

    /**
     * @var integer Alarm severity. Valid values: `0` (Warn), `1` (Info), `2` (Critical)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AlarmLevel;

    /**
     * @var integer Type of the monitored object
`0`: The same object is specified for all statements. `1`: An object is separately specified for each statement. 
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MonitorObjectType;

    /**
     * @param string $RecordId Alarm record ID
     * @param string $AlarmId Alarm policy ID
     * @param string $AlarmName Alarm policy name
     * @param string $TopicId ID of the monitored object
     * @param string $TopicName Name of the monitored object
     * @param string $Region Region of the monitored object
     * @param string $Trigger Trigger condition
     * @param integer $TriggerCount Number of cycles for which the alarm lasts. An alarm will be triggered only after the trigger condition is met for the number of cycles specified by `TriggerCount`.
     * @param integer $AlarmPeriod Alarm notification frequency (minutes)
     * @param array $Notices Notification group
     * @param integer $Duration Alarm duration (minutes)
     * @param integer $Status Alarm status. Valid values: `0` (uncleared), `1` (cleared), `2` (expired)
     * @param integer $CreateTime Alarm generation time, which is a Unix timestamp in ms
     * @param array $GroupTriggerCondition Group information corresponding to triggering by group
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $AlarmLevel Alarm severity. Valid values: `0` (Warn), `1` (Info), `2` (Critical)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MonitorObjectType Type of the monitored object
`0`: The same object is specified for all statements. `1`: An object is separately specified for each statement. 
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
    }
}
