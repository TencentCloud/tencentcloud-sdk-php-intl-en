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
 * DescribeExpertServiceList request structure.
 *
 * @method array getFilters() Obtain Filter criteria
<li>Keyword - String - whether required: no - filter by keyword</li>
<li>Uuids - String - whether required: no - filter by host ID</li>
 * @method void setFilters(array $Filters) Set Filter criteria
<li>Keyword - String - whether required: no - filter by keyword</li>
<li>Uuids - String - whether required: no - filter by host ID</li>
 * @method integer getLimit() Obtain Number of items to be returned. The maximum value is 100.
 * @method void setLimit(integer $Limit) Set Number of items to be returned. The maximum value is 100.
 * @method integer getOffset() Obtain Sorting step size
 * @method void setOffset(integer $Offset) Set Sorting step size
 * @method string getOrder() Obtain Sort method
 * @method void setOrder(string $Order) Set Sort method
 * @method string getBy() Obtain Sorting field: StartTime, EndTime
 * @method void setBy(string $By) Set Sorting field: StartTime, EndTime
 */
class DescribeExpertServiceListRequest extends AbstractModel
{
    /**
     * @var array Filter criteria
<li>Keyword - String - whether required: no - filter by keyword</li>
<li>Uuids - String - whether required: no - filter by host ID</li>
     */
    public $Filters;

    /**
     * @var integer Number of items to be returned. The maximum value is 100.
     */
    public $Limit;

    /**
     * @var integer Sorting step size
     */
    public $Offset;

    /**
     * @var string Sort method
     */
    public $Order;

    /**
     * @var string Sorting field: StartTime, EndTime
     */
    public $By;

    /**
     * @param array $Filters Filter criteria
<li>Keyword - String - whether required: no - filter by keyword</li>
<li>Uuids - String - whether required: no - filter by host ID</li>
     * @param integer $Limit Number of items to be returned. The maximum value is 100.
     * @param integer $Offset Sorting step size
     * @param string $Order Sort method
     * @param string $By Sorting field: StartTime, EndTime
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
