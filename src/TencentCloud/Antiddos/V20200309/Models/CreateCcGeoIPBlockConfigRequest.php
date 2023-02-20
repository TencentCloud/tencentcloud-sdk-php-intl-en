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
 * CreateCcGeoIPBlockConfig request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getIP() Obtain IP address
 * @method void setIP(string $IP) Set IP address
 * @method string getDomain() Obtain Domain name
 * @method void setDomain(string $Domain) Set Domain name
 * @method string getProtocol() Obtain Protocol type
 * @method void setProtocol(string $Protocol) Set Protocol type
 * @method CcGeoIPBlockConfig getCcGeoIPBlockConfig() Obtain CC regional blocking configuration
 * @method void setCcGeoIPBlockConfig(CcGeoIPBlockConfig $CcGeoIPBlockConfig) Set CC regional blocking configuration
 */
class CreateCcGeoIPBlockConfigRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string IP address
     */
    public $IP;

    /**
     * @var string Domain name
     */
    public $Domain;

    /**
     * @var string Protocol type
     */
    public $Protocol;

    /**
     * @var CcGeoIPBlockConfig CC regional blocking configuration
     */
    public $CcGeoIPBlockConfig;

    /**
     * @param string $InstanceId Instance ID
     * @param string $IP IP address
     * @param string $Domain Domain name
     * @param string $Protocol Protocol type
     * @param CcGeoIPBlockConfig $CcGeoIPBlockConfig CC regional blocking configuration
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

        if (array_key_exists("IP",$param) and $param["IP"] !== null) {
            $this->IP = $param["IP"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("CcGeoIPBlockConfig",$param) and $param["CcGeoIPBlockConfig"] !== null) {
            $this->CcGeoIPBlockConfig = new CcGeoIPBlockConfig();
            $this->CcGeoIPBlockConfig->deserialize($param["CcGeoIPBlockConfig"]);
        }
    }
}
