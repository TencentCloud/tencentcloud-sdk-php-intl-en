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
namespace TencentCloud\Vclm\V20240523\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Logo parameter
 *
 * @method string getLogoUrl() Obtain Watermark URL

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLogoUrl(string $LogoUrl) Set Watermark URL

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLogoImage() Obtain Watermark Base64 code is supported. Either the Base64 code or URL must be provided. If both are provided, the URL prevails.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLogoImage(string $LogoImage) Set Watermark Base64 code is supported. Either the Base64 code or URL must be provided. If both are provided, the URL prevails.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method LogoRect getLogoRect() Obtain The coordinates of the watermark image in the generated image. The mark image will be expanded according to the coordinates.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLogoRect(LogoRect $LogoRect) Set The coordinates of the watermark image in the generated image. The mark image will be expanded according to the coordinates.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class LogoParam extends AbstractModel
{
    /**
     * @var string Watermark URL

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LogoUrl;

    /**
     * @var string Watermark Base64 code is supported. Either the Base64 code or URL must be provided. If both are provided, the URL prevails.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LogoImage;

    /**
     * @var LogoRect The coordinates of the watermark image in the generated image. The mark image will be expanded according to the coordinates.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LogoRect;

    /**
     * @param string $LogoUrl Watermark URL

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LogoImage Watermark Base64 code is supported. Either the Base64 code or URL must be provided. If both are provided, the URL prevails.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param LogoRect $LogoRect The coordinates of the watermark image in the generated image. The mark image will be expanded according to the coordinates.
Note: This field may return null, indicating that no valid values can be obtained.
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
