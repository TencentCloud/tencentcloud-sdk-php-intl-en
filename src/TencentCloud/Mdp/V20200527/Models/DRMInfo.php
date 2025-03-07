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
namespace TencentCloud\Mdp\V20200527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DRM configure info.
 *
 * @method string getEncryptionMethod() Obtain Encryption method, optional values: `CBCS`, `CENC`.
 * @method void setEncryptionMethod(string $EncryptionMethod) Set Encryption method, optional values: `CBCS`, `CENC`.
 * @method array getDRMSystems() Obtain DRM system providers, when the encryption method is CBCS, the optional values are `PlayReady`, `Widevine`, `FairPlay`; when the encryption method is CENC, the oprional values are `PlayReady`, `Widevine`.
 * @method void setDRMSystems(array $DRMSystems) Set DRM system providers, when the encryption method is CBCS, the optional values are `PlayReady`, `Widevine`, `FairPlay`; when the encryption method is CENC, the oprional values are `PlayReady`, `Widevine`.
 * @method string getResourceID() Obtain The resource ID sent to the key server. It can contain 1 to 128 characters, including numbers, letters, underscores (_), and hyphens (-).
 * @method void setResourceID(string $ResourceID) Set The resource ID sent to the key server. It can contain 1 to 128 characters, including numbers, letters, underscores (_), and hyphens (-).
 * @method string getKeyServerUrl() Obtain Key server address; must start with https://.
 * @method void setKeyServerUrl(string $KeyServerUrl) Set Key server address; must start with https://.
 * @method string getVideoEncryptionPreset() Obtain Video encryption presets, options: 
`Preset Video 1` - Encrypts all video tracks with one key
`Preset Video 2` - Encrypts SD and HD video tracks with 2 different keys
`Preset Video 3` - Encrypts SD, HD and UHD video tracks with 3 different keys
`Preset Video 4` - Encrypts SD, HD, UHD1 and UHD2 video tracks with 4 different keys
`Preset Video 5` - Encrypts SD, HD1, HD2, UHD1 and UHD2 video tracks with 5 different keys
`Preset Video 6` - Encrypts SD, HD1, HD2, UHD video tracks with 4 different keys
`Preset Video 7` - Encrypts SD + HD1, HD2, UHD video tracks with 3 different keys
`Preset Video 8` - Encrypts SD + HD1, HD2, UHD1, UHD2 video tracks with 4 different keys
`Shared` - Encrypts all video and audio tracks with one key
`Unencrypted` - Does not encrypt any track
 * @method void setVideoEncryptionPreset(string $VideoEncryptionPreset) Set Video encryption presets, options: 
`Preset Video 1` - Encrypts all video tracks with one key
`Preset Video 2` - Encrypts SD and HD video tracks with 2 different keys
`Preset Video 3` - Encrypts SD, HD and UHD video tracks with 3 different keys
`Preset Video 4` - Encrypts SD, HD, UHD1 and UHD2 video tracks with 4 different keys
`Preset Video 5` - Encrypts SD, HD1, HD2, UHD1 and UHD2 video tracks with 5 different keys
`Preset Video 6` - Encrypts SD, HD1, HD2, UHD video tracks with 4 different keys
`Preset Video 7` - Encrypts SD + HD1, HD2, UHD video tracks with 3 different keys
`Preset Video 8` - Encrypts SD + HD1, HD2, UHD1, UHD2 video tracks with 4 different keys
`Shared` - Encrypts all video and audio tracks with one key
`Unencrypted` - Does not encrypt any track
 * @method string getAudioEncryptionPreset() Obtain Audio encryption presets, options:
