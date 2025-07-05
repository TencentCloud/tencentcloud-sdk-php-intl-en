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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Port of the custom rule of the network cluster policy
 *
 * @method string getProtocol() Obtain Protocol of the network policy
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProtocol(string $Protocol) Set Protocol of the network policy
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPort() Obtain Port of the network policy
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPort(string $Port) Set Port of the network policy
Note: This field may return null, indicating that no valid values can be obtained.
 */
class NetworkPorts extends AbstractModel
{
    /**
     * @var string Protocol of the network policy
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Protocol;

    /**
     * @var string Port of the network policy
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Port;

    /**
     * @param string $Protocol Protocol of the network policy
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Port Port of the network policy
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }
    }
}
