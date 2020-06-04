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
namespace TencentCloud\Dayu\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDDoSPolicyCase request structure.
 *
 * @method string getBusiness() Obtain Anti-DDoS service type. `bgpip`: Anti-DDoS Advanced; `bgp`: Anti-DDoS Pro (single IP); `bgp-multip`: Anti-DDoS Pro (multi-IP), `net`: Anti-DDoS Ultimate
 * @method void setBusiness(string $Business) Set Anti-DDoS service type. `bgpip`: Anti-DDoS Advanced; `bgp`: Anti-DDoS Pro (single IP); `bgp-multip`: Anti-DDoS Pro (multi-IP), `net`: Anti-DDoS Ultimate
 * @method string getSceneId() Obtain Policy scenario ID
 * @method void setSceneId(string $SceneId) Set Policy scenario ID
 * @method array getPlatformTypes() Obtain Development platform. Valid values: [PC (PC client), MOBILE (mobile device), TV (TV), SERVER (server)]
 * @method void setPlatformTypes(array $PlatformTypes) Set Development platform. Valid values: [PC (PC client), MOBILE (mobile device), TV (TV), SERVER (server)]
 * @method string getAppType() Obtain Category. Valid values: [WEB (website), GAME (game), APP (application), OTHER (other)]
 * @method void setAppType(string $AppType) Set Category. Valid values: [WEB (website), GAME (game), APP (application), OTHER (other)]
 * @method array getAppProtocols() Obtain Application protocol. Valid values: [tcp (TCP protocol), udp (UDP protocol), icmp (ICMP protocol), all (other protocols)]
 * @method void setAppProtocols(array $AppProtocols) Set Application protocol. Valid values: [tcp (TCP protocol), udp (UDP protocol), icmp (ICMP protocol), all (other protocols)]
 * @method string getTcpSportStart() Obtain TCP start port. Value range: (0, 65535]
 * @method void setTcpSportStart(string $TcpSportStart) Set TCP start port. Value range: (0, 65535]
 * @method string getTcpSportEnd() Obtain TCP end port. Value range: (0, 65535). It must be greater than or equal to the TCP start port
 * @method void setTcpSportEnd(string $TcpSportEnd) Set TCP end port. Value range: (0, 65535). It must be greater than or equal to the TCP start port
 * @method string getUdpSportStart() Obtain UDP start port. Value range: (0, 65535]
 * @method void setUdpSportStart(string $UdpSportStart) Set UDP start port. Value range: (0, 65535]
 * @method string getUdpSportEnd() Obtain End UDP business port. Value range: (0, 65535). It must be greater than or equal to the start UDP business port
 * @method void setUdpSportEnd(string $UdpSportEnd) Set End UDP business port. Value range: (0, 65535). It must be greater than or equal to the start UDP business port
 * @method string getHasAbroad() Obtain Whether there are customers outside Mainland China. Valid values: [no, yes]
 * @method void setHasAbroad(string $HasAbroad) Set Whether there are customers outside Mainland China. Valid values: [no, yes]
 * @method string getHasInitiateTcp() Obtain Whether to actively initiate outbound TCP requests. Valid values: [no, yes]
 * @method void setHasInitiateTcp(string $HasInitiateTcp) Set Whether to actively initiate outbound TCP requests. Valid values: [no, yes]
 * @method string getHasInitiateUdp() Obtain Whether to actively initiate outbound UDP requests. Valid values: [no, yes]
 * @method void setHasInitiateUdp(string $HasInitiateUdp) Set Whether to actively initiate outbound UDP requests. Valid values: [no, yes]
 * @method string getPeerTcpPort() Obtain Port that actively initiates TCP requests. Value range: (0, 65535]
 * @method void setPeerTcpPort(string $PeerTcpPort) Set Port that actively initiates TCP requests. Value range: (0, 65535]
 * @method string getPeerUdpPort() Obtain Port that actively initiates UDP requests. Value range: (0, 65535]
 * @method void setPeerUdpPort(string $PeerUdpPort) Set Port that actively initiates UDP requests. Value range: (0, 65535]
 * @method string getTcpFootprint() Obtain Fixed feature code of TCP payload. String length limit: 512
 * @method void setTcpFootprint(string $TcpFootprint) Set Fixed feature code of TCP payload. String length limit: 512
 * @method string getUdpFootprint() Obtain Fixed feature code of UDP payload. String length limit: 512
 * @method void setUdpFootprint(string $UdpFootprint) Set Fixed feature code of UDP payload. String length limit: 512
 * @method array getWebApiUrl() Obtain Web business API URL
 * @method void setWebApiUrl(array $WebApiUrl) Set Web business API URL
 * @method string getMinTcpPackageLen() Obtain Minimum length of TCP business packet. Value range: (0, 1500)
 * @method void setMinTcpPackageLen(string $MinTcpPackageLen) Set Minimum length of TCP business packet. Value range: (0, 1500)
 * @method string getMaxTcpPackageLen() Obtain Maximum length of TCP business packet. Value range: (0, 1500). It must be greater than or equal to the minimum length of TCP business packet
 * @method void setMaxTcpPackageLen(string $MaxTcpPackageLen) Set Maximum length of TCP business packet. Value range: (0, 1500). It must be greater than or equal to the minimum length of TCP business packet
 * @method string getMinUdpPackageLen() Obtain Minimum length of UDP business packet. Value range: (0, 1500)
 * @method void setMinUdpPackageLen(string $MinUdpPackageLen) Set Minimum length of UDP business packet. Value range: (0, 1500)
 * @method string getMaxUdpPackageLen() Obtain Maximum length of UDP business packet. Value range: (0, 1500). It must be greater than or equal to the minimum length of UDP business packet
 * @method void setMaxUdpPackageLen(string $MaxUdpPackageLen) Set Maximum length of UDP business packet. Value range: (0, 1500). It must be greater than or equal to the minimum length of UDP business packet
 * @method string getHasVPN() Obtain Whether there are VPN businesses. Valid values: [no, yes]
 * @method void setHasVPN(string $HasVPN) Set Whether there are VPN businesses. Valid values: [no, yes]
 * @method string getTcpPortList() Obtain TCP business port list. Individual ports and port ranges are supported, which should be in string type, such as 80,443,700-800,53,1000-3000
 * @method void setTcpPortList(string $TcpPortList) Set TCP business port list. Individual ports and port ranges are supported, which should be in string type, such as 80,443,700-800,53,1000-3000
 * @method string getUdpPortList() Obtain UDP business port list. Individual ports and port ranges are supported, which should be in string type, such as 80,443,700-800,53,1000-3000
 * @method void setUdpPortList(string $UdpPortList) Set UDP business port list. Individual ports and port ranges are supported, which should be in string type, such as 80,443,700-800,53,1000-3000
 */
