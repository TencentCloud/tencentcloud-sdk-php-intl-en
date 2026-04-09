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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Specifies the Action of the Bot browser verification rule (formerly active feature detection rule).
 *
 * @method BotSessionValidation getBotSessionValidation() Obtain Configures Cookie verification and session tracking.
 * @method void setBotSessionValidation(BotSessionValidation $BotSessionValidation) Set Configures Cookie verification and session tracking.
 * @method ClientBehaviorDetection getClientBehaviorDetection() Obtain Configures client behavior validation.
 * @method void setClientBehaviorDetection(ClientBehaviorDetection $ClientBehaviorDetection) Set Configures client behavior validation.
 */
class BrowserImpersonationDetectionAction extends AbstractModel
{
    /**
     * @var BotSessionValidation Configures Cookie verification and session tracking.
     */
    public $BotSessionValidation;

    /**
     * @var ClientBehaviorDetection Configures client behavior validation.
     */
    public $ClientBehaviorDetection;

    /**
     * @param BotSessionValidation $BotSessionValidation Configures Cookie verification and session tracking.
     * @param ClientBehaviorDetection $ClientBehaviorDetection Configures client behavior validation.
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
        if (array_key_exists("BotSessionValidation",$param) and $param["BotSessionValidation"] !== null) {
            $this->BotSessionValidation = new BotSessionValidation();
            $this->BotSessionValidation->deserialize($param["BotSessionValidation"]);
        }

        if (array_key_exists("ClientBehaviorDetection",$param) and $param["ClientBehaviorDetection"] !== null) {
            $this->ClientBehaviorDetection = new ClientBehaviorDetection();
            $this->ClientBehaviorDetection->deserialize($param["ClientBehaviorDetection"]);
        }
    }
}
