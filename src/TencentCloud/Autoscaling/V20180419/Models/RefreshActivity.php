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
 * Instance refresh activity.
 *
 * @method string getAutoScalingGroupId() Obtain Scaling group ID.
 * @method void setAutoScalingGroupId(string $AutoScalingGroupId) Set Scaling group ID.
 * @method string getRefreshActivityId() Obtain Refresh activity ID.
 * @method void setRefreshActivityId(string $RefreshActivityId) Set Refresh activity ID.
 * @method string getOriginRefreshActivityId() Obtain Original refresh activity ID. exists only in rollback refresh activity.
 * @method void setOriginRefreshActivityId(string $OriginRefreshActivityId) Set Original refresh activity ID. exists only in rollback refresh activity.
 * @method array getRefreshBatchSet() Obtain Refresh batch information list.
 * @method void setRefreshBatchSet(array $RefreshBatchSet) Set Refresh batch information list.
 * @method string getRefreshMode() Obtain Refresh mode. valid values as follows:.
<Li>ROLLING_UPDATE_RESET: reinstall the system for rolling updates.</li>.
<li>ROLLING_UPDATE_REPLACE: Create an instance and replace the old instance with it for rolling updates. This mode does not support the rollback API currently.</li>
 * @method void setRefreshMode(string $RefreshMode) Set Refresh mode. valid values as follows:.
<Li>ROLLING_UPDATE_RESET: reinstall the system for rolling updates.</li>.
<li>ROLLING_UPDATE_REPLACE: Create an instance and replace the old instance with it for rolling updates. This mode does not support the rollback API currently.</li>
 * @method RefreshSettings getRefreshSettings() Obtain Instance update setting parameters.
 * @method void setRefreshSettings(RefreshSettings $RefreshSettings) Set Instance update setting parameters.
 * @method string getActivityType() Obtain Refresh activity type. Valid values:
<li>NORMAL: normal refresh activity.</li>
<li>ROLLBACK: rollback refresh activity.</li>
 * @method void setActivityType(string $ActivityType) Set Refresh activity type. Valid values:
<li>NORMAL: normal refresh activity.</li>
<li>ROLLBACK: rollback refresh activity.</li>
 * @method string getStatus() Obtain Refresh activity status. Valid values:
<li>INIT: initializing.</li>
<li>RUNNING: running.</li>
<li>SUCCESSFUL: successful.</li>
<li>FAILED_PAUSE: paused due to the failure of a refresh batch.</li>
<li>AUTO_PAUSE: automatically paused due to the pause policy.</li>
<li>MANUAL_PAUSE: manually paused.</li>
<li>CANCELLED: canceled.</li>
<li>FAILED: failed.</li>
 * @method void setStatus(string $Status) Set Refresh activity status. Valid values:
<li>INIT: initializing.</li>
<li>RUNNING: running.</li>
<li>SUCCESSFUL: successful.</li>
<li>FAILED_PAUSE: paused due to the failure of a refresh batch.</li>
<li>AUTO_PAUSE: automatically paused due to the pause policy.</li>
<li>MANUAL_PAUSE: manually paused.</li>
<li>CANCELLED: canceled.</li>
<li>FAILED: failed.</li>
 * @method integer getCurrentRefreshBatchNum() Obtain Current refresh batch number. for example, 2 indicates the second batch of instances is being refreshed by the current activity.
 * @method void setCurrentRefreshBatchNum(integer $CurrentRefreshBatchNum) Set Current refresh batch number. for example, 2 indicates the second batch of instances is being refreshed by the current activity.
 * @method string getStartTime() Obtain The activity start time is refreshed in standard `UTC` time, in the format `YYYY-MM-DDTHH:MM:ssZ`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStartTime(string $StartTime) Set The activity start time is refreshed in standard `UTC` time, in the format `YYYY-MM-DDTHH:MM:ssZ`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEndTime() Obtain Refresh activity end time, in standard UTC time, in the format YYYY-MM-DDTHH:MM:ssZ.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEndTime(string $EndTime) Set Refresh activity end time, in standard UTC time, in the format YYYY-MM-DDTHH:MM:ssZ.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreatedTime() Obtain Refresh activity creation time, in standard UTC time, in the format YYYY-MM-DDTHH:MM:ssZ.
 * @method void setCreatedTime(string $CreatedTime) Set Refresh activity creation time, in standard UTC time, in the format YYYY-MM-DDTHH:MM:ssZ.
 */
class RefreshActivity extends AbstractModel
{
    /**
     * @var string Scaling group ID.
     */
    public $AutoScalingGroupId;

    /**
     * @var string Refresh activity ID.
     */
    public $RefreshActivityId;

    /**
     * @var string Original refresh activity ID. exists only in rollback refresh activity.
     */
    public $OriginRefreshActivityId;

    /**
     * @var array Refresh batch information list.
     */
    public $RefreshBatchSet;

