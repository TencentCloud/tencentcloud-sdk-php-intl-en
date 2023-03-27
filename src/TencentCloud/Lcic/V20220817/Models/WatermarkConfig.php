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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Watermark settings.
Used by actions: GetWatermark.
 *
 * @method string getUrl() Obtain The URL of the watermark image. Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUrl(string $Url) Set The URL of the watermark image. Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getWidth() Obtain The watermark width, which is expressed as a percentage of the video width. Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWidth(float $Width) Set The watermark width, which is expressed as a percentage of the video width. Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getHeight() Obtain The watermark height, which is expressed as a percentage of the video height. Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHeight(float $Height) Set The watermark height, which is expressed as a percentage of the video height. Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getLocationX() Obtain The horizontal offset of the watermark, which is expressed as a percentage of the video width. For example, 50 indicates that the watermark will appear in the middle horizontally. Value range: 0-100. Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLocationX(float $LocationX) Set The horizontal offset of the watermark, which is expressed as a percentage of the video width. For example, 50 indicates that the watermark will appear in the middle horizontally. Value range: 0-100. Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getLocationY() Obtain The vertical offset of the watermark, which is expressed as a percentage of the video width. For example, 50 indicates that the watermark will appear in the middle vertically. Value range: 0-100. Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLocationY(float $LocationY) Set The vertical offset of the watermark, which is expressed as a percentage of the video width. For example, 50 indicates that the watermark will appear in the middle vertically. Value range: 0-100. Note: This field may return null, indicating that no valid values can be obtained.
 */
class WatermarkConfig extends AbstractModel
{
    /**
     * @var string The URL of the watermark image. Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Url;

    /**
     * @var float The watermark width, which is expressed as a percentage of the video width. Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Width;

    /**
     * @var float The watermark height, which is expressed as a percentage of the video height. Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Height;

    /**
     * @var float The horizontal offset of the watermark, which is expressed as a percentage of the video width. For example, 50 indicates that the watermark will appear in the middle horizontally. Value range: 0-100. Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LocationX;

    /**
     * @var float The vertical offset of the watermark, which is expressed as a percentage of the video width. For example, 50 indicates that the watermark will appear in the middle vertically. Value range: 0-100. Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LocationY;

    /**
     * @param string $Url The URL of the watermark image. Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $Width The watermark width, which is expressed as a percentage of the video width. Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $Height The watermark height, which is expressed as a percentage of the video height. Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $LocationX The horizontal offset of the watermark, which is expressed as a percentage of the video width. For example, 50 indicates that the watermark will appear in the middle horizontally. Value range: 0-100. Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $LocationY The vertical offset of the watermark, which is expressed as a percentage of the video width. For example, 50 indicates that the watermark will appear in the middle vertically. Value range: 0-100. Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("LocationX",$param) and $param["LocationX"] !== null) {
            $this->LocationX = $param["LocationX"];
        }

        if (array_key_exists("LocationY",$param) and $param["LocationY"] !== null) {
            $this->LocationY = $param["LocationY"];
        }
    }
}
