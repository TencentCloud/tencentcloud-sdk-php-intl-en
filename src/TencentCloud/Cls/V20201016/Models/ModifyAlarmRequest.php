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
 * @method string getAlarmId() Obtain <p>Alert policy ID. - Search the alert policy ID by <a href="https://www.tencentcloud.com/document/product/614/56461?from_cn_redirect=1">obtaining the alarm policy list</a>.</p>
 * @method void setAlarmId(string $AlarmId) Set <p>Alert policy ID. - Search the alert policy ID by <a href="https://www.tencentcloud.com/document/product/614/56461?from_cn_redirect=1">obtaining the alarm policy list</a>.</p>
 * @method string getName() Obtain <p>Alarm policy name. Supports a maximum of 255 bytes. The '|' character is unsupported.</p>
 * @method void setName(string $Name) Set <p>Alarm policy name. Supports a maximum of 255 bytes. The '|' character is unsupported.</p>
 * @method MonitorTime getMonitorTime() Obtain <p>Monitoring task execution time point.</p>
 * @method void setMonitorTime(MonitorTime $MonitorTime) Set <p>Monitoring task execution time point.</p>
 * @method string getCondition() Obtain <p>Trigger condition for sending alarm information.</p><p>Note:</p><ul><li>Condition and AlarmLevel are one set of configurations, and MultiConditions is another set of configurations. The two sets are mutually exclusive.</li></ul>
 * @method void setCondition(string $Condition) Set <p>Trigger condition for sending alarm information.</p><p>Note:</p><ul><li>Condition and AlarmLevel are one set of configurations, and MultiConditions is another set of configurations. The two sets are mutually exclusive.</li></ul>
 * @method integer getAlarmLevel() Obtain <p>Alarm level.</p><p>0: Warning (Warn); 1: Reminder (Info); 2: Emergency (Critical)</p><p>Note:</p><ul><li>Condition and AlarmLevel are one set of configurations, and MultiConditions are another set of configurations. The two sets are mutually exclusive.</li></ul>
 * @method void setAlarmLevel(integer $AlarmLevel) Set <p>Alarm level.</p><p>0: Warning (Warn); 1: Reminder (Info); 2: Emergency (Critical)</p><p>Note:</p><ul><li>Condition and AlarmLevel are one set of configurations, and MultiConditions are another set of configurations. The two sets are mutually exclusive.</li></ul>
 * @method array getMultiConditions() Obtain <p>Multiple trigger conditions.</p><p>Note:</p><ul><li>Condition and AlarmLevel are one set of configurations, and MultiConditions are another set of configurations. The two sets of configurations are mutually exclusive.</li></ul>
 * @method void setMultiConditions(array $MultiConditions) Set <p>Multiple trigger conditions.</p><p>Note:</p><ul><li>Condition and AlarmLevel are one set of configurations, and MultiConditions are another set of configurations. The two sets of configurations are mutually exclusive.</li></ul>
 * @method integer getTriggerCount() Obtain <p>Duration cycle. An alarm is triggered after the trigger conditions are constantly met for TriggerCount cycles. The minimum value is 1, and the maximum value is 2000.</p>
 * @method void setTriggerCount(integer $TriggerCount) Set <p>Duration cycle. An alarm is triggered after the trigger conditions are constantly met for TriggerCount cycles. The minimum value is 1, and the maximum value is 2000.</p>
 * @method integer getAlarmPeriod() Obtain <p>Alarm repeat cycle. In minutes. Value ranges from 0 to 1440.</p>
 * @method void setAlarmPeriod(integer $AlarmPeriod) Set <p>Alarm repeat cycle. In minutes. Value ranges from 0 to 1440.</p>
 * @method array getAlarmTargets() Obtain <p>Monitoring object list.</p>
 * @method void setAlarmTargets(array $AlarmTargets) Set <p>Monitoring object list.</p>
 * @method boolean getStatus() Obtain <p>Whether to enable alarm policy.</p>
 * @method void setStatus(boolean $Status) Set <p>Whether to enable alarm policy.</p>
 * @method boolean getEnable() Obtain <p>This parameter has been deprecated, please use the Status parameter to control whether to enable the alarm policy.</p>
 * @method void setEnable(boolean $Enable) Set <p>This parameter has been deprecated, please use the Status parameter to control whether to enable the alarm policy.</p>
 * @method string getMessageTemplate() Obtain <p>User-defined alarm content</p>
 * @method void setMessageTemplate(string $MessageTemplate) Set <p>User-defined alarm content</p>
 * @method CallBackInfo getCallBack() Obtain <p>user-defined callback</p>
 * @method void setCallBack(CallBackInfo $CallBack) Set <p>user-defined callback</p>
 * @method array getAnalysis() Obtain <p>Multi-dimensional analysis</p>
 * @method void setAnalysis(array $Analysis) Set <p>Multi-dimensional analysis</p>
 * @method boolean getGroupTriggerStatus() Obtain <p>Group trigger status. true: enabled, false: disabled (default)</p>
 * @method void setGroupTriggerStatus(boolean $GroupTriggerStatus) Set <p>Group trigger status. true: enabled, false: disabled (default)</p>
 * @method array getGroupTriggerCondition() Obtain <p>Group trigger conditions.</p>
 * @method void setGroupTriggerCondition(array $GroupTriggerCondition) Set <p>Group trigger conditions.</p>
 * @method array getTags() Obtain <p>Tag description list, by specifying this parameter, you can simultaneously bind a tag to the corresponding alarm policy. Up to 10 tag key-value pairs are supported, and no duplicate key-value pairs are allowed.</p>
 * @method void setTags(array $Tags) Set <p>Tag description list, by specifying this parameter, you can simultaneously bind a tag to the corresponding alarm policy. Up to 10 tag key-value pairs are supported, and no duplicate key-value pairs are allowed.</p>
 * @method integer getMonitorObjectType() Obtain <p>Monitored object type. 0: Common monitoring object for execution statements; 1: Each execution statement selects its own monitored object.<br>When the value is 1, the number of elements in AlarmTargets cannot exceed 10. The Number in AlarmTargets must be consecutive positive integers starting from 1 and must be unique.</p>
 * @method void setMonitorObjectType(integer $MonitorObjectType) Set <p>Monitored object type. 0: Common monitoring object for execution statements; 1: Each execution statement selects its own monitored object.<br>When the value is 1, the number of elements in AlarmTargets cannot exceed 10. The Number in AlarmTargets must be consecutive positive integers starting from 1 and must be unique.</p>
 * @method array getClassifications() Obtain <p>Alert additional classification information list.<br>Number of Classifications Elements cannot exceed 20.<br>The Key of Classifications elements cannot be empty, must be unique, length cannot exceed 50 characters, and complies with the regular expression <code>^[a-z]([a-z0-9_]{0,49})$</code>.<br>Value of Classifications elements cannot exceed 200 characters.</p>
 * @method void setClassifications(array $Classifications) Set <p>Alert additional classification information list.<br>Number of Classifications Elements cannot exceed 20.<br>The Key of Classifications elements cannot be empty, must be unique, length cannot exceed 50 characters, and complies with the regular expression <code>^[a-z]([a-z0-9_]{0,49})$</code>.<br>Value of Classifications elements cannot exceed 200 characters.</p>
 * @method array getAlarmNoticeIds() Obtain <p>List of associated CLS alarm notification channel groups. - Search the list of associated alarm notification channel groups via <a href="https://www.tencentcloud.com/document/product/614/56462?from_cn_redirect=1">Query notification channel group list</a>. It is mutually exclusive with MonitorNotice.</p>
 * @method void setAlarmNoticeIds(array $AlarmNoticeIds) Set <p>List of associated CLS alarm notification channel groups. - Search the list of associated alarm notification channel groups via <a href="https://www.tencentcloud.com/document/product/614/56462?from_cn_redirect=1">Query notification channel group list</a>. It is mutually exclusive with MonitorNotice.</p>
 * @method MonitorNotice getMonitorNotice() Obtain <p>The associated observability platform notification template is mutually exclusive with the AlarmNoticeIds parameter and cannot include both.</p>
 * @method void setMonitorNotice(MonitorNotice $MonitorNotice) Set <p>The associated observability platform notification template is mutually exclusive with the AlarmNoticeIds parameter and cannot include both.</p>
 */
