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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getDomain() Obtain 
 * @method void setDomain(string $Domain) Set 
 * @method array getAccelerateAreaInfos() Obtain 
 * @method void setAccelerateAreaInfos(array $AccelerateAreaInfos) Set 
 * @method string getDeployStatus() Obtain 
 * @method void setDeployStatus(string $DeployStatus) Set 
 * @method DomainHTTPSConfig getHTTPSConfig() Obtain 
 * @method void setHTTPSConfig(DomainHTTPSConfig $HTTPSConfig) Set 
 * @method UrlSignatureAuthPolicy getUrlSignatureAuthPolicy() Obtain 
 * @method void setUrlSignatureAuthPolicy(UrlSignatureAuthPolicy $UrlSignatureAuthPolicy) Set 
 * @method RefererAuthPolicy getRefererAuthPolicy() Obtain 
 * @method void setRefererAuthPolicy(RefererAuthPolicy $RefererAuthPolicy) Set 
 * @method string getCreateTime() Obtain 
 * @method void setCreateTime(string $CreateTime) Set 
 * @method DomainQUICConfig getQUICConfig() Obtain 
 * @method void setQUICConfig(DomainQUICConfig $QUICConfig) Set 
 * @method IPFilterPolicy getIPFilterPolicy() Obtain 
 * @method void setIPFilterPolicy(IPFilterPolicy $IPFilterPolicy) Set 
 * @method string getType() Obtain 
 * @method void setType(string $Type) Set 
 */
class DomainDetailInfo extends AbstractModel
{
    /**
     * @var string 
     */
    public $Domain;

    /**
     * @var array 
     */
    public $AccelerateAreaInfos;

    /**
     * @var string 
     */
    public $DeployStatus;

    /**
     * @var DomainHTTPSConfig 
     */
    public $HTTPSConfig;

    /**
     * @var UrlSignatureAuthPolicy 
     */
    public $UrlSignatureAuthPolicy;

    /**
     * @var RefererAuthPolicy 
     */
    public $RefererAuthPolicy;

    /**
     * @var string 
     */
    public $CreateTime;

    /**
     * @var DomainQUICConfig 
     */
    public $QUICConfig;

    /**
     * @var IPFilterPolicy 
     */
    public $IPFilterPolicy;

    /**
     * @var string 
     */
    public $Type;

    /**
     * @param string $Domain 
     * @param array $AccelerateAreaInfos 
     * @param string $DeployStatus 
     * @param DomainHTTPSConfig $HTTPSConfig 
     * @param UrlSignatureAuthPolicy $UrlSignatureAuthPolicy 
     * @param RefererAuthPolicy $RefererAuthPolicy 
     * @param string $CreateTime 
     * @param DomainQUICConfig $QUICConfig 
     * @param IPFilterPolicy $IPFilterPolicy 
     * @param string $Type 
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

        if (array_key_exists("AccelerateAreaInfos",$param) and $param["AccelerateAreaInfos"] !== null) {
            $this->AccelerateAreaInfos = [];
            foreach ($param["AccelerateAreaInfos"] as $key => $value){
                $obj = new AccelerateAreaInfo();
                $obj->deserialize($value);
                array_push($this->AccelerateAreaInfos, $obj);
            }
        }

        if (array_key_exists("DeployStatus",$param) and $param["DeployStatus"] !== null) {
            $this->DeployStatus = $param["DeployStatus"];
        }

        if (array_key_exists("HTTPSConfig",$param) and $param["HTTPSConfig"] !== null) {
            $this->HTTPSConfig = new DomainHTTPSConfig();
            $this->HTTPSConfig->deserialize($param["HTTPSConfig"]);
        }

        if (array_key_exists("UrlSignatureAuthPolicy",$param) and $param["UrlSignatureAuthPolicy"] !== null) {
            $this->UrlSignatureAuthPolicy = new UrlSignatureAuthPolicy();
            $this->UrlSignatureAuthPolicy->deserialize($param["UrlSignatureAuthPolicy"]);
        }

        if (array_key_exists("RefererAuthPolicy",$param) and $param["RefererAuthPolicy"] !== null) {
            $this->RefererAuthPolicy = new RefererAuthPolicy();
            $this->RefererAuthPolicy->deserialize($param["RefererAuthPolicy"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("QUICConfig",$param) and $param["QUICConfig"] !== null) {
            $this->QUICConfig = new DomainQUICConfig();
            $this->QUICConfig->deserialize($param["QUICConfig"]);
        }

        if (array_key_exists("IPFilterPolicy",$param) and $param["IPFilterPolicy"] !== null) {
            $this->IPFilterPolicy = new IPFilterPolicy();
            $this->IPFilterPolicy->deserialize($param["IPFilterPolicy"]);
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
