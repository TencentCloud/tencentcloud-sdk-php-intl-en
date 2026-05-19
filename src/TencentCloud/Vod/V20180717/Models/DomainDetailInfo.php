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
 * Domain name information
 *
 * @method string getDomain() Obtain <p>Domain name.</p>
 * @method void setDomain(string $Domain) Set <p>Domain name.</p>
 * @method array getAccelerateAreaInfos() Obtain <p>Acceleration region information.</p>
 * @method void setAccelerateAreaInfos(array $AccelerateAreaInfos) Set <p>Acceleration region information.</p>
 * @method string getDeployStatus() Obtain <p>Deployment state. Valid values:</p><li>Online: Goes live.</li><li>Deploying: Deployment in progress.</li><li>Locked: Locked. When this state occurs, unable to perform deployment change on that domain name.</li>
 * @method void setDeployStatus(string $DeployStatus) Set <p>Deployment state. Valid values:</p><li>Online: Goes live.</li><li>Deploying: Deployment in progress.</li><li>Locked: Locked. When this state occurs, unable to perform deployment change on that domain name.</li>
 * @method DomainHTTPSConfig getHTTPSConfig() Obtain <p>HTTPS configuration message.</p>
 * @method void setHTTPSConfig(DomainHTTPSConfig $HTTPSConfig) Set <p>HTTPS configuration message.</p>
 * @method UrlSignatureAuthPolicy getUrlSignatureAuthPolicy() Obtain <p><a href="https://www.tencentcloud.com/document/product/266/14047?from_cn_redirect=1">Key hotlink protection</a> configuration message.</p>
 * @method void setUrlSignatureAuthPolicy(UrlSignatureAuthPolicy $UrlSignatureAuthPolicy) Set <p><a href="https://www.tencentcloud.com/document/product/266/14047?from_cn_redirect=1">Key hotlink protection</a> configuration message.</p>
 * @method RefererAuthPolicy getRefererAuthPolicy() Obtain <p><a href="https://www.tencentcloud.com/document/product/266/14046?from_cn_redirect=1">Referer hotlink protection</a> configuration message.</p>
 * @method void setRefererAuthPolicy(RefererAuthPolicy $RefererAuthPolicy) Set <p><a href="https://www.tencentcloud.com/document/product/266/14046?from_cn_redirect=1">Referer hotlink protection</a> configuration message.</p>
 * @method string getCreateTime() Obtain <p>The time when the domain name is added to the Tencent Cloud VOD system.</p><li>Format according to ISO 8601 standard. For details, see <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format description</a>.</li>
 * @method void setCreateTime(string $CreateTime) Set <p>The time when the domain name is added to the Tencent Cloud VOD system.</p><li>Format according to ISO 8601 standard. For details, see <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format description</a>.</li>
 * @method DomainQUICConfig getQUICConfig() Obtain <p>Domain name QUIC configuration message.</p>
 * @method void setQUICConfig(DomainQUICConfig $QUICConfig) Set <p>Domain name QUIC configuration message.</p>
 * @method IPFilterPolicy getIPFilterPolicy() Obtain <p>IP access restriction configuration message.</p>
 * @method void setIPFilterPolicy(IPFilterPolicy $IPFilterPolicy) Set <p>IP access restriction configuration message.</p>
 * @method string getType() Obtain <p>Domain type. Valid values: <li>VOD: Domain name distributed by using the VOD product;</li> <li>EdgeOne: Domain name distributed by using the EdgeOne product.</li></p>
 * @method void setType(string $Type) Set <p>Domain type. Valid values: <li>VOD: Domain name distributed by using the VOD product;</li> <li>EdgeOne: Domain name distributed by using the EdgeOne product.</li></p>
 */
class DomainDetailInfo extends AbstractModel
{
    /**
     * @var string <p>Domain name.</p>
     */
    public $Domain;

    /**
     * @var array <p>Acceleration region information.</p>
     */
    public $AccelerateAreaInfos;

    /**
     * @var string <p>Deployment state. Valid values:</p><li>Online: Goes live.</li><li>Deploying: Deployment in progress.</li><li>Locked: Locked. When this state occurs, unable to perform deployment change on that domain name.</li>
     */
    public $DeployStatus;

    /**
     * @var DomainHTTPSConfig <p>HTTPS configuration message.</p>
     */
    public $HTTPSConfig;

    /**
     * @var UrlSignatureAuthPolicy <p><a href="https://www.tencentcloud.com/document/product/266/14047?from_cn_redirect=1">Key hotlink protection</a> configuration message.</p>
     */
    public $UrlSignatureAuthPolicy;

    /**
     * @var RefererAuthPolicy <p><a href="https://www.tencentcloud.com/document/product/266/14046?from_cn_redirect=1">Referer hotlink protection</a> configuration message.</p>
     */
    public $RefererAuthPolicy;

    /**
     * @var string <p>The time when the domain name is added to the Tencent Cloud VOD system.</p><li>Format according to ISO 8601 standard. For details, see <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format description</a>.</li>
     */
    public $CreateTime;

    /**
     * @var DomainQUICConfig <p>Domain name QUIC configuration message.</p>
     */
    public $QUICConfig;

    /**
     * @var IPFilterPolicy <p>IP access restriction configuration message.</p>
     */
    public $IPFilterPolicy;

    /**
     * @var string <p>Domain type. Valid values: <li>VOD: Domain name distributed by using the VOD product;</li> <li>EdgeOne: Domain name distributed by using the EdgeOne product.</li></p>
     */
    public $Type;

    /**
     * @param string $Domain <p>Domain name.</p>
     * @param array $AccelerateAreaInfos <p>Acceleration region information.</p>
     * @param string $DeployStatus <p>Deployment state. Valid values:</p><li>Online: Goes live.</li><li>Deploying: Deployment in progress.</li><li>Locked: Locked. When this state occurs, unable to perform deployment change on that domain name.</li>
     * @param DomainHTTPSConfig $HTTPSConfig <p>HTTPS configuration message.</p>
     * @param UrlSignatureAuthPolicy $UrlSignatureAuthPolicy <p><a href="https://www.tencentcloud.com/document/product/266/14047?from_cn_redirect=1">Key hotlink protection</a> configuration message.</p>
     * @param RefererAuthPolicy $RefererAuthPolicy <p><a href="https://www.tencentcloud.com/document/product/266/14046?from_cn_redirect=1">Referer hotlink protection</a> configuration message.</p>
     * @param string $CreateTime <p>The time when the domain name is added to the Tencent Cloud VOD system.</p><li>Format according to ISO 8601 standard. For details, see <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format description</a>.</li>
     * @param DomainQUICConfig $QUICConfig <p>Domain name QUIC configuration message.</p>
     * @param IPFilterPolicy $IPFilterPolicy <p>IP access restriction configuration message.</p>
     * @param string $Type <p>Domain type. Valid values: <li>VOD: Domain name distributed by using the VOD product;</li> <li>EdgeOne: Domain name distributed by using the EdgeOne product.</li></p>
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
