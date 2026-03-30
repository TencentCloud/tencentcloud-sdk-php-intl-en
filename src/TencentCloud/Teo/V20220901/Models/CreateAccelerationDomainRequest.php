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
 * CreateAccelerationDomain request structure.
 *
 * @method string getZoneId() Obtain ID of the site related with the acceleration domain name.
 * @method void setZoneId(string $ZoneId) Set ID of the site related with the acceleration domain name.
 * @method string getDomainName() Obtain Acceleration domain name
 * @method void setDomainName(string $DomainName) Set Acceleration domain name
 * @method OriginInfo getOriginInfo() Obtain Details of the origin.
 * @method void setOriginInfo(OriginInfo $OriginInfo) Set Details of the origin.
 * @method string getOriginProtocol() Obtain Origin-Pull protocol. valid values:.
<Li>FOLLOW: follow protocol;</li>.
<Li>HTTP: http protocol for origin-pull;</li>.
<li>HTTPS: the origin server uses the HTTPS protocol.</li>defaults to FOLLOW if left blank.
 * @method void setOriginProtocol(string $OriginProtocol) Set Origin-Pull protocol. valid values:.
<Li>FOLLOW: follow protocol;</li>.
<Li>HTTP: http protocol for origin-pull;</li>.
<li>HTTPS: the origin server uses the HTTPS protocol.</li>defaults to FOLLOW if left blank.
 * @method integer getHttpOriginPort() Obtain HTTP origin port. default value 80. value range: 1–65535.
This parameter is valid only when OriginProtocol is FOLLOW or HTTP.
 * @method void setHttpOriginPort(integer $HttpOriginPort) Set HTTP origin port. default value 80. value range: 1–65535.
This parameter is valid only when OriginProtocol is FOLLOW or HTTP.
 * @method integer getHttpsOriginPort() Obtain HTTPS origin port. default value 443. value range: 1–65535.
This parameter is valid only when OriginProtocol is FOLLOW or HTTPS.
 * @method void setHttpsOriginPort(integer $HttpsOriginPort) Set HTTPS origin port. default value 443. value range: 1–65535.
This parameter is valid only when OriginProtocol is FOLLOW or HTTPS.
 * @method string getIPv6Status() Obtain IPv6 status. valid values:.
<li>follow: adhere to the site IPv6 configuration;</li>.
<li>on: enabled status;</li>.
<li>off: disabled.</li>if left empty, the default value is follow.
 * @method void setIPv6Status(string $IPv6Status) Set IPv6 status. valid values:.
<li>follow: adhere to the site IPv6 configuration;</li>.
<li>on: enabled status;</li>.
<li>off: disabled.</li>if left empty, the default value is follow.
 * @method string getSharedCNAME() Obtain Specify the shared CNAME address for domain binding. use the default CNAME when not specified.
Bind shared CNAME requires the scheduling policy of all domains to be consistent. the following configuration affects the scheduling policy. when inconsistent, bind shared CNAME will be processed as follows:.
-IPv6 access: not allowed to create domain name. change IPv6Status to keep it configured the same as other domain names bound to the shared CNAME.
-Anti-DDoS: if the selected shared CNAME has DDoS protection enabled, domain activation will enable DDoS protection by default.
-Network optimization in the chinese mainland (international acceleration): not allowed to create a domain name. keep the network optimization in the chinese mainland (international acceleration) configuration of the current domain name consistent with the other domain names bound to the shared CNAME and try again after.

Note: shared CNAME is currently in beta test. if you need to use it, contact us to enable it.
 * @method void setSharedCNAME(string $SharedCNAME) Set Specify the shared CNAME address for domain binding. use the default CNAME when not specified.
Bind shared CNAME requires the scheduling policy of all domains to be consistent. the following configuration affects the scheduling policy. when inconsistent, bind shared CNAME will be processed as follows:.
-IPv6 access: not allowed to create domain name. change IPv6Status to keep it configured the same as other domain names bound to the shared CNAME.
-Anti-DDoS: if the selected shared CNAME has DDoS protection enabled, domain activation will enable DDoS protection by default.
-Network optimization in the chinese mainland (international acceleration): not allowed to create a domain name. keep the network optimization in the chinese mainland (international acceleration) configuration of the current domain name consistent with the other domain names bound to the shared CNAME and try again after.

Note: shared CNAME is currently in beta test. if you need to use it, contact us to enable it.
 */
class CreateAccelerationDomainRequest extends AbstractModel
{
    /**
     * @var string ID of the site related with the acceleration domain name.
     */
    public $ZoneId;

    /**
     * @var string Acceleration domain name
     */
    public $DomainName;

    /**
     * @var OriginInfo Details of the origin.
     */
    public $OriginInfo;

