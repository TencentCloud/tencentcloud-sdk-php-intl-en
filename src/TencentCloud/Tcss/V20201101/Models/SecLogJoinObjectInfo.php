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
 * Details of the accessed security log object
 *
 * @method string getHostID() Obtain Server ID
 * @method void setHostID(string $HostID) Set Server ID
 * @method string getHostName() Obtain Server name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHostName(string $HostName) Set Server name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getHostIP() Obtain Server IP
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHostIP(string $HostIP) Set Server IP
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getHostStatus() Obtain Server status
 * @method void setHostStatus(string $HostStatus) Set Server status
 * @method string getClusterID() Obtain Cluster ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setClusterID(string $ClusterID) Set Cluster ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getClusterName() Obtain Cluster name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setClusterName(string $ClusterName) Set Cluster name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPublicIP() Obtain Public IP
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPublicIP(string $PublicIP) Set Public IP
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getJoinState() Obtain Access status. Valid values: `true` (accessed); `false` (not accessed).
 * @method void setJoinState(boolean $JoinState) Set Access status. Valid values: `true` (accessed); `false` (not accessed).
 * @method string getClusterVersion() Obtain Cluster version
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setClusterVersion(string $ClusterVersion) Set Cluster version
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getClusterMainAddress() Obtain Master node address of the cluster
 * @method void setClusterMainAddress(string $ClusterMainAddress) Set Master node address of the cluster
 */
class SecLogJoinObjectInfo extends AbstractModel
{
    /**
     * @var string Server ID
     */
    public $HostID;

    /**
     * @var string Server name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HostName;

    /**
     * @var string Server IP
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HostIP;

    /**
     * @var string Server status
     */
    public $HostStatus;

    /**
     * @var string Cluster ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ClusterID;

    /**
     * @var string Cluster name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ClusterName;

    /**
     * @var string Public IP
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PublicIP;

    /**
     * @var boolean Access status. Valid values: `true` (accessed); `false` (not accessed).
     */
    public $JoinState;

    /**
     * @var string Cluster version
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ClusterVersion;

    /**
     * @var string Master node address of the cluster
     */
    public $ClusterMainAddress;

    /**
     * @param string $HostID Server ID
     * @param string $HostName Server name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $HostIP Server IP
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $HostStatus Server status
     * @param string $ClusterID Cluster ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ClusterName Cluster name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PublicIP Public IP
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $JoinState Access status. Valid values: `true` (accessed); `false` (not accessed).
     * @param string $ClusterVersion Cluster version
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ClusterMainAddress Master node address of the cluster
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
    }
}
