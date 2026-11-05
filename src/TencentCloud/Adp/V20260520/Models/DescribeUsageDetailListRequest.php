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
 * DescribeUsageDetailList request structure.
 *
 * @method integer getResourceType() Obtain <p>Resource type, limited to RESOURCE_TYPE_MODEL / RESOURCE_TYPE_PLUGIN</p><table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>RESOURCE_TYPE_UNSPECIFIED</td><td>0</td><td></td></tr><tr><td>RESOURCE_TYPE_MODEL</td><td>1</td><td>Model usage</td></tr><tr><td>RESOURCE_TYPE_PLUGIN</td><td>2</td><td>Plug-in usage (reserved, not currently supported)</td></tr><tr><td>RESOURCE_TYPE_PLATFORM</td><td>3</td><td>Platform feature usage (reserved, not currently supported)</td></tr><tr><td>RESOURCE_TYPE_MODEL_CONCURRENCY</td><td>4</td><td>Model concurrency limit exceeded (reserved, not currently supported)</td></tr><tr><td>RESOURCE_TYPE_KB_CAPACITY</td><td>5</td><td>Knowledge base capacity (reserved, not currently supported)</td></tr><tr><td>RESOURCE_TYPE_USAGE_SUMMARY</td><td>6</td><td>Usage summary (reserved, not currently supported)</td></tr><tr><td>RESOURCE_TYPE_RESOURCE_CONSUME</td><td>7</td><td>Resource consumption (billing details) (reserved, not currently supported)</td></tr></tbody></table>
 * @method void setResourceType(integer $ResourceType) Set <p>Resource type, limited to RESOURCE_TYPE_MODEL / RESOURCE_TYPE_PLUGIN</p><table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>RESOURCE_TYPE_UNSPECIFIED</td><td>0</td><td></td></tr><tr><td>RESOURCE_TYPE_MODEL</td><td>1</td><td>Model usage</td></tr><tr><td>RESOURCE_TYPE_PLUGIN</td><td>2</td><td>Plug-in usage (reserved, not currently supported)</td></tr><tr><td>RESOURCE_TYPE_PLATFORM</td><td>3</td><td>Platform feature usage (reserved, not currently supported)</td></tr><tr><td>RESOURCE_TYPE_MODEL_CONCURRENCY</td><td>4</td><td>Model concurrency limit exceeded (reserved, not currently supported)</td></tr><tr><td>RESOURCE_TYPE_KB_CAPACITY</td><td>5</td><td>Knowledge base capacity (reserved, not currently supported)</td></tr><tr><td>RESOURCE_TYPE_USAGE_SUMMARY</td><td>6</td><td>Usage summary (reserved, not currently supported)</td></tr><tr><td>RESOURCE_TYPE_RESOURCE_CONSUME</td><td>7</td><td>Resource consumption (billing details) (reserved, not currently supported)</td></tr></tbody></table>
 * @method TimeRange getTimeRange() Obtain <p>Query time range (Unix seconds).</p>
 * @method void setTimeRange(TimeRange $TimeRange) Set <p>Query time range (Unix seconds).</p>
 * @method ViewScope getViewScope() Obtain <p>View scope: corporate view / space view / application view</p>
 * @method void setViewScope(ViewScope $ViewScope) Set <p>View scope: corporate view / space view / application view</p>
 * @method array getFilterList() Obtain <p>Extended Filter (resource_type=MODEL). Filter combination rule: multiple items use AND, AND values within the same item use OR. Supported names: MODEL_Name, user_id, space_id, resource_id/source_id, metric_source_type (metric_source_type_* OR integer), call_type (invocation type)</p>
 * @method void setFilterList(array $FilterList) Set <p>Extended Filter (resource_type=MODEL). Filter combination rule: multiple items use AND, AND values within the same item use OR. Supported names: MODEL_Name, user_id, space_id, resource_id/source_id, metric_source_type (metric_source_type_* OR integer), call_type (invocation type)</p>
 * @method integer getPageNumber() Obtain <p>Page number, starting from 0.</p>
 * @method void setPageNumber(integer $PageNumber) Set <p>Page number, starting from 0.</p>
 * @method integer getPageSize() Obtain <p>Number of items per page. Maximum: 100.</p>
 * @method void setPageSize(integer $PageSize) Set <p>Number of items per page. Maximum: 100.</p>
 */
