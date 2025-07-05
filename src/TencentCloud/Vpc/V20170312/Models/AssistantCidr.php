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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information about the secondary CIDR of the VPC.
 *
 * @method string getVpcId() Obtain The `ID` of a `VPC` instance, such as `vpc-6v2ht8q5`.
 * @method void setVpcId(string $VpcId) Set The `ID` of a `VPC` instance, such as `vpc-6v2ht8q5`.
 * @method string getCidrBlock() Obtain The secondary CIDR, such as `172.16.0.0/16`.
 * @method void setCidrBlock(string $CidrBlock) Set The secondary CIDR, such as `172.16.0.0/16`.
 * @method integer getAssistantType() Obtain The secondary CIDR block type. 0: common secondary CIDR block. 1: container secondary CIDR block. Default: 0.
 * @method void setAssistantType(integer $AssistantType) Set The secondary CIDR block type. 0: common secondary CIDR block. 1: container secondary CIDR block. Default: 0.
 * @method array getSubnetSet() Obtain Subnets divided by the secondary CIDR.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubnetSet(array $SubnetSet) Set Subnets divided by the secondary CIDR.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class AssistantCidr extends AbstractModel
{
    /**
     * @var string The `ID` of a `VPC` instance, such as `vpc-6v2ht8q5`.
     */
    public $VpcId;

    /**
     * @var string The secondary CIDR, such as `172.16.0.0/16`.
     */
    public $CidrBlock;

    /**
     * @var integer The secondary CIDR block type. 0: common secondary CIDR block. 1: container secondary CIDR block. Default: 0.
     */
    public $AssistantType;

    /**
     * @var array Subnets divided by the secondary CIDR.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SubnetSet;

    /**
     * @param string $VpcId The `ID` of a `VPC` instance, such as `vpc-6v2ht8q5`.
     * @param string $CidrBlock The secondary CIDR, such as `172.16.0.0/16`.
     * @param integer $AssistantType The secondary CIDR block type. 0: common secondary CIDR block. 1: container secondary CIDR block. Default: 0.
     * @param array $SubnetSet Subnets divided by the secondary CIDR.
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
