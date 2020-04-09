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
 * @method string getVpcId() Obtain Default VpcId
 * @method void setVpcId(string $VpcId) Set Default VpcId
 * @method string getSubnetId() Obtain Default SubnetId
 * @method void setSubnetId(string $SubnetId) Set Default SubnetId
 */
class DefaultVpcSubnet extends AbstractModel
{
    /**
     * @var string Default VpcId
     */
    public $VpcId;

    /**
     * @var string Default SubnetId
     */
    public $SubnetId;

    /**
     * @param string $VpcId Default VpcId
     * @param string $SubnetId Default SubnetId
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
