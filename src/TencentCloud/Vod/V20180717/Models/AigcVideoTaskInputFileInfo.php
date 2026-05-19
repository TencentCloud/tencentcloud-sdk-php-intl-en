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
 * @method string getType() Obtain <p>Input video file type. Valid values: <li>File: On-demand media file;</li> <li>Url: Accessible URL;</li></p>
 * @method void setType(string $Type) Set <p>Input video file type. Valid values: <li>File: On-demand media file;</li> <li>Url: Accessible URL;</li></p>
 * @method string getCategory() Obtain <p>File category. Value is:</p><ul><li>Image: image. <strong>Note that the Usage field defines the image type.</strong></li><li>Video: video.</li></ul>
 * @method void setCategory(string $Category) Set <p>File category. Value is:</p><ul><li>Image: image. <strong>Note that the Usage field defines the image type.</strong></li><li>Video: video.</li></ul>
 * @method string getFileId() Obtain <p>Media file ID, the globally unique identifier of the file in VOD, is assigned by the VOD backend after successful upload. You can obtain this field in the <a href="/document/product/266/7830">video upload completion event notification</a> or the <a href="https://console.cloud.tencent.com/vod/media">VOD console</a>. This parameter is valid when the Type value is File. Description:</p><ol><li>Images less than 10M are recommended;</li><li>Image format values: jpeg, jpg, png.</li></ol>
 * @method void setFileId(string $FileId) Set <p>Media file ID, the globally unique identifier of the file in VOD, is assigned by the VOD backend after successful upload. You can obtain this field in the <a href="/document/product/266/7830">video upload completion event notification</a> or the <a href="https://console.cloud.tencent.com/vod/media">VOD console</a>. This parameter is valid when the Type value is File. Description:</p><ol><li>Images less than 10M are recommended;</li><li>Image format values: jpeg, jpg, png.</li></ol>
 * @method string getUrl() Obtain <p>Accessible file URL. This parameter is valid when the Type value is URL.<br>Description:</p><ol><li>Images less than 10M are recommended.</li><li>Image format values: jpeg, jpg, png.</li></ol>
 * @method void setUrl(string $Url) Set <p>Accessible file URL. This parameter is valid when the Type value is URL.<br>Description:</p><ol><li>Images less than 10M are recommended.</li><li>Image format values: jpeg, jpg, png.</li></ol>
 * @method string getReferenceType() Obtain <p>Reference Type, applicable to GV, Kling, and PixVerse models.<br>Note:<br>When using the GV model, it can be used as a reference method, available values: asset means material, style means style;<br>When using the Kling model and Category is Video, distinct reference video types can be identified, feature means feature reference video, base means video to be edited;<br>When using the PixVerse model, applicable to multi-image (subject) reference generation mode, available values: subject means subject, background means background;</p>
 * @method void setReferenceType(string $ReferenceType) Set <p>Reference Type, applicable to GV, Kling, and PixVerse models.<br>Note:<br>When using the GV model, it can be used as a reference method, available values: asset means material, style means style;<br>When using the Kling model and Category is Video, distinct reference video types can be identified, feature means feature reference video, base means video to be edited;<br>When using the PixVerse model, applicable to multi-image (subject) reference generation mode, available values: subject means subject, background means background;</p>
 * @method string getObjectId() Obtain <p>Usage: Vidu subject Id.<br>Vidu subject Id: prompt can be used via @subject Id. Valid at that time when Category is Image.</p>
 * @method void setObjectId(string $ObjectId) Set <p>Usage: Vidu subject Id.<br>Vidu subject Id: prompt can be used via @subject Id. Valid at that time when Category is Image.</p>
 * @method string getVoiceId() Obtain <p>Suitable for the Vidu-q2 model.<br>When all images carry the subject Id, you can set the timbre Id targeting the subject. Valid when Category is Image. Supported timbre list: https://shengshu.feishu.cn/sheets/EgFvs6DShhiEBStmjzccr5gonOg</p>
 * @method void setVoiceId(string $VoiceId) Set <p>Suitable for the Vidu-q2 model.<br>When all images carry the subject Id, you can set the timbre Id targeting the subject. Valid when Category is Image. Supported timbre list: https://shengshu.feishu.cn/sheets/EgFvs6DShhiEBStmjzccr5gonOg</p>
 * @method string getKeepOriginalSound() Obtain <p>Whether to retain the original sound of the video. Valid when Category is Video. Values are as follows:</p><li>Enabled: Retain</li><li>Disabled: Not retain</li>
 * @method void setKeepOriginalSound(string $KeepOriginalSound) Set <p>Whether to retain the original sound of the video. Valid when Category is Video. Values are as follows:</p><li>Enabled: Retain</li><li>Disabled: Not retain</li>
 * @method string getUsage() Obtain <p>Used to distinguish whether the input image is for <strong>first (last) frame to video</strong>, <strong>image to video</strong>, or <strong>reference to video</strong>. Available values:</p><ul><li>FirstFrame: For first (last) frame to video or image to video;</li><li>Reference: For reference to video;</li></ul><p><strong>Note: FirstFrame is selected by default</strong></p>
 * @method void setUsage(string $Usage) Set <p>Used to distinguish whether the input image is for <strong>first (last) frame to video</strong>, <strong>image to video</strong>, or <strong>reference to video</strong>. Available values:</p><ul><li>FirstFrame: For first (last) frame to video or image to video;</li><li>Reference: For reference to video;</li></ul><p><strong>Note: FirstFrame is selected by default</strong></p>
 * @method string getText() Obtain <p><strong>Only the multi-image (subject) reference mode of the PixVerse model takes effect</strong>. Specify a name for the image to achieve more precise results. Usage: When the field value is "kitten", use @kitten in the Prompt to accurately describe the scenario. There must be a space after @Text, for example, @kitten run. The name referenced in the Prompt must be the same as the field value.</p>
 * @method void setText(string $Text) Set <p><strong>Only the multi-image (subject) reference mode of the PixVerse model takes effect</strong>. Specify a name for the image to achieve more precise results. Usage: When the field value is "kitten", use @kitten in the Prompt to accurately describe the scenario. There must be a space after @Text, for example, @kitten run. The name referenced in the Prompt must be the same as the field value.</p>
 */
