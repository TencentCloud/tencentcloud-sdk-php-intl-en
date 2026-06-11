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
 * DescribeImageDenyEventDetail response structure.
 *
 * @method integer getEventID() Obtain Event ID
 * @method void setEventID(integer $EventID) Set Event ID
 * @method string getEventType() Obtain Event Type. EVENT_RISK: Risk Event Type; EVENT_PRIVILEGE: Privilege
 * @method void setEventType(string $EventType) Set Event Type. EVENT_RISK: Risk Event Type; EVENT_PRIVILEGE: Privilege
 * @method string getRuleName() Obtain Rule name
 * @method void setRuleName(string $RuleName) Set Rule name
 * @method string getRuleID() Obtain Rule ID
 * @method void setRuleID(string $RuleID) Set Rule ID
 * @method string getRuleType() Obtain Rule type
 * @method void setRuleType(string $RuleType) Set Rule type
 * @method integer getRuleStatus() Obtain Rule Enable Status. 0: Enabled; 1: Disabled
 * @method void setRuleStatus(integer $RuleStatus) Set Rule Enable Status. 0: Enabled; 1: Disabled
 * @method string getRuleEffectStatus() Obtain Rule Policy Status. IN_THE_TEST: Observing; IN_EFFECT: Effective
 * @method void setRuleEffectStatus(string $RuleEffectStatus) Set Rule Policy Status. IN_THE_TEST: Observing; IN_EFFECT: Effective
 * @method array getRuleInfo() Obtain Rule content
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRuleInfo(array $RuleInfo) Set Rule content
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRuleDescription() Obtain Rule description
 * @method void setRuleDescription(string $RuleDescription) Set Rule description
 * @method string getImageID() Obtain Image ID
 * @method void setImageID(string $ImageID) Set Image ID
 * @method string getImageName() Obtain Image name
 * @method void setImageName(string $ImageName) Set Image name
 * @method string getNodeName() Obtain Node name.
 * @method void setNodeName(string $NodeName) Set Node name.
 * @method string getNodeIP() Obtain Private IP address
 * @method void setNodeIP(string $NodeIP) Set Private IP address
 * @method string getPublicIP() Obtain Public IP address
 * @method void setPublicIP(string $PublicIP) Set Public IP address
 * @method string getQUUID() Obtain Host QUUID
 * @method void setQUUID(string $QUUID) Set Host QUUID
 * @method string getFoundTime() Obtain First generation time
 * @method void setFoundTime(string $FoundTime) Set First generation time
 * @method string getLatestFoundTime() Obtain Latest creation time
 * @method void setLatestFoundTime(string $LatestFoundTime) Set Latest creation time
 * @method integer getEventCount() Obtain Number of events
 * @method void setEventCount(integer $EventCount) Set Number of events
 * @method string getDealBehavior() Obtain Execute action
BEHAVIOR_ALERT: Alert
BEHAVIOR_HOLDUP_SUCCESSED: Interception
 * @method void setDealBehavior(string $DealBehavior) Set Execute action
