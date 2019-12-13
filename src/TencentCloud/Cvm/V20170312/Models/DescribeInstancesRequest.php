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
 * @method array getInstanceIds() 获取Instance ID(s) in the format of `ins-xxxxxxxx`. For more information on the format of this parameter, see the `id.N` section of [API Introduction](https://cloud.tencent.com/document/api/213/15688). The maximum number of instances in each request is 100. You cannot specify `InstanceIds` and `Filters` at the same time.
 * @method void setInstanceIds(array $InstanceIds) 设置Instance ID(s) in the format of `ins-xxxxxxxx`. For more information on the format of this parameter, see the `id.N` section of [API Introduction](https://cloud.tencent.com/document/api/213/15688). The maximum number of instances in each request is 100. You cannot specify `InstanceIds` and `Filters` at the same time.
 * @method array getFilters() 获取Filters.
<li> `zone` - String - Optional - Filter results by availability zone.</li>
<li> `project-id` - Integer - Optional - Filter results by project ID. You can call [DescribeProject](https://cloud.tencent.com/document/api/378/4400) or log in to the [console](https://console.cloud.tencent.com/cvm/index) to view the list of existing projects. You can also create a new project by calling [AddProject](https://cloud.tencent.com/document/api/378/4398).</li>
<li> `host-id` - String - Optional - Filter results by [CDH](https://cloud.tencent.com/document/product/416) ID. [CDH](https://cloud.tencent.com/document/product/416) ID format: `host-xxxxxxxx`.</li>
</li>`vpc-id` - String - Optional - Filter results by VPC ID. VPC ID format: `vpc-xxxxxxxx`.</li>
<li> `subnet-id` - String - Optional - Filter results by subnet ID. Subnet ID format: `subnet-xxxxxxxx`.</li>
</li>`instance-id` - String - Optional - Filter results by instance ID. Instance ID format: `ins-xxxxxxxx`.</li>
</li>`security-group-id` - String - Optional - Filter results by security group ID. Security group ID format: `sg-8jlk3f3r`.</li>
</li>`instance-name` - String - Optional - Filter results by instance name.</li>
</li>`instance-charge-type` - String - Optional - Filter results by instance billing method. `POSTPAID_BY_HOUR`: pay-as-you-go | `CDHPAID`: you are only billed for [CDH](https://cloud.tencent.com/document/product/416) instances, not the CVMs running on the [CDH](https://cloud.tencent.com/document/product/416) instances.</li>
</li>`private-ip-address` - String - Optional - Filter results by the private IP address of the instance’s primary ENI.</li>
</li>`public-ip-address` - String - Optional - Filter results by the public IP address of the instance’s primary ENI, including the IP addresses automatically assigned during the instance creation and the EIPs manually associated after the instance creation.</li>
<li> `tag-key` - String - Optional - Filter results by tag key.</li>
</li>`tag-value` - String - Optional - Filter results by tag value.</li>
<li> `tag:tag-key` - String - Optional - Filter results by tag key-value pair. Replace `tag-key` with specific tag keys, as shown in example 2.</li>
Each request can have up to 10 `Filters` and 5 `Filters.Values`. You cannot specify `InstanceIds` and `Filters` at the same time.
 * @method void setFilters(array $Filters) 设置Filters.
<li> `zone` - String - Optional - Filter results by availability zone.</li>
<li> `project-id` - Integer - Optional - Filter results by project ID. You can call [DescribeProject](https://cloud.tencent.com/document/api/378/4400) or log in to the [console](https://console.cloud.tencent.com/cvm/index) to view the list of existing projects. You can also create a new project by calling [AddProject](https://cloud.tencent.com/document/api/378/4398).</li>
<li> `host-id` - String - Optional - Filter results by [CDH](https://cloud.tencent.com/document/product/416) ID. [CDH](https://cloud.tencent.com/document/product/416) ID format: `host-xxxxxxxx`.</li>
</li>`vpc-id` - String - Optional - Filter results by VPC ID. VPC ID format: `vpc-xxxxxxxx`.</li>
<li> `subnet-id` - String - Optional - Filter results by subnet ID. Subnet ID format: `subnet-xxxxxxxx`.</li>
</li>`instance-id` - String - Optional - Filter results by instance ID. Instance ID format: `ins-xxxxxxxx`.</li>
</li>`security-group-id` - String - Optional - Filter results by security group ID. Security group ID format: `sg-8jlk3f3r`.</li>
</li>`instance-name` - String - Optional - Filter results by instance name.</li>
</li>`instance-charge-type` - String - Optional - Filter results by instance billing method. `POSTPAID_BY_HOUR`: pay-as-you-go | `CDHPAID`: you are only billed for [CDH](https://cloud.tencent.com/document/product/416) instances, not the CVMs running on the [CDH](https://cloud.tencent.com/document/product/416) instances.</li>
</li>`private-ip-address` - String - Optional - Filter results by the private IP address of the instance’s primary ENI.</li>
</li>`public-ip-address` - String - Optional - Filter results by the public IP address of the instance’s primary ENI, including the IP addresses automatically assigned during the instance creation and the EIPs manually associated after the instance creation.</li>
<li> `tag-key` - String - Optional - Filter results by tag key.</li>
</li>`tag-value` - String - Optional - Filter results by tag value.</li>
<li> `tag:tag-key` - String - Optional - Filter results by tag key-value pair. Replace `tag-key` with specific tag keys, as shown in example 2.</li>
Each request can have up to 10 `Filters` and 5 `Filters.Values`. You cannot specify `InstanceIds` and `Filters` at the same time.
 * @method integer getOffset() 获取Offset; default value: 0. For more information on `Offset`, see the corresponding section in API [Introduction](https://intl.cloud.tencent.com/document/product/377).
 * @method void setOffset(integer $Offset) 设置Offset; default value: 0. For more information on `Offset`, see the corresponding section in API [Introduction](https://intl.cloud.tencent.com/document/product/377).
 * @method integer getLimit() 获取Number of results returned; default value: 20; maximum: 100. For more information on `Limit`, see the corresponding section in API [Introduction](https://intl.cloud.tencent.com/document/product/377). 
 * @method void setLimit(integer $Limit) 设置Number of results returned; default value: 20; maximum: 100. For more information on `Limit`, see the corresponding section in API [Introduction](https://intl.cloud.tencent.com/document/product/377). 
 */

/**
 *DescribeInstances request structure.
 */
class DescribeInstancesRequest extends AbstractModel
{
    /**
     * @var array Instance ID(s) in the format of `ins-xxxxxxxx`. For more information on the format of this parameter, see the `id.N` section of [API Introduction](https://cloud.tencent.com/document/api/213/15688). The maximum number of instances in each request is 100. You cannot specify `InstanceIds` and `Filters` at the same time.
     */
    public $InstanceIds;

    /**
     * @var array Filters.
<li> `zone` - String - Optional - Filter results by availability zone.</li>
<li> `project-id` - Integer - Optional - Filter results by project ID. You can call [DescribeProject](https://cloud.tencent.com/document/api/378/4400) or log in to the [console](https://console.cloud.tencent.com/cvm/index) to view the list of existing projects. You can also create a new project by calling [AddProject](https://cloud.tencent.com/document/api/378/4398).</li>
<li> `host-id` - String - Optional - Filter results by [CDH](https://cloud.tencent.com/document/product/416) ID. [CDH](https://cloud.tencent.com/document/product/416) ID format: `host-xxxxxxxx`.</li>
</li>`vpc-id` - String - Optional - Filter results by VPC ID. VPC ID format: `vpc-xxxxxxxx`.</li>
<li> `subnet-id` - String - Optional - Filter results by subnet ID. Subnet ID format: `subnet-xxxxxxxx`.</li>
</li>`instance-id` - String - Optional - Filter results by instance ID. Instance ID format: `ins-xxxxxxxx`.</li>
</li>`security-group-id` - String - Optional - Filter results by security group ID. Security group ID format: `sg-8jlk3f3r`.</li>
</li>`instance-name` - String - Optional - Filter results by instance name.</li>
</li>`instance-charge-type` - String - Optional - Filter results by instance billing method. `POSTPAID_BY_HOUR`: pay-as-you-go | `CDHPAID`: you are only billed for [CDH](https://cloud.tencent.com/document/product/416) instances, not the CVMs running on the [CDH](https://cloud.tencent.com/document/product/416) instances.</li>
</li>`private-ip-address` - String - Optional - Filter results by the private IP address of the instance’s primary ENI.</li>
</li>`public-ip-address` - String - Optional - Filter results by the public IP address of the instance’s primary ENI, including the IP addresses automatically assigned during the instance creation and the EIPs manually associated after the instance creation.</li>
<li> `tag-key` - String - Optional - Filter results by tag key.</li>
</li>`tag-value` - String - Optional - Filter results by tag value.</li>
<li> `tag:tag-key` - String - Optional - Filter results by tag key-value pair. Replace `tag-key` with specific tag keys, as shown in example 2.</li>
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
     * @param array $InstanceIds Instance ID(s) in the format of `ins-xxxxxxxx`. For more information on the format of this parameter, see the `id.N` section of [API Introduction](https://cloud.tencent.com/document/api/213/15688). The maximum number of instances in each request is 100. You cannot specify `InstanceIds` and `Filters` at the same time.
     * @param array $Filters Filters.
<li> `zone` - String - Optional - Filter results by availability zone.</li>
<li> `project-id` - Integer - Optional - Filter results by project ID. You can call [DescribeProject](https://cloud.tencent.com/document/api/378/4400) or log in to the [console](https://console.cloud.tencent.com/cvm/index) to view the list of existing projects. You can also create a new project by calling [AddProject](https://cloud.tencent.com/document/api/378/4398).</li>
<li> `host-id` - String - Optional - Filter results by [CDH](https://cloud.tencent.com/document/product/416) ID. [CDH](https://cloud.tencent.com/document/product/416) ID format: `host-xxxxxxxx`.</li>
</li>`vpc-id` - String - Optional - Filter results by VPC ID. VPC ID format: `vpc-xxxxxxxx`.</li>
<li> `subnet-id` - String - Optional - Filter results by subnet ID. Subnet ID format: `subnet-xxxxxxxx`.</li>
</li>`instance-id` - String - Optional - Filter results by instance ID. Instance ID format: `ins-xxxxxxxx`.</li>
</li>`security-group-id` - String - Optional - Filter results by security group ID. Security group ID format: `sg-8jlk3f3r`.</li>
</li>`instance-name` - String - Optional - Filter results by instance name.</li>
</li>`instance-charge-type` - String - Optional - Filter results by instance billing method. `POSTPAID_BY_HOUR`: pay-as-you-go | `CDHPAID`: you are only billed for [CDH](https://cloud.tencent.com/document/product/416) instances, not the CVMs running on the [CDH](https://cloud.tencent.com/document/product/416) instances.</li>
</li>`private-ip-address` - String - Optional - Filter results by the private IP address of the instance’s primary ENI.</li>
</li>`public-ip-address` - String - Optional - Filter results by the public IP address of the instance’s primary ENI, including the IP addresses automatically assigned during the instance creation and the EIPs manually associated after the instance creation.</li>
<li> `tag-key` - String - Optional - Filter results by tag key.</li>
</li>`tag-value` - String - Optional - Filter results by tag value.</li>
<li> `tag:tag-key` - String - Optional - Filter results by tag key-value pair. Replace `tag-key` with specific tag keys, as shown in example 2.</li>
Each request can have up to 10 `Filters` and 5 `Filters.Values`. You cannot specify `InstanceIds` and `Filters` at the same time.
     * @param integer $Offset Offset; default value: 0. For more information on `Offset`, see the corresponding section in API [Introduction](https://intl.cloud.tencent.com/document/product/377).
     * @param integer $Limit Number of results returned; default value: 20; maximum: 100. For more information on `Limit`, see the corresponding section in API [Introduction](https://intl.cloud.tencent.com/document/product/377). 
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
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
