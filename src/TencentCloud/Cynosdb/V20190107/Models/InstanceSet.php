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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Instance information
 *
 * @method string getDbMode() Obtain Database schema
 * @method void setDbMode(string $DbMode) Set Database schema
 * @method integer getInstanceCpu() Obtain Number of CPU cores
 * @method void setInstanceCpu(integer $InstanceCpu) Set Number of CPU cores
 * @method string getInstanceDeviceType() Obtain Instance type
 * @method void setInstanceDeviceType(string $InstanceDeviceType) Set Instance type
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method integer getInstanceMemory() Obtain memory
 * @method void setInstanceMemory(integer $InstanceMemory) Set memory
 * @method string getInstanceName() Obtain Instance name.
 * @method void setInstanceName(string $InstanceName) Set Instance name.
 * @method string getInstanceRole() Obtain Instance role
 * @method void setInstanceRole(string $InstanceRole) Set Instance role
 * @method string getInstanceStatus() Obtain Instance status
 * @method void setInstanceStatus(string $InstanceStatus) Set Instance status
 * @method string getInstanceStatusDesc() Obtain Status description.
 * @method void setInstanceStatusDesc(string $InstanceStatusDesc) Set Status description.
 * @method integer getInstanceStorage() Obtain hard disk
 * @method void setInstanceStorage(integer $InstanceStorage) Set hard disk
 * @method string getInstanceStorageType() Obtain Hard disk type.
 * @method void setInstanceStorageType(string $InstanceStorageType) Set Hard disk type.
 * @method string getInstanceType() Obtain Engine type.
 * @method void setInstanceType(string $InstanceType) Set Engine type.
 * @method integer getMaintainDuration() Obtain Duration.
 * @method void setMaintainDuration(integer $MaintainDuration) Set Duration.
 * @method integer getMaintainStartTime() Obtain Execution start time (seconds from 00:00)
 * @method void setMaintainStartTime(integer $MaintainStartTime) Set Execution start time (seconds from 00:00)
 * @method array getMaintainWeekDays() Obtain The time when it can be executed. Enumeration value: ["Mon","Tue","Wed","Thu","Fri", "Sat", "Sun"].
 * @method void setMaintainWeekDays(array $MaintainWeekDays) Set The time when it can be executed. Enumeration value: ["Mon","Tue","Wed","Thu","Fri", "Sat", "Sun"].
 * @method array getNodeList() Obtain Node list
 * @method void setNodeList(array $NodeList) Set Node list
 * @method array getInstanceTasks() Obtain Instance task
 * @method void setInstanceTasks(array $InstanceTasks) Set Instance task
 */
class InstanceSet extends AbstractModel
{
    /**
     * @var string Database schema
     */
    public $DbMode;

    /**
     * @var integer Number of CPU cores
     */
    public $InstanceCpu;

    /**
     * @var string Instance type
     */
    public $InstanceDeviceType;

    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var integer memory
     */
    public $InstanceMemory;

    /**
     * @var string Instance name.
     */
    public $InstanceName;

    /**
     * @var string Instance role
     */
    public $InstanceRole;

    /**
     * @var string Instance status
     */
    public $InstanceStatus;

    /**
     * @var string Status description.
     */
    public $InstanceStatusDesc;

    /**
     * @var integer hard disk
     */
    public $InstanceStorage;

    /**
     * @var string Hard disk type.
     */
    public $InstanceStorageType;

    /**
     * @var string Engine type.
     */
    public $InstanceType;

    /**
     * @var integer Duration.
     */
    public $MaintainDuration;

    /**
     * @var integer Execution start time (seconds from 00:00)
     */
    public $MaintainStartTime;

    /**
     * @var array The time when it can be executed. Enumeration value: ["Mon","Tue","Wed","Thu","Fri", "Sat", "Sun"].
     */
    public $MaintainWeekDays;

    /**
     * @var array Node list
     */
    public $NodeList;

    /**
     * @var array Instance task
     */
    public $InstanceTasks;

    /**
     * @param string $DbMode Database schema
     * @param integer $InstanceCpu Number of CPU cores
     * @param string $InstanceDeviceType Instance type
     * @param string $InstanceId Instance ID.
     * @param integer $InstanceMemory memory
     * @param string $InstanceName Instance name.
     * @param string $InstanceRole Instance role
     * @param string $InstanceStatus Instance status
     * @param string $InstanceStatusDesc Status description.
     * @param integer $InstanceStorage hard disk
     * @param string $InstanceStorageType Hard disk type.
     * @param string $InstanceType Engine type.
     * @param integer $MaintainDuration Duration.
     * @param integer $MaintainStartTime Execution start time (seconds from 00:00)
     * @param array $MaintainWeekDays The time when it can be executed. Enumeration value: ["Mon","Tue","Wed","Thu","Fri", "Sat", "Sun"].
     * @param array $NodeList Node list
     * @param array $InstanceTasks Instance task
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
        if (array_key_exists("DbMode",$param) and $param["DbMode"] !== null) {
            $this->DbMode = $param["DbMode"];
        }

        if (array_key_exists("InstanceCpu",$param) and $param["InstanceCpu"] !== null) {
            $this->InstanceCpu = $param["InstanceCpu"];
        }

        if (array_key_exists("InstanceDeviceType",$param) and $param["InstanceDeviceType"] !== null) {
            $this->InstanceDeviceType = $param["InstanceDeviceType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceMemory",$param) and $param["InstanceMemory"] !== null) {
            $this->InstanceMemory = $param["InstanceMemory"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceRole",$param) and $param["InstanceRole"] !== null) {
            $this->InstanceRole = $param["InstanceRole"];
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("InstanceStatusDesc",$param) and $param["InstanceStatusDesc"] !== null) {
            $this->InstanceStatusDesc = $param["InstanceStatusDesc"];
        }

        if (array_key_exists("InstanceStorage",$param) and $param["InstanceStorage"] !== null) {
            $this->InstanceStorage = $param["InstanceStorage"];
        }

        if (array_key_exists("InstanceStorageType",$param) and $param["InstanceStorageType"] !== null) {
            $this->InstanceStorageType = $param["InstanceStorageType"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("MaintainDuration",$param) and $param["MaintainDuration"] !== null) {
            $this->MaintainDuration = $param["MaintainDuration"];
        }

        if (array_key_exists("MaintainStartTime",$param) and $param["MaintainStartTime"] !== null) {
            $this->MaintainStartTime = $param["MaintainStartTime"];
        }

        if (array_key_exists("MaintainWeekDays",$param) and $param["MaintainWeekDays"] !== null) {
            $this->MaintainWeekDays = $param["MaintainWeekDays"];
        }

        if (array_key_exists("NodeList",$param) and $param["NodeList"] !== null) {
            $this->NodeList = $param["NodeList"];
        }

        if (array_key_exists("InstanceTasks",$param) and $param["InstanceTasks"] !== null) {
            $this->InstanceTasks = [];
            foreach ($param["InstanceTasks"] as $key => $value){
                $obj = new ObjectTask();
                $obj->deserialize($value);
                array_push($this->InstanceTasks, $obj);
            }
        }
    }
}
