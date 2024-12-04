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
 * ModifyDBInstanceSecurityGroups request structure.
 *
 * @method string getProduct() Obtain Database engine name, which is `redis` for this API.
 * @method void setProduct(string $Product) Set Database engine name, which is `redis` for this API.
 * @method array getSecurityGroupIds() Obtain Security group ID list. Replace it with a new one, which is an array of one or more security group IDs.
- To configure a security group for an instance for the first time, bind the security group through the API [AssociateSecurityGroups](https://intl.cloud.tencent.com/document/product/239/41260?from_cn_redirect=1) first.
- To replace the security group, obtain the security group ID on the [security group](https://console.tencentcloud.com/vpc/security-group) page of the console.
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set Security group ID list. Replace it with a new one, which is an array of one or more security group IDs.
- To configure a security group for an instance for the first time, bind the security group through the API [AssociateSecurityGroups](https://intl.cloud.tencent.com/document/product/239/41260?from_cn_redirect=1) first.
- To replace the security group, obtain the security group ID on the [security group](https://console.tencentcloud.com/vpc/security-group) page of the console.
 * @method string getInstanceId() Obtain Instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
 * @method void setInstanceId(string $InstanceId) Set Instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
 */
class ModifyDBInstanceSecurityGroupsRequest extends AbstractModel
{
    /**
     * @var string Database engine name, which is `redis` for this API.
     */
    public $Product;

    /**
     * @var array Security group ID list. Replace it with a new one, which is an array of one or more security group IDs.
- To configure a security group for an instance for the first time, bind the security group through the API [AssociateSecurityGroups](https://intl.cloud.tencent.com/document/product/239/41260?from_cn_redirect=1) first.
- To replace the security group, obtain the security group ID on the [security group](https://console.tencentcloud.com/vpc/security-group) page of the console.
     */
    public $SecurityGroupIds;

    /**
     * @var string Instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
     */
    public $InstanceId;

    /**
     * @param string $Product Database engine name, which is `redis` for this API.
     * @param array $SecurityGroupIds Security group ID list. Replace it with a new one, which is an array of one or more security group IDs.
- To configure a security group for an instance for the first time, bind the security group through the API [AssociateSecurityGroups](https://intl.cloud.tencent.com/document/product/239/41260?from_cn_redirect=1) first.
- To replace the security group, obtain the security group ID on the [security group](https://console.tencentcloud.com/vpc/security-group) page of the console.
     * @param string $InstanceId Instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
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

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
