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
 * Third-party DRM manufacturer encrypted information.
 *
 * @method string getResourceId() Obtain <p>Resource tagging. This field content is user-customized. It supports 1-128 characters, including numbers, letters, underscores (_), and hyphens (-). This field corresponds to the cid field in the Speke request. Note: Different DRM manufacturers have differences in limitations for this field (for example: Huawei Xloud does not support underscores (_) in this field). For specific rules, contact the DRM manufacturer for confirmation.</p>
 * @method void setResourceId(string $ResourceId) Set <p>Resource tagging. This field content is user-customized. It supports 1-128 characters, including numbers, letters, underscores (_), and hyphens (-). This field corresponds to the cid field in the Speke request. Note: Different DRM manufacturers have differences in limitations for this field (for example: Huawei Xloud does not support underscores (_) in this field). For specific rules, contact the DRM manufacturer for confirmation.</p>
 * @method string getKeyServerUrl() Obtain <p>DRM manufacturer access address. The field content is obtained from the DRM manufacturer. Note: Different DRM manufacturers have different limits on the number of substreams. For example, PallyCon limits the number to a maximum of 5 substreams, while DRMtoday only supports up to 9 substream encryptions.</p>
 * @method void setKeyServerUrl(string $KeyServerUrl) Set <p>DRM manufacturer access address. The field content is obtained from the DRM manufacturer. Note: Different DRM manufacturers have different limits on the number of substreams. For example, PallyCon limits the number to a maximum of 5 substreams, while DRMtoday only supports up to 9 substream encryptions.</p>
 * @method string getVector() Obtain <p>Initialization vector (32-byte hexadecimal string) for encryption. The field content is user-customized.</p>
 * @method void setVector(string $Vector) Set <p>Initialization vector (32-byte hexadecimal string) for encryption. The field content is user-customized.</p>
 * @method string getEncryptionMethod() Obtain <p>Encryption method. Available values:<br>cbcs: supports PlayReady, Widevine, FairPlay, Widevine+FairPlay, Widevine+PlayReady, PlayReady+FairPlay, Widevine+PlayReady+FairPlay;<br>cenc: supports PlayReady, Widevine, Widevine+PlayReady;<br>If left blank, FairPlay defaults to cbcs;<br>PlayReady and Widevine default to cenc;<br>Widevine+FairPlay, PlayReady+FairPlay, and Widevine+PlayReady+FairPlay default to cbcs;<br>Widevine+PlayReady defaults to cenc;</p>
 * @method void setEncryptionMethod(string $EncryptionMethod) Set <p>Encryption method. Available values:<br>cbcs: supports PlayReady, Widevine, FairPlay, Widevine+FairPlay, Widevine+PlayReady, PlayReady+FairPlay, Widevine+PlayReady+FairPlay;<br>cenc: supports PlayReady, Widevine, Widevine+PlayReady;<br>If left blank, FairPlay defaults to cbcs;<br>PlayReady and Widevine default to cenc;<br>Widevine+FairPlay, PlayReady+FairPlay, and Widevine+PlayReady+FairPlay default to cbcs;<br>Widevine+PlayReady defaults to cenc;</p>
 * @method string getEncryptionPreset() Obtain <p>Substream encryption rules, default preset 0<br>preset 0: use the same key to encrypt all substreams;<br>preset 1: use different keys to encrypt each substream;</p>
 * @method void setEncryptionPreset(string $EncryptionPreset) Set <p>Substream encryption rules, default preset 0<br>preset 0: use the same key to encrypt all substreams;<br>preset 1: use different keys to encrypt each substream;</p>
 * @method string getKeyAcquireMode() Obtain <p>DRM manufacturer request method.</p><p>Enumeration value:</p><ul><li>POST: Most DRM manufacturers use the POST method.</li><li>GET: Partial DRM manufacturers support the GET method. At the time of request using this method, the KeyServerUrl field needs to include all request information.</li></ul><p>Default value: POST</p>
 * @method void setKeyAcquireMode(string $KeyAcquireMode) Set <p>DRM manufacturer request method.</p><p>Enumeration value:</p><ul><li>POST: Most DRM manufacturers use the POST method.</li><li>GET: Partial DRM manufacturers support the GET method. At the time of request using this method, the KeyServerUrl field needs to include all request information.</li></ul><p>Default value: POST</p>
 */
