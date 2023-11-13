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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The Tencent Cloud VOD parameters.
 *
 * @method string getProcedure() Obtain The operation to perform on the media uploaded. The value of this parameter is the name of a task flow template. You can create a custom task flow template in Tencent Cloud VOD.
 * @method void setProcedure(string $Procedure) Set The operation to perform on the media uploaded. The value of this parameter is the name of a task flow template. You can create a custom task flow template in Tencent Cloud VOD.
 * @method integer getExpireTime() Obtain The expiration time of the media file, which is a time period (seconds) from the current time. For example, `86400` means to save the media file for one day. To save the file permanently, set this parameter to `0`.
 * @method void setExpireTime(integer $ExpireTime) Set The expiration time of the media file, which is a time period (seconds) from the current time. For example, `86400` means to save the media file for one day. To save the file permanently, set this parameter to `0`.
 * @method string getStorageRegion() Obtain The storage region. Set this parameter if you have special requirements on the storage region.
 * @method void setStorageRegion(string $StorageRegion) Set The storage region. Set this parameter if you have special requirements on the storage region.
 * @method integer getClassId() Obtain The category ID, which is returned after you create a category by calling an API. You can use categories to manage media files.
The default value is `0`, which means others.
 * @method void setClassId(integer $ClassId) Set The category ID, which is returned after you create a category by calling an API. You can use categories to manage media files.
The default value is `0`, which means others.
 * @method integer getSubAppId() Obtain The VOD subapplication ID. If you need to access a resource in a subapplication, set this parameter to the subapplication ID; otherwise, leave it empty.
 * @method void setSubAppId(integer $SubAppId) Set The VOD subapplication ID. If you need to access a resource in a subapplication, set this parameter to the subapplication ID; otherwise, leave it empty.
 * @method string getSessionContext() Obtain The task flow context, which is passed through after the task is completed.
 * @method void setSessionContext(string $SessionContext) Set The task flow context, which is passed through after the task is completed.
 * @method string getSourceContext() Obtain The upload context, which is passed through after upload is completed.
 * @method void setSourceContext(string $SourceContext) Set The upload context, which is passed through after upload is completed.
 * @method integer getMediaType() Obtain The format of recording files uploaded to VOD. `0` (default): MP4; `1`: HLS; `2`: AAC (valid only if `StreamType` is `1`); `3`: HLS+MP4; `4`: HLS+AAC.
 * @method void setMediaType(integer $MediaType) Set The format of recording files uploaded to VOD. `0` (default): MP4; `1`: HLS; `2`: AAC (valid only if `StreamType` is `1`); `3`: HLS+MP4; `4`: HLS+AAC.
 * @method string getUserDefineRecordId() Obtain The custom prefix of recording files. This parameter is valid only if recording files are uploaded to VOD. It can contain letters, numbers, underscores, and hyphens and cannot exceed 64 bytes. This prefix and the automatically generated filename are connected with `__UserId_u_`.
 * @method void setUserDefineRecordId(string $UserDefineRecordId) Set The custom prefix of recording files. This parameter is valid only if recording files are uploaded to VOD. It can contain letters, numbers, underscores, and hyphens and cannot exceed 64 bytes. This prefix and the automatically generated filename are connected with `__UserId_u_`.
 */
class TencentVod extends AbstractModel
{
    /**
     * @var string The operation to perform on the media uploaded. The value of this parameter is the name of a task flow template. You can create a custom task flow template in Tencent Cloud VOD.
     */
    public $Procedure;

    /**
     * @var integer The expiration time of the media file, which is a time period (seconds) from the current time. For example, `86400` means to save the media file for one day. To save the file permanently, set this parameter to `0`.
     */
    public $ExpireTime;

    /**
     * @var string The storage region. Set this parameter if you have special requirements on the storage region.
     */
    public $StorageRegion;

    /**
     * @var integer The category ID, which is returned after you create a category by calling an API. You can use categories to manage media files.
The default value is `0`, which means others.
     */
    public $ClassId;

    /**
     * @var integer The VOD subapplication ID. If you need to access a resource in a subapplication, set this parameter to the subapplication ID; otherwise, leave it empty.
     */
    public $SubAppId;

    /**
     * @var string The task flow context, which is passed through after the task is completed.
     */
    public $SessionContext;

    /**
     * @var string The upload context, which is passed through after upload is completed.
     */
    public $SourceContext;

    /**
     * @var integer The format of recording files uploaded to VOD. `0` (default): MP4; `1`: HLS; `2`: AAC (valid only if `StreamType` is `1`); `3`: HLS+MP4; `4`: HLS+AAC.
     */
    public $MediaType;

    /**
     * @var string The custom prefix of recording files. This parameter is valid only if recording files are uploaded to VOD. It can contain letters, numbers, underscores, and hyphens and cannot exceed 64 bytes. This prefix and the automatically generated filename are connected with `__UserId_u_`.
     */
    public $UserDefineRecordId;

    /**
     * @param string $Procedure The operation to perform on the media uploaded. The value of this parameter is the name of a task flow template. You can create a custom task flow template in Tencent Cloud VOD.
     * @param integer $ExpireTime The expiration time of the media file, which is a time period (seconds) from the current time. For example, `86400` means to save the media file for one day. To save the file permanently, set this parameter to `0`.
     * @param string $StorageRegion The storage region. Set this parameter if you have special requirements on the storage region.
     * @param integer $ClassId The category ID, which is returned after you create a category by calling an API. You can use categories to manage media files.
The default value is `0`, which means others.
     * @param integer $SubAppId The VOD subapplication ID. If you need to access a resource in a subapplication, set this parameter to the subapplication ID; otherwise, leave it empty.
     * @param string $SessionContext The task flow context, which is passed through after the task is completed.
     * @param string $SourceContext The upload context, which is passed through after upload is completed.
     * @param integer $MediaType The format of recording files uploaded to VOD. `0` (default): MP4; `1`: HLS; `2`: AAC (valid only if `StreamType` is `1`); `3`: HLS+MP4; `4`: HLS+AAC.
     * @param string $UserDefineRecordId The custom prefix of recording files. This parameter is valid only if recording files are uploaded to VOD. It can contain letters, numbers, underscores, and hyphens and cannot exceed 64 bytes. This prefix and the automatically generated filename are connected with `__UserId_u_`.
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
        if (array_key_exists("Procedure",$param) and $param["Procedure"] !== null) {
            $this->Procedure = $param["Procedure"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("StorageRegion",$param) and $param["StorageRegion"] !== null) {
            $this->StorageRegion = $param["StorageRegion"];
        }

        if (array_key_exists("ClassId",$param) and $param["ClassId"] !== null) {
            $this->ClassId = $param["ClassId"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }

        if (array_key_exists("SourceContext",$param) and $param["SourceContext"] !== null) {
            $this->SourceContext = $param["SourceContext"];
        }

        if (array_key_exists("MediaType",$param) and $param["MediaType"] !== null) {
            $this->MediaType = $param["MediaType"];
        }

        if (array_key_exists("UserDefineRecordId",$param) and $param["UserDefineRecordId"] !== null) {
            $this->UserDefineRecordId = $param["UserDefineRecordId"];
        }
    }
}
