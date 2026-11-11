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
 * Encryption information of the external DRM vendor.
 *
 * @method string getResourceId() Obtain <p>Resource tagging. The field content is user-customized. It supports 1-128 characters, including numbers, letters, underscores (_), and hyphens (-). This field corresponds to the cid field in the Speke request. Note: Different DRM manufacturers have differences in the limits for this field (for example, SDMC does not support underscores in this field). For specific rules, please contact the DRM manufacturer for confirmation.</p>
 * @method void setResourceId(string $ResourceId) Set <p>Resource tagging. The field content is user-customized. It supports 1-128 characters, including numbers, letters, underscores (_), and hyphens (-). This field corresponds to the cid field in the Speke request. Note: Different DRM manufacturers have differences in the limits for this field (for example, SDMC does not support underscores in this field). For specific rules, please contact the DRM manufacturer for confirmation.</p>
 * @method string getKeyServerUrl() Obtain <p>DRM manufacturer access address. This field content is obtained from the DRM manufacturer. Note: Different DRM manufacturers have different limits on the number of substreams. For example, PallyCon allows no more than 5 substreams, while DRMtoday supports up to 9 substreams for encryption.</p>
 * @method void setKeyServerUrl(string $KeyServerUrl) Set <p>DRM manufacturer access address. This field content is obtained from the DRM manufacturer. Note: Different DRM manufacturers have different limits on the number of substreams. For example, PallyCon allows no more than 5 substreams, while DRMtoday supports up to 9 substreams for encryption.</p>
 * @method string getVector() Obtain <p>Encryption initialization vector (32-byte hexadecimal string). This field content is user-customized.</p>
 * @method void setVector(string $Vector) Set <p>Encryption initialization vector (32-byte hexadecimal string). This field content is user-customized.</p>
 * @method string getEncryptionMethod() Obtain <p>Encryption method. Available values:<br>cbcs: PlayReady, Widevine, FairPlay, Widevine+FairPlay, Widevine+PlayReady, PlayReady+FairPlay, Widevine+PlayReady+FairPlay are supported;<br>cenc: PlayReady, Widevine, Widevine+PlayReady are supported;<br>If left blank, cbcs is used for FairPlay by default;<br>cenc is used for PlayReady and Widevine by default;<br>cbcs is used for Widevine+FairPlay, PlayReady+FairPlay, Widevine+PlayReady+FairPlay by default;<br>cenc is used for Widevine+PlayReady by default;</p>
 * @method void setEncryptionMethod(string $EncryptionMethod) Set <p>Encryption method. Available values:<br>cbcs: PlayReady, Widevine, FairPlay, Widevine+FairPlay, Widevine+PlayReady, PlayReady+FairPlay, Widevine+PlayReady+FairPlay are supported;<br>cenc: PlayReady, Widevine, Widevine+PlayReady are supported;<br>If left blank, cbcs is used for FairPlay by default;<br>cenc is used for PlayReady and Widevine by default;<br>cbcs is used for Widevine+FairPlay, PlayReady+FairPlay, Widevine+PlayReady+FairPlay by default;<br>cenc is used for Widevine+PlayReady by default;</p>
 * @method string getEncryptionPreset() Obtain <p>Substream encryption rule. Default: preset 0<br>preset 0: use the same key to encrypt all substreams;<br>preset 1: use different keys to encrypt each substream;</p>
 * @method void setEncryptionPreset(string $EncryptionPreset) Set <p>Substream encryption rule. Default: preset 0<br>preset 0: use the same key to encrypt all substreams;<br>preset 1: use different keys to encrypt each substream;</p>
 * @method string getKeyAcquireMode() Obtain <p>Request method of the DRM manufacturer.</p><p>Enumeration values:</p><ul><li>POST: Most DRM manufacturers use the POST method for requests.</li><li>GET: Some DRM manufacturers support the GET method for requests. When using this method, request information needs to be included in the KeyServerUrl field.</li></ul><p>Default value: POST</p>
 * @method void setKeyAcquireMode(string $KeyAcquireMode) Set <p>Request method of the DRM manufacturer.</p><p>Enumeration values:</p><ul><li>POST: Most DRM manufacturers use the POST method for requests.</li><li>GET: Some DRM manufacturers support the GET method for requests. When using this method, request information needs to be included in the KeyServerUrl field.</li></ul><p>Default value: POST</p>
 */
