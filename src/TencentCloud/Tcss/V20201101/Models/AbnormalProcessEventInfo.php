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
 * Container runtime security - Information of the abnormal process
 *
 * @method string getProcessPath() Obtain <p>Process directory.</p>
 * @method void setProcessPath(string $ProcessPath) Set <p>Process directory.</p>
 * @method string getEventType() Obtain <p>Event type. MALICE_PROCESS_START: malicious process startup.</p>
 * @method void setEventType(string $EventType) Set <p>Event type. MALICE_PROCESS_START: malicious process startup.</p>
 * @method string getMatchRuleName() Obtain <p>Hit rule name. PROXY_TOOL: proxy software; TRANSFER_CONTROL: lateral movement; ATTACK_CMD: malicious command; REVERSE_SHELL: reverse shell; FILELESS: fileless execution; RISK_CMD: high-risk command; ABNORMAL_CHILD_PROC: abnormal child process startup of sensitive service; USER_DEFINED_RULE: user-defined rule</p>
 * @method void setMatchRuleName(string $MatchRuleName) Set <p>Hit rule name. PROXY_TOOL: proxy software; TRANSFER_CONTROL: lateral movement; ATTACK_CMD: malicious command; REVERSE_SHELL: reverse shell; FILELESS: fileless execution; RISK_CMD: high-risk command; ABNORMAL_CHILD_PROC: abnormal child process startup of sensitive service; USER_DEFINED_RULE: user-defined rule</p>
 * @method string getFoundTime() Obtain <p>Generation time.</p>
 * @method void setFoundTime(string $FoundTime) Set <p>Generation time.</p>
 * @method string getContainerName() Obtain <p>Container name.</p>
 * @method void setContainerName(string $ContainerName) Set <p>Container name.</p>
 * @method string getImageName() Obtain <p>Image name.</p>
 * @method void setImageName(string $ImageName) Set <p>Image name.</p>
 * @method string getBehavior() Obtain <p>Action execution result: BEHAVIOR_NONE: none<br>BEHAVIOR_ALERT: alarm<br>BEHAVIOR_RELEASE: allow<br>BEHAVIOR_HOLDUP_FAILED: block failed<br>BEHAVIOR_HOLDUP_SUCCESSED: block succeeded</p>
 * @method void setBehavior(string $Behavior) Set <p>Action execution result: BEHAVIOR_NONE: none<br>BEHAVIOR_ALERT: alarm<br>BEHAVIOR_RELEASE: allow<br>BEHAVIOR_HOLDUP_FAILED: block failed<br>BEHAVIOR_HOLDUP_SUCCESSED: block succeeded</p>
 * @method string getStatus() Obtain <p>Status: EVENT_UNDEAL: event unhandled<br>    EVENT_DEALED: event handled<br>    EVENT_INGNORE: event ignored</p>
 * @method void setStatus(string $Status) Set <p>Status: EVENT_UNDEAL: event unhandled<br>    EVENT_DEALED: event handled<br>    EVENT_INGNORE: event ignored</p>
 * @method string getId() Obtain <p>Unique ID of the event record.</p>
 * @method void setId(string $Id) Set <p>Unique ID of the event record.</p>
 * @method string getImageId() Obtain <p>Image ID, used for redirection.</p>
 * @method void setImageId(string $ImageId) Set <p>Image ID, used for redirection.</p>
 * @method string getContainerId() Obtain <p>Container ID, used for redirection.</p>
 * @method void setContainerId(string $ContainerId) Set <p>Container ID, used for redirection.</p>
 * @method string getSolution() Obtain <p>Event solution.</p>
 * @method void setSolution(string $Solution) Set <p>Event solution.</p>
 * @method string getDescription() Obtain <p>Event detailed description.</p>
 * @method void setDescription(string $Description) Set <p>Event detailed description.</p>
 * @method string getMatchRuleId() Obtain <p>Hit policy ID.</p>
 * @method void setMatchRuleId(string $MatchRuleId) Set <p>Hit policy ID.</p>
 * @method string getMatchAction() Obtain <p>Hit rule action:<br>RULE_MODE_RELEASE: allow<br>RULE_MODE_ALERT: alarm<br>RULE_MODE_HOLDUP: block</p>
 * @method void setMatchAction(string $MatchAction) Set <p>Hit rule action:<br>RULE_MODE_RELEASE: allow<br>RULE_MODE_ALERT: alarm<br>RULE_MODE_HOLDUP: block</p>
 * @method string getMatchProcessPath() Obtain <p>Hit rule process information.</p>
 * @method void setMatchProcessPath(string $MatchProcessPath) Set <p>Hit rule process information.</p>
 * @method boolean getRuleExist() Obtain <p>Whether the rule exists.</p>
 * @method void setRuleExist(boolean $RuleExist) Set <p>Whether the rule exists.</p>
 * @method integer getEventCount() Obtain <p>Number of events.</p>
 * @method void setEventCount(integer $EventCount) Set <p>Number of events.</p>
 * @method string getLatestFoundTime() Obtain <p>Last generation time.</p>
 * @method void setLatestFoundTime(string $LatestFoundTime) Set <p>Last generation time.</p>
 * @method string getRuleId() Obtain <p>Rule group ID.</p>
 * @method void setRuleId(string $RuleId) Set <p>Rule group ID.</p>
 * @method string getMatchGroupName() Obtain <p>Hit policy name: SYSTEM_DEFINED_RULE (system policy) or user-defined policy name.</p>
 * @method void setMatchGroupName(string $MatchGroupName) Set <p>Hit policy name: SYSTEM_DEFINED_RULE (system policy) or user-defined policy name.</p>
 * @method string getMatchRuleLevel() Obtain <p>Hit rule level: HIGH, MIDDLE, and LOW.</p>
 * @method void setMatchRuleLevel(string $MatchRuleLevel) Set <p>Hit rule level: HIGH, MIDDLE, and LOW.</p>
 * @method string getContainerNetStatus() Obtain <p>Network status<br>Not isolated: NORMAL<br>Isolated: ISOLATED<br>Isolating: ISOLATING<br>Isolation failed: ISOLATE_FAILED<br>Restoring: RESTORING<br>Restoring failed: RESTORE_FAILED</p>
 * @method void setContainerNetStatus(string $ContainerNetStatus) Set <p>Network status<br>Not isolated: NORMAL<br>Isolated: ISOLATED<br>Isolating: ISOLATING<br>Isolation failed: ISOLATE_FAILED<br>Restoring: RESTORING<br>Restoring failed: RESTORE_FAILED</p>
 * @method string getContainerNetSubStatus() Obtain <p>Container sub-status.<br>&quot;AGENT_OFFLINE&quot;       //Agent offline<br>&quot;NODE_DESTROYED&quot;      //Node destroyed<br>&quot;CONTAINER_EXITED&quot;    //Container exited<br>&quot;CONTAINER_DESTROYED&quot; //Container destroyed<br>&quot;SHARED_HOST&quot;         //Container and host sharing the network<br>&quot;RESOURCE_LIMIT&quot;      //Resource limit exceeded for the isolation operation<br>&quot;UNKNOW&quot;              //Unknown reason</p>
 * @method void setContainerNetSubStatus(string $ContainerNetSubStatus) Set <p>Container sub-status.<br>&quot;AGENT_OFFLINE&quot;       //Agent offline<br>&quot;NODE_DESTROYED&quot;      //Node destroyed<br>&quot;CONTAINER_EXITED&quot;    //Container exited<br>&quot;CONTAINER_DESTROYED&quot; //Container destroyed<br>&quot;SHARED_HOST&quot;         //Container and host sharing the network<br>&quot;RESOURCE_LIMIT&quot;      //Resource limit exceeded for the isolation operation<br>&quot;UNKNOW&quot;              //Unknown reason</p>
 * @method string getContainerIsolateOperationSrc() Obtain <p>Source of container isolation operation.</p>
 * @method void setContainerIsolateOperationSrc(string $ContainerIsolateOperationSrc) Set <p>Source of container isolation operation.</p>
 * @method string getContainerStatus() Obtain <p>Container status.<br>RUNNING<br>PAUSED<br>STOPPED<br>CREATED<br>DESTROYED<br>RESTARTING<br>REMOVING</p>
 * @method void setContainerStatus(string $ContainerStatus) Set <p>Container status.<br>RUNNING<br>PAUSED<br>STOPPED<br>CREATED<br>DESTROYED<br>RESTARTING<br>REMOVING</p>
 * @method string getClusterID() Obtain <p>Cluster ID.</p>
 * @method void setClusterID(string $ClusterID) Set <p>Cluster ID.</p>
 * @method string getNodeType() Obtain <p>Node type: NORMAL (normal node) and SUPER (super node).</p>
 * @method void setNodeType(string $NodeType) Set <p>Node type: NORMAL (normal node) and SUPER (super node).</p>
 * @method string getPodName() Obtain <p>Pod name.</p>
 * @method void setPodName(string $PodName) Set <p>Pod name.</p>
 * @method string getPodIP() Obtain <p>pod ip</p>
 * @method void setPodIP(string $PodIP) Set <p>pod ip</p>
 * @method string getNodeUniqueID() Obtain <p>Cluster ID.</p>
 * @method void setNodeUniqueID(string $NodeUniqueID) Set <p>Cluster ID.</p>
 * @method string getPublicIP() Obtain <p>Node public IP address.</p>
 * @method void setPublicIP(string $PublicIP) Set <p>Node public IP address.</p>
 * @method string getNodeName() Obtain <p>Node name.</p>
 * @method void setNodeName(string $NodeName) Set <p>Node name.</p>
 * @method string getNodeID() Obtain <p>Node ID.</p>
 * @method void setNodeID(string $NodeID) Set <p>Node ID.</p>
 * @method string getHostID() Obtain <p>uuid</p>
 * @method void setHostID(string $HostID) Set <p>uuid</p>
 * @method string getHostIP() Obtain <p>Node private IP address.</p>
 * @method void setHostIP(string $HostIP) Set <p>Node private IP address.</p>
 * @method string getClusterName() Obtain <p>Cluster name.</p>
 * @method void setClusterName(string $ClusterName) Set <p>Cluster name.</p>
 * @method string getCmdLine() Obtain <p>Command line parameters.</p>
 * @method void setCmdLine(string $CmdLine) Set <p>Command line parameters.</p>
 */
