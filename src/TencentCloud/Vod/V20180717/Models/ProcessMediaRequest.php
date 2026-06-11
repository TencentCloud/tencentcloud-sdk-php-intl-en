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
 * ProcessMedia request structure.
 *
 * @method string getFileId() Obtain <p>Media file ID, the globally unique identifier of the file in VOD, is assigned by the VOD backend after a successful upload. You can get this field in the <a href="https://www.tencentcloud.com/document/product/266/33950">video upload completion event notification</a> or the <a href="https://console.cloud.tencent.com/vod/media">VOD console</a>.<br>You must provide one of FileId and MediaStoragePath.</p>
 * @method void setFileId(string $FileId) Set <p>Media file ID, the globally unique identifier of the file in VOD, is assigned by the VOD backend after a successful upload. You can get this field in the <a href="https://www.tencentcloud.com/document/product/266/33950">video upload completion event notification</a> or the <a href="https://console.cloud.tencent.com/vod/media">VOD console</a>.<br>You must provide one of FileId and MediaStoragePath.</p>
 * @method string getMediaStoragePath() Obtain <p>Storage path of the media.<br>Only sub-applications in <a href="https://www.tencentcloud.com/document/product/266/126825?from_cn_redirect=1">FileID + Path mode</a> can initiate task through MediaStoragePath.<br>Either FileId or MediaStoragePath must be provided.</p>
 * @method void setMediaStoragePath(string $MediaStoragePath) Set <p>Storage path of the media.<br>Only sub-applications in <a href="https://www.tencentcloud.com/document/product/266/126825?from_cn_redirect=1">FileID + Path mode</a> can initiate task through MediaStoragePath.<br>Either FileId or MediaStoragePath must be provided.</p>
 * @method integer getSubAppId() Obtain <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/33987">application</a> ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID to access resources in on-demand applications (whether default or newly created application).</b></p>
 * @method void setSubAppId(integer $SubAppId) Set <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/33987">application</a> ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID to access resources in on-demand applications (whether default or newly created application).</b></p>
 * @method MediaProcessTaskInput getMediaProcessTask() Obtain <p>Parameters for the video processing type task.</p>
 * @method void setMediaProcessTask(MediaProcessTaskInput $MediaProcessTask) Set <p>Parameters for the video processing type task.</p>
 * @method AiContentReviewTaskInput getAiContentReviewTask() Obtain <p>Audio and video content review type task parameters.<br><font color="red">* Not recommended for use</font>. It is recommended to use <a href="https://www.tencentcloud.com/document/api/266/80283?from_cn_redirect=1">ReviewAudioVideo</a> or <a href="https://www.tencentcloud.com/document/api/266/73217?from_cn_redirect=1">ReviewImage</a>.</p>
 * @method void setAiContentReviewTask(AiContentReviewTaskInput $AiContentReviewTask) Set <p>Audio and video content review type task parameters.<br><font color="red">* Not recommended for use</font>. It is recommended to use <a href="https://www.tencentcloud.com/document/api/266/80283?from_cn_redirect=1">ReviewAudioVideo</a> or <a href="https://www.tencentcloud.com/document/api/266/73217?from_cn_redirect=1">ReviewImage</a>.</p>
 * @method AiAnalysisTaskInput getAiAnalysisTask() Obtain <p>Parameters for the audio and video content analysis task.</p>
 * @method void setAiAnalysisTask(AiAnalysisTaskInput $AiAnalysisTask) Set <p>Parameters for the audio and video content analysis task.</p>
 * @method AiRecognitionTaskInput getAiRecognitionTask() Obtain <p>Parameters for the audio/video content recognition task.</p>
 * @method void setAiRecognitionTask(AiRecognitionTaskInput $AiRecognitionTask) Set <p>Parameters for the audio/video content recognition task.</p>
 * @method integer getTasksPriority() Obtain <p>Priority of the task flow. The higher the value, the higher the priority. The value ranges from -10 to 10. If this is not specified, it represents 0.</p>
 * @method void setTasksPriority(integer $TasksPriority) Set <p>Priority of the task flow. The higher the value, the higher the priority. The value ranges from -10 to 10. If this is not specified, it represents 0.</p>
 * @method string getTasksNotifyMode() Obtain <p>Task flow status change notification mode. Valid values are Finish, Change, and None. If this is not specified, the default value is Finish.</p>
 * @method void setTasksNotifyMode(string $TasksNotifyMode) Set <p>Task flow status change notification mode. Valid values are Finish, Change, and None. If this is not specified, the default value is Finish.</p>
 * @method string getSessionContext() Obtain <p>Source context. This is used to pass user request information. The task status change callback returns the value of this field. The maximum length is 1000 characters.</p>
 * @method void setSessionContext(string $SessionContext) Set <p>Source context. This is used to pass user request information. The task status change callback returns the value of this field. The maximum length is 1000 characters.</p>
 * @method string getSessionId() Obtain <p>Identifier for deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.</p>
 * @method void setSessionId(string $SessionId) Set <p>Identifier for deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.</p>
 * @method string getExtInfo() Obtain <p>Reserved field, used when special purpose.</p>
 * @method void setExtInfo(string $ExtInfo) Set <p>Reserved field, used when special purpose.</p>
 * @method string getUrl() Obtain <p>Valid when FileID is empty. Pull the Url to generate new media assets and generate a new FileID. The media processing product will be affiliated with the new media assets.</p><p>Note: Storage fees will occur for new media assets.</p>
 * @method void setUrl(string $Url) Set <p>Valid when FileID is empty. Pull the Url to generate new media assets and generate a new FileID. The media processing product will be affiliated with the new media assets.</p><p>Note: Storage fees will occur for new media assets.</p>
 * @method string getOutputAsIndependentMedia() Obtain <p>The media processing transcoding result is output as standalone media assets. Enabling this option will output the product as standalone media assets and generate a brand-new FileID. Currently only support outputting TranscodeTask transcoding tasks as standalone media assets.</p><p>Enumeration value:</p><ul><li>ON: Enable</li><li>OFF: Disable</li></ul><p>Default value: OFF</p><p>Note: New media assets will incur storage fees. This option does not currently support enabling for video opening/closing credits and traceable watermarks in transcoding tasks.</p>
 * @method void setOutputAsIndependentMedia(string $OutputAsIndependentMedia) Set <p>The media processing transcoding result is output as standalone media assets. Enabling this option will output the product as standalone media assets and generate a brand-new FileID. Currently only support outputting TranscodeTask transcoding tasks as standalone media assets.</p><p>Enumeration value:</p><ul><li>ON: Enable</li><li>OFF: Disable</li></ul><p>Default value: OFF</p><p>Note: New media assets will incur storage fees. This option does not currently support enabling for video opening/closing credits and traceable watermarks in transcoding tasks.</p>
 */
