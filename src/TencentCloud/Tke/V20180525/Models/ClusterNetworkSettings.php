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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cluster network-related parameters
 *
 * @method string getClusterCIDR() Obtain CIDR used to assign container and service IPs for the cluster. It cannot conflict with the VPC's CIDR or the CIDRs of other clusters in the same VPC.
 * @method void setClusterCIDR(string $ClusterCIDR) Set CIDR used to assign container and service IPs for the cluster. It cannot conflict with the VPC's CIDR or the CIDRs of other clusters in the same VPC.
 * @method boolean getIgnoreClusterCIDRConflict() Obtain Whether to ignore ClusterCIDR conflict errors. It defaults to not ignore.
 * @method void setIgnoreClusterCIDRConflict(boolean $IgnoreClusterCIDRConflict) Set Whether to ignore ClusterCIDR conflict errors. It defaults to not ignore.
 * @method integer getMaxNodePodNum() Obtain Maximum number of pods on each node in the cluster. Default value: 256
 * @method void setMaxNodePodNum(integer $MaxNodePodNum) Set Maximum number of pods on each node in the cluster. Default value: 256
 * @method integer getMaxClusterServiceNum() Obtain Maximum number of cluster services. Default value: 256
 * @method void setMaxClusterServiceNum(integer $MaxClusterServiceNum) Set Maximum number of cluster services. Default value: 256
 * @method boolean getIpvs() Obtain Whether IPVS is enabled. Default value: disabled
 * @method void setIpvs(boolean $Ipvs) Set Whether IPVS is enabled. Default value: disabled
 * @method string getVpcId() Obtain Cluster VPC ID, which is required when you create an empty cluster; otherwise, it is automatically set to be consistent with that of the nodes in the cluster
 * @method void setVpcId(string $VpcId) Set Cluster VPC ID, which is required when you create an empty cluster; otherwise, it is automatically set to be consistent with that of the nodes in the cluster
 * @method boolean getCni() Obtain Whether CNI is enabled for network plugin(s). Default value: enabled
 * @method void setCni(boolean $Cni) Set Whether CNI is enabled for network plugin(s). Default value: enabled
 * @method string getKubeProxyMode() Obtain The network mode of service. This parameter is only applicable to ipvs+bpf mode.
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method void setKubeProxyMode(string $KubeProxyMode) Set The network mode of service. This parameter is only applicable to ipvs+bpf mode.
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method string getServiceCIDR() Obtain The IP range for service assignment. It cannot conflict with the VPC’s CIDR block nor the CIDR blocks of other clusters in the same VPC.
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method void setServiceCIDR(string $ServiceCIDR) Set The IP range for service assignment. It cannot conflict with the VPC’s CIDR block nor the CIDR blocks of other clusters in the same VPC.
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method array getSubnets() Obtain The container subnet associated with the cluster
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method void setSubnets(array $Subnets) Set The container subnet associated with the cluster
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method boolean getIgnoreServiceCIDRConflict() Obtain Whether to ignore ServiceCIDR conflict errors. It is only valid in VPC-CNI mode. Default value: `false`.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setIgnoreServiceCIDRConflict(boolean $IgnoreServiceCIDRConflict) Set Whether to ignore ServiceCIDR conflict errors. It is only valid in VPC-CNI mode. Default value: `false`.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method boolean getIsDualStack() Obtain Whether it is a dual-stack cluster in VPC-CNI mode. Default value: `false`, which indicates it is not a dual-stack cluster.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setIsDualStack(boolean $IsDualStack) Set Whether it is a dual-stack cluster in VPC-CNI mode. Default value: `false`, which indicates it is not a dual-stack cluster.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getIpv6ServiceCIDR() Obtain It is used to automatically assign the IP ranges for the service.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setIpv6ServiceCIDR(string $Ipv6ServiceCIDR) Set It is used to automatically assign the IP ranges for the service.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getCiliumMode() Obtain Cluster Cilium Mode configuration
- clusterIP
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setCiliumMode(string $CiliumMode) Set Cluster Cilium Mode configuration
- clusterIP
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class ClusterNetworkSettings extends AbstractModel
{
    /**
     * @var string CIDR used to assign container and service IPs for the cluster. It cannot conflict with the VPC's CIDR or the CIDRs of other clusters in the same VPC.
     */
    public $ClusterCIDR;

    /**
     * @var boolean Whether to ignore ClusterCIDR conflict errors. It defaults to not ignore.
     */
    public $IgnoreClusterCIDRConflict;

    /**
     * @var integer Maximum number of pods on each node in the cluster. Default value: 256
     */
    public $MaxNodePodNum;

    /**
     * @var integer Maximum number of cluster services. Default value: 256
     */
    public $MaxClusterServiceNum;

    /**
     * @var boolean Whether IPVS is enabled. Default value: disabled
     */
    public $Ipvs;

    /**
     * @var string Cluster VPC ID, which is required when you create an empty cluster; otherwise, it is automatically set to be consistent with that of the nodes in the cluster
     */
    public $VpcId;

    /**
     * @var boolean Whether CNI is enabled for network plugin(s). Default value: enabled
     */
    public $Cni;

    /**
     * @var string The network mode of service. This parameter is only applicable to ipvs+bpf mode.
Note: this field may return `null`, indicating that no valid value can be obtained.
     */
    public $KubeProxyMode;

    /**
     * @var string The IP range for service assignment. It cannot conflict with the VPC’s CIDR block nor the CIDR blocks of other clusters in the same VPC.
Note: this field may return `null`, indicating that no valid value can be obtained.
     */
    public $ServiceCIDR;

    /**
     * @var array The container subnet associated with the cluster
Note: this field may return `null`, indicating that no valid value can be obtained.
     */
    public $Subnets;

    /**
     * @var boolean Whether to ignore ServiceCIDR conflict errors. It is only valid in VPC-CNI mode. Default value: `false`.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $IgnoreServiceCIDRConflict;

    /**
     * @var boolean Whether it is a dual-stack cluster in VPC-CNI mode. Default value: `false`, which indicates it is not a dual-stack cluster.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $IsDualStack;

    /**
     * @var string It is used to automatically assign the IP ranges for the service.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Ipv6ServiceCIDR;

    /**
     * @var string Cluster Cilium Mode configuration
- clusterIP
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $CiliumMode;

    /**
     * @param string $ClusterCIDR CIDR used to assign container and service IPs for the cluster. It cannot conflict with the VPC's CIDR or the CIDRs of other clusters in the same VPC.
     * @param boolean $IgnoreClusterCIDRConflict Whether to ignore ClusterCIDR conflict errors. It defaults to not ignore.
     * @param integer $MaxNodePodNum Maximum number of pods on each node in the cluster. Default value: 256
     * @param integer $MaxClusterServiceNum Maximum number of cluster services. Default value: 256
     * @param boolean $Ipvs Whether IPVS is enabled. Default value: disabled
     * @param string $VpcId Cluster VPC ID, which is required when you create an empty cluster; otherwise, it is automatically set to be consistent with that of the nodes in the cluster
     * @param boolean $Cni Whether CNI is enabled for network plugin(s). Default value: enabled
     * @param string $KubeProxyMode The network mode of service. This parameter is only applicable to ipvs+bpf mode.
Note: this field may return `null`, indicating that no valid value can be obtained.
     * @param string $ServiceCIDR The IP range for service assignment. It cannot conflict with the VPC’s CIDR block nor the CIDR blocks of other clusters in the same VPC.
Note: this field may return `null`, indicating that no valid value can be obtained.
     * @param array $Subnets The container subnet associated with the cluster
Note: this field may return `null`, indicating that no valid value can be obtained.
     * @param boolean $IgnoreServiceCIDRConflict Whether to ignore ServiceCIDR conflict errors. It is only valid in VPC-CNI mode. Default value: `false`.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param boolean $IsDualStack Whether it is a dual-stack cluster in VPC-CNI mode. Default value: `false`, which indicates it is not a dual-stack cluster.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $Ipv6ServiceCIDR It is used to automatically assign the IP ranges for the service.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $CiliumMode Cluster Cilium Mode configuration
- clusterIP
Note: This field may return `null`, indicating that no valid value can be obtained.
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
        if (array_key_exists("ClusterCIDR",$param) and $param["ClusterCIDR"] !== null) {
            $this->ClusterCIDR = $param["ClusterCIDR"];
        }

        if (array_key_exists("IgnoreClusterCIDRConflict",$param) and $param["IgnoreClusterCIDRConflict"] !== null) {
            $this->IgnoreClusterCIDRConflict = $param["IgnoreClusterCIDRConflict"];
        }

        if (array_key_exists("MaxNodePodNum",$param) and $param["MaxNodePodNum"] !== null) {
            $this->MaxNodePodNum = $param["MaxNodePodNum"];
        }

        if (array_key_exists("MaxClusterServiceNum",$param) and $param["MaxClusterServiceNum"] !== null) {
            $this->MaxClusterServiceNum = $param["MaxClusterServiceNum"];
        }

        if (array_key_exists("Ipvs",$param) and $param["Ipvs"] !== null) {
            $this->Ipvs = $param["Ipvs"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("Cni",$param) and $param["Cni"] !== null) {
            $this->Cni = $param["Cni"];
        }

        if (array_key_exists("KubeProxyMode",$param) and $param["KubeProxyMode"] !== null) {
            $this->KubeProxyMode = $param["KubeProxyMode"];
        }

        if (array_key_exists("ServiceCIDR",$param) and $param["ServiceCIDR"] !== null) {
            $this->ServiceCIDR = $param["ServiceCIDR"];
        }

        if (array_key_exists("Subnets",$param) and $param["Subnets"] !== null) {
            $this->Subnets = $param["Subnets"];
        }

        if (array_key_exists("IgnoreServiceCIDRConflict",$param) and $param["IgnoreServiceCIDRConflict"] !== null) {
            $this->IgnoreServiceCIDRConflict = $param["IgnoreServiceCIDRConflict"];
        }

        if (array_key_exists("IsDualStack",$param) and $param["IsDualStack"] !== null) {
            $this->IsDualStack = $param["IsDualStack"];
        }

        if (array_key_exists("Ipv6ServiceCIDR",$param) and $param["Ipv6ServiceCIDR"] !== null) {
            $this->Ipv6ServiceCIDR = $param["Ipv6ServiceCIDR"];
        }

        if (array_key_exists("CiliumMode",$param) and $param["CiliumMode"] !== null) {
            $this->CiliumMode = $param["CiliumMode"];
        }
    }
}
