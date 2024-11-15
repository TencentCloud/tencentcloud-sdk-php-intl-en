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
 * Cluster information struct
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getClusterName() Obtain Cluster name
 * @method void setClusterName(string $ClusterName) Set Cluster name
 * @method string getClusterDescription() Obtain Cluster description
 * @method void setClusterDescription(string $ClusterDescription) Set Cluster description
 * @method string getClusterVersion() Obtain Cluster version. The default value is 1.10.5.
 * @method void setClusterVersion(string $ClusterVersion) Set Cluster version. The default value is 1.10.5.
 * @method string getClusterOs() Obtain Cluster operating system. centOS 7.2x86_64 or ubuntu 16.04.1 LTSx86_64. Default value: ubuntu 16.04.1 LTSx86_64
 * @method void setClusterOs(string $ClusterOs) Set Cluster operating system. centOS 7.2x86_64 or ubuntu 16.04.1 LTSx86_64. Default value: ubuntu 16.04.1 LTSx86_64
 * @method string getClusterType() Obtain Cluster type. Managed cluster: MANAGED_CLUSTER; Self-deployed cluster: INDEPENDENT_CLUSTER.
 * @method void setClusterType(string $ClusterType) Set Cluster type. Managed cluster: MANAGED_CLUSTER; Self-deployed cluster: INDEPENDENT_CLUSTER.
 * @method ClusterNetworkSettings getClusterNetworkSettings() Obtain Cluster network-related parameters
 * @method void setClusterNetworkSettings(ClusterNetworkSettings $ClusterNetworkSettings) Set Cluster network-related parameters
 * @method integer getClusterNodeNum() Obtain Current number of nodes in the cluster
 * @method void setClusterNodeNum(integer $ClusterNodeNum) Set Current number of nodes in the cluster
 * @method integer getProjectId() Obtain ID of the project to which the cluster belongs
 * @method void setProjectId(integer $ProjectId) Set ID of the project to which the cluster belongs
 * @method array getTagSpecification() Obtain Tag description list.
 * @method void setTagSpecification(array $TagSpecification) Set Tag description list.
 * @method string getClusterStatus() Obtain Cluster status. Values: `Trading` (Preparing), `Creating`, `Running`, `Deleting`, `Idling` (Idle), `Recovering`, `Scaling`, `Upgrading` (Upgrading the cluster), `WaittingForConnect` (Pending registration), `Pause` (Cluster upgrade paused), `NodeUpgrading` (Upgrading the node), `RuntimeUpgrading` (Upgrading the node runtime), `MasterScaling` (Scaling Master), `ClusterLevelUpgrading` (Adjusting cluster specification level), `ResourceIsolate` (Isolating), `ResourceIsolated` (Isolated), `ResourceReverse` (Overdue payment made. Recovering the cluster), and `Abnormal`.
 * @method void setClusterStatus(string $ClusterStatus) Set Cluster status. Values: `Trading` (Preparing), `Creating`, `Running`, `Deleting`, `Idling` (Idle), `Recovering`, `Scaling`, `Upgrading` (Upgrading the cluster), `WaittingForConnect` (Pending registration), `Pause` (Cluster upgrade paused), `NodeUpgrading` (Upgrading the node), `RuntimeUpgrading` (Upgrading the node runtime), `MasterScaling` (Scaling Master), `ClusterLevelUpgrading` (Adjusting cluster specification level), `ResourceIsolate` (Isolating), `ResourceIsolated` (Isolated), `ResourceReverse` (Overdue payment made. Recovering the cluster), and `Abnormal`.
 * @method string getProperty() Obtain Cluster attributes (including a map of different cluster attributes, with attribute fields including NodeNameType (lan-ip mode and hostname mode, with lan-ip mode as default))
 * @method void setProperty(string $Property) Set Cluster attributes (including a map of different cluster attributes, with attribute fields including NodeNameType (lan-ip mode and hostname mode, with lan-ip mode as default))
 * @method integer getClusterMaterNodeNum() Obtain Number of primary nodes currently in the cluster
 * @method void setClusterMaterNodeNum(integer $ClusterMaterNodeNum) Set Number of primary nodes currently in the cluster
 * @method string getImageId() Obtain ID of the image used by the cluster
Note: this field may return null, indicating that no valid value is obtained.
 * @method void setImageId(string $ImageId) Set ID of the image used by the cluster
