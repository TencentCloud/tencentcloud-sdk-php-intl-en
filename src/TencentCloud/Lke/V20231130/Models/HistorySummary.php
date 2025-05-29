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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Multiple rounds of historical information.
 *
 * @method string getAssistant() Obtain Assistant.
 * @method void setAssistant(string $Assistant) Set Assistant.
 * @method string getUser() Obtain User.
 * @method void setUser(string $User) Set User.
 */
class HistorySummary extends AbstractModel
{
    /**
     * @var string Assistant.
     */
    public $Assistant;

    /**
     * @var string User.
     */
    public $User;

    /**
     * @param string $Assistant Assistant.
     * @param string $User User.
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
        if (array_key_exists("Assistant",$param) and $param["Assistant"] !== null) {
            $this->Assistant = $param["Assistant"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }
    }
}
