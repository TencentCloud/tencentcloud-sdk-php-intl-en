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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Node location information
 *
 * @method float getX() Obtain Node horizontal coordinate
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setX(float $X) Set Node horizontal coordinate
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getY() Obtain Node vertical coordinate
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setY(float $Y) Set Node vertical coordinate
Note: This field may return null, indicating that no valid values can be obtained.
 */
class Position extends AbstractModel
{
    /**
     * @var float Node horizontal coordinate
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $X;

    /**
     * @var float Node vertical coordinate
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Y;

    /**
     * @param float $X Node horizontal coordinate
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $Y Node vertical coordinate
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("X",$param) and $param["X"] !== null) {
            $this->X = $param["X"];
        }

        if (array_key_exists("Y",$param) and $param["Y"] !== null) {
            $this->Y = $param["Y"];
        }
    }
}
