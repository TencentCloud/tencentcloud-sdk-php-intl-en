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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getActivityId() 获取Activity ID
 * @method void setActivityId(string $ActivityId) 设置Activity ID
 * @method string getComputeNodeId() 获取Compute node ID
 * @method void setComputeNodeId(string $ComputeNodeId) 设置Compute node ID
 * @method string getComputeNodeActivityType() 获取Compute node activity type: creation or termination
 * @method void setComputeNodeActivityType(string $ComputeNodeActivityType) 设置Compute node activity type: creation or termination
 * @method string getEnvId() 获取Compute environment ID
 * @method void setEnvId(string $EnvId) 设置Compute environment ID
 * @method string getCause() 获取Cause
 * @method void setCause(string $Cause) 设置Cause
 * @method string getActivityState() 获取Active status
 * @method void setActivityState(string $ActivityState) 设置Active status
 * @method string getStateReason() 获取State reason
 * @method void setStateReason(string $StateReason) 设置State reason
 * @method string getStartTime() 获取Activity start time
 * @method void setStartTime(string $StartTime) 设置Activity start time
 * @method string getEndTime() 获取Activity end time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEndTime(string $EndTime) 设置Activity end time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceId() 获取CVM instance ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceId(string $InstanceId) 设置CVM instance ID
Note: This field may return null, indicating that no valid values can be obtained.
 */

/**
 *Compute environment creation or termination activities
 */
class Activity extends AbstractModel
{
    /**
     * @var string Activity ID
     */
    public $ActivityId;

    /**
     * @var string Compute node ID
     */
    public $ComputeNodeId;

    /**
     * @var string Compute node activity type: creation or termination
     */
    public $ComputeNodeActivityType;

    /**
     * @var string Compute environment ID
     */
    public $EnvId;

    /**
     * @var string Cause
     */
    public $Cause;

    /**
     * @var string Active status
     */
    public $ActivityState;

    /**
     * @var string State reason
     */
    public $StateReason;

    /**
     * @var string Activity start time
     */
    public $StartTime;

    /**
     * @var string Activity end time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EndTime;

    /**
     * @var string CVM instance ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceId;
    /**
     * @param string $ActivityId Activity ID
     * @param string $ComputeNodeId Compute node ID
     * @param string $ComputeNodeActivityType Compute node activity type: creation or termination
     * @param string $EnvId Compute environment ID
     * @param string $Cause Cause
     * @param string $ActivityState Active status
     * @param string $StateReason State reason
     * @param string $StartTime Activity start time
     * @param string $EndTime Activity end time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceId CVM instance ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ActivityId",$param) and $param["ActivityId"] !== null) {
            $this->ActivityId = $param["ActivityId"];
        }

        if (array_key_exists("ComputeNodeId",$param) and $param["ComputeNodeId"] !== null) {
            $this->ComputeNodeId = $param["ComputeNodeId"];
        }

        if (array_key_exists("ComputeNodeActivityType",$param) and $param["ComputeNodeActivityType"] !== null) {
            $this->ComputeNodeActivityType = $param["ComputeNodeActivityType"];
        }

        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("Cause",$param) and $param["Cause"] !== null) {
            $this->Cause = $param["Cause"];
        }

        if (array_key_exists("ActivityState",$param) and $param["ActivityState"] !== null) {
            $this->ActivityState = $param["ActivityState"];
        }

        if (array_key_exists("StateReason",$param) and $param["StateReason"] !== null) {
            $this->StateReason = $param["StateReason"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
