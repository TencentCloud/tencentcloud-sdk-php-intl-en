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
 * Site verification info
 *
 * @method string getZoneName() Obtain Site name.
 * @method void setZoneName(string $ZoneName) Set Site name.
 * @method string getDomain() Obtain Verify a subdomain. This value is empty when verifying a site. A subdomain is verified for a specific subdomain.
 * @method void setDomain(string $Domain) Set Verify a subdomain. This value is empty when verifying a site. A subdomain is verified for a specific subdomain.
 * @method string getStatus() Obtain Verification status. Valid values:
<li>pending: verifying.</li>
<li> finished: verification complete.</li>
 * @method void setStatus(string $Status) Set Verification status. Valid values:
<li>pending: verifying.</li>
<li> finished: verification complete.</li>
 * @method AscriptionInfo getAscription() Obtain Site ownership verification: Dns verification information.
 * @method void setAscription(AscriptionInfo $Ascription) Set Site ownership verification: Dns verification information.
 * @method array getOriginalNameServers() Obtain Current NS record of the domain name.
 * @method void setOriginalNameServers(array $OriginalNameServers) Set Current NS record of the domain name.
 * @method FileAscriptionInfo getFileAscription() Obtain Site ownership verification: file verification information.
 * @method void setFileAscription(FileAscriptionInfo $FileAscription) Set Site ownership verification: file verification information.
 */
class Identification extends AbstractModel
{
    /**
     * @var string Site name.
     */
    public $ZoneName;

    /**
     * @var string Verify a subdomain. This value is empty when verifying a site. A subdomain is verified for a specific subdomain.
     */
    public $Domain;

    /**
     * @var string Verification status. Valid values:
<li>pending: verifying.</li>
<li> finished: verification complete.</li>
     */
    public $Status;

    /**
     * @var AscriptionInfo Site ownership verification: Dns verification information.
     */
    public $Ascription;

    /**
     * @var array Current NS record of the domain name.
     */
    public $OriginalNameServers;

    /**
     * @var FileAscriptionInfo Site ownership verification: file verification information.
     */
    public $FileAscription;

    /**
     * @param string $ZoneName Site name.
     * @param string $Domain Verify a subdomain. This value is empty when verifying a site. A subdomain is verified for a specific subdomain.
     * @param string $Status Verification status. Valid values:
<li>pending: verifying.</li>
<li> finished: verification complete.</li>
     * @param AscriptionInfo $Ascription Site ownership verification: Dns verification information.
     * @param array $OriginalNameServers Current NS record of the domain name.
     * @param FileAscriptionInfo $FileAscription Site ownership verification: file verification information.
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
        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Ascription",$param) and $param["Ascription"] !== null) {
            $this->Ascription = new AscriptionInfo();
            $this->Ascription->deserialize($param["Ascription"]);
        }

        if (array_key_exists("OriginalNameServers",$param) and $param["OriginalNameServers"] !== null) {
            $this->OriginalNameServers = $param["OriginalNameServers"];
        }

        if (array_key_exists("FileAscription",$param) and $param["FileAscription"] !== null) {
            $this->FileAscription = new FileAscriptionInfo();
            $this->FileAscription->deserialize($param["FileAscription"]);
        }
    }
}
