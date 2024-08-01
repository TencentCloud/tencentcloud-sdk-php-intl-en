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
 * DescribeWorkGroups request structure.
 *
 * @method integer getWorkGroupId() Obtain IDs of working groups that are queried. If it is not filled in or is 0, this means no need for filtering.
 * @method void setWorkGroupId(integer $WorkGroupId) Set IDs of working groups that are queried. If it is not filled in or is 0, this means no need for filtering.
 * @method array getFilters() Obtain Filter criteria. Only the fuzzy search according to working group names is supported. The key is workgroup-name.
 * @method void setFilters(array $Filters) Set Filter criteria. Only the fuzzy search according to working group names is supported. The key is workgroup-name.
 * @method integer getOffset() Obtain Offset, which is 0 by default.
 * @method void setOffset(integer $Offset) Set Offset, which is 0 by default.
 * @method integer getLimit() Obtain Quantity of returns. It is 20 by default, and the maximum value is 100.
 * @method void setLimit(integer $Limit) Set Quantity of returns. It is 20 by default, and the maximum value is 100.
 * @method string getSortBy() Obtain Sorting fields, which support the following type: create-time
 * @method void setSortBy(string $SortBy) Set Sorting fields, which support the following type: create-time
 * @method string getSorting() Obtain Sorting methods; desc means in order; asc means in reverse order; it is asc by default.
 * @method void setSorting(string $Sorting) Set Sorting methods; desc means in order; asc means in reverse order; it is asc by default.
 */
class DescribeWorkGroupsRequest extends AbstractModel
{
    /**
     * @var integer IDs of working groups that are queried. If it is not filled in or is 0, this means no need for filtering.
     */
    public $WorkGroupId;

    /**
     * @var array Filter criteria. Only the fuzzy search according to working group names is supported. The key is workgroup-name.
     */
    public $Filters;

    /**
     * @var integer Offset, which is 0 by default.
     */
    public $Offset;

    /**
     * @var integer Quantity of returns. It is 20 by default, and the maximum value is 100.
     */
    public $Limit;

    /**
     * @var string Sorting fields, which support the following type: create-time
     */
    public $SortBy;

    /**
     * @var string Sorting methods; desc means in order; asc means in reverse order; it is asc by default.
     */
    public $Sorting;

    /**
     * @param integer $WorkGroupId IDs of working groups that are queried. If it is not filled in or is 0, this means no need for filtering.
     * @param array $Filters Filter criteria. Only the fuzzy search according to working group names is supported. The key is workgroup-name.
     * @param integer $Offset Offset, which is 0 by default.
     * @param integer $Limit Quantity of returns. It is 20 by default, and the maximum value is 100.
     * @param string $SortBy Sorting fields, which support the following type: create-time
     * @param string $Sorting Sorting methods; desc means in order; asc means in reverse order; it is asc by default.
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
        if (array_key_exists("WorkGroupId",$param) and $param["WorkGroupId"] !== null) {
            $this->WorkGroupId = $param["WorkGroupId"];
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

        if (array_key_exists("SortBy",$param) and $param["SortBy"] !== null) {
            $this->SortBy = $param["SortBy"];
        }

        if (array_key_exists("Sorting",$param) and $param["Sorting"] !== null) {
            $this->Sorting = $param["Sorting"];
        }
    }
}
