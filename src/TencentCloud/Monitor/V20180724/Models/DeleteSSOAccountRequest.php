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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteSSOAccount request structure.
 *
 * @method string getInstanceId() Obtain TCMG instance ID, such as “grafana-abcdefgh”.
 * @method void setInstanceId(string $InstanceId) Set TCMG instance ID, such as “grafana-abcdefgh”.
 * @method string getUserId() Obtain User account ID, such as “10000000”.
 * @method void setUserId(string $UserId) Set User account ID, such as “10000000”.
 */
class DeleteSSOAccountRequest extends AbstractModel
{
    /**
     * @var string TCMG instance ID, such as “grafana-abcdefgh”.
     */
    public $InstanceId;

    /**
     * @var string User account ID, such as “10000000”.
     */
    public $UserId;

    /**
     * @param string $InstanceId TCMG instance ID, such as “grafana-abcdefgh”.
     * @param string $UserId User account ID, such as “10000000”.
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

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }
    }
}
