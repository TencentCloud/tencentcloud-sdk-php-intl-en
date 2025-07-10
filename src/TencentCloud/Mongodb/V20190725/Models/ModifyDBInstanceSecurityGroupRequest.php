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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDBInstanceSecurityGroup request structure.
 *
 * @method string getInstanceId() Obtain Instance ID. For example, cmgo-7pje****.
 * @method void setInstanceId(string $InstanceId) Set Instance ID. For example, cmgo-7pje****.
 * @method array getSecurityGroupIds() Obtain IDs of target security groups. Call the [DescribeSecurityGroup](https://intl.cloud.tencent.com/document/product/240/55675?from_cn_redirect=1) API to view IDs of specific security groups.
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set IDs of target security groups. Call the [DescribeSecurityGroup](https://intl.cloud.tencent.com/document/product/240/55675?from_cn_redirect=1) API to view IDs of specific security groups.
 */
class ModifyDBInstanceSecurityGroupRequest extends AbstractModel
{
    /**
     * @var string Instance ID. For example, cmgo-7pje****.
     */
    public $InstanceId;

    /**
     * @var array IDs of target security groups. Call the [DescribeSecurityGroup](https://intl.cloud.tencent.com/document/product/240/55675?from_cn_redirect=1) API to view IDs of specific security groups.
     */
    public $SecurityGroupIds;

    /**
     * @param string $InstanceId Instance ID. For example, cmgo-7pje****.
     * @param array $SecurityGroupIds IDs of target security groups. Call the [DescribeSecurityGroup](https://intl.cloud.tencent.com/document/product/240/55675?from_cn_redirect=1) API to view IDs of specific security groups.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }
    }
}
