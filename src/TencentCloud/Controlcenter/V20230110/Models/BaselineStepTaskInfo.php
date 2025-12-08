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
namespace TencentCloud\Controlcenter\V20230110\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Baseline item deployment task information list.
 *
 * @method string getTaskId() Obtain Specifies the unique Id of the task, which can only contain english letters and digits, and is a 16-character random string.
 * @method void setTaskId(string $TaskId) Set Specifies the unique Id of the task, which can only contain english letters and digits, and is a 16-character random string.
 * @method string getIdentifier() Obtain Specifies the unique identifier for the baseline feature item, can only contain english letters, digits, and @, ,._[]-:()()[]+=., with a length of 2-128 characters.
 * @method void setIdentifier(string $Identifier) Set Specifies the unique identifier for the baseline feature item, can only contain english letters, digits, and @, ,._[]-:()()[]+=., with a length of 2-128 characters.
 * @method integer getMemberUin() Obtain Specifies the member account uin of the applied baseline item.
 * @method void setMemberUin(integer $MemberUin) Set Specifies the member account uin of the applied baseline item.
 * @method string getStatus() Obtain Baseline item application status. Running means the baseline item is in application. Success means the baseline item application is successful. Failed means the baseline item application failure. Pending means the baseline item is Pending application. Skipped means the baseline item is Skipped.
 * @method void setStatus(string $Status) Set Baseline item application status. Running means the baseline item is in application. Success means the baseline item application is successful. Failed means the baseline item application failure. Pending means the baseline item is Pending application. Skipped means the baseline item is Skipped.
 * @method string getErrCode() Obtain Error code
 * @method void setErrCode(string $ErrCode) Set Error code
 * @method string getErrMessage() Obtain Error message
 * @method void setErrMessage(string $ErrMessage) Set Error message
 * @method string getOutput() Obtain Baseline item deployment output.
 * @method void setOutput(string $Output) Set Baseline item deployment output.
 * @method string getCreateTime() Obtain Creation time, represented in ISO8601 standard format as yyyy-MM-dd hh:MM:ss.
 * @method void setCreateTime(string $CreateTime) Set Creation time, represented in ISO8601 standard format as yyyy-MM-dd hh:MM:ss.
 * @method string getUpdateTime() Obtain Specifies the last update time in ISO8601 standard representation with format yyyy-MM-dd hh:MM:ss.
 * @method void setUpdateTime(string $UpdateTime) Set Specifies the last update time in ISO8601 standard representation with format yyyy-MM-dd hh:MM:ss.
 */
class BaselineStepTaskInfo extends AbstractModel
{
    /**
     * @var string Specifies the unique Id of the task, which can only contain english letters and digits, and is a 16-character random string.
     */
    public $TaskId;

    /**
     * @var string Specifies the unique identifier for the baseline feature item, can only contain english letters, digits, and @, ,._[]-:()()[]+=., with a length of 2-128 characters.
     */
    public $Identifier;

    /**
     * @var integer Specifies the member account uin of the applied baseline item.
     */
    public $MemberUin;

    /**
     * @var string Baseline item application status. Running means the baseline item is in application. Success means the baseline item application is successful. Failed means the baseline item application failure. Pending means the baseline item is Pending application. Skipped means the baseline item is Skipped.
     */
    public $Status;

    /**
     * @var string Error code
     */
    public $ErrCode;

    /**
     * @var string Error message
     */
    public $ErrMessage;

    /**
     * @var string Baseline item deployment output.
     */
    public $Output;

    /**
     * @var string Creation time, represented in ISO8601 standard format as yyyy-MM-dd hh:MM:ss.
     */
    public $CreateTime;

    /**
     * @var string Specifies the last update time in ISO8601 standard representation with format yyyy-MM-dd hh:MM:ss.
     */
    public $UpdateTime;

    /**
     * @param string $TaskId Specifies the unique Id of the task, which can only contain english letters and digits, and is a 16-character random string.
     * @param string $Identifier Specifies the unique identifier for the baseline feature item, can only contain english letters, digits, and @, ,._[]-:()()[]+=., with a length of 2-128 characters.
     * @param integer $MemberUin Specifies the member account uin of the applied baseline item.
     * @param string $Status Baseline item application status. Running means the baseline item is in application. Success means the baseline item application is successful. Failed means the baseline item application failure. Pending means the baseline item is Pending application. Skipped means the baseline item is Skipped.
     * @param string $ErrCode Error code
     * @param string $ErrMessage Error message
     * @param string $Output Baseline item deployment output.
     * @param string $CreateTime Creation time, represented in ISO8601 standard format as yyyy-MM-dd hh:MM:ss.
     * @param string $UpdateTime Specifies the last update time in ISO8601 standard representation with format yyyy-MM-dd hh:MM:ss.
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

        if (array_key_exists("Identifier",$param) and $param["Identifier"] !== null) {
            $this->Identifier = $param["Identifier"];
        }

        if (array_key_exists("MemberUin",$param) and $param["MemberUin"] !== null) {
            $this->MemberUin = $param["MemberUin"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ErrCode",$param) and $param["ErrCode"] !== null) {
            $this->ErrCode = $param["ErrCode"];
        }

        if (array_key_exists("ErrMessage",$param) and $param["ErrMessage"] !== null) {
            $this->ErrMessage = $param["ErrMessage"];
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = $param["Output"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
