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
 * List of trojans at runtime
 *
 * @method string getFileName() Obtain File name
 * @method void setFileName(string $FileName) Set File name
 * @method string getFilePath() Obtain File path
 * @method void setFilePath(string $FilePath) Set File path
 * @method string getVirusName() Obtain Virus name
 * @method void setVirusName(string $VirusName) Set Virus name
 * @method string getCreateTime() Obtain Creation time.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
 * @method string getModifyTime() Obtain Update time
 * @method void setModifyTime(string $ModifyTime) Set Update time
 * @method string getContainerName() Obtain Container name
 * @method void setContainerName(string $ContainerName) Set Container name
 * @method string getContainerId() Obtain container id
 * @method void setContainerId(string $ContainerId) Set container id
 * @method string getContainerStatus() Obtain Container status.
RUNNING: running
Suspend: PAUSED
Stop: STOPPED
CREATED
DESTROYED
RESTARTING
Migrating: REMOVING
 * @method void setContainerStatus(string $ContainerStatus) Set Container status.
RUNNING: running
Suspend: PAUSED
Stop: STOPPED
CREATED
DESTROYED
RESTARTING
Migrating: REMOVING
 * @method string getImageName() Obtain Image Name
 * @method void setImageName(string $ImageName) Set Image Name
 * @method string getImageId() Obtain Image id
 * @method void setImageId(string $ImageId) Set Image id
 * @method string getStatus() Obtain DEAL_NONE: File pending
DEAL_IGNORE: Already ignored
DEAL_ADD_WHITELIST: Add to whitelist
DEAL_DEL: File deleted
DEAL_ISOLATE: Has been isolated
DEAL_ISOLATING: Isolated
DEAL_ISOLATE_FAILED: Isolation failed
DEAL_RECOVERING: Recovering
DEAL_RECOVER_FAILED: Recovery failed
 * @method void setStatus(string $Status) Set DEAL_NONE: File pending
DEAL_IGNORE: Already ignored
DEAL_ADD_WHITELIST: Add to whitelist
DEAL_DEL: File deleted
DEAL_ISOLATE: Has been isolated
DEAL_ISOLATING: Isolated
DEAL_ISOLATE_FAILED: Isolation failed
DEAL_RECOVERING: Recovering
DEAL_RECOVER_FAILED: Recovery failed
 * @method string getId() Obtain Event ID
 * @method void setId(string $Id) Set Event ID
 * @method string getHarmDescribe() Obtain Event description
 * @method void setHarmDescribe(string $HarmDescribe) Set Event description
 * @method string getSuggestScheme() Obtain Recommended solution
 * @method void setSuggestScheme(string $SuggestScheme) Set Recommended solution
 * @method string getSubStatus() Obtain Failed sub-status
FILE_NOT_FOUND: File does not exist
FILE_ABNORMAL: abnormal file
FILE_ABNORMAL_DEAL_RECOVER: Abnormal file when recovering file.
BACKUP_FILE_NOT_FOUND: Backup file not found
CONTAINER_NOT_FOUND_DEAL_ISOLATE: Container not found in isolation
CONTAINER_NOT_FOUND_DEAL_RECOVER: Container not found when recovering
TIMEOUT: Timeout
TOO_MANY: Too many tasks
OFFLINE: Offline
INTERNAL Server Error
VALIDATION: Invalid parameter
 * @method void setSubStatus(string $SubStatus) Set Failed sub-status
FILE_NOT_FOUND: File does not exist
FILE_ABNORMAL: abnormal file
FILE_ABNORMAL_DEAL_RECOVER: Abnormal file when recovering file.
BACKUP_FILE_NOT_FOUND: Backup file not found
CONTAINER_NOT_FOUND_DEAL_ISOLATE: Container not found in isolation
CONTAINER_NOT_FOUND_DEAL_RECOVER: Container not found when recovering
TIMEOUT: Timeout
TOO_MANY: Too many tasks
OFFLINE: Offline
INTERNAL Server Error
VALIDATION: Invalid parameter
 * @method string getContainerNetStatus() Obtain Network status.
Unisolated  NORMAL
ISOLATED
isolated
Isolation FAILED
RESTORING isolation
Isolation restoration failed RESTORE_FAILED
 * @method void setContainerNetStatus(string $ContainerNetStatus) Set Network status.
Unisolated  NORMAL
ISOLATED
isolated
Isolation FAILED
RESTORING isolation
Isolation restoration failed RESTORE_FAILED
 * @method string getContainerNetSubStatus() Obtain container sub-status
AGENT_OFFLINE
	NODE_DESTROYED
	CONTAINER_EXITED
	"CONTAINER_DESTROYED" //Container destroyed
	SHARED_HOST
	RESOURCE_LIMIT
	"UNKNOW": Unknown
 * @method void setContainerNetSubStatus(string $ContainerNetSubStatus) Set container sub-status
