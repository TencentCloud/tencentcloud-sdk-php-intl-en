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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ProcessMedia request structure.
 *
 * @method string getFileId() Obtain Media file ID, i.e., the globally unique ID of a file in VOD assigned by the VOD backend after successful upload. This field can be obtained through the [video upload completion event notification](https://intl.cloud.tencent.com/document/product/266/7830?from_cn_redirect=1) or [VOD Console](https://console.cloud.tencent.com/vod/media).
 * @method void setFileId(string $FileId) Set Media file ID, i.e., the globally unique ID of a file in VOD assigned by the VOD backend after successful upload. This field can be obtained through the [video upload completion event notification](https://intl.cloud.tencent.com/document/product/266/7830?from_cn_redirect=1) or [VOD Console](https://console.cloud.tencent.com/vod/media).
 * @method integer getSubAppId() Obtain <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method MediaProcessTaskInput getMediaProcessTask() Obtain Parameter of video processing task.
 * @method void setMediaProcessTask(MediaProcessTaskInput $MediaProcessTask) Set Parameter of video processing task.
 * @method AiContentReviewTaskInput getAiContentReviewTask() Obtain The information of the audio/video moderation task\*.
This parameter is <font color=red>\*no longer recommended</font>. Please use [ReviewAudioVideo](https://intl.cloud.tencent.com/document/api/266/80283?from_cn_redirect=1) or [ReviewImage](https://intl.cloud.tencent.com/document/api/266/73217?from_cn_redirect=1) instead.
 * @method void setAiContentReviewTask(AiContentReviewTaskInput $AiContentReviewTask) Set The information of the audio/video moderation task\*.
This parameter is <font color=red>\*no longer recommended</font>. Please use [ReviewAudioVideo](https://intl.cloud.tencent.com/document/api/266/80283?from_cn_redirect=1) or [ReviewImage](https://intl.cloud.tencent.com/document/api/266/73217?from_cn_redirect=1) instead.
 * @method AiAnalysisTaskInput getAiAnalysisTask() Obtain Video content analysis task parameter.
 * @method void setAiAnalysisTask(AiAnalysisTaskInput $AiAnalysisTask) Set Video content analysis task parameter.
 * @method AiRecognitionTaskInput getAiRecognitionTask() Obtain Type parameter of video content recognition task.
 * @method void setAiRecognitionTask(AiRecognitionTaskInput $AiRecognitionTask) Set Type parameter of video content recognition task.
 * @method integer getTasksPriority() Obtain Task flow priority. The higher the value, the higher the priority. Value range: -10-10. If this parameter is left empty, 0 will be used.
 * @method void setTasksPriority(integer $TasksPriority) Set Task flow priority. The higher the value, the higher the priority. Value range: -10-10. If this parameter is left empty, 0 will be used.
 * @method string getTasksNotifyMode() Obtain Notification mode for task flow status change. Valid values: Finish, Change, None. If this parameter is left empty, `Finish` will be used.
 * @method void setTasksNotifyMode(string $TasksNotifyMode) Set Notification mode for task flow status change. Valid values: Finish, Change, None. If this parameter is left empty, `Finish` will be used.
 * @method string getSessionContext() Obtain The source context which is used to pass through the user request information. The task flow status change callback will return the value of this field. It can contain up to 1,000 characters.
 * @method void setSessionContext(string $SessionContext) Set The source context which is used to pass through the user request information. The task flow status change callback will return the value of this field. It can contain up to 1,000 characters.
 * @method string getSessionId() Obtain Used to identify duplicate requests. After you send a request, if any request with the same `SessionId` has already been sent in the last three days (72 hours), an error message will be returned. `SessionId` contains up to 50 characters. If this parameter is not carried or is an empty string, no deduplication will be performed.
 * @method void setSessionId(string $SessionId) Set Used to identify duplicate requests. After you send a request, if any request with the same `SessionId` has already been sent in the last three days (72 hours), an error message will be returned. `SessionId` contains up to 50 characters. If this parameter is not carried or is an empty string, no deduplication will be performed.
 * @method string getExtInfo() Obtain Reserved field for special purposes.
 * @method void setExtInfo(string $ExtInfo) Set Reserved field for special purposes.
 */
class ProcessMediaRequest extends AbstractModel
{
    /**
     * @var string Media file ID, i.e., the globally unique ID of a file in VOD assigned by the VOD backend after successful upload. This field can be obtained through the [video upload completion event notification](https://intl.cloud.tencent.com/document/product/266/7830?from_cn_redirect=1) or [VOD Console](https://console.cloud.tencent.com/vod/media).
     */
    public $FileId;

    /**
     * @var integer <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     */
    public $SubAppId;

    /**
     * @var MediaProcessTaskInput Parameter of video processing task.
     */
    public $MediaProcessTask;

    /**
     * @var AiContentReviewTaskInput The information of the audio/video moderation task\*.
This parameter is <font color=red>\*no longer recommended</font>. Please use [ReviewAudioVideo](https://intl.cloud.tencent.com/document/api/266/80283?from_cn_redirect=1) or [ReviewImage](https://intl.cloud.tencent.com/document/api/266/73217?from_cn_redirect=1) instead.
     */
    public $AiContentReviewTask;

    /**
     * @var AiAnalysisTaskInput Video content analysis task parameter.
     */
    public $AiAnalysisTask;

    /**
     * @var AiRecognitionTaskInput Type parameter of video content recognition task.
     */
    public $AiRecognitionTask;

    /**
     * @var integer Task flow priority. The higher the value, the higher the priority. Value range: -10-10. If this parameter is left empty, 0 will be used.
     */
    public $TasksPriority;

    /**
     * @var string Notification mode for task flow status change. Valid values: Finish, Change, None. If this parameter is left empty, `Finish` will be used.
     */
    public $TasksNotifyMode;

    /**
     * @var string The source context which is used to pass through the user request information. The task flow status change callback will return the value of this field. It can contain up to 1,000 characters.
     */
    public $SessionContext;

    /**
     * @var string Used to identify duplicate requests. After you send a request, if any request with the same `SessionId` has already been sent in the last three days (72 hours), an error message will be returned. `SessionId` contains up to 50 characters. If this parameter is not carried or is an empty string, no deduplication will be performed.
     */
    public $SessionId;

    /**
     * @var string Reserved field for special purposes.
     */
    public $ExtInfo;

    /**
     * @param string $FileId Media file ID, i.e., the globally unique ID of a file in VOD assigned by the VOD backend after successful upload. This field can be obtained through the [video upload completion event notification](https://intl.cloud.tencent.com/document/product/266/7830?from_cn_redirect=1) or [VOD Console](https://console.cloud.tencent.com/vod/media).
     * @param integer $SubAppId <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     * @param MediaProcessTaskInput $MediaProcessTask Parameter of video processing task.
     * @param AiContentReviewTaskInput $AiContentReviewTask The information of the audio/video moderation task\*.
This parameter is <font color=red>\*no longer recommended</font>. Please use [ReviewAudioVideo](https://intl.cloud.tencent.com/document/api/266/80283?from_cn_redirect=1) or [ReviewImage](https://intl.cloud.tencent.com/document/api/266/73217?from_cn_redirect=1) instead.
     * @param AiAnalysisTaskInput $AiAnalysisTask Video content analysis task parameter.
     * @param AiRecognitionTaskInput $AiRecognitionTask Type parameter of video content recognition task.
     * @param integer $TasksPriority Task flow priority. The higher the value, the higher the priority. Value range: -10-10. If this parameter is left empty, 0 will be used.
     * @param string $TasksNotifyMode Notification mode for task flow status change. Valid values: Finish, Change, None. If this parameter is left empty, `Finish` will be used.
     * @param string $SessionContext The source context which is used to pass through the user request information. The task flow status change callback will return the value of this field. It can contain up to 1,000 characters.
     * @param string $SessionId Used to identify duplicate requests. After you send a request, if any request with the same `SessionId` has already been sent in the last three days (72 hours), an error message will be returned. `SessionId` contains up to 50 characters. If this parameter is not carried or is an empty string, no deduplication will be performed.
     * @param string $ExtInfo Reserved field for special purposes.
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
    }
}
