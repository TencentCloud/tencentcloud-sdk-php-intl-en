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
 * Refresh batch associated instances, including the refresh activity status of individual instances and related scaling activity information.
 *
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method string getInstanceStatus() Obtain Refresh instance status. if the instance is removed or terminated during refresh, the status will be updated to NOT_FOUND. valid values: <li>WAITING: pending refresh;</li> <li>INIT: initializing;</li> <li>RUNNING: refreshing;</li> <li>FAILED: refresh FAILED;</li> <li>CANCELLED: CANCELLED;</li> <li>SUCCESSFUL: refresh SUCCESSFUL;</li> <li>NOT_FOUND: instance does NOT exist.</li>.
 * @method void setInstanceStatus(string $InstanceStatus) Set Refresh instance status. if the instance is removed or terminated during refresh, the status will be updated to NOT_FOUND. valid values: <li>WAITING: pending refresh;</li> <li>INIT: initializing;</li> <li>RUNNING: refreshing;</li> <li>FAILED: refresh FAILED;</li> <li>CANCELLED: CANCELLED;</li> <li>SUCCESSFUL: refresh SUCCESSFUL;</li> <li>NOT_FOUND: instance does NOT exist.</li>.
 * @method string getLastActivityId() Obtain The most recent scaling activity ID during instance refresh can be queried via the DescribeAutoScalingActivities api.
Please note that scaling activities differ from instance refresh activities; a single instance refresh activity may involve multiple scaling activities.
 * @method void setLastActivityId(string $LastActivityId) Set The most recent scaling activity ID during instance refresh can be queried via the DescribeAutoScalingActivities api.
Please note that scaling activities differ from instance refresh activities; a single instance refresh activity may involve multiple scaling activities.
 * @method string getInstanceStatusMessage() Obtain Describes the instance refresh status.
 * @method void setInstanceStatusMessage(string $InstanceStatusMessage) Set Describes the instance refresh status.
 */
class RefreshBatchRelatedInstance extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var string Refresh instance status. if the instance is removed or terminated during refresh, the status will be updated to NOT_FOUND. valid values: <li>WAITING: pending refresh;</li> <li>INIT: initializing;</li> <li>RUNNING: refreshing;</li> <li>FAILED: refresh FAILED;</li> <li>CANCELLED: CANCELLED;</li> <li>SUCCESSFUL: refresh SUCCESSFUL;</li> <li>NOT_FOUND: instance does NOT exist.</li>.
     */
    public $InstanceStatus;

    /**
     * @var string The most recent scaling activity ID during instance refresh can be queried via the DescribeAutoScalingActivities api.
Please note that scaling activities differ from instance refresh activities; a single instance refresh activity may involve multiple scaling activities.
     */
    public $LastActivityId;

    /**
     * @var string Describes the instance refresh status.
     */
    public $InstanceStatusMessage;

    /**
     * @param string $InstanceId Instance ID.
     * @param string $InstanceStatus Refresh instance status. if the instance is removed or terminated during refresh, the status will be updated to NOT_FOUND. valid values: <li>WAITING: pending refresh;</li> <li>INIT: initializing;</li> <li>RUNNING: refreshing;</li> <li>FAILED: refresh FAILED;</li> <li>CANCELLED: CANCELLED;</li> <li>SUCCESSFUL: refresh SUCCESSFUL;</li> <li>NOT_FOUND: instance does NOT exist.</li>.
     * @param string $LastActivityId The most recent scaling activity ID during instance refresh can be queried via the DescribeAutoScalingActivities api.
Please note that scaling activities differ from instance refresh activities; a single instance refresh activity may involve multiple scaling activities.
     * @param string $InstanceStatusMessage Describes the instance refresh status.
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

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("LastActivityId",$param) and $param["LastActivityId"] !== null) {
            $this->LastActivityId = $param["LastActivityId"];
        }

        if (array_key_exists("InstanceStatusMessage",$param) and $param["InstanceStatusMessage"] !== null) {
            $this->InstanceStatusMessage = $param["InstanceStatusMessage"];
        }
    }
}
