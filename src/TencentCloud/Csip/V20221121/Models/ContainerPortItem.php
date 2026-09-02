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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Container Port Information
 *
 * @method string getProcessName() Obtain Name of the listening process
 * @method void setProcessName(string $ProcessName) Set Name of the listening process
 * @method integer getContainerPort() Obtain Listening port in container
 * @method void setContainerPort(integer $ContainerPort) Set Listening port in container
 * @method string getRunAs() Obtain Process running user
 * @method void setRunAs(string $RunAs) Set Process running user
 * @method integer getContainerPID() Obtain Containerized process ID
 * @method void setContainerPID(integer $ContainerPID) Set Containerized process ID
 * @method string getHostInnerIP() Obtain Host private IP address
 * @method void setHostInnerIP(string $HostInnerIP) Set Host private IP address
 * @method string getHostPublicIP() Obtain Public network IP address of the host machine.
 * @method void setHostPublicIP(string $HostPublicIP) Set Public network IP address of the host machine.
 * @method integer getPublicPort() Obtain Host machine mapping port
 * @method void setPublicPort(integer $PublicPort) Set Host machine mapping port
 * @method string getProtocolType() Obtain Network protocol type.
 * @method void setProtocolType(string $ProtocolType) Set Network protocol type.
 */
class ContainerPortItem extends AbstractModel
{
    /**
     * @var string Name of the listening process
     */
    public $ProcessName;

    /**
     * @var integer Listening port in container
     */
    public $ContainerPort;

    /**
     * @var string Process running user
     */
    public $RunAs;

    /**
     * @var integer Containerized process ID
     */
    public $ContainerPID;

    /**
     * @var string Host private IP address
     */
    public $HostInnerIP;

    /**
     * @var string Public network IP address of the host machine.
     */
    public $HostPublicIP;

    /**
     * @var integer Host machine mapping port
     */
    public $PublicPort;

    /**
     * @var string Network protocol type.
     */
    public $ProtocolType;

    /**
     * @param string $ProcessName Name of the listening process
     * @param integer $ContainerPort Listening port in container
     * @param string $RunAs Process running user
     * @param integer $ContainerPID Containerized process ID
     * @param string $HostInnerIP Host private IP address
     * @param string $HostPublicIP Public network IP address of the host machine.
     * @param integer $PublicPort Host machine mapping port
     * @param string $ProtocolType Network protocol type.
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
        if (array_key_exists("ProcessName",$param) and $param["ProcessName"] !== null) {
            $this->ProcessName = $param["ProcessName"];
        }

        if (array_key_exists("ContainerPort",$param) and $param["ContainerPort"] !== null) {
            $this->ContainerPort = $param["ContainerPort"];
        }

        if (array_key_exists("RunAs",$param) and $param["RunAs"] !== null) {
            $this->RunAs = $param["RunAs"];
        }

        if (array_key_exists("ContainerPID",$param) and $param["ContainerPID"] !== null) {
            $this->ContainerPID = $param["ContainerPID"];
        }

        if (array_key_exists("HostInnerIP",$param) and $param["HostInnerIP"] !== null) {
            $this->HostInnerIP = $param["HostInnerIP"];
        }

        if (array_key_exists("HostPublicIP",$param) and $param["HostPublicIP"] !== null) {
            $this->HostPublicIP = $param["HostPublicIP"];
        }

        if (array_key_exists("PublicPort",$param) and $param["PublicPort"] !== null) {
            $this->PublicPort = $param["PublicPort"];
        }

        if (array_key_exists("ProtocolType",$param) and $param["ProtocolType"] !== null) {
            $this->ProtocolType = $param["ProtocolType"];
        }
    }
}
