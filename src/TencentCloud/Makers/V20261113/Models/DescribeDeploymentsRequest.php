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
 * DescribeDeployments request structure.
 *
 * @method string getZoneId() Obtain <p>Makers site ID</p>
 * @method void setZoneId(string $ZoneId) Set <p>Makers site ID</p>
 * @method string getProjectId() Obtain <p>Project ID</p>
 * @method void setProjectId(string $ProjectId) Set <p>Project ID</p>
 * @method array getDeploymentIds() Obtain <p>Query by deployment ID</p>
 * @method void setDeploymentIds(array $DeploymentIds) Set <p>Query by deployment ID</p>
 * @method array getFilters() Obtain <p>Filter conditions.</p>
 * @method void setFilters(array $Filters) Set <p>Filter conditions.</p>
 * @method integer getOffset() Obtain <p>Offset</p>
 * @method void setOffset(integer $Offset) Set <p>Offset</p>
 * @method integer getLimit() Obtain <p>Number of items per page. Maximum value: 100.</p>
 * @method void setLimit(integer $Limit) Set <p>Number of items per page. Maximum value: 100.</p>
 * @method string getOrderBy() Obtain <p>CreatedOn or ModifiedOn</p>
 * @method void setOrderBy(string $OrderBy) Set <p>CreatedOn or ModifiedOn</p>
 * @method string getOrderType() Obtain <p>Asc or Desc</p>
 * @method void setOrderType(string $OrderType) Set <p>Asc or Desc</p>
 * @method string getStartTime() Obtain <p>Start time.</p>
 * @method void setStartTime(string $StartTime) Set <p>Start time.</p>
 * @method string getEndTime() Obtain <p>End time.</p>
 * @method void setEndTime(string $EndTime) Set <p>End time.</p>
 */
class DescribeDeploymentsRequest extends AbstractModel
{
    /**
     * @var string <p>Makers site ID</p>
     */
    public $ZoneId;

    /**
     * @var string <p>Project ID</p>
     */
    public $ProjectId;

    /**
     * @var array <p>Query by deployment ID</p>
     */
    public $DeploymentIds;

    /**
     * @var array <p>Filter conditions.</p>
     */
    public $Filters;

    /**
     * @var integer <p>Offset</p>
     */
    public $Offset;

    /**
     * @var integer <p>Number of items per page. Maximum value: 100.</p>
     */
    public $Limit;

    /**
     * @var string <p>CreatedOn or ModifiedOn</p>
     */
    public $OrderBy;

    /**
     * @var string <p>Asc or Desc</p>
     */
    public $OrderType;

    /**
     * @var string <p>Start time.</p>
     */
    public $StartTime;

    /**
     * @var string <p>End time.</p>
     */
    public $EndTime;

    /**
     * @param string $ZoneId <p>Makers site ID</p>
     * @param string $ProjectId <p>Project ID</p>
     * @param array $DeploymentIds <p>Query by deployment ID</p>
     * @param array $Filters <p>Filter conditions.</p>
     * @param integer $Offset <p>Offset</p>
     * @param integer $Limit <p>Number of items per page. Maximum value: 100.</p>
     * @param string $OrderBy <p>CreatedOn or ModifiedOn</p>
     * @param string $OrderType <p>Asc or Desc</p>
     * @param string $StartTime <p>Start time.</p>
     * @param string $EndTime <p>End time.</p>
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

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("DeploymentIds",$param) and $param["DeploymentIds"] !== null) {
            $this->DeploymentIds = $param["DeploymentIds"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new DeploymentFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
