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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VPC parameters
 *
 * @method string getVpcId() Obtain The VPC ID.
 * @method void setVpcId(string $VpcId) Set The VPC ID.
 * @method string getSubnetId() Obtain The subnet ID.
 * @method void setSubnetId(string $SubnetId) Set The subnet ID.
 */
class VirtualPrivateCloud extends AbstractModel
{
    /**
     * @var string The VPC ID.
     */
    public $VpcId;

    /**
     * @var string The subnet ID.
     */
    public $SubnetId;

    /**
     * @param string $VpcId The VPC ID.
     * @param string $SubnetId The subnet ID.
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
