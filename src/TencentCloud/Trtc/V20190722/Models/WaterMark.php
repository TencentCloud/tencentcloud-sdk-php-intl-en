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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The watermark layout.
 *
 * @method integer getWaterMarkType() Obtain The watermark type. 0 (default): image; 1: text (not supported yet).
 * @method void setWaterMarkType(integer $WaterMarkType) Set The watermark type. 0 (default): image; 1: text (not supported yet).
 * @method WaterMarkImage getWaterMarkImage() Obtain The information of watermark images. This parameter is required if the watermark type is image.
 * @method void setWaterMarkImage(WaterMarkImage $WaterMarkImage) Set The information of watermark images. This parameter is required if the watermark type is image.
 * @method WaterMarkChar getWaterMarkChar() Obtain The information of the text watermark. This parameter is required if `WaterMarkType` is `1`.
 * @method void setWaterMarkChar(WaterMarkChar $WaterMarkChar) Set The information of the text watermark. This parameter is required if `WaterMarkType` is `1`.
 * @method WaterMarkTimestamp getWaterMarkTimestamp() Obtain The information of the timestamp watermark. This parameter is required if `WaterMarkType` is `2`.
 * @method void setWaterMarkTimestamp(WaterMarkTimestamp $WaterMarkTimestamp) Set The information of the timestamp watermark. This parameter is required if `WaterMarkType` is `2`.
 */
class WaterMark extends AbstractModel
{
    /**
     * @var integer The watermark type. 0 (default): image; 1: text (not supported yet).
     */
    public $WaterMarkType;

    /**
     * @var WaterMarkImage The information of watermark images. This parameter is required if the watermark type is image.
     */
    public $WaterMarkImage;

    /**
     * @var WaterMarkChar The information of the text watermark. This parameter is required if `WaterMarkType` is `1`.
     */
    public $WaterMarkChar;

    /**
     * @var WaterMarkTimestamp The information of the timestamp watermark. This parameter is required if `WaterMarkType` is `2`.
     */
    public $WaterMarkTimestamp;

    /**
     * @param integer $WaterMarkType The watermark type. 0 (default): image; 1: text (not supported yet).
     * @param WaterMarkImage $WaterMarkImage The information of watermark images. This parameter is required if the watermark type is image.
     * @param WaterMarkChar $WaterMarkChar The information of the text watermark. This parameter is required if `WaterMarkType` is `1`.
     * @param WaterMarkTimestamp $WaterMarkTimestamp The information of the timestamp watermark. This parameter is required if `WaterMarkType` is `2`.
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
        if (array_key_exists("WaterMarkType",$param) and $param["WaterMarkType"] !== null) {
            $this->WaterMarkType = $param["WaterMarkType"];
        }

        if (array_key_exists("WaterMarkImage",$param) and $param["WaterMarkImage"] !== null) {
            $this->WaterMarkImage = new WaterMarkImage();
            $this->WaterMarkImage->deserialize($param["WaterMarkImage"]);
        }

        if (array_key_exists("WaterMarkChar",$param) and $param["WaterMarkChar"] !== null) {
            $this->WaterMarkChar = new WaterMarkChar();
            $this->WaterMarkChar->deserialize($param["WaterMarkChar"]);
        }

        if (array_key_exists("WaterMarkTimestamp",$param) and $param["WaterMarkTimestamp"] !== null) {
            $this->WaterMarkTimestamp = new WaterMarkTimestamp();
            $this->WaterMarkTimestamp->deserialize($param["WaterMarkTimestamp"]);
        }
    }
}
