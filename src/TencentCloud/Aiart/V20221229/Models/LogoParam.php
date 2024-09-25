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
namespace TencentCloud\Aiart\V20221229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Logo parameter
 *
 * @method string getLogoUrl() Obtain Logo URL
 * @method void setLogoUrl(string $LogoUrl) Set Logo URL
 * @method string getLogoImage() Obtain Logo Base64 code. Either the Base64 code or URL must be provided. If both are provided, URL prevails.
 * @method void setLogoImage(string $LogoImage) Set Logo Base64 code. Either the Base64 code or URL must be provided. If both are provided, URL prevails.
 * @method LogoRect getLogoRect() Obtain Coordinates of the logo image in the generated image. The logo image will be stretched according to the coordinates.
 * @method void setLogoRect(LogoRect $LogoRect) Set Coordinates of the logo image in the generated image. The logo image will be stretched according to the coordinates.
 */
class LogoParam extends AbstractModel
{
    /**
     * @var string Logo URL
     */
    public $LogoUrl;

    /**
     * @var string Logo Base64 code. Either the Base64 code or URL must be provided. If both are provided, URL prevails.
     */
    public $LogoImage;

    /**
     * @var LogoRect Coordinates of the logo image in the generated image. The logo image will be stretched according to the coordinates.
     */
    public $LogoRect;

    /**
     * @param string $LogoUrl Logo URL
     * @param string $LogoImage Logo Base64 code. Either the Base64 code or URL must be provided. If both are provided, URL prevails.
     * @param LogoRect $LogoRect Coordinates of the logo image in the generated image. The logo image will be stretched according to the coordinates.
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
        if (array_key_exists("LogoUrl",$param) and $param["LogoUrl"] !== null) {
            $this->LogoUrl = $param["LogoUrl"];
        }

        if (array_key_exists("LogoImage",$param) and $param["LogoImage"] !== null) {
            $this->LogoImage = $param["LogoImage"];
        }

        if (array_key_exists("LogoRect",$param) and $param["LogoRect"] !== null) {
            $this->LogoRect = new LogoRect();
            $this->LogoRect->deserialize($param["LogoRect"]);
        }
    }
}
