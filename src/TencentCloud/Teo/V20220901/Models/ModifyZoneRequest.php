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
 * ModifyZone request structure.
 *
 * @method string getZoneId() Obtain Zone ID.
 * @method void setZoneId(string $ZoneId) Set Zone ID.
 * @method string getType() Obtain Site access method. Valid values:
<li>full: NS access;</li>
<li>partial: CNAME access. If the site is currently accessed with no domain name, it can be switched only to CNAME access.</li>
<li>dnsPodAccess: DNSPod hosted access. To use this access mode, your domain name should have been hosted on DNSPod.</li>If this parameter is not input, the original configuration is maintained.
 * @method void setType(string $Type) Set Site access method. Valid values:
<li>full: NS access;</li>
<li>partial: CNAME access. If the site is currently accessed with no domain name, it can be switched only to CNAME access.</li>
<li>dnsPodAccess: DNSPod hosted access. To use this access mode, your domain name should have been hosted on DNSPod.</li>If this parameter is not input, the original configuration is maintained.
 * @method VanityNameServers getVanityNameServers() Obtain Custom site info used as an alternative to the default name server assigned by the system. Maintain the original configuration if not specified. This parameter cannot be passed when the site uses the no domain access method.
 * @method void setVanityNameServers(VanityNameServers $VanityNameServers) Set Custom site info used as an alternative to the default name server assigned by the system. Maintain the original configuration if not specified. This parameter cannot be passed when the site uses the no domain access method.
 * @method string getAliasZoneName() Obtain Identical site identifier. Enter numbers, letters, ".", "-", and "_" only, up to 200 characters.
 * @method void setAliasZoneName(string $AliasZoneName) Set Identical site identifier. Enter numbers, letters, ".", "-", and "_" only, up to 200 characters.
 * @method string getArea() Obtain Site access region. Valid values:
<li> global: global;</li>
<li>mainland: Chinese mainland;</li>
<li> overseas: outside the Chinese mainland.</li>This parameter is not allowed when the site uses no domain access method.
 * @method void setArea(string $Area) Set Site access region. Valid values:
<li> global: global;</li>
<li>mainland: Chinese mainland;</li>
<li> overseas: outside the Chinese mainland.</li>This parameter is not allowed when the site uses no domain access method.
 * @method string getZoneName() Obtain Site name. This field is valid only when the site is switched from the no domain access method to the CNAME access method.
 * @method void setZoneName(string $ZoneName) Set Site name. This field is valid only when the site is switched from the no domain access method to the CNAME access method.
 */
class ModifyZoneRequest extends AbstractModel
{
    /**
     * @var string Zone ID.
     */
    public $ZoneId;

    /**
     * @var string Site access method. Valid values:
<li>full: NS access;</li>
<li>partial: CNAME access. If the site is currently accessed with no domain name, it can be switched only to CNAME access.</li>
<li>dnsPodAccess: DNSPod hosted access. To use this access mode, your domain name should have been hosted on DNSPod.</li>If this parameter is not input, the original configuration is maintained.
     */
    public $Type;

    /**
     * @var VanityNameServers Custom site info used as an alternative to the default name server assigned by the system. Maintain the original configuration if not specified. This parameter cannot be passed when the site uses the no domain access method.
     */
    public $VanityNameServers;

    /**
     * @var string Identical site identifier. Enter numbers, letters, ".", "-", and "_" only, up to 200 characters.
     */
    public $AliasZoneName;

    /**
     * @var string Site access region. Valid values:
<li> global: global;</li>
<li>mainland: Chinese mainland;</li>
<li> overseas: outside the Chinese mainland.</li>This parameter is not allowed when the site uses no domain access method.
     */
    public $Area;

    /**
     * @var string Site name. This field is valid only when the site is switched from the no domain access method to the CNAME access method.
     */
    public $ZoneName;

    /**
     * @param string $ZoneId Zone ID.
     * @param string $Type Site access method. Valid values:
<li>full: NS access;</li>
<li>partial: CNAME access. If the site is currently accessed with no domain name, it can be switched only to CNAME access.</li>
<li>dnsPodAccess: DNSPod hosted access. To use this access mode, your domain name should have been hosted on DNSPod.</li>If this parameter is not input, the original configuration is maintained.
     * @param VanityNameServers $VanityNameServers Custom site info used as an alternative to the default name server assigned by the system. Maintain the original configuration if not specified. This parameter cannot be passed when the site uses the no domain access method.
     * @param string $AliasZoneName Identical site identifier. Enter numbers, letters, ".", "-", and "_" only, up to 200 characters.
     * @param string $Area Site access region. Valid values:
<li> global: global;</li>
<li>mainland: Chinese mainland;</li>
<li> overseas: outside the Chinese mainland.</li>This parameter is not allowed when the site uses no domain access method.
     * @param string $ZoneName Site name. This field is valid only when the site is switched from the no domain access method to the CNAME access method.
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("VanityNameServers",$param) and $param["VanityNameServers"] !== null) {
            $this->VanityNameServers = new VanityNameServers();
            $this->VanityNameServers->deserialize($param["VanityNameServers"]);
        }

        if (array_key_exists("AliasZoneName",$param) and $param["AliasZoneName"] !== null) {
            $this->AliasZoneName = $param["AliasZoneName"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }
    }
}