    /**
     * @var string Origin-Pull protocol. valid values:.
<Li>FOLLOW: follow protocol;</li>.
<Li>HTTP: http protocol for origin-pull;</li>.
<li>HTTPS: the origin server uses the HTTPS protocol.</li>defaults to FOLLOW if left blank.
     */
    public $OriginProtocol;

    /**
     * @var integer HTTP origin port. default value 80. value range: 1–65535.
This parameter is valid only when OriginProtocol is FOLLOW or HTTP.
     */
    public $HttpOriginPort;

    /**
     * @var integer HTTPS origin port. default value 443. value range: 1–65535.
This parameter is valid only when OriginProtocol is FOLLOW or HTTPS.
     */
    public $HttpsOriginPort;

    /**
     * @var string IPv6 status. valid values:.
<li>follow: adhere to the site IPv6 configuration;</li>.
<li>on: enabled status;</li>.
<li>off: disabled.</li>if left empty, the default value is follow.
     */
    public $IPv6Status;

    /**
     * @var string Specify the shared CNAME address for domain binding. use the default CNAME when not specified.
Bind shared CNAME requires the scheduling policy of all domains to be consistent. the following configuration affects the scheduling policy. when inconsistent, bind shared CNAME will be processed as follows:.
-IPv6 access: not allowed to create domain name. change IPv6Status to keep it configured the same as other domain names bound to the shared CNAME.
-Anti-DDoS: if the selected shared CNAME has DDoS protection enabled, domain activation will enable DDoS protection by default.
-Network optimization in the chinese mainland (international acceleration): not allowed to create a domain name. keep the network optimization in the chinese mainland (international acceleration) configuration of the current domain name consistent with the other domain names bound to the shared CNAME and try again after.

Note: shared CNAME is currently in beta test. if you need to use it, contact us to enable it.
     */
    public $SharedCNAME;

    /**
     * @param string $ZoneId ID of the site related with the acceleration domain name.
     * @param string $DomainName Acceleration domain name
     * @param OriginInfo $OriginInfo Details of the origin.
     * @param string $OriginProtocol Origin-Pull protocol. valid values:.
<Li>FOLLOW: follow protocol;</li>.
<Li>HTTP: http protocol for origin-pull;</li>.
<li>HTTPS: the origin server uses the HTTPS protocol.</li>defaults to FOLLOW if left blank.
     * @param integer $HttpOriginPort HTTP origin port. default value 80. value range: 1–65535.
This parameter is valid only when OriginProtocol is FOLLOW or HTTP.
     * @param integer $HttpsOriginPort HTTPS origin port. default value 443. value range: 1–65535.
This parameter is valid only when OriginProtocol is FOLLOW or HTTPS.
     * @param string $IPv6Status IPv6 status. valid values:.
<li>follow: adhere to the site IPv6 configuration;</li>.
<li>on: enabled status;</li>.
<li>off: disabled.</li>if left empty, the default value is follow.
     * @param string $SharedCNAME Specify the shared CNAME address for domain binding. use the default CNAME when not specified.
Bind shared CNAME requires the scheduling policy of all domains to be consistent. the following configuration affects the scheduling policy. when inconsistent, bind shared CNAME will be processed as follows:.
-IPv6 access: not allowed to create domain name. change IPv6Status to keep it configured the same as other domain names bound to the shared CNAME.
-Anti-DDoS: if the selected shared CNAME has DDoS protection enabled, domain activation will enable DDoS protection by default.
-Network optimization in the chinese mainland (international acceleration): not allowed to create a domain name. keep the network optimization in the chinese mainland (international acceleration) configuration of the current domain name consistent with the other domain names bound to the shared CNAME and try again after.

Note: shared CNAME is currently in beta test. if you need to use it, contact us to enable it.
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

        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("OriginInfo",$param) and $param["OriginInfo"] !== null) {
            $this->OriginInfo = new OriginInfo();
            $this->OriginInfo->deserialize($param["OriginInfo"]);
        }

        if (array_key_exists("OriginProtocol",$param) and $param["OriginProtocol"] !== null) {
            $this->OriginProtocol = $param["OriginProtocol"];
        }

        if (array_key_exists("HttpOriginPort",$param) and $param["HttpOriginPort"] !== null) {
            $this->HttpOriginPort = $param["HttpOriginPort"];
        }

        if (array_key_exists("HttpsOriginPort",$param) and $param["HttpsOriginPort"] !== null) {
            $this->HttpsOriginPort = $param["HttpsOriginPort"];
        }

        if (array_key_exists("IPv6Status",$param) and $param["IPv6Status"] !== null) {
            $this->IPv6Status = $param["IPv6Status"];
        }

        if (array_key_exists("SharedCNAME",$param) and $param["SharedCNAME"] !== null) {
            $this->SharedCNAME = $param["SharedCNAME"];
        }
    }
}
