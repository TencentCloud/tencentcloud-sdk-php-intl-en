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
 * Mobile application data information.
 *
 * @method string getApplicationId() Obtain Application ID.
 * @method void setApplicationId(string $ApplicationId) Set Application ID.
 * @method string getApplicationName() Obtain Application name.
 * @method void setApplicationName(string $ApplicationName) Set Application name.
 * @method string getApplicationType() Obtain Application type (cloud APK: application APK).
 * @method void setApplicationType(string $ApplicationType) Set Application type (cloud APK: application APK).
 * @method string getApplicationRunStatus() Obtain Application running status (ApplicationRunning: normal running; ApplicationNoPackage: no available package).
 * @method void setApplicationRunStatus(string $ApplicationRunStatus) Set Application running status (ApplicationRunning: normal running; ApplicationNoPackage: no available package).
 * @method string getApplicationUpdateStatus() Obtain Application update status (ApplicationUpdateCreating: version creation in progress; ApplicationUpdateCreateFail: version creation failed; ApplicationUpdateNoReleased: version to be released; ApplicationUpdateReleased: version release completed; ApplicationUpdateNormal: none).
 * @method void setApplicationUpdateStatus(string $ApplicationUpdateStatus) Set Application update status (ApplicationUpdateCreating: version creation in progress; ApplicationUpdateCreateFail: version creation failed; ApplicationUpdateNoReleased: version to be released; ApplicationUpdateReleased: version release completed; ApplicationUpdateNormal: none).
 * @method string getApplicationCreateTime() Obtain Application creation time.
 * @method void setApplicationCreateTime(string $ApplicationCreateTime) Set Application creation time.
 * @method array getApplicationVersions() Obtain List of application versions.
 * @method void setApplicationVersions(array $ApplicationVersions) Set List of application versions.
 * @method string getApplicationNature() Obtain Application nature (PUBLIC: public application; PRIVATE: user application).
 * @method void setApplicationNature(string $ApplicationNature) Set Application nature (PUBLIC: public application; PRIVATE: user application).
 */
class UserMobileApplicationInfo extends AbstractModel
{
    /**
     * @var string Application ID.
     */
    public $ApplicationId;

    /**
     * @var string Application name.
     */
    public $ApplicationName;

    /**
     * @var string Application type (cloud APK: application APK).
     */
    public $ApplicationType;

    /**
     * @var string Application running status (ApplicationRunning: normal running; ApplicationNoPackage: no available package).
     */
    public $ApplicationRunStatus;

    /**
     * @var string Application update status (ApplicationUpdateCreating: version creation in progress; ApplicationUpdateCreateFail: version creation failed; ApplicationUpdateNoReleased: version to be released; ApplicationUpdateReleased: version release completed; ApplicationUpdateNormal: none).
     */
    public $ApplicationUpdateStatus;

    /**
     * @var string Application creation time.
     */
    public $ApplicationCreateTime;

    /**
     * @var array List of application versions.
     */
    public $ApplicationVersions;

    /**
     * @var string Application nature (PUBLIC: public application; PRIVATE: user application).
     */
    public $ApplicationNature;

    /**
     * @param string $ApplicationId Application ID.
     * @param string $ApplicationName Application name.
     * @param string $ApplicationType Application type (cloud APK: application APK).
     * @param string $ApplicationRunStatus Application running status (ApplicationRunning: normal running; ApplicationNoPackage: no available package).
     * @param string $ApplicationUpdateStatus Application update status (ApplicationUpdateCreating: version creation in progress; ApplicationUpdateCreateFail: version creation failed; ApplicationUpdateNoReleased: version to be released; ApplicationUpdateReleased: version release completed; ApplicationUpdateNormal: none).
     * @param string $ApplicationCreateTime Application creation time.
     * @param array $ApplicationVersions List of application versions.
     * @param string $ApplicationNature Application nature (PUBLIC: public application; PRIVATE: user application).
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

        if (array_key_exists("ApplicationName",$param) and $param["ApplicationName"] !== null) {
            $this->ApplicationName = $param["ApplicationName"];
        }

        if (array_key_exists("ApplicationType",$param) and $param["ApplicationType"] !== null) {
            $this->ApplicationType = $param["ApplicationType"];
        }

        if (array_key_exists("ApplicationRunStatus",$param) and $param["ApplicationRunStatus"] !== null) {
            $this->ApplicationRunStatus = $param["ApplicationRunStatus"];
        }

        if (array_key_exists("ApplicationUpdateStatus",$param) and $param["ApplicationUpdateStatus"] !== null) {
            $this->ApplicationUpdateStatus = $param["ApplicationUpdateStatus"];
        }

        if (array_key_exists("ApplicationCreateTime",$param) and $param["ApplicationCreateTime"] !== null) {
            $this->ApplicationCreateTime = $param["ApplicationCreateTime"];
        }

        if (array_key_exists("ApplicationVersions",$param) and $param["ApplicationVersions"] !== null) {
            $this->ApplicationVersions = [];
            foreach ($param["ApplicationVersions"] as $key => $value){
                $obj = new UserApplicationVersion();
                $obj->deserialize($value);
                array_push($this->ApplicationVersions, $obj);
            }
        }

        if (array_key_exists("ApplicationNature",$param) and $param["ApplicationNature"] !== null) {
            $this->ApplicationNature = $param["ApplicationNature"];
        }
    }
}
