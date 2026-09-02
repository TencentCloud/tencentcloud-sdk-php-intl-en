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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClusterContainerDetail response structure.
 *
 * @method integer getAppID() Obtain <p>Primary Account AppID</p>
 * @method void setAppID(integer $AppID) Set <p>Primary Account AppID</p>
 * @method string getContainerId() Obtain <p>Container ID</p>
 * @method void setContainerId(string $ContainerId) Set <p>Container ID</p>
 * @method string getCmd() Obtain <p>Container startup CMD</p>
 * @method void setCmd(string $Cmd) Set <p>Container startup CMD</p>
 * @method string getCreateTime() Obtain <p>Container creation time</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Container creation time</p>
 * @method string getRunStatus() Obtain <p>Running state</p>
 * @method void setRunStatus(string $RunStatus) Set <p>Running state</p>
 * @method string getIsolateStatus() Obtain <p>Isolation status</p>
 * @method void setIsolateStatus(string $IsolateStatus) Set <p>Isolation status</p>
 * @method integer getRiskEventCriticalCount() Obtain <p>Number of critical risk events</p>
 * @method void setRiskEventCriticalCount(integer $RiskEventCriticalCount) Set <p>Number of critical risk events</p>
 * @method integer getRiskEventHighCount() Obtain <p>Number of high-risk events</p>
 * @method void setRiskEventHighCount(integer $RiskEventHighCount) Set <p>Number of high-risk events</p>
 * @method integer getRiskEventMiddleCount() Obtain <p>Number of medium-risk events</p>
 * @method void setRiskEventMiddleCount(integer $RiskEventMiddleCount) Set <p>Number of medium-risk events</p>
 * @method integer getRiskEventLowCount() Obtain <p>Number of low-risk events</p>
 * @method void setRiskEventLowCount(integer $RiskEventLowCount) Set <p>Number of low-risk events</p>
 * @method string getImageName() Obtain <p>Image name.</p>
 * @method void setImageName(string $ImageName) Set <p>Image name.</p>
 * @method string getImageId() Obtain <p>Image ID.</p>
 * @method void setImageId(string $ImageId) Set <p>Image ID.</p>
 * @method string getImageSize() Obtain <p>Image size.</p>
 * @method void setImageSize(string $ImageSize) Set <p>Image size.</p>
 * @method string getImageCreateTime() Obtain <p>Image creation time</p>
 * @method void setImageCreateTime(string $ImageCreateTime) Set <p>Image creation time</p>
 * @method string getNodeName() Obtain <p>Node name.</p>
 * @method void setNodeName(string $NodeName) Set <p>Node name.</p>
 * @method string getNodeInternalIP() Obtain <p>Node private network IP</p>
 * @method void setNodeInternalIP(string $NodeInternalIP) Set <p>Node private network IP</p>
 * @method string getNodeRunStatus() Obtain <p>Node running status</p>
 * @method void setNodeRunStatus(string $NodeRunStatus) Set <p>Node running status</p>
 * @method array getMounts() Obtain <p>Mount information list</p>
 * @method void setMounts(array $Mounts) Set <p>Mount information list</p>
 * @method string getNetworkName() Obtain <p>Network name</p>
 * @method void setNetworkName(string $NetworkName) Set <p>Network name</p>
 * @method string getNetworkMode() Obtain <p>Network mode</p>
 * @method void setNetworkMode(string $NetworkMode) Set <p>Network mode</p>
 * @method string getNetworkId() Obtain <p>Network ID</p>
 * @method void setNetworkId(string $NetworkId) Set <p>Network ID</p>
 * @method string getEndpointId() Obtain <p>Endpoint ID</p>
 * @method void setEndpointId(string $EndpointId) Set <p>Endpoint ID</p>
 * @method string getGateway() Obtain <p>Gateway address</p>
 * @method void setGateway(string $Gateway) Set <p>Gateway address</p>
 * @method string getIPv4() Obtain <p>IPv4 address</p>
 * @method void setIPv4(string $IPv4) Set <p>IPv4 address</p>
 * @method string getIPv6() Obtain <p>IPv6 address</p>
 * @method void setIPv6(string $IPv6) Set <p>IPv6 address</p>
 * @method string getMAC() Obtain <p>MAC address</p>
 * @method void setMAC(string $MAC) Set <p>MAC address</p>
 * @method string getContainerName() Obtain <p>Container name</p>
 * @method void setContainerName(string $ContainerName) Set <p>Container name</p>
 * @method string getNodeInstanceId() Obtain <p>Node instance ID</p>
 * @method void setNodeInstanceId(string $NodeInstanceId) Set <p>Node instance ID</p>
 * @method string getNodeType() Obtain <p>Node type of the container associated node</p>
 * @method void setNodeType(string $NodeType) Set <p>Node type of the container associated node</p>
 * @method string getNodeUniqueID() Obtain <p>Unique ID of the node associated with the container</p>
 * @method void setNodeUniqueID(string $NodeUniqueID) Set <p>Unique ID of the node associated with the container</p>
 * @method string getClusterCaMD5() Obtain <p>md5 value of the cluster ca certificate of the associated cluster and unique identifier of the cluster</p>
 * @method void setClusterCaMD5(string $ClusterCaMD5) Set <p>md5 value of the cluster ca certificate of the associated cluster and unique identifier of the cluster</p>
 * @method boolean getEnableLinkImage() Obtain <p>Whether the container image can be associated with records in the mirror repository</p>
 * @method void setEnableLinkImage(boolean $EnableLinkImage) Set <p>Whether the container image can be associated with records in the mirror repository</p>
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeClusterContainerDetailResponse extends AbstractModel
{
    /**
     * @var integer <p>Primary Account AppID</p>
     */
    public $AppID;

    /**
     * @var string <p>Container ID</p>
     */
    public $ContainerId;

    /**
     * @var string <p>Container startup CMD</p>
     */
    public $Cmd;

    /**
     * @var string <p>Container creation time</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Running state</p>
     */
    public $RunStatus;

    /**
     * @var string <p>Isolation status</p>
     */
    public $IsolateStatus;

    /**
     * @var integer <p>Number of critical risk events</p>
     * @deprecated
     */
    public $RiskEventCriticalCount;

    /**
     * @var integer <p>Number of high-risk events</p>
     * @deprecated
     */
    public $RiskEventHighCount;

    /**
     * @var integer <p>Number of medium-risk events</p>
     * @deprecated
     */
    public $RiskEventMiddleCount;

    /**
     * @var integer <p>Number of low-risk events</p>
     * @deprecated
     */
    public $RiskEventLowCount;

    /**
     * @var string <p>Image name.</p>
     */
    public $ImageName;

    /**
     * @var string <p>Image ID.</p>
     */
    public $ImageId;

    /**
     * @var string <p>Image size.</p>
     */
    public $ImageSize;

    /**
     * @var string <p>Image creation time</p>
     */
    public $ImageCreateTime;

    /**
     * @var string <p>Node name.</p>
     */
    public $NodeName;

    /**
     * @var string <p>Node private network IP</p>
     */
    public $NodeInternalIP;

    /**
     * @var string <p>Node running status</p>
     */
    public $NodeRunStatus;

    /**
     * @var array <p>Mount information list</p>
     */
    public $Mounts;

    /**
     * @var string <p>Network name</p>
     */
    public $NetworkName;

    /**
     * @var string <p>Network mode</p>
     */
    public $NetworkMode;

    /**
     * @var string <p>Network ID</p>
     */
    public $NetworkId;

    /**
     * @var string <p>Endpoint ID</p>
     */
    public $EndpointId;

    /**
     * @var string <p>Gateway address</p>
     */
    public $Gateway;

    /**
     * @var string <p>IPv4 address</p>
     */
    public $IPv4;

    /**
     * @var string <p>IPv6 address</p>
     */
    public $IPv6;

    /**
     * @var string <p>MAC address</p>
     */
    public $MAC;

    /**
     * @var string <p>Container name</p>
     */
    public $ContainerName;

    /**
     * @var string <p>Node instance ID</p>
     */
    public $NodeInstanceId;

    /**
     * @var string <p>Node type of the container associated node</p>
     */
    public $NodeType;

    /**
     * @var string <p>Unique ID of the node associated with the container</p>
     */
    public $NodeUniqueID;

    /**
     * @var string <p>md5 value of the cluster ca certificate of the associated cluster and unique identifier of the cluster</p>
     */
    public $ClusterCaMD5;

    /**
     * @var boolean <p>Whether the container image can be associated with records in the mirror repository</p>
     */
    public $EnableLinkImage;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $AppID <p>Primary Account AppID</p>
     * @param string $ContainerId <p>Container ID</p>
     * @param string $Cmd <p>Container startup CMD</p>
     * @param string $CreateTime <p>Container creation time</p>
     * @param string $RunStatus <p>Running state</p>
     * @param string $IsolateStatus <p>Isolation status</p>
     * @param integer $RiskEventCriticalCount <p>Number of critical risk events</p>
     * @param integer $RiskEventHighCount <p>Number of high-risk events</p>
     * @param integer $RiskEventMiddleCount <p>Number of medium-risk events</p>
     * @param integer $RiskEventLowCount <p>Number of low-risk events</p>
     * @param string $ImageName <p>Image name.</p>
     * @param string $ImageId <p>Image ID.</p>
     * @param string $ImageSize <p>Image size.</p>
     * @param string $ImageCreateTime <p>Image creation time</p>
     * @param string $NodeName <p>Node name.</p>
     * @param string $NodeInternalIP <p>Node private network IP</p>
     * @param string $NodeRunStatus <p>Node running status</p>
     * @param array $Mounts <p>Mount information list</p>
     * @param string $NetworkName <p>Network name</p>
     * @param string $NetworkMode <p>Network mode</p>
     * @param string $NetworkId <p>Network ID</p>
     * @param string $EndpointId <p>Endpoint ID</p>
     * @param string $Gateway <p>Gateway address</p>
     * @param string $IPv4 <p>IPv4 address</p>
     * @param string $IPv6 <p>IPv6 address</p>
     * @param string $MAC <p>MAC address</p>
     * @param string $ContainerName <p>Container name</p>
     * @param string $NodeInstanceId <p>Node instance ID</p>
     * @param string $NodeType <p>Node type of the container associated node</p>
     * @param string $NodeUniqueID <p>Unique ID of the node associated with the container</p>
     * @param string $ClusterCaMD5 <p>md5 value of the cluster ca certificate of the associated cluster and unique identifier of the cluster</p>
     * @param boolean $EnableLinkImage <p>Whether the container image can be associated with records in the mirror repository</p>
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
        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("ContainerId",$param) and $param["ContainerId"] !== null) {
            $this->ContainerId = $param["ContainerId"];
        }

        if (array_key_exists("Cmd",$param) and $param["Cmd"] !== null) {
            $this->Cmd = $param["Cmd"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("RunStatus",$param) and $param["RunStatus"] !== null) {
            $this->RunStatus = $param["RunStatus"];
        }

        if (array_key_exists("IsolateStatus",$param) and $param["IsolateStatus"] !== null) {
            $this->IsolateStatus = $param["IsolateStatus"];
        }

        if (array_key_exists("RiskEventCriticalCount",$param) and $param["RiskEventCriticalCount"] !== null) {
            $this->RiskEventCriticalCount = $param["RiskEventCriticalCount"];
        }

        if (array_key_exists("RiskEventHighCount",$param) and $param["RiskEventHighCount"] !== null) {
            $this->RiskEventHighCount = $param["RiskEventHighCount"];
        }

        if (array_key_exists("RiskEventMiddleCount",$param) and $param["RiskEventMiddleCount"] !== null) {
            $this->RiskEventMiddleCount = $param["RiskEventMiddleCount"];
        }

        if (array_key_exists("RiskEventLowCount",$param) and $param["RiskEventLowCount"] !== null) {
            $this->RiskEventLowCount = $param["RiskEventLowCount"];
        }

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("ImageSize",$param) and $param["ImageSize"] !== null) {
            $this->ImageSize = $param["ImageSize"];
        }

        if (array_key_exists("ImageCreateTime",$param) and $param["ImageCreateTime"] !== null) {
            $this->ImageCreateTime = $param["ImageCreateTime"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("NodeInternalIP",$param) and $param["NodeInternalIP"] !== null) {
            $this->NodeInternalIP = $param["NodeInternalIP"];
        }

        if (array_key_exists("NodeRunStatus",$param) and $param["NodeRunStatus"] !== null) {
            $this->NodeRunStatus = $param["NodeRunStatus"];
        }

        if (array_key_exists("Mounts",$param) and $param["Mounts"] !== null) {
            $this->Mounts = [];
            foreach ($param["Mounts"] as $key => $value){
                $obj = new ContainerMountItem();
                $obj->deserialize($value);
                array_push($this->Mounts, $obj);
            }
        }

        if (array_key_exists("NetworkName",$param) and $param["NetworkName"] !== null) {
            $this->NetworkName = $param["NetworkName"];
        }

        if (array_key_exists("NetworkMode",$param) and $param["NetworkMode"] !== null) {
            $this->NetworkMode = $param["NetworkMode"];
        }

        if (array_key_exists("NetworkId",$param) and $param["NetworkId"] !== null) {
            $this->NetworkId = $param["NetworkId"];
        }

        if (array_key_exists("EndpointId",$param) and $param["EndpointId"] !== null) {
            $this->EndpointId = $param["EndpointId"];
        }

        if (array_key_exists("Gateway",$param) and $param["Gateway"] !== null) {
            $this->Gateway = $param["Gateway"];
        }

        if (array_key_exists("IPv4",$param) and $param["IPv4"] !== null) {
            $this->IPv4 = $param["IPv4"];
        }

        if (array_key_exists("IPv6",$param) and $param["IPv6"] !== null) {
            $this->IPv6 = $param["IPv6"];
        }

        if (array_key_exists("MAC",$param) and $param["MAC"] !== null) {
            $this->MAC = $param["MAC"];
        }

        if (array_key_exists("ContainerName",$param) and $param["ContainerName"] !== null) {
            $this->ContainerName = $param["ContainerName"];
        }

        if (array_key_exists("NodeInstanceId",$param) and $param["NodeInstanceId"] !== null) {
            $this->NodeInstanceId = $param["NodeInstanceId"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("NodeUniqueID",$param) and $param["NodeUniqueID"] !== null) {
            $this->NodeUniqueID = $param["NodeUniqueID"];
        }

        if (array_key_exists("ClusterCaMD5",$param) and $param["ClusterCaMD5"] !== null) {
            $this->ClusterCaMD5 = $param["ClusterCaMD5"];
        }

        if (array_key_exists("EnableLinkImage",$param) and $param["EnableLinkImage"] !== null) {
            $this->EnableLinkImage = $param["EnableLinkImage"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
