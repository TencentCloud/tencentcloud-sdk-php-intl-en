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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUserDataEngineConfig request structure.
 *
 * @method string getSorting() Obtain Sorting methods; desc means in reverse order; asc means in order.
 * @method void setSorting(string $Sorting) Set Sorting methods; desc means in reverse order; asc means in order.
 * @method integer getLimit() Obtain Quantity of returns. It is 10 by default, and the maximum value is 100.
 * @method void setLimit(integer $Limit) Set Quantity of returns. It is 10 by default, and the maximum value is 100.
 * @method integer getOffset() Obtain Offset, which is 0 by default.
 * @method void setOffset(integer $Offset) Set Offset, which is 0 by default.
 * @method string getSortBy() Obtain Sorting fields, which support the following type: create-time
 * @method void setSortBy(string $SortBy) Set Sorting fields, which support the following type: create-time
 * @method array getFilters() Obtain Filter criteria. The following filter types are supported. The parameter Name should be one of them. The number of values that can be filtered by each type of parameter should not be bigger than 5.
app-id - String - (filtering appid)
engine-id - String - (filtering engine ID)
 * @method void setFilters(array $Filters) Set Filter criteria. The following filter types are supported. The parameter Name should be one of them. The number of values that can be filtered by each type of parameter should not be bigger than 5.
app-id - String - (filtering appid)
engine-id - String - (filtering engine ID)
 */
class DescribeUserDataEngineConfigRequest extends AbstractModel
{
    /**
     * @var string Sorting methods; desc means in reverse order; asc means in order.
     */
    public $Sorting;

    /**
     * @var integer Quantity of returns. It is 10 by default, and the maximum value is 100.
     */
    public $Limit;

    /**
     * @var integer Offset, which is 0 by default.
     */
    public $Offset;

    /**
     * @var string Sorting fields, which support the following type: create-time
     */
    public $SortBy;

    /**
     * @var array Filter criteria. The following filter types are supported. The parameter Name should be one of them. The number of values that can be filtered by each type of parameter should not be bigger than 5.
app-id - String - (filtering appid)
engine-id - String - (filtering engine ID)
     */
    public $Filters;

    /**
     * @param string $Sorting Sorting methods; desc means in reverse order; asc means in order.
     * @param integer $Limit Quantity of returns. It is 10 by default, and the maximum value is 100.
     * @param integer $Offset Offset, which is 0 by default.
     * @param string $SortBy Sorting fields, which support the following type: create-time
     * @param array $Filters Filter criteria. The following filter types are supported. The parameter Name should be one of them. The number of values that can be filtered by each type of parameter should not be bigger than 5.
app-id - String - (filtering appid)
engine-id - String - (filtering engine ID)
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
        if (array_key_exists("Sorting",$param) and $param["Sorting"] !== null) {
            $this->Sorting = $param["Sorting"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("SortBy",$param) and $param["SortBy"] !== null) {
            $this->SortBy = $param["SortBy"];
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
