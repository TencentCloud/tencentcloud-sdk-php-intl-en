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
 * @method integer getWaterMarkType() Obtain The watermark type. The default is 0, which indicates an image watermark.
 * @method void setWaterMarkType(integer $WaterMarkType) Set The watermark type. The default is 0, which indicates an image watermark.
 * @method McuWaterMarkImage getWaterMarkImage() Obtain The watermark image information. This parameter is required if `WaterMarkType` is 0.
 * @method void setWaterMarkImage(McuWaterMarkImage $WaterMarkImage) Set The watermark image information. This parameter is required if `WaterMarkType` is 0.
 */
class McuWaterMarkParams extends AbstractModel
{
    /**
     * @var integer The watermark type. The default is 0, which indicates an image watermark.
     */
    public $WaterMarkType;

    /**
     * @var McuWaterMarkImage The watermark image information. This parameter is required if `WaterMarkType` is 0.
     */
    public $WaterMarkImage;

    /**
     * @param integer $WaterMarkType The watermark type. The default is 0, which indicates an image watermark.
     * @param McuWaterMarkImage $WaterMarkImage The watermark image information. This parameter is required if `WaterMarkType` is 0.
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
    }
}
