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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AssociateSecurityGroups request structure.
 *
 * @method string getProduct() Obtain Database engine name, which is `redis` for this API.
 * @method void setProduct(string $Product) Set Database engine name, which is `redis` for this API.
 * @method string getSecurityGroupId() Obtain ID of the security group to be bound. Obtain it on the [security group](https://console.tencentcloud.com/vpc/security-group) page of the console.
 * @method void setSecurityGroupId(string $SecurityGroupId) Set ID of the security group to be bound. Obtain it on the [security group](https://console.tencentcloud.com/vpc/security-group) page of the console.
 * @method array getInstanceIds() Obtain ID of the bound instance. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list. You can specify multiple instance IDs.
 * @method void setInstanceIds(array $InstanceIds) Set ID of the bound instance. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list. You can specify multiple instance IDs.
 */
class AssociateSecurityGroupsRequest extends AbstractModel
{
    /**
     * @var string Database engine name, which is `redis` for this API.
     */
    public $Product;

    /**
     * @var string ID of the security group to be bound. Obtain it on the [security group](https://console.tencentcloud.com/vpc/security-group) page of the console.
     */
    public $SecurityGroupId;

    /**
     * @var array ID of the bound instance. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list. You can specify multiple instance IDs.
     */
    public $InstanceIds;

    /**
     * @param string $Product Database engine name, which is `redis` for this API.
     * @param string $SecurityGroupId ID of the security group to be bound. Obtain it on the [security group](https://console.tencentcloud.com/vpc/security-group) page of the console.
     * @param array $InstanceIds ID of the bound instance. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list. You can specify multiple instance IDs.
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
        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("SecurityGroupId",$param) and $param["SecurityGroupId"] !== null) {
            $this->SecurityGroupId = $param["SecurityGroupId"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }
    }
}