class AigcVideoTaskInputFileInfo extends AbstractModel
{
    /**
     * @var string <p>Input video file type. Valid values: <li>File: On-demand media file;</li> <li>Url: Accessible URL;</li></p>
     */
    public $Type;

    /**
     * @var string <p>File category. Value is:</p><ul><li>Image: image. <strong>Note that the Usage field defines the image type.</strong></li><li>Video: video.</li></ul>
     */
    public $Category;

    /**
     * @var string <p>Media file ID, the globally unique identifier of the file in VOD, is assigned by the VOD backend after successful upload. You can obtain this field in the <a href="/document/product/266/7830">video upload completion event notification</a> or the <a href="https://console.cloud.tencent.com/vod/media">VOD console</a>. This parameter is valid when the Type value is File. Description:</p><ol><li>Images less than 10M are recommended;</li><li>Image format values: jpeg, jpg, png.</li></ol>
     */
    public $FileId;

    /**
     * @var string <p>Accessible file URL. This parameter is valid when the Type value is URL.<br>Description:</p><ol><li>Images less than 10M are recommended.</li><li>Image format values: jpeg, jpg, png.</li></ol>
     */
    public $Url;

    /**
     * @var string <p>Reference Type, applicable to GV, Kling, and PixVerse models.<br>Note:<br>When using the GV model, it can be used as a reference method, available values: asset means material, style means style;<br>When using the Kling model and Category is Video, distinct reference video types can be identified, feature means feature reference video, base means video to be edited;<br>When using the PixVerse model, applicable to multi-image (subject) reference generation mode, available values: subject means subject, background means background;</p>
     */
    public $ReferenceType;

    /**
     * @var string <p>Usage: Vidu subject Id.<br>Vidu subject Id: prompt can be used via @subject Id. Valid at that time when Category is Image.</p>
     */
    public $ObjectId;

    /**
     * @var string <p>Suitable for the Vidu-q2 model.<br>When all images carry the subject Id, you can set the timbre Id targeting the subject. Valid when Category is Image. Supported timbre list: https://shengshu.feishu.cn/sheets/EgFvs6DShhiEBStmjzccr5gonOg</p>
     */
    public $VoiceId;

