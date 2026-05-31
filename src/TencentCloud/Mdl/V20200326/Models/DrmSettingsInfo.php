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
 * DRM configuration information, which takes effect only for HLS and DASH.
 *
 * @method string getState() Obtain Whether DRM encryption is enabled. Option: CLOSE/OPEN. Default: CLOSE.
Currently only support HLS/DASH/HLS_ARCHIVE/DASH_ARCHIVE/HLS_MEDIAPACKAGE/DASH_MEDIAPACKAGE.
 * @method void setState(string $State) Set Whether DRM encryption is enabled. Option: CLOSE/OPEN. Default: CLOSE.
Currently only support HLS/DASH/HLS_ARCHIVE/DASH_ARCHIVE/HLS_MEDIAPACKAGE/DASH_MEDIAPACKAGE.
 * @method string getScheme() Obtain Optional [CustomDRMKeys|SDMCDRM], defaults to CustomDRMKeys.
CustomDRMKeys refers to the custom encryption key.
SDMCDRM refers to the DRM key management system using SMDC.
 * @method void setScheme(string $Scheme) Set Optional [CustomDRMKeys|SDMCDRM], defaults to CustomDRMKeys.
CustomDRMKeys refers to the custom encryption key.
SDMCDRM refers to the DRM key management system using SMDC.
 * @method string getContentId() Obtain Scheme is CustomDRMKeys, required, filled in by the user.
Scheme is SDMCDRM, optional, defaults to ChannelId. The format supports digits, upper- and lower-case letters, hyphens, and underscores, with a length of [1, 36].
 * @method void setContentId(string $ContentId) Set Scheme is CustomDRMKeys, required, filled in by the user.
Scheme is SDMCDRM, optional, defaults to ChannelId. The format supports digits, upper- and lower-case letters, hyphens, and underscores, with a length of [1, 36].
 * @method array getKeys() Obtain Required when Scheme is CustomDRMKeys. The content is the key customized by users.
 * @method void setKeys(array $Keys) Set Required when Scheme is CustomDRMKeys. The content is the key customized by users.
 * @method SDMCSettingsInfo getSDMCSettings() Obtain SDMC key configuration information, used when Scheme is SDMCDRM.
 * @method void setSDMCSettings(SDMCSettingsInfo $SDMCSettings) Set SDMC key configuration information, used when Scheme is SDMCDRM.
 * @method string getDrmType() Obtain Optional type:
`FAIRPLAY` `WIDEVINE` `PLAYREADY` `AES128`
HLS-TS supports `FAIRPLAY` and `AES128`.
HLS-FMP4 supports `FAIRPLAY`, `WIDEVINE`, `PLAYREADY`, `AES128`, and permutation and combination of two or three from `FAIRPLAY`, `WIDEVINE`, `PLAYREADY` (use commas to concatenate, such as "FAIRPLAY,WIDEVINE,PLAYREADY").
DASH supports `WIDEVINE`, `PLAYREADY`, and the permutation and combination of `PLAYREADY` and `WIDEVINE` (use commas to concatenate, such as "PLAYREADY,WIDEVINE").
 * @method void setDrmType(string $DrmType) Set Optional type:
`FAIRPLAY` `WIDEVINE` `PLAYREADY` `AES128`
HLS-TS supports `FAIRPLAY` and `AES128`.
HLS-FMP4 supports `FAIRPLAY`, `WIDEVINE`, `PLAYREADY`, `AES128`, and permutation and combination of two or three from `FAIRPLAY`, `WIDEVINE`, `PLAYREADY` (use commas to concatenate, such as "FAIRPLAY,WIDEVINE,PLAYREADY").
DASH supports `WIDEVINE`, `PLAYREADY`, and the permutation and combination of `PLAYREADY` and `WIDEVINE` (use commas to concatenate, such as "PLAYREADY,WIDEVINE").
 */
class DrmSettingsInfo extends AbstractModel
{
    /**
     * @var string Whether DRM encryption is enabled. Option: CLOSE/OPEN. Default: CLOSE.
Currently only support HLS/DASH/HLS_ARCHIVE/DASH_ARCHIVE/HLS_MEDIAPACKAGE/DASH_MEDIAPACKAGE.
     */
    public $State;

