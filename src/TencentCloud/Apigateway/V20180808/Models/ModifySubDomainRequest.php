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
 * ModifySubDomain request structure.
 *
 * @method string getServiceId() Obtain Unique service ID.
 * @method void setServiceId(string $ServiceId) Set Unique service ID.
 * @method string getSubDomain() Obtain Custom domain name for which the path mapping is to be modified.
 * @method void setSubDomain(string $SubDomain) Set Custom domain name for which the path mapping is to be modified.
 * @method boolean getIsDefaultMapping() Obtain Whether to change to the default path mapping. true: use the default path mapping. false: use the custom path mapping.
 * @method void setIsDefaultMapping(boolean $IsDefaultMapping) Set Whether to change to the default path mapping. true: use the default path mapping. false: use the custom path mapping.
 * @method string getCertificateId() Obtain Certificate ID, which is required when the HTTPS protocol is included.
 * @method void setCertificateId(string $CertificateId) Set Certificate ID, which is required when the HTTPS protocol is included.
 * @method string getProtocol() Obtain Modified custom domain name protocol type. Valid values: http, https, http&https.
 * @method void setProtocol(string $Protocol) Set Modified custom domain name protocol type. Valid values: http, https, http&https.
 * @method array getPathMappingSet() Obtain Modified path mapping list.
 * @method void setPathMappingSet(array $PathMappingSet) Set Modified path mapping list.
 * @method string getNetType() Obtain Network type. Valid values: INNER, OUTER.
 * @method void setNetType(string $NetType) Set Network type. Valid values: INNER, OUTER.
 */
class ModifySubDomainRequest extends AbstractModel
{
    /**
     * @var string Unique service ID.
     */
    public $ServiceId;

    /**
     * @var string Custom domain name for which the path mapping is to be modified.
     */
    public $SubDomain;

    /**
     * @var boolean Whether to change to the default path mapping. true: use the default path mapping. false: use the custom path mapping.
     */
    public $IsDefaultMapping;

    /**
     * @var string Certificate ID, which is required when the HTTPS protocol is included.
     */
    public $CertificateId;

    /**
     * @var string Modified custom domain name protocol type. Valid values: http, https, http&https.
     */
    public $Protocol;

    /**
     * @var array Modified path mapping list.
     */
    public $PathMappingSet;

    /**
     * @var string Network type. Valid values: INNER, OUTER.
     */
    public $NetType;

    /**
     * @param string $ServiceId Unique service ID.
     * @param string $SubDomain Custom domain name for which the path mapping is to be modified.
     * @param boolean $IsDefaultMapping Whether to change to the default path mapping. true: use the default path mapping. false: use the custom path mapping.
     * @param string $CertificateId Certificate ID, which is required when the HTTPS protocol is included.
     * @param string $Protocol Modified custom domain name protocol type. Valid values: http, https, http&https.
     * @param array $PathMappingSet Modified path mapping list.
     * @param string $NetType Network type. Valid values: INNER, OUTER.
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

        if (array_key_exists("IsDefaultMapping",$param) and $param["IsDefaultMapping"] !== null) {
            $this->IsDefaultMapping = $param["IsDefaultMapping"];
        }

        if (array_key_exists("CertificateId",$param) and $param["CertificateId"] !== null) {
            $this->CertificateId = $param["CertificateId"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("PathMappingSet",$param) and $param["PathMappingSet"] !== null) {
            $this->PathMappingSet = [];
            foreach ($param["PathMappingSet"] as $key => $value){
                $obj = new PathMapping();
                $obj->deserialize($value);
                array_push($this->PathMappingSet, $obj);
            }
        }

        if (array_key_exists("NetType",$param) and $param["NetType"] !== null) {
            $this->NetType = $param["NetType"];
        }
    }
}
