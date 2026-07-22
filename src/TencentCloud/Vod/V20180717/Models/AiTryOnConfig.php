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
 * AI dress up configuration message.
 *
 * @method string getModel() Obtain <p>Dress up model.</p><p>Enumeration value:</p><ul><li>WAND-tryon-1.0-lite: Lightweight tier, prioritizing speed.</li><li>WAND-tryon-1.0-flash: Balanced tier, taking into account effect and latency.</li><li>WAND-tryon-1.0-pro: High-quality tier, prioritizing effect.</li></ul>
 * @method void setModel(string $Model) Set <p>Dress up model.</p><p>Enumeration value:</p><ul><li>WAND-tryon-1.0-lite: Lightweight tier, prioritizing speed.</li><li>WAND-tryon-1.0-flash: Balanced tier, taking into account effect and latency.</li><li>WAND-tryon-1.0-pro: High-quality tier, prioritizing effect.</li></ul>
 * @method array getClothesFileInfos() Obtain <p>Input the image list of clothing that needs to be replaced. 1-4 images are supported.</p>
 * @method void setClothesFileInfos(array $ClothesFileInfos) Set <p>Input the image list of clothing that needs to be replaced. 1-4 images are supported.</p>
 * @method string getPrompt() Obtain <p>Dress up command Prompt.</p>
 * @method void setPrompt(string $Prompt) Set <p>Dress up command Prompt.</p>
 */
class AiTryOnConfig extends AbstractModel
{
    /**
     * @var string <p>Dress up model.</p><p>Enumeration value:</p><ul><li>WAND-tryon-1.0-lite: Lightweight tier, prioritizing speed.</li><li>WAND-tryon-1.0-flash: Balanced tier, taking into account effect and latency.</li><li>WAND-tryon-1.0-pro: High-quality tier, prioritizing effect.</li></ul>
     */
    public $Model;

    /**
     * @var array <p>Input the image list of clothing that needs to be replaced. 1-4 images are supported.</p>
     */
    public $ClothesFileInfos;

    /**
     * @var string <p>Dress up command Prompt.</p>
     */
    public $Prompt;

    /**
     * @param string $Model <p>Dress up model.</p><p>Enumeration value:</p><ul><li>WAND-tryon-1.0-lite: Lightweight tier, prioritizing speed.</li><li>WAND-tryon-1.0-flash: Balanced tier, taking into account effect and latency.</li><li>WAND-tryon-1.0-pro: High-quality tier, prioritizing effect.</li></ul>
     * @param array $ClothesFileInfos <p>Input the image list of clothing that needs to be replaced. 1-4 images are supported.</p>
     * @param string $Prompt <p>Dress up command Prompt.</p>
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
        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
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
