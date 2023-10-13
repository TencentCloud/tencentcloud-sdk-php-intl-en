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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The information of a live scheme subtask.
 *
 * @method string getTaskId() Obtain The ID of a live scheme subtask.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setTaskId(string $TaskId) Set The ID of a live scheme subtask.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getStatus() Obtain The task status. Valid values:
<li>`PROCESSING`</li>
<li>`FINISH` </li>
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setStatus(string $Status) Set The task status. Valid values:
<li>`PROCESSING`</li>
<li>`FINISH` </li>
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getErrCode() Obtain If the value returned is not `0`, there was a source error. If `0` is returned, refer to the error codes of the corresponding task type.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setErrCode(integer $ErrCode) Set If the value returned is not `0`, there was a source error. If `0` is returned, refer to the error codes of the corresponding task type.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getMessage() Obtain If there was a source error, this parameter is the error message. For other errors, refer to the error messages of the corresponding task type.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setMessage(string $Message) Set If there was a source error, this parameter is the error message. For other errors, refer to the error messages of the corresponding task type.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getUrl() Obtain The URL of the live stream.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setUrl(string $Url) Set The URL of the live stream.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method array getLiveActivityResultSet() Obtain The task output.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setLiveActivityResultSet(array $LiveActivityResultSet) Set The task output.
Note: This field may return·null, indicating that no valid values can be obtained.
 */
class LiveScheduleTask extends AbstractModel
{
    /**
     * @var string The ID of a live scheme subtask.
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $TaskId;

    /**
     * @var string The task status. Valid values:
<li>`PROCESSING`</li>
<li>`FINISH` </li>
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var integer If the value returned is not `0`, there was a source error. If `0` is returned, refer to the error codes of the corresponding task type.
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $ErrCode;

    /**
     * @var string If there was a source error, this parameter is the error message. For other errors, refer to the error messages of the corresponding task type.
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Message;

    /**
     * @var string The URL of the live stream.
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Url;

    /**
     * @var array The task output.
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $LiveActivityResultSet;

    /**
     * @param string $TaskId The ID of a live scheme subtask.
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $Status The task status. Valid values:
<li>`PROCESSING`</li>
<li>`FINISH` </li>
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $ErrCode If the value returned is not `0`, there was a source error. If `0` is returned, refer to the error codes of the corresponding task type.
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $Message If there was a source error, this parameter is the error message. For other errors, refer to the error messages of the corresponding task type.
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $Url The URL of the live stream.
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param array $LiveActivityResultSet The task output.
Note: This field may return·null, indicating that no valid values can be obtained.
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

        if (array_key_exists("ErrCode",$param) and $param["ErrCode"] !== null) {
            $this->ErrCode = $param["ErrCode"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("LiveActivityResultSet",$param) and $param["LiveActivityResultSet"] !== null) {
            $this->LiveActivityResultSet = [];
            foreach ($param["LiveActivityResultSet"] as $key => $value){
                $obj = new LiveActivityResult();
                $obj->deserialize($value);
                array_push($this->LiveActivityResultSet, $obj);
            }
        }
    }
}
