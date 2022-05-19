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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeZones request structure.
 *
 * @method integer getOffset() Obtain Pagination parameter, which specifies the offset.
 * @method void setOffset(integer $Offset) Set Pagination parameter, which specifies the offset.
 * @method integer getLimit() Obtain Pagination parameter, which specifies the number of sites returned in each page.
 * @method void setLimit(integer $Limit) Set Pagination parameter, which specifies the number of sites returned in each page.
 * @method array getFilters() Obtain Query condition filter, which supports complex type.
 * @method void setFilters(array $Filters) Set Query condition filter, which supports complex type.
 */
class DescribeZonesRequest extends AbstractModel
{
    /**
     * @var integer Pagination parameter, which specifies the offset.
     */
    public $Offset;

    /**
     * @var integer Pagination parameter, which specifies the number of sites returned in each page.
     */
    public $Limit;

    /**
     * @var array Query condition filter, which supports complex type.
     */
    public $Filters;

    /**
     * @param integer $Offset Pagination parameter, which specifies the offset.
     * @param integer $Limit Pagination parameter, which specifies the number of sites returned in each page.
     * @param array $Filters Query condition filter, which supports complex type.
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
                $obj = new ZoneFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
