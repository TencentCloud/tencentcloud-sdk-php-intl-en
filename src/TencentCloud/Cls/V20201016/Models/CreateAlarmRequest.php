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
 * CreateAlarm request structure.
 *
 * @method string getName() Obtain Alarm policy name
 * @method void setName(string $Name) Set Alarm policy name
 * @method array getAlarmTargets() Obtain Monitoring object list
 * @method void setAlarmTargets(array $AlarmTargets) Set Monitoring object list
 * @method MonitorTime getMonitorTime() Obtain Monitoring task running time point
 * @method void setMonitorTime(MonitorTime $MonitorTime) Set Monitoring task running time point
 * @method integer getTriggerCount() Obtain Alarm persistence cycle. An alarm will be triggered only after the corresponding trigger condition is met for the number of times specified by `TriggerCount`. Value range: 1–10.
 * @method void setTriggerCount(integer $TriggerCount) Set Alarm persistence cycle. An alarm will be triggered only after the corresponding trigger condition is met for the number of times specified by `TriggerCount`. Value range: 1–10.
 * @method integer getAlarmPeriod() Obtain Alarm repeat interval in minutes. The value range is 0~1440.
 * @method void setAlarmPeriod(integer $AlarmPeriod) Set Alarm repeat interval in minutes. The value range is 0~1440.
 * @method array getAlarmNoticeIds() Obtain List of associated alarm notification templates
 * @method void setAlarmNoticeIds(array $AlarmNoticeIds) Set List of associated alarm notification templates
 * @method string getCondition() Obtain Trigger ConditionNote:- Condition and AlarmLevel are one set of configurations, MultiConditions is another set of configurations. The two sets of configurations are mutually exclusive.
 * @method void setCondition(string $Condition) Set Trigger ConditionNote:- Condition and AlarmLevel are one set of configurations, MultiConditions is another set of configurations. The two sets of configurations are mutually exclusive.
 * @method integer getAlarmLevel() Obtain Alarm Level0: Warning (Warn); 1: Reminder (Info); 2: Urgent (Critical).
Note:- If not specified, the default is 0.
- Condition and AlarmLevel are one set of configurations, MultiConditions is another set of configurations. The two sets of configurations are mutually exclusive.
 * @method void setAlarmLevel(integer $AlarmLevel) Set Alarm Level0: Warning (Warn); 1: Reminder (Info); 2: Urgent (Critical).
Note:- If not specified, the default is 0.
- Condition and AlarmLevel are one set of configurations, MultiConditions is another set of configurations. The two sets of configurations are mutually exclusive.
 * @method array getMultiConditions() Obtain Multiple trigger conditions
Note:- Condition and AlarmLevel form one set of configurations, while MultiConditions form another set of configurations, and the two sets are mutually exclusive.



 * @method void setMultiConditions(array $MultiConditions) Set Multiple trigger conditions
Note:- Condition and AlarmLevel form one set of configurations, while MultiConditions form another set of configurations, and the two sets are mutually exclusive.



 * @method boolean getStatus() Obtain Whether to enable the alarm policyThe default value is true
 * @method void setStatus(boolean $Status) Set Whether to enable the alarm policyThe default value is true
 * @method boolean getEnable() Obtain This parameter has been deprecated, please use the Status parameter to control whether to enable the alarm policy.
 * @method void setEnable(boolean $Enable) Set This parameter has been deprecated, please use the Status parameter to control whether to enable the alarm policy.
 * @method string getMessageTemplate() Obtain Custom alarm content
 * @method void setMessageTemplate(string $MessageTemplate) Set Custom alarm content
 * @method CallBackInfo getCallBack() Obtain Custom callback
 * @method void setCallBack(CallBackInfo $CallBack) Set Custom callback
 * @method array getAnalysis() Obtain Multi-Dimensional analysis
 * @method void setAnalysis(array $Analysis) Set Multi-Dimensional analysis
 * @method boolean getGroupTriggerStatus() Obtain Group trigger status.
Default value is false
 * @method void setGroupTriggerStatus(boolean $GroupTriggerStatus) Set Group trigger status.
