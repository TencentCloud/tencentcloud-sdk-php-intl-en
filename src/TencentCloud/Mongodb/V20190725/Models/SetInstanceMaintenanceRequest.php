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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SetInstanceMaintenance request structure.
 *
 * @method string getInstanceId() Obtain Specifies the instance ID. For example, cmgo-p8vn****. Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/mongodb), and copy the instance ID from the instance list.

 * @method void setInstanceId(string $InstanceId) Set Specifies the instance ID. For example, cmgo-p8vn****. Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/mongodb), and copy the instance ID from the instance list.

 * @method string getMaintenanceStart() Obtain Start time of the maintenance window. The value range is any hour or half-hour between 00:00 and 23:00, such as 00:00 or 00:30.
 * @method void setMaintenanceStart(string $MaintenanceStart) Set Start time of the maintenance window. The value range is any hour or half-hour between 00:00 and 23:00, such as 00:00 or 00:30.
 * @method string getMaintenanceEnd() Obtain End time of the maintenance window.
- The value range is any hour or half-hour between 00:00 and 23:00. The minimum value of maintenance time is 30 minutes, and the maximum value is 3 hours.
- The end time should be later than the start time.
 * @method void setMaintenanceEnd(string $MaintenanceEnd) Set End time of the maintenance window.
- The value range is any hour or half-hour between 00:00 and 23:00. The minimum value of maintenance time is 30 minutes, and the maximum value is 3 hours.
- The end time should be later than the start time.
 */
class SetInstanceMaintenanceRequest extends AbstractModel
{
    /**
     * @var string Specifies the instance ID. For example, cmgo-p8vn****. Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/mongodb), and copy the instance ID from the instance list.

     */
    public $InstanceId;

    /**
     * @var string Start time of the maintenance window. The value range is any hour or half-hour between 00:00 and 23:00, such as 00:00 or 00:30.
     */
    public $MaintenanceStart;

    /**
     * @var string End time of the maintenance window.
- The value range is any hour or half-hour between 00:00 and 23:00. The minimum value of maintenance time is 30 minutes, and the maximum value is 3 hours.
- The end time should be later than the start time.
     */
    public $MaintenanceEnd;

    /**
     * @param string $InstanceId Specifies the instance ID. For example, cmgo-p8vn****. Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/mongodb), and copy the instance ID from the instance list.

     * @param string $MaintenanceStart Start time of the maintenance window. The value range is any hour or half-hour between 00:00 and 23:00, such as 00:00 or 00:30.
     * @param string $MaintenanceEnd End time of the maintenance window.
- The value range is any hour or half-hour between 00:00 and 23:00. The minimum value of maintenance time is 30 minutes, and the maximum value is 3 hours.
- The end time should be later than the start time.
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

        if (array_key_exists("MaintenanceStart",$param) and $param["MaintenanceStart"] !== null) {
            $this->MaintenanceStart = $param["MaintenanceStart"];
        }

        if (array_key_exists("MaintenanceEnd",$param) and $param["MaintenanceEnd"] !== null) {
            $this->MaintenanceEnd = $param["MaintenanceEnd"];
        }
    }
}
