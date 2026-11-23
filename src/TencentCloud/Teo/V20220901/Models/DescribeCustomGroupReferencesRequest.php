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
 * DescribeCustomGroupReferences request structure.
 *
 * @method string getZoneId() Obtain <p>Site ID.</p>
 * @method void setZoneId(string $ZoneId) Set <p>Site ID.</p>
 * @method string getGroupId() Obtain <p>Custom group ID.</p>
 * @method void setGroupId(string $GroupId) Set <p>Custom group ID.</p>
 * @method integer getOffset() Obtain <p>Pagination offset.</p><p>Default value: 0</p>
 * @method void setOffset(integer $Offset) Set <p>Pagination offset.</p><p>Default value: 0</p>
 * @method integer getLimit() Obtain <p>Number of configurations that reference the custom group returned in a paginated query.</p><p>Value range: [1, 200]</p><p>Default value: 20</p>
 * @method void setLimit(integer $Limit) Set <p>Number of configurations that reference the custom group returned in a paginated query.</p><p>Value range: [1, 200]</p><p>Default value: 20</p>
 */
class DescribeCustomGroupReferencesRequest extends AbstractModel
{
    /**
     * @var string <p>Site ID.</p>
     */
    public $ZoneId;

    /**
     * @var string <p>Custom group ID.</p>
     */
    public $GroupId;

    /**
     * @var integer <p>Pagination offset.</p><p>Default value: 0</p>
     */
    public $Offset;

    /**
     * @var integer <p>Number of configurations that reference the custom group returned in a paginated query.</p><p>Value range: [1, 200]</p><p>Default value: 20</p>
     */
    public $Limit;

    /**
     * @param string $ZoneId <p>Site ID.</p>
     * @param string $GroupId <p>Custom group ID.</p>
     * @param integer $Offset <p>Pagination offset.</p><p>Default value: 0</p>
     * @param integer $Limit <p>Number of configurations that reference the custom group returned in a paginated query.</p><p>Value range: [1, 200]</p><p>Default value: 20</p>
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
