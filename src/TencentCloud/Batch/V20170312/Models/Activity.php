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
 * Information of the creation/termination activity of a compute node
 *
 * @method string getActivityId() Obtain Activity ID
 * @method void setActivityId(string $ActivityId) Set Activity ID
 * @method string getComputeNodeId() Obtain Compute node ID
 * @method void setComputeNodeId(string $ComputeNodeId) Set Compute node ID
 * @method string getComputeNodeActivityType() Obtain Activity type. Values: `CREATE_COMPUTE_NODE`, `TERMINATE_COMPUTE_NODE`
 * @method void setComputeNodeActivityType(string $ComputeNodeActivityType) Set Activity type. Values: `CREATE_COMPUTE_NODE`, `TERMINATE_COMPUTE_NODE`
 * @method string getEnvId() Obtain Compute environment ID
 * @method void setEnvId(string $EnvId) Set Compute environment ID
 * @method string getCause() Obtain Cause of the activity
 * @method void setCause(string $Cause) Set Cause of the activity
 * @method string getActivityState() Obtain Activity state
 * @method void setActivityState(string $ActivityState) Set Activity state
 * @method string getStateReason() Obtain Reason of going to this state
 * @method void setStateReason(string $StateReason) Set Reason of going to this state
 * @method string getStartTime() Obtain Activity start time
 * @method void setStartTime(string $StartTime) Set Activity start time
 * @method string getEndTime() Obtain Activity end time
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setEndTime(string $EndTime) Set Activity end time
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getInstanceId() Obtain CVM instance ID
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setInstanceId(string $InstanceId) Set CVM instance ID
Note: This field may return `null`, indicating that no valid value was found.
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
     * @var string Activity type. Values: `CREATE_COMPUTE_NODE`, `TERMINATE_COMPUTE_NODE`
     */
    public $ComputeNodeActivityType;

    /**
     * @var string Compute environment ID
     */
    public $EnvId;

    /**
     * @var string Cause of the activity
     */
    public $Cause;

    /**
     * @var string Activity state
     */
    public $ActivityState;

    /**
     * @var string Reason of going to this state
     */
    public $StateReason;

    /**
     * @var string Activity start time
     */
    public $StartTime;

    /**
     * @var string Activity end time
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $EndTime;

    /**
     * @var string CVM instance ID
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $InstanceId;

    /**
     * @param string $ActivityId Activity ID
     * @param string $ComputeNodeId Compute node ID
     * @param string $ComputeNodeActivityType Activity type. Values: `CREATE_COMPUTE_NODE`, `TERMINATE_COMPUTE_NODE`
     * @param string $EnvId Compute environment ID
     * @param string $Cause Cause of the activity
     * @param string $ActivityState Activity state
     * @param string $StateReason Reason of going to this state
     * @param string $StartTime Activity start time
     * @param string $EndTime Activity end time
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $InstanceId CVM instance ID
Note: This field may return `null`, indicating that no valid value was found.
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
