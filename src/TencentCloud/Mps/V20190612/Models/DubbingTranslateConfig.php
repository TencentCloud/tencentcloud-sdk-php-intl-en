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
 * dubbing task translation configuration
 *
 * @method string getVideoSrcLanguage() Obtain <p>Source language.</p>
 * @method void setVideoSrcLanguage(string $VideoSrcLanguage) Set <p>Source language.</p>
 * @method string getTranslateDstLanguage() Obtain <p>Target language of the translation.</p>
 * @method void setTranslateDstLanguage(string $TranslateDstLanguage) Set <p>Target language of the translation.</p>
 * @method string getSimplifyTranslation() Obtain <p>Intelligent translation simplification.</p><p>Enumeration values: </p><ul><li>ON: Turn on intelligent translation simplification.</li><li>OFF: Turn off intelligent translation simplification.</li></ul><p>Default value: OFF</p>
 * @method void setSimplifyTranslation(string $SimplifyTranslation) Set <p>Intelligent translation simplification.</p><p>Enumeration values: </p><ul><li>ON: Turn on intelligent translation simplification.</li><li>OFF: Turn off intelligent translation simplification.</li></ul><p>Default value: OFF</p>
 */
class DubbingTranslateConfig extends AbstractModel
{
    /**
     * @var string <p>Source language.</p>
     */
    public $VideoSrcLanguage;

    /**
     * @var string <p>Target language of the translation.</p>
     */
    public $TranslateDstLanguage;

    /**
     * @var string <p>Intelligent translation simplification.</p><p>Enumeration values: </p><ul><li>ON: Turn on intelligent translation simplification.</li><li>OFF: Turn off intelligent translation simplification.</li></ul><p>Default value: OFF</p>
     */
    public $SimplifyTranslation;

    /**
     * @param string $VideoSrcLanguage <p>Source language.</p>
     * @param string $TranslateDstLanguage <p>Target language of the translation.</p>
     * @param string $SimplifyTranslation <p>Intelligent translation simplification.</p><p>Enumeration values: </p><ul><li>ON: Turn on intelligent translation simplification.</li><li>OFF: Turn off intelligent translation simplification.</li></ul><p>Default value: OFF</p>
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
        if (array_key_exists("VideoSrcLanguage",$param) and $param["VideoSrcLanguage"] !== null) {
            $this->VideoSrcLanguage = $param["VideoSrcLanguage"];
        }

        if (array_key_exists("TranslateDstLanguage",$param) and $param["TranslateDstLanguage"] !== null) {
            $this->TranslateDstLanguage = $param["TranslateDstLanguage"];
        }

        if (array_key_exists("SimplifyTranslation",$param) and $param["SimplifyTranslation"] !== null) {
            $this->SimplifyTranslation = $param["SimplifyTranslation"];
        }
    }
}
