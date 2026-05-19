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
 * ProcessMediaByUrl request structure.
 *
 * @method integer getSubAppId() Obtain <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method MediaInputInfo getInputInfo() Obtain The API is <font color='red'>no longer maintained</font>. Refer to the API description for the recommended alternative API.
 * @method void setInputInfo(MediaInputInfo $InputInfo) Set The API is <font color='red'>no longer maintained</font>. Refer to the API description for the recommended alternative API.
 * @method MediaOutputInfo getOutputInfo() Obtain Output file COS path information.
 * @method void setOutputInfo(MediaOutputInfo $OutputInfo) Set Output file COS path information.
 * @method AiContentReviewTaskInput getAiContentReviewTask() Obtain Parameters for the video content review task.
 * @method void setAiContentReviewTask(AiContentReviewTaskInput $AiContentReviewTask) Set Parameters for the video content review task.
 * @method AiAnalysisTaskInput getAiAnalysisTask() Obtain Parameters for the video content analysis task.
 * @method void setAiAnalysisTask(AiAnalysisTaskInput $AiAnalysisTask) Set Parameters for the video content analysis task.
 * @method AiRecognitionTaskInput getAiRecognitionTask() Obtain Parameters for the video content recognition task.
 * @method void setAiRecognitionTask(AiRecognitionTaskInput $AiRecognitionTask) Set Parameters for the video content recognition task.
 * @method integer getTasksPriority() Obtain Priority of the task flow. The higher the value, the higher the priority. The value ranges from -10 to 10. If left blank, it represents 0.
 * @method void setTasksPriority(integer $TasksPriority) Set Priority of the task flow. The higher the value, the higher the priority. The value ranges from -10 to 10. If left blank, it represents 0.
 * @method string getTasksNotifyMode() Obtain Task flow status change notification mode. Valid values are Finish, Change, and None. If this is not specified, the default value is Finish.
 * @method void setTasksNotifyMode(string $TasksNotifyMode) Set Task flow status change notification mode. Valid values are Finish, Change, and None. If this is not specified, the default value is Finish.
 * @method string getSessionContext() Obtain Source context, which is used to pass through the user request information. The callback for task flow status changes will return the value of this field. The maximum length is 1,000 characters.
 * @method void setSessionContext(string $SessionContext) Set Source context, which is used to pass through the user request information. The callback for task flow status changes will return the value of this field. The maximum length is 1,000 characters.
 * @method string getSessionId() Obtain Identifier for deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.
 * @method void setSessionId(string $SessionId) Set Identifier for deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.
 */
class ProcessMediaByUrlRequest extends AbstractModel
{
    /**
     * @var integer <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
     */
    public $SubAppId;

    /**
     * @var MediaInputInfo The API is <font color='red'>no longer maintained</font>. Refer to the API description for the recommended alternative API.
     */
    public $InputInfo;

    /**
     * @var MediaOutputInfo Output file COS path information.
     */
    public $OutputInfo;

    /**
     * @var AiContentReviewTaskInput Parameters for the video content review task.
     */
    public $AiContentReviewTask;

    /**
     * @var AiAnalysisTaskInput Parameters for the video content analysis task.
     */
    public $AiAnalysisTask;

    /**
     * @var AiRecognitionTaskInput Parameters for the video content recognition task.
     */
    public $AiRecognitionTask;

    /**
     * @var integer Priority of the task flow. The higher the value, the higher the priority. The value ranges from -10 to 10. If left blank, it represents 0.
     */
    public $TasksPriority;

    /**
     * @var string Task flow status change notification mode. Valid values are Finish, Change, and None. If this is not specified, the default value is Finish.
     */
    public $TasksNotifyMode;

    /**
     * @var string Source context, which is used to pass through the user request information. The callback for task flow status changes will return the value of this field. The maximum length is 1,000 characters.
     */
    public $SessionContext;

    /**
     * @var string Identifier for deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.
     */
    public $SessionId;

    /**
     * @param integer $SubAppId <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
     * @param MediaInputInfo $InputInfo The API is <font color='red'>no longer maintained</font>. Refer to the API description for the recommended alternative API.
     * @param MediaOutputInfo $OutputInfo Output file COS path information.
     * @param AiContentReviewTaskInput $AiContentReviewTask Parameters for the video content review task.
     * @param AiAnalysisTaskInput $AiAnalysisTask Parameters for the video content analysis task.
     * @param AiRecognitionTaskInput $AiRecognitionTask Parameters for the video content recognition task.
     * @param integer $TasksPriority Priority of the task flow. The higher the value, the higher the priority. The value ranges from -10 to 10. If left blank, it represents 0.
     * @param string $TasksNotifyMode Task flow status change notification mode. Valid values are Finish, Change, and None. If this is not specified, the default value is Finish.
     * @param string $SessionContext Source context, which is used to pass through the user request information. The callback for task flow status changes will return the value of this field. The maximum length is 1,000 characters.
     * @param string $SessionId Identifier for deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.
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
        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("InputInfo",$param) and $param["InputInfo"] !== null) {
            $this->InputInfo = new MediaInputInfo();
            $this->InputInfo->deserialize($param["InputInfo"]);
        }

        if (array_key_exists("OutputInfo",$param) and $param["OutputInfo"] !== null) {
            $this->OutputInfo = new MediaOutputInfo();
            $this->OutputInfo->deserialize($param["OutputInfo"]);
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
    }
}
