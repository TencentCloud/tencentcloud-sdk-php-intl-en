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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * FairPlay, WideVine, PlayReady, and other DRM encryption technologies.
 *
 * @method string getResourceId() Obtain Resource ID.
It supports 1 to 128 characters consisting of digits, letters, underscores (_), and hyphens (-).
 * @method void setResourceId(string $ResourceId) Set Resource ID.
It supports 1 to 128 characters consisting of digits, letters, underscores (_), and hyphens (-).
 * @method string getKeyServerUrl() Obtain Access address of the DRM vendor.

Note: Different DRM vendors have different limits on the number of substreams. For example, PallyCon limits the number of substreams to no more than 5, and DRMtoday supports encryption of up to 9 substreams.
 * @method void setKeyServerUrl(string $KeyServerUrl) Set Access address of the DRM vendor.

Note: Different DRM vendors have different limits on the number of substreams. For example, PallyCon limits the number of substreams to no more than 5, and DRMtoday supports encryption of up to 9 substreams.
 * @method string getVector() Obtain Initialization vector (32-byte string) for encryption.
 * @method void setVector(string $Vector) Set Initialization vector (32-byte string) for encryption.
 * @method string getEncryptionMethod() Obtain Encryption method. cbcs: default method of FairPlay; cenc: default method of PlayReady and Widevine.

cbcs: supported by PlayReady, Widevine, and FairPlay
cenc: supported by PlayReady and Widevine
 * @method void setEncryptionMethod(string $EncryptionMethod) Set Encryption method. cbcs: default method of FairPlay; cenc: default method of PlayReady and Widevine.

cbcs: supported by PlayReady, Widevine, and FairPlay
cenc: supported by PlayReady and Widevine
 * @method string getEncryptionPreset() Obtain Substream encryption rule. Default value: preset0.
preset 0: use the same key to encrypt all substreams
preset1: use different keys for each substream

 * @method void setEncryptionPreset(string $EncryptionPreset) Set Substream encryption rule. Default value: preset0.
preset 0: use the same key to encrypt all substreams
preset1: use different keys for each substream
 */
class SpekeDrm extends AbstractModel
{
    /**
     * @var string Resource ID.
It supports 1 to 128 characters consisting of digits, letters, underscores (_), and hyphens (-).
     */
    public $ResourceId;

    /**
     * @var string Access address of the DRM vendor.

Note: Different DRM vendors have different limits on the number of substreams. For example, PallyCon limits the number of substreams to no more than 5, and DRMtoday supports encryption of up to 9 substreams.
     */
    public $KeyServerUrl;

    /**
     * @var string Initialization vector (32-byte string) for encryption.
     */
    public $Vector;

    /**
     * @var string Encryption method. cbcs: default method of FairPlay; cenc: default method of PlayReady and Widevine.

cbcs: supported by PlayReady, Widevine, and FairPlay
cenc: supported by PlayReady and Widevine
     */
    public $EncryptionMethod;

    /**
     * @var string Substream encryption rule. Default value: preset0.
preset 0: use the same key to encrypt all substreams
preset1: use different keys for each substream

     */
    public $EncryptionPreset;

    /**
     * @param string $ResourceId Resource ID.
It supports 1 to 128 characters consisting of digits, letters, underscores (_), and hyphens (-).
     * @param string $KeyServerUrl Access address of the DRM vendor.

Note: Different DRM vendors have different limits on the number of substreams. For example, PallyCon limits the number of substreams to no more than 5, and DRMtoday supports encryption of up to 9 substreams.
     * @param string $Vector Initialization vector (32-byte string) for encryption.
     * @param string $EncryptionMethod Encryption method. cbcs: default method of FairPlay; cenc: default method of PlayReady and Widevine.

cbcs: supported by PlayReady, Widevine, and FairPlay
cenc: supported by PlayReady and Widevine
     * @param string $EncryptionPreset Substream encryption rule. Default value: preset0.
preset 0: use the same key to encrypt all substreams
preset1: use different keys for each substream
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("KeyServerUrl",$param) and $param["KeyServerUrl"] !== null) {
            $this->KeyServerUrl = $param["KeyServerUrl"];
        }

        if (array_key_exists("Vector",$param) and $param["Vector"] !== null) {
            $this->Vector = $param["Vector"];
        }

        if (array_key_exists("EncryptionMethod",$param) and $param["EncryptionMethod"] !== null) {
            $this->EncryptionMethod = $param["EncryptionMethod"];
        }

        if (array_key_exists("EncryptionPreset",$param) and $param["EncryptionPreset"] !== null) {
            $this->EncryptionPreset = $param["EncryptionPreset"];
        }
    }
}
