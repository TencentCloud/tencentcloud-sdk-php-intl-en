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
 * 
 *
 * @method string getType() Obtain 
 * @method void setType(string $Type) Set 
 * @method AiTryOnConfig getAiTryOnConfig() Obtain 
 * @method void setAiTryOnConfig(AiTryOnConfig $AiTryOnConfig) Set 
 * @method ChangeClothesConfig getChangeClothesConfig() Obtain 
 * @method void setChangeClothesConfig(ChangeClothesConfig $ChangeClothesConfig) Set 
 * @method ProductImageConfig getProductImageConfig() Obtain 
 * @method void setProductImageConfig(ProductImageConfig $ProductImageConfig) Set 
 */
class AigcImageSceneInfo extends AbstractModel
{
    /**
     * @var string 
     */
    public $Type;

    /**
     * @var AiTryOnConfig 
     */
    public $AiTryOnConfig;

    /**
     * @var ChangeClothesConfig 
     */
    public $ChangeClothesConfig;

    /**
     * @var ProductImageConfig 
     */
    public $ProductImageConfig;

    /**
     * @param string $Type 
     * @param AiTryOnConfig $AiTryOnConfig 
     * @param ChangeClothesConfig $ChangeClothesConfig 
     * @param ProductImageConfig $ProductImageConfig 
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
