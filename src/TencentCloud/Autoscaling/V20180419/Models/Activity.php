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
namespace TencentCloud\Autoscaling\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of auto scaling activity.
 *
 * @method string getAutoScalingGroupId() Obtain Auto scaling group ID.
 * @method void setAutoScalingGroupId(string $AutoScalingGroupId) Set Auto scaling group ID.
 * @method string getActivityId() Obtain Scaling activity ID.
 * @method void setActivityId(string $ActivityId) Set Scaling activity ID.
 * @method string getActivityType() Obtain Scaling activity type. Valid values:
<li>SCALE_OUT: Scale out instance(s).</li>
<li>SCALE_IN: Scale in instance(s).</li>
<li>ATTACH_INSTANCES: Add instance(s).</li>
<li>REMOVE_INSTANCES: Terminate instance(s).</li>
<li>DETACH_INSTANCES: Remove instance(s).</li>
<li>TERMINATE_INSTANCES_UNEXPECTEDLY: Instance(s) unexpectedly terminated in the CVM console.</li>
<li>REPLACE_UNHEALTHY_INSTANCE: Replace unhealthy instance(s).</li>
<li>START_INSTANCES: Start instance(s).</li>
<li>STOP_INSTANCES: Stop instance(s).</li>
<li>INVOKE_COMMAND: Execute a command in instance(s).</li>
 * @method void setActivityType(string $ActivityType) Set Scaling activity type. Valid values:
<li>SCALE_OUT: Scale out instance(s).</li>
<li>SCALE_IN: Scale in instance(s).</li>
<li>ATTACH_INSTANCES: Add instance(s).</li>
<li>REMOVE_INSTANCES: Terminate instance(s).</li>
<li>DETACH_INSTANCES: Remove instance(s).</li>
<li>TERMINATE_INSTANCES_UNEXPECTEDLY: Instance(s) unexpectedly terminated in the CVM console.</li>
<li>REPLACE_UNHEALTHY_INSTANCE: Replace unhealthy instance(s).</li>
<li>START_INSTANCES: Start instance(s).</li>
<li>STOP_INSTANCES: Stop instance(s).</li>
<li>INVOKE_COMMAND: Execute a command in instance(s).</li>
 * @method string getStatusCode() Obtain Scaling activity status. Valid values:
<li>INIT: initializing.</li>
<li>RUNNING: running.</li>
<li>SUCCESSFUL: successful.</li>
<li>PARTIALLY_SUCCESSFUL: partially successful.</li>
<li>FAILED: failed.</li>
<li>CANCELLED: canceled.</li>
 * @method void setStatusCode(string $StatusCode) Set Scaling activity status. Valid values:
<li>INIT: initializing.</li>
<li>RUNNING: running.</li>
<li>SUCCESSFUL: successful.</li>
<li>PARTIALLY_SUCCESSFUL: partially successful.</li>
<li>FAILED: failed.</li>
<li>CANCELLED: canceled.</li>
 * @method string getStatusMessage() Obtain Description of the scaling activity status.
 * @method void setStatusMessage(string $StatusMessage) Set Description of the scaling activity status.
 * @method string getCause() Obtain Cause of the scaling activity.
 * @method void setCause(string $Cause) Set Cause of the scaling activity.
 * @method string getDescription() Obtain Description of the scaling activity.
 * @method void setDescription(string $Description) Set Description of the scaling activity.
 * @method string getStartTime() Obtain Start time of the auto scaling activity in UTC standard time.
 * @method void setStartTime(string $StartTime) Set Start time of the auto scaling activity in UTC standard time.
 * @method string getEndTime() Obtain End time of the scaling activity in UTC standard time.
 * @method void setEndTime(string $EndTime) Set End time of the scaling activity in UTC standard time.
 * @method string getCreatedTime() Obtain Create time of the scaling activity in UTC standard time.
 * @method void setCreatedTime(string $CreatedTime) Set Create time of the scaling activity in UTC standard time.
 * @method array getActivityRelatedInstanceSet() Obtain This parameter has been deprecated.
 * @method void setActivityRelatedInstanceSet(array $ActivityRelatedInstanceSet) Set This parameter has been deprecated.
 * @method string getStatusMessageSimplified() Obtain Brief description of the scaling activity status.
 * @method void setStatusMessageSimplified(string $StatusMessageSimplified) Set Brief description of the scaling activity status.
 * @method array getLifecycleActionResultSet() Obtain Result of the lifecycle hook action in the scaling activity
 * @method void setLifecycleActionResultSet(array $LifecycleActionResultSet) Set Result of the lifecycle hook action in the scaling activity
 * @method array getDetailedStatusMessageSet() Obtain Detailed description of the scaling activity status
 * @method void setDetailedStatusMessageSet(array $DetailedStatusMessageSet) Set Detailed description of the scaling activity status
 * @method array getInvocationResultSet() Obtain Result of the command execution
 * @method void setInvocationResultSet(array $InvocationResultSet) Set Result of the command execution
 * @method array getRelatedInstanceSet() Obtain Related instance information set of the scaling activity.
 * @method void setRelatedInstanceSet(array $RelatedInstanceSet) Set Related instance information set of the scaling activity.
 */