    /**
     * @var string <p>Whether to retain the original sound of the video. Valid when Category is Video. Values are as follows:</p><li>Enabled: Retain</li><li>Disabled: Not retain</li>
     */
    public $KeepOriginalSound;

    /**
     * @var string <p>Used to distinguish whether the input image is for <strong>first (last) frame to video</strong>, <strong>image to video</strong>, or <strong>reference to video</strong>. Available values:</p><ul><li>FirstFrame: For first (last) frame to video or image to video;</li><li>Reference: For reference to video;</li></ul><p><strong>Note: FirstFrame is selected by default</strong></p>
     */
    public $Usage;

    /**
     * @var string <p><strong>Only the multi-image (subject) reference mode of the PixVerse model takes effect</strong>. Specify a name for the image to achieve more precise results. Usage: When the field value is "kitten", use @kitten in the Prompt to accurately describe the scenario. There must be a space after @Text, for example, @kitten run. The name referenced in the Prompt must be the same as the field value.</p>
     */
    public $Text;

    /**
     * @param string $Type <p>Input video file type. Valid values: <li>File: On-demand media file;</li> <li>Url: Accessible URL;</li></p>
     * @param string $Category <p>File category. Value is:</p><ul><li>Image: image. <strong>Note that the Usage field defines the image type.</strong></li><li>Video: video.</li></ul>
     * @param string $FileId <p>Media file ID, the globally unique identifier of the file in VOD, is assigned by the VOD backend after successful upload. You can obtain this field in the <a href="/document/product/266/7830">video upload completion event notification</a> or the <a href="https://console.cloud.tencent.com/vod/media">VOD console</a>. This parameter is valid when the Type value is File. Description:</p><ol><li>Images less than 10M are recommended;</li><li>Image format values: jpeg, jpg, png.</li></ol>
     * @param string $Url <p>Accessible file URL. This parameter is valid when the Type value is URL.<br>Description:</p><ol><li>Images less than 10M are recommended.</li><li>Image format values: jpeg, jpg, png.</li></ol>
     * @param string $ReferenceType <p>Reference Type, applicable to GV, Kling, and PixVerse models.<br>Note:<br>When using the GV model, it can be used as a reference method, available values: asset means material, style means style;<br>When using the Kling model and Category is Video, distinct reference video types can be identified, feature means feature reference video, base means video to be edited;<br>When using the PixVerse model, applicable to multi-image (subject) reference generation mode, available values: subject means subject, background means background;</p>
     * @param string $ObjectId <p>Usage: Vidu subject Id.<br>Vidu subject Id: prompt can be used via @subject Id. Valid at that time when Category is Image.</p>
     * @param string $VoiceId <p>Suitable for the Vidu-q2 model.<br>When all images carry the subject Id, you can set the timbre Id targeting the subject. Valid when Category is Image. Supported timbre list: https://shengshu.feishu.cn/sheets/EgFvs6DShhiEBStmjzccr5gonOg</p>
     * @param string $KeepOriginalSound <p>Whether to retain the original sound of the video. Valid when Category is Video. Values are as follows:</p><li>Enabled: Retain</li><li>Disabled: Not retain</li>
     * @param string $Usage <p>Used to distinguish whether the input image is for <strong>first (last) frame to video</strong>, <strong>image to video</strong>, or <strong>reference to video</strong>. Available values:</p><ul><li>FirstFrame: For first (last) frame to video or image to video;</li><li>Reference: For reference to video;</li></ul><p><strong>Note: FirstFrame is selected by default</strong></p>
     * @param string $Text <p><strong>Only the multi-image (subject) reference mode of the PixVerse model takes effect</strong>. Specify a name for the image to achieve more precise results. Usage: When the field value is "kitten", use @kitten in the Prompt to accurately describe the scenario. There must be a space after @Text, for example, @kitten run. The name referenced in the Prompt must be the same as the field value.</p>
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

        if (array_key_exists("Usage",$param) and $param["Usage"] !== null) {
            $this->Usage = $param["Usage"];
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }
    }
}
