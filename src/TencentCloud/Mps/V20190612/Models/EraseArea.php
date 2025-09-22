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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Smart erasure. coordinate configuration of the removal area.
The region is defined by the coordinates of the upper left corner and the bottom-right corner.
The coordinate origin is the top-left corner of the frame and the coordinate points can be specified using pixel values or percentage units.
**For the Automatic Erasing Area:**
When the unit is %, the coordinate range is [0,1].
When unit is px, X value range is [0, video image width]. Y value range is [0, video image height].
**For the Specified area erasing:**
Specifies the coordinate range as [0,1) when the unit is %.
When unit: px, X value range [0, video image width], Y value range [0, video image height].
 *
 * @method float getLeftTopX() Obtain X-Axis coordinate of the upper left corner.
When Unit is set to 1 (percentage Unit), 0.05 indicates the horizontal distance from the upper left corner of the region to the top-left corner of the entire frame is 5% of the frame width.
 * @method void setLeftTopX(float $LeftTopX) Set X-Axis coordinate of the upper left corner.
When Unit is set to 1 (percentage Unit), 0.05 indicates the horizontal distance from the upper left corner of the region to the top-left corner of the entire frame is 5% of the frame width.
 * @method float getLeftTopY() Obtain Y-Axis coordinate of the upper left corner.
When Unit is set to 1 (using percentage Unit), 0.1 indicates the vertical distance from the top-left corner of the area to the top-left corner of the entire frame is 10% of the screen height.
 * @method void setLeftTopY(float $LeftTopY) Set Y-Axis coordinate of the upper left corner.
When Unit is set to 1 (using percentage Unit), 0.1 indicates the vertical distance from the top-left corner of the area to the top-left corner of the entire frame is 10% of the screen height.
 * @method float getRightBottomX() Obtain X-Axis coordinate of the bottom-right corner.
When Unit is set to 1 (percentage Unit), 0.75 indicates the horizontal distance from the bottom-right corner of the region to the top-left corner of the entire frame is 75% of the frame width.
 * @method void setRightBottomX(float $RightBottomX) Set X-Axis coordinate of the bottom-right corner.
When Unit is set to 1 (percentage Unit), 0.75 indicates the horizontal distance from the bottom-right corner of the region to the top-left corner of the entire frame is 75% of the frame width.
 * @method float getRightBottomY() Obtain Y-Axis coordinate of the bottom-right corner.
When Unit is set to 1 (using percentage Unit), 0.9 indicates the vertical distance from the bottom-right corner of the area to the top-left corner of the entire frame is 90% of the screen height.
 * @method void setRightBottomY(float $RightBottomY) Set Y-Axis coordinate of the bottom-right corner.
When Unit is set to 1 (using percentage Unit), 0.9 indicates the vertical distance from the bottom-right corner of the area to the top-left corner of the entire frame is 90% of the screen height.
 * @method integer getUnit() Obtain Specifies the coordinate unit.
-Percentage.
-2 pixel values.
 * @method void setUnit(integer $Unit) Set Specifies the coordinate unit.
-Percentage.
-2 pixel values.
 */
class EraseArea extends AbstractModel
{
    /**
     * @var float X-Axis coordinate of the upper left corner.
When Unit is set to 1 (percentage Unit), 0.05 indicates the horizontal distance from the upper left corner of the region to the top-left corner of the entire frame is 5% of the frame width.
     */
    public $LeftTopX;

    /**
     * @var float Y-Axis coordinate of the upper left corner.
When Unit is set to 1 (using percentage Unit), 0.1 indicates the vertical distance from the top-left corner of the area to the top-left corner of the entire frame is 10% of the screen height.
     */
    public $LeftTopY;

    /**
     * @var float X-Axis coordinate of the bottom-right corner.
When Unit is set to 1 (percentage Unit), 0.75 indicates the horizontal distance from the bottom-right corner of the region to the top-left corner of the entire frame is 75% of the frame width.
     */
    public $RightBottomX;

    /**
     * @var float Y-Axis coordinate of the bottom-right corner.
When Unit is set to 1 (using percentage Unit), 0.9 indicates the vertical distance from the bottom-right corner of the area to the top-left corner of the entire frame is 90% of the screen height.
     */
    public $RightBottomY;

    /**
     * @var integer Specifies the coordinate unit.
-Percentage.
-2 pixel values.
     */
    public $Unit;

    /**
     * @param float $LeftTopX X-Axis coordinate of the upper left corner.
When Unit is set to 1 (percentage Unit), 0.05 indicates the horizontal distance from the upper left corner of the region to the top-left corner of the entire frame is 5% of the frame width.
     * @param float $LeftTopY Y-Axis coordinate of the upper left corner.
When Unit is set to 1 (using percentage Unit), 0.1 indicates the vertical distance from the top-left corner of the area to the top-left corner of the entire frame is 10% of the screen height.
     * @param float $RightBottomX X-Axis coordinate of the bottom-right corner.
When Unit is set to 1 (percentage Unit), 0.75 indicates the horizontal distance from the bottom-right corner of the region to the top-left corner of the entire frame is 75% of the frame width.
     * @param float $RightBottomY Y-Axis coordinate of the bottom-right corner.
When Unit is set to 1 (using percentage Unit), 0.9 indicates the vertical distance from the bottom-right corner of the area to the top-left corner of the entire frame is 90% of the screen height.
     * @param integer $Unit Specifies the coordinate unit.
-Percentage.
-2 pixel values.
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
        if (array_key_exists("LeftTopX",$param) and $param["LeftTopX"] !== null) {
            $this->LeftTopX = $param["LeftTopX"];
        }

        if (array_key_exists("LeftTopY",$param) and $param["LeftTopY"] !== null) {
            $this->LeftTopY = $param["LeftTopY"];
        }

        if (array_key_exists("RightBottomX",$param) and $param["RightBottomX"] !== null) {
            $this->RightBottomX = $param["RightBottomX"];
        }

        if (array_key_exists("RightBottomY",$param) and $param["RightBottomY"] !== null) {
            $this->RightBottomY = $param["RightBottomY"];
        }

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }
    }
}
