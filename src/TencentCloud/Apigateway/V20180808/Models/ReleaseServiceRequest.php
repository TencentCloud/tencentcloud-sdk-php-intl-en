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
 * ReleaseService request structure.
 *
 * @method string getServiceId() Obtain Unique ID of the service to be published.
 * @method void setServiceId(string $ServiceId) Set Unique ID of the service to be published.
 * @method string getEnvironmentName() Obtain Name of the environment to be published. Valid values: test (test environment), prepub (pre-release environment), release (release environment).
 * @method void setEnvironmentName(string $EnvironmentName) Set Name of the environment to be published. Valid values: test (test environment), prepub (pre-release environment), release (release environment).
 * @method string getReleaseDesc() Obtain Release description.
 * @method void setReleaseDesc(string $ReleaseDesc) Set Release description.
 * @method array getApiIds() Obtain `apiId` list, which is reserved. Full API release is used by default.
 * @method void setApiIds(array $ApiIds) Set `apiId` list, which is reserved. Full API release is used by default.
 */
class ReleaseServiceRequest extends AbstractModel
{
    /**
     * @var string Unique ID of the service to be published.
     */
    public $ServiceId;

    /**
     * @var string Name of the environment to be published. Valid values: test (test environment), prepub (pre-release environment), release (release environment).
     */
    public $EnvironmentName;

    /**
     * @var string Release description.
     */
    public $ReleaseDesc;

    /**
     * @var array `apiId` list, which is reserved. Full API release is used by default.
     */
    public $ApiIds;

    /**
     * @param string $ServiceId Unique ID of the service to be published.
     * @param string $EnvironmentName Name of the environment to be published. Valid values: test (test environment), prepub (pre-release environment), release (release environment).
     * @param string $ReleaseDesc Release description.
     * @param array $ApiIds `apiId` list, which is reserved. Full API release is used by default.
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

        if (array_key_exists("ReleaseDesc",$param) and $param["ReleaseDesc"] !== null) {
            $this->ReleaseDesc = $param["ReleaseDesc"];
        }

        if (array_key_exists("ApiIds",$param) and $param["ApiIds"] !== null) {
            $this->ApiIds = $param["ApiIds"];
        }
    }
}
