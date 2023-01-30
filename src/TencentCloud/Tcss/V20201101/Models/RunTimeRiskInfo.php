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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Runtime risk information
 *
 * @method integer getCnt() Obtain Number
 * @method void setCnt(integer $Cnt) Set Number
 * @method string getLevel() Obtain Risk level:
`CRITICAL`: Critical.
`HIGH`: High.
`MEDIUM`: Medium.
`LOW`: Low.
 * @method void setLevel(string $Level) Set Risk level:
`CRITICAL`: Critical.
`HIGH`: High.
`MEDIUM`: Medium.
`LOW`: Low.
 */
class RunTimeRiskInfo extends AbstractModel
{
    /**
     * @var integer Number
     */
    public $Cnt;

    /**
     * @var string Risk level:
`CRITICAL`: Critical.
`HIGH`: High.
`MEDIUM`: Medium.
`LOW`: Low.
     */
    public $Level;

    /**
     * @param integer $Cnt Number
     * @param string $Level Risk level:
`CRITICAL`: Critical.
`HIGH`: High.
`MEDIUM`: Medium.
`LOW`: Low.
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
        if (array_key_exists("Cnt",$param) and $param["Cnt"] !== null) {
            $this->Cnt = $param["Cnt"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }
    }
}
