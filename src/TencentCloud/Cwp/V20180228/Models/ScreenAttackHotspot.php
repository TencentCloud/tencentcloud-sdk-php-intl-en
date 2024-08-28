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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Attack hot spots across the entire network on the large screen
 *
 * @method string getEventName() Obtain Event name
 * @method void setEventName(string $EventName) Set Event name
 * @method string getSrcIp() Obtain Attacker IP address
 * @method void setSrcIp(string $SrcIp) Set Attacker IP address
 * @method string getDstIp() Obtain Victim IP address
 * @method void setDstIp(string $DstIp) Set Victim IP address
 * @method string getRegion() Obtain Region
 * @method void setRegion(string $Region) Set Region
 * @method string getCreatedTime() Obtain Time
 * @method void setCreatedTime(string $CreatedTime) Set Time
 */
class ScreenAttackHotspot extends AbstractModel
{
    /**
     * @var string Event name
     */
    public $EventName;

    /**
     * @var string Attacker IP address
     */
    public $SrcIp;

    /**
     * @var string Victim IP address
     */
    public $DstIp;

    /**
     * @var string Region
     */
    public $Region;

    /**
     * @var string Time
     */
    public $CreatedTime;

    /**
     * @param string $EventName Event name
     * @param string $SrcIp Attacker IP address
     * @param string $DstIp Victim IP address
     * @param string $Region Region
     * @param string $CreatedTime Time
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
        if (array_key_exists("EventName",$param) and $param["EventName"] !== null) {
            $this->EventName = $param["EventName"];
        }

        if (array_key_exists("SrcIp",$param) and $param["SrcIp"] !== null) {
            $this->SrcIp = $param["SrcIp"];
        }

        if (array_key_exists("DstIp",$param) and $param["DstIp"] !== null) {
            $this->DstIp = $param["DstIp"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }
    }
}
