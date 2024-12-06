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
 * List of trojans at runtime
 *
 * @method string getFileName() Obtain Filename
 * @method void setFileName(string $FileName) Set Filename
 * @method string getFilePath() Obtain File path
 * @method void setFilePath(string $FilePath) Set File path
 * @method string getVirusName() Obtain Virus name
 * @method void setVirusName(string $VirusName) Set Virus name
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method string getModifyTime() Obtain Update time
 * @method void setModifyTime(string $ModifyTime) Set Update time
 * @method string getContainerName() Obtain Container name
 * @method void setContainerName(string $ContainerName) Set Container name
 * @method string getContainerId() Obtain Container ID
 * @method void setContainerId(string $ContainerId) Set Container ID
 * @method string getContainerStatus() Obtain Container status
`RUNNING`: Running.
`PAUSED`: Paused.
`STOPPED`: Stopped.
`CREATED`: Created.
`DESTROYED`: Terminated.
`RESTARTING`: Restarting.
`REMOVING`: Removing.
 * @method void setContainerStatus(string $ContainerStatus) Set Container status
`RUNNING`: Running.
`PAUSED`: Paused.
`STOPPED`: Stopped.
`CREATED`: Created.
`DESTROYED`: Terminated.
`RESTARTING`: Restarting.
`REMOVING`: Removing.
 * @method string getImageName() Obtain Image name
 * @method void setImageName(string $ImageName) Set Image name
 * @method string getImageId() Obtain Image ID
 * @method void setImageId(string $ImageId) Set Image ID
 * @method string getStatus() Obtain `DEAL_NONE`: Pending.
`DEAL_IGNORE`: Ignored.
`DEAL_ADD_WHITELIST`: Allowed.
`DEAL_DEL`: Deleted.
`DEAL_ISOLATE`: Isolated.
`DEAL_ISOLATING`: Isolating.
`DEAL_ISOLATE_FAILED`: Isolation failed.
`DEAL_RECOVERING`: Recovering.
`DEAL_RECOVER_FAILED`: Recovery failed.
 * @method void setStatus(string $Status) Set `DEAL_NONE`: Pending.
`DEAL_IGNORE`: Ignored.
`DEAL_ADD_WHITELIST`: Allowed.
`DEAL_DEL`: Deleted.
`DEAL_ISOLATE`: Isolated.
`DEAL_ISOLATING`: Isolating.
`DEAL_ISOLATE_FAILED`: Isolation failed.
`DEAL_RECOVERING`: Recovering.
`DEAL_RECOVER_FAILED`: Recovery failed.
 * @method string getId() Obtain Event ID
 * @method void setId(string $Id) Set Event ID
 * @method string getHarmDescribe() Obtain Event description
 * @method void setHarmDescribe(string $HarmDescribe) Set Event description
 * @method string getSuggestScheme() Obtain Solution
 * @method void setSuggestScheme(string $SuggestScheme) Set Solution
 * @method string getSubStatus() Obtain Sub-status of the failure:
`FILE_NOT_FOUND`: The file does not exist.
`FILE_ABNORMAL`: The file is abnormal.
`FILE_ABNORMAL_DEAL_RECOVER`: The file is abnormal when recovered.
`BACKUP_FILE_NOT_FOUND`: The backup file does not exist.
`CONTAINER_NOT_FOUND_DEAL_ISOLATE`: The container does not exist during isolation.
`CONTAINER_NOT_FOUND_DEAL_RECOVER`: The container does not exist during recovery.
`TIMEOUT`: Timed out.
`TOO_MANY`: Too many tasks.
`OFFLINE`: Offline.
`INTERNAL`: Internal service error.
`VALIDATION`: Invalid parameter.
 * @method void setSubStatus(string $SubStatus) Set Sub-status of the failure:
`FILE_NOT_FOUND`: The file does not exist.
`FILE_ABNORMAL`: The file is abnormal.
`FILE_ABNORMAL_DEAL_RECOVER`: The file is abnormal when recovered.
`BACKUP_FILE_NOT_FOUND`: The backup file does not exist.
`CONTAINER_NOT_FOUND_DEAL_ISOLATE`: The container does not exist during isolation.
`CONTAINER_NOT_FOUND_DEAL_RECOVER`: The container does not exist during recovery.
`TIMEOUT`: Timed out.
`TOO_MANY`: Too many tasks.
`OFFLINE`: Offline.
`INTERNAL`: Internal service error.
`VALIDATION`: Invalid parameter.
 * @method string getContainerNetStatus() Obtain Network status
`NORMAL`: 	Not isolated.
`ISOLATED`: 		Isolated.
`ISOLATING`: 		Isolating.
`ISOLATE_FAILED`: 	Isolation failed.
`RESTORING`: Recovering.
`RESTORE_FAILED`: Recovery failed.
 * @method void setContainerNetStatus(string $ContainerNetStatus) Set Network status
`NORMAL`: 	Not isolated.
`ISOLATED`: 		Isolated.
`ISOLATING`: 		Isolating.
`ISOLATE_FAILED`: 	Isolation failed.
`RESTORING`: Recovering.
`RESTORE_FAILED`: Recovery failed.
 * @method string getContainerNetSubStatus() Obtain Sub-status of the container
"AGENT_OFFLINE"       // The agent is offline.
	"NODE_DESTROYED"      // The node is terminated.
	"CONTAINER_EXITED"    // The container exited.
	"CONTAINER_DESTROYED" // The container was terminated.
	"SHARED_HOST"         // The container shares the network with the server.
	"RESOURCE_LIMIT"      // The number of resources to be isolated exceeds the limit.
	"UNKNOW"              // The reason is unknown.
 * @method void setContainerNetSubStatus(string $ContainerNetSubStatus) Set Sub-status of the container
"AGENT_OFFLINE"       // The agent is offline.
	"NODE_DESTROYED"      // The node is terminated.
	"CONTAINER_EXITED"    // The container exited.
	"CONTAINER_DESTROYED" // The container was terminated.
	"SHARED_HOST"         // The container shares the network with the server.
	"RESOURCE_LIMIT"      // The number of resources to be isolated exceeds the limit.
	"UNKNOW"              // The reason is unknown.
 * @method string getContainerIsolateOperationSrc() Obtain Container isolation operation source
 * @method void setContainerIsolateOperationSrc(string $ContainerIsolateOperationSrc) Set Container isolation operation source
 * @method string getMD5() Obtain MD5 checksum
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMD5(string $MD5) Set MD5 checksum
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRiskLevel() Obtain Risk level. Valid values: `RISK_CRITICAL`, `RISK_HIGH`, `RISK_MEDIUM`, `RISK_LOW`, `RISK_NOTICE`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRiskLevel(string $RiskLevel) Set Risk level. Valid values: `RISK_CRITICAL`, `RISK_HIGH`, `RISK_MEDIUM`, `RISK_LOW`, `RISK_NOTICE`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getCheckPlatform() Obtain Check platform
`1`: Tencent Cloud Security Engine.
`2`: tav.
`3`: binaryAi.
`4`: Unusual behavior.
`5`: Threat intelligence.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCheckPlatform(array $CheckPlatform) Set Check platform
`1`: Tencent Cloud Security Engine.
`2`: tav.
`3`: binaryAi.
`4`: Unusual behavior.
`5`: Threat intelligence.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getNodeID() Obtain Node ID.
 * @method void setNodeID(string $NodeID) Set Node ID.
 * @method string getNodeName() Obtain Node name
 * @method void setNodeName(string $NodeName) Set Node name
 * @method string getPodIP() Obtain Pod IP
 * @method void setPodIP(string $PodIP) Set Pod IP
 * @method string getPodName() Obtain Pod (instance) name
 * @method void setPodName(string $PodName) Set Pod (instance) name
 * @method string getClusterID() Obtain ID of the cluster where the node resides
 * @method void setClusterID(string $ClusterID) Set ID of the cluster where the node resides
 * @method string getNodeType() Obtain Node type. Values: `NORMAL` (general node), `SUPER` (super node).
 * @method void setNodeType(string $NodeType) Set Node type. Values: `NORMAL` (general node), `SUPER` (super node).
 * @method string getPublicIP() Obtain Public IP of the node
 * @method void setPublicIP(string $PublicIP) Set Public IP of the node
 * @method string getInnerIP() Obtain Node private IP
 * @method void setInnerIP(string $InnerIP) Set Node private IP
 * @method string getNodeUniqueID() Obtain UID of the node
 * @method void setNodeUniqueID(string $NodeUniqueID) Set UID of the node
 * @method string getHostID() Obtain ID for the general node
 * @method void setHostID(string $HostID) Set ID for the general node
 * @method string getClusterName() Obtain Cluster name
 * @method void setClusterName(string $ClusterName) Set Cluster name
 */