class ModifyDDoSPolicyCaseRequest extends AbstractModel
{
    /**
     * @var string Anti-DDoS service type. `bgpip`: Anti-DDoS Advanced; `bgp`: Anti-DDoS Pro (single IP); `bgp-multip`: Anti-DDoS Pro (multi-IP), `net`: Anti-DDoS Ultimate
     */
    public $Business;

    /**
     * @var string Policy scenario ID
     */
    public $SceneId;

    /**
     * @var array Development platform. Valid values: [PC (PC client), MOBILE (mobile device), TV (TV), SERVER (server)]
     */
    public $PlatformTypes;

    /**
     * @var string Category. Valid values: [WEB (website), GAME (game), APP (application), OTHER (other)]
     */
    public $AppType;

    /**
     * @var array Application protocol. Valid values: [tcp (TCP protocol), udp (UDP protocol), icmp (ICMP protocol), all (other protocols)]
     */
    public $AppProtocols;

    /**
     * @var string TCP start port. Value range: (0, 65535]
     */
    public $TcpSportStart;

    /**
     * @var string TCP end port. Value range: (0, 65535). It must be greater than or equal to the TCP start port
     */
    public $TcpSportEnd;

    /**
     * @var string UDP start port. Value range: (0, 65535]
     */
    public $UdpSportStart;

    /**
     * @var string End UDP business port. Value range: (0, 65535). It must be greater than or equal to the start UDP business port
     */
    public $UdpSportEnd;

    /**
     * @var string Whether there are customers outside Mainland China. Valid values: [no, yes]
     */
    public $HasAbroad;

    /**
     * @var string Whether to actively initiate outbound TCP requests. Valid values: [no, yes]
     */
    public $HasInitiateTcp;

    /**
     * @var string Whether to actively initiate outbound UDP requests. Valid values: [no, yes]
     */
    public $HasInitiateUdp;

