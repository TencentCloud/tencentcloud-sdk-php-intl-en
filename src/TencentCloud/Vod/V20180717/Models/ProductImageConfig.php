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
 * AI product image parameter configuration.
 *
 * @method string getPrompt() Obtain Prompt content for image generation background. if this field is default, inspiration is automatically generated internally.
 * @method void setPrompt(string $Prompt) Set Prompt content for image generation background. if this field is default, inspiration is automatically generated internally.
 * @method string getNegativePrompt() Obtain Prevent the model from generating image prompts.
 * @method void setNegativePrompt(string $NegativePrompt) Set Prevent the model from generating image prompts.
 * @method string getProductDesc() Obtain Product description describes in detail, helping generate images that meet requirements.
 * @method void setProductDesc(string $ProductDesc) Set Product description describes in detail, helping generate images that meet requirements.
 * @method string getMoreRequirement() Obtain Special requirements. if any, import them through this field.
 * @method void setMoreRequirement(string $MoreRequirement) Set Special requirements. if any, import them through this field.
 * @method integer getOutputImageCount() Obtain Specifies the number of images to generate. defaults to 1 if left empty. valid value: 10.
 * @method void setOutputImageCount(integer $OutputImageCount) Set Specifies the number of images to generate. defaults to 1 if left empty. valid value: 10.
 */
class ProductImageConfig extends AbstractModel
{
    /**
     * @var string Prompt content for image generation background. if this field is default, inspiration is automatically generated internally.
     */
    public $Prompt;

    /**
     * @var string Prevent the model from generating image prompts.
     */
    public $NegativePrompt;

    /**
     * @var string Product description describes in detail, helping generate images that meet requirements.
     */
    public $ProductDesc;

    /**
     * @var string Special requirements. if any, import them through this field.
     */
    public $MoreRequirement;

    /**
     * @var integer Specifies the number of images to generate. defaults to 1 if left empty. valid value: 10.
     */
    public $OutputImageCount;

    /**
     * @param string $Prompt Prompt content for image generation background. if this field is default, inspiration is automatically generated internally.
     * @param string $NegativePrompt Prevent the model from generating image prompts.
     * @param string $ProductDesc Product description describes in detail, helping generate images that meet requirements.
     * @param string $MoreRequirement Special requirements. if any, import them through this field.
     * @param integer $OutputImageCount Specifies the number of images to generate. defaults to 1 if left empty. valid value: 10.
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
