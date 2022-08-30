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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The DRM key information provided by SDMC.
 *
 * @method string getUid() Obtain The user ID assigned by SDMC, which can contain up to 128 characters.
 * @method void setUid(string $Uid) Set The user ID assigned by SDMC, which can contain up to 128 characters.
 * @method string getSecretId() Obtain The secret ID assigned by SDMC, which can contain up to 128 characters.
 * @method void setSecretId(string $SecretId) Set The secret ID assigned by SDMC, which can contain up to 128 characters.
 * @method string getSecretKey() Obtain The secret key assigned by SDMC, which can contain up to 128 characters.
 * @method void setSecretKey(string $SecretKey) Set The secret key assigned by SDMC, which can contain up to 128 characters.
 * @method string getFairPlayCertificateUrl() Obtain The URL of the FairPlay certificate issued by SDMC. It must be an HTTPS address and can contain up to 1,024 characters.
 * @method void setFairPlayCertificateUrl(string $FairPlayCertificateUrl) Set The URL of the FairPlay certificate issued by SDMC. It must be an HTTPS address and can contain up to 1,024 characters.
 */
class SDMCDrmKeyProviderInfo extends AbstractModel
{
    /**
     * @var string The user ID assigned by SDMC, which can contain up to 128 characters.
     */
    public $Uid;

    /**
     * @var string The secret ID assigned by SDMC, which can contain up to 128 characters.
     */
    public $SecretId;

    /**
     * @var string The secret key assigned by SDMC, which can contain up to 128 characters.
     */
    public $SecretKey;

    /**
     * @var string The URL of the FairPlay certificate issued by SDMC. It must be an HTTPS address and can contain up to 1,024 characters.
     */
    public $FairPlayCertificateUrl;

    /**
     * @param string $Uid The user ID assigned by SDMC, which can contain up to 128 characters.
     * @param string $SecretId The secret ID assigned by SDMC, which can contain up to 128 characters.
     * @param string $SecretKey The secret key assigned by SDMC, which can contain up to 128 characters.
     * @param string $FairPlayCertificateUrl The URL of the FairPlay certificate issued by SDMC. It must be an HTTPS address and can contain up to 1,024 characters.
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
