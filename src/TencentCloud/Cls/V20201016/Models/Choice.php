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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Reply, supporting multiple values
 *
 * @method string getFinishReason() Obtain <p>End flag, which may be stop, sensitive, or tool_calls.<br>stop means the output ends normally.<br>sensitive means the security review is not passed.<br>tool_calls identifies a function call.</p><p>Note:<br>Partial content may have been output, but if the FinishReason value in the middle of the response is sensitive, it means the security review is not passed. If the business scenario requires real-time text display on the screen, manually withdraw the displayed content and recommend replacing it with a custom reminder, such as "I can't answer this issue. Let's try another topic," to ensure terminal experience.</p>
 * @method void setFinishReason(string $FinishReason) Set <p>End flag, which may be stop, sensitive, or tool_calls.<br>stop means the output ends normally.<br>sensitive means the security review is not passed.<br>tool_calls identifies a function call.</p><p>Note:<br>Partial content may have been output, but if the FinishReason value in the middle of the response is sensitive, it means the security review is not passed. If the business scenario requires real-time text display on the screen, manually withdraw the displayed content and recommend replacing it with a custom reminder, such as "I can't answer this issue. Let's try another topic," to ensure terminal experience.</p>
 * @method Delta getDelta() Obtain <p>Incremental return value. This field is used when streaming.</p>
 * @method void setDelta(Delta $Delta) Set <p>Incremental return value. This field is used when streaming.</p>
 * @method Message getMessage() Obtain <p>Return value, used when Non-streaming calls.</p>
 * @method void setMessage(Message $Message) Set <p>Return value, used when Non-streaming calls.</p>
 * @method integer getIndex() Obtain <p>Index value. This field is used when streaming.</p>
 * @method void setIndex(integer $Index) Set <p>Index value. This field is used when streaming.</p>
 */
class Choice extends AbstractModel
{
    /**
     * @var string <p>End flag, which may be stop, sensitive, or tool_calls.<br>stop means the output ends normally.<br>sensitive means the security review is not passed.<br>tool_calls identifies a function call.</p><p>Note:<br>Partial content may have been output, but if the FinishReason value in the middle of the response is sensitive, it means the security review is not passed. If the business scenario requires real-time text display on the screen, manually withdraw the displayed content and recommend replacing it with a custom reminder, such as "I can't answer this issue. Let's try another topic," to ensure terminal experience.</p>
     */
    public $FinishReason;

    /**
     * @var Delta <p>Incremental return value. This field is used when streaming.</p>
     */
    public $Delta;

    /**
     * @var Message <p>Return value, used when Non-streaming calls.</p>
     */
    public $Message;

    /**
     * @var integer <p>Index value. This field is used when streaming.</p>
     */
    public $Index;

    /**
     * @param string $FinishReason <p>End flag, which may be stop, sensitive, or tool_calls.<br>stop means the output ends normally.<br>sensitive means the security review is not passed.<br>tool_calls identifies a function call.</p><p>Note:<br>Partial content may have been output, but if the FinishReason value in the middle of the response is sensitive, it means the security review is not passed. If the business scenario requires real-time text display on the screen, manually withdraw the displayed content and recommend replacing it with a custom reminder, such as "I can't answer this issue. Let's try another topic," to ensure terminal experience.</p>
     * @param Delta $Delta <p>Incremental return value. This field is used when streaming.</p>
     * @param Message $Message <p>Return value, used when Non-streaming calls.</p>
     * @param integer $Index <p>Index value. This field is used when streaming.</p>
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

        if (array_key_exists("Delta",$param) and $param["Delta"] !== null) {
            $this->Delta = new Delta();
            $this->Delta->deserialize($param["Delta"]);
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = new Message();
            $this->Message->deserialize($param["Message"]);
        }

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }
    }
}
