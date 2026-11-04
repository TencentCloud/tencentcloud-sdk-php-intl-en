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
 * Dialogue experience configuration
 *
 * @method AICallConfig getAiCall() Obtain <p>AI Call Configuration</p>
 * @method void setAiCall(AICallConfig $AiCall) Set <p>AI Call Configuration</p>
 * @method BackgroundImage getBackgroundImage() Obtain <p>Background image configuration</p>
 * @method void setBackgroundImage(BackgroundImage $BackgroundImage) Set <p>Background image configuration</p>
 * @method boolean getEnableFallbackReply() Obtain <p>Fallback response switch</p>
 * @method void setEnableFallbackReply(boolean $EnableFallbackReply) Set <p>Fallback response switch</p>
 * @method boolean getEnableRecommended() Obtain <p>Whether to use recommended questions.</p>
 * @method void setEnableRecommended(boolean $EnableRecommended) Set <p>Whether to use recommended questions.</p>
 * @method boolean getEnableWebSearch() Obtain <p>Whether to use online search.</p>
 * @method void setEnableWebSearch(boolean $EnableWebSearch) Set <p>Whether to use online search.</p>
 * @method string getFallbackReply() Obtain <p>Fallback response</p>
 * @method void setFallbackReply(string $FallbackReply) Set <p>Fallback response</p>
 * @method InputBoxConfig getInputBoxConfig() Obtain <p>Input box configuration</p>
 * @method void setInputBoxConfig(InputBoxConfig $InputBoxConfig) Set <p>Input box configuration</p>
 * @method integer getMethod() Obtain <p>Output method. Enumeration values: 1: streaming, 2: non-streaming</p>
 * @method void setMethod(integer $Method) Set <p>Output method. Enumeration values: 1: streaming, 2: non-streaming</p>
 * @method integer getRecommendPromptMode() Obtain <p>Recommended question generation prompt mode. Enumeration value: 1: Prompt that outputs recommended questions combined with the knowledge base only</p>
 * @method void setRecommendPromptMode(integer $RecommendPromptMode) Set <p>Recommended question generation prompt mode. Enumeration value: 1: Prompt that outputs recommended questions combined with the knowledge base only</p>
 * @method boolean getEnableNewMessageInterrupt() Obtain <p>A new message interrupts the ongoing message</p>
 * @method void setEnableNewMessageInterrupt(boolean $EnableNewMessageInterrupt) Set <p>A new message interrupts the ongoing message</p>
 */
class ConversationExperience extends AbstractModel
{
    /**
     * @var AICallConfig <p>AI Call Configuration</p>
     */
    public $AiCall;

    /**
     * @var BackgroundImage <p>Background image configuration</p>
     */
    public $BackgroundImage;

    /**
     * @var boolean <p>Fallback response switch</p>
     */
    public $EnableFallbackReply;

    /**
     * @var boolean <p>Whether to use recommended questions.</p>
     */
    public $EnableRecommended;

    /**
     * @var boolean <p>Whether to use online search.</p>
     */
    public $EnableWebSearch;

    /**
     * @var string <p>Fallback response</p>
     */
    public $FallbackReply;

    /**
     * @var InputBoxConfig <p>Input box configuration</p>
     */
    public $InputBoxConfig;

    /**
     * @var integer <p>Output method. Enumeration values: 1: streaming, 2: non-streaming</p>
     */
    public $Method;

    /**
     * @var integer <p>Recommended question generation prompt mode. Enumeration value: 1: Prompt that outputs recommended questions combined with the knowledge base only</p>
     */
    public $RecommendPromptMode;

    /**
     * @var boolean <p>A new message interrupts the ongoing message</p>
     */
    public $EnableNewMessageInterrupt;

    /**
     * @param AICallConfig $AiCall <p>AI Call Configuration</p>
     * @param BackgroundImage $BackgroundImage <p>Background image configuration</p>
     * @param boolean $EnableFallbackReply <p>Fallback response switch</p>
     * @param boolean $EnableRecommended <p>Whether to use recommended questions.</p>
     * @param boolean $EnableWebSearch <p>Whether to use online search.</p>
     * @param string $FallbackReply <p>Fallback response</p>
     * @param InputBoxConfig $InputBoxConfig <p>Input box configuration</p>
     * @param integer $Method <p>Output method. Enumeration values: 1: streaming, 2: non-streaming</p>
     * @param integer $RecommendPromptMode <p>Recommended question generation prompt mode. Enumeration value: 1: Prompt that outputs recommended questions combined with the knowledge base only</p>
     * @param boolean $EnableNewMessageInterrupt <p>A new message interrupts the ongoing message</p>
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
        if (array_key_exists("AiCall",$param) and $param["AiCall"] !== null) {
            $this->AiCall = new AICallConfig();
            $this->AiCall->deserialize($param["AiCall"]);
        }

        if (array_key_exists("BackgroundImage",$param) and $param["BackgroundImage"] !== null) {
            $this->BackgroundImage = new BackgroundImage();
            $this->BackgroundImage->deserialize($param["BackgroundImage"]);
        }

        if (array_key_exists("EnableFallbackReply",$param) and $param["EnableFallbackReply"] !== null) {
            $this->EnableFallbackReply = $param["EnableFallbackReply"];
        }

        if (array_key_exists("EnableRecommended",$param) and $param["EnableRecommended"] !== null) {
            $this->EnableRecommended = $param["EnableRecommended"];
        }

        if (array_key_exists("EnableWebSearch",$param) and $param["EnableWebSearch"] !== null) {
            $this->EnableWebSearch = $param["EnableWebSearch"];
        }

        if (array_key_exists("FallbackReply",$param) and $param["FallbackReply"] !== null) {
            $this->FallbackReply = $param["FallbackReply"];
        }

        if (array_key_exists("InputBoxConfig",$param) and $param["InputBoxConfig"] !== null) {
            $this->InputBoxConfig = new InputBoxConfig();
            $this->InputBoxConfig->deserialize($param["InputBoxConfig"]);
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("RecommendPromptMode",$param) and $param["RecommendPromptMode"] !== null) {
            $this->RecommendPromptMode = $param["RecommendPromptMode"];
        }

        if (array_key_exists("EnableNewMessageInterrupt",$param) and $param["EnableNewMessageInterrupt"] !== null) {
            $this->EnableNewMessageInterrupt = $param["EnableNewMessageInterrupt"];
        }
    }
}
