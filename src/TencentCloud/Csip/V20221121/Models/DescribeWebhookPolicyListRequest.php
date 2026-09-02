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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeWebhookPolicyList request structure.
 *
 * @method integer getOffset() Obtain <p>Paging offset<br>Value range: [0, +∞)<br>Default value: 0</p>
 * @method void setOffset(integer $Offset) Set <p>Paging offset<br>Value range: [0, +∞)<br>Default value: 0</p>
 * @method integer getLimit() Obtain <p>Number of results per page<br>Value range: [1, 200]<br>Default value: 20</p>
 * @method void setLimit(integer $Limit) Set <p>Number of results per page<br>Value range: [1, 200]<br>Default value: 20</p>
 * @method array getFilters() Obtain <p>Filter criteria<br>Supported filter items:<br>Name: fuzzy search by policy name<br>Status: enable status, available values: ON / OFF<br>ReceiveFormat: accept format, available values: TEXT / JSON<br>Module: notification item module, available values: Vul / Alert / AkSk / Agent / LogAnalysis<br>ReceiverID: ID of the associated receiving robot</p>
 * @method void setFilters(array $Filters) Set <p>Filter criteria<br>Supported filter items:<br>Name: fuzzy search by policy name<br>Status: enable status, available values: ON / OFF<br>ReceiveFormat: accept format, available values: TEXT / JSON<br>Module: notification item module, available values: Vul / Alert / AkSk / Agent / LogAnalysis<br>ReceiverID: ID of the associated receiving robot</p>
 * @method string getOrder() Obtain <p>Sorting field<br>Enumeration values:<br>InsertTime: creation time<br>UpdateTime: update time<br>Default value: UpdateTime</p>
 * @method void setOrder(string $Order) Set <p>Sorting field<br>Enumeration values:<br>InsertTime: creation time<br>UpdateTime: update time<br>Default value: UpdateTime</p>
 * @method string getBy() Obtain <p>Sorting method<br>Enumeration values:<br>asc: ascending<br>desc: descending<br>Default value: desc</p>
 * @method void setBy(string $By) Set <p>Sorting method<br>Enumeration values:<br>asc: ascending<br>desc: descending<br>Default value: desc</p>
 */
class DescribeWebhookPolicyListRequest extends AbstractModel
{
    /**
     * @var integer <p>Paging offset<br>Value range: [0, +∞)<br>Default value: 0</p>
     */
    public $Offset;

    /**
     * @var integer <p>Number of results per page<br>Value range: [1, 200]<br>Default value: 20</p>
     */
    public $Limit;

    /**
     * @var array <p>Filter criteria<br>Supported filter items:<br>Name: fuzzy search by policy name<br>Status: enable status, available values: ON / OFF<br>ReceiveFormat: accept format, available values: TEXT / JSON<br>Module: notification item module, available values: Vul / Alert / AkSk / Agent / LogAnalysis<br>ReceiverID: ID of the associated receiving robot</p>
     */
    public $Filters;

    /**
     * @var string <p>Sorting field<br>Enumeration values:<br>InsertTime: creation time<br>UpdateTime: update time<br>Default value: UpdateTime</p>
     */
    public $Order;

    /**
     * @var string <p>Sorting method<br>Enumeration values:<br>asc: ascending<br>desc: descending<br>Default value: desc</p>
     */
    public $By;

    /**
     * @param integer $Offset <p>Paging offset<br>Value range: [0, +∞)<br>Default value: 0</p>
     * @param integer $Limit <p>Number of results per page<br>Value range: [1, 200]<br>Default value: 20</p>
     * @param array $Filters <p>Filter criteria<br>Supported filter items:<br>Name: fuzzy search by policy name<br>Status: enable status, available values: ON / OFF<br>ReceiveFormat: accept format, available values: TEXT / JSON<br>Module: notification item module, available values: Vul / Alert / AkSk / Agent / LogAnalysis<br>ReceiverID: ID of the associated receiving robot</p>
     * @param string $Order <p>Sorting field<br>Enumeration values:<br>InsertTime: creation time<br>UpdateTime: update time<br>Default value: UpdateTime</p>
     * @param string $By <p>Sorting method<br>Enumeration values:<br>asc: ascending<br>desc: descending<br>Default value: desc</p>
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filters();
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
