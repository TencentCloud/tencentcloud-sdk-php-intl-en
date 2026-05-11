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
 * Intelligent erasure. Coordinate configuration of the erasure area.
The region is determined by the coordinates of the top-left and bottom-right corners.
The coordinate origin is the top-left corner of the image. Coordinate points can be specified using pixel values or percentage units.
For auto-erase areas:
When the unit is %, the coordinate range is [0,1].
When the unit is px, the X range is [0, video image width], and the Y range is [0, screen height].
For the designated erase area:
When the unit is %, the coordinate range is [0,1).
When the unit is px, the X range is [0, video image width], and the Y range is [0, video image height].
 *
 * @method float getLeftTopX() Obtain <p>Top-left X-axis coordinate of the region. When Unit is set to 1 (using percentage unit), 0.05 means the horizontal distance from the top-left corner of the region to the top-left corner of the entire image is 5% of the image width.</p>
 * @method void setLeftTopX(float $LeftTopX) Set <p>Top-left X-axis coordinate of the region. When Unit is set to 1 (using percentage unit), 0.05 means the horizontal distance from the top-left corner of the region to the top-left corner of the entire image is 5% of the image width.</p>
 * @method float getLeftTopY() Obtain <p>Y-axis coordinate of the top-left corner. For example, when Unit is set to 1 (using percentage), 0.1 means the vertical distance from the top-left corner of the region to the top-left corner of the entire frame is 10% of the screen height.</p>
 * @method void setLeftTopY(float $LeftTopY) Set <p>Y-axis coordinate of the top-left corner. For example, when Unit is set to 1 (using percentage), 0.1 means the vertical distance from the top-left corner of the region to the top-left corner of the entire frame is 10% of the screen height.</p>
 * @method float getRightBottomX() Obtain <p>X coordinate of the bottom-right corner of the region. For example, when Unit is 1 (using percentage as the measurement unit), 0.75 means the horizontal distance from the bottom-right corner of the region to the top-left corner of the entire frame is 75% of the frame width.</p>
 * @method void setRightBottomX(float $RightBottomX) Set <p>X coordinate of the bottom-right corner of the region. For example, when Unit is 1 (using percentage as the measurement unit), 0.75 means the horizontal distance from the bottom-right corner of the region to the top-left corner of the entire frame is 75% of the frame width.</p>
 * @method float getRightBottomY() Obtain <p>Y-axis coordinate of the bottom-right corner. For example, when Unit is 1 (using percentage), 0.9 means the vertical distance from the top-left corner to the bottom-right corner is 90% of the screen height.</p>
 * @method void setRightBottomY(float $RightBottomY) Set <p>Y-axis coordinate of the bottom-right corner. For example, when Unit is 1 (using percentage), 0.9 means the vertical distance from the top-left corner to the bottom-right corner is 90% of the screen height.</p>
 * @method integer getUnit() Obtain <p>Coordinate unit - 1 percentage - 2 pixel value</p>
 * @method void setUnit(integer $Unit) Set <p>Coordinate unit - 1 percentage - 2 pixel value</p>
 */
class MPSEraseArea extends AbstractModel
{
    /**
     * @var float <p>Top-left X-axis coordinate of the region. When Unit is set to 1 (using percentage unit), 0.05 means the horizontal distance from the top-left corner of the region to the top-left corner of the entire image is 5% of the image width.</p>
     */
    public $LeftTopX;

    /**
     * @var float <p>Y-axis coordinate of the top-left corner. For example, when Unit is set to 1 (using percentage), 0.1 means the vertical distance from the top-left corner of the region to the top-left corner of the entire frame is 10% of the screen height.</p>
     */
    public $LeftTopY;

    /**
     * @var float <p>X coordinate of the bottom-right corner of the region. For example, when Unit is 1 (using percentage as the measurement unit), 0.75 means the horizontal distance from the bottom-right corner of the region to the top-left corner of the entire frame is 75% of the frame width.</p>
     */
    public $RightBottomX;

    /**
     * @var float <p>Y-axis coordinate of the bottom-right corner. For example, when Unit is 1 (using percentage), 0.9 means the vertical distance from the top-left corner to the bottom-right corner is 90% of the screen height.</p>
     */
    public $RightBottomY;

    /**
     * @var integer <p>Coordinate unit - 1 percentage - 2 pixel value</p>
     */
    public $Unit;

    /**
     * @param float $LeftTopX <p>Top-left X-axis coordinate of the region. When Unit is set to 1 (using percentage unit), 0.05 means the horizontal distance from the top-left corner of the region to the top-left corner of the entire image is 5% of the image width.</p>
     * @param float $LeftTopY <p>Y-axis coordinate of the top-left corner. For example, when Unit is set to 1 (using percentage), 0.1 means the vertical distance from the top-left corner of the region to the top-left corner of the entire frame is 10% of the screen height.</p>
     * @param float $RightBottomX <p>X coordinate of the bottom-right corner of the region. For example, when Unit is 1 (using percentage as the measurement unit), 0.75 means the horizontal distance from the bottom-right corner of the region to the top-left corner of the entire frame is 75% of the frame width.</p>
     * @param float $RightBottomY <p>Y-axis coordinate of the bottom-right corner. For example, when Unit is 1 (using percentage), 0.9 means the vertical distance from the top-left corner to the bottom-right corner is 90% of the screen height.</p>
     * @param integer $Unit <p>Coordinate unit - 1 percentage - 2 pixel value</p>
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
