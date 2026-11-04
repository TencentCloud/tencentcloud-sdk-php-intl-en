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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Welcome message configuration
 *
 * @method string getGreeting() Obtain <p>Welcome message content</p>
 * @method void setGreeting(string $Greeting) Set <p>Welcome message content</p>
 * @method array getOpeningQuestionList() Obtain <p>Opening problem list</p>
 * @method void setOpeningQuestionList(array $OpeningQuestionList) Set <p>Opening problem list</p>
 */
class AppGreetingConfig extends AbstractModel
{
    /**
     * @var string <p>Welcome message content</p>
     */
    public $Greeting;

    /**
     * @var array <p>Opening problem list</p>
     */
    public $OpeningQuestionList;

    /**
     * @param string $Greeting <p>Welcome message content</p>
     * @param array $OpeningQuestionList <p>Opening problem list</p>
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
        if (array_key_exists("Greeting",$param) and $param["Greeting"] !== null) {
            $this->Greeting = $param["Greeting"];
        }

        if (array_key_exists("OpeningQuestionList",$param) and $param["OpeningQuestionList"] !== null) {
            $this->OpeningQuestionList = $param["OpeningQuestionList"];
        }
    }
}
