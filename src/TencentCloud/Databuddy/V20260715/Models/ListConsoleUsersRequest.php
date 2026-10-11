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
 * ListConsoleUsers request structure.
 *
 * @method integer getPageNumber() Obtain <p>Page number. Value range: starts from 1. Default value: 1.</p>
 * @method void setPageNumber(integer $PageNumber) Set <p>Page number. Value range: starts from 1. Default value: 1.</p>
 * @method integer getPageSize() Obtain <p>Size per page. Default: 10; Minimum: 10; Maximum: 100</p>
 * @method void setPageSize(integer $PageSize) Set <p>Size per page. Default: 10; Minimum: 10; Maximum: 100</p>
 * @method string getUserKeyword() Obtain <p>Fuzzy matching between username and UIN</p>
 * @method void setUserKeyword(string $UserKeyword) Set <p>Fuzzy matching between username and UIN</p>
 * @method array getRoleIds() Obtain <p>Used to filter users associated with roles</p><p>Enumeration values:</p><ul><li>2001: Console Administrator</li><li>2002: Console Member</li></ul><p>Can be obtained through the ListConsoleRoles API</p>
 * @method void setRoleIds(array $RoleIds) Set <p>Used to filter users associated with roles</p><p>Enumeration values:</p><ul><li>2001: Console Administrator</li><li>2002: Console Member</li></ul><p>Can be obtained through the ListConsoleRoles API</p>
 * @method array getOrderBys() Obtain <p>Multi-field sorting, for example [{Name: 'CreateTime', Direction: 'Desc'}, {Name: 'UserName', Direction: 'Asc'}]. By default, it sorts in descending order by creation time.</p>
 * @method void setOrderBys(array $OrderBys) Set <p>Multi-field sorting, for example [{Name: 'CreateTime', Direction: 'Desc'}, {Name: 'UserName', Direction: 'Asc'}]. By default, it sorts in descending order by creation time.</p>
 */
class ListConsoleUsersRequest extends AbstractModel
{
    /**
     * @var integer <p>Page number. Value range: starts from 1. Default value: 1.</p>
     */
    public $PageNumber;

    /**
     * @var integer <p>Size per page. Default: 10; Minimum: 10; Maximum: 100</p>
     */
    public $PageSize;

    /**
     * @var string <p>Fuzzy matching between username and UIN</p>
     */
    public $UserKeyword;

    /**
     * @var array <p>Used to filter users associated with roles</p><p>Enumeration values:</p><ul><li>2001: Console Administrator</li><li>2002: Console Member</li></ul><p>Can be obtained through the ListConsoleRoles API</p>
     */
    public $RoleIds;

    /**
     * @var array <p>Multi-field sorting, for example [{Name: 'CreateTime', Direction: 'Desc'}, {Name: 'UserName', Direction: 'Asc'}]. By default, it sorts in descending order by creation time.</p>
     */
    public $OrderBys;

    /**
     * @param integer $PageNumber <p>Page number. Value range: starts from 1. Default value: 1.</p>
     * @param integer $PageSize <p>Size per page. Default: 10; Minimum: 10; Maximum: 100</p>
     * @param string $UserKeyword <p>Fuzzy matching between username and UIN</p>
     * @param array $RoleIds <p>Used to filter users associated with roles</p><p>Enumeration values:</p><ul><li>2001: Console Administrator</li><li>2002: Console Member</li></ul><p>Can be obtained through the ListConsoleRoles API</p>
     * @param array $OrderBys <p>Multi-field sorting, for example [{Name: 'CreateTime', Direction: 'Desc'}, {Name: 'UserName', Direction: 'Asc'}]. By default, it sorts in descending order by creation time.</p>
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

        if (array_key_exists("UserKeyword",$param) and $param["UserKeyword"] !== null) {
            $this->UserKeyword = $param["UserKeyword"];
        }

        if (array_key_exists("RoleIds",$param) and $param["RoleIds"] !== null) {
            $this->RoleIds = $param["RoleIds"];
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
