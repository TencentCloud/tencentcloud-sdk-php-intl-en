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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Protection domain port configuration information
 *
 * @method string getPort() Obtain Listening Port Configuration
 * @method void setPort(string $Port) Set Listening Port Configuration
 * @method string getProtocol() Obtain Corresponds one-to-one with ports, indicating the protocol associated with the port.
 * @method void setProtocol(string $Protocol) Set Corresponds one-to-one with ports, indicating the protocol associated with the port.
 * @method string getUpstreamPort() Obtain Corresponds one-to-one with port, indicates the origin port
 * @method void setUpstreamPort(string $UpstreamPort) Set Corresponds one-to-one with port, indicates the origin port
 * @method string getUpstreamProtocol() Obtain Corresponds one-to-one with Port, indicating the origin protocol
 * @method void setUpstreamProtocol(string $UpstreamProtocol) Set Corresponds one-to-one with Port, indicating the origin protocol
 * @method string getNginxServerId() Obtain Nginx Server ID
 * @method void setNginxServerId(string $NginxServerId) Set Nginx Server ID
 */
class PortItem extends AbstractModel
{
    /**
     * @var string Listening Port Configuration
     */
    public $Port;

    /**
     * @var string Corresponds one-to-one with ports, indicating the protocol associated with the port.
     */
    public $Protocol;

    /**
     * @var string Corresponds one-to-one with port, indicates the origin port
     */
    public $UpstreamPort;

    /**
     * @var string Corresponds one-to-one with Port, indicating the origin protocol
     */
    public $UpstreamProtocol;

    /**
     * @var string Nginx Server ID
     */
    public $NginxServerId;

    /**
     * @param string $Port Listening Port Configuration
     * @param string $Protocol Corresponds one-to-one with ports, indicating the protocol associated with the port.
     * @param string $UpstreamPort Corresponds one-to-one with port, indicates the origin port
     * @param string $UpstreamProtocol Corresponds one-to-one with Port, indicating the origin protocol
     * @param string $NginxServerId Nginx Server ID
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
        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("UpstreamPort",$param) and $param["UpstreamPort"] !== null) {
            $this->UpstreamPort = $param["UpstreamPort"];
        }

        if (array_key_exists("UpstreamProtocol",$param) and $param["UpstreamProtocol"] !== null) {
            $this->UpstreamProtocol = $param["UpstreamProtocol"];
        }

        if (array_key_exists("NginxServerId",$param) and $param["NginxServerId"] !== null) {
            $this->NginxServerId = $param["NginxServerId"];
        }
    }
}
