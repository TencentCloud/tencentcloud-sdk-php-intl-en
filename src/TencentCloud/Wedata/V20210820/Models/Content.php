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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Content
 *
 * @method string getTaskId() Obtain Task IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setTaskId(string $TaskId) Set Task IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getTaskName() Obtain Task NameNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setTaskName(string $TaskName) Set Task NameNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getDiagnose() Obtain Diagnosis
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDiagnose(string $Diagnose) Set Diagnosis
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getReason() Obtain Reason
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setReason(string $Reason) Set Reason
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getOperation() Obtain OperationNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setOperation(string $Operation) Set OperationNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getUrl() Obtain Link
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setUrl(string $Url) Set Link
Note: This field may return null, indicating that no valid value can be obtained.
 */
class Content extends AbstractModel
{
    /**
     * @var string Task IDNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $TaskId;

    /**
     * @var string Task NameNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $TaskName;

    /**
     * @var string Diagnosis
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Diagnose;

    /**
     * @var string Reason
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Reason;

    /**
     * @var string OperationNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $Operation;

    /**
     * @var string Link
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Url;

    /**
     * @param string $TaskId Task IDNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $TaskName Task NameNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $Diagnose Diagnosis
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Reason Reason
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Operation OperationNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $Url Link
Note: This field may return null, indicating that no valid value can be obtained.
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

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("Diagnose",$param) and $param["Diagnose"] !== null) {
            $this->Diagnose = $param["Diagnose"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }
    }
}
