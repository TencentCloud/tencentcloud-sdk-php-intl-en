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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The image operations of a video editing/compositing task.
 *
 * @method string getType() Obtain The type. Valid values:
u200c<li>`Rotate`: Image rotation. </li>
<li>`Flip`: Image flipping. </li>
 * @method void setType(string $Type) Set The type. Valid values:
u200c<li>`Rotate`: Image rotation. </li>
<li>`Flip`: Image flipping. </li>
 * @method float getRotateAngle() Obtain This is valid if `Type` is `Rotate`. The angle of rotation around the image center. Value range: 0–360.
 * @method void setRotateAngle(float $RotateAngle) Set This is valid if `Type` is `Rotate`. The angle of rotation around the image center. Value range: 0–360.
 * @method string getFlipType() Obtain This is valid if `Type` is `Flip`. How to flip the image. Valid values:xa0
u200c<li>`Horizental`: Flip horizontally. </li>
<li>`Vertical`: Flip vertically. </li>
 * @method void setFlipType(string $FlipType) Set This is valid if `Type` is `Flip`. How to flip the image. Valid values:xa0
u200c<li>`Horizental`: Flip horizontally. </li>
<li>`Vertical`: Flip vertically. </li>
 */
class ComposeImageOperation extends AbstractModel
{
    /**
     * @var string The type. Valid values:
u200c<li>`Rotate`: Image rotation. </li>
<li>`Flip`: Image flipping. </li>
     */
    public $Type;

    /**
     * @var float This is valid if `Type` is `Rotate`. The angle of rotation around the image center. Value range: 0–360.
     */
    public $RotateAngle;

    /**
     * @var string This is valid if `Type` is `Flip`. How to flip the image. Valid values:xa0
u200c<li>`Horizental`: Flip horizontally. </li>
<li>`Vertical`: Flip vertically. </li>
     */
    public $FlipType;

    /**
     * @param string $Type The type. Valid values:
u200c<li>`Rotate`: Image rotation. </li>
<li>`Flip`: Image flipping. </li>
     * @param float $RotateAngle This is valid if `Type` is `Rotate`. The angle of rotation around the image center. Value range: 0–360.
     * @param string $FlipType This is valid if `Type` is `Flip`. How to flip the image. Valid values:xa0
u200c<li>`Horizental`: Flip horizontally. </li>
<li>`Vertical`: Flip vertically. </li>
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("RotateAngle",$param) and $param["RotateAngle"] !== null) {
            $this->RotateAngle = $param["RotateAngle"];
        }

        if (array_key_exists("FlipType",$param) and $param["FlipType"] !== null) {
            $this->FlipType = $param["FlipType"];
        }
    }
}
