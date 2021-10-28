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
 * Watermark parameters for On-Cloud MixTranscoding
 *
 * @method integer getWaterMarkId() Obtain Image ID of the watermark, which is generated after the image is uploaded to the TRTC console
 * @method void setWaterMarkId(integer $WaterMarkId) Set Image ID of the watermark, which is generated after the image is uploaded to the TRTC console
 * @method integer getWaterMarkWidth() Obtain Width (px) of the watermark for On-Cloud MixTranscoding
 * @method void setWaterMarkWidth(integer $WaterMarkWidth) Set Width (px) of the watermark for On-Cloud MixTranscoding
 * @method integer getWaterMarkHeight() Obtain Height (px) of the watermark for On-Cloud MixTranscoding
 * @method void setWaterMarkHeight(integer $WaterMarkHeight) Set Height (px) of the watermark for On-Cloud MixTranscoding
 * @method integer getLocationX() Obtain Horizontal offset (px) of the watermark
 * @method void setLocationX(integer $LocationX) Set Horizontal offset (px) of the watermark
 * @method integer getLocationY() Obtain Vertical offset (px) of the watermark
 * @method void setLocationY(integer $LocationY) Set Vertical offset (px) of the watermark
 * @method string getWaterMarkUrl() Obtain URL of the watermark image for the mixed stream, which can be in PNG, JPG, JPEG, or BMP format and does not support the alpha channel. The URL must not exceed 512 bytes. When both `WaterMarkUrl` and `WaterMarkId` are specified, the former will be used. The watermark image cannot exceed 10 MB.
 * @method void setWaterMarkUrl(string $WaterMarkUrl) Set URL of the watermark image for the mixed stream, which can be in PNG, JPG, JPEG, or BMP format and does not support the alpha channel. The URL must not exceed 512 bytes. When both `WaterMarkUrl` and `WaterMarkId` are specified, the former will be used. The watermark image cannot exceed 10 MB.
 */
class WaterMarkParams extends AbstractModel
{
    /**
     * @var integer Image ID of the watermark, which is generated after the image is uploaded to the TRTC console
     */
    public $WaterMarkId;

    /**
     * @var integer Width (px) of the watermark for On-Cloud MixTranscoding
     */
    public $WaterMarkWidth;

    /**
     * @var integer Height (px) of the watermark for On-Cloud MixTranscoding
     */
    public $WaterMarkHeight;

    /**
     * @var integer Horizontal offset (px) of the watermark
     */
    public $LocationX;

    /**
     * @var integer Vertical offset (px) of the watermark
     */
    public $LocationY;

    /**
     * @var string URL of the watermark image for the mixed stream, which can be in PNG, JPG, JPEG, or BMP format and does not support the alpha channel. The URL must not exceed 512 bytes. When both `WaterMarkUrl` and `WaterMarkId` are specified, the former will be used. The watermark image cannot exceed 10 MB.
     */
    public $WaterMarkUrl;

    /**
     * @param integer $WaterMarkId Image ID of the watermark, which is generated after the image is uploaded to the TRTC console
     * @param integer $WaterMarkWidth Width (px) of the watermark for On-Cloud MixTranscoding
     * @param integer $WaterMarkHeight Height (px) of the watermark for On-Cloud MixTranscoding
     * @param integer $LocationX Horizontal offset (px) of the watermark
     * @param integer $LocationY Vertical offset (px) of the watermark
     * @param string $WaterMarkUrl URL of the watermark image for the mixed stream, which can be in PNG, JPG, JPEG, or BMP format and does not support the alpha channel. The URL must not exceed 512 bytes. When both `WaterMarkUrl` and `WaterMarkId` are specified, the former will be used. The watermark image cannot exceed 10 MB.
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
        if (array_key_exists("WaterMarkId",$param) and $param["WaterMarkId"] !== null) {
            $this->WaterMarkId = $param["WaterMarkId"];
        }

        if (array_key_exists("WaterMarkWidth",$param) and $param["WaterMarkWidth"] !== null) {
            $this->WaterMarkWidth = $param["WaterMarkWidth"];
        }

        if (array_key_exists("WaterMarkHeight",$param) and $param["WaterMarkHeight"] !== null) {
            $this->WaterMarkHeight = $param["WaterMarkHeight"];
        }

        if (array_key_exists("LocationX",$param) and $param["LocationX"] !== null) {
            $this->LocationX = $param["LocationX"];
        }

        if (array_key_exists("LocationY",$param) and $param["LocationY"] !== null) {
            $this->LocationY = $param["LocationY"];
        }

        if (array_key_exists("WaterMarkUrl",$param) and $param["WaterMarkUrl"] !== null) {
            $this->WaterMarkUrl = $param["WaterMarkUrl"];
        }
    }
}
