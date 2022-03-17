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
 * CreateCcBlackWhiteIpList request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method array getIpList() Obtain List of IPs
 * @method void setIpList(array $IpList) Set List of IPs
 * @method string getType() Obtain IP permission. Valid values: `black` (blocked IP), `white` (allowed IP).
 * @method void setType(string $Type) Set IP permission. Valid values: `black` (blocked IP), `white` (allowed IP).
 * @method string getIp() Obtain IP address
 * @method void setIp(string $Ip) Set IP address
 * @method string getDomain() Obtain Domain name
 * @method void setDomain(string $Domain) Set Domain name
 * @method string getProtocol() Obtain Protocol
 * @method void setProtocol(string $Protocol) Set Protocol
 */
class CreateCcBlackWhiteIpListRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var array List of IPs
     */
    public $IpList;

    /**
     * @var string IP permission. Valid values: `black` (blocked IP), `white` (allowed IP).
     */
    public $Type;

    /**
     * @var string IP address
     */
    public $Ip;

    /**
     * @var string Domain name
     */
    public $Domain;

    /**
     * @var string Protocol
     */
    public $Protocol;

    /**
     * @param string $InstanceId Instance ID
     * @param array $IpList List of IPs
     * @param string $Type IP permission. Valid values: `black` (blocked IP), `white` (allowed IP).
     * @param string $Ip IP address
     * @param string $Domain Domain name
     * @param string $Protocol Protocol
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("IpList",$param) and $param["IpList"] !== null) {
            $this->IpList = [];
            foreach ($param["IpList"] as $key => $value){
                $obj = new IpSegment();
                $obj->deserialize($value);
                array_push($this->IpList, $obj);
            }
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }
    }
}
