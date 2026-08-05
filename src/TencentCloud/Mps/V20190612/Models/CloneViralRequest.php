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
 * CloneViral request structure.
 *
 * @method string getVideoUrl() Obtain <p>Viral video Url</p>
 * @method void setVideoUrl(string $VideoUrl) Set <p>Viral video Url</p>
 * @method CloneViralProduct getProduct() Obtain <p>Product information</p>
 * @method void setProduct(CloneViralProduct $Product) Set <p>Product information</p>
 * @method CloneViralAIGC getAIGCParam() Obtain <p>AIGC video-related parameters</p>
 * @method void setAIGCParam(CloneViralAIGC $AIGCParam) Set <p>AIGC video-related parameters</p>
 * @method CloneViralContent getContentParam() Obtain <p>Content/style-related parameters</p>
 * @method void setContentParam(CloneViralContent $ContentParam) Set <p>Content/style-related parameters</p>
 * @method CloneViralPersona getPersona() Obtain <p>Model appearance</p>
 * @method void setPersona(CloneViralPersona $Persona) Set <p>Model appearance</p>
 */
class CloneViralRequest extends AbstractModel
{
    /**
     * @var string <p>Viral video Url</p>
     */
    public $VideoUrl;

    /**
     * @var CloneViralProduct <p>Product information</p>
     */
    public $Product;

    /**
     * @var CloneViralAIGC <p>AIGC video-related parameters</p>
     */
    public $AIGCParam;

    /**
     * @var CloneViralContent <p>Content/style-related parameters</p>
     */
    public $ContentParam;

    /**
     * @var CloneViralPersona <p>Model appearance</p>
     */
    public $Persona;

    /**
     * @param string $VideoUrl <p>Viral video Url</p>
     * @param CloneViralProduct $Product <p>Product information</p>
     * @param CloneViralAIGC $AIGCParam <p>AIGC video-related parameters</p>
     * @param CloneViralContent $ContentParam <p>Content/style-related parameters</p>
     * @param CloneViralPersona $Persona <p>Model appearance</p>
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
        if (array_key_exists("VideoUrl",$param) and $param["VideoUrl"] !== null) {
            $this->VideoUrl = $param["VideoUrl"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = new CloneViralProduct();
            $this->Product->deserialize($param["Product"]);
        }

        if (array_key_exists("AIGCParam",$param) and $param["AIGCParam"] !== null) {
            $this->AIGCParam = new CloneViralAIGC();
            $this->AIGCParam->deserialize($param["AIGCParam"]);
        }

        if (array_key_exists("ContentParam",$param) and $param["ContentParam"] !== null) {
            $this->ContentParam = new CloneViralContent();
            $this->ContentParam->deserialize($param["ContentParam"]);
        }

        if (array_key_exists("Persona",$param) and $param["Persona"] !== null) {
            $this->Persona = new CloneViralPersona();
            $this->Persona->deserialize($param["Persona"]);
        }
    }
}