    /**
     * @var string Port that actively initiates TCP requests. Value range: (0, 65535]
     */
    public $PeerTcpPort;

    /**
     * @var string Port that actively initiates UDP requests. Value range: (0, 65535]
     */
    public $PeerUdpPort;

    /**
     * @var string Fixed feature code of TCP payload. String length limit: 512
     */
    public $TcpFootprint;

    /**
     * @var string Fixed feature code of UDP payload. String length limit: 512
     */
    public $UdpFootprint;

    /**
     * @var array Web business API URL
     */
    public $WebApiUrl;

    /**
     * @var string Minimum length of TCP business packet. Value range: (0, 1500)
     */
    public $MinTcpPackageLen;

    /**
     * @var string Maximum length of TCP business packet. Value range: (0, 1500). It must be greater than or equal to the minimum length of TCP business packet
     */
    public $MaxTcpPackageLen;

    /**
     * @var string Minimum length of UDP business packet. Value range: (0, 1500)
     */
    public $MinUdpPackageLen;

    /**
     * @var string Maximum length of UDP business packet. Value range: (0, 1500). It must be greater than or equal to the minimum length of UDP business packet
     */
    public $MaxUdpPackageLen;

    /**
     * @var string Whether there are VPN businesses. Valid values: [no, yes]
     */
    public $HasVPN;

    /**
     * @var string TCP business port list. Individual ports and port ranges are supported, which should be in string type, such as 80,443,700-800,53,1000-3000
     */
    public $TcpPortList;

    /**
     * @var string UDP business port list. Individual ports and port ranges are supported, which should be in string type, such as 80,443,700-800,53,1000-3000
     */
    public $UdpPortList;

