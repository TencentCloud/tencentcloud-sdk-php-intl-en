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
 * DescribeRoutePolicyEntries request structure.
 *
 * @method array getFilters() Obtain Filter criteria. RoutePolicyEntryIds and Filters cannot be specified at the same time.
<li>route-policy-id - String - (filter condition) specifies the instance id of the route reception policy, such as rrp-f49l6u0z.</li>.
<li>cidr-block - String - (filter condition) cidr (subnet part before the mask), such as 10.0.0.0/8.</li>.
<li>priority - Integer - filter condition. specifies the priority, such as 20.</li>.
<li>gateway-type - String - (filter criteria) next hop type, such as CVM.</li>.
<li>GatewayId - String - specifies the unique id of the next hop instance, such as ccn-f49l6u0z.</li>.
<li>route-type - String - (filter condition) routing type. valid values: USER (USER route), NETD (route issued by network probe), CCN (CCN route).</li>.
<li>action - String - (filter condition) specifies the action. valid values: DROP (DROP), DISABLE (receive and DISABLE), ACCEPT (receive and enable).</li>.
<li>description - String - specifies the filter condition description, such as TEST.</li>.
<li>route-policy-item-id - String - (filter condition) specifies the entry unique id of the route reception policy, such as rrpi-dq782kw7.</li>.
 * @method void setFilters(array $Filters) Set Filter criteria. RoutePolicyEntryIds and Filters cannot be specified at the same time.
<li>route-policy-id - String - (filter condition) specifies the instance id of the route reception policy, such as rrp-f49l6u0z.</li>.
<li>cidr-block - String - (filter condition) cidr (subnet part before the mask), such as 10.0.0.0/8.</li>.
<li>priority - Integer - filter condition. specifies the priority, such as 20.</li>.
<li>gateway-type - String - (filter criteria) next hop type, such as CVM.</li>.
<li>GatewayId - String - specifies the unique id of the next hop instance, such as ccn-f49l6u0z.</li>.
<li>route-type - String - (filter condition) routing type. valid values: USER (USER route), NETD (route issued by network probe), CCN (CCN route).</li>.
<li>action - String - (filter condition) specifies the action. valid values: DROP (DROP), DISABLE (receive and DISABLE), ACCEPT (receive and enable).</li>.
<li>description - String - specifies the filter condition description, such as TEST.</li>.
<li>route-policy-item-id - String - (filter condition) specifies the entry unique id of the route reception policy, such as rrpi-dq782kw7.</li>.
 * @method integer getOffset() Obtain Offset.
 * @method void setOffset(integer $Offset) Set Offset.
 * @method integer getLimit() Obtain Number of request objects.
 * @method void setLimit(integer $Limit) Set Number of request objects.
 * @method string getOrderField() Obtain Sorting field. currently only supports the priority field.
 * @method void setOrderField(string $OrderField) Set Sorting field. currently only supports the priority field.
 * @method string getOrderDirection() Obtain Specifies the sorting order.
ASC: ascending order.
DESC: descending order.
 * @method void setOrderDirection(string $OrderDirection) Set Specifies the sorting order.
ASC: ascending order.
DESC: descending order.
 * @method array getRoutePolicyEntryIds() Obtain Specifies the routing strategy entry ID.
 * @method void setRoutePolicyEntryIds(array $RoutePolicyEntryIds) Set Specifies the routing strategy entry ID.
 */
class DescribeRoutePolicyEntriesRequest extends AbstractModel
{
    /**
     * @var array Filter criteria. RoutePolicyEntryIds and Filters cannot be specified at the same time.
<li>route-policy-id - String - (filter condition) specifies the instance id of the route reception policy, such as rrp-f49l6u0z.</li>.
<li>cidr-block - String - (filter condition) cidr (subnet part before the mask), such as 10.0.0.0/8.</li>.
<li>priority - Integer - filter condition. specifies the priority, such as 20.</li>.
<li>gateway-type - String - (filter criteria) next hop type, such as CVM.</li>.
<li>GatewayId - String - specifies the unique id of the next hop instance, such as ccn-f49l6u0z.</li>.
<li>route-type - String - (filter condition) routing type. valid values: USER (USER route), NETD (route issued by network probe), CCN (CCN route).</li>.
<li>action - String - (filter condition) specifies the action. valid values: DROP (DROP), DISABLE (receive and DISABLE), ACCEPT (receive and enable).</li>.
<li>description - String - specifies the filter condition description, such as TEST.</li>.
<li>route-policy-item-id - String - (filter condition) specifies the entry unique id of the route reception policy, such as rrpi-dq782kw7.</li>.
     */
    public $Filters;

    /**
     * @var integer Offset.
     */
    public $Offset;

    /**
     * @var integer Number of request objects.
     */
    public $Limit;

    /**
     * @var string Sorting field. currently only supports the priority field.
     */
    public $OrderField;

    /**
     * @var string Specifies the sorting order.
ASC: ascending order.
DESC: descending order.
     */
    public $OrderDirection;

    /**
     * @var array Specifies the routing strategy entry ID.
     */
    public $RoutePolicyEntryIds;

    /**
     * @param array $Filters Filter criteria. RoutePolicyEntryIds and Filters cannot be specified at the same time.
<li>route-policy-id - String - (filter condition) specifies the instance id of the route reception policy, such as rrp-f49l6u0z.</li>.
<li>cidr-block - String - (filter condition) cidr (subnet part before the mask), such as 10.0.0.0/8.</li>.
<li>priority - Integer - filter condition. specifies the priority, such as 20.</li>.
<li>gateway-type - String - (filter criteria) next hop type, such as CVM.</li>.
<li>GatewayId - String - specifies the unique id of the next hop instance, such as ccn-f49l6u0z.</li>.
<li>route-type - String - (filter condition) routing type. valid values: USER (USER route), NETD (route issued by network probe), CCN (CCN route).</li>.
<li>action - String - (filter condition) specifies the action. valid values: DROP (DROP), DISABLE (receive and DISABLE), ACCEPT (receive and enable).</li>.
<li>description - String - specifies the filter condition description, such as TEST.</li>.
<li>route-policy-item-id - String - (filter condition) specifies the entry unique id of the route reception policy, such as rrpi-dq782kw7.</li>.
     * @param integer $Offset Offset.
     * @param integer $Limit Number of request objects.
     * @param string $OrderField Sorting field. currently only supports the priority field.
     * @param string $OrderDirection Specifies the sorting order.
ASC: ascending order.
DESC: descending order.
     * @param array $RoutePolicyEntryIds Specifies the routing strategy entry ID.
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

        if (array_key_exists("OrderDirection",$param) and $param["OrderDirection"] !== null) {
            $this->OrderDirection = $param["OrderDirection"];
        }

        if (array_key_exists("RoutePolicyEntryIds",$param) and $param["RoutePolicyEntryIds"] !== null) {
            $this->RoutePolicyEntryIds = $param["RoutePolicyEntryIds"];
        }
    }
}
