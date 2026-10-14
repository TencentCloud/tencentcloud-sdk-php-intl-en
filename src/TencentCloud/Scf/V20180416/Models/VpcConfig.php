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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Private network parameter configuration
 *
 * @method string getVpcId() Obtain Id of the private network
 * @method void setVpcId(string $VpcId) Set Id of the private network
 * @method string getSubnetId() Obtain Subnet Id
 * @method void setSubnetId(string $SubnetId) Set Subnet Id
 */
class VpcConfig extends AbstractModel
{
    /**
     * @var string Id of the private network
     */
    public $VpcId;

    /**
     * @var string Subnet Id
     */
    public $SubnetId;

    /**
     * @param string $VpcId Id of the private network
     * @param string $SubnetId Subnet Id
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
