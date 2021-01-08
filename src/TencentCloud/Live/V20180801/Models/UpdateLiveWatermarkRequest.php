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
 * UpdateLiveWatermark request structure.
 *
 * @method integer getWatermarkId() Obtain Watermark ID.
Get the watermark ID in the returned value of the [AddLiveWatermark](https://intl.cloud.tencent.com/document/product/267/30154?from_cn_redirect=1) API call.
 * @method void setWatermarkId(integer $WatermarkId) Set Watermark ID.
Get the watermark ID in the returned value of the [AddLiveWatermark](https://intl.cloud.tencent.com/document/product/267/30154?from_cn_redirect=1) API call.
 * @method string getPictureUrl() Obtain Watermark image URL.
Unallowed characters in the URL:
 ;(){}$>`#"\'|
 * @method void setPictureUrl(string $PictureUrl) Set Watermark image URL.
Unallowed characters in the URL:
 ;(){}$>`#"\'|
 * @method integer getXPosition() Obtain Display position: X-axis offset in %. Default value: 0.
 * @method void setXPosition(integer $XPosition) Set Display position: X-axis offset in %. Default value: 0.
 * @method integer getYPosition() Obtain Display position: Y-axis offset in %. Default value: 0.
 * @method void setYPosition(integer $YPosition) Set Display position: Y-axis offset in %. Default value: 0.
 * @method string getWatermarkName() Obtain Watermark name.
Up to 16 bytes.
 * @method void setWatermarkName(string $WatermarkName) Set Watermark name.
Up to 16 bytes.
 * @method integer getWidth() Obtain Watermark width or its percentage of the live streaming video width. It is recommended to just specify either height or width as the other will be scaled proportionally to avoid distortions. The original width is used by default.
 * @method void setWidth(integer $Width) Set Watermark width or its percentage of the live streaming video width. It is recommended to just specify either height or width as the other will be scaled proportionally to avoid distortions. The original width is used by default.
 * @method integer getHeight() Obtain Watermark height or its percentage of the live streaming video width. It is recommended to just specify either height or width as the other will be scaled proportionally to avoid distortions. The original height is used by default.
 * @method void setHeight(integer $Height) Set Watermark height or its percentage of the live streaming video width. It is recommended to just specify either height or width as the other will be scaled proportionally to avoid distortions. The original height is used by default.
 */
class UpdateLiveWatermarkRequest extends AbstractModel
{
    /**
     * @var integer Watermark ID.
Get the watermark ID in the returned value of the [AddLiveWatermark](https://intl.cloud.tencent.com/document/product/267/30154?from_cn_redirect=1) API call.
     */
    public $WatermarkId;

    /**
     * @var string Watermark image URL.
Unallowed characters in the URL:
 ;(){}$>`#"\'|
     */
    public $PictureUrl;

    /**
     * @var integer Display position: X-axis offset in %. Default value: 0.
     */
    public $XPosition;

    /**
     * @var integer Display position: Y-axis offset in %. Default value: 0.
     */
    public $YPosition;

    /**
     * @var string Watermark name.
Up to 16 bytes.
     */
    public $WatermarkName;

    /**
     * @var integer Watermark width or its percentage of the live streaming video width. It is recommended to just specify either height or width as the other will be scaled proportionally to avoid distortions. The original width is used by default.
     */
    public $Width;

    /**
     * @var integer Watermark height or its percentage of the live streaming video width. It is recommended to just specify either height or width as the other will be scaled proportionally to avoid distortions. The original height is used by default.
     */
    public $Height;

    /**
     * @param integer $WatermarkId Watermark ID.
Get the watermark ID in the returned value of the [AddLiveWatermark](https://intl.cloud.tencent.com/document/product/267/30154?from_cn_redirect=1) API call.
     * @param string $PictureUrl Watermark image URL.
Unallowed characters in the URL:
 ;(){}$>`#"\'|
     * @param integer $XPosition Display position: X-axis offset in %. Default value: 0.
     * @param integer $YPosition Display position: Y-axis offset in %. Default value: 0.
     * @param string $WatermarkName Watermark name.
Up to 16 bytes.
     * @param integer $Width Watermark width or its percentage of the live streaming video width. It is recommended to just specify either height or width as the other will be scaled proportionally to avoid distortions. The original width is used by default.
     * @param integer $Height Watermark height or its percentage of the live streaming video width. It is recommended to just specify either height or width as the other will be scaled proportionally to avoid distortions. The original height is used by default.
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
        if (array_key_exists("WatermarkId",$param) and $param["WatermarkId"] !== null) {
            $this->WatermarkId = $param["WatermarkId"];
        }

        if (array_key_exists("PictureUrl",$param) and $param["PictureUrl"] !== null) {
            $this->PictureUrl = $param["PictureUrl"];
        }

        if (array_key_exists("XPosition",$param) and $param["XPosition"] !== null) {
            $this->XPosition = $param["XPosition"];
        }

        if (array_key_exists("YPosition",$param) and $param["YPosition"] !== null) {
            $this->YPosition = $param["YPosition"];
        }

        if (array_key_exists("WatermarkName",$param) and $param["WatermarkName"] !== null) {
            $this->WatermarkName = $param["WatermarkName"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }
    }
}
