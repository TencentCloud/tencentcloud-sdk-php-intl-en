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
 * Scenario-Based AIGC image generation configuration.
 *
 * @method string getType() Obtain <p>AI image generation scenario type. Available values:</p><ul><li>change_clothes: Change clothes in regular scenes.</li><li>change_clothes_under: Change clothes in special scenarios.</li><li>change_clothes_top_wear: Change upper body clothes.</li><li>change_clothes_bottom_wear: Change lower body clothes.</li><li>change_clothes_full_wear: Change full body clothes.</li><li>product_image: AI-generated product image.</li><li>outpainting: AI image outpainting.</li></ul>
 * @method void setType(string $Type) Set <p>AI image generation scenario type. Available values:</p><ul><li>change_clothes: Change clothes in regular scenes.</li><li>change_clothes_under: Change clothes in special scenarios.</li><li>change_clothes_top_wear: Change upper body clothes.</li><li>change_clothes_bottom_wear: Change lower body clothes.</li><li>change_clothes_full_wear: Change full body clothes.</li><li>product_image: AI-generated product image.</li><li>outpainting: AI image outpainting.</li></ul>
 * @method ChangeClothesConfig getChangeClothesConfig() Obtain <p>When the Type is one of the following column types, this item is required and represents the AI clothing change image generation config:</p><ul><li>change_clothes</li><li>change_clothes_under</li><li>change_clothes_full_wear</li><li>change_clothes_top_wear</li><li>change_clothes_bottom_wear</li></ul>
 * @method void setChangeClothesConfig(ChangeClothesConfig $ChangeClothesConfig) Set <p>When the Type is one of the following column types, this item is required and represents the AI clothing change image generation config:</p><ul><li>change_clothes</li><li>change_clothes_under</li><li>change_clothes_full_wear</li><li>change_clothes_top_wear</li><li>change_clothes_bottom_wear</li></ul>
 * @method ProductImageConfig getProductImageConfig() Obtain <p>Valid when Type is product_image, indicating AI-generated product image config.</p>
 * @method void setProductImageConfig(ProductImageConfig $ProductImageConfig) Set <p>Valid when Type is product_image, indicating AI-generated product image config.</p>
 */
class AigcImageSceneInfo extends AbstractModel
{
    /**
     * @var string <p>AI image generation scenario type. Available values:</p><ul><li>change_clothes: Change clothes in regular scenes.</li><li>change_clothes_under: Change clothes in special scenarios.</li><li>change_clothes_top_wear: Change upper body clothes.</li><li>change_clothes_bottom_wear: Change lower body clothes.</li><li>change_clothes_full_wear: Change full body clothes.</li><li>product_image: AI-generated product image.</li><li>outpainting: AI image outpainting.</li></ul>
     */
    public $Type;

    /**
     * @var ChangeClothesConfig <p>When the Type is one of the following column types, this item is required and represents the AI clothing change image generation config:</p><ul><li>change_clothes</li><li>change_clothes_under</li><li>change_clothes_full_wear</li><li>change_clothes_top_wear</li><li>change_clothes_bottom_wear</li></ul>
     */
    public $ChangeClothesConfig;

    /**
     * @var ProductImageConfig <p>Valid when Type is product_image, indicating AI-generated product image config.</p>
     */
    public $ProductImageConfig;

    /**
     * @param string $Type <p>AI image generation scenario type. Available values:</p><ul><li>change_clothes: Change clothes in regular scenes.</li><li>change_clothes_under: Change clothes in special scenarios.</li><li>change_clothes_top_wear: Change upper body clothes.</li><li>change_clothes_bottom_wear: Change lower body clothes.</li><li>change_clothes_full_wear: Change full body clothes.</li><li>product_image: AI-generated product image.</li><li>outpainting: AI image outpainting.</li></ul>
     * @param ChangeClothesConfig $ChangeClothesConfig <p>When the Type is one of the following column types, this item is required and represents the AI clothing change image generation config:</p><ul><li>change_clothes</li><li>change_clothes_under</li><li>change_clothes_full_wear</li><li>change_clothes_top_wear</li><li>change_clothes_bottom_wear</li></ul>
     * @param ProductImageConfig $ProductImageConfig <p>Valid when Type is product_image, indicating AI-generated product image config.</p>
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ChangeClothesConfig",$param) and $param["ChangeClothesConfig"] !== null) {
            $this->ChangeClothesConfig = new ChangeClothesConfig();
            $this->ChangeClothesConfig->deserialize($param["ChangeClothesConfig"]);
        }

        if (array_key_exists("ProductImageConfig",$param) and $param["ProductImageConfig"] !== null) {
            $this->ProductImageConfig = new ProductImageConfig();
            $this->ProductImageConfig->deserialize($param["ProductImageConfig"]);
        }
    }
}
