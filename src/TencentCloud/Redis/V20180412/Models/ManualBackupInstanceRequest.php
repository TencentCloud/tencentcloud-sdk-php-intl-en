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
 * ManualBackupInstance request structure.
 *
 * @method string getInstanceId() Obtain ID of a specified instance,  such as  "crs-xjhsdj****" Log in to the [Redis console](https://console.cloud.tencent.com/redis) and copy the instance ID in the instance list.
 * @method void setInstanceId(string $InstanceId) Set ID of a specified instance,  such as  "crs-xjhsdj****" Log in to the [Redis console](https://console.cloud.tencent.com/redis) and copy the instance ID in the instance list.
 * @method string getRemark() Obtain Remarks for manual backup task
 * @method void setRemark(string $Remark) Set Remarks for manual backup task
 * @method integer getStorageDays() Obtain Retention period of backup data in days.  Default value: 7 days.  Value range: [0,1825].  If the value exceeds 7 days, [submit a ticket](https://console.cloud.tencent.com/workorder/category) for application. - If this parameter is not configured, it will set to be the same as the period of automatic backup retention. - If automatic backup is not set, the default value will be 7 days.
 * @method void setStorageDays(integer $StorageDays) Set Retention period of backup data in days.  Default value: 7 days.  Value range: [0,1825].  If the value exceeds 7 days, [submit a ticket](https://console.cloud.tencent.com/workorder/category) for application. - If this parameter is not configured, it will set to be the same as the period of automatic backup retention. - If automatic backup is not set, the default value will be 7 days.
 */
class ManualBackupInstanceRequest extends AbstractModel
{
    /**
     * @var string ID of a specified instance,  such as  "crs-xjhsdj****" Log in to the [Redis console](https://console.cloud.tencent.com/redis) and copy the instance ID in the instance list.
     */
    public $InstanceId;

    /**
     * @var string Remarks for manual backup task
     */
    public $Remark;

    /**
     * @var integer Retention period of backup data in days.  Default value: 7 days.  Value range: [0,1825].  If the value exceeds 7 days, [submit a ticket](https://console.cloud.tencent.com/workorder/category) for application. - If this parameter is not configured, it will set to be the same as the period of automatic backup retention. - If automatic backup is not set, the default value will be 7 days.
     */
    public $StorageDays;

    /**
     * @param string $InstanceId ID of a specified instance,  such as  "crs-xjhsdj****" Log in to the [Redis console](https://console.cloud.tencent.com/redis) and copy the instance ID in the instance list.
     * @param string $Remark Remarks for manual backup task
     * @param integer $StorageDays Retention period of backup data in days.  Default value: 7 days.  Value range: [0,1825].  If the value exceeds 7 days, [submit a ticket](https://console.cloud.tencent.com/workorder/category) for application. - If this parameter is not configured, it will set to be the same as the period of automatic backup retention. - If automatic backup is not set, the default value will be 7 days.
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

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("StorageDays",$param) and $param["StorageDays"] !== null) {
            $this->StorageDays = $param["StorageDays"];
        }
    }
}
