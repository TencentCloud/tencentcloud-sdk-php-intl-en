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
 * ModifyAlarm request structure.
 *
 * @method string getAlarmId() Obtain Alarm policy ID
 * @method void setAlarmId(string $AlarmId) Set Alarm policy ID
 * @method string getName() Obtain Alarm policy name
 * @method void setName(string $Name) Set Alarm policy name
 * @method MonitorTime getMonitorTime() Obtain Monitoring task running time point
 * @method void setMonitorTime(MonitorTime $MonitorTime) Set Monitoring task running time point
 * @method string getCondition() Obtain Trigger condition. Note: - Condition and AlarmLevel are one set of configurations, MultiConditions is another set of configurations. The two sets of configurations are mutually exclusive.
 * @method void setCondition(string $Condition) Set Trigger condition. Note: - Condition and AlarmLevel are one set of configurations, MultiConditions is another set of configurations. The two sets of configurations are mutually exclusive.
 * @method integer getAlarmLevel() Obtain Alarm level.0: Warning (Warn); 1: Reminder (Info); 2: Urgent (Critical)

Note: - Condition and AlarmLevel are one set of configurations, MultiConditions is another set of configurations. The two sets of configurations are mutually exclusive.
 * @method void setAlarmLevel(integer $AlarmLevel) Set Alarm level.0: Warning (Warn); 1: Reminder (Info); 2: Urgent (Critical)

Note: - Condition and AlarmLevel are one set of configurations, MultiConditions is another set of configurations. The two sets of configurations are mutually exclusive.
 * @method array getMultiConditions() Obtain Multiple trigger conditions. Note: - Condition and AlarmLevel are one set of configurations, MultiConditions is another set of configurations. The two sets of configurations are mutually exclusive.
 * @method void setMultiConditions(array $MultiConditions) Set Multiple trigger conditions. Note: - Condition and AlarmLevel are one set of configurations, MultiConditions is another set of configurations. The two sets of configurations are mutually exclusive.
 * @method integer getTriggerCount() Obtain Alarm persistence cycle. An alarm will be triggered only after the corresponding trigger condition is met for the number of times specified by `TriggerCount`. Value range: 1 to 10
 * @method void setTriggerCount(integer $TriggerCount) Set Alarm persistence cycle. An alarm will be triggered only after the corresponding trigger condition is met for the number of times specified by `TriggerCount`. Value range: 1 to 10
 * @method integer getAlarmPeriod() Obtain Repeated alarm interval in minutes. Value range: 0 to 1440
 * @method void setAlarmPeriod(integer $AlarmPeriod) Set Repeated alarm interval in minutes. Value range: 0 to 1440
 * @method array getAlarmNoticeIds() Obtain List of associated alarm notification templates
 * @method void setAlarmNoticeIds(array $AlarmNoticeIds) Set List of associated alarm notification templates
 * @method array getAlarmTargets() Obtain Monitoring object list
 * @method void setAlarmTargets(array $AlarmTargets) Set Monitoring object list
 * @method boolean getStatus() Obtain Whether to enable the alarm policy
 * @method void setStatus(boolean $Status) Set Whether to enable the alarm policy
 * @method boolean getEnable() Obtain This parameter has been deprecated. Use the Status parameter to control whether to enable the alarm policy.
 * @method void setEnable(boolean $Enable) Set This parameter has been deprecated. Use the Status parameter to control whether to enable the alarm policy.
 * @method string getMessageTemplate() Obtain Custom alarm content
 * @method void setMessageTemplate(string $MessageTemplate) Set Custom alarm content
 * @method CallBackInfo getCallBack() Obtain Custom callback
 * @method void setCallBack(CallBackInfo $CallBack) Set Custom callback
 * @method array getAnalysis() Obtain Multi-Dimensional analysis
 * @method void setAnalysis(array $Analysis) Set Multi-Dimensional analysis
 * @method boolean getGroupTriggerStatus() Obtain Group trigger status. true: enabled; false: disabled (default)
 * @method void setGroupTriggerStatus(boolean $GroupTriggerStatus) Set Group trigger status. true: enabled; false: disabled (default)
 * @method array getGroupTriggerCondition() Obtain Grouping trigger conditions.
 * @method void setGroupTriggerCondition(array $GroupTriggerCondition) Set Grouping trigger conditions.
 * @method array getTags() Obtain Tag description list, by specifying this parameter, you can simultaneously bind a Tag to the corresponding alarm policy. Up to 10 Tag key-value pairs are supported, and they must be unique.
 * @method void setTags(array $Tags) Set Tag description list, by specifying this parameter, you can simultaneously bind a Tag to the corresponding alarm policy. Up to 10 Tag key-value pairs are supported, and they must be unique.
 * @method integer getMonitorObjectType() Obtain Monitored Object Type. 0: common monitoring objects for execution statements; 1: separately selected monitoring objects for each execution statement.When the value is 1, the number of AlarmTargets Elements (XML) cannot exceed 10, and the Numbers in AlarmTargets must be continuous positive integers starting from 1, without duplication.

 * @method void setMonitorObjectType(integer $MonitorObjectType) Set Monitored Object Type. 0: common monitoring objects for execution statements; 1: separately selected monitoring objects for each execution statement.When the value is 1, the number of AlarmTargets Elements (XML) cannot exceed 10, and the Numbers in AlarmTargets must be continuous positive integers starting from 1, without duplication.

 * @method array getClassifications() Obtain Alarm additional classification information list.
