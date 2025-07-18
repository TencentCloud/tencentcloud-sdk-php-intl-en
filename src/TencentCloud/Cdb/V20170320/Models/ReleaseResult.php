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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Deisolation task result
 *
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method integer getCode() Obtain Result value of instance deisolation. A returned value of 0 indicates success.
 * @method void setCode(integer $Code) Set Result value of instance deisolation. A returned value of 0 indicates success.
 * @method string getMessage() Obtain Error message for instance deisolation.
 * @method void setMessage(string $Message) Set Error message for instance deisolation.
 */
class ReleaseResult extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var integer Result value of instance deisolation. A returned value of 0 indicates success.
     */
    public $Code;

    /**
     * @var string Error message for instance deisolation.
     */
    public $Message;

    /**
     * @param string $InstanceId Instance ID.
     * @param integer $Code Result value of instance deisolation. A returned value of 0 indicates success.
     * @param string $Message Error message for instance deisolation.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}
