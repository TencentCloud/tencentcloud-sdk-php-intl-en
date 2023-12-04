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
 * @method array getSourcePort() Obtain Attacker port
 * @method void setSourcePort(array $SourcePort) Set Attacker port
 * @method integer getEventID() Obtain Event ID
 * @method void setEventID(integer $EventID) Set Event ID
 * @method string getHostName() Obtain General node/Super node name
 * @method void setHostName(string $HostName) Set General node/Super node name
 * @method string getHostIP() Obtain Server private IP
 * @method void setHostIP(string $HostIP) Set Server private IP
 * @method string getPublicIP() Obtain Server public IP
 * @method void setPublicIP(string $PublicIP) Set Server public IP
 * @method string getPodName() Obtain Pod name
 * @method void setPodName(string $PodName) Set Pod name
 * @method string getDescription() Obtain Harm description
 * @method void setDescription(string $Description) Set Harm description
 * @method string getOfficialSolution() Obtain Fix suggestion
 * @method void setOfficialSolution(string $OfficialSolution) Set Fix suggestion
 * @method string getNetworkPayload() Obtain Attack packet
 * @method void setNetworkPayload(string $NetworkPayload) Set Attack packet
 * @method integer getPID() Obtain Process PID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPID(integer $PID) Set Process PID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMainClass() Obtain Main class name of the process
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMainClass(string $MainClass) Set Main class name of the process
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStackTrace() Obtain Stack information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStackTrace(string $StackTrace) Set Stack information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getServerAccount() Obtain Listened account
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setServerAccount(string $ServerAccount) Set Listened account
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getServerPort() Obtain Listened port
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setServerPort(string $ServerPort) Set Listened port
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getServerExe() Obtain Process path
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setServerExe(string $ServerExe) Set Process path
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getServerArg() Obtain Process command line parameter
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setServerArg(string $ServerArg) Set Process command line parameter
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getQUUID() Obtain Node QUuid/Super node ID
Note: This field may return·`null`, indicating that no valid values can be obtained.
 * @method void setQUUID(string $QUUID) Set Node QUuid/Super node ID
Note: This field may return·`null`, indicating that no valid values can be obtained.
 * @method string getContainerNetStatus() Obtain Isolation status
`NORMAL`: 	Not isolated.
`ISOLATED`: 		Isolated.
`ISOLATING`: 		Isolating.
`ISOLATE_FAILED`: 	Isolation failed.
`RESTORING`: Recovering.
`RESTORE_FAILED`: Recovery failed.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setContainerNetStatus(string $ContainerNetStatus) Set Isolation status
`NORMAL`: 	Not isolated.
`ISOLATED`: 		Isolated.
`ISOLATING`: 		Isolating.
`ISOLATE_FAILED`: 	Isolation failed.
`RESTORING`: Recovering.
`RESTORE_FAILED`: Recovery failed.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getContainerNetSubStatus() Obtain Sub-status of the container
"AGENT_OFFLINE"       // The agent is offline.
	"NODE_DESTROYED"      // The node is terminated.
	"CONTAINER_EXITED"    // The container exited.
	"CONTAINER_DESTROYED" // The container was terminated.
	"SHARED_HOST"         // The container shares the network with the server.
	"RESOURCE_LIMIT"      // The number of resources to be isolated exceeds the limit.
	"UNKNOW"              // The reason is unknown.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setContainerNetSubStatus(string $ContainerNetSubStatus) Set Sub-status of the container
