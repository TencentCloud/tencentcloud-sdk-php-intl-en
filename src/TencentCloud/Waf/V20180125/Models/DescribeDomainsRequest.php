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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDomains request structure.
 *
 * @method integer getOffset() Obtain Paging offset, a multiple of limit. The minimum value is 0, and the maximum value is Total/Limit rounded up.
 * @method void setOffset(integer $Offset) Set Paging offset, a multiple of limit. The minimum value is 0, and the maximum value is Total/Limit rounded up.
 * @method integer getLimit() Obtain Number of returned domains
 * @method void setLimit(integer $Limit) Set Number of returned domains
 * @method array getFilters() Obtain Filter array
 * @method void setFilters(array $Filters) Set Filter array
 */
class DescribeDomainsRequest extends AbstractModel
{
    /**
     * @var integer Paging offset, a multiple of limit. The minimum value is 0, and the maximum value is Total/Limit rounded up.
     */
    public $Offset;

    /**
     * @var integer Number of returned domains
     */
    public $Limit;

    /**
     * @var array Filter array
     */
    public $Filters;

    /**
     * @param integer $Offset Paging offset, a multiple of limit. The minimum value is 0, and the maximum value is Total/Limit rounded up.
     * @param integer $Limit Number of returned domains
     * @param array $Filters Filter array
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
                $obj = new FiltersItemNew();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
