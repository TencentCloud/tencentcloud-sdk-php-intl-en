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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Image information
 *
 * @method string getDigest() Obtain Hash value
 * @method void setDigest(string $Digest) Set Hash value
 * @method integer getSize() Obtain Image size in bytes
 * @method void setSize(integer $Size) Set Image size in bytes
 * @method string getImageVersion() Obtain Tag name
 * @method void setImageVersion(string $ImageVersion) Set Tag name
 * @method string getUpdateTime() Obtain Update time
 * @method void setUpdateTime(string $UpdateTime) Set Update time
 * @method string getKind() Obtain Artifact type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setKind(string $Kind) Set Artifact type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getKmsSignature() Obtain KMS signature information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setKmsSignature(string $KmsSignature) Set KMS signature information
Note: This field may return null, indicating that no valid values can be obtained.
 */
class TcrImageInfo extends AbstractModel
{
    /**
     * @var string Hash value
     */
    public $Digest;

    /**
     * @var integer Image size in bytes
     */
    public $Size;

    /**
     * @var string Tag name
     */
    public $ImageVersion;

    /**
     * @var string Update time
     */
    public $UpdateTime;

    /**
     * @var string Artifact type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Kind;

    /**
     * @var string KMS signature information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $KmsSignature;

    /**
     * @param string $Digest Hash value
     * @param integer $Size Image size in bytes
     * @param string $ImageVersion Tag name
     * @param string $UpdateTime Update time
     * @param string $Kind Artifact type
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $KmsSignature KMS signature information
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Digest",$param) and $param["Digest"] !== null) {
            $this->Digest = $param["Digest"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("ImageVersion",$param) and $param["ImageVersion"] !== null) {
            $this->ImageVersion = $param["ImageVersion"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Kind",$param) and $param["Kind"] !== null) {
            $this->Kind = $param["Kind"];
        }

        if (array_key_exists("KmsSignature",$param) and $param["KmsSignature"] !== null) {
            $this->KmsSignature = $param["KmsSignature"];
        }
    }
}
