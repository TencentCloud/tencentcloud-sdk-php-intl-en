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
 * Layer fusion functionality of image processing layer data structure
 *
 * @method integer getZIndex() Obtain <p>Layer stacking sequence, required. It cannot be repeated in the same request. The larger the value, the higher the layer (it is recommended to start consecutive numbering from 0).</p>
 * @method void setZIndex(integer $ZIndex) Set <p>Layer stacking sequence, required. It cannot be repeated in the same request. The larger the value, the higher the layer (it is recommended to start consecutive numbering from 0).</p>
 * @method MediaInputInfo getInputInfo() Obtain <p>Layer source, required. Supports URL / COS / AWS-S3 / VOD.</p>
 * @method void setInputInfo(MediaInputInfo $InputInfo) Set <p>Layer source, required. Supports URL / COS / AWS-S3 / VOD.</p>
 * @method array getBoundingBox() Obtain <p>The position and size of the layer in the canvas. Required. An array of length 4 [X1, Y1, X2, Y2]: coordinates of the top-left and bottom-right corners. X2 > X1 and Y2 > Y1 are required.</p><p>Two semantics (aligned with the BoundingBox of the image removal capability):</p><ul><li>Pixel: coordinate values in the range of [-10240, 10240]. Negative values or values beyond the canvas are allowed (the excess part is cropped).</li><li>Ratio: each value ∈ [-1, 1], converted based on the canvas width and height (x multiplied by canvas width, y multiplied by canvas height).</li></ul><p>The layer is scaled to fill this rectangle. Any part beyond the canvas is cropped, and the output size is always equal to the canvas size.</p>
 * @method void setBoundingBox(array $BoundingBox) Set <p>The position and size of the layer in the canvas. Required. An array of length 4 [X1, Y1, X2, Y2]: coordinates of the top-left and bottom-right corners. X2 > X1 and Y2 > Y1 are required.</p><p>Two semantics (aligned with the BoundingBox of the image removal capability):</p><ul><li>Pixel: coordinate values in the range of [-10240, 10240]. Negative values or values beyond the canvas are allowed (the excess part is cropped).</li><li>Ratio: each value ∈ [-1, 1], converted based on the canvas width and height (x multiplied by canvas width, y multiplied by canvas height).</li></ul><p>The layer is scaled to fill this rectangle. Any part beyond the canvas is cropped, and the output size is always equal to the canvas size.</p>
 * @method integer getBoundingBoxUnitType() Obtain <p>Coordinate unit, aligned with the image removal capacity. Values:</p><ul><li>0: automatic judgment (default value if not passed);</li><li>1: ratio;</li><li>2: pixel.</li></ul><p>Automatic judgment rules: if all four values are greater than 1, they are interpreted as pixels; if all are not greater than 1, they are interpreted as ratios. Mixed values will return InvalidParameter. It is recommended to always explicitly specify.</p>
 * @method void setBoundingBoxUnitType(integer $BoundingBoxUnitType) Set <p>Coordinate unit, aligned with the image removal capacity. Values:</p><ul><li>0: automatic judgment (default value if not passed);</li><li>1: ratio;</li><li>2: pixel.</li></ul><p>Automatic judgment rules: if all four values are greater than 1, they are interpreted as pixels; if all are not greater than 1, they are interpreted as ratios. Mixed values will return InvalidParameter. It is recommended to always explicitly specify.</p>
 */
class ImageComposeLayer extends AbstractModel
{
    /**
     * @var integer <p>Layer stacking sequence, required. It cannot be repeated in the same request. The larger the value, the higher the layer (it is recommended to start consecutive numbering from 0).</p>
     */
    public $ZIndex;

    /**
     * @var MediaInputInfo <p>Layer source, required. Supports URL / COS / AWS-S3 / VOD.</p>
     */
    public $InputInfo;

    /**
     * @var array <p>The position and size of the layer in the canvas. Required. An array of length 4 [X1, Y1, X2, Y2]: coordinates of the top-left and bottom-right corners. X2 > X1 and Y2 > Y1 are required.</p><p>Two semantics (aligned with the BoundingBox of the image removal capability):</p><ul><li>Pixel: coordinate values in the range of [-10240, 10240]. Negative values or values beyond the canvas are allowed (the excess part is cropped).</li><li>Ratio: each value ∈ [-1, 1], converted based on the canvas width and height (x multiplied by canvas width, y multiplied by canvas height).</li></ul><p>The layer is scaled to fill this rectangle. Any part beyond the canvas is cropped, and the output size is always equal to the canvas size.</p>
     */
    public $BoundingBox;

    /**
     * @var integer <p>Coordinate unit, aligned with the image removal capacity. Values:</p><ul><li>0: automatic judgment (default value if not passed);</li><li>1: ratio;</li><li>2: pixel.</li></ul><p>Automatic judgment rules: if all four values are greater than 1, they are interpreted as pixels; if all are not greater than 1, they are interpreted as ratios. Mixed values will return InvalidParameter. It is recommended to always explicitly specify.</p>
     */
    public $BoundingBoxUnitType;

    /**
     * @param integer $ZIndex <p>Layer stacking sequence, required. It cannot be repeated in the same request. The larger the value, the higher the layer (it is recommended to start consecutive numbering from 0).</p>
     * @param MediaInputInfo $InputInfo <p>Layer source, required. Supports URL / COS / AWS-S3 / VOD.</p>
     * @param array $BoundingBox <p>The position and size of the layer in the canvas. Required. An array of length 4 [X1, Y1, X2, Y2]: coordinates of the top-left and bottom-right corners. X2 > X1 and Y2 > Y1 are required.</p><p>Two semantics (aligned with the BoundingBox of the image removal capability):</p><ul><li>Pixel: coordinate values in the range of [-10240, 10240]. Negative values or values beyond the canvas are allowed (the excess part is cropped).</li><li>Ratio: each value ∈ [-1, 1], converted based on the canvas width and height (x multiplied by canvas width, y multiplied by canvas height).</li></ul><p>The layer is scaled to fill this rectangle. Any part beyond the canvas is cropped, and the output size is always equal to the canvas size.</p>
     * @param integer $BoundingBoxUnitType <p>Coordinate unit, aligned with the image removal capacity. Values:</p><ul><li>0: automatic judgment (default value if not passed);</li><li>1: ratio;</li><li>2: pixel.</li></ul><p>Automatic judgment rules: if all four values are greater than 1, they are interpreted as pixels; if all are not greater than 1, they are interpreted as ratios. Mixed values will return InvalidParameter. It is recommended to always explicitly specify.</p>
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
        if (array_key_exists("ZIndex",$param) and $param["ZIndex"] !== null) {
            $this->ZIndex = $param["ZIndex"];
        }

        if (array_key_exists("InputInfo",$param) and $param["InputInfo"] !== null) {
            $this->InputInfo = new MediaInputInfo();
            $this->InputInfo->deserialize($param["InputInfo"]);
        }

        if (array_key_exists("BoundingBox",$param) and $param["BoundingBox"] !== null) {
            $this->BoundingBox = $param["BoundingBox"];
        }

        if (array_key_exists("BoundingBoxUnitType",$param) and $param["BoundingBoxUnitType"] !== null) {
            $this->BoundingBoxUnitType = $param["BoundingBoxUnitType"];
        }
    }
}
