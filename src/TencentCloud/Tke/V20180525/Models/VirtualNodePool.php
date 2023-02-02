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
 * Virtual node pool
 *
 * @method string getNodePoolId() Obtain Node pool ID
 * @method void setNodePoolId(string $NodePoolId) Set Node pool ID
 * @method array getSubnetIds() Obtain List of subnets
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubnetIds(array $SubnetIds) Set List of subnets
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getName() Obtain Node pool name
 * @method void setName(string $Name) Set Node pool name
 * @method string getLifeState() Obtain Node pool lifecycle status
 * @method void setLifeState(string $LifeState) Set Node pool lifecycle status
 * @method array getLabels() Obtain Virtual node labels
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLabels(array $Labels) Set Virtual node labels
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTaints() Obtain Virtual node taint
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaints(array $Taints) Set Virtual node taint
Note: This field may return null, indicating that no valid values can be obtained.
 */
class VirtualNodePool extends AbstractModel
{
    /**
     * @var string Node pool ID
     */
    public $NodePoolId;

    /**
     * @var array List of subnets
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SubnetIds;

    /**
     * @var string Node pool name
     */
    public $Name;

    /**
     * @var string Node pool lifecycle status
     */
    public $LifeState;

    /**
     * @var array Virtual node labels
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Labels;

    /**
     * @var array Virtual node taint
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Taints;

    /**
     * @param string $NodePoolId Node pool ID
     * @param array $SubnetIds List of subnets
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Name Node pool name
     * @param string $LifeState Node pool lifecycle status
     * @param array $Labels Virtual node labels
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Taints Virtual node taint
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("NodePoolId",$param) and $param["NodePoolId"] !== null) {
            $this->NodePoolId = $param["NodePoolId"];
        }

        if (array_key_exists("SubnetIds",$param) and $param["SubnetIds"] !== null) {
            $this->SubnetIds = $param["SubnetIds"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("LifeState",$param) and $param["LifeState"] !== null) {
            $this->LifeState = $param["LifeState"];
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
    }
}
