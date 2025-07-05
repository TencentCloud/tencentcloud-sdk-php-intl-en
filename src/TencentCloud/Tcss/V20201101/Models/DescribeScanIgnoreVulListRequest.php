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
 * DescribeScanIgnoreVulList request structure.
 *
 * @method integer getLimit() Obtain Number of results to be returned. Default value: `10`. Maximum value: `100`.
 * @method void setLimit(integer $Limit) Set Number of results to be returned. Default value: `10`. Maximum value: `100`.
 * @method integer getOffset() Obtain Offset. Default value: `0`.
 * @method void setOffset(integer $Offset) Set Offset. Default value: `0`.
 * @method array getFilters() Obtain Filter
<li>CVEID- string - Required: No - CVE No.</li>
<li>VulName- string - Required: No - Vulnerability name</li>
 * @method void setFilters(array $Filters) Set Filter
<li>CVEID- string - Required: No - CVE No.</li>
<li>VulName- string - Required: No - Vulnerability name</li>
 * @method string getOrder() Obtain Sorting order. Valid values: `DESC`, `ASC`.
 * @method void setOrder(string $Order) Set Sorting order. Valid values: `DESC`, `ASC`.
 * @method string getBy() Obtain Sorting field: `UpdateTime`.
 * @method void setBy(string $By) Set Sorting field: `UpdateTime`.
 */
class DescribeScanIgnoreVulListRequest extends AbstractModel
{
    /**
     * @var integer Number of results to be returned. Default value: `10`. Maximum value: `100`.
     */
    public $Limit;

    /**
     * @var integer Offset. Default value: `0`.
     */
    public $Offset;

    /**
     * @var array Filter
<li>CVEID- string - Required: No - CVE No.</li>
<li>VulName- string - Required: No - Vulnerability name</li>
     */
    public $Filters;

    /**
     * @var string Sorting order. Valid values: `DESC`, `ASC`.
     */
    public $Order;

    /**
     * @var string Sorting field: `UpdateTime`.
     */
    public $By;

    /**
     * @param integer $Limit Number of results to be returned. Default value: `10`. Maximum value: `100`.
     * @param integer $Offset Offset. Default value: `0`.
     * @param array $Filters Filter
<li>CVEID- string - Required: No - CVE No.</li>
<li>VulName- string - Required: No - Vulnerability name</li>
     * @param string $Order Sorting order. Valid values: `DESC`, `ASC`.
     * @param string $By Sorting field: `UpdateTime`.
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
                $obj = new RunTimeFilters();
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
