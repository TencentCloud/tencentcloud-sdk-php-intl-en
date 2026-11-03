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
 * Specific configuration for Bot intelligent analysis.
 *
 * @method string getEnabled() Obtain Specific configuration switch for Bot intelligent analysis. Valid values:

on: enable;
off: Disable.
 * @method void setEnabled(string $Enabled) Set Specific configuration switch for Bot intelligent analysis. Valid values:

on: enable;
off: Disable.
 * @method string getId() Obtain Rule ID of Bot intelligent analysis, returned only as an output parameter.
 * @method void setId(string $Id) Set Rule ID of Bot intelligent analysis, returned only as an output parameter.
 * @method BotRatings getBotRatings() Obtain Based on the client and request features, divide the request source into human requests, valid Bot requests, suspected Bot requests, and high-risk Bot requests, and provide request handling options.
 * @method void setBotRatings(BotRatings $BotRatings) Set Based on the client and request features, divide the request source into human requests, valid Bot requests, suspected Bot requests, and high-risk Bot requests, and provide request handling options.
 */
class BotIntelligence extends AbstractModel
{
    /**
     * @var string Specific configuration switch for Bot intelligent analysis. Valid values:

on: enable;
off: Disable.
     */
    public $Enabled;

    /**
     * @var string Rule ID of Bot intelligent analysis, returned only as an output parameter.
     */
    public $Id;

    /**
     * @var BotRatings Based on the client and request features, divide the request source into human requests, valid Bot requests, suspected Bot requests, and high-risk Bot requests, and provide request handling options.
     */
    public $BotRatings;

    /**
     * @param string $Enabled Specific configuration switch for Bot intelligent analysis. Valid values:

on: enable;
off: Disable.
     * @param string $Id Rule ID of Bot intelligent analysis, returned only as an output parameter.
     * @param BotRatings $BotRatings Based on the client and request features, divide the request source into human requests, valid Bot requests, suspected Bot requests, and high-risk Bot requests, and provide request handling options.
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
