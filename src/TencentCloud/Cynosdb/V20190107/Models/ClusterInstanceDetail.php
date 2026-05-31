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
 * Cluster instance information
 *
 * @method string getInstanceId() Obtain <p>Instance ID.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID.</p>
 * @method string getInstanceName() Obtain <p>Instance name</p>
 * @method void setInstanceName(string $InstanceName) Set <p>Instance name</p>
 * @method string getInstanceType() Obtain <p>Engine type</p>
 * @method void setInstanceType(string $InstanceType) Set <p>Engine type</p>
 * @method string getInstanceStatus() Obtain <p>Instance status</p>
 * @method void setInstanceStatus(string $InstanceStatus) Set <p>Instance status</p>
 * @method string getInstanceStatusDesc() Obtain <p>Instance status description</p>
 * @method void setInstanceStatusDesc(string $InstanceStatusDesc) Set <p>Instance status description</p>
 * @method integer getInstanceCpu() Obtain <p>cpu cores</p>
 * @method void setInstanceCpu(integer $InstanceCpu) Set <p>cpu cores</p>
 * @method integer getInstanceMemory() Obtain <p>Memory</p>
 * @method void setInstanceMemory(integer $InstanceMemory) Set <p>Memory</p>
 * @method integer getInstanceStorage() Obtain <p>hard disk</p>
 * @method void setInstanceStorage(integer $InstanceStorage) Set <p>hard disk</p>
 * @method string getInstanceRole() Obtain <p>Instance role</p>
 * @method void setInstanceRole(string $InstanceRole) Set <p>Instance role</p>
 * @method integer getMaintainStartTime() Obtain <p>Execution start time (seconds from 00:00).</p>
 * @method void setMaintainStartTime(integer $MaintainStartTime) Set <p>Execution start time (seconds from 00:00).</p>
 * @method integer getMaintainDuration() Obtain <p>Duration (unit: s)</p>
 * @method void setMaintainDuration(integer $MaintainDuration) Set <p>Duration (unit: s)</p>
 * @method array getMaintainWeekDays() Obtain <p>The time when it can be executed, enumeration value: ["Mon","Tue","Wed","Thu","Fri", "Sat", "Sun"]</p>
 * @method void setMaintainWeekDays(array $MaintainWeekDays) Set <p>The time when it can be executed, enumeration value: ["Mon","Tue","Wed","Thu","Fri", "Sat", "Sun"]</p>
 * @method string getServerlessStatus() Obtain <p>serverless instance substatus</p>
 * @method void setServerlessStatus(string $ServerlessStatus) Set <p>serverless instance substatus</p>
 * @method array getInstanceTasks() Obtain <p>Instance task information</p>
 * @method void setInstanceTasks(array $InstanceTasks) Set <p>Instance task information</p>
 * @method string getInstanceDeviceType() Obtain <p>Instance Machine Type</p><ol><li>common, universal type.</li><li>exclusive, dedicated.</li></ol>
 * @method void setInstanceDeviceType(string $InstanceDeviceType) Set <p>Instance Machine Type</p><ol><li>common, universal type.</li><li>exclusive, dedicated.</li></ol>
 * @method string getInstanceStorageType() Obtain <p>Instance storage type<br>Description: This parameter returns a value only when the resource belonging to the query is LibraDB.</p>
 * @method void setInstanceStorageType(string $InstanceStorageType) Set <p>Instance storage type<br>Description: This parameter returns a value only when the resource belonging to the query is LibraDB.</p>
 * @method string getDbMode() Obtain <p>Database type</p>
 * @method void setDbMode(string $DbMode) Set <p>Database type</p>
 * @method array getNodeList() Obtain <p>Node list<br>Description: This parameter returns a value only when querying resources belonging to LibraDB.</p>
 * @method void setNodeList(array $NodeList) Set <p>Node list<br>Description: This parameter returns a value only when querying resources belonging to LibraDB.</p>
 * @method AIOptimizerStatus getAIOptimizerStatus() Obtain <p>AI optimizer status</p>
 * @method void setAIOptimizerStatus(AIOptimizerStatus $AIOptimizerStatus) Set <p>AI optimizer status</p>
 */
class ClusterInstanceDetail extends AbstractModel
{
    /**
     * @var string <p>Instance ID.</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Instance name</p>
     */
    public $InstanceName;

    /**
     * @var string <p>Engine type</p>
     */
    public $InstanceType;

    /**
     * @var string <p>Instance status</p>
     */
    public $InstanceStatus;

    /**
     * @var string <p>Instance status description</p>
     */
    public $InstanceStatusDesc;

