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
 * DescribeVirusDetail response structure.
 *
 * @method string getImageId() Obtain Image ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setImageId(string $ImageId) Set Image ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getImageName() Obtain Image name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setImageName(string $ImageName) Set Image name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Creation time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getSize() Obtain Trojan file size
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSize(integer $Size) Set Trojan file size
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFilePath() Obtain Trojan file path
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFilePath(string $FilePath) Set Trojan file path
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getModifyTime() Obtain Last generation time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setModifyTime(string $ModifyTime) Set Last generation time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVirusName() Obtain Virus name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVirusName(string $VirusName) Set Virus name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRiskLevel() Obtain Risk level. Valid values: `RISK_CRITICAL`, `RISK_HIGH`, `RISK_MEDIUM`, `RISK_LOW`, `RISK_NOTICE`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRiskLevel(string $RiskLevel) Set Risk level. Valid values: `RISK_CRITICAL`, `RISK_HIGH`, `RISK_MEDIUM`, `RISK_LOW`, `RISK_NOTICE`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getContainerName() Obtain Container name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setContainerName(string $ContainerName) Set Container name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getContainerId() Obtain Container ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setContainerId(string $ContainerId) Set Container ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getHostName() Obtain Server name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHostName(string $HostName) Set Server name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getHostId() Obtain Server ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHostId(string $HostId) Set Server ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProcessName() Obtain Process name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProcessName(string $ProcessName) Set Process name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProcessPath() Obtain Process path
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProcessPath(string $ProcessPath) Set Process path
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProcessMd5() Obtain Process MD5
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProcessMd5(string $ProcessMd5) Set Process MD5
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getProcessId() Obtain Process ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProcessId(integer $ProcessId) Set Process ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProcessArgv() Obtain Process parameter
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProcessArgv(string $ProcessArgv) Set Process parameter
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProcessChan() Obtain Process chain
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProcessChan(string $ProcessChan) Set Process chain
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProcessAccountGroup() Obtain Process group
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProcessAccountGroup(string $ProcessAccountGroup) Set Process group
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProcessStartAccount() Obtain Process initiator
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProcessStartAccount(string $ProcessStartAccount) Set Process initiator
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProcessFileAuthority() Obtain Process file permission
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProcessFileAuthority(string $ProcessFileAuthority) Set Process file permission
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getSourceType() Obtain Source. Valid values: `0` (quick scan); `1` (scheduled scan); `2` (real-time monitoring).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSourceType(integer $SourceType) Set Source. Valid values: `0` (quick scan); `1` (scheduled scan); `2` (real-time monitoring).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTags() Obtain Tag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set Tag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getHarmDescribe() Obtain Event description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHarmDescribe(string $HarmDescribe) Set Event description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSuggestScheme() Obtain Solution
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSuggestScheme(string $SuggestScheme) Set Solution
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMark() Obtain Remarks
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMark(string $Mark) Set Remarks
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFileName() Obtain Suspicious file name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFileName(string $FileName) Set Suspicious file name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFileMd5() Obtain MD5 checksum of the file
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFileMd5(string $FileMd5) Set MD5 checksum of the file
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEventType() Obtain Event type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEventType(string $EventType) Set Event type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPodName() Obtain Cluster name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPodName(string $PodName) Set Cluster name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStatus() Obtain `DEAL_NONE`: Pending.
`DEAL_IGNORE`: Ignored.
`DEAL_ADD_WHITELIST`: Allowed.
`DEAL_DEL`: Deleted.
`DEAL_ISOLATE`: Isolated.
`DEAL_ISOLATING`: Isolating.
`DEAL_ISOLATE_FAILED`: Isolation failed.
`DEAL_RECOVERING`: Recovering.
`DEAL_RECOVER_FAILED`: Recovery failed.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(string $Status) Set `DEAL_NONE`: Pending.
`DEAL_IGNORE`: Ignored.
`DEAL_ADD_WHITELIST`: Allowed.
`DEAL_DEL`: Deleted.
`DEAL_ISOLATE`: Isolated.
`DEAL_ISOLATING`: Isolating.
`DEAL_ISOLATE_FAILED`: Isolation failed.
`DEAL_RECOVERING`: Recovering.
`DEAL_RECOVER_FAILED`: Recovery failed.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSubStatus() Obtain Sub-status of the failure:
`FILE_NOT_FOUND`: The file does not exist.
`FILE_ABNORMAL`: The file is abnormal.
`FILE_ABNORMAL_DEAL_RECOVER`: The file is abnormal when recovered.
`BACKUP_FILE_NOT_FOUND`: The backup file does not exist.
`CONTAINER_NOT_FOUND_DEAL_ISOLATE`: The container does not exist during isolation.
`CONTAINER_NOT_FOUND_DEAL_RECOVER`: The container does not exist during recovery.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubStatus(string $SubStatus) Set Sub-status of the failure:
`FILE_NOT_FOUND`: The file does not exist.
`FILE_ABNORMAL`: The file is abnormal.
`FILE_ABNORMAL_DEAL_RECOVER`: The file is abnormal when recovered.
`BACKUP_FILE_NOT_FOUND`: The backup file does not exist.
`CONTAINER_NOT_FOUND_DEAL_ISOLATE`: The container does not exist during isolation.
`CONTAINER_NOT_FOUND_DEAL_RECOVER`: The container does not exist during recovery.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getHostIP() Obtain Private IP
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHostIP(string $HostIP) Set Private IP
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getClientIP() Obtain Public IP
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setClientIP(string $ClientIP) Set Public IP
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPProcessStartUser() Obtain Parent process initiator
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPProcessStartUser(string $PProcessStartUser) Set Parent process initiator
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPProcessUserGroup() Obtain User group of the parent process
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPProcessUserGroup(string $PProcessUserGroup) Set User group of the parent process
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPProcessPath() Obtain Path of the parent process
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPProcessPath(string $PProcessPath) Set Path of the parent process
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPProcessParam() Obtain Command line parameters of the parent process
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPProcessParam(string $PProcessParam) Set Command line parameters of the parent process
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAncestorProcessStartUser() Obtain Ancestor process initiator
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAncestorProcessStartUser(string $AncestorProcessStartUser) Set Ancestor process initiator
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAncestorProcessUserGroup() Obtain Ancestor process user group
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAncestorProcessUserGroup(string $AncestorProcessUserGroup) Set Ancestor process user group
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAncestorProcessPath() Obtain Ancestor process path
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAncestorProcessPath(string $AncestorProcessPath) Set Ancestor process path
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAncestorProcessParam() Obtain Command line parameters of the ancestor process
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAncestorProcessParam(string $AncestorProcessParam) Set Command line parameters of the ancestor process
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getOperationTime() Obtain Last processing time of the event
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOperationTime(string $OperationTime) Set Last processing time of the event
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getContainerNetStatus() Obtain Container isolation status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setContainerNetStatus(string $ContainerNetStatus) Set Container isolation status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getContainerNetSubStatus() Obtain Sub-status of container isolation
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setContainerNetSubStatus(string $ContainerNetSubStatus) Set Sub-status of container isolation
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getContainerIsolateOperationSrc() Obtain Container isolation operation source
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setContainerIsolateOperationSrc(string $ContainerIsolateOperationSrc) Set Container isolation operation source
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
 * @method string getFileAccessTime() Obtain File accessed time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFileAccessTime(string $FileAccessTime) Set File accessed time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFileModifyTime() Obtain File modified time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFileModifyTime(string $FileModifyTime) Set File modified time
