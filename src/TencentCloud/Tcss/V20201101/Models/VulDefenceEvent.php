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
 * Exploit prevention event details
 *
 * @method string getCVEID() Obtain Vulnerability CVE ID
 * @method void setCVEID(string $CVEID) Set Vulnerability CVE ID
 * @method string getVulName() Obtain Vulnerability name
 * @method void setVulName(string $VulName) Set Vulnerability name
 * @method string getPocID() Obtain POC ID
 * @method void setPocID(string $PocID) Set POC ID
 * @method string getEventType() Obtain Intrusion status
 * @method void setEventType(string $EventType) Set Intrusion status
 * @method string getSourceIP() Obtain Attacker IP
 * @method void setSourceIP(string $SourceIP) Set Attacker IP
 * @method string getCity() Obtain Region of the attacker IP
 * @method void setCity(string $City) Set Region of the attacker IP
 * @method integer getEventCount() Obtain Number of events
 * @method void setEventCount(integer $EventCount) Set Number of events
 * @method string getContainerID() Obtain Container ID
 * @method void setContainerID(string $ContainerID) Set Container ID
 * @method string getContainerName() Obtain Container name
 * @method void setContainerName(string $ContainerName) Set Container name
 * @method string getImageID() Obtain Image ID
 * @method void setImageID(string $ImageID) Set Image ID
 * @method string getImageName() Obtain Image name
 * @method void setImageName(string $ImageName) Set Image name
 * @method string getStatus() Obtain Processing status
 * @method void setStatus(string $Status) Set Processing status
 * @method integer getEventID() Obtain Event ID
 * @method void setEventID(integer $EventID) Set Event ID
 * @method string getCreateTime() Obtain First detection time
 * @method void setCreateTime(string $CreateTime) Set First detection time
 * @method string getContainerNetStatus() Obtain Isolation status
`NORMAL`: 	Not isolated.
`ISOLATED`: 		Isolated.
`ISOLATING`: 		Isolating.
`ISOLATE_FAILED`: 	Isolation failed.
`RESTORING`: Recovering.
`RESTORE_FAILED`: Recovery failed.
 * @method void setContainerNetStatus(string $ContainerNetStatus) Set Isolation status
`NORMAL`: 	Not isolated.
`ISOLATED`: 		Isolated.
`ISOLATING`: 		Isolating.
`ISOLATE_FAILED`: 	Isolation failed.
`RESTORING`: Recovering.
`RESTORE_FAILED`: Recovery failed.
 * @method string getMergeTime() Obtain Last discovery time
 * @method void setMergeTime(string $MergeTime) Set Last discovery time
 * @method string getContainerStatus() Obtain Container status.
RUNNING: running
PAUSED
Stop: STOPPED
CREATED
DESTROYED
RESTARTING
Migrating: REMOVING
 * @method void setContainerStatus(string $ContainerStatus) Set Container status.
RUNNING: running
PAUSED
Stop: STOPPED
CREATED
DESTROYED
RESTARTING
Migrating: REMOVING
 * @method string getContainerNetSubStatus() Obtain Container sub-status
AGENT_OFFLINE
	NODE_DESTROYED
	CONTAINER_EXITED
	"CONTAINER_DESTROYED" //Container destroyed
	"SHARED_HOST"         // Container shares network with host
	RESOURCE_LIMIT
	"UNKNOW"              // Reason unknown
 * @method void setContainerNetSubStatus(string $ContainerNetSubStatus) Set Container sub-status
AGENT_OFFLINE
	NODE_DESTROYED
	CONTAINER_EXITED
	"CONTAINER_DESTROYED" //Container destroyed
	"SHARED_HOST"         // Container shares network with host
	RESOURCE_LIMIT
	"UNKNOW"              // Reason unknown
 * @method string getContainerIsolateOperationSrc() Obtain Container Isolation Operation Source
 * @method void setContainerIsolateOperationSrc(string $ContainerIsolateOperationSrc) Set Container Isolation Operation Source
 * @method string getQUUID() Obtain Host QUUID/Super Node ID
 * @method void setQUUID(string $QUUID) Set Host QUUID/Super Node ID
 * @method string getHostIP() Obtain Host private IP address
 * @method void setHostIP(string $HostIP) Set Host private IP address
 * @method string getHostName() Obtain Host Name/Super Node Name
 * @method void setHostName(string $HostName) Set Host Name/Super Node Name
 * @method string getNodeType() Obtain Node type. Values: `NORMAL` (general node), `SUPER` (super node).
 * @method void setNodeType(string $NodeType) Set Node type. Values: `NORMAL` (general node), `SUPER` (super node).
 * @method string getPublicIP() Obtain Public IP
 * @method void setPublicIP(string $PublicIP) Set Public IP
 * @method string getNodeUniqueID() Obtain UID of a super node
 * @method void setNodeUniqueID(string $NodeUniqueID) Set UID of a super node
 * @method string getNodeID() Obtain ID of a super node
 * @method void setNodeID(string $NodeID) Set ID of a super node
 * @method string getClusterID() Obtain Cluster ID
 * @method void setClusterID(string $ClusterID) Set Cluster ID
 * @method string getClusterName() Obtain Cluster name
 * @method void setClusterName(string $ClusterName) Set Cluster name
 * @method string getPodName() Obtain Pod name
 * @method void setPodName(string $PodName) Set Pod name
 * @method string getPodIP() Obtain pod ip
 * @method void setPodIP(string $PodIP) Set pod ip
 */
