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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Sorting field.
 *
 * @method string getDirection() Obtain Sorting order. Asc (ascending order) or Desc (descending order). Not case-sensitive.
 * @method void setDirection(string $Direction) Set Sorting order. Asc (ascending order) or Desc (descending order). Not case-sensitive.
 * @method string getName() Obtain Sort field name
 * @method void setName(string $Name) Set Sort field name
 */
class OrderBy extends AbstractModel
{
    /**
     * @var string Sorting order. Asc (ascending order) or Desc (descending order). Not case-sensitive.
     */
    public $Direction;

    /**
     * @var string Sort field name
     */
    public $Name;

    /**
     * @param string $Direction Sorting order. Asc (ascending order) or Desc (descending order). Not case-sensitive.
     * @param string $Name Sort field name
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
        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
