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
 * Image cropping details.
 *
 * @method string getType() Obtain The cropping type. Valid values:
<li>Circle: Cropping to circle. `Radius` specifies the radius of the output image.</li>
<li>Rectangle: Cropping to rectangle. `Width` and `Height` specify the width and height of the output image.</li>
 * @method void setType(string $Type) Set The cropping type. Valid values:
<li>Circle: Cropping to circle. `Radius` specifies the radius of the output image.</li>
<li>Rectangle: Cropping to rectangle. `Width` and `Height` specify the width and height of the output image.</li>
 * @method integer getWidth() Obtain The width (pixels) of the output image. This parameter is valid if `Type` is `Rectangle`.
 * @method void setWidth(integer $Width) Set The width (pixels) of the output image. This parameter is valid if `Type` is `Rectangle`.
 * @method integer getHeight() Obtain The height (pixels) of the output image. This parameter is valid if `Type` is `Rectangle`.
 * @method void setHeight(integer $Height) Set The height (pixels) of the output image. This parameter is valid if `Type` is `Rectangle`.
 * @method integer getRadius() Obtain The radius of the output image. This parameter is valid if `Type` is `Circle`.
 * @method void setRadius(integer $Radius) Set The radius of the output image. This parameter is valid if `Type` is `Circle`.
 */
class ImageCenterCut extends AbstractModel
{
    /**
     * @var string The cropping type. Valid values:
<li>Circle: Cropping to circle. `Radius` specifies the radius of the output image.</li>
<li>Rectangle: Cropping to rectangle. `Width` and `Height` specify the width and height of the output image.</li>
     */
    public $Type;

    /**
     * @var integer The width (pixels) of the output image. This parameter is valid if `Type` is `Rectangle`.
     */
    public $Width;

    /**
     * @var integer The height (pixels) of the output image. This parameter is valid if `Type` is `Rectangle`.
     */
    public $Height;

    /**
     * @var integer The radius of the output image. This parameter is valid if `Type` is `Circle`.
     */
    public $Radius;

    /**
     * @param string $Type The cropping type. Valid values:
<li>Circle: Cropping to circle. `Radius` specifies the radius of the output image.</li>
<li>Rectangle: Cropping to rectangle. `Width` and `Height` specify the width and height of the output image.</li>
     * @param integer $Width The width (pixels) of the output image. This parameter is valid if `Type` is `Rectangle`.
     * @param integer $Height The height (pixels) of the output image. This parameter is valid if `Type` is `Rectangle`.
     * @param integer $Radius The radius of the output image. This parameter is valid if `Type` is `Circle`.
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
