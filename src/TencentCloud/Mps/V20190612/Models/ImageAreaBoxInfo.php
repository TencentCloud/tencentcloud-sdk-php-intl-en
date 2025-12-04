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
 * Information on the box selection area in an image.
 *
 * @method string getType() Obtain Type of the box selection area in the image. Valid values:
<li>logo: icon.</li>
<li>Text: text.</li>
Default value: logo.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setType(string $Type) Set Type of the box selection area in the image. Valid values:
<li>logo: icon.</li>
<li>Text: text.</li>
Default value: logo.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getAreaCoordSet() Obtain Coordinates (pixel-level) of the box selection area in the image, in the format of [x1, y1, x2, y2]. It indicates the coordinates of the top left corner and the bottom right corner. Note: The maximum value of this field is 4096.
For example, [101, 85, 111, 95].
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAreaCoordSet(array $AreaCoordSet) Set Coordinates (pixel-level) of the box selection area in the image, in the format of [x1, y1, x2, y2]. It indicates the coordinates of the top left corner and the bottom right corner. Note: The maximum value of this field is 4096.
For example, [101, 85, 111, 95].
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getBoundingBox() Obtain Coordinates of the box selection area in the image, in the format of [x1, y1, x2, y2]. It indicates the coordinates of the top left corner and the bottom right corner. This field takes effect when AreaCoordSet is not specified. When it indicates the pixel, the maximum value of this field is 4096.
- [0.1, 0.1, 0.3, 0.3]: indicates the ratio (values are less than 1).
- [50, 50, 350, 280]: indicates the pixel (values are greater than or equal to 1).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBoundingBox(array $BoundingBox) Set Coordinates of the box selection area in the image, in the format of [x1, y1, x2, y2]. It indicates the coordinates of the top left corner and the bottom right corner. This field takes effect when AreaCoordSet is not specified. When it indicates the pixel, the maximum value of this field is 4096.
- [0.1, 0.1, 0.3, 0.3]: indicates the ratio (values are less than 1).
- [50, 50, 350, 280]: indicates the pixel (values are greater than or equal to 1).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getBoundingBoxUnitType() Obtain BoundingBox field unit. When the value is set to 0, select the unit automatically according to the field rule. When it is set to 1, the unit is ratio. When it is set to 2, the unit is pixel.
 * @method void setBoundingBoxUnitType(integer $BoundingBoxUnitType) Set BoundingBox field unit. When the value is set to 0, select the unit automatically according to the field rule. When it is set to 1, the unit is ratio. When it is set to 2, the unit is pixel.
 */
class ImageAreaBoxInfo extends AbstractModel
{
    /**
     * @var string Type of the box selection area in the image. Valid values:
<li>logo: icon.</li>
<li>Text: text.</li>
Default value: logo.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Type;

    /**
     * @var array Coordinates (pixel-level) of the box selection area in the image, in the format of [x1, y1, x2, y2]. It indicates the coordinates of the top left corner and the bottom right corner. Note: The maximum value of this field is 4096.
For example, [101, 85, 111, 95].
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AreaCoordSet;

    /**
     * @var array Coordinates of the box selection area in the image, in the format of [x1, y1, x2, y2]. It indicates the coordinates of the top left corner and the bottom right corner. This field takes effect when AreaCoordSet is not specified. When it indicates the pixel, the maximum value of this field is 4096.
- [0.1, 0.1, 0.3, 0.3]: indicates the ratio (values are less than 1).
- [50, 50, 350, 280]: indicates the pixel (values are greater than or equal to 1).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BoundingBox;

    /**
     * @var integer BoundingBox field unit. When the value is set to 0, select the unit automatically according to the field rule. When it is set to 1, the unit is ratio. When it is set to 2, the unit is pixel.
     */
    public $BoundingBoxUnitType;

    /**
     * @param string $Type Type of the box selection area in the image. Valid values:
<li>logo: icon.</li>
<li>Text: text.</li>
Default value: logo.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $AreaCoordSet Coordinates (pixel-level) of the box selection area in the image, in the format of [x1, y1, x2, y2]. It indicates the coordinates of the top left corner and the bottom right corner. Note: The maximum value of this field is 4096.
For example, [101, 85, 111, 95].
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $BoundingBox Coordinates of the box selection area in the image, in the format of [x1, y1, x2, y2]. It indicates the coordinates of the top left corner and the bottom right corner. This field takes effect when AreaCoordSet is not specified. When it indicates the pixel, the maximum value of this field is 4096.
- [0.1, 0.1, 0.3, 0.3]: indicates the ratio (values are less than 1).
- [50, 50, 350, 280]: indicates the pixel (values are greater than or equal to 1).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $BoundingBoxUnitType BoundingBox field unit. When the value is set to 0, select the unit automatically according to the field rule. When it is set to 1, the unit is ratio. When it is set to 2, the unit is pixel.
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

        if (array_key_exists("AreaCoordSet",$param) and $param["AreaCoordSet"] !== null) {
            $this->AreaCoordSet = $param["AreaCoordSet"];
        }

        if (array_key_exists("BoundingBox",$param) and $param["BoundingBox"] !== null) {
            $this->BoundingBox = $param["BoundingBox"];
        }

        if (array_key_exists("BoundingBoxUnitType",$param) and $param["BoundingBoxUnitType"] !== null) {
            $this->BoundingBoxUnitType = $param["BoundingBoxUnitType"];
        }
    }
}
