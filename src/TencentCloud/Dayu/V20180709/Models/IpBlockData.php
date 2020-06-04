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
namespace TencentCloud\Dayu\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IP blocking record
 *
 * @method string getIp() Obtain IP
 * @method void setIp(string $Ip) Set IP
 * @method string getStatus() Obtain Status (Blocked: blocked, UnBlocking: unblocking, UnBlockFailed: unblocking failed)
 * @method void setStatus(string $Status) Set Status (Blocked: blocked, UnBlocking: unblocking, UnBlockFailed: unblocking failed)
 * @method string getBlockTime() Obtain Blocked time
 * @method void setBlockTime(string $BlockTime) Set Blocked time
 * @method string getUnBlockTime() Obtain Unblocked time (estimated)
 * @method void setUnBlockTime(string $UnBlockTime) Set Unblocked time (estimated)
 * @method string getActionType() Obtain Type of the unblocking action (`user`: self-service unblocking, `auto`: automatic unblocking, `update`: unblocking by service upgrading, `bind`: unblocking by binding Anti-DDoS Pro instance)
 * @method void setActionType(string $ActionType) Set Type of the unblocking action (`user`: self-service unblocking, `auto`: automatic unblocking, `update`: unblocking by service upgrading, `bind`: unblocking by binding Anti-DDoS Pro instance)
 */
class IpBlockData extends AbstractModel
{
    /**
     * @var string IP
     */
    public $Ip;

    /**
     * @var string Status (Blocked: blocked, UnBlocking: unblocking, UnBlockFailed: unblocking failed)
     */
    public $Status;

    /**
     * @var string Blocked time
     */
    public $BlockTime;

    /**
     * @var string Unblocked time (estimated)
     */
    public $UnBlockTime;

    /**
     * @var string Type of the unblocking action (`user`: self-service unblocking, `auto`: automatic unblocking, `update`: unblocking by service upgrading, `bind`: unblocking by binding Anti-DDoS Pro instance)
     */
    public $ActionType;

    /**
     * @param string $Ip IP
     * @param string $Status Status (Blocked: blocked, UnBlocking: unblocking, UnBlockFailed: unblocking failed)
     * @param string $BlockTime Blocked time
     * @param string $UnBlockTime Unblocked time (estimated)
     * @param string $ActionType Type of the unblocking action (`user`: self-service unblocking, `auto`: automatic unblocking, `update`: unblocking by service upgrading, `bind`: unblocking by binding Anti-DDoS Pro instance)
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
        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
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
    }
}
