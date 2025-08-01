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
 * GetDeviceLicense request structure.
 *
 * @method string getProjectId() Obtain Project id to which the target device belongs.
 * @method void setProjectId(string $ProjectId) Set Project id to which the target device belongs.
 * @method string getDeviceId() Obtain Target device id.
 * @method void setDeviceId(string $DeviceId) Set Target device id.
 */
class GetDeviceLicenseRequest extends AbstractModel
{
    /**
     * @var string Project id to which the target device belongs.
     */
    public $ProjectId;

    /**
     * @var string Target device id.
     */
    public $DeviceId;

    /**
     * @param string $ProjectId Project id to which the target device belongs.
     * @param string $DeviceId Target device id.
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
    }
}
