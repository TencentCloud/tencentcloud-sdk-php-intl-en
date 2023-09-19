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
 * Information of the managed cluster model
 *
 * @method string getName() Obtain Cluster model
 * @method void setName(string $Name) Set Cluster model
 * @method string getAlias() Obtain Model name
 * @method void setAlias(string $Alias) Set Model name
 * @method integer getNodeCount() Obtain Number of nodes
 * @method void setNodeCount(integer $NodeCount) Set Number of nodes
 * @method integer getPodCount() Obtain Number of Pods
 * @method void setPodCount(integer $PodCount) Set Number of Pods
 * @method integer getConfigMapCount() Obtain Number of ConfigMap
 * @method void setConfigMapCount(integer $ConfigMapCount) Set Number of ConfigMap
 * @method integer getRSCount() Obtain Number of ReplicaSets
 * @method void setRSCount(integer $RSCount) Set Number of ReplicaSets
 * @method integer getCRDCount() Obtain Number of CRDs
 * @method void setCRDCount(integer $CRDCount) Set Number of CRDs
 * @method boolean getEnable() Obtain Whether it is enabled
 * @method void setEnable(boolean $Enable) Set Whether it is enabled
 * @method integer getOtherCount() Obtain Number of other resources
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setOtherCount(integer $OtherCount) Set Number of other resources
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class ClusterLevelAttribute extends AbstractModel
{
    /**
     * @var string Cluster model
     */
    public $Name;

    /**
     * @var string Model name
     */
    public $Alias;

    /**
     * @var integer Number of nodes
     */
    public $NodeCount;

    /**
     * @var integer Number of Pods
     */
    public $PodCount;

    /**
     * @var integer Number of ConfigMap
     */
    public $ConfigMapCount;

    /**
     * @var integer Number of ReplicaSets
     */
    public $RSCount;

    /**
     * @var integer Number of CRDs
     */
    public $CRDCount;

    /**
     * @var boolean Whether it is enabled
     */
    public $Enable;

    /**
     * @var integer Number of other resources
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $OtherCount;

    /**
     * @param string $Name Cluster model
     * @param string $Alias Model name
     * @param integer $NodeCount Number of nodes
     * @param integer $PodCount Number of Pods
     * @param integer $ConfigMapCount Number of ConfigMap
     * @param integer $RSCount Number of ReplicaSets
     * @param integer $CRDCount Number of CRDs
     * @param boolean $Enable Whether it is enabled
     * @param integer $OtherCount Number of other resources
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("NodeCount",$param) and $param["NodeCount"] !== null) {
            $this->NodeCount = $param["NodeCount"];
        }

        if (array_key_exists("PodCount",$param) and $param["PodCount"] !== null) {
            $this->PodCount = $param["PodCount"];
        }

        if (array_key_exists("ConfigMapCount",$param) and $param["ConfigMapCount"] !== null) {
            $this->ConfigMapCount = $param["ConfigMapCount"];
        }

        if (array_key_exists("RSCount",$param) and $param["RSCount"] !== null) {
            $this->RSCount = $param["RSCount"];
        }

        if (array_key_exists("CRDCount",$param) and $param["CRDCount"] !== null) {
            $this->CRDCount = $param["CRDCount"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("OtherCount",$param) and $param["OtherCount"] !== null) {
            $this->OtherCount = $param["OtherCount"];
        }
    }
}
