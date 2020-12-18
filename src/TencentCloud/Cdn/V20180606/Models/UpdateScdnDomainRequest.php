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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateScdnDomain request structure.
 *
 * @method string getDomain() Obtain Domain name
 * @method void setDomain(string $Domain) Set Domain name
 * @method ScdnWafConfig getWaf() Obtain WAF configuration
 * @method void setWaf(ScdnWafConfig $Waf) Set WAF configuration
 * @method ScdnAclConfig getAcl() Obtain Custom defense policy configuration
 * @method void setAcl(ScdnAclConfig $Acl) Set Custom defense policy configuration
 * @method ScdnConfig getCC() Obtain CC attack defense configurations. CC attack defense is enabled by default.
 * @method void setCC(ScdnConfig $CC) Set CC attack defense configurations. CC attack defense is enabled by default.
 * @method ScdnDdosConfig getDdos() Obtain DDoS defense configuration. DDoS defense is enabled by default.
 * @method void setDdos(ScdnDdosConfig $Ddos) Set DDoS defense configuration. DDoS defense is enabled by default.
 * @method ScdnBotConfig getBot() Obtain Bot defense configuration
 * @method void setBot(ScdnBotConfig $Bot) Set Bot defense configuration
 */
class UpdateScdnDomainRequest extends AbstractModel
{
    /**
     * @var string Domain name
     */
    public $Domain;

    /**
     * @var ScdnWafConfig WAF configuration
     */
    public $Waf;

    /**
     * @var ScdnAclConfig Custom defense policy configuration
     */
    public $Acl;

    /**
     * @var ScdnConfig CC attack defense configurations. CC attack defense is enabled by default.
     */
    public $CC;

    /**
     * @var ScdnDdosConfig DDoS defense configuration. DDoS defense is enabled by default.
     */
    public $Ddos;

    /**
     * @var ScdnBotConfig Bot defense configuration
     */
    public $Bot;

    /**
     * @param string $Domain Domain name
     * @param ScdnWafConfig $Waf WAF configuration
     * @param ScdnAclConfig $Acl Custom defense policy configuration
     * @param ScdnConfig $CC CC attack defense configurations. CC attack defense is enabled by default.
     * @param ScdnDdosConfig $Ddos DDoS defense configuration. DDoS defense is enabled by default.
     * @param ScdnBotConfig $Bot Bot defense configuration
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Waf",$param) and $param["Waf"] !== null) {
            $this->Waf = new ScdnWafConfig();
            $this->Waf->deserialize($param["Waf"]);
        }

        if (array_key_exists("Acl",$param) and $param["Acl"] !== null) {
            $this->Acl = new ScdnAclConfig();
            $this->Acl->deserialize($param["Acl"]);
        }

        if (array_key_exists("CC",$param) and $param["CC"] !== null) {
            $this->CC = new ScdnConfig();
            $this->CC->deserialize($param["CC"]);
        }

        if (array_key_exists("Ddos",$param) and $param["Ddos"] !== null) {
            $this->Ddos = new ScdnDdosConfig();
            $this->Ddos->deserialize($param["Ddos"]);
        }

        if (array_key_exists("Bot",$param) and $param["Bot"] !== null) {
            $this->Bot = new ScdnBotConfig();
            $this->Bot->deserialize($param["Bot"]);
        }
    }
}
