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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Operation such as image rotation and flipping
 *
 * @method string getType() Obtain Type. Valid values:
<li> Rotate: image rotation.</li>
<li> Flip: image flipping.</li>
 * @method void setType(string $Type) Set Type. Valid values:
<li> Rotate: image rotation.</li>
<li> Flip: image flipping.</li>
 * @method float getRotateAngle() Obtain Rotation angle of image with its center point as origin. Value range: 0-360. This parameter is valid if `Type` is `Rotate`.
 * @method void setRotateAngle(float $RotateAngle) Set Rotation angle of image with its center point as origin. Value range: 0-360. This parameter is valid if `Type` is `Rotate`.
 * @method string getFlip() Obtain Image flipping action. Valid values:
<li>Horizental: horizontal flipping, i.e., horizontally mirrored.</li>
<li>Vertical: vertical flipping, i.e., vertically mirrored.</li>
This is valid if `Type` is `Flip`.
 * @method void setFlip(string $Flip) Set Image flipping action. Valid values:
<li>Horizental: horizontal flipping, i.e., horizontally mirrored.</li>
<li>Vertical: vertical flipping, i.e., vertically mirrored.</li>
This is valid if `Type` is `Flip`.
 */
class ImageTransform extends AbstractModel
{
    /**
     * @var string Type. Valid values:
<li> Rotate: image rotation.</li>
<li> Flip: image flipping.</li>
     */
    public $Type;

    /**
     * @var float Rotation angle of image with its center point as origin. Value range: 0-360. This parameter is valid if `Type` is `Rotate`.
     */
    public $RotateAngle;

    /**
     * @var string Image flipping action. Valid values:
<li>Horizental: horizontal flipping, i.e., horizontally mirrored.</li>
<li>Vertical: vertical flipping, i.e., vertically mirrored.</li>
This is valid if `Type` is `Flip`.
     */
    public $Flip;

    /**
     * @param string $Type Type. Valid values:
<li> Rotate: image rotation.</li>
<li> Flip: image flipping.</li>
     * @param float $RotateAngle Rotation angle of image with its center point as origin. Value range: 0-360. This parameter is valid if `Type` is `Rotate`.
     * @param string $Flip Image flipping action. Valid values:
<li>Horizental: horizontal flipping, i.e., horizontally mirrored.</li>
<li>Vertical: vertical flipping, i.e., vertically mirrored.</li>
This is valid if `Type` is `Flip`.
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

        if (array_key_exists("Flip",$param) and $param["Flip"] !== null) {
            $this->Flip = $param["Flip"];
        }
    }
}
