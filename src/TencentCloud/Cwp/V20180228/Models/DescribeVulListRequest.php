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
 * DescribeVulList request structure.
 *
 * @method integer getLimit() Obtain Number of returns, with the maximum value being 100.
 * @method void setLimit(integer $Limit) Set Number of returns, with the maximum value being 100.
 * @method integer getOffset() Obtain Offset, which defaults to 0
 * @method void setOffset(integer $Offset) Set Offset, which defaults to 0
 * @method array getFilters() Obtain Filter criteria
<li>Status - String - required: no - processing status: 0: pending; 1: allowlisted; 2: deleted; 3: ignored</li>
<li>ModifyTime - String - required: no - last occurrence time</li>
<li>Uuid- String - required: no - query by host UUID</li>
<li>VulName- string -</li>
<li>VulCategory- string - required: no - vulnerability category: 1: web CMS vulnerability; 2: application vulnerability; 4: Linux software vulnerability; 5: Windows system vulnerability</li>
<li>IsSupportDefense - int - required: no - support for defense: 0: not supported; 1: supported</li>
<li>Labels - string - required: no - tag for search</li>
<li>IsSupportAutoFix - string - required: no - whether automatic fixing is supported: 0: not supported; 1: supported</li>
<li>CvssScore - string - required: no - lower limit of CVSS score</li>
<li>AttackLevel - string - required: no - lower limit of attack level</li>


 * @method void setFilters(array $Filters) Set Filter criteria
<li>Status - String - required: no - processing status: 0: pending; 1: allowlisted; 2: deleted; 3: ignored</li>
<li>ModifyTime - String - required: no - last occurrence time</li>
<li>Uuid- String - required: no - query by host UUID</li>
<li>VulName- string -</li>
<li>VulCategory- string - required: no - vulnerability category: 1: web CMS vulnerability; 2: application vulnerability; 4: Linux software vulnerability; 5: Windows system vulnerability</li>
<li>IsSupportDefense - int - required: no - support for defense: 0: not supported; 1: supported</li>
<li>Labels - string - required: no - tag for search</li>
<li>IsSupportAutoFix - string - required: no - whether automatic fixing is supported: 0: not supported; 1: supported</li>
<li>CvssScore - string - required: no - lower limit of CVSS score</li>
<li>AttackLevel - string - required: no - lower limit of attack level</li>


 * @method string getBy() Obtain Sorting field: Level, LastTime, and HostCount
 * @method void setBy(string $By) Set Sorting field: Level, LastTime, and HostCount
 * @method string getOrder() Obtain Sorting order: desc and asc. Default value: asc.
 * @method void setOrder(string $Order) Set Sorting order: desc and asc. Default value: asc.
 */
class DescribeVulListRequest extends AbstractModel
{
    /**
     * @var integer Number of returns, with the maximum value being 100.
     */
    public $Limit;

    /**
     * @var integer Offset, which defaults to 0
     */
    public $Offset;

    /**
     * @var array Filter criteria
<li>Status - String - required: no - processing status: 0: pending; 1: allowlisted; 2: deleted; 3: ignored</li>
<li>ModifyTime - String - required: no - last occurrence time</li>
<li>Uuid- String - required: no - query by host UUID</li>
<li>VulName- string -</li>
<li>VulCategory- string - required: no - vulnerability category: 1: web CMS vulnerability; 2: application vulnerability; 4: Linux software vulnerability; 5: Windows system vulnerability</li>
<li>IsSupportDefense - int - required: no - support for defense: 0: not supported; 1: supported</li>
<li>Labels - string - required: no - tag for search</li>
<li>IsSupportAutoFix - string - required: no - whether automatic fixing is supported: 0: not supported; 1: supported</li>
<li>CvssScore - string - required: no - lower limit of CVSS score</li>
<li>AttackLevel - string - required: no - lower limit of attack level</li>


     */
    public $Filters;

    /**
     * @var string Sorting field: Level, LastTime, and HostCount
     */
    public $By;

    /**
     * @var string Sorting order: desc and asc. Default value: asc.
     */
    public $Order;

    /**
     * @param integer $Limit Number of returns, with the maximum value being 100.
     * @param integer $Offset Offset, which defaults to 0
     * @param array $Filters Filter criteria
<li>Status - String - required: no - processing status: 0: pending; 1: allowlisted; 2: deleted; 3: ignored</li>
<li>ModifyTime - String - required: no - last occurrence time</li>
<li>Uuid- String - required: no - query by host UUID</li>
<li>VulName- string -</li>
<li>VulCategory- string - required: no - vulnerability category: 1: web CMS vulnerability; 2: application vulnerability; 4: Linux software vulnerability; 5: Windows system vulnerability</li>
<li>IsSupportDefense - int - required: no - support for defense: 0: not supported; 1: supported</li>
<li>Labels - string - required: no - tag for search</li>
<li>IsSupportAutoFix - string - required: no - whether automatic fixing is supported: 0: not supported; 1: supported</li>
<li>CvssScore - string - required: no - lower limit of CVSS score</li>
<li>AttackLevel - string - required: no - lower limit of attack level</li>


     * @param string $By Sorting field: Level, LastTime, and HostCount
     * @param string $Order Sorting order: desc and asc. Default value: asc.
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
                $obj = new Filters();
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
