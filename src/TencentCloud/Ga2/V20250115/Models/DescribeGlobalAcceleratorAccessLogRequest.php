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
namespace TencentCloud\Ga2\V20250115\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeGlobalAcceleratorAccessLog request structure.
 *
 * @method string getGlobalAcceleratorId() Obtain <p>Unique Id of the ga instance</p>
 * @method void setGlobalAcceleratorId(string $GlobalAcceleratorId) Set <p>Unique Id of the ga instance</p>
 * @method array getFilters() Obtain <p>Query filter parameters. { &quot;Name&quot;: &quot;listener-id&quot;, &quot;Values&quot;: [&quot;listener unique id&quot;] },{ &quot;Name&quot;: &quot;endpoint-group-id&quot;, &quot;Values&quot;: [&quot;Terminal node group unique id&quot;] },{ &quot;Name&quot;: &quot;access_log_id&quot;, &quot;Values&quot;: [&quot;log unique id&quot;] }</p>
 * @method void setFilters(array $Filters) Set <p>Query filter parameters. { &quot;Name&quot;: &quot;listener-id&quot;, &quot;Values&quot;: [&quot;listener unique id&quot;] },{ &quot;Name&quot;: &quot;endpoint-group-id&quot;, &quot;Values&quot;: [&quot;Terminal node group unique id&quot;] },{ &quot;Name&quot;: &quot;access_log_id&quot;, &quot;Values&quot;: [&quot;log unique id&quot;] }</p>
 * @method integer getOffset() Obtain <p>Offset. Default value: 0.</p>
 * @method void setOffset(integer $Offset) Set <p>Offset. Default value: 0.</p>
 * @method integer getLimit() Obtain <p>Number of returned results.</p><p>Value range: [0, 200]</p>
 * @method void setLimit(integer $Limit) Set <p>Number of returned results.</p><p>Value range: [0, 200]</p>
 */
class DescribeGlobalAcceleratorAccessLogRequest extends AbstractModel
{
    /**
     * @var string <p>Unique Id of the ga instance</p>
     */
    public $GlobalAcceleratorId;

    /**
     * @var array <p>Query filter parameters. { &quot;Name&quot;: &quot;listener-id&quot;, &quot;Values&quot;: [&quot;listener unique id&quot;] },{ &quot;Name&quot;: &quot;endpoint-group-id&quot;, &quot;Values&quot;: [&quot;Terminal node group unique id&quot;] },{ &quot;Name&quot;: &quot;access_log_id&quot;, &quot;Values&quot;: [&quot;log unique id&quot;] }</p>
     */
    public $Filters;

    /**
     * @var integer <p>Offset. Default value: 0.</p>
     */
    public $Offset;

    /**
     * @var integer <p>Number of returned results.</p><p>Value range: [0, 200]</p>
     */
    public $Limit;

    /**
     * @param string $GlobalAcceleratorId <p>Unique Id of the ga instance</p>
     * @param array $Filters <p>Query filter parameters. { &quot;Name&quot;: &quot;listener-id&quot;, &quot;Values&quot;: [&quot;listener unique id&quot;] },{ &quot;Name&quot;: &quot;endpoint-group-id&quot;, &quot;Values&quot;: [&quot;Terminal node group unique id&quot;] },{ &quot;Name&quot;: &quot;access_log_id&quot;, &quot;Values&quot;: [&quot;log unique id&quot;] }</p>
     * @param integer $Offset <p>Offset. Default value: 0.</p>
     * @param integer $Limit <p>Number of returned results.</p><p>Value range: [0, 200]</p>
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
        if (array_key_exists("GlobalAcceleratorId",$param) and $param["GlobalAcceleratorId"] !== null) {
            $this->GlobalAcceleratorId = $param["GlobalAcceleratorId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
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
