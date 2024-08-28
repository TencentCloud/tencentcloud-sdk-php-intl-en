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
 * CKafka domain name information
 *
 * @method integer getRouteID() Obtain Routing ID
 * @method void setRouteID(integer $RouteID) Set Routing ID
 * @method string getDomain() Obtain Domain name
 * @method void setDomain(string $Domain) Set Domain name
 * @method integer getDomainPort() Obtain Domain Port
 * @method void setDomainPort(integer $DomainPort) Set Domain Port
 * @method string getVip() Obtain Virtual IP
 * @method void setVip(string $Vip) Set Virtual IP
 * @method integer getVipType() Obtain Virtual IP Type
 * @method void setVipType(integer $VipType) Set Virtual IP Type
 * @method integer getAccessType() Obtain Access type
 * @method void setAccessType(integer $AccessType) Set Access type
 */
class CKafkaRouteInfo extends AbstractModel
{
    /**
     * @var integer Routing ID
     */
    public $RouteID;

    /**
     * @var string Domain name
     */
    public $Domain;

    /**
     * @var integer Domain Port
     */
    public $DomainPort;

    /**
     * @var string Virtual IP
     */
    public $Vip;

    /**
     * @var integer Virtual IP Type
     */
    public $VipType;

    /**
     * @var integer Access type
     */
    public $AccessType;

    /**
     * @param integer $RouteID Routing ID
     * @param string $Domain Domain name
     * @param integer $DomainPort Domain Port
     * @param string $Vip Virtual IP
     * @param integer $VipType Virtual IP Type
     * @param integer $AccessType Access type
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
        if (array_key_exists("RouteID",$param) and $param["RouteID"] !== null) {
            $this->RouteID = $param["RouteID"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("DomainPort",$param) and $param["DomainPort"] !== null) {
            $this->DomainPort = $param["DomainPort"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("VipType",$param) and $param["VipType"] !== null) {
            $this->VipType = $param["VipType"];
        }

        if (array_key_exists("AccessType",$param) and $param["AccessType"] !== null) {
            $this->AccessType = $param["AccessType"];
        }
    }
}
