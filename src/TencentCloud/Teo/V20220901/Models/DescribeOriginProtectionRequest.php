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
 * DescribeOriginProtection request structure.
 *
 * @method array getZoneIds() Obtain Site ID set to be queried. This parameter is required.
 * @method void setZoneIds(array $ZoneIds) Set Site ID set to be queried. This parameter is required.
 * @method array getFilters() Obtain Filter criteria. The maximum value of Filters.Values is 20. The detailed filter criteria are as follows:
<li>need-update<br>        Filter by <strong>whether the site needs to update the origin protection IP allowlist</strong>.<br>       Type: String<br>       Required: No<br>       Option:<br>       true: needs to be updated<br>       false: no update required<br></li>
<li>plan-support<br>   Filter by [<strong>whether the site package supports origin protection</strong>].<br>   Type: String<br>   Required: No<br>   Options:<br>   true: supported<br>   false: not supported<br></li>
 * @method void setFilters(array $Filters) Set Filter criteria. The maximum value of Filters.Values is 20. The detailed filter criteria are as follows:
<li>need-update<br>        Filter by <strong>whether the site needs to update the origin protection IP allowlist</strong>.<br>       Type: String<br>       Required: No<br>       Option:<br>       true: needs to be updated<br>       false: no update required<br></li>
<li>plan-support<br>   Filter by [<strong>whether the site package supports origin protection</strong>].<br>   Type: String<br>   Required: No<br>   Options:<br>   true: supported<br>   false: not supported<br></li>
 * @method integer getOffset() Obtain Paginated query offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Paginated query offset. Default value: 0.
 * @method integer getLimit() Obtain The limit of paginated query. Default value: 20. Maximum value: 1,000.
 * @method void setLimit(integer $Limit) Set The limit of paginated query. Default value: 20. Maximum value: 1,000.
 */
class DescribeOriginProtectionRequest extends AbstractModel
{
    /**
     * @var array Site ID set to be queried. This parameter is required.
     */
    public $ZoneIds;

    /**
     * @var array Filter criteria. The maximum value of Filters.Values is 20. The detailed filter criteria are as follows:
<li>need-update<br>        Filter by <strong>whether the site needs to update the origin protection IP allowlist</strong>.<br>       Type: String<br>       Required: No<br>       Option:<br>       true: needs to be updated<br>       false: no update required<br></li>
<li>plan-support<br>   Filter by [<strong>whether the site package supports origin protection</strong>].<br>   Type: String<br>   Required: No<br>   Options:<br>   true: supported<br>   false: not supported<br></li>
     */
    public $Filters;

    /**
     * @var integer Paginated query offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer The limit of paginated query. Default value: 20. Maximum value: 1,000.
     */
    public $Limit;

    /**
     * @param array $ZoneIds Site ID set to be queried. This parameter is required.
     * @param array $Filters Filter criteria. The maximum value of Filters.Values is 20. The detailed filter criteria are as follows:
<li>need-update<br>        Filter by <strong>whether the site needs to update the origin protection IP allowlist</strong>.<br>       Type: String<br>       Required: No<br>       Option:<br>       true: needs to be updated<br>       false: no update required<br></li>
<li>plan-support<br>   Filter by [<strong>whether the site package supports origin protection</strong>].<br>   Type: String<br>   Required: No<br>   Options:<br>   true: supported<br>   false: not supported<br></li>
     * @param integer $Offset Paginated query offset. Default value: 0.
     * @param integer $Limit The limit of paginated query. Default value: 20. Maximum value: 1,000.
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
        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
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