class Activity extends AbstractModel
{
    /**
     * @var string Auto scaling group ID.
     */
    public $AutoScalingGroupId;

    /**
     * @var string Scaling activity ID.
     */
    public $ActivityId;

    /**
     * @var string Scaling activity type. Valid values:
<li>SCALE_OUT: Scale out instance(s).</li>
<li>SCALE_IN: Scale in instance(s).</li>
<li>ATTACH_INSTANCES: Add instance(s).</li>
<li>REMOVE_INSTANCES: Terminate instance(s).</li>
<li>DETACH_INSTANCES: Remove instance(s).</li>
<li>TERMINATE_INSTANCES_UNEXPECTEDLY: Instance(s) unexpectedly terminated in the CVM console.</li>
<li>REPLACE_UNHEALTHY_INSTANCE: Replace unhealthy instance(s).</li>
<li>START_INSTANCES: Start instance(s).</li>
<li>STOP_INSTANCES: Stop instance(s).</li>
<li>INVOKE_COMMAND: Execute a command in instance(s).</li>
     */
    public $ActivityType;

    /**
     * @var string Scaling activity status. Valid values:
<li>INIT: initializing.</li>
<li>RUNNING: running.</li>
<li>SUCCESSFUL: successful.</li>
<li>PARTIALLY_SUCCESSFUL: partially successful.</li>
<li>FAILED: failed.</li>
<li>CANCELLED: canceled.</li>
     */
    public $StatusCode;

    /**
     * @var string Description of the scaling activity status.
     */
    public $StatusMessage;

    /**
     * @var string Cause of the scaling activity.
     */
    public $Cause;

    /**
     * @var string Description of the scaling activity.
     */
    public $Description;

    /**
     * @var string Start time of the auto scaling activity in UTC standard time.
     */
    public $StartTime;

    /**
     * @var string End time of the scaling activity in UTC standard time.
     */
    public $EndTime;

    /**
     * @var string Create time of the scaling activity in UTC standard time.
     */
    public $CreatedTime;

    /**
     * @var array This parameter has been deprecated.
     * @deprecated
     */
    public $ActivityRelatedInstanceSet;

    /**
     * @var string Brief description of the scaling activity status.
     */
    public $StatusMessageSimplified;

    /**
     * @var array Result of the lifecycle hook action in the scaling activity
     */
    public $LifecycleActionResultSet;

    /**
     * @var array Detailed description of the scaling activity status
     */
    public $DetailedStatusMessageSet;

    /**
     * @var array Result of the command execution
     */
    public $InvocationResultSet;

    /**
     * @var array Related instance information set of the scaling activity.
     */
    public $RelatedInstanceSet;