Note: this field may return null, indicating that no valid value is obtained.
 * @method string getOsCustomizeType() Obtain Container image tag
Note: This field may return null, indicating that no valid value was found.
 * @method void setOsCustomizeType(string $OsCustomizeType) Set Container image tag
Note: This field may return null, indicating that no valid value was found.
 * @method string getContainerRuntime() Obtain Runtime environment of the cluster. Values can be `docker` or `containerd`.
Note: this field may return null, indicating that no valid value is obtained.
 * @method void setContainerRuntime(string $ContainerRuntime) Set Runtime environment of the cluster. Values can be `docker` or `containerd`.
Note: this field may return null, indicating that no valid value is obtained.
 * @method string getCreatedTime() Obtain Creation time
Note: this field may return null, indicating that no valid value is obtained.
 * @method void setCreatedTime(string $CreatedTime) Set Creation time
Note: this field may return null, indicating that no valid value is obtained.
 * @method boolean getDeletionProtection() Obtain Whether Deletion Protection is enabled
Note: this field may return null, indicating that no valid value is obtained.
 * @method void setDeletionProtection(boolean $DeletionProtection) Set Whether Deletion Protection is enabled
Note: this field may return null, indicating that no valid value is obtained.
 * @method boolean getEnableExternalNode() Obtain Specifies whether the cluster supports external nodes.
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method void setEnableExternalNode(boolean $EnableExternalNode) Set Specifies whether the cluster supports external nodes.
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method string getClusterLevel() Obtain Cluster models. It’s valid for managed clusters.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setClusterLevel(string $ClusterLevel) Set Cluster models. It’s valid for managed clusters.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method boolean getAutoUpgradeClusterLevel() Obtain The target cluster model for auto-upgrade
Note: this field may return null, indicating that no valid value is obtained.
 * @method void setAutoUpgradeClusterLevel(boolean $AutoUpgradeClusterLevel) Set The target cluster model for auto-upgrade
Note: this field may return null, indicating that no valid value is obtained.
 * @method boolean getQGPUShareEnable() Obtain Whether to enable qGPU Sharing
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setQGPUShareEnable(boolean $QGPUShareEnable) Set Whether to enable qGPU Sharing
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getRuntimeVersion() Obtain Runtime version
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setRuntimeVersion(string $RuntimeVersion) Set Runtime version
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method integer getClusterEtcdNodeNum() Obtain Number of current etcd in the cluster
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setClusterEtcdNodeNum(integer $ClusterEtcdNodeNum) Set Number of current etcd in the cluster
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getCdcId() Obtain CDC Id
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setCdcId(string $CdcId) Set CDC Id
Note: This field may return "null", indicating that no valid value can be obtained.
 */
