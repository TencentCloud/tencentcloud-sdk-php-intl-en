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
 * DescribeVpcs request structure.
 *
 * @method array getVpcIds() Obtain The VPC instance ID, such as `vpc-f49l6u0z`. Each request supports a maximum of 100 instances. `VpcIds` and `Filters` cannot be specified at the same time.
 * @method void setVpcIds(array $VpcIds) Set The VPC instance ID, such as `vpc-f49l6u0z`. Each request supports a maximum of 100 instances. `VpcIds` and `Filters` cannot be specified at the same time.
 * @method array getFilters() Obtain Filter condition. `VpcIds` and `Filters` cannot be specified at the same time.
Valid filters include:
<li>`vpc-name`: VPC instance name, which supports fuzzy search.</li>
<li>`is-default`: Indicates whether it is the default VPC</li>
<li>`vpc-id`: VPC instance ID, such as `vpc-f49l6u0z`</li>
<li>`cidr-block`: VPC CIDR block</li>
<li>`tag-key`: (Optional) tag key</li>
<li>`tag:tag-key`: (Optional) tag key-value pair. Replace the `tag-key` with a specified tag value. For its usage, refer to Example 2.</li>
  **Note:** If one filter has multiple values, the logical relationship between these values is `OR`. The logical relationship between filters is `AND`.
 * @method void setFilters(array $Filters) Set Filter condition. `VpcIds` and `Filters` cannot be specified at the same time.
Valid filters include:
<li>`vpc-name`: VPC instance name, which supports fuzzy search.</li>
<li>`is-default`: Indicates whether it is the default VPC</li>
<li>`vpc-id`: VPC instance ID, such as `vpc-f49l6u0z`</li>
<li>`cidr-block`: VPC CIDR block</li>
<li>`tag-key`: (Optional) tag key</li>
<li>`tag:tag-key`: (Optional) tag key-value pair. Replace the `tag-key` with a specified tag value. For its usage, refer to Example 2.</li>
  **Note:** If one filter has multiple values, the logical relationship between these values is `OR`. The logical relationship between filters is `AND`.
 * @method string getOffset() Obtain Offset. Default value: 0.
 * @method void setOffset(string $Offset) Set Offset. Default value: 0.
 * @method string getLimit() Obtain Number of returned results. Default value: 20. Maximum value: 100.
 * @method void setLimit(string $Limit) Set Number of returned results. Default value: 20. Maximum value: 100.
 */
class DescribeVpcsRequest extends AbstractModel
{
    /**
     * @var array The VPC instance ID, such as `vpc-f49l6u0z`. Each request supports a maximum of 100 instances. `VpcIds` and `Filters` cannot be specified at the same time.
     */
    public $VpcIds;

    /**
     * @var array Filter condition. `VpcIds` and `Filters` cannot be specified at the same time.
Valid filters include:
<li>`vpc-name`: VPC instance name, which supports fuzzy search.</li>
<li>`is-default`: Indicates whether it is the default VPC</li>
<li>`vpc-id`: VPC instance ID, such as `vpc-f49l6u0z`</li>
<li>`cidr-block`: VPC CIDR block</li>
<li>`tag-key`: (Optional) tag key</li>
<li>`tag:tag-key`: (Optional) tag key-value pair. Replace the `tag-key` with a specified tag value. For its usage, refer to Example 2.</li>
  **Note:** If one filter has multiple values, the logical relationship between these values is `OR`. The logical relationship between filters is `AND`.
     */
    public $Filters;

    /**
     * @var string Offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var string Number of returned results. Default value: 20. Maximum value: 100.
     */
    public $Limit;

    /**
     * @param array $VpcIds The VPC instance ID, such as `vpc-f49l6u0z`. Each request supports a maximum of 100 instances. `VpcIds` and `Filters` cannot be specified at the same time.
     * @param array $Filters Filter condition. `VpcIds` and `Filters` cannot be specified at the same time.
Valid filters include:
<li>`vpc-name`: VPC instance name, which supports fuzzy search.</li>
<li>`is-default`: Indicates whether it is the default VPC</li>
<li>`vpc-id`: VPC instance ID, such as `vpc-f49l6u0z`</li>
<li>`cidr-block`: VPC CIDR block</li>
<li>`tag-key`: (Optional) tag key</li>
<li>`tag:tag-key`: (Optional) tag key-value pair. Replace the `tag-key` with a specified tag value. For its usage, refer to Example 2.</li>
  **Note:** If one filter has multiple values, the logical relationship between these values is `OR`. The logical relationship between filters is `AND`.
     * @param string $Offset Offset. Default value: 0.
     * @param string $Limit Number of returned results. Default value: 20. Maximum value: 100.
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
        if (array_key_exists("VpcIds",$param) and $param["VpcIds"] !== null) {
            $this->VpcIds = $param["VpcIds"];
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
