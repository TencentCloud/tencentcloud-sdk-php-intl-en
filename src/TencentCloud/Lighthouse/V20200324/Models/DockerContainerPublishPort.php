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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Port mapping of the Docker container
 *
 * @method integer getHostPort() Obtain Host port
 * @method void setHostPort(integer $HostPort) Set Host port
 * @method integer getContainerPort() Obtain Container port
 * @method void setContainerPort(integer $ContainerPort) Set Container port
 * @method string getIp() Obtain External IP. It defaults to 0.0.0.0.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIp(string $Ip) Set External IP. It defaults to 0.0.0.0.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProtocol() Obtain The protocol defaults to `tcp`. Valid values: `tcp`, `udp` and `sctp`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProtocol(string $Protocol) Set The protocol defaults to `tcp`. Valid values: `tcp`, `udp` and `sctp`.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DockerContainerPublishPort extends AbstractModel
{
    /**
     * @var integer Host port
     */
    public $HostPort;

    /**
     * @var integer Container port
     */
    public $ContainerPort;

    /**
     * @var string External IP. It defaults to 0.0.0.0.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Ip;

    /**
     * @var string The protocol defaults to `tcp`. Valid values: `tcp`, `udp` and `sctp`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Protocol;

    /**
     * @param integer $HostPort Host port
     * @param integer $ContainerPort Container port
     * @param string $Ip External IP. It defaults to 0.0.0.0.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Protocol The protocol defaults to `tcp`. Valid values: `tcp`, `udp` and `sctp`.
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
        if (array_key_exists("HostPort",$param) and $param["HostPort"] !== null) {
            $this->HostPort = $param["HostPort"];
        }

        if (array_key_exists("ContainerPort",$param) and $param["ContainerPort"] !== null) {
            $this->ContainerPort = $param["ContainerPort"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }
    }
}
