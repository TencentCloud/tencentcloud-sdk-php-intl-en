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
 * CreateDevice request structure.
 *
 * @method string getProjectId() Obtain Create the project id to which the device belongs.
 * @method void setProjectId(string $ProjectId) Set Create the project id to which the device belongs.
 * @method string getDeviceId() Obtain Create a device id, which must be unique within the project, consisting of lowercase english letters, numbers, and underscores, with a length not exceeding 18.
 * @method void setDeviceId(string $DeviceId) Set Create a device id, which must be unique within the project, consisting of lowercase english letters, numbers, and underscores, with a length not exceeding 18.
 * @method string getDeviceName() Obtain Create a device name, with a length of less than 24, which can include chinese, numbers, english letters, and underscores.
 * @method void setDeviceName(string $DeviceName) Set Create a device name, with a length of less than 24, which can include chinese, numbers, english letters, and underscores.
 * @method string getDeviceType() Obtain Device type, field for on-site device (controlled device), remote for remote device (control device), default is field if not specified.
 * @method void setDeviceType(string $DeviceType) Set Device type, field for on-site device (controlled device), remote for remote device (control device), default is field if not specified.
 * @method string getDeviceToken() Obtain Device authentication password, consisting of uppercase and lowercase english letters and digits, must be 16 characters.
 * @method void setDeviceToken(string $DeviceToken) Set Device authentication password, consisting of uppercase and lowercase english letters and digits, must be 16 characters.
 */
class CreateDeviceRequest extends AbstractModel
{
    /**
     * @var string Create the project id to which the device belongs.
     */
    public $ProjectId;

    /**
     * @var string Create a device id, which must be unique within the project, consisting of lowercase english letters, numbers, and underscores, with a length not exceeding 18.
     */
    public $DeviceId;

    /**
     * @var string Create a device name, with a length of less than 24, which can include chinese, numbers, english letters, and underscores.
     */
    public $DeviceName;

    /**
     * @var string Device type, field for on-site device (controlled device), remote for remote device (control device), default is field if not specified.
     */
    public $DeviceType;

    /**
     * @var string Device authentication password, consisting of uppercase and lowercase english letters and digits, must be 16 characters.
     */
    public $DeviceToken;

    /**
     * @param string $ProjectId Create the project id to which the device belongs.
     * @param string $DeviceId Create a device id, which must be unique within the project, consisting of lowercase english letters, numbers, and underscores, with a length not exceeding 18.
     * @param string $DeviceName Create a device name, with a length of less than 24, which can include chinese, numbers, english letters, and underscores.
     * @param string $DeviceType Device type, field for on-site device (controlled device), remote for remote device (control device), default is field if not specified.
     * @param string $DeviceToken Device authentication password, consisting of uppercase and lowercase english letters and digits, must be 16 characters.
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

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("DeviceToken",$param) and $param["DeviceToken"] !== null) {
            $this->DeviceToken = $param["DeviceToken"];
        }
    }
}
