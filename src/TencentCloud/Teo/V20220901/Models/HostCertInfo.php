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
 * https server certificate configuration
 *
 * @method string getCertId() Obtain Server certificate ID.
 * @method void setCertId(string $CertId) Set Server certificate ID.
 * @method string getAlias() Obtain Certificate remark name.
 * @method void setAlias(string $Alias) Set Certificate remark name.
 * @method string getType() Obtain Certificate type. Valid values:
<li>default: default certificate;</li>
<li>upload: user upload;</li>
<li>managed: Tencent Cloud hosted.</li>
 * @method void setType(string $Type) Set Certificate type. Valid values:
<li>default: default certificate;</li>
<li>upload: user upload;</li>
<li>managed: Tencent Cloud hosted.</li>
 * @method string getExpireTime() Obtain Certificate expiration time.
 * @method void setExpireTime(string $ExpireTime) Set Certificate expiration time.
 * @method string getDeployTime() Obtain Certificate deployment time.
 * @method void setDeployTime(string $DeployTime) Set Certificate deployment time.
 * @method string getSignAlgo() Obtain Signature algorithm.
 * @method void setSignAlgo(string $SignAlgo) Set Signature algorithm.
 * @method string getStatus() Obtain Certificate status. Valid values:
<li>deployed: Deployed;</li>
<li>processing: deploying;</li>
<li>applying: application in progress.</li>
<li>failed: Application failed;</li>
<li>issued: failed to bind.</li>
 * @method void setStatus(string $Status) Set Certificate status. Valid values:
<li>deployed: Deployed;</li>
<li>processing: deploying;</li>
<li>applying: application in progress.</li>
<li>failed: Application failed;</li>
<li>issued: failed to bind.</li>
 */
class HostCertInfo extends AbstractModel
{
    /**
     * @var string Server certificate ID.
     */
    public $CertId;

    /**
     * @var string Certificate remark name.
     */
    public $Alias;

    /**
     * @var string Certificate type. Valid values:
<li>default: default certificate;</li>
<li>upload: user upload;</li>
<li>managed: Tencent Cloud hosted.</li>
     */
    public $Type;

    /**
     * @var string Certificate expiration time.
     */
    public $ExpireTime;

    /**
     * @var string Certificate deployment time.
     */
    public $DeployTime;

    /**
     * @var string Signature algorithm.
     */
    public $SignAlgo;

    /**
     * @var string Certificate status. Valid values:
<li>deployed: Deployed;</li>
<li>processing: deploying;</li>
<li>applying: application in progress.</li>
<li>failed: Application failed;</li>
<li>issued: failed to bind.</li>
     */
    public $Status;

    /**
     * @param string $CertId Server certificate ID.
     * @param string $Alias Certificate remark name.
     * @param string $Type Certificate type. Valid values:
<li>default: default certificate;</li>
<li>upload: user upload;</li>
<li>managed: Tencent Cloud hosted.</li>
     * @param string $ExpireTime Certificate expiration time.
     * @param string $DeployTime Certificate deployment time.
     * @param string $SignAlgo Signature algorithm.
     * @param string $Status Certificate status. Valid values:
<li>deployed: Deployed;</li>
<li>processing: deploying;</li>
<li>applying: application in progress.</li>
<li>failed: Application failed;</li>
<li>issued: failed to bind.</li>
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
        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("DeployTime",$param) and $param["DeployTime"] !== null) {
            $this->DeployTime = $param["DeployTime"];
        }

        if (array_key_exists("SignAlgo",$param) and $param["SignAlgo"] !== null) {
            $this->SignAlgo = $param["SignAlgo"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
