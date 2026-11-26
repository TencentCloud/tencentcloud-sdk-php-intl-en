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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCustomErrorPages request structure.
 *
 * @method string getZoneId() Obtain <p>Site ID.</p>
 * @method void setZoneId(string $ZoneId) Set <p>Site ID.</p>
 * @method array getFilters() Obtain <p>Filter criteria. The maximum value of Filters.Values is 20. The detailed filter criteria Name values are as follows: <li>page-id: filter by page ID;</li><li>name: filter by page name;</li><li>description: filter by page description;</li><li>content-type: filter by page type.</li></p>
 * @method void setFilters(array $Filters) Set <p>Filter criteria. The maximum value of Filters.Values is 20. The detailed filter criteria Name values are as follows: <li>page-id: filter by page ID;</li><li>name: filter by page name;</li><li>description: filter by page description;</li><li>content-type: filter by page type.</li></p>
 * @method integer getOffset() Obtain <p>Paginated query offset. Default value: 0.</p>
 * @method void setOffset(integer $Offset) Set <p>Paginated query offset. Default value: 0.</p>
 * @method integer getLimit() Obtain <p>Paginated query limit. Default value: 20. Maximum value: 1000.</p>
 * @method void setLimit(integer $Limit) Set <p>Paginated query limit. Default value: 20. Maximum value: 1000.</p>
 */
class DescribeCustomErrorPagesRequest extends AbstractModel
{
    /**
     * @var string <p>Site ID.</p>
     */
    public $ZoneId;

    /**
     * @var array <p>Filter criteria. The maximum value of Filters.Values is 20. The detailed filter criteria Name values are as follows: <li>page-id: filter by page ID;</li><li>name: filter by page name;</li><li>description: filter by page description;</li><li>content-type: filter by page type.</li></p>
     */
    public $Filters;

    /**
     * @var integer <p>Paginated query offset. Default value: 0.</p>
     */
    public $Offset;

    /**
     * @var integer <p>Paginated query limit. Default value: 20. Maximum value: 1000.</p>
     */
    public $Limit;

    /**
     * @param string $ZoneId <p>Site ID.</p>
     * @param array $Filters <p>Filter criteria. The maximum value of Filters.Values is 20. The detailed filter criteria Name values are as follows: <li>page-id: filter by page ID;</li><li>name: filter by page name;</li><li>description: filter by page description;</li><li>content-type: filter by page type.</li></p>
     * @param integer $Offset <p>Paginated query offset. Default value: 0.</p>
     * @param integer $Limit <p>Paginated query limit. Default value: 20. Maximum value: 1000.</p>
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new AdvancedFilter();
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
