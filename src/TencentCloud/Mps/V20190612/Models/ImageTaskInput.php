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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Image task input parameters
 *
 * @method ImageEncodeConfig getEncodeConfig() Obtain <p>Image encoding configuration.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEncodeConfig(ImageEncodeConfig $EncodeConfig) Set <p>Image encoding configuration.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ImageEnhanceConfig getEnhanceConfig() Obtain <p>Image enhancement configuration.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEnhanceConfig(ImageEnhanceConfig $EnhanceConfig) Set <p>Image enhancement configuration.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ImageEraseConfig getEraseConfig() Obtain <p>Image erasing configuration.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEraseConfig(ImageEraseConfig $EraseConfig) Set <p>Image erasing configuration.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method AiPosterSuiteConfig getAiPosterSuiteConfig() Obtain 
 * @method void setAiPosterSuiteConfig(AiPosterSuiteConfig $AiPosterSuiteConfig) Set 
 */
class ImageTaskInput extends AbstractModel
{
    /**
     * @var ImageEncodeConfig <p>Image encoding configuration.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EncodeConfig;

    /**
     * @var ImageEnhanceConfig <p>Image enhancement configuration.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EnhanceConfig;

    /**
     * @var ImageEraseConfig <p>Image erasing configuration.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EraseConfig;

    /**
     * @var AiPosterSuiteConfig 
     */
    public $AiPosterSuiteConfig;

    /**
     * @param ImageEncodeConfig $EncodeConfig <p>Image encoding configuration.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ImageEnhanceConfig $EnhanceConfig <p>Image enhancement configuration.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ImageEraseConfig $EraseConfig <p>Image erasing configuration.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param AiPosterSuiteConfig $AiPosterSuiteConfig 
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

        if (array_key_exists("EraseConfig",$param) and $param["EraseConfig"] !== null) {
            $this->EraseConfig = new ImageEraseConfig();
            $this->EraseConfig->deserialize($param["EraseConfig"]);
        }

        if (array_key_exists("AiPosterSuiteConfig",$param) and $param["AiPosterSuiteConfig"] !== null) {
            $this->AiPosterSuiteConfig = new AiPosterSuiteConfig();
            $this->AiPosterSuiteConfig->deserialize($param["AiPosterSuiteConfig"]);
        }
    }
}
