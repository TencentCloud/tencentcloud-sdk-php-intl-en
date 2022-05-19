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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyResourceScheduleConfig request structure.
 *
 * @method string getInstanceId() Obtain EMR cluster ID
 * @method void setInstanceId(string $InstanceId) Set EMR cluster ID
 * @method string getKey() Obtain Business identifier. `fair`: Edit fair configuration items; `fairPlan`: Edit the execution plan; `capacity`: Edit capacity configuration items.
 * @method void setKey(string $Key) Set Business identifier. `fair`: Edit fair configuration items; `fairPlan`: Edit the execution plan; `capacity`: Edit capacity configuration items.
 * @method string getValue() Obtain Modified module information
 * @method void setValue(string $Value) Set Modified module information
 */
class ModifyResourceScheduleConfigRequest extends AbstractModel
{
    /**
     * @var string EMR cluster ID
     */
    public $InstanceId;

    /**
     * @var string Business identifier. `fair`: Edit fair configuration items; `fairPlan`: Edit the execution plan; `capacity`: Edit capacity configuration items.
     */
    public $Key;

    /**
     * @var string Modified module information
     */
    public $Value;

    /**
     * @param string $InstanceId EMR cluster ID
     * @param string $Key Business identifier. `fair`: Edit fair configuration items; `fairPlan`: Edit the execution plan; `capacity`: Edit capacity configuration items.
     * @param string $Value Modified module information
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

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