class ModifyAlarmRequest extends AbstractModel
{
    /**
     * @var string <p>Alert policy ID. - Search the alert policy ID by <a href="https://www.tencentcloud.com/document/product/614/56461?from_cn_redirect=1">obtaining the alarm policy list</a>.</p>
     */
    public $AlarmId;

    /**
     * @var string <p>Alarm policy name. Supports a maximum of 255 bytes. The '|' character is unsupported.</p>
     */
    public $Name;

    /**
     * @var MonitorTime <p>Monitoring task execution time point.</p>
     */
    public $MonitorTime;

    /**
     * @var string <p>Trigger condition for sending alarm information.</p><p>Note:</p><ul><li>Condition and AlarmLevel are one set of configurations, and MultiConditions is another set of configurations. The two sets are mutually exclusive.</li></ul>
     */
    public $Condition;

    /**
     * @var integer <p>Alarm level.</p><p>0: Warning (Warn); 1: Reminder (Info); 2: Emergency (Critical)</p><p>Note:</p><ul><li>Condition and AlarmLevel are one set of configurations, and MultiConditions are another set of configurations. The two sets are mutually exclusive.</li></ul>
     */
    public $AlarmLevel;

    /**
     * @var array <p>Multiple trigger conditions.</p><p>Note:</p><ul><li>Condition and AlarmLevel are one set of configurations, and MultiConditions are another set of configurations. The two sets of configurations are mutually exclusive.</li></ul>
     */
    public $MultiConditions;

