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
 * DescribeSecurityAPIResource request structure.
 *
 * @method string getZoneId() Obtain Zone ID.		
 * @method void setZoneId(string $ZoneId) Set Zone ID.		
 * @method integer getLimit() Obtain Paginated query limit. default value: 20, maximum value: 100.
 * @method void setLimit(integer $Limit) Set Paginated query limit. default value: 20, maximum value: 100.
 * @method integer getOffset() Obtain The offset of paginated query. Default value: 0.
 * @method void setOffset(integer $Offset) Set The offset of paginated query. Default value: 0.
 */
class DescribeSecurityAPIResourceRequest extends AbstractModel
{
    /**
     * @var string Zone ID.		
     */
    public $ZoneId;

    /**
     * @var integer Paginated query limit. default value: 20, maximum value: 100.
     */
    public $Limit;

    /**
     * @var integer The offset of paginated query. Default value: 0.
     */
    public $Offset;

    /**
     * @param string $ZoneId Zone ID.		
     * @param integer $Limit Paginated query limit. default value: 20, maximum value: 100.
     * @param integer $Offset The offset of paginated query. Default value: 0.
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
