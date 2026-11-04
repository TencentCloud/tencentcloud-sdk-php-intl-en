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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BackgroundImage configuration
 *
 * @method integer getBrightness() Obtain Brightness level
 * @method void setBrightness(integer $Brightness) Set Brightness level
 * @method string getLandscapeImageUrl() Obtain Landscape image (pc)
 * @method void setLandscapeImageUrl(string $LandscapeImageUrl) Set Landscape image (pc)
 * @method string getOriginalImageUrl() Obtain Original image
 * @method void setOriginalImageUrl(string $OriginalImageUrl) Set Original image
 * @method string getPortraitImageUrl() Obtain Long image (mobile phone)
 * @method void setPortraitImageUrl(string $PortraitImageUrl) Set Long image (mobile phone)
 * @method string getThemeColor() Obtain Theme color
 * @method void setThemeColor(string $ThemeColor) Set Theme color
 */
class BackgroundImage extends AbstractModel
{
    /**
     * @var integer Brightness level
     */
    public $Brightness;

    /**
     * @var string Landscape image (pc)
     */
    public $LandscapeImageUrl;

    /**
     * @var string Original image
     */
    public $OriginalImageUrl;

    /**
     * @var string Long image (mobile phone)
     */
    public $PortraitImageUrl;

    /**
     * @var string Theme color
     */
    public $ThemeColor;

    /**
     * @param integer $Brightness Brightness level
     * @param string $LandscapeImageUrl Landscape image (pc)
     * @param string $OriginalImageUrl Original image
     * @param string $PortraitImageUrl Long image (mobile phone)
     * @param string $ThemeColor Theme color
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
        if (array_key_exists("Brightness",$param) and $param["Brightness"] !== null) {
            $this->Brightness = $param["Brightness"];
        }

        if (array_key_exists("LandscapeImageUrl",$param) and $param["LandscapeImageUrl"] !== null) {
            $this->LandscapeImageUrl = $param["LandscapeImageUrl"];
        }

        if (array_key_exists("OriginalImageUrl",$param) and $param["OriginalImageUrl"] !== null) {
            $this->OriginalImageUrl = $param["OriginalImageUrl"];
        }

        if (array_key_exists("PortraitImageUrl",$param) and $param["PortraitImageUrl"] !== null) {
            $this->PortraitImageUrl = $param["PortraitImageUrl"];
        }

        if (array_key_exists("ThemeColor",$param) and $param["ThemeColor"] !== null) {
            $this->ThemeColor = $param["ThemeColor"];
        }
    }
}
