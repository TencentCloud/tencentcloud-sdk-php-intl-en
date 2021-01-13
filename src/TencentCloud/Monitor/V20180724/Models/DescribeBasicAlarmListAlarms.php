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
 * Alarms returned by DescribeBasicAlarmList
 *
 * @method integer getId() Obtain Alarm ID.
 * @method void setId(integer $Id) Set Alarm ID.
 * @method integer getProjectId() Obtain Project ID.
Note: This field may return null, indicating that no valid value was found.
 * @method void setProjectId(integer $ProjectId) Set Project ID.
Note: This field may return null, indicating that no valid value was found.
 * @method string getProjectName() Obtain Project name.
Note: This field may return null, indicating that no valid value was found.
 * @method void setProjectName(string $ProjectName) Set Project name.
Note: This field may return null, indicating that no valid value was found.
 * @method integer getStatus() Obtain Alarm status ID. Valid values: 0 (not resolved), 1 (resolved), 2/3/5 (insufficient data), 4 (expired)
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(integer $Status) Set Alarm status ID. Valid values: 0 (not resolved), 1 (resolved), 2/3/5 (insufficient data), 4 (expired)
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getAlarmStatus() Obtain Alarm status. Valid values: ALARM (not resolved), OK (resolved), NO_DATA (insufficient data), NO_CONF (expired)
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAlarmStatus(string $AlarmStatus) Set Alarm status. Valid values: ALARM (not resolved), OK (resolved), NO_DATA (insufficient data), NO_CONF (expired)
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getGroupId() Obtain Policy group ID.
Note: This field may return null, indicating that no valid value was found.
 * @method void setGroupId(integer $GroupId) Set Policy group ID.
Note: This field may return null, indicating that no valid value was found.
 * @method string getGroupName() Obtain Policy group name.
Note: This field may return null, indicating that no valid value was found.
 * @method void setGroupName(string $GroupName) Set Policy group name.
Note: This field may return null, indicating that no valid value was found.
 * @method string getFirstOccurTime() Obtain Occurrence time.
Note: This field may return null, indicating that no valid value was found.
 * @method void setFirstOccurTime(string $FirstOccurTime) Set Occurrence time.
Note: This field may return null, indicating that no valid value was found.
 * @method integer getDuration() Obtain Duration in seconds.
Note: This field may return null, indicating that no valid value was found.
 * @method void setDuration(integer $Duration) Set Duration in seconds.
Note: This field may return null, indicating that no valid value was found.
 * @method string getLastOccurTime() Obtain End time.
Note: This field may return null, indicating that no valid value was found.
 * @method void setLastOccurTime(string $LastOccurTime) Set End time.
Note: This field may return null, indicating that no valid value was found.
 * @method string getContent() Obtain Alarm content.
Note: This field may return null, indicating that no valid value was found.
 * @method void setContent(string $Content) Set Alarm content.
Note: This field may return null, indicating that no valid value was found.
 * @method string getObjName() Obtain Alarm object.
Note: This field may return null, indicating that no valid value was found.
 * @method void setObjName(string $ObjName) Set Alarm object.
Note: This field may return null, indicating that no valid value was found.
 * @method string getObjId() Obtain Alarm object ID.
Note: This field may return null, indicating that no valid value was found.
 * @method void setObjId(string $ObjId) Set Alarm object ID.
Note: This field may return null, indicating that no valid value was found.
 * @method string getViewName() Obtain Policy type.
Note: This field may return null, indicating that no valid value was found.
 * @method void setViewName(string $ViewName) Set Policy type.
Note: This field may return null, indicating that no valid value was found.
 * @method string getVpc() Obtain VPC, which is unique to CVM.
Note: This field may return null, indicating that no valid value was found.
 * @method void setVpc(string $Vpc) Set VPC, which is unique to CVM.
Note: This field may return null, indicating that no valid value was found.
 * @method integer getMetricId() Obtain Metric ID.
Note: This field may return null, indicating that no valid value was found.
 * @method void setMetricId(integer $MetricId) Set Metric ID.
Note: This field may return null, indicating that no valid value was found.
 * @method string getMetricName() Obtain Metric name.
Note: This field may return null, indicating that no valid value was found.
 * @method void setMetricName(string $MetricName) Set Metric name.
