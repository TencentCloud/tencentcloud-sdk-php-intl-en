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
 * Private authentication parameters for Cloud Object Storage origin server.
 *
 * @method string getAccessKeyId() Obtain Authentication parameter access key id.
 * @method void setAccessKeyId(string $AccessKeyId) Set Authentication parameter access key id.
 * @method string getSecretAccessKey() Obtain Authentication parameter secret access key.
 * @method void setSecretAccessKey(string $SecretAccessKey) Set Authentication parameter secret access key.
 * @method string getSignatureVersion() Obtain Authentication version. values:.
<Li>V2: v2 version;</li>.
<Li>V4: v4 version.</li>.
 * @method void setSignatureVersion(string $SignatureVersion) Set Authentication version. values:.
<Li>V2: v2 version;</li>.
<Li>V4: v4 version.</li>.
 * @method string getRegion() Obtain Region of the bucket.
 * @method void setRegion(string $Region) Set Region of the bucket.
 */
class OriginPrivateParameters extends AbstractModel
{
    /**
     * @var string Authentication parameter access key id.
     */
    public $AccessKeyId;

    /**
     * @var string Authentication parameter secret access key.
     */
    public $SecretAccessKey;

    /**
     * @var string Authentication version. values:.
<Li>V2: v2 version;</li>.
<Li>V4: v4 version.</li>.
     */
    public $SignatureVersion;

    /**
     * @var string Region of the bucket.
     */
    public $Region;

    /**
     * @param string $AccessKeyId Authentication parameter access key id.
     * @param string $SecretAccessKey Authentication parameter secret access key.
     * @param string $SignatureVersion Authentication version. values:.
<Li>V2: v2 version;</li>.
<Li>V4: v4 version.</li>.
     * @param string $Region Region of the bucket.
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
        if (array_key_exists("AccessKeyId",$param) and $param["AccessKeyId"] !== null) {
            $this->AccessKeyId = $param["AccessKeyId"];
        }

        if (array_key_exists("SecretAccessKey",$param) and $param["SecretAccessKey"] !== null) {
            $this->SecretAccessKey = $param["SecretAccessKey"];
        }

        if (array_key_exists("SignatureVersion",$param) and $param["SignatureVersion"] !== null) {
            $this->SignatureVersion = $param["SignatureVersion"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }
    }
}