"AGENT_OFFLINE"       // The agent is offline.
	"NODE_DESTROYED"      // The node is terminated.
	"CONTAINER_EXITED"    // The container exited.
	"CONTAINER_DESTROYED" // The container was terminated.
	"SHARED_HOST"         // The container shares the network with the server.
	"RESOURCE_LIMIT"      // The number of resources to be isolated exceeds the limit.
	"UNKNOW"              // The reason is unknown.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getContainerIsolateOperationSrc() Obtain Container isolation operation source
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setContainerIsolateOperationSrc(string $ContainerIsolateOperationSrc) Set Container isolation operation source
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getContainerStatus() Obtain Container status
`RUNNING`: Running.
`PAUSED`: Paused.
`STOPPED`: Stopped.
`CREATED`: Created.
`DESTROYED`: Terminated.
`RESTARTING`: Restarting.
`REMOVING`: Removing.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setContainerStatus(string $ContainerStatus) Set Container status
`RUNNING`: Running.
`PAUSED`: Paused.
`STOPPED`: Stopped.
`CREATED`: Created.
`DESTROYED`: Terminated.
`RESTARTING`: Restarting.
`REMOVING`: Removing.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getJNDIUrl() Obtain API URL
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setJNDIUrl(string $JNDIUrl) Set API URL
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getRaspDetail() Obtain RASP details
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setRaspDetail(array $RaspDetail) Set RASP details
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getNodeSubNetName() Obtain Super node subnet name
 * @method void setNodeSubNetName(string $NodeSubNetName) Set Super node subnet name
 * @method string getNodeSubNetCIDR() Obtain Super node subnet IP range
 * @method void setNodeSubNetCIDR(string $NodeSubNetCIDR) Set Super node subnet IP range
 * @method string getPodIP() Obtain Pod IP
 * @method void setPodIP(string $PodIP) Set Pod IP
 * @method string getNodeType() Obtain Node type. Values: `NORMAL` (general node), `SUPER` (super node).
 * @method void setNodeType(string $NodeType) Set Node type. Values: `NORMAL` (general node), `SUPER` (super node).
 * @method string getNodeID() Obtain ID of a super node
 * @method void setNodeID(string $NodeID) Set ID of a super node
 * @method string getNodeUniqueID() Obtain UID of a super node
 * @method void setNodeUniqueID(string $NodeUniqueID) Set UID of a super node
 * @method string getNodeSubNetID() Obtain Super node subnet ID
 * @method void setNodeSubNetID(string $NodeSubNetID) Set Super node subnet ID
 * @method string getClusterID() Obtain Cluster ID
 * @method void setClusterID(string $ClusterID) Set Cluster ID
 * @method string getClusterName() Obtain Cluster name
 * @method void setClusterName(string $ClusterName) Set Cluster name
 * @method string getNamespace() Obtain 
 * @method void setNamespace(string $Namespace) Set 
 * @method string getWorkloadType() Obtain 
 * @method void setWorkloadType(string $WorkloadType) Set 
 */
class VulDefenceEventDetail extends AbstractModel
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
     * @var array Attacker port
     */
    public $SourcePort;

    /**
     * @var integer Event ID
     */
    public $EventID;

    /**
     * @var string General node/Super node name
     */
    public $HostName;

    /**
     * @var string Server private IP
     */
    public $HostIP;

    /**
     * @var string Server public IP
     */
    public $PublicIP;

    /**
     * @var string Pod name
     */
    public $PodName;

    /**
     * @var string Harm description
     */
    public $Description;

    /**
     * @var string Fix suggestion
     */
    public $OfficialSolution;

    /**
     * @var string Attack packet
     */
    public $NetworkPayload;

    /**
     * @var integer Process PID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PID;

    /**
     * @var string Main class name of the process
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MainClass;

    /**
     * @var string Stack information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StackTrace;

    /**
     * @var string Listened account
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ServerAccount;

    /**
     * @var string Listened port
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ServerPort;

    /**
     * @var string Process path
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ServerExe;

    /**
     * @var string Process command line parameter
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ServerArg;

    /**
     * @var string Node QUuid/Super node ID
Note: This field may return·`null`, indicating that no valid values can be obtained.
     */
    public $QUUID;

    /**
     * @var string Isolation status
`NORMAL`: 	Not isolated.
`ISOLATED`: 		Isolated.
`ISOLATING`: 		Isolating.
`ISOLATE_FAILED`: 	Isolation failed.
`RESTORING`: Recovering.
`RESTORE_FAILED`: Recovery failed.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ContainerNetStatus;

    /**
     * @var string Sub-status of the container
"AGENT_OFFLINE"       // The agent is offline.
	"NODE_DESTROYED"      // The node is terminated.
	"CONTAINER_EXITED"    // The container exited.
	"CONTAINER_DESTROYED" // The container was terminated.
	"SHARED_HOST"         // The container shares the network with the server.
	"RESOURCE_LIMIT"      // The number of resources to be isolated exceeds the limit.
	"UNKNOW"              // The reason is unknown.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ContainerNetSubStatus;

    /**
     * @var string Container isolation operation source
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ContainerIsolateOperationSrc;

    /**
     * @var string Container status
`RUNNING`: Running.
`PAUSED`: Paused.
`STOPPED`: Stopped.
`CREATED`: Created.
`DESTROYED`: Terminated.
`RESTARTING`: Restarting.
`REMOVING`: Removing.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ContainerStatus;

    /**
     * @var string API URL
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $JNDIUrl;

    /**
     * @var array RASP details
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $RaspDetail;

    /**
     * @var string Super node subnet name
     */
    public $NodeSubNetName;

    /**
     * @var string Super node subnet IP range
     */
    public $NodeSubNetCIDR;

    /**
     * @var string Pod IP
     */
    public $PodIP;

    /**
     * @var string Node type. Values: `NORMAL` (general node), `SUPER` (super node).
     */
    public $NodeType;

    /**
     * @var string ID of a super node
     */
    public $NodeID;

    /**
     * @var string UID of a super node
     */
    public $NodeUniqueID;

    /**
     * @var string Super node subnet ID
     */
    public $NodeSubNetID;

    /**
     * @var string Cluster ID
     */
    public $ClusterID;

    /**
     * @var string Cluster name
     */
    public $ClusterName;

    /**
     * @var string 
     */
    public $Namespace;

    /**
     * @var string 
     */
    public $WorkloadType;

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
     * @param array $SourcePort Attacker port
     * @param integer $EventID Event ID
     * @param string $HostName General node/Super node name
     * @param string $HostIP Server private IP
     * @param string $PublicIP Server public IP
     * @param string $PodName Pod name
     * @param string $Description Harm description
     * @param string $OfficialSolution Fix suggestion
     * @param string $NetworkPayload Attack packet
     * @param integer $PID Process PID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MainClass Main class name of the process
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $StackTrace Stack information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ServerAccount Listened account
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ServerPort Listened port
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ServerExe Process path
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ServerArg Process command line parameter
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $QUUID Node QUuid/Super node ID
Note: This field may return·`null`, indicating that no valid values can be obtained.
     * @param string $ContainerNetStatus Isolation status
