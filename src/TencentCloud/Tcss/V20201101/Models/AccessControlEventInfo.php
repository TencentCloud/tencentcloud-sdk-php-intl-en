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
 * Container runtime security - Information of the access control event
 *
 * @method string getProcessName() Obtain Process name
 * @method void setProcessName(string $ProcessName) Set Process name
 * @method string getMatchRuleName() Obtain Name of the hit rule
 * @method void setMatchRuleName(string $MatchRuleName) Set Name of the hit rule
 * @method string getFoundTime() Obtain Generation time
 * @method void setFoundTime(string $FoundTime) Set Generation time
 * @method string getContainerName() Obtain Container name
 * @method void setContainerName(string $ContainerName) Set Container name
 * @method string getImageName() Obtain Image name
 * @method void setImageName(string $ImageName) Set Image name
 * @method string getBehavior() Obtain Action execution result. `BEHAVIOR_NONE`: None.
    `BEHAVIOR_ALERT`: Alert.
    `BEHAVIOR_RELEASE`: Allow.
    `BEHAVIOR_HOLDUP_FAILED`: Failed to block.
    `BEHAVIOR_HOLDUP_SUCCESSED`: Blocked.
 * @method void setBehavior(string $Behavior) Set Action execution result. `BEHAVIOR_NONE`: None.
    `BEHAVIOR_ALERT`: Alert.
    `BEHAVIOR_RELEASE`: Allow.
    `BEHAVIOR_HOLDUP_FAILED`: Failed to block.
    `BEHAVIOR_HOLDUP_SUCCESSED`: Blocked.
 * @method string getStatus() Obtain Status. `0`: Pending. `EVENT_UNDEAL`: Pending.
    `EVENT_DEALED`: Processed.
    `EVENT_INGNORE`: Ignored.
 * @method void setStatus(string $Status) Set Status. `0`: Pending. `EVENT_UNDEAL`: Pending.
    `EVENT_DEALED`: Processed.
    `EVENT_INGNORE`: Ignored.
 * @method string getId() Obtain Unique event ID
 * @method void setId(string $Id) Set Unique event ID
 * @method string getFileName() Obtain Filename
 * @method void setFileName(string $FileName) Set Filename
 * @method string getEventType() Obtain Event type. `FILE_ABNORMAL_READ`: Abnormal file read.
 * @method void setEventType(string $EventType) Set Event type. `FILE_ABNORMAL_READ`: Abnormal file read.
 * @method string getImageId() Obtain Image ID, which is used for redirect.
 * @method void setImageId(string $ImageId) Set Image ID, which is used for redirect.
 * @method string getContainerId() Obtain Container ID, which is used for redirect.
 * @method void setContainerId(string $ContainerId) Set Container ID, which is used for redirect.
 * @method string getSolution() Obtain Event solution
 * @method void setSolution(string $Solution) Set Event solution
 * @method string getDescription() Obtain Event description
 * @method void setDescription(string $Description) Set Event description
 * @method string getMatchRuleId() Obtain Hit policy ID
 * @method void setMatchRuleId(string $MatchRuleId) Set Hit policy ID
 * @method string getMatchAction() Obtain Action of the hit rule:
`RULE_MODE_RELEASE`: Allow.
`RULE_MODE_ALERT`: Alert.
`RULE_MODE_HOLDUP`: Block.
 * @method void setMatchAction(string $MatchAction) Set Action of the hit rule:
`RULE_MODE_RELEASE`: Allow.
`RULE_MODE_ALERT`: Alert.
`RULE_MODE_HOLDUP`: Block.
 * @method string getMatchProcessPath() Obtain Information of the process that hits the rule
 * @method void setMatchProcessPath(string $MatchProcessPath) Set Information of the process that hits the rule
 * @method string getMatchFilePath() Obtain Information of the file that hits the rule
 * @method void setMatchFilePath(string $MatchFilePath) Set Information of the file that hits the rule
 * @method string getFilePath() Obtain File path containing the name
 * @method void setFilePath(string $FilePath) Set File path containing the name
 * @method boolean getRuleExist() Obtain Whether the rule exists
 * @method void setRuleExist(boolean $RuleExist) Set Whether the rule exists
 * @method integer getEventCount() Obtain Number of events
 * @method void setEventCount(integer $EventCount) Set Number of events
 * @method string getLatestFoundTime() Obtain Last generation time
 * @method void setLatestFoundTime(string $LatestFoundTime) Set Last generation time
 * @method string getRuleId() Obtain Rule group ID
 * @method void setRuleId(string $RuleId) Set Rule group ID
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
 * @method string getNodeName() Obtain Node name: For super nodes, the node_id is displayed.
 * @method void setNodeName(string $NodeName) Set Node name: For super nodes, the node_id is displayed.
 * @method string getPodName() Obtain Pod name
 * @method void setPodName(string $PodName) Set Pod name
 * @method string getPodIP() Obtain Pod IP
 * @method void setPodIP(string $PodIP) Set Pod IP
 * @method string getNodeType() Obtain Node type. Values: `NORMAL` (general node), `SUPER` (super node).
 * @method void setNodeType(string $NodeType) Set Node type. Values: `NORMAL` (general node), `SUPER` (super node).
 * @method string getClusterID() Obtain Cluster ID
 * @method void setClusterID(string $ClusterID) Set Cluster ID
 * @method string getNodeUniqueID() Obtain Node unique ID. It's used for super nodes.
 * @method void setNodeUniqueID(string $NodeUniqueID) Set Node unique ID. It's used for super nodes.
 * @method string getPublicIP() Obtain Node public IP
 * @method void setPublicIP(string $PublicIP) Set Node public IP
 * @method string getNodeID() Obtain Node ID
 * @method void setNodeID(string $NodeID) Set Node ID
 * @method string getHostID() Obtain uuid
 * @method void setHostID(string $HostID) Set uuid
 * @method string getHostIP() Obtain Private IP of the node
 * @method void setHostIP(string $HostIP) Set Private IP of the node
 * @method string getClusterName() Obtain Cluster name
 * @method void setClusterName(string $ClusterName) Set Cluster name
 */
