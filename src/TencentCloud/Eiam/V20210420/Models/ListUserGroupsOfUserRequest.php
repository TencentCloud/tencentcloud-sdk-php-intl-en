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
namespace TencentCloud\Eiam\V20210420\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListUserGroupsOfUser request structure.
 *
 * @method string getUserId() Obtain User ID, which is globally unique.
 * @method void setUserId(string $UserId) Set User ID, which is globally unique.
 * @method UserGroupInformationSearchCriteria getSearchCondition() Obtain Fuzzy search criterion. You can search by user group name (DisplayName). If this field is left empty, all of the user's user groups will be displayed by default.
 * @method void setSearchCondition(UserGroupInformationSearchCriteria $SearchCondition) Set Fuzzy search criterion. You can search by user group name (DisplayName). If this field is left empty, all of the user's user groups will be displayed by default.
 * @method SortCondition getSort() Obtain Set of sort criteria. Valid values: DisplayName: user group name; UserGroupId: user group ID; CreatedDate: creation time. If this field is left empty, the results will be sorted in alphabetical order by user group name.
 * @method void setSort(SortCondition $Sort) Set Set of sort criteria. Valid values: DisplayName: user group name; UserGroupId: user group ID; CreatedDate: creation time. If this field is left empty, the results will be sorted in alphabetical order by user group name.
 * @method integer getOffset() Obtain Pagination offset. Default value: 0. The `Offset` and `Limit` fields need to be used together; otherwise, the query results will not be paginated, and up to 50 user groups will be returned.
 * @method void setOffset(integer $Offset) Set Pagination offset. Default value: 0. The `Offset` and `Limit` fields need to be used together; otherwise, the query results will not be paginated, and up to 50 user groups will be returned.
 * @method integer getLimit() Obtain Number of results read per page. Default value: 50. Maximum value: 100. The `Offset` and `Limit` fields need to be used together; otherwise, the query results will not be paginated, and up to 50 user groups will be returned.
 * @method void setLimit(integer $Limit) Set Number of results read per page. Default value: 50. Maximum value: 100. The `Offset` and `Limit` fields need to be used together; otherwise, the query results will not be paginated, and up to 50 user groups will be returned.
 */
class ListUserGroupsOfUserRequest extends AbstractModel
{
    /**
     * @var string User ID, which is globally unique.
     */
    public $UserId;

    /**
     * @var UserGroupInformationSearchCriteria Fuzzy search criterion. You can search by user group name (DisplayName). If this field is left empty, all of the user's user groups will be displayed by default.
     */
    public $SearchCondition;

    /**
     * @var SortCondition Set of sort criteria. Valid values: DisplayName: user group name; UserGroupId: user group ID; CreatedDate: creation time. If this field is left empty, the results will be sorted in alphabetical order by user group name.
     */
    public $Sort;

    /**
     * @var integer Pagination offset. Default value: 0. The `Offset` and `Limit` fields need to be used together; otherwise, the query results will not be paginated, and up to 50 user groups will be returned.
     */
    public $Offset;

    /**
     * @var integer Number of results read per page. Default value: 50. Maximum value: 100. The `Offset` and `Limit` fields need to be used together; otherwise, the query results will not be paginated, and up to 50 user groups will be returned.
     */
    public $Limit;

    /**
     * @param string $UserId User ID, which is globally unique.
     * @param UserGroupInformationSearchCriteria $SearchCondition Fuzzy search criterion. You can search by user group name (DisplayName). If this field is left empty, all of the user's user groups will be displayed by default.
     * @param SortCondition $Sort Set of sort criteria. Valid values: DisplayName: user group name; UserGroupId: user group ID; CreatedDate: creation time. If this field is left empty, the results will be sorted in alphabetical order by user group name.
     * @param integer $Offset Pagination offset. Default value: 0. The `Offset` and `Limit` fields need to be used together; otherwise, the query results will not be paginated, and up to 50 user groups will be returned.
     * @param integer $Limit Number of results read per page. Default value: 50. Maximum value: 100. The `Offset` and `Limit` fields need to be used together; otherwise, the query results will not be paginated, and up to 50 user groups will be returned.
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

        if (array_key_exists("SearchCondition",$param) and $param["SearchCondition"] !== null) {
            $this->SearchCondition = new UserGroupInformationSearchCriteria();
            $this->SearchCondition->deserialize($param["SearchCondition"]);
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = new SortCondition();
            $this->Sort->deserialize($param["Sort"]);
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
