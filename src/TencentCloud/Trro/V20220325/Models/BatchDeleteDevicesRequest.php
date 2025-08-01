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
namespace TencentCloud\Trro\V20220325\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BatchDeleteDevices request structure.
 *
 * @method string getProjectId() Obtain Project id of the targeted deleted device.
 * @method void setProjectId(string $ProjectId) Set Project id of the targeted deleted device.
 * @method array getDeviceIds() Obtain Device id array of the targeted deleted device.
 * @method void setDeviceIds(array $DeviceIds) Set Device id array of the targeted deleted device.
 */
class BatchDeleteDevicesRequest extends AbstractModel
{
    /**
     * @var string Project id of the targeted deleted device.
     */
    public $ProjectId;

    /**
     * @var array Device id array of the targeted deleted device.
     */
    public $DeviceIds;

    /**
     * @param string $ProjectId Project id of the targeted deleted device.
     * @param array $DeviceIds Device id array of the targeted deleted device.
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("DeviceIds",$param) and $param["DeviceIds"] !== null) {
            $this->DeviceIds = $param["DeviceIds"];
        }
    }
}
