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
 * SetVodDomainCertificate request structure.
 *
 * @method string getDomain() Obtain <p>Domain name.</p>
 * @method void setDomain(string $Domain) Set <p>Domain name.</p>
 * @method string getOperation() Obtain <p>Operation type of this API call. Available values:</p><li>Set: set the certificate required for setting domain HTTPS;</li><li>Clear: clear domain HTTPS configuration. After clearance, the domain cannot support HTTPS access.</li>
 * @method void setOperation(string $Operation) Set <p>Operation type of this API call. Available values:</p><li>Set: set the certificate required for setting domain HTTPS;</li><li>Clear: clear domain HTTPS configuration. After clearance, the domain cannot support HTTPS access.</li>
 * @method integer getSubAppId() Obtain <p><b>On-demand <a href="/document/product/266/14574">application</a> ID. For customers who activate on-demand services from December 25, 2023, if they access resources in on-demand applications (whether the default application or a newly created application), they must fill in this field with the app ID.</b></p>
 * @method void setSubAppId(integer $SubAppId) Set <p><b>On-demand <a href="/document/product/266/14574">application</a> ID. For customers who activate on-demand services from December 25, 2023, if they access resources in on-demand applications (whether the default application or a newly created application), they must fill in this field with the app ID.</b></p>
 * @method string getCertID() Obtain <p>ID of the certificate uploaded to <a href="/document/product/400/7572">Tencent Cloud SSL</a>. This field is not required when clearing domain HTTPS configuration.</p>
 * @method void setCertID(string $CertID) Set <p>ID of the certificate uploaded to <a href="/document/product/400/7572">Tencent Cloud SSL</a>. This field is not required when clearing domain HTTPS configuration.</p>
 */
class SetVodDomainCertificateRequest extends AbstractModel
{
    /**
     * @var string <p>Domain name.</p>
     */
    public $Domain;

    /**
     * @var string <p>Operation type of this API call. Available values:</p><li>Set: set the certificate required for setting domain HTTPS;</li><li>Clear: clear domain HTTPS configuration. After clearance, the domain cannot support HTTPS access.</li>
     */
    public $Operation;

    /**
     * @var integer <p><b>On-demand <a href="/document/product/266/14574">application</a> ID. For customers who activate on-demand services from December 25, 2023, if they access resources in on-demand applications (whether the default application or a newly created application), they must fill in this field with the app ID.</b></p>
     */
    public $SubAppId;

    /**
     * @var string <p>ID of the certificate uploaded to <a href="/document/product/400/7572">Tencent Cloud SSL</a>. This field is not required when clearing domain HTTPS configuration.</p>
     */
    public $CertID;

    /**
     * @param string $Domain <p>Domain name.</p>
     * @param string $Operation <p>Operation type of this API call. Available values:</p><li>Set: set the certificate required for setting domain HTTPS;</li><li>Clear: clear domain HTTPS configuration. After clearance, the domain cannot support HTTPS access.</li>
     * @param integer $SubAppId <p><b>On-demand <a href="/document/product/266/14574">application</a> ID. For customers who activate on-demand services from December 25, 2023, if they access resources in on-demand applications (whether the default application or a newly created application), they must fill in this field with the app ID.</b></p>
     * @param string $CertID <p>ID of the certificate uploaded to <a href="/document/product/400/7572">Tencent Cloud SSL</a>. This field is not required when clearing domain HTTPS configuration.</p>
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

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("CertID",$param) and $param["CertID"] !== null) {
            $this->CertID = $param["CertID"];
        }
    }
}
