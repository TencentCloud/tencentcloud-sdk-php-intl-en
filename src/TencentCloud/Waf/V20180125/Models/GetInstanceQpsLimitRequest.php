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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetInstanceQpsLimit request structure.
 *
 * @method string getInstanceId() Obtain Package instance ID
 * @method void setInstanceId(string $InstanceId) Set Package instance ID
 * @method string getType() Obtain Package type.
 * @method void setType(string $Type) Set Package type.
 */
class GetInstanceQpsLimitRequest extends AbstractModel
{
    /**
     * @var string Package instance ID
     */
    public $InstanceId;

    /**
     * @var string Package type.
     */
    public $Type;

    /**
     * @param string $InstanceId Package instance ID
     * @param string $Type Package type.
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
