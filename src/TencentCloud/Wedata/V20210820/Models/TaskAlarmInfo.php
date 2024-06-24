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
 * Task Alert Information
 *
 * @method string getTaskId() Obtain Task ID
 * @method void setTaskId(string $TaskId) Set Task ID
 * @method string getRegularName() Obtain Rule name
 * @method void setRegularName(string $RegularName) Set Rule name
 * @method integer getRegularStatus() Obtain Rule Status (0 for off, 1 for on)
 * @method void setRegularStatus(integer $RegularStatus) Set Rule Status (0 for off, 1 for on)
 * @method integer getAlarmLevel() Obtain Alert Level (0 for general, 1 for critical, 2 for urgent)
 * @method void setAlarmLevel(integer $AlarmLevel) Set Alert Level (0 for general, 1 for critical, 2 for urgent)
 * @method string getAlarmWay() Obtain Alert Method, separated by commas (1: email, 2: SMS, 3: WeChat, 4: voice call, 5: represents WeCom, 6: http)
 * @method void setAlarmWay(string $AlarmWay) Set Alert Method, separated by commas (1: email, 2: SMS, 3: WeChat, 4: voice call, 5: represents WeCom, 6: http)
 * @method integer getTaskType() Obtain Task Type (201 for real-time, 202 for offline)
 * @method void setTaskType(integer $TaskType) Set Task Type (201 for real-time, 202 for offline)
 * @method string getId() Obtain ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setId(string $Id) Set ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getRegularId() Obtain Rule ID
 * @method void setRegularId(string $RegularId) Set Rule ID
 * @method integer getAlarmIndicator() Obtain Alert Metrics, 0 for task failure, 1 for task run timeout, 2 for task stop, 3 for task pause,4 Write Speed, 5 Read Speed, 6 Read Throughput, 7 Write Throughput, 8 Dirty Data Byte Count, 9 Number of Dirty Data Entries
 * @method void setAlarmIndicator(integer $AlarmIndicator) Set Alert Metrics, 0 for task failure, 1 for task run timeout, 2 for task stop, 3 for task pause,4 Write Speed, 5 Read Speed, 6 Read Throughput, 7 Write Throughput, 8 Dirty Data Byte Count, 9 Number of Dirty Data Entries
 * @method integer getTriggerType() Obtain Metric Threshold (1 for the first run failure of an offline task, 2 for all retries failed of an offline task)
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTriggerType(integer $TriggerType) Set Metric Threshold (1 for the first run failure of an offline task, 2 for all retries failed of an offline task)
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getEstimatedTime() Obtain Estimated Timeout Duration (Minute Level)
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setEstimatedTime(integer $EstimatedTime) Set Estimated Timeout Duration (Minute Level)
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getAlarmRecipientId() Obtain Alert Recipient ID, separated by commas
 * @method void setAlarmRecipientId(string $AlarmRecipientId) Set Alert Recipient ID, separated by commas
 * @method string getProjectId() Obtain Project IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setProjectId(string $ProjectId) Set Project IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getCreater() Obtain CreatorNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setCreater(string $Creater) Set CreatorNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getAlarmRecipientName() Obtain Alert Recipient Nickname, separated by commas
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setAlarmRecipientName(string $AlarmRecipientName) Set Alert Recipient Nickname, separated by commas
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getAlarmIndicatorDesc() Obtain Alert Metric Description
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setAlarmIndicatorDesc(string $AlarmIndicatorDesc) Set Alert Metric Description
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getOperator() Obtain Parameters needed for real-time task alerts, 1 is greater than, 2 is less than
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setOperator(integer $Operator) Set Parameters needed for real-time task alerts, 1 is greater than, 2 is less than
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getNodeId() Obtain Node ID, separated by commas
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setNodeId(string $NodeId) Set Node ID, separated by commas
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getNodeName() Obtain Node name, separated by commas
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setNodeName(string $NodeName) Set Node name, separated by commas
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getAlarmIndicatorInfos() Obtain Metric List
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setAlarmIndicatorInfos(array $AlarmIndicatorInfos) Set Metric List
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getAlarmRecipientType() Obtain Alert Recipient Type, 0 is designated person; 1 is task responsible person
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setAlarmRecipientType(integer $AlarmRecipientType) Set Alert Recipient Type, 0 is designated person; 1 is task responsible person
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getQuietPeriods() Obtain Do not disturb time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setQuietPeriods(array $QuietPeriods) Set Do not disturb time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getWeComHook() Obtain Enterprise WeChat Group Hook Address, multiple hook addresses separated by commas
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setWeComHook(string $WeComHook) Set Enterprise WeChat Group Hook Address, multiple hook addresses separated by commas
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getUpdateTime() Obtain Last Operation Time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set Last Operation Time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getOperatorUin() Obtain Last Operator Uin
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setOperatorUin(string $OperatorUin) Set Last Operator Uin
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getTaskCount() Obtain Associated Task Count
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTaskCount(integer $TaskCount) Set Associated Task Count
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getMonitorType() Obtain Monitored Object Type, 1: all tasks, 2: specified tasks, 3: specified responsible person
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setMonitorType(integer $MonitorType) Set Monitored Object Type, 1: all tasks, 2: specified tasks, 3: specified responsible person
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getMonitorObjectIds() Obtain Monitoring Object List
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setMonitorObjectIds(array $MonitorObjectIds) Set Monitoring Object List
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getLatestAlarmInstanceId() Obtain Instance ID of the Last Alert
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setLatestAlarmInstanceId(string $LatestAlarmInstanceId) Set Instance ID of the Last Alert
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getLatestAlarmTime() Obtain Time of the Last Alert
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setLatestAlarmTime(string $LatestAlarmTime) Set Time of the Last Alert
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getDescription() Obtain Alert Rule Description
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDescription(string $Description) Set Alert Rule Description
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getLarkWebHooks() Obtain FeiShu Group Hook Address, multiple hook addresses separated by commas
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setLarkWebHooks(string $LarkWebHooks) Set FeiShu Group Hook Address, multiple hook addresses separated by commas
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getDingDingWebHooks() Obtain DingTalk Group Hook addresses, multiple hook addresses separated by commas
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDingDingWebHooks(string $DingDingWebHooks) Set DingTalk Group Hook addresses, multiple hook addresses separated by commas
Note: This field may return null, indicating that no valid value can be obtained.
 */
