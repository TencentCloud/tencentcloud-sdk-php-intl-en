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
 * DescribeVpcs request structure.
 *
 * @method array getVpcIds() Obtain The VPC instance ID, such as `vpc-f49l6u0z`. Each request supports a maximum of 100 instances. `VpcIds` and `Filters` cannot be specified at the same time.
 * @method void setVpcIds(array $VpcIds) Set The VPC instance ID, such as `vpc-f49l6u0z`. Each request supports a maximum of 100 instances. `VpcIds` and `Filters` cannot be specified at the same time.
 * @method array getFilters() Obtain Filter condition. `VpcIds` and `Filters` cannot be specified at the same time.
<li>vpc-name - String - (Filter condition) VPC instance name.</li>
<li>is-default - String - (Filter condition) Indicates whether it is the default VPC.</li>
<li>vpc-id - String - (Filter condition) VPC instance ID, such as `vpc-f49l6u0z`.</li>
<li>cidr-block - String - (Filter condition) VPC CIDR.</li>
<li>tag-key - String - Required: No - (Filter condition) Filter by tag key.</li>
<li>tag:tag-key - String - Required: No - (Filter condition) Filter by tag key-value pair. The tag-key is replaced with the specific tag key. For usage, refer to case 2.</li>
 * @method void setFilters(array $Filters) Set Filter condition. `VpcIds` and `Filters` cannot be specified at the same time.
<li>vpc-name - String - (Filter condition) VPC instance name.</li>
<li>is-default - String - (Filter condition) Indicates whether it is the default VPC.</li>
<li>vpc-id - String - (Filter condition) VPC instance ID, such as `vpc-f49l6u0z`.</li>
<li>cidr-block - String - (Filter condition) VPC CIDR.</li>
<li>tag-key - String - Required: No - (Filter condition) Filter by tag key.</li>
<li>tag:tag-key - String - Required: No - (Filter condition) Filter by tag key-value pair. The tag-key is replaced with the specific tag key. For usage, refer to case 2.</li>
 * @method string getOffset() Obtain Offset
 * @method void setOffset(string $Offset) Set Offset
 * @method string getLimit() Obtain The returned quantity
 * @method void setLimit(string $Limit) Set The returned quantity
 */
class DescribeVpcsRequest extends AbstractModel
{
    /**
     * @var array The VPC instance ID, such as `vpc-f49l6u0z`. Each request supports a maximum of 100 instances. `VpcIds` and `Filters` cannot be specified at the same time.
     */
    public $VpcIds;

    /**
     * @var array Filter condition. `VpcIds` and `Filters` cannot be specified at the same time.
<li>vpc-name - String - (Filter condition) VPC instance name.</li>
<li>is-default - String - (Filter condition) Indicates whether it is the default VPC.</li>
<li>vpc-id - String - (Filter condition) VPC instance ID, such as `vpc-f49l6u0z`.</li>
<li>cidr-block - String - (Filter condition) VPC CIDR.</li>
<li>tag-key - String - Required: No - (Filter condition) Filter by tag key.</li>
<li>tag:tag-key - String - Required: No - (Filter condition) Filter by tag key-value pair. The tag-key is replaced with the specific tag key. For usage, refer to case 2.</li>
     */
    public $Filters;

    /**
     * @var string Offset
     */
    public $Offset;

    /**
     * @var string The returned quantity
     */
    public $Limit;

    /**
     * @param array $VpcIds The VPC instance ID, such as `vpc-f49l6u0z`. Each request supports a maximum of 100 instances. `VpcIds` and `Filters` cannot be specified at the same time.
     * @param array $Filters Filter condition. `VpcIds` and `Filters` cannot be specified at the same time.
<li>vpc-name - String - (Filter condition) VPC instance name.</li>
<li>is-default - String - (Filter condition) Indicates whether it is the default VPC.</li>
<li>vpc-id - String - (Filter condition) VPC instance ID, such as `vpc-f49l6u0z`.</li>
<li>cidr-block - String - (Filter condition) VPC CIDR.</li>
<li>tag-key - String - Required: No - (Filter condition) Filter by tag key.</li>
<li>tag:tag-key - String - Required: No - (Filter condition) Filter by tag key-value pair. The tag-key is replaced with the specific tag key. For usage, refer to case 2.</li>
     * @param string $Offset Offset
     * @param string $Limit The returned quantity
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
