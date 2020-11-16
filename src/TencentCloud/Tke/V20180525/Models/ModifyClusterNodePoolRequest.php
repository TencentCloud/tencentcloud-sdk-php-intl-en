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
 * ModifyClusterNodePool request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getNodePoolId() Obtain Node pool ID
 * @method void setNodePoolId(string $NodePoolId) Set Node pool ID
 * @method string getName() Obtain Name
 * @method void setName(string $Name) Set Name
 * @method integer getMaxNodesNum() Obtain Maximum number of nodes
 * @method void setMaxNodesNum(integer $MaxNodesNum) Set Maximum number of nodes
 * @method integer getMinNodesNum() Obtain Minimum number of nodes
 * @method void setMinNodesNum(integer $MinNodesNum) Set Minimum number of nodes
 * @method array getLabels() Obtain Labels
 * @method void setLabels(array $Labels) Set Labels
 * @method array getTaints() Obtain Taints
 * @method void setTaints(array $Taints) Set Taints
 * @method boolean getEnableAutoscale() Obtain Indicates whether auto scaling is enabled.
 * @method void setEnableAutoscale(boolean $EnableAutoscale) Set Indicates whether auto scaling is enabled.
 */
class ModifyClusterNodePoolRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string Node pool ID
     */
    public $NodePoolId;

    /**
     * @var string Name
     */
    public $Name;

    /**
     * @var integer Maximum number of nodes
     */
    public $MaxNodesNum;

    /**
     * @var integer Minimum number of nodes
     */
    public $MinNodesNum;

    /**
     * @var array Labels
     */
    public $Labels;

    /**
     * @var array Taints
     */
    public $Taints;

    /**
     * @var boolean Indicates whether auto scaling is enabled.
     */
    public $EnableAutoscale;

    /**
     * @param string $ClusterId Cluster ID
     * @param string $NodePoolId Node pool ID
     * @param string $Name Name
     * @param integer $MaxNodesNum Maximum number of nodes
     * @param integer $MinNodesNum Minimum number of nodes
     * @param array $Labels Labels
     * @param array $Taints Taints
     * @param boolean $EnableAutoscale Indicates whether auto scaling is enabled.
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

        if (array_key_exists("NodePoolId",$param) and $param["NodePoolId"] !== null) {
            $this->NodePoolId = $param["NodePoolId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("MaxNodesNum",$param) and $param["MaxNodesNum"] !== null) {
            $this->MaxNodesNum = $param["MaxNodesNum"];
        }

        if (array_key_exists("MinNodesNum",$param) and $param["MinNodesNum"] !== null) {
            $this->MinNodesNum = $param["MinNodesNum"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new Label();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }

        if (array_key_exists("Taints",$param) and $param["Taints"] !== null) {
            $this->Taints = [];
            foreach ($param["Taints"] as $key => $value){
                $obj = new Taint();
                $obj->deserialize($value);
                array_push($this->Taints, $obj);
            }
        }

        if (array_key_exists("EnableAutoscale",$param) and $param["EnableAutoscale"] !== null) {
            $this->EnableAutoscale = $param["EnableAutoscale"];
        }
    }
}