The number of Classifications elements cannot exceed 20.The Key of Classifications element must not be empty and duplicated, and its length cannot exceed 50 characters, complying with the regular expression ^[a-z]([a-z0-9_]{0,49})$.The Value length of Classifications element cannot exceed 200 characters.
 * @method void setClassifications(array $Classifications) Set Alarm additional classification information list.
The number of Classifications elements cannot exceed 20.The Key of Classifications element must not be empty and duplicated, and its length cannot exceed 50 characters, complying with the regular expression ^[a-z]([a-z0-9_]{0,49})$.The Value length of Classifications element cannot exceed 200 characters.
 */
class ModifyAlarmRequest extends AbstractModel
{
    /**
     * @var string Alarm policy ID
     */
    public $AlarmId;

    /**
     * @var string Alarm policy name
     */
    public $Name;

    /**
     * @var MonitorTime Monitoring task running time point
     */
    public $MonitorTime;

    /**
     * @var string Trigger condition. Note: - Condition and AlarmLevel are one set of configurations, MultiConditions is another set of configurations. The two sets of configurations are mutually exclusive.
     */
    public $Condition;

    /**
     * @var integer Alarm level.0: Warning (Warn); 1: Reminder (Info); 2: Urgent (Critical)

Note: - Condition and AlarmLevel are one set of configurations, MultiConditions is another set of configurations. The two sets of configurations are mutually exclusive.
     */
    public $AlarmLevel;

    /**
     * @var array Multiple trigger conditions. Note: - Condition and AlarmLevel are one set of configurations, MultiConditions is another set of configurations. The two sets of configurations are mutually exclusive.
     */
    public $MultiConditions;

    /**
     * @var integer Alarm persistence cycle. An alarm will be triggered only after the corresponding trigger condition is met for the number of times specified by `TriggerCount`. Value range: 1 to 10
     */
    public $TriggerCount;

    /**
     * @var integer Repeated alarm interval in minutes. Value range: 0 to 1440
     */
    public $AlarmPeriod;

    /**
     * @var array List of associated alarm notification templates
     */
    public $AlarmNoticeIds;

    /**
     * @var array Monitoring object list
     */
    public $AlarmTargets;

    /**
     * @var boolean Whether to enable the alarm policy
     */
    public $Status;

    /**
     * @var boolean This parameter has been deprecated. Use the Status parameter to control whether to enable the alarm policy.
     */
    public $Enable;

    /**
     * @var string Custom alarm content
     */
    public $MessageTemplate;

    /**
     * @var CallBackInfo Custom callback
     */
    public $CallBack;

    /**
     * @var array Multi-Dimensional analysis
     */
    public $Analysis;

    /**
     * @var boolean Group trigger status. true: enabled; false: disabled (default)
     */
    public $GroupTriggerStatus;

    /**
     * @var array Grouping trigger conditions.
     */
    public $GroupTriggerCondition;

    /**
     * @var array Tag description list, by specifying this parameter, you can simultaneously bind a Tag to the corresponding alarm policy. Up to 10 Tag key-value pairs are supported, and they must be unique.
     */
    public $Tags;

    /**
     * @var integer Monitored Object Type. 0: common monitoring objects for execution statements; 1: separately selected monitoring objects for each execution statement.When the value is 1, the number of AlarmTargets Elements (XML) cannot exceed 10, and the Numbers in AlarmTargets must be continuous positive integers starting from 1, without duplication.

     */
    public $MonitorObjectType;

    /**
     * @var array Alarm additional classification information list.
The number of Classifications elements cannot exceed 20.The Key of Classifications element must not be empty and duplicated, and its length cannot exceed 50 characters, complying with the regular expression ^[a-z]([a-z0-9_]{0,49})$.The Value length of Classifications element cannot exceed 200 characters.
     */
    public $Classifications;

