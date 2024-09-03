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
namespace TencentCloud\Car\V20220110\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Query filter criteria.
 *
 * @method string getName() Obtain Filter field name (ApplicationId: application ID; ApplicationName: application name; ApplicationRunStatus: running status; ApplicationUpdateStatus: update status).
 * @method void setName(string $Name) Set Filter field name (ApplicationId: application ID; ApplicationName: application name; ApplicationRunStatus: running status; ApplicationUpdateStatus: update status).
 * @method array getValues() Obtain Filter value set (When the filter name is ApplicationRunStatus, the values can be [ApplicationDeleting: application deletion in progress; ApplicationCreateFail: application creation failed; ApplicationCreating: application creation in progress; ApplicationRunning: normal running; ApplicationNoConfigured: main execution program path not configured]. When the filter name is ApplicationUpdateStatus, the values can be [ApplicationUpdateCreating: version creation in progress; ApplicationUpdateCreateFail: version creation failed; ApplicationUpdateNoReleased: version to be released; ApplicationUpdateReleased: version release completed; ApplicationUpdateNormal: none]).
 * @method void setValues(array $Values) Set Filter value set (When the filter name is ApplicationRunStatus, the values can be [ApplicationDeleting: application deletion in progress; ApplicationCreateFail: application creation failed; ApplicationCreating: application creation in progress; ApplicationRunning: normal running; ApplicationNoConfigured: main execution program path not configured]. When the filter name is ApplicationUpdateStatus, the values can be [ApplicationUpdateCreating: version creation in progress; ApplicationUpdateCreateFail: version creation failed; ApplicationUpdateNoReleased: version to be released; ApplicationUpdateReleased: version release completed; ApplicationUpdateNormal: none]).
 */
class Filter extends AbstractModel
{
    /**
     * @var string Filter field name (ApplicationId: application ID; ApplicationName: application name; ApplicationRunStatus: running status; ApplicationUpdateStatus: update status).
     */
    public $Name;

    /**
     * @var array Filter value set (When the filter name is ApplicationRunStatus, the values can be [ApplicationDeleting: application deletion in progress; ApplicationCreateFail: application creation failed; ApplicationCreating: application creation in progress; ApplicationRunning: normal running; ApplicationNoConfigured: main execution program path not configured]. When the filter name is ApplicationUpdateStatus, the values can be [ApplicationUpdateCreating: version creation in progress; ApplicationUpdateCreateFail: version creation failed; ApplicationUpdateNoReleased: version to be released; ApplicationUpdateReleased: version release completed; ApplicationUpdateNormal: none]).
     */
    public $Values;

    /**
     * @param string $Name Filter field name (ApplicationId: application ID; ApplicationName: application name; ApplicationRunStatus: running status; ApplicationUpdateStatus: update status).
     * @param array $Values Filter value set (When the filter name is ApplicationRunStatus, the values can be [ApplicationDeleting: application deletion in progress; ApplicationCreateFail: application creation failed; ApplicationCreating: application creation in progress; ApplicationRunning: normal running; ApplicationNoConfigured: main execution program path not configured]. When the filter name is ApplicationUpdateStatus, the values can be [ApplicationUpdateCreating: version creation in progress; ApplicationUpdateCreateFail: version creation failed; ApplicationUpdateNoReleased: version to be released; ApplicationUpdateReleased: version release completed; ApplicationUpdateNormal: none]).
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }
    }
}