Note: This field may return null, indicating that no valid values can be obtained.
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
 * @method string getNamespace() Obtain 
 * @method void setNamespace(string $Namespace) Set 
 * @method string getWorkloadType() Obtain 
 * @method void setWorkloadType(string $WorkloadType) Set 
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeVirusDetailResponse extends AbstractModel
{
    /**
     * @var string Image ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ImageId;

    /**
     * @var string Image name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ImageName;

    /**
     * @var string Creation time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var integer Trojan file size
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Size;

    /**
     * @var string Trojan file path
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FilePath;

    /**
     * @var string Last generation time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ModifyTime;

    /**
     * @var string Virus name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VirusName;

    /**
     * @var string Risk level. Valid values: `RISK_CRITICAL`, `RISK_HIGH`, `RISK_MEDIUM`, `RISK_LOW`, `RISK_NOTICE`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RiskLevel;

    /**
     * @var string Container name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ContainerName;

    /**
     * @var string Container ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ContainerId;

    /**
     * @var string Server name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HostName;

    /**
     * @var string Server ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HostId;

    /**
     * @var string Process name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProcessName;

    /**
     * @var string Process path
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProcessPath;

    /**
     * @var string Process MD5
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProcessMd5;

    /**
     * @var integer Process ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProcessId;

    /**
     * @var string Process parameter
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProcessArgv;

    /**
     * @var string Process chain
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProcessChan;

    /**
     * @var string Process group
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProcessAccountGroup;

    /**
     * @var string Process initiator
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProcessStartAccount;

    /**
     * @var string Process file permission
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProcessFileAuthority;

    /**
     * @var integer Source. Valid values: `0` (quick scan); `1` (scheduled scan); `2` (real-time monitoring).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SourceType;

    /**
     * @var array Tag
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @var string Event description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HarmDescribe;

    /**
     * @var string Solution
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SuggestScheme;

    /**
     * @var string Remarks
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Mark;

    /**
     * @var string Suspicious file name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FileName;

    /**
     * @var string MD5 checksum of the file
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FileMd5;

    /**
     * @var string Event type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EventType;

    /**
     * @var string Cluster name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PodName;

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
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var string Sub-status of the failure:
`FILE_NOT_FOUND`: The file does not exist.
`FILE_ABNORMAL`: The file is abnormal.
`FILE_ABNORMAL_DEAL_RECOVER`: The file is abnormal when recovered.
`BACKUP_FILE_NOT_FOUND`: The backup file does not exist.
`CONTAINER_NOT_FOUND_DEAL_ISOLATE`: The container does not exist during isolation.
`CONTAINER_NOT_FOUND_DEAL_RECOVER`: The container does not exist during recovery.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SubStatus;

    /**
     * @var string Private IP
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HostIP;

    /**
     * @var string Public IP
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ClientIP;

    /**
     * @var string Parent process initiator
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PProcessStartUser;

    /**
     * @var string User group of the parent process
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PProcessUserGroup;

    /**
     * @var string Path of the parent process
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PProcessPath;

    /**
     * @var string Command line parameters of the parent process
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PProcessParam;

    /**
     * @var string Ancestor process initiator
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AncestorProcessStartUser;

    /**
     * @var string Ancestor process user group
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AncestorProcessUserGroup;

    /**
     * @var string Ancestor process path
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AncestorProcessPath;

    /**
     * @var string Command line parameters of the ancestor process
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AncestorProcessParam;

    /**
     * @var string Last processing time of the event
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OperationTime;

    /**
     * @var string Container isolation status
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ContainerNetStatus;

    /**
     * @var string Sub-status of container isolation
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ContainerNetSubStatus;

    /**
     * @var string Container isolation operation source
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ContainerIsolateOperationSrc;

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
     * @var string File accessed time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FileAccessTime;

    /**
     * @var string File modified time
Note: This field may return null, indicating that no valid values can be obtained.
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
     * @var string 
     */
    public $Namespace;

    /**
     * @var string 
     */
    public $WorkloadType;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $ImageId Image ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ImageName Image name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Creation time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Size Trojan file size
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FilePath Trojan file path
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ModifyTime Last generation time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $VirusName Virus name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RiskLevel Risk level. Valid values: `RISK_CRITICAL`, `RISK_HIGH`, `RISK_MEDIUM`, `RISK_LOW`, `RISK_NOTICE`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ContainerName Container name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ContainerId Container ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $HostName Server name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $HostId Server ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ProcessName Process name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ProcessPath Process path
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ProcessMd5 Process MD5
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ProcessId Process ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ProcessArgv Process parameter
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ProcessChan Process chain
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ProcessAccountGroup Process group
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ProcessStartAccount Process initiator
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ProcessFileAuthority Process file permission
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $SourceType Source. Valid values: `0` (quick scan); `1` (scheduled scan); `2` (real-time monitoring).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Tags Tag
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $HarmDescribe Event description
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SuggestScheme Solution
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Mark Remarks
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FileName Suspicious file name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FileMd5 MD5 checksum of the file
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EventType Event type
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PodName Cluster name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Status `DEAL_NONE`: Pending.
`DEAL_IGNORE`: Ignored.
`DEAL_ADD_WHITELIST`: Allowed.
`DEAL_DEL`: Deleted.
`DEAL_ISOLATE`: Isolated.
`DEAL_ISOLATING`: Isolating.
`DEAL_ISOLATE_FAILED`: Isolation failed.
`DEAL_RECOVERING`: Recovering.
`DEAL_RECOVER_FAILED`: Recovery failed.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SubStatus Sub-status of the failure:
`FILE_NOT_FOUND`: The file does not exist.
`FILE_ABNORMAL`: The file is abnormal.
`FILE_ABNORMAL_DEAL_RECOVER`: The file is abnormal when recovered.
`BACKUP_FILE_NOT_FOUND`: The backup file does not exist.
`CONTAINER_NOT_FOUND_DEAL_ISOLATE`: The container does not exist during isolation.
`CONTAINER_NOT_FOUND_DEAL_RECOVER`: The container does not exist during recovery.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $HostIP Private IP
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ClientIP Public IP
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PProcessStartUser Parent process initiator
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PProcessUserGroup User group of the parent process
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PProcessPath Path of the parent process
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PProcessParam Command line parameters of the parent process
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AncestorProcessStartUser Ancestor process initiator
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AncestorProcessUserGroup Ancestor process user group
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AncestorProcessPath Ancestor process path
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AncestorProcessParam Command line parameters of the ancestor process
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $OperationTime Last processing time of the event
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ContainerNetStatus Container isolation status
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ContainerNetSubStatus Sub-status of container isolation
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ContainerIsolateOperationSrc Container isolation operation source
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $CheckPlatform Check platform
`1`: Tencent Cloud Security Engine.
`2`: tav.
`3`: binaryAi.
`4`: Unusual behavior.
`5`: Threat intelligence.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FileAccessTime File accessed time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FileModifyTime File modified time
Note: This field may return null, indicating that no valid values can be obtained.
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
     * @param string $Namespace 
     * @param string $WorkloadType 
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

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
