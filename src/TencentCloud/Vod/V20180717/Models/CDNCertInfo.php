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
 * @method string getCertId() Obtain Server certificate ID is automatically generated when hosting a certificate in SSL certificate management.
 * @method void setCertId(string $CertId) Set Server certificate ID is automatically generated when hosting a certificate in SSL certificate management.
 * @method string getCertificate() Obtain 
 * @method void setCertificate(string $Certificate) Set 
 * @method string getPrivateKey() Obtain 
 * @method void setPrivateKey(string $PrivateKey) Set 
 * @method string getExpireTime() Obtain Certificate expiration time;
No need to fill when used as an input parameter configuration.
 * @method void setExpireTime(string $ExpireTime) Set Certificate expiration time;
No need to fill when used as an input parameter configuration.
 */
class CDNCertInfo extends AbstractModel
{
    /**
     * @var string Server certificate ID is automatically generated when hosting a certificate in SSL certificate management.
     */
    public $CertId;

    /**
     * @var string 
     */
    public $Certificate;

    /**
     * @var string 
     */
    public $PrivateKey;

    /**
     * @var string Certificate expiration time;
No need to fill when used as an input parameter configuration.
     */
    public $ExpireTime;

    /**
     * @param string $CertId Server certificate ID is automatically generated when hosting a certificate in SSL certificate management.
     * @param string $Certificate 
     * @param string $PrivateKey 
     * @param string $ExpireTime Certificate expiration time;
No need to fill when used as an input parameter configuration.
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

        if (array_key_exists("Certificate",$param) and $param["Certificate"] !== null) {
            $this->Certificate = $param["Certificate"];
        }

        if (array_key_exists("PrivateKey",$param) and $param["PrivateKey"] !== null) {
            $this->PrivateKey = $param["PrivateKey"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }
    }
}
