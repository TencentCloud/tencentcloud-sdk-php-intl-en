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
 * @method string getZoneId() Obtain Specifies the site ID.
 * @method void setZoneId(string $ZoneId) Set Specifies the site ID.
 * @method array getFilters() Obtain The maximum number of Filters is 20. the upper limit for Filters.Values is 20. if this parameter is left empty, it returns the authorized just-in-time transcoding templates in the current ZoneId by default. detailed filter criteria: <li>template-name: filter by template name in batch. example: mytemplate;</li> <li>template-type: filter by template type in batch. example: preset or custom.</li> <li>template-id: filter by template id in batch. example: C1LZ7982VgTpYhJ7M.</li> empty by default.
 * @method void setFilters(array $Filters) Set The maximum number of Filters is 20. the upper limit for Filters.Values is 20. if this parameter is left empty, it returns the authorized just-in-time transcoding templates in the current ZoneId by default. detailed filter criteria: <li>template-name: filter by template name in batch. example: mytemplate;</li> <li>template-type: filter by template type in batch. example: preset or custom.</li> <li>template-id: filter by template id in batch. example: C1LZ7982VgTpYhJ7M.</li> empty by default.
 * @method string getSortBy() Obtain Sorting field. valid values: <li>createTime: template creation time.</li> default value: createTime.
 * @method void setSortBy(string $SortBy) Set Sorting field. valid values: <li>createTime: template creation time.</li> default value: createTime.
 * @method string getSortOrder() Obtain Sorting method. valid values: <li>`asc`: ascending order;</li><li>`desc`: descending order.</li> default value: `desc`.
 * @method void setSortOrder(string $SortOrder) Set Sorting method. valid values: <li>`asc`: ascending order;</li><li>`desc`: descending order.</li> default value: `desc`.
 * @method integer getOffset() Obtain Paging offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Paging offset. Default value: 0.
 * @method integer getLimit() Obtain Number of returned entries. default value: 20. maximum value: 1000.
 * @method void setLimit(integer $Limit) Set Number of returned entries. default value: 20. maximum value: 1000.
 */
class DescribeJustInTimeTranscodeTemplatesRequest extends AbstractModel
{
    /**
     * @var string Specifies the site ID.
     */
    public $ZoneId;

    /**
     * @var array The maximum number of Filters is 20. the upper limit for Filters.Values is 20. if this parameter is left empty, it returns the authorized just-in-time transcoding templates in the current ZoneId by default. detailed filter criteria: <li>template-name: filter by template name in batch. example: mytemplate;</li> <li>template-type: filter by template type in batch. example: preset or custom.</li> <li>template-id: filter by template id in batch. example: C1LZ7982VgTpYhJ7M.</li> empty by default.
     */
    public $Filters;

    /**
     * @var string Sorting field. valid values: <li>createTime: template creation time.</li> default value: createTime.
     */
    public $SortBy;

    /**
     * @var string Sorting method. valid values: <li>`asc`: ascending order;</li><li>`desc`: descending order.</li> default value: `desc`.
     */
    public $SortOrder;

    /**
     * @var integer Paging offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Number of returned entries. default value: 20. maximum value: 1000.
     */
    public $Limit;

    /**
     * @param string $ZoneId Specifies the site ID.
     * @param array $Filters The maximum number of Filters is 20. the upper limit for Filters.Values is 20. if this parameter is left empty, it returns the authorized just-in-time transcoding templates in the current ZoneId by default. detailed filter criteria: <li>template-name: filter by template name in batch. example: mytemplate;</li> <li>template-type: filter by template type in batch. example: preset or custom.</li> <li>template-id: filter by template id in batch. example: C1LZ7982VgTpYhJ7M.</li> empty by default.
     * @param string $SortBy Sorting field. valid values: <li>createTime: template creation time.</li> default value: createTime.
     * @param string $SortOrder Sorting method. valid values: <li>`asc`: ascending order;</li><li>`desc`: descending order.</li> default value: `desc`.
     * @param integer $Offset Paging offset. Default value: 0.
     * @param integer $Limit Number of returned entries. default value: 20. maximum value: 1000.
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