AGENT_OFFLINE
	NODE_DESTROYED
	CONTAINER_EXITED
	"CONTAINER_DESTROYED" //Container destroyed
	SHARED_HOST
	RESOURCE_LIMIT
	"UNKNOW": Unknown
 * @method string getContainerIsolateOperationSrc() Obtain Container Isolation Operation Source
 * @method void setContainerIsolateOperationSrc(string $ContainerIsolateOperationSrc) Set Container Isolation Operation Source
 * @method string getMD5() Obtain MD5 Value
 * @method void setMD5(string $MD5) Set MD5 Value
 * @method string getRiskLevel() Obtain Risk Level: RISK_CRITICAL, RISK_HIGH, RISK_MEDIUM, RISK_LOW, and RISK_NOTICE
 * @method void setRiskLevel(string $RiskLevel) Set Risk Level: RISK_CRITICAL, RISK_HIGH, RISK_MEDIUM, RISK_LOW, and RISK_NOTICE
 * @method array getCheckPlatform() Obtain Detection platform
1: Cloud Killing Engine
2: tav
3: binaryAi
4: Abnormal behavior
5: Threat Intelligence
 * @method void setCheckPlatform(array $CheckPlatform) Set Detection platform
1: Cloud Killing Engine
2: tav
3: binaryAi
4: Abnormal behavior
5: Threat Intelligence
 * @method string getNodeID() Obtain Node ID
 * @method void setNodeID(string $NodeID) Set Node ID
 * @method string getNodeName() Obtain Node name.
 * @method void setNodeName(string $NodeName) Set Node name.
 * @method string getPodIP() Obtain pod ip
 * @method void setPodIP(string $PodIP) Set pod ip
 * @method string getPodName() Obtain Name of the pod (instance)
 * @method void setPodName(string $PodName) Set Name of the pod (instance)
 * @method string getClusterID() Obtain Node Cluster ID
 * @method void setClusterID(string $ClusterID) Set Node Cluster ID
 * @method string getNodeType() Obtain Node Type. NORMAL: Common Node; SUPER: Super Node
 * @method void setNodeType(string $NodeType) Set Node Type. NORMAL: Common Node; SUPER: Super Node
 * @method string getPublicIP() Obtain Public IP of the node
 * @method void setPublicIP(string $PublicIP) Set Public IP of the node
 * @method string getInnerIP() Obtain Node private network IP
 * @method void setInnerIP(string $InnerIP) Set Node private network IP
 * @method string getNodeUniqueID() Obtain Node Unique ID
 * @method void setNodeUniqueID(string $NodeUniqueID) Set Node Unique ID
 * @method string getHostID() Obtain Common Node ID
 * @method void setHostID(string $HostID) Set Common Node ID
 * @method string getClusterName() Obtain Cluster name.
 * @method void setClusterName(string $ClusterName) Set Cluster name.
 * @method string getHostIP() Obtain Private IP address of the node, which is the same as the value of InnerIP.
 * @method void setHostIP(string $HostIP) Set Private IP address of the node, which is the same as the value of InnerIP.
 */
class VirusInfo extends AbstractModel
{
    /**
     * @var string File name
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
     * @var string Creation time.
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
     * @var string container id
     */
    public $ContainerId;

    /**
     * @var string Container status.
RUNNING: running
Suspend: PAUSED
Stop: STOPPED
CREATED
DESTROYED
RESTARTING
Migrating: REMOVING
     */
    public $ContainerStatus;

    /**
     * @var string Image Name
     */
    public $ImageName;

    /**
     * @var string Image id
     */
    public $ImageId;

    /**
     * @var string DEAL_NONE: File pending
DEAL_IGNORE: Already ignored
DEAL_ADD_WHITELIST: Add to whitelist
DEAL_DEL: File deleted
DEAL_ISOLATE: Has been isolated
DEAL_ISOLATING: Isolated
DEAL_ISOLATE_FAILED: Isolation failed
DEAL_RECOVERING: Recovering
DEAL_RECOVER_FAILED: Recovery failed
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
     * @var string Recommended solution
     */
    public $SuggestScheme;

    /**
     * @var string Failed sub-status
FILE_NOT_FOUND: File does not exist
FILE_ABNORMAL: abnormal file
FILE_ABNORMAL_DEAL_RECOVER: Abnormal file when recovering file.
BACKUP_FILE_NOT_FOUND: Backup file not found
CONTAINER_NOT_FOUND_DEAL_ISOLATE: Container not found in isolation
CONTAINER_NOT_FOUND_DEAL_RECOVER: Container not found when recovering
TIMEOUT: Timeout
TOO_MANY: Too many tasks
OFFLINE: Offline
INTERNAL Server Error
VALIDATION: Invalid parameter
     */
    public $SubStatus;

    /**
     * @var string Network status.
Unisolated  NORMAL
ISOLATED
isolated
Isolation FAILED
RESTORING isolation
Isolation restoration failed RESTORE_FAILED
     */
    public $ContainerNetStatus;

    /**
     * @var string container sub-status
AGENT_OFFLINE
	NODE_DESTROYED
	CONTAINER_EXITED
	"CONTAINER_DESTROYED" //Container destroyed
	SHARED_HOST
	RESOURCE_LIMIT
	"UNKNOW": Unknown
     */
    public $ContainerNetSubStatus;

