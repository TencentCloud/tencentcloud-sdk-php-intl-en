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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Task details
 *
 * @method integer getTaskId() Obtain Task ID 
Note:  This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskId(integer $TaskId) Set Task ID 
Note:  This field may return null, indicating that no valid values can be obtained.
 * @method string getStartTime() Obtain Task start time 
Note:  This field may return null, indicating that no valid values can be obtained.
 * @method void setStartTime(string $StartTime) Set Task start time 
Note:  This field may return null, indicating that no valid values can be obtained.
 * @method string getTaskType() Obtain Task type. Valid values:  - `FLOW_CREATE`: Create an instance. - `FLOW_MODIFYCONNECTIONCONFIG`: Adjust the number of bandwidth connections. - `FLOW_MODIFYINSTANCEPASSWORDFREE`: Modify the process of password-free access. - `FLOW_CLEARNETWORK`: Returning VPC - `FLOW_SETPWD`: Set the access password. - `FLOW_EXPORSHR`: Expand or reduce the capacity. - `FLOW_UpgradeArch`: Upgrade the instance architecture. - `FLOW_MODIFYINSTANCEPARAMS`: Modify the instance parameters. - `FLOW_MODIFYINSTACEREADONLY`: Modify read-only process. - `FLOW_CLOSE`: Disable the instance. - `FLOW_DELETE`: Delete the instance. - `FLOW_OPEN_WAN`: Enable the public network. - `FLOW_FLOW_CLEAN`: Clear the instance. - `FLOW_MODIFYINSTANCEACCOUNT`: Modify the instance account. - `FLOW_ENABLEINSTANCE_REPLICATE`: Enable the replica read-only feature. - `FLOW_DISABLEINSTANCE_REPLICATE`: Disable the replica read-only feature. - `FLOW_SWITCHINSTANCEVIP`: Swap the VIPs of instances. - FLOW_CHANGE_REPLICA_TO_MSTER: Promote the replica node to the mater node. Backup instance 
Note:  This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskType(string $TaskType) Set Task type. Valid values:  - `FLOW_CREATE`: Create an instance. - `FLOW_MODIFYCONNECTIONCONFIG`: Adjust the number of bandwidth connections. - `FLOW_MODIFYINSTANCEPASSWORDFREE`: Modify the process of password-free access. - `FLOW_CLEARNETWORK`: Returning VPC - `FLOW_SETPWD`: Set the access password. - `FLOW_EXPORSHR`: Expand or reduce the capacity. - `FLOW_UpgradeArch`: Upgrade the instance architecture. - `FLOW_MODIFYINSTANCEPARAMS`: Modify the instance parameters. - `FLOW_MODIFYINSTACEREADONLY`: Modify read-only process. - `FLOW_CLOSE`: Disable the instance. - `FLOW_DELETE`: Delete the instance. - `FLOW_OPEN_WAN`: Enable the public network. - `FLOW_FLOW_CLEAN`: Clear the instance. - `FLOW_MODIFYINSTANCEACCOUNT`: Modify the instance account. - `FLOW_ENABLEINSTANCE_REPLICATE`: Enable the replica read-only feature. - `FLOW_DISABLEINSTANCE_REPLICATE`: Disable the replica read-only feature. - `FLOW_SWITCHINSTANCEVIP`: Swap the VIPs of instances. - FLOW_CHANGE_REPLICA_TO_MSTER: Promote the replica node to the mater node. Backup instance 
Note:  This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceName() Obtain Instance name 
Note:  This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceName(string $InstanceName) Set Instance name 
Note:  This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceId() Obtain Instance ID 
Note:  This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceId(string $InstanceId) Set Instance ID 
Note:  This field may return null, indicating that no valid values can be obtained.
 * @method integer getProjectId() Obtain Project ID 
Note:  This field may return null, indicating that no valid values can be obtained.
 * @method void setProjectId(integer $ProjectId) Set Project ID 
Note:  This field may return null, indicating that no valid values can be obtained.
 * @method float getProgress() Obtain Task progress 
Note:  This field may return null, indicating that no valid values can be obtained.
 * @method void setProgress(float $Progress) Set Task progress 
Note:  This field may return null, indicating that no valid values can be obtained.
 * @method string getEndTime() Obtain Task end time 
Note:  This field may return null, indicating that no valid values can be obtained.
 * @method void setEndTime(string $EndTime) Set Task end time 
Note:  This field may return null, indicating that no valid values can be obtained.
 * @method integer getResult() Obtain Task execution status. Valid values: - `0` (initilized) - `1` (executing) - `2` (completed) - `4` (failed) 
Note:  This field may return null, indicating that no valid values can be obtained.
 * @method void setResult(integer $Result) Set Task execution status. Valid values: - `0` (initilized) - `1` (executing) - `2` (completed) - `4` (failed) 