class AbnormalProcessEventInfo extends AbstractModel
{
    /**
     * @var string <p>Process directory.</p>
     */
    public $ProcessPath;

    /**
     * @var string <p>Event type. MALICE_PROCESS_START: malicious process startup.</p>
     */
    public $EventType;

    /**
     * @var string <p>Hit rule name. PROXY_TOOL: proxy software; TRANSFER_CONTROL: lateral movement; ATTACK_CMD: malicious command; REVERSE_SHELL: reverse shell; FILELESS: fileless execution; RISK_CMD: high-risk command; ABNORMAL_CHILD_PROC: abnormal child process startup of sensitive service; USER_DEFINED_RULE: user-defined rule</p>
     */
    public $MatchRuleName;

    /**
     * @var string <p>Generation time.</p>
     */
    public $FoundTime;

    /**
     * @var string <p>Container name.</p>
     */
    public $ContainerName;

    /**
     * @var string <p>Image name.</p>
     */
    public $ImageName;

    /**
     * @var string <p>Action execution result: BEHAVIOR_NONE: none<br>BEHAVIOR_ALERT: alarm<br>BEHAVIOR_RELEASE: allow<br>BEHAVIOR_HOLDUP_FAILED: block failed<br>BEHAVIOR_HOLDUP_SUCCESSED: block succeeded</p>
     */
    public $Behavior;

