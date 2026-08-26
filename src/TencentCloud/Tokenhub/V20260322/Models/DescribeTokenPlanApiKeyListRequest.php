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
namespace TencentCloud\Tokenhub\V20260322\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTokenPlanApiKeyList request structure.
 *
 * @method string getTeamId() Obtain Package ID. You can obtain it through the DescribeTokenPlanList API.
 * @method void setTeamId(string $TeamId) Set Package ID. You can obtain it through the DescribeTokenPlanList API.
 * @method integer getOffset() Obtain Offset of paginated query. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset of paginated query. Default value: 0.
 * @method integer getLimit() Obtain Number of results returned by paging query. Default value: 20. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Number of results returned by paging query. Default value: 20. Maximum value: 100.
 * @method array getFilters() Obtain Paginate the list of query filter criteria. Supported filter fields: ApiKeyId (API Key ID), Name (API Key name), Status (whether the API Key is available), StopReason (reason for disabling the API Key), UseStatus (API Key user-side switch).
 * @method void setFilters(array $Filters) Set Paginate the list of query filter criteria. Supported filter fields: ApiKeyId (API Key ID), Name (API Key name), Status (whether the API Key is available), StopReason (reason for disabling the API Key), UseStatus (API Key user-side switch).
 * @method array getSorts() Obtain Paginate the list of sorting criteria. Supported sorting fields: CreatedAt (creation time) and UpdatedAt (update time). By default, results are sorted by CreatedAt in descending order.
 * @method void setSorts(array $Sorts) Set Paginate the list of sorting criteria. Supported sorting fields: CreatedAt (creation time) and UpdatedAt (update time). By default, results are sorted by CreatedAt in descending order.
 */
class DescribeTokenPlanApiKeyListRequest extends AbstractModel
{
    /**
     * @var string Package ID. You can obtain it through the DescribeTokenPlanList API.
     */
    public $TeamId;

    /**
     * @var integer Offset of paginated query. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Number of results returned by paging query. Default value: 20. Maximum value: 100.
     */
    public $Limit;

    /**
     * @var array Paginate the list of query filter criteria. Supported filter fields: ApiKeyId (API Key ID), Name (API Key name), Status (whether the API Key is available), StopReason (reason for disabling the API Key), UseStatus (API Key user-side switch).
     */
    public $Filters;

    /**
     * @var array Paginate the list of sorting criteria. Supported sorting fields: CreatedAt (creation time) and UpdatedAt (update time). By default, results are sorted by CreatedAt in descending order.
     */
    public $Sorts;

    /**
     * @param string $TeamId Package ID. You can obtain it through the DescribeTokenPlanList API.
     * @param integer $Offset Offset of paginated query. Default value: 0.
     * @param integer $Limit Number of results returned by paging query. Default value: 20. Maximum value: 100.
     * @param array $Filters Paginate the list of query filter criteria. Supported filter fields: ApiKeyId (API Key ID), Name (API Key name), Status (whether the API Key is available), StopReason (reason for disabling the API Key), UseStatus (API Key user-side switch).
     * @param array $Sorts Paginate the list of sorting criteria. Supported sorting fields: CreatedAt (creation time) and UpdatedAt (update time). By default, results are sorted by CreatedAt in descending order.
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
        if (array_key_exists("TeamId",$param) and $param["TeamId"] !== null) {
            $this->TeamId = $param["TeamId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new RequestFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Sorts",$param) and $param["Sorts"] !== null) {
            $this->Sorts = [];
            foreach ($param["Sorts"] as $key => $value){
                $obj = new RequestSort();
                $obj->deserialize($value);
                array_push($this->Sorts, $obj);
            }
        }
    }
}
