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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SendDspmCkafkaTest request structure.
 *
 * @method integer getVipType() Obtain 1 represents public network, and 7 represents supporting environment access.
 * @method void setVipType(integer $VipType) Set 1 represents public network, and 7 represents supporting environment access.
 * @method string getInstanceId() Obtain CKafka Instance ID
 * @method void setInstanceId(string $InstanceId) Set CKafka Instance ID
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method string getVip() Obtain Valid if it is 7.
 * @method void setVip(string $Vip) Set Valid if it is 7.
 * @method string getVport() Obtain Valid if it is 7.
 * @method void setVport(string $Vport) Set Valid if it is 7.
 * @method string getDomain() Obtain Domain name, which is valid when VipType is 1.
 * @method void setDomain(string $Domain) Set Domain name, which is valid when VipType is 1.
 * @method string getDomainPort() Obtain Domain port, which is valid when VipType is 1.
 * @method void setDomainPort(string $DomainPort) Set Domain port, which is valid when VipType is 1.
 * @method string getUsername() Obtain Username, which is valid when VipType is 1.
 * @method void setUsername(string $Username) Set Username, which is valid when VipType is 1.
 * @method string getPassword() Obtain User password, which is valid when VipType is 1.
 * @method void setPassword(string $Password) Set User password, which is valid when VipType is 1.
 */
class SendDspmCkafkaTestRequest extends AbstractModel
{
    /**
     * @var integer 1 represents public network, and 7 represents supporting environment access.
     */
    public $VipType;

    /**
     * @var string CKafka Instance ID
     */
    public $InstanceId;

    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var string Valid if it is 7.
     */
    public $Vip;

    /**
     * @var string Valid if it is 7.
     */
    public $Vport;

    /**
     * @var string Domain name, which is valid when VipType is 1.
     */
    public $Domain;

    /**
     * @var string Domain port, which is valid when VipType is 1.
     */
    public $DomainPort;

    /**
     * @var string Username, which is valid when VipType is 1.
     */
    public $Username;

    /**
     * @var string User password, which is valid when VipType is 1.
     */
    public $Password;

    /**
     * @param integer $VipType 1 represents public network, and 7 represents supporting environment access.
     * @param string $InstanceId CKafka Instance ID
     * @param array $MemberId <p>Group account member id</p>
     * @param string $Vip Valid if it is 7.
     * @param string $Vport Valid if it is 7.
     * @param string $Domain Domain name, which is valid when VipType is 1.
     * @param string $DomainPort Domain port, which is valid when VipType is 1.
     * @param string $Username Username, which is valid when VipType is 1.
     * @param string $Password User password, which is valid when VipType is 1.
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
        if (array_key_exists("VipType",$param) and $param["VipType"] !== null) {
            $this->VipType = $param["VipType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("DomainPort",$param) and $param["DomainPort"] !== null) {
            $this->DomainPort = $param["DomainPort"];
        }

        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }
    }
}