    /**
     * @param string $AlarmId Alarm policy ID
     * @param string $Name Alarm policy name
     * @param MonitorTime $MonitorTime Monitoring task running time point
     * @param string $Condition Trigger condition. Note: - Condition and AlarmLevel are one set of configurations, MultiConditions is another set of configurations. The two sets of configurations are mutually exclusive.
     * @param integer $AlarmLevel Alarm level.0: Warning (Warn); 1: Reminder (Info); 2: Urgent (Critical)

Note: - Condition and AlarmLevel are one set of configurations, MultiConditions is another set of configurations. The two sets of configurations are mutually exclusive.
     * @param array $MultiConditions Multiple trigger conditions. Note: - Condition and AlarmLevel are one set of configurations, MultiConditions is another set of configurations. The two sets of configurations are mutually exclusive.
     * @param integer $TriggerCount Alarm persistence cycle. An alarm will be triggered only after the corresponding trigger condition is met for the number of times specified by `TriggerCount`. Value range: 1 to 10
     * @param integer $AlarmPeriod Repeated alarm interval in minutes. Value range: 0 to 1440
     * @param array $AlarmNoticeIds List of associated alarm notification templates
     * @param array $AlarmTargets Monitoring object list
     * @param boolean $Status Whether to enable the alarm policy
     * @param boolean $Enable This parameter has been deprecated. Use the Status parameter to control whether to enable the alarm policy.
     * @param string $MessageTemplate Custom alarm content
     * @param CallBackInfo $CallBack Custom callback
     * @param array $Analysis Multi-Dimensional analysis
     * @param boolean $GroupTriggerStatus Group trigger status. true: enabled; false: disabled (default)
     * @param array $GroupTriggerCondition Grouping trigger conditions.
     * @param array $Tags Tag description list, by specifying this parameter, you can simultaneously bind a Tag to the corresponding alarm policy. Up to 10 Tag key-value pairs are supported, and they must be unique.
     * @param integer $MonitorObjectType Monitored Object Type. 0: common monitoring objects for execution statements; 1: separately selected monitoring objects for each execution statement.When the value is 1, the number of AlarmTargets Elements (XML) cannot exceed 10, and the Numbers in AlarmTargets must be continuous positive integers starting from 1, without duplication.

     * @param array $Classifications Alarm additional classification information list.
The number of Classifications elements cannot exceed 20.The Key of Classifications element must not be empty and duplicated, and its length cannot exceed 50 characters, complying with the regular expression ^[a-z]([a-z0-9_]{0,49})$.The Value length of Classifications element cannot exceed 200 characters.
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("MonitorTime",$param) and $param["MonitorTime"] !== null) {
            $this->MonitorTime = new MonitorTime();
            $this->MonitorTime->deserialize($param["MonitorTime"]);
        }

        if (array_key_exists("Condition",$param) and $param["Condition"] !== null) {
            $this->Condition = $param["Condition"];
        }

        if (array_key_exists("AlarmLevel",$param) and $param["AlarmLevel"] !== null) {
            $this->AlarmLevel = $param["AlarmLevel"];
        }

        if (array_key_exists("MultiConditions",$param) and $param["MultiConditions"] !== null) {
            $this->MultiConditions = [];
            foreach ($param["MultiConditions"] as $key => $value){
                $obj = new MultiCondition();
                $obj->deserialize($value);
                array_push($this->MultiConditions, $obj);
            }
        }

        if (array_key_exists("TriggerCount",$param) and $param["TriggerCount"] !== null) {
            $this->TriggerCount = $param["TriggerCount"];
        }

        if (array_key_exists("AlarmPeriod",$param) and $param["AlarmPeriod"] !== null) {
            $this->AlarmPeriod = $param["AlarmPeriod"];
        }

        if (array_key_exists("AlarmNoticeIds",$param) and $param["AlarmNoticeIds"] !== null) {
            $this->AlarmNoticeIds = $param["AlarmNoticeIds"];
        }

        if (array_key_exists("AlarmTargets",$param) and $param["AlarmTargets"] !== null) {
            $this->AlarmTargets = [];
            foreach ($param["AlarmTargets"] as $key => $value){
                $obj = new AlarmTarget();
                $obj->deserialize($value);
                array_push($this->AlarmTargets, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("MessageTemplate",$param) and $param["MessageTemplate"] !== null) {
            $this->MessageTemplate = $param["MessageTemplate"];
        }

        if (array_key_exists("CallBack",$param) and $param["CallBack"] !== null) {
            $this->CallBack = new CallBackInfo();
            $this->CallBack->deserialize($param["CallBack"]);
        }

        if (array_key_exists("Analysis",$param) and $param["Analysis"] !== null) {
            $this->Analysis = [];
            foreach ($param["Analysis"] as $key => $value){
                $obj = new AnalysisDimensional();
                $obj->deserialize($value);
                array_push($this->Analysis, $obj);
            }
        }

        if (array_key_exists("GroupTriggerStatus",$param) and $param["GroupTriggerStatus"] !== null) {
            $this->GroupTriggerStatus = $param["GroupTriggerStatus"];
        }

        if (array_key_exists("GroupTriggerCondition",$param) and $param["GroupTriggerCondition"] !== null) {
            $this->GroupTriggerCondition = $param["GroupTriggerCondition"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("MonitorObjectType",$param) and $param["MonitorObjectType"] !== null) {
            $this->MonitorObjectType = $param["MonitorObjectType"];
        }

        if (array_key_exists("Classifications",$param) and $param["Classifications"] !== null) {
            $this->Classifications = [];
            foreach ($param["Classifications"] as $key => $value){
                $obj = new AlarmClassification();
                $obj->deserialize($value);
                array_push($this->Classifications, $obj);
            }
        }
    }
}
