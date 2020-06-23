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
 * UnReleaseService request structure.
 *
 * @method string getServiceId() Obtain Unique ID of the service to be deactivated.
 * @method void setServiceId(string $ServiceId) Set Unique ID of the service to be deactivated.
 * @method string getEnvironmentName() Obtain Name of the environment to be deactivated. Valid values: test (test environment), prepub (pre-release environment), release (release environment).
 * @method void setEnvironmentName(string $EnvironmentName) Set Name of the environment to be deactivated. Valid values: test (test environment), prepub (pre-release environment), release (release environment).
 * @method array getApiIds() Obtain List of APIs to be deactivated, which is a reserved field.
 * @method void setApiIds(array $ApiIds) Set List of APIs to be deactivated, which is a reserved field.
 */
class UnReleaseServiceRequest extends AbstractModel
{
    /**
     * @var string Unique ID of the service to be deactivated.
     */
    public $ServiceId;

    /**
     * @var string Name of the environment to be deactivated. Valid values: test (test environment), prepub (pre-release environment), release (release environment).
     */
    public $EnvironmentName;

    /**
     * @var array List of APIs to be deactivated, which is a reserved field.
     */
    public $ApiIds;

    /**
     * @param string $ServiceId Unique ID of the service to be deactivated.
     * @param string $EnvironmentName Name of the environment to be deactivated. Valid values: test (test environment), prepub (pre-release environment), release (release environment).
     * @param array $ApiIds List of APIs to be deactivated, which is a reserved field.
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
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("EnvironmentName",$param) and $param["EnvironmentName"] !== null) {
            $this->EnvironmentName = $param["EnvironmentName"];
        }

        if (array_key_exists("ApiIds",$param) and $param["ApiIds"] !== null) {
            $this->ApiIds = $param["ApiIds"];
        }
    }
}
