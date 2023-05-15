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
 * The Watermark information.
 *
 * @method integer getWaterMarkType() Obtain The watermark type. Valid values: `0` (default): Image; `1`: Text.
 * @method void setWaterMarkType(integer $WaterMarkType) Set The watermark type. Valid values: `0` (default): Image; `1`: Text.
 * @method McuWaterMarkImage getWaterMarkImage() Obtain The watermark image information. This parameter is required if `WaterMarkType` is 0.
 * @method void setWaterMarkImage(McuWaterMarkImage $WaterMarkImage) Set The watermark image information. This parameter is required if `WaterMarkType` is 0.
 * @method McuWaterMarkText getWaterMarkText() Obtain The text watermark configuration. This parameter is required if `WaterMarkType` is `1`.
 * @method void setWaterMarkText(McuWaterMarkText $WaterMarkText) Set The text watermark configuration. This parameter is required if `WaterMarkType` is `1`.
 */
class McuWaterMarkParams extends AbstractModel
{
    /**
     * @var integer The watermark type. Valid values: `0` (default): Image; `1`: Text.
     */
    public $WaterMarkType;

    /**
     * @var McuWaterMarkImage The watermark image information. This parameter is required if `WaterMarkType` is 0.
     */
    public $WaterMarkImage;

    /**
     * @var McuWaterMarkText The text watermark configuration. This parameter is required if `WaterMarkType` is `1`.
     */
    public $WaterMarkText;

    /**
     * @param integer $WaterMarkType The watermark type. Valid values: `0` (default): Image; `1`: Text.
     * @param McuWaterMarkImage $WaterMarkImage The watermark image information. This parameter is required if `WaterMarkType` is 0.
     * @param McuWaterMarkText $WaterMarkText The text watermark configuration. This parameter is required if `WaterMarkType` is `1`.
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
            $this->WaterMarkImage = new McuWaterMarkImage();
            $this->WaterMarkImage->deserialize($param["WaterMarkImage"]);
        }

        if (array_key_exists("WaterMarkText",$param) and $param["WaterMarkText"] !== null) {
            $this->WaterMarkText = new McuWaterMarkText();
            $this->WaterMarkText->deserialize($param["WaterMarkText"]);
        }
    }
}
