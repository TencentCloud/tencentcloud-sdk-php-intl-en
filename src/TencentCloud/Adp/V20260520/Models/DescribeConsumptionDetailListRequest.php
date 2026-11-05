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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeConsumptionDetailList request structure.
 *
 * @method TimeRange getTimeRange() Obtain <p>Query time range (Unix seconds)</p>
 * @method void setTimeRange(TimeRange $TimeRange) Set <p>Query time range (Unix seconds)</p>
 * @method ViewScope getViewScope() Obtain <p>View scope: business view / space view</p>
 * @method void setViewScope(ViewScope $ViewScope) Set <p>View scope: business view / space view</p>
 * @method array getFilterList() Obtain <p>Extended filtering. Filter combination rule: multiple conditions use AND, values within the same condition use OR. Supported Name: metric_source_type (metric_source_type_* OR integer), source_ids (multi-option source ID), resource_ID/source_ID (select one source ID, this parameter is valid only when source_ids is not passed), space_ID, user_ID</p>
 * @method void setFilterList(array $FilterList) Set <p>Extended filtering. Filter combination rule: multiple conditions use AND, values within the same condition use OR. Supported Name: metric_source_type (metric_source_type_* OR integer), source_ids (multi-option source ID), resource_ID/source_ID (select one source ID, this parameter is valid only when source_ids is not passed), space_ID, user_ID</p>
 * @method integer getPageNumber() Obtain <p>Page number, starting from 0</p>
 * @method void setPageNumber(integer $PageNumber) Set <p>Page number, starting from 0</p>
 * @method integer getPageSize() Obtain <p>Number of items per page. Maximum: 100.</p>
 * @method void setPageSize(integer $PageSize) Set <p>Number of items per page. Maximum: 100.</p>
 */
class DescribeConsumptionDetailListRequest extends AbstractModel
{
    /**
     * @var TimeRange <p>Query time range (Unix seconds)</p>
     */
    public $TimeRange;

    /**
     * @var ViewScope <p>View scope: business view / space view</p>
     */
    public $ViewScope;

    /**
     * @var array <p>Extended filtering. Filter combination rule: multiple conditions use AND, values within the same condition use OR. Supported Name: metric_source_type (metric_source_type_* OR integer), source_ids (multi-option source ID), resource_ID/source_ID (select one source ID, this parameter is valid only when source_ids is not passed), space_ID, user_ID</p>
     */
    public $FilterList;

    /**
     * @var integer <p>Page number, starting from 0</p>
     */
    public $PageNumber;

    /**
     * @var integer <p>Number of items per page. Maximum: 100.</p>
     */
    public $PageSize;

    /**
     * @param TimeRange $TimeRange <p>Query time range (Unix seconds)</p>
     * @param ViewScope $ViewScope <p>View scope: business view / space view</p>
     * @param array $FilterList <p>Extended filtering. Filter combination rule: multiple conditions use AND, values within the same condition use OR. Supported Name: metric_source_type (metric_source_type_* OR integer), source_ids (multi-option source ID), resource_ID/source_ID (select one source ID, this parameter is valid only when source_ids is not passed), space_ID, user_ID</p>
     * @param integer $PageNumber <p>Page number, starting from 0</p>
     * @param integer $PageSize <p>Number of items per page. Maximum: 100.</p>
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
        if (array_key_exists("TimeRange",$param) and $param["TimeRange"] !== null) {
            $this->TimeRange = new TimeRange();
            $this->TimeRange->deserialize($param["TimeRange"]);
        }

        if (array_key_exists("ViewScope",$param) and $param["ViewScope"] !== null) {
            $this->ViewScope = new ViewScope();
            $this->ViewScope->deserialize($param["ViewScope"]);
        }

        if (array_key_exists("FilterList",$param) and $param["FilterList"] !== null) {
            $this->FilterList = [];
            foreach ($param["FilterList"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->FilterList, $obj);
            }
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
