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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IP blocking records
 *
 * @method string getStatus() Obtain Status (Blocked: Blocked; UnBlocking: Unblocking; UnBlockFailed: Unblock failed)
 * @method void setStatus(string $Status) Set Status (Blocked: Blocked; UnBlocking: Unblocking; UnBlockFailed: Unblock failed)
 * @method string getIp() Obtain Resource IP
 * @method void setIp(string $Ip) Set Resource IP
 * @method string getBlockTime() Obtain Blocking Time
 * @method void setBlockTime(string $BlockTime) Set Blocking Time
 * @method string getUnBlockTime() Obtain Unblock Time (Estimated Unblock Time)
 * @method void setUnBlockTime(string $UnBlockTime) Set Unblock Time (Estimated Unblock Time)
 * @method string getActionType() Obtain Unblock type (user: self-service unblocking; auto: automatic unblocking; update: upgrade unblocking; bind: Anti-DDoS Pro binding unblocking)
 * @method void setActionType(string $ActionType) Set Unblock type (user: self-service unblocking; auto: automatic unblocking; update: upgrade unblocking; bind: Anti-DDoS Pro binding unblocking)
 * @method integer getProtectFlag() Obtain Anti-DDoS flag, 0: non-Anti-DDoS, 1: Anti-DDoS
 * @method void setProtectFlag(integer $ProtectFlag) Set Anti-DDoS flag, 0: non-Anti-DDoS, 1: Anti-DDoS
 */
class IpBlockData extends AbstractModel
{
    /**
     * @var string Status (Blocked: Blocked; UnBlocking: Unblocking; UnBlockFailed: Unblock failed)
     */
    public $Status;

    /**
     * @var string Resource IP
     */
    public $Ip;

    /**
     * @var string Blocking Time
     */
    public $BlockTime;

    /**
     * @var string Unblock Time (Estimated Unblock Time)
     */
    public $UnBlockTime;

    /**
     * @var string Unblock type (user: self-service unblocking; auto: automatic unblocking; update: upgrade unblocking; bind: Anti-DDoS Pro binding unblocking)
     */
    public $ActionType;

    /**
     * @var integer Anti-DDoS flag, 0: non-Anti-DDoS, 1: Anti-DDoS
     */
    public $ProtectFlag;

    /**
     * @param string $Status Status (Blocked: Blocked; UnBlocking: Unblocking; UnBlockFailed: Unblock failed)
     * @param string $Ip Resource IP
     * @param string $BlockTime Blocking Time
     * @param string $UnBlockTime Unblock Time (Estimated Unblock Time)
     * @param string $ActionType Unblock type (user: self-service unblocking; auto: automatic unblocking; update: upgrade unblocking; bind: Anti-DDoS Pro binding unblocking)
     * @param integer $ProtectFlag Anti-DDoS flag, 0: non-Anti-DDoS, 1: Anti-DDoS
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("BlockTime",$param) and $param["BlockTime"] !== null) {
            $this->BlockTime = $param["BlockTime"];
        }

        if (array_key_exists("UnBlockTime",$param) and $param["UnBlockTime"] !== null) {
            $this->UnBlockTime = $param["UnBlockTime"];
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("ProtectFlag",$param) and $param["ProtectFlag"] !== null) {
            $this->ProtectFlag = $param["ProtectFlag"];
        }
    }
}
