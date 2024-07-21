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
 * CreateTKEEdgeCluster request structure.
 *
 * @method string getK8SVersion() Obtain 
 * @method void setK8SVersion(string $K8SVersion) Set 
 * @method string getVpcId() Obtain VPC ID
 * @method void setVpcId(string $VpcId) Set VPC ID
 * @method string getClusterName() Obtain Cluster name
 * @method void setClusterName(string $ClusterName) Set Cluster name
 * @method string getPodCIDR() Obtain Cluster Pod CIDR block
 * @method void setPodCIDR(string $PodCIDR) Set Cluster Pod CIDR block
 * @method string getServiceCIDR() Obtain Cluster service CIDR block
 * @method void setServiceCIDR(string $ServiceCIDR) Set Cluster service CIDR block
 * @method string getClusterDesc() Obtain Cluster description
 * @method void setClusterDesc(string $ClusterDesc) Set Cluster description
 * @method EdgeClusterAdvancedSettings getClusterAdvancedSettings() Obtain Cluster advanced settings
 * @method void setClusterAdvancedSettings(EdgeClusterAdvancedSettings $ClusterAdvancedSettings) Set Cluster advanced settings
 * @method integer getMaxNodePodNum() Obtain Maximum number of Pods on the node
 * @method void setMaxNodePodNum(integer $MaxNodePodNum) Set Maximum number of Pods on the node
 * @method EdgeClusterPublicLB getPublicLB() Obtain Public LB of the TKE Edge cluster
 * @method void setPublicLB(EdgeClusterPublicLB $PublicLB) Set Public LB of the TKE Edge cluster
 * @method string getClusterLevel() Obtain Cluster specification level
 * @method void setClusterLevel(string $ClusterLevel) Set Cluster specification level
 * @method boolean getAutoUpgradeClusterLevel() Obtain Whether auto upgrade is supported
 * @method void setAutoUpgradeClusterLevel(boolean $AutoUpgradeClusterLevel) Set Whether auto upgrade is supported
 * @method string getChargeType() Obtain Cluster billing mode
 * @method void setChargeType(string $ChargeType) Set Cluster billing mode
 * @method string getEdgeVersion() Obtain Edge cluster version. It is the set of versions of all cluster components.
 * @method void setEdgeVersion(string $EdgeVersion) Set Edge cluster version. It is the set of versions of all cluster components.
 * @method string getRegistryPrefix() Obtain Prefix of the image registry of an edge component
 * @method void setRegistryPrefix(string $RegistryPrefix) Set Prefix of the image registry of an edge component
 * @method TagSpecification getTagSpecification() Obtain Tags bound with the cluster
 * @method void setTagSpecification(TagSpecification $TagSpecification) Set Tags bound with the cluster
 */
class CreateTKEEdgeClusterRequest extends AbstractModel
{
    /**
     * @var string 
     */
    public $K8SVersion;

    /**
     * @var string VPC ID
     */
    public $VpcId;

    /**
     * @var string Cluster name
     */
    public $ClusterName;

    /**
     * @var string Cluster Pod CIDR block
     */
    public $PodCIDR;

    /**
     * @var string Cluster service CIDR block
     */
    public $ServiceCIDR;

    /**
     * @var string Cluster description
     */
    public $ClusterDesc;

    /**
     * @var EdgeClusterAdvancedSettings Cluster advanced settings
     */
    public $ClusterAdvancedSettings;

    /**
     * @var integer Maximum number of Pods on the node
     */
    public $MaxNodePodNum;

    /**
     * @var EdgeClusterPublicLB Public LB of the TKE Edge cluster
     */
    public $PublicLB;

    /**
     * @var string Cluster specification level
     */
    public $ClusterLevel;

    /**
     * @var boolean Whether auto upgrade is supported
     */
    public $AutoUpgradeClusterLevel;

    /**
     * @var string Cluster billing mode
     */
    public $ChargeType;

    /**
     * @var string Edge cluster version. It is the set of versions of all cluster components.
     */
    public $EdgeVersion;

    /**
     * @var string Prefix of the image registry of an edge component
     */
    public $RegistryPrefix;

    /**
     * @var TagSpecification Tags bound with the cluster
     */
    public $TagSpecification;

    /**
     * @param string $K8SVersion 
     * @param string $VpcId VPC ID
     * @param string $ClusterName Cluster name
     * @param string $PodCIDR Cluster Pod CIDR block
     * @param string $ServiceCIDR Cluster service CIDR block
     * @param string $ClusterDesc Cluster description
     * @param EdgeClusterAdvancedSettings $ClusterAdvancedSettings Cluster advanced settings
     * @param integer $MaxNodePodNum Maximum number of Pods on the node
     * @param EdgeClusterPublicLB $PublicLB Public LB of the TKE Edge cluster
     * @param string $ClusterLevel Cluster specification level
     * @param boolean $AutoUpgradeClusterLevel Whether auto upgrade is supported
     * @param string $ChargeType Cluster billing mode
     * @param string $EdgeVersion Edge cluster version. It is the set of versions of all cluster components.
     * @param string $RegistryPrefix Prefix of the image registry of an edge component
     * @param TagSpecification $TagSpecification Tags bound with the cluster
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
        if (array_key_exists("K8SVersion",$param) and $param["K8SVersion"] !== null) {
            $this->K8SVersion = $param["K8SVersion"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("PodCIDR",$param) and $param["PodCIDR"] !== null) {
            $this->PodCIDR = $param["PodCIDR"];
        }

        if (array_key_exists("ServiceCIDR",$param) and $param["ServiceCIDR"] !== null) {
            $this->ServiceCIDR = $param["ServiceCIDR"];
        }

        if (array_key_exists("ClusterDesc",$param) and $param["ClusterDesc"] !== null) {
            $this->ClusterDesc = $param["ClusterDesc"];
        }

        if (array_key_exists("ClusterAdvancedSettings",$param) and $param["ClusterAdvancedSettings"] !== null) {
            $this->ClusterAdvancedSettings = new EdgeClusterAdvancedSettings();
            $this->ClusterAdvancedSettings->deserialize($param["ClusterAdvancedSettings"]);
        }

        if (array_key_exists("MaxNodePodNum",$param) and $param["MaxNodePodNum"] !== null) {
            $this->MaxNodePodNum = $param["MaxNodePodNum"];
        }

        if (array_key_exists("PublicLB",$param) and $param["PublicLB"] !== null) {
            $this->PublicLB = new EdgeClusterPublicLB();
            $this->PublicLB->deserialize($param["PublicLB"]);
        }

        if (array_key_exists("ClusterLevel",$param) and $param["ClusterLevel"] !== null) {
            $this->ClusterLevel = $param["ClusterLevel"];
        }

        if (array_key_exists("AutoUpgradeClusterLevel",$param) and $param["AutoUpgradeClusterLevel"] !== null) {
            $this->AutoUpgradeClusterLevel = $param["AutoUpgradeClusterLevel"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("EdgeVersion",$param) and $param["EdgeVersion"] !== null) {
            $this->EdgeVersion = $param["EdgeVersion"];
        }

        if (array_key_exists("RegistryPrefix",$param) and $param["RegistryPrefix"] !== null) {
            $this->RegistryPrefix = $param["RegistryPrefix"];
        }

        if (array_key_exists("TagSpecification",$param) and $param["TagSpecification"] !== null) {
            $this->TagSpecification = new TagSpecification();
            $this->TagSpecification->deserialize($param["TagSpecification"]);
        }
    }
}