class SPEKEDrm extends AbstractModel
{
    /**
     * @var string <p>Resource tagging. This field content is user-customized. It supports 1-128 characters, including numbers, letters, underscores (_), and hyphens (-). This field corresponds to the cid field in the Speke request. Note: Different DRM manufacturers have differences in limitations for this field (for example: Huawei Xloud does not support underscores (_) in this field). For specific rules, contact the DRM manufacturer for confirmation.</p>
     */
    public $ResourceId;

    /**
     * @var string <p>DRM manufacturer access address. The field content is obtained from the DRM manufacturer. Note: Different DRM manufacturers have different limits on the number of substreams. For example, PallyCon limits the number to a maximum of 5 substreams, while DRMtoday only supports up to 9 substream encryptions.</p>
     */
    public $KeyServerUrl;

    /**
     * @var string <p>Initialization vector (32-byte hexadecimal string) for encryption. The field content is user-customized.</p>
     */
    public $Vector;

    /**
     * @var string <p>Encryption method. Available values:<br>cbcs: supports PlayReady, Widevine, FairPlay, Widevine+FairPlay, Widevine+PlayReady, PlayReady+FairPlay, Widevine+PlayReady+FairPlay;<br>cenc: supports PlayReady, Widevine, Widevine+PlayReady;<br>If left blank, FairPlay defaults to cbcs;<br>PlayReady and Widevine default to cenc;<br>Widevine+FairPlay, PlayReady+FairPlay, and Widevine+PlayReady+FairPlay default to cbcs;<br>Widevine+PlayReady defaults to cenc;</p>
     */
    public $EncryptionMethod;

    /**
     * @var string <p>Substream encryption rules, default preset 0<br>preset 0: use the same key to encrypt all substreams;<br>preset 1: use different keys to encrypt each substream;</p>
     */
    public $EncryptionPreset;

    /**
     * @var string <p>DRM manufacturer request method.</p><p>Enumeration value:</p><ul><li>POST: Most DRM manufacturers use the POST method.</li><li>GET: Partial DRM manufacturers support the GET method. At the time of request using this method, the KeyServerUrl field needs to include all request information.</li></ul><p>Default value: POST</p>
     */
    public $KeyAcquireMode;

    /**
     * @param string $ResourceId <p>Resource tagging. This field content is user-customized. It supports 1-128 characters, including numbers, letters, underscores (_), and hyphens (-). This field corresponds to the cid field in the Speke request. Note: Different DRM manufacturers have differences in limitations for this field (for example: Huawei Xloud does not support underscores (_) in this field). For specific rules, contact the DRM manufacturer for confirmation.</p>
     * @param string $KeyServerUrl <p>DRM manufacturer access address. The field content is obtained from the DRM manufacturer. Note: Different DRM manufacturers have different limits on the number of substreams. For example, PallyCon limits the number to a maximum of 5 substreams, while DRMtoday only supports up to 9 substream encryptions.</p>
     * @param string $Vector <p>Initialization vector (32-byte hexadecimal string) for encryption. The field content is user-customized.</p>
     * @param string $EncryptionMethod <p>Encryption method. Available values:<br>cbcs: supports PlayReady, Widevine, FairPlay, Widevine+FairPlay, Widevine+PlayReady, PlayReady+FairPlay, Widevine+PlayReady+FairPlay;<br>cenc: supports PlayReady, Widevine, Widevine+PlayReady;<br>If left blank, FairPlay defaults to cbcs;<br>PlayReady and Widevine default to cenc;<br>Widevine+FairPlay, PlayReady+FairPlay, and Widevine+PlayReady+FairPlay default to cbcs;<br>Widevine+PlayReady defaults to cenc;</p>
     * @param string $EncryptionPreset <p>Substream encryption rules, default preset 0<br>preset 0: use the same key to encrypt all substreams;<br>preset 1: use different keys to encrypt each substream;</p>
     * @param string $KeyAcquireMode <p>DRM manufacturer request method.</p><p>Enumeration value:</p><ul><li>POST: Most DRM manufacturers use the POST method.</li><li>GET: Partial DRM manufacturers support the GET method. At the time of request using this method, the KeyServerUrl field needs to include all request information.</li></ul><p>Default value: POST</p>
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

        if (array_key_exists("KeyAcquireMode",$param) and $param["KeyAcquireMode"] !== null) {
            $this->KeyAcquireMode = $param["KeyAcquireMode"];
        }
    }
}
