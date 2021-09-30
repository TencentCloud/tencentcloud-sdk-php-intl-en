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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Firewall rule details.
 *
 * @method string getAppType() Obtain Application type. Valid values: custom, HTTP (80), HTTPS (443), Linux login (22), Windows login (3389), MySQL (3306), SQL Server (1433), all TCP ports, all UDP ports, Ping-ICMP, ALL.
 * @method void setAppType(string $AppType) Set Application type. Valid values: custom, HTTP (80), HTTPS (443), Linux login (22), Windows login (3389), MySQL (3306), SQL Server (1433), all TCP ports, all UDP ports, Ping-ICMP, ALL.
 * @method string getProtocol() Obtain Protocol. Valid values: TCP, UDP, ICMP, ALL.
 * @method void setProtocol(string $Protocol) Set Protocol. Valid values: TCP, UDP, ICMP, ALL.
 * @method string getPort() Obtain Port. Valid values: ALL, one single port, multiple ports separated by commas, or port range indicated by a minus sign
 * @method void setPort(string $Port) Set Port. Valid values: ALL, one single port, multiple ports separated by commas, or port range indicated by a minus sign
 * @method string getCidrBlock() Obtain IP range or IP (mutually exclusive). Default value: 0.0.0.0/0, which indicates all sources.
 * @method void setCidrBlock(string $CidrBlock) Set IP range or IP (mutually exclusive). Default value: 0.0.0.0/0, which indicates all sources.
 * @method string getAction() Obtain Valid values: ACCEPT, DROP. Default value: ACCEPT.
 * @method void setAction(string $Action) Set Valid values: ACCEPT, DROP. Default value: ACCEPT.
 * @method string getFirewallRuleDescription() Obtain Firewall rule description.
 * @method void setFirewallRuleDescription(string $FirewallRuleDescription) Set Firewall rule description.
 */
class FirewallRuleInfo extends AbstractModel
{
    /**
     * @var string Application type. Valid values: custom, HTTP (80), HTTPS (443), Linux login (22), Windows login (3389), MySQL (3306), SQL Server (1433), all TCP ports, all UDP ports, Ping-ICMP, ALL.
     */
    public $AppType;

    /**
     * @var string Protocol. Valid values: TCP, UDP, ICMP, ALL.
     */
    public $Protocol;

    /**
     * @var string Port. Valid values: ALL, one single port, multiple ports separated by commas, or port range indicated by a minus sign
     */
    public $Port;

    /**
     * @var string IP range or IP (mutually exclusive). Default value: 0.0.0.0/0, which indicates all sources.
     */
    public $CidrBlock;

    /**
     * @var string Valid values: ACCEPT, DROP. Default value: ACCEPT.
     */
    public $Action;

    /**
     * @var string Firewall rule description.
     */
    public $FirewallRuleDescription;

    /**
     * @param string $AppType Application type. Valid values: custom, HTTP (80), HTTPS (443), Linux login (22), Windows login (3389), MySQL (3306), SQL Server (1433), all TCP ports, all UDP ports, Ping-ICMP, ALL.
     * @param string $Protocol Protocol. Valid values: TCP, UDP, ICMP, ALL.
     * @param string $Port Port. Valid values: ALL, one single port, multiple ports separated by commas, or port range indicated by a minus sign
     * @param string $CidrBlock IP range or IP (mutually exclusive). Default value: 0.0.0.0/0, which indicates all sources.
     * @param string $Action Valid values: ACCEPT, DROP. Default value: ACCEPT.
     * @param string $FirewallRuleDescription Firewall rule description.
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
        if (array_key_exists("AppType",$param) and $param["AppType"] !== null) {
            $this->AppType = $param["AppType"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("CidrBlock",$param) and $param["CidrBlock"] !== null) {
            $this->CidrBlock = $param["CidrBlock"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("FirewallRuleDescription",$param) and $param["FirewallRuleDescription"] !== null) {
            $this->FirewallRuleDescription = $param["FirewallRuleDescription"];
        }
    }
}
