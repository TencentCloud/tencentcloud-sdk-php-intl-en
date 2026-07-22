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
 * Image async processing configuration.
 *
 * @method ImageEncodeConfig getEncodeConfig() Obtain <p>Image transcoding output configuration.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEncodeConfig(ImageEncodeConfig $EncodeConfig) Set <p>Image transcoding output configuration.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ImageEnhanceConfig getEnhanceConfig() Obtain <p>Image enhancement configuration.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEnhanceConfig(ImageEnhanceConfig $EnhanceConfig) Set <p>Image enhancement configuration.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ImageBeautyConfig getBeautyConfig() Obtain <p>Image beauty effect configuration.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBeautyConfig(ImageBeautyConfig $BeautyConfig) Set <p>Image beauty effect configuration.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ProcessImageAsyncTask extends AbstractModel
{
    /**
     * @var ImageEncodeConfig <p>Image transcoding output configuration.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EncodeConfig;

    /**
     * @var ImageEnhanceConfig <p>Image enhancement configuration.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EnhanceConfig;

    /**
     * @var ImageBeautyConfig <p>Image beauty effect configuration.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BeautyConfig;

    /**
     * @param ImageEncodeConfig $EncodeConfig <p>Image transcoding output configuration.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ImageEnhanceConfig $EnhanceConfig <p>Image enhancement configuration.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ImageBeautyConfig $BeautyConfig <p>Image beauty effect configuration.</p>
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
        if (array_key_exists("EncodeConfig",$param) and $param["EncodeConfig"] !== null) {
            $this->EncodeConfig = new ImageEncodeConfig();
            $this->EncodeConfig->deserialize($param["EncodeConfig"]);
        }

        if (array_key_exists("EnhanceConfig",$param) and $param["EnhanceConfig"] !== null) {
            $this->EnhanceConfig = new ImageEnhanceConfig();
            $this->EnhanceConfig->deserialize($param["EnhanceConfig"]);
        }

        if (array_key_exists("BeautyConfig",$param) and $param["BeautyConfig"] !== null) {
            $this->BeautyConfig = new ImageBeautyConfig();
            $this->BeautyConfig->deserialize($param["BeautyConfig"]);
        }
    }
}
