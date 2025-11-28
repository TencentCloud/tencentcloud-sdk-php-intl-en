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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VPC information (consists of UniqVpcId and UniqSubnetId).
 *
 * @method string getVpcId() Obtain VPC information
 * @method void setVpcId(string $VpcId) Set VPC information
 * @method string getSubnetId() Obtain Subnet information.
 * @method void setSubnetId(string $SubnetId) Set Subnet information.
 */
class VpcInfo extends AbstractModel
{
    /**
     * @var string VPC information
     */
    public $VpcId;

    /**
     * @var string Subnet information.
     */
    public $SubnetId;

    /**
     * @param string $VpcId VPC information
     * @param string $SubnetId Subnet information.
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
    }
}
