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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Image encoding format parameters
 *
 * @method string getFormat() Obtain Image format. Valid values: JPEG, PNG, BMP, and WebP. If it is not specified, the original image format is used. Animations are not supported.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setFormat(string $Format) Set Image format. Valid values: JPEG, PNG, BMP, and WebP. If it is not specified, the original image format is used. Animations are not supported.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getQuality() Obtain Relative image quality. Valid range: 1 - 100. The value is based on the original image quality, and the default is the original image quality.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setQuality(integer $Quality) Set Relative image quality. Valid range: 1 - 100. The value is based on the original image quality, and the default is the original image quality.
Note: This field may return null, indicating that no valid value can be obtained.
 */
class ImageEncodeConfig extends AbstractModel
{
    /**
     * @var string Image format. Valid values: JPEG, PNG, BMP, and WebP. If it is not specified, the original image format is used. Animations are not supported.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Format;

    /**
     * @var integer Relative image quality. Valid range: 1 - 100. The value is based on the original image quality, and the default is the original image quality.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Quality;

    /**
     * @param string $Format Image format. Valid values: JPEG, PNG, BMP, and WebP. If it is not specified, the original image format is used. Animations are not supported.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $Quality Relative image quality. Valid range: 1 - 100. The value is based on the original image quality, and the default is the original image quality.
Note: This field may return null, indicating that no valid value can be obtained.
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
