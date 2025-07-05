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
namespace TencentCloud\Tat\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInvokers request structure.
 *
 * @method array getInvokerIds() Obtain List of invoker IDs.
 * @method void setInvokerIds(array $InvokerIds) Set List of invoker IDs.
 * @method array getFilters() Obtain Filter conditions:

<li> `invoker-id` - String - Required: No - (Filter condition) Filter by the invoker ID.
<li> `command-id` - String - Required: No - (Filter condition) Filter by the command ID.
<li> `type` - String - Required: No - (Filter condition) Filter by the invoker type.
 * @method void setFilters(array $Filters) Set Filter conditions:

<li> `invoker-id` - String - Required: No - (Filter condition) Filter by the invoker ID.
<li> `command-id` - String - Required: No - (Filter condition) Filter by the command ID.
<li> `type` - String - Required: No - (Filter condition) Filter by the invoker type.
 * @method integer getLimit() Obtain Number of returned results. Default value: 20. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Number of returned results. Default value: 20. Maximum value: 100.
 * @method integer getOffset() Obtain Offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0.
 */
class DescribeInvokersRequest extends AbstractModel
{
    /**
     * @var array List of invoker IDs.
     */
    public $InvokerIds;

    /**
     * @var array Filter conditions:

<li> `invoker-id` - String - Required: No - (Filter condition) Filter by the invoker ID.
<li> `command-id` - String - Required: No - (Filter condition) Filter by the command ID.
<li> `type` - String - Required: No - (Filter condition) Filter by the invoker type.
     */
    public $Filters;

    /**
     * @var integer Number of returned results. Default value: 20. Maximum value: 100.
     */
    public $Limit;

    /**
     * @var integer Offset. Default value: 0.
     */
    public $Offset;

    /**
     * @param array $InvokerIds List of invoker IDs.
     * @param array $Filters Filter conditions:

<li> `invoker-id` - String - Required: No - (Filter condition) Filter by the invoker ID.
<li> `command-id` - String - Required: No - (Filter condition) Filter by the command ID.
<li> `type` - String - Required: No - (Filter condition) Filter by the invoker type.
     * @param integer $Limit Number of returned results. Default value: 20. Maximum value: 100.
     * @param integer $Offset Offset. Default value: 0.
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
        if (array_key_exists("InvokerIds",$param) and $param["InvokerIds"] !== null) {
            $this->InvokerIds = $param["InvokerIds"];
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
    }
}
