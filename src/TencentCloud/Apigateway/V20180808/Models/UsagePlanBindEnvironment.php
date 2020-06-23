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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of environment bound to usage plan
 *
 * @method string getEnvironmentName() Obtain Environment name.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setEnvironmentName(string $EnvironmentName) Set Environment name.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getServiceId() Obtain Unique service ID.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setServiceId(string $ServiceId) Set Unique service ID.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class UsagePlanBindEnvironment extends AbstractModel
{
    /**
     * @var string Environment name.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $EnvironmentName;

    /**
     * @var string Unique service ID.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ServiceId;

    /**
     * @param string $EnvironmentName Environment name.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ServiceId Unique service ID.
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("EnvironmentName",$param) and $param["EnvironmentName"] !== null) {
            $this->EnvironmentName = $param["EnvironmentName"];
        }

        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }
    }
}
