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
 * Image file info for AIGC video task input.
 *
 * @method string getType() Obtain Input video File type. valid values: <li>File: on-demand media File;</li> <li>Url: accessible Url;</li>
 * @method void setType(string $Type) Set Input video File type. valid values: <li>File: on-demand media File;</li> <li>Url: accessible Url;</li>
 * @method string getFileId() Obtain The media File ID, which is the globally unique identifier (guid) of the File in vod, is assigned by the vod backend after successful upload. you can retrieve this field in the [video upload completion event notification](https://www.tencentcloud.com/document/product/266/7830?from_cn_redirect=1) or [vod console](https://console.cloud.tencent.com/vod/media). this parameter is valid when the Type value is File. description:.
1. recommended image size: less than 10 mb.
2. image format value is jpeg, jpg, png.
 * @method void setFileId(string $FileId) Set The media File ID, which is the globally unique identifier (guid) of the File in vod, is assigned by the vod backend after successful upload. you can retrieve this field in the [video upload completion event notification](https://www.tencentcloud.com/document/product/266/7830?from_cn_redirect=1) or [vod console](https://console.cloud.tencent.com/vod/media). this parameter is valid when the Type value is File. description:.
1. recommended image size: less than 10 mb.
2. image format value is jpeg, jpg, png.
 * @method string getUrl() Obtain Accessible file URL. this parameter is valid when Type value is URL.
Note:.
1. recommended image size: less than 10 mb.
2. image format value is jpeg, jpg, png.
 * @method void setUrl(string $Url) Set Accessible file URL. this parameter is valid when Type value is URL.
Note:.
1. recommended image size: less than 10 mb.
2. image format value is jpeg, jpg, png.
 * @method string getReferenceType() Obtain Reference type. Used for the GV model.
Note:
When using the GV model, can be used as a reference method, selectable asset (material), style.
 * @method void setReferenceType(string $ReferenceType) Set Reference type. Used for the GV model.
Note:
When using the GV model, can be used as a reference method, selectable asset (material), style.
 * @method string getObjectId() Obtain Object id.
Applicable model: Vidu-q2.
When an image identifier is required, each image must have a subject id. the subject id can be used via @subject id in subsequent generation.
 * @method void setObjectId(string $ObjectId) Set Object id.
Applicable model: Vidu-q2.
When an image identifier is required, each image must have a subject id. the subject id can be used via @subject id in subsequent generation.
 * @method string getVoiceId() Obtain Suitable for the Vidu-q2 model.
When all images carry object ids, you can set the timbre id for the object. timbre list: https://shengshu.feishu.cn/sheets/EgFvs6DShhiEBStmjzccr5gonOg.
 * @method void setVoiceId(string $VoiceId) Set Suitable for the Vidu-q2 model.
When all images carry object ids, you can set the timbre id for the object. timbre list: https://shengshu.feishu.cn/sheets/EgFvs6DShhiEBStmjzccr5gonOg.
 */
class AigcVideoTaskInputFileInfo extends AbstractModel
{
    /**
     * @var string Input video File type. valid values: <li>File: on-demand media File;</li> <li>Url: accessible Url;</li>
     */
    public $Type;

    /**
     * @var string The media File ID, which is the globally unique identifier (guid) of the File in vod, is assigned by the vod backend after successful upload. you can retrieve this field in the [video upload completion event notification](https://www.tencentcloud.com/document/product/266/7830?from_cn_redirect=1) or [vod console](https://console.cloud.tencent.com/vod/media). this parameter is valid when the Type value is File. description:.
1. recommended image size: less than 10 mb.
2. image format value is jpeg, jpg, png.
     */
    public $FileId;

    /**
     * @var string Accessible file URL. this parameter is valid when Type value is URL.
Note:.
1. recommended image size: less than 10 mb.
2. image format value is jpeg, jpg, png.
     */
    public $Url;

    /**
     * @var string Reference type. Used for the GV model.
Note:
When using the GV model, can be used as a reference method, selectable asset (material), style.
     */
    public $ReferenceType;

    /**
     * @var string Object id.
Applicable model: Vidu-q2.
When an image identifier is required, each image must have a subject id. the subject id can be used via @subject id in subsequent generation.
     */
    public $ObjectId;

    /**
     * @var string Suitable for the Vidu-q2 model.
When all images carry object ids, you can set the timbre id for the object. timbre list: https://shengshu.feishu.cn/sheets/EgFvs6DShhiEBStmjzccr5gonOg.
     */
    public $VoiceId;

    /**
     * @param string $Type Input video File type. valid values: <li>File: on-demand media File;</li> <li>Url: accessible Url;</li>
     * @param string $FileId The media File ID, which is the globally unique identifier (guid) of the File in vod, is assigned by the vod backend after successful upload. you can retrieve this field in the [video upload completion event notification](https://www.tencentcloud.com/document/product/266/7830?from_cn_redirect=1) or [vod console](https://console.cloud.tencent.com/vod/media). this parameter is valid when the Type value is File. description:.
1. recommended image size: less than 10 mb.
2. image format value is jpeg, jpg, png.
     * @param string $Url Accessible file URL. this parameter is valid when Type value is URL.
Note:.
1. recommended image size: less than 10 mb.
2. image format value is jpeg, jpg, png.
     * @param string $ReferenceType Reference type. Used for the GV model.
Note:
When using the GV model, can be used as a reference method, selectable asset (material), style.
     * @param string $ObjectId Object id.
Applicable model: Vidu-q2.
When an image identifier is required, each image must have a subject id. the subject id can be used via @subject id in subsequent generation.
     * @param string $VoiceId Suitable for the Vidu-q2 model.
When all images carry object ids, you can set the timbre id for the object. timbre list: https://shengshu.feishu.cn/sheets/EgFvs6DShhiEBStmjzccr5gonOg.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("ReferenceType",$param) and $param["ReferenceType"] !== null) {
            $this->ReferenceType = $param["ReferenceType"];
        }

        if (array_key_exists("ObjectId",$param) and $param["ObjectId"] !== null) {
            $this->ObjectId = $param["ObjectId"];
        }

        if (array_key_exists("VoiceId",$param) and $param["VoiceId"] !== null) {
            $this->VoiceId = $param["VoiceId"];
        }
    }
}