    /**
     * @var integer <p>cpu cores</p>
     */
    public $InstanceCpu;

    /**
     * @var integer <p>Memory</p>
     */
    public $InstanceMemory;

    /**
     * @var integer <p>hard disk</p>
     */
    public $InstanceStorage;

    /**
     * @var string <p>Instance role</p>
     */
    public $InstanceRole;

    /**
     * @var integer <p>Execution start time (seconds from 00:00).</p>
     */
    public $MaintainStartTime;

    /**
     * @var integer <p>Duration (unit: s)</p>
     */
    public $MaintainDuration;

    /**
     * @var array <p>The time when it can be executed, enumeration value: ["Mon","Tue","Wed","Thu","Fri", "Sat", "Sun"]</p>
     */
    public $MaintainWeekDays;

    /**
     * @var string <p>serverless instance substatus</p>
     */
    public $ServerlessStatus;

    /**
     * @var array <p>Instance task information</p>
     */
    public $InstanceTasks;

    /**
     * @var string <p>Instance Machine Type</p><ol><li>common, universal type.</li><li>exclusive, dedicated.</li></ol>
     */
    public $InstanceDeviceType;

    /**
     * @var string <p>Instance storage type<br>Description: This parameter returns a value only when the resource belonging to the query is LibraDB.</p>
     */
    public $InstanceStorageType;

    /**
     * @var string <p>Database type</p>
     */
    public $DbMode;

    /**
     * @var array <p>Node list<br>Description: This parameter returns a value only when querying resources belonging to LibraDB.</p>
     */
    public $NodeList;

    /**
     * @var AIOptimizerStatus <p>AI optimizer status</p>
     */
    public $AIOptimizerStatus;

    /**
     * @param string $InstanceId <p>Instance ID.</p>
     * @param string $InstanceName <p>Instance name</p>
     * @param string $InstanceType <p>Engine type</p>
     * @param string $InstanceStatus <p>Instance status</p>
     * @param string $InstanceStatusDesc <p>Instance status description</p>
     * @param integer $InstanceCpu <p>cpu cores</p>
     * @param integer $InstanceMemory <p>Memory</p>
     * @param integer $InstanceStorage <p>hard disk</p>
     * @param string $InstanceRole <p>Instance role</p>
     * @param integer $MaintainStartTime <p>Execution start time (seconds from 00:00).</p>
     * @param integer $MaintainDuration <p>Duration (unit: s)</p>
     * @param array $MaintainWeekDays <p>The time when it can be executed, enumeration value: ["Mon","Tue","Wed","Thu","Fri", "Sat", "Sun"]</p>
     * @param string $ServerlessStatus <p>serverless instance substatus</p>
     * @param array $InstanceTasks <p>Instance task information</p>
     * @param string $InstanceDeviceType <p>Instance Machine Type</p><ol><li>common, universal type.</li><li>exclusive, dedicated.</li></ol>
     * @param string $InstanceStorageType <p>Instance storage type<br>Description: This parameter returns a value only when the resource belonging to the query is LibraDB.</p>
     * @param string $DbMode <p>Database type</p>
     * @param array $NodeList <p>Node list<br>Description: This parameter returns a value only when querying resources belonging to LibraDB.</p>
     * @param AIOptimizerStatus $AIOptimizerStatus <p>AI optimizer status</p>
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

        if (array_key_exists("InstanceTasks",$param) and $param["InstanceTasks"] !== null) {
            $this->InstanceTasks = [];
            foreach ($param["InstanceTasks"] as $key => $value){
                $obj = new ObjectTask();
                $obj->deserialize($value);
                array_push($this->InstanceTasks, $obj);
            }
        }

        if (array_key_exists("InstanceDeviceType",$param) and $param["InstanceDeviceType"] !== null) {
            $this->InstanceDeviceType = $param["InstanceDeviceType"];
        }

        if (array_key_exists("InstanceStorageType",$param) and $param["InstanceStorageType"] !== null) {
            $this->InstanceStorageType = $param["InstanceStorageType"];
        }

        if (array_key_exists("DbMode",$param) and $param["DbMode"] !== null) {
            $this->DbMode = $param["DbMode"];
        }

        if (array_key_exists("NodeList",$param) and $param["NodeList"] !== null) {
            $this->NodeList = $param["NodeList"];
        }

        if (array_key_exists("AIOptimizerStatus",$param) and $param["AIOptimizerStatus"] !== null) {
            $this->AIOptimizerStatus = new AIOptimizerStatus();
            $this->AIOptimizerStatus->deserialize($param["AIOptimizerStatus"]);
        }
    }
}
