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
 * Application status information.
 *
 * @method string getApplicationId() Obtain Application ID.
 * @method void setApplicationId(string $ApplicationId) Set Application ID.
 * @method string getApplicationRunStatus() Obtain Application running status (ApplicationDeleting: application deletion in progress; ApplicationCreateFail: application creation failed; ApplicationCreating: application creation in progress; ApplicationRunning: normal running; ApplicationNoConfigured: main execution program path not configured; ApplicationNoPackage: no available package).
 * @method void setApplicationRunStatus(string $ApplicationRunStatus) Set Application running status (ApplicationDeleting: application deletion in progress; ApplicationCreateFail: application creation failed; ApplicationCreating: application creation in progress; ApplicationRunning: normal running; ApplicationNoConfigured: main execution program path not configured; ApplicationNoPackage: no available package).
 * @method string getApplicationUpdateStatus() Obtain Application update status (ApplicationUpdateCreating: version creation in progress; ApplicationUpdateCreateFail: version creation failed; ApplicationUpdateNoReleased: version to be released; ApplicationUpdateReleased: version release completed; ApplicationUpdateNormal: none).
 * @method void setApplicationUpdateStatus(string $ApplicationUpdateStatus) Set Application update status (ApplicationUpdateCreating: version creation in progress; ApplicationUpdateCreateFail: version creation failed; ApplicationUpdateNoReleased: version to be released; ApplicationUpdateReleased: version release completed; ApplicationUpdateNormal: none).
 * @method integer getApplicationUpdateProgress() Obtain Application update progress.
 * @method void setApplicationUpdateProgress(integer $ApplicationUpdateProgress) Set Application update progress.
 */
class UserApplicationStatus extends AbstractModel
{
    /**
     * @var string Application ID.
     */
    public $ApplicationId;

    /**
     * @var string Application running status (ApplicationDeleting: application deletion in progress; ApplicationCreateFail: application creation failed; ApplicationCreating: application creation in progress; ApplicationRunning: normal running; ApplicationNoConfigured: main execution program path not configured; ApplicationNoPackage: no available package).
     */
    public $ApplicationRunStatus;

    /**
     * @var string Application update status (ApplicationUpdateCreating: version creation in progress; ApplicationUpdateCreateFail: version creation failed; ApplicationUpdateNoReleased: version to be released; ApplicationUpdateReleased: version release completed; ApplicationUpdateNormal: none).
     */
    public $ApplicationUpdateStatus;

    /**
     * @var integer Application update progress.
     */
    public $ApplicationUpdateProgress;

    /**
     * @param string $ApplicationId Application ID.
     * @param string $ApplicationRunStatus Application running status (ApplicationDeleting: application deletion in progress; ApplicationCreateFail: application creation failed; ApplicationCreating: application creation in progress; ApplicationRunning: normal running; ApplicationNoConfigured: main execution program path not configured; ApplicationNoPackage: no available package).
     * @param string $ApplicationUpdateStatus Application update status (ApplicationUpdateCreating: version creation in progress; ApplicationUpdateCreateFail: version creation failed; ApplicationUpdateNoReleased: version to be released; ApplicationUpdateReleased: version release completed; ApplicationUpdateNormal: none).
     * @param integer $ApplicationUpdateProgress Application update progress.
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
        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("ApplicationRunStatus",$param) and $param["ApplicationRunStatus"] !== null) {
            $this->ApplicationRunStatus = $param["ApplicationRunStatus"];
        }

        if (array_key_exists("ApplicationUpdateStatus",$param) and $param["ApplicationUpdateStatus"] !== null) {
            $this->ApplicationUpdateStatus = $param["ApplicationUpdateStatus"];
        }

        if (array_key_exists("ApplicationUpdateProgress",$param) and $param["ApplicationUpdateProgress"] !== null) {
            $this->ApplicationUpdateProgress = $param["ApplicationUpdateProgress"];
        }
    }
}
