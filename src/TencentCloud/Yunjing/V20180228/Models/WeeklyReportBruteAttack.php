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
namespace TencentCloud\Yunjing\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Brute force attack data in weekly CWP Pro report.
 *
 * @method string getMachineIp() Obtain Server IP.
 * @method void setMachineIp(string $MachineIp) Set Server IP.
 * @method string getUsername() Obtain Hacked username.
 * @method void setUsername(string $Username) Set Hacked username.
 * @method string getSrcIp() Obtain Source IP.
 * @method void setSrcIp(string $SrcIp) Set Source IP.
 * @method integer getCount() Obtain Number of attempts.
 * @method void setCount(integer $Count) Set Number of attempts.
 * @method string getAttackTime() Obtain Attack time.
 * @method void setAttackTime(string $AttackTime) Set Attack time.
 */
class WeeklyReportBruteAttack extends AbstractModel
{
    /**
     * @var string Server IP.
     */
    public $MachineIp;

    /**
     * @var string Hacked username.
     */
    public $Username;

    /**
     * @var string Source IP.
     */
    public $SrcIp;

    /**
     * @var integer Number of attempts.
     */
    public $Count;

    /**
     * @var string Attack time.
     */
    public $AttackTime;

    /**
     * @param string $MachineIp Server IP.
     * @param string $Username Hacked username.
     * @param string $SrcIp Source IP.
     * @param integer $Count Number of attempts.
     * @param string $AttackTime Attack time.
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
        if (array_key_exists("MachineIp",$param) and $param["MachineIp"] !== null) {
            $this->MachineIp = $param["MachineIp"];
        }

        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("SrcIp",$param) and $param["SrcIp"] !== null) {
            $this->SrcIp = $param["SrcIp"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("AttackTime",$param) and $param["AttackTime"] !== null) {
            $this->AttackTime = $param["AttackTime"];
        }
    }
}
