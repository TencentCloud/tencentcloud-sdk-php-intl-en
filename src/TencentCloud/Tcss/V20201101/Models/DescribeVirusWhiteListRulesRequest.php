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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVirusWhiteListRules request structure.
 *
 * @method integer getLimit() Obtain <p>Page size. Default value: 10.</p>
 * @method void setLimit(integer $Limit) Set <p>Page size. Default value: 10.</p>
 * @method integer getOffset() Obtain <p>Page offset. Default value: 0.</p>
 * @method void setOffset(integer $Offset) Set <p>Page offset. Default value: 0.</p>
 * @method string getOrder() Obtain <p>Sorting order. Valid values: ASC and DESC. Default value: DESC.</p>
 * @method void setOrder(string $Order) Set <p>Sorting order. Valid values: ASC and DESC. Default value: DESC.</p>
 * @method string getBy() Obtain <p>Sorting field. Valid values: InsertTime and UpdateTime.</p>
 * @method void setBy(string $By) Set <p>Sorting field. Valid values: InsertTime and UpdateTime.</p>
 * @method array getFilters() Obtain <p>Filter.</p>
 * @method void setFilters(array $Filters) Set <p>Filter.</p>
 */
class DescribeVirusWhiteListRulesRequest extends AbstractModel
{
    /**
     * @var integer <p>Page size. Default value: 10.</p>
     */
    public $Limit;

    /**
     * @var integer <p>Page offset. Default value: 0.</p>
     */
    public $Offset;

    /**
     * @var string <p>Sorting order. Valid values: ASC and DESC. Default value: DESC.</p>
     */
    public $Order;

    /**
     * @var string <p>Sorting field. Valid values: InsertTime and UpdateTime.</p>
     */
    public $By;

    /**
     * @var array <p>Filter.</p>
     */
    public $Filters;

    /**
     * @param integer $Limit <p>Page size. Default value: 10.</p>
     * @param integer $Offset <p>Page offset. Default value: 0.</p>
     * @param string $Order <p>Sorting order. Valid values: ASC and DESC. Default value: DESC.</p>
     * @param string $By <p>Sorting field. Valid values: InsertTime and UpdateTime.</p>
     * @param array $Filters <p>Filter.</p>
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

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new RunTimeFilters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
