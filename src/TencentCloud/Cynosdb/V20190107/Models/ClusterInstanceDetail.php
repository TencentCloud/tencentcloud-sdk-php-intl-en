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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cluster instance information
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getInstanceName() Obtain Instance name
 * @method void setInstanceName(string $InstanceName) Set Instance name
 * @method string getInstanceType() Obtain Engine type
 * @method void setInstanceType(string $InstanceType) Set Engine type
 * @method string getInstanceStatus() Obtain Instance status
 * @method void setInstanceStatus(string $InstanceStatus) Set Instance status
 * @method string getInstanceStatusDesc() Obtain Instance status description
 * @method void setInstanceStatusDesc(string $InstanceStatusDesc) Set Instance status description
 * @method integer getInstanceCpu() Obtain Number of CPU cores
 * @method void setInstanceCpu(integer $InstanceCpu) Set Number of CPU cores
 * @method integer getInstanceMemory() Obtain Memory
 * @method void setInstanceMemory(integer $InstanceMemory) Set Memory
 * @method integer getInstanceStorage() Obtain Disk
 * @method void setInstanceStorage(integer $InstanceStorage) Set Disk
 * @method string getInstanceRole() Obtain Instance role
 * @method void setInstanceRole(string $InstanceRole) Set Instance role
 * @method integer getMaintainStartTime() Obtain Execution start time in seconds from 0:00	
Note: u200dThis field may return null, indicating that no valid values can be obtained.
 * @method void setMaintainStartTime(integer $MaintainStartTime) Set Execution start time in seconds from 0:00	
Note: u200dThis field may return null, indicating that no valid values can be obtained.
 * @method integer getMaintainDuration() Obtain Duration in seconds	
Note: u200dThis field may return null, indicating that no valid values can be obtained.
 * @method void setMaintainDuration(integer $MaintainDuration) Set Duration in seconds	
Note: u200dThis field may return null, indicating that no valid values can be obtained.
 * @method array getMaintainWeekDays() Obtain Execution time. Valid values: `Mon`, `Tue`, `Wed`, `Thu`, `Fri`, Sat`, `Sun`.
Note: u200dThis field may return null, indicating that no valid values can be obtained.
 * @method void setMaintainWeekDays(array $MaintainWeekDays) Set Execution time. Valid values: `Mon`, `Tue`, `Wed`, `Thu`, `Fri`, Sat`, `Sun`.
Note: u200dThis field may return null, indicating that no valid values can be obtained.
 * @method string getServerlessStatus() Obtain 
 * @method void setServerlessStatus(string $ServerlessStatus) Set 
 */
class ClusterInstanceDetail extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Instance name
     */
    public $InstanceName;

    /**
     * @var string Engine type
     */
    public $InstanceType;

    /**
     * @var string Instance status
     */
    public $InstanceStatus;

    /**
     * @var string Instance status description
     */
    public $InstanceStatusDesc;

    /**
     * @var integer Number of CPU cores
     */
    public $InstanceCpu;

    /**
     * @var integer Memory
     */
    public $InstanceMemory;

    /**
     * @var integer Disk
     */
    public $InstanceStorage;

    /**
     * @var string Instance role
     */
    public $InstanceRole;

    /**
     * @var integer Execution start time in seconds from 0:00	
Note: u200dThis field may return null, indicating that no valid values can be obtained.
     */
    public $MaintainStartTime;

    /**
     * @var integer Duration in seconds	
Note: u200dThis field may return null, indicating that no valid values can be obtained.
     */
    public $MaintainDuration;

    /**
     * @var array Execution time. Valid values: `Mon`, `Tue`, `Wed`, `Thu`, `Fri`, Sat`, `Sun`.
Note: u200dThis field may return null, indicating that no valid values can be obtained.
     */
    public $MaintainWeekDays;

    /**
     * @var string 
     */
    public $ServerlessStatus;

    /**
     * @param string $InstanceId Instance ID
     * @param string $InstanceName Instance name
     * @param string $InstanceType Engine type
     * @param string $InstanceStatus Instance status
     * @param string $InstanceStatusDesc Instance status description
     * @param integer $InstanceCpu Number of CPU cores
     * @param integer $InstanceMemory Memory
     * @param integer $InstanceStorage Disk
     * @param string $InstanceRole Instance role
     * @param integer $MaintainStartTime Execution start time in seconds from 0:00	
Note: u200dThis field may return null, indicating that no valid values can be obtained.
     * @param integer $MaintainDuration Duration in seconds	
Note: u200dThis field may return null, indicating that no valid values can be obtained.
     * @param array $MaintainWeekDays Execution time. Valid values: `Mon`, `Tue`, `Wed`, `Thu`, `Fri`, Sat`, `Sun`.
Note: u200dThis field may return null, indicating that no valid values can be obtained.
     * @param string $ServerlessStatus 
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

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("InstanceStatusDesc",$param) and $param["InstanceStatusDesc"] !== null) {
            $this->InstanceStatusDesc = $param["InstanceStatusDesc"];
        }

        if (array_key_exists("InstanceCpu",$param) and $param["InstanceCpu"] !== null) {
            $this->InstanceCpu = $param["InstanceCpu"];
        }

        if (array_key_exists("InstanceMemory",$param) and $param["InstanceMemory"] !== null) {
            $this->InstanceMemory = $param["InstanceMemory"];
        }

        if (array_key_exists("InstanceStorage",$param) and $param["InstanceStorage"] !== null) {
            $this->InstanceStorage = $param["InstanceStorage"];
        }

        if (array_key_exists("InstanceRole",$param) and $param["InstanceRole"] !== null) {
            $this->InstanceRole = $param["InstanceRole"];
        }

        if (array_key_exists("MaintainStartTime",$param) and $param["MaintainStartTime"] !== null) {
            $this->MaintainStartTime = $param["MaintainStartTime"];
        }

        if (array_key_exists("MaintainDuration",$param) and $param["MaintainDuration"] !== null) {
            $this->MaintainDuration = $param["MaintainDuration"];
        }

        if (array_key_exists("MaintainWeekDays",$param) and $param["MaintainWeekDays"] !== null) {
            $this->MaintainWeekDays = $param["MaintainWeekDays"];
        }

        if (array_key_exists("ServerlessStatus",$param) and $param["ServerlessStatus"] !== null) {
            $this->ServerlessStatus = $param["ServerlessStatus"];
        }
    }
}
