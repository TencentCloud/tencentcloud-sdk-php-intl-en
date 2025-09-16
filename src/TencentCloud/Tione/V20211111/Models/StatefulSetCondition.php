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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Instance status.
 *
 * @method string getMessage() Obtain Information.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMessage(string $Message) Set Information.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getReason() Obtain Reason.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setReason(string $Reason) Set Reason.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStatus() Obtain Status of the condition, True, False or Unknown.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(string $Status) Set Status of the condition, True, False or Unknown.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getType() Obtain Type.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setType(string $Type) Set Type.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLastTransitionTime() Obtain Last update time.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLastTransitionTime(string $LastTransitionTime) Set Last update time.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLastUpdateTime() Obtain Last update time.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLastUpdateTime(string $LastUpdateTime) Set Last update time.Note: This field may return null, indicating that no valid values can be obtained.
 */
class StatefulSetCondition extends AbstractModel
{
    /**
     * @var string Information.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Message;

    /**
     * @var string Reason.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Reason;

    /**
     * @var string Status of the condition, True, False or Unknown.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var string Type.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Type;

    /**
     * @var string Last update time.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LastTransitionTime;

    /**
     * @var string Last update time.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LastUpdateTime;

    /**
     * @param string $Message Information.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Reason Reason.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Status Status of the condition, True, False or Unknown.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Type Type.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LastTransitionTime Last update time.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LastUpdateTime Last update time.Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("LastTransitionTime",$param) and $param["LastTransitionTime"] !== null) {
            $this->LastTransitionTime = $param["LastTransitionTime"];
        }

        if (array_key_exists("LastUpdateTime",$param) and $param["LastUpdateTime"] !== null) {
            $this->LastUpdateTime = $param["LastUpdateTime"];
        }
    }
}