    /**
     * @var string Container Isolation Operation Source
     */
    public $ContainerIsolateOperationSrc;

    /**
     * @var string MD5 Value
     */
    public $MD5;

    /**
     * @var string Risk Level: RISK_CRITICAL, RISK_HIGH, RISK_MEDIUM, RISK_LOW, and RISK_NOTICE
     */
    public $RiskLevel;

    /**
     * @var array Detection platform
1: Cloud Killing Engine
2: tav
3: binaryAi
4: Abnormal behavior
5: Threat Intelligence
     */
    public $CheckPlatform;

    /**
     * @var string Node ID
     */
    public $NodeID;

    /**
     * @var string Node name.
     */
    public $NodeName;

    /**
     * @var string pod ip
     */
    public $PodIP;

    /**
     * @var string Name of the pod (instance)
     */
    public $PodName;

    /**
     * @var string Node Cluster ID
     */
    public $ClusterID;

    /**
     * @var string Node Type. NORMAL: Common Node; SUPER: Super Node
     */
    public $NodeType;

    /**
     * @var string Public IP of the node
     */
    public $PublicIP;

    /**
     * @var string Node private network IP
     */
    public $InnerIP;

    /**
     * @var string Node Unique ID
     */
    public $NodeUniqueID;

    /**
     * @var string Common Node ID
     */
    public $HostID;

    /**
     * @var string Cluster name.
     */
    public $ClusterName;

    /**
     * @var string Private IP address of the node, which is the same as the value of InnerIP.
     */
    public $HostIP;

    /**
     * @param string $FileName File name
     * @param string $FilePath File path
     * @param string $VirusName Virus name
     * @param string $CreateTime Creation time.
     * @param string $ModifyTime Update time
     * @param string $ContainerName Container name
     * @param string $ContainerId container id
     * @param string $ContainerStatus Container status.
RUNNING: running
Suspend: PAUSED
Stop: STOPPED
CREATED
DESTROYED
RESTARTING
Migrating: REMOVING
     * @param string $ImageName Image Name
     * @param string $ImageId Image id
     * @param string $Status DEAL_NONE: File pending
DEAL_IGNORE: Already ignored
DEAL_ADD_WHITELIST: Add to whitelist
DEAL_DEL: File deleted
DEAL_ISOLATE: Has been isolated
DEAL_ISOLATING: Isolated
DEAL_ISOLATE_FAILED: Isolation failed
DEAL_RECOVERING: Recovering
DEAL_RECOVER_FAILED: Recovery failed
     * @param string $Id Event ID
     * @param string $HarmDescribe Event description
     * @param string $SuggestScheme Recommended solution
     * @param string $SubStatus Failed sub-status
FILE_NOT_FOUND: File does not exist
FILE_ABNORMAL: abnormal file
FILE_ABNORMAL_DEAL_RECOVER: Abnormal file when recovering file.
BACKUP_FILE_NOT_FOUND: Backup file not found
CONTAINER_NOT_FOUND_DEAL_ISOLATE: Container not found in isolation
CONTAINER_NOT_FOUND_DEAL_RECOVER: Container not found when recovering
TIMEOUT: Timeout
TOO_MANY: Too many tasks
OFFLINE: Offline
INTERNAL Server Error
VALIDATION: Invalid parameter
     * @param string $ContainerNetStatus Network status.
Unisolated  NORMAL
ISOLATED
isolated
Isolation FAILED
RESTORING isolation
Isolation restoration failed RESTORE_FAILED
     * @param string $ContainerNetSubStatus container sub-status
AGENT_OFFLINE
	NODE_DESTROYED
	CONTAINER_EXITED
	"CONTAINER_DESTROYED" //Container destroyed
	SHARED_HOST
	RESOURCE_LIMIT
	"UNKNOW": Unknown
     * @param string $ContainerIsolateOperationSrc Container Isolation Operation Source
     * @param string $MD5 MD5 Value
     * @param string $RiskLevel Risk Level: RISK_CRITICAL, RISK_HIGH, RISK_MEDIUM, RISK_LOW, and RISK_NOTICE
     * @param array $CheckPlatform Detection platform
1: Cloud Killing Engine
2: tav
3: binaryAi
4: Abnormal behavior
5: Threat Intelligence
     * @param string $NodeID Node ID
     * @param string $NodeName Node name.
     * @param string $PodIP pod ip
     * @param string $PodName Name of the pod (instance)
     * @param string $ClusterID Node Cluster ID
     * @param string $NodeType Node Type. NORMAL: Common Node; SUPER: Super Node
     * @param string $PublicIP Public IP of the node
     * @param string $InnerIP Node private network IP
     * @param string $NodeUniqueID Node Unique ID
     * @param string $HostID Common Node ID
     * @param string $ClusterName Cluster name.
     * @param string $HostIP Private IP address of the node, which is the same as the value of InnerIP.
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

        if (array_key_exists("HostIP",$param) and $param["HostIP"] !== null) {
            $this->HostIP = $param["HostIP"];
        }
    }
}
