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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeJustInTimeTranscodeTemplates request structure.
 *
 * @method string getZoneId() Obtain Site ID.
 * @method void setZoneId(string $ZoneId) Set Site ID.
 * @method array getFilters() Obtain Filter criteria. The maximum number of Filters is 20, and the maximum number of Filters.Values is 20. If this parameter is left empty, authorized just in time transcoding templates under the current ZoneId are returned by default. The detailed filter criteria are as follows: <li>template-name: filter by template name in bulk. For example: mytemplate;</li><li>template-type: filter by template type in bulk. For example: preset or custom.</li><li>template-id: filter by template ID in bulk. For example: C1LZ7982VgTpYhJ7M.</li>Empty by default.
 * @method void setFilters(array $Filters) Set Filter criteria. The maximum number of Filters is 20, and the maximum number of Filters.Values is 20. If this parameter is left empty, authorized just in time transcoding templates under the current ZoneId are returned by default. The detailed filter criteria are as follows: <li>template-name: filter by template name in bulk. For example: mytemplate;</li><li>template-type: filter by template type in bulk. For example: preset or custom.</li><li>template-id: filter by template ID in bulk. For example: C1LZ7982VgTpYhJ7M.</li>Empty by default.
 * @method string getSortBy() Obtain Sorting field. Valid values: <li>createTime: template creation time.</li> Default value: createTime.
 * @method void setSortBy(string $SortBy) Set Sorting field. Valid values: <li>createTime: template creation time.</li> Default value: createTime.
 * @method string getSortOrder() Obtain Sorting method. Valid values: <li>asc: ascending order;</li><li>desc: descending order.</li> Default value: desc.
 * @method void setSortOrder(string $SortOrder) Set Sorting method. Valid values: <li>asc: ascending order;</li><li>desc: descending order.</li> Default value: desc.
 * @method integer getOffset() Obtain Pagination offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Pagination offset. Default value: 0.
 * @method integer getLimit() Obtain Number of returned entries. Default value: 20. Maximum value: 1000.
 * @method void setLimit(integer $Limit) Set Number of returned entries. Default value: 20. Maximum value: 1000.
 */
class DescribeJustInTimeTranscodeTemplatesRequest extends AbstractModel
{
    /**
     * @var string Site ID.
     */
    public $ZoneId;

    /**
     * @var array Filter criteria. The maximum number of Filters is 20, and the maximum number of Filters.Values is 20. If this parameter is left empty, authorized just in time transcoding templates under the current ZoneId are returned by default. The detailed filter criteria are as follows: <li>template-name: filter by template name in bulk. For example: mytemplate;</li><li>template-type: filter by template type in bulk. For example: preset or custom.</li><li>template-id: filter by template ID in bulk. For example: C1LZ7982VgTpYhJ7M.</li>Empty by default.
     */
    public $Filters;

    /**
     * @var string Sorting field. Valid values: <li>createTime: template creation time.</li> Default value: createTime.
     */
    public $SortBy;

    /**
     * @var string Sorting method. Valid values: <li>asc: ascending order;</li><li>desc: descending order.</li> Default value: desc.
     */
    public $SortOrder;

    /**
     * @var integer Pagination offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Number of returned entries. Default value: 20. Maximum value: 1000.
     */
    public $Limit;

    /**
     * @param string $ZoneId Site ID.
     * @param array $Filters Filter criteria. The maximum number of Filters is 20, and the maximum number of Filters.Values is 20. If this parameter is left empty, authorized just in time transcoding templates under the current ZoneId are returned by default. The detailed filter criteria are as follows: <li>template-name: filter by template name in bulk. For example: mytemplate;</li><li>template-type: filter by template type in bulk. For example: preset or custom.</li><li>template-id: filter by template ID in bulk. For example: C1LZ7982VgTpYhJ7M.</li>Empty by default.
     * @param string $SortBy Sorting field. Valid values: <li>createTime: template creation time.</li> Default value: createTime.
     * @param string $SortOrder Sorting method. Valid values: <li>asc: ascending order;</li><li>desc: descending order.</li> Default value: desc.
     * @param integer $Offset Pagination offset. Default value: 0.
     * @param integer $Limit Number of returned entries. Default value: 20. Maximum value: 1000.
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

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("SortBy",$param) and $param["SortBy"] !== null) {
            $this->SortBy = $param["SortBy"];
        }

        if (array_key_exists("SortOrder",$param) and $param["SortOrder"] !== null) {
            $this->SortOrder = $param["SortOrder"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