`Preset Audio 1` - Encrypts all audio tracks with one key
`Preset Audio 2` - Encrypts STEREO and MULTICHANNEL audio tracks with 2 different keys
`Preset Audio 3` - Encrypts STEREO, MULTICHANNEL 3-6 and MULTICHANNEL 7 audio tracks with 3 different keys
`Shared` - Encrypts all video and audio tracks with one key
`Unencrypted` - Does not encrypt any track
 * @method void setAudioEncryptionPreset(string $AudioEncryptionPreset) Set Audio encryption presets, options:
`Preset Audio 1` - Encrypts all audio tracks with one key
`Preset Audio 2` - Encrypts STEREO and MULTICHANNEL audio tracks with 2 different keys
`Preset Audio 3` - Encrypts STEREO, MULTICHANNEL 3-6 and MULTICHANNEL 7 audio tracks with 3 different keys
`Shared` - Encrypts all video and audio tracks with one key
`Unencrypted` - Does not encrypt any track
 * @method string getConstantInitializationVector() Obtain Optional, used together with the key to encrypt the content; a 128-bit, 32-character, hexadecimal-encoded string.
 * @method void setConstantInitializationVector(string $ConstantInitializationVector) Set Optional, used together with the key to encrypt the content; a 128-bit, 32-character, hexadecimal-encoded string.
 * @method integer getKeyRotationInterval() Obtain Optional, specifies the rotation interval in seconds; empty, or an integer between 300-2592000.
 * @method void setKeyRotationInterval(integer $KeyRotationInterval) Set Optional, specifies the rotation interval in seconds; empty, or an integer between 300-2592000.
 */
class DRMInfo extends AbstractModel
{
    /**
     * @var string Encryption method, optional values: `CBCS`, `CENC`.
     */
    public $EncryptionMethod;

    /**
     * @var array DRM system providers, when the encryption method is CBCS, the optional values are `PlayReady`, `Widevine`, `FairPlay`; when the encryption method is CENC, the oprional values are `PlayReady`, `Widevine`.
     */
    public $DRMSystems;

    /**
     * @var string The resource ID sent to the key server. It can contain 1 to 128 characters, including numbers, letters, underscores (_), and hyphens (-).
     */
    public $ResourceID;

    /**
     * @var string Key server address; must start with https://.
     */
    public $KeyServerUrl;

    /**
     * @var string Video encryption presets, options: 
`Preset Video 1` - Encrypts all video tracks with one key
`Preset Video 2` - Encrypts SD and HD video tracks with 2 different keys
`Preset Video 3` - Encrypts SD, HD and UHD video tracks with 3 different keys
`Preset Video 4` - Encrypts SD, HD, UHD1 and UHD2 video tracks with 4 different keys
`Preset Video 5` - Encrypts SD, HD1, HD2, UHD1 and UHD2 video tracks with 5 different keys
`Preset Video 6` - Encrypts SD, HD1, HD2, UHD video tracks with 4 different keys
`Preset Video 7` - Encrypts SD + HD1, HD2, UHD video tracks with 3 different keys
`Preset Video 8` - Encrypts SD + HD1, HD2, UHD1, UHD2 video tracks with 4 different keys
`Shared` - Encrypts all video and audio tracks with one key
`Unencrypted` - Does not encrypt any track
     */
    public $VideoEncryptionPreset;

    /**
     * @var string Audio encryption presets, options:
`Preset Audio 1` - Encrypts all audio tracks with one key
`Preset Audio 2` - Encrypts STEREO and MULTICHANNEL audio tracks with 2 different keys
`Preset Audio 3` - Encrypts STEREO, MULTICHANNEL 3-6 and MULTICHANNEL 7 audio tracks with 3 different keys
`Shared` - Encrypts all video and audio tracks with one key
`Unencrypted` - Does not encrypt any track
     */
    public $AudioEncryptionPreset;

    /**
     * @var string Optional, used together with the key to encrypt the content; a 128-bit, 32-character, hexadecimal-encoded string.
     */
    public $ConstantInitializationVector;

    /**
     * @var integer Optional, specifies the rotation interval in seconds; empty, or an integer between 300-2592000.
     */
    public $KeyRotationInterval;

