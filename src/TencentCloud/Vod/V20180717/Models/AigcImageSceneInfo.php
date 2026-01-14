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
 * @method string getType() Obtain AI image generation scenario type. valid values:
-change_clothes: AI clothing change.
-product_image: AI-generated product image.
 * @method void setType(string $Type) Set AI image generation scenario type. valid values:
-change_clothes: AI clothing change.
-product_image: AI-generated product image.
 * @method ChangeClothesConfig getChangeClothesConfig() Obtain Valid when Type is change_clothes. this item is required and indicates the AI clothes-changing image generation config.
 * @method void setChangeClothesConfig(ChangeClothesConfig $ChangeClothesConfig) Set Valid when Type is change_clothes. this item is required and indicates the AI clothes-changing image generation config.
 * @method ProductImageConfig getProductImageConfig() Obtain Valid when Type is product_image. indicates the AI-generated product image config.
 * @method void setProductImageConfig(ProductImageConfig $ProductImageConfig) Set Valid when Type is product_image. indicates the AI-generated product image config.
 */
class AigcImageSceneInfo extends AbstractModel
{
    /**
     * @var string AI image generation scenario type. valid values:
-change_clothes: AI clothing change.
-product_image: AI-generated product image.
     */
    public $Type;

    /**
     * @var ChangeClothesConfig Valid when Type is change_clothes. this item is required and indicates the AI clothes-changing image generation config.
     */
    public $ChangeClothesConfig;

    /**
     * @var ProductImageConfig Valid when Type is product_image. indicates the AI-generated product image config.
     */
    public $ProductImageConfig;

    /**
     * @param string $Type AI image generation scenario type. valid values:
-change_clothes: AI clothing change.
-product_image: AI-generated product image.
     * @param ChangeClothesConfig $ChangeClothesConfig Valid when Type is change_clothes. this item is required and indicates the AI clothes-changing image generation config.
     * @param ProductImageConfig $ProductImageConfig Valid when Type is product_image. indicates the AI-generated product image config.
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