class AccessControlEventInfo extends AbstractModel
{
    /**
     * @var string Process name
     */
    public $ProcessName;

    /**
     * @var string Name of the hit rule
     */
    public $MatchRuleName;

    /**
     * @var string Generation time
     */
    public $FoundTime;

    /**
     * @var string Container name
     */
    public $ContainerName;

    /**
     * @var string Image name
     */
    public $ImageName;

    /**
     * @var string Action execution result. `BEHAVIOR_NONE`: None.
    `BEHAVIOR_ALERT`: Alert.
    `BEHAVIOR_RELEASE`: Allow.
    `BEHAVIOR_HOLDUP_FAILED`: Failed to block.
    `BEHAVIOR_HOLDUP_SUCCESSED`: Blocked.
     */
    public $Behavior;

    /**
     * @var string Status. `0`: Pending. `EVENT_UNDEAL`: Pending.
    `EVENT_DEALED`: Processed.
    `EVENT_INGNORE`: Ignored.
     */
    public $Status;

    /**
     * @var string Unique event ID
     */
    public $Id;

    /**
     * @var string Filename
     */
    public $FileName;

    /**
     * @var string Event type. `FILE_ABNORMAL_READ`: Abnormal file read.
     */
    public $EventType;

    /**
     * @var string Image ID, which is used for redirect.
     */
    public $ImageId;

    /**
     * @var string Container ID, which is used for redirect.
     */
    public $ContainerId;

    /**
     * @var string Event solution
     */
    public $Solution;

    /**
     * @var string Event description
     */
    public $Description;

    /**
     * @var string Hit policy ID
     */
    public $MatchRuleId;

    /**
     * @var string Action of the hit rule:
`RULE_MODE_RELEASE`: Allow.
`RULE_MODE_ALERT`: Alert.
`RULE_MODE_HOLDUP`: Block.
     */
    public $MatchAction;

    /**
     * @var string Information of the process that hits the rule
     */
    public $MatchProcessPath;

    /**
     * @var string Information of the file that hits the rule
     */
    public $MatchFilePath;

    /**
     * @var string File path containing the name
     */
    public $FilePath;

    /**
     * @var boolean Whether the rule exists
     */
    public $RuleExist;

    /**
     * @var integer Number of events
     */
    public $EventCount;

    /**
     * @var string Last generation time
     */
    public $LatestFoundTime;

    /**
     * @var string Rule group ID
     */
    public $RuleId;

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
     * @var string Node name: For super nodes, the node_id is displayed.
     */
    public $NodeName;

    /**
     * @var string Pod name
     */
    public $PodName;

    /**
     * @var string Pod IP
     */
    public $PodIP;

    /**
     * @var string Node type. Values: `NORMAL` (general node), `SUPER` (super node).
     */
    public $NodeType;

    /**
     * @var string Cluster ID
     */
    public $ClusterID;

    /**
     * @var string Node unique ID. It's used for super nodes.
     */
    public $NodeUniqueID;

    /**
     * @var string Node public IP
     */
    public $PublicIP;

    /**
     * @var string Node ID
     */
    public $NodeID;

    /**
     * @var string uuid
     */
    public $HostID;

    /**
     * @var string Private IP of the node
     */
    public $HostIP;

    /**
     * @var string Cluster name
     */
    public $ClusterName;

