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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeConfigGroupVersions request structure.
 *
 * @method string getZoneId() Obtain Zone ID.
 * @method void setZoneId(string $ZoneId) Set Zone ID.
 * @method string getGroupId() Obtain Configuraration group ID.
 * @method void setGroupId(string $GroupId) Set Configuraration group ID.
 * @method array getFilters() Obtain Filtering condition. The maximum value of Filters.Values is 20. If this parameter is not specified, all version information for the selected configuration group is returned. Detailed filtering conditions: 
<li>version-id: Filter by version ID.</li>
 * @method void setFilters(array $Filters) Set Filtering condition. The maximum value of Filters.Values is 20. If this parameter is not specified, all version information for the selected configuration group is returned. Detailed filtering conditions: 
<li>version-id: Filter by version ID.</li>
 * @method integer getOffset() Obtain Paging query offset. The default value is 0.
 * @method void setOffset(integer $Offset) Set Paging query offset. The default value is 0.
 * @method integer getLimit() Obtain Limited entries in paging queries. The default value is 20 and the maximum value is 100. 
 * @method void setLimit(integer $Limit) Set Limited entries in paging queries. The default value is 20 and the maximum value is 100. 
 */
class DescribeConfigGroupVersionsRequest extends AbstractModel
{
    /**
     * @var string Zone ID.
     */
    public $ZoneId;

    /**
     * @var string Configuraration group ID.
     */
    public $GroupId;

    /**
     * @var array Filtering condition. The maximum value of Filters.Values is 20. If this parameter is not specified, all version information for the selected configuration group is returned. Detailed filtering conditions: 
<li>version-id: Filter by version ID.</li>
     */
    public $Filters;

    /**
     * @var integer Paging query offset. The default value is 0.
     */
    public $Offset;

    /**
     * @var integer Limited entries in paging queries. The default value is 20 and the maximum value is 100. 
     */
    public $Limit;

    /**
     * @param string $ZoneId Zone ID.
     * @param string $GroupId Configuraration group ID.
     * @param array $Filters Filtering condition. The maximum value of Filters.Values is 20. If this parameter is not specified, all version information for the selected configuration group is returned. Detailed filtering conditions: 
<li>version-id: Filter by version ID.</li>
     * @param integer $Offset Paging query offset. The default value is 0.
     * @param integer $Limit Limited entries in paging queries. The default value is 20 and the maximum value is 100. 
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

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new AdvancedFilter();
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
    }
}
