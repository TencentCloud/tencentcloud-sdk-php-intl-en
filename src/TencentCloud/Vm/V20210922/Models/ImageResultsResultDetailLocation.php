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
namespace TencentCloud\Vm\V20210922\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Position information of image details
 *
 * @method float getX() Obtain X-coordinate
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setX(float $X) Set X-coordinate
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getY() Obtain Y-coordinate
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setY(float $Y) Set Y-coordinate
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getWidth() Obtain Width
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWidth(integer $Width) Set Width
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getHeight() Obtain Height
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHeight(integer $Height) Set Height
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getRotate() Obtain Rotation angle
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRotate(float $Rotate) Set Rotation angle
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ImageResultsResultDetailLocation extends AbstractModel
{
    /**
     * @var float X-coordinate
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $X;

    /**
     * @var float Y-coordinate
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Y;

    /**
     * @var integer Width
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Width;

    /**
     * @var integer Height
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Height;

    /**
     * @var float Rotation angle
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Rotate;

    /**
     * @param float $X X-coordinate
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $Y Y-coordinate
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Width Width
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Height Height
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $Rotate Rotation angle
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

        if (array_key_exists("Rotate",$param) and $param["Rotate"] !== null) {
            $this->Rotate = $param["Rotate"];
        }
    }
}