class VirusInfo extends AbstractModel
{
    /**
     * @var string Filename
     */
    public $FileName;

    /**
     * @var string File path
     */
    public $FilePath;

    /**
     * @var string Virus name
     */
    public $VirusName;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var string Update time
     */
    public $ModifyTime;

    /**
     * @var string Container name
     */
    public $ContainerName;

    /**
     * @var string Container ID
     */
    public $ContainerId;

    /**
     * @var string Container status
`RUNNING`: Running.
`PAUSED`: Paused.
`STOPPED`: Stopped.
`CREATED`: Created.
`DESTROYED`: Terminated.
`RESTARTING`: Restarting.
`REMOVING`: Removing.
     */
    public $ContainerStatus;

    /**
     * @var string Image name
     */
    public $ImageName;

    /**
     * @var string Image ID
     */
    public $ImageId;

    /**
     * @var string `DEAL_NONE`: Pending.
`DEAL_IGNORE`: Ignored.
`DEAL_ADD_WHITELIST`: Allowed.
`DEAL_DEL`: Deleted.
`DEAL_ISOLATE`: Isolated.
`DEAL_ISOLATING`: Isolating.
`DEAL_ISOLATE_FAILED`: Isolation failed.
`DEAL_RECOVERING`: Recovering.
`DEAL_RECOVER_FAILED`: Recovery failed.
     */
    public $Status;

    /**
     * @var string Event ID
     */
    public $Id;

    /**
     * @var string Event description
     */
    public $HarmDescribe;

    /**
     * @var string Solution
     */
    public $SuggestScheme;

    /**
     * @var string Sub-status of the failure:
`FILE_NOT_FOUND`: The file does not exist.
`FILE_ABNORMAL`: The file is abnormal.
`FILE_ABNORMAL_DEAL_RECOVER`: The file is abnormal when recovered.
`BACKUP_FILE_NOT_FOUND`: The backup file does not exist.
`CONTAINER_NOT_FOUND_DEAL_ISOLATE`: The container does not exist during isolation.
`CONTAINER_NOT_FOUND_DEAL_RECOVER`: The container does not exist during recovery.
`TIMEOUT`: Timed out.
`TOO_MANY`: Too many tasks.
`OFFLINE`: Offline.
`INTERNAL`: Internal service error.
`VALIDATION`: Invalid parameter.
     */
    public $SubStatus;

    /**
     * @var string Network status
`NORMAL`: 	Not isolated.
`ISOLATED`: 		Isolated.
`ISOLATING`: 		Isolating.
`ISOLATE_FAILED`: 	Isolation failed.
`RESTORING`: Recovering.
`RESTORE_FAILED`: Recovery failed.
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
     */
    public $ContainerNetSubStatus;

    /**
     * @var string Container isolation operation source
     */
    public $ContainerIsolateOperationSrc;

