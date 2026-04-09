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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Switch failed instance info
 *
 * @method string getInstanceId() Obtain <p>Failed instance ID</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Failed instance ID</p>
 * @method string getMessage() Obtain <p>Failure information</p>
 * @method void setMessage(string $Message) Set <p>Failure information</p>
 */
class FailedInstance extends AbstractModel
{
    /**
     * @var string <p>Failed instance ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Failure information</p>
     */
    public $Message;

    /**
     * @param string $InstanceId <p>Failed instance ID</p>
     * @param string $Message <p>Failure information</p>
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

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}