    /**
     * @param string $AutoScalingGroupId Auto scaling group ID.
     * @param string $ActivityId Scaling activity ID.
     * @param string $ActivityType Scaling activity type. Valid values:
<li>SCALE_OUT: Scale out instance(s).</li>
<li>SCALE_IN: Scale in instance(s).</li>
<li>ATTACH_INSTANCES: Add instance(s).</li>
<li>REMOVE_INSTANCES: Terminate instance(s).</li>
<li>DETACH_INSTANCES: Remove instance(s).</li>
<li>TERMINATE_INSTANCES_UNEXPECTEDLY: Instance(s) unexpectedly terminated in the CVM console.</li>
<li>REPLACE_UNHEALTHY_INSTANCE: Replace unhealthy instance(s).</li>
<li>START_INSTANCES: Start instance(s).</li>
<li>STOP_INSTANCES: Stop instance(s).</li>
<li>INVOKE_COMMAND: Execute a command in instance(s).</li>
     * @param string $StatusCode Scaling activity status. Valid values:
<li>INIT: initializing.</li>
<li>RUNNING: running.</li>
<li>SUCCESSFUL: successful.</li>
<li>PARTIALLY_SUCCESSFUL: partially successful.</li>
<li>FAILED: failed.</li>
<li>CANCELLED: canceled.</li>
     * @param string $StatusMessage Description of the scaling activity status.
     * @param string $Cause Cause of the scaling activity.
     * @param string $Description Description of the scaling activity.
     * @param string $StartTime Start time of the auto scaling activity in UTC standard time.
     * @param string $EndTime End time of the scaling activity in UTC standard time.
     * @param string $CreatedTime Create time of the scaling activity in UTC standard time.
     * @param array $ActivityRelatedInstanceSet This parameter has been deprecated.
     * @param string $StatusMessageSimplified Brief description of the scaling activity status.
     * @param array $LifecycleActionResultSet Result of the lifecycle hook action in the scaling activity
     * @param array $DetailedStatusMessageSet Detailed description of the scaling activity status
     * @param array $InvocationResultSet Result of the command execution
     * @param array $RelatedInstanceSet Related instance information set of the scaling activity.
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
        if (array_key_exists("AutoScalingGroupId",$param) and $param["AutoScalingGroupId"] !== null) {
            $this->AutoScalingGroupId = $param["AutoScalingGroupId"];
        }

        if (array_key_exists("ActivityId",$param) and $param["ActivityId"] !== null) {
            $this->ActivityId = $param["ActivityId"];
        }

        if (array_key_exists("ActivityType",$param) and $param["ActivityType"] !== null) {
            $this->ActivityType = $param["ActivityType"];
        }

        if (array_key_exists("StatusCode",$param) and $param["StatusCode"] !== null) {
            $this->StatusCode = $param["StatusCode"];
        }

        if (array_key_exists("StatusMessage",$param) and $param["StatusMessage"] !== null) {
            $this->StatusMessage = $param["StatusMessage"];
        }

        if (array_key_exists("Cause",$param) and $param["Cause"] !== null) {
            $this->Cause = $param["Cause"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ActivityRelatedInstanceSet",$param) and $param["ActivityRelatedInstanceSet"] !== null) {
            $this->ActivityRelatedInstanceSet = [];
            foreach ($param["ActivityRelatedInstanceSet"] as $key => $value){
                $obj = new ActivtyRelatedInstance();
                $obj->deserialize($value);
                array_push($this->ActivityRelatedInstanceSet, $obj);
            }
        }

        if (array_key_exists("StatusMessageSimplified",$param) and $param["StatusMessageSimplified"] !== null) {
            $this->StatusMessageSimplified = $param["StatusMessageSimplified"];
        }

        if (array_key_exists("LifecycleActionResultSet",$param) and $param["LifecycleActionResultSet"] !== null) {
            $this->LifecycleActionResultSet = [];
            foreach ($param["LifecycleActionResultSet"] as $key => $value){
                $obj = new LifecycleActionResultInfo();
                $obj->deserialize($value);
                array_push($this->LifecycleActionResultSet, $obj);
            }
        }

        if (array_key_exists("DetailedStatusMessageSet",$param) and $param["DetailedStatusMessageSet"] !== null) {
            $this->DetailedStatusMessageSet = [];
            foreach ($param["DetailedStatusMessageSet"] as $key => $value){
                $obj = new DetailedStatusMessage();
                $obj->deserialize($value);
                array_push($this->DetailedStatusMessageSet, $obj);
            }
        }

        if (array_key_exists("InvocationResultSet",$param) and $param["InvocationResultSet"] !== null) {
            $this->InvocationResultSet = [];
            foreach ($param["InvocationResultSet"] as $key => $value){
                $obj = new InvocationResult();
                $obj->deserialize($value);
                array_push($this->InvocationResultSet, $obj);
            }
        }

        if (array_key_exists("RelatedInstanceSet",$param) and $param["RelatedInstanceSet"] !== null) {
            $this->RelatedInstanceSet = [];
            foreach ($param["RelatedInstanceSet"] as $key => $value){
                $obj = new RelatedInstance();
                $obj->deserialize($value);
                array_push($this->RelatedInstanceSet, $obj);
            }
        }
    }
}
