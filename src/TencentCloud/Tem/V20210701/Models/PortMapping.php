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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Service port mapping
 *
 * @method integer getPort() Obtain Port.
 * @method void setPort(integer $Port) Set Port.
 * @method integer getTargetPort() Obtain Mapped port
 * @method void setTargetPort(integer $TargetPort) Set Mapped port
 * @method string getProtocol() Obtain TCP/UDP protocol stack.
 * @method void setProtocol(string $Protocol) Set TCP/UDP protocol stack.
 * @method string getServiceName() Obtain K8s service name
 * @method void setServiceName(string $ServiceName) Set K8s service name
 */
class PortMapping extends AbstractModel
{
    /**
     * @var integer Port.
     */
    public $Port;

    /**
     * @var integer Mapped port
     */
    public $TargetPort;

    /**
     * @var string TCP/UDP protocol stack.
     */
    public $Protocol;

    /**
     * @var string K8s service name
     */
    public $ServiceName;

    /**
     * @param integer $Port Port.
     * @param integer $TargetPort Mapped port
     * @param string $Protocol TCP/UDP protocol stack.
     * @param string $ServiceName K8s service name
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

        if (array_key_exists("TargetPort",$param) and $param["TargetPort"] !== null) {
            $this->TargetPort = $param["TargetPort"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }
    }
}
