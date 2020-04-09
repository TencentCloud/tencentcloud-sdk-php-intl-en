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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information on eligible scaling activities.
 *
 * @method string getAutoScalingGroupId() Obtain Auto scaling group ID.
 * @method void setAutoScalingGroupId(string $AutoScalingGroupId) Set Auto scaling group ID.
 * @method string getActivityId() Obtain Scaling activity ID.
 * @method void setActivityId(string $ActivityId) Set Scaling activity ID.
 * @method string getActivityType() Obtain Scaling activity type. Value range:<br>
<li>SCALE_OUT: scale-out <li>SCALE_IN: scale-in <li>ATTACH_INSTANCES: adding an instance <li>REMOVE_INSTANCES: terminating an instance <li>DETACH_INSTANCES: removing an instance <li>TERMINATE_INSTANCES_UNEXPECTEDLY: terminating an instance in the CVM console <li>REPLACE_UNHEALTHY_INSTANCE: replacing an unhealthy instance
 * @method void setActivityType(string $ActivityType) Set Scaling activity type. Value range:<br>
<li>SCALE_OUT: scale-out <li>SCALE_IN: scale-in <li>ATTACH_INSTANCES: adding an instance <li>REMOVE_INSTANCES: terminating an instance <li>DETACH_INSTANCES: removing an instance <li>TERMINATE_INSTANCES_UNEXPECTEDLY: terminating an instance in the CVM console <li>REPLACE_UNHEALTHY_INSTANCE: replacing an unhealthy instance
 * @method string getStatusCode() Obtain Scaling activity status. Value range:<br>
<li>INIT: initializing
<li>RUNNING: running
<li>SUCCESSFUL: succeeded
<li>PARTIALLY_SUCCESSFUL: partially succeeded
<li>FAILED: failed
<li>CANCELLED: canceled
 * @method void setStatusCode(string $StatusCode) Set Scaling activity status. Value range:<br>
<li>INIT: initializing
<li>RUNNING: running
<li>SUCCESSFUL: succeeded
<li>PARTIALLY_SUCCESSFUL: partially succeeded
<li>FAILED: failed
<li>CANCELLED: canceled
 * @method string getStatusMessage() Obtain Description of the scaling activity status.
 * @method void setStatusMessage(string $StatusMessage) Set Description of the scaling activity status.
 * @method string getCause() Obtain Cause of the scaling activity.
 * @method void setCause(string $Cause) Set Cause of the scaling activity.
 * @method string getDescription() Obtain Description of the scaling activity.
 * @method void setDescription(string $Description) Set Description of the scaling activity.
 * @method string getStartTime() Obtain Start time of the scaling activity.
 * @method void setStartTime(string $StartTime) Set Start time of the scaling activity.
 * @method string getEndTime() Obtain End time of the scaling activity.
 * @method void setEndTime(string $EndTime) Set End time of the scaling activity.
 * @method string getCreatedTime() Obtain Creation time of the scaling activity.
 * @method void setCreatedTime(string $CreatedTime) Set Creation time of the scaling activity.
 * @method array getActivityRelatedInstanceSet() Obtain Information set of the instances related to the scaling activity.
 * @method void setActivityRelatedInstanceSet(array $ActivityRelatedInstanceSet) Set Information set of the instances related to the scaling activity.
 * @method string getStatusMessageSimplified() Obtain Brief description of the scaling activity status.
 * @method void setStatusMessageSimplified(string $StatusMessageSimplified) Set Brief description of the scaling activity status.
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
     * @var string Scaling activity type. Value range:<br>
<li>SCALE_OUT: scale-out <li>SCALE_IN: scale-in <li>ATTACH_INSTANCES: adding an instance <li>REMOVE_INSTANCES: terminating an instance <li>DETACH_INSTANCES: removing an instance <li>TERMINATE_INSTANCES_UNEXPECTEDLY: terminating an instance in the CVM console <li>REPLACE_UNHEALTHY_INSTANCE: replacing an unhealthy instance
     */
    public $ActivityType;

    /**
     * @var string Scaling activity status. Value range:<br>
<li>INIT: initializing
<li>RUNNING: running
<li>SUCCESSFUL: succeeded
<li>PARTIALLY_SUCCESSFUL: partially succeeded
<li>FAILED: failed
<li>CANCELLED: canceled
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
     * @var string Start time of the scaling activity.
     */
    public $StartTime;

    /**
     * @var string End time of the scaling activity.
     */
    public $EndTime;

    /**
     * @var string Creation time of the scaling activity.
     */
    public $CreatedTime;

    /**
     * @var array Information set of the instances related to the scaling activity.
     */
    public $ActivityRelatedInstanceSet;

    /**
     * @var string Brief description of the scaling activity status.
     */
    public $StatusMessageSimplified;

    /**
     * @param string $AutoScalingGroupId Auto scaling group ID.
     * @param string $ActivityId Scaling activity ID.
     * @param string $ActivityType Scaling activity type. Value range:<br>
<li>SCALE_OUT: scale-out <li>SCALE_IN: scale-in <li>ATTACH_INSTANCES: adding an instance <li>REMOVE_INSTANCES: terminating an instance <li>DETACH_INSTANCES: removing an instance <li>TERMINATE_INSTANCES_UNEXPECTEDLY: terminating an instance in the CVM console <li>REPLACE_UNHEALTHY_INSTANCE: replacing an unhealthy instance
     * @param string $StatusCode Scaling activity status. Value range:<br>
<li>INIT: initializing
<li>RUNNING: running
<li>SUCCESSFUL: succeeded
<li>PARTIALLY_SUCCESSFUL: partially succeeded
<li>FAILED: failed
<li>CANCELLED: canceled
     * @param string $StatusMessage Description of the scaling activity status.
     * @param string $Cause Cause of the scaling activity.
     * @param string $Description Description of the scaling activity.
     * @param string $StartTime Start time of the scaling activity.
     * @param string $EndTime End time of the scaling activity.
     * @param string $CreatedTime Creation time of the scaling activity.
     * @param array $ActivityRelatedInstanceSet Information set of the instances related to the scaling activity.
     * @param string $StatusMessageSimplified Brief description of the scaling activity status.
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
    }
}