    /**
     * @var string Refresh mode. valid values as follows:.
<Li>ROLLING_UPDATE_RESET: reinstall the system for rolling updates.</li>.
<li>ROLLING_UPDATE_REPLACE: Create an instance and replace the old instance with it for rolling updates. This mode does not support the rollback API currently.</li>
     */
    public $RefreshMode;

    /**
     * @var RefreshSettings Instance update setting parameters.
     */
    public $RefreshSettings;

    /**
     * @var string Refresh activity type. Valid values:
<li>NORMAL: normal refresh activity.</li>
<li>ROLLBACK: rollback refresh activity.</li>
     */
    public $ActivityType;

    /**
     * @var string Refresh activity status. Valid values:
<li>INIT: initializing.</li>
<li>RUNNING: running.</li>
<li>SUCCESSFUL: successful.</li>
<li>FAILED_PAUSE: paused due to the failure of a refresh batch.</li>
<li>AUTO_PAUSE: automatically paused due to the pause policy.</li>
<li>MANUAL_PAUSE: manually paused.</li>
<li>CANCELLED: canceled.</li>
<li>FAILED: failed.</li>
     */
    public $Status;

    /**
     * @var integer Current refresh batch number. for example, 2 indicates the second batch of instances is being refreshed by the current activity.
     */
    public $CurrentRefreshBatchNum;

    /**
     * @var string The activity start time is refreshed in standard `UTC` time, in the format `YYYY-MM-DDTHH:MM:ssZ`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StartTime;

    /**
     * @var string Refresh activity end time, in standard UTC time, in the format YYYY-MM-DDTHH:MM:ssZ.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EndTime;

    /**
     * @var string Refresh activity creation time, in standard UTC time, in the format YYYY-MM-DDTHH:MM:ssZ.
     */
    public $CreatedTime;

    /**
     * @param string $AutoScalingGroupId Scaling group ID.
     * @param string $RefreshActivityId Refresh activity ID.
     * @param string $OriginRefreshActivityId Original refresh activity ID. exists only in rollback refresh activity.
     * @param array $RefreshBatchSet Refresh batch information list.
     * @param string $RefreshMode Refresh mode. valid values as follows:.
<Li>ROLLING_UPDATE_RESET: reinstall the system for rolling updates.</li>.
<li>ROLLING_UPDATE_REPLACE: Create an instance and replace the old instance with it for rolling updates. This mode does not support the rollback API currently.</li>
     * @param RefreshSettings $RefreshSettings Instance update setting parameters.
     * @param string $ActivityType Refresh activity type. Valid values:
<li>NORMAL: normal refresh activity.</li>
<li>ROLLBACK: rollback refresh activity.</li>
     * @param string $Status Refresh activity status. Valid values:
<li>INIT: initializing.</li>
<li>RUNNING: running.</li>
<li>SUCCESSFUL: successful.</li>
<li>FAILED_PAUSE: paused due to the failure of a refresh batch.</li>
<li>AUTO_PAUSE: automatically paused due to the pause policy.</li>
<li>MANUAL_PAUSE: manually paused.</li>
<li>CANCELLED: canceled.</li>
<li>FAILED: failed.</li>
     * @param integer $CurrentRefreshBatchNum Current refresh batch number. for example, 2 indicates the second batch of instances is being refreshed by the current activity.
     * @param string $StartTime The activity start time is refreshed in standard `UTC` time, in the format `YYYY-MM-DDTHH:MM:ssZ`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EndTime Refresh activity end time, in standard UTC time, in the format YYYY-MM-DDTHH:MM:ssZ.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreatedTime Refresh activity creation time, in standard UTC time, in the format YYYY-MM-DDTHH:MM:ssZ.
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

        if (array_key_exists("RefreshActivityId",$param) and $param["RefreshActivityId"] !== null) {
            $this->RefreshActivityId = $param["RefreshActivityId"];
        }

        if (array_key_exists("OriginRefreshActivityId",$param) and $param["OriginRefreshActivityId"] !== null) {
            $this->OriginRefreshActivityId = $param["OriginRefreshActivityId"];
        }

        if (array_key_exists("RefreshBatchSet",$param) and $param["RefreshBatchSet"] !== null) {
            $this->RefreshBatchSet = [];
            foreach ($param["RefreshBatchSet"] as $key => $value){
                $obj = new RefreshBatch();
                $obj->deserialize($value);
                array_push($this->RefreshBatchSet, $obj);
            }
        }

        if (array_key_exists("RefreshMode",$param) and $param["RefreshMode"] !== null) {
            $this->RefreshMode = $param["RefreshMode"];
        }

        if (array_key_exists("RefreshSettings",$param) and $param["RefreshSettings"] !== null) {
            $this->RefreshSettings = new RefreshSettings();
            $this->RefreshSettings->deserialize($param["RefreshSettings"]);
        }

        if (array_key_exists("ActivityType",$param) and $param["ActivityType"] !== null) {
            $this->ActivityType = $param["ActivityType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CurrentRefreshBatchNum",$param) and $param["CurrentRefreshBatchNum"] !== null) {
            $this->CurrentRefreshBatchNum = $param["CurrentRefreshBatchNum"];
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
    }
}
