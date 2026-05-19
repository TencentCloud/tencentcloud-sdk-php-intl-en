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
 * AI outfit change parameter configuration.
 *
 * @method array getClothesFileInfos() Obtain <p>Input the image list of <strong>clothing</strong> that need to be replaced. Maximum support for each kind:</p><ul><li>change_clothes: 4 images;</li><li>change_clothes_under: 1 image;</li><li>change_clothes_full_wear: 1 image;</li><li>change_clothes_top_wear: 1 image;</li><li>change_clothes_bottom_wear: 1 image;</li></ul>
 * @method void setClothesFileInfos(array $ClothesFileInfos) Set <p>Input the image list of <strong>clothing</strong> that need to be replaced. Maximum support for each kind:</p><ul><li>change_clothes: 4 images;</li><li>change_clothes_under: 1 image;</li><li>change_clothes_full_wear: 1 image;</li><li>change_clothes_top_wear: 1 image;</li><li>change_clothes_bottom_wear: 1 image;</li></ul>
 * @method string getPrompt() Obtain <p>Prompt for AI clothing change. <strong>Valid only when Type is change_clothes.</strong></p>
 * @method void setPrompt(string $Prompt) Set <p>Prompt for AI clothing change. <strong>Valid only when Type is change_clothes.</strong></p>
 */
class ChangeClothesConfig extends AbstractModel
{
    /**
     * @var array <p>Input the image list of <strong>clothing</strong> that need to be replaced. Maximum support for each kind:</p><ul><li>change_clothes: 4 images;</li><li>change_clothes_under: 1 image;</li><li>change_clothes_full_wear: 1 image;</li><li>change_clothes_top_wear: 1 image;</li><li>change_clothes_bottom_wear: 1 image;</li></ul>
     */
    public $ClothesFileInfos;

    /**
     * @var string <p>Prompt for AI clothing change. <strong>Valid only when Type is change_clothes.</strong></p>
     */
    public $Prompt;

    /**
     * @param array $ClothesFileInfos <p>Input the image list of <strong>clothing</strong> that need to be replaced. Maximum support for each kind:</p><ul><li>change_clothes: 4 images;</li><li>change_clothes_under: 1 image;</li><li>change_clothes_full_wear: 1 image;</li><li>change_clothes_top_wear: 1 image;</li><li>change_clothes_bottom_wear: 1 image;</li></ul>
     * @param string $Prompt <p>Prompt for AI clothing change. <strong>Valid only when Type is change_clothes.</strong></p>
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
        if (array_key_exists("ClothesFileInfos",$param) and $param["ClothesFileInfos"] !== null) {
            $this->ClothesFileInfos = [];
            foreach ($param["ClothesFileInfos"] as $key => $value){
                $obj = new SceneAigcImageTaskInputFileInfo();
                $obj->deserialize($value);
                array_push($this->ClothesFileInfos, $obj);
            }
        }

        if (array_key_exists("Prompt",$param) and $param["Prompt"] !== null) {
            $this->Prompt = $param["Prompt"];
        }
    }
}
