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
 * DescribeBashEventsNew request structure.
 *
 * @method integer getLimit() Obtain Quantity of returns. It is 10 by default, and the maximum value is 100.
 * @method void setLimit(integer $Limit) Set Quantity of returns. It is 10 by default, and the maximum value is 100.
 * @method array getFilters() Obtain Filter criteria
<li>HostName - String - required: no - host name</li>
<li>Hostip - String - required: no - host's private IP address</li>
<li>HostIp - String - required: no - host's private IP address</li>
<li>RuleCategory - Int - required: no - policy type (all types or a single type): 0: system; 1: user</li><li>RuleName - String - required: no - policy name</li>
<li>RuleLevel - Int - required: no - threat Level (multiple levels supported)</li>
<li>Status - Int - required: no - processing status (multiple statuses supported): 0: pending; 1: processed; 2: added to allowlist; 3: ignored; 4: deleted; 5: blocked</li>
<li>DetectBy - Int - required: no - data source (multiple sources supported): 0: bash logs; 1: real-time monitoring</li>
<li>StartTime - String - required: no - start time</li>
<li>EndTime - String - required: no - end time</li>
 * @method void setFilters(array $Filters) Set Filter criteria
<li>HostName - String - required: no - host name</li>
<li>Hostip - String - required: no - host's private IP address</li>
<li>HostIp - String - required: no - host's private IP address</li>
<li>RuleCategory - Int - required: no - policy type (all types or a single type): 0: system; 1: user</li><li>RuleName - String - required: no - policy name</li>
<li>RuleLevel - Int - required: no - threat Level (multiple levels supported)</li>
<li>Status - Int - required: no - processing status (multiple statuses supported): 0: pending; 1: processed; 2: added to allowlist; 3: ignored; 4: deleted; 5: blocked</li>
<li>DetectBy - Int - required: no - data source (multiple sources supported): 0: bash logs; 1: real-time monitoring</li>
<li>StartTime - String - required: no - start time</li>
<li>EndTime - String - required: no - end time</li>
 * @method integer getOffset() Obtain Offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0.
 * @method string getOrder() Obtain Sorting method: sort by number of requests. asc: ascending; desc: descending.
 * @method void setOrder(string $Order) Set Sorting method: sort by number of requests. asc: ascending; desc: descending.
 * @method string getBy() Obtain Sorting field. CreateTime: occurrence time; ModifyTime: processing time.
 * @method void setBy(string $By) Set Sorting field. CreateTime: occurrence time; ModifyTime: processing time.
 */
class DescribeBashEventsNewRequest extends AbstractModel
{
    /**
     * @var integer Quantity of returns. It is 10 by default, and the maximum value is 100.
     */
    public $Limit;

    /**
     * @var array Filter criteria
<li>HostName - String - required: no - host name</li>
<li>Hostip - String - required: no - host's private IP address</li>
<li>HostIp - String - required: no - host's private IP address</li>
<li>RuleCategory - Int - required: no - policy type (all types or a single type): 0: system; 1: user</li><li>RuleName - String - required: no - policy name</li>
<li>RuleLevel - Int - required: no - threat Level (multiple levels supported)</li>
<li>Status - Int - required: no - processing status (multiple statuses supported): 0: pending; 1: processed; 2: added to allowlist; 3: ignored; 4: deleted; 5: blocked</li>
<li>DetectBy - Int - required: no - data source (multiple sources supported): 0: bash logs; 1: real-time monitoring</li>
<li>StartTime - String - required: no - start time</li>
<li>EndTime - String - required: no - end time</li>
     */
    public $Filters;

    /**
     * @var integer Offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var string Sorting method: sort by number of requests. asc: ascending; desc: descending.
     */
    public $Order;

    /**
     * @var string Sorting field. CreateTime: occurrence time; ModifyTime: processing time.
     */
    public $By;

    /**
     * @param integer $Limit Quantity of returns. It is 10 by default, and the maximum value is 100.
     * @param array $Filters Filter criteria
<li>HostName - String - required: no - host name</li>
<li>Hostip - String - required: no - host's private IP address</li>
<li>HostIp - String - required: no - host's private IP address</li>
<li>RuleCategory - Int - required: no - policy type (all types or a single type): 0: system; 1: user</li><li>RuleName - String - required: no - policy name</li>
<li>RuleLevel - Int - required: no - threat Level (multiple levels supported)</li>
<li>Status - Int - required: no - processing status (multiple statuses supported): 0: pending; 1: processed; 2: added to allowlist; 3: ignored; 4: deleted; 5: blocked</li>
<li>DetectBy - Int - required: no - data source (multiple sources supported): 0: bash logs; 1: real-time monitoring</li>
<li>StartTime - String - required: no - start time</li>
<li>EndTime - String - required: no - end time</li>
     * @param integer $Offset Offset. Default value: 0.
     * @param string $Order Sorting method: sort by number of requests. asc: ascending; desc: descending.
     * @param string $By Sorting field. CreateTime: occurrence time; ModifyTime: processing time.
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

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }
    }
}
