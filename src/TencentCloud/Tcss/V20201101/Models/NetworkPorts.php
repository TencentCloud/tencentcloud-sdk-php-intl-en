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
 * @method string getProtocol() Obtain Network Policy Protocol
 * @method void setProtocol(string $Protocol) Set Network Policy Protocol
 * @method string getPort() Obtain Network Policy Port
 * @method void setPort(string $Port) Set Network Policy Port
 */
class NetworkPorts extends AbstractModel
{
    /**
     * @var string Network Policy Protocol
     */
    public $Protocol;

    /**
     * @var string Network Policy Port
     */
    public $Port;

    /**
     * @param string $Protocol Network Policy Protocol
     * @param string $Port Network Policy Port
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