    /**
     * @var string Optional [CustomDRMKeys|SDMCDRM], defaults to CustomDRMKeys.
CustomDRMKeys refers to the custom encryption key.
SDMCDRM refers to the DRM key management system using SMDC.
     */
    public $Scheme;

    /**
     * @var string Scheme is CustomDRMKeys, required, filled in by the user.
Scheme is SDMCDRM, optional, defaults to ChannelId. The format supports digits, upper- and lower-case letters, hyphens, and underscores, with a length of [1, 36].
     */
    public $ContentId;

    /**
     * @var array Required when Scheme is CustomDRMKeys. The content is the key customized by users.
     */
    public $Keys;

    /**
     * @var SDMCSettingsInfo SDMC key configuration information, used when Scheme is SDMCDRM.
     */
    public $SDMCSettings;

    /**
     * @var string Optional type:
`FAIRPLAY` `WIDEVINE` `PLAYREADY` `AES128`
HLS-TS supports `FAIRPLAY` and `AES128`.
HLS-FMP4 supports `FAIRPLAY`, `WIDEVINE`, `PLAYREADY`, `AES128`, and permutation and combination of two or three from `FAIRPLAY`, `WIDEVINE`, `PLAYREADY` (use commas to concatenate, such as "FAIRPLAY,WIDEVINE,PLAYREADY").
DASH supports `WIDEVINE`, `PLAYREADY`, and the permutation and combination of `PLAYREADY` and `WIDEVINE` (use commas to concatenate, such as "PLAYREADY,WIDEVINE").
     */
    public $DrmType;

    /**
     * @param string $State Whether DRM encryption is enabled. Option: CLOSE/OPEN. Default: CLOSE.
Currently only support HLS/DASH/HLS_ARCHIVE/DASH_ARCHIVE/HLS_MEDIAPACKAGE/DASH_MEDIAPACKAGE.
     * @param string $Scheme Optional [CustomDRMKeys|SDMCDRM], defaults to CustomDRMKeys.
CustomDRMKeys refers to the custom encryption key.
SDMCDRM refers to the DRM key management system using SMDC.
     * @param string $ContentId Scheme is CustomDRMKeys, required, filled in by the user.
Scheme is SDMCDRM, optional, defaults to ChannelId. The format supports digits, upper- and lower-case letters, hyphens, and underscores, with a length of [1, 36].
     * @param array $Keys Required when Scheme is CustomDRMKeys. The content is the key customized by users.
     * @param SDMCSettingsInfo $SDMCSettings SDMC key configuration information, used when Scheme is SDMCDRM.
     * @param string $DrmType Optional type:
`FAIRPLAY` `WIDEVINE` `PLAYREADY` `AES128`
HLS-TS supports `FAIRPLAY` and `AES128`.
HLS-FMP4 supports `FAIRPLAY`, `WIDEVINE`, `PLAYREADY`, `AES128`, and permutation and combination of two or three from `FAIRPLAY`, `WIDEVINE`, `PLAYREADY` (use commas to concatenate, such as "FAIRPLAY,WIDEVINE,PLAYREADY").
DASH supports `WIDEVINE`, `PLAYREADY`, and the permutation and combination of `PLAYREADY` and `WIDEVINE` (use commas to concatenate, such as "PLAYREADY,WIDEVINE").
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
        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("Scheme",$param) and $param["Scheme"] !== null) {
            $this->Scheme = $param["Scheme"];
        }

        if (array_key_exists("ContentId",$param) and $param["ContentId"] !== null) {
            $this->ContentId = $param["ContentId"];
        }

        if (array_key_exists("Keys",$param) and $param["Keys"] !== null) {
            $this->Keys = [];
            foreach ($param["Keys"] as $key => $value){
                $obj = new DrmKey();
                $obj->deserialize($value);
                array_push($this->Keys, $obj);
            }
        }

        if (array_key_exists("SDMCSettings",$param) and $param["SDMCSettings"] !== null) {
            $this->SDMCSettings = new SDMCSettingsInfo();
            $this->SDMCSettings->deserialize($param["SDMCSettings"]);
        }

        if (array_key_exists("DrmType",$param) and $param["DrmType"] !== null) {
            $this->DrmType = $param["DrmType"];
        }
    }
}