    /**
     * @var string MD5 checksum
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MD5;

    /**
     * @var string Risk level. Valid values: `RISK_CRITICAL`, `RISK_HIGH`, `RISK_MEDIUM`, `RISK_LOW`, `RISK_NOTICE`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RiskLevel;

    /**
     * @var array Check platform
`1`: Tencent Cloud Security Engine.
`2`: tav.
`3`: binaryAi.
`4`: Unusual behavior.
`5`: Threat intelligence.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CheckPlatform;

    /**
     * @var string Node ID.
     */
    public $NodeID;

    /**
     * @var string Node name
     */
    public $NodeName;

    /**
     * @var string Pod IP
     */
    public $PodIP;

    /**
     * @var string Pod (instance) name
     */
    public $PodName;

    /**
     * @var string ID of the cluster where the node resides
     */
    public $ClusterID;

    /**
     * @var string Node type. Values: `NORMAL` (general node), `SUPER` (super node).
     */
    public $NodeType;

    /**
     * @var string Public IP of the node
     */
    public $PublicIP;

    /**
     * @var string Node private IP
     */
    public $InnerIP;

    /**
     * @var string UID of the node
     */
    public $NodeUniqueID;

    /**
     * @var string ID for the general node
     */
    public $HostID;

    /**
     * @var string Cluster name
     */
    public $ClusterName;

