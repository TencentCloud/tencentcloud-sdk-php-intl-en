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
 * Device address return result
 *
 * @method string getDeviceId() Obtain Device Id
 * @method void setDeviceId(string $DeviceId) Set Device Id
 * @method string getAddr() Obtain IP address
 * @method void setAddr(string $Addr) Set IP address
 */
class RemoteAddrInfo extends AbstractModel
{
    /**
     * @var string Device Id
     */
    public $DeviceId;

    /**
     * @var string IP address
     */
    public $Addr;

    /**
     * @param string $DeviceId Device Id
     * @param string $Addr IP address
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

        if (array_key_exists("Addr",$param) and $param["Addr"] !== null) {
            $this->Addr = $param["Addr"];
        }
    }
}
