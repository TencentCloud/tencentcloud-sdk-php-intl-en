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
namespace TencentCloud\Iai\V20200303\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Hat information
 *
 * @method AttributeItem getStyle() Obtain Hat wearing status information.
The `Type` values of the `AttributeItem` include: 0: no hat; 1: general hat; 2: helmet; 3: security guard hat.
 * @method void setStyle(AttributeItem $Style) Set Hat wearing status information.
The `Type` values of the `AttributeItem` include: 0: no hat; 1: general hat; 2: helmet; 3: security guard hat.
 * @method AttributeItem getColor() Obtain Hat color.
The `Type` values of the `AttributeItem` include: 0: no hat; 1: red; 2: yellow; 3: blue; 4: black; 5: gray; 6: mixed colors.
 * @method void setColor(AttributeItem $Color) Set Hat color.
The `Type` values of the `AttributeItem` include: 0: no hat; 1: red; 2: yellow; 3: blue; 4: black; 5: gray; 6: mixed colors.
 */
class Hat extends AbstractModel
{
    /**
     * @var AttributeItem Hat wearing status information.
The `Type` values of the `AttributeItem` include: 0: no hat; 1: general hat; 2: helmet; 3: security guard hat.
     */
    public $Style;

    /**
     * @var AttributeItem Hat color.
The `Type` values of the `AttributeItem` include: 0: no hat; 1: red; 2: yellow; 3: blue; 4: black; 5: gray; 6: mixed colors.
     */
    public $Color;

    /**
     * @param AttributeItem $Style Hat wearing status information.
The `Type` values of the `AttributeItem` include: 0: no hat; 1: general hat; 2: helmet; 3: security guard hat.
     * @param AttributeItem $Color Hat color.
The `Type` values of the `AttributeItem` include: 0: no hat; 1: red; 2: yellow; 3: blue; 4: black; 5: gray; 6: mixed colors.
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
        if (array_key_exists("Style",$param) and $param["Style"] !== null) {
            $this->Style = new AttributeItem();
            $this->Style->deserialize($param["Style"]);
        }

        if (array_key_exists("Color",$param) and $param["Color"] !== null) {
            $this->Color = new AttributeItem();
            $this->Color->deserialize($param["Color"]);
        }
    }
}
