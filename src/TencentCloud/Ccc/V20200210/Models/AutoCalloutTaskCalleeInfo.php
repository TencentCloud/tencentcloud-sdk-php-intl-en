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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Outbound call task called information.
 *
 * @method string getCallee() Obtain Called number.
 * @method void setCallee(string $Callee) Set Called number.
 * @method integer getState() Obtain Call status 0 - initial, 1 - answered, 2 - unanswered, 3 - calling, 4 - pending retry.
 * @method void setState(integer $State) Set Call status 0 - initial, 1 - answered, 2 - unanswered, 3 - calling, 4 - pending retry.
 * @method array getSessions() Obtain List of session ids.
 * @method void setSessions(array $Sessions) Set List of session ids.
 */
class AutoCalloutTaskCalleeInfo extends AbstractModel
{
    /**
     * @var string Called number.
     */
    public $Callee;

    /**
     * @var integer Call status 0 - initial, 1 - answered, 2 - unanswered, 3 - calling, 4 - pending retry.
     */
    public $State;

    /**
     * @var array List of session ids.
     */
    public $Sessions;

    /**
     * @param string $Callee Called number.
     * @param integer $State Call status 0 - initial, 1 - answered, 2 - unanswered, 3 - calling, 4 - pending retry.
     * @param array $Sessions List of session ids.
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
        if (array_key_exists("Callee",$param) and $param["Callee"] !== null) {
            $this->Callee = $param["Callee"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("Sessions",$param) and $param["Sessions"] !== null) {
            $this->Sessions = $param["Sessions"];
        }
    }
}
