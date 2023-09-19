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
 * DescribeUserRoles request structure.
 *
 * @method integer getLimit() Obtain The number limit of enumerated user roles.
 * @method void setLimit(integer $Limit) Set The number limit of enumerated user roles.
 * @method integer getOffset() Obtain The offset for starting enumeration. 
 * @method void setOffset(integer $Offset) Set The offset for starting enumeration. 
 * @method string getFuzzy() Obtain Fuzzy enumeration by arn.
 * @method void setFuzzy(string $Fuzzy) Set Fuzzy enumeration by arn.
 * @method string getSortBy() Obtain The field for sorting the returned results.
 * @method void setSortBy(string $SortBy) Set The field for sorting the returned results.
 * @method string getSorting() Obtain The sorting order, descending or ascending, such as `desc`.
 * @method void setSorting(string $Sorting) Set The sorting order, descending or ascending, such as `desc`.
 */
class DescribeUserRolesRequest extends AbstractModel
{
    /**
     * @var integer The number limit of enumerated user roles.
     */
    public $Limit;

    /**
     * @var integer The offset for starting enumeration. 
     */
    public $Offset;

    /**
     * @var string Fuzzy enumeration by arn.
     */
    public $Fuzzy;

    /**
     * @var string The field for sorting the returned results.
     */
    public $SortBy;

    /**
     * @var string The sorting order, descending or ascending, such as `desc`.
     */
    public $Sorting;

    /**
     * @param integer $Limit The number limit of enumerated user roles.
     * @param integer $Offset The offset for starting enumeration. 
     * @param string $Fuzzy Fuzzy enumeration by arn.
     * @param string $SortBy The field for sorting the returned results.
     * @param string $Sorting The sorting order, descending or ascending, such as `desc`.
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

        if (array_key_exists("Fuzzy",$param) and $param["Fuzzy"] !== null) {
            $this->Fuzzy = $param["Fuzzy"];
        }

        if (array_key_exists("SortBy",$param) and $param["SortBy"] !== null) {
            $this->SortBy = $param["SortBy"];
        }

        if (array_key_exists("Sorting",$param) and $param["Sorting"] !== null) {
            $this->Sorting = $param["Sorting"];
        }
    }
}
