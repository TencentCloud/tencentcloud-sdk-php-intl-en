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
 * @method string getState() Obtain Whether to enable DRM encryption. Valid value: CLOSE/OPEN. Default value: CLOSE.
Currently, this is supported only for HLS/DASH/HLS_ARCHIVE/DASH_ARCHIVE.
 * @method void setState(string $State) Set Whether to enable DRM encryption. Valid value: CLOSE/OPEN. Default value: CLOSE.
Currently, this is supported only for HLS/DASH/HLS_ARCHIVE/DASH_ARCHIVE.
 * @method string getContentId() Obtain `ContentId` of DRM encryption, which will be automatically created if this parameter is left empty.
For more information on the custom creation method, please visit https://cloud.tencent.com/document/product/1000/40960
 * @method void setContentId(string $ContentId) Set `ContentId` of DRM encryption, which will be automatically created if this parameter is left empty.
For more information on the custom creation method, please visit https://cloud.tencent.com/document/product/1000/40960
 */
class DrmSettingsInfo extends AbstractModel
{
    /**
     * @var string Whether to enable DRM encryption. Valid value: CLOSE/OPEN. Default value: CLOSE.
Currently, this is supported only for HLS/DASH/HLS_ARCHIVE/DASH_ARCHIVE.
     */
    public $State;

    /**
     * @var string `ContentId` of DRM encryption, which will be automatically created if this parameter is left empty.
For more information on the custom creation method, please visit https://cloud.tencent.com/document/product/1000/40960
     */
    public $ContentId;

    /**
     * @param string $State Whether to enable DRM encryption. Valid value: CLOSE/OPEN. Default value: CLOSE.
Currently, this is supported only for HLS/DASH/HLS_ARCHIVE/DASH_ARCHIVE.
     * @param string $ContentId `ContentId` of DRM encryption, which will be automatically created if this parameter is left empty.
For more information on the custom creation method, please visit https://cloud.tencent.com/document/product/1000/40960
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

        if (array_key_exists("ContentId",$param) and $param["ContentId"] !== null) {
            $this->ContentId = $param["ContentId"];
        }
    }
}
