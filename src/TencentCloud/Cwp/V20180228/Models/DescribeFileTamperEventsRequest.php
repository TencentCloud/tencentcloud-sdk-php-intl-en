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
 * DescribeFileTamperEvents request structure.
 *
 * @method array getFilters() Obtain Filter criteria
<li>Status - String - required: no - processing status: 0: pending; 1: allowlisted; 2: deleted; 3: ignored</li>
<li>ModifyTime - String - required: no - last occurrence time</li>
<li>Uuid- String - required: no - query by host UUID</li>
<li>RuleCategory - string - required: no - rule category. 0: system rule; 1: custom rule</li>
<li>FileAction - string - required: no - threat behavior: read - read file; write - write file</li>
 * @method void setFilters(array $Filters) Set Filter criteria
<li>Status - String - required: no - processing status: 0: pending; 1: allowlisted; 2: deleted; 3: ignored</li>
<li>ModifyTime - String - required: no - last occurrence time</li>
<li>Uuid- String - required: no - query by host UUID</li>
<li>RuleCategory - string - required: no - rule category. 0: system rule; 1: custom rule</li>
<li>FileAction - string - required: no - threat behavior: read - read file; write - write file</li>
 * @method integer getOffset() Obtain Offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0.
 * @method integer getLimit() Obtain Number of items to be returned. It is 10 by default, and the maximum value is 100.
 * @method void setLimit(integer $Limit) Set Number of items to be returned. It is 10 by default, and the maximum value is 100.
 * @method string getOrder() Obtain Sorting method: ASC, DESC
 * @method void setOrder(string $Order) Set Sorting method: ASC, DESC
 * @method string getBy() Obtain Sorting field: CreateTime; ModifyTime
 * @method void setBy(string $By) Set Sorting field: CreateTime; ModifyTime
 */
class DescribeFileTamperEventsRequest extends AbstractModel
{
    /**
     * @var array Filter criteria
<li>Status - String - required: no - processing status: 0: pending; 1: allowlisted; 2: deleted; 3: ignored</li>
<li>ModifyTime - String - required: no - last occurrence time</li>
<li>Uuid- String - required: no - query by host UUID</li>
<li>RuleCategory - string - required: no - rule category. 0: system rule; 1: custom rule</li>
<li>FileAction - string - required: no - threat behavior: read - read file; write - write file</li>
     */
    public $Filters;

    /**
     * @var integer Offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Number of items to be returned. It is 10 by default, and the maximum value is 100.
     */
    public $Limit;

    /**
     * @var string Sorting method: ASC, DESC
     */
    public $Order;

    /**
     * @var string Sorting field: CreateTime; ModifyTime
     */
    public $By;

    /**
     * @param array $Filters Filter criteria
<li>Status - String - required: no - processing status: 0: pending; 1: allowlisted; 2: deleted; 3: ignored</li>
<li>ModifyTime - String - required: no - last occurrence time</li>
<li>Uuid- String - required: no - query by host UUID</li>
<li>RuleCategory - string - required: no - rule category. 0: system rule; 1: custom rule</li>
<li>FileAction - string - required: no - threat behavior: read - read file; write - write file</li>
     * @param integer $Offset Offset. Default value: 0.
     * @param integer $Limit Number of items to be returned. It is 10 by default, and the maximum value is 100.
     * @param string $Order Sorting method: ASC, DESC
     * @param string $By Sorting field: CreateTime; ModifyTime
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
                $obj = new Filters();
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

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }
    }
}