    /**
     * @var string <p>Status: EVENT_UNDEAL: event unhandled<br>    EVENT_DEALED: event handled<br>    EVENT_INGNORE: event ignored</p>
     */
    public $Status;

    /**
     * @var string <p>Unique ID of the event record.</p>
     */
    public $Id;

    /**
     * @var string <p>Image ID, used for redirection.</p>
     */
    public $ImageId;

    /**
     * @var string <p>Container ID, used for redirection.</p>
     */
    public $ContainerId;

    /**
     * @var string <p>Event solution.</p>
     */
    public $Solution;

    /**
     * @var string <p>Event detailed description.</p>
     */
    public $Description;

    /**
     * @var string <p>Hit policy ID.</p>
     */
    public $MatchRuleId;

    /**
     * @var string <p>Hit rule action:<br>RULE_MODE_RELEASE: allow<br>RULE_MODE_ALERT: alarm<br>RULE_MODE_HOLDUP: block</p>
     */
    public $MatchAction;

    /**
     * @var string <p>Hit rule process information.</p>
     */
    public $MatchProcessPath;

    /**
     * @var boolean <p>Whether the rule exists.</p>
     */
    public $RuleExist;

    /**
     * @var integer <p>Number of events.</p>
     */
    public $EventCount;

    /**
     * @var string <p>Last generation time.</p>
     */
    public $LatestFoundTime;

