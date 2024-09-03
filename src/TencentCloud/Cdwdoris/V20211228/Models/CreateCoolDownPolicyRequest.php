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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCoolDownPolicy request structure.
 *
 * @method string getInstanceId() Obtain Cluster ID
 * @method void setInstanceId(string $InstanceId) Set Cluster ID
 * @method string getPolicyName() Obtain Policy name
 * @method void setPolicyName(string $PolicyName) Set Policy name
 * @method string getCoolDownTtl() Obtain cooldown_ttl
 * @method void setCoolDownTtl(string $CoolDownTtl) Set cooldown_ttl
 * @method string getCoolDownDatetime() Obtain cooldown_datetime
 * @method void setCoolDownDatetime(string $CoolDownDatetime) Set cooldown_datetime
 */
class CreateCoolDownPolicyRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $InstanceId;

    /**
     * @var string Policy name
     */
    public $PolicyName;

    /**
     * @var string cooldown_ttl
     */
    public $CoolDownTtl;

    /**
     * @var string cooldown_datetime
     */
    public $CoolDownDatetime;

    /**
     * @param string $InstanceId Cluster ID
     * @param string $PolicyName Policy name
     * @param string $CoolDownTtl cooldown_ttl
     * @param string $CoolDownDatetime cooldown_datetime
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

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("CoolDownTtl",$param) and $param["CoolDownTtl"] !== null) {
            $this->CoolDownTtl = $param["CoolDownTtl"];
        }

        if (array_key_exists("CoolDownDatetime",$param) and $param["CoolDownDatetime"] !== null) {
            $this->CoolDownDatetime = $param["CoolDownDatetime"];
        }
    }
}
