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
 * List of containers
 *
 * @method string getContainerID() Obtain Container ID
 * @method void setContainerID(string $ContainerID) Set Container ID
 * @method string getContainerName() Obtain Container name
 * @method void setContainerName(string $ContainerName) Set Container name
 * @method string getStatus() Obtain Container status
 * @method void setStatus(string $Status) Set Container status
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
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
 * @method string getPOD() Obtain Image ID
 * @method void setPOD(string $POD) Set Image ID
 * @method string getHostID() Obtain Server ID
 * @method void setHostID(string $HostID) Set Server ID
 * @method string getHostIP() Obtain Server IP
 * @method void setHostIP(string $HostIP) Set Server IP
 * @method string getUpdateTime() Obtain Update time
 * @method void setUpdateTime(string $UpdateTime) Set Update time
 * @method string getHostName() Obtain Server name
 * @method void setHostName(string $HostName) Set Server name
 * @method string getPublicIp() Obtain Public IP
 * @method void setPublicIp(string $PublicIp) Set Public IP
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
 * @method string getNodeID() Obtain Super node ID
 * @method void setNodeID(string $NodeID) Set Super node ID
 * @method string getPodIP() Obtain Pod IP
 * @method void setPodIP(string $PodIP) Set Pod IP
 * @method string getPodName() Obtain Pod name
 * @method void setPodName(string $PodName) Set Pod name
 * @method string getNodeType() Obtain Node type. Valid values: `NORMAL` (general node), `SUPER` (super node)
 * @method void setNodeType(string $NodeType) Set Node type. Valid values: `NORMAL` (general node), `SUPER` (super node)
 * @method string getNodeUniqueID() Obtain UID of the super node
 * @method void setNodeUniqueID(string $NodeUniqueID) Set UID of the super node
 * @method integer getPodCpu() Obtain Number of CPU cores used by the pod
 * @method void setPodCpu(integer $PodCpu) Set Number of CPU cores used by the pod
 * @method integer getPodMem() Obtain Memory specification of the Pod
 * @method void setPodMem(integer $PodMem) Set Memory specification of the Pod
 * @method string getClusterName() Obtain 
 * @method void setClusterName(string $ClusterName) Set 
 * @method string getClusterID() Obtain 
 * @method void setClusterID(string $ClusterID) Set 
 * @method string getPodUid() Obtain 
 * @method void setPodUid(string $PodUid) Set 
 */
class ContainerInfo extends AbstractModel
{
    /**
     * @var string Container ID
     */
    public $ContainerID;

    /**
     * @var string Container name
     */
    public $ContainerName;

    /**
     * @var string Container status
     */
    public $Status;

    /**
     * @var string Creation time
     */
    public $CreateTime;

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
     * @var string Image ID
     */
    public $POD;

    /**
     * @var string Server ID
     */
    public $HostID;

    /**
     * @var string Server IP
     */
    public $HostIP;

    /**
     * @var string Update time
     */
    public $UpdateTime;

    /**
     * @var string Server name
     */
    public $HostName;

    /**
     * @var string Public IP
     */
    public $PublicIp;

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
     * @var string Super node ID
     */
    public $NodeID;

    /**
     * @var string Pod IP
     */
    public $PodIP;

    /**
     * @var string Pod name
     */
    public $PodName;

    /**
     * @var string Node type. Valid values: `NORMAL` (general node), `SUPER` (super node)
     */
    public $NodeType;

    /**
     * @var string UID of the super node
     */
    public $NodeUniqueID;

    /**
     * @var integer Number of CPU cores used by the pod
     */
    public $PodCpu;

    /**
     * @var integer Memory specification of the Pod
     */
    public $PodMem;

    /**
     * @var string 
     */
    public $ClusterName;

    /**
     * @var string 
     */
    public $ClusterID;

    /**
     * @var string 
     */
    public $PodUid;

    /**
     * @param string $ContainerID Container ID
     * @param string $ContainerName Container name
     * @param string $Status Container status
     * @param string $CreateTime Creation time
     * @param string $RunAs Operator
     * @param string $Cmd Command line
     * @param integer $CPUUsage CPU utilization * 1000
     * @param integer $RamUsage Memory usage in KB
     * @param string $ImageName Image name
     * @param string $ImageID Image ID
     * @param string $POD Image ID
     * @param string $HostID Server ID
     * @param string $HostIP Server IP
     * @param string $UpdateTime Update time
     * @param string $HostName Server name
     * @param string $PublicIp Public IP
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
     * @param string $NodeID Super node ID
     * @param string $PodIP Pod IP
     * @param string $PodName Pod name
     * @param string $NodeType Node type. Valid values: `NORMAL` (general node), `SUPER` (super node)
     * @param string $NodeUniqueID UID of the super node
     * @param integer $PodCpu Number of CPU cores used by the pod
     * @param integer $PodMem Memory specification of the Pod
     * @param string $ClusterName 
     * @param string $ClusterID 
     * @param string $PodUid 
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
        if (array_key_exists("ContainerID",$param) and $param["ContainerID"] !== null) {
            $this->ContainerID = $param["ContainerID"];
        }

        if (array_key_exists("ContainerName",$param) and $param["ContainerName"] !== null) {
            $this->ContainerName = $param["ContainerName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
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

        if (array_key_exists("HostID",$param) and $param["HostID"] !== null) {
            $this->HostID = $param["HostID"];
        }

        if (array_key_exists("HostIP",$param) and $param["HostIP"] !== null) {
            $this->HostIP = $param["HostIP"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
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

        if (array_key_exists("PodIP",$param) and $param["PodIP"] !== null) {
            $this->PodIP = $param["PodIP"];
        }

        if (array_key_exists("PodName",$param) and $param["PodName"] !== null) {
            $this->PodName = $param["PodName"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("NodeUniqueID",$param) and $param["NodeUniqueID"] !== null) {
            $this->NodeUniqueID = $param["NodeUniqueID"];
        }

        if (array_key_exists("PodCpu",$param) and $param["PodCpu"] !== null) {
            $this->PodCpu = $param["PodCpu"];
        }

        if (array_key_exists("PodMem",$param) and $param["PodMem"] !== null) {
            $this->PodMem = $param["PodMem"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("ClusterID",$param) and $param["ClusterID"] !== null) {
            $this->ClusterID = $param["ClusterID"];
        }

        if (array_key_exists("PodUid",$param) and $param["PodUid"] !== null) {
            $this->PodUid = $param["PodUid"];
        }
    }
}
