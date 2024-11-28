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
 * Information of the acceleration domain name certificate.
 *
 * @method string getMode() Obtain Certificate configuration mode. Values: <li>`disable`: Do not configure the certificate;</li><li>`eofreecert`: Use a free certificate provided by EdgeOne; </li><li>`sslcert`: Configure an SSL certificate.</li>
 * @method void setMode(string $Mode) Set Certificate configuration mode. Values: <li>`disable`: Do not configure the certificate;</li><li>`eofreecert`: Use a free certificate provided by EdgeOne; </li><li>`sslcert`: Configure an SSL certificate.</li>
 * @method array getList() Obtain List of server certificates. The relevant certificates are deployed on the entrance side of the EO.
Note: This field may return null, which indicates a failure to obtain a valid value.
 * @method void setList(array $List) Set List of server certificates. The relevant certificates are deployed on the entrance side of the EO.
Note: This field may return null, which indicates a failure to obtain a valid value.
 * @method MutualTLS getClientCertInfo() Obtain In the edge mutual authentication scenario, this field represents the client's CA certificate, which is deployed inside the EO node and used for EO node authentication of the client certificate.
 * @method void setClientCertInfo(MutualTLS $ClientCertInfo) Set In the edge mutual authentication scenario, this field represents the client's CA certificate, which is deployed inside the EO node and used for EO node authentication of the client certificate.
 * @method UpstreamCertInfo getUpstreamCertInfo() Obtain The certificate carried during EO node origin-pull is used when the origin server enables the mutual authentication handshake to validate the client certificate, ensuring that the request originates from a trusted EO node.
 * @method void setUpstreamCertInfo(UpstreamCertInfo $UpstreamCertInfo) Set The certificate carried during EO node origin-pull is used when the origin server enables the mutual authentication handshake to validate the client certificate, ensuring that the request originates from a trusted EO node.
 */
class AccelerationDomainCertificate extends AbstractModel
{
    /**
     * @var string Certificate configuration mode. Values: <li>`disable`: Do not configure the certificate;</li><li>`eofreecert`: Use a free certificate provided by EdgeOne; </li><li>`sslcert`: Configure an SSL certificate.</li>
     */
    public $Mode;

    /**
     * @var array List of server certificates. The relevant certificates are deployed on the entrance side of the EO.
Note: This field may return null, which indicates a failure to obtain a valid value.
     */
    public $List;

    /**
     * @var MutualTLS In the edge mutual authentication scenario, this field represents the client's CA certificate, which is deployed inside the EO node and used for EO node authentication of the client certificate.
     */
    public $ClientCertInfo;

    /**
     * @var UpstreamCertInfo The certificate carried during EO node origin-pull is used when the origin server enables the mutual authentication handshake to validate the client certificate, ensuring that the request originates from a trusted EO node.
     */
    public $UpstreamCertInfo;

    /**
     * @param string $Mode Certificate configuration mode. Values: <li>`disable`: Do not configure the certificate;</li><li>`eofreecert`: Use a free certificate provided by EdgeOne; </li><li>`sslcert`: Configure an SSL certificate.</li>
     * @param array $List List of server certificates. The relevant certificates are deployed on the entrance side of the EO.
Note: This field may return null, which indicates a failure to obtain a valid value.
     * @param MutualTLS $ClientCertInfo In the edge mutual authentication scenario, this field represents the client's CA certificate, which is deployed inside the EO node and used for EO node authentication of the client certificate.
     * @param UpstreamCertInfo $UpstreamCertInfo The certificate carried during EO node origin-pull is used when the origin server enables the mutual authentication handshake to validate the client certificate, ensuring that the request originates from a trusted EO node.
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
        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("List",$param) and $param["List"] !== null) {
            $this->List = [];
            foreach ($param["List"] as $key => $value){
                $obj = new CertificateInfo();
                $obj->deserialize($value);
                array_push($this->List, $obj);
            }
        }

        if (array_key_exists("ClientCertInfo",$param) and $param["ClientCertInfo"] !== null) {
            $this->ClientCertInfo = new MutualTLS();
            $this->ClientCertInfo->deserialize($param["ClientCertInfo"]);
        }

        if (array_key_exists("UpstreamCertInfo",$param) and $param["UpstreamCertInfo"] !== null) {
            $this->UpstreamCertInfo = new UpstreamCertInfo();
            $this->UpstreamCertInfo->deserialize($param["UpstreamCertInfo"]);
        }
    }
}
