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
 * BatchOperateDevice request structure.
 *
 * @method array getDeviceIds() Obtain <p>Device ID array (obtain from the device list API ListDevices)</p><p>For parameter values, see <a href="https://www.tencentcloud.com/document/api/1344/95871?from_cn_redirect=1">ListDevices</a></p>
 * @method void setDeviceIds(array $DeviceIds) Set <p>Device ID array (obtain from the device list API ListDevices)</p><p>For parameter values, see <a href="https://www.tencentcloud.com/document/api/1344/95871?from_cn_redirect=1">ListDevices</a></p>
 * @method string getCmd() Obtain <p>Operation command</p><p>Enumeration values:</p><ul><li>enable: Enable</li><li>disable: Disable</li><li>delete: Delete</li><li>sync: Synchronize device channel</li></ul>
 * @method void setCmd(string $Cmd) Set <p>Operation command</p><p>Enumeration values:</p><ul><li>enable: Enable</li><li>disable: Disable</li><li>delete: Delete</li><li>sync: Synchronize device channel</li></ul>
 */
class BatchOperateDeviceRequest extends AbstractModel
{
    /**
     * @var array <p>Device ID array (obtain from the device list API ListDevices)</p><p>For parameter values, see <a href="https://www.tencentcloud.com/document/api/1344/95871?from_cn_redirect=1">ListDevices</a></p>
     */
    public $DeviceIds;

    /**
     * @var string <p>Operation command</p><p>Enumeration values:</p><ul><li>enable: Enable</li><li>disable: Disable</li><li>delete: Delete</li><li>sync: Synchronize device channel</li></ul>
     */
    public $Cmd;

    /**
     * @param array $DeviceIds <p>Device ID array (obtain from the device list API ListDevices)</p><p>For parameter values, see <a href="https://www.tencentcloud.com/document/api/1344/95871?from_cn_redirect=1">ListDevices</a></p>
     * @param string $Cmd <p>Operation command</p><p>Enumeration values:</p><ul><li>enable: Enable</li><li>disable: Disable</li><li>delete: Delete</li><li>sync: Synchronize device channel</li></ul>
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
        if (array_key_exists("DeviceIds",$param) and $param["DeviceIds"] !== null) {
            $this->DeviceIds = $param["DeviceIds"];
        }

        if (array_key_exists("Cmd",$param) and $param["Cmd"] !== null) {
            $this->Cmd = $param["Cmd"];
        }
    }
}
