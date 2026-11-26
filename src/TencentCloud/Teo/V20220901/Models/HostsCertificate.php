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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Domain name certificate configuration
 *
 * @method string getHost() Obtain Domain name.
 * @method void setHost(string $Host) Set Domain name.
 * @method string getMode() Obtain Certificate configuration mode. Valid values:
<li>disable: no certificate configured;</li>
<li>eofreecert: configure EdgeOne free certificate;</li> 
<li>sslcert: configure an SSL certificate;</li>
 * @method void setMode(string $Mode) Set Certificate configuration mode. Valid values:
<li>disable: no certificate configured;</li>
<li>eofreecert: configure EdgeOne free certificate;</li> 
<li>sslcert: configure an SSL certificate;</li>
 * @method array getHostCertInfo() Obtain Server certificate configuration.
 * @method void setHostCertInfo(array $HostCertInfo) Set Server certificate configuration.
 * @method string getApplyType() Obtain Application type. Valid values:
<li>apply: manage EdgeOne;</li>
<li>none: EdgeOne is not managed.</li>If not specified, the default value is none.
 * @method void setApplyType(string $ApplyType) Set Application type. Valid values:
<li>apply: manage EdgeOne;</li>
<li>none: EdgeOne is not managed.</li>If not specified, the default value is none.
 */
class HostsCertificate extends AbstractModel
{
    /**
     * @var string Domain name.
     */
    public $Host;

    /**
     * @var string Certificate configuration mode. Valid values:
<li>disable: no certificate configured;</li>
<li>eofreecert: configure EdgeOne free certificate;</li> 
<li>sslcert: configure an SSL certificate;</li>
     */
    public $Mode;

    /**
     * @var array Server certificate configuration.
     */
    public $HostCertInfo;

    /**
     * @var string Application type. Valid values:
<li>apply: manage EdgeOne;</li>
<li>none: EdgeOne is not managed.</li>If not specified, the default value is none.
     * @deprecated
     */
    public $ApplyType;

    /**
     * @param string $Host Domain name.
     * @param string $Mode Certificate configuration mode. Valid values:
<li>disable: no certificate configured;</li>
<li>eofreecert: configure EdgeOne free certificate;</li> 
<li>sslcert: configure an SSL certificate;</li>
     * @param array $HostCertInfo Server certificate configuration.
     * @param string $ApplyType Application type. Valid values:
<li>apply: manage EdgeOne;</li>
<li>none: EdgeOne is not managed.</li>If not specified, the default value is none.
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
        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("HostCertInfo",$param) and $param["HostCertInfo"] !== null) {
            $this->HostCertInfo = [];
            foreach ($param["HostCertInfo"] as $key => $value){
                $obj = new HostCertInfo();
                $obj->deserialize($value);
                array_push($this->HostCertInfo, $obj);
            }
        }

        if (array_key_exists("ApplyType",$param) and $param["ApplyType"] !== null) {
            $this->ApplyType = $param["ApplyType"];
        }
    }
}
