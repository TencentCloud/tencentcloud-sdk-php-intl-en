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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * <p>Sorting condition</p>
 *
 * @method string getName() Obtain <p>Sort field name, for example, create_time</p>
 * @method void setName(string $Name) Set <p>Sort field name, for example, create_time</p>
 * @method integer getDirection() Obtain <p>Sorting order. 1: ascending, 2: descending</p><table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>SORT_ORDER_INVALID</td><td>0</td><td>invalid</td></tr><tr><td>SORT_ORDER_ASC</td><td>1</td><td>ascending</td></tr><tr><td>SORT_ORDER_DESC</td><td>2</td><td>descending</td></tr></tbody></table>
 * @method void setDirection(integer $Direction) Set <p>Sorting order. 1: ascending, 2: descending</p><table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>SORT_ORDER_INVALID</td><td>0</td><td>invalid</td></tr><tr><td>SORT_ORDER_ASC</td><td>1</td><td>ascending</td></tr><tr><td>SORT_ORDER_DESC</td><td>2</td><td>descending</td></tr></tbody></table>
 */
class Sort extends AbstractModel
{
    /**
     * @var string <p>Sort field name, for example, create_time</p>
     */
    public $Name;

    /**
     * @var integer <p>Sorting order. 1: ascending, 2: descending</p><table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>SORT_ORDER_INVALID</td><td>0</td><td>invalid</td></tr><tr><td>SORT_ORDER_ASC</td><td>1</td><td>ascending</td></tr><tr><td>SORT_ORDER_DESC</td><td>2</td><td>descending</td></tr></tbody></table>
     */
    public $Direction;

    /**
     * @param string $Name <p>Sort field name, for example, create_time</p>
     * @param integer $Direction <p>Sorting order. 1: ascending, 2: descending</p><table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>SORT_ORDER_INVALID</td><td>0</td><td>invalid</td></tr><tr><td>SORT_ORDER_ASC</td><td>1</td><td>ascending</td></tr><tr><td>SORT_ORDER_DESC</td><td>2</td><td>descending</td></tr></tbody></table>
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

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }
    }
}
