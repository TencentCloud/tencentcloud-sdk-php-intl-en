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
namespace TencentCloud\Makers\V20261113\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeProjects request structure.
 *
 * @method string getZoneId() Obtain <p>Makers site ID</p>
 * @method void setZoneId(string $ZoneId) Set <p>Makers site ID</p>
 * @method integer getOffset() Obtain <p>Page number offset, starting from 0. The backend skips Offset * Limit entries</p>
 * @method void setOffset(integer $Offset) Set <p>Page number offset, starting from 0. The backend skips Offset * Limit entries</p>
 * @method integer getLimit() Obtain <p>Number of items per page. Maximum value: 100.</p>
 * @method void setLimit(integer $Limit) Set <p>Number of items per page. Maximum value: 100.</p>
 * @method array getFilters() Obtain <p>Filter criteria. Name parameter values: ProjectId, Name, Status, Provider</p>
 * @method void setFilters(array $Filters) Set <p>Filter criteria. Name parameter values: ProjectId, Name, Status, Provider</p>
 * @method array getProjectIds() Obtain <p>Query by project ID</p>
 * @method void setProjectIds(array $ProjectIds) Set <p>Query by project ID</p>
 * @method string getOrderBy() Obtain <p>Sorting field. CreatedOn, ModifiedOn. Default: CreatedOn</p>
 * @method void setOrderBy(string $OrderBy) Set <p>Sorting field. CreatedOn, ModifiedOn. Default: CreatedOn</p>
 * @method string getOrderType() Obtain <p>Sorting order. Asc, Desc, ASC, DESC. Default: DESC</p>
 * @method void setOrderType(string $OrderType) Set <p>Sorting order. Asc, Desc, ASC, DESC. Default: DESC</p>
 * @method string getSource() Obtain <p>Source. Only return the Upload project on drop</p>
 * @method void setSource(string $Source) Set <p>Source. Only return the Upload project on drop</p>
 * @method string getQuery() Obtain <p>Fuzzy search by project name</p>
 * @method void setQuery(string $Query) Set <p>Fuzzy search by project name</p>
 */
class DescribeProjectsRequest extends AbstractModel
{
    /**
     * @var string <p>Makers site ID</p>
     */
    public $ZoneId;

    /**
     * @var integer <p>Page number offset, starting from 0. The backend skips Offset * Limit entries</p>
     */
    public $Offset;

    /**
     * @var integer <p>Number of items per page. Maximum value: 100.</p>
     */
    public $Limit;

    /**
     * @var array <p>Filter criteria. Name parameter values: ProjectId, Name, Status, Provider</p>
     */
    public $Filters;

    /**
     * @var array <p>Query by project ID</p>
     */
    public $ProjectIds;

    /**
     * @var string <p>Sorting field. CreatedOn, ModifiedOn. Default: CreatedOn</p>
     */
    public $OrderBy;

    /**
     * @var string <p>Sorting order. Asc, Desc, ASC, DESC. Default: DESC</p>
     */
    public $OrderType;

    /**
     * @var string <p>Source. Only return the Upload project on drop</p>
     */
    public $Source;

    /**
     * @var string <p>Fuzzy search by project name</p>
     */
    public $Query;

    /**
     * @param string $ZoneId <p>Makers site ID</p>
     * @param integer $Offset <p>Page number offset, starting from 0. The backend skips Offset * Limit entries</p>
     * @param integer $Limit <p>Number of items per page. Maximum value: 100.</p>
     * @param array $Filters <p>Filter criteria. Name parameter values: ProjectId, Name, Status, Provider</p>
     * @param array $ProjectIds <p>Query by project ID</p>
     * @param string $OrderBy <p>Sorting field. CreatedOn, ModifiedOn. Default: CreatedOn</p>
     * @param string $OrderType <p>Sorting order. Asc, Desc, ASC, DESC. Default: DESC</p>
     * @param string $Source <p>Source. Only return the Upload project on drop</p>
     * @param string $Query <p>Fuzzy search by project name</p>
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new ProjectFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("ProjectIds",$param) and $param["ProjectIds"] !== null) {
            $this->ProjectIds = $param["ProjectIds"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }
    }
}
