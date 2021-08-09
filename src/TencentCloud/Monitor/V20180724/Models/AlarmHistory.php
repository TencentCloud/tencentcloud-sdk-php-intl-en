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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Alarm record data
 *
 * @method string getAlarmId() Obtain Alarm record ID
 * @method void setAlarmId(string $AlarmId) Set Alarm record ID
 * @method string getMonitorType() Obtain Monitor type
 * @method void setMonitorType(string $MonitorType) Set Monitor type
 * @method string getNamespace() Obtain Policy type
 * @method void setNamespace(string $Namespace) Set Policy type
 * @method string getAlarmObject() Obtain Alarm object
 * @method void setAlarmObject(string $AlarmObject) Set Alarm object
 * @method string getContent() Obtain Alarm content
 * @method void setContent(string $Content) Set Alarm content
 * @method integer getFirstOccurTime() Obtain Timestamp of the first occurrence
 * @method void setFirstOccurTime(integer $FirstOccurTime) Set Timestamp of the first occurrence
 * @method integer getLastOccurTime() Obtain Timestamp of the last occurrence
 * @method void setLastOccurTime(integer $LastOccurTime) Set Timestamp of the last occurrence
 * @method string getAlarmStatus() Obtain Alarm status. Valid values: ALARM (not resolved), OK (resolved), NO_CONF (expired), NO_DATA (insufficient data)
 * @method void setAlarmStatus(string $AlarmStatus) Set Alarm status. Valid values: ALARM (not resolved), OK (resolved), NO_CONF (expired), NO_DATA (insufficient data)
 * @method string getPolicyId() Obtain Alarm policy ID
 * @method void setPolicyId(string $PolicyId) Set Alarm policy ID
 * @method string getPolicyName() Obtain Policy name
 * @method void setPolicyName(string $PolicyName) Set Policy name
 * @method string getVPC() Obtain VPC of alarm object for basic product alarm
 * @method void setVPC(string $VPC) Set VPC of alarm object for basic product alarm
 * @method integer getProjectId() Obtain Project ID
 * @method void setProjectId(integer $ProjectId) Set Project ID
 * @method string getProjectName() Obtain Project name
 * @method void setProjectName(string $ProjectName) Set Project name
 * @method array getInstanceGroup() Obtain Instance group of alarm object
 * @method void setInstanceGroup(array $InstanceGroup) Set Instance group of alarm object
 * @method array getReceiverUids() Obtain Recipient list
 * @method void setReceiverUids(array $ReceiverUids) Set Recipient list
 * @method array getReceiverGroups() Obtain Recipient group list
 * @method void setReceiverGroups(array $ReceiverGroups) Set Recipient group list
 * @method array getNoticeWays() Obtain Alarm channel list. Valid values: SMS (SMS), EMAIL (email), CALL (phone), WECHAT (WeChat)
 * @method void setNoticeWays(array $NoticeWays) Set Alarm channel list. Valid values: SMS (SMS), EMAIL (email), CALL (phone), WECHAT (WeChat)
 * @method string getOriginId() Obtain Alarm policy ID, which can be used when you call APIs ([BindingPolicyObject](https://intl.cloud.tencent.com/document/product/248/40421?from_cn_redirect=1), [UnBindingAllPolicyObject](https://intl.cloud.tencent.com/document/product/248/40568?from_cn_redirect=1), [UnBindingPolicyObject](https://intl.cloud.tencent.com/document/product/248/40567?from_cn_redirect=1)) to bind/unbind instances or instance groups to/from an alarm policy
 * @method void setOriginId(string $OriginId) Set Alarm policy ID, which can be used when you call APIs ([BindingPolicyObject](https://intl.cloud.tencent.com/document/product/248/40421?from_cn_redirect=1), [UnBindingAllPolicyObject](https://intl.cloud.tencent.com/document/product/248/40568?from_cn_redirect=1), [UnBindingPolicyObject](https://intl.cloud.tencent.com/document/product/248/40567?from_cn_redirect=1)) to bind/unbind instances or instance groups to/from an alarm policy
 * @method string getAlarmType() Obtain Alarm type
 * @method void setAlarmType(string $AlarmType) Set Alarm type
 * @method integer getEventId() Obtain Event ID
 * @method void setEventId(integer $EventId) Set Event ID
 * @method string getRegion() Obtain Region
 * @method void setRegion(string $Region) Set Region
 * @method integer getPolicyExists() Obtain Whether the policy exists. Valid values: 0 (no), 1 (yes)
 * @method void setPolicyExists(integer $PolicyExists) Set Whether the policy exists. Valid values: 0 (no), 1 (yes)
 * @method array getMetricsInfo() Obtain Metric information
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setMetricsInfo(array $MetricsInfo) Set Metric information
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getDimensions() Obtain Dimension information of an instance that triggered alarms.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setDimensions(string $Dimensions) Set Dimension information of an instance that triggered alarms.
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class AlarmHistory extends AbstractModel
{
    /**
     * @var string Alarm record ID
     */
    public $AlarmId;

    /**
     * @var string Monitor type
     */
    public $MonitorType;

    /**
     * @var string Policy type
     */
    public $Namespace;

    /**
     * @var string Alarm object
     */
    public $AlarmObject;

    /**
     * @var string Alarm content
     */
    public $Content;

    /**
     * @var integer Timestamp of the first occurrence
     */
    public $FirstOccurTime;

    /**
     * @var integer Timestamp of the last occurrence
     */
    public $LastOccurTime;

    /**
     * @var string Alarm status. Valid values: ALARM (not resolved), OK (resolved), NO_CONF (expired), NO_DATA (insufficient data)
     */
    public $AlarmStatus;

    /**
     * @var string Alarm policy ID
     */
    public $PolicyId;

    /**
     * @var string Policy name
     */
    public $PolicyName;

    /**
     * @var string VPC of alarm object for basic product alarm
     */
    public $VPC;

    /**
     * @var integer Project ID
     */
    public $ProjectId;

    /**
     * @var string Project name
     */
    public $ProjectName;

    /**
     * @var array Instance group of alarm object
     */
    public $InstanceGroup;

    /**
     * @var array Recipient list
     */
    public $ReceiverUids;

    /**
     * @var array Recipient group list
     */
    public $ReceiverGroups;

    /**
     * @var array Alarm channel list. Valid values: SMS (SMS), EMAIL (email), CALL (phone), WECHAT (WeChat)
     */
    public $NoticeWays;

    /**
     * @var string Alarm policy ID, which can be used when you call APIs ([BindingPolicyObject](https://intl.cloud.tencent.com/document/product/248/40421?from_cn_redirect=1), [UnBindingAllPolicyObject](https://intl.cloud.tencent.com/document/product/248/40568?from_cn_redirect=1), [UnBindingPolicyObject](https://intl.cloud.tencent.com/document/product/248/40567?from_cn_redirect=1)) to bind/unbind instances or instance groups to/from an alarm policy
     */
    public $OriginId;

    /**
     * @var string Alarm type
     */
    public $AlarmType;

    /**
     * @var integer Event ID
     */
    public $EventId;

    /**
     * @var string Region
     */
    public $Region;

    /**
     * @var integer Whether the policy exists. Valid values: 0 (no), 1 (yes)
     */
    public $PolicyExists;

    /**
     * @var array Metric information
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $MetricsInfo;

    /**
     * @var string Dimension information of an instance that triggered alarms.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Dimensions;

    /**
     * @param string $AlarmId Alarm record ID
     * @param string $MonitorType Monitor type
     * @param string $Namespace Policy type
     * @param string $AlarmObject Alarm object
     * @param string $Content Alarm content
     * @param integer $FirstOccurTime Timestamp of the first occurrence
     * @param integer $LastOccurTime Timestamp of the last occurrence
     * @param string $AlarmStatus Alarm status. Valid values: ALARM (not resolved), OK (resolved), NO_CONF (expired), NO_DATA (insufficient data)
     * @param string $PolicyId Alarm policy ID
     * @param string $PolicyName Policy name
     * @param string $VPC VPC of alarm object for basic product alarm
     * @param integer $ProjectId Project ID
     * @param string $ProjectName Project name
     * @param array $InstanceGroup Instance group of alarm object
     * @param array $ReceiverUids Recipient list
     * @param array $ReceiverGroups Recipient group list
     * @param array $NoticeWays Alarm channel list. Valid values: SMS (SMS), EMAIL (email), CALL (phone), WECHAT (WeChat)
     * @param string $OriginId Alarm policy ID, which can be used when you call APIs ([BindingPolicyObject](https://intl.cloud.tencent.com/document/product/248/40421?from_cn_redirect=1), [UnBindingAllPolicyObject](https://intl.cloud.tencent.com/document/product/248/40568?from_cn_redirect=1), [UnBindingPolicyObject](https://intl.cloud.tencent.com/document/product/248/40567?from_cn_redirect=1)) to bind/unbind instances or instance groups to/from an alarm policy
     * @param string $AlarmType Alarm type
     * @param integer $EventId Event ID
     * @param string $Region Region
     * @param integer $PolicyExists Whether the policy exists. Valid values: 0 (no), 1 (yes)
     * @param array $MetricsInfo Metric information
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $Dimensions Dimension information of an instance that triggered alarms.
Note: this field may return `null`, indicating that no valid values can be obtained.
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

        if (array_key_exists("MonitorType",$param) and $param["MonitorType"] !== null) {
            $this->MonitorType = $param["MonitorType"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("AlarmObject",$param) and $param["AlarmObject"] !== null) {
            $this->AlarmObject = $param["AlarmObject"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("FirstOccurTime",$param) and $param["FirstOccurTime"] !== null) {
            $this->FirstOccurTime = $param["FirstOccurTime"];
        }

        if (array_key_exists("LastOccurTime",$param) and $param["LastOccurTime"] !== null) {
            $this->LastOccurTime = $param["LastOccurTime"];
        }

        if (array_key_exists("AlarmStatus",$param) and $param["AlarmStatus"] !== null) {
            $this->AlarmStatus = $param["AlarmStatus"];
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("VPC",$param) and $param["VPC"] !== null) {
            $this->VPC = $param["VPC"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("InstanceGroup",$param) and $param["InstanceGroup"] !== null) {
            $this->InstanceGroup = [];
            foreach ($param["InstanceGroup"] as $key => $value){
                $obj = new InstanceGroups();
                $obj->deserialize($value);
                array_push($this->InstanceGroup, $obj);
            }
        }

        if (array_key_exists("ReceiverUids",$param) and $param["ReceiverUids"] !== null) {
            $this->ReceiverUids = $param["ReceiverUids"];
        }

        if (array_key_exists("ReceiverGroups",$param) and $param["ReceiverGroups"] !== null) {
            $this->ReceiverGroups = $param["ReceiverGroups"];
        }

        if (array_key_exists("NoticeWays",$param) and $param["NoticeWays"] !== null) {
            $this->NoticeWays = $param["NoticeWays"];
        }

        if (array_key_exists("OriginId",$param) and $param["OriginId"] !== null) {
            $this->OriginId = $param["OriginId"];
        }

        if (array_key_exists("AlarmType",$param) and $param["AlarmType"] !== null) {
            $this->AlarmType = $param["AlarmType"];
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("PolicyExists",$param) and $param["PolicyExists"] !== null) {
            $this->PolicyExists = $param["PolicyExists"];
        }

        if (array_key_exists("MetricsInfo",$param) and $param["MetricsInfo"] !== null) {
            $this->MetricsInfo = [];
            foreach ($param["MetricsInfo"] as $key => $value){
                $obj = new AlarmHistoryMetric();
                $obj->deserialize($value);
                array_push($this->MetricsInfo, $obj);
            }
        }

        if (array_key_exists("Dimensions",$param) and $param["Dimensions"] !== null) {
            $this->Dimensions = $param["Dimensions"];
        }
    }
}
