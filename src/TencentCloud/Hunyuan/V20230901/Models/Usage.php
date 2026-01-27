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
namespace TencentCloud\Hunyuan\V20230901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Token quantity.
 *
 * @method integer getPromptTokens() Obtain Input Token quantity.
 * @method void setPromptTokens(integer $PromptTokens) Set Input Token quantity.
 * @method integer getCompletionTokens() Obtain Output Token quantity.
 * @method void setCompletionTokens(integer $CompletionTokens) Set Output Token quantity.
 * @method integer getTotalTokens() Obtain Total Token quantity.
 * @method void setTotalTokens(integer $TotalTokens) Set Total Token quantity.
 * @method PromptTokensDetails getPromptTokensDetails() Obtain Details of the input token.
 * @method void setPromptTokensDetails(PromptTokensDetails $PromptTokensDetails) Set Details of the input token.
 */
class Usage extends AbstractModel
{
    /**
     * @var integer Input Token quantity.
     */
    public $PromptTokens;

    /**
     * @var integer Output Token quantity.
     */
    public $CompletionTokens;

    /**
     * @var integer Total Token quantity.
     */
    public $TotalTokens;

    /**
     * @var PromptTokensDetails Details of the input token.
     */
    public $PromptTokensDetails;

    /**
     * @param integer $PromptTokens Input Token quantity.
     * @param integer $CompletionTokens Output Token quantity.
     * @param integer $TotalTokens Total Token quantity.
     * @param PromptTokensDetails $PromptTokensDetails Details of the input token.
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
        if (array_key_exists("PromptTokens",$param) and $param["PromptTokens"] !== null) {
            $this->PromptTokens = $param["PromptTokens"];
        }

        if (array_key_exists("CompletionTokens",$param) and $param["CompletionTokens"] !== null) {
            $this->CompletionTokens = $param["CompletionTokens"];
        }

        if (array_key_exists("TotalTokens",$param) and $param["TotalTokens"] !== null) {
            $this->TotalTokens = $param["TotalTokens"];
        }

        if (array_key_exists("PromptTokensDetails",$param) and $param["PromptTokensDetails"] !== null) {
            $this->PromptTokensDetails = new PromptTokensDetails();
            $this->PromptTokensDetails->deserialize($param["PromptTokensDetails"]);
        }
    }
}
