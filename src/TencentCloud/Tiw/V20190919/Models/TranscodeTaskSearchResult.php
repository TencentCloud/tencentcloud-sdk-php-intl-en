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
namespace TencentCloud\Tiw\V20190919\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Transcoding task query results.
 *
 * @method string getCreateTime() Obtain Creation time of the task.
 * @method void setCreateTime(string $CreateTime) Set Creation time of the task.
 * @method string getTaskId() Obtain Unique task ID.
 * @method void setTaskId(string $TaskId) Set Unique task ID.
 * @method string getStatus() Obtain Current task status.
- QUEUED: Queuing for transcoding.
- PROCESSING: Transcoding in progress.
- FINISHED: Transcoding finished.
 * @method void setStatus(string $Status) Set Current task status.
- QUEUED: Queuing for transcoding.
- PROCESSING: Transcoding in progress.
- FINISHED: Transcoding finished.
 * @method string getOriginalFilename() Obtain Original name of the transcoded document.
 * @method void setOriginalFilename(string $OriginalFilename) Set Original name of the transcoded document.
 * @method integer getSdkAppId() Obtain SdkAppId of the whiteboard application.
 * @method void setSdkAppId(integer $SdkAppId) Set SdkAppId of the whiteboard application.
 * @method TranscodeTaskResult getResult() Obtain Transcoding task result.
 * @method void setResult(TranscodeTaskResult $Result) Set Transcoding task result.
 * @method boolean getIsStatic() Obtain Specifies whether the transcoding is static.
 * @method void setIsStatic(boolean $IsStatic) Set Specifies whether the transcoding is static.
 */
class TranscodeTaskSearchResult extends AbstractModel
{
    /**
     * @var string Creation time of the task.
     */
    public $CreateTime;

    /**
     * @var string Unique task ID.
     */
    public $TaskId;

    /**
     * @var string Current task status.
- QUEUED: Queuing for transcoding.
- PROCESSING: Transcoding in progress.
- FINISHED: Transcoding finished.
     */
    public $Status;

    /**
     * @var string Original name of the transcoded document.
     */
    public $OriginalFilename;

    /**
     * @var integer SdkAppId of the whiteboard application.
     */
    public $SdkAppId;

    /**
     * @var TranscodeTaskResult Transcoding task result.
     */
    public $Result;

    /**
     * @var boolean Specifies whether the transcoding is static.
     */
    public $IsStatic;

    /**
     * @param string $CreateTime Creation time of the task.
     * @param string $TaskId Unique task ID.
     * @param string $Status Current task status.
- QUEUED: Queuing for transcoding.
- PROCESSING: Transcoding in progress.
- FINISHED: Transcoding finished.
     * @param string $OriginalFilename Original name of the transcoded document.
     * @param integer $SdkAppId SdkAppId of the whiteboard application.
     * @param TranscodeTaskResult $Result Transcoding task result.
     * @param boolean $IsStatic Specifies whether the transcoding is static.
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
        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("OriginalFilename",$param) and $param["OriginalFilename"] !== null) {
            $this->OriginalFilename = $param["OriginalFilename"];
        }

        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = new TranscodeTaskResult();
            $this->Result->deserialize($param["Result"]);
        }

        if (array_key_exists("IsStatic",$param) and $param["IsStatic"] !== null) {
            $this->IsStatic = $param["IsStatic"];
        }
    }
}