    /**
     * @var integer <p>Duration cycle. An alarm is triggered after the trigger conditions are constantly met for TriggerCount cycles. The minimum value is 1, and the maximum value is 2000.</p>
     */
    public $TriggerCount;

    /**
     * @var integer <p>Alarm repeat cycle. In minutes. Value ranges from 0 to 1440.</p>
     */
    public $AlarmPeriod;

    /**
     * @var array <p>Monitoring object list.</p>
     */
    public $AlarmTargets;

    /**
     * @var boolean <p>Whether to enable alarm policy.</p>
     */
    public $Status;

    /**
     * @var boolean <p>This parameter has been deprecated, please use the Status parameter to control whether to enable the alarm policy.</p>
     * @deprecated
     */
    public $Enable;

    /**
     * @var string <p>User-defined alarm content</p>
     */
    public $MessageTemplate;

    /**
     * @var CallBackInfo <p>user-defined callback</p>
     */
    public $CallBack;

    /**
     * @var array <p>Multi-dimensional analysis</p>
     */
    public $Analysis;

    /**
     * @var boolean <p>Group trigger status. true: enabled, false: disabled (default)</p>
     */
    public $GroupTriggerStatus;

    /**
     * @var array <p>Group trigger conditions.</p>
     */
    public $GroupTriggerCondition;

    /**
     * @var array <p>Tag description list, by specifying this parameter, you can simultaneously bind a tag to the corresponding alarm policy. Up to 10 tag key-value pairs are supported, and no duplicate key-value pairs are allowed.</p>
     */
    public $Tags;

    /**
     * @var integer <p>Monitored object type. 0: Common monitoring object for execution statements; 1: Each execution statement selects its own monitored object.<br>When the value is 1, the number of elements in AlarmTargets cannot exceed 10. The Number in AlarmTargets must be consecutive positive integers starting from 1 and must be unique.</p>
     */
    public $MonitorObjectType;

    /**
     * @var array <p>Alert additional classification information list.<br>Number of Classifications Elements cannot exceed 20.<br>The Key of Classifications elements cannot be empty, must be unique, length cannot exceed 50 characters, and complies with the regular expression <code>^[a-z]([a-z0-9_]{0,49})$</code>.<br>Value of Classifications elements cannot exceed 200 characters.</p>
     */
    public $Classifications;

    /**
     * @var array <p>List of associated CLS alarm notification channel groups. - Search the list of associated alarm notification channel groups via <a href="https://www.tencentcloud.com/document/product/614/56462?from_cn_redirect=1">Query notification channel group list</a>. It is mutually exclusive with MonitorNotice.</p>
     */
    public $AlarmNoticeIds;

    /**
     * @var MonitorNotice <p>The associated observability platform notification template is mutually exclusive with the AlarmNoticeIds parameter and cannot include both.</p>
     */
    public $MonitorNotice;

