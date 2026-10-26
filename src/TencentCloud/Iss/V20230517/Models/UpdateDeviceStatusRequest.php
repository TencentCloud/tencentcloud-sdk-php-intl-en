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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateDeviceStatus request structure.
 *
 * @method string getDeviceId() Obtain Device ID (obtain from the ListDevices API for getting device list)
 * @method void setDeviceId(string $DeviceId) Set Device ID (obtain from the ListDevices API for getting device list)
 * @method integer getStatus() Obtain Disable enable status code (2: enable, 3: disable)
 * @method void setStatus(integer $Status) Set Disable enable status code (2: enable, 3: disable)
 */
class UpdateDeviceStatusRequest extends AbstractModel
{
    /**
     * @var string Device ID (obtain from the ListDevices API for getting device list)
     */
    public $DeviceId;

    /**
     * @var integer Disable enable status code (2: enable, 3: disable)
     */
    public $Status;

    /**
     * @param string $DeviceId Device ID (obtain from the ListDevices API for getting device list)
     * @param integer $Status Disable enable status code (2: enable, 3: disable)
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
        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
