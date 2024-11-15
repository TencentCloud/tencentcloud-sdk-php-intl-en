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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Execution Step Information
 *
 * @method string getName() Obtain Name
 * @method void setName(string $Name) Set Name
 * @method string getStartAt() Obtain Start time

Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setStartAt(string $StartAt) Set Start time

Note: This field may return "null", indicating that no valid value can be obtained.
 * @method string getEndAt() Obtain End time

Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setEndAt(string $EndAt) Set End time

Note: This field may return "null", indicating that no valid value can be obtained.
 * @method string getStatus() Obtain Current status

Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setStatus(string $Status) Set Current status

Note: This field may return "null", indicating that no valid value can be obtained.
 * @method string getMessage() Obtain Execution Information

Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setMessage(string $Message) Set Execution Information

Note: This field may return "null", indicating that no valid value can be obtained.
 */
class Step extends AbstractModel
{
    /**
     * @var string Name
     */
    public $Name;

    /**
     * @var string Start time

Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $StartAt;

    /**
     * @var string End time

Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $EndAt;

    /**
     * @var string Current status

Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $Status;

    /**
     * @var string Execution Information

Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $Message;

    /**
     * @param string $Name Name
     * @param string $StartAt Start time

Note: This field may return "null", indicating that no valid value can be obtained.
     * @param string $EndAt End time

Note: This field may return "null", indicating that no valid value can be obtained.
     * @param string $Status Current status

Note: This field may return "null", indicating that no valid value can be obtained.
     * @param string $Message Execution Information

Note: This field may return "null", indicating that no valid value can be obtained.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("StartAt",$param) and $param["StartAt"] !== null) {
            $this->StartAt = $param["StartAt"];
        }

        if (array_key_exists("EndAt",$param) and $param["EndAt"] !== null) {
            $this->EndAt = $param["EndAt"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}
