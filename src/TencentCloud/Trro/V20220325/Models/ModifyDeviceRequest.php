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
namespace TencentCloud\Trro\V20220325\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDevice request structure.
 *
 * @method string getProjectId() Obtain The target project id to modify the device's affiliated project.
 * @method void setProjectId(string $ProjectId) Set The target project id to modify the device's affiliated project.
 * @method string getDeviceId() Obtain The target device id to modify the device.
 * @method void setDeviceId(string $DeviceId) Set The target device id to modify the device.
 * @method string getDeviceName() Obtain The modified device name; if not filled in, no modification will be made.
 * @method void setDeviceName(string $DeviceName) Set The modified device name; if not filled in, no modification will be made.
 * @method string getDeviceToken() Obtain The modified device authentication password; if not filled in, no modification will be made.
 * @method void setDeviceToken(string $DeviceToken) Set The modified device authentication password; if not filled in, no modification will be made.
 */
class ModifyDeviceRequest extends AbstractModel
{
    /**
     * @var string The target project id to modify the device's affiliated project.
     */
    public $ProjectId;

    /**
     * @var string The target device id to modify the device.
     */
    public $DeviceId;

    /**
     * @var string The modified device name; if not filled in, no modification will be made.
     */
    public $DeviceName;

    /**
     * @var string The modified device authentication password; if not filled in, no modification will be made.
     */
    public $DeviceToken;

    /**
     * @param string $ProjectId The target project id to modify the device's affiliated project.
     * @param string $DeviceId The target device id to modify the device.
     * @param string $DeviceName The modified device name; if not filled in, no modification will be made.
     * @param string $DeviceToken The modified device authentication password; if not filled in, no modification will be made.
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

        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("DeviceToken",$param) and $param["DeviceToken"] !== null) {
            $this->DeviceToken = $param["DeviceToken"];
        }
    }
}
