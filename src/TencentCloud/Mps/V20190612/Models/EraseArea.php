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
 * Smart erasing, coordinate configuration for the removal area.
The region is determined by the coordinates of the upper left corner and the bottom-right corner.
The coordinate origin is the top-left corner of the image. Coordinate points can be specified using pixel values or a percentage unit.
For the auto erase area:
When unit: %, coordinate range is [0,1].
When the unit is px, the X range is [0, video image width], and the Y range is [0, video image height].
For the designated erase area:
When unit: %, coordinate range is [0,1).
When the unit is px, the X value range is [0, video image width], and the Y value range is [0, video image height].
 *
 * @method float getLeftTopX() Obtain X-axis coordinate of the upper left corner of the region.
For example, when Unit is set to 1, which means using the percentage unit, 0.05 indicates that the horizontal distance from the top-left corner of the region to the top-left corner of the entire frame is 5% of the frame width.
 * @method void setLeftTopX(float $LeftTopX) Set X-axis coordinate of the upper left corner of the region.
For example, when Unit is set to 1, which means using the percentage unit, 0.05 indicates that the horizontal distance from the top-left corner of the region to the top-left corner of the entire frame is 5% of the frame width.
 * @method float getLeftTopY() Obtain Y-axis coordinate of the upper left corner.
For example, when Unit is set to 1, which means using the percentage unit, 0.1 indicates that the vertical distance from the top-left corner of the region to the top-left corner of the entire frame is 10% of the frame height.
 * @method void setLeftTopY(float $LeftTopY) Set Y-axis coordinate of the upper left corner.
For example, when Unit is set to 1, which means using the percentage unit, 0.1 indicates that the vertical distance from the top-left corner of the region to the top-left corner of the entire frame is 10% of the frame height.
 * @method float getRightBottomX() Obtain X-axis coordinate of the bottom-right corner of the region.
For example, when Unit is set to 1, which means using the percentage unit, 0.75 indicates that the horizontal distance from the bottom-right corner of the region to the top-left corner of the entire frame is 75% of the frame width.
 * @method void setRightBottomX(float $RightBottomX) Set X-axis coordinate of the bottom-right corner of the region.
For example, when Unit is set to 1, which means using the percentage unit, 0.75 indicates that the horizontal distance from the bottom-right corner of the region to the top-left corner of the entire frame is 75% of the frame width.
 * @method float getRightBottomY() Obtain Y-axis coordinate of the bottom-right corner of the region.
For example, when Unit is set to 1, which means using the percentage unit, 0.9 indicates that the vertical distance from the bottom-right corner of the region to the top-left corner of the entire frame is 90% of the frame height.
 * @method void setRightBottomY(float $RightBottomY) Set Y-axis coordinate of the bottom-right corner of the region.
For example, when Unit is set to 1, which means using the percentage unit, 0.9 indicates that the vertical distance from the bottom-right corner of the region to the top-left corner of the entire frame is 90% of the frame height.
 * @method integer getUnit() Obtain Coordinate unit
-Percentage
- 2 pixel values
 * @method void setUnit(integer $Unit) Set Coordinate unit
-Percentage
- 2 pixel values
 */
class EraseArea extends AbstractModel
{
    /**
     * @var float X-axis coordinate of the upper left corner of the region.
For example, when Unit is set to 1, which means using the percentage unit, 0.05 indicates that the horizontal distance from the top-left corner of the region to the top-left corner of the entire frame is 5% of the frame width.
     */
    public $LeftTopX;

    /**
     * @var float Y-axis coordinate of the upper left corner.
For example, when Unit is set to 1, which means using the percentage unit, 0.1 indicates that the vertical distance from the top-left corner of the region to the top-left corner of the entire frame is 10% of the frame height.
     */
    public $LeftTopY;

    /**
     * @var float X-axis coordinate of the bottom-right corner of the region.
For example, when Unit is set to 1, which means using the percentage unit, 0.75 indicates that the horizontal distance from the bottom-right corner of the region to the top-left corner of the entire frame is 75% of the frame width.
     */
    public $RightBottomX;

    /**
     * @var float Y-axis coordinate of the bottom-right corner of the region.
For example, when Unit is set to 1, which means using the percentage unit, 0.9 indicates that the vertical distance from the bottom-right corner of the region to the top-left corner of the entire frame is 90% of the frame height.
     */
    public $RightBottomY;

    /**
     * @var integer Coordinate unit
-Percentage
- 2 pixel values
     */
    public $Unit;

    /**
     * @param float $LeftTopX X-axis coordinate of the upper left corner of the region.
For example, when Unit is set to 1, which means using the percentage unit, 0.05 indicates that the horizontal distance from the top-left corner of the region to the top-left corner of the entire frame is 5% of the frame width.
     * @param float $LeftTopY Y-axis coordinate of the upper left corner.
For example, when Unit is set to 1, which means using the percentage unit, 0.1 indicates that the vertical distance from the top-left corner of the region to the top-left corner of the entire frame is 10% of the frame height.
     * @param float $RightBottomX X-axis coordinate of the bottom-right corner of the region.
For example, when Unit is set to 1, which means using the percentage unit, 0.75 indicates that the horizontal distance from the bottom-right corner of the region to the top-left corner of the entire frame is 75% of the frame width.
     * @param float $RightBottomY Y-axis coordinate of the bottom-right corner of the region.
For example, when Unit is set to 1, which means using the percentage unit, 0.9 indicates that the vertical distance from the bottom-right corner of the region to the top-left corner of the entire frame is 90% of the frame height.
     * @param integer $Unit Coordinate unit
-Percentage
- 2 pixel values
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
