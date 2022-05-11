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
     * @param integer $WaterMarkType The watermark type. 0 (default): image; 1: text (not supported yet).
     * @param WaterMarkImage $WaterMarkImage The information of watermark images. This parameter is required if the watermark type is image.
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
    }
}
