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
 * Layer-7 instance rules
 *
 * @method integer getStatus() Obtain Rules can only be modified when the status is `0`, `2`, or `8`.
Rule status. Values: `0` (Normal), `1` (Being configured), `2` (Configuration failed), `3` (Being deleted), `5` (Failed to be deleted), `6` (Pending add), `7` (Pending delete), `8` (Pending certificate upload), `9` (Associated resource not exist), `10` (Pending modify), `11` (Being modified).
 * @method void setStatus(integer $Status) Set Rules can only be modified when the status is `0`, `2`, or `8`.
Rule status. Values: `0` (Normal), `1` (Being configured), `2` (Configuration failed), `3` (Being deleted), `5` (Failed to be deleted), `6` (Pending add), `7` (Pending delete), `8` (Pending certificate upload), `9` (Associated resource not exist), `10` (Pending modify), `11` (Being modified).
 * @method string getDomain() Obtain Domain name
 * @method void setDomain(string $Domain) Set Domain name
 * @method string getProtocol() Obtain Protocol
 * @method void setProtocol(string $Protocol) Set Protocol
 * @method string getInsId() Obtain Instance ID
 * @method void setInsId(string $InsId) Set Instance ID
 * @method string getAppId() Obtain User App ID
 * @method void setAppId(string $AppId) Set User App ID
 * @method string getVirtualPort() Obtain High-defense port
 * @method void setVirtualPort(string $VirtualPort) Set High-defense port
 * @method string getSSLId() Obtain Certificate ID
 * @method void setSSLId(string $SSLId) Set Certificate ID
 */
class InsL7Rules extends AbstractModel
{
    /**
     * @var integer Rules can only be modified when the status is `0`, `2`, or `8`.
Rule status. Values: `0` (Normal), `1` (Being configured), `2` (Configuration failed), `3` (Being deleted), `5` (Failed to be deleted), `6` (Pending add), `7` (Pending delete), `8` (Pending certificate upload), `9` (Associated resource not exist), `10` (Pending modify), `11` (Being modified).
     */
    public $Status;

    /**
     * @var string Domain name
     */
    public $Domain;

    /**
     * @var string Protocol
     */
    public $Protocol;

    /**
     * @var string Instance ID
     */
    public $InsId;

    /**
     * @var string User App ID
     */
    public $AppId;

    /**
     * @var string High-defense port
     */
    public $VirtualPort;

    /**
     * @var string Certificate ID
     */
    public $SSLId;

    /**
     * @param integer $Status Rules can only be modified when the status is `0`, `2`, or `8`.
Rule status. Values: `0` (Normal), `1` (Being configured), `2` (Configuration failed), `3` (Being deleted), `5` (Failed to be deleted), `6` (Pending add), `7` (Pending delete), `8` (Pending certificate upload), `9` (Associated resource not exist), `10` (Pending modify), `11` (Being modified).
     * @param string $Domain Domain name
     * @param string $Protocol Protocol
     * @param string $InsId Instance ID
     * @param string $AppId User App ID
     * @param string $VirtualPort High-defense port
     * @param string $SSLId Certificate ID
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

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("InsId",$param) and $param["InsId"] !== null) {
            $this->InsId = $param["InsId"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("VirtualPort",$param) and $param["VirtualPort"] !== null) {
            $this->VirtualPort = $param["VirtualPort"];
        }

        if (array_key_exists("SSLId",$param) and $param["SSLId"] !== null) {
            $this->SSLId = $param["SSLId"];
        }
    }
}
