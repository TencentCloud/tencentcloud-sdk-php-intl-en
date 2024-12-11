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
namespace TencentCloud\Asr\V20190614\Models;
use TencentCloud\Common\AbstractModel;

/**
 * [Response parameters for obtaining recording recognition results] (https://intl.cloud.tencent.com/document/product/1093/37822?from_cn_redirect=1#3.-.E8.BE.93.E5.87.BA.E5.8F.82.E6.95.B0)
 *
 * @method integer getTaskId() Obtain Task ID. Note: The data type of TaskId is uint64.
 * @method void setTaskId(integer $TaskId) Set Task ID. Note: The data type of TaskId is uint64.
 * @method integer getStatus() Obtain Task status code. 0: waiting; 1: in process; 2: success; 3: failed.
 * @method void setStatus(integer $Status) Set Task status code. 0: waiting; 1: in process; 2: success; 3: failed.
 * @method string getStatusStr() Obtain Task status. Valid values: waiting, in process, success, and failed.
 * @method void setStatusStr(string $StatusStr) Set Task status. Valid values: waiting, in process, success, and failed.
 * @method string getResult() Obtain Recognition result.
 * @method void setResult(string $Result) Set Recognition result.
 * @method string getErrorMsg() Obtain Failure cause.
 * @method void setErrorMsg(string $ErrorMsg) Set Failure cause.
 * @method array getResultDetail() Obtain Recognition result details, including word time offsets for each sentence, which is generally used in subtitle generation scenarios. (This field is not left blank when ResTextFormat in the recording recognition request is set to 1.)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResultDetail(array $ResultDetail) Set Recognition result details, including word time offsets for each sentence, which is generally used in subtitle generation scenarios. (This field is not left blank when ResTextFormat in the recording recognition request is set to 1.)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getAudioDuration() Obtain Audio duration (seconds).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAudioDuration(float $AudioDuration) Set Audio duration (seconds).
Note: This field may return null, indicating that no valid values can be obtained.
 */
class TaskStatus extends AbstractModel
{
    /**
     * @var integer Task ID. Note: The data type of TaskId is uint64.
     */
    public $TaskId;

    /**
     * @var integer Task status code. 0: waiting; 1: in process; 2: success; 3: failed.
     */
    public $Status;

    /**
     * @var string Task status. Valid values: waiting, in process, success, and failed.
     */
    public $StatusStr;

    /**
     * @var string Recognition result.
     */
    public $Result;

    /**
     * @var string Failure cause.
     */
    public $ErrorMsg;

    /**
     * @var array Recognition result details, including word time offsets for each sentence, which is generally used in subtitle generation scenarios. (This field is not left blank when ResTextFormat in the recording recognition request is set to 1.)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ResultDetail;

    /**
     * @var float Audio duration (seconds).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AudioDuration;

    /**
     * @param integer $TaskId Task ID. Note: The data type of TaskId is uint64.
     * @param integer $Status Task status code. 0: waiting; 1: in process; 2: success; 3: failed.
     * @param string $StatusStr Task status. Valid values: waiting, in process, success, and failed.
     * @param string $Result Recognition result.
     * @param string $ErrorMsg Failure cause.
     * @param array $ResultDetail Recognition result details, including word time offsets for each sentence, which is generally used in subtitle generation scenarios. (This field is not left blank when ResTextFormat in the recording recognition request is set to 1.)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $AudioDuration Audio duration (seconds).
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("StatusStr",$param) and $param["StatusStr"] !== null) {
            $this->StatusStr = $param["StatusStr"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("ErrorMsg",$param) and $param["ErrorMsg"] !== null) {
            $this->ErrorMsg = $param["ErrorMsg"];
        }

        if (array_key_exists("ResultDetail",$param) and $param["ResultDetail"] !== null) {
            $this->ResultDetail = [];
            foreach ($param["ResultDetail"] as $key => $value){
                $obj = new SentenceDetail();
                $obj->deserialize($value);
                array_push($this->ResultDetail, $obj);
            }
        }

        if (array_key_exists("AudioDuration",$param) and $param["AudioDuration"] !== null) {
            $this->AudioDuration = $param["AudioDuration"];
        }
    }
}
