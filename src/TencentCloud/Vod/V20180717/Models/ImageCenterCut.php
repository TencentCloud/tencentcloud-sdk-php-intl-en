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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Crop the image center.
 *
 * @method string getType() Obtain Image cropping type. Selectable values: Circle and Rectangle.
<li>Circle: Inscribed circle cropping, with the output image radius as Radius.</li>
<li>Rectangle: Rectangular crop. The output image width is Width and height is Height.</li>
 * @method void setType(string $Type) Set Image cropping type. Selectable values: Circle and Rectangle.
<li>Circle: Inscribed circle cropping, with the output image radius as Radius.</li>
<li>Rectangle: Rectangular crop. The output image width is Width and height is Height.</li>
 * @method integer getWidth() Obtain Width of the output image in pixels. Valid when Type is Rectangle.
 * @method void setWidth(integer $Width) Set Width of the output image in pixels. Valid when Type is Rectangle.
 * @method integer getHeight() Obtain Height of the output image. Unit: pixel. Valid when Type is Rectangle.
 * @method void setHeight(integer $Height) Set Height of the output image. Unit: pixel. Valid when Type is Rectangle.
 * @method integer getRadius() Obtain Radius of the output image. Unit: pixel. Valid when Type is Circle.
 * @method void setRadius(integer $Radius) Set Radius of the output image. Unit: pixel. Valid when Type is Circle.
 */
class ImageCenterCut extends AbstractModel
{
    /**
     * @var string Image cropping type. Selectable values: Circle and Rectangle.
<li>Circle: Inscribed circle cropping, with the output image radius as Radius.</li>
<li>Rectangle: Rectangular crop. The output image width is Width and height is Height.</li>
     */
    public $Type;

    /**
     * @var integer Width of the output image in pixels. Valid when Type is Rectangle.
     */
    public $Width;

    /**
     * @var integer Height of the output image. Unit: pixel. Valid when Type is Rectangle.
     */
    public $Height;

    /**
     * @var integer Radius of the output image. Unit: pixel. Valid when Type is Circle.
     */
    public $Radius;

    /**
     * @param string $Type Image cropping type. Selectable values: Circle and Rectangle.
<li>Circle: Inscribed circle cropping, with the output image radius as Radius.</li>
<li>Rectangle: Rectangular crop. The output image width is Width and height is Height.</li>
     * @param integer $Width Width of the output image in pixels. Valid when Type is Rectangle.
     * @param integer $Height Height of the output image. Unit: pixel. Valid when Type is Rectangle.
     * @param integer $Radius Radius of the output image. Unit: pixel. Valid when Type is Circle.
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

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("Radius",$param) and $param["Radius"] !== null) {
            $this->Radius = $param["Radius"];
        }
    }
}
