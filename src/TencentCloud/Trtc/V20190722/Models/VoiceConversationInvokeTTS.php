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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The server proactively sends a request to TTS.
 *
 * @method string getContent() Obtain <p>Content to inject.</p>
 * @method void setContent(string $Content) Set <p>Content to inject.</p>
 * @method integer getPriority() Obtain Priority. If no conversation is in progress, the injected content is sent to TTS. Otherwise, the behavior depends on this value. Default: 0.
Valid values:
- 0: High. Interrupt the current conversation, clear the waiting queue, and send the injected content to TTS.
- 1: Medium. Do not interrupt the current conversation. Clear the waiting queue and queue the injected content. If no conversation is in progress, the injected content is still queued.
- 2: Low. Discard the injected content.
`InvokeLLM` and `InvokeTTS` share one queue. The queue can hold only one Invoke event.
 * @method void setPriority(integer $Priority) Set Priority. If no conversation is in progress, the injected content is sent to TTS. Otherwise, the behavior depends on this value. Default: 0.
Valid values:
- 0: High. Interrupt the current conversation, clear the waiting queue, and send the injected content to TTS.
- 1: Medium. Do not interrupt the current conversation. Clear the waiting queue and queue the injected content. If no conversation is in progress, the injected content is still queued.
- 2: Low. Discard the injected content.
`InvokeLLM` and `InvokeTTS` share one queue. The queue can hold only one Invoke event.
 */
class VoiceConversationInvokeTTS extends AbstractModel
{
    /**
     * @var string <p>Content to inject.</p>
     */
    public $Content;

    /**
     * @var integer Priority. If no conversation is in progress, the injected content is sent to TTS. Otherwise, the behavior depends on this value. Default: 0.
Valid values:
- 0: High. Interrupt the current conversation, clear the waiting queue, and send the injected content to TTS.
- 1: Medium. Do not interrupt the current conversation. Clear the waiting queue and queue the injected content. If no conversation is in progress, the injected content is still queued.
- 2: Low. Discard the injected content.
`InvokeLLM` and `InvokeTTS` share one queue. The queue can hold only one Invoke event.
     */
    public $Priority;

    /**
     * @param string $Content <p>Content to inject.</p>
     * @param integer $Priority Priority. If no conversation is in progress, the injected content is sent to TTS. Otherwise, the behavior depends on this value. Default: 0.
Valid values:
- 0: High. Interrupt the current conversation, clear the waiting queue, and send the injected content to TTS.
- 1: Medium. Do not interrupt the current conversation. Clear the waiting queue and queue the injected content. If no conversation is in progress, the injected content is still queued.
- 2: Low. Discard the injected content.
`InvokeLLM` and `InvokeTTS` share one queue. The queue can hold only one Invoke event.
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
        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }
    }
}
