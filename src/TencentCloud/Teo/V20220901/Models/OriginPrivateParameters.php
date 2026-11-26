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
 * Private authentication parameter for the COS origin server.
 *
 * @method string getAccessKeyId() Obtain Access Key ID authentication parameter.
 * @method void setAccessKeyId(string $AccessKeyId) Set Access Key ID authentication parameter.
 * @method string getSecretAccessKey() Obtain Secret Access Key authentication parameter.
 * @method void setSecretAccessKey(string $SecretAccessKey) Set Secret Access Key authentication parameter.
 * @method string getSignatureVersion() Obtain Authentication version. Valid values:
<li>v2: v2 version;</li>
<li>v4: v4 version.</li>
 * @method void setSignatureVersion(string $SignatureVersion) Set Authentication version. Valid values:
<li>v2: v2 version;</li>
<li>v4: v4 version.</li>
 * @method string getRegion() Obtain Bucket region.
 * @method void setRegion(string $Region) Set Bucket region.
 */
class OriginPrivateParameters extends AbstractModel
{
    /**
     * @var string Access Key ID authentication parameter.
     */
    public $AccessKeyId;

    /**
     * @var string Secret Access Key authentication parameter.
     */
    public $SecretAccessKey;

    /**
     * @var string Authentication version. Valid values:
<li>v2: v2 version;</li>
<li>v4: v4 version.</li>
     */
    public $SignatureVersion;

    /**
     * @var string Bucket region.
     */
    public $Region;

    /**
     * @param string $AccessKeyId Access Key ID authentication parameter.
     * @param string $SecretAccessKey Secret Access Key authentication parameter.
     * @param string $SignatureVersion Authentication version. Valid values:
<li>v2: v2 version;</li>
<li>v4: v4 version.</li>
     * @param string $Region Bucket region.
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
