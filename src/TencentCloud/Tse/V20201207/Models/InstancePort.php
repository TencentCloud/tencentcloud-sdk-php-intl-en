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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Instance listen port information
 *
 * @method string getHttpPort() Obtain Listen http port range.
 * @method void setHttpPort(string $HttpPort) Set Listen http port range.
 * @method string getHttpsPort() Obtain Listen port range for https.
 * @method void setHttpsPort(string $HttpsPort) Set Listen port range for https.
 * @method string getTcpPort() Obtain Listen port range for tcp.
 * @method void setTcpPort(string $TcpPort) Set Listen port range for tcp.
 * @method string getUdpPort() Obtain Listen udp port range.
 * @method void setUdpPort(string $UdpPort) Set Listen udp port range.
 */
class InstancePort extends AbstractModel
{
    /**
     * @var string Listen http port range.
     */
    public $HttpPort;

    /**
     * @var string Listen port range for https.
     */
    public $HttpsPort;

    /**
     * @var string Listen port range for tcp.
     */
    public $TcpPort;

    /**
     * @var string Listen udp port range.
     */
    public $UdpPort;

    /**
     * @param string $HttpPort Listen http port range.
     * @param string $HttpsPort Listen port range for https.
     * @param string $TcpPort Listen port range for tcp.
     * @param string $UdpPort Listen udp port range.
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
        if (array_key_exists("HttpPort",$param) and $param["HttpPort"] !== null) {
            $this->HttpPort = $param["HttpPort"];
        }

        if (array_key_exists("HttpsPort",$param) and $param["HttpsPort"] !== null) {
            $this->HttpsPort = $param["HttpsPort"];
        }

        if (array_key_exists("TcpPort",$param) and $param["TcpPort"] !== null) {
            $this->TcpPort = $param["TcpPort"];
        }

        if (array_key_exists("UdpPort",$param) and $param["UdpPort"] !== null) {
            $this->UdpPort = $param["UdpPort"];
        }
    }
}
