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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePlans request structure.
 *
 * @method array getFilters() Obtain Filter criteria: the maximum number of Filters.Values is 20. detailed filter criteria are as follows: <li>plan-type<br>  filter by <strong>package type</strong>.<br>  available types:<br>  plan-trial: trial package;<br>  plan-personal: personal plan;<br>  plan-basic: basic plan;<br>  plan-standard: standard edition plan;<br>  plan-enterprise: enterprise plan.</li> <li>plan-id<br>  filter by <strong>package id</strong>. the package id format is: edgeone-268z103ob0sx.</li> <li>area<br>  filter by <strong>acceleration region</strong>.</li> service area. available types:<br>  mainland: chinese mainland;<br>  overseas: worldwide (excluding chinese mainland);<br>  global: global (including chinese mainland). <li>status<br>  filter by <strong>status</strong>.<br>  available states:<br>  normal: normal status;<br>  expiring-soon: expiring soon;<br>  expired: expired;<br>  isolated: isolated.</li>.
 * @method void setFilters(array $Filters) Set Filter criteria: the maximum number of Filters.Values is 20. detailed filter criteria are as follows: <li>plan-type<br>  filter by <strong>package type</strong>.<br>  available types:<br>  plan-trial: trial package;<br>  plan-personal: personal plan;<br>  plan-basic: basic plan;<br>  plan-standard: standard edition plan;<br>  plan-enterprise: enterprise plan.</li> <li>plan-id<br>  filter by <strong>package id</strong>. the package id format is: edgeone-268z103ob0sx.</li> <li>area<br>  filter by <strong>acceleration region</strong>.</li> service area. available types:<br>  mainland: chinese mainland;<br>  overseas: worldwide (excluding chinese mainland);<br>  global: global (including chinese mainland). <li>status<br>  filter by <strong>status</strong>.<br>  available states:<br>  normal: normal status;<br>  expiring-soon: expiring soon;<br>  expired: expired;<br>  isolated: isolated.</li>.
 * @method string getOrder() Obtain Specifies the sorting field. valid values:.
<li>enable-time: effective time;</li>.
<Li> expire-time: expiration time.</li>use default value enable-time if not specified.
 * @method void setOrder(string $Order) Set Specifies the sorting field. valid values:.
<li>enable-time: effective time;</li>.
<Li> expire-time: expiration time.</li>use default value enable-time if not specified.
 * @method string getDirection() Obtain Sorting order. valid values:.
<Li>`Asc`: sort in ascending order</li>.
<Li>`Desc`: from the largest to smallest.</li>default value: `desc`.
 * @method void setDirection(string $Direction) Set Sorting order. valid values:.
<Li>`Asc`: sort in ascending order</li>.
<Li>`Desc`: from the largest to smallest.</li>default value: `desc`.
 * @method integer getLimit() Obtain Number limit of paginated query. Default value: 20. Maximum value: 200.
 * @method void setLimit(integer $Limit) Set Number limit of paginated query. Default value: 20. Maximum value: 200.
 * @method integer getOffset() Obtain The offset of paginated query. Default value: 0.
 * @method void setOffset(integer $Offset) Set The offset of paginated query. Default value: 0.
 */
class DescribePlansRequest extends AbstractModel
{
    /**
     * @var array Filter criteria: the maximum number of Filters.Values is 20. detailed filter criteria are as follows: <li>plan-type<br>  filter by <strong>package type</strong>.<br>  available types:<br>  plan-trial: trial package;<br>  plan-personal: personal plan;<br>  plan-basic: basic plan;<br>  plan-standard: standard edition plan;<br>  plan-enterprise: enterprise plan.</li> <li>plan-id<br>  filter by <strong>package id</strong>. the package id format is: edgeone-268z103ob0sx.</li> <li>area<br>  filter by <strong>acceleration region</strong>.</li> service area. available types:<br>  mainland: chinese mainland;<br>  overseas: worldwide (excluding chinese mainland);<br>  global: global (including chinese mainland). <li>status<br>  filter by <strong>status</strong>.<br>  available states:<br>  normal: normal status;<br>  expiring-soon: expiring soon;<br>  expired: expired;<br>  isolated: isolated.</li>.
     */
    public $Filters;

    /**
     * @var string Specifies the sorting field. valid values:.
<li>enable-time: effective time;</li>.
<Li> expire-time: expiration time.</li>use default value enable-time if not specified.
     */
    public $Order;

    /**
     * @var string Sorting order. valid values:.
<Li>`Asc`: sort in ascending order</li>.
<Li>`Desc`: from the largest to smallest.</li>default value: `desc`.
     */
    public $Direction;

    /**
     * @var integer Number limit of paginated query. Default value: 20. Maximum value: 200.
     */
    public $Limit;

    /**
     * @var integer The offset of paginated query. Default value: 0.
     */
    public $Offset;

    /**
     * @param array $Filters Filter criteria: the maximum number of Filters.Values is 20. detailed filter criteria are as follows: <li>plan-type<br>  filter by <strong>package type</strong>.<br>  available types:<br>  plan-trial: trial package;<br>  plan-personal: personal plan;<br>  plan-basic: basic plan;<br>  plan-standard: standard edition plan;<br>  plan-enterprise: enterprise plan.</li> <li>plan-id<br>  filter by <strong>package id</strong>. the package id format is: edgeone-268z103ob0sx.</li> <li>area<br>  filter by <strong>acceleration region</strong>.</li> service area. available types:<br>  mainland: chinese mainland;<br>  overseas: worldwide (excluding chinese mainland);<br>  global: global (including chinese mainland). <li>status<br>  filter by <strong>status</strong>.<br>  available states:<br>  normal: normal status;<br>  expiring-soon: expiring soon;<br>  expired: expired;<br>  isolated: isolated.</li>.
     * @param string $Order Specifies the sorting field. valid values:.
<li>enable-time: effective time;</li>.
<Li> expire-time: expiration time.</li>use default value enable-time if not specified.
     * @param string $Direction Sorting order. valid values:.
<Li>`Asc`: sort in ascending order</li>.
<Li>`Desc`: from the largest to smallest.</li>default value: `desc`.
     * @param integer $Limit Number limit of paginated query. Default value: 20. Maximum value: 200.
     * @param integer $Offset The offset of paginated query. Default value: 0.
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

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
