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
 * Translate the reply returned by the translation api, support multiple.
 *
 * @method string getFinishReason() Obtain End flag, can be stop or sensitive.
stop means output ends normally.
sensitive only appears when streaming output review is enabled, indicating security review not passed.
 * @method void setFinishReason(string $FinishReason) Set End flag, can be stop or sensitive.
stop means output ends normally.
sensitive only appears when streaming output review is enabled, indicating security review not passed.
 * @method integer getIndex() Obtain Index value, used when streaming.
 * @method void setIndex(integer $Index) Set Index value, used when streaming.
 * @method TranslationDelta getDelta() Obtain Incremental return value used when streaming this field.
 * @method void setDelta(TranslationDelta $Delta) Set Incremental return value used when streaming this field.
 * @method TranslationMessage getMessage() Obtain Return value, used when non-streaming.
 * @method void setMessage(TranslationMessage $Message) Set Return value, used when non-streaming.
 */
class TranslationChoice extends AbstractModel
{
    /**
     * @var string End flag, can be stop or sensitive.
stop means output ends normally.
sensitive only appears when streaming output review is enabled, indicating security review not passed.
     */
    public $FinishReason;

    /**
     * @var integer Index value, used when streaming.
     */
    public $Index;

    /**
     * @var TranslationDelta Incremental return value used when streaming this field.
     */
    public $Delta;

    /**
     * @var TranslationMessage Return value, used when non-streaming.
     */
    public $Message;

    /**
     * @param string $FinishReason End flag, can be stop or sensitive.
stop means output ends normally.
sensitive only appears when streaming output review is enabled, indicating security review not passed.
     * @param integer $Index Index value, used when streaming.
     * @param TranslationDelta $Delta Incremental return value used when streaming this field.
     * @param TranslationMessage $Message Return value, used when non-streaming.
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
        if (array_key_exists("FinishReason",$param) and $param["FinishReason"] !== null) {
            $this->FinishReason = $param["FinishReason"];
        }

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("Delta",$param) and $param["Delta"] !== null) {
            $this->Delta = new TranslationDelta();
            $this->Delta->deserialize($param["Delta"]);
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = new TranslationMessage();
            $this->Message->deserialize($param["Message"]);
        }
    }
}
