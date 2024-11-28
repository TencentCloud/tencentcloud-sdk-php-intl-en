<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Vclm\V20240523\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Input box
 *
 * @method integer getX() Obtain X-axis coordinate of the upper left corner

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setX(integer $X) Set X-axis coordinate of the upper left corner

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getY() Obtain Y-axis coordinate of the upper left corner

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setY(integer $Y) Set Y-axis coordinate of the upper left corner

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getWidth() Obtain Box width

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWidth(integer $Width) Set Box width

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getHeight() Obtain Box height

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHeight(integer $Height) Set Box height

Note: This field may return null, indicating that no valid values can be obtained.
 */
class LogoRect extends AbstractModel
{
    /**
     * @var integer X-axis coordinate of the upper left corner

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $X;

    /**
     * @var integer Y-axis coordinate of the upper left corner

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Y;

    /**
     * @var integer Box width

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Width;

    /**
     * @var integer Box height

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Height;

    /**
     * @param integer $X X-axis coordinate of the upper left corner

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Y Y-axis coordinate of the upper left corner

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Width Box width

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Height Box height

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

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }
    }
}
