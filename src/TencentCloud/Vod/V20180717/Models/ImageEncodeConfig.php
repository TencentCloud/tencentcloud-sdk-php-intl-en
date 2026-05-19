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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Image encoding format parameters
 *
 * @method string getFormat() Obtain Image format. Valid values: JPEG, PNG, BMP, and WebP. Defaults to the original image format. Animation is not supported.
 * @method void setFormat(string $Format) Set Image format. Valid values: JPEG, PNG, BMP, and WebP. Defaults to the original image format. Animation is not supported.
 * @method integer getQuality() Obtain Relative image quality. Value ranges from 1 to 100. The numeric value is based on the original image quality and defaults to the original image quality.
 * @method void setQuality(integer $Quality) Set Relative image quality. Value ranges from 1 to 100. The numeric value is based on the original image quality and defaults to the original image quality.
 */
class ImageEncodeConfig extends AbstractModel
{
    /**
     * @var string Image format. Valid values: JPEG, PNG, BMP, and WebP. Defaults to the original image format. Animation is not supported.
     */
    public $Format;

    /**
     * @var integer Relative image quality. Value ranges from 1 to 100. The numeric value is based on the original image quality and defaults to the original image quality.
     */
    public $Quality;

    /**
     * @param string $Format Image format. Valid values: JPEG, PNG, BMP, and WebP. Defaults to the original image format. Animation is not supported.
     * @param integer $Quality Relative image quality. Value ranges from 1 to 100. The numeric value is based on the original image quality and defaults to the original image quality.
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
        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("Quality",$param) and $param["Quality"] !== null) {
            $this->Quality = $param["Quality"];
        }
    }
}