Default value is false
 * @method array getGroupTriggerCondition() Obtain Grouping Trigger Conditions.
 * @method void setGroupTriggerCondition(array $GroupTriggerCondition) Set Grouping Trigger Conditions.
 * @method array getTags() Obtain Tag description list, by specifying this parameter, you can simultaneously bind Tag to the corresponding alarm policy.Supports up to 10 Tag key-value pairs, and the pairs must be unique.
 * @method void setTags(array $Tags) Set Tag description list, by specifying this parameter, you can simultaneously bind Tag to the corresponding alarm policy.Supports up to 10 Tag key-value pairs, and the pairs must be unique.
 * @method integer getMonitorObjectType() Obtain Monitored Object Type. 0: common monitoring objects for execution statements; 1: separately selected monitoring objects for each execution statement.If not specified, the default value is 0.When the value is 1, the number of AlarmTargets Elements (XML) cannot exceed 10, and the Numbers in AlarmTargets must be continuous positive integers starting from 1, without duplication.

 * @method void setMonitorObjectType(integer $MonitorObjectType) Set Monitored Object Type. 0: common monitoring objects for execution statements; 1: separately selected monitoring objects for each execution statement.If not specified, the default value is 0.When the value is 1, the number of AlarmTargets Elements (XML) cannot exceed 10, and the Numbers in AlarmTargets must be continuous positive integers starting from 1, without duplication.

 * @method array getClassifications() Obtain Alarms additional classification information listThe number of Classifications elements cannot exceed 20.The Key of Classifications element must not be empty and duplicated, and its length cannot exceed 50 characters, complying with the regular expression ^[a-z]([a-z0-9_]{0,49})$.The Value length of Classifications element cannot exceed 200 characters.
 * @method void setClassifications(array $Classifications) Set Alarms additional classification information listThe number of Classifications elements cannot exceed 20.The Key of Classifications element must not be empty and duplicated, and its length cannot exceed 50 characters, complying with the regular expression ^[a-z]([a-z0-9_]{0,49})$.The Value length of Classifications element cannot exceed 200 characters.
 */
class CreateAlarmRequest extends AbstractModel
{
    /**
     * @var string Alarm policy name
     */
    public $Name;

    /**
     * @var array Monitoring object list
     */
    public $AlarmTargets;

    /**
     * @var MonitorTime Monitoring task running time point
     */
    public $MonitorTime;

    /**
     * @var integer Alarm persistence cycle. An alarm will be triggered only after the corresponding trigger condition is met for the number of times specified by `TriggerCount`. Value range: 1–10.
     */
    public $TriggerCount;

    /**
     * @var integer Alarm repeat interval in minutes. The value range is 0~1440.
     */
    public $AlarmPeriod;

    /**
     * @var array List of associated alarm notification templates
     */
    public $AlarmNoticeIds;

    /**
     * @var string Trigger ConditionNote:- Condition and AlarmLevel are one set of configurations, MultiConditions is another set of configurations. The two sets of configurations are mutually exclusive.
     */
    public $Condition;

    /**
     * @var integer Alarm Level0: Warning (Warn); 1: Reminder (Info); 2: Urgent (Critical).
Note:- If not specified, the default is 0.
- Condition and AlarmLevel are one set of configurations, MultiConditions is another set of configurations. The two sets of configurations are mutually exclusive.
     */
    public $AlarmLevel;

    /**
     * @var array Multiple trigger conditions
Note:- Condition and AlarmLevel form one set of configurations, while MultiConditions form another set of configurations, and the two sets are mutually exclusive.



     */
    public $MultiConditions;

    /**
     * @var boolean Whether to enable the alarm policyThe default value is true
     */
    public $Status;

    /**
     * @var boolean This parameter has been deprecated, please use the Status parameter to control whether to enable the alarm policy.
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
     * @var boolean Group trigger status.
Default value is false
     */
    public $GroupTriggerStatus;

    /**
     * @var array Grouping Trigger Conditions.
     */
    public $GroupTriggerCondition;