    /**
     * @param string $FileName Filename
     * @param string $FilePath File path
     * @param string $VirusName Virus name
     * @param string $CreateTime Creation time
     * @param string $ModifyTime Update time
     * @param string $ContainerName Container name
     * @param string $ContainerId Container ID
     * @param string $ContainerStatus Container status
`RUNNING`: Running.
`PAUSED`: Paused.
`STOPPED`: Stopped.
`CREATED`: Created.
`DESTROYED`: Terminated.
`RESTARTING`: Restarting.
`REMOVING`: Removing.
     * @param string $ImageName Image name
     * @param string $ImageId Image ID
     * @param string $Status `DEAL_NONE`: Pending.
`DEAL_IGNORE`: Ignored.
`DEAL_ADD_WHITELIST`: Allowed.
`DEAL_DEL`: Deleted.
`DEAL_ISOLATE`: Isolated.
`DEAL_ISOLATING`: Isolating.
`DEAL_ISOLATE_FAILED`: Isolation failed.
`DEAL_RECOVERING`: Recovering.
`DEAL_RECOVER_FAILED`: Recovery failed.
     * @param string $Id Event ID
     * @param string $HarmDescribe Event description
     * @param string $SuggestScheme Solution
     * @param string $SubStatus Sub-status of the failure:
`FILE_NOT_FOUND`: The file does not exist.
`FILE_ABNORMAL`: The file is abnormal.
`FILE_ABNORMAL_DEAL_RECOVER`: The file is abnormal when recovered.
`BACKUP_FILE_NOT_FOUND`: The backup file does not exist.
`CONTAINER_NOT_FOUND_DEAL_ISOLATE`: The container does not exist during isolation.
`CONTAINER_NOT_FOUND_DEAL_RECOVER`: The container does not exist during recovery.
`TIMEOUT`: Timed out.
`TOO_MANY`: Too many tasks.
`OFFLINE`: Offline.
`INTERNAL`: Internal service error.
`VALIDATION`: Invalid parameter.
     * @param string $ContainerNetStatus Network status
`NORMAL`: 	Not isolated.
`ISOLATED`: 		Isolated.
`ISOLATING`: 		Isolating.
`ISOLATE_FAILED`: 	Isolation failed.
`RESTORING`: Recovering.
`RESTORE_FAILED`: Recovery failed.
     * @param string $ContainerNetSubStatus Sub-status of the container
"AGENT_OFFLINE"       // The agent is offline.
	"NODE_DESTROYED"      // The node is terminated.
	"CONTAINER_EXITED"    // The container exited.
	"CONTAINER_DESTROYED" // The container was terminated.
	"SHARED_HOST"         // The container shares the network with the server.
	"RESOURCE_LIMIT"      // The number of resources to be isolated exceeds the limit.
	"UNKNOW"              // The reason is unknown.
     * @param string $ContainerIsolateOperationSrc Container isolation operation source
     * @param string $MD5 MD5 checksum
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RiskLevel Risk level. Valid values: `RISK_CRITICAL`, `RISK_HIGH`, `RISK_MEDIUM`, `RISK_LOW`, `RISK_NOTICE`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $CheckPlatform Check platform
`1`: Tencent Cloud Security Engine.
`2`: tav.
`3`: binaryAi.
`4`: Unusual behavior.
`5`: Threat intelligence.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $NodeID Node ID.
     * @param string $NodeName Node name
     * @param string $PodIP Pod IP
     * @param string $PodName Pod (instance) name
     * @param string $ClusterID ID of the cluster where the node resides
     * @param string $NodeType Node type. Values: `NORMAL` (general node), `SUPER` (super node).
     * @param string $PublicIP Public IP of the node
     * @param string $InnerIP Node private IP
     * @param string $NodeUniqueID UID of the node
     * @param string $HostID ID for the general node
     * @param string $ClusterName Cluster name
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
        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FilePath",$param) and $param["FilePath"] !== null) {
            $this->FilePath = $param["FilePath"];
        }

        if (array_key_exists("VirusName",$param) and $param["VirusName"] !== null) {
            $this->VirusName = $param["VirusName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("ContainerName",$param) and $param["ContainerName"] !== null) {
            $this->ContainerName = $param["ContainerName"];
        }

        if (array_key_exists("ContainerId",$param) and $param["ContainerId"] !== null) {
            $this->ContainerId = $param["ContainerId"];
        }

        if (array_key_exists("ContainerStatus",$param) and $param["ContainerStatus"] !== null) {
            $this->ContainerStatus = $param["ContainerStatus"];
        }

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("HarmDescribe",$param) and $param["HarmDescribe"] !== null) {
            $this->HarmDescribe = $param["HarmDescribe"];
        }

        if (array_key_exists("SuggestScheme",$param) and $param["SuggestScheme"] !== null) {
            $this->SuggestScheme = $param["SuggestScheme"];
        }

        if (array_key_exists("SubStatus",$param) and $param["SubStatus"] !== null) {
            $this->SubStatus = $param["SubStatus"];
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

        if (array_key_exists("MD5",$param) and $param["MD5"] !== null) {
            $this->MD5 = $param["MD5"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("CheckPlatform",$param) and $param["CheckPlatform"] !== null) {
            $this->CheckPlatform = $param["CheckPlatform"];
        }

        if (array_key_exists("NodeID",$param) and $param["NodeID"] !== null) {
            $this->NodeID = $param["NodeID"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("PodIP",$param) and $param["PodIP"] !== null) {
            $this->PodIP = $param["PodIP"];
        }

        if (array_key_exists("PodName",$param) and $param["PodName"] !== null) {
            $this->PodName = $param["PodName"];
        }

        if (array_key_exists("ClusterID",$param) and $param["ClusterID"] !== null) {
            $this->ClusterID = $param["ClusterID"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("PublicIP",$param) and $param["PublicIP"] !== null) {
            $this->PublicIP = $param["PublicIP"];
        }

        if (array_key_exists("InnerIP",$param) and $param["InnerIP"] !== null) {
            $this->InnerIP = $param["InnerIP"];
        }

        if (array_key_exists("NodeUniqueID",$param) and $param["NodeUniqueID"] !== null) {
            $this->NodeUniqueID = $param["NodeUniqueID"];
        }

        if (array_key_exists("HostID",$param) and $param["HostID"] !== null) {
            $this->HostID = $param["HostID"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }
    }
}
