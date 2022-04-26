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
 * ListApplications request structure.
 *
 * @method ApplicationInfoSearchCriteria getSearchCondition() Obtain Fuzzy match search criterion. You can combine multiple search criteria and search in multiple data ranges. In addition, multiple query methods such as full match, partial match, and range match are supported. Specifically, double quotation marks ("") indicate full match, and an asterisk (*) at the end of the field indicates partial match. The fuzzy match search feature and the exact match query feature will not take effect at the same time. If both `SearchCondition` and `ApplicationIdList` are specified, `ApplicationIdList` will take effect by default for exact match query; otherwise, the information of all applications will be returned by default.
 * @method void setSearchCondition(ApplicationInfoSearchCriteria $SearchCondition) Set Fuzzy match search criterion. You can combine multiple search criteria and search in multiple data ranges. In addition, multiple query methods such as full match, partial match, and range match are supported. Specifically, double quotation marks ("") indicate full match, and an asterisk (*) at the end of the field indicates partial match. The fuzzy match search feature and the exact match query feature will not take effect at the same time. If both `SearchCondition` and `ApplicationIdList` are specified, `ApplicationIdList` will take effect by default for exact match query; otherwise, the information of all applications will be returned by default.
 * @method SortCondition getSort() Obtain Set of sort criteria. Valid values: DisplayName: application name; CreatedDate: creation time; LastModifiedDate: last modification time. If this field is left empty, the results will be sorted in alphabetical order by application name.
 * @method void setSort(SortCondition $Sort) Set Set of sort criteria. Valid values: DisplayName: application name; CreatedDate: creation time; LastModifiedDate: last modification time. If this field is left empty, the results will be sorted in alphabetical order by application name.
 * @method integer getOffset() Obtain Set of sort criteria. Valid values: DisplayName: application name; CreatedDate: creation time; LastModifiedDate: last modification time. If this field is left empty, the results will be sorted in alphabetical order by application name.
 * @method void setOffset(integer $Offset) Set Set of sort criteria. Valid values: DisplayName: application name; CreatedDate: creation time; LastModifiedDate: last modification time. If this field is left empty, the results will be sorted in alphabetical order by application name.
 * @method integer getLimit() Obtain Number of results read per page. The `Offset` and `Limit` fields need to be used together; otherwise, the query results will not be paginated.
 * @method void setLimit(integer $Limit) Set Number of results read per page. The `Offset` and `Limit` fields need to be used together; otherwise, the query results will not be paginated.
 * @method array getApplicationIdList() Obtain Application ID list, through which the corresponding application information will be matched exactly. The fuzzy match search feature and the exact match query feature will not take effect at the same time. If both `SearchCondition` and `ApplicationIdList` are specified, `ApplicationIdList` will take effect by default for exact match query; otherwise, the information of all applications will be returned by default.
 * @method void setApplicationIdList(array $ApplicationIdList) Set Application ID list, through which the corresponding application information will be matched exactly. The fuzzy match search feature and the exact match query feature will not take effect at the same time. If both `SearchCondition` and `ApplicationIdList` are specified, `ApplicationIdList` will take effect by default for exact match query; otherwise, the information of all applications will be returned by default.
 */
class ListApplicationsRequest extends AbstractModel
{
    /**
     * @var ApplicationInfoSearchCriteria Fuzzy match search criterion. You can combine multiple search criteria and search in multiple data ranges. In addition, multiple query methods such as full match, partial match, and range match are supported. Specifically, double quotation marks ("") indicate full match, and an asterisk (*) at the end of the field indicates partial match. The fuzzy match search feature and the exact match query feature will not take effect at the same time. If both `SearchCondition` and `ApplicationIdList` are specified, `ApplicationIdList` will take effect by default for exact match query; otherwise, the information of all applications will be returned by default.
     */
    public $SearchCondition;

    /**
     * @var SortCondition Set of sort criteria. Valid values: DisplayName: application name; CreatedDate: creation time; LastModifiedDate: last modification time. If this field is left empty, the results will be sorted in alphabetical order by application name.
     */
    public $Sort;

    /**
     * @var integer Set of sort criteria. Valid values: DisplayName: application name; CreatedDate: creation time; LastModifiedDate: last modification time. If this field is left empty, the results will be sorted in alphabetical order by application name.
     */
    public $Offset;

    /**
     * @var integer Number of results read per page. The `Offset` and `Limit` fields need to be used together; otherwise, the query results will not be paginated.
     */
    public $Limit;

    /**
     * @var array Application ID list, through which the corresponding application information will be matched exactly. The fuzzy match search feature and the exact match query feature will not take effect at the same time. If both `SearchCondition` and `ApplicationIdList` are specified, `ApplicationIdList` will take effect by default for exact match query; otherwise, the information of all applications will be returned by default.
     */
    public $ApplicationIdList;

    /**
     * @param ApplicationInfoSearchCriteria $SearchCondition Fuzzy match search criterion. You can combine multiple search criteria and search in multiple data ranges. In addition, multiple query methods such as full match, partial match, and range match are supported. Specifically, double quotation marks ("") indicate full match, and an asterisk (*) at the end of the field indicates partial match. The fuzzy match search feature and the exact match query feature will not take effect at the same time. If both `SearchCondition` and `ApplicationIdList` are specified, `ApplicationIdList` will take effect by default for exact match query; otherwise, the information of all applications will be returned by default.
     * @param SortCondition $Sort Set of sort criteria. Valid values: DisplayName: application name; CreatedDate: creation time; LastModifiedDate: last modification time. If this field is left empty, the results will be sorted in alphabetical order by application name.
     * @param integer $Offset Set of sort criteria. Valid values: DisplayName: application name; CreatedDate: creation time; LastModifiedDate: last modification time. If this field is left empty, the results will be sorted in alphabetical order by application name.
     * @param integer $Limit Number of results read per page. The `Offset` and `Limit` fields need to be used together; otherwise, the query results will not be paginated.
     * @param array $ApplicationIdList Application ID list, through which the corresponding application information will be matched exactly. The fuzzy match search feature and the exact match query feature will not take effect at the same time. If both `SearchCondition` and `ApplicationIdList` are specified, `ApplicationIdList` will take effect by default for exact match query; otherwise, the information of all applications will be returned by default.
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
        if (array_key_exists("SearchCondition",$param) and $param["SearchCondition"] !== null) {
            $this->SearchCondition = new ApplicationInfoSearchCriteria();
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

        if (array_key_exists("ApplicationIdList",$param) and $param["ApplicationIdList"] !== null) {
            $this->ApplicationIdList = $param["ApplicationIdList"];
        }
    }
}
