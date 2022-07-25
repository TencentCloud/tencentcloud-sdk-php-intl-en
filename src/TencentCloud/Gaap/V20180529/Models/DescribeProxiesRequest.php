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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeProxies request structure.
 *
 * @method array getInstanceIds() Obtain Queries by one or multiple instance IDs. The upper limit on the number of instances for each request is 100. This parameter does not support specifying InstanceIds and Filters at the same time. It’s an old parameter, please switch to ProxyIds.
 * @method void setInstanceIds(array $InstanceIds) Set Queries by one or multiple instance IDs. The upper limit on the number of instances for each request is 100. This parameter does not support specifying InstanceIds and Filters at the same time. It’s an old parameter, please switch to ProxyIds.
 * @method integer getOffset() Obtain Offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0.
 * @method integer getLimit() Obtain Number of returned results. Default value: 20. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Number of returned results. Default value: 20. Maximum value: 100.
 * @method array getFilters() Obtain Filters   
The upper limit on Filters for each request is 10, and the upper limit on Filter.Values is 5. This parameter does not support specifying InstanceIds and Filters at the same time. 
ProjectId - String - Required: No - Filter by a project ID.   
AccessRegion - String - Required: No - Filter by an access region.    
RealServerRegion - String - Required: No - Filter by an origin server region.
GroupId - String - Required: No - Filter by a connection group ID.
IPAddressVersion - String - Required: No - Filter by IP version.
PackageType - String - Required: No - Filter by package type of connection groups.
 * @method void setFilters(array $Filters) Set Filters   
The upper limit on Filters for each request is 10, and the upper limit on Filter.Values is 5. This parameter does not support specifying InstanceIds and Filters at the same time. 
ProjectId - String - Required: No - Filter by a project ID.   
AccessRegion - String - Required: No - Filter by an access region.    
RealServerRegion - String - Required: No - Filter by an origin server region.
GroupId - String - Required: No - Filter by a connection group ID.
IPAddressVersion - String - Required: No - Filter by IP version.
PackageType - String - Required: No - Filter by package type of connection groups.
 * @method array getProxyIds() Obtain Queries by one or multiple instance IDs. The upper limit on the number of instances for each request is 100. This parameter does not support specifying InstanceIds and Filters at the same time. It’s a new parameter, and replaces InstanceIds.
 * @method void setProxyIds(array $ProxyIds) Set Queries by one or multiple instance IDs. The upper limit on the number of instances for each request is 100. This parameter does not support specifying InstanceIds and Filters at the same time. It’s a new parameter, and replaces InstanceIds.
 * @method array getTagSet() Obtain Tag list. If this field exists, the list of the resources with the tag will be pulled.
It supports up to 5 tags. If there are two or more tags, the connections tagged any of them will be pulled.
 * @method void setTagSet(array $TagSet) Set Tag list. If this field exists, the list of the resources with the tag will be pulled.
It supports up to 5 tags. If there are two or more tags, the connections tagged any of them will be pulled.
 * @method integer getIndependent() Obtain When this field is 1, only not-grouped connections are pulled.
When this field is 0, only grouped connections are pulled.
When this field does not exist, all connections are pulled, including both not-grouped and grouped connections.
 * @method void setIndependent(integer $Independent) Set When this field is 1, only not-grouped connections are pulled.
When this field is 0, only grouped connections are pulled.
When this field does not exist, all connections are pulled, including both not-grouped and grouped connections.
 * @method string getOrder() Obtain Specifies how connections are listed. Valid values:
`asc`: Ascending order
`desc`: Descending order
Default: `desc`
 * @method void setOrder(string $Order) Set Specifies how connections are listed. Valid values:
`asc`: Ascending order
`desc`: Descending order
Default: `desc`
 * @method string getOrderField() Obtain Sorting field. Valid values:
`create_time`: Sort by creation time
`proxy_id`: Sort by connection ID
`bandwidth`:Sort by bandwidth limit
`concurrent_connections`: Sort by number of concurrent connections
Default: `create_time`
 * @method void setOrderField(string $OrderField) Set Sorting field. Valid values:
`create_time`: Sort by creation time
`proxy_id`: Sort by connection ID
`bandwidth`:Sort by bandwidth limit
`concurrent_connections`: Sort by number of concurrent connections
Default: `create_time`
 */
