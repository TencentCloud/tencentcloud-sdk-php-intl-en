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
 * DRM configuration information, which takes effect only for HLS and DASH.
 *
 * @method string getState() Obtain Whether to enable DRM encryption. Valid values: `CLOSE` (disable), `OPEN` (enable). Default value: `CLOSE`
DRM encryption is supported only for HLS, DASH, HLS_ARCHIVE, DASH_ARCHIVE, HLS_MEDIAPACKAGE, and DASH_MEDIAPACKAGE outputs.
 * @method void setState(string $State) Set Whether to enable DRM encryption. Valid values: `CLOSE` (disable), `OPEN` (enable). Default value: `CLOSE`
DRM encryption is supported only for HLS, DASH, HLS_ARCHIVE, DASH_ARCHIVE, HLS_MEDIAPACKAGE, and DASH_MEDIAPACKAGE outputs.
 * @method string getScheme() Obtain This parameter can be set to `CustomDRMKeys` or left empty.
CustomDRMKeys means encryption keys customized by users.
 * @method void setScheme(string $Scheme) Set This parameter can be set to `CustomDRMKeys` or left empty.
CustomDRMKeys means encryption keys customized by users.
 * @method string getContentId() Obtain If `Scheme` is set to `CustomDRMKeys`, this parameter is required and should be specified by the user.
 * @method void setContentId(string $ContentId) Set If `Scheme` is set to `CustomDRMKeys`, this parameter is required and should be specified by the user.
 * @method array getKeys() Obtain The key customized by the content user, which is required when `Scheme` is set to CustomDRMKeys.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setKeys(array $Keys) Set The key customized by the content user, which is required when `Scheme` is set to CustomDRMKeys.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class DrmSettingsInfo extends AbstractModel
{
    /**
     * @var string Whether to enable DRM encryption. Valid values: `CLOSE` (disable), `OPEN` (enable). Default value: `CLOSE`
DRM encryption is supported only for HLS, DASH, HLS_ARCHIVE, DASH_ARCHIVE, HLS_MEDIAPACKAGE, and DASH_MEDIAPACKAGE outputs.
     */
    public $State;

    /**
     * @var string This parameter can be set to `CustomDRMKeys` or left empty.
CustomDRMKeys means encryption keys customized by users.
     */
    public $Scheme;

    /**
     * @var string If `Scheme` is set to `CustomDRMKeys`, this parameter is required and should be specified by the user.
     */
    public $ContentId;

    /**
     * @var array The key customized by the content user, which is required when `Scheme` is set to CustomDRMKeys.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Keys;

    /**
     * @param string $State Whether to enable DRM encryption. Valid values: `CLOSE` (disable), `OPEN` (enable). Default value: `CLOSE`
DRM encryption is supported only for HLS, DASH, HLS_ARCHIVE, DASH_ARCHIVE, HLS_MEDIAPACKAGE, and DASH_MEDIAPACKAGE outputs.
     * @param string $Scheme This parameter can be set to `CustomDRMKeys` or left empty.
CustomDRMKeys means encryption keys customized by users.
     * @param string $ContentId If `Scheme` is set to `CustomDRMKeys`, this parameter is required and should be specified by the user.
     * @param array $Keys The key customized by the content user, which is required when `Scheme` is set to CustomDRMKeys.
Note: this field may return null, indicating that no valid values can be obtained.
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
    }
}