class TaskAlarmInfo extends AbstractModel
{
    /**
     * @var string Task ID
     */
    public $TaskId;

    /**
     * @var string Rule name
     */
    public $RegularName;

    /**
     * @var integer Rule Status (0 for off, 1 for on)
     */
    public $RegularStatus;

    /**
     * @var integer Alert Level (0 for general, 1 for critical, 2 for urgent)
     */
    public $AlarmLevel;

    /**
     * @var string Alert Method, separated by commas (1: email, 2: SMS, 3: WeChat, 4: voice call, 5: represents WeCom, 6: http)
     */
    public $AlarmWay;

    /**
     * @var integer Task Type (201 for real-time, 202 for offline)
     */
    public $TaskType;

    /**
     * @var string ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Id;

    /**
     * @var string Rule ID
     */
    public $RegularId;

    /**
     * @var integer Alert Metrics, 0 for task failure, 1 for task run timeout, 2 for task stop, 3 for task pause,4 Write Speed, 5 Read Speed, 6 Read Throughput, 7 Write Throughput, 8 Dirty Data Byte Count, 9 Number of Dirty Data Entries
     */
    public $AlarmIndicator;

    /**
     * @var integer Metric Threshold (1 for the first run failure of an offline task, 2 for all retries failed of an offline task)
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TriggerType;

    /**
     * @var integer Estimated Timeout Duration (Minute Level)
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $EstimatedTime;

    /**
     * @var string Alert Recipient ID, separated by commas
     */
    public $AlarmRecipientId;

