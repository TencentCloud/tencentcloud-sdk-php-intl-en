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
 * DescribeVulDefencePluginStatus request structure.
 *
 * @method array getFilters() Obtain Filter criteria
<li>Keywords - String - required: no - host IP address or alias for filtering</li>
<li>Exception - String - required: no - plugin status: 0: normal; 1: abnormal; 2: no Java process injection</li>
 * @method void setFilters(array $Filters) Set Filter criteria
<li>Keywords - String - required: no - host IP address or alias for filtering</li>
<li>Exception - String - required: no - plugin status: 0: normal; 1: abnormal; 2: no Java process injection</li>
 * @method integer getOffset() Obtain Data offset
 * @method void setOffset(integer $Offset) Set Data offset
 * @method integer getLimit() Obtain Data limit
 * @method void setLimit(integer $Limit) Set Data limit
 * @method string getOrder() Obtain Sorting method, case insensitive: ASC for ascending order; DESC for descending order
 * @method void setOrder(string $Order) Set Sorting method, case insensitive: ASC for ascending order; DESC for descending order
 * @method string getBy() Obtain Sorting column (exact match). CreateTime: creation time; ModifyTime: update time.
 * @method void setBy(string $By) Set Sorting column (exact match). CreateTime: creation time; ModifyTime: update time.
 */
class DescribeVulDefencePluginStatusRequest extends AbstractModel
{
    /**
     * @var array Filter criteria
<li>Keywords - String - required: no - host IP address or alias for filtering</li>
<li>Exception - String - required: no - plugin status: 0: normal; 1: abnormal; 2: no Java process injection</li>
     */
    public $Filters;

    /**
     * @var integer Data offset
     */
    public $Offset;

    /**
     * @var integer Data limit
     */
    public $Limit;

    /**
     * @var string Sorting method, case insensitive: ASC for ascending order; DESC for descending order
     */
    public $Order;

    /**
     * @var string Sorting column (exact match). CreateTime: creation time; ModifyTime: update time.
     */
    public $By;

    /**
     * @param array $Filters Filter criteria
<li>Keywords - String - required: no - host IP address or alias for filtering</li>
<li>Exception - String - required: no - plugin status: 0: normal; 1: abnormal; 2: no Java process injection</li>
     * @param integer $Offset Data offset
     * @param integer $Limit Data limit
     * @param string $Order Sorting method, case insensitive: ASC for ascending order; DESC for descending order
     * @param string $By Sorting column (exact match). CreateTime: creation time; ModifyTime: update time.
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
