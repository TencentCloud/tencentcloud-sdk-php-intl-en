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
 * DescribeCustomGroup request structure.
 *
 * @method string getZoneId() Obtain <p>Site ID.</p>
 * @method void setZoneId(string $ZoneId) Set <p>Site ID.</p>
 * @method string getGroupId() Obtain <p>Unique ID of the custom group.</p>
 * @method void setGroupId(string $GroupId) Set <p>Unique ID of the custom group.</p>
 * @method integer getLimit() Obtain <p>Number limit of paginated query for GroupItems.</p><p>Valid range: [1, 50000]</p><p>Default value: 500</p>
 * @method void setLimit(integer $Limit) Set <p>Number limit of paginated query for GroupItems.</p><p>Valid range: [1, 50000]</p><p>Default value: 500</p>
 * @method integer getOffset() Obtain <p>Offset of paginated query for GroupItems.</p><p>Default value: 0</p>
 * @method void setOffset(integer $Offset) Set <p>Offset of paginated query for GroupItems.</p><p>Default value: 0</p>
 */
class DescribeCustomGroupRequest extends AbstractModel
{
    /**
     * @var string <p>Site ID.</p>
     */
    public $ZoneId;

    /**
     * @var string <p>Unique ID of the custom group.</p>
     */
    public $GroupId;

    /**
     * @var integer <p>Number limit of paginated query for GroupItems.</p><p>Valid range: [1, 50000]</p><p>Default value: 500</p>
     */
    public $Limit;

    /**
     * @var integer <p>Offset of paginated query for GroupItems.</p><p>Default value: 0</p>
     */
    public $Offset;

    /**
     * @param string $ZoneId <p>Site ID.</p>
     * @param string $GroupId <p>Unique ID of the custom group.</p>
     * @param integer $Limit <p>Number limit of paginated query for GroupItems.</p><p>Valid range: [1, 50000]</p><p>Default value: 500</p>
     * @param integer $Offset <p>Offset of paginated query for GroupItems.</p><p>Default value: 0</p>
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
