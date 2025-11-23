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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyRoutineMaintenanceTask request structure.
 *
 * @method string getInstanceId() Obtain Specifies the ckafka cluster instance id. can be obtained through the [DescribeInstances](https://www.tencentcloud.comom/document/product/597/40835?from_cn_redirect=1) api.
 * @method void setInstanceId(string $InstanceId) Set Specifies the ckafka cluster instance id. can be obtained through the [DescribeInstances](https://www.tencentcloud.comom/document/product/597/40835?from_cn_redirect=1) api.
 * @method string getMaintenanceType() Obtain Automated operation and maintenance category. valid values: QUOTA, ANALYSIS, RE_BALANCE, ELASTIC_BANDWIDTH.
 * @method void setMaintenanceType(string $MaintenanceType) Set Automated operation and maintenance category. valid values: QUOTA, ANALYSIS, RE_BALANCE, ELASTIC_BANDWIDTH.
 * @method string getMaintenanceSubtype() Obtain INSTANCE_STORAGE_CAPACITY (automatic disk scale-out)/MESSAGE_RETENTION_PERIOD (dynamic MESSAGE RETENTION policy).
 * @method void setMaintenanceSubtype(string $MaintenanceSubtype) Set INSTANCE_STORAGE_CAPACITY (automatic disk scale-out)/MESSAGE_RETENTION_PERIOD (dynamic MESSAGE RETENTION policy).
 * @method string getTopicName() Obtain Topic name
 * @method void setTopicName(string $TopicName) Set Topic name
 * @method integer getConfigureThreshold() Obtain Task trigger threshold.
 * @method void setConfigureThreshold(integer $ConfigureThreshold) Set Task trigger threshold.
 * @method integer getConfigureStepSize() Obtain Specifies the step length for task adjustment.
 * @method void setConfigureStepSize(integer $ConfigureStepSize) Set Specifies the step length for task adjustment.
 * @method integer getConfigureLimit() Obtain Task adjustment upper limit.
 * @method void setConfigureLimit(integer $ConfigureLimit) Set Task adjustment upper limit.
 * @method integer getPlannedTime() Obtain Specifies the expected trigger time of the task, storing the offset in seconds from 0 AM of the current day.
 * @method void setPlannedTime(integer $PlannedTime) Set Specifies the expected trigger time of the task, storing the offset in seconds from 0 AM of the current day.
 * @method string getExtraConfig() Obtain Additional task information.
 * @method void setExtraConfig(string $ExtraConfig) Set Additional task information.
 * @method integer getStatus() Obtain Task status. 0: enabled, 1: disabled.
 * @method void setStatus(integer $Status) Set Task status. 0: enabled, 1: disabled.
 * @method string getWeek() Obtain Specifies the day of the week.
 * @method void setWeek(string $Week) Set Specifies the day of the week.
 */
class ModifyRoutineMaintenanceTaskRequest extends AbstractModel
{
    /**
     * @var string Specifies the ckafka cluster instance id. can be obtained through the [DescribeInstances](https://www.tencentcloud.comom/document/product/597/40835?from_cn_redirect=1) api.
     */
    public $InstanceId;

    /**
     * @var string Automated operation and maintenance category. valid values: QUOTA, ANALYSIS, RE_BALANCE, ELASTIC_BANDWIDTH.
     */
    public $MaintenanceType;

    /**
     * @var string INSTANCE_STORAGE_CAPACITY (automatic disk scale-out)/MESSAGE_RETENTION_PERIOD (dynamic MESSAGE RETENTION policy).
     */
    public $MaintenanceSubtype;

    /**
     * @var string Topic name
     */
    public $TopicName;

    /**
     * @var integer Task trigger threshold.
     */
    public $ConfigureThreshold;

    /**
     * @var integer Specifies the step length for task adjustment.
     */
    public $ConfigureStepSize;

    /**
     * @var integer Task adjustment upper limit.
     */
    public $ConfigureLimit;

    /**
     * @var integer Specifies the expected trigger time of the task, storing the offset in seconds from 0 AM of the current day.
     */
    public $PlannedTime;

    /**
     * @var string Additional task information.
     */
    public $ExtraConfig;

    /**
     * @var integer Task status. 0: enabled, 1: disabled.
     */
    public $Status;

    /**
     * @var string Specifies the day of the week.
     */
    public $Week;

    /**
     * @param string $InstanceId Specifies the ckafka cluster instance id. can be obtained through the [DescribeInstances](https://www.tencentcloud.comom/document/product/597/40835?from_cn_redirect=1) api.
     * @param string $MaintenanceType Automated operation and maintenance category. valid values: QUOTA, ANALYSIS, RE_BALANCE, ELASTIC_BANDWIDTH.
     * @param string $MaintenanceSubtype INSTANCE_STORAGE_CAPACITY (automatic disk scale-out)/MESSAGE_RETENTION_PERIOD (dynamic MESSAGE RETENTION policy).
     * @param string $TopicName Topic name
     * @param integer $ConfigureThreshold Task trigger threshold.
     * @param integer $ConfigureStepSize Specifies the step length for task adjustment.
     * @param integer $ConfigureLimit Task adjustment upper limit.
     * @param integer $PlannedTime Specifies the expected trigger time of the task, storing the offset in seconds from 0 AM of the current day.
     * @param string $ExtraConfig Additional task information.
     * @param integer $Status Task status. 0: enabled, 1: disabled.
     * @param string $Week Specifies the day of the week.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("MaintenanceType",$param) and $param["MaintenanceType"] !== null) {
            $this->MaintenanceType = $param["MaintenanceType"];
        }

        if (array_key_exists("MaintenanceSubtype",$param) and $param["MaintenanceSubtype"] !== null) {
            $this->MaintenanceSubtype = $param["MaintenanceSubtype"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("ConfigureThreshold",$param) and $param["ConfigureThreshold"] !== null) {
            $this->ConfigureThreshold = $param["ConfigureThreshold"];
        }

        if (array_key_exists("ConfigureStepSize",$param) and $param["ConfigureStepSize"] !== null) {
            $this->ConfigureStepSize = $param["ConfigureStepSize"];
        }

        if (array_key_exists("ConfigureLimit",$param) and $param["ConfigureLimit"] !== null) {
            $this->ConfigureLimit = $param["ConfigureLimit"];
        }

        if (array_key_exists("PlannedTime",$param) and $param["PlannedTime"] !== null) {
            $this->PlannedTime = $param["PlannedTime"];
        }

        if (array_key_exists("ExtraConfig",$param) and $param["ExtraConfig"] !== null) {
            $this->ExtraConfig = $param["ExtraConfig"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Week",$param) and $param["Week"] !== null) {
            $this->Week = $param["Week"];
        }
    }
}
