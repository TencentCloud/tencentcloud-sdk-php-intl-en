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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getInstanceId() 获取Instance ID
 * @method void setInstanceId(string $InstanceId) 设置Instance ID
 * @method string getOperation() 获取Operation type. changeVip: modify the VIP of an instance; changeVpc: modify the subnet of an instance; changeBaseToVpc: change from basic network to VPC
 * @method void setOperation(string $Operation) 设置Operation type. changeVip: modify the VIP of an instance; changeVpc: modify the subnet of an instance; changeBaseToVpc: change from basic network to VPC
 * @method string getVip() 获取VIP address, which is required for the `changeVip` operation. If this parameter is left blank, a random one will be assigned by default
 * @method void setVip(string $Vip) 设置VIP address, which is required for the `changeVip` operation. If this parameter is left blank, a random one will be assigned by default
 * @method string getVpcId() 获取VPC ID, which is required for `changeVpc` and `changeBaseToVpc` operations
 * @method void setVpcId(string $VpcId) 设置VPC ID, which is required for `changeVpc` and `changeBaseToVpc` operations
 * @method string getSubnetId() 获取Subnet ID, which is required for `changeVpc` and `changeBaseToVpc` operations
 * @method void setSubnetId(string $SubnetId) 设置Subnet ID, which is required for `changeVpc` and `changeBaseToVpc` operations
 */

/**
 *ModifyNetworkConfig request structure.
 */
class ModifyNetworkConfigRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Operation type. changeVip: modify the VIP of an instance; changeVpc: modify the subnet of an instance; changeBaseToVpc: change from basic network to VPC
     */
    public $Operation;

    /**
     * @var string VIP address, which is required for the `changeVip` operation. If this parameter is left blank, a random one will be assigned by default
     */
    public $Vip;

    /**
     * @var string VPC ID, which is required for `changeVpc` and `changeBaseToVpc` operations
     */
    public $VpcId;

    /**
     * @var string Subnet ID, which is required for `changeVpc` and `changeBaseToVpc` operations
     */
    public $SubnetId;
    /**
     * @param string $InstanceId Instance ID
     * @param string $Operation Operation type. changeVip: modify the VIP of an instance; changeVpc: modify the subnet of an instance; changeBaseToVpc: change from basic network to VPC
     * @param string $Vip VIP address, which is required for the `changeVip` operation. If this parameter is left blank, a random one will be assigned by default
     * @param string $VpcId VPC ID, which is required for `changeVpc` and `changeBaseToVpc` operations
     * @param string $SubnetId Subnet ID, which is required for `changeVpc` and `changeBaseToVpc` operations
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }
    }
}
