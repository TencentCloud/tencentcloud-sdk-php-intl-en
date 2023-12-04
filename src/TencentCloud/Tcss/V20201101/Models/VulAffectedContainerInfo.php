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
 * Information of the container affected by the vulnerability
 *
 * @method string getHostIP() Obtain Private IP
 * @method void setHostIP(string $HostIP) Set Private IP
 * @method string getContainerID() Obtain Container ID
 * @method void setContainerID(string $ContainerID) Set Container ID
 * @method string getContainerName() Obtain Container name
 * @method void setContainerName(string $ContainerName) Set Container name
 * @method string getPodName() Obtain Pod name
 * @method void setPodName(string $PodName) Set Pod name
 * @method string getPodIP() Obtain Pod IP
 * @method void setPodIP(string $PodIP) Set Pod IP
 * @method string getHostName() Obtain Server name
 * @method void setHostName(string $HostName) Set Server name
 * @method string getHostID() Obtain Server ID
 * @method void setHostID(string $HostID) Set Server ID
 * @method string getPublicIP() Obtain Public IP
 * @method void setPublicIP(string $PublicIP) Set Public IP
 * @method string getClusterID() Obtain Cluster ID
 * @method void setClusterID(string $ClusterID) Set Cluster ID
 * @method string getClusterName() Obtain Cluster name
 * @method void setClusterName(string $ClusterName) Set Cluster name
 * @method string getNodeType() Obtain Node type. Values: `NORMAL` (general node), `SUPER` (super node).
 * @method void setNodeType(string $NodeType) Set Node type. Values: `NORMAL` (general node), `SUPER` (super node).
 * @method string getNodeUniqueID() Obtain UID of a super node
 * @method void setNodeUniqueID(string $NodeUniqueID) Set UID of a super node
 * @method string getNodeID() Obtain ID of a super node
 * @method void setNodeID(string $NodeID) Set ID of a super node
 * @method string getNodeName() Obtain Super node name
 * @method void setNodeName(string $NodeName) Set Super node name
 */
class VulAffectedContainerInfo extends AbstractModel
{
    /**
     * @var string Private IP
     */
    public $HostIP;

    /**
     * @var string Container ID
     */
    public $ContainerID;

    /**
     * @var string Container name
     */
    public $ContainerName;

    /**
     * @var string Pod name
     */
    public $PodName;

    /**
     * @var string Pod IP
     */
    public $PodIP;

    /**
     * @var string Server name
     */
    public $HostName;

    /**
     * @var string Server ID
     */
    public $HostID;

    /**
     * @var string Public IP
     */
    public $PublicIP;

    /**
     * @var string Cluster ID
     */
    public $ClusterID;

    /**
     * @var string Cluster name
     */
    public $ClusterName;

    /**
     * @var string Node type. Values: `NORMAL` (general node), `SUPER` (super node).
     */
    public $NodeType;

    /**
     * @var string UID of a super node
     */
    public $NodeUniqueID;

    /**
     * @var string ID of a super node
     */
    public $NodeID;

    /**
     * @var string Super node name
     */
    public $NodeName;

    /**
     * @param string $HostIP Private IP
     * @param string $ContainerID Container ID
     * @param string $ContainerName Container name
     * @param string $PodName Pod name
     * @param string $PodIP Pod IP
     * @param string $HostName Server name
     * @param string $HostID Server ID
     * @param string $PublicIP Public IP
     * @param string $ClusterID Cluster ID
     * @param string $ClusterName Cluster name
     * @param string $NodeType Node type. Values: `NORMAL` (general node), `SUPER` (super node).
     * @param string $NodeUniqueID UID of a super node
     * @param string $NodeID ID of a super node
     * @param string $NodeName Super node name
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
        if (array_key_exists("HostIP",$param) and $param["HostIP"] !== null) {
            $this->HostIP = $param["HostIP"];
        }

        if (array_key_exists("ContainerID",$param) and $param["ContainerID"] !== null) {
            $this->ContainerID = $param["ContainerID"];
        }

        if (array_key_exists("ContainerName",$param) and $param["ContainerName"] !== null) {
            $this->ContainerName = $param["ContainerName"];
        }

        if (array_key_exists("PodName",$param) and $param["PodName"] !== null) {
            $this->PodName = $param["PodName"];
        }

        if (array_key_exists("PodIP",$param) and $param["PodIP"] !== null) {
            $this->PodIP = $param["PodIP"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("HostID",$param) and $param["HostID"] !== null) {
            $this->HostID = $param["HostID"];
        }

        if (array_key_exists("PublicIP",$param) and $param["PublicIP"] !== null) {
            $this->PublicIP = $param["PublicIP"];
        }

        if (array_key_exists("ClusterID",$param) and $param["ClusterID"] !== null) {
            $this->ClusterID = $param["ClusterID"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("NodeUniqueID",$param) and $param["NodeUniqueID"] !== null) {
            $this->NodeUniqueID = $param["NodeUniqueID"];
        }

        if (array_key_exists("NodeID",$param) and $param["NodeID"] !== null) {
            $this->NodeID = $param["NodeID"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }
    }
}
