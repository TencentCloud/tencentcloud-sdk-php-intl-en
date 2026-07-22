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
 * @method string getType() Obtain <p>AI image generation scenario type, available values:</p><ul><li><code>ai_try_on</code>: AI dress up.</li><li><code>product_image</code>: AI product image.</li><li><code>outpainting</code>: AI outpainting.</li></ul><p>The following <code>Type</code> are abandoned and no longer updated subsequently:</p><ul><li><code>change_clothes</code></li><li><code>change_clothes_under</code></li><li><code>change_clothes_top_wear</code></li><li><code>change_clothes_bottom_wear</code></li><li><code>change_clothes_full_wear</code></li></ul>
 * @method void setType(string $Type) Set <p>AI image generation scenario type, available values:</p><ul><li><code>ai_try_on</code>: AI dress up.</li><li><code>product_image</code>: AI product image.</li><li><code>outpainting</code>: AI outpainting.</li></ul><p>The following <code>Type</code> are abandoned and no longer updated subsequently:</p><ul><li><code>change_clothes</code></li><li><code>change_clothes_under</code></li><li><code>change_clothes_top_wear</code></li><li><code>change_clothes_bottom_wear</code></li><li><code>change_clothes_full_wear</code></li></ul>
 * @method AiTryOnConfig getAiTryOnConfig() Obtain <p>Required when Type is ai_try_on. Represents AI dress up config.</p>
 * @method void setAiTryOnConfig(AiTryOnConfig $AiTryOnConfig) Set <p>Required when Type is ai_try_on. Represents AI dress up config.</p>
 * @method ChangeClothesConfig getChangeClothesConfig() Obtain <p><strong>Abandoned, please use AiTryOnConfig.</strong> When Type is one of the following column types, this item is required and represents AI try-on image generation configuration parameters:</p><ul><li>change_clothes</li><li>change_clothes_under</li></ul>
 * @method void setChangeClothesConfig(ChangeClothesConfig $ChangeClothesConfig) Set <p><strong>Abandoned, please use AiTryOnConfig.</strong> When Type is one of the following column types, this item is required and represents AI try-on image generation configuration parameters:</p><ul><li>change_clothes</li><li>change_clothes_under</li></ul>
 * @method ProductImageConfig getProductImageConfig() Obtain <p>Required when Type is product_image. It represents the AI product image config.</p>
 * @method void setProductImageConfig(ProductImageConfig $ProductImageConfig) Set <p>Required when Type is product_image. It represents the AI product image config.</p>
 */
class AigcImageSceneInfo extends AbstractModel
{
    /**
     * @var string <p>AI image generation scenario type, available values:</p><ul><li><code>ai_try_on</code>: AI dress up.</li><li><code>product_image</code>: AI product image.</li><li><code>outpainting</code>: AI outpainting.</li></ul><p>The following <code>Type</code> are abandoned and no longer updated subsequently:</p><ul><li><code>change_clothes</code></li><li><code>change_clothes_under</code></li><li><code>change_clothes_top_wear</code></li><li><code>change_clothes_bottom_wear</code></li><li><code>change_clothes_full_wear</code></li></ul>
     */
    public $Type;

    /**
     * @var AiTryOnConfig <p>Required when Type is ai_try_on. Represents AI dress up config.</p>
     */
    public $AiTryOnConfig;

    /**
     * @var ChangeClothesConfig <p><strong>Abandoned, please use AiTryOnConfig.</strong> When Type is one of the following column types, this item is required and represents AI try-on image generation configuration parameters:</p><ul><li>change_clothes</li><li>change_clothes_under</li></ul>
     */
    public $ChangeClothesConfig;

    /**
     * @var ProductImageConfig <p>Required when Type is product_image. It represents the AI product image config.</p>
     */
    public $ProductImageConfig;

    /**
     * @param string $Type <p>AI image generation scenario type, available values:</p><ul><li><code>ai_try_on</code>: AI dress up.</li><li><code>product_image</code>: AI product image.</li><li><code>outpainting</code>: AI outpainting.</li></ul><p>The following <code>Type</code> are abandoned and no longer updated subsequently:</p><ul><li><code>change_clothes</code></li><li><code>change_clothes_under</code></li><li><code>change_clothes_top_wear</code></li><li><code>change_clothes_bottom_wear</code></li><li><code>change_clothes_full_wear</code></li></ul>
     * @param AiTryOnConfig $AiTryOnConfig <p>Required when Type is ai_try_on. Represents AI dress up config.</p>
     * @param ChangeClothesConfig $ChangeClothesConfig <p><strong>Abandoned, please use AiTryOnConfig.</strong> When Type is one of the following column types, this item is required and represents AI try-on image generation configuration parameters:</p><ul><li>change_clothes</li><li>change_clothes_under</li></ul>
     * @param ProductImageConfig $ProductImageConfig <p>Required when Type is product_image. It represents the AI product image config.</p>
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

        if (array_key_exists("AiTryOnConfig",$param) and $param["AiTryOnConfig"] !== null) {
            $this->AiTryOnConfig = new AiTryOnConfig();
            $this->AiTryOnConfig->deserialize($param["AiTryOnConfig"]);
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
