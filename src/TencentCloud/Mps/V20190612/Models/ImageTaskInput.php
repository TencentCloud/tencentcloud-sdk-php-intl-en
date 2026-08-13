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
 * @method void setEncodeConfig(ImageEncodeConfig $EncodeConfig) Set <p>Image encoding configuration.</p>
 * @method ImageEnhanceConfig getEnhanceConfig() Obtain <p>Image enhancement configuration.</p>
 * @method void setEnhanceConfig(ImageEnhanceConfig $EnhanceConfig) Set <p>Image enhancement configuration.</p>
 * @method ImageEraseConfig getEraseConfig() Obtain <p>Image erasing configuration.</p>
 * @method void setEraseConfig(ImageEraseConfig $EraseConfig) Set <p>Image erasing configuration.</p>
 * @method AiPosterSuiteConfig getAiPosterSuiteConfig() Obtain <p>AI image set configuration.</p>
 * @method void setAiPosterSuiteConfig(AiPosterSuiteConfig $AiPosterSuiteConfig) Set <p>AI image set configuration.</p>
 * @method AiCutoutConfig getAiCutoutConfig() Obtain <p>Ai image cutout configuration</p>
 * @method void setAiCutoutConfig(AiCutoutConfig $AiCutoutConfig) Set <p>Ai image cutout configuration</p>
 * @method AiExpansionConfig getAiExpansionConfig() Obtain <p>Ai Image Expansion Configuration</p>
 * @method void setAiExpansionConfig(AiExpansionConfig $AiExpansionConfig) Set <p>Ai Image Expansion Configuration</p>
 * @method AiStoryboardConfig getAiStoryboardConfig() Obtain <p>Ai storyboard deconstruction configuration</p>
 * @method void setAiStoryboardConfig(AiStoryboardConfig $AiStoryboardConfig) Set <p>Ai storyboard deconstruction configuration</p>
 * @method UnderstandImageConfig getUnderstandImageConfig() Obtain <p>Image understanding configuration.</p>
 * @method void setUnderstandImageConfig(UnderstandImageConfig $UnderstandImageConfig) Set <p>Image understanding configuration.</p>
 */
class ImageTaskInput extends AbstractModel
{
    /**
     * @var ImageEncodeConfig <p>Image encoding configuration.</p>
     */
    public $EncodeConfig;

    /**
     * @var ImageEnhanceConfig <p>Image enhancement configuration.</p>
     */
    public $EnhanceConfig;

    /**
     * @var ImageEraseConfig <p>Image erasing configuration.</p>
     */
    public $EraseConfig;

    /**
     * @var AiPosterSuiteConfig <p>AI image set configuration.</p>
     */
    public $AiPosterSuiteConfig;

    /**
     * @var AiCutoutConfig <p>Ai image cutout configuration</p>
     */
    public $AiCutoutConfig;

    /**
     * @var AiExpansionConfig <p>Ai Image Expansion Configuration</p>
     */
    public $AiExpansionConfig;

    /**
     * @var AiStoryboardConfig <p>Ai storyboard deconstruction configuration</p>
     */
    public $AiStoryboardConfig;

    /**
     * @var UnderstandImageConfig <p>Image understanding configuration.</p>
     */
    public $UnderstandImageConfig;

    /**
     * @param ImageEncodeConfig $EncodeConfig <p>Image encoding configuration.</p>
     * @param ImageEnhanceConfig $EnhanceConfig <p>Image enhancement configuration.</p>
     * @param ImageEraseConfig $EraseConfig <p>Image erasing configuration.</p>
     * @param AiPosterSuiteConfig $AiPosterSuiteConfig <p>AI image set configuration.</p>
     * @param AiCutoutConfig $AiCutoutConfig <p>Ai image cutout configuration</p>
     * @param AiExpansionConfig $AiExpansionConfig <p>Ai Image Expansion Configuration</p>
     * @param AiStoryboardConfig $AiStoryboardConfig <p>Ai storyboard deconstruction configuration</p>
     * @param UnderstandImageConfig $UnderstandImageConfig <p>Image understanding configuration.</p>
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

        if (array_key_exists("AiCutoutConfig",$param) and $param["AiCutoutConfig"] !== null) {
            $this->AiCutoutConfig = new AiCutoutConfig();
            $this->AiCutoutConfig->deserialize($param["AiCutoutConfig"]);
        }

        if (array_key_exists("AiExpansionConfig",$param) and $param["AiExpansionConfig"] !== null) {
            $this->AiExpansionConfig = new AiExpansionConfig();
            $this->AiExpansionConfig->deserialize($param["AiExpansionConfig"]);
        }

        if (array_key_exists("AiStoryboardConfig",$param) and $param["AiStoryboardConfig"] !== null) {
            $this->AiStoryboardConfig = new AiStoryboardConfig();
            $this->AiStoryboardConfig->deserialize($param["AiStoryboardConfig"]);
        }

        if (array_key_exists("UnderstandImageConfig",$param) and $param["UnderstandImageConfig"] !== null) {
            $this->UnderstandImageConfig = new UnderstandImageConfig();
            $this->UnderstandImageConfig->deserialize($param["UnderstandImageConfig"]);
        }
    }
}
