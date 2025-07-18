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
 * ModifyNetworkAclAttribute request structure.
 *
 * @method string getNetworkAclId() Obtain Network ACL instance ID, such as `acl-12345678`.
 * @method void setNetworkAclId(string $NetworkAclId) Set Network ACL instance ID, such as `acl-12345678`.
 * @method string getNetworkAclName() Obtain Network ACL name, which can contain up to 60 bytes.
 * @method void setNetworkAclName(string $NetworkAclName) Set Network ACL name, which can contain up to 60 bytes.
 */
class ModifyNetworkAclAttributeRequest extends AbstractModel
{
    /**
     * @var string Network ACL instance ID, such as `acl-12345678`.
     */
    public $NetworkAclId;

    /**
     * @var string Network ACL name, which can contain up to 60 bytes.
     */
    public $NetworkAclName;

    /**
     * @param string $NetworkAclId Network ACL instance ID, such as `acl-12345678`.
     * @param string $NetworkAclName Network ACL name, which can contain up to 60 bytes.
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

        if (array_key_exists("NetworkAclName",$param) and $param["NetworkAclName"] !== null) {
            $this->NetworkAclName = $param["NetworkAclName"];
        }
    }
}