`NORMAL`: 	Not isolated.
`ISOLATED`: 		Isolated.
`ISOLATING`: 		Isolating.
`ISOLATE_FAILED`: 	Isolation failed.
`RESTORING`: Recovering.
`RESTORE_FAILED`: Recovery failed.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ContainerNetSubStatus Sub-status of the container
"AGENT_OFFLINE"       // The agent is offline.
	"NODE_DESTROYED"      // The node is terminated.
	"CONTAINER_EXITED"    // The container exited.
	"CONTAINER_DESTROYED" // The container was terminated.
	"SHARED_HOST"         // The container shares the network with the server.
	"RESOURCE_LIMIT"      // The number of resources to be isolated exceeds the limit.
	"UNKNOW"              // The reason is unknown.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ContainerIsolateOperationSrc Container isolation operation source
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ContainerStatus Container status
`RUNNING`: Running.
`PAUSED`: Paused.
`STOPPED`: Stopped.
`CREATED`: Created.
`DESTROYED`: Terminated.
`RESTARTING`: Restarting.
`REMOVING`: Removing.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $JNDIUrl API URL
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $RaspDetail RASP details
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $NodeSubNetName Super node subnet name
     * @param string $NodeSubNetCIDR Super node subnet IP range
     * @param string $PodIP Pod IP
     * @param string $NodeType Node type. Values: `NORMAL` (general node), `SUPER` (super node).
     * @param string $NodeID ID of a super node
     * @param string $NodeUniqueID UID of a super node
     * @param string $NodeSubNetID Super node subnet ID
     * @param string $ClusterID Cluster ID
     * @param string $ClusterName Cluster name
     * @param string $Namespace 
     * @param string $WorkloadType 
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

        if (array_key_exists("SourcePort",$param) and $param["SourcePort"] !== null) {
            $this->SourcePort = $param["SourcePort"];
        }

        if (array_key_exists("EventID",$param) and $param["EventID"] !== null) {
            $this->EventID = $param["EventID"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("HostIP",$param) and $param["HostIP"] !== null) {
            $this->HostIP = $param["HostIP"];
        }

        if (array_key_exists("PublicIP",$param) and $param["PublicIP"] !== null) {
            $this->PublicIP = $param["PublicIP"];
        }

        if (array_key_exists("PodName",$param) and $param["PodName"] !== null) {
            $this->PodName = $param["PodName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("OfficialSolution",$param) and $param["OfficialSolution"] !== null) {
            $this->OfficialSolution = $param["OfficialSolution"];
        }

        if (array_key_exists("NetworkPayload",$param) and $param["NetworkPayload"] !== null) {
            $this->NetworkPayload = $param["NetworkPayload"];
        }

        if (array_key_exists("PID",$param) and $param["PID"] !== null) {
            $this->PID = $param["PID"];
        }

        if (array_key_exists("MainClass",$param) and $param["MainClass"] !== null) {
            $this->MainClass = $param["MainClass"];
        }

        if (array_key_exists("StackTrace",$param) and $param["StackTrace"] !== null) {
            $this->StackTrace = $param["StackTrace"];
        }

        if (array_key_exists("ServerAccount",$param) and $param["ServerAccount"] !== null) {
            $this->ServerAccount = $param["ServerAccount"];
        }

        if (array_key_exists("ServerPort",$param) and $param["ServerPort"] !== null) {
            $this->ServerPort = $param["ServerPort"];
        }

        if (array_key_exists("ServerExe",$param) and $param["ServerExe"] !== null) {
            $this->ServerExe = $param["ServerExe"];
        }

        if (array_key_exists("ServerArg",$param) and $param["ServerArg"] !== null) {
            $this->ServerArg = $param["ServerArg"];
        }

        if (array_key_exists("QUUID",$param) and $param["QUUID"] !== null) {
            $this->QUUID = $param["QUUID"];
        }

        if (array_key_exists("ContainerNetStatus",$param) and $param["ContainerNetStatus"] !== null) {
            $this->ContainerNetStatus = $param["ContainerNetStatus"];
        }

        if (array_key_exists("ContainerNetSubStatus",$param) and $param["ContainerNetSubStatus"] !== null) {
            $this->ContainerNetSubStatus = $param["ContainerNetSubStatus"];
        }

        if (array_key_exists("ContainerIsolateOperationSrc",$param) and $param["ContainerIsolateOperationSrc"] !== null) {
            $this->ContainerIsolateOperationSrc = $param["ContainerIsolateOperationSrc"];
        }

        if (array_key_exists("ContainerStatus",$param) and $param["ContainerStatus"] !== null) {
            $this->ContainerStatus = $param["ContainerStatus"];
        }

        if (array_key_exists("JNDIUrl",$param) and $param["JNDIUrl"] !== null) {
            $this->JNDIUrl = $param["JNDIUrl"];
        }

        if (array_key_exists("RaspDetail",$param) and $param["RaspDetail"] !== null) {
            $this->RaspDetail = [];
            foreach ($param["RaspDetail"] as $key => $value){
                $obj = new RaspInfo();
                $obj->deserialize($value);
                array_push($this->RaspDetail, $obj);
            }
        }

        if (array_key_exists("NodeSubNetName",$param) and $param["NodeSubNetName"] !== null) {
            $this->NodeSubNetName = $param["NodeSubNetName"];
        }

        if (array_key_exists("NodeSubNetCIDR",$param) and $param["NodeSubNetCIDR"] !== null) {
            $this->NodeSubNetCIDR = $param["NodeSubNetCIDR"];
        }

        if (array_key_exists("PodIP",$param) and $param["PodIP"] !== null) {
            $this->PodIP = $param["PodIP"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("NodeID",$param) and $param["NodeID"] !== null) {
            $this->NodeID = $param["NodeID"];
        }

        if (array_key_exists("NodeUniqueID",$param) and $param["NodeUniqueID"] !== null) {
            $this->NodeUniqueID = $param["NodeUniqueID"];
        }

        if (array_key_exists("NodeSubNetID",$param) and $param["NodeSubNetID"] !== null) {
            $this->NodeSubNetID = $param["NodeSubNetID"];
        }

        if (array_key_exists("ClusterID",$param) and $param["ClusterID"] !== null) {
            $this->ClusterID = $param["ClusterID"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("WorkloadType",$param) and $param["WorkloadType"] !== null) {
            $this->WorkloadType = $param["WorkloadType"];
        }
    }
}
