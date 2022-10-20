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
 * DescribeOriginGroup request structure.
 *
 * @method integer getOffset() Obtain Offset for paginated queries. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset for paginated queries. Default value: 0.
 * @method integer getLimit() Obtain Limit on paginated queries. Value range: 1-1000. Default value: 10.
 * @method void setLimit(integer $Limit) Set Limit on paginated queries. Value range: 1-1000. Default value: 10.
 * @method array getFilters() Obtain Filter criteria. Each filter criteria can have up to 20 entries.
<li>`zone-id`<br>   Filter by <strong>site ID</strong>, such as zone-20hzkd4rdmy0<br>   Type: String<br>   Required: No<br>   Fuzzy query: Not supported<li>`origin-group-id`:<br>   Filter by <strong>origin group ID</strong>, such as origin-2ccgtb24-7dc5-46s2-9r3e-95825d53dwe3a<br>   Type: String<br>   Required: No<br>   Fuzzy query: Not supported<li>`origin-group-name`:<br>   Filter by <strong>origin group name</strong><br>   Type: String<br>   Required: No<br>   Fuzzy query: Supported (only one origin group name allowed in a query)
 * @method void setFilters(array $Filters) Set Filter criteria. Each filter criteria can have up to 20 entries.
<li>`zone-id`<br>   Filter by <strong>site ID</strong>, such as zone-20hzkd4rdmy0<br>   Type: String<br>   Required: No<br>   Fuzzy query: Not supported<li>`origin-group-id`:<br>   Filter by <strong>origin group ID</strong>, such as origin-2ccgtb24-7dc5-46s2-9r3e-95825d53dwe3a<br>   Type: String<br>   Required: No<br>   Fuzzy query: Not supported<li>`origin-group-name`:<br>   Filter by <strong>origin group name</strong><br>   Type: String<br>   Required: No<br>   Fuzzy query: Supported (only one origin group name allowed in a query)
 */
class DescribeOriginGroupRequest extends AbstractModel
{
    /**
     * @var integer Offset for paginated queries. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Limit on paginated queries. Value range: 1-1000. Default value: 10.
     */
    public $Limit;

    /**
     * @var array Filter criteria. Each filter criteria can have up to 20 entries.
<li>`zone-id`<br>   Filter by <strong>site ID</strong>, such as zone-20hzkd4rdmy0<br>   Type: String<br>   Required: No<br>   Fuzzy query: Not supported<li>`origin-group-id`:<br>   Filter by <strong>origin group ID</strong>, such as origin-2ccgtb24-7dc5-46s2-9r3e-95825d53dwe3a<br>   Type: String<br>   Required: No<br>   Fuzzy query: Not supported<li>`origin-group-name`:<br>   Filter by <strong>origin group name</strong><br>   Type: String<br>   Required: No<br>   Fuzzy query: Supported (only one origin group name allowed in a query)
     */
    public $Filters;

    /**
     * @param integer $Offset Offset for paginated queries. Default value: 0.
     * @param integer $Limit Limit on paginated queries. Value range: 1-1000. Default value: 10.
     * @param array $Filters Filter criteria. Each filter criteria can have up to 20 entries.
<li>`zone-id`<br>   Filter by <strong>site ID</strong>, such as zone-20hzkd4rdmy0<br>   Type: String<br>   Required: No<br>   Fuzzy query: Not supported<li>`origin-group-id`:<br>   Filter by <strong>origin group ID</strong>, such as origin-2ccgtb24-7dc5-46s2-9r3e-95825d53dwe3a<br>   Type: String<br>   Required: No<br>   Fuzzy query: Not supported<li>`origin-group-name`:<br>   Filter by <strong>origin group name</strong><br>   Type: String<br>   Required: No<br>   Fuzzy query: Supported (only one origin group name allowed in a query)
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