class DescribeUsageDetailListRequest extends AbstractModel
{
    /**
     * @var integer <p>Resource type, limited to RESOURCE_TYPE_MODEL / RESOURCE_TYPE_PLUGIN</p><table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>RESOURCE_TYPE_UNSPECIFIED</td><td>0</td><td></td></tr><tr><td>RESOURCE_TYPE_MODEL</td><td>1</td><td>Model usage</td></tr><tr><td>RESOURCE_TYPE_PLUGIN</td><td>2</td><td>Plug-in usage (reserved, not currently supported)</td></tr><tr><td>RESOURCE_TYPE_PLATFORM</td><td>3</td><td>Platform feature usage (reserved, not currently supported)</td></tr><tr><td>RESOURCE_TYPE_MODEL_CONCURRENCY</td><td>4</td><td>Model concurrency limit exceeded (reserved, not currently supported)</td></tr><tr><td>RESOURCE_TYPE_KB_CAPACITY</td><td>5</td><td>Knowledge base capacity (reserved, not currently supported)</td></tr><tr><td>RESOURCE_TYPE_USAGE_SUMMARY</td><td>6</td><td>Usage summary (reserved, not currently supported)</td></tr><tr><td>RESOURCE_TYPE_RESOURCE_CONSUME</td><td>7</td><td>Resource consumption (billing details) (reserved, not currently supported)</td></tr></tbody></table>
     */
    public $ResourceType;

    /**
     * @var TimeRange <p>Query time range (Unix seconds).</p>
     */
    public $TimeRange;

    /**
     * @var ViewScope <p>View scope: corporate view / space view / application view</p>
     */
    public $ViewScope;

    /**
     * @var array <p>Extended Filter (resource_type=MODEL). Filter combination rule: multiple items use AND, AND values within the same item use OR. Supported names: MODEL_Name, user_id, space_id, resource_id/source_id, metric_source_type (metric_source_type_* OR integer), call_type (invocation type)</p>
     */
    public $FilterList;

    /**
     * @var integer <p>Page number, starting from 0.</p>
     */
    public $PageNumber;

    /**
     * @var integer <p>Number of items per page. Maximum: 100.</p>
     */
    public $PageSize;

    /**
     * @param integer $ResourceType <p>Resource type, limited to RESOURCE_TYPE_MODEL / RESOURCE_TYPE_PLUGIN</p><table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>RESOURCE_TYPE_UNSPECIFIED</td><td>0</td><td></td></tr><tr><td>RESOURCE_TYPE_MODEL</td><td>1</td><td>Model usage</td></tr><tr><td>RESOURCE_TYPE_PLUGIN</td><td>2</td><td>Plug-in usage (reserved, not currently supported)</td></tr><tr><td>RESOURCE_TYPE_PLATFORM</td><td>3</td><td>Platform feature usage (reserved, not currently supported)</td></tr><tr><td>RESOURCE_TYPE_MODEL_CONCURRENCY</td><td>4</td><td>Model concurrency limit exceeded (reserved, not currently supported)</td></tr><tr><td>RESOURCE_TYPE_KB_CAPACITY</td><td>5</td><td>Knowledge base capacity (reserved, not currently supported)</td></tr><tr><td>RESOURCE_TYPE_USAGE_SUMMARY</td><td>6</td><td>Usage summary (reserved, not currently supported)</td></tr><tr><td>RESOURCE_TYPE_RESOURCE_CONSUME</td><td>7</td><td>Resource consumption (billing details) (reserved, not currently supported)</td></tr></tbody></table>
     * @param TimeRange $TimeRange <p>Query time range (Unix seconds).</p>
     * @param ViewScope $ViewScope <p>View scope: corporate view / space view / application view</p>
     * @param array $FilterList <p>Extended Filter (resource_type=MODEL). Filter combination rule: multiple items use AND, AND values within the same item use OR. Supported names: MODEL_Name, user_id, space_id, resource_id/source_id, metric_source_type (metric_source_type_* OR integer), call_type (invocation type)</p>
     * @param integer $PageNumber <p>Page number, starting from 0.</p>
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

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
