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
namespace TencentCloud\Eiam\V20210420\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListApplicationAuthorizations request structure.
 *
 * @method string getEntityType() Obtain Query type. Valid values: User: user; UserGroup: user group; OrgNode: organization.
 * @method void setEntityType(string $EntityType) Set Query type. Valid values: User: user; UserGroup: user group; OrgNode: organization.
 * @method AuthorizationInfoSearchCriteria getSearchCondition() Obtain Search criterion. You can combine multiple search criteria and search in multiple data ranges. In addition, multiple query methods such as full match, partial match, and range match are supported. Specifically, double quotation marks ("") indicate full match, an asterisk (*) at the end of the field indicates partial match, and an empty field indicates to query the full table by default.
 * @method void setSearchCondition(AuthorizationInfoSearchCriteria $SearchCondition) Set Search criterion. You can combine multiple search criteria and search in multiple data ranges. In addition, multiple query methods such as full match, partial match, and range match are supported. Specifically, double quotation marks ("") indicate full match, an asterisk (*) at the end of the field indicates partial match, and an empty field indicates to query the full table by default.
 * @method SortCondition getSort() Obtain Set of sort criteria. You can sort the results by last modification time (lastModifiedDate). If this field is left empty, the results will be sorted in alphabetical order by application name.
 * @method void setSort(SortCondition $Sort) Set Set of sort criteria. You can sort the results by last modification time (lastModifiedDate). If this field is left empty, the results will be sorted in alphabetical order by application name.
 * @method integer getOffset() Obtain Pagination offset. The `Offset` and `Limit` fields need to be used together; otherwise, the query results will not be paginated.
 * @method void setOffset(integer $Offset) Set Pagination offset. The `Offset` and `Limit` fields need to be used together; otherwise, the query results will not be paginated.
 * @method integer getLimit() Obtain Number of results read per page. The `Offset` and `Limit` fields need to be used together; otherwise, the query results will not be paginated.
 * @method void setLimit(integer $Limit) Set Number of results read per page. The `Offset` and `Limit` fields need to be used together; otherwise, the query results will not be paginated.
 */
class ListApplicationAuthorizationsRequest extends AbstractModel
{
    /**
     * @var string Query type. Valid values: User: user; UserGroup: user group; OrgNode: organization.
     */
    public $EntityType;

    /**
     * @var AuthorizationInfoSearchCriteria Search criterion. You can combine multiple search criteria and search in multiple data ranges. In addition, multiple query methods such as full match, partial match, and range match are supported. Specifically, double quotation marks ("") indicate full match, an asterisk (*) at the end of the field indicates partial match, and an empty field indicates to query the full table by default.
     */
    public $SearchCondition;

    /**
     * @var SortCondition Set of sort criteria. You can sort the results by last modification time (lastModifiedDate). If this field is left empty, the results will be sorted in alphabetical order by application name.
     */
    public $Sort;

    /**
     * @var integer Pagination offset. The `Offset` and `Limit` fields need to be used together; otherwise, the query results will not be paginated.
     */
    public $Offset;

    /**
     * @var integer Number of results read per page. The `Offset` and `Limit` fields need to be used together; otherwise, the query results will not be paginated.
     */
    public $Limit;

    /**
     * @param string $EntityType Query type. Valid values: User: user; UserGroup: user group; OrgNode: organization.
     * @param AuthorizationInfoSearchCriteria $SearchCondition Search criterion. You can combine multiple search criteria and search in multiple data ranges. In addition, multiple query methods such as full match, partial match, and range match are supported. Specifically, double quotation marks ("") indicate full match, an asterisk (*) at the end of the field indicates partial match, and an empty field indicates to query the full table by default.
     * @param SortCondition $Sort Set of sort criteria. You can sort the results by last modification time (lastModifiedDate). If this field is left empty, the results will be sorted in alphabetical order by application name.
     * @param integer $Offset Pagination offset. The `Offset` and `Limit` fields need to be used together; otherwise, the query results will not be paginated.
     * @param integer $Limit Number of results read per page. The `Offset` and `Limit` fields need to be used together; otherwise, the query results will not be paginated.
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
        if (array_key_exists("EntityType",$param) and $param["EntityType"] !== null) {
            $this->EntityType = $param["EntityType"];
        }

        if (array_key_exists("SearchCondition",$param) and $param["SearchCondition"] !== null) {
            $this->SearchCondition = new AuthorizationInfoSearchCriteria();
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
