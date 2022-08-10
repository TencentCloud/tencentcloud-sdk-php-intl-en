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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Web block event
 *
 * @method string getClientIp() Obtain Client IP
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setClientIp(string $ClientIp) Set Client IP
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAttackUrl() Obtain Attack URL
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAttackUrl(string $AttackUrl) Set Attack URL
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getAttackTime() Obtain Attack time in seconds
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAttackTime(integer $AttackTime) Set Attack time in seconds
Note: This field may return null, indicating that no valid values can be obtained.
 */
class WebAttackEvent extends AbstractModel
{
    /**
     * @var string Client IP
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ClientIp;

    /**
     * @var string Attack URL
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AttackUrl;

    /**
     * @var integer Attack time in seconds
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AttackTime;

    /**
     * @param string $ClientIp Client IP
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AttackUrl Attack URL
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $AttackTime Attack time in seconds
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
        if (array_key_exists("ClientIp",$param) and $param["ClientIp"] !== null) {
            $this->ClientIp = $param["ClientIp"];
        }

        if (array_key_exists("AttackUrl",$param) and $param["AttackUrl"] !== null) {
            $this->AttackUrl = $param["AttackUrl"];
        }

        if (array_key_exists("AttackTime",$param) and $param["AttackTime"] !== null) {
            $this->AttackTime = $param["AttackTime"];
        }
    }
}
