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
 * DescribeZones request structure.
 *
 * @method integer getOffset() Obtain The page offset. Default value: 0
 * @method void setOffset(integer $Offset) Set The page offset. Default value: 0
 * @method integer getLimit() Obtain The paginated query limit. Default value: 20. Maximum value: 1000.
 * @method void setLimit(integer $Limit) Set The paginated query limit. Default value: 20. Maximum value: 1000.
 * @method array getFilters() Obtain Filter criteria. Each filter criteria can have up to 20 entries.
<li>`zone-name`:<br>   Filter by <strong>site name</strong><br>   Type: String<br>   Required: No<li>`zone-id`:<br>   Filter by <strong>site ID</strong>, such as zone-xxx<br>   Type: String<br>   Required: No<li>`status`:<br>   Filter by <strong>site status</strong><br>   Type: String<br>   Required: No<li>`tag-key`:<br>   Filter by <strong>tag key</strong><br>   Type: String<br>   Required: No<li>`tag-value`:<br>   Filter by <strong>tag value</strong><br>   Type: String<br>   Required: No<li>`Fuzzy`:<br>   Filter by <strong>values in fuzzy query</strong> (only `zone-name` allowed). Values limit: 1<br>   Type: Boolean<br>   Required: No<br>   Default value: false
 * @method void setFilters(array $Filters) Set Filter criteria. Each filter criteria can have up to 20 entries.
<li>`zone-name`:<br>   Filter by <strong>site name</strong><br>   Type: String<br>   Required: No<li>`zone-id`:<br>   Filter by <strong>site ID</strong>, such as zone-xxx<br>   Type: String<br>   Required: No<li>`status`:<br>   Filter by <strong>site status</strong><br>   Type: String<br>   Required: No<li>`tag-key`:<br>   Filter by <strong>tag key</strong><br>   Type: String<br>   Required: No<li>`tag-value`:<br>   Filter by <strong>tag value</strong><br>   Type: String<br>   Required: No<li>`Fuzzy`:<br>   Filter by <strong>values in fuzzy query</strong> (only `zone-name` allowed). Values limit: 1<br>   Type: Boolean<br>   Required: No<br>   Default value: false
 */
class DescribeZonesRequest extends AbstractModel
{
    /**
     * @var integer The page offset. Default value: 0
     */
    public $Offset;

    /**
     * @var integer The paginated query limit. Default value: 20. Maximum value: 1000.
     */
    public $Limit;

    /**
     * @var array Filter criteria. Each filter criteria can have up to 20 entries.
<li>`zone-name`:<br>   Filter by <strong>site name</strong><br>   Type: String<br>   Required: No<li>`zone-id`:<br>   Filter by <strong>site ID</strong>, such as zone-xxx<br>   Type: String<br>   Required: No<li>`status`:<br>   Filter by <strong>site status</strong><br>   Type: String<br>   Required: No<li>`tag-key`:<br>   Filter by <strong>tag key</strong><br>   Type: String<br>   Required: No<li>`tag-value`:<br>   Filter by <strong>tag value</strong><br>   Type: String<br>   Required: No<li>`Fuzzy`:<br>   Filter by <strong>values in fuzzy query</strong> (only `zone-name` allowed). Values limit: 1<br>   Type: Boolean<br>   Required: No<br>   Default value: false
     */
    public $Filters;

    /**
     * @param integer $Offset The page offset. Default value: 0
     * @param integer $Limit The paginated query limit. Default value: 20. Maximum value: 1000.
     * @param array $Filters Filter criteria. Each filter criteria can have up to 20 entries.
<li>`zone-name`:<br>   Filter by <strong>site name</strong><br>   Type: String<br>   Required: No<li>`zone-id`:<br>   Filter by <strong>site ID</strong>, such as zone-xxx<br>   Type: String<br>   Required: No<li>`status`:<br>   Filter by <strong>site status</strong><br>   Type: String<br>   Required: No<li>`tag-key`:<br>   Filter by <strong>tag key</strong><br>   Type: String<br>   Required: No<li>`tag-value`:<br>   Filter by <strong>tag value</strong><br>   Type: String<br>   Required: No<li>`Fuzzy`:<br>   Filter by <strong>values in fuzzy query</strong> (only `zone-name` allowed). Values limit: 1<br>   Type: Boolean<br>   Required: No<br>   Default value: false
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new AdvancedFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