    /**
     * @var string <p>Rule group ID.</p>
     */
    public $RuleId;

    /**
     * @var string <p>Hit policy name: SYSTEM_DEFINED_RULE (system policy) or user-defined policy name.</p>
     */
    public $MatchGroupName;

    /**
     * @var string <p>Hit rule level: HIGH, MIDDLE, and LOW.</p>
     */
    public $MatchRuleLevel;

    /**
     * @var string <p>Network status<br>Not isolated: NORMAL<br>Isolated: ISOLATED<br>Isolating: ISOLATING<br>Isolation failed: ISOLATE_FAILED<br>Restoring: RESTORING<br>Restoring failed: RESTORE_FAILED</p>
     */
    public $ContainerNetStatus;

    /**
     * @var string <p>Container sub-status.<br>&quot;AGENT_OFFLINE&quot;       //Agent offline<br>&quot;NODE_DESTROYED&quot;      //Node destroyed<br>&quot;CONTAINER_EXITED&quot;    //Container exited<br>&quot;CONTAINER_DESTROYED&quot; //Container destroyed<br>&quot;SHARED_HOST&quot;         //Container and host sharing the network<br>&quot;RESOURCE_LIMIT&quot;      //Resource limit exceeded for the isolation operation<br>&quot;UNKNOW&quot;              //Unknown reason</p>
     */
    public $ContainerNetSubStatus;

    /**
     * @var string <p>Source of container isolation operation.</p>
     */
    public $ContainerIsolateOperationSrc;

    /**
     * @var string <p>Container status.<br>RUNNING<br>PAUSED<br>STOPPED<br>CREATED<br>DESTROYED<br>RESTARTING<br>REMOVING</p>
     */
    public $ContainerStatus;

    /**
     * @var string <p>Cluster ID.</p>
     */
    public $ClusterID;

    /**
     * @var string <p>Node type: NORMAL (normal node) and SUPER (super node).</p>
     */
    public $NodeType;

    /**
     * @var string <p>Pod name.</p>
     */
    public $PodName;

    /**
     * @var string <p>pod ip</p>
     */
    public $PodIP;

    /**
     * @var string <p>Cluster ID.</p>
     */
    public $NodeUniqueID;

    /**
     * @var string <p>Node public IP address.</p>
     */
    public $PublicIP;

    /**
     * @var string <p>Node name.</p>
     */
    public $NodeName;

    /**
     * @var string <p>Node ID.</p>
     */
    public $NodeID;

    /**
     * @var string <p>uuid</p>
     */
    public $HostID;

    /**
     * @var string <p>Node private IP address.</p>
     */
    public $HostIP;

    /**
     * @var string <p>Cluster name.</p>
     */
    public $ClusterName;

    /**
     * @var string <p>Command line parameters.</p>
     */
    public $CmdLine;

