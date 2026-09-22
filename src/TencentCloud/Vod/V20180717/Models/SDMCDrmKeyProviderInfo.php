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
 * DRM key provider information for SDMC.
 *
 * @method string getUid() Obtain User ID assigned by SDMC, which contains up to 128 characters.
 * @method void setUid(string $Uid) Set User ID assigned by SDMC, which contains up to 128 characters.
 * @method string getSecretId() Obtain User secret ID assigned by Huaxida, which contains up to 128 characters.
 * @method void setSecretId(string $SecretId) Set User secret ID assigned by Huaxida, which contains up to 128 characters.
 * @method string getSecretKey() Obtain User key content assigned by Huaxida. Maximum length: 128 characters.
 * @method void setSecretKey(string $SecretKey) Set User key content assigned by Huaxida. Maximum length: 128 characters.
 * @method string getFairPlayCertificateUrl() Obtain FairPlay certificate address assigned by SDMC. This address uses the HTTPS protocol and has a maximum length of 1024 characters.
 * @method void setFairPlayCertificateUrl(string $FairPlayCertificateUrl) Set FairPlay certificate address assigned by SDMC. This address uses the HTTPS protocol and has a maximum length of 1024 characters.
 */
class SDMCDrmKeyProviderInfo extends AbstractModel
{
    /**
     * @var string User ID assigned by SDMC, which contains up to 128 characters.
     */
    public $Uid;

    /**
     * @var string User secret ID assigned by Huaxida, which contains up to 128 characters.
     */
    public $SecretId;

    /**
     * @var string User key content assigned by Huaxida. Maximum length: 128 characters.
     */
    public $SecretKey;

    /**
     * @var string FairPlay certificate address assigned by SDMC. This address uses the HTTPS protocol and has a maximum length of 1024 characters.
     */
    public $FairPlayCertificateUrl;

    /**
     * @param string $Uid User ID assigned by SDMC, which contains up to 128 characters.
     * @param string $SecretId User secret ID assigned by Huaxida, which contains up to 128 characters.
     * @param string $SecretKey User key content assigned by Huaxida. Maximum length: 128 characters.
     * @param string $FairPlayCertificateUrl FairPlay certificate address assigned by SDMC. This address uses the HTTPS protocol and has a maximum length of 1024 characters.
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
        if (array_key_exists("Uid",$param) and $param["Uid"] !== null) {
            $this->Uid = $param["Uid"];
        }

        if (array_key_exists("SecretId",$param) and $param["SecretId"] !== null) {
            $this->SecretId = $param["SecretId"];
        }

        if (array_key_exists("SecretKey",$param) and $param["SecretKey"] !== null) {
            $this->SecretKey = $param["SecretKey"];
        }

        if (array_key_exists("FairPlayCertificateUrl",$param) and $param["FairPlayCertificateUrl"] !== null) {
            $this->FairPlayCertificateUrl = $param["FairPlayCertificateUrl"];
        }
    }
}
