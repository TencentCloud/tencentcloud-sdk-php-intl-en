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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Content/style parameters of hit product clone
 *
 * @method string getUserPrompt() Obtain <p>Custom prompt describing requirements for video generation</p>
 * @method void setUserPrompt(string $UserPrompt) Set <p>Custom prompt describing requirements for video generation</p>
 * @method string getLanguage() Obtain <p>Target language for video generation. Default: not specified. Supported values: zh / en / ja / ko / es / pt / instrumental (pure music without voiceover)</p>
 * @method void setLanguage(string $Language) Set <p>Target language for video generation. Default: not specified. Supported values: zh / en / ja / ko / es / pt / instrumental (pure music without voiceover)</p>
 * @method string getMarket() Obtain <p>Target market. Default: not specified. Supported values: north_america / europe / china / japan / korea / sea / brazil</p>
 * @method void setMarket(string $Market) Set <p>Target market. Default: not specified. Supported values: north_america / europe / china / japan / korea / sea / brazil</p>
 * @method string getFissionLevel() Obtain <p>Fission level. Values: exact/low/medium/high. Default: exact (1:1 clone)</p>
 * @method void setFissionLevel(string $FissionLevel) Set <p>Fission level. Values: exact/low/medium/high. Default: exact (1:1 clone)</p>
 */
class CloneViralContent extends AbstractModel
{
    /**
     * @var string <p>Custom prompt describing requirements for video generation</p>
     */
    public $UserPrompt;

    /**
     * @var string <p>Target language for video generation. Default: not specified. Supported values: zh / en / ja / ko / es / pt / instrumental (pure music without voiceover)</p>
     */
    public $Language;

    /**
     * @var string <p>Target market. Default: not specified. Supported values: north_america / europe / china / japan / korea / sea / brazil</p>
     */
    public $Market;

    /**
     * @var string <p>Fission level. Values: exact/low/medium/high. Default: exact (1:1 clone)</p>
     */
    public $FissionLevel;

    /**
     * @param string $UserPrompt <p>Custom prompt describing requirements for video generation</p>
     * @param string $Language <p>Target language for video generation. Default: not specified. Supported values: zh / en / ja / ko / es / pt / instrumental (pure music without voiceover)</p>
     * @param string $Market <p>Target market. Default: not specified. Supported values: north_america / europe / china / japan / korea / sea / brazil</p>
     * @param string $FissionLevel <p>Fission level. Values: exact/low/medium/high. Default: exact (1:1 clone)</p>
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
        if (array_key_exists("UserPrompt",$param) and $param["UserPrompt"] !== null) {
            $this->UserPrompt = $param["UserPrompt"];
        }

        if (array_key_exists("Language",$param) and $param["Language"] !== null) {
            $this->Language = $param["Language"];
        }

        if (array_key_exists("Market",$param) and $param["Market"] !== null) {
            $this->Market = $param["Market"];
        }

        if (array_key_exists("FissionLevel",$param) and $param["FissionLevel"] !== null) {
            $this->FissionLevel = $param["FissionLevel"];
        }
    }
}
