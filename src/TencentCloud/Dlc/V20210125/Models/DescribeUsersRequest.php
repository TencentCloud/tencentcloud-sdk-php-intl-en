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
 * DescribeUsers request structure.
 *
 * @method string getUserId() Obtain Specify the UIN of the sub-user to be queried. Users need to create it through the CreateUser API.
 * @method void setUserId(string $UserId) Set Specify the UIN of the sub-user to be queried. Users need to create it through the CreateUser API.
 * @method integer getOffset() Obtain Offset, which is 0 by default.
 * @method void setOffset(integer $Offset) Set Offset, which is 0 by default.
 * @method integer getLimit() Obtain Quantity of returns. It is 20 by default, and the maximum value is 100.
 * @method void setLimit(integer $Limit) Set Quantity of returns. It is 20 by default, and the maximum value is 100.
 * @method string getSortBy() Obtain Sorting fields, which support the following type: create-time
 * @method void setSortBy(string $SortBy) Set Sorting fields, which support the following type: create-time
 * @method string getSorting() Obtain Sorting methods: desc means in order; asc means in reverse order; it is asc by default.
 * @method void setSorting(string $Sorting) Set Sorting methods: desc means in order; asc means in reverse order; it is asc by default.
 * @method array getFilters() Obtain Filter criteria. The following filter types are supported. User-type means the filtering is based on the types of users, and user-keyword means the filtering is based on the names of users.
 * @method void setFilters(array $Filters) Set Filter criteria. The following filter types are supported. User-type means the filtering is based on the types of users, and user-keyword means the filtering is based on the names of users.
 */
class DescribeUsersRequest extends AbstractModel
{
    /**
     * @var string Specify the UIN of the sub-user to be queried. Users need to create it through the CreateUser API.
     */
    public $UserId;

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
     * @var string Sorting methods: desc means in order; asc means in reverse order; it is asc by default.
     */
    public $Sorting;

    /**
     * @var array Filter criteria. The following filter types are supported. User-type means the filtering is based on the types of users, and user-keyword means the filtering is based on the names of users.
     */
    public $Filters;

    /**
     * @param string $UserId Specify the UIN of the sub-user to be queried. Users need to create it through the CreateUser API.
     * @param integer $Offset Offset, which is 0 by default.
     * @param integer $Limit Quantity of returns. It is 20 by default, and the maximum value is 100.
     * @param string $SortBy Sorting fields, which support the following type: create-time
     * @param string $Sorting Sorting methods: desc means in order; asc means in reverse order; it is asc by default.
     * @param array $Filters Filter criteria. The following filter types are supported. User-type means the filtering is based on the types of users, and user-keyword means the filtering is based on the names of users.
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
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
