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
 * DescribeVirusDetail response structure.
 *
 * @method string getImageId() Obtain Image ID
 * @method void setImageId(string $ImageId) Set Image ID
 * @method string getImageName() Obtain Image name
 * @method void setImageName(string $ImageName) Set Image name
 * @method string getCreateTime() Obtain Creation time.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
 * @method integer getSize() Obtain Trojan File Size
 * @method void setSize(integer $Size) Set Trojan File Size
 * @method string getFilePath() Obtain Trojan file path
 * @method void setFilePath(string $FilePath) Set Trojan file path
 * @method string getModifyTime() Obtain Latest creation time
 * @method void setModifyTime(string $ModifyTime) Set Latest creation time
 * @method string getVirusName() Obtain Virus name
 * @method void setVirusName(string $VirusName) Set Virus name
 * @method string getRiskLevel() Obtain Risk Level: RISK_CRITICAL, RISK_HIGH, RISK_MEDIUM, RISK_LOW, and RISK_NOTICE
 * @method void setRiskLevel(string $RiskLevel) Set Risk Level: RISK_CRITICAL, RISK_HIGH, RISK_MEDIUM, RISK_LOW, and RISK_NOTICE
 * @method string getContainerName() Obtain Container name
 * @method void setContainerName(string $ContainerName) Set Container name
 * @method string getContainerId() Obtain Container id
 * @method void setContainerId(string $ContainerId) Set Container id
 * @method string getHostName() Obtain Host name
 * @method void setHostName(string $HostName) Set Host name
 * @method string getHostId() Obtain Host ID
 * @method void setHostId(string $HostId) Set Host ID
 * @method string getProcessName() Obtain Process name
 * @method void setProcessName(string $ProcessName) Set Process name
 * @method string getProcessPath() Obtain Process path
 * @method void setProcessPath(string $ProcessPath) Set Process path
 * @method string getProcessMd5() Obtain Process md5
 * @method void setProcessMd5(string $ProcessMd5) Set Process md5
 * @method integer getProcessId() Obtain Process id
 * @method void setProcessId(integer $ProcessId) Set Process id
 * @method string getProcessArgv() Obtain Process parameter
 * @method void setProcessArgv(string $ProcessArgv) Set Process parameter
 * @method string getProcessChan() Obtain Process chain
 * @method void setProcessChan(string $ProcessChan) Set Process chain
 * @method string getProcessAccountGroup() Obtain Process Group
 * @method void setProcessAccountGroup(string $ProcessAccountGroup) Set Process Group
 * @method string getProcessStartAccount() Obtain process initiator
 * @method void setProcessStartAccount(string $ProcessStartAccount) Set process initiator
 * @method string getProcessFileAuthority() Obtain Process file permission
 * @method void setProcessFileAuthority(string $ProcessFileAuthority) Set Process file permission
 * @method integer getSourceType() Obtain Source. 0: One-Click Scan; 1: Scheduled Scan; 2: Real-Time Monitoring
 * @method void setSourceType(integer $SourceType) Set Source. 0: One-Click Scan; 1: Scheduled Scan; 2: Real-Time Monitoring
 * @method array getTags() Obtain Tag.
 * @method void setTags(array $Tags) Set Tag.
 * @method string getHarmDescribe() Obtain Event description
 * @method void setHarmDescribe(string $HarmDescribe) Set Event description
 * @method string getSuggestScheme() Obtain Recommended solution
 * @method void setSuggestScheme(string $SuggestScheme) Set Recommended solution
 * @method string getMark() Obtain Remarks
 * @method void setMark(string $Mark) Set Remarks
 * @method string getFileName() Obtain Risk File Name
 * @method void setFileName(string $FileName) Set Risk File Name
 * @method string getFileMd5() Obtain File MD5
 * @method void setFileMd5(string $FileMd5) Set File MD5
 * @method string getEventType() Obtain Event type
 * @method void setEventType(string $EventType) Set Event type
 * @method string getPodName() Obtain Cluster name.
 * @method void setPodName(string $PodName) Set Cluster name.
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
 * @method string getSubStatus() Obtain Failed sub-status
FILE_NOT_FOUND: File not found
FILE_ABNORMAL: File abnormality
FILE_ABNORMAL_DEAL_RECOVER: File abnormality when recovering file
BACKUP FILE NOT FOUND
CONTAINER_NOT_FOUND_DEAL_ISOLATE: Container not found in isolation
CONTAINER_NOT_FOUND_DEAL_RECOVER: Container not found when recovering
 * @method void setSubStatus(string $SubStatus) Set Failed sub-status
