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
namespace TencentCloud\Tcsas\V20250106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Result of the task to create a mini program version
 *
 * @method string getMNPId() Obtain Mini program ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMNPId(string $MNPId) Set Mini program ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTaskId() Obtain Task ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskId(string $TaskId) Set Task ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTaskStatus() Obtain 1: Pending; 20: Running; 30: Failed; 60: Succeeded 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskStatus(integer $TaskStatus) Set 1: Pending; 20: Running; 30: Failed; 60: Succeeded 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTaskMsg() Obtain Task status message
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskMsg(string $TaskMsg) Set Task status message
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DescribeMNPVersionResp extends AbstractModel
{
    /**
     * @var string Mini program ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MNPId;

    /**
     * @var string Task ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskId;

    /**
     * @var integer 1: Pending; 20: Running; 30: Failed; 60: Succeeded 
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskStatus;

    /**
     * @var string Task status message
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskMsg;

    /**
     * @param string $MNPId Mini program ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TaskId Task ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TaskStatus 1: Pending; 20: Running; 30: Failed; 60: Succeeded 
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TaskMsg Task status message
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
        if (array_key_exists("MNPId",$param) and $param["MNPId"] !== null) {
            $this->MNPId = $param["MNPId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("TaskMsg",$param) and $param["TaskMsg"] !== null) {
            $this->TaskMsg = $param["TaskMsg"];
        }
    }
}
