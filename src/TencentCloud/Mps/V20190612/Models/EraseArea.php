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
 * 
 *
 * @method float getLeftTopX() Obtain <p>Top-left X-axis coordinate of the area.<br>For example, when Unit is 1, meaning percentage is used, 0.05 indicates the horizontal distance from the top-left corner of the area to the top-left corner of the entire frame is 5% of the frame width.</p>
 * @method void setLeftTopX(float $LeftTopX) Set <p>Top-left X-axis coordinate of the area.<br>For example, when Unit is 1, meaning percentage is used, 0.05 indicates the horizontal distance from the top-left corner of the area to the top-left corner of the entire frame is 5% of the frame width.</p>
 * @method float getLeftTopY() Obtain <p>Y-coordinate of the upper left corner of the region.<br>For example, when Unit is 1, meaning usage percentage, 0.1 indicates the vertical distance from the upper left corner of the region to the upper left corner of the entire frame is 10% of the screen height.</p>
 * @method void setLeftTopY(float $LeftTopY) Set <p>Y-coordinate of the upper left corner of the region.<br>For example, when Unit is 1, meaning usage percentage, 0.1 indicates the vertical distance from the upper left corner of the region to the upper left corner of the entire frame is 10% of the screen height.</p>
 * @method float getRightBottomX() Obtain <p>X-coordinate of the bottom-right corner of the region.<br>For example, when Unit is 1, meaning percentage is used, 0.75 indicates the horizontal distance from the bottom-right corner of the region to the top-left corner of the entire frame is 75% of the frame width.</p>
 * @method void setRightBottomX(float $RightBottomX) Set <p>X-coordinate of the bottom-right corner of the region.<br>For example, when Unit is 1, meaning percentage is used, 0.75 indicates the horizontal distance from the bottom-right corner of the region to the top-left corner of the entire frame is 75% of the frame width.</p>
 * @method float getRightBottomY() Obtain <p>Y-coordinate of the region's bottom-right corner.<br>For example, when Unit is 1 (percentage), 0.9 means the vertical distance from the bottom-right corner of the region to the top-left corner of the entire frame is 90% of the screen height.</p>
 * @method void setRightBottomY(float $RightBottomY) Set <p>Y-coordinate of the region's bottom-right corner.<br>For example, when Unit is 1 (percentage), 0.9 means the vertical distance from the bottom-right corner of the region to the top-left corner of the entire frame is 90% of the screen height.</p>
 * @method integer getUnit() Obtain <p>Coordinate unit</p><ul><li>1 Percentage</li><li>2 Pixel value</li></ul>
 * @method void setUnit(integer $Unit) Set <p>Coordinate unit</p><ul><li>1 Percentage</li><li>2 Pixel value</li></ul>
 */
class EraseArea extends AbstractModel
{
    /**
     * @var float <p>Top-left X-axis coordinate of the area.<br>For example, when Unit is 1, meaning percentage is used, 0.05 indicates the horizontal distance from the top-left corner of the area to the top-left corner of the entire frame is 5% of the frame width.</p>
     */
    public $LeftTopX;

    /**
     * @var float <p>Y-coordinate of the upper left corner of the region.<br>For example, when Unit is 1, meaning usage percentage, 0.1 indicates the vertical distance from the upper left corner of the region to the upper left corner of the entire frame is 10% of the screen height.</p>
     */
    public $LeftTopY;

    /**
     * @var float <p>X-coordinate of the bottom-right corner of the region.<br>For example, when Unit is 1, meaning percentage is used, 0.75 indicates the horizontal distance from the bottom-right corner of the region to the top-left corner of the entire frame is 75% of the frame width.</p>
     */
    public $RightBottomX;

    /**
     * @var float <p>Y-coordinate of the region's bottom-right corner.<br>For example, when Unit is 1 (percentage), 0.9 means the vertical distance from the bottom-right corner of the region to the top-left corner of the entire frame is 90% of the screen height.</p>
     */
    public $RightBottomY;

    /**
     * @var integer <p>Coordinate unit</p><ul><li>1 Percentage</li><li>2 Pixel value</li></ul>
     */
    public $Unit;

    /**
     * @param float $LeftTopX <p>Top-left X-axis coordinate of the area.<br>For example, when Unit is 1, meaning percentage is used, 0.05 indicates the horizontal distance from the top-left corner of the area to the top-left corner of the entire frame is 5% of the frame width.</p>
     * @param float $LeftTopY <p>Y-coordinate of the upper left corner of the region.<br>For example, when Unit is 1, meaning usage percentage, 0.1 indicates the vertical distance from the upper left corner of the region to the upper left corner of the entire frame is 10% of the screen height.</p>
     * @param float $RightBottomX <p>X-coordinate of the bottom-right corner of the region.<br>For example, when Unit is 1, meaning percentage is used, 0.75 indicates the horizontal distance from the bottom-right corner of the region to the top-left corner of the entire frame is 75% of the frame width.</p>
     * @param float $RightBottomY <p>Y-coordinate of the region's bottom-right corner.<br>For example, when Unit is 1 (percentage), 0.9 means the vertical distance from the bottom-right corner of the region to the top-left corner of the entire frame is 90% of the screen height.</p>
     * @param integer $Unit <p>Coordinate unit</p><ul><li>1 Percentage</li><li>2 Pixel value</li></ul>
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
