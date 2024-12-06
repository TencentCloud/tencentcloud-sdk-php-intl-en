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
 * DescribeAssetContainerDetail response structure.
 *
 * @method string getHostID() Obtain Server ID
 * @method void setHostID(string $HostID) Set Server ID
 * @method string getHostIP() Obtain Server IP
 * @method void setHostIP(string $HostIP) Set Server IP
 * @method string getContainerName() Obtain Container name
 * @method void setContainerName(string $ContainerName) Set Container name
 * @method string getStatus() Obtain Status
 * @method void setStatus(string $Status) Set Status
 * @method string getRunAs() Obtain Operator
 * @method void setRunAs(string $RunAs) Set Operator
 * @method string getCmd() Obtain Command line
 * @method void setCmd(string $Cmd) Set Command line
 * @method integer getCPUUsage() Obtain CPU utilization * 1000
 * @method void setCPUUsage(integer $CPUUsage) Set CPU utilization * 1000
 * @method integer getRamUsage() Obtain Memory usage in KB
 * @method void setRamUsage(integer $RamUsage) Set Memory usage in KB
 * @method string getImageName() Obtain Image name
 * @method void setImageName(string $ImageName) Set Image name
 * @method string getImageID() Obtain Image ID
 * @method void setImageID(string $ImageID) Set Image ID
 * @method string getPOD() Obtain Pod
 * @method void setPOD(string $POD) Set Pod
 * @method string getK8sMaster() Obtain K8s master node
 * @method void setK8sMaster(string $K8sMaster) Set K8s master node
 * @method integer getProcessCnt() Obtain Number of processes in the container
 * @method void setProcessCnt(integer $ProcessCnt) Set Number of processes in the container
 * @method integer getPortCnt() Obtain Number of ports in the container
 * @method void setPortCnt(integer $PortCnt) Set Number of ports in the container
 * @method integer getComponentCnt() Obtain Number of components
 * @method void setComponentCnt(integer $ComponentCnt) Set Number of components
 * @method integer getAppCnt() Obtain Number of applications
 * @method void setAppCnt(integer $AppCnt) Set Number of applications
 * @method integer getWebServiceCnt() Obtain Number of web services
 * @method void setWebServiceCnt(integer $WebServiceCnt) Set Number of web services
 * @method array getMounts() Obtain Mount
 * @method void setMounts(array $Mounts) Set Mount
 * @method ContainerNetwork getNetwork() Obtain Container network information
 * @method void setNetwork(ContainerNetwork $Network) Set Container network information
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method string getImageCreateTime() Obtain Image creation time
 * @method void setImageCreateTime(string $ImageCreateTime) Set Image creation time
 * @method integer getImageSize() Obtain Image size
 * @method void setImageSize(integer $ImageSize) Set Image size
 * @method string getHostStatus() Obtain Server status. Valid values: `offline`, `online`, `pause`.
 * @method void setHostStatus(string $HostStatus) Set Server status. Valid values: `offline`, `online`, `pause`.
 * @method string getNetStatus() Obtain Network status
`NORMAL`: 	Not isolated.
`ISOLATED`: 		Isolated.
`ISOLATING`: 		Isolating.
`ISOLATE_FAILED`: 	Isolation failed.
`RESTORING`: Recovering.
`RESTORE_FAILED`: Recovery failed.
 * @method void setNetStatus(string $NetStatus) Set Network status
