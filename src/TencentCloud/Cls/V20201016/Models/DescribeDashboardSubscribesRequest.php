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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDashboardSubscribes request structure.
 *
 * @method array getFilters() Obtain dashboardId: Filter by [dashboard id]. Type: String. Required: No.

-Dashboard id. Obtain DashboardId through the [Get Dashboard](https://www.tencentcloud.com/document/api/614/95636?from_cn_redirect=1) api.
-Input parameter example: dashboard-522a5609-1f41-4b11-8086-5afd1d7574f5

Each request can have up to 10 Filters. The upper limit of Filter.Values is 100.
 * @method void setFilters(array $Filters) Set dashboardId: Filter by [dashboard id]. Type: String. Required: No.

-Dashboard id. Obtain DashboardId through the [Get Dashboard](https://www.tencentcloud.com/document/api/614/95636?from_cn_redirect=1) api.
-Input parameter example: dashboard-522a5609-1f41-4b11-8086-5afd1d7574f5

Each request can have up to 10 Filters. The upper limit of Filter.Values is 100.
 * @method integer getOffset() Obtain Page offset. Default value: 0
 * @method void setOffset(integer $Offset) Set Page offset. Default value: 0
 * @method integer getLimit() Obtain Maximum number of entries per page. Default value: 20. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Maximum number of entries per page. Default value: 20. Maximum value: 100.
 */
class DescribeDashboardSubscribesRequest extends AbstractModel
{
    /**
     * @var array dashboardId: Filter by [dashboard id]. Type: String. Required: No.

-Dashboard id. Obtain DashboardId through the [Get Dashboard](https://www.tencentcloud.com/document/api/614/95636?from_cn_redirect=1) api.
-Input parameter example: dashboard-522a5609-1f41-4b11-8086-5afd1d7574f5

Each request can have up to 10 Filters. The upper limit of Filter.Values is 100.
     */
    public $Filters;

    /**
     * @var integer Page offset. Default value: 0
     */
    public $Offset;

    /**
     * @var integer Maximum number of entries per page. Default value: 20. Maximum value: 100.
     */
    public $Limit;

    /**
     * @param array $Filters dashboardId: Filter by [dashboard id]. Type: String. Required: No.

-Dashboard id. Obtain DashboardId through the [Get Dashboard](https://www.tencentcloud.com/document/api/614/95636?from_cn_redirect=1) api.
-Input parameter example: dashboard-522a5609-1f41-4b11-8086-5afd1d7574f5

Each request can have up to 10 Filters. The upper limit of Filter.Values is 100.
     * @param integer $Offset Page offset. Default value: 0
     * @param integer $Limit Maximum number of entries per page. Default value: 20. Maximum value: 100.
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
    }
}
