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
 * The server controls the AI conversation robot to broadcast the specified text
 *
 * @method string getText() Obtain Server push broadcast text
 * @method void setText(string $Text) Set Server push broadcast text
 * @method boolean getInterrupt() Obtain Allow this text to interrupt the robot
 * @method void setInterrupt(boolean $Interrupt) Set Allow this text to interrupt the robot
 * @method boolean getStopAfterPlay() Obtain After the text is finished, whether to automatically close the conversation task
 * @method void setStopAfterPlay(boolean $StopAfterPlay) Set After the text is finished, whether to automatically close the conversation task
 */
class ServerPushText extends AbstractModel
{
    /**
     * @var string Server push broadcast text
     */
    public $Text;

    /**
     * @var boolean Allow this text to interrupt the robot
     */
    public $Interrupt;

    /**
     * @var boolean After the text is finished, whether to automatically close the conversation task
     */
    public $StopAfterPlay;

    /**
     * @param string $Text Server push broadcast text
     * @param boolean $Interrupt Allow this text to interrupt the robot
     * @param boolean $StopAfterPlay After the text is finished, whether to automatically close the conversation task
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
        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("Interrupt",$param) and $param["Interrupt"] !== null) {
            $this->Interrupt = $param["Interrupt"];
        }

        if (array_key_exists("StopAfterPlay",$param) and $param["StopAfterPlay"] !== null) {
            $this->StopAfterPlay = $param["StopAfterPlay"];
        }
    }
}
