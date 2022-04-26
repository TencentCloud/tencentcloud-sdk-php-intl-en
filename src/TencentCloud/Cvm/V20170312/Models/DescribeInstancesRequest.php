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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstances request structure.
 *
 * @method array getInstanceIds() Obtain Query by instance ID(s). For example, instance ID: `ins-xxxxxxxx`. For the specific format, refer to section `Ids.N` of the API [Introduction](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1). You can query up to 100 instances in each request. However, `InstanceIds` and `Filters` cannot be specified at the same time.
 * @method void setInstanceIds(array $InstanceIds) Set Query by instance ID(s). For example, instance ID: `ins-xxxxxxxx`. For the specific format, refer to section `Ids.N` of the API [Introduction](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1). You can query up to 100 instances in each request. However, `InstanceIds` and `Filters` cannot be specified at the same time.
 * @method array getFilters() Obtain Filters
<li> `zone` - String - Optional - Filter by the availability zone.</li>
<li> `project-id` - Integer - Optional - Filter by the project ID. You can query the list of created projects by calling `DescribeProject` or logging in to the [CVM console](https://console.cloud.tencent.com/cvm/index). You can also call `AddProject` to create projects. </li>
<li> `host-id` - String - Optional - Filter by the CDH instance ID. Format: `host-xxxxxxxx`.</li>
</li>`vpc-id` - String - Optional - Filter by the VPC ID. Format: `vpc-xxxxxxxx`.</li>
<li> `subnet-id` - String - Optional - Filter by the subnet ID. Format: `subnet-xxxxxxxx`.</li>
</li>`instance-id` - String - Optional - Filter by the instance ID. Format: `ins-xxxxxxxx`.</li>
</li>`security-group-id` - String - Optional - Filter by the security group ID. Format: `sg-8jlk3f3r`.</li>
</li>`instance-name` - String - Optional - Filter by the instance name.</li>
</li>`instance-charge-type` - String - Optional - Filter by the instance billing method. `POSTPAID_BY_HOUR`: pay-as-you-go | `CDHPAID`: You are only billed for [CDH](https://intl.cloud.tencent.com/document/product/416?from_cn_redirect=1) instances, not the CVMs running on the [CDH](https://intl.cloud.tencent.com/document/product/416?from_cn_redirect=1) instances.</li>
</li>`private-ip-address` - String - Optional - Filter by the private IP address of the instance's primary ENI.</li>
</li>`public-ip-address` - String - Optional - Filter by the public IP address of the instance's primary ENI, including the IP addresses automatically assigned during the instance creation and the EIPs manually associated after the instance creation.</li>
<li> `tag-key` - String - Optional - Filter by the tag key.</li>
</li>`tag-value` - String - Optional - Filter by the tag value.</li>
<li> `tag:tag-key` - String - Optional - Filter by the tag key-value pair. Replace `tag-key` with the actual tag keys. See example 2.</li>
Each request can have up to 10 `Filters` and 5 `Filters.Values`. You cannot specify `InstanceIds` and `Filters` at the same time.
 * @method void setFilters(array $Filters) Set Filters
<li> `zone` - String - Optional - Filter by the availability zone.</li>
<li> `project-id` - Integer - Optional - Filter by the project ID. You can query the list of created projects by calling `DescribeProject` or logging in to the [CVM console](https://console.cloud.tencent.com/cvm/index). You can also call `AddProject` to create projects. </li>
<li> `host-id` - String - Optional - Filter by the CDH instance ID. Format: `host-xxxxxxxx`.</li>
</li>`vpc-id` - String - Optional - Filter by the VPC ID. Format: `vpc-xxxxxxxx`.</li>
<li> `subnet-id` - String - Optional - Filter by the subnet ID. Format: `subnet-xxxxxxxx`.</li>
</li>`instance-id` - String - Optional - Filter by the instance ID. Format: `ins-xxxxxxxx`.</li>
</li>`security-group-id` - String - Optional - Filter by the security group ID. Format: `sg-8jlk3f3r`.</li>
</li>`instance-name` - String - Optional - Filter by the instance name.</li>
</li>`instance-charge-type` - String - Optional - Filter by the instance billing method. `POSTPAID_BY_HOUR`: pay-as-you-go | `CDHPAID`: You are only billed for [CDH](https://intl.cloud.tencent.com/document/product/416?from_cn_redirect=1) instances, not the CVMs running on the [CDH](https://intl.cloud.tencent.com/document/product/416?from_cn_redirect=1) instances.</li>
</li>`private-ip-address` - String - Optional - Filter by the private IP address of the instance's primary ENI.</li>
</li>`public-ip-address` - String - Optional - Filter by the public IP address of the instance's primary ENI, including the IP addresses automatically assigned during the instance creation and the EIPs manually associated after the instance creation.</li>
<li> `tag-key` - String - Optional - Filter by the tag key.</li>
</li>`tag-value` - String - Optional - Filter by the tag value.</li>
<li> `tag:tag-key` - String - Optional - Filter by the tag key-value pair. Replace `tag-key` with the actual tag keys. See example 2.</li>
Each request can have up to 10 `Filters` and 5 `Filters.Values`. You cannot specify `InstanceIds` and `Filters` at the same time.
 * @method integer getOffset() Obtain Offset; default value: 0. For more information on `Offset`, see the corresponding section in API [Introduction](https://intl.cloud.tencent.com/document/product/377).
 * @method void setOffset(integer $Offset) Set Offset; default value: 0. For more information on `Offset`, see the corresponding section in API [Introduction](https://intl.cloud.tencent.com/document/product/377).
 * @method integer getLimit() Obtain Number of results returned; default value: 20; maximum: 100. For more information on `Limit`, see the corresponding section in API [Introduction](https://intl.cloud.tencent.com/document/product/377). 
 * @method void setLimit(integer $Limit) Set Number of results returned; default value: 20; maximum: 100. For more information on `Limit`, see the corresponding section in API [Introduction](https://intl.cloud.tencent.com/document/product/377). 
 */
class DescribeInstancesRequest extends AbstractModel
{
    /**
     * @var array Query by instance ID(s). For example, instance ID: `ins-xxxxxxxx`. For the specific format, refer to section `Ids.N` of the API [Introduction](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1). You can query up to 100 instances in each request. However, `InstanceIds` and `Filters` cannot be specified at the same time.
     */
    public $InstanceIds;

    /**
     * @var array Filters
<li> `zone` - String - Optional - Filter by the availability zone.</li>
<li> `project-id` - Integer - Optional - Filter by the project ID. You can query the list of created projects by calling `DescribeProject` or logging in to the [CVM console](https://console.cloud.tencent.com/cvm/index). You can also call `AddProject` to create projects. </li>
<li> `host-id` - String - Optional - Filter by the CDH instance ID. Format: `host-xxxxxxxx`.</li>
</li>`vpc-id` - String - Optional - Filter by the VPC ID. Format: `vpc-xxxxxxxx`.</li>
<li> `subnet-id` - String - Optional - Filter by the subnet ID. Format: `subnet-xxxxxxxx`.</li>
</li>`instance-id` - String - Optional - Filter by the instance ID. Format: `ins-xxxxxxxx`.</li>
</li>`security-group-id` - String - Optional - Filter by the security group ID. Format: `sg-8jlk3f3r`.</li>
</li>`instance-name` - String - Optional - Filter by the instance name.</li>
</li>`instance-charge-type` - String - Optional - Filter by the instance billing method. `POSTPAID_BY_HOUR`: pay-as-you-go | `CDHPAID`: You are only billed for [CDH](https://intl.cloud.tencent.com/document/product/416?from_cn_redirect=1) instances, not the CVMs running on the [CDH](https://intl.cloud.tencent.com/document/product/416?from_cn_redirect=1) instances.</li>
</li>`private-ip-address` - String - Optional - Filter by the private IP address of the instance's primary ENI.</li>
</li>`public-ip-address` - String - Optional - Filter by the public IP address of the instance's primary ENI, including the IP addresses automatically assigned during the instance creation and the EIPs manually associated after the instance creation.</li>
<li> `tag-key` - String - Optional - Filter by the tag key.</li>
</li>`tag-value` - String - Optional - Filter by the tag value.</li>
<li> `tag:tag-key` - String - Optional - Filter by the tag key-value pair. Replace `tag-key` with the actual tag keys. See example 2.</li>
Each request can have up to 10 `Filters` and 5 `Filters.Values`. You cannot specify `InstanceIds` and `Filters` at the same time.
     */
    public $Filters;

    /**
     * @var integer Offset; default value: 0. For more information on `Offset`, see the corresponding section in API [Introduction](https://intl.cloud.tencent.com/document/product/377).
     */
    public $Offset;

    /**
     * @var integer Number of results returned; default value: 20; maximum: 100. For more information on `Limit`, see the corresponding section in API [Introduction](https://intl.cloud.tencent.com/document/product/377). 
     */
    public $Limit;

    /**
     * @param array $InstanceIds Query by instance ID(s). For example, instance ID: `ins-xxxxxxxx`. For the specific format, refer to section `Ids.N` of the API [Introduction](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1). You can query up to 100 instances in each request. However, `InstanceIds` and `Filters` cannot be specified at the same time.
     * @param array $Filters Filters
<li> `zone` - String - Optional - Filter by the availability zone.</li>
<li> `project-id` - Integer - Optional - Filter by the project ID. You can query the list of created projects by calling `DescribeProject` or logging in to the [CVM console](https://console.cloud.tencent.com/cvm/index). You can also call `AddProject` to create projects. </li>
<li> `host-id` - String - Optional - Filter by the CDH instance ID. Format: `host-xxxxxxxx`.</li>
</li>`vpc-id` - String - Optional - Filter by the VPC ID. Format: `vpc-xxxxxxxx`.</li>
<li> `subnet-id` - String - Optional - Filter by the subnet ID. Format: `subnet-xxxxxxxx`.</li>
</li>`instance-id` - String - Optional - Filter by the instance ID. Format: `ins-xxxxxxxx`.</li>
</li>`security-group-id` - String - Optional - Filter by the security group ID. Format: `sg-8jlk3f3r`.</li>
</li>`instance-name` - String - Optional - Filter by the instance name.</li>
</li>`instance-charge-type` - String - Optional - Filter by the instance billing method. `POSTPAID_BY_HOUR`: pay-as-you-go | `CDHPAID`: You are only billed for [CDH](https://intl.cloud.tencent.com/document/product/416?from_cn_redirect=1) instances, not the CVMs running on the [CDH](https://intl.cloud.tencent.com/document/product/416?from_cn_redirect=1) instances.</li>
</li>`private-ip-address` - String - Optional - Filter by the private IP address of the instance's primary ENI.</li>
</li>`public-ip-address` - String - Optional - Filter by the public IP address of the instance's primary ENI, including the IP addresses automatically assigned during the instance creation and the EIPs manually associated after the instance creation.</li>
<li> `tag-key` - String - Optional - Filter by the tag key.</li>
</li>`tag-value` - String - Optional - Filter by the tag value.</li>
<li> `tag:tag-key` - String - Optional - Filter by the tag key-value pair. Replace `tag-key` with the actual tag keys. See example 2.</li>
Each request can have up to 10 `Filters` and 5 `Filters.Values`. You cannot specify `InstanceIds` and `Filters` at the same time.
     * @param integer $Offset Offset; default value: 0. For more information on `Offset`, see the corresponding section in API [Introduction](https://intl.cloud.tencent.com/document/product/377).
     * @param integer $Limit Number of results returned; default value: 20; maximum: 100. For more information on `Limit`, see the corresponding section in API [Introduction](https://intl.cloud.tencent.com/document/product/377). 
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
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