class Cluster extends AbstractModel
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
     * @var string Cluster description
     */
    public $ClusterDescription;

    /**
     * @var string Cluster version. The default value is 1.10.5.
     */
    public $ClusterVersion;

    /**
     * @var string Cluster operating system. centOS 7.2x86_64 or ubuntu 16.04.1 LTSx86_64. Default value: ubuntu 16.04.1 LTSx86_64
     */
    public $ClusterOs;

    /**
     * @var string Cluster type. Managed cluster: MANAGED_CLUSTER; Self-deployed cluster: INDEPENDENT_CLUSTER.
     */
    public $ClusterType;

    /**
     * @var ClusterNetworkSettings Cluster network-related parameters
     */
    public $ClusterNetworkSettings;

    /**
     * @var integer Current number of nodes in the cluster
     */
    public $ClusterNodeNum;

    /**
     * @var integer ID of the project to which the cluster belongs
     */
    public $ProjectId;

    /**
     * @var array Tag description list.
     */
    public $TagSpecification;

    /**
     * @var string Cluster status. Values: `Trading` (Preparing), `Creating`, `Running`, `Deleting`, `Idling` (Idle), `Recovering`, `Scaling`, `Upgrading` (Upgrading the cluster), `WaittingForConnect` (Pending registration), `Pause` (Cluster upgrade paused), `NodeUpgrading` (Upgrading the node), `RuntimeUpgrading` (Upgrading the node runtime), `MasterScaling` (Scaling Master), `ClusterLevelUpgrading` (Adjusting cluster specification level), `ResourceIsolate` (Isolating), `ResourceIsolated` (Isolated), `ResourceReverse` (Overdue payment made. Recovering the cluster), and `Abnormal`.
     */
    public $ClusterStatus;

    /**
     * @var string Cluster attributes (including a map of different cluster attributes, with attribute fields including NodeNameType (lan-ip mode and hostname mode, with lan-ip mode as default))
     */
    public $Property;

    /**
     * @var integer Number of primary nodes currently in the cluster
     */
    public $ClusterMaterNodeNum;

    /**
     * @var string ID of the image used by the cluster
Note: this field may return null, indicating that no valid value is obtained.
     */
    public $ImageId;

    /**
     * @var string Container image tag
Note: This field may return null, indicating that no valid value was found.
     */
    public $OsCustomizeType;

    /**
     * @var string Runtime environment of the cluster. Values can be `docker` or `containerd`.
Note: this field may return null, indicating that no valid value is obtained.
     */
    public $ContainerRuntime;

    /**
     * @var string Creation time
Note: this field may return null, indicating that no valid value is obtained.
     */
    public $CreatedTime;

    /**
     * @var boolean Whether Deletion Protection is enabled
Note: this field may return null, indicating that no valid value is obtained.
     */
    public $DeletionProtection;

    /**
     * @var boolean Specifies whether the cluster supports external nodes.
Note: this field may return `null`, indicating that no valid value can be obtained.
     */
    public $EnableExternalNode;

    /**
     * @var string Cluster models. It’s valid for managed clusters.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $ClusterLevel;

    /**
     * @var boolean The target cluster model for auto-upgrade
Note: this field may return null, indicating that no valid value is obtained.
     */
    public $AutoUpgradeClusterLevel;

    /**
     * @var boolean Whether to enable qGPU Sharing
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $QGPUShareEnable;

    /**
     * @var string Runtime version
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $RuntimeVersion;

    /**
     * @var integer Number of current etcd in the cluster
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $ClusterEtcdNodeNum;

    /**
     * @var string CDC Id
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $CdcId;

    /**
     * @param string $ClusterId Cluster ID
     * @param string $ClusterName Cluster name
     * @param string $ClusterDescription Cluster description
     * @param string $ClusterVersion Cluster version. The default value is 1.10.5.
     * @param string $ClusterOs Cluster operating system. centOS 7.2x86_64 or ubuntu 16.04.1 LTSx86_64. Default value: ubuntu 16.04.1 LTSx86_64
     * @param string $ClusterType Cluster type. Managed cluster: MANAGED_CLUSTER; Self-deployed cluster: INDEPENDENT_CLUSTER.
     * @param ClusterNetworkSettings $ClusterNetworkSettings Cluster network-related parameters
     * @param integer $ClusterNodeNum Current number of nodes in the cluster
     * @param integer $ProjectId ID of the project to which the cluster belongs
     * @param array $TagSpecification Tag description list.
     * @param string $ClusterStatus Cluster status. Values: `Trading` (Preparing), `Creating`, `Running`, `Deleting`, `Idling` (Idle), `Recovering`, `Scaling`, `Upgrading` (Upgrading the cluster), `WaittingForConnect` (Pending registration), `Pause` (Cluster upgrade paused), `NodeUpgrading` (Upgrading the node), `RuntimeUpgrading` (Upgrading the node runtime), `MasterScaling` (Scaling Master), `ClusterLevelUpgrading` (Adjusting cluster specification level), `ResourceIsolate` (Isolating), `ResourceIsolated` (Isolated), `ResourceReverse` (Overdue payment made. Recovering the cluster), and `Abnormal`.
     * @param string $Property Cluster attributes (including a map of different cluster attributes, with attribute fields including NodeNameType (lan-ip mode and hostname mode, with lan-ip mode as default))
     * @param integer $ClusterMaterNodeNum Number of primary nodes currently in the cluster
     * @param string $ImageId ID of the image used by the cluster
Note: this field may return null, indicating that no valid value is obtained.
     * @param string $OsCustomizeType Container image tag
Note: This field may return null, indicating that no valid value was found.
     * @param string $ContainerRuntime Runtime environment of the cluster. Values can be `docker` or `containerd`.
Note: this field may return null, indicating that no valid value is obtained.
     * @param string $CreatedTime Creation time
Note: this field may return null, indicating that no valid value is obtained.
     * @param boolean $DeletionProtection Whether Deletion Protection is enabled
Note: this field may return null, indicating that no valid value is obtained.
     * @param boolean $EnableExternalNode Specifies whether the cluster supports external nodes.
Note: this field may return `null`, indicating that no valid value can be obtained.
     * @param string $ClusterLevel Cluster models. It’s valid for managed clusters.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param boolean $AutoUpgradeClusterLevel The target cluster model for auto-upgrade
Note: this field may return null, indicating that no valid value is obtained.
     * @param boolean $QGPUShareEnable Whether to enable qGPU Sharing
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $RuntimeVersion Runtime version
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param integer $ClusterEtcdNodeNum Number of current etcd in the cluster
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $CdcId CDC Id
Note: This field may return "null", indicating that no valid value can be obtained.
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

        if (array_key_exists("ClusterDescription",$param) and $param["ClusterDescription"] !== null) {
            $this->ClusterDescription = $param["ClusterDescription"];
        }

        if (array_key_exists("ClusterVersion",$param) and $param["ClusterVersion"] !== null) {
            $this->ClusterVersion = $param["ClusterVersion"];
        }

        if (array_key_exists("ClusterOs",$param) and $param["ClusterOs"] !== null) {
            $this->ClusterOs = $param["ClusterOs"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("ClusterNetworkSettings",$param) and $param["ClusterNetworkSettings"] !== null) {
            $this->ClusterNetworkSettings = new ClusterNetworkSettings();
            $this->ClusterNetworkSettings->deserialize($param["ClusterNetworkSettings"]);
        }

        if (array_key_exists("ClusterNodeNum",$param) and $param["ClusterNodeNum"] !== null) {
            $this->ClusterNodeNum = $param["ClusterNodeNum"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("TagSpecification",$param) and $param["TagSpecification"] !== null) {
            $this->TagSpecification = [];
            foreach ($param["TagSpecification"] as $key => $value){
                $obj = new TagSpecification();
                $obj->deserialize($value);
                array_push($this->TagSpecification, $obj);
            }
        }

        if (array_key_exists("ClusterStatus",$param) and $param["ClusterStatus"] !== null) {
            $this->ClusterStatus = $param["ClusterStatus"];
        }

        if (array_key_exists("Property",$param) and $param["Property"] !== null) {
            $this->Property = $param["Property"];
        }

        if (array_key_exists("ClusterMaterNodeNum",$param) and $param["ClusterMaterNodeNum"] !== null) {
            $this->ClusterMaterNodeNum = $param["ClusterMaterNodeNum"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("OsCustomizeType",$param) and $param["OsCustomizeType"] !== null) {
            $this->OsCustomizeType = $param["OsCustomizeType"];
        }

        if (array_key_exists("ContainerRuntime",$param) and $param["ContainerRuntime"] !== null) {
            $this->ContainerRuntime = $param["ContainerRuntime"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("DeletionProtection",$param) and $param["DeletionProtection"] !== null) {
            $this->DeletionProtection = $param["DeletionProtection"];
        }

        if (array_key_exists("EnableExternalNode",$param) and $param["EnableExternalNode"] !== null) {
            $this->EnableExternalNode = $param["EnableExternalNode"];
        }

        if (array_key_exists("ClusterLevel",$param) and $param["ClusterLevel"] !== null) {
            $this->ClusterLevel = $param["ClusterLevel"];
        }

        if (array_key_exists("AutoUpgradeClusterLevel",$param) and $param["AutoUpgradeClusterLevel"] !== null) {
            $this->AutoUpgradeClusterLevel = $param["AutoUpgradeClusterLevel"];
        }

        if (array_key_exists("QGPUShareEnable",$param) and $param["QGPUShareEnable"] !== null) {
            $this->QGPUShareEnable = $param["QGPUShareEnable"];
        }

        if (array_key_exists("RuntimeVersion",$param) and $param["RuntimeVersion"] !== null) {
            $this->RuntimeVersion = $param["RuntimeVersion"];
        }

        if (array_key_exists("ClusterEtcdNodeNum",$param) and $param["ClusterEtcdNodeNum"] !== null) {
            $this->ClusterEtcdNodeNum = $param["ClusterEtcdNodeNum"];
        }

        if (array_key_exists("CdcId",$param) and $param["CdcId"] !== null) {
            $this->CdcId = $param["CdcId"];
        }
    }
}
