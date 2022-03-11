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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Secondary CIDR information of the VPC.
 *
 * @method string getVpcId() Obtain VPC instance ID, such as `vpc-6v2ht8q5`
 * @method void setVpcId(string $VpcId) Set VPC instance ID, such as `vpc-6v2ht8q5`
 * @method string getCidrBlock() Obtain Secondary CIDR, such as `172.16.0.0/16`
 * @method void setCidrBlock(string $CidrBlock) Set Secondary CIDR, such as `172.16.0.0/16`
 * @method integer getAssistantType() Obtain Secondary CIDR block type. 0: general secondary CIDR block; 1: container secondary CIDR block. Default value: 0.
 * @method void setAssistantType(integer $AssistantType) Set Secondary CIDR block type. 0: general secondary CIDR block; 1: container secondary CIDR block. Default value: 0.
 * @method array getSubnetSet() Obtain Subnets divided by the secondary CIDR block.
Note: this field may return null, indicating that no valid values can be obtained.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSubnetSet(array $SubnetSet) Set Subnets divided by the secondary CIDR block.
Note: this field may return null, indicating that no valid values can be obtained.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class AssistantCidr extends AbstractModel
{
    /**
     * @var string VPC instance ID, such as `vpc-6v2ht8q5`
     */
    public $VpcId;

    /**
     * @var string Secondary CIDR, such as `172.16.0.0/16`
     */
    public $CidrBlock;

    /**
     * @var integer Secondary CIDR block type. 0: general secondary CIDR block; 1: container secondary CIDR block. Default value: 0.
     */
    public $AssistantType;

    /**
     * @var array Subnets divided by the secondary CIDR block.
Note: this field may return null, indicating that no valid values can be obtained.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SubnetSet;

    /**
     * @param string $VpcId VPC instance ID, such as `vpc-6v2ht8q5`
     * @param string $CidrBlock Secondary CIDR, such as `172.16.0.0/16`
     * @param integer $AssistantType Secondary CIDR block type. 0: general secondary CIDR block; 1: container secondary CIDR block. Default value: 0.
     * @param array $SubnetSet Subnets divided by the secondary CIDR block.
Note: this field may return null, indicating that no valid values can be obtained.
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("CidrBlock",$param) and $param["CidrBlock"] !== null) {
            $this->CidrBlock = $param["CidrBlock"];
        }

        if (array_key_exists("AssistantType",$param) and $param["AssistantType"] !== null) {
            $this->AssistantType = $param["AssistantType"];
        }

        if (array_key_exists("SubnetSet",$param) and $param["SubnetSet"] !== null) {
            $this->SubnetSet = [];
            foreach ($param["SubnetSet"] as $key => $value){
                $obj = new Subnet();
                $obj->deserialize($value);
                array_push($this->SubnetSet, $obj);
            }
        }
    }
}
