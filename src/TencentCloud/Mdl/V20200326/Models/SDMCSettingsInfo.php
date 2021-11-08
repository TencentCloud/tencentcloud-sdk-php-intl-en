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
 * SDMC DRM configuration information. This parameter is valid only when `Scheme` is set to `SDMCDRM`.
 *
 * @method string getUid() Obtain User ID in the SDMC DRM system
 * @method void setUid(string $Uid) Set User ID in the SDMC DRM system
 * @method integer getTracks() Obtain Tracks of the SDMC DRM system. This parameter is valid for DASH output groups.
`1`: audio
`2`: SD
`4`: HD
`8`: UHD1
`16`: UHD2

Default value: `31` (audio + SD + HD + UHD1 + UHD2)
 * @method void setTracks(integer $Tracks) Set Tracks of the SDMC DRM system. This parameter is valid for DASH output groups.
`1`: audio
`2`: SD
`4`: HD
`8`: UHD1
`16`: UHD2

Default value: `31` (audio + SD + HD + UHD1 + UHD2)
 * @method string getSecretId() Obtain Key ID in the SDMC DRM system; required
 * @method void setSecretId(string $SecretId) Set Key ID in the SDMC DRM system; required
 * @method string getSecretKey() Obtain Key in the SDMC DRM system; required
 * @method void setSecretKey(string $SecretKey) Set Key in the SDMC DRM system; required
 * @method string getUrl() Obtain Key request URL of the SDMC DRM system, which is `https://uat.multidrm.tv/cpix/2.2/getcontentkey` by default
 * @method void setUrl(string $Url) Set Key request URL of the SDMC DRM system, which is `https://uat.multidrm.tv/cpix/2.2/getcontentkey` by default
 * @method string getTokenName() Obtain Token name in an SDMC key request URL, which is `token` by default
 * @method void setTokenName(string $TokenName) Set Token name in an SDMC key request URL, which is `token` by default
 */
class SDMCSettingsInfo extends AbstractModel
{
    /**
     * @var string User ID in the SDMC DRM system
     */
    public $Uid;

    /**
     * @var integer Tracks of the SDMC DRM system. This parameter is valid for DASH output groups.
`1`: audio
`2`: SD
`4`: HD
`8`: UHD1
`16`: UHD2

Default value: `31` (audio + SD + HD + UHD1 + UHD2)
     */
    public $Tracks;

    /**
     * @var string Key ID in the SDMC DRM system; required
     */
    public $SecretId;

    /**
     * @var string Key in the SDMC DRM system; required
     */
    public $SecretKey;

    /**
     * @var string Key request URL of the SDMC DRM system, which is `https://uat.multidrm.tv/cpix/2.2/getcontentkey` by default
     */
    public $Url;

    /**
     * @var string Token name in an SDMC key request URL, which is `token` by default
     */
    public $TokenName;

    /**
     * @param string $Uid User ID in the SDMC DRM system
     * @param integer $Tracks Tracks of the SDMC DRM system. This parameter is valid for DASH output groups.
`1`: audio
`2`: SD
`4`: HD
`8`: UHD1
`16`: UHD2

Default value: `31` (audio + SD + HD + UHD1 + UHD2)
     * @param string $SecretId Key ID in the SDMC DRM system; required
     * @param string $SecretKey Key in the SDMC DRM system; required
     * @param string $Url Key request URL of the SDMC DRM system, which is `https://uat.multidrm.tv/cpix/2.2/getcontentkey` by default
     * @param string $TokenName Token name in an SDMC key request URL, which is `token` by default
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

        if (array_key_exists("Tracks",$param) and $param["Tracks"] !== null) {
            $this->Tracks = $param["Tracks"];
        }

        if (array_key_exists("SecretId",$param) and $param["SecretId"] !== null) {
            $this->SecretId = $param["SecretId"];
        }

        if (array_key_exists("SecretKey",$param) and $param["SecretKey"] !== null) {
            $this->SecretKey = $param["SecretKey"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("TokenName",$param) and $param["TokenName"] !== null) {
            $this->TokenName = $param["TokenName"];
        }
    }
}
