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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Default VPC and subnet
 *
 * @method string getVpcId() Obtain Default VPC ID
 * @method void setVpcId(string $VpcId) Set Default VPC ID
 * @method string getSubnetId() Obtain Default subnet ID
 * @method void setSubnetId(string $SubnetId) Set Default subnet ID
 * @method string getVpcName() Obtain Default VPC name
 * @method void setVpcName(string $VpcName) Set Default VPC name
 * @method string getSubnetName() Obtain Default subnet name
 * @method void setSubnetName(string $SubnetName) Set Default subnet name
 * @method string getCidrBlock() Obtain Default subnet IP range
 * @method void setCidrBlock(string $CidrBlock) Set Default subnet IP range
 */
class DefaultVpcSubnet extends AbstractModel
{
    /**
     * @var string Default VPC ID
     */
    public $VpcId;

    /**
     * @var string Default subnet ID
     */
    public $SubnetId;

    /**
     * @var string Default VPC name
     */
    public $VpcName;

    /**
     * @var string Default subnet name
     */
    public $SubnetName;

    /**
     * @var string Default subnet IP range
     */
    public $CidrBlock;

    /**
     * @param string $VpcId Default VPC ID
     * @param string $SubnetId Default subnet ID
     * @param string $VpcName Default VPC name
     * @param string $SubnetName Default subnet name
     * @param string $CidrBlock Default subnet IP range
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

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("SubnetName",$param) and $param["SubnetName"] !== null) {
            $this->SubnetName = $param["SubnetName"];
        }

        if (array_key_exists("CidrBlock",$param) and $param["CidrBlock"] !== null) {
            $this->CidrBlock = $param["CidrBlock"];
        }
    }
}
