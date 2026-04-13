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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Services referencing this origin group
 *
 * @method string getInstanceType() Obtain Reference service type. valid values:.
<Li>Acceleration-Domain: specifies the acceleration domain name.</li>.
<Li>Rule-Engine: specifies the rule engine.</li>.
<Li>Load-Balancer: specifies the cloud load balancer.</li>.
<li>application-proxy: layer 4 proxy.</li>.
 * @method void setInstanceType(string $InstanceType) Set Reference service type. valid values:.
<Li>Acceleration-Domain: specifies the acceleration domain name.</li>.
<Li>Rule-Engine: specifies the rule engine.</li>.
<Li>Load-Balancer: specifies the cloud load balancer.</li>.
<li>application-proxy: layer 4 proxy.</li>.
 * @method string getInstanceId() Obtain ID of the instances referencing the origin group
 * @method void setInstanceId(string $InstanceId) Set ID of the instances referencing the origin group
 * @method string getInstanceName() Obtain Specifies the instance name of the reference type.
 * @method void setInstanceName(string $InstanceName) Set Specifies the instance name of the reference type.
 * @method string getZoneId() Obtain Referer ID.
 * @method void setZoneId(string $ZoneId) Set Referer ID.
 * @method string getZoneName() Obtain Refers to the site name.
 * @method void setZoneName(string $ZoneName) Set Refers to the site name.
 * @method string getAliasZoneName() Obtain Refers to the site alias.
 * @method void setAliasZoneName(string $AliasZoneName) Set Refers to the site alias.
 */
class OriginGroupReference extends AbstractModel
{
    /**
     * @var string Reference service type. valid values:.
<Li>Acceleration-Domain: specifies the acceleration domain name.</li>.
<Li>Rule-Engine: specifies the rule engine.</li>.
<Li>Load-Balancer: specifies the cloud load balancer.</li>.
<li>application-proxy: layer 4 proxy.</li>.
     */
    public $InstanceType;

    /**
     * @var string ID of the instances referencing the origin group
     */
    public $InstanceId;

    /**
     * @var string Specifies the instance name of the reference type.
     */
    public $InstanceName;

    /**
     * @var string Referer ID.
     */
    public $ZoneId;

    /**
     * @var string Refers to the site name.
     */
    public $ZoneName;

    /**
     * @var string Refers to the site alias.
     */
    public $AliasZoneName;

    /**
     * @param string $InstanceType Reference service type. valid values:.
<Li>Acceleration-Domain: specifies the acceleration domain name.</li>.
<Li>Rule-Engine: specifies the rule engine.</li>.
<Li>Load-Balancer: specifies the cloud load balancer.</li>.
<li>application-proxy: layer 4 proxy.</li>.
     * @param string $InstanceId ID of the instances referencing the origin group
     * @param string $InstanceName Specifies the instance name of the reference type.
     * @param string $ZoneId Referer ID.
     * @param string $ZoneName Refers to the site name.
     * @param string $AliasZoneName Refers to the site alias.
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
        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("AliasZoneName",$param) and $param["AliasZoneName"] !== null) {
            $this->AliasZoneName = $param["AliasZoneName"];
        }
    }
}
