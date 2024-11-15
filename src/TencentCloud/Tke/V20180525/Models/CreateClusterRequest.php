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
 * CreateCluster request structure.
 *
 * @method string getClusterType() Obtain Cluster type. Managed cluster: MANAGED_CLUSTER; self-deployed cluster: INDEPENDENT_CLUSTER.
 * @method void setClusterType(string $ClusterType) Set Cluster type. Managed cluster: MANAGED_CLUSTER; self-deployed cluster: INDEPENDENT_CLUSTER.
 * @method ClusterCIDRSettings getClusterCIDRSettings() Obtain Container networking configuration information for the cluster
 * @method void setClusterCIDRSettings(ClusterCIDRSettings $ClusterCIDRSettings) Set Container networking configuration information for the cluster
 * @method array getRunInstancesForNode() Obtain Pass-through parameter for CVM creation in the format of a JSON string. For more information, see the API for [creating a CVM instance](https://intl.cloud.tencent.com/document/product/213/15730?from_cn_redirect=1).
 * @method void setRunInstancesForNode(array $RunInstancesForNode) Set Pass-through parameter for CVM creation in the format of a JSON string. For more information, see the API for [creating a CVM instance](https://intl.cloud.tencent.com/document/product/213/15730?from_cn_redirect=1).
 * @method ClusterBasicSettings getClusterBasicSettings() Obtain Basic configuration information of the cluster
 * @method void setClusterBasicSettings(ClusterBasicSettings $ClusterBasicSettings) Set Basic configuration information of the cluster
 * @method ClusterAdvancedSettings getClusterAdvancedSettings() Obtain Advanced configuration information of the cluster
 * @method void setClusterAdvancedSettings(ClusterAdvancedSettings $ClusterAdvancedSettings) Set Advanced configuration information of the cluster
 * @method InstanceAdvancedSettings getInstanceAdvancedSettings() Obtain Advanced configuration information of the node
 * @method void setInstanceAdvancedSettings(InstanceAdvancedSettings $InstanceAdvancedSettings) Set Advanced configuration information of the node
 * @method array getExistedInstancesForNode() Obtain The configuration information for existing instances. All instances must be in the same VPC. Up to 100 instances are allowed in one VPC. Spot instances are not supported.
 * @method void setExistedInstancesForNode(array $ExistedInstancesForNode) Set The configuration information for existing instances. All instances must be in the same VPC. Up to 100 instances are allowed in one VPC. Spot instances are not supported.
 * @method array getInstanceDataDiskMountSettings() Obtain CVM type and the corresponding data disk mounting configuration information.
 * @method void setInstanceDataDiskMountSettings(array $InstanceDataDiskMountSettings) Set CVM type and the corresponding data disk mounting configuration information.
 * @method array getExtensionAddons() Obtain Information of the add-on to be installed
 * @method void setExtensionAddons(array $ExtensionAddons) Set Information of the add-on to be installed
 * @method string getCdcId() Obtain CDC Id
 * @method void setCdcId(string $CdcId) Set CDC Id
 */
class CreateClusterRequest extends AbstractModel
{
    /**
     * @var string Cluster type. Managed cluster: MANAGED_CLUSTER; self-deployed cluster: INDEPENDENT_CLUSTER.
     */
    public $ClusterType;

    /**
     * @var ClusterCIDRSettings Container networking configuration information for the cluster
     */
    public $ClusterCIDRSettings;

    /**
     * @var array Pass-through parameter for CVM creation in the format of a JSON string. For more information, see the API for [creating a CVM instance](https://intl.cloud.tencent.com/document/product/213/15730?from_cn_redirect=1).
     */
    public $RunInstancesForNode;

    /**
     * @var ClusterBasicSettings Basic configuration information of the cluster
     */
    public $ClusterBasicSettings;

    /**
     * @var ClusterAdvancedSettings Advanced configuration information of the cluster
     */
    public $ClusterAdvancedSettings;

    /**
     * @var InstanceAdvancedSettings Advanced configuration information of the node
     */
    public $InstanceAdvancedSettings;

    /**
     * @var array The configuration information for existing instances. All instances must be in the same VPC. Up to 100 instances are allowed in one VPC. Spot instances are not supported.
     */
    public $ExistedInstancesForNode;

    /**
     * @var array CVM type and the corresponding data disk mounting configuration information.
     */
    public $InstanceDataDiskMountSettings;

    /**
     * @var array Information of the add-on to be installed
     */
    public $ExtensionAddons;

    /**
     * @var string CDC Id
     */
    public $CdcId;

    /**
     * @param string $ClusterType Cluster type. Managed cluster: MANAGED_CLUSTER; self-deployed cluster: INDEPENDENT_CLUSTER.
     * @param ClusterCIDRSettings $ClusterCIDRSettings Container networking configuration information for the cluster
     * @param array $RunInstancesForNode Pass-through parameter for CVM creation in the format of a JSON string. For more information, see the API for [creating a CVM instance](https://intl.cloud.tencent.com/document/product/213/15730?from_cn_redirect=1).
     * @param ClusterBasicSettings $ClusterBasicSettings Basic configuration information of the cluster
     * @param ClusterAdvancedSettings $ClusterAdvancedSettings Advanced configuration information of the cluster
     * @param InstanceAdvancedSettings $InstanceAdvancedSettings Advanced configuration information of the node
     * @param array $ExistedInstancesForNode The configuration information for existing instances. All instances must be in the same VPC. Up to 100 instances are allowed in one VPC. Spot instances are not supported.
     * @param array $InstanceDataDiskMountSettings CVM type and the corresponding data disk mounting configuration information.
     * @param array $ExtensionAddons Information of the add-on to be installed
     * @param string $CdcId CDC Id
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
        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("ClusterCIDRSettings",$param) and $param["ClusterCIDRSettings"] !== null) {
            $this->ClusterCIDRSettings = new ClusterCIDRSettings();
            $this->ClusterCIDRSettings->deserialize($param["ClusterCIDRSettings"]);
        }

        if (array_key_exists("RunInstancesForNode",$param) and $param["RunInstancesForNode"] !== null) {
            $this->RunInstancesForNode = [];
            foreach ($param["RunInstancesForNode"] as $key => $value){
                $obj = new RunInstancesForNode();
                $obj->deserialize($value);
                array_push($this->RunInstancesForNode, $obj);
            }
        }

        if (array_key_exists("ClusterBasicSettings",$param) and $param["ClusterBasicSettings"] !== null) {
            $this->ClusterBasicSettings = new ClusterBasicSettings();
            $this->ClusterBasicSettings->deserialize($param["ClusterBasicSettings"]);
        }

        if (array_key_exists("ClusterAdvancedSettings",$param) and $param["ClusterAdvancedSettings"] !== null) {
            $this->ClusterAdvancedSettings = new ClusterAdvancedSettings();
            $this->ClusterAdvancedSettings->deserialize($param["ClusterAdvancedSettings"]);
        }

        if (array_key_exists("InstanceAdvancedSettings",$param) and $param["InstanceAdvancedSettings"] !== null) {
            $this->InstanceAdvancedSettings = new InstanceAdvancedSettings();
            $this->InstanceAdvancedSettings->deserialize($param["InstanceAdvancedSettings"]);
        }

        if (array_key_exists("ExistedInstancesForNode",$param) and $param["ExistedInstancesForNode"] !== null) {
            $this->ExistedInstancesForNode = [];
            foreach ($param["ExistedInstancesForNode"] as $key => $value){
                $obj = new ExistedInstancesForNode();
                $obj->deserialize($value);
                array_push($this->ExistedInstancesForNode, $obj);
            }
        }

        if (array_key_exists("InstanceDataDiskMountSettings",$param) and $param["InstanceDataDiskMountSettings"] !== null) {
            $this->InstanceDataDiskMountSettings = [];
            foreach ($param["InstanceDataDiskMountSettings"] as $key => $value){
                $obj = new InstanceDataDiskMountSetting();
                $obj->deserialize($value);
                array_push($this->InstanceDataDiskMountSettings, $obj);
            }
        }

        if (array_key_exists("ExtensionAddons",$param) and $param["ExtensionAddons"] !== null) {
            $this->ExtensionAddons = [];
            foreach ($param["ExtensionAddons"] as $key => $value){
                $obj = new ExtensionAddon();
                $obj->deserialize($value);
                array_push($this->ExtensionAddons, $obj);
            }
        }

        if (array_key_exists("CdcId",$param) and $param["CdcId"] !== null) {
            $this->CdcId = $param["CdcId"];
        }
    }
}
