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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getStatus() Obtain 
 * @method void setStatus(string $Status) Set 
 * @method string getIp() Obtain 
 * @method void setIp(string $Ip) Set 
 * @method string getBlockTime() Obtain 
 * @method void setBlockTime(string $BlockTime) Set 
 * @method string getUnBlockTime() Obtain 
 * @method void setUnBlockTime(string $UnBlockTime) Set 
 * @method string getActionType() Obtain 
 * @method void setActionType(string $ActionType) Set 
 * @method integer getProtectFlag() Obtain 
 * @method void setProtectFlag(integer $ProtectFlag) Set 
 */
class IpBlockData extends AbstractModel
{
    /**
     * @var string 
     */
    public $Status;

    /**
     * @var string 
     */
    public $Ip;

    /**
     * @var string 
     */
    public $BlockTime;

    /**
     * @var string 
     */
    public $UnBlockTime;

    /**
     * @var string 
     */
    public $ActionType;

    /**
     * @var integer 
     */
    public $ProtectFlag;

    /**
     * @param string $Status 
     * @param string $Ip 
     * @param string $BlockTime 
     * @param string $UnBlockTime 
     * @param string $ActionType 
     * @param integer $ProtectFlag 
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
