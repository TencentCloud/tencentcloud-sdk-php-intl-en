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
 * DescribeMetricOverviewList request structure.
 *
 * @method integer getResourceType() Obtain <p>Dashboard domain. Required. Determines which domain's KPI data to return.</p><table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>RESOURCE_TYPE_UNSPECIFIED</td><td>0</td><td></td></tr><tr><td>RESOURCE_TYPE_MODEL</td><td>1</td><td>Model usage</td></tr><tr><td>RESOURCE_TYPE_PLUGIN</td><td>2</td><td>Plug-in usage</td></tr><tr><td>RESOURCE_TYPE_PLATFORM</td><td>3</td><td>Platform feature usage</td></tr><tr><td>RESOURCE_TYPE_MODEL_CONCURRENCY</td><td>4</td><td>Model concurrency limit exceeded</td></tr><tr><td>RESOURCE_TYPE_KB_CAPACITY</td><td>5</td><td>Knowledge base capacity</td></tr><tr><td>RESOURCE_TYPE_USAGE_SUMMARY</td><td>6</td><td>Usage summary</td></tr><tr><td>RESOURCE_TYPE_RESOURCE_CONSUME</td><td>7</td><td>Resource consumption (billing details)</td></tr></tbody></table>
 * @method void setResourceType(integer $ResourceType) Set <p>Dashboard domain. Required. Determines which domain's KPI data to return.</p><table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>RESOURCE_TYPE_UNSPECIFIED</td><td>0</td><td></td></tr><tr><td>RESOURCE_TYPE_MODEL</td><td>1</td><td>Model usage</td></tr><tr><td>RESOURCE_TYPE_PLUGIN</td><td>2</td><td>Plug-in usage</td></tr><tr><td>RESOURCE_TYPE_PLATFORM</td><td>3</td><td>Platform feature usage</td></tr><tr><td>RESOURCE_TYPE_MODEL_CONCURRENCY</td><td>4</td><td>Model concurrency limit exceeded</td></tr><tr><td>RESOURCE_TYPE_KB_CAPACITY</td><td>5</td><td>Knowledge base capacity</td></tr><tr><td>RESOURCE_TYPE_USAGE_SUMMARY</td><td>6</td><td>Usage summary</td></tr><tr><td>RESOURCE_TYPE_RESOURCE_CONSUME</td><td>7</td><td>Resource consumption (billing details)</td></tr></tbody></table>
 * @method TimeRange getTimeRange() Obtain <p>Query time range (Unix seconds).</p>
 * @method void setTimeRange(TimeRange $TimeRange) Set <p>Query time range (Unix seconds).</p>
 * @method ViewScope getViewScope() Obtain <p>View scope: corporate view / space view</p>
 * @method void setViewScope(ViewScope $ViewScope) Set <p>View scope: corporate view / space view</p>
 * @method array getFilterList() Obtain <p>Extended filtering (resource_type=MODEL). Filter combination rule: multiple items use AND, AND value_list within the same item uses OR. Supported Names: MODEL_Name (MODEL Name), user_id (uid), space_id (space id), resource_id/source_id (source id), metric_source_type (metric_source_type_* Enumeration Name OR integer)</p>
 * @method void setFilterList(array $FilterList) Set <p>Extended filtering (resource_type=MODEL). Filter combination rule: multiple items use AND, AND value_list within the same item uses OR. Supported Names: MODEL_Name (MODEL Name), user_id (uid), space_id (space id), resource_id/source_id (source id), metric_source_type (metric_source_type_* Enumeration Name OR integer)</p>
 */
class DescribeMetricOverviewListRequest extends AbstractModel
{
    /**
     * @var integer <p>Dashboard domain. Required. Determines which domain's KPI data to return.</p><table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>RESOURCE_TYPE_UNSPECIFIED</td><td>0</td><td></td></tr><tr><td>RESOURCE_TYPE_MODEL</td><td>1</td><td>Model usage</td></tr><tr><td>RESOURCE_TYPE_PLUGIN</td><td>2</td><td>Plug-in usage</td></tr><tr><td>RESOURCE_TYPE_PLATFORM</td><td>3</td><td>Platform feature usage</td></tr><tr><td>RESOURCE_TYPE_MODEL_CONCURRENCY</td><td>4</td><td>Model concurrency limit exceeded</td></tr><tr><td>RESOURCE_TYPE_KB_CAPACITY</td><td>5</td><td>Knowledge base capacity</td></tr><tr><td>RESOURCE_TYPE_USAGE_SUMMARY</td><td>6</td><td>Usage summary</td></tr><tr><td>RESOURCE_TYPE_RESOURCE_CONSUME</td><td>7</td><td>Resource consumption (billing details)</td></tr></tbody></table>
     */
    public $ResourceType;

    /**
     * @var TimeRange <p>Query time range (Unix seconds).</p>
     */
    public $TimeRange;

    /**
     * @var ViewScope <p>View scope: corporate view / space view</p>
     */
    public $ViewScope;

    /**
     * @var array <p>Extended filtering (resource_type=MODEL). Filter combination rule: multiple items use AND, AND value_list within the same item uses OR. Supported Names: MODEL_Name (MODEL Name), user_id (uid), space_id (space id), resource_id/source_id (source id), metric_source_type (metric_source_type_* Enumeration Name OR integer)</p>
     */
    public $FilterList;

    /**
     * @param integer $ResourceType <p>Dashboard domain. Required. Determines which domain's KPI data to return.</p><table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>RESOURCE_TYPE_UNSPECIFIED</td><td>0</td><td></td></tr><tr><td>RESOURCE_TYPE_MODEL</td><td>1</td><td>Model usage</td></tr><tr><td>RESOURCE_TYPE_PLUGIN</td><td>2</td><td>Plug-in usage</td></tr><tr><td>RESOURCE_TYPE_PLATFORM</td><td>3</td><td>Platform feature usage</td></tr><tr><td>RESOURCE_TYPE_MODEL_CONCURRENCY</td><td>4</td><td>Model concurrency limit exceeded</td></tr><tr><td>RESOURCE_TYPE_KB_CAPACITY</td><td>5</td><td>Knowledge base capacity</td></tr><tr><td>RESOURCE_TYPE_USAGE_SUMMARY</td><td>6</td><td>Usage summary</td></tr><tr><td>RESOURCE_TYPE_RESOURCE_CONSUME</td><td>7</td><td>Resource consumption (billing details)</td></tr></tbody></table>
     * @param TimeRange $TimeRange <p>Query time range (Unix seconds).</p>
     * @param ViewScope $ViewScope <p>View scope: corporate view / space view</p>
     * @param array $FilterList <p>Extended filtering (resource_type=MODEL). Filter combination rule: multiple items use AND, AND value_list within the same item uses OR. Supported Names: MODEL_Name (MODEL Name), user_id (uid), space_id (space id), resource_id/source_id (source id), metric_source_type (metric_source_type_* Enumeration Name OR integer)</p>
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
        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
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
    }
}
