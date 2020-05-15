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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * General stream mix input crop parameter.
 *
 * @method float getCropWidth() Obtain Crop width. Value range: [0,2000].
 * @method void setCropWidth(float $CropWidth) Set Crop width. Value range: [0,2000].
 * @method float getCropHeight() Obtain Crop height. Value range: [0,2000].
 * @method void setCropHeight(float $CropHeight) Set Crop height. Value range: [0,2000].
 * @method float getCropStartLocationX() Obtain Starting crop X coordinate. Value range: [0,2000].
 * @method void setCropStartLocationX(float $CropStartLocationX) Set Starting crop X coordinate. Value range: [0,2000].
 * @method float getCropStartLocationY() Obtain Starting crop Y coordinate. Value range: [0,2000].
 * @method void setCropStartLocationY(float $CropStartLocationY) Set Starting crop Y coordinate. Value range: [0,2000].
 */
class CommonMixCropParams extends AbstractModel
{
    /**
     * @var float Crop width. Value range: [0,2000].
     */
    public $CropWidth;

    /**
     * @var float Crop height. Value range: [0,2000].
     */
    public $CropHeight;

    /**
     * @var float Starting crop X coordinate. Value range: [0,2000].
     */
    public $CropStartLocationX;

    /**
     * @var float Starting crop Y coordinate. Value range: [0,2000].
     */
    public $CropStartLocationY;

    /**
     * @param float $CropWidth Crop width. Value range: [0,2000].
     * @param float $CropHeight Crop height. Value range: [0,2000].
     * @param float $CropStartLocationX Starting crop X coordinate. Value range: [0,2000].
     * @param float $CropStartLocationY Starting crop Y coordinate. Value range: [0,2000].
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
        if (array_key_exists("CropWidth",$param) and $param["CropWidth"] !== null) {
            $this->CropWidth = $param["CropWidth"];
        }

        if (array_key_exists("CropHeight",$param) and $param["CropHeight"] !== null) {
            $this->CropHeight = $param["CropHeight"];
        }

        if (array_key_exists("CropStartLocationX",$param) and $param["CropStartLocationX"] !== null) {
            $this->CropStartLocationX = $param["CropStartLocationX"];
        }

        if (array_key_exists("CropStartLocationY",$param) and $param["CropStartLocationY"] !== null) {
            $this->CropStartLocationY = $param["CropStartLocationY"];
        }
    }
}
