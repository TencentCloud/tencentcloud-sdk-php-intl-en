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
namespace TencentCloud\Lkeap\V20240522\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The returned response. Supports multiple responses.
 *
 * @method string getFinishReason() Obtain The end flag, which can be "stop" or "content_filter."
"Stop" indicates normal output end.
"Content_filter" appears only when streaming output review is enabled, indicating that the security review has not passed.
 * @method void setFinishReason(string $FinishReason) Set The end flag, which can be "stop" or "content_filter."
"Stop" indicates normal output end.
"Content_filter" appears only when streaming output review is enabled, indicating that the security review has not passed.
 * @method Delta getDelta() Obtain Incremental return value, used when making streaming calls.
 * @method void setDelta(Delta $Delta) Set Incremental return value, used when making streaming calls.
 * @method Message getMessage() Obtain Return value, used when making non-streaming calls.
 * @method void setMessage(Message $Message) Set Return value, used when making non-streaming calls.
 * @method integer getIndex() Obtain Index value, used when making streaming calls.
 * @method void setIndex(integer $Index) Set Index value, used when making streaming calls.
 */
class Choice extends AbstractModel
{
    /**
     * @var string The end flag, which can be "stop" or "content_filter."
"Stop" indicates normal output end.
"Content_filter" appears only when streaming output review is enabled, indicating that the security review has not passed.
     */
    public $FinishReason;

    /**
     * @var Delta Incremental return value, used when making streaming calls.
     */
    public $Delta;

    /**
     * @var Message Return value, used when making non-streaming calls.
     */
    public $Message;

    /**
     * @var integer Index value, used when making streaming calls.
     */
    public $Index;

    /**
     * @param string $FinishReason The end flag, which can be "stop" or "content_filter."
"Stop" indicates normal output end.
"Content_filter" appears only when streaming output review is enabled, indicating that the security review has not passed.
     * @param Delta $Delta Incremental return value, used when making streaming calls.
     * @param Message $Message Return value, used when making non-streaming calls.
     * @param integer $Index Index value, used when making streaming calls.
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
