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
 * Details of the accessed security log object
 *
 * @method string getHostID() Obtain Server ID
 * @method void setHostID(string $HostID) Set Server ID
 * @method string getHostName() Obtain Host name
 * @method void setHostName(string $HostName) Set Host name
 * @method string getHostIP() Obtain Host IP address
 * @method void setHostIP(string $HostIP) Set Host IP address
 * @method string getHostStatus() Obtain Server status
 * @method void setHostStatus(string $HostStatus) Set Server status
 * @method string getClusterID() Obtain Cluster ID
 * @method void setClusterID(string $ClusterID) Set Cluster ID
 * @method string getClusterName() Obtain Cluster name.
 * @method void setClusterName(string $ClusterName) Set Cluster name.
 * @method string getPublicIP() Obtain Public IP address
 * @method void setPublicIP(string $PublicIP) Set Public IP address
 * @method boolean getJoinState() Obtain Access status. Valid values: `true` (accessed); `false` (not accessed).
 * @method void setJoinState(boolean $JoinState) Set Access status. Valid values: `true` (accessed); `false` (not accessed).
 * @method string getClusterVersion() Obtain cluster edition
 * @method void setClusterVersion(string $ClusterVersion) Set cluster edition
 * @method string getClusterMainAddress() Obtain Master node address of the cluster
 * @method void setClusterMainAddress(string $ClusterMainAddress) Set Master node address of the cluster
 * @method integer getContainerCnt() Obtain Number of containers
 * @method void setContainerCnt(integer $ContainerCnt) Set Number of containers
 * @method string getClusterType() Obtain Cluster type.
 * @method void setClusterType(string $ClusterType) Set Cluster type.
 * @method string getClusterStatus() Obtain Cluster status
 * @method void setClusterStatus(string $ClusterStatus) Set Cluster status
 */
class SecLogJoinObjectInfo extends AbstractModel
{
    /**
     * @var string Server ID
     */
    public $HostID;

    /**
     * @var string Host name
     */
    public $HostName;

    /**
     * @var string Host IP address
     */
    public $HostIP;

    /**
     * @var string Server status
     */
    public $HostStatus;

    /**
     * @var string Cluster ID
     */
    public $ClusterID;

    /**
     * @var string Cluster name.
     */
    public $ClusterName;

    /**
     * @var string Public IP address
     */
    public $PublicIP;

    /**
     * @var boolean Access status. Valid values: `true` (accessed); `false` (not accessed).
     */
    public $JoinState;

    /**
     * @var string cluster edition
     */
    public $ClusterVersion;

    /**
     * @var string Master node address of the cluster
     */
    public $ClusterMainAddress;

    /**
     * @var integer Number of containers
     */
    public $ContainerCnt;

    /**
     * @var string Cluster type.
     */
    public $ClusterType;

    /**
     * @var string Cluster status
     */
    public $ClusterStatus;

    /**
     * @param string $HostID Server ID
     * @param string $HostName Host name
     * @param string $HostIP Host IP address
     * @param string $HostStatus Server status
     * @param string $ClusterID Cluster ID
     * @param string $ClusterName Cluster name.
     * @param string $PublicIP Public IP address
     * @param boolean $JoinState Access status. Valid values: `true` (accessed); `false` (not accessed).
     * @param string $ClusterVersion cluster edition
     * @param string $ClusterMainAddress Master node address of the cluster
     * @param integer $ContainerCnt Number of containers
     * @param string $ClusterType Cluster type.
     * @param string $ClusterStatus Cluster status
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

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("HostIP",$param) and $param["HostIP"] !== null) {
            $this->HostIP = $param["HostIP"];
        }

        if (array_key_exists("HostStatus",$param) and $param["HostStatus"] !== null) {
            $this->HostStatus = $param["HostStatus"];
        }

        if (array_key_exists("ClusterID",$param) and $param["ClusterID"] !== null) {
            $this->ClusterID = $param["ClusterID"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("PublicIP",$param) and $param["PublicIP"] !== null) {
            $this->PublicIP = $param["PublicIP"];
        }

        if (array_key_exists("JoinState",$param) and $param["JoinState"] !== null) {
            $this->JoinState = $param["JoinState"];
        }

        if (array_key_exists("ClusterVersion",$param) and $param["ClusterVersion"] !== null) {
            $this->ClusterVersion = $param["ClusterVersion"];
        }

        if (array_key_exists("ClusterMainAddress",$param) and $param["ClusterMainAddress"] !== null) {
            $this->ClusterMainAddress = $param["ClusterMainAddress"];
        }

        if (array_key_exists("ContainerCnt",$param) and $param["ContainerCnt"] !== null) {
            $this->ContainerCnt = $param["ContainerCnt"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("ClusterStatus",$param) and $param["ClusterStatus"] !== null) {
            $this->ClusterStatus = $param["ClusterStatus"];
        }
    }
}