    /**
     * @var string Project IDNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $ProjectId;

    /**
     * @var string CreatorNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $Creater;

    /**
     * @var string Alert Recipient Nickname, separated by commas
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $AlarmRecipientName;

    /**
     * @var string Alert Metric Description
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $AlarmIndicatorDesc;

    /**
     * @var integer Parameters needed for real-time task alerts, 1 is greater than, 2 is less than
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Operator;

    /**
     * @var string Node ID, separated by commas
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $NodeId;

    /**
     * @var string Node name, separated by commas
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $NodeName;

    /**
     * @var array Metric List
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $AlarmIndicatorInfos;

    /**
     * @var integer Alert Recipient Type, 0 is designated person; 1 is task responsible person
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $AlarmRecipientType;

    /**
     * @var array Do not disturb time
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $QuietPeriods;

    /**
     * @var string Enterprise WeChat Group Hook Address, multiple hook addresses separated by commas
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $WeComHook;

    /**
     * @var string Last Operation Time
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $UpdateTime;

    /**
     * @var string Last Operator Uin
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $OperatorUin;

    /**
     * @var integer Associated Task Count
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TaskCount;

    /**
     * @var integer Monitored Object Type, 1: all tasks, 2: specified tasks, 3: specified responsible person
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $MonitorType;

    /**
     * @var array Monitoring Object List
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $MonitorObjectIds;

    /**
     * @var string Instance ID of the Last Alert
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $LatestAlarmInstanceId;

    /**
     * @var string Time of the Last Alert
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $LatestAlarmTime;

    /**
     * @var string Alert Rule Description
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Description;

    /**
     * @var string FeiShu Group Hook Address, multiple hook addresses separated by commas
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $LarkWebHooks;

    /**
     * @var string DingTalk Group Hook addresses, multiple hook addresses separated by commas
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DingDingWebHooks;

    /**
     * @param string $TaskId Task ID
     * @param string $RegularName Rule name
     * @param integer $RegularStatus Rule Status (0 for off, 1 for on)
     * @param integer $AlarmLevel Alert Level (0 for general, 1 for critical, 2 for urgent)
     * @param string $AlarmWay Alert Method, separated by commas (1: email, 2: SMS, 3: WeChat, 4: voice call, 5: represents WeCom, 6: http)
     * @param integer $TaskType Task Type (201 for real-time, 202 for offline)
     * @param string $Id ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $RegularId Rule ID
     * @param integer $AlarmIndicator Alert Metrics, 0 for task failure, 1 for task run timeout, 2 for task stop, 3 for task pause,4 Write Speed, 5 Read Speed, 6 Read Throughput, 7 Write Throughput, 8 Dirty Data Byte Count, 9 Number of Dirty Data Entries
     * @param integer $TriggerType Metric Threshold (1 for the first run failure of an offline task, 2 for all retries failed of an offline task)
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $EstimatedTime Estimated Timeout Duration (Minute Level)
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $AlarmRecipientId Alert Recipient ID, separated by commas
     * @param string $ProjectId Project IDNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $Creater CreatorNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $AlarmRecipientName Alert Recipient Nickname, separated by commas
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $AlarmIndicatorDesc Alert Metric Description
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $Operator Parameters needed for real-time task alerts, 1 is greater than, 2 is less than
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $NodeId Node ID, separated by commas
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $NodeName Node name, separated by commas
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $AlarmIndicatorInfos Metric List
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $AlarmRecipientType Alert Recipient Type, 0 is designated person; 1 is task responsible person
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $QuietPeriods Do not disturb time
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $WeComHook Enterprise WeChat Group Hook Address, multiple hook addresses separated by commas
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $UpdateTime Last Operation Time
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $OperatorUin Last Operator Uin
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $TaskCount Associated Task Count
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $MonitorType Monitored Object Type, 1: all tasks, 2: specified tasks, 3: specified responsible person
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $MonitorObjectIds Monitoring Object List
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $LatestAlarmInstanceId Instance ID of the Last Alert
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $LatestAlarmTime Time of the Last Alert
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Description Alert Rule Description
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $LarkWebHooks FeiShu Group Hook Address, multiple hook addresses separated by commas
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $DingDingWebHooks DingTalk Group Hook addresses, multiple hook addresses separated by commas
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("RegularName",$param) and $param["RegularName"] !== null) {
            $this->RegularName = $param["RegularName"];
        }

        if (array_key_exists("RegularStatus",$param) and $param["RegularStatus"] !== null) {
            $this->RegularStatus = $param["RegularStatus"];
        }

        if (array_key_exists("AlarmLevel",$param) and $param["AlarmLevel"] !== null) {
            $this->AlarmLevel = $param["AlarmLevel"];
        }

        if (array_key_exists("AlarmWay",$param) and $param["AlarmWay"] !== null) {
            $this->AlarmWay = $param["AlarmWay"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("RegularId",$param) and $param["RegularId"] !== null) {
            $this->RegularId = $param["RegularId"];
        }

        if (array_key_exists("AlarmIndicator",$param) and $param["AlarmIndicator"] !== null) {
            $this->AlarmIndicator = $param["AlarmIndicator"];
        }

        if (array_key_exists("TriggerType",$param) and $param["TriggerType"] !== null) {
            $this->TriggerType = $param["TriggerType"];
        }

        if (array_key_exists("EstimatedTime",$param) and $param["EstimatedTime"] !== null) {
            $this->EstimatedTime = $param["EstimatedTime"];
        }

        if (array_key_exists("AlarmRecipientId",$param) and $param["AlarmRecipientId"] !== null) {
            $this->AlarmRecipientId = $param["AlarmRecipientId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Creater",$param) and $param["Creater"] !== null) {
            $this->Creater = $param["Creater"];
        }

        if (array_key_exists("AlarmRecipientName",$param) and $param["AlarmRecipientName"] !== null) {
            $this->AlarmRecipientName = $param["AlarmRecipientName"];
        }

        if (array_key_exists("AlarmIndicatorDesc",$param) and $param["AlarmIndicatorDesc"] !== null) {
            $this->AlarmIndicatorDesc = $param["AlarmIndicatorDesc"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("AlarmIndicatorInfos",$param) and $param["AlarmIndicatorInfos"] !== null) {
            $this->AlarmIndicatorInfos = [];
            foreach ($param["AlarmIndicatorInfos"] as $key => $value){
                $obj = new AlarmIndicatorInfo();
                $obj->deserialize($value);
                array_push($this->AlarmIndicatorInfos, $obj);
            }
        }

        if (array_key_exists("AlarmRecipientType",$param) and $param["AlarmRecipientType"] !== null) {
            $this->AlarmRecipientType = $param["AlarmRecipientType"];
        }

        if (array_key_exists("QuietPeriods",$param) and $param["QuietPeriods"] !== null) {
            $this->QuietPeriods = [];
            foreach ($param["QuietPeriods"] as $key => $value){
                $obj = new QuietPeriod();
                $obj->deserialize($value);
                array_push($this->QuietPeriods, $obj);
            }
        }

        if (array_key_exists("WeComHook",$param) and $param["WeComHook"] !== null) {
            $this->WeComHook = $param["WeComHook"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("OperatorUin",$param) and $param["OperatorUin"] !== null) {
            $this->OperatorUin = $param["OperatorUin"];
        }

        if (array_key_exists("TaskCount",$param) and $param["TaskCount"] !== null) {
            $this->TaskCount = $param["TaskCount"];
        }

        if (array_key_exists("MonitorType",$param) and $param["MonitorType"] !== null) {
            $this->MonitorType = $param["MonitorType"];
        }

        if (array_key_exists("MonitorObjectIds",$param) and $param["MonitorObjectIds"] !== null) {
            $this->MonitorObjectIds = $param["MonitorObjectIds"];
        }

        if (array_key_exists("LatestAlarmInstanceId",$param) and $param["LatestAlarmInstanceId"] !== null) {
            $this->LatestAlarmInstanceId = $param["LatestAlarmInstanceId"];
        }

        if (array_key_exists("LatestAlarmTime",$param) and $param["LatestAlarmTime"] !== null) {
            $this->LatestAlarmTime = $param["LatestAlarmTime"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("LarkWebHooks",$param) and $param["LarkWebHooks"] !== null) {
            $this->LarkWebHooks = $param["LarkWebHooks"];
        }

        if (array_key_exists("DingDingWebHooks",$param) and $param["DingDingWebHooks"] !== null) {
            $this->DingDingWebHooks = $param["DingDingWebHooks"];
        }
    }
}
