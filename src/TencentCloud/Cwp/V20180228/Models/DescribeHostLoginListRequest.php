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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeHostLoginList request structure.
 *
 * @method integer getLimit() Obtain Number of items to be returned. The maximum value is 100.
 * @method void setLimit(integer $Limit) Set Number of items to be returned. The maximum value is 100.
 * @method integer getOffset() Obtain Offset, which defaults to 0
 * @method void setOffset(integer $Offset) Set Offset, which defaults to 0
 * @method array getFilters() Obtain Filter criteria
<li>Quuid - String - required: no - CVM UUID</li>
<li>Uuid - String - required: no - CWPP unique UUID</li>
<li>MachineName - String - required: no - host alias</li>
<li>Ip - String - required: no - host IP</li>
<li>InstanceID - String - required: no - host instance ID</li>
<li>SrcIp - String - required: no - filter by source IP</li>
<li>UserName - String - required: no - filter by username</li>
<li>Status - int - required: no - status filtering: 1: normal log-in; 5: whitelisted; 14: processed; 15: ignored</li>
<li>LoginTimeBegin - String - required: no - filter by modification time; start time</li>
<li>LoginTimeEnd - String - required: no - filter by modification time; end time</li>
<li>RiskLevel - int - required: no - status filtering: 0: high-risk; 1: suspicious</li>
 * @method void setFilters(array $Filters) Set Filter criteria
<li>Quuid - String - required: no - CVM UUID</li>
<li>Uuid - String - required: no - CWPP unique UUID</li>
<li>MachineName - String - required: no - host alias</li>
<li>Ip - String - required: no - host IP</li>
<li>InstanceID - String - required: no - host instance ID</li>
<li>SrcIp - String - required: no - filter by source IP</li>
<li>UserName - String - required: no - filter by username</li>
<li>Status - int - required: no - status filtering: 1: normal log-in; 5: whitelisted; 14: processed; 15: ignored</li>
<li>LoginTimeBegin - String - required: no - filter by modification time; start time</li>
<li>LoginTimeEnd - String - required: no - filter by modification time; end time</li>
<li>RiskLevel - int - required: no - status filtering: 0: high-risk; 1: suspicious</li>
 * @method string getOrder() Obtain Sorting method: sort by number of requests: asc - ascending order/desc - descending order
 * @method void setOrder(string $Order) Set Sorting method: sort by number of requests: asc - ascending order/desc - descending order
 * @method string getBy() Obtain Sorting field: LoginTime - occurrence time
 * @method void setBy(string $By) Set Sorting field: LoginTime - occurrence time
 */
class DescribeHostLoginListRequest extends AbstractModel
{
    /**
     * @var integer Number of items to be returned. The maximum value is 100.
     */
    public $Limit;

    /**
     * @var integer Offset, which defaults to 0
     */
    public $Offset;

    /**
     * @var array Filter criteria
<li>Quuid - String - required: no - CVM UUID</li>
<li>Uuid - String - required: no - CWPP unique UUID</li>
<li>MachineName - String - required: no - host alias</li>
<li>Ip - String - required: no - host IP</li>
<li>InstanceID - String - required: no - host instance ID</li>
<li>SrcIp - String - required: no - filter by source IP</li>
<li>UserName - String - required: no - filter by username</li>
<li>Status - int - required: no - status filtering: 1: normal log-in; 5: whitelisted; 14: processed; 15: ignored</li>
<li>LoginTimeBegin - String - required: no - filter by modification time; start time</li>
<li>LoginTimeEnd - String - required: no - filter by modification time; end time</li>
<li>RiskLevel - int - required: no - status filtering: 0: high-risk; 1: suspicious</li>
     */
    public $Filters;

    /**
     * @var string Sorting method: sort by number of requests: asc - ascending order/desc - descending order
     */
    public $Order;

    /**
     * @var string Sorting field: LoginTime - occurrence time
     */
    public $By;

    /**
     * @param integer $Limit Number of items to be returned. The maximum value is 100.
     * @param integer $Offset Offset, which defaults to 0
     * @param array $Filters Filter criteria
<li>Quuid - String - required: no - CVM UUID</li>
<li>Uuid - String - required: no - CWPP unique UUID</li>
<li>MachineName - String - required: no - host alias</li>
<li>Ip - String - required: no - host IP</li>
<li>InstanceID - String - required: no - host instance ID</li>
<li>SrcIp - String - required: no - filter by source IP</li>
<li>UserName - String - required: no - filter by username</li>
<li>Status - int - required: no - status filtering: 1: normal log-in; 5: whitelisted; 14: processed; 15: ignored</li>
<li>LoginTimeBegin - String - required: no - filter by modification time; start time</li>
<li>LoginTimeEnd - String - required: no - filter by modification time; end time</li>
<li>RiskLevel - int - required: no - status filtering: 0: high-risk; 1: suspicious</li>
     * @param string $Order Sorting method: sort by number of requests: asc - ascending order/desc - descending order
     * @param string $By Sorting field: LoginTime - occurrence time
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