class SPEKEDrm extends AbstractModel
{
    /**
     * @var string <p>Resource tagging. The field content is user-customized. It supports 1-128 characters, including numbers, letters, underscores (_), and hyphens (-). This field corresponds to the cid field in the Speke request. Note: Different DRM manufacturers have differences in the limits for this field (for example, SDMC does not support underscores in this field). For specific rules, please contact the DRM manufacturer for confirmation.</p>
     */
    public $ResourceId;

    /**
     * @var string <p>DRM manufacturer access address. This field content is obtained from the DRM manufacturer. Note: Different DRM manufacturers have different limits on the number of substreams. For example, PallyCon allows no more than 5 substreams, while DRMtoday supports up to 9 substreams for encryption.</p>
     */
    public $KeyServerUrl;

    /**
     * @var string <p>Encryption initialization vector (32-byte hexadecimal string). This field content is user-customized.</p>
     */
    public $Vector;

    /**
     * @var string <p>Encryption method. Available values:<br>cbcs: PlayReady, Widevine, FairPlay, Widevine+FairPlay, Widevine+PlayReady, PlayReady+FairPlay, Widevine+PlayReady+FairPlay are supported;<br>cenc: PlayReady, Widevine, Widevine+PlayReady are supported;<br>If left blank, cbcs is used for FairPlay by default;<br>cenc is used for PlayReady and Widevine by default;<br>cbcs is used for Widevine+FairPlay, PlayReady+FairPlay, Widevine+PlayReady+FairPlay by default;<br>cenc is used for Widevine+PlayReady by default;</p>
     */
    public $EncryptionMethod;

    /**
     * @var string <p>Substream encryption rule. Default: preset 0<br>preset 0: use the same key to encrypt all substreams;<br>preset 1: use different keys to encrypt each substream;</p>
     */
    public $EncryptionPreset;

    /**
     * @var string <p>Request method of the DRM manufacturer.</p><p>Enumeration values:</p><ul><li>POST: Most DRM manufacturers use the POST method for requests.</li><li>GET: Some DRM manufacturers support the GET method for requests. When using this method, request information needs to be included in the KeyServerUrl field.</li></ul><p>Default value: POST</p>
     */
    public $KeyAcquireMode;

    /**
     * @param string $ResourceId <p>Resource tagging. The field content is user-customized. It supports 1-128 characters, including numbers, letters, underscores (_), and hyphens (-). This field corresponds to the cid field in the Speke request. Note: Different DRM manufacturers have differences in the limits for this field (for example, SDMC does not support underscores in this field). For specific rules, please contact the DRM manufacturer for confirmation.</p>
     * @param string $KeyServerUrl <p>DRM manufacturer access address. This field content is obtained from the DRM manufacturer. Note: Different DRM manufacturers have different limits on the number of substreams. For example, PallyCon allows no more than 5 substreams, while DRMtoday supports up to 9 substreams for encryption.</p>
     * @param string $Vector <p>Encryption initialization vector (32-byte hexadecimal string). This field content is user-customized.</p>
     * @param string $EncryptionMethod <p>Encryption method. Available values:<br>cbcs: PlayReady, Widevine, FairPlay, Widevine+FairPlay, Widevine+PlayReady, PlayReady+FairPlay, Widevine+PlayReady+FairPlay are supported;<br>cenc: PlayReady, Widevine, Widevine+PlayReady are supported;<br>If left blank, cbcs is used for FairPlay by default;<br>cenc is used for PlayReady and Widevine by default;<br>cbcs is used for Widevine+FairPlay, PlayReady+FairPlay, Widevine+PlayReady+FairPlay by default;<br>cenc is used for Widevine+PlayReady by default;</p>
     * @param string $EncryptionPreset <p>Substream encryption rule. Default: preset 0<br>preset 0: use the same key to encrypt all substreams;<br>preset 1: use different keys to encrypt each substream;</p>
     * @param string $KeyAcquireMode <p>Request method of the DRM manufacturer.</p><p>Enumeration values:</p><ul><li>POST: Most DRM manufacturers use the POST method for requests.</li><li>GET: Some DRM manufacturers support the GET method for requests. When using this method, request information needs to be included in the KeyServerUrl field.</li></ul><p>Default value: POST</p>
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
