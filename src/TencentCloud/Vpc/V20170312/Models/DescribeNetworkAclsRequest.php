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
 * DescribeNetworkAcls request structure.
 *
 * @method array getNetworkAclIds() Obtain Array of network ACL instance IDs, such as [acl-12345678]. Up to 100 instances are allowed for each request. This parameter does not support specifying `NetworkAclIds` and `Filters` at the same time.
 * @method void setNetworkAclIds(array $NetworkAclIds) Set Array of network ACL instance IDs, such as [acl-12345678]. Up to 100 instances are allowed for each request. This parameter does not support specifying `NetworkAclIds` and `Filters` at the same time.
 * @method array getFilters() Obtain Filter condition. `NetworkAclIds` and `Filters` cannot be specified at the same time.
<li>vpc-id - String - (Filter condition) VPC instance ID, such as vpc-12345678.</li>
<li>network-acl-id - String - (Filter condition) Network ACL instance ID, such as acl-12345678.</li>
<li>network-acl-name - String - (Filter condition) Network ACL instance name.</li>
 * @method void setFilters(array $Filters) Set Filter condition. `NetworkAclIds` and `Filters` cannot be specified at the same time.
<li>vpc-id - String - (Filter condition) VPC instance ID, such as vpc-12345678.</li>
<li>network-acl-id - String - (Filter condition) Network ACL instance ID, such as acl-12345678.</li>
<li>network-acl-name - String - (Filter condition) Network ACL instance name.</li>
 * @method integer getOffset() Obtain Offset. Default: 0.
 * @method void setOffset(integer $Offset) Set Offset. Default: 0.
 * @method integer getLimit() Obtain Returned quantity. Default: 20. Value range: 1-100.
 * @method void setLimit(integer $Limit) Set Returned quantity. Default: 20. Value range: 1-100.
 */
class DescribeNetworkAclsRequest extends AbstractModel
{
    /**
     * @var array Array of network ACL instance IDs, such as [acl-12345678]. Up to 100 instances are allowed for each request. This parameter does not support specifying `NetworkAclIds` and `Filters` at the same time.
     */
    public $NetworkAclIds;

    /**
     * @var array Filter condition. `NetworkAclIds` and `Filters` cannot be specified at the same time.
<li>vpc-id - String - (Filter condition) VPC instance ID, such as vpc-12345678.</li>
<li>network-acl-id - String - (Filter condition) Network ACL instance ID, such as acl-12345678.</li>
<li>network-acl-name - String - (Filter condition) Network ACL instance name.</li>
     */
    public $Filters;

    /**
     * @var integer Offset. Default: 0.
     */
    public $Offset;

    /**
     * @var integer Returned quantity. Default: 20. Value range: 1-100.
     */
    public $Limit;

    /**
     * @param array $NetworkAclIds Array of network ACL instance IDs, such as [acl-12345678]. Up to 100 instances are allowed for each request. This parameter does not support specifying `NetworkAclIds` and `Filters` at the same time.
     * @param array $Filters Filter condition. `NetworkAclIds` and `Filters` cannot be specified at the same time.
<li>vpc-id - String - (Filter condition) VPC instance ID, such as vpc-12345678.</li>
<li>network-acl-id - String - (Filter condition) Network ACL instance ID, such as acl-12345678.</li>
<li>network-acl-name - String - (Filter condition) Network ACL instance name.</li>
     * @param integer $Offset Offset. Default: 0.
     * @param integer $Limit Returned quantity. Default: 20. Value range: 1-100.
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
        if (array_key_exists("NetworkAclIds",$param) and $param["NetworkAclIds"] !== null) {
            $this->NetworkAclIds = $param["NetworkAclIds"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