Note: This field may return null, indicating that no valid value was found.
 * @method integer getAlarmType() Obtain Alarm type. The value 0 indicates metric alarms. The value 2 indicates product event alarms. The value 3 indicates platform event alarms.
Note: This field may return null, indicating that no valid value was found.
 * @method void setAlarmType(integer $AlarmType) Set Alarm type. The value 0 indicates metric alarms. The value 2 indicates product event alarms. The value 3 indicates platform event alarms.
Note: This field may return null, indicating that no valid value was found.
 * @method string getRegion() Obtain Region.
Note: This field may return null, indicating that no valid value was found.
 * @method void setRegion(string $Region) Set Region.
Note: This field may return null, indicating that no valid value was found.
 * @method string getDimensions() Obtain Dimensions of an alarm object.
Note: This field may return null, indicating that no valid value was found.
 * @method void setDimensions(string $Dimensions) Set Dimensions of an alarm object.
Note: This field may return null, indicating that no valid value was found.
 * @method array getNotifyWay() Obtain Notification method.
Note: This field may return null, indicating that no valid value was found.
 * @method void setNotifyWay(array $NotifyWay) Set Notification method.
Note: This field may return null, indicating that no valid value was found.
 * @method array getInstanceGroup() Obtain Instance group information.
Note: This field may return null, indicating that no valid value was found.
 * @method void setInstanceGroup(array $InstanceGroup) Set Instance group information.
Note: This field may return null, indicating that no valid value was found.
 */
class DescribeBasicAlarmListAlarms extends AbstractModel
{
    /**
     * @var integer Alarm ID.
     */
    public $Id;

    /**
     * @var integer Project ID.
Note: This field may return null, indicating that no valid value was found.
     */
    public $ProjectId;

    /**
     * @var string Project name.
Note: This field may return null, indicating that no valid value was found.
     */
    public $ProjectName;

    /**
     * @var integer Alarm status ID. Valid values: 0 (not resolved), 1 (resolved), 2/3/5 (insufficient data), 4 (expired)
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var string Alarm status. Valid values: ALARM (not resolved), OK (resolved), NO_DATA (insufficient data), NO_CONF (expired)
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AlarmStatus;

    /**
     * @var integer Policy group ID.
Note: This field may return null, indicating that no valid value was found.
     */
    public $GroupId;

    /**
     * @var string Policy group name.
Note: This field may return null, indicating that no valid value was found.
     */
    public $GroupName;

    /**
     * @var string Occurrence time.
Note: This field may return null, indicating that no valid value was found.
     */
    public $FirstOccurTime;

    /**
     * @var integer Duration in seconds.
Note: This field may return null, indicating that no valid value was found.
     */
    public $Duration;

    /**
     * @var string End time.
Note: This field may return null, indicating that no valid value was found.
     */
    public $LastOccurTime;

    /**
     * @var string Alarm content.
Note: This field may return null, indicating that no valid value was found.
     */
    public $Content;

    /**
     * @var string Alarm object.
Note: This field may return null, indicating that no valid value was found.
     */
    public $ObjName;

    /**
     * @var string Alarm object ID.
Note: This field may return null, indicating that no valid value was found.
     */
    public $ObjId;

    /**
     * @var string Policy type.
Note: This field may return null, indicating that no valid value was found.
     */
    public $ViewName;

    /**
     * @var string VPC, which is unique to CVM.
Note: This field may return null, indicating that no valid value was found.
     */
    public $Vpc;

    /**
     * @var integer Metric ID.
Note: This field may return null, indicating that no valid value was found.
     */
    public $MetricId;

    /**
     * @var string Metric name.
Note: This field may return null, indicating that no valid value was found.
     */
    public $MetricName;

    /**
     * @var integer Alarm type. The value 0 indicates metric alarms. The value 2 indicates product event alarms. The value 3 indicates platform event alarms.
Note: This field may return null, indicating that no valid value was found.
     */
    public $AlarmType;

    /**
     * @var string Region.
Note: This field may return null, indicating that no valid value was found.
     */
    public $Region;

    /**
     * @var string Dimensions of an alarm object.
Note: This field may return null, indicating that no valid value was found.
     */
    public $Dimensions;

    /**
     * @var array Notification method.
Note: This field may return null, indicating that no valid value was found.
     */
    public $NotifyWay;

