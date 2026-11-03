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
 * Security headers to include in requests to the origin. After the configuration takes effect, request headers with the corresponding `keyname` will be sent to the origin.
 *
 * @method array getBotIdentificationHeaders() Obtain <p>Configuration of origin request headers for Bot identification information. Valid values:<ul><li>`EO-Bot-Botnet-ID`: Identifier generated based on Bot request characteristics.</li></ul></p>
 * @method void setBotIdentificationHeaders(array $BotIdentificationHeaders) Set <p>Configuration of origin request headers for Bot identification information. Valid values:<ul><li>`EO-Bot-Botnet-ID`: Identifier generated based on Bot request characteristics.</li></ul></p>
 * @method array getBotManagementHeaders() Obtain <p>Configuration of origin request headers for identification results from the Advanced Bot Management module. Valid values:<ul><li>`EO-Bot-Client-Attestation`: Advanced Bot Management - Authentication ticket verification result from the Client Attestation module;</li><li>`EO-Bot-Client-Risk`: Advanced Bot Management - Device risk assessment result from the Client Attestation module;</li><li>`EO-Bot-Intelligence`: Advanced Bot Management - Identification result from the Bot Intelligence Analysis module;</li><li>`EO-Bot-IP-Reputation`: Advanced Bot Management - Identification result from Client Reputation module;</li><li>`EO-Bot-Known-Tool`: Advanced Bot Management - Basic Feature Management - Identification result from the UA Feature Rule module;</li><li>`EO-Bot-Search-Engine`: Advanced Bot Management - Basic Feature Management - Identification result from the Search Engine Rule module;</li><li>`EO-Bot-Source-IDC`: Advanced Bot Management - Basic Feature Management - Identification result from the IDC Rule module;</li><li>`EO-Bot-User-Risk`: Advanced Bot Management - Account risk assessment result from the Client Attestation module.</li></ul></p>
 * @method void setBotManagementHeaders(array $BotManagementHeaders) Set <p>Configuration of origin request headers for identification results from the Advanced Bot Management module. Valid values:<ul><li>`EO-Bot-Client-Attestation`: Advanced Bot Management - Authentication ticket verification result from the Client Attestation module;</li><li>`EO-Bot-Client-Risk`: Advanced Bot Management - Device risk assessment result from the Client Attestation module;</li><li>`EO-Bot-Intelligence`: Advanced Bot Management - Identification result from the Bot Intelligence Analysis module;</li><li>`EO-Bot-IP-Reputation`: Advanced Bot Management - Identification result from Client Reputation module;</li><li>`EO-Bot-Known-Tool`: Advanced Bot Management - Basic Feature Management - Identification result from the UA Feature Rule module;</li><li>`EO-Bot-Search-Engine`: Advanced Bot Management - Basic Feature Management - Identification result from the Search Engine Rule module;</li><li>`EO-Bot-Source-IDC`: Advanced Bot Management - Basic Feature Management - Identification result from the IDC Rule module;</li><li>`EO-Bot-User-Risk`: Advanced Bot Management - Account risk assessment result from the Client Attestation module.</li></ul></p>
 * @method array getClientFingerprintHeaders() Obtain <p>Configuration of origin request headers for client fingerprint information. Valid values:<ul><li>`EO-Bot-Fingerprint`: Client fingerprint information.</li></ul></p>
 * @method void setClientFingerprintHeaders(array $ClientFingerprintHeaders) Set <p>Configuration of origin request headers for client fingerprint information. Valid values:<ul><li>`EO-Bot-Fingerprint`: Client fingerprint information.</li></ul></p>
 */
class SecurityHeadersToOrigin extends AbstractModel
{
    /**
     * @var array <p>Configuration of origin request headers for Bot identification information. Valid values:<ul><li>`EO-Bot-Botnet-ID`: Identifier generated based on Bot request characteristics.</li></ul></p>
     */
    public $BotIdentificationHeaders;

    /**
     * @var array <p>Configuration of origin request headers for identification results from the Advanced Bot Management module. Valid values:<ul><li>`EO-Bot-Client-Attestation`: Advanced Bot Management - Authentication ticket verification result from the Client Attestation module;</li><li>`EO-Bot-Client-Risk`: Advanced Bot Management - Device risk assessment result from the Client Attestation module;</li><li>`EO-Bot-Intelligence`: Advanced Bot Management - Identification result from the Bot Intelligence Analysis module;</li><li>`EO-Bot-IP-Reputation`: Advanced Bot Management - Identification result from Client Reputation module;</li><li>`EO-Bot-Known-Tool`: Advanced Bot Management - Basic Feature Management - Identification result from the UA Feature Rule module;</li><li>`EO-Bot-Search-Engine`: Advanced Bot Management - Basic Feature Management - Identification result from the Search Engine Rule module;</li><li>`EO-Bot-Source-IDC`: Advanced Bot Management - Basic Feature Management - Identification result from the IDC Rule module;</li><li>`EO-Bot-User-Risk`: Advanced Bot Management - Account risk assessment result from the Client Attestation module.</li></ul></p>
     */
    public $BotManagementHeaders;

    /**
     * @var array <p>Configuration of origin request headers for client fingerprint information. Valid values:<ul><li>`EO-Bot-Fingerprint`: Client fingerprint information.</li></ul></p>
     */
    public $ClientFingerprintHeaders;

    /**
     * @param array $BotIdentificationHeaders <p>Configuration of origin request headers for Bot identification information. Valid values:<ul><li>`EO-Bot-Botnet-ID`: Identifier generated based on Bot request characteristics.</li></ul></p>
     * @param array $BotManagementHeaders <p>Configuration of origin request headers for identification results from the Advanced Bot Management module. Valid values:<ul><li>`EO-Bot-Client-Attestation`: Advanced Bot Management - Authentication ticket verification result from the Client Attestation module;</li><li>`EO-Bot-Client-Risk`: Advanced Bot Management - Device risk assessment result from the Client Attestation module;</li><li>`EO-Bot-Intelligence`: Advanced Bot Management - Identification result from the Bot Intelligence Analysis module;</li><li>`EO-Bot-IP-Reputation`: Advanced Bot Management - Identification result from Client Reputation module;</li><li>`EO-Bot-Known-Tool`: Advanced Bot Management - Basic Feature Management - Identification result from the UA Feature Rule module;</li><li>`EO-Bot-Search-Engine`: Advanced Bot Management - Basic Feature Management - Identification result from the Search Engine Rule module;</li><li>`EO-Bot-Source-IDC`: Advanced Bot Management - Basic Feature Management - Identification result from the IDC Rule module;</li><li>`EO-Bot-User-Risk`: Advanced Bot Management - Account risk assessment result from the Client Attestation module.</li></ul></p>
     * @param array $ClientFingerprintHeaders <p>Configuration of origin request headers for client fingerprint information. Valid values:<ul><li>`EO-Bot-Fingerprint`: Client fingerprint information.</li></ul></p>
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
        if (array_key_exists("BotIdentificationHeaders",$param) and $param["BotIdentificationHeaders"] !== null) {
            $this->BotIdentificationHeaders = $param["BotIdentificationHeaders"];
        }

        if (array_key_exists("BotManagementHeaders",$param) and $param["BotManagementHeaders"] !== null) {
            $this->BotManagementHeaders = $param["BotManagementHeaders"];
        }

        if (array_key_exists("ClientFingerprintHeaders",$param) and $param["ClientFingerprintHeaders"] !== null) {
            $this->ClientFingerprintHeaders = $param["ClientFingerprintHeaders"];
        }
    }
}
