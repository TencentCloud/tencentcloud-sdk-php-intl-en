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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The site verification information
 *
 * @method string getZoneName() Obtain The site name.
 * @method void setZoneName(string $ZoneName) Set The site name.
 * @method string getDomain() Obtain The subdomain name to be verified. To verify the ownership of a site, leave it blank.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setDomain(string $Domain) Set The subdomain name to be verified. To verify the ownership of a site, leave it blank.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getStatus() Obtain The verification status. Values:
<li>`pending`: The verification is ongoing.</li>
<li>`finished`: The verification completed.</li>
 * @method void setStatus(string $Status) Set The verification status. Values:
<li>`pending`: The verification is ongoing.</li>
<li>`finished`: The verification completed.</li>
 * @method AscriptionInfo getAscription() Obtain Details of the DNS record.
 * @method void setAscription(AscriptionInfo $Ascription) Set Details of the DNS record.
 * @method array getOriginalNameServers() Obtain The NS record of the domain name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOriginalNameServers(array $OriginalNameServers) Set The NS record of the domain name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method FileAscriptionInfo getFileAscription() Obtain Details of the verification file.
 * @method void setFileAscription(FileAscriptionInfo $FileAscription) Set Details of the verification file.
 */
class Identification extends AbstractModel
{
    /**
     * @var string The site name.
     */
    public $ZoneName;

    /**
     * @var string The subdomain name to be verified. To verify the ownership of a site, leave it blank.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Domain;

    /**
     * @var string The verification status. Values:
<li>`pending`: The verification is ongoing.</li>
<li>`finished`: The verification completed.</li>
     */
    public $Status;

    /**
     * @var AscriptionInfo Details of the DNS record.
     */
    public $Ascription;

    /**
     * @var array The NS record of the domain name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OriginalNameServers;

    /**
     * @var FileAscriptionInfo Details of the verification file.
     */
    public $FileAscription;

    /**
     * @param string $ZoneName The site name.
     * @param string $Domain The subdomain name to be verified. To verify the ownership of a site, leave it blank.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $Status The verification status. Values:
<li>`pending`: The verification is ongoing.</li>
<li>`finished`: The verification completed.</li>
     * @param AscriptionInfo $Ascription Details of the DNS record.
     * @param array $OriginalNameServers The NS record of the domain name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param FileAscriptionInfo $FileAscription Details of the verification file.
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
