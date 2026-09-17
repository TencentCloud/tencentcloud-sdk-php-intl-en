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
 * @method string getPrompt() Obtain 
 * @method void setPrompt(string $Prompt) Set 
 * @method string getNegativePrompt() Obtain 
 * @method void setNegativePrompt(string $NegativePrompt) Set 
 * @method string getProductDesc() Obtain 
 * @method void setProductDesc(string $ProductDesc) Set 
 * @method string getMoreRequirement() Obtain 
 * @method void setMoreRequirement(string $MoreRequirement) Set 
 * @method integer getOutputImageCount() Obtain 
 * @method void setOutputImageCount(integer $OutputImageCount) Set 
 */
class ProductImageConfig extends AbstractModel
{
    /**
     * @var string 
     */
    public $Prompt;

    /**
     * @var string 
     */
    public $NegativePrompt;

    /**
     * @var string 
     */
    public $ProductDesc;

    /**
     * @var string 
     */
    public $MoreRequirement;

    /**
     * @var integer 
     */
    public $OutputImageCount;

    /**
     * @param string $Prompt 
     * @param string $NegativePrompt 
     * @param string $ProductDesc 
     * @param string $MoreRequirement 
     * @param integer $OutputImageCount 
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
