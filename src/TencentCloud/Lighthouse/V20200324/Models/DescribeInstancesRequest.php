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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstances request structure.
 *
 * @method array getInstanceIds() Obtain List of instance IDs. The maximum number of instances in each request is 100. You can obtain the instance IDs from the `InstanceId` field in the response of the [DescribeInstances](https://www.tencentcloud.com/document/api/1207/47573?from_cn_redirect=1) API.
 * @method void setInstanceIds(array $InstanceIds) Set List of instance IDs. The maximum number of instances in each request is 100. You can obtain the instance IDs from the `InstanceId` field in the response of the [DescribeInstances](https://www.tencentcloud.com/document/api/1207/47573?from_cn_redirect=1) API.
 * @method array getFilters() Obtain List of filters.
<li>instance-name</li>Filters by instance name.
Type: String
Required: No
<li>private-ip-address</li>Filters by the private IP of the primary ENI of the instance.
Type: String
Required: No
<li>public-ip-address</li>Filters by the public IP of the primary ENI of the instance.
Type: String
Required: No
<li>zone</li>Filters by AZ.
Type: String
Required: No
<li>instance-state</li>Filters by instance state.
Type: String
Required: No
<li>tag-key</li>Filters by tag key.
Type: String
Required: No
<li>tag-value</li>Filters by tag value.
Type: String
Required: No
<li> tag:tag-key</li>Filters by tag key-value pair. Replace tag-key with the specific tag key.
Type: String
Required: No
<li>bundle-id</li>Filters by bundle ID.
Type: String
Required: No

The maximum number of Filters per request is 10, and the maximum number of Filter.Values is 100. You cannot specify both InstanceIds and Filters at the same time.
 * @method void setFilters(array $Filters) Set List of filters.
<li>instance-name</li>Filters by instance name.
Type: String
Required: No
<li>private-ip-address</li>Filters by the private IP of the primary ENI of the instance.
Type: String
Required: No
<li>public-ip-address</li>Filters by the public IP of the primary ENI of the instance.
Type: String
Required: No
<li>zone</li>Filters by AZ.
Type: String
Required: No
<li>instance-state</li>Filters by instance state.
Type: String
Required: No
<li>tag-key</li>Filters by tag key.
Type: String
Required: No
<li>tag-value</li>Filters by tag value.
Type: String
Required: No
<li> tag:tag-key</li>Filters by tag key-value pair. Replace tag-key with the specific tag key.
Type: String
Required: No
<li>bundle-id</li>Filters by bundle ID.
Type: String
Required: No

The maximum number of Filters per request is 10, and the maximum number of Filter.Values is 100. You cannot specify both InstanceIds and Filters at the same time.
 * @method integer getOffset() Obtain Offset. Default value: 0. For more information on `Offset`, see the relevant section in the API [Introduction](https://www.tencentcloud.com/document/product/1207/47578?from_cn_redirect=1).
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0. For more information on `Offset`, see the relevant section in the API [Introduction](https://www.tencentcloud.com/document/product/1207/47578?from_cn_redirect=1).
 * @method integer getLimit() Obtain Number of returned results. Default value: 20. Maximum value: 100. For more information on `Limit`, see the relevant section in the API [Introduction](https://www.tencentcloud.com/document/product/1207/47578?from_cn_redirect=1).
 * @method void setLimit(integer $Limit) Set Number of returned results. Default value: 20. Maximum value: 100. For more information on `Limit`, see the relevant section in the API [Introduction](https://www.tencentcloud.com/document/product/1207/47578?from_cn_redirect=1).
 * @method string getOrderField() Obtain Specifies the field by which to sort. Valid values: "EXPIRED_TIME": Sorts by the expiration time of the instance. 
 If this field is not passed in, instances with the status of "pending reclamation" are returned first, and the remaining instances are returned in descending order by creation time.
 * @method void setOrderField(string $OrderField) Set Specifies the field by which to sort. Valid values: "EXPIRED_TIME": Sorts by the expiration time of the instance. 
 If this field is not passed in, instances with the status of "pending reclamation" are returned first, and the remaining instances are returned in descending order by creation time.
 * @method string getOrder() Obtain The order in which the output instance list is sorted. Valid values:
"ASC": Sorts in ascending order.
"DESC": Sorts in descending order.
By default, the list is sorted in ascending order. If this field is passed in, OrderField must be specified.
 * @method void setOrder(string $Order) Set The order in which the output instance list is sorted. Valid values:
"ASC": Sorts in ascending order.
"DESC": Sorts in descending order.
By default, the list is sorted in ascending order. If this field is passed in, OrderField must be specified.
 */
class DescribeInstancesRequest extends AbstractModel
{
    /**
     * @var array List of instance IDs. The maximum number of instances in each request is 100. You can obtain the instance IDs from the `InstanceId` field in the response of the [DescribeInstances](https://www.tencentcloud.com/document/api/1207/47573?from_cn_redirect=1) API.
     */
    public $InstanceIds;

    /**
     * @var array List of filters.
<li>instance-name</li>Filters by instance name.
Type: String
Required: No
<li>private-ip-address</li>Filters by the private IP of the primary ENI of the instance.
Type: String
Required: No
<li>public-ip-address</li>Filters by the public IP of the primary ENI of the instance.
Type: String
Required: No
<li>zone</li>Filters by AZ.
Type: String
Required: No
<li>instance-state</li>Filters by instance state.
Type: String
Required: No
<li>tag-key</li>Filters by tag key.
Type: String
Required: No
<li>tag-value</li>Filters by tag value.
Type: String
Required: No
<li> tag:tag-key</li>Filters by tag key-value pair. Replace tag-key with the specific tag key.
Type: String
Required: No
<li>bundle-id</li>Filters by bundle ID.
Type: String
Required: No

The maximum number of Filters per request is 10, and the maximum number of Filter.Values is 100. You cannot specify both InstanceIds and Filters at the same time.
     */
    public $Filters;

    /**
     * @var integer Offset. Default value: 0. For more information on `Offset`, see the relevant section in the API [Introduction](https://www.tencentcloud.com/document/product/1207/47578?from_cn_redirect=1).
     */
    public $Offset;

    /**
     * @var integer Number of returned results. Default value: 20. Maximum value: 100. For more information on `Limit`, see the relevant section in the API [Introduction](https://www.tencentcloud.com/document/product/1207/47578?from_cn_redirect=1).
     */
    public $Limit;

    /**
     * @var string Specifies the field by which to sort. Valid values: "EXPIRED_TIME": Sorts by the expiration time of the instance. 
 If this field is not passed in, instances with the status of "pending reclamation" are returned first, and the remaining instances are returned in descending order by creation time.
     */
    public $OrderField;

    /**
     * @var string The order in which the output instance list is sorted. Valid values:
"ASC": Sorts in ascending order.
"DESC": Sorts in descending order.
By default, the list is sorted in ascending order. If this field is passed in, OrderField must be specified.
     */
    public $Order;

    /**
     * @param array $InstanceIds List of instance IDs. The maximum number of instances in each request is 100. You can obtain the instance IDs from the `InstanceId` field in the response of the [DescribeInstances](https://www.tencentcloud.com/document/api/1207/47573?from_cn_redirect=1) API.
     * @param array $Filters List of filters.
<li>instance-name</li>Filters by instance name.
Type: String
Required: No
<li>private-ip-address</li>Filters by the private IP of the primary ENI of the instance.
Type: String
Required: No
<li>public-ip-address</li>Filters by the public IP of the primary ENI of the instance.
Type: String
Required: No
<li>zone</li>Filters by AZ.
Type: String
Required: No
<li>instance-state</li>Filters by instance state.
Type: String
Required: No
<li>tag-key</li>Filters by tag key.
Type: String
Required: No
<li>tag-value</li>Filters by tag value.
Type: String
Required: No
<li> tag:tag-key</li>Filters by tag key-value pair. Replace tag-key with the specific tag key.
Type: String
Required: No
<li>bundle-id</li>Filters by bundle ID.
Type: String
Required: No

The maximum number of Filters per request is 10, and the maximum number of Filter.Values is 100. You cannot specify both InstanceIds and Filters at the same time.
     * @param integer $Offset Offset. Default value: 0. For more information on `Offset`, see the relevant section in the API [Introduction](https://www.tencentcloud.com/document/product/1207/47578?from_cn_redirect=1).
     * @param integer $Limit Number of returned results. Default value: 20. Maximum value: 100. For more information on `Limit`, see the relevant section in the API [Introduction](https://www.tencentcloud.com/document/product/1207/47578?from_cn_redirect=1).
     * @param string $OrderField Specifies the field by which to sort. Valid values: "EXPIRED_TIME": Sorts by the expiration time of the instance. 
 If this field is not passed in, instances with the status of "pending reclamation" are returned first, and the remaining instances are returned in descending order by creation time.
     * @param string $Order The order in which the output instance list is sorted. Valid values:
"ASC": Sorts in ascending order.
"DESC": Sorts in descending order.
By default, the list is sorted in ascending order. If this field is passed in, OrderField must be specified.
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

        if (array_key_exists("OrderField",$param) and $param["OrderField"] !== null) {
            $this->OrderField = $param["OrderField"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }
    }
}
