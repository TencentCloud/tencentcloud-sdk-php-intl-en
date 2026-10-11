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
 * ExportWebPageEventList request structure.
 *
 * @method array getFilters() Obtain Filter criteria
<li>IpOrAlias - String - required: no - filter by host IP or alias</li>
<li>EventType - String - required: no - event type</li>
<li>EventStatus - String - required: no - event status</li>
 * @method void setFilters(array $Filters) Set Filter criteria
<li>IpOrAlias - String - required: no - filter by host IP or alias</li>
<li>EventType - String - required: no - event type</li>
<li>EventStatus - String - required: no - event status</li>
 * @method string getBy() Obtain Sorting method: CreateTime or RestoreTime, with a default value of CreateTime
 * @method void setBy(string $By) Set Sorting method: CreateTime or RestoreTime, with a default value of CreateTime
 * @method integer getOrder() Obtain Sorting method. 0: descending order. 1: ascending order. Default value: 0.
 * @method void setOrder(integer $Order) Set Sorting method. 0: descending order. 1: ascending order. Default value: 0.
 */
class ExportWebPageEventListRequest extends AbstractModel
{
    /**
     * @var array Filter criteria
<li>IpOrAlias - String - required: no - filter by host IP or alias</li>
<li>EventType - String - required: no - event type</li>
<li>EventStatus - String - required: no - event status</li>
     */
    public $Filters;

    /**
     * @var string Sorting method: CreateTime or RestoreTime, with a default value of CreateTime
     */
    public $By;

    /**
     * @var integer Sorting method. 0: descending order. 1: ascending order. Default value: 0.
     */
    public $Order;

    /**
     * @param array $Filters Filter criteria
<li>IpOrAlias - String - required: no - filter by host IP or alias</li>
<li>EventType - String - required: no - event type</li>
<li>EventStatus - String - required: no - event status</li>
     * @param string $By Sorting method: CreateTime or RestoreTime, with a default value of CreateTime
     * @param integer $Order Sorting method. 0: descending order. 1: ascending order. Default value: 0.
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
                $obj = new AssetFilters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }
    }
}