class DescribeProxiesRequest extends AbstractModel
{
    /**
     * @var array Queries by one or multiple instance IDs. The upper limit on the number of instances for each request is 100. This parameter does not support specifying InstanceIds and Filters at the same time. It’s an old parameter, please switch to ProxyIds.
     */
    public $InstanceIds;

    /**
     * @var integer Offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Number of returned results. Default value: 20. Maximum value: 100.
     */
    public $Limit;

    /**
     * @var array Filters   
The upper limit on Filters for each request is 10, and the upper limit on Filter.Values is 5. This parameter does not support specifying InstanceIds and Filters at the same time. 
ProjectId - String - Required: No - Filter by a project ID.   
AccessRegion - String - Required: No - Filter by an access region.    
RealServerRegion - String - Required: No - Filter by an origin server region.
GroupId - String - Required: No - Filter by a connection group ID.
IPAddressVersion - String - Required: No - Filter by IP version.
PackageType - String - Required: No - Filter by package type of connection groups.
     */
    public $Filters;

    /**
     * @var array Queries by one or multiple instance IDs. The upper limit on the number of instances for each request is 100. This parameter does not support specifying InstanceIds and Filters at the same time. It’s a new parameter, and replaces InstanceIds.
     */
    public $ProxyIds;

    /**
     * @var array Tag list. If this field exists, the list of the resources with the tag will be pulled.
It supports up to 5 tags. If there are two or more tags, the connections tagged any of them will be pulled.
     */
    public $TagSet;

    /**
     * @var integer When this field is 1, only not-grouped connections are pulled.
When this field is 0, only grouped connections are pulled.
When this field does not exist, all connections are pulled, including both not-grouped and grouped connections.
     */
    public $Independent;

    /**
     * @var string Specifies how connections are listed. Valid values:
`asc`: Ascending order
`desc`: Descending order
Default: `desc`
     */
    public $Order;

    /**
     * @var string Sorting field. Valid values:
`create_time`: Sort by creation time
`proxy_id`: Sort by connection ID
`bandwidth`:Sort by bandwidth limit
`concurrent_connections`: Sort by number of concurrent connections
Default: `create_time`
     */
    public $OrderField;

    /**
     * @param array $InstanceIds Queries by one or multiple instance IDs. The upper limit on the number of instances for each request is 100. This parameter does not support specifying InstanceIds and Filters at the same time. It’s an old parameter, please switch to ProxyIds.
     * @param integer $Offset Offset. Default value: 0.
     * @param integer $Limit Number of returned results. Default value: 20. Maximum value: 100.
     * @param array $Filters Filters   
The upper limit on Filters for each request is 10, and the upper limit on Filter.Values is 5. This parameter does not support specifying InstanceIds and Filters at the same time. 
ProjectId - String - Required: No - Filter by a project ID.   
AccessRegion - String - Required: No - Filter by an access region.    
RealServerRegion - String - Required: No - Filter by an origin server region.
GroupId - String - Required: No - Filter by a connection group ID.
IPAddressVersion - String - Required: No - Filter by IP version.
PackageType - String - Required: No - Filter by package type of connection groups.
     * @param array $ProxyIds Queries by one or multiple instance IDs. The upper limit on the number of instances for each request is 100. This parameter does not support specifying InstanceIds and Filters at the same time. It’s a new parameter, and replaces InstanceIds.
     * @param array $TagSet Tag list. If this field exists, the list of the resources with the tag will be pulled.
It supports up to 5 tags. If there are two or more tags, the connections tagged any of them will be pulled.
     * @param integer $Independent When this field is 1, only not-grouped connections are pulled.
When this field is 0, only grouped connections are pulled.
When this field does not exist, all connections are pulled, including both not-grouped and grouped connections.
     * @param string $Order Specifies how connections are listed. Valid values:
`asc`: Ascending order
`desc`: Descending order
Default: `desc`
     * @param string $OrderField Sorting field. Valid values:
`create_time`: Sort by creation time
`proxy_id`: Sort by connection ID
`bandwidth`:Sort by bandwidth limit
`concurrent_connections`: Sort by number of concurrent connections
Default: `create_time`
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

        if (array_key_exists("ProxyIds",$param) and $param["ProxyIds"] !== null) {
            $this->ProxyIds = $param["ProxyIds"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new TagPair();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }

        if (array_key_exists("Independent",$param) and $param["Independent"] !== null) {
            $this->Independent = $param["Independent"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("OrderField",$param) and $param["OrderField"] !== null) {
            $this->OrderField = $param["OrderField"];
        }
    }
}
