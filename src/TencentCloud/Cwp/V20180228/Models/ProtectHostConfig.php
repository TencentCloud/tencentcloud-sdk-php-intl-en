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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Machine protection information
 *
 * @method string getQuuid() Obtain Unique host ID.
 * @method void setQuuid(string $Quuid) Set Unique host ID.
 * @method integer getProtectSwitch() Obtain Protection switch: 0 - off; 1 - on
 * @method void setProtectSwitch(integer $ProtectSwitch) Set Protection switch: 0 - off; 1 - on
 * @method integer getAutoRecovery() Obtain Auto recovery switch. 0: disabled. 1: enabled.
 * @method void setAutoRecovery(integer $AutoRecovery) Set Auto recovery switch. 0: disabled. 1: enabled.
 */
class ProtectHostConfig extends AbstractModel
{
    /**
     * @var string Unique host ID.
     */
    public $Quuid;

    /**
     * @var integer Protection switch: 0 - off; 1 - on
     */
    public $ProtectSwitch;

    /**
     * @var integer Auto recovery switch. 0: disabled. 1: enabled.
     */
    public $AutoRecovery;

    /**
     * @param string $Quuid Unique host ID.
     * @param integer $ProtectSwitch Protection switch: 0 - off; 1 - on
     * @param integer $AutoRecovery Auto recovery switch. 0: disabled. 1: enabled.
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
        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("ProtectSwitch",$param) and $param["ProtectSwitch"] !== null) {
            $this->ProtectSwitch = $param["ProtectSwitch"];
        }

        if (array_key_exists("AutoRecovery",$param) and $param["AutoRecovery"] !== null) {
            $this->AutoRecovery = $param["AutoRecovery"];
        }
    }
}
