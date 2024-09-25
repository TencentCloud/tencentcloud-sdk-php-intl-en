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
namespace TencentCloud\Facefusion\V20220927\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Logo parameter
 *
 * @method FaceRect getLogoRect() Obtain Coordinates of the logo image in the fusion result image. The logo image will be stretched according to the coordinates.
 * @method void setLogoRect(FaceRect $LogoRect) Set Coordinates of the logo image in the fusion result image. The logo image will be stretched according to the coordinates.
 * @method string getLogoUrl() Obtain Logo image URL
●Either the Base64 code or URL must be provided. If both are provided, URL prevails.
●Supported image format: JPG or PNG
 * @method void setLogoUrl(string $LogoUrl) Set Logo image URL
●Either the Base64 code or URL must be provided. If both are provided, URL prevails.
●Supported image format: JPG or PNG
 * @method string getLogoImage() Obtain Logo image Base64 code
●Either the Base64 code or URL must be provided. If both are provided, URL prevails.
●Supported image format: JPG or PNG
 * @method void setLogoImage(string $LogoImage) Set Logo image Base64 code
●Either the Base64 code or URL must be provided. If both are provided, URL prevails.
●Supported image format: JPG or PNG
 */
class LogoParam extends AbstractModel
{
    /**
     * @var FaceRect Coordinates of the logo image in the fusion result image. The logo image will be stretched according to the coordinates.
     */
    public $LogoRect;

    /**
     * @var string Logo image URL
●Either the Base64 code or URL must be provided. If both are provided, URL prevails.
●Supported image format: JPG or PNG
     */
    public $LogoUrl;

    /**
     * @var string Logo image Base64 code
●Either the Base64 code or URL must be provided. If both are provided, URL prevails.
●Supported image format: JPG or PNG
     */
    public $LogoImage;

    /**
     * @param FaceRect $LogoRect Coordinates of the logo image in the fusion result image. The logo image will be stretched according to the coordinates.
     * @param string $LogoUrl Logo image URL
●Either the Base64 code or URL must be provided. If both are provided, URL prevails.
●Supported image format: JPG or PNG
     * @param string $LogoImage Logo image Base64 code
●Either the Base64 code or URL must be provided. If both are provided, URL prevails.
●Supported image format: JPG or PNG
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
        if (array_key_exists("LogoRect",$param) and $param["LogoRect"] !== null) {
            $this->LogoRect = new FaceRect();
            $this->LogoRect->deserialize($param["LogoRect"]);
        }

        if (array_key_exists("LogoUrl",$param) and $param["LogoUrl"] !== null) {
            $this->LogoUrl = $param["LogoUrl"];
        }

        if (array_key_exists("LogoImage",$param) and $param["LogoImage"] !== null) {
            $this->LogoImage = $param["LogoImage"];
        }
    }
}