    /**
     * @param string $AlarmId <p>Alert policy ID. - Search the alert policy ID by <a href="https://www.tencentcloud.com/document/product/614/56461?from_cn_redirect=1">obtaining the alarm policy list</a>.</p>
     * @param string $Name <p>Alarm policy name. Supports a maximum of 255 bytes. The '|' character is unsupported.</p>
     * @param MonitorTime $MonitorTime <p>Monitoring task execution time point.</p>
     * @param string $Condition <p>Trigger condition for sending alarm information.</p><p>Note:</p><ul><li>Condition and AlarmLevel are one set of configurations, and MultiConditions is another set of configurations. The two sets are mutually exclusive.</li></ul>
     * @param integer $AlarmLevel <p>Alarm level.</p><p>0: Warning (Warn); 1: Reminder (Info); 2: Emergency (Critical)</p><p>Note:</p><ul><li>Condition and AlarmLevel are one set of configurations, and MultiConditions are another set of configurations. The two sets are mutually exclusive.</li></ul>
     * @param array $MultiConditions <p>Multiple trigger conditions.</p><p>Note:</p><ul><li>Condition and AlarmLevel are one set of configurations, and MultiConditions are another set of configurations. The two sets of configurations are mutually exclusive.</li></ul>
     * @param integer $TriggerCount <p>Duration cycle. An alarm is triggered after the trigger conditions are constantly met for TriggerCount cycles. The minimum value is 1, and the maximum value is 2000.</p>
     * @param integer $AlarmPeriod <p>Alarm repeat cycle. In minutes. Value ranges from 0 to 1440.</p>
     * @param array $AlarmTargets <p>Monitoring object list.</p>
     * @param boolean $Status <p>Whether to enable alarm policy.</p>
     * @param boolean $Enable <p>This parameter has been deprecated, please use the Status parameter to control whether to enable the alarm policy.</p>
     * @param string $MessageTemplate <p>User-defined alarm content</p>
     * @param CallBackInfo $CallBack <p>user-defined callback</p>
     * @param array $Analysis <p>Multi-dimensional analysis</p>
     * @param boolean $GroupTriggerStatus <p>Group trigger status. true: enabled, false: disabled (default)</p>
     * @param array $GroupTriggerCondition <p>Group trigger conditions.</p>
     * @param array $Tags <p>Tag description list, by specifying this parameter, you can simultaneously bind a tag to the corresponding alarm policy. Up to 10 tag key-value pairs are supported, and no duplicate key-value pairs are allowed.</p>
     * @param integer $MonitorObjectType <p>Monitored object type. 0: Common monitoring object for execution statements; 1: Each execution statement selects its own monitored object.<br>When the value is 1, the number of elements in AlarmTargets cannot exceed 10. The Number in AlarmTargets must be consecutive positive integers starting from 1 and must be unique.</p>
     * @param array $Classifications <p>Alert additional classification information list.<br>Number of Classifications Elements cannot exceed 20.<br>The Key of Classifications elements cannot be empty, must be unique, length cannot exceed 50 characters, and complies with the regular expression <code>^[a-z]([a-z0-9_]{0,49})$</code>.<br>Value of Classifications elements cannot exceed 200 characters.</p>
     * @param array $AlarmNoticeIds <p>List of associated CLS alarm notification channel groups. - Search the list of associated alarm notification channel groups via <a href="https://www.tencentcloud.com/document/product/614/56462?from_cn_redirect=1">Query notification channel group list</a>. It is mutually exclusive with MonitorNotice.</p>
     * @param MonitorNotice $MonitorNotice <p>The associated observability platform notification template is mutually exclusive with the AlarmNoticeIds parameter and cannot include both.</p>
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

        if (array_key_exists("AlarmNoticeIds",$param) and $param["AlarmNoticeIds"] !== null) {
            $this->AlarmNoticeIds = $param["AlarmNoticeIds"];
        }

        if (array_key_exists("MonitorNotice",$param) and $param["MonitorNotice"] !== null) {
            $this->MonitorNotice = new MonitorNotice();
            $this->MonitorNotice->deserialize($param["MonitorNotice"]);
        }
    }
}
