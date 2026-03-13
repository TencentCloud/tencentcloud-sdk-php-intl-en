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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInstanceName request structure.
 *
 * @method string getInstanceId() Obtain Instance id that needs to be modified.
 * @method void setInstanceId(string $InstanceId) Set Instance id that needs to be modified.
 * @method string getInstanceName() Obtain Modified instance name. required length: 1-60. can contain chinese, english uppercase and lowercase letters, digits, -, _.
 * @method void setInstanceName(string $InstanceName) Set Modified instance name. required length: 1-60. can contain chinese, english uppercase and lowercase letters, digits, -, _.
 */
class ModifyInstanceNameRequest extends AbstractModel
{
    /**
     * @var string Instance id that needs to be modified.
     */
    public $InstanceId;

    /**
     * @var string Modified instance name. required length: 1-60. can contain chinese, english uppercase and lowercase letters, digits, -, _.
     */
    public $InstanceName;

    /**
     * @param string $InstanceId Instance id that needs to be modified.
     * @param string $InstanceName Modified instance name. required length: 1-60. can contain chinese, english uppercase and lowercase letters, digits, -, _.
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

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }
    }
}