    /**
     * @param string $Business Anti-DDoS service type. `bgpip`: Anti-DDoS Advanced; `bgp`: Anti-DDoS Pro (single IP); `bgp-multip`: Anti-DDoS Pro (multi-IP), `net`: Anti-DDoS Ultimate
     * @param string $SceneId Policy scenario ID
     * @param array $PlatformTypes Development platform. Valid values: [PC (PC client), MOBILE (mobile device), TV (TV), SERVER (server)]
     * @param string $AppType Category. Valid values: [WEB (website), GAME (game), APP (application), OTHER (other)]
     * @param array $AppProtocols Application protocol. Valid values: [tcp (TCP protocol), udp (UDP protocol), icmp (ICMP protocol), all (other protocols)]
     * @param string $TcpSportStart TCP start port. Value range: (0, 65535]
     * @param string $TcpSportEnd TCP end port. Value range: (0, 65535). It must be greater than or equal to the TCP start port
     * @param string $UdpSportStart UDP start port. Value range: (0, 65535]
     * @param string $UdpSportEnd End UDP business port. Value range: (0, 65535). It must be greater than or equal to the start UDP business port
     * @param string $HasAbroad Whether there are customers outside Mainland China. Valid values: [no, yes]
     * @param string $HasInitiateTcp Whether to actively initiate outbound TCP requests. Valid values: [no, yes]
     * @param string $HasInitiateUdp Whether to actively initiate outbound UDP requests. Valid values: [no, yes]
     * @param string $PeerTcpPort Port that actively initiates TCP requests. Value range: (0, 65535]
     * @param string $PeerUdpPort Port that actively initiates UDP requests. Value range: (0, 65535]
     * @param string $TcpFootprint Fixed feature code of TCP payload. String length limit: 512
     * @param string $UdpFootprint Fixed feature code of UDP payload. String length limit: 512
     * @param array $WebApiUrl Web business API URL
     * @param string $MinTcpPackageLen Minimum length of TCP business packet. Value range: (0, 1500)
     * @param string $MaxTcpPackageLen Maximum length of TCP business packet. Value range: (0, 1500). It must be greater than or equal to the minimum length of TCP business packet
     * @param string $MinUdpPackageLen Minimum length of UDP business packet. Value range: (0, 1500)
     * @param string $MaxUdpPackageLen Maximum length of UDP business packet. Value range: (0, 1500). It must be greater than or equal to the minimum length of UDP business packet
     * @param string $HasVPN Whether there are VPN businesses. Valid values: [no, yes]
     * @param string $TcpPortList TCP business port list. Individual ports and port ranges are supported, which should be in string type, such as 80,443,700-800,53,1000-3000
     * @param string $UdpPortList UDP business port list. Individual ports and port ranges are supported, which should be in string type, such as 80,443,700-800,53,1000-3000
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
        if (array_key_exists("Business",$param) and $param["Business"] !== null) {
            $this->Business = $param["Business"];
        }

        if (array_key_exists("SceneId",$param) and $param["SceneId"] !== null) {
            $this->SceneId = $param["SceneId"];
        }

        if (array_key_exists("PlatformTypes",$param) and $param["PlatformTypes"] !== null) {
            $this->PlatformTypes = $param["PlatformTypes"];
        }

        if (array_key_exists("AppType",$param) and $param["AppType"] !== null) {
            $this->AppType = $param["AppType"];
        }

        if (array_key_exists("AppProtocols",$param) and $param["AppProtocols"] !== null) {
            $this->AppProtocols = $param["AppProtocols"];
        }

        if (array_key_exists("TcpSportStart",$param) and $param["TcpSportStart"] !== null) {
            $this->TcpSportStart = $param["TcpSportStart"];
        }

        if (array_key_exists("TcpSportEnd",$param) and $param["TcpSportEnd"] !== null) {
            $this->TcpSportEnd = $param["TcpSportEnd"];
        }

        if (array_key_exists("UdpSportStart",$param) and $param["UdpSportStart"] !== null) {
            $this->UdpSportStart = $param["UdpSportStart"];
        }

        if (array_key_exists("UdpSportEnd",$param) and $param["UdpSportEnd"] !== null) {
            $this->UdpSportEnd = $param["UdpSportEnd"];
        }

        if (array_key_exists("HasAbroad",$param) and $param["HasAbroad"] !== null) {
            $this->HasAbroad = $param["HasAbroad"];
        }

        if (array_key_exists("HasInitiateTcp",$param) and $param["HasInitiateTcp"] !== null) {
            $this->HasInitiateTcp = $param["HasInitiateTcp"];
        }

        if (array_key_exists("HasInitiateUdp",$param) and $param["HasInitiateUdp"] !== null) {
            $this->HasInitiateUdp = $param["HasInitiateUdp"];
        }

        if (array_key_exists("PeerTcpPort",$param) and $param["PeerTcpPort"] !== null) {
            $this->PeerTcpPort = $param["PeerTcpPort"];
        }

        if (array_key_exists("PeerUdpPort",$param) and $param["PeerUdpPort"] !== null) {
            $this->PeerUdpPort = $param["PeerUdpPort"];
        }

        if (array_key_exists("TcpFootprint",$param) and $param["TcpFootprint"] !== null) {
            $this->TcpFootprint = $param["TcpFootprint"];
        }

        if (array_key_exists("UdpFootprint",$param) and $param["UdpFootprint"] !== null) {
            $this->UdpFootprint = $param["UdpFootprint"];
        }

        if (array_key_exists("WebApiUrl",$param) and $param["WebApiUrl"] !== null) {
            $this->WebApiUrl = $param["WebApiUrl"];
        }

        if (array_key_exists("MinTcpPackageLen",$param) and $param["MinTcpPackageLen"] !== null) {
            $this->MinTcpPackageLen = $param["MinTcpPackageLen"];
        }

        if (array_key_exists("MaxTcpPackageLen",$param) and $param["MaxTcpPackageLen"] !== null) {
            $this->MaxTcpPackageLen = $param["MaxTcpPackageLen"];
        }

        if (array_key_exists("MinUdpPackageLen",$param) and $param["MinUdpPackageLen"] !== null) {
            $this->MinUdpPackageLen = $param["MinUdpPackageLen"];
        }

        if (array_key_exists("MaxUdpPackageLen",$param) and $param["MaxUdpPackageLen"] !== null) {
            $this->MaxUdpPackageLen = $param["MaxUdpPackageLen"];
        }

        if (array_key_exists("HasVPN",$param) and $param["HasVPN"] !== null) {
            $this->HasVPN = $param["HasVPN"];
        }

        if (array_key_exists("TcpPortList",$param) and $param["TcpPortList"] !== null) {
            $this->TcpPortList = $param["TcpPortList"];
        }

        if (array_key_exists("UdpPortList",$param) and $param["UdpPortList"] !== null) {
            $this->UdpPortList = $param["UdpPortList"];
        }
    }
}
