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
 * Edge compute cluster information
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getClusterName() Obtain Cluster name
 * @method void setClusterName(string $ClusterName) Set Cluster name
 * @method string getVpcId() Obtain VPC ID
 * @method void setVpcId(string $VpcId) Set VPC ID
 * @method string getPodCIDR() Obtain Cluster Pod CIDR block
 * @method void setPodCIDR(string $PodCIDR) Set Cluster Pod CIDR block
 * @method string getServiceCIDR() Obtain Cluster service CIDR block
 * @method void setServiceCIDR(string $ServiceCIDR) Set Cluster service CIDR block
 * @method string getK8SVersion() Obtain 
 * @method void setK8SVersion(string $K8SVersion) Set 
 * @method string getStatus() Obtain Cluster status
 * @method void setStatus(string $Status) Set Cluster status
 * @method string getClusterDesc() Obtain Cluster description
 * @method void setClusterDesc(string $ClusterDesc) Set Cluster description
 * @method string getCreatedTime() Obtain Cluster creation time
 * @method void setCreatedTime(string $CreatedTime) Set Cluster creation time
 * @method string getEdgeClusterVersion() Obtain Edge cluster version
 * @method void setEdgeClusterVersion(string $EdgeClusterVersion) Set Edge cluster version
 * @method integer getMaxNodePodNum() Obtain Maximum number of Pods on the node
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setMaxNodePodNum(integer $MaxNodePodNum) Set Maximum number of Pods on the node
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method EdgeClusterAdvancedSettings getClusterAdvancedSettings() Obtain Cluster advanced settings
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setClusterAdvancedSettings(EdgeClusterAdvancedSettings $ClusterAdvancedSettings) Set Cluster advanced settings
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getLevel() Obtain TKE edge cluster level
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setLevel(string $Level) Set TKE edge cluster level
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method boolean getAutoUpgradeClusterLevel() Obtain Whether to support auto upgrade of cluster spec level
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setAutoUpgradeClusterLevel(boolean $AutoUpgradeClusterLevel) Set Whether to support auto upgrade of cluster spec level
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getChargeType() Obtain Cluster billing mode. Valid values: `POSTPAID_BY_HOUR`, `PREPAID`
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setChargeType(string $ChargeType) Set Cluster billing mode. Valid values: `POSTPAID_BY_HOUR`, `PREPAID`
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getEdgeVersion() Obtain Edge cluster component version 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEdgeVersion(string $EdgeVersion) Set Edge cluster component version 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method TagSpecification getTagSpecification() Obtain Tags bound with the cluster
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setTagSpecification(TagSpecification $TagSpecification) Set Tags bound with the cluster
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class EdgeCluster extends AbstractModel
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
     * @var string VPC ID
     */
    public $VpcId;

    /**
     * @var string Cluster Pod CIDR block
     */
    public $PodCIDR;

    /**
     * @var string Cluster service CIDR block
     */
    public $ServiceCIDR;

    /**
     * @var string 
     */
    public $K8SVersion;

    /**
     * @var string Cluster status
     */
    public $Status;

    /**
     * @var string Cluster description
     */
    public $ClusterDesc;

    /**
     * @var string Cluster creation time
     */
    public $CreatedTime;

    /**
     * @var string Edge cluster version
     */
    public $EdgeClusterVersion;

    /**
     * @var integer Maximum number of Pods on the node
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $MaxNodePodNum;

    /**
     * @var EdgeClusterAdvancedSettings Cluster advanced settings
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $ClusterAdvancedSettings;

    /**
     * @var string TKE edge cluster level
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Level;

    /**
     * @var boolean Whether to support auto upgrade of cluster spec level
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $AutoUpgradeClusterLevel;

    /**
     * @var string Cluster billing mode. Valid values: `POSTPAID_BY_HOUR`, `PREPAID`
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $ChargeType;

    /**
     * @var string Edge cluster component version 
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EdgeVersion;

    /**
     * @var TagSpecification Tags bound with the cluster
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $TagSpecification;

    /**
     * @param string $ClusterId Cluster ID
     * @param string $ClusterName Cluster name
     * @param string $VpcId VPC ID
     * @param string $PodCIDR Cluster Pod CIDR block
     * @param string $ServiceCIDR Cluster service CIDR block
     * @param string $K8SVersion 
     * @param string $Status Cluster status
     * @param string $ClusterDesc Cluster description
     * @param string $CreatedTime Cluster creation time
     * @param string $EdgeClusterVersion Edge cluster version
     * @param integer $MaxNodePodNum Maximum number of Pods on the node
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param EdgeClusterAdvancedSettings $ClusterAdvancedSettings Cluster advanced settings
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $Level TKE edge cluster level
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param boolean $AutoUpgradeClusterLevel Whether to support auto upgrade of cluster spec level
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $ChargeType Cluster billing mode. Valid values: `POSTPAID_BY_HOUR`, `PREPAID`
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $EdgeVersion Edge cluster component version 
Note: This field may return null, indicating that no valid values can be obtained.
     * @param TagSpecification $TagSpecification Tags bound with the cluster
Note: This field may return `null`, indicating that no valid values can be obtained.
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

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("PodCIDR",$param) and $param["PodCIDR"] !== null) {
            $this->PodCIDR = $param["PodCIDR"];
        }

        if (array_key_exists("ServiceCIDR",$param) and $param["ServiceCIDR"] !== null) {
            $this->ServiceCIDR = $param["ServiceCIDR"];
        }

        if (array_key_exists("K8SVersion",$param) and $param["K8SVersion"] !== null) {
            $this->K8SVersion = $param["K8SVersion"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ClusterDesc",$param) and $param["ClusterDesc"] !== null) {
            $this->ClusterDesc = $param["ClusterDesc"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("EdgeClusterVersion",$param) and $param["EdgeClusterVersion"] !== null) {
            $this->EdgeClusterVersion = $param["EdgeClusterVersion"];
        }

        if (array_key_exists("MaxNodePodNum",$param) and $param["MaxNodePodNum"] !== null) {
            $this->MaxNodePodNum = $param["MaxNodePodNum"];
        }

        if (array_key_exists("ClusterAdvancedSettings",$param) and $param["ClusterAdvancedSettings"] !== null) {
            $this->ClusterAdvancedSettings = new EdgeClusterAdvancedSettings();
            $this->ClusterAdvancedSettings->deserialize($param["ClusterAdvancedSettings"]);
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
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

        if (array_key_exists("TagSpecification",$param) and $param["TagSpecification"] !== null) {
            $this->TagSpecification = new TagSpecification();
            $this->TagSpecification->deserialize($param["TagSpecification"]);
        }
    }
}
