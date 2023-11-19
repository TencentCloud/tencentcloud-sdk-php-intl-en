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
 * Media quality inspection task information.
 *
 * @method string getTaskId() Obtain Media quality inspection task ID.
 * @method void setTaskId(string $TaskId) Set Media quality inspection task ID.
 * @method string getStatus() Obtain Task status, value: <li>PROCESSING: processing;</li> <li>FINISH: Completed.</li>
 * @method void setStatus(string $Status) Set Task status, value: <li>PROCESSING: processing;</li> <li>FINISH: Completed.</li>
 * @method string getErrCodeExt() Obtain Error code, an empty string indicates success, other values indicate failure. Please refer to the [Video Processing Error Code](https://www.tencentcloud.com/document/product/266/39145) list for values.
 * @method void setErrCodeExt(string $ErrCodeExt) Set Error code, an empty string indicates success, other values indicate failure. Please refer to the [Video Processing Error Code](https://www.tencentcloud.com/document/product/266/39145) list for values.
 * @method string getMessage() Obtain Error information.
 * @method void setMessage(string $Message) Set Error information.
 * @method MediaMetaData getMetaData() Obtain Media quality inspection input metadata of audio and video.
 * @method void setMetaData(MediaMetaData $MetaData) Set Media quality inspection input metadata of audio and video.
 * @method QualityInspectTaskInput getInput() Obtain Media quality inspection task input.
 * @method void setInput(QualityInspectTaskInput $Input) Set Media quality inspection task input.
 * @method QualityInspectTaskOutput getOutput() Obtain Media quality inspection task generates.
 * @method void setOutput(QualityInspectTaskOutput $Output) Set Media quality inspection task generates.
 * @method string getSessionId() Obtain Used for deduplication, if there has been a request with the same recognition code within seven days, this request will return an error. Maximum length of 50 characters, without or with an empty string indicates no deduplication.
 * @method void setSessionId(string $SessionId) Set Used for deduplication, if there has been a request with the same recognition code within seven days, this request will return an error. Maximum length of 50 characters, without or with an empty string indicates no deduplication.
 * @method string getSessionContext() Obtain Source context, used for transparent transmission of user request information. Upon completion of media quality inspection, the callback will return the value of this field, with a maximum length of 1000 characters.
 * @method void setSessionContext(string $SessionContext) Set Source context, used for transparent transmission of user request information. Upon completion of media quality inspection, the callback will return the value of this field, with a maximum length of 1000 characters.
 */
class QualityInspectTask extends AbstractModel
{
    /**
     * @var string Media quality inspection task ID.
     */
    public $TaskId;

    /**
     * @var string Task status, value: <li>PROCESSING: processing;</li> <li>FINISH: Completed.</li>
     */
    public $Status;

    /**
     * @var string Error code, an empty string indicates success, other values indicate failure. Please refer to the [Video Processing Error Code](https://www.tencentcloud.com/document/product/266/39145) list for values.
     */
    public $ErrCodeExt;

    /**
     * @var string Error information.
     */
    public $Message;

    /**
     * @var MediaMetaData Media quality inspection input metadata of audio and video.
     */
    public $MetaData;

    /**
     * @var QualityInspectTaskInput Media quality inspection task input.
     */
    public $Input;

    /**
     * @var QualityInspectTaskOutput Media quality inspection task generates.
     */
    public $Output;

    /**
     * @var string Used for deduplication, if there has been a request with the same recognition code within seven days, this request will return an error. Maximum length of 50 characters, without or with an empty string indicates no deduplication.
     */
    public $SessionId;

    /**
     * @var string Source context, used for transparent transmission of user request information. Upon completion of media quality inspection, the callback will return the value of this field, with a maximum length of 1000 characters.
     */
    public $SessionContext;

    /**
     * @param string $TaskId Media quality inspection task ID.
     * @param string $Status Task status, value: <li>PROCESSING: processing;</li> <li>FINISH: Completed.</li>
     * @param string $ErrCodeExt Error code, an empty string indicates success, other values indicate failure. Please refer to the [Video Processing Error Code](https://www.tencentcloud.com/document/product/266/39145) list for values.
     * @param string $Message Error information.
     * @param MediaMetaData $MetaData Media quality inspection input metadata of audio and video.
     * @param QualityInspectTaskInput $Input Media quality inspection task input.
     * @param QualityInspectTaskOutput $Output Media quality inspection task generates.
     * @param string $SessionId Used for deduplication, if there has been a request with the same recognition code within seven days, this request will return an error. Maximum length of 50 characters, without or with an empty string indicates no deduplication.
     * @param string $SessionContext Source context, used for transparent transmission of user request information. Upon completion of media quality inspection, the callback will return the value of this field, with a maximum length of 1000 characters.
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ErrCodeExt",$param) and $param["ErrCodeExt"] !== null) {
            $this->ErrCodeExt = $param["ErrCodeExt"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("MetaData",$param) and $param["MetaData"] !== null) {
            $this->MetaData = new MediaMetaData();
            $this->MetaData->deserialize($param["MetaData"]);
        }

        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = new QualityInspectTaskInput();
            $this->Input->deserialize($param["Input"]);
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new QualityInspectTaskOutput();
            $this->Output->deserialize($param["Output"]);
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }
    }
}
