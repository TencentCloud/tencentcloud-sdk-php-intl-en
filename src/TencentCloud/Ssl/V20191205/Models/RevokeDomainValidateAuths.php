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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Revoke certificate domain name verification info.
 *
 * @method string getDomainValidateAuthPath() Obtain DV authentication value path.
 * @method void setDomainValidateAuthPath(string $DomainValidateAuthPath) Set DV authentication value path.
 * @method string getDomainValidateAuthKey() Obtain DV authentication KEY.
 * @method void setDomainValidateAuthKey(string $DomainValidateAuthKey) Set DV authentication KEY.
 * @method string getDomainValidateAuthValue() Obtain DV authentication value.
 * @method void setDomainValidateAuthValue(string $DomainValidateAuthValue) Set DV authentication value.
 * @method string getDomainValidateAuthDomain() Obtain DV authentication domain name.
 * @method void setDomainValidateAuthDomain(string $DomainValidateAuthDomain) Set DV authentication domain name.
 */
class RevokeDomainValidateAuths extends AbstractModel
{
    /**
     * @var string DV authentication value path.
     */
    public $DomainValidateAuthPath;

    /**
     * @var string DV authentication KEY.
     */
    public $DomainValidateAuthKey;

    /**
     * @var string DV authentication value.
     */
    public $DomainValidateAuthValue;

    /**
     * @var string DV authentication domain name.
     */
    public $DomainValidateAuthDomain;

    /**
     * @param string $DomainValidateAuthPath DV authentication value path.
     * @param string $DomainValidateAuthKey DV authentication KEY.
     * @param string $DomainValidateAuthValue DV authentication value.
     * @param string $DomainValidateAuthDomain DV authentication domain name.
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
        if (array_key_exists("DomainValidateAuthPath",$param) and $param["DomainValidateAuthPath"] !== null) {
            $this->DomainValidateAuthPath = $param["DomainValidateAuthPath"];
        }

        if (array_key_exists("DomainValidateAuthKey",$param) and $param["DomainValidateAuthKey"] !== null) {
            $this->DomainValidateAuthKey = $param["DomainValidateAuthKey"];
        }

        if (array_key_exists("DomainValidateAuthValue",$param) and $param["DomainValidateAuthValue"] !== null) {
            $this->DomainValidateAuthValue = $param["DomainValidateAuthValue"];
        }

        if (array_key_exists("DomainValidateAuthDomain",$param) and $param["DomainValidateAuthDomain"] !== null) {
            $this->DomainValidateAuthDomain = $param["DomainValidateAuthDomain"];
        }
    }
}
