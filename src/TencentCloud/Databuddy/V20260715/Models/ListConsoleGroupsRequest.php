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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListConsoleGroups request structure.
 *
 * @method integer getPageNumber() Obtain <p>Page number. Value range: starts from 1. Default value: 1.</p>
 * @method void setPageNumber(integer $PageNumber) Set <p>Page number. Value range: starts from 1. Default value: 1.</p>
 * @method integer getPageSize() Obtain <p>Size per page. Default: 10. Minimum: 10. Maximum: 100</p>
 * @method void setPageSize(integer $PageSize) Set <p>Size per page. Default: 10. Minimum: 10. Maximum: 100</p>
 * @method array getGroupIds() Obtain <p>Batch query by user group ID; the user group ID can be obtained through the ListConsoleGroups API.</p>
 * @method void setGroupIds(array $GroupIds) Set <p>Batch query by user group ID; the user group ID can be obtained through the ListConsoleGroups API.</p>
 * @method string getGroupKeyword() Obtain <p>Fuzzy matching by user group name</p>
 * @method void setGroupKeyword(string $GroupKeyword) Set <p>Fuzzy matching by user group name</p>
 * @method array getOrderBys() Obtain <p>Multi-field sorting, for example, [{Name: 'CreateTime', Direction: 'Desc'}, {Name: 'UserName', Direction: 'Asc'}]. By default, sort by creation time in descending order.</p>
 * @method void setOrderBys(array $OrderBys) Set <p>Multi-field sorting, for example, [{Name: 'CreateTime', Direction: 'Desc'}, {Name: 'UserName', Direction: 'Asc'}]. By default, sort by creation time in descending order.</p>
 */
class ListConsoleGroupsRequest extends AbstractModel
{
    /**
     * @var integer <p>Page number. Value range: starts from 1. Default value: 1.</p>
     */
    public $PageNumber;

    /**
     * @var integer <p>Size per page. Default: 10. Minimum: 10. Maximum: 100</p>
     */
    public $PageSize;

    /**
     * @var array <p>Batch query by user group ID; the user group ID can be obtained through the ListConsoleGroups API.</p>
     */
    public $GroupIds;

    /**
     * @var string <p>Fuzzy matching by user group name</p>
     */
    public $GroupKeyword;

    /**
     * @var array <p>Multi-field sorting, for example, [{Name: 'CreateTime', Direction: 'Desc'}, {Name: 'UserName', Direction: 'Asc'}]. By default, sort by creation time in descending order.</p>
     */
    public $OrderBys;

    /**
     * @param integer $PageNumber <p>Page number. Value range: starts from 1. Default value: 1.</p>
     * @param integer $PageSize <p>Size per page. Default: 10. Minimum: 10. Maximum: 100</p>
     * @param array $GroupIds <p>Batch query by user group ID; the user group ID can be obtained through the ListConsoleGroups API.</p>
     * @param string $GroupKeyword <p>Fuzzy matching by user group name</p>
     * @param array $OrderBys <p>Multi-field sorting, for example, [{Name: 'CreateTime', Direction: 'Desc'}, {Name: 'UserName', Direction: 'Asc'}]. By default, sort by creation time in descending order.</p>
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
        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("GroupIds",$param) and $param["GroupIds"] !== null) {
            $this->GroupIds = $param["GroupIds"];
        }

        if (array_key_exists("GroupKeyword",$param) and $param["GroupKeyword"] !== null) {
            $this->GroupKeyword = $param["GroupKeyword"];
        }

        if (array_key_exists("OrderBys",$param) and $param["OrderBys"] !== null) {
            $this->OrderBys = [];
            foreach ($param["OrderBys"] as $key => $value){
                $obj = new OrderBy();
                $obj->deserialize($value);
                array_push($this->OrderBys, $obj);
            }
        }
    }
}
