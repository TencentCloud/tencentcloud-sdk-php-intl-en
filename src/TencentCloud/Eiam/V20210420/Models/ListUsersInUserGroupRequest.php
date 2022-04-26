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
 * ListUsersInUserGroup request structure.
 *
 * @method string getUserGroupId() Obtain User group ID, which is globally unique.
 * @method void setUserGroupId(string $UserGroupId) Set User group ID, which is globally unique.
 * @method UserSearchCriteria getSearchCondition() Obtain User attribute search criterion. The supported search criteria include username, mobile number, email address, user locking status, user freezing status, creation time, and last modification time, which can also be combined. In addition, multiple query methods such as full match, partial match, and range match are supported. Specifically, double quotation marks ("") indicate full match, an asterisk (*) at the end of the field indicates partial match, brackets separated by a comma ([Min,Max]) indicate query within a closed interval, braces separated by a comma ({Min,Max}) indicate query within an open interval, and a bracket and a brace can be used together (for example, {Min,Max] indicates that the minimum value is excluded and the maximum value is included in the query). Range query supports using an asterisk (for example, {20,*] indicates an interval including all data greater than 20) and querying by time period. The supported attributes include creation time (CreationTime) and last modification time (LastUpdateTime) in ISO 8601 format, such as `2021-01-13T09:44:07.182+0000`.
 * @method void setSearchCondition(UserSearchCriteria $SearchCondition) Set User attribute search criterion. The supported search criteria include username, mobile number, email address, user locking status, user freezing status, creation time, and last modification time, which can also be combined. In addition, multiple query methods such as full match, partial match, and range match are supported. Specifically, double quotation marks ("") indicate full match, an asterisk (*) at the end of the field indicates partial match, brackets separated by a comma ([Min,Max]) indicate query within a closed interval, braces separated by a comma ({Min,Max}) indicate query within an open interval, and a bracket and a brace can be used together (for example, {Min,Max] indicates that the minimum value is excluded and the maximum value is included in the query). Range query supports using an asterisk (for example, {20,*] indicates an interval including all data greater than 20) and querying by time period. The supported attributes include creation time (CreationTime) and last modification time (LastUpdateTime) in ISO 8601 format, such as `2021-01-13T09:44:07.182+0000`.
 * @method SortCondition getSort() Obtain Set of sort criteria. The supported attributes for sorting include username (UserName), nickname (DisplayName), mobile number (Phone), email address (Email), user status (Status), creation time (CreatedDate), and last modification time (LastModifiedDate). If this field is left empty, the results will be sorted in alphabetical order by nickname (DisplayName).
 * @method void setSort(SortCondition $Sort) Set Set of sort criteria. The supported attributes for sorting include username (UserName), nickname (DisplayName), mobile number (Phone), email address (Email), user status (Status), creation time (CreatedDate), and last modification time (LastModifiedDate). If this field is left empty, the results will be sorted in alphabetical order by nickname (DisplayName).
 * @method integer getOffset() Obtain Pagination offset. Default value: 0. The `Offset` and `Limit` fields need to be used together; otherwise, the query results will not be paginated, and up to 50 users will be returned.
 * @method void setOffset(integer $Offset) Set Pagination offset. Default value: 0. The `Offset` and `Limit` fields need to be used together; otherwise, the query results will not be paginated, and up to 50 users will be returned.
 * @method integer getLimit() Obtain Number of results read per page. Default value: 50. Maximum value: 100. The `Offset` and `Limit` fields need to be used together; otherwise, the query results will not be paginated, and up to 50 users will be returned.
 * @method void setLimit(integer $Limit) Set Number of results read per page. Default value: 50. Maximum value: 100. The `Offset` and `Limit` fields need to be used together; otherwise, the query results will not be paginated, and up to 50 users will be returned.
 */
class ListUsersInUserGroupRequest extends AbstractModel
{
    /**
     * @var string User group ID, which is globally unique.
     */
    public $UserGroupId;

    /**
     * @var UserSearchCriteria User attribute search criterion. The supported search criteria include username, mobile number, email address, user locking status, user freezing status, creation time, and last modification time, which can also be combined. In addition, multiple query methods such as full match, partial match, and range match are supported. Specifically, double quotation marks ("") indicate full match, an asterisk (*) at the end of the field indicates partial match, brackets separated by a comma ([Min,Max]) indicate query within a closed interval, braces separated by a comma ({Min,Max}) indicate query within an open interval, and a bracket and a brace can be used together (for example, {Min,Max] indicates that the minimum value is excluded and the maximum value is included in the query). Range query supports using an asterisk (for example, {20,*] indicates an interval including all data greater than 20) and querying by time period. The supported attributes include creation time (CreationTime) and last modification time (LastUpdateTime) in ISO 8601 format, such as `2021-01-13T09:44:07.182+0000`.
     */
    public $SearchCondition;

    /**
     * @var SortCondition Set of sort criteria. The supported attributes for sorting include username (UserName), nickname (DisplayName), mobile number (Phone), email address (Email), user status (Status), creation time (CreatedDate), and last modification time (LastModifiedDate). If this field is left empty, the results will be sorted in alphabetical order by nickname (DisplayName).
     */
    public $Sort;

    /**
     * @var integer Pagination offset. Default value: 0. The `Offset` and `Limit` fields need to be used together; otherwise, the query results will not be paginated, and up to 50 users will be returned.
     */
    public $Offset;

    /**
     * @var integer Number of results read per page. Default value: 50. Maximum value: 100. The `Offset` and `Limit` fields need to be used together; otherwise, the query results will not be paginated, and up to 50 users will be returned.
     */
    public $Limit;

    /**
     * @param string $UserGroupId User group ID, which is globally unique.
     * @param UserSearchCriteria $SearchCondition User attribute search criterion. The supported search criteria include username, mobile number, email address, user locking status, user freezing status, creation time, and last modification time, which can also be combined. In addition, multiple query methods such as full match, partial match, and range match are supported. Specifically, double quotation marks ("") indicate full match, an asterisk (*) at the end of the field indicates partial match, brackets separated by a comma ([Min,Max]) indicate query within a closed interval, braces separated by a comma ({Min,Max}) indicate query within an open interval, and a bracket and a brace can be used together (for example, {Min,Max] indicates that the minimum value is excluded and the maximum value is included in the query). Range query supports using an asterisk (for example, {20,*] indicates an interval including all data greater than 20) and querying by time period. The supported attributes include creation time (CreationTime) and last modification time (LastUpdateTime) in ISO 8601 format, such as `2021-01-13T09:44:07.182+0000`.
     * @param SortCondition $Sort Set of sort criteria. The supported attributes for sorting include username (UserName), nickname (DisplayName), mobile number (Phone), email address (Email), user status (Status), creation time (CreatedDate), and last modification time (LastModifiedDate). If this field is left empty, the results will be sorted in alphabetical order by nickname (DisplayName).
     * @param integer $Offset Pagination offset. Default value: 0. The `Offset` and `Limit` fields need to be used together; otherwise, the query results will not be paginated, and up to 50 users will be returned.
     * @param integer $Limit Number of results read per page. Default value: 50. Maximum value: 100. The `Offset` and `Limit` fields need to be used together; otherwise, the query results will not be paginated, and up to 50 users will be returned.
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
        if (array_key_exists("UserGroupId",$param) and $param["UserGroupId"] !== null) {
            $this->UserGroupId = $param["UserGroupId"];
        }

        if (array_key_exists("SearchCondition",$param) and $param["SearchCondition"] !== null) {
            $this->SearchCondition = new UserSearchCriteria();
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