    /**
     * @var array Instance group information.
Note: This field may return null, indicating that no valid value was found.
     */
    public $InstanceGroup;

    /**
     * @param integer $Id Alarm ID.
     * @param integer $ProjectId Project ID.
Note: This field may return null, indicating that no valid value was found.
     * @param string $ProjectName Project name.
Note: This field may return null, indicating that no valid value was found.
     * @param integer $Status Alarm status ID. Valid values: 0 (not resolved), 1 (resolved), 2/3/5 (insufficient data), 4 (expired)
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $AlarmStatus Alarm status. Valid values: ALARM (not resolved), OK (resolved), NO_DATA (insufficient data), NO_CONF (expired)
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $GroupId Policy group ID.
Note: This field may return null, indicating that no valid value was found.
     * @param string $GroupName Policy group name.
Note: This field may return null, indicating that no valid value was found.
     * @param string $FirstOccurTime Occurrence time.
Note: This field may return null, indicating that no valid value was found.
     * @param integer $Duration Duration in seconds.
Note: This field may return null, indicating that no valid value was found.
     * @param string $LastOccurTime End time.
Note: This field may return null, indicating that no valid value was found.
     * @param string $Content Alarm content.
Note: This field may return null, indicating that no valid value was found.
     * @param string $ObjName Alarm object.
Note: This field may return null, indicating that no valid value was found.
     * @param string $ObjId Alarm object ID.
Note: This field may return null, indicating that no valid value was found.
     * @param string $ViewName Policy type.
Note: This field may return null, indicating that no valid value was found.
     * @param string $Vpc VPC, which is unique to CVM.
Note: This field may return null, indicating that no valid value was found.
     * @param integer $MetricId Metric ID.
Note: This field may return null, indicating that no valid value was found.
     * @param string $MetricName Metric name.
Note: This field may return null, indicating that no valid value was found.
     * @param integer $AlarmType Alarm type. The value 0 indicates metric alarms. The value 2 indicates product event alarms. The value 3 indicates platform event alarms.
Note: This field may return null, indicating that no valid value was found.
     * @param string $Region Region.
Note: This field may return null, indicating that no valid value was found.
     * @param string $Dimensions Dimensions of an alarm object.
Note: This field may return null, indicating that no valid value was found.
     * @param array $NotifyWay Notification method.
Note: This field may return null, indicating that no valid value was found.
     * @param array $InstanceGroup Instance group information.
Note: This field may return null, indicating that no valid value was found.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AlarmStatus",$param) and $param["AlarmStatus"] !== null) {
            $this->AlarmStatus = $param["AlarmStatus"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("FirstOccurTime",$param) and $param["FirstOccurTime"] !== null) {
            $this->FirstOccurTime = $param["FirstOccurTime"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("LastOccurTime",$param) and $param["LastOccurTime"] !== null) {
            $this->LastOccurTime = $param["LastOccurTime"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("ObjName",$param) and $param["ObjName"] !== null) {
            $this->ObjName = $param["ObjName"];
        }

        if (array_key_exists("ObjId",$param) and $param["ObjId"] !== null) {
            $this->ObjId = $param["ObjId"];
        }

        if (array_key_exists("ViewName",$param) and $param["ViewName"] !== null) {
            $this->ViewName = $param["ViewName"];
        }

        if (array_key_exists("Vpc",$param) and $param["Vpc"] !== null) {
            $this->Vpc = $param["Vpc"];
        }

        if (array_key_exists("MetricId",$param) and $param["MetricId"] !== null) {
            $this->MetricId = $param["MetricId"];
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("AlarmType",$param) and $param["AlarmType"] !== null) {
            $this->AlarmType = $param["AlarmType"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Dimensions",$param) and $param["Dimensions"] !== null) {
            $this->Dimensions = $param["Dimensions"];
        }

        if (array_key_exists("NotifyWay",$param) and $param["NotifyWay"] !== null) {
            $this->NotifyWay = $param["NotifyWay"];
        }

        if (array_key_exists("InstanceGroup",$param) and $param["InstanceGroup"] !== null) {
            $this->InstanceGroup = [];
            foreach ($param["InstanceGroup"] as $key => $value){
                $obj = new InstanceGroup();
                $obj->deserialize($value);
                array_push($this->InstanceGroup, $obj);
            }
        }
    }
}
