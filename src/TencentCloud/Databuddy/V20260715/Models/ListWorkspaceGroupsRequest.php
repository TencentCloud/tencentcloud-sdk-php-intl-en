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
 * ListWorkspaceGroups request structure.
 *
 * @method string getWorkspaceId() Obtain <p>Workspace ID</p>
 * @method void setWorkspaceId(string $WorkspaceId) Set <p>Workspace ID</p>
 * @method array getGroupIds() Obtain <p>Batch query by user group ID; user group ID can be obtained through the ListWorkspaceGroups API</p>
 * @method void setGroupIds(array $GroupIds) Set <p>Batch query by user group ID; user group ID can be obtained through the ListWorkspaceGroups API</p>
 * @method string getGroupKeyword() Obtain <p>Fuzzy matching by user group name</p>
 * @method void setGroupKeyword(string $GroupKeyword) Set <p>Fuzzy matching by user group name</p>
 * @method array getRoleIds() Obtain <p>Used to filter user groups associated with roles; can be obtained through the ListWorkspaceRoles API</p>
 * @method void setRoleIds(array $RoleIds) Set <p>Used to filter user groups associated with roles; can be obtained through the ListWorkspaceRoles API</p>
 * @method array getOrderBys() Obtain <p>Multi-field sorting, for example, [{Name: 'CreateTime', Direction: 'Desc'}]; import one for single-field sorting. By default, sort in descending order by creation time.</p>
 * @method void setOrderBys(array $OrderBys) Set <p>Multi-field sorting, for example, [{Name: 'CreateTime', Direction: 'Desc'}]; import one for single-field sorting. By default, sort in descending order by creation time.</p>
 * @method integer getPageNumber() Obtain <p>Page number. Value range: starts from 1. Default value: 1. Values less than 1 are handled as 1.</p>
 * @method void setPageNumber(integer $PageNumber) Set <p>Page number. Value range: starts from 1. Default value: 1. Values less than 1 are handled as 1.</p>
 * @method integer getPageSize() Obtain <p>Size per page. Default: 10. Value range: [1,100]. Out-of-bounds values automatically converge to the boundary value.</p>
 * @method void setPageSize(integer $PageSize) Set <p>Size per page. Default: 10. Value range: [1,100]. Out-of-bounds values automatically converge to the boundary value.</p>
 * @method string getGroupType() Obtain <p>User group type filter criteria. The value is a string form of an enumerated numeric value: "0" = console system type (including all users), "1" = console custom type, "2" = workspace system type (including all workspace users), "3" = workspace custom type.</p>
 * @method void setGroupType(string $GroupType) Set <p>User group type filter criteria. The value is a string form of an enumerated numeric value: "0" = console system type (including all users), "1" = console custom type, "2" = workspace system type (including all workspace users), "3" = workspace custom type.</p>
 */
class ListWorkspaceGroupsRequest extends AbstractModel
{
    /**
     * @var string <p>Workspace ID</p>
     */
    public $WorkspaceId;

    /**
     * @var array <p>Batch query by user group ID; user group ID can be obtained through the ListWorkspaceGroups API</p>
     */
    public $GroupIds;

    /**
     * @var string <p>Fuzzy matching by user group name</p>
     */
    public $GroupKeyword;

    /**
     * @var array <p>Used to filter user groups associated with roles; can be obtained through the ListWorkspaceRoles API</p>
     */
    public $RoleIds;

    /**
     * @var array <p>Multi-field sorting, for example, [{Name: 'CreateTime', Direction: 'Desc'}]; import one for single-field sorting. By default, sort in descending order by creation time.</p>
     */
    public $OrderBys;

    /**
     * @var integer <p>Page number. Value range: starts from 1. Default value: 1. Values less than 1 are handled as 1.</p>
     */
    public $PageNumber;

    /**
     * @var integer <p>Size per page. Default: 10. Value range: [1,100]. Out-of-bounds values automatically converge to the boundary value.</p>
     */
    public $PageSize;

    /**
     * @var string <p>User group type filter criteria. The value is a string form of an enumerated numeric value: "0" = console system type (including all users), "1" = console custom type, "2" = workspace system type (including all workspace users), "3" = workspace custom type.</p>
     */
    public $GroupType;

    /**
     * @param string $WorkspaceId <p>Workspace ID</p>
     * @param array $GroupIds <p>Batch query by user group ID; user group ID can be obtained through the ListWorkspaceGroups API</p>
     * @param string $GroupKeyword <p>Fuzzy matching by user group name</p>
     * @param array $RoleIds <p>Used to filter user groups associated with roles; can be obtained through the ListWorkspaceRoles API</p>
     * @param array $OrderBys <p>Multi-field sorting, for example, [{Name: 'CreateTime', Direction: 'Desc'}]; import one for single-field sorting. By default, sort in descending order by creation time.</p>
     * @param integer $PageNumber <p>Page number. Value range: starts from 1. Default value: 1. Values less than 1 are handled as 1.</p>
     * @param integer $PageSize <p>Size per page. Default: 10. Value range: [1,100]. Out-of-bounds values automatically converge to the boundary value.</p>
     * @param string $GroupType <p>User group type filter criteria. The value is a string form of an enumerated numeric value: "0" = console system type (including all users), "1" = console custom type, "2" = workspace system type (including all workspace users), "3" = workspace custom type.</p>
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

        if (array_key_exists("GroupIds",$param) and $param["GroupIds"] !== null) {
            $this->GroupIds = $param["GroupIds"];
        }

        if (array_key_exists("GroupKeyword",$param) and $param["GroupKeyword"] !== null) {
            $this->GroupKeyword = $param["GroupKeyword"];
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

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("GroupType",$param) and $param["GroupType"] !== null) {
            $this->GroupType = $param["GroupType"];
        }
    }
}
