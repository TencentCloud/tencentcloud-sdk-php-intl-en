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
 * DescribeWebSecurityTemplates request structure.
 *
 * @method array getZoneIds() Obtain List of zone IDs. A maximum of 100 zones can be queried in a single request.
 * @method void setZoneIds(array $ZoneIds) Set List of zone IDs. A maximum of 100 zones can be queried in a single request.
 */
class DescribeWebSecurityTemplatesRequest extends AbstractModel
{
    /**
     * @var array List of zone IDs. A maximum of 100 zones can be queried in a single request.
     */
    public $ZoneIds;

    /**
     * @param array $ZoneIds List of zone IDs. A maximum of 100 zones can be queried in a single request.
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
    }
}
