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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The information of the watermark image.
 *
 * @method string getWaterMarkUrl() Obtain Watermark image URL address. supports png, jpg, and jpeg formats. image size limit not more than 5MB.
Note:.
Make sure the image link has data accessibility. the backend download timeout is 10 seconds with a maximum of 3 retries. if the image download fails eventually, the watermark image will not take effect.
2. supported character sets for urls: ['0-9', 'a-z', 'a-z', '-', '.', '_', '~', ':', '/', '?', '#', '[', ']', '@', '!', '&', '(', ')', '*', '+', ',', '%', '=', ';', '|']. make sure url characters are within the supported character sets. if any characters exist outside the supported character sets, the watermark image will not take effect.
 * @method void setWaterMarkUrl(string $WaterMarkUrl) Set Watermark image URL address. supports png, jpg, and jpeg formats. image size limit not more than 5MB.
Note:.
Make sure the image link has data accessibility. the backend download timeout is 10 seconds with a maximum of 3 retries. if the image download fails eventually, the watermark image will not take effect.
2. supported character sets for urls: ['0-9', 'a-z', 'a-z', '-', '.', '_', '~', ':', '/', '?', '#', '[', ']', '@', '!', '&', '(', ')', '*', '+', ',', '%', '=', ';', '|']. make sure url characters are within the supported character sets. if any characters exist outside the supported character sets, the watermark image will not take effect.
 * @method integer getWaterMarkWidth() Obtain The watermark width (pixels).
 * @method void setWaterMarkWidth(integer $WaterMarkWidth) Set The watermark width (pixels).
 * @method integer getWaterMarkHeight() Obtain The watermark height (pixels).
 * @method void setWaterMarkHeight(integer $WaterMarkHeight) Set The watermark height (pixels).
 * @method integer getLocationX() Obtain The horizontal offset (pixels) of the watermark.
 * @method void setLocationX(integer $LocationX) Set The horizontal offset (pixels) of the watermark.
 * @method integer getLocationY() Obtain The vertical offset (pixels) of the watermark.
 * @method void setLocationY(integer $LocationY) Set The vertical offset (pixels) of the watermark.
 * @method integer getZOrder() Obtain The image layer of the watermark. If you do not pass this parameter, 0 will be used.
 * @method void setZOrder(integer $ZOrder) Set The image layer of the watermark. If you do not pass this parameter, 0 will be used.
 * @method integer getDynamicPosType() Obtain 
 * @method void setDynamicPosType(integer $DynamicPosType) Set 
 */
class McuWaterMarkImage extends AbstractModel
{
    /**
     * @var string Watermark image URL address. supports png, jpg, and jpeg formats. image size limit not more than 5MB.
Note:.
Make sure the image link has data accessibility. the backend download timeout is 10 seconds with a maximum of 3 retries. if the image download fails eventually, the watermark image will not take effect.
2. supported character sets for urls: ['0-9', 'a-z', 'a-z', '-', '.', '_', '~', ':', '/', '?', '#', '[', ']', '@', '!', '&', '(', ')', '*', '+', ',', '%', '=', ';', '|']. make sure url characters are within the supported character sets. if any characters exist outside the supported character sets, the watermark image will not take effect.
     */
    public $WaterMarkUrl;

    /**
     * @var integer The watermark width (pixels).
     */
    public $WaterMarkWidth;

    /**
     * @var integer The watermark height (pixels).
     */
    public $WaterMarkHeight;

    /**
     * @var integer The horizontal offset (pixels) of the watermark.
     */
    public $LocationX;

    /**
     * @var integer The vertical offset (pixels) of the watermark.
     */
    public $LocationY;

    /**
     * @var integer The image layer of the watermark. If you do not pass this parameter, 0 will be used.
     */
    public $ZOrder;

    /**
     * @var integer 
     */
    public $DynamicPosType;

    /**
     * @param string $WaterMarkUrl Watermark image URL address. supports png, jpg, and jpeg formats. image size limit not more than 5MB.
Note:.
Make sure the image link has data accessibility. the backend download timeout is 10 seconds with a maximum of 3 retries. if the image download fails eventually, the watermark image will not take effect.
2. supported character sets for urls: ['0-9', 'a-z', 'a-z', '-', '.', '_', '~', ':', '/', '?', '#', '[', ']', '@', '!', '&', '(', ')', '*', '+', ',', '%', '=', ';', '|']. make sure url characters are within the supported character sets. if any characters exist outside the supported character sets, the watermark image will not take effect.
     * @param integer $WaterMarkWidth The watermark width (pixels).
     * @param integer $WaterMarkHeight The watermark height (pixels).
     * @param integer $LocationX The horizontal offset (pixels) of the watermark.
     * @param integer $LocationY The vertical offset (pixels) of the watermark.
     * @param integer $ZOrder The image layer of the watermark. If you do not pass this parameter, 0 will be used.
     * @param integer $DynamicPosType 
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
        if (array_key_exists("WaterMarkUrl",$param) and $param["WaterMarkUrl"] !== null) {
            $this->WaterMarkUrl = $param["WaterMarkUrl"];
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

        if (array_key_exists("ZOrder",$param) and $param["ZOrder"] !== null) {
            $this->ZOrder = $param["ZOrder"];
        }

        if (array_key_exists("DynamicPosType",$param) and $param["DynamicPosType"] !== null) {
            $this->DynamicPosType = $param["DynamicPosType"];
        }
    }
}
