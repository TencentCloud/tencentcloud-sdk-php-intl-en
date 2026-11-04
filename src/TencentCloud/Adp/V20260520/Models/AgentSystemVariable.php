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
 * System parameters
 *
 * @method string getName() Obtain <p>System parameter name</p>
 * @method void setName(string $Name) Set <p>System parameter name</p>
 * @method integer getDialogHistoryLimit() Obtain <p>Configuration of dialogue history rounds; used only when Input is "dialogue history" in system variables;</p>
 * @method void setDialogHistoryLimit(integer $DialogHistoryLimit) Set <p>Configuration of dialogue history rounds; used only when Input is "dialogue history" in system variables;</p>
 */
class AgentSystemVariable extends AbstractModel
{
    /**
     * @var string <p>System parameter name</p>
     */
    public $Name;

    /**
     * @var integer <p>Configuration of dialogue history rounds; used only when Input is "dialogue history" in system variables;</p>
     */
    public $DialogHistoryLimit;

    /**
     * @param string $Name <p>System parameter name</p>
     * @param integer $DialogHistoryLimit <p>Configuration of dialogue history rounds; used only when Input is "dialogue history" in system variables;</p>
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

        if (array_key_exists("DialogHistoryLimit",$param) and $param["DialogHistoryLimit"] !== null) {
            $this->DialogHistoryLimit = $param["DialogHistoryLimit"];
        }
    }
}
