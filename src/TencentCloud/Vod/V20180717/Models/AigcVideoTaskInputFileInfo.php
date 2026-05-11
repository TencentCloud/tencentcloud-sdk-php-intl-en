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
 * @method string getType() Obtain Input video file type. Valid values: <li>File: on-demand media file;</li> <li>Url: accessible URL;</li>
 * @method void setType(string $Type) Set Input video file type. Valid values: <li>File: on-demand media file;</li> <li>Url: accessible URL;</li>
 * @method string getCategory() Obtain File category. Valid values:
<li>Image: image.</li>
<li>Video: video.</li>
 * @method void setCategory(string $Category) Set File category. Valid values:
<li>Image: image.</li>
<li>Video: video.</li>
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
 * @method string getReferenceType() Obtain Reference Type. The GV Model applies.
Note:
When using the GV model, this can be used as the reference method. Available values: asset means material, style means style.
When using the Kling model and Category as Video, the reference video type is distinguishable: feature indicates feature reference video, and base indicates video for editing.
 * @method void setReferenceType(string $ReferenceType) Set Reference Type. The GV Model applies.
Note:
When using the GV model, this can be used as the reference method. Available values: asset means material, style means style.
When using the Kling model and Category as Video, the reference video type is distinguishable: feature indicates feature reference video, and base indicates video for editing.
 * @method string getObjectId() Obtain Subject Id.
Applicable model: Vidu-q2.
When identifying the subject in an Image, each Image must include a subject Id, which can be used via @subject Id in subsequent generation. Valid when Category is Image.
 * @method void setObjectId(string $ObjectId) Set Subject Id.
Applicable model: Vidu-q2.
When identifying the subject in an Image, each Image must include a subject Id, which can be used via @subject Id in subsequent generation. Valid when Category is Image.
 * @method string getVoiceId() Obtain Suitable for the Vidu-q2 model.
When all images carry the subject Id, you can set the timbre Id targeting the subject. Valid when Category is Image. Timbre list: https://shengshu.feishu.cn/sheets/EgFvs6DShhiEBStmjzccr5gonOg
 * @method void setVoiceId(string $VoiceId) Set Suitable for the Vidu-q2 model.
When all images carry the subject Id, you can set the timbre Id targeting the subject. Valid when Category is Image. Timbre list: https://shengshu.feishu.cn/sheets/EgFvs6DShhiEBStmjzccr5gonOg
 * @method string getKeepOriginalSound() Obtain Whether to retain the original sound. Valid when Category is Video. Values as follows:
<li>Enabled: Reserved</li>
<li>Disabled: not retain</li>
 * @method void setKeepOriginalSound(string $KeepOriginalSound) Set Whether to retain the original sound. Valid when Category is Video. Values as follows:
<li>Enabled: Reserved</li>
<li>Disabled: not retain</li>
 */
class AigcVideoTaskInputFileInfo extends AbstractModel
{
    /**
     * @var string Input video file type. Valid values: <li>File: on-demand media file;</li> <li>Url: accessible URL;</li>
     */
    public $Type;

    /**
     * @var string File category. Valid values:
<li>Image: image.</li>
<li>Video: video.</li>
     */
    public $Category;

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
     * @var string Reference Type. The GV Model applies.
Note:
When using the GV model, this can be used as the reference method. Available values: asset means material, style means style.
When using the Kling model and Category as Video, the reference video type is distinguishable: feature indicates feature reference video, and base indicates video for editing.
     */
    public $ReferenceType;

    /**
     * @var string Subject Id.
Applicable model: Vidu-q2.
When identifying the subject in an Image, each Image must include a subject Id, which can be used via @subject Id in subsequent generation. Valid when Category is Image.
     */
    public $ObjectId;

    /**
     * @var string Suitable for the Vidu-q2 model.
When all images carry the subject Id, you can set the timbre Id targeting the subject. Valid when Category is Image. Timbre list: https://shengshu.feishu.cn/sheets/EgFvs6DShhiEBStmjzccr5gonOg
     */
    public $VoiceId;

    /**
     * @var string Whether to retain the original sound. Valid when Category is Video. Values as follows:
<li>Enabled: Reserved</li>
<li>Disabled: not retain</li>
     */
    public $KeepOriginalSound;

    /**
     * @param string $Type Input video file type. Valid values: <li>File: on-demand media file;</li> <li>Url: accessible URL;</li>
     * @param string $Category File category. Valid values:
<li>Image: image.</li>
<li>Video: video.</li>
     * @param string $FileId The media File ID, which is the globally unique identifier (guid) of the File in vod, is assigned by the vod backend after successful upload. you can retrieve this field in the [video upload completion event notification](https://www.tencentcloud.com/document/product/266/7830?from_cn_redirect=1) or [vod console](https://console.cloud.tencent.com/vod/media). this parameter is valid when the Type value is File. description:.
1. recommended image size: less than 10 mb.
2. image format value is jpeg, jpg, png.
     * @param string $Url Accessible file URL. this parameter is valid when Type value is URL.
Note:.
1. recommended image size: less than 10 mb.
2. image format value is jpeg, jpg, png.
     * @param string $ReferenceType Reference Type. The GV Model applies.
Note:
When using the GV model, this can be used as the reference method. Available values: asset means material, style means style.
When using the Kling model and Category as Video, the reference video type is distinguishable: feature indicates feature reference video, and base indicates video for editing.
     * @param string $ObjectId Subject Id.
Applicable model: Vidu-q2.
When identifying the subject in an Image, each Image must include a subject Id, which can be used via @subject Id in subsequent generation. Valid when Category is Image.
     * @param string $VoiceId Suitable for the Vidu-q2 model.
When all images carry the subject Id, you can set the timbre Id targeting the subject. Valid when Category is Image. Timbre list: https://shengshu.feishu.cn/sheets/EgFvs6DShhiEBStmjzccr5gonOg
     * @param string $KeepOriginalSound Whether to retain the original sound. Valid when Category is Video. Values as follows:
<li>Enabled: Reserved</li>
<li>Disabled: not retain</li>
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

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
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

        if (array_key_exists("KeepOriginalSound",$param) and $param["KeepOriginalSound"] !== null) {
            $this->KeepOriginalSound = $param["KeepOriginalSound"];
        }
    }
}
