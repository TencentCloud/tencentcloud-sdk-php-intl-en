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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BindSubDomain request structure.
 *
 * @method string getServiceId() Obtain Unique service ID.
 * @method void setServiceId(string $ServiceId) Set Unique service ID.
 * @method string getSubDomain() Obtain Custom domain name to be bound.
 * @method void setSubDomain(string $SubDomain) Set Custom domain name to be bound.
 * @method string getProtocol() Obtain Protocol supported by service. Valid values: http, https, http&https.
 * @method void setProtocol(string $Protocol) Set Protocol supported by service. Valid values: http, https, http&https.
 * @method string getNetType() Obtain Network type. Valid values: OUTER, INNER.
 * @method void setNetType(string $NetType) Set Network type. Valid values: OUTER, INNER.
 * @method boolean getIsDefaultMapping() Obtain Whether the default path mapping is used. The default value is `true`. If the value is `false`, the custom path mapping will be used and `PathMappingSet` will be required in this case.
 * @method void setIsDefaultMapping(boolean $IsDefaultMapping) Set Whether the default path mapping is used. The default value is `true`. If the value is `false`, the custom path mapping will be used and `PathMappingSet` will be required in this case.
 * @method string getNetSubDomain() Obtain Default domain name.
 * @method void setNetSubDomain(string $NetSubDomain) Set Default domain name.
 * @method string getCertificateId() Obtain Unique certificate ID of the custom domain name to be bound. The certificate can be uploaded if `Protocol` is `https` or `http&https`.
 * @method void setCertificateId(string $CertificateId) Set Unique certificate ID of the custom domain name to be bound. The certificate can be uploaded if `Protocol` is `https` or `http&https`.
 * @method array getPathMappingSet() Obtain Custom domain name path mapping. It can contain up to 3 `Environment` values which can be set to only `test`, `prepub`, and `release`, respectively.
 * @method void setPathMappingSet(array $PathMappingSet) Set Custom domain name path mapping. It can contain up to 3 `Environment` values which can be set to only `test`, `prepub`, and `release`, respectively.
 * @method boolean getIsForcedHttps() Obtain Whether to force HTTP requests to redirect to HTTPS. Default value: `false`. When this parameter is `true`, API Gateway will redirect all requests using the custom domain name over the HTTP protocol to the HTTPS protocol for forwarding.
 * @method void setIsForcedHttps(boolean $IsForcedHttps) Set Whether to force HTTP requests to redirect to HTTPS. Default value: `false`. When this parameter is `true`, API Gateway will redirect all requests using the custom domain name over the HTTP protocol to the HTTPS protocol for forwarding.
 */
class BindSubDomainRequest extends AbstractModel
{
    /**
     * @var string Unique service ID.
     */
    public $ServiceId;

    /**
     * @var string Custom domain name to be bound.
     */
    public $SubDomain;

    /**
     * @var string Protocol supported by service. Valid values: http, https, http&https.
     */
    public $Protocol;

    /**
     * @var string Network type. Valid values: OUTER, INNER.
     */
    public $NetType;

    /**
     * @var boolean Whether the default path mapping is used. The default value is `true`. If the value is `false`, the custom path mapping will be used and `PathMappingSet` will be required in this case.
     */
    public $IsDefaultMapping;

    /**
     * @var string Default domain name.
     */
    public $NetSubDomain;

    /**
     * @var string Unique certificate ID of the custom domain name to be bound. The certificate can be uploaded if `Protocol` is `https` or `http&https`.
     */
    public $CertificateId;

    /**
     * @var array Custom domain name path mapping. It can contain up to 3 `Environment` values which can be set to only `test`, `prepub`, and `release`, respectively.
     */
    public $PathMappingSet;

    /**
     * @var boolean Whether to force HTTP requests to redirect to HTTPS. Default value: `false`. When this parameter is `true`, API Gateway will redirect all requests using the custom domain name over the HTTP protocol to the HTTPS protocol for forwarding.
     */
    public $IsForcedHttps;

    /**
     * @param string $ServiceId Unique service ID.
     * @param string $SubDomain Custom domain name to be bound.
     * @param string $Protocol Protocol supported by service. Valid values: http, https, http&https.
     * @param string $NetType Network type. Valid values: OUTER, INNER.
     * @param boolean $IsDefaultMapping Whether the default path mapping is used. The default value is `true`. If the value is `false`, the custom path mapping will be used and `PathMappingSet` will be required in this case.
     * @param string $NetSubDomain Default domain name.
     * @param string $CertificateId Unique certificate ID of the custom domain name to be bound. The certificate can be uploaded if `Protocol` is `https` or `http&https`.
     * @param array $PathMappingSet Custom domain name path mapping. It can contain up to 3 `Environment` values which can be set to only `test`, `prepub`, and `release`, respectively.
     * @param boolean $IsForcedHttps Whether to force HTTP requests to redirect to HTTPS. Default value: `false`. When this parameter is `true`, API Gateway will redirect all requests using the custom domain name over the HTTP protocol to the HTTPS protocol for forwarding.
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
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("SubDomain",$param) and $param["SubDomain"] !== null) {
            $this->SubDomain = $param["SubDomain"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("NetType",$param) and $param["NetType"] !== null) {
            $this->NetType = $param["NetType"];
        }

        if (array_key_exists("IsDefaultMapping",$param) and $param["IsDefaultMapping"] !== null) {
            $this->IsDefaultMapping = $param["IsDefaultMapping"];
        }

        if (array_key_exists("NetSubDomain",$param) and $param["NetSubDomain"] !== null) {
            $this->NetSubDomain = $param["NetSubDomain"];
        }

        if (array_key_exists("CertificateId",$param) and $param["CertificateId"] !== null) {
            $this->CertificateId = $param["CertificateId"];
        }

        if (array_key_exists("PathMappingSet",$param) and $param["PathMappingSet"] !== null) {
            $this->PathMappingSet = [];
            foreach ($param["PathMappingSet"] as $key => $value){
                $obj = new PathMapping();
                $obj->deserialize($value);
                array_push($this->PathMappingSet, $obj);
            }
        }

        if (array_key_exists("IsForcedHttps",$param) and $param["IsForcedHttps"] !== null) {
            $this->IsForcedHttps = $param["IsForcedHttps"];
        }
    }
}
