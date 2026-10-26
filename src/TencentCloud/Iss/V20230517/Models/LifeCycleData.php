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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Lifecycle, cloud file lifecycle settings, the time when cold and hot storage is managed for files
 *
 * @method integer getTransition() Obtain Hot storage duration of cloud files in days. Minimum value: 1. Maximum value: 3650.
 * @method void setTransition(integer $Transition) Set Hot storage duration of cloud files in days. Minimum value: 1. Maximum value: 3650.
 * @method integer getExpiration() Obtain Cold storage duration of cloud files in days. 0 means leave unset. The minimum is 60 days when set. The sum of the Expiration and Transition fields is no more than 3650 days.
 * @method void setExpiration(integer $Expiration) Set Cold storage duration of cloud files in days. 0 means leave unset. The minimum is 60 days when set. The sum of the Expiration and Transition fields is no more than 3650 days.
 */
class LifeCycleData extends AbstractModel
{
    /**
     * @var integer Hot storage duration of cloud files in days. Minimum value: 1. Maximum value: 3650.
     */
    public $Transition;

    /**
     * @var integer Cold storage duration of cloud files in days. 0 means leave unset. The minimum is 60 days when set. The sum of the Expiration and Transition fields is no more than 3650 days.
     */
    public $Expiration;

    /**
     * @param integer $Transition Hot storage duration of cloud files in days. Minimum value: 1. Maximum value: 3650.
     * @param integer $Expiration Cold storage duration of cloud files in days. 0 means leave unset. The minimum is 60 days when set. The sum of the Expiration and Transition fields is no more than 3650 days.
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
        if (array_key_exists("Transition",$param) and $param["Transition"] !== null) {
            $this->Transition = $param["Transition"];
        }

        if (array_key_exists("Expiration",$param) and $param["Expiration"] !== null) {
            $this->Expiration = $param["Expiration"];
        }
    }
}
