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
 * Alarm policy description
 *
 * @method string getName() Obtain Alarm policy name
 * @method void setName(string $Name) Set Alarm policy name
 * @method array getAlarmTargets() Obtain Monitoring object list
 * @method void setAlarmTargets(array $AlarmTargets) Set Monitoring object list
 * @method MonitorTime getMonitorTime() Obtain Monitoring task running time point
 * @method void setMonitorTime(MonitorTime $MonitorTime) Set Monitoring task running time point
 * @method string getCondition() Obtain Single trigger condition for whether to trigger alarm. Mutually exclusive with the MultiConditions parameter.
 * @method void setCondition(string $Condition) Set Single trigger condition for whether to trigger alarm. Mutually exclusive with the MultiConditions parameter.
 * @method integer getTriggerCount() Obtain Alarm persistence cycle. An alarm will be triggered only after the corresponding trigger condition is met for the number of times specified by `TriggerCount`. Value range: 1–10.
 * @method void setTriggerCount(integer $TriggerCount) Set Alarm persistence cycle. An alarm will be triggered only after the corresponding trigger condition is met for the number of times specified by `TriggerCount`. Value range: 1–10.
 * @method integer getAlarmPeriod() Obtain Repeated alarm interval in minutes. Value range: 0–1440.
 * @method void setAlarmPeriod(integer $AlarmPeriod) Set Repeated alarm interval in minutes. Value range: 0–1440.
 * @method array getAlarmNoticeIds() Obtain List of associated alarm notification channel groups. - Search the list of associated alarm notification channel groups via [Query notification channel group list](https://www.tencentcloud.com/document/product/614/56462?from_cn_redirect=1). It is mutually exclusive with MonitorNotice.
 * @method void setAlarmNoticeIds(array $AlarmNoticeIds) Set List of associated alarm notification channel groups. - Search the list of associated alarm notification channel groups via [Query notification channel group list](https://www.tencentcloud.com/document/product/614/56462?from_cn_redirect=1). It is mutually exclusive with MonitorNotice.
 * @method boolean getStatus() Obtain Enablement status
 * @method void setStatus(boolean $Status) Set Enablement status
 * @method string getAlarmId() Obtain Alarm policy ID
 * @method void setAlarmId(string $AlarmId) Set Alarm policy ID
 * @method string getCreateTime() Obtain Creation time. Format: YYYY-MM-DD HH:MM:SS
 * @method void setCreateTime(string $CreateTime) Set Creation time. Format: YYYY-MM-DD HH:MM:SS
 * @method string getUpdateTime() Obtain Latest update time. Format: YYYY-MM-DD HH:MM:SS
 * @method void setUpdateTime(string $UpdateTime) Set Latest update time. Format: YYYY-MM-DD HH:MM:SS
 * @method string getMessageTemplate() Obtain Custom notification template
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setMessageTemplate(string $MessageTemplate) Set Custom notification template
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method CallBackInfo getCallBack() Obtain Custom callback template
 * @method void setCallBack(CallBackInfo $CallBack) Set Custom callback template
 * @method array getAnalysis() Obtain Multidimensional analysis settings
 * @method void setAnalysis(array $Analysis) Set Multidimensional analysis settings
 * @method boolean getGroupTriggerStatus() Obtain Group trigger status. true: enabled, false: disabled (default)
 * @method void setGroupTriggerStatus(boolean $GroupTriggerStatus) Set Group trigger status. true: enabled, false: disabled (default)
 * @method array getGroupTriggerCondition() Obtain Grouping Trigger Conditions.
 * @method void setGroupTriggerCondition(array $GroupTriggerCondition) Set Grouping Trigger Conditions.
 * @method array getTags() Obtain Tag information bound to the alarm policy.
 * @method void setTags(array $Tags) Set Tag information bound to the alarm policy.
 * @method integer getMonitorObjectType() Obtain Monitored object type. 0: shared monitored object for execution statements; 1: separate monitored object for each execution statement. 
 * @method void setMonitorObjectType(integer $MonitorObjectType) Set Monitored object type. 0: shared monitored object for execution statements; 1: separate monitored object for each execution statement. 
 * @method integer getAlarmLevel() Obtain Alarm level. 0: Warn; 1: Information; 2: Critical.
 * @method void setAlarmLevel(integer $AlarmLevel) Set Alarm level. 0: Warn; 1: Information; 2: Critical.
 * @method array getClassifications() Obtain Additional classification field for alerts.
 * @method void setClassifications(array $Classifications) Set Additional classification field for alerts.
 * @method array getMultiConditions() Obtain Multiple trigger conditions.
Mutually exclusive conditions.
 * @method void setMultiConditions(array $MultiConditions) Set Multiple trigger conditions.
Mutually exclusive conditions.
 * @method MonitorNotice getMonitorNotice() Obtain Tencent Cloud observability platform channel-related information, mutually exclusive with AlarmNoticeIds
 * @method void setMonitorNotice(MonitorNotice $MonitorNotice) Set Tencent Cloud observability platform channel-related information, mutually exclusive with AlarmNoticeIds
 */
class AlarmInfo extends AbstractModel
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
     * @var string Single trigger condition for whether to trigger alarm. Mutually exclusive with the MultiConditions parameter.
     */
    public $Condition;

    /**
     * @var integer Alarm persistence cycle. An alarm will be triggered only after the corresponding trigger condition is met for the number of times specified by `TriggerCount`. Value range: 1–10.
     */
    public $TriggerCount;

    /**
     * @var integer Repeated alarm interval in minutes. Value range: 0–1440.
     */
    public $AlarmPeriod;

    /**
     * @var array List of associated alarm notification channel groups. - Search the list of associated alarm notification channel groups via [Query notification channel group list](https://www.tencentcloud.com/document/product/614/56462?from_cn_redirect=1). It is mutually exclusive with MonitorNotice.
     */
    public $AlarmNoticeIds;

    /**
     * @var boolean Enablement status
     */
    public $Status;

    /**
     * @var string Alarm policy ID
     */
    public $AlarmId;

    /**
     * @var string Creation time. Format: YYYY-MM-DD HH:MM:SS
     */
    public $CreateTime;

    /**
     * @var string Latest update time. Format: YYYY-MM-DD HH:MM:SS
     */
    public $UpdateTime;

    /**
     * @var string Custom notification template
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $MessageTemplate;

    /**
     * @var CallBackInfo Custom callback template
     */
    public $CallBack;

    /**
     * @var array Multidimensional analysis settings
     */
    public $Analysis;

    /**
     * @var boolean Group trigger status. true: enabled, false: disabled (default)
     */
    public $GroupTriggerStatus;

    /**
     * @var array Grouping Trigger Conditions.
     */
    public $GroupTriggerCondition;

    /**
     * @var array Tag information bound to the alarm policy.
     */
    public $Tags;

    /**
     * @var integer Monitored object type. 0: shared monitored object for execution statements; 1: separate monitored object for each execution statement. 
     */
    public $MonitorObjectType;

    /**
     * @var integer Alarm level. 0: Warn; 1: Information; 2: Critical.
     */
    public $AlarmLevel;

    /**
     * @var array Additional classification field for alerts.
     */
    public $Classifications;

    /**
     * @var array Multiple trigger conditions.
Mutually exclusive conditions.
     */
    public $MultiConditions;

    /**
     * @var MonitorNotice Tencent Cloud observability platform channel-related information, mutually exclusive with AlarmNoticeIds
     */
    public $MonitorNotice;

    /**
     * @param string $Name Alarm policy name
     * @param array $AlarmTargets Monitoring object list
     * @param MonitorTime $MonitorTime Monitoring task running time point
     * @param string $Condition Single trigger condition for whether to trigger alarm. Mutually exclusive with the MultiConditions parameter.
     * @param integer $TriggerCount Alarm persistence cycle. An alarm will be triggered only after the corresponding trigger condition is met for the number of times specified by `TriggerCount`. Value range: 1–10.
     * @param integer $AlarmPeriod Repeated alarm interval in minutes. Value range: 0–1440.
     * @param array $AlarmNoticeIds List of associated alarm notification channel groups. - Search the list of associated alarm notification channel groups via [Query notification channel group list](https://www.tencentcloud.com/document/product/614/56462?from_cn_redirect=1). It is mutually exclusive with MonitorNotice.
     * @param boolean $Status Enablement status
     * @param string $AlarmId Alarm policy ID
     * @param string $CreateTime Creation time. Format: YYYY-MM-DD HH:MM:SS
     * @param string $UpdateTime Latest update time. Format: YYYY-MM-DD HH:MM:SS
     * @param string $MessageTemplate Custom notification template
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param CallBackInfo $CallBack Custom callback template
     * @param array $Analysis Multidimensional analysis settings
     * @param boolean $GroupTriggerStatus Group trigger status. true: enabled, false: disabled (default)
     * @param array $GroupTriggerCondition Grouping Trigger Conditions.
     * @param array $Tags Tag information bound to the alarm policy.
     * @param integer $MonitorObjectType Monitored object type. 0: shared monitored object for execution statements; 1: separate monitored object for each execution statement. 
     * @param integer $AlarmLevel Alarm level. 0: Warn; 1: Information; 2: Critical.
     * @param array $Classifications Additional classification field for alerts.
     * @param array $MultiConditions Multiple trigger conditions.
Mutually exclusive conditions.
     * @param MonitorNotice $MonitorNotice Tencent Cloud observability platform channel-related information, mutually exclusive with AlarmNoticeIds
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
                $obj = new AlarmTargetInfo();
                $obj->deserialize($value);
                array_push($this->AlarmTargets, $obj);
            }
        }

        if (array_key_exists("MonitorTime",$param) and $param["MonitorTime"] !== null) {
            $this->MonitorTime = new MonitorTime();
            $this->MonitorTime->deserialize($param["MonitorTime"]);
        }

        if (array_key_exists("Condition",$param) and $param["Condition"] !== null) {
            $this->Condition = $param["Condition"];
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AlarmId",$param) and $param["AlarmId"] !== null) {
            $this->AlarmId = $param["AlarmId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
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

        if (array_key_exists("AlarmLevel",$param) and $param["AlarmLevel"] !== null) {
            $this->AlarmLevel = $param["AlarmLevel"];
        }

        if (array_key_exists("Classifications",$param) and $param["Classifications"] !== null) {
            $this->Classifications = [];
            foreach ($param["Classifications"] as $key => $value){
                $obj = new AlarmClassification();
                $obj->deserialize($value);
                array_push($this->Classifications, $obj);
            }
        }

        if (array_key_exists("MultiConditions",$param) and $param["MultiConditions"] !== null) {
            $this->MultiConditions = [];
            foreach ($param["MultiConditions"] as $key => $value){
                $obj = new MultiCondition();
                $obj->deserialize($value);
                array_push($this->MultiConditions, $obj);
            }
        }

        if (array_key_exists("MonitorNotice",$param) and $param["MonitorNotice"] !== null) {
            $this->MonitorNotice = new MonitorNotice();
            $this->MonitorNotice->deserialize($param["MonitorNotice"]);
        }
    }
}
