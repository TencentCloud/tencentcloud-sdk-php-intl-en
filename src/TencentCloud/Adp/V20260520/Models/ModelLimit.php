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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * <p>Model restrictive information</p>
 *
 * @method string getContextLengthDescription() Obtain <p>Model context length display copy (for example, 128K, 1000K)</p>
 * @method void setContextLengthDescription(string $ContextLengthDescription) Set <p>Model context length display copy (for example, 128K, 1000K)</p>
 * @method integer getInputLengthLimit() Obtain <p>Character limit for model dialog box input length</p>
 * @method void setInputLengthLimit(integer $InputLengthLimit) Set <p>Character limit for model dialog box input length</p>
 * @method string getMaxInputTokensDescription() Obtain <p>Maximum input Tokens display copy (for example, 960k, formatted on the server, empty string if not configured)</p>
 * @method void setMaxInputTokensDescription(string $MaxInputTokensDescription) Set <p>Maximum input Tokens display copy (for example, 960k, formatted on the server, empty string if not configured)</p>
 * @method string getMaxOutputTokensDescription() Obtain <p>Display copy for the maximum output Tokens (for example, 64k, formatted on the server, empty string if not configured)</p>
 * @method void setMaxOutputTokensDescription(string $MaxOutputTokensDescription) Set <p>Display copy for the maximum output Tokens (for example, 64k, formatted on the server, empty string if not configured)</p>
 * @method integer getPromptLengthLimit() Obtain <p>Model prompt content length character limit</p>
 * @method void setPromptLengthLimit(integer $PromptLengthLimit) Set <p>Model prompt content length character limit</p>
 */
class ModelLimit extends AbstractModel
{
    /**
     * @var string <p>Model context length display copy (for example, 128K, 1000K)</p>
     */
    public $ContextLengthDescription;

    /**
     * @var integer <p>Character limit for model dialog box input length</p>
     */
    public $InputLengthLimit;

    /**
     * @var string <p>Maximum input Tokens display copy (for example, 960k, formatted on the server, empty string if not configured)</p>
     */
    public $MaxInputTokensDescription;

    /**
     * @var string <p>Display copy for the maximum output Tokens (for example, 64k, formatted on the server, empty string if not configured)</p>
     */
    public $MaxOutputTokensDescription;

    /**
     * @var integer <p>Model prompt content length character limit</p>
     */
    public $PromptLengthLimit;

    /**
     * @param string $ContextLengthDescription <p>Model context length display copy (for example, 128K, 1000K)</p>
     * @param integer $InputLengthLimit <p>Character limit for model dialog box input length</p>
     * @param string $MaxInputTokensDescription <p>Maximum input Tokens display copy (for example, 960k, formatted on the server, empty string if not configured)</p>
     * @param string $MaxOutputTokensDescription <p>Display copy for the maximum output Tokens (for example, 64k, formatted on the server, empty string if not configured)</p>
     * @param integer $PromptLengthLimit <p>Model prompt content length character limit</p>
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
        if (array_key_exists("ContextLengthDescription",$param) and $param["ContextLengthDescription"] !== null) {
            $this->ContextLengthDescription = $param["ContextLengthDescription"];
        }

        if (array_key_exists("InputLengthLimit",$param) and $param["InputLengthLimit"] !== null) {
            $this->InputLengthLimit = $param["InputLengthLimit"];
        }

        if (array_key_exists("MaxInputTokensDescription",$param) and $param["MaxInputTokensDescription"] !== null) {
            $this->MaxInputTokensDescription = $param["MaxInputTokensDescription"];
        }

        if (array_key_exists("MaxOutputTokensDescription",$param) and $param["MaxOutputTokensDescription"] !== null) {
            $this->MaxOutputTokensDescription = $param["MaxOutputTokensDescription"];
        }

        if (array_key_exists("PromptLengthLimit",$param) and $param["PromptLengthLimit"] !== null) {
            $this->PromptLengthLimit = $param["PromptLengthLimit"];
        }
    }
}
