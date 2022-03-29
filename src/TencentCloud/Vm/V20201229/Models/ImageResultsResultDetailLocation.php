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
namespace TencentCloud\Vm\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Position information of image details
 *
 * @method float getX() Obtain This parameter is used to indicate the pixel position of the **abscissa (X)** of the top-left corner of the OCR detection frame. It can be combined with other parameters to uniquely determine the size and position of the detection frame.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setX(float $X) Set This parameter is used to indicate the pixel position of the **abscissa (X)** of the top-left corner of the OCR detection frame. It can be combined with other parameters to uniquely determine the size and position of the detection frame.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method float getY() Obtain This parameter is used to indicate the pixel position of the **ordinate (Y)** of the top-left corner of the OCR detection frame. It can be combined with other parameters to uniquely determine the size and position of the detection frame.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setY(float $Y) Set This parameter is used to indicate the pixel position of the **ordinate (Y)** of the top-left corner of the OCR detection frame. It can be combined with other parameters to uniquely determine the size and position of the detection frame.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getWidth() Obtain This parameter is used to indicate the **width of the OCR detection frame** (the length starting from the top-left corner and extending to the right on the X axis). It can be combined with other parameters to uniquely determine the size and position of the detection frame.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setWidth(integer $Width) Set This parameter is used to indicate the **width of the OCR detection frame** (the length starting from the top-left corner and extending to the right on the X axis). It can be combined with other parameters to uniquely determine the size and position of the detection frame.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getHeight() Obtain This parameter is used to indicate the **height of the OCR detection frame** (the length starting from the top-left corner and extending down the Y axis). It can be combined with other parameters to uniquely determine the size and position of the detection frame.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setHeight(integer $Height) Set This parameter is used to indicate the **height of the OCR detection frame** (the length starting from the top-left corner and extending down the Y axis). It can be combined with other parameters to uniquely determine the size and position of the detection frame.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method float getRotate() Obtain This parameter is used to indicate the **rotation angle of the OCR detection frame**. Valid values: **0–360** (**degrees**), and the direction is **counterclockwise rotation**. This parameter can be combined with the `X` and `Y` coordinate parameters to uniquely determine the specific position of the detection frame.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRotate(float $Rotate) Set This parameter is used to indicate the **rotation angle of the OCR detection frame**. Valid values: **0–360** (**degrees**), and the direction is **counterclockwise rotation**. This parameter can be combined with the `X` and `Y` coordinate parameters to uniquely determine the specific position of the detection frame.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class ImageResultsResultDetailLocation extends AbstractModel
{
    /**
     * @var float This parameter is used to indicate the pixel position of the **abscissa (X)** of the top-left corner of the OCR detection frame. It can be combined with other parameters to uniquely determine the size and position of the detection frame.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $X;

    /**
     * @var float This parameter is used to indicate the pixel position of the **ordinate (Y)** of the top-left corner of the OCR detection frame. It can be combined with other parameters to uniquely determine the size and position of the detection frame.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Y;

    /**
     * @var integer This parameter is used to indicate the **width of the OCR detection frame** (the length starting from the top-left corner and extending to the right on the X axis). It can be combined with other parameters to uniquely determine the size and position of the detection frame.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Width;

    /**
     * @var integer This parameter is used to indicate the **height of the OCR detection frame** (the length starting from the top-left corner and extending down the Y axis). It can be combined with other parameters to uniquely determine the size and position of the detection frame.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Height;

    /**
     * @var float This parameter is used to indicate the **rotation angle of the OCR detection frame**. Valid values: **0–360** (**degrees**), and the direction is **counterclockwise rotation**. This parameter can be combined with the `X` and `Y` coordinate parameters to uniquely determine the specific position of the detection frame.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Rotate;

    /**
     * @param float $X This parameter is used to indicate the pixel position of the **abscissa (X)** of the top-left corner of the OCR detection frame. It can be combined with other parameters to uniquely determine the size and position of the detection frame.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param float $Y This parameter is used to indicate the pixel position of the **ordinate (Y)** of the top-left corner of the OCR detection frame. It can be combined with other parameters to uniquely determine the size and position of the detection frame.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Width This parameter is used to indicate the **width of the OCR detection frame** (the length starting from the top-left corner and extending to the right on the X axis). It can be combined with other parameters to uniquely determine the size and position of the detection frame.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Height This parameter is used to indicate the **height of the OCR detection frame** (the length starting from the top-left corner and extending down the Y axis). It can be combined with other parameters to uniquely determine the size and position of the detection frame.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param float $Rotate This parameter is used to indicate the **rotation angle of the OCR detection frame**. Valid values: **0–360** (**degrees**), and the direction is **counterclockwise rotation**. This parameter can be combined with the `X` and `Y` coordinate parameters to uniquely determine the specific position of the detection frame.
Note: this field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("Rotate",$param) and $param["Rotate"] !== null) {
            $this->Rotate = $param["Rotate"];
        }
    }
}