BEHAVIOR_ALERT: Alert
BEHAVIOR_HOLDUP_SUCCESSED: Interception
 * @method string getPodName() Obtain Pod name
 * @method void setPodName(string $PodName) Set Pod name
 * @method string getRuleEffectTime() Obtain Rule Start Interception Time
 * @method void setRuleEffectTime(string $RuleEffectTime) Set Rule Start Interception Time
 * @method string getDescription() Obtain Event description
 * @method void setDescription(string $Description) Set Event description
 * @method string getStartParam() Obtain Image startup parameter
 * @method void setStartParam(string $StartParam) Set Image startup parameter
 * @method string getSolution() Obtain Solution
 * @method void setSolution(string $Solution) Set Solution
 * @method string getPodIP() Obtain pod ip
 * @method void setPodIP(string $PodIP) Set pod ip
 * @method string getPodStatus() Obtain  Pod Status
 * @method void setPodStatus(string $PodStatus) Set  Pod Status
 * @method string getClusterID() Obtain Cluster ID.
 * @method void setClusterID(string $ClusterID) Set Cluster ID.
 * @method string getNodeType() Obtain Node type.
 * @method void setNodeType(string $NodeType) Set Node type.
 * @method string getNodeID() Obtain Node ID.
 * @method void setNodeID(string $NodeID) Set Node ID.
 * @method string getNodeUniqueID() Obtain Node Unique ID
 * @method void setNodeUniqueID(string $NodeUniqueID) Set Node Unique ID
 * @method string getNodeSubNetID() Obtain Node subnet id
 * @method void setNodeSubNetID(string $NodeSubNetID) Set Node subnet id
 * @method string getNodeSubNetName() Obtain Node Subnet Name
 * @method void setNodeSubNetName(string $NodeSubNetName) Set Node Subnet Name
 * @method string getNodeSubNetCIDR() Obtain Node subnet cidr
 * @method void setNodeSubNetCIDR(string $NodeSubNetCIDR) Set Node subnet cidr
 * @method string getClusterName() Obtain Cluster name.
 * @method void setClusterName(string $ClusterName) Set Cluster name.
 * @method ImageRegistryInfo getImageRegistryInfo() Obtain Image repository information.
 * @method void setImageRegistryInfo(ImageRegistryInfo $ImageRegistryInfo) Set Image repository information.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeImageDenyEventDetailResponse extends AbstractModel
{
    /**
     * @var integer Event ID
     */
    public $EventID;

    /**
     * @var string Event Type. EVENT_RISK: Risk Event Type; EVENT_PRIVILEGE: Privilege
     */
    public $EventType;

    /**
     * @var string Rule name
     */
    public $RuleName;

    /**
     * @var string Rule ID
     */
    public $RuleID;

    /**
     * @var string Rule type
     */
    public $RuleType;

    /**
     * @var integer Rule Enable Status. 0: Enabled; 1: Disabled
     */
    public $RuleStatus;

    /**
     * @var string Rule Policy Status. IN_THE_TEST: Observing; IN_EFFECT: Effective
     */
    public $RuleEffectStatus;

    /**
     * @var array Rule content
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RuleInfo;

    /**
     * @var string Rule description
     */
    public $RuleDescription;

    /**
     * @var string Image ID
     */
    public $ImageID;

    /**
     * @var string Image name
     */
    public $ImageName;

    /**
     * @var string Node name.
     */
    public $NodeName;

    /**
     * @var string Private IP address
     */
    public $NodeIP;

    /**
     * @var string Public IP address
     */
    public $PublicIP;

    /**
     * @var string Host QUUID
     */
    public $QUUID;

    /**
     * @var string First generation time
     */
    public $FoundTime;

    /**
     * @var string Latest creation time
     */
    public $LatestFoundTime;

    /**
     * @var integer Number of events
     */
    public $EventCount;

    /**
     * @var string Execute action
BEHAVIOR_ALERT: Alert
BEHAVIOR_HOLDUP_SUCCESSED: Interception
     */
    public $DealBehavior;

    /**
     * @var string Pod name
     */
    public $PodName;

    /**
     * @var string Rule Start Interception Time
     */
    public $RuleEffectTime;

    /**
     * @var string Event description
     */
    public $Description;

    /**
     * @var string Image startup parameter
     */
    public $StartParam;

    /**
     * @var string Solution
     */
    public $Solution;

    /**
     * @var string pod ip
     */
    public $PodIP;

    /**
     * @var string  Pod Status
     */
    public $PodStatus;

    /**
     * @var string Cluster ID.
     */
    public $ClusterID;

    /**
     * @var string Node type.
     */
    public $NodeType;

    /**
     * @var string Node ID.
     */
    public $NodeID;

    /**
     * @var string Node Unique ID
     */
    public $NodeUniqueID;

    /**
     * @var string Node subnet id
     */
    public $NodeSubNetID;

    /**
     * @var string Node Subnet Name
     */
    public $NodeSubNetName;

    /**
     * @var string Node subnet cidr
     */
    public $NodeSubNetCIDR;

    /**
     * @var string Cluster name.
     */
    public $ClusterName;

    /**
     * @var ImageRegistryInfo Image repository information.
     */
    public $ImageRegistryInfo;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $EventID Event ID
     * @param string $EventType Event Type. EVENT_RISK: Risk Event Type; EVENT_PRIVILEGE: Privilege
     * @param string $RuleName Rule name
     * @param string $RuleID Rule ID
     * @param string $RuleType Rule type
     * @param integer $RuleStatus Rule Enable Status. 0: Enabled; 1: Disabled
     * @param string $RuleEffectStatus Rule Policy Status. IN_THE_TEST: Observing; IN_EFFECT: Effective
     * @param array $RuleInfo Rule content
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RuleDescription Rule description
     * @param string $ImageID Image ID
     * @param string $ImageName Image name
     * @param string $NodeName Node name.
     * @param string $NodeIP Private IP address
     * @param string $PublicIP Public IP address
     * @param string $QUUID Host QUUID
     * @param string $FoundTime First generation time
     * @param string $LatestFoundTime Latest creation time
     * @param integer $EventCount Number of events
     * @param string $DealBehavior Execute action
BEHAVIOR_ALERT: Alert
BEHAVIOR_HOLDUP_SUCCESSED: Interception
     * @param string $PodName Pod name
     * @param string $RuleEffectTime Rule Start Interception Time
     * @param string $Description Event description
     * @param string $StartParam Image startup parameter
     * @param string $Solution Solution
     * @param string $PodIP pod ip
     * @param string $PodStatus  Pod Status
     * @param string $ClusterID Cluster ID.
     * @param string $NodeType Node type.
     * @param string $NodeID Node ID.
     * @param string $NodeUniqueID Node Unique ID
     * @param string $NodeSubNetID Node subnet id
     * @param string $NodeSubNetName Node Subnet Name
     * @param string $NodeSubNetCIDR Node subnet cidr
     * @param string $ClusterName Cluster name.
     * @param ImageRegistryInfo $ImageRegistryInfo Image repository information.
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
        if (array_key_exists("EventID",$param) and $param["EventID"] !== null) {
            $this->EventID = $param["EventID"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("RuleID",$param) and $param["RuleID"] !== null) {
            $this->RuleID = $param["RuleID"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("RuleStatus",$param) and $param["RuleStatus"] !== null) {
            $this->RuleStatus = $param["RuleStatus"];
        }

        if (array_key_exists("RuleEffectStatus",$param) and $param["RuleEffectStatus"] !== null) {
            $this->RuleEffectStatus = $param["RuleEffectStatus"];
        }

        if (array_key_exists("RuleInfo",$param) and $param["RuleInfo"] !== null) {
            $this->RuleInfo = $param["RuleInfo"];
        }

        if (array_key_exists("RuleDescription",$param) and $param["RuleDescription"] !== null) {
            $this->RuleDescription = $param["RuleDescription"];
        }

        if (array_key_exists("ImageID",$param) and $param["ImageID"] !== null) {
            $this->ImageID = $param["ImageID"];
        }

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("NodeIP",$param) and $param["NodeIP"] !== null) {
            $this->NodeIP = $param["NodeIP"];
        }

        if (array_key_exists("PublicIP",$param) and $param["PublicIP"] !== null) {
            $this->PublicIP = $param["PublicIP"];
        }

        if (array_key_exists("QUUID",$param) and $param["QUUID"] !== null) {
            $this->QUUID = $param["QUUID"];
        }

        if (array_key_exists("FoundTime",$param) and $param["FoundTime"] !== null) {
            $this->FoundTime = $param["FoundTime"];
        }

        if (array_key_exists("LatestFoundTime",$param) and $param["LatestFoundTime"] !== null) {
            $this->LatestFoundTime = $param["LatestFoundTime"];
        }

        if (array_key_exists("EventCount",$param) and $param["EventCount"] !== null) {
            $this->EventCount = $param["EventCount"];
        }

        if (array_key_exists("DealBehavior",$param) and $param["DealBehavior"] !== null) {
            $this->DealBehavior = $param["DealBehavior"];
        }

        if (array_key_exists("PodName",$param) and $param["PodName"] !== null) {
            $this->PodName = $param["PodName"];
        }

        if (array_key_exists("RuleEffectTime",$param) and $param["RuleEffectTime"] !== null) {
            $this->RuleEffectTime = $param["RuleEffectTime"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("StartParam",$param) and $param["StartParam"] !== null) {
            $this->StartParam = $param["StartParam"];
        }

        if (array_key_exists("Solution",$param) and $param["Solution"] !== null) {
            $this->Solution = $param["Solution"];
        }

        if (array_key_exists("PodIP",$param) and $param["PodIP"] !== null) {
            $this->PodIP = $param["PodIP"];
        }

        if (array_key_exists("PodStatus",$param) and $param["PodStatus"] !== null) {
            $this->PodStatus = $param["PodStatus"];
        }

        if (array_key_exists("ClusterID",$param) and $param["ClusterID"] !== null) {
            $this->ClusterID = $param["ClusterID"];
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

        if (array_key_exists("NodeSubNetName",$param) and $param["NodeSubNetName"] !== null) {
            $this->NodeSubNetName = $param["NodeSubNetName"];
        }

        if (array_key_exists("NodeSubNetCIDR",$param) and $param["NodeSubNetCIDR"] !== null) {
            $this->NodeSubNetCIDR = $param["NodeSubNetCIDR"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("ImageRegistryInfo",$param) and $param["ImageRegistryInfo"] !== null) {
            $this->ImageRegistryInfo = new ImageRegistryInfo();
            $this->ImageRegistryInfo->deserialize($param["ImageRegistryInfo"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
