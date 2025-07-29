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
namespace TencentCloud\Ctsdb\V20230202\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Sorting parameter, which is used for sorting the query results.
 *
 * @method string getName() Obtain Sorting field.
 * @method void setName(string $Name) Set Sorting field.
 * @method string getType() Obtain Sorting method.
 * @method void setType(string $Type) Set Sorting method.
 */
class Order extends AbstractModel
{
    /**
     * @var string Sorting field.
     */
    public $Name;

    /**
     * @var string Sorting method.
     */
    public $Type;

    /**
     * @param string $Name Sorting field.
     * @param string $Type Sorting method.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