`NORMAL`: 	Not isolated.
`ISOLATED`: 		Isolated.
`ISOLATING`: 		Isolating.
`ISOLATE_FAILED`: 	Isolation failed.
`RESTORING`: Recovering.
`RESTORE_FAILED`: Recovery failed.
 * @method string getNetSubStatus() Obtain Sub-status of the network
 * @method void setNetSubStatus(string $NetSubStatus) Set Sub-status of the network
 * @method string getIsolateSource() Obtain Isolation source
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsolateSource(string $IsolateSource) Set Isolation source
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIsolateTime() Obtain Isolation time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsolateTime(string $IsolateTime) Set Isolation time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getNodeID() Obtain Node ID
 * @method void setNodeID(string $NodeID) Set Node ID
 * @method string getNodeName() Obtain Node name
 * @method void setNodeName(string $NodeName) Set Node name
 * @method string getNodeSubNetID() Obtain Node subnet ID
 * @method void setNodeSubNetID(string $NodeSubNetID) Set Node subnet ID
 * @method string getNodeSubNetName() Obtain Node subnet name
 * @method void setNodeSubNetName(string $NodeSubNetName) Set Node subnet name
 * @method string getNodeSubNetCIDR() Obtain Subnet IP range
 * @method void setNodeSubNetCIDR(string $NodeSubNetCIDR) Set Subnet IP range
 * @method string getPodName() Obtain Pod name
 * @method void setPodName(string $PodName) Set Pod name
 * @method string getPodIP() Obtain Pod IP
 * @method void setPodIP(string $PodIP) Set Pod IP
 * @method string getPodStatus() Obtain Pod status
 * @method void setPodStatus(string $PodStatus) Set Pod status
 * @method string getClusterID() Obtain Cluster ID
 * @method void setClusterID(string $ClusterID) Set Cluster ID
 * @method string getClusterName() Obtain Cluster name
 * @method void setClusterName(string $ClusterName) Set Cluster name
 * @method string getNodeType() Obtain Node type. Values: `NORMAL` (default), `SUPER`
 * @method void setNodeType(string $NodeType) Set Node type. Values: `NORMAL` (default), `SUPER`
 * @method string getNodeUniqueID() Obtain UID of the super node
 * @method void setNodeUniqueID(string $NodeUniqueID) Set UID of the super node
 * @method string getPublicIP() Obtain Public IP
 * @method void setPublicIP(string $PublicIP) Set Public IP
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeAssetContainerDetailResponse extends AbstractModel
{
    /**
     * @var string Server ID
     */
    public $HostID;

    /**
     * @var string Server IP
     */
    public $HostIP;

    /**
     * @var string Container name
     */
    public $ContainerName;

    /**
     * @var string Status
     */
    public $Status;

    /**
     * @var string Operator
     */
    public $RunAs;

    /**
     * @var string Command line
     */
    public $Cmd;

    /**
     * @var integer CPU utilization * 1000
     */
    public $CPUUsage;

    /**
     * @var integer Memory usage in KB
     */
    public $RamUsage;

    /**
     * @var string Image name
     */
    public $ImageName;

    /**
     * @var string Image ID
     */
    public $ImageID;

    /**
     * @var string Pod
     */
    public $POD;

    /**
     * @var string K8s master node
     */
    public $K8sMaster;

    /**
     * @var integer Number of processes in the container
     */
    public $ProcessCnt;

    /**
     * @var integer Number of ports in the container
     */
    public $PortCnt;

    /**
     * @var integer Number of components
     */
    public $ComponentCnt;

    /**
     * @var integer Number of applications
     */
    public $AppCnt;

    /**
     * @var integer Number of web services
     */
    public $WebServiceCnt;

    /**
     * @var array Mount
     */
    public $Mounts;

    /**
     * @var ContainerNetwork Container network information
     */
    public $Network;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var string Image creation time
     */
    public $ImageCreateTime;

    /**
     * @var integer Image size
     */
    public $ImageSize;

    /**
     * @var string Server status. Valid values: `offline`, `online`, `pause`.
     */
    public $HostStatus;

    /**
     * @var string Network status
`NORMAL`: 	Not isolated.
`ISOLATED`: 		Isolated.
`ISOLATING`: 		Isolating.
`ISOLATE_FAILED`: 	Isolation failed.
`RESTORING`: Recovering.
`RESTORE_FAILED`: Recovery failed.
     */
    public $NetStatus;

    /**
     * @var string Sub-status of the network
     */
    public $NetSubStatus;

    /**
     * @var string Isolation source
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsolateSource;

    /**
     * @var string Isolation time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsolateTime;

    /**
     * @var string Node ID
     */
    public $NodeID;

    /**
     * @var string Node name
     */
    public $NodeName;

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
     * @var string Pod name
     */
    public $PodName;

    /**
     * @var string Pod IP
     */
    public $PodIP;

    /**
     * @var string Pod status
     */
    public $PodStatus;

    /**
     * @var string Cluster ID
     */
    public $ClusterID;

    /**
     * @var string Cluster name
     */
    public $ClusterName;

    /**
     * @var string Node type. Values: `NORMAL` (default), `SUPER`
     */
    public $NodeType;

    /**
     * @var string UID of the super node
     */
    public $NodeUniqueID;

    /**
     * @var string Public IP
     */
    public $PublicIP;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $HostID Server ID
     * @param string $HostIP Server IP
     * @param string $ContainerName Container name
     * @param string $Status Status
     * @param string $RunAs Operator
     * @param string $Cmd Command line
     * @param integer $CPUUsage CPU utilization * 1000
     * @param integer $RamUsage Memory usage in KB
     * @param string $ImageName Image name
     * @param string $ImageID Image ID
     * @param string $POD Pod
     * @param string $K8sMaster K8s master node
     * @param integer $ProcessCnt Number of processes in the container
     * @param integer $PortCnt Number of ports in the container
     * @param integer $ComponentCnt Number of components
     * @param integer $AppCnt Number of applications
     * @param integer $WebServiceCnt Number of web services
     * @param array $Mounts Mount
     * @param ContainerNetwork $Network Container network information
     * @param string $CreateTime Creation time
     * @param string $ImageCreateTime Image creation time
     * @param integer $ImageSize Image size
     * @param string $HostStatus Server status. Valid values: `offline`, `online`, `pause`.
     * @param string $NetStatus Network status
`NORMAL`: 	Not isolated.
`ISOLATED`: 		Isolated.
`ISOLATING`: 		Isolating.
`ISOLATE_FAILED`: 	Isolation failed.
`RESTORING`: Recovering.
`RESTORE_FAILED`: Recovery failed.
     * @param string $NetSubStatus Sub-status of the network
     * @param string $IsolateSource Isolation source
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IsolateTime Isolation time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $NodeID Node ID
     * @param string $NodeName Node name
     * @param string $NodeSubNetID Node subnet ID
     * @param string $NodeSubNetName Node subnet name
     * @param string $NodeSubNetCIDR Subnet IP range
     * @param string $PodName Pod name
     * @param string $PodIP Pod IP
     * @param string $PodStatus Pod status
     * @param string $ClusterID Cluster ID
     * @param string $ClusterName Cluster name
     * @param string $NodeType Node type. Values: `NORMAL` (default), `SUPER`
     * @param string $NodeUniqueID UID of the super node
     * @param string $PublicIP Public IP
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
        if (array_key_exists("HostID",$param) and $param["HostID"] !== null) {
            $this->HostID = $param["HostID"];
        }

        if (array_key_exists("HostIP",$param) and $param["HostIP"] !== null) {
            $this->HostIP = $param["HostIP"];
        }

        if (array_key_exists("ContainerName",$param) and $param["ContainerName"] !== null) {
            $this->ContainerName = $param["ContainerName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RunAs",$param) and $param["RunAs"] !== null) {
            $this->RunAs = $param["RunAs"];
        }

        if (array_key_exists("Cmd",$param) and $param["Cmd"] !== null) {
            $this->Cmd = $param["Cmd"];
        }

        if (array_key_exists("CPUUsage",$param) and $param["CPUUsage"] !== null) {
            $this->CPUUsage = $param["CPUUsage"];
        }

        if (array_key_exists("RamUsage",$param) and $param["RamUsage"] !== null) {
            $this->RamUsage = $param["RamUsage"];
        }

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("ImageID",$param) and $param["ImageID"] !== null) {
            $this->ImageID = $param["ImageID"];
        }

        if (array_key_exists("POD",$param) and $param["POD"] !== null) {
            $this->POD = $param["POD"];
        }

        if (array_key_exists("K8sMaster",$param) and $param["K8sMaster"] !== null) {
            $this->K8sMaster = $param["K8sMaster"];
        }

        if (array_key_exists("ProcessCnt",$param) and $param["ProcessCnt"] !== null) {
            $this->ProcessCnt = $param["ProcessCnt"];
        }

        if (array_key_exists("PortCnt",$param) and $param["PortCnt"] !== null) {
            $this->PortCnt = $param["PortCnt"];
        }

        if (array_key_exists("ComponentCnt",$param) and $param["ComponentCnt"] !== null) {
            $this->ComponentCnt = $param["ComponentCnt"];
        }

        if (array_key_exists("AppCnt",$param) and $param["AppCnt"] !== null) {
            $this->AppCnt = $param["AppCnt"];
        }

        if (array_key_exists("WebServiceCnt",$param) and $param["WebServiceCnt"] !== null) {
            $this->WebServiceCnt = $param["WebServiceCnt"];
        }

        if (array_key_exists("Mounts",$param) and $param["Mounts"] !== null) {
            $this->Mounts = [];
            foreach ($param["Mounts"] as $key => $value){
                $obj = new ContainerMount();
                $obj->deserialize($value);
                array_push($this->Mounts, $obj);
            }
        }

        if (array_key_exists("Network",$param) and $param["Network"] !== null) {
            $this->Network = new ContainerNetwork();
            $this->Network->deserialize($param["Network"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ImageCreateTime",$param) and $param["ImageCreateTime"] !== null) {
            $this->ImageCreateTime = $param["ImageCreateTime"];
        }

        if (array_key_exists("ImageSize",$param) and $param["ImageSize"] !== null) {
            $this->ImageSize = $param["ImageSize"];
        }

        if (array_key_exists("HostStatus",$param) and $param["HostStatus"] !== null) {
            $this->HostStatus = $param["HostStatus"];
        }

        if (array_key_exists("NetStatus",$param) and $param["NetStatus"] !== null) {
            $this->NetStatus = $param["NetStatus"];
        }

        if (array_key_exists("NetSubStatus",$param) and $param["NetSubStatus"] !== null) {
            $this->NetSubStatus = $param["NetSubStatus"];
        }

        if (array_key_exists("IsolateSource",$param) and $param["IsolateSource"] !== null) {
            $this->IsolateSource = $param["IsolateSource"];
        }

        if (array_key_exists("IsolateTime",$param) and $param["IsolateTime"] !== null) {
            $this->IsolateTime = $param["IsolateTime"];
        }

        if (array_key_exists("NodeID",$param) and $param["NodeID"] !== null) {
            $this->NodeID = $param["NodeID"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
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

        if (array_key_exists("PodName",$param) and $param["PodName"] !== null) {
            $this->PodName = $param["PodName"];
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

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("NodeUniqueID",$param) and $param["NodeUniqueID"] !== null) {
            $this->NodeUniqueID = $param["NodeUniqueID"];
        }

        if (array_key_exists("PublicIP",$param) and $param["PublicIP"] !== null) {
            $this->PublicIP = $param["PublicIP"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
