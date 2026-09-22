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
 * Parameter configuration for AI-generated product images
 *
 * @method string getPrompt() Obtain Prompt for generating the image background. If this field is default, inspiration is generated automatically.
 * @method void setPrompt(string $Prompt) Set Prompt for generating the image background. If this field is default, inspiration is generated automatically.
 * @method string getNegativePrompt() Obtain Prompt used to prevent the model from image generation.
 * @method void setNegativePrompt(string $NegativePrompt) Set Prompt used to prevent the model from image generation.
 * @method string getProductDesc() Obtain A detailed product description helps generate images that better meet requirements.
 * @method void setProductDesc(string $ProductDesc) Set A detailed product description helps generate images that better meet requirements.
 * @method string getMoreRequirement() Obtain Special requirements. If any, input them through this field.
 * @method void setMoreRequirement(string $MoreRequirement) Set Special requirements. If any, input them through this field.
 * @method integer getOutputImageCount() Obtain Number of images expected to be generated. Default value: 1. Maximum valid value: 10.
 * @method void setOutputImageCount(integer $OutputImageCount) Set Number of images expected to be generated. Default value: 1. Maximum valid value: 10.
 */
class ProductImageConfig extends AbstractModel
{
    /**
     * @var string Prompt for generating the image background. If this field is default, inspiration is generated automatically.
     */
    public $Prompt;

    /**
     * @var string Prompt used to prevent the model from image generation.
     */
    public $NegativePrompt;

    /**
     * @var string A detailed product description helps generate images that better meet requirements.
     */
    public $ProductDesc;

    /**
     * @var string Special requirements. If any, input them through this field.
     */
    public $MoreRequirement;

    /**
     * @var integer Number of images expected to be generated. Default value: 1. Maximum valid value: 10.
     */
    public $OutputImageCount;

    /**
     * @param string $Prompt Prompt for generating the image background. If this field is default, inspiration is generated automatically.
     * @param string $NegativePrompt Prompt used to prevent the model from image generation.
     * @param string $ProductDesc A detailed product description helps generate images that better meet requirements.
     * @param string $MoreRequirement Special requirements. If any, input them through this field.
     * @param integer $OutputImageCount Number of images expected to be generated. Default value: 1. Maximum valid value: 10.
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
        if (array_key_exists("Prompt",$param) and $param["Prompt"] !== null) {
            $this->Prompt = $param["Prompt"];
        }

        if (array_key_exists("NegativePrompt",$param) and $param["NegativePrompt"] !== null) {
            $this->NegativePrompt = $param["NegativePrompt"];
        }

        if (array_key_exists("ProductDesc",$param) and $param["ProductDesc"] !== null) {
            $this->ProductDesc = $param["ProductDesc"];
        }

        if (array_key_exists("MoreRequirement",$param) and $param["MoreRequirement"] !== null) {
            $this->MoreRequirement = $param["MoreRequirement"];
        }

        if (array_key_exists("OutputImageCount",$param) and $param["OutputImageCount"] !== null) {
            $this->OutputImageCount = $param["OutputImageCount"];
        }
    }
}
