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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRiskDnsList request structure.
 *
 * @method integer getLimit() Obtain Number of items to be returned. It is 10 by default, and the maximum value is 100.
 * @method void setLimit(integer $Limit) Set Number of items to be returned. It is 10 by default, and the maximum value is 100.
 * @method integer getOffset() Obtain Offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0.
 * @method array getFilters() Obtain Filter criteria
<li>IpOrAlias - String - required: no - filter by host IP or alias</li>
<li>Url - String - required: no - filter by URL</li>
<li>Status - String - required: no - filter by status: 0: pending; 2: trusted; 3: untrusted</li>
<li>MergeBeginTime - String - required: no - start time of the last access</li>
<li>MergeEndTime - String - required: no - end time of the last access</li>
 * @method void setFilters(array $Filters) Set Filter criteria
<li>IpOrAlias - String - required: no - filter by host IP or alias</li>
<li>Url - String - required: no - filter by URL</li>
<li>Status - String - required: no - filter by status: 0: pending; 2: trusted; 3: untrusted</li>
<li>MergeBeginTime - String - required: no - start time of the last access</li>
<li>MergeEndTime - String - required: no - end time of the last access</li>
 * @method string getOrder() Obtain Sorting method: sort by number of requests: asc - ascending order/desc - descending order
 * @method void setOrder(string $Order) Set Sorting method: sort by number of requests: asc - ascending order/desc - descending order
 * @method string getBy() Obtain Sorting field: AccessCount - number of requests; LastTime - last request time
 * @method void setBy(string $By) Set Sorting field: AccessCount - number of requests; LastTime - last request time
 */
class DescribeRiskDnsListRequest extends AbstractModel
{
    /**
     * @var integer Number of items to be returned. It is 10 by default, and the maximum value is 100.
     */
    public $Limit;

    /**
     * @var integer Offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var array Filter criteria
<li>IpOrAlias - String - required: no - filter by host IP or alias</li>
<li>Url - String - required: no - filter by URL</li>
<li>Status - String - required: no - filter by status: 0: pending; 2: trusted; 3: untrusted</li>
<li>MergeBeginTime - String - required: no - start time of the last access</li>
<li>MergeEndTime - String - required: no - end time of the last access</li>
     */
    public $Filters;

    /**
     * @var string Sorting method: sort by number of requests: asc - ascending order/desc - descending order
     */
    public $Order;

    /**
     * @var string Sorting field: AccessCount - number of requests; LastTime - last request time
     */
    public $By;

    /**
     * @param integer $Limit Number of items to be returned. It is 10 by default, and the maximum value is 100.
     * @param integer $Offset Offset. Default value: 0.
     * @param array $Filters Filter criteria
<li>IpOrAlias - String - required: no - filter by host IP or alias</li>
<li>Url - String - required: no - filter by URL</li>
<li>Status - String - required: no - filter by status: 0: pending; 2: trusted; 3: untrusted</li>
<li>MergeBeginTime - String - required: no - start time of the last access</li>
<li>MergeEndTime - String - required: no - end time of the last access</li>
     * @param string $Order Sorting method: sort by number of requests: asc - ascending order/desc - descending order
     * @param string $By Sorting field: AccessCount - number of requests; LastTime - last request time
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
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

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }
    }
}
