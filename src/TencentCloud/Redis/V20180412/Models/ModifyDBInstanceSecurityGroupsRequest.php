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
 * ModifyDBInstanceSecurityGroups request structure.
 *
 * @method string getProduct() Obtain Database engine name, which is `redis` for this API.
 * @method void setProduct(string $Product) Set Database engine name, which is `redis` for this API.
 * @method array getSecurityGroupIds() Obtain Replaces with the new security group ID list, which is an array of one or more security group IDs.
- To configure a security group for an instance for the first time, call the API [AssociateSecurityGroups](https://www.tencentcloud.com/document/product/239/41260?from_cn_redirect=1) to bind a security group first.
- To replace the security group, obtain the security group ID on the [security group](https://console.tencentcloud.com/vpc/security-group) page of the console.

**Note:** This input parameter performs a full replacement on all existing collections but not an incremental update. To modify it, import the expected full collections.
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set Replaces with the new security group ID list, which is an array of one or more security group IDs.
- To configure a security group for an instance for the first time, call the API [AssociateSecurityGroups](https://www.tencentcloud.com/document/product/239/41260?from_cn_redirect=1) to bind a security group first.
- To replace the security group, obtain the security group ID on the [security group](https://console.tencentcloud.com/vpc/security-group) page of the console.

**Note:** This input parameter performs a full replacement on all existing collections but not an incremental update. To modify it, import the expected full collections.
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
     * @var array Replaces with the new security group ID list, which is an array of one or more security group IDs.
- To configure a security group for an instance for the first time, call the API [AssociateSecurityGroups](https://www.tencentcloud.com/document/product/239/41260?from_cn_redirect=1) to bind a security group first.
- To replace the security group, obtain the security group ID on the [security group](https://console.tencentcloud.com/vpc/security-group) page of the console.

**Note:** This input parameter performs a full replacement on all existing collections but not an incremental update. To modify it, import the expected full collections.
     */
    public $SecurityGroupIds;

    /**
     * @var string Instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
     */
    public $InstanceId;

    /**
     * @param string $Product Database engine name, which is `redis` for this API.
     * @param array $SecurityGroupIds Replaces with the new security group ID list, which is an array of one or more security group IDs.
- To configure a security group for an instance for the first time, call the API [AssociateSecurityGroups](https://www.tencentcloud.com/document/product/239/41260?from_cn_redirect=1) to bind a security group first.
- To replace the security group, obtain the security group ID on the [security group](https://console.tencentcloud.com/vpc/security-group) page of the console.

**Note:** This input parameter performs a full replacement on all existing collections but not an incremental update. To modify it, import the expected full collections.
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