    /**
     * @var array Tag description list, by specifying this parameter, you can simultaneously bind Tag to the corresponding alarm policy.Supports up to 10 Tag key-value pairs, and the pairs must be unique.
     */
    public $Tags;

    /**
     * @var integer Monitored Object Type. 0: common monitoring objects for execution statements; 1: separately selected monitoring objects for each execution statement.If not specified, the default value is 0.When the value is 1, the number of AlarmTargets Elements (XML) cannot exceed 10, and the Numbers in AlarmTargets must be continuous positive integers starting from 1, without duplication.

     */
    public $MonitorObjectType;

    /**
     * @var array Alarms additional classification information listThe number of Classifications elements cannot exceed 20.The Key of Classifications element must not be empty and duplicated, and its length cannot exceed 50 characters, complying with the regular expression ^[a-z]([a-z0-9_]{0,49})$.The Value length of Classifications element cannot exceed 200 characters.
     */
    public $Classifications;

    /**
     * @param string $Name Alarm policy name
     * @param array $AlarmTargets Monitoring object list
     * @param MonitorTime $MonitorTime Monitoring task running time point
     * @param integer $TriggerCount Alarm persistence cycle. An alarm will be triggered only after the corresponding trigger condition is met for the number of times specified by `TriggerCount`. Value range: 1–10.
     * @param integer $AlarmPeriod Alarm repeat interval in minutes. The value range is 0~1440.
     * @param array $AlarmNoticeIds List of associated alarm notification templates
     * @param string $Condition Trigger ConditionNote:- Condition and AlarmLevel are one set of configurations, MultiConditions is another set of configurations. The two sets of configurations are mutually exclusive.
     * @param integer $AlarmLevel Alarm Level0: Warning (Warn); 1: Reminder (Info); 2: Urgent (Critical).
Note:- If not specified, the default is 0.
- Condition and AlarmLevel are one set of configurations, MultiConditions is another set of configurations. The two sets of configurations are mutually exclusive.
     * @param array $MultiConditions Multiple trigger conditions
Note:- Condition and AlarmLevel form one set of configurations, while MultiConditions form another set of configurations, and the two sets are mutually exclusive.



     * @param boolean $Status Whether to enable the alarm policyThe default value is true
     * @param boolean $Enable This parameter has been deprecated, please use the Status parameter to control whether to enable the alarm policy.
     * @param string $MessageTemplate Custom alarm content
     * @param CallBackInfo $CallBack Custom callback
     * @param array $Analysis Multi-Dimensional analysis
     * @param boolean $GroupTriggerStatus Group trigger status.
Default value is false
     * @param array $GroupTriggerCondition Grouping Trigger Conditions.
     * @param array $Tags Tag description list, by specifying this parameter, you can simultaneously bind Tag to the corresponding alarm policy.Supports up to 10 Tag key-value pairs, and the pairs must be unique.
     * @param integer $MonitorObjectType Monitored Object Type. 0: common monitoring objects for execution statements; 1: separately selected monitoring objects for each execution statement.If not specified, the default value is 0.When the value is 1, the number of AlarmTargets Elements (XML) cannot exceed 10, and the Numbers in AlarmTargets must be continuous positive integers starting from 1, without duplication.

     * @param array $Classifications Alarms additional classification information listThe number of Classifications elements cannot exceed 20.The Key of Classifications element must not be empty and duplicated, and its length cannot exceed 50 characters, complying with the regular expression ^[a-z]([a-z0-9_]{0,49})$.The Value length of Classifications element cannot exceed 200 characters.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("AlarmTargets",$param) and $param["AlarmTargets"] !== null) {
            $this->AlarmTargets = [];
            foreach ($param["AlarmTargets"] as $key => $value){
                $obj = new AlarmTarget();
                $obj->deserialize($value);
                array_push($this->AlarmTargets, $obj);
            }
        }

        if (array_key_exists("MonitorTime",$param) and $param["MonitorTime"] !== null) {
            $this->MonitorTime = new MonitorTime();
            $this->MonitorTime->deserialize($param["MonitorTime"]);
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