class ProcessMediaRequest extends AbstractModel
{
    /**
     * @var string <p>Media file ID, the globally unique identifier of the file in VOD, is assigned by the VOD backend after a successful upload. You can get this field in the <a href="https://www.tencentcloud.com/document/product/266/33950">video upload completion event notification</a> or the <a href="https://console.cloud.tencent.com/vod/media">VOD console</a>.<br>You must provide one of FileId and MediaStoragePath.</p>
     */
    public $FileId;

    /**
     * @var string <p>Storage path of the media.<br>Only sub-applications in <a href="https://www.tencentcloud.com/document/product/266/126825?from_cn_redirect=1">FileID + Path mode</a> can initiate task through MediaStoragePath.<br>Either FileId or MediaStoragePath must be provided.</p>
     */
    public $MediaStoragePath;

    /**
     * @var integer <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/33987">application</a> ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID to access resources in on-demand applications (whether default or newly created application).</b></p>
     */
    public $SubAppId;

    /**
     * @var MediaProcessTaskInput <p>Parameters for the video processing type task.</p>
     */
    public $MediaProcessTask;

    /**
     * @var AiContentReviewTaskInput <p>Audio and video content review type task parameters.<br><font color="red">* Not recommended for use</font>. It is recommended to use <a href="https://www.tencentcloud.com/document/api/266/80283?from_cn_redirect=1">ReviewAudioVideo</a> or <a href="https://www.tencentcloud.com/document/api/266/73217?from_cn_redirect=1">ReviewImage</a>.</p>
     */
    public $AiContentReviewTask;

    /**
     * @var AiAnalysisTaskInput <p>Parameters for the audio and video content analysis task.</p>
     */
    public $AiAnalysisTask;

    /**
     * @var AiRecognitionTaskInput <p>Parameters for the audio/video content recognition task.</p>
     */
    public $AiRecognitionTask;

    /**
     * @var integer <p>Priority of the task flow. The higher the value, the higher the priority. The value ranges from -10 to 10. If this is not specified, it represents 0.</p>
     */
    public $TasksPriority;

    /**
     * @var string <p>Task flow status change notification mode. Valid values are Finish, Change, and None. If this is not specified, the default value is Finish.</p>
     */
    public $TasksNotifyMode;

    /**
     * @var string <p>Source context. This is used to pass user request information. The task status change callback returns the value of this field. The maximum length is 1000 characters.</p>
     */
    public $SessionContext;

    /**
     * @var string <p>Identifier for deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.</p>
     */
    public $SessionId;

    /**
     * @var string <p>Reserved field, used when special purpose.</p>
     */
    public $ExtInfo;

    /**
     * @var string <p>Valid when FileID is empty. Pull the Url to generate new media assets and generate a new FileID. The media processing product will be affiliated with the new media assets.</p><p>Note: Storage fees will occur for new media assets.</p>
     */
    public $Url;

    /**
     * @var string <p>The media processing transcoding result is output as standalone media assets. Enabling this option will output the product as standalone media assets and generate a brand-new FileID. Currently only support outputting TranscodeTask transcoding tasks as standalone media assets.</p><p>Enumeration value:</p><ul><li>ON: Enable</li><li>OFF: Disable</li></ul><p>Default value: OFF</p><p>Note: New media assets will incur storage fees. This option does not currently support enabling for video opening/closing credits and traceable watermarks in transcoding tasks.</p>
     */
    public $OutputAsIndependentMedia;

