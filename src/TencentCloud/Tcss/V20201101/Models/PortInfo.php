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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * List of ports
 *
 * @method string getType() Obtain Type
 * @method void setType(string $Type) Set Type
 * @method string getPublicIP() Obtain Public IP
 * @method void setPublicIP(string $PublicIP) Set Public IP
 * @method integer getPublicPort() Obtain Server port
 * @method void setPublicPort(integer $PublicPort) Set Server port
 * @method integer getContainerPort() Obtain Container port
 * @method void setContainerPort(integer $ContainerPort) Set Container port
 * @method integer getContainerPID() Obtain Container PID
 * @method void setContainerPID(integer $ContainerPID) Set Container PID
 * @method string getContainerName() Obtain Container name
 * @method void setContainerName(string $ContainerName) Set Container name
 * @method string getHostID() Obtain Server ID
 * @method void setHostID(string $HostID) Set Server ID
 * @method string getHostIP() Obtain Server IP
 * @method void setHostIP(string $HostIP) Set Server IP
 * @method string getProcessName() Obtain Process name
 * @method void setProcessName(string $ProcessName) Set Process name
 * @method string getListenContainer() Obtain Monitored address in the container
 * @method void setListenContainer(string $ListenContainer) Set Monitored address in the container
 * @method string getListenHost() Obtain Monitored address outside the container
 * @method void setListenHost(string $ListenHost) Set Monitored address outside the container
 * @method string getRunAs() Obtain Operating account
 * @method void setRunAs(string $RunAs) Set Operating account
 * @method string getHostName() Obtain Server name
 * @method void setHostName(string $HostName) Set Server name
 * @method string getPublicIp() Obtain Public IP
 * @method void setPublicIp(string $PublicIp) Set Public IP
 * @method string getNodeID() Obtain Node ID
 * @method void setNodeID(string $NodeID) Set Node ID
 * @method string getPodIP() Obtain Pod IP
 * @method void setPodIP(string $PodIP) Set Pod IP
 * @method string getPodName() Obtain Pod name
 * @method void setPodName(string $PodName) Set Pod name
 * @method string getNodeType() Obtain Node type.
 * @method void setNodeType(string $NodeType) Set Node type.
 * @method string getNodeUniqueID() Obtain UID of the super node
 * @method void setNodeUniqueID(string $NodeUniqueID) Set UID of the super node
 */
class PortInfo extends AbstractModel
{
    /**
     * @var string Type
     */
    public $Type;

    /**
     * @var string Public IP
     */
    public $PublicIP;

    /**
     * @var integer Server port
     */
    public $PublicPort;

    /**
     * @var integer Container port
     */
    public $ContainerPort;

    /**
     * @var integer Container PID
     */
    public $ContainerPID;

    /**
     * @var string Container name
     */
    public $ContainerName;

    /**
     * @var string Server ID
     */
    public $HostID;

    /**
     * @var string Server IP
     */
    public $HostIP;

    /**
     * @var string Process name
     */
    public $ProcessName;

    /**
     * @var string Monitored address in the container
     */
    public $ListenContainer;

    /**
     * @var string Monitored address outside the container
     */
    public $ListenHost;

    /**
     * @var string Operating account
     */
    public $RunAs;

    /**
     * @var string Server name
     */
    public $HostName;

    /**
     * @var string Public IP
     */
    public $PublicIp;

    /**
     * @var string Node ID
     */
    public $NodeID;

    /**
     * @var string Pod IP
     */
    public $PodIP;

    /**
     * @var string Pod name
     */
    public $PodName;

    /**
     * @var string Node type.
     */
    public $NodeType;

    /**
     * @var string UID of the super node
     */
    public $NodeUniqueID;

    /**
     * @param string $Type Type
     * @param string $PublicIP Public IP
     * @param integer $PublicPort Server port
     * @param integer $ContainerPort Container port
     * @param integer $ContainerPID Container PID
     * @param string $ContainerName Container name
     * @param string $HostID Server ID
     * @param string $HostIP Server IP
     * @param string $ProcessName Process name
     * @param string $ListenContainer Monitored address in the container
     * @param string $ListenHost Monitored address outside the container
     * @param string $RunAs Operating account
     * @param string $HostName Server name
     * @param string $PublicIp Public IP
     * @param string $NodeID Node ID
     * @param string $PodIP Pod IP
     * @param string $PodName Pod name
     * @param string $NodeType Node type.
     * @param string $NodeUniqueID UID of the super node
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("PublicIP",$param) and $param["PublicIP"] !== null) {
            $this->PublicIP = $param["PublicIP"];
        }

        if (array_key_exists("PublicPort",$param) and $param["PublicPort"] !== null) {
            $this->PublicPort = $param["PublicPort"];
        }

        if (array_key_exists("ContainerPort",$param) and $param["ContainerPort"] !== null) {
            $this->ContainerPort = $param["ContainerPort"];
        }

        if (array_key_exists("ContainerPID",$param) and $param["ContainerPID"] !== null) {
            $this->ContainerPID = $param["ContainerPID"];
        }

        if (array_key_exists("ContainerName",$param) and $param["ContainerName"] !== null) {
            $this->ContainerName = $param["ContainerName"];
        }

        if (array_key_exists("HostID",$param) and $param["HostID"] !== null) {
            $this->HostID = $param["HostID"];
        }

        if (array_key_exists("HostIP",$param) and $param["HostIP"] !== null) {
            $this->HostIP = $param["HostIP"];
        }

        if (array_key_exists("ProcessName",$param) and $param["ProcessName"] !== null) {
            $this->ProcessName = $param["ProcessName"];
        }

        if (array_key_exists("ListenContainer",$param) and $param["ListenContainer"] !== null) {
            $this->ListenContainer = $param["ListenContainer"];
        }

        if (array_key_exists("ListenHost",$param) and $param["ListenHost"] !== null) {
            $this->ListenHost = $param["ListenHost"];
        }

        if (array_key_exists("RunAs",$param) and $param["RunAs"] !== null) {
            $this->RunAs = $param["RunAs"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("NodeID",$param) and $param["NodeID"] !== null) {
            $this->NodeID = $param["NodeID"];
        }

        if (array_key_exists("PodIP",$param) and $param["PodIP"] !== null) {
            $this->PodIP = $param["PodIP"];
        }

        if (array_key_exists("PodName",$param) and $param["PodName"] !== null) {
            $this->PodName = $param["PodName"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("NodeUniqueID",$param) and $param["NodeUniqueID"] !== null) {
            $this->NodeUniqueID = $param["NodeUniqueID"];
        }
    }
}
