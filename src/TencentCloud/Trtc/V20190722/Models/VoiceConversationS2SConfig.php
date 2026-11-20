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
 * Configuration parameters for the end-to-end large speech model of an AI conversation task.
 *
 * @method string getProvider() Obtain <p>S2S manufacturer identification, for example, "tencent".</p>
 * @method void setProvider(string $Provider) Set <p>S2S manufacturer identification, for example, "tencent".</p>
 * @method string getParams() Obtain <p>Manufacturer exclusive parameter, JSON serialized string.</p>
 * @method void setParams(string $Params) Set <p>Manufacturer exclusive parameter, JSON serialized string.</p>
 * @method string getWelcomeMessage() Obtain <p>The welcome message played when the host enters the room for the first time. It will play again if the host leaves and re-enters the room.</p>
 * @method void setWelcomeMessage(string $WelcomeMessage) Set <p>The welcome message played when the host enters the room for the first time. It will play again if the host leaves and re-enters the room.</p>
 */
class VoiceConversationS2SConfig extends AbstractModel
{
    /**
     * @var string <p>S2S manufacturer identification, for example, "tencent".</p>
     */
    public $Provider;

    /**
     * @var string <p>Manufacturer exclusive parameter, JSON serialized string.</p>
     */
    public $Params;

    /**
     * @var string <p>The welcome message played when the host enters the room for the first time. It will play again if the host leaves and re-enters the room.</p>
     */
    public $WelcomeMessage;

    /**
     * @param string $Provider <p>S2S manufacturer identification, for example, "tencent".</p>
     * @param string $Params <p>Manufacturer exclusive parameter, JSON serialized string.</p>
     * @param string $WelcomeMessage <p>The welcome message played when the host enters the room for the first time. It will play again if the host leaves and re-enters the room.</p>
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
        if (array_key_exists("Provider",$param) and $param["Provider"] !== null) {
            $this->Provider = $param["Provider"];
        }

        if (array_key_exists("Params",$param) and $param["Params"] !== null) {
            $this->Params = $param["Params"];
        }

        if (array_key_exists("WelcomeMessage",$param) and $param["WelcomeMessage"] !== null) {
            $this->WelcomeMessage = $param["WelcomeMessage"];
        }
    }
}