FILE_NOT_FOUND: File not found
FILE_ABNORMAL: File abnormality
FILE_ABNORMAL_DEAL_RECOVER: File abnormality when recovering file
BACKUP FILE NOT FOUND
CONTAINER_NOT_FOUND_DEAL_ISOLATE: Container not found in isolation
CONTAINER_NOT_FOUND_DEAL_RECOVER: Container not found when recovering
 * @method string getHostIP() Obtain Private IP address
 * @method void setHostIP(string $HostIP) Set Private IP address
 * @method string getClientIP() Obtain Public IP address
 * @method void setClientIP(string $ClientIP) Set Public IP address
 * @method string getPProcessStartUser() Obtain Parent Process Startup User
 * @method void setPProcessStartUser(string $PProcessStartUser) Set Parent Process Startup User
 * @method string getPProcessUserGroup() Obtain Parent process user group
 * @method void setPProcessUserGroup(string $PProcessUserGroup) Set Parent process user group
 * @method string getPProcessPath() Obtain Parent process path
 * @method void setPProcessPath(string $PProcessPath) Set Parent process path
 * @method string getPProcessParam() Obtain Parent Process Command Line Parameters
 * @method void setPProcessParam(string $PProcessParam) Set Parent Process Command Line Parameters
 * @method string getAncestorProcessStartUser() Obtain Ancestor Process Startup User
 * @method void setAncestorProcessStartUser(string $AncestorProcessStartUser) Set Ancestor Process Startup User
 * @method string getAncestorProcessUserGroup() Obtain Ancestor Process User Group
 * @method void setAncestorProcessUserGroup(string $AncestorProcessUserGroup) Set Ancestor Process User Group
 * @method string getAncestorProcessPath() Obtain Ancestor process path
 * @method void setAncestorProcessPath(string $AncestorProcessPath) Set Ancestor process path
 * @method string getAncestorProcessParam() Obtain Ancestor Process Command Line Parameters
 * @method void setAncestorProcessParam(string $AncestorProcessParam) Set Ancestor Process Command Line Parameters
 * @method string getOperationTime() Obtain Last Time for Event Handling
 * @method void setOperationTime(string $OperationTime) Set Last Time for Event Handling
 * @method string getContainerNetStatus() Obtain Container isolation status
 * @method void setContainerNetStatus(string $ContainerNetStatus) Set Container isolation status
 * @method string getContainerNetSubStatus() Obtain Container Isolation Sub-status
 * @method void setContainerNetSubStatus(string $ContainerNetSubStatus) Set Container Isolation Sub-status
 * @method string getContainerIsolateOperationSrc() Obtain Container Isolation Operation Source
 * @method void setContainerIsolateOperationSrc(string $ContainerIsolateOperationSrc) Set Container Isolation Operation Source
 * @method array getCheckPlatform() Obtain detection platform
1: Cloud Killing Engine
2: tav
3: binaryAi
4: Abnormal behavior
5: TI
 * @method void setCheckPlatform(array $CheckPlatform) Set detection platform
