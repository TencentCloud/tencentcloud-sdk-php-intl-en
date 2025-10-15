<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * proxy address configuration of the integrated cluster.
 *
 * @method string getUniqueVpcId() Obtain Specifies the ID of the VPC network it belongs to.
 * @method void setUniqueVpcId(string $UniqueVpcId) Set Specifies the ID of the VPC network it belongs to.
 * @method string getUniqueSubnetId() Obtain Subnet ID.
 * @method void setUniqueSubnetId(string $UniqueSubnetId) Set Subnet ID.
 * @method array getSecurityGroupIds() Obtain Security group id array.
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set Security group id array.
 * @method string getWeightMode() Obtain Weight mode: system-system allocation, custom-custom.
 * @method void setWeightMode(string $WeightMode) Set Weight mode: system-system allocation, custom-custom.
 * @method string getAutoAddRo() Obtain Specifies whether to automatically add a read-only instance. valid values: yes, no.
 * @method void setAutoAddRo(string $AutoAddRo) Set Specifies whether to automatically add a read-only instance. valid values: yes, no.
 * @method string getRwType() Obtain Read-Write attribute. valid values: READWRITE, READONLY.
 * @method void setRwType(string $RwType) Set Read-Write attribute. valid values: READWRITE, READONLY.
 * @method array getInstanceNameWeights() Obtain Weight information.
 * @method void setInstanceNameWeights(array $InstanceNameWeights) Set Weight information.
 */
class ProxyEndPointConfigInfo extends AbstractModel
{
    /**
     * @var string Specifies the ID of the VPC network it belongs to.
     */
    public $UniqueVpcId;

    /**
     * @var string Subnet ID.
     */
    public $UniqueSubnetId;

    /**
     * @var array Security group id array.
     */
    public $SecurityGroupIds;

    /**
     * @var string Weight mode: system-system allocation, custom-custom.
     */
    public $WeightMode;

    /**
     * @var string Specifies whether to automatically add a read-only instance. valid values: yes, no.
     */
    public $AutoAddRo;

    /**
     * @var string Read-Write attribute. valid values: READWRITE, READONLY.
     */
    public $RwType;

    /**
     * @var array Weight information.
     */
    public $InstanceNameWeights;

    /**
     * @param string $UniqueVpcId Specifies the ID of the VPC network it belongs to.
     * @param string $UniqueSubnetId Subnet ID.
     * @param array $SecurityGroupIds Security group id array.
     * @param string $WeightMode Weight mode: system-system allocation, custom-custom.
     * @param string $AutoAddRo Specifies whether to automatically add a read-only instance. valid values: yes, no.
     * @param string $RwType Read-Write attribute. valid values: READWRITE, READONLY.
     * @param array $InstanceNameWeights Weight information.
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
        if (array_key_exists("UniqueVpcId",$param) and $param["UniqueVpcId"] !== null) {
            $this->UniqueVpcId = $param["UniqueVpcId"];
        }

        if (array_key_exists("UniqueSubnetId",$param) and $param["UniqueSubnetId"] !== null) {
            $this->UniqueSubnetId = $param["UniqueSubnetId"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("WeightMode",$param) and $param["WeightMode"] !== null) {
            $this->WeightMode = $param["WeightMode"];
        }

        if (array_key_exists("AutoAddRo",$param) and $param["AutoAddRo"] !== null) {
            $this->AutoAddRo = $param["AutoAddRo"];
        }

        if (array_key_exists("RwType",$param) and $param["RwType"] !== null) {
            $this->RwType = $param["RwType"];
        }

        if (array_key_exists("InstanceNameWeights",$param) and $param["InstanceNameWeights"] !== null) {
            $this->InstanceNameWeights = [];
            foreach ($param["InstanceNameWeights"] as $key => $value){
                $obj = new InstanceNameWeight();
                $obj->deserialize($value);
                array_push($this->InstanceNameWeights, $obj);
            }
        }
    }
}