    /**
     * @param string $ProcessName Process name
     * @param string $MatchRuleName Name of the hit rule
     * @param string $FoundTime Generation time
     * @param string $ContainerName Container name
     * @param string $ImageName Image name
     * @param string $Behavior Action execution result. `BEHAVIOR_NONE`: None.
    `BEHAVIOR_ALERT`: Alert.
    `BEHAVIOR_RELEASE`: Allow.
    `BEHAVIOR_HOLDUP_FAILED`: Failed to block.
    `BEHAVIOR_HOLDUP_SUCCESSED`: Blocked.
     * @param string $Status Status. `0`: Pending. `EVENT_UNDEAL`: Pending.
    `EVENT_DEALED`: Processed.
    `EVENT_INGNORE`: Ignored.
     * @param string $Id Unique event ID
     * @param string $FileName Filename
     * @param string $EventType Event type. `FILE_ABNORMAL_READ`: Abnormal file read.
     * @param string $ImageId Image ID, which is used for redirect.
     * @param string $ContainerId Container ID, which is used for redirect.
     * @param string $Solution Event solution
     * @param string $Description Event description
     * @param string $MatchRuleId Hit policy ID
     * @param string $MatchAction Action of the hit rule:
`RULE_MODE_RELEASE`: Allow.
`RULE_MODE_ALERT`: Alert.
`RULE_MODE_HOLDUP`: Block.
     * @param string $MatchProcessPath Information of the process that hits the rule
     * @param string $MatchFilePath Information of the file that hits the rule
     * @param string $FilePath File path containing the name
     * @param boolean $RuleExist Whether the rule exists
     * @param integer $EventCount Number of events
     * @param string $LatestFoundTime Last generation time
     * @param string $RuleId Rule group ID
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
     * @param string $ContainerStatus Container status
`RUNNING`: Running.
`PAUSED`: Paused.
`STOPPED`: Stopped.
`CREATED`: Created.
`DESTROYED`: Terminated.
`RESTARTING`: Restarting.
`REMOVING`: Removing.
     * @param string $NodeName Node name: For super nodes, the node_id is displayed.
     * @param string $PodName Pod name
     * @param string $PodIP Pod IP
     * @param string $NodeType Node type. Values: `NORMAL` (general node), `SUPER` (super node).
     * @param string $ClusterID Cluster ID
     * @param string $NodeUniqueID Node unique ID. It's used for super nodes.
     * @param string $PublicIP Node public IP
     * @param string $NodeID Node ID
     * @param string $HostID uuid
     * @param string $HostIP Private IP of the node
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
        if (array_key_exists("ProcessName",$param) and $param["ProcessName"] !== null) {
            $this->ProcessName = $param["ProcessName"];
        }

        if (array_key_exists("MatchRuleName",$param) and $param["MatchRuleName"] !== null) {
            $this->MatchRuleName = $param["MatchRuleName"];
        }

        if (array_key_exists("FoundTime",$param) and $param["FoundTime"] !== null) {
            $this->FoundTime = $param["FoundTime"];
        }

        if (array_key_exists("ContainerName",$param) and $param["ContainerName"] !== null) {
            $this->ContainerName = $param["ContainerName"];
        }

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("Behavior",$param) and $param["Behavior"] !== null) {
            $this->Behavior = $param["Behavior"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("ContainerId",$param) and $param["ContainerId"] !== null) {
            $this->ContainerId = $param["ContainerId"];
        }

        if (array_key_exists("Solution",$param) and $param["Solution"] !== null) {
            $this->Solution = $param["Solution"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("MatchRuleId",$param) and $param["MatchRuleId"] !== null) {
            $this->MatchRuleId = $param["MatchRuleId"];
        }

        if (array_key_exists("MatchAction",$param) and $param["MatchAction"] !== null) {
            $this->MatchAction = $param["MatchAction"];
        }

        if (array_key_exists("MatchProcessPath",$param) and $param["MatchProcessPath"] !== null) {
            $this->MatchProcessPath = $param["MatchProcessPath"];
        }

        if (array_key_exists("MatchFilePath",$param) and $param["MatchFilePath"] !== null) {
            $this->MatchFilePath = $param["MatchFilePath"];
        }

        if (array_key_exists("FilePath",$param) and $param["FilePath"] !== null) {
            $this->FilePath = $param["FilePath"];
        }

        if (array_key_exists("RuleExist",$param) and $param["RuleExist"] !== null) {
            $this->RuleExist = $param["RuleExist"];
        }

        if (array_key_exists("EventCount",$param) and $param["EventCount"] !== null) {
            $this->EventCount = $param["EventCount"];
        }

        if (array_key_exists("LatestFoundTime",$param) and $param["LatestFoundTime"] !== null) {
            $this->LatestFoundTime = $param["LatestFoundTime"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
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

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("PodName",$param) and $param["PodName"] !== null) {
            $this->PodName = $param["PodName"];
        }

        if (array_key_exists("PodIP",$param) and $param["PodIP"] !== null) {
            $this->PodIP = $param["PodIP"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("ClusterID",$param) and $param["ClusterID"] !== null) {
            $this->ClusterID = $param["ClusterID"];
        }

        if (array_key_exists("NodeUniqueID",$param) and $param["NodeUniqueID"] !== null) {
            $this->NodeUniqueID = $param["NodeUniqueID"];
        }

        if (array_key_exists("PublicIP",$param) and $param["PublicIP"] !== null) {
            $this->PublicIP = $param["PublicIP"];
        }

        if (array_key_exists("NodeID",$param) and $param["NodeID"] !== null) {
            $this->NodeID = $param["NodeID"];
        }

        if (array_key_exists("HostID",$param) and $param["HostID"] !== null) {
            $this->HostID = $param["HostID"];
        }

        if (array_key_exists("HostIP",$param) and $param["HostIP"] !== null) {
            $this->HostIP = $param["HostIP"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }
    }
}
