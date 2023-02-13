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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Custom DRM key.
 *
 * @method string getKey() Obtain DRM key, which is a 32-bit hexadecimal string.
Note: uppercase letters in the string will be automatically converted to lowercase ones.
 * @method void setKey(string $Key) Set DRM key, which is a 32-bit hexadecimal string.
Note: uppercase letters in the string will be automatically converted to lowercase ones.
 * @method string getTrack() Obtain Required for Widevine encryption. Valid values: SD, HD, UHD1, UHD2, AUDIO, ALL.
ALL refers to all tracks. If this parameter is set to ALL, no other tracks can be added.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTrack(string $Track) Set Required for Widevine encryption. Valid values: SD, HD, UHD1, UHD2, AUDIO, ALL.
ALL refers to all tracks. If this parameter is set to ALL, no other tracks can be added.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getKeyId() Obtain Required for Widevine encryption. It is a 32-bit hexadecimal string.
Note: uppercase letters in the string will be automatically converted to lowercase ones.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setKeyId(string $KeyId) Set Required for Widevine encryption. It is a 32-bit hexadecimal string.
Note: uppercase letters in the string will be automatically converted to lowercase ones.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getIv() Obtain Required when FairPlay uses the AES encryption method. It is a 32-bit hexadecimal string.
For more information about this parameter, please see: 
https://tools.ietf.org/html/rfc3826
Note: uppercase letters in the string will be automatically converted to lowercase ones.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setIv(string $Iv) Set Required when FairPlay uses the AES encryption method. It is a 32-bit hexadecimal string.
For more information about this parameter, please see: 
https://tools.ietf.org/html/rfc3826
Note: uppercase letters in the string will be automatically converted to lowercase ones.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getKeyUri() Obtain The URI of the license server when AES-128 is used. This parameter may be empty.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setKeyUri(string $KeyUri) Set The URI of the license server when AES-128 is used. This parameter may be empty.
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class DrmKey extends AbstractModel
{
    /**
     * @var string DRM key, which is a 32-bit hexadecimal string.
Note: uppercase letters in the string will be automatically converted to lowercase ones.
     */
    public $Key;

    /**
     * @var string Required for Widevine encryption. Valid values: SD, HD, UHD1, UHD2, AUDIO, ALL.
ALL refers to all tracks. If this parameter is set to ALL, no other tracks can be added.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Track;

    /**
     * @var string Required for Widevine encryption. It is a 32-bit hexadecimal string.
Note: uppercase letters in the string will be automatically converted to lowercase ones.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $KeyId;

    /**
     * @var string Required when FairPlay uses the AES encryption method. It is a 32-bit hexadecimal string.
For more information about this parameter, please see: 
https://tools.ietf.org/html/rfc3826
Note: uppercase letters in the string will be automatically converted to lowercase ones.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Iv;

    /**
     * @var string The URI of the license server when AES-128 is used. This parameter may be empty.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $KeyUri;

    /**
     * @param string $Key DRM key, which is a 32-bit hexadecimal string.
Note: uppercase letters in the string will be automatically converted to lowercase ones.
     * @param string $Track Required for Widevine encryption. Valid values: SD, HD, UHD1, UHD2, AUDIO, ALL.
ALL refers to all tracks. If this parameter is set to ALL, no other tracks can be added.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $KeyId Required for Widevine encryption. It is a 32-bit hexadecimal string.
Note: uppercase letters in the string will be automatically converted to lowercase ones.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Iv Required when FairPlay uses the AES encryption method. It is a 32-bit hexadecimal string.
For more information about this parameter, please see: 
https://tools.ietf.org/html/rfc3826
Note: uppercase letters in the string will be automatically converted to lowercase ones.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $KeyUri The URI of the license server when AES-128 is used. This parameter may be empty.
Note: This field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Track",$param) and $param["Track"] !== null) {
            $this->Track = $param["Track"];
        }

        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("Iv",$param) and $param["Iv"] !== null) {
            $this->Iv = $param["Iv"];
        }

        if (array_key_exists("KeyUri",$param) and $param["KeyUri"] !== null) {
            $this->KeyUri = $param["KeyUri"];
        }
    }
}
