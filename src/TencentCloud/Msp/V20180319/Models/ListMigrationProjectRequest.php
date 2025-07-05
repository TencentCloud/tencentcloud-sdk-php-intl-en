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
namespace TencentCloud\Msp\V20180319\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListMigrationProject request structure.
 *
 * @method integer getOffset() Obtain The initial number of records, default value: 0
 * @method void setOffset(integer $Offset) Set The initial number of records, default value: 0
 * @method integer getLimit() Obtain The number of records returned, default value: 500
 * @method void setLimit(integer $Limit) Set The number of records returned, default value: 500
 */
class ListMigrationProjectRequest extends AbstractModel
{
    /**
     * @var integer The initial number of records, default value: 0
     */
    public $Offset;

    /**
     * @var integer The number of records returned, default value: 500
     */
    public $Limit;

    /**
     * @param integer $Offset The initial number of records, default value: 0
     * @param integer $Limit The number of records returned, default value: 500
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
    }
}
