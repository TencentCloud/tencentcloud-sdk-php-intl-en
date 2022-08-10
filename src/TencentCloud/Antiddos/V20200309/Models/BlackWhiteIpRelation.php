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
 * IP blocklist/allowlist
 *
 * @method string getIp() Obtain IP address
 * @method void setIp(string $Ip) Set IP address
 * @method string getType() Obtain IP type. Valid values: `black` (blocklisted IP), `white`(allowlisted IP).
 * @method void setType(string $Type) Set IP type. Valid values: `black` (blocklisted IP), `white`(allowlisted IP).
 * @method array getInstanceDetailList() Obtain Anti-DDoS instance configured
 * @method void setInstanceDetailList(array $InstanceDetailList) Set Anti-DDoS instance configured
 * @method integer getMask() Obtain IP mask. `0` indicates a 32-bit IP.
 * @method void setMask(integer $Mask) Set IP mask. `0` indicates a 32-bit IP.
 * @method string getModifyTime() Obtain Modification time
 * @method void setModifyTime(string $ModifyTime) Set Modification time
 */
class BlackWhiteIpRelation extends AbstractModel
{
    /**
     * @var string IP address
     */
    public $Ip;

    /**
     * @var string IP type. Valid values: `black` (blocklisted IP), `white`(allowlisted IP).
     */
    public $Type;

    /**
     * @var array Anti-DDoS instance configured
     */
    public $InstanceDetailList;

    /**
     * @var integer IP mask. `0` indicates a 32-bit IP.
     */
    public $Mask;

    /**
     * @var string Modification time
     */
    public $ModifyTime;

    /**
     * @param string $Ip IP address
     * @param string $Type IP type. Valid values: `black` (blocklisted IP), `white`(allowlisted IP).
     * @param array $InstanceDetailList Anti-DDoS instance configured
     * @param integer $Mask IP mask. `0` indicates a 32-bit IP.
     * @param string $ModifyTime Modification time
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("InstanceDetailList",$param) and $param["InstanceDetailList"] !== null) {
            $this->InstanceDetailList = [];
            foreach ($param["InstanceDetailList"] as $key => $value){
                $obj = new InstanceRelation();
                $obj->deserialize($value);
                array_push($this->InstanceDetailList, $obj);
            }
        }

        if (array_key_exists("Mask",$param) and $param["Mask"] !== null) {
            $this->Mask = $param["Mask"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }
    }
}
