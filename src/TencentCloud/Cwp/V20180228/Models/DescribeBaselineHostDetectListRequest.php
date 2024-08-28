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
 * DescribeBaselineHostDetectList request structure.
 *
 * @method array getFilters() Obtain <li>PolicyId - int64 - required: no - policy ID</li>
</li>HostName - string - required: no - host name</i>
<li>HostIp - string - required: no - host IP</i>
<li>ItemId - int64 - required: no - item ID</i>
<li>RuleId - int64 - required: no - rule ID</li>
<li>DetectStatus - int - required: no - detection status</li>
<li>Level - int - required: no - risk level<li>
<li>StartTime - string - required: no - start time</li>
<li>EndTime - string - required: no - end time</li>
 * @method void setFilters(array $Filters) Set <li>PolicyId - int64 - required: no - policy ID</li>
</li>HostName - string - required: no - host name</i>
<li>HostIp - string - required: no - host IP</i>
<li>ItemId - int64 - required: no - item ID</i>
<li>RuleId - int64 - required: no - rule ID</li>
<li>DetectStatus - int - required: no - detection status</li>
<li>Level - int - required: no - risk level<li>
<li>StartTime - string - required: no - start time</li>
<li>EndTime - string - required: no - end time</li>
 * @method integer getLimit() Obtain Limit Entries, 10 by default, up to 100
 * @method void setLimit(integer $Limit) Set Limit Entries, 10 by default, up to 100
 * @method integer getOffset() Obtain Offset, which is 0 by default.
 * @method void setOffset(integer $Offset) Set Offset, which is 0 by default.
 * @method string getOrder() Obtain Sorting Method: [ASC: Ascending Order, DESC: Descending Order]
 * @method void setOrder(string $Order) Set Sorting Method: [ASC: Ascending Order, DESC: Descending Order]
 * @method string getBy() Obtain Optional Order Column: [LastTime|ItemCount|PassedItemCount|NotPassedItemCount|FirstTime]
 * @method void setBy(string $By) Set Optional Order Column: [LastTime|ItemCount|PassedItemCount|NotPassedItemCount|FirstTime]
 */
class DescribeBaselineHostDetectListRequest extends AbstractModel
{
    /**
     * @var array <li>PolicyId - int64 - required: no - policy ID</li>
</li>HostName - string - required: no - host name</i>
<li>HostIp - string - required: no - host IP</i>
<li>ItemId - int64 - required: no - item ID</i>
<li>RuleId - int64 - required: no - rule ID</li>
<li>DetectStatus - int - required: no - detection status</li>
<li>Level - int - required: no - risk level<li>
<li>StartTime - string - required: no - start time</li>
<li>EndTime - string - required: no - end time</li>
     */
    public $Filters;

    /**
     * @var integer Limit Entries, 10 by default, up to 100
     */
    public $Limit;

    /**
     * @var integer Offset, which is 0 by default.
     */
    public $Offset;

    /**
     * @var string Sorting Method: [ASC: Ascending Order, DESC: Descending Order]
     */
    public $Order;

    /**
     * @var string Optional Order Column: [LastTime|ItemCount|PassedItemCount|NotPassedItemCount|FirstTime]
     */
    public $By;

    /**
     * @param array $Filters <li>PolicyId - int64 - required: no - policy ID</li>
</li>HostName - string - required: no - host name</i>
<li>HostIp - string - required: no - host IP</i>
<li>ItemId - int64 - required: no - item ID</i>
<li>RuleId - int64 - required: no - rule ID</li>
<li>DetectStatus - int - required: no - detection status</li>
<li>Level - int - required: no - risk level<li>
<li>StartTime - string - required: no - start time</li>
<li>EndTime - string - required: no - end time</li>
     * @param integer $Limit Limit Entries, 10 by default, up to 100
     * @param integer $Offset Offset, which is 0 by default.
     * @param string $Order Sorting Method: [ASC: Ascending Order, DESC: Descending Order]
     * @param string $By Optional Order Column: [LastTime|ItemCount|PassedItemCount|NotPassedItemCount|FirstTime]
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
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
