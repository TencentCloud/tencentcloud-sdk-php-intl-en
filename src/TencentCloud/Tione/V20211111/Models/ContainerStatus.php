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
 * Container status.
 *
 * @method integer getRestartCount() Obtain Number of restarts.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRestartCount(integer $RestartCount) Set Number of restarts.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getState() Obtain Status.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setState(string $State) Set Status.Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getReady() Obtain Whether it is ready.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setReady(boolean $Ready) Set Whether it is ready.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getReason() Obtain Status reason.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setReason(string $Reason) Set Status reason.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMessage() Obtain Container error message.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMessage(string $Message) Set Container error message.Note: This field may return null, indicating that no valid values can be obtained.
 */
class ContainerStatus extends AbstractModel
{
    /**
     * @var integer Number of restarts.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RestartCount;

    /**
     * @var string Status.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $State;

    /**
     * @var boolean Whether it is ready.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Ready;

    /**
     * @var string Status reason.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Reason;

    /**
     * @var string Container error message.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Message;

    /**
     * @param integer $RestartCount Number of restarts.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $State Status.Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $Ready Whether it is ready.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Reason Status reason.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Message Container error message.Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("RestartCount",$param) and $param["RestartCount"] !== null) {
            $this->RestartCount = $param["RestartCount"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("Ready",$param) and $param["Ready"] !== null) {
            $this->Ready = $param["Ready"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}
