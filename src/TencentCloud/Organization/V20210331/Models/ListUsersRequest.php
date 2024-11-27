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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListUsers request structure.
 *
 * @method string getZoneId() Obtain Space ID.
 * @method void setZoneId(string $ZoneId) Set Space ID.
 * @method string getUserStatus() Obtain User status: Enabled, Disabled.
 * @method void setUserStatus(string $UserStatus) Set User status: Enabled, Disabled.
 * @method string getUserType() Obtain User type. Manual: manually created; Synchronized: externally imported.
 * @method void setUserType(string $UserType) Set User type. Manual: manually created; Synchronized: externally imported.
 * @method string getFilter() Obtain Filter criterion, which currently only supports username, email address, userId, and description.
 * @method void setFilter(string $Filter) Set Filter criterion, which currently only supports username, email address, userId, and description.
 * @method integer getMaxResults() Obtain Maximum number of data entries per page. Value range: 1-100. Default value: 10.
 * @method void setMaxResults(integer $MaxResults) Set Maximum number of data entries per page. Value range: 1-100. Default value: 10.
 * @method string getNextToken() Obtain Token for querying the next page of returned results. During use of the API for the first time, NextToken is not needed. When you call the API for the first time, if the total number of returned data entries exceeds the MaxResults limit, the data is truncated and only MaxResults data entries are returned. Meanwhile, the return parameter IsTruncated is true and a NextToken is returned. You can use the NextToken returned last time to continue calling the API with other request parameters unchanged, to query the truncated data. You can use this method for multiple queries until IsTruncated is false, indicating that all data has been queried.
 * @method void setNextToken(string $NextToken) Set Token for querying the next page of returned results. During use of the API for the first time, NextToken is not needed. When you call the API for the first time, if the total number of returned data entries exceeds the MaxResults limit, the data is truncated and only MaxResults data entries are returned. Meanwhile, the return parameter IsTruncated is true and a NextToken is returned. You can use the NextToken returned last time to continue calling the API with other request parameters unchanged, to query the truncated data. You can use this method for multiple queries until IsTruncated is false, indicating that all data has been queried.
 * @method array getFilterGroups() Obtain Filtered user group. IsSelected=1 will be returned for the sub-user associated with this user group.
 * @method void setFilterGroups(array $FilterGroups) Set Filtered user group. IsSelected=1 will be returned for the sub-user associated with this user group.
 * @method string getSortField() Obtain Sorting field, which currently only supports CreateTime. The default is the CreateTime field.
 * @method void setSortField(string $SortField) Set Sorting field, which currently only supports CreateTime. The default is the CreateTime field.
 * @method string getSortType() Obtain Sorting type. Desc: descending order; Asc: ascending order. It should be set along with SortField.
 * @method void setSortType(string $SortType) Set Sorting type. Desc: descending order; Asc: ascending order. It should be set along with SortField.
 * @method integer getOffset() Obtain Pagination offset. Do not use it together with NextToken, prioritizing using NextToken.
 * @method void setOffset(integer $Offset) Set Pagination offset. Do not use it together with NextToken, prioritizing using NextToken.
 */
class ListUsersRequest extends AbstractModel
{
    /**
     * @var string Space ID.
     */
    public $ZoneId;

    /**
     * @var string User status: Enabled, Disabled.
     */
    public $UserStatus;

    /**
     * @var string User type. Manual: manually created; Synchronized: externally imported.
     */
    public $UserType;

    /**
     * @var string Filter criterion, which currently only supports username, email address, userId, and description.
     */
    public $Filter;

    /**
     * @var integer Maximum number of data entries per page. Value range: 1-100. Default value: 10.
     */
    public $MaxResults;

    /**
     * @var string Token for querying the next page of returned results. During use of the API for the first time, NextToken is not needed. When you call the API for the first time, if the total number of returned data entries exceeds the MaxResults limit, the data is truncated and only MaxResults data entries are returned. Meanwhile, the return parameter IsTruncated is true and a NextToken is returned. You can use the NextToken returned last time to continue calling the API with other request parameters unchanged, to query the truncated data. You can use this method for multiple queries until IsTruncated is false, indicating that all data has been queried.
     */
    public $NextToken;

    /**
     * @var array Filtered user group. IsSelected=1 will be returned for the sub-user associated with this user group.
     */
    public $FilterGroups;

    /**
     * @var string Sorting field, which currently only supports CreateTime. The default is the CreateTime field.
     */
    public $SortField;

    /**
     * @var string Sorting type. Desc: descending order; Asc: ascending order. It should be set along with SortField.
     */
    public $SortType;

    /**
     * @var integer Pagination offset. Do not use it together with NextToken, prioritizing using NextToken.
     */
    public $Offset;

    /**
     * @param string $ZoneId Space ID.
     * @param string $UserStatus User status: Enabled, Disabled.
     * @param string $UserType User type. Manual: manually created; Synchronized: externally imported.
     * @param string $Filter Filter criterion, which currently only supports username, email address, userId, and description.
     * @param integer $MaxResults Maximum number of data entries per page. Value range: 1-100. Default value: 10.
     * @param string $NextToken Token for querying the next page of returned results. During use of the API for the first time, NextToken is not needed. When you call the API for the first time, if the total number of returned data entries exceeds the MaxResults limit, the data is truncated and only MaxResults data entries are returned. Meanwhile, the return parameter IsTruncated is true and a NextToken is returned. You can use the NextToken returned last time to continue calling the API with other request parameters unchanged, to query the truncated data. You can use this method for multiple queries until IsTruncated is false, indicating that all data has been queried.
     * @param array $FilterGroups Filtered user group. IsSelected=1 will be returned for the sub-user associated with this user group.
     * @param string $SortField Sorting field, which currently only supports CreateTime. The default is the CreateTime field.
     * @param string $SortType Sorting type. Desc: descending order; Asc: ascending order. It should be set along with SortField.
     * @param integer $Offset Pagination offset. Do not use it together with NextToken, prioritizing using NextToken.
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("UserStatus",$param) and $param["UserStatus"] !== null) {
            $this->UserStatus = $param["UserStatus"];
        }

        if (array_key_exists("UserType",$param) and $param["UserType"] !== null) {
            $this->UserType = $param["UserType"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = $param["Filter"];
        }

        if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
            $this->MaxResults = $param["MaxResults"];
        }

        if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
            $this->NextToken = $param["NextToken"];
        }

        if (array_key_exists("FilterGroups",$param) and $param["FilterGroups"] !== null) {
            $this->FilterGroups = $param["FilterGroups"];
        }

        if (array_key_exists("SortField",$param) and $param["SortField"] !== null) {
            $this->SortField = $param["SortField"];
        }

        if (array_key_exists("SortType",$param) and $param["SortType"] !== null) {
            $this->SortType = $param["SortType"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
