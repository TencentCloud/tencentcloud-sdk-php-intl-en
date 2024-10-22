<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * ControlAIConversation request structure.
 *
 * @method string getTaskId() Obtain Unique ID of the task
 * @method void setTaskId(string $TaskId) Set Unique ID of the task
 * @method string getCommand() Obtain Control commands, currently supported commands are as follows:
- ServerPushText, the server sends text to the AI robot, and the AI robot will play the text
 * @method void setCommand(string $Command) Set Control commands, currently supported commands are as follows:
- ServerPushText, the server sends text to the AI robot, and the AI robot will play the text
 * @method ServerPushText getServerPushText() Obtain The server sends a text broadcast command. This is required when Command is ServerPushText.
 * @method void setServerPushText(ServerPushText $ServerPushText) Set The server sends a text broadcast command. This is required when Command is ServerPushText.
 */
class ControlAIConversationRequest extends AbstractModel
{
    /**
     * @var string Unique ID of the task
     */
    public $TaskId;

    /**
     * @var string Control commands, currently supported commands are as follows:
- ServerPushText, the server sends text to the AI robot, and the AI robot will play the text
     */
    public $Command;

    /**
     * @var ServerPushText The server sends a text broadcast command. This is required when Command is ServerPushText.
     */
    public $ServerPushText;

    /**
     * @param string $TaskId Unique ID of the task
     * @param string $Command Control commands, currently supported commands are as follows:
- ServerPushText, the server sends text to the AI robot, and the AI robot will play the text
     * @param ServerPushText $ServerPushText The server sends a text broadcast command. This is required when Command is ServerPushText.
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Command",$param) and $param["Command"] !== null) {
            $this->Command = $param["Command"];
        }

        if (array_key_exists("ServerPushText",$param) and $param["ServerPushText"] !== null) {
            $this->ServerPushText = new ServerPushText();
            $this->ServerPushText->deserialize($param["ServerPushText"]);
        }
    }
}
