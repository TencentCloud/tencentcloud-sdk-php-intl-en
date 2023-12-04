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
 * Structure of the affected node type
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getClusterName() Obtain Cluster name
 * @method void setClusterName(string $ClusterName) Set Cluster name
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getPrivateIpAddresses() Obtain Private IP
 * @method void setPrivateIpAddresses(string $PrivateIpAddresses) Set Private IP
 * @method string getInstanceRole() Obtain Node role, such as `Master` and `Work`.
 * @method void setInstanceRole(string $InstanceRole) Set Node role, such as `Master` and `Work`.
 * @method string getClusterVersion() Obtain K8s version
 * @method void setClusterVersion(string $ClusterVersion) Set K8s version
 * @method string getContainerRuntime() Obtain Runtime component. Valid values: `docker`, `containerd`.
 * @method void setContainerRuntime(string $ContainerRuntime) Set Runtime component. Valid values: `docker`, `containerd`.
 * @method string getRegion() Obtain Region
 * @method void setRegion(string $Region) Set Region
 * @method string getVerifyInfo() Obtain Verification information of the check result
 * @method void setVerifyInfo(string $VerifyInfo) Set Verification information of the check result
 * @method string getNodeName() Obtain Node name
 * @method void setNodeName(string $NodeName) Set Node name
 */
class AffectedNodeItem extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string Cluster name
     */
    public $ClusterName;

    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Private IP
     */
    public $PrivateIpAddresses;

    /**
     * @var string Node role, such as `Master` and `Work`.
     */
    public $InstanceRole;

    /**
     * @var string K8s version
     */
    public $ClusterVersion;

    /**
     * @var string Runtime component. Valid values: `docker`, `containerd`.
     */
    public $ContainerRuntime;

    /**
     * @var string Region
     */
    public $Region;

    /**
     * @var string Verification information of the check result
     */
    public $VerifyInfo;

    /**
     * @var string Node name
     */
    public $NodeName;

    /**
     * @param string $ClusterId Cluster ID
     * @param string $ClusterName Cluster name
     * @param string $InstanceId Instance ID
     * @param string $PrivateIpAddresses Private IP
     * @param string $InstanceRole Node role, such as `Master` and `Work`.
     * @param string $ClusterVersion K8s version
     * @param string $ContainerRuntime Runtime component. Valid values: `docker`, `containerd`.
     * @param string $Region Region
     * @param string $VerifyInfo Verification information of the check result
     * @param string $NodeName Node name
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("PrivateIpAddresses",$param) and $param["PrivateIpAddresses"] !== null) {
            $this->PrivateIpAddresses = $param["PrivateIpAddresses"];
        }

        if (array_key_exists("InstanceRole",$param) and $param["InstanceRole"] !== null) {
            $this->InstanceRole = $param["InstanceRole"];
        }

        if (array_key_exists("ClusterVersion",$param) and $param["ClusterVersion"] !== null) {
            $this->ClusterVersion = $param["ClusterVersion"];
        }

        if (array_key_exists("ContainerRuntime",$param) and $param["ContainerRuntime"] !== null) {
            $this->ContainerRuntime = $param["ContainerRuntime"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("VerifyInfo",$param) and $param["VerifyInfo"] !== null) {
            $this->VerifyInfo = $param["VerifyInfo"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }
    }
}
