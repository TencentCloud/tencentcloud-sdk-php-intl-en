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
 * @method ClusterCIDRSettings getClusterCIDRSettings() Obtain Container networking configuration information for the cluster
 * @method void setClusterCIDRSettings(ClusterCIDRSettings $ClusterCIDRSettings) Set Container networking configuration information for the cluster
 * @method string getClusterType() Obtain Cluster type. Managed cluster: MANAGED_CLUSTER; self-deployed cluster: INDEPENDENT_CLUSTER.
 * @method void setClusterType(string $ClusterType) Set Cluster type. Managed cluster: MANAGED_CLUSTER; self-deployed cluster: INDEPENDENT_CLUSTER.
 * @method array getRunInstancesForNode() Obtain Pass-through parameter for CVM creation in the format of a JSON string. For more information, see the API for [creating a CVM instance](https://cloud.tencent.com/document/product/213/15730).
 * @method void setRunInstancesForNode(array $RunInstancesForNode) Set Pass-through parameter for CVM creation in the format of a JSON string. For more information, see the API for [creating a CVM instance](https://cloud.tencent.com/document/product/213/15730).
 * @method ClusterBasicSettings getClusterBasicSettings() Obtain Basic configuration information of the cluster
 * @method void setClusterBasicSettings(ClusterBasicSettings $ClusterBasicSettings) Set Basic configuration information of the cluster
 * @method ClusterAdvancedSettings getClusterAdvancedSettings() Obtain Advanced configuration information of the cluster
 * @method void setClusterAdvancedSettings(ClusterAdvancedSettings $ClusterAdvancedSettings) Set Advanced configuration information of the cluster
 * @method InstanceAdvancedSettings getInstanceAdvancedSettings() Obtain Advanced configuration information of the node
 * @method void setInstanceAdvancedSettings(InstanceAdvancedSettings $InstanceAdvancedSettings) Set Advanced configuration information of the node
 * @method array getExistedInstancesForNode() Obtain Configuration information of an existing instance
 * @method void setExistedInstancesForNode(array $ExistedInstancesForNode) Set Configuration information of an existing instance
 * @method array getInstanceDataDiskMountSettings() Obtain 
 * @method void setInstanceDataDiskMountSettings(array $InstanceDataDiskMountSettings) Set 
 */

/**
 *CreateCluster request structure.
 */
class CreateClusterRequest extends AbstractModel
{
    /**
     * @var ClusterCIDRSettings Container networking configuration information for the cluster
     */
    public $ClusterCIDRSettings;

    /**
     * @var string Cluster type. Managed cluster: MANAGED_CLUSTER; self-deployed cluster: INDEPENDENT_CLUSTER.
     */
    public $ClusterType;

    /**
     * @var array Pass-through parameter for CVM creation in the format of a JSON string. For more information, see the API for [creating a CVM instance](https://cloud.tencent.com/document/product/213/15730).
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
     * @var array Configuration information of an existing instance
     */
    public $ExistedInstancesForNode;

    /**
     * @var array 
     */
    public $InstanceDataDiskMountSettings;
    /**
     * @param ClusterCIDRSettings $ClusterCIDRSettings Container networking configuration information for the cluster
     * @param string $ClusterType Cluster type. Managed cluster: MANAGED_CLUSTER; self-deployed cluster: INDEPENDENT_CLUSTER.
     * @param array $RunInstancesForNode Pass-through parameter for CVM creation in the format of a JSON string. For more information, see the API for [creating a CVM instance](https://cloud.tencent.com/document/product/213/15730).
     * @param ClusterBasicSettings $ClusterBasicSettings Basic configuration information of the cluster
     * @param ClusterAdvancedSettings $ClusterAdvancedSettings Advanced configuration information of the cluster
     * @param InstanceAdvancedSettings $InstanceAdvancedSettings Advanced configuration information of the node
     * @param array $ExistedInstancesForNode Configuration information of an existing instance
     * @param array $InstanceDataDiskMountSettings 
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
        if (array_key_exists("ClusterCIDRSettings",$param) and $param["ClusterCIDRSettings"] !== null) {
            $this->ClusterCIDRSettings = new ClusterCIDRSettings();
            $this->ClusterCIDRSettings->deserialize($param["ClusterCIDRSettings"]);
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
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
    }
}
