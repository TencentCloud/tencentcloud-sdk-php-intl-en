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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Custom DRM key.
 *
 * @method string getKey() Obtain DRM key, which is a 32-bit hexadecimal string.
Note: uppercase letters in the string will be automatically converted to lowercase ones.
 * @method void setKey(string $Key) Set DRM key, which is a 32-bit hexadecimal string.
Note: uppercase letters in the string will be automatically converted to lowercase ones.
 * @method string getTrack() Obtain Widevine encryption is required. Selectable options: SD/HD/UHD1/UHD2/AUDIO/ALL.
Among them, ALL represents select ALL. If ALL is specified, you cannot add other tracks.
 * @method void setTrack(string $Track) Set Widevine encryption is required. Selectable options: SD/HD/UHD1/UHD2/AUDIO/ALL.
Among them, ALL represents select ALL. If ALL is specified, you cannot add other tracks.
 * @method string getKeyId() Obtain KeyId for Widevine encryption, a 32-bit length hexadecimal string.
Note: The string will be modified to lowercase.
 * @method void setKeyId(string $KeyId) Set KeyId for Widevine encryption, a 32-bit length hexadecimal string.
Note: The string will be modified to lowercase.
 * @method string getIv() Obtain Iv for AES encryption in Fairplay, a 32-bit length hexadecimal string.
Iv parsing reference
https://tools.ietf.org/html/rfc3826
Note: The string will be modified to lowercase.
 * @method void setIv(string $Iv) Set Iv for AES encryption in Fairplay, a 32-bit length hexadecimal string.
Iv parsing reference
https://tools.ietf.org/html/rfc3826
Note: The string will be modified to lowercase.
 * @method string getKeyUri() Obtain uri of the license server. AES128 is used. Can be empty.
 * @method void setKeyUri(string $KeyUri) Set uri of the license server. AES128 is used. Can be empty.
 */
class DrmKey extends AbstractModel
{
    /**
     * @var string DRM key, which is a 32-bit hexadecimal string.
Note: uppercase letters in the string will be automatically converted to lowercase ones.
     */
    public $Key;

    /**
     * @var string Widevine encryption is required. Selectable options: SD/HD/UHD1/UHD2/AUDIO/ALL.
Among them, ALL represents select ALL. If ALL is specified, you cannot add other tracks.
     */
    public $Track;

    /**
     * @var string KeyId for Widevine encryption, a 32-bit length hexadecimal string.
Note: The string will be modified to lowercase.
     */
    public $KeyId;

    /**
     * @var string Iv for AES encryption in Fairplay, a 32-bit length hexadecimal string.
Iv parsing reference
https://tools.ietf.org/html/rfc3826
Note: The string will be modified to lowercase.
     */
    public $Iv;

    /**
     * @var string uri of the license server. AES128 is used. Can be empty.
     */
    public $KeyUri;

    /**
     * @param string $Key DRM key, which is a 32-bit hexadecimal string.
Note: uppercase letters in the string will be automatically converted to lowercase ones.
     * @param string $Track Widevine encryption is required. Selectable options: SD/HD/UHD1/UHD2/AUDIO/ALL.
Among them, ALL represents select ALL. If ALL is specified, you cannot add other tracks.
     * @param string $KeyId KeyId for Widevine encryption, a 32-bit length hexadecimal string.
Note: The string will be modified to lowercase.
     * @param string $Iv Iv for AES encryption in Fairplay, a 32-bit length hexadecimal string.
Iv parsing reference
https://tools.ietf.org/html/rfc3826
Note: The string will be modified to lowercase.
     * @param string $KeyUri uri of the license server. AES128 is used. Can be empty.
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
