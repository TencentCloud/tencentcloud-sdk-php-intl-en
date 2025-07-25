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
 * AssociateNetworkAclSubnets request structure.
 *
 * @method string getNetworkAclId() Obtain Network ACL instance ID, such as `acl-12345678`.
 * @method void setNetworkAclId(string $NetworkAclId) Set Network ACL instance ID, such as `acl-12345678`.
 * @method array getSubnetIds() Obtain Array of subnet instance IDs, such as [subnet-12345678]
 * @method void setSubnetIds(array $SubnetIds) Set Array of subnet instance IDs, such as [subnet-12345678]
 */
class AssociateNetworkAclSubnetsRequest extends AbstractModel
{
    /**
     * @var string Network ACL instance ID, such as `acl-12345678`.
     */
    public $NetworkAclId;

    /**
     * @var array Array of subnet instance IDs, such as [subnet-12345678]
     */
    public $SubnetIds;

    /**
     * @param string $NetworkAclId Network ACL instance ID, such as `acl-12345678`.
     * @param array $SubnetIds Array of subnet instance IDs, such as [subnet-12345678]
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
        if (array_key_exists("NetworkAclId",$param) and $param["NetworkAclId"] !== null) {
            $this->NetworkAclId = $param["NetworkAclId"];
        }

        if (array_key_exists("SubnetIds",$param) and $param["SubnetIds"] !== null) {
            $this->SubnetIds = $param["SubnetIds"];
        }
    }
}
