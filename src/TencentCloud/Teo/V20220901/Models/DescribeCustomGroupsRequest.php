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
 * DescribeCustomGroups request structure.
 *
 * @method string getZoneId() Obtain <p>Site ID.</p>
 * @method void setZoneId(string $ZoneId) Set <p>Site ID.</p>
 * @method array getGroupTypes() Obtain <p>List of custom group types. If not specified, all types are queried.</p>
 * @method void setGroupTypes(array $GroupTypes) Set <p>List of custom group types. If not specified, all types are queried.</p>
 * @method integer getLimit() Obtain <p>Number limit of paginated query.</p><p>Valid range: [1, 100]</p><p>Default value: 10</p>
 * @method void setLimit(integer $Limit) Set <p>Number limit of paginated query.</p><p>Valid range: [1, 100]</p><p>Default value: 10</p>
 * @method integer getOffset() Obtain <p>Offset of paginated query.</p><p>Default value: 0</p>
 * @method void setOffset(integer $Offset) Set <p>Offset of paginated query.</p><p>Default value: 0</p>
 */
class DescribeCustomGroupsRequest extends AbstractModel
{
    /**
     * @var string <p>Site ID.</p>
     */
    public $ZoneId;

    /**
     * @var array <p>List of custom group types. If not specified, all types are queried.</p>
     */
    public $GroupTypes;

    /**
     * @var integer <p>Number limit of paginated query.</p><p>Valid range: [1, 100]</p><p>Default value: 10</p>
     */
    public $Limit;

    /**
     * @var integer <p>Offset of paginated query.</p><p>Default value: 0</p>
     */
    public $Offset;

    /**
     * @param string $ZoneId <p>Site ID.</p>
     * @param array $GroupTypes <p>List of custom group types. If not specified, all types are queried.</p>
     * @param integer $Limit <p>Number limit of paginated query.</p><p>Valid range: [1, 100]</p><p>Default value: 10</p>
     * @param integer $Offset <p>Offset of paginated query.</p><p>Default value: 0</p>
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

        if (array_key_exists("GroupTypes",$param) and $param["GroupTypes"] !== null) {
            $this->GroupTypes = $param["GroupTypes"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
