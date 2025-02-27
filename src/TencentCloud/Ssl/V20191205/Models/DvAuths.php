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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Content of the `DvAuths` parameter
 *
 * @method string getDvAuthKey() Obtain Certificate domain name verification record key.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDvAuthKey(string $DvAuthKey) Set Certificate domain name verification record key.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getDvAuthValue() Obtain Certificate domain name verification record value.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDvAuthValue(string $DvAuthValue) Set Certificate domain name verification record value.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getDvAuthDomain() Obtain Certificate domain name verification domain value.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDvAuthDomain(string $DvAuthDomain) Set Certificate domain name verification domain value.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getDvAuthPath() Obtain Certificate domain name verification file path, used only for file and file_proxy.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDvAuthPath(string $DvAuthPath) Set Certificate domain name verification file path, used only for file and file_proxy.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getDvAuthSubDomain() Obtain Certificate domain name verification subdomain.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDvAuthSubDomain(string $DvAuthSubDomain) Set Certificate domain name verification subdomain.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getDvAuthVerifyType() Obtain Certificate domain verification type, valid values:.
TXT: add txt record for dns domain verification.
FILE: domain file verification.
CNAME: add cname record for dns domain verification.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDvAuthVerifyType(string $DvAuthVerifyType) Set Certificate domain verification type, valid values:.
TXT: add txt record for dns domain verification.
FILE: domain file verification.
CNAME: add cname record for dns domain verification.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class DvAuths extends AbstractModel
{
    /**
     * @var string Certificate domain name verification record key.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $DvAuthKey;

    /**
     * @var string Certificate domain name verification record value.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $DvAuthValue;

    /**
     * @var string Certificate domain name verification domain value.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $DvAuthDomain;

    /**
     * @var string Certificate domain name verification file path, used only for file and file_proxy.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $DvAuthPath;

    /**
     * @var string Certificate domain name verification subdomain.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $DvAuthSubDomain;

    /**
     * @var string Certificate domain verification type, valid values:.
TXT: add txt record for dns domain verification.
FILE: domain file verification.
CNAME: add cname record for dns domain verification.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $DvAuthVerifyType;

    /**
     * @param string $DvAuthKey Certificate domain name verification record key.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $DvAuthValue Certificate domain name verification record value.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $DvAuthDomain Certificate domain name verification domain value.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $DvAuthPath Certificate domain name verification file path, used only for file and file_proxy.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $DvAuthSubDomain Certificate domain name verification subdomain.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $DvAuthVerifyType Certificate domain verification type, valid values:.
TXT: add txt record for dns domain verification.
FILE: domain file verification.
CNAME: add cname record for dns domain verification.
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("DvAuthKey",$param) and $param["DvAuthKey"] !== null) {
            $this->DvAuthKey = $param["DvAuthKey"];
        }

        if (array_key_exists("DvAuthValue",$param) and $param["DvAuthValue"] !== null) {
            $this->DvAuthValue = $param["DvAuthValue"];
        }

        if (array_key_exists("DvAuthDomain",$param) and $param["DvAuthDomain"] !== null) {
            $this->DvAuthDomain = $param["DvAuthDomain"];
        }

        if (array_key_exists("DvAuthPath",$param) and $param["DvAuthPath"] !== null) {
            $this->DvAuthPath = $param["DvAuthPath"];
        }

        if (array_key_exists("DvAuthSubDomain",$param) and $param["DvAuthSubDomain"] !== null) {
            $this->DvAuthSubDomain = $param["DvAuthSubDomain"];
        }

        if (array_key_exists("DvAuthVerifyType",$param) and $param["DvAuthVerifyType"] !== null) {
            $this->DvAuthVerifyType = $param["DvAuthVerifyType"];
        }
    }
}