Note:  This field may return null, indicating that no valid values can be obtained.
 */
class TaskInfoDetail extends AbstractModel
{
    /**
     * @var integer Task ID 
Note:  This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskId;

    /**
     * @var string Task start time 
Note:  This field may return null, indicating that no valid values can be obtained.
     */
    public $StartTime;

    /**
     * @var string Task type. Valid values:  - `FLOW_CREATE`: Create an instance. - `FLOW_MODIFYCONNECTIONCONFIG`: Adjust the number of bandwidth connections. - `FLOW_MODIFYINSTANCEPASSWORDFREE`: Modify the process of password-free access. - `FLOW_CLEARNETWORK`: Returning VPC - `FLOW_SETPWD`: Set the access password. - `FLOW_EXPORSHR`: Expand or reduce the capacity. - `FLOW_UpgradeArch`: Upgrade the instance architecture. - `FLOW_MODIFYINSTANCEPARAMS`: Modify the instance parameters. - `FLOW_MODIFYINSTACEREADONLY`: Modify read-only process. - `FLOW_CLOSE`: Disable the instance. - `FLOW_DELETE`: Delete the instance. - `FLOW_OPEN_WAN`: Enable the public network. - `FLOW_FLOW_CLEAN`: Clear the instance. - `FLOW_MODIFYINSTANCEACCOUNT`: Modify the instance account. - `FLOW_ENABLEINSTANCE_REPLICATE`: Enable the replica read-only feature. - `FLOW_DISABLEINSTANCE_REPLICATE`: Disable the replica read-only feature. - `FLOW_SWITCHINSTANCEVIP`: Swap the VIPs of instances. - FLOW_CHANGE_REPLICA_TO_MSTER: Promote the replica node to the mater node. Backup instance 
Note:  This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskType;

    /**
     * @var string Instance name 
Note:  This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceName;

    /**
     * @var string Instance ID 
Note:  This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceId;

    /**
     * @var integer Project ID 
Note:  This field may return null, indicating that no valid values can be obtained.
     */
    public $ProjectId;

    /**
     * @var float Task progress 
Note:  This field may return null, indicating that no valid values can be obtained.
     */
    public $Progress;

    /**
     * @var string Task end time 
Note:  This field may return null, indicating that no valid values can be obtained.
     */
    public $EndTime;

    /**
     * @var integer Task execution status. Valid values: - `0` (initilized) - `1` (executing) - `2` (completed) - `4` (failed) 
Note:  This field may return null, indicating that no valid values can be obtained.
     */
    public $Result;

    /**
     * @param integer $TaskId Task ID 
Note:  This field may return null, indicating that no valid values can be obtained.
     * @param string $StartTime Task start time 
Note:  This field may return null, indicating that no valid values can be obtained.
     * @param string $TaskType Task type. Valid values:  - `FLOW_CREATE`: Create an instance. - `FLOW_MODIFYCONNECTIONCONFIG`: Adjust the number of bandwidth connections. - `FLOW_MODIFYINSTANCEPASSWORDFREE`: Modify the process of password-free access. - `FLOW_CLEARNETWORK`: Returning VPC - `FLOW_SETPWD`: Set the access password. - `FLOW_EXPORSHR`: Expand or reduce the capacity. - `FLOW_UpgradeArch`: Upgrade the instance architecture. - `FLOW_MODIFYINSTANCEPARAMS`: Modify the instance parameters. - `FLOW_MODIFYINSTACEREADONLY`: Modify read-only process. - `FLOW_CLOSE`: Disable the instance. - `FLOW_DELETE`: Delete the instance. - `FLOW_OPEN_WAN`: Enable the public network. - `FLOW_FLOW_CLEAN`: Clear the instance. - `FLOW_MODIFYINSTANCEACCOUNT`: Modify the instance account. - `FLOW_ENABLEINSTANCE_REPLICATE`: Enable the replica read-only feature. - `FLOW_DISABLEINSTANCE_REPLICATE`: Disable the replica read-only feature. - `FLOW_SWITCHINSTANCEVIP`: Swap the VIPs of instances. - FLOW_CHANGE_REPLICA_TO_MSTER: Promote the replica node to the mater node. Backup instance 
Note:  This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceName Instance name 
Note:  This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceId Instance ID 
Note:  This field may return null, indicating that no valid values can be obtained.
     * @param integer $ProjectId Project ID 
Note:  This field may return null, indicating that no valid values can be obtained.
     * @param float $Progress Task progress 
Note:  This field may return null, indicating that no valid values can be obtained.
     * @param string $EndTime Task end time 
Note:  This field may return null, indicating that no valid values can be obtained.
     * @param integer $Result Task execution status. Valid values: - `0` (initilized) - `1` (executing) - `2` (completed) - `4` (failed) 
Note:  This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }
    }
}
