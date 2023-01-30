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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CKafka route details
 *
 * @method integer getRouteID() Obtain Route ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRouteID(integer $RouteID) Set Route ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDomain() Obtain Domain name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDomain(string $Domain) Set Domain name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDomainPort() Obtain Domain port
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDomainPort(integer $DomainPort) Set Domain port
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVip() Obtain VIP
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVip(string $Vip) Set VIP
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getVipType() Obtain VIP type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVipType(integer $VipType) Set VIP type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getAccessType() Obtain Access type
// `0`: PLAINTEXT (plaintext method, which does not carry user information and is supported for legacy versions and Community Edition)
	// `1`: SASL_PLAINTEXT (plaintext method, which authenticates the login through SASL before data start and is supported only for Community Edition)
	// `2`: SSL (SSL-encrypted communication, which does not carry user information and is supported for legacy versions and Community Edition)
	// `3`: SASL_SSL (SSL-encrypted communication, which authenticates the login through SASL before data start and is supported only for Community Edition)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAccessType(integer $AccessType) Set Access type
// `0`: PLAINTEXT (plaintext method, which does not carry user information and is supported for legacy versions and Community Edition)
	// `1`: SASL_PLAINTEXT (plaintext method, which authenticates the login through SASL before data start and is supported only for Community Edition)
	// `2`: SSL (SSL-encrypted communication, which does not carry user information and is supported for legacy versions and Community Edition)
	// `3`: SASL_SSL (SSL-encrypted communication, which authenticates the login through SASL before data start and is supported only for Community Edition)
Note: This field may return null, indicating that no valid values can be obtained.
 */
class CkafkaRouteInfo extends AbstractModel
{
    /**
     * @var integer Route ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RouteID;

    /**
     * @var string Domain name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Domain;

    /**
     * @var integer Domain port
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DomainPort;

    /**
     * @var string VIP
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Vip;

    /**
     * @var integer VIP type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VipType;

    /**
     * @var integer Access type
// `0`: PLAINTEXT (plaintext method, which does not carry user information and is supported for legacy versions and Community Edition)
	// `1`: SASL_PLAINTEXT (plaintext method, which authenticates the login through SASL before data start and is supported only for Community Edition)
	// `2`: SSL (SSL-encrypted communication, which does not carry user information and is supported for legacy versions and Community Edition)
	// `3`: SASL_SSL (SSL-encrypted communication, which authenticates the login through SASL before data start and is supported only for Community Edition)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AccessType;

    /**
     * @param integer $RouteID Route ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Domain Domain name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $DomainPort Domain port
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Vip VIP
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $VipType VIP type
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $AccessType Access type
// `0`: PLAINTEXT (plaintext method, which does not carry user information and is supported for legacy versions and Community Edition)
	// `1`: SASL_PLAINTEXT (plaintext method, which authenticates the login through SASL before data start and is supported only for Community Edition)
	// `2`: SSL (SSL-encrypted communication, which does not carry user information and is supported for legacy versions and Community Edition)
	// `3`: SASL_SSL (SSL-encrypted communication, which authenticates the login through SASL before data start and is supported only for Community Edition)
Note: This field may return null, indicating that no valid values can be obtained.
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