    /**
     * @param string $ProcessPath <p>Process directory.</p>
     * @param string $EventType <p>Event type. MALICE_PROCESS_START: malicious process startup.</p>
     * @param string $MatchRuleName <p>Hit rule name. PROXY_TOOL: proxy software; TRANSFER_CONTROL: lateral movement; ATTACK_CMD: malicious command; REVERSE_SHELL: reverse shell; FILELESS: fileless execution; RISK_CMD: high-risk command; ABNORMAL_CHILD_PROC: abnormal child process startup of sensitive service; USER_DEFINED_RULE: user-defined rule</p>
     * @param string $FoundTime <p>Generation time.</p>
     * @param string $ContainerName <p>Container name.</p>
     * @param string $ImageName <p>Image name.</p>
     * @param string $Behavior <p>Action execution result: BEHAVIOR_NONE: none<br>BEHAVIOR_ALERT: alarm<br>BEHAVIOR_RELEASE: allow<br>BEHAVIOR_HOLDUP_FAILED: block failed<br>BEHAVIOR_HOLDUP_SUCCESSED: block succeeded</p>
     * @param string $Status <p>Status: EVENT_UNDEAL: event unhandled<br>    EVENT_DEALED: event handled<br>    EVENT_INGNORE: event ignored</p>
     * @param string $Id <p>Unique ID of the event record.</p>
     * @param string $ImageId <p>Image ID, used for redirection.</p>
     * @param string $ContainerId <p>Container ID, used for redirection.</p>
     * @param string $Solution <p>Event solution.</p>
     * @param string $Description <p>Event detailed description.</p>
     * @param string $MatchRuleId <p>Hit policy ID.</p>
     * @param string $MatchAction <p>Hit rule action:<br>RULE_MODE_RELEASE: allow<br>RULE_MODE_ALERT: alarm<br>RULE_MODE_HOLDUP: block</p>
     * @param string $MatchProcessPath <p>Hit rule process information.</p>
     * @param boolean $RuleExist <p>Whether the rule exists.</p>
     * @param integer $EventCount <p>Number of events.</p>
     * @param string $LatestFoundTime <p>Last generation time.</p>
     * @param string $RuleId <p>Rule group ID.</p>
     * @param string $MatchGroupName <p>Hit policy name: SYSTEM_DEFINED_RULE (system policy) or user-defined policy name.</p>
     * @param string $MatchRuleLevel <p>Hit rule level: HIGH, MIDDLE, and LOW.</p>
     * @param string $ContainerNetStatus <p>Network status<br>Not isolated: NORMAL<br>Isolated: ISOLATED<br>Isolating: ISOLATING<br>Isolation failed: ISOLATE_FAILED<br>Restoring: RESTORING<br>Restoring failed: RESTORE_FAILED</p>
     * @param string $ContainerNetSubStatus <p>Container sub-status.<br>&quot;AGENT_OFFLINE&quot;       //Agent offline<br>&quot;NODE_DESTROYED&quot;      //Node destroyed<br>&quot;CONTAINER_EXITED&quot;    //Container exited<br>&quot;CONTAINER_DESTROYED&quot; //Container destroyed<br>&quot;SHARED_HOST&quot;         //Container and host sharing the network<br>&quot;RESOURCE_LIMIT&quot;      //Resource limit exceeded for the isolation operation<br>&quot;UNKNOW&quot;              //Unknown reason</p>
     * @param string $ContainerIsolateOperationSrc <p>Source of container isolation operation.</p>
     * @param string $ContainerStatus <p>Container status.<br>RUNNING<br>PAUSED<br>STOPPED<br>CREATED<br>DESTROYED<br>RESTARTING<br>REMOVING</p>
     * @param string $ClusterID <p>Cluster ID.</p>
     * @param string $NodeType <p>Node type: NORMAL (normal node) and SUPER (super node).</p>
     * @param string $PodName <p>Pod name.</p>
     * @param string $PodIP <p>pod ip</p>
     * @param string $NodeUniqueID <p>Cluster ID.</p>
     * @param string $PublicIP <p>Node public IP address.</p>
     * @param string $NodeName <p>Node name.</p>
     * @param string $NodeID <p>Node ID.</p>
     * @param string $HostID <p>uuid</p>
     * @param string $HostIP <p>Node private IP address.</p>
     * @param string $ClusterName <p>Cluster name.</p>
     * @param string $CmdLine <p>Command line parameters.</p>
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
        if (array_key_exists("ProcessPath",$param) and $param["ProcessPath"] !== null) {
            $this->ProcessPath = $param["ProcessPath"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
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

        if (array_key_exists("MatchGroupName",$param) and $param["MatchGroupName"] !== null) {
            $this->MatchGroupName = $param["MatchGroupName"];
        }

        if (array_key_exists("MatchRuleLevel",$param) and $param["MatchRuleLevel"] !== null) {
            $this->MatchRuleLevel = $param["MatchRuleLevel"];
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

        if (array_key_exists("ClusterID",$param) and $param["ClusterID"] !== null) {
            $this->ClusterID = $param["ClusterID"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("PodName",$param) and $param["PodName"] !== null) {
            $this->PodName = $param["PodName"];
        }

        if (array_key_exists("PodIP",$param) and $param["PodIP"] !== null) {
            $this->PodIP = $param["PodIP"];
        }

        if (array_key_exists("NodeUniqueID",$param) and $param["NodeUniqueID"] !== null) {
            $this->NodeUniqueID = $param["NodeUniqueID"];
        }

        if (array_key_exists("PublicIP",$param) and $param["PublicIP"] !== null) {
            $this->PublicIP = $param["PublicIP"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
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

        if (array_key_exists("CmdLine",$param) and $param["CmdLine"] !== null) {
            $this->CmdLine = $param["CmdLine"];
        }
    }
}
