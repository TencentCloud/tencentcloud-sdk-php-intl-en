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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Operate related resources return detail
 *
 * @method integer getCode() Obtain Operation failure code at the instance dimension
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCode(integer $Code) Set Operation failure code at the instance dimension
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMessage() Obtain Failure reason for operating related resources
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMessage(string $Message) Set Failure reason for operating related resources
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceId() Obtain Instance ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class OperateRsp extends AbstractModel
{
    /**
     * @var integer Operation failure code at the instance dimension
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Code;

    /**
     * @var string Failure reason for operating related resources
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Message;

    /**
     * @var string Instance ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceId;

    /**
     * @param integer $Code Operation failure code at the instance dimension
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Message Failure reason for operating related resources
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceId Instance ID.
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
        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
