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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMonthPeakNetwork request structure.
 *
 * @method string getMonth() Obtain Month (xxxx-xx), such as `2021-03`. Default value: the last month
 * @method void setMonth(string $Month) Set Month (xxxx-xx), such as `2021-03`. Default value: the last month
 * @method array getFilters() Obtain Filter
 * @method void setFilters(array $Filters) Set Filter
 */
class DescribeMonthPeakNetworkRequest extends AbstractModel
{
    /**
     * @var string Month (xxxx-xx), such as `2021-03`. Default value: the last month
     */
    public $Month;

    /**
     * @var array Filter
     */
    public $Filters;

    /**
     * @param string $Month Month (xxxx-xx), such as `2021-03`. Default value: the last month
     * @param array $Filters Filter
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
        if (array_key_exists("Month",$param) and $param["Month"] !== null) {
            $this->Month = $param["Month"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
