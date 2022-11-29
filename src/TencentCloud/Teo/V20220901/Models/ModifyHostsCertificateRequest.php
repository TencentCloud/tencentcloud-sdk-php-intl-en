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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyHostsCertificate request structure.
 *
 * @method string getZoneId() Obtain ID of the site.
 * @method void setZoneId(string $ZoneId) Set ID of the site.
 * @method array getHosts() Obtain List of domain names that the certificate will be attached to.
 * @method void setHosts(array $Hosts) Set List of domain names that the certificate will be attached to.
 * @method array getServerCertInfo() Obtain Certificate information. Note that only `CertId` is required. If it is not specified, the default certificate will be used.
 * @method void setServerCertInfo(array $ServerCertInfo) Set Certificate information. Note that only `CertId` is required. If it is not specified, the default certificate will be used.
 * @method string getApplyType() Obtain Whether the certificate is managed by EdgeOne. Values:
<li>`apply`: Managed by EdgeOne</li>
<li>`none`: Not managed by EdgeOne</li>If it is left empty, the default value `apply` is used.
 * @method void setApplyType(string $ApplyType) Set Whether the certificate is managed by EdgeOne. Values:
<li>`apply`: Managed by EdgeOne</li>
<li>`none`: Not managed by EdgeOne</li>If it is left empty, the default value `apply` is used.
 */
class ModifyHostsCertificateRequest extends AbstractModel
{
    /**
     * @var string ID of the site.
     */
    public $ZoneId;

    /**
     * @var array List of domain names that the certificate will be attached to.
     */
    public $Hosts;

    /**
     * @var array Certificate information. Note that only `CertId` is required. If it is not specified, the default certificate will be used.
     */
    public $ServerCertInfo;

    /**
     * @var string Whether the certificate is managed by EdgeOne. Values:
<li>`apply`: Managed by EdgeOne</li>
<li>`none`: Not managed by EdgeOne</li>If it is left empty, the default value `apply` is used.
     */
    public $ApplyType;

    /**
     * @param string $ZoneId ID of the site.
     * @param array $Hosts List of domain names that the certificate will be attached to.
     * @param array $ServerCertInfo Certificate information. Note that only `CertId` is required. If it is not specified, the default certificate will be used.
     * @param string $ApplyType Whether the certificate is managed by EdgeOne. Values:
<li>`apply`: Managed by EdgeOne</li>
<li>`none`: Not managed by EdgeOne</li>If it is left empty, the default value `apply` is used.
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Hosts",$param) and $param["Hosts"] !== null) {
            $this->Hosts = $param["Hosts"];
        }

        if (array_key_exists("ServerCertInfo",$param) and $param["ServerCertInfo"] !== null) {
            $this->ServerCertInfo = [];
            foreach ($param["ServerCertInfo"] as $key => $value){
                $obj = new ServerCertInfo();
                $obj->deserialize($value);
                array_push($this->ServerCertInfo, $obj);
            }
        }

        if (array_key_exists("ApplyType",$param) and $param["ApplyType"] !== null) {
            $this->ApplyType = $param["ApplyType"];
        }
    }
}