class VulDefenceEvent extends AbstractModel
{
    /**
     * @var string Vulnerability CVE ID
     */
    public $CVEID;

    /**
     * @var string Vulnerability name
     */
    public $VulName;

    /**
     * @var string POC ID
     */
    public $PocID;

    /**
     * @var string Intrusion status
     */
    public $EventType;

    /**
     * @var string Attacker IP
     */
    public $SourceIP;

    /**
     * @var string Region of the attacker IP
     */
    public $City;

    /**
     * @var integer Number of events
     */
    public $EventCount;

    /**
     * @var string Container ID
     */
    public $ContainerID;

    /**
     * @var string Container name
     */
    public $ContainerName;

    /**
     * @var string Image ID
     */
    public $ImageID;

    /**
     * @var string Image name
     */
    public $ImageName;

    /**
     * @var string Processing status
     */
    public $Status;

    /**
     * @var integer Event ID
     */
    public $EventID;

    /**
     * @var string First detection time
     */
    public $CreateTime;

    /**
     * @var string Isolation status
`NORMAL`: 	Not isolated.
`ISOLATED`: 		Isolated.
`ISOLATING`: 		Isolating.
`ISOLATE_FAILED`: 	Isolation failed.
`RESTORING`: Recovering.
`RESTORE_FAILED`: Recovery failed.
     */
    public $ContainerNetStatus;

    /**
     * @var string Last discovery time
     */
    public $MergeTime;

    /**
     * @var string Container status.
RUNNING: running
PAUSED
Stop: STOPPED
CREATED
DESTROYED
RESTARTING
Migrating: REMOVING
     */
    public $ContainerStatus;

    /**
     * @var string Container sub-status
AGENT_OFFLINE
	NODE_DESTROYED
	CONTAINER_EXITED
	"CONTAINER_DESTROYED" //Container destroyed
	"SHARED_HOST"         // Container shares network with host
	RESOURCE_LIMIT
	"UNKNOW"              // Reason unknown
     */
    public $ContainerNetSubStatus;

    /**
     * @var string Container Isolation Operation Source
     */
    public $ContainerIsolateOperationSrc;

    /**
     * @var string Host QUUID/Super Node ID
     */
    public $QUUID;

    /**
     * @var string Host private IP address
     */
    public $HostIP;

    /**
     * @var string Host Name/Super Node Name
     */
    public $HostName;

    /**
     * @var string Node type. Values: `NORMAL` (general node), `SUPER` (super node).
     */
    public $NodeType;

    /**
     * @var string Public IP
     */
    public $PublicIP;

    /**
     * @var string UID of a super node
     */
    public $NodeUniqueID;

    /**
     * @var string ID of a super node
     */
    public $NodeID;

    /**
     * @var string Cluster ID
     */
    public $ClusterID;

    /**
     * @var string Cluster name
     */
    public $ClusterName;

    /**
     * @var string Pod name
     */
    public $PodName;

    /**
     * @var string pod ip
     */
    public $PodIP;

