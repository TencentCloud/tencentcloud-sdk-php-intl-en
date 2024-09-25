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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Domain name list
 *
 * @method integer getAppid() Obtain User ID
 * @method void setAppid(integer $Appid) Set User ID
 * @method string getDomain() Obtain Domain name
 * @method void setDomain(string $Domain) Set Domain name
 * @method array getIps() Obtain Domain IP
 * @method void setIps(array $Ips) Set Domain IP
 * @method string getFindTime() Obtain Detection time
 * @method void setFindTime(string $FindTime) Set Detection time
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getDomainId() Obtain Domain ID
 * @method void setDomainId(string $DomainId) Set Domain ID
 * @method string getEdition() Obtain WAF type
 * @method void setEdition(string $Edition) Set WAF type
 * @method integer getIsWafDomain() Obtain Whether to access WAF
 * @method void setIsWafDomain(integer $IsWafDomain) Set Whether to access WAF
 */
class FindAllDomainDetail extends AbstractModel
{
    /**
     * @var integer User ID
     */
    public $Appid;

    /**
     * @var string Domain name
     */
    public $Domain;

    /**
     * @var array Domain IP
     */
    public $Ips;

    /**
     * @var string Detection time
     */
    public $FindTime;

    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Domain ID
     */
    public $DomainId;

    /**
     * @var string WAF type
     */
    public $Edition;

    /**
     * @var integer Whether to access WAF
     */
    public $IsWafDomain;

    /**
     * @param integer $Appid User ID
     * @param string $Domain Domain name
     * @param array $Ips Domain IP
     * @param string $FindTime Detection time
     * @param string $InstanceId Instance ID
     * @param string $DomainId Domain ID
     * @param string $Edition WAF type
     * @param integer $IsWafDomain Whether to access WAF
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
        if (array_key_exists("Appid",$param) and $param["Appid"] !== null) {
            $this->Appid = $param["Appid"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Ips",$param) and $param["Ips"] !== null) {
            $this->Ips = $param["Ips"];
        }

        if (array_key_exists("FindTime",$param) and $param["FindTime"] !== null) {
            $this->FindTime = $param["FindTime"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }

        if (array_key_exists("Edition",$param) and $param["Edition"] !== null) {
            $this->Edition = $param["Edition"];
        }

        if (array_key_exists("IsWafDomain",$param) and $param["IsWafDomain"] !== null) {
            $this->IsWafDomain = $param["IsWafDomain"];
        }
    }
}
