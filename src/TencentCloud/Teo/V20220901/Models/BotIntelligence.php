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
 * Bot intelligent analysis configuration.
 *
 * @method string getEnabled() Obtain Specifies the switch for Bot intelligent analysis configuration. valid values:.

on: enabled.
off: disabled.
 * @method void setEnabled(string $Enabled) Set Specifies the switch for Bot intelligent analysis configuration. valid values:.

on: enabled.
off: disabled.
 * @method string getId() Obtain Rule ID of Bot intelligent analysis, returned as an output parameter.
 * @method void setId(string $Id) Set Rule ID of Bot intelligent analysis, returned as an output parameter.
 * @method BotRatings getBotRatings() Obtain Based on client and request features, divides request sources into human requests, legitimate Bot requests, suspected Bot requests, and high-risk Bot requests, and provides request handling options.
 * @method void setBotRatings(BotRatings $BotRatings) Set Based on client and request features, divides request sources into human requests, legitimate Bot requests, suspected Bot requests, and high-risk Bot requests, and provides request handling options.
 */
class BotIntelligence extends AbstractModel
{
    /**
     * @var string Specifies the switch for Bot intelligent analysis configuration. valid values:.

on: enabled.
off: disabled.
     */
    public $Enabled;

    /**
     * @var string Rule ID of Bot intelligent analysis, returned as an output parameter.
     */
    public $Id;

    /**
     * @var BotRatings Based on client and request features, divides request sources into human requests, legitimate Bot requests, suspected Bot requests, and high-risk Bot requests, and provides request handling options.
     */
    public $BotRatings;

    /**
     * @param string $Enabled Specifies the switch for Bot intelligent analysis configuration. valid values:.

on: enabled.
off: disabled.
     * @param string $Id Rule ID of Bot intelligent analysis, returned as an output parameter.
     * @param BotRatings $BotRatings Based on client and request features, divides request sources into human requests, legitimate Bot requests, suspected Bot requests, and high-risk Bot requests, and provides request handling options.
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
        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("BotRatings",$param) and $param["BotRatings"] !== null) {
            $this->BotRatings = new BotRatings();
            $this->BotRatings->deserialize($param["BotRatings"]);
        }
    }
}
