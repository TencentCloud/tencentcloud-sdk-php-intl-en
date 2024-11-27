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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Domain name information
 *
 * @method string getDomain() Obtain Domain name
 * @method void setDomain(string $Domain) Set Domain name
 * @method array getAccelerateAreaInfos() Obtain Acceleration region information
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setAccelerateAreaInfos(array $AccelerateAreaInfos) Set Acceleration region information
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method string getDeployStatus() Obtain Deployment status. Valid values:
<li>Online</li>
<li>Deploying</li>
<li>Locked: you cannot change the deployment status of locked domain names</li>
 * @method void setDeployStatus(string $DeployStatus) Set Deployment status. Valid values:
<li>Online</li>
<li>Deploying</li>
<li>Locked: you cannot change the deployment status of locked domain names</li>
 * @method DomainHTTPSConfig getHTTPSConfig() Obtain HTTPS configuration information
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setHTTPSConfig(DomainHTTPSConfig $HTTPSConfig) Set HTTPS configuration information
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method UrlSignatureAuthPolicy getUrlSignatureAuthPolicy() Obtain [Key hotlink protection](https://intl.cloud.tencent.com/document/product/266/33986) configuration
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setUrlSignatureAuthPolicy(UrlSignatureAuthPolicy $UrlSignatureAuthPolicy) Set [Key hotlink protection](https://intl.cloud.tencent.com/document/product/266/33986) configuration
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method RefererAuthPolicy getRefererAuthPolicy() Obtain [Referer hotlink protection](https://intl.cloud.tencent.com/document/product/266/33985) configuration
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setRefererAuthPolicy(RefererAuthPolicy $RefererAuthPolicy) Set [Referer hotlink protection](https://intl.cloud.tencent.com/document/product/266/33985) configuration
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method string getCreateTime() Obtain The time when the domain name was added in the VOD system
<li>The time is in [ISO 8601 date format](https://intl.cloud.tencent.com/document/product/266/11732).</li>
 * @method void setCreateTime(string $CreateTime) Set The time when the domain name was added in the VOD system
<li>The time is in [ISO 8601 date format](https://intl.cloud.tencent.com/document/product/266/11732).</li>
 * @method DomainQUICConfig getQUICConfig() Obtain The QUIC configuration for the domain.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setQUICConfig(DomainQUICConfig $QUICConfig) Set The QUIC configuration for the domain.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method IPFilterPolicy getIPFilterPolicy() Obtain 
 * @method void setIPFilterPolicy(IPFilterPolicy $IPFilterPolicy) Set 
 * @method string getType() Obtain Domain type. Valid values:
<li>`VOD`: Domain name distributed using the VOD product;</li> <li>`EdgeOne`: Domain name distributed using the EdgeOne product.</li>
 * @method void setType(string $Type) Set Domain type. Valid values:
<li>`VOD`: Domain name distributed using the VOD product;</li> <li>`EdgeOne`: Domain name distributed using the EdgeOne product.</li>
 */
class DomainDetailInfo extends AbstractModel
{
    /**
     * @var string Domain name
     */
    public $Domain;

    /**
     * @var array Acceleration region information
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $AccelerateAreaInfos;

    /**
     * @var string Deployment status. Valid values:
<li>Online</li>
<li>Deploying</li>
<li>Locked: you cannot change the deployment status of locked domain names</li>
     */
    public $DeployStatus;

    /**
     * @var DomainHTTPSConfig HTTPS configuration information
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $HTTPSConfig;

    /**
     * @var UrlSignatureAuthPolicy [Key hotlink protection](https://intl.cloud.tencent.com/document/product/266/33986) configuration
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $UrlSignatureAuthPolicy;

    /**
     * @var RefererAuthPolicy [Referer hotlink protection](https://intl.cloud.tencent.com/document/product/266/33985) configuration
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $RefererAuthPolicy;

    /**
     * @var string The time when the domain name was added in the VOD system
<li>The time is in [ISO 8601 date format](https://intl.cloud.tencent.com/document/product/266/11732).</li>
     */
    public $CreateTime;

    /**
     * @var DomainQUICConfig The QUIC configuration for the domain.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $QUICConfig;

    /**
     * @var IPFilterPolicy 
     */
    public $IPFilterPolicy;

    /**
     * @var string Domain type. Valid values:
<li>`VOD`: Domain name distributed using the VOD product;</li> <li>`EdgeOne`: Domain name distributed using the EdgeOne product.</li>
     */
    public $Type;

    /**
     * @param string $Domain Domain name
     * @param array $AccelerateAreaInfos Acceleration region information
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param string $DeployStatus Deployment status. Valid values:
<li>Online</li>
<li>Deploying</li>
<li>Locked: you cannot change the deployment status of locked domain names</li>
     * @param DomainHTTPSConfig $HTTPSConfig HTTPS configuration information
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param UrlSignatureAuthPolicy $UrlSignatureAuthPolicy [Key hotlink protection](https://intl.cloud.tencent.com/document/product/266/33986) configuration
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param RefererAuthPolicy $RefererAuthPolicy [Referer hotlink protection](https://intl.cloud.tencent.com/document/product/266/33985) configuration
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param string $CreateTime The time when the domain name was added in the VOD system
<li>The time is in [ISO 8601 date format](https://intl.cloud.tencent.com/document/product/266/11732).</li>
     * @param DomainQUICConfig $QUICConfig The QUIC configuration for the domain.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param IPFilterPolicy $IPFilterPolicy 
     * @param string $Type Domain type. Valid values:
<li>`VOD`: Domain name distributed using the VOD product;</li> <li>`EdgeOne`: Domain name distributed using the EdgeOne product.</li>
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