    /**
     * @param string $FileId <p>Media file ID, the globally unique identifier of the file in VOD, is assigned by the VOD backend after a successful upload. You can get this field in the <a href="https://www.tencentcloud.com/document/product/266/33950">video upload completion event notification</a> or the <a href="https://console.cloud.tencent.com/vod/media">VOD console</a>.<br>You must provide one of FileId and MediaStoragePath.</p>
     * @param string $MediaStoragePath <p>Storage path of the media.<br>Only sub-applications in <a href="https://www.tencentcloud.com/document/product/266/126825?from_cn_redirect=1">FileID + Path mode</a> can initiate task through MediaStoragePath.<br>Either FileId or MediaStoragePath must be provided.</p>
     * @param integer $SubAppId <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/33987">application</a> ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID to access resources in on-demand applications (whether default or newly created application).</b></p>
     * @param MediaProcessTaskInput $MediaProcessTask <p>Parameters for the video processing type task.</p>
     * @param AiContentReviewTaskInput $AiContentReviewTask <p>Audio and video content review type task parameters.<br><font color="red">* Not recommended for use</font>. It is recommended to use <a href="https://www.tencentcloud.com/document/api/266/80283?from_cn_redirect=1">ReviewAudioVideo</a> or <a href="https://www.tencentcloud.com/document/api/266/73217?from_cn_redirect=1">ReviewImage</a>.</p>
     * @param AiAnalysisTaskInput $AiAnalysisTask <p>Parameters for the audio and video content analysis task.</p>
     * @param AiRecognitionTaskInput $AiRecognitionTask <p>Parameters for the audio/video content recognition task.</p>
     * @param integer $TasksPriority <p>Priority of the task flow. The higher the value, the higher the priority. The value ranges from -10 to 10. If this is not specified, it represents 0.</p>
     * @param string $TasksNotifyMode <p>Task flow status change notification mode. Valid values are Finish, Change, and None. If this is not specified, the default value is Finish.</p>
     * @param string $SessionContext <p>Source context. This is used to pass user request information. The task status change callback returns the value of this field. The maximum length is 1000 characters.</p>
     * @param string $SessionId <p>Identifier for deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.</p>
     * @param string $ExtInfo <p>Reserved field, used when special purpose.</p>
     * @param string $Url <p>Valid when FileID is empty. Pull the Url to generate new media assets and generate a new FileID. The media processing product will be affiliated with the new media assets.</p><p>Note: Storage fees will occur for new media assets.</p>
     * @param string $OutputAsIndependentMedia <p>The media processing transcoding result is output as standalone media assets. Enabling this option will output the product as standalone media assets and generate a brand-new FileID. Currently only support outputting TranscodeTask transcoding tasks as standalone media assets.</p><p>Enumeration value:</p><ul><li>ON: Enable</li><li>OFF: Disable</li></ul><p>Default value: OFF</p><p>Note: New media assets will incur storage fees. This option does not currently support enabling for video opening/closing credits and traceable watermarks in transcoding tasks.</p>
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
        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("MediaStoragePath",$param) and $param["MediaStoragePath"] !== null) {
            $this->MediaStoragePath = $param["MediaStoragePath"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("MediaProcessTask",$param) and $param["MediaProcessTask"] !== null) {
            $this->MediaProcessTask = new MediaProcessTaskInput();
            $this->MediaProcessTask->deserialize($param["MediaProcessTask"]);
        }

        if (array_key_exists("AiContentReviewTask",$param) and $param["AiContentReviewTask"] !== null) {
            $this->AiContentReviewTask = new AiContentReviewTaskInput();
            $this->AiContentReviewTask->deserialize($param["AiContentReviewTask"]);
        }

        if (array_key_exists("AiAnalysisTask",$param) and $param["AiAnalysisTask"] !== null) {
            $this->AiAnalysisTask = new AiAnalysisTaskInput();
            $this->AiAnalysisTask->deserialize($param["AiAnalysisTask"]);
        }

        if (array_key_exists("AiRecognitionTask",$param) and $param["AiRecognitionTask"] !== null) {
            $this->AiRecognitionTask = new AiRecognitionTaskInput();
            $this->AiRecognitionTask->deserialize($param["AiRecognitionTask"]);
        }

        if (array_key_exists("TasksPriority",$param) and $param["TasksPriority"] !== null) {
            $this->TasksPriority = $param["TasksPriority"];
        }

        if (array_key_exists("TasksNotifyMode",$param) and $param["TasksNotifyMode"] !== null) {
            $this->TasksNotifyMode = $param["TasksNotifyMode"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("ExtInfo",$param) and $param["ExtInfo"] !== null) {
            $this->ExtInfo = $param["ExtInfo"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("OutputAsIndependentMedia",$param) and $param["OutputAsIndependentMedia"] !== null) {
            $this->OutputAsIndependentMedia = $param["OutputAsIndependentMedia"];
        }
    }
}
