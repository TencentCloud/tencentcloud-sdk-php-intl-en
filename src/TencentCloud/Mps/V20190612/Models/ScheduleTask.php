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
 * The information of a scheme.
 *
 * @method string getTaskId() Obtain The scheme ID.
 * @method void setTaskId(string $TaskId) Set The scheme ID.
 * @method string getStatus() Obtain The scheme status. Valid values:
<li>PROCESSING</li>
<li>FINISH</li>
 * @method void setStatus(string $Status) Set The scheme status. Valid values:
<li>PROCESSING</li>
<li>FINISH</li>
 * @method integer getErrCode() Obtain If the value returned is not 0, there was a source error. If 0 is returned, refer to the error codes of the corresponding task type.
 * @method void setErrCode(integer $ErrCode) Set If the value returned is not 0, there was a source error. If 0 is returned, refer to the error codes of the corresponding task type.
 * @method string getMessage() Obtain If there was a source error, this parameter is the error message. For other errors, refer to the error messages of the corresponding task type.
 * @method void setMessage(string $Message) Set If there was a source error, this parameter is the error message. For other errors, refer to the error messages of the corresponding task type.
 * @method MediaInputInfo getInputInfo() Obtain The information of the file processed.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInputInfo(MediaInputInfo $InputInfo) Set The information of the file processed.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method MediaMetaData getMetaData() Obtain The metadata of the source video.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMetaData(MediaMetaData $MetaData) Set The metadata of the source video.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getActivityResultSet() Obtain The output of the scheme.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setActivityResultSet(array $ActivityResultSet) Set The output of the scheme.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ScheduleTask extends AbstractModel
{
    /**
     * @var string The scheme ID.
     */
    public $TaskId;

    /**
     * @var string The scheme status. Valid values:
<li>PROCESSING</li>
<li>FINISH</li>
     */
    public $Status;

    /**
     * @var integer If the value returned is not 0, there was a source error. If 0 is returned, refer to the error codes of the corresponding task type.
     */
    public $ErrCode;

    /**
     * @var string If there was a source error, this parameter is the error message. For other errors, refer to the error messages of the corresponding task type.
     */
    public $Message;

    /**
     * @var MediaInputInfo The information of the file processed.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InputInfo;

    /**
     * @var MediaMetaData The metadata of the source video.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MetaData;

    /**
     * @var array The output of the scheme.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ActivityResultSet;

    /**
     * @param string $TaskId The scheme ID.
     * @param string $Status The scheme status. Valid values:
<li>PROCESSING</li>
<li>FINISH</li>
     * @param integer $ErrCode If the value returned is not 0, there was a source error. If 0 is returned, refer to the error codes of the corresponding task type.
     * @param string $Message If there was a source error, this parameter is the error message. For other errors, refer to the error messages of the corresponding task type.
     * @param MediaInputInfo $InputInfo The information of the file processed.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param MediaMetaData $MetaData The metadata of the source video.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ActivityResultSet The output of the scheme.
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

        if (array_key_exists("ErrCode",$param) and $param["ErrCode"] !== null) {
            $this->ErrCode = $param["ErrCode"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("InputInfo",$param) and $param["InputInfo"] !== null) {
            $this->InputInfo = new MediaInputInfo();
            $this->InputInfo->deserialize($param["InputInfo"]);
        }

        if (array_key_exists("MetaData",$param) and $param["MetaData"] !== null) {
            $this->MetaData = new MediaMetaData();
            $this->MetaData->deserialize($param["MetaData"]);
        }

        if (array_key_exists("ActivityResultSet",$param) and $param["ActivityResultSet"] !== null) {
            $this->ActivityResultSet = [];
            foreach ($param["ActivityResultSet"] as $key => $value){
                $obj = new ActivityResult();
                $obj->deserialize($value);
                array_push($this->ActivityResultSet, $obj);
            }
        }
    }
}
