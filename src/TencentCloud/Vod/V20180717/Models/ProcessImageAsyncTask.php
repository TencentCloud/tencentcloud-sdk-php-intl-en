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
 * Asynchronous image processing configuration.
 *
 * @method ImageEncodeConfig getEncodeConfig() Obtain <p>Image transcoding output configuration.</p>
 * @method void setEncodeConfig(ImageEncodeConfig $EncodeConfig) Set <p>Image transcoding output configuration.</p>
 * @method ImageEnhanceConfig getEnhanceConfig() Obtain <p>Image enhancement configuration.</p>
 * @method void setEnhanceConfig(ImageEnhanceConfig $EnhanceConfig) Set <p>Image enhancement configuration.</p>
 * @method ImageBeautyConfig getBeautyConfig() Obtain <p>Image beauty effect configuration.</p>
 * @method void setBeautyConfig(ImageBeautyConfig $BeautyConfig) Set <p>Image beauty effect configuration.</p>
 * @method AiCutOutConfig getAiCutOutConfig() Obtain <p>Ai cutout configuration</p>
 * @method void setAiCutOutConfig(AiCutOutConfig $AiCutOutConfig) Set <p>Ai cutout configuration</p>
 */
class ProcessImageAsyncTask extends AbstractModel
{
    /**
     * @var ImageEncodeConfig <p>Image transcoding output configuration.</p>
     */
    public $EncodeConfig;

    /**
     * @var ImageEnhanceConfig <p>Image enhancement configuration.</p>
     */
    public $EnhanceConfig;

    /**
     * @var ImageBeautyConfig <p>Image beauty effect configuration.</p>
     */
    public $BeautyConfig;

    /**
     * @var AiCutOutConfig <p>Ai cutout configuration</p>
     */
    public $AiCutOutConfig;

    /**
     * @param ImageEncodeConfig $EncodeConfig <p>Image transcoding output configuration.</p>
     * @param ImageEnhanceConfig $EnhanceConfig <p>Image enhancement configuration.</p>
     * @param ImageBeautyConfig $BeautyConfig <p>Image beauty effect configuration.</p>
     * @param AiCutOutConfig $AiCutOutConfig <p>Ai cutout configuration</p>
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

        if (array_key_exists("AiCutOutConfig",$param) and $param["AiCutOutConfig"] !== null) {
            $this->AiCutOutConfig = new AiCutOutConfig();
            $this->AiCutOutConfig->deserialize($param["AiCutOutConfig"]);
        }
    }
}