    /**
     * @param string $EncryptionMethod Encryption method, optional values: `CBCS`, `CENC`.
     * @param array $DRMSystems DRM system providers, when the encryption method is CBCS, the optional values are `PlayReady`, `Widevine`, `FairPlay`; when the encryption method is CENC, the oprional values are `PlayReady`, `Widevine`.
     * @param string $ResourceID The resource ID sent to the key server. It can contain 1 to 128 characters, including numbers, letters, underscores (_), and hyphens (-).
     * @param string $KeyServerUrl Key server address; must start with https://.
     * @param string $VideoEncryptionPreset Video encryption presets, options: 
`Preset Video 1` - Encrypts all video tracks with one key
`Preset Video 2` - Encrypts SD and HD video tracks with 2 different keys
`Preset Video 3` - Encrypts SD, HD and UHD video tracks with 3 different keys
`Preset Video 4` - Encrypts SD, HD, UHD1 and UHD2 video tracks with 4 different keys
`Preset Video 5` - Encrypts SD, HD1, HD2, UHD1 and UHD2 video tracks with 5 different keys
`Preset Video 6` - Encrypts SD, HD1, HD2, UHD video tracks with 4 different keys
`Preset Video 7` - Encrypts SD + HD1, HD2, UHD video tracks with 3 different keys
`Preset Video 8` - Encrypts SD + HD1, HD2, UHD1, UHD2 video tracks with 4 different keys
`Shared` - Encrypts all video and audio tracks with one key
`Unencrypted` - Does not encrypt any track
     * @param string $AudioEncryptionPreset Audio encryption presets, options:
`Preset Audio 1` - Encrypts all audio tracks with one key
`Preset Audio 2` - Encrypts STEREO and MULTICHANNEL audio tracks with 2 different keys
`Preset Audio 3` - Encrypts STEREO, MULTICHANNEL 3-6 and MULTICHANNEL 7 audio tracks with 3 different keys
`Shared` - Encrypts all video and audio tracks with one key
`Unencrypted` - Does not encrypt any track
     * @param string $ConstantInitializationVector Optional, used together with the key to encrypt the content; a 128-bit, 32-character, hexadecimal-encoded string.
     * @param integer $KeyRotationInterval Optional, specifies the rotation interval in seconds; empty, or an integer between 300-2592000.
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
        if (array_key_exists("EncryptionMethod",$param) and $param["EncryptionMethod"] !== null) {
            $this->EncryptionMethod = $param["EncryptionMethod"];
        }

        if (array_key_exists("DRMSystems",$param) and $param["DRMSystems"] !== null) {
            $this->DRMSystems = $param["DRMSystems"];
        }

        if (array_key_exists("ResourceID",$param) and $param["ResourceID"] !== null) {
            $this->ResourceID = $param["ResourceID"];
        }

        if (array_key_exists("KeyServerUrl",$param) and $param["KeyServerUrl"] !== null) {
            $this->KeyServerUrl = $param["KeyServerUrl"];
        }

        if (array_key_exists("VideoEncryptionPreset",$param) and $param["VideoEncryptionPreset"] !== null) {
            $this->VideoEncryptionPreset = $param["VideoEncryptionPreset"];
        }

        if (array_key_exists("AudioEncryptionPreset",$param) and $param["AudioEncryptionPreset"] !== null) {
            $this->AudioEncryptionPreset = $param["AudioEncryptionPreset"];
        }

        if (array_key_exists("ConstantInitializationVector",$param) and $param["ConstantInitializationVector"] !== null) {
            $this->ConstantInitializationVector = $param["ConstantInitializationVector"];
        }

        if (array_key_exists("KeyRotationInterval",$param) and $param["KeyRotationInterval"] !== null) {
            $this->KeyRotationInterval = $param["KeyRotationInterval"];
        }
    }
}
