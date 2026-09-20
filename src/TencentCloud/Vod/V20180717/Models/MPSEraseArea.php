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
 * Intelligent removal, coordinate configuration of the removal area.
The region is determined by the coordinates of the upper-left and bottom-right corners.
The coordinate origin is the upper left corner of the frame. Coordinate points can be specified in pixel values or percentages.
For the auto removal area:
When the unit is %, the coordinate range is [0,1];
When the unit is px, the X value range is [0, video image width], and the Y value range is [0, video image height].
For the specified removal area:
When the unit is %, the coordinate range is [0,1);
When the unit is px, the X value ranges from 0 to the video image width, and the Y value ranges from 0 to the video image height.
 *
 * @method float getLeftTopX() Obtain <p>Top-left X-axis coordinate of the region. For example, when Unit is 1, meaning percentage is used, 0.05 indicates the lateral distance from the top-left corner of the region to the top-left corner of the entire frame is 5% of the frame width.</p>
 * @method void setLeftTopX(float $LeftTopX) Set <p>Top-left X-axis coordinate of the region. For example, when Unit is 1, meaning percentage is used, 0.05 indicates the lateral distance from the top-left corner of the region to the top-left corner of the entire frame is 5% of the frame width.</p>
 * @method float getLeftTopY() Obtain <p>Y-coordinate of the top-left corner of the region. For example, when Unit is 1, meaning percentage is used, 0.1 indicates the vertical distance from the top-left corner of the region to the top-left corner of the entire frame is 10% of the screen height.</p>
 * @method void setLeftTopY(float $LeftTopY) Set <p>Y-coordinate of the top-left corner of the region. For example, when Unit is 1, meaning percentage is used, 0.1 indicates the vertical distance from the top-left corner of the region to the top-left corner of the entire frame is 10% of the screen height.</p>
 * @method float getRightBottomX() Obtain <p>The X-coordinate of the region's bottom-right corner. For example, when Unit is 1 (percentage), 0.75 means the horizontal distance from the region's bottom-right corner to the top-left corner of the entire frame is 75% of the frame width.</p>
 * @method void setRightBottomX(float $RightBottomX) Set <p>The X-coordinate of the region's bottom-right corner. For example, when Unit is 1 (percentage), 0.75 means the horizontal distance from the region's bottom-right corner to the top-left corner of the entire frame is 75% of the frame width.</p>
 * @method float getRightBottomY() Obtain <p>Y-axis coordinate of the region's bottom-right corner. For example, when Unit is 1, meaning percentage is used, 0.9 indicates the vertical distance from the bottom-right corner of the region to the upper left of the entire frame is 90% of the screen height.</p>
 * @method void setRightBottomY(float $RightBottomY) Set <p>Y-axis coordinate of the region's bottom-right corner. For example, when Unit is 1, meaning percentage is used, 0.9 indicates the vertical distance from the bottom-right corner of the region to the upper left of the entire frame is 90% of the screen height.</p>
 * @method integer getUnit() Obtain <p>Coordinate unit - 1 Percentage - 2 Pixel values</p>
 * @method void setUnit(integer $Unit) Set <p>Coordinate unit - 1 Percentage - 2 Pixel values</p>
 */
class MPSEraseArea extends AbstractModel
{
    /**
     * @var float <p>Top-left X-axis coordinate of the region. For example, when Unit is 1, meaning percentage is used, 0.05 indicates the lateral distance from the top-left corner of the region to the top-left corner of the entire frame is 5% of the frame width.</p>
     */
    public $LeftTopX;

    /**
     * @var float <p>Y-coordinate of the top-left corner of the region. For example, when Unit is 1, meaning percentage is used, 0.1 indicates the vertical distance from the top-left corner of the region to the top-left corner of the entire frame is 10% of the screen height.</p>
     */
    public $LeftTopY;

    /**
     * @var float <p>The X-coordinate of the region's bottom-right corner. For example, when Unit is 1 (percentage), 0.75 means the horizontal distance from the region's bottom-right corner to the top-left corner of the entire frame is 75% of the frame width.</p>
     */
    public $RightBottomX;

    /**
     * @var float <p>Y-axis coordinate of the region's bottom-right corner. For example, when Unit is 1, meaning percentage is used, 0.9 indicates the vertical distance from the bottom-right corner of the region to the upper left of the entire frame is 90% of the screen height.</p>
     */
    public $RightBottomY;

    /**
     * @var integer <p>Coordinate unit - 1 Percentage - 2 Pixel values</p>
     */
    public $Unit;

    /**
     * @param float $LeftTopX <p>Top-left X-axis coordinate of the region. For example, when Unit is 1, meaning percentage is used, 0.05 indicates the lateral distance from the top-left corner of the region to the top-left corner of the entire frame is 5% of the frame width.</p>
     * @param float $LeftTopY <p>Y-coordinate of the top-left corner of the region. For example, when Unit is 1, meaning percentage is used, 0.1 indicates the vertical distance from the top-left corner of the region to the top-left corner of the entire frame is 10% of the screen height.</p>
     * @param float $RightBottomX <p>The X-coordinate of the region's bottom-right corner. For example, when Unit is 1 (percentage), 0.75 means the horizontal distance from the region's bottom-right corner to the top-left corner of the entire frame is 75% of the frame width.</p>
     * @param float $RightBottomY <p>Y-axis coordinate of the region's bottom-right corner. For example, when Unit is 1, meaning percentage is used, 0.9 indicates the vertical distance from the bottom-right corner of the region to the upper left of the entire frame is 90% of the screen height.</p>
     * @param integer $Unit <p>Coordinate unit - 1 Percentage - 2 Pixel values</p>
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
