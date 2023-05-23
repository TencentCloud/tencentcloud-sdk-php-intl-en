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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstances request structure.
 *
 * @method array getInstanceIds() Obtain Instance ID list. Each request can contain up to 100 instances at a time.
 * @method void setInstanceIds(array $InstanceIds) Set Instance ID list. Each request can contain up to 100 instances at a time.
 * @method array getFilters() Obtain Filter list. 
<li>instance-name</li>Filter by the **instance name**. 
Type: String 
Required: No 
<li>private-ip-address</li>Filter by the **private IP of instance primary ENI**. 
Type: String 
Required: No 
<li>public-ip-address</li>Filter by the **public IP of instance primary ENI**. 
Type: String 
Required: No 
<li>zone</li>Filter by the availability zone. 
Type: String 
Required: No 
<li>instance-state</li>Filter by the **instance status**. 
Type: String 
Required: No 
<li>tag-key</li>Filter by the **tag key**. 
Type: String 
Required: No 
<li>tag-value</li>Filter by the **tag value**. 
Type: String 
Required: No 
<li> tag:tag-key</li>Filter by tag key-value pair. The `tag-key` should be replaced with a specific tag key. 
Type: String 
Required: No 
Each request can contain up to 10 `Filters` and 100 `Filter.Values`. You cannot specify both `InstanceIds` and `Filters` at the same time.
 * @method void setFilters(array $Filters) Set Filter list. 
<li>instance-name</li>Filter by the **instance name**. 
Type: String 
Required: No 
<li>private-ip-address</li>Filter by the **private IP of instance primary ENI**. 
Type: String 
Required: No 
<li>public-ip-address</li>Filter by the **public IP of instance primary ENI**. 
Type: String 
Required: No 
<li>zone</li>Filter by the availability zone. 
Type: String 
Required: No 
<li>instance-state</li>Filter by the **instance status**. 
Type: String 
Required: No 
<li>tag-key</li>Filter by the **tag key**. 
Type: String 
Required: No 
<li>tag-value</li>Filter by the **tag value**. 
Type: String 
Required: No 
<li> tag:tag-key</li>Filter by tag key-value pair. The `tag-key` should be replaced with a specific tag key. 
Type: String 
Required: No 
Each request can contain up to 10 `Filters` and 100 `Filter.Values`. You cannot specify both `InstanceIds` and `Filters` at the same time.
 * @method integer getOffset() Obtain Offset. Default value: 0. For more information on `Offset`, please see the relevant section in [Overview](https://intl.cloud.tencent.com/document/product/1207/47578?from_cn_redirect=1).
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0. For more information on `Offset`, please see the relevant section in [Overview](https://intl.cloud.tencent.com/document/product/1207/47578?from_cn_redirect=1).
 * @method integer getLimit() Obtain Number of returned results. Default value: 20. Maximum value: 100. For more information on `Limit`, please see the relevant section in the API [Overview](https://intl.cloud.tencent.com/document/product/1207/47578?from_cn_redirect=1).
 * @method void setLimit(integer $Limit) Set Number of returned results. Default value: 20. Maximum value: 100. For more information on `Limit`, please see the relevant section in the API [Overview](https://intl.cloud.tencent.com/document/product/1207/47578?from_cn_redirect=1).
 */
class DescribeInstancesRequest extends AbstractModel
{
    /**
     * @var array Instance ID list. Each request can contain up to 100 instances at a time.
     */
    public $InstanceIds;

    /**
     * @var array Filter list. 
<li>instance-name</li>Filter by the **instance name**. 
Type: String 
Required: No 
<li>private-ip-address</li>Filter by the **private IP of instance primary ENI**. 
Type: String 
Required: No 
<li>public-ip-address</li>Filter by the **public IP of instance primary ENI**. 
Type: String 
Required: No 
<li>zone</li>Filter by the availability zone. 
Type: String 
Required: No 
<li>instance-state</li>Filter by the **instance status**. 
Type: String 
Required: No 
<li>tag-key</li>Filter by the **tag key**. 
Type: String 
Required: No 
<li>tag-value</li>Filter by the **tag value**. 
Type: String 
Required: No 
<li> tag:tag-key</li>Filter by tag key-value pair. The `tag-key` should be replaced with a specific tag key. 
Type: String 
Required: No 
Each request can contain up to 10 `Filters` and 100 `Filter.Values`. You cannot specify both `InstanceIds` and `Filters` at the same time.
     */
    public $Filters;

    /**
     * @var integer Offset. Default value: 0. For more information on `Offset`, please see the relevant section in [Overview](https://intl.cloud.tencent.com/document/product/1207/47578?from_cn_redirect=1).
     */
    public $Offset;

    /**
     * @var integer Number of returned results. Default value: 20. Maximum value: 100. For more information on `Limit`, please see the relevant section in the API [Overview](https://intl.cloud.tencent.com/document/product/1207/47578?from_cn_redirect=1).
     */
    public $Limit;

    /**
     * @param array $InstanceIds Instance ID list. Each request can contain up to 100 instances at a time.
     * @param array $Filters Filter list. 
<li>instance-name</li>Filter by the **instance name**. 
Type: String 
Required: No 
<li>private-ip-address</li>Filter by the **private IP of instance primary ENI**. 
Type: String 
Required: No 
<li>public-ip-address</li>Filter by the **public IP of instance primary ENI**. 
Type: String 
Required: No 
<li>zone</li>Filter by the availability zone. 
Type: String 
Required: No 
<li>instance-state</li>Filter by the **instance status**. 
Type: String 
Required: No 
<li>tag-key</li>Filter by the **tag key**. 
Type: String 
Required: No 
<li>tag-value</li>Filter by the **tag value**. 
Type: String 
Required: No 
<li> tag:tag-key</li>Filter by tag key-value pair. The `tag-key` should be replaced with a specific tag key. 
Type: String 
Required: No 
Each request can contain up to 10 `Filters` and 100 `Filter.Values`. You cannot specify both `InstanceIds` and `Filters` at the same time.
     * @param integer $Offset Offset. Default value: 0. For more information on `Offset`, please see the relevant section in [Overview](https://intl.cloud.tencent.com/document/product/1207/47578?from_cn_redirect=1).
     * @param integer $Limit Number of returned results. Default value: 20. Maximum value: 100. For more information on `Limit`, please see the relevant section in the API [Overview](https://intl.cloud.tencent.com/document/product/1207/47578?from_cn_redirect=1).
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
