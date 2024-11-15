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
 * ModifyClusterAttribute request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method integer getProjectId() Obtain Project of the Cluster
 * @method void setProjectId(integer $ProjectId) Set Project of the Cluster
 * @method string getClusterName() Obtain Cluster name
 * @method void setClusterName(string $ClusterName) Set Cluster name
 * @method string getClusterDesc() Obtain Cluster description
 * @method void setClusterDesc(string $ClusterDesc) Set Cluster description
 * @method string getClusterLevel() Obtain Cluster specification
 * @method void setClusterLevel(string $ClusterLevel) Set Cluster specification
 * @method AutoUpgradeClusterLevel getAutoUpgradeClusterLevel() Obtain Auto-upgrades cluster specification
 * @method void setAutoUpgradeClusterLevel(AutoUpgradeClusterLevel $AutoUpgradeClusterLevel) Set Auto-upgrades cluster specification
 * @method boolean getQGPUShareEnable() Obtain Whether to enable qGPU Sharing
 * @method void setQGPUShareEnable(boolean $QGPUShareEnable) Set Whether to enable qGPU Sharing
 * @method ClusterProperty getClusterProperty() Obtain Cluster attributes
 * @method void setClusterProperty(ClusterProperty $ClusterProperty) Set Cluster attributes
 */
class ModifyClusterAttributeRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var integer Project of the Cluster
     */
    public $ProjectId;

    /**
     * @var string Cluster name
     */
    public $ClusterName;

    /**
     * @var string Cluster description
     */
    public $ClusterDesc;

    /**
     * @var string Cluster specification
     */
    public $ClusterLevel;

    /**
     * @var AutoUpgradeClusterLevel Auto-upgrades cluster specification
     */
    public $AutoUpgradeClusterLevel;

    /**
     * @var boolean Whether to enable qGPU Sharing
     */
    public $QGPUShareEnable;

    /**
     * @var ClusterProperty Cluster attributes
     */
    public $ClusterProperty;

    /**
     * @param string $ClusterId Cluster ID
     * @param integer $ProjectId Project of the Cluster
     * @param string $ClusterName Cluster name
     * @param string $ClusterDesc Cluster description
     * @param string $ClusterLevel Cluster specification
     * @param AutoUpgradeClusterLevel $AutoUpgradeClusterLevel Auto-upgrades cluster specification
     * @param boolean $QGPUShareEnable Whether to enable qGPU Sharing
     * @param ClusterProperty $ClusterProperty Cluster attributes
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

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("ClusterDesc",$param) and $param["ClusterDesc"] !== null) {
            $this->ClusterDesc = $param["ClusterDesc"];
        }

        if (array_key_exists("ClusterLevel",$param) and $param["ClusterLevel"] !== null) {
            $this->ClusterLevel = $param["ClusterLevel"];
        }

        if (array_key_exists("AutoUpgradeClusterLevel",$param) and $param["AutoUpgradeClusterLevel"] !== null) {
            $this->AutoUpgradeClusterLevel = new AutoUpgradeClusterLevel();
            $this->AutoUpgradeClusterLevel->deserialize($param["AutoUpgradeClusterLevel"]);
        }

        if (array_key_exists("QGPUShareEnable",$param) and $param["QGPUShareEnable"] !== null) {
            $this->QGPUShareEnable = $param["QGPUShareEnable"];
        }

        if (array_key_exists("ClusterProperty",$param) and $param["ClusterProperty"] !== null) {
            $this->ClusterProperty = new ClusterProperty();
            $this->ClusterProperty->deserialize($param["ClusterProperty"]);
        }
    }
}
