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
 * Refresh batch associated instances, including the refresh activity status of individual instances and related scaling activity information.
 *
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method string getInstanceStatus() Obtain Refresh instance status. If an instance is removed or destroyed during the refresh process, its status will be updated to NOT_FOUND. Valid values: <br><li>WAITING: pending refresh.</li> <li>INIT: Initializing.</li> <li>RUNNING: Refreshing in progress.</li> <li>FAILED: Refresh failed.</li> <li>CANCELLED: Canceled.</li> <li>SUCCESSFUL: Refreshed.</li> <li>NOT_FOUND: Instance not found.
 * @method void setInstanceStatus(string $InstanceStatus) Set Refresh instance status. If an instance is removed or destroyed during the refresh process, its status will be updated to NOT_FOUND. Valid values: <br><li>WAITING: pending refresh.</li> <li>INIT: Initializing.</li> <li>RUNNING: Refreshing in progress.</li> <li>FAILED: Refresh failed.</li> <li>CANCELLED: Canceled.</li> <li>SUCCESSFUL: Refreshed.</li> <li>NOT_FOUND: Instance not found.
 * @method string getLastActivityId() Obtain The most recent scaling activity ID during instance refresh can be queried via the DescribeAutoScalingActivities API.
Please note that scaling activities differ from instance refresh activities; a single instance refresh activity may involve multiple scaling activities.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setLastActivityId(string $LastActivityId) Set The most recent scaling activity ID during instance refresh can be queried via the DescribeAutoScalingActivities API.
Please note that scaling activities differ from instance refresh activities; a single instance refresh activity may involve multiple scaling activities.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getInstanceStatusMessage() Obtain Instance refresh status information.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setInstanceStatusMessage(string $InstanceStatusMessage) Set Instance refresh status information.
Note: This field may return null, indicating that no valid value can be obtained.
 */
class RefreshBatchRelatedInstance extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var string Refresh instance status. If an instance is removed or destroyed during the refresh process, its status will be updated to NOT_FOUND. Valid values: <br><li>WAITING: pending refresh.</li> <li>INIT: Initializing.</li> <li>RUNNING: Refreshing in progress.</li> <li>FAILED: Refresh failed.</li> <li>CANCELLED: Canceled.</li> <li>SUCCESSFUL: Refreshed.</li> <li>NOT_FOUND: Instance not found.
     */
    public $InstanceStatus;

    /**
     * @var string The most recent scaling activity ID during instance refresh can be queried via the DescribeAutoScalingActivities API.
Please note that scaling activities differ from instance refresh activities; a single instance refresh activity may involve multiple scaling activities.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $LastActivityId;

    /**
     * @var string Instance refresh status information.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $InstanceStatusMessage;

    /**
     * @param string $InstanceId Instance ID.
     * @param string $InstanceStatus Refresh instance status. If an instance is removed or destroyed during the refresh process, its status will be updated to NOT_FOUND. Valid values: <br><li>WAITING: pending refresh.</li> <li>INIT: Initializing.</li> <li>RUNNING: Refreshing in progress.</li> <li>FAILED: Refresh failed.</li> <li>CANCELLED: Canceled.</li> <li>SUCCESSFUL: Refreshed.</li> <li>NOT_FOUND: Instance not found.
     * @param string $LastActivityId The most recent scaling activity ID during instance refresh can be queried via the DescribeAutoScalingActivities API.
Please note that scaling activities differ from instance refresh activities; a single instance refresh activity may involve multiple scaling activities.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $InstanceStatusMessage Instance refresh status information.
Note: This field may return null, indicating that no valid value can be obtained.
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
