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
 * ListWorkspaceUsers request structure.
 *
 * @method string getWorkspaceId() Obtain <p>Workspace ID</p>
 * @method void setWorkspaceId(string $WorkspaceId) Set <p>Workspace ID</p>
 * @method string getUserKeyword() Obtain <p>Fuzzy matching between username or UIN</p>
 * @method void setUserKeyword(string $UserKeyword) Set <p>Fuzzy matching between username or UIN</p>
 * @method array getRoleIds() Obtain <p>Role ID list, filter users associated with roles; can be obtained through the ListWorkspaceRoles API</p>
 * @method void setRoleIds(array $RoleIds) Set <p>Role ID list, filter users associated with roles; can be obtained through the ListWorkspaceRoles API</p>
 * @method array getUserUins() Obtain <p>User UIN list, precise filtering by UIN</p>
 * @method void setUserUins(array $UserUins) Set <p>User UIN list, precise filtering by UIN</p>
 * @method array getOrderBys() Obtain <p>Sorting field list, for example, [{Name: CreateTime, Direction: DESC}]; import one for single-field sorting. By default, sort in descending order by creation time.</p>
 * @method void setOrderBys(array $OrderBys) Set <p>Sorting field list, for example, [{Name: CreateTime, Direction: DESC}]; import one for single-field sorting. By default, sort in descending order by creation time.</p>
 * @method integer getPageNumber() Obtain <p>Page number. Default value: 1. Value range: starts from 1. Values less than 1 are handled as 1.</p>
 * @method void setPageNumber(integer $PageNumber) Set <p>Page number. Default value: 1. Value range: starts from 1. Values less than 1 are handled as 1.</p>
 * @method integer getPageSize() Obtain <p>Entries per page. Default: 10. Value range: [1,100]. Out-of-bounds values automatically converge to the boundary value.</p>
 * @method void setPageSize(integer $PageSize) Set <p>Entries per page. Default: 10. Value range: [1,100]. Out-of-bounds values automatically converge to the boundary value.</p>
 * @method string getExtendInfo() Obtain <p>Extended information (empty for the first request; for pagination requests, carry the ExtendInfo from the response. Used for locating the next offset in scenarios such as consecutive pagination and item permission filtering)</p>
 * @method void setExtendInfo(string $ExtendInfo) Set <p>Extended information (empty for the first request; for pagination requests, carry the ExtendInfo from the response. Used for locating the next offset in scenarios such as consecutive pagination and item permission filtering)</p>
 */
class ListWorkspaceUsersRequest extends AbstractModel
{
    /**
     * @var string <p>Workspace ID</p>
     */
    public $WorkspaceId;

    /**
     * @var string <p>Fuzzy matching between username or UIN</p>
     */
    public $UserKeyword;

    /**
     * @var array <p>Role ID list, filter users associated with roles; can be obtained through the ListWorkspaceRoles API</p>
     */
    public $RoleIds;

    /**
     * @var array <p>User UIN list, precise filtering by UIN</p>
     */
    public $UserUins;

    /**
     * @var array <p>Sorting field list, for example, [{Name: CreateTime, Direction: DESC}]; import one for single-field sorting. By default, sort in descending order by creation time.</p>
     */
    public $OrderBys;

    /**
     * @var integer <p>Page number. Default value: 1. Value range: starts from 1. Values less than 1 are handled as 1.</p>
     */
    public $PageNumber;

    /**
     * @var integer <p>Entries per page. Default: 10. Value range: [1,100]. Out-of-bounds values automatically converge to the boundary value.</p>
     */
    public $PageSize;

    /**
     * @var string <p>Extended information (empty for the first request; for pagination requests, carry the ExtendInfo from the response. Used for locating the next offset in scenarios such as consecutive pagination and item permission filtering)</p>
     */
    public $ExtendInfo;

    /**
     * @param string $WorkspaceId <p>Workspace ID</p>
     * @param string $UserKeyword <p>Fuzzy matching between username or UIN</p>
     * @param array $RoleIds <p>Role ID list, filter users associated with roles; can be obtained through the ListWorkspaceRoles API</p>
     * @param array $UserUins <p>User UIN list, precise filtering by UIN</p>
     * @param array $OrderBys <p>Sorting field list, for example, [{Name: CreateTime, Direction: DESC}]; import one for single-field sorting. By default, sort in descending order by creation time.</p>
     * @param integer $PageNumber <p>Page number. Default value: 1. Value range: starts from 1. Values less than 1 are handled as 1.</p>
     * @param integer $PageSize <p>Entries per page. Default: 10. Value range: [1,100]. Out-of-bounds values automatically converge to the boundary value.</p>
     * @param string $ExtendInfo <p>Extended information (empty for the first request; for pagination requests, carry the ExtendInfo from the response. Used for locating the next offset in scenarios such as consecutive pagination and item permission filtering)</p>
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
        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("UserKeyword",$param) and $param["UserKeyword"] !== null) {
            $this->UserKeyword = $param["UserKeyword"];
        }

        if (array_key_exists("RoleIds",$param) and $param["RoleIds"] !== null) {
            $this->RoleIds = $param["RoleIds"];
        }

        if (array_key_exists("UserUins",$param) and $param["UserUins"] !== null) {
            $this->UserUins = $param["UserUins"];
        }

        if (array_key_exists("OrderBys",$param) and $param["OrderBys"] !== null) {
            $this->OrderBys = [];
            foreach ($param["OrderBys"] as $key => $value){
                $obj = new OrderBy();
                $obj->deserialize($value);
                array_push($this->OrderBys, $obj);
            }
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("ExtendInfo",$param) and $param["ExtendInfo"] !== null) {
            $this->ExtendInfo = $param["ExtendInfo"];
        }
    }
}
