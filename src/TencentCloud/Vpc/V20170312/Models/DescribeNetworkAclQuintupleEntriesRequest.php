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
 * DescribeNetworkAclQuintupleEntries request structure.
 *
 * @method string getNetworkAclId() Obtain Network ACL instance ID, such as `acl-12345678`.
 * @method void setNetworkAclId(string $NetworkAclId) Set Network ACL instance ID, such as `acl-12345678`.
 * @method integer getOffset() Obtain Offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0.
 * @method integer getLimit() Obtain Returned quantity. Default: 20. Value range: 1-100.
 * @method void setLimit(integer $Limit) Set Returned quantity. Default: 20. Value range: 1-100.
 * @method array getFilters() Obtain Filter condition. `HaVipIds` and `Filters` cannot be specified at the same time.
<li>`protocol` - String - Such as `TCP`</li>
<li>`description` - String - Description</li>
<li>`destination-cidr` - String - Destination CIDR block, such as `192.168.0.0/24`</li>
<li>`source-cidr` - String - Source CIDR block, such as `192.168.0.0/24`</li>
<li>`action` - String - ·Values: `ACCEPT`, `DROP`</li>
<li>`network-acl-quintuple-entry-id` - String - Unique ID of the quintuple, such as `acli45-ahnu4rv5`</li>
<li>`network-acl-direction` - String - Direction of the policy. Values: `INGRESS` or `EGRESS`.</li>
 * @method void setFilters(array $Filters) Set Filter condition. `HaVipIds` and `Filters` cannot be specified at the same time.
<li>`protocol` - String - Such as `TCP`</li>
<li>`description` - String - Description</li>
<li>`destination-cidr` - String - Destination CIDR block, such as `192.168.0.0/24`</li>
<li>`source-cidr` - String - Source CIDR block, such as `192.168.0.0/24`</li>
<li>`action` - String - ·Values: `ACCEPT`, `DROP`</li>
<li>`network-acl-quintuple-entry-id` - String - Unique ID of the quintuple, such as `acli45-ahnu4rv5`</li>
<li>`network-acl-direction` - String - Direction of the policy. Values: `INGRESS` or `EGRESS`.</li>
 */
class DescribeNetworkAclQuintupleEntriesRequest extends AbstractModel
{
    /**
     * @var string Network ACL instance ID, such as `acl-12345678`.
     */
    public $NetworkAclId;

    /**
     * @var integer Offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Returned quantity. Default: 20. Value range: 1-100.
     */
    public $Limit;

    /**
     * @var array Filter condition. `HaVipIds` and `Filters` cannot be specified at the same time.
<li>`protocol` - String - Such as `TCP`</li>
<li>`description` - String - Description</li>
<li>`destination-cidr` - String - Destination CIDR block, such as `192.168.0.0/24`</li>
<li>`source-cidr` - String - Source CIDR block, such as `192.168.0.0/24`</li>
<li>`action` - String - ·Values: `ACCEPT`, `DROP`</li>
<li>`network-acl-quintuple-entry-id` - String - Unique ID of the quintuple, such as `acli45-ahnu4rv5`</li>
<li>`network-acl-direction` - String - Direction of the policy. Values: `INGRESS` or `EGRESS`.</li>
     */
    public $Filters;

    /**
     * @param string $NetworkAclId Network ACL instance ID, such as `acl-12345678`.
     * @param integer $Offset Offset. Default value: 0.
     * @param integer $Limit Returned quantity. Default: 20. Value range: 1-100.
     * @param array $Filters Filter condition. `HaVipIds` and `Filters` cannot be specified at the same time.
<li>`protocol` - String - Such as `TCP`</li>
<li>`description` - String - Description</li>
<li>`destination-cidr` - String - Destination CIDR block, such as `192.168.0.0/24`</li>
<li>`source-cidr` - String - Source CIDR block, such as `192.168.0.0/24`</li>
<li>`action` - String - ·Values: `ACCEPT`, `DROP`</li>
<li>`network-acl-quintuple-entry-id` - String - Unique ID of the quintuple, such as `acli45-ahnu4rv5`</li>
<li>`network-acl-direction` - String - Direction of the policy. Values: `INGRESS` or `EGRESS`.</li>
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
