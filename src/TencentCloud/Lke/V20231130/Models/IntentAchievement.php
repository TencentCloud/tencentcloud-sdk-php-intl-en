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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Method to attain the intent
 *
 * @method string getName() Obtain Intent attainment method. `qa`: QA reply, `doc`: document reply, `workflow`: workflow reply, `llm`: large model reply.
 * @method void setName(string $Name) Set Intent attainment method. `qa`: QA reply, `doc`: document reply, `workflow`: workflow reply, `llm`: large model reply.
 * @method string getDesc() Obtain Description of the method to attain the intent
 * @method void setDesc(string $Desc) Set Description of the method to attain the intent
 */
class IntentAchievement extends AbstractModel
{
    /**
     * @var string Intent attainment method. `qa`: QA reply, `doc`: document reply, `workflow`: workflow reply, `llm`: large model reply.
     */
    public $Name;

    /**
     * @var string Description of the method to attain the intent
     */
    public $Desc;

    /**
     * @param string $Name Intent attainment method. `qa`: QA reply, `doc`: document reply, `workflow`: workflow reply, `llm`: large model reply.
     * @param string $Desc Description of the method to attain the intent
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }
    }
}