    /**
     * @param string $CVEID Vulnerability CVE ID
     * @param string $VulName Vulnerability name
     * @param string $PocID POC ID
     * @param string $EventType Intrusion status
     * @param string $SourceIP Attacker IP
     * @param string $City Region of the attacker IP
     * @param integer $EventCount Number of events
     * @param string $ContainerID Container ID
     * @param string $ContainerName Container name
     * @param string $ImageID Image ID
     * @param string $ImageName Image name
     * @param string $Status Processing status
     * @param integer $EventID Event ID
     * @param string $CreateTime First detection time
     * @param string $ContainerNetStatus Isolation status
`NORMAL`: 	Not isolated.
`ISOLATED`: 		Isolated.
`ISOLATING`: 		Isolating.
`ISOLATE_FAILED`: 	Isolation failed.
`RESTORING`: Recovering.
`RESTORE_FAILED`: Recovery failed.
     * @param string $MergeTime Last discovery time
     * @param string $ContainerStatus Container status.
RUNNING: running
PAUSED
Stop: STOPPED
CREATED
DESTROYED
RESTARTING
Migrating: REMOVING
     * @param string $ContainerNetSubStatus Container sub-status
AGENT_OFFLINE
	NODE_DESTROYED
	CONTAINER_EXITED
	"CONTAINER_DESTROYED" //Container destroyed
	"SHARED_HOST"         // Container shares network with host
	RESOURCE_LIMIT
	"UNKNOW"              // Reason unknown
     * @param string $ContainerIsolateOperationSrc Container Isolation Operation Source
     * @param string $QUUID Host QUUID/Super Node ID
     * @param string $HostIP Host private IP address
     * @param string $HostName Host Name/Super Node Name
     * @param string $NodeType Node type. Values: `NORMAL` (general node), `SUPER` (super node).
     * @param string $PublicIP Public IP
     * @param string $NodeUniqueID UID of a super node
     * @param string $NodeID ID of a super node
     * @param string $ClusterID Cluster ID
     * @param string $ClusterName Cluster name
     * @param string $PodName Pod name
     * @param string $PodIP pod ip
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
        if (array_key_exists("CVEID",$param) and $param["CVEID"] !== null) {
            $this->CVEID = $param["CVEID"];
        }

        if (array_key_exists("VulName",$param) and $param["VulName"] !== null) {
            $this->VulName = $param["VulName"];
        }

        if (array_key_exists("PocID",$param) and $param["PocID"] !== null) {
            $this->PocID = $param["PocID"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("SourceIP",$param) and $param["SourceIP"] !== null) {
            $this->SourceIP = $param["SourceIP"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }

        if (array_key_exists("EventCount",$param) and $param["EventCount"] !== null) {
            $this->EventCount = $param["EventCount"];
        }

        if (array_key_exists("ContainerID",$param) and $param["ContainerID"] !== null) {
            $this->ContainerID = $param["ContainerID"];
        }

        if (array_key_exists("ContainerName",$param) and $param["ContainerName"] !== null) {
            $this->ContainerName = $param["ContainerName"];
        }

        if (array_key_exists("ImageID",$param) and $param["ImageID"] !== null) {
            $this->ImageID = $param["ImageID"];
        }

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("EventID",$param) and $param["EventID"] !== null) {
            $this->EventID = $param["EventID"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ContainerNetStatus",$param) and $param["ContainerNetStatus"] !== null) {
            $this->ContainerNetStatus = $param["ContainerNetStatus"];
        }

        if (array_key_exists("MergeTime",$param) and $param["MergeTime"] !== null) {
            $this->MergeTime = $param["MergeTime"];
        }

        if (array_key_exists("ContainerStatus",$param) and $param["ContainerStatus"] !== null) {
            $this->ContainerStatus = $param["ContainerStatus"];
        }

        if (array_key_exists("ContainerNetSubStatus",$param) and $param["ContainerNetSubStatus"] !== null) {
            $this->ContainerNetSubStatus = $param["ContainerNetSubStatus"];
        }

        if (array_key_exists("ContainerIsolateOperationSrc",$param) and $param["ContainerIsolateOperationSrc"] !== null) {
            $this->ContainerIsolateOperationSrc = $param["ContainerIsolateOperationSrc"];
        }

        if (array_key_exists("QUUID",$param) and $param["QUUID"] !== null) {
            $this->QUUID = $param["QUUID"];
        }

        if (array_key_exists("HostIP",$param) and $param["HostIP"] !== null) {
            $this->HostIP = $param["HostIP"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("PublicIP",$param) and $param["PublicIP"] !== null) {
            $this->PublicIP = $param["PublicIP"];
        }

        if (array_key_exists("NodeUniqueID",$param) and $param["NodeUniqueID"] !== null) {
            $this->NodeUniqueID = $param["NodeUniqueID"];
        }

        if (array_key_exists("NodeID",$param) and $param["NodeID"] !== null) {
            $this->NodeID = $param["NodeID"];
        }

        if (array_key_exists("ClusterID",$param) and $param["ClusterID"] !== null) {
            $this->ClusterID = $param["ClusterID"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("PodName",$param) and $param["PodName"] !== null) {
            $this->PodName = $param["PodName"];
        }

        if (array_key_exists("PodIP",$param) and $param["PodIP"] !== null) {
            $this->PodIP = $param["PodIP"];
        }
    }
}