1: Cloud Killing Engine
2: tav
3: binaryAi
4: Abnormal behavior
5: TI
 * @method string getFileAccessTime() Obtain File Access Time
 * @method void setFileAccessTime(string $FileAccessTime) Set File Access Time
 * @method string getFileModifyTime() Obtain File Modification Time
 * @method void setFileModifyTime(string $FileModifyTime) Set File Modification Time
 * @method string getNodeSubNetID() Obtain Node subnet ID
 * @method void setNodeSubNetID(string $NodeSubNetID) Set Node subnet ID
 * @method string getNodeSubNetName() Obtain Node subnet name
 * @method void setNodeSubNetName(string $NodeSubNetName) Set Node subnet name
 * @method string getNodeSubNetCIDR() Obtain Subnet IP range
 * @method void setNodeSubNetCIDR(string $NodeSubNetCIDR) Set Subnet IP range
 * @method string getClusterID() Obtain Cluster ID
 * @method void setClusterID(string $ClusterID) Set Cluster ID
 * @method string getPodIP() Obtain Pod IP
 * @method void setPodIP(string $PodIP) Set Pod IP
 * @method string getPodStatus() Obtain Pod status
 * @method void setPodStatus(string $PodStatus) Set Pod status
 * @method string getNodeUniqueID() Obtain UID of the node
 * @method void setNodeUniqueID(string $NodeUniqueID) Set UID of the node
 * @method string getNodeType() Obtain Node type. Values: `NORMAL` (general node), `SUPER` (super node).
 * @method void setNodeType(string $NodeType) Set Node type. Values: `NORMAL` (general node), `SUPER` (super node).
 * @method string getNodeID() Obtain Node ID
 * @method void setNodeID(string $NodeID) Set Node ID
 * @method string getClusterName() Obtain Cluster name
 * @method void setClusterName(string $ClusterName) Set Cluster name
 * @method string getNamespace() Obtain Namespace
 * @method void setNamespace(string $Namespace) Set Namespace
 * @method string getWorkloadType() Obtain Workload type
 * @method void setWorkloadType(string $WorkloadType) Set Workload type
 * @method string getContainerStatus() Obtain Container status.
 * @method void setContainerStatus(string $ContainerStatus) Set Container status.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeVirusDetailResponse extends AbstractModel
{
    /**
     * @var string Image ID
     */
    public $ImageId;

    /**
     * @var string Image name
     */
    public $ImageName;

    /**
     * @var string Creation time.
     */
    public $CreateTime;

    /**
     * @var integer Trojan File Size
     */
    public $Size;

    /**
     * @var string Trojan file path
     */
    public $FilePath;

    /**
     * @var string Latest creation time
     */
    public $ModifyTime;

    /**
     * @var string Virus name
     */
    public $VirusName;

    /**
     * @var string Risk Level: RISK_CRITICAL, RISK_HIGH, RISK_MEDIUM, RISK_LOW, and RISK_NOTICE
     */
    public $RiskLevel;

    /**
     * @var string Container name
     */
    public $ContainerName;

    /**
     * @var string Container id
     */
    public $ContainerId;

    /**
     * @var string Host name
     */
    public $HostName;

    /**
     * @var string Host ID
     */
    public $HostId;

    /**
     * @var string Process name
     */
    public $ProcessName;

    /**
     * @var string Process path
     */
    public $ProcessPath;

    /**
     * @var string Process md5
     */
    public $ProcessMd5;

    /**
     * @var integer Process id
     */
    public $ProcessId;

    /**
     * @var string Process parameter
     */
    public $ProcessArgv;

    /**
     * @var string Process chain
     */
    public $ProcessChan;

    /**
     * @var string Process Group
     */
    public $ProcessAccountGroup;

    /**
     * @var string process initiator
     */
    public $ProcessStartAccount;

    /**
     * @var string Process file permission
     */
    public $ProcessFileAuthority;

    /**
     * @var integer Source. 0: One-Click Scan; 1: Scheduled Scan; 2: Real-Time Monitoring
     */
    public $SourceType;

    /**
     * @var array Tag.
     */
    public $Tags;

    /**
     * @var string Event description
     */
    public $HarmDescribe;

    /**
     * @var string Recommended solution
     */
    public $SuggestScheme;

    /**
     * @var string Remarks
     */
    public $Mark;

    /**
     * @var string Risk File Name
     */
    public $FileName;

    /**
     * @var string File MD5
     */
    public $FileMd5;

    /**
     * @var string Event type
     */
    public $EventType;

    /**
     * @var string Cluster name.
     */
    public $PodName;

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
     * @var string Failed sub-status
FILE_NOT_FOUND: File not found
FILE_ABNORMAL: File abnormality
FILE_ABNORMAL_DEAL_RECOVER: File abnormality when recovering file
BACKUP FILE NOT FOUND
CONTAINER_NOT_FOUND_DEAL_ISOLATE: Container not found in isolation
CONTAINER_NOT_FOUND_DEAL_RECOVER: Container not found when recovering
     */
    public $SubStatus;

    /**
     * @var string Private IP address
     */
    public $HostIP;

    /**
     * @var string Public IP address
     */
    public $ClientIP;

    /**
     * @var string Parent Process Startup User
     */
    public $PProcessStartUser;

    /**
     * @var string Parent process user group
     */
    public $PProcessUserGroup;

    /**
     * @var string Parent process path
     */
    public $PProcessPath;

    /**
     * @var string Parent Process Command Line Parameters
     */
    public $PProcessParam;

    /**
     * @var string Ancestor Process Startup User
     */
    public $AncestorProcessStartUser;

    /**
     * @var string Ancestor Process User Group
     */
    public $AncestorProcessUserGroup;

    /**
     * @var string Ancestor process path
     */
    public $AncestorProcessPath;

    /**
     * @var string Ancestor Process Command Line Parameters
     */
    public $AncestorProcessParam;

    /**
     * @var string Last Time for Event Handling
     */
    public $OperationTime;

    /**
     * @var string Container isolation status
     */
    public $ContainerNetStatus;

    /**
     * @var string Container Isolation Sub-status
     */
    public $ContainerNetSubStatus;

    /**
     * @var string Container Isolation Operation Source
     */
    public $ContainerIsolateOperationSrc;

    /**
     * @var array detection platform
1: Cloud Killing Engine
2: tav
3: binaryAi
4: Abnormal behavior
5: TI
     */
    public $CheckPlatform;

    /**
     * @var string File Access Time
     */
    public $FileAccessTime;

    /**
     * @var string File Modification Time
     */
    public $FileModifyTime;

    /**
     * @var string Node subnet ID
     */
    public $NodeSubNetID;

    /**
     * @var string Node subnet name
     */
    public $NodeSubNetName;

    /**
     * @var string Subnet IP range
     */
    public $NodeSubNetCIDR;

    /**
     * @var string Cluster ID
     */
    public $ClusterID;

    /**
     * @var string Pod IP
     */
    public $PodIP;

    /**
     * @var string Pod status
     */
    public $PodStatus;

    /**
     * @var string UID of the node
     */
    public $NodeUniqueID;

    /**
     * @var string Node type. Values: `NORMAL` (general node), `SUPER` (super node).
     */
    public $NodeType;

    /**
     * @var string Node ID
     */
    public $NodeID;

    /**
     * @var string Cluster name
     */
    public $ClusterName;

    /**
     * @var string Namespace
     */
    public $Namespace;

    /**
     * @var string Workload type
     */
    public $WorkloadType;

    /**
     * @var string Container status.
     */
    public $ContainerStatus;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $ImageId Image ID
     * @param string $ImageName Image name
     * @param string $CreateTime Creation time.
     * @param integer $Size Trojan File Size
     * @param string $FilePath Trojan file path
     * @param string $ModifyTime Latest creation time
     * @param string $VirusName Virus name
     * @param string $RiskLevel Risk Level: RISK_CRITICAL, RISK_HIGH, RISK_MEDIUM, RISK_LOW, and RISK_NOTICE
     * @param string $ContainerName Container name
     * @param string $ContainerId Container id
     * @param string $HostName Host name
     * @param string $HostId Host ID
     * @param string $ProcessName Process name
     * @param string $ProcessPath Process path
     * @param string $ProcessMd5 Process md5
     * @param integer $ProcessId Process id
     * @param string $ProcessArgv Process parameter
     * @param string $ProcessChan Process chain
     * @param string $ProcessAccountGroup Process Group
     * @param string $ProcessStartAccount process initiator
     * @param string $ProcessFileAuthority Process file permission
     * @param integer $SourceType Source. 0: One-Click Scan; 1: Scheduled Scan; 2: Real-Time Monitoring
     * @param array $Tags Tag.
     * @param string $HarmDescribe Event description
     * @param string $SuggestScheme Recommended solution
     * @param string $Mark Remarks
     * @param string $FileName Risk File Name
     * @param string $FileMd5 File MD5
     * @param string $EventType Event type
     * @param string $PodName Cluster name.
     * @param string $Status DEAL_NONE: File pending
DEAL_IGNORE: Already ignored
DEAL_ADD_WHITELIST: Add to whitelist
DEAL_DEL: File deleted
DEAL_ISOLATE: Has been isolated
DEAL_ISOLATING: Isolated
DEAL_ISOLATE_FAILED: Isolation failed
DEAL_RECOVERING: Recovering
DEAL_RECOVER_FAILED: Recovery failed
     * @param string $SubStatus Failed sub-status
FILE_NOT_FOUND: File not found
FILE_ABNORMAL: File abnormality
FILE_ABNORMAL_DEAL_RECOVER: File abnormality when recovering file
BACKUP FILE NOT FOUND
CONTAINER_NOT_FOUND_DEAL_ISOLATE: Container not found in isolation
CONTAINER_NOT_FOUND_DEAL_RECOVER: Container not found when recovering
     * @param string $HostIP Private IP address
     * @param string $ClientIP Public IP address
     * @param string $PProcessStartUser Parent Process Startup User
     * @param string $PProcessUserGroup Parent process user group
     * @param string $PProcessPath Parent process path
     * @param string $PProcessParam Parent Process Command Line Parameters
     * @param string $AncestorProcessStartUser Ancestor Process Startup User
     * @param string $AncestorProcessUserGroup Ancestor Process User Group
     * @param string $AncestorProcessPath Ancestor process path
     * @param string $AncestorProcessParam Ancestor Process Command Line Parameters
     * @param string $OperationTime Last Time for Event Handling
     * @param string $ContainerNetStatus Container isolation status
     * @param string $ContainerNetSubStatus Container Isolation Sub-status
     * @param string $ContainerIsolateOperationSrc Container Isolation Operation Source
     * @param array $CheckPlatform detection platform
1: Cloud Killing Engine
2: tav
3: binaryAi
4: Abnormal behavior
5: TI
     * @param string $FileAccessTime File Access Time
     * @param string $FileModifyTime File Modification Time
     * @param string $NodeSubNetID Node subnet ID
     * @param string $NodeSubNetName Node subnet name
     * @param string $NodeSubNetCIDR Subnet IP range
     * @param string $ClusterID Cluster ID
     * @param string $PodIP Pod IP
     * @param string $PodStatus Pod status
     * @param string $NodeUniqueID UID of the node
     * @param string $NodeType Node type. Values: `NORMAL` (general node), `SUPER` (super node).
     * @param string $NodeID Node ID
     * @param string $ClusterName Cluster name
     * @param string $Namespace Namespace
     * @param string $WorkloadType Workload type
     * @param string $ContainerStatus Container status.
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
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
        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("FilePath",$param) and $param["FilePath"] !== null) {
            $this->FilePath = $param["FilePath"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("VirusName",$param) and $param["VirusName"] !== null) {
            $this->VirusName = $param["VirusName"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("ContainerName",$param) and $param["ContainerName"] !== null) {
            $this->ContainerName = $param["ContainerName"];
        }

        if (array_key_exists("ContainerId",$param) and $param["ContainerId"] !== null) {
            $this->ContainerId = $param["ContainerId"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("HostId",$param) and $param["HostId"] !== null) {
            $this->HostId = $param["HostId"];
        }

        if (array_key_exists("ProcessName",$param) and $param["ProcessName"] !== null) {
            $this->ProcessName = $param["ProcessName"];
        }

        if (array_key_exists("ProcessPath",$param) and $param["ProcessPath"] !== null) {
            $this->ProcessPath = $param["ProcessPath"];
        }

        if (array_key_exists("ProcessMd5",$param) and $param["ProcessMd5"] !== null) {
            $this->ProcessMd5 = $param["ProcessMd5"];
        }

        if (array_key_exists("ProcessId",$param) and $param["ProcessId"] !== null) {
            $this->ProcessId = $param["ProcessId"];
        }

        if (array_key_exists("ProcessArgv",$param) and $param["ProcessArgv"] !== null) {
            $this->ProcessArgv = $param["ProcessArgv"];
        }

        if (array_key_exists("ProcessChan",$param) and $param["ProcessChan"] !== null) {
            $this->ProcessChan = $param["ProcessChan"];
        }

        if (array_key_exists("ProcessAccountGroup",$param) and $param["ProcessAccountGroup"] !== null) {
            $this->ProcessAccountGroup = $param["ProcessAccountGroup"];
        }

        if (array_key_exists("ProcessStartAccount",$param) and $param["ProcessStartAccount"] !== null) {
            $this->ProcessStartAccount = $param["ProcessStartAccount"];
        }

        if (array_key_exists("ProcessFileAuthority",$param) and $param["ProcessFileAuthority"] !== null) {
            $this->ProcessFileAuthority = $param["ProcessFileAuthority"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("HarmDescribe",$param) and $param["HarmDescribe"] !== null) {
            $this->HarmDescribe = $param["HarmDescribe"];
        }

        if (array_key_exists("SuggestScheme",$param) and $param["SuggestScheme"] !== null) {
            $this->SuggestScheme = $param["SuggestScheme"];
        }

        if (array_key_exists("Mark",$param) and $param["Mark"] !== null) {
            $this->Mark = $param["Mark"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileMd5",$param) and $param["FileMd5"] !== null) {
            $this->FileMd5 = $param["FileMd5"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("PodName",$param) and $param["PodName"] !== null) {
            $this->PodName = $param["PodName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SubStatus",$param) and $param["SubStatus"] !== null) {
            $this->SubStatus = $param["SubStatus"];
        }

        if (array_key_exists("HostIP",$param) and $param["HostIP"] !== null) {
            $this->HostIP = $param["HostIP"];
        }

        if (array_key_exists("ClientIP",$param) and $param["ClientIP"] !== null) {
            $this->ClientIP = $param["ClientIP"];
        }

        if (array_key_exists("PProcessStartUser",$param) and $param["PProcessStartUser"] !== null) {
            $this->PProcessStartUser = $param["PProcessStartUser"];
        }

        if (array_key_exists("PProcessUserGroup",$param) and $param["PProcessUserGroup"] !== null) {
            $this->PProcessUserGroup = $param["PProcessUserGroup"];
        }

        if (array_key_exists("PProcessPath",$param) and $param["PProcessPath"] !== null) {
            $this->PProcessPath = $param["PProcessPath"];
        }

        if (array_key_exists("PProcessParam",$param) and $param["PProcessParam"] !== null) {
            $this->PProcessParam = $param["PProcessParam"];
        }

        if (array_key_exists("AncestorProcessStartUser",$param) and $param["AncestorProcessStartUser"] !== null) {
            $this->AncestorProcessStartUser = $param["AncestorProcessStartUser"];
        }

        if (array_key_exists("AncestorProcessUserGroup",$param) and $param["AncestorProcessUserGroup"] !== null) {
            $this->AncestorProcessUserGroup = $param["AncestorProcessUserGroup"];
        }

        if (array_key_exists("AncestorProcessPath",$param) and $param["AncestorProcessPath"] !== null) {
            $this->AncestorProcessPath = $param["AncestorProcessPath"];
        }

        if (array_key_exists("AncestorProcessParam",$param) and $param["AncestorProcessParam"] !== null) {
            $this->AncestorProcessParam = $param["AncestorProcessParam"];
        }

        if (array_key_exists("OperationTime",$param) and $param["OperationTime"] !== null) {
            $this->OperationTime = $param["OperationTime"];
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

        if (array_key_exists("CheckPlatform",$param) and $param["CheckPlatform"] !== null) {
            $this->CheckPlatform = $param["CheckPlatform"];
        }

        if (array_key_exists("FileAccessTime",$param) and $param["FileAccessTime"] !== null) {
            $this->FileAccessTime = $param["FileAccessTime"];
        }

        if (array_key_exists("FileModifyTime",$param) and $param["FileModifyTime"] !== null) {
            $this->FileModifyTime = $param["FileModifyTime"];
        }

        if (array_key_exists("NodeSubNetID",$param) and $param["NodeSubNetID"] !== null) {
            $this->NodeSubNetID = $param["NodeSubNetID"];
        }

        if (array_key_exists("NodeSubNetName",$param) and $param["NodeSubNetName"] !== null) {
            $this->NodeSubNetName = $param["NodeSubNetName"];
        }

        if (array_key_exists("NodeSubNetCIDR",$param) and $param["NodeSubNetCIDR"] !== null) {
            $this->NodeSubNetCIDR = $param["NodeSubNetCIDR"];
        }

        if (array_key_exists("ClusterID",$param) and $param["ClusterID"] !== null) {
            $this->ClusterID = $param["ClusterID"];
        }

        if (array_key_exists("PodIP",$param) and $param["PodIP"] !== null) {
            $this->PodIP = $param["PodIP"];
        }

        if (array_key_exists("PodStatus",$param) and $param["PodStatus"] !== null) {
            $this->PodStatus = $param["PodStatus"];
        }

        if (array_key_exists("NodeUniqueID",$param) and $param["NodeUniqueID"] !== null) {
            $this->NodeUniqueID = $param["NodeUniqueID"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("NodeID",$param) and $param["NodeID"] !== null) {
            $this->NodeID = $param["NodeID"];
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

        if (array_key_exists("ContainerStatus",$param) and $param["ContainerStatus"] !== null) {
            $this->ContainerStatus = $param["ContainerStatus"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
