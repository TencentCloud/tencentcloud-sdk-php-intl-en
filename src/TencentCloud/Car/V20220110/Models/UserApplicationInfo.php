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
namespace TencentCloud\Car\V20220110\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Application data information.
 *
 * @method string getApplicationId() Obtain Application ID.
 * @method void setApplicationId(string $ApplicationId) Set Application ID.
 * @method string getApplicationName() Obtain Application name.
 * @method void setApplicationName(string $ApplicationName) Set Application name.
 * @method string getApplicationType() Obtain Application type (cloud 3D: Application3D; cloud XR: ApplicationXR; cloud Web: ApplicationWeb).
 * @method void setApplicationType(string $ApplicationType) Set Application type (cloud 3D: Application3D; cloud XR: ApplicationXR; cloud Web: ApplicationWeb).
 * @method string getApplicationExePath() Obtain Application program execution path.
 * @method void setApplicationExePath(string $ApplicationExePath) Set Application program execution path.
 * @method string getApplicationInterList() Obtain Application process list.
 * @method void setApplicationInterList(string $ApplicationInterList) Set Application process list.
 * @method string getApplicationParams() Obtain Application startup parameters.
 * @method void setApplicationParams(string $ApplicationParams) Set Application startup parameters.
 * @method string getApplicationRunStatus() Obtain Application running status (ApplicationDeleting: application deletion in progress; ApplicationCreateFail: application creation failed; ApplicationCreating: application creation in progress; ApplicationRunning: normal running; ApplicationNoConfigured: main execution program path not configured).
 * @method void setApplicationRunStatus(string $ApplicationRunStatus) Set Application running status (ApplicationDeleting: application deletion in progress; ApplicationCreateFail: application creation failed; ApplicationCreating: application creation in progress; ApplicationRunning: normal running; ApplicationNoConfigured: main execution program path not configured).
 * @method string getApplicationUpdateStatus() Obtain Application update status (ApplicationUpdateCreating: version creation in progress; ApplicationUpdateCreateFail: version creation failed; ApplicationUpdateNoReleased: version to be released; ApplicationUpdateReleased: version release completed; ApplicationUpdateNormal: none).
 * @method void setApplicationUpdateStatus(string $ApplicationUpdateStatus) Set Application update status (ApplicationUpdateCreating: version creation in progress; ApplicationUpdateCreateFail: version creation failed; ApplicationUpdateNoReleased: version to be released; ApplicationUpdateReleased: version release completed; ApplicationUpdateNormal: none).
 * @method string getApplicationCreateTime() Obtain Application creation time.
 * @method void setApplicationCreateTime(string $ApplicationCreateTime) Set Application creation time.
 * @method array getApplicationVersions() Obtain List of application versions.
 * @method void setApplicationVersions(array $ApplicationVersions) Set List of application versions.
 * @method ApplicationBaseInfo getApplicationBaseInfo() Obtain Application basic data.
 * @method void setApplicationBaseInfo(ApplicationBaseInfo $ApplicationBaseInfo) Set Application basic data.
 * @method integer getApplicationUpdateProgress() Obtain Application update progress.
 * @method void setApplicationUpdateProgress(integer $ApplicationUpdateProgress) Set Application update progress.
 * @method string getApplicationNature() Obtain Application nature (PUBLIC: public application; PRIVATE: user application).
 * @method void setApplicationNature(string $ApplicationNature) Set Application nature (PUBLIC: public application; PRIVATE: user application).
 * @method array getApplicationStores() Obtain Application repository list.
 * @method void setApplicationStores(array $ApplicationStores) Set Application repository list.
 */
class UserApplicationInfo extends AbstractModel
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
     * @var string Application type (cloud 3D: Application3D; cloud XR: ApplicationXR; cloud Web: ApplicationWeb).
     */
    public $ApplicationType;

    /**
     * @var string Application program execution path.
     */
    public $ApplicationExePath;

    /**
     * @var string Application process list.
     */
    public $ApplicationInterList;

    /**
     * @var string Application startup parameters.
     */
    public $ApplicationParams;

    /**
     * @var string Application running status (ApplicationDeleting: application deletion in progress; ApplicationCreateFail: application creation failed; ApplicationCreating: application creation in progress; ApplicationRunning: normal running; ApplicationNoConfigured: main execution program path not configured).
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
     * @var ApplicationBaseInfo Application basic data.
     */
    public $ApplicationBaseInfo;

    /**
     * @var integer Application update progress.
     */
    public $ApplicationUpdateProgress;

    /**
     * @var string Application nature (PUBLIC: public application; PRIVATE: user application).
     */
    public $ApplicationNature;

    /**
     * @var array Application repository list.
     */
    public $ApplicationStores;

    /**
     * @param string $ApplicationId Application ID.
     * @param string $ApplicationName Application name.
     * @param string $ApplicationType Application type (cloud 3D: Application3D; cloud XR: ApplicationXR; cloud Web: ApplicationWeb).
     * @param string $ApplicationExePath Application program execution path.
     * @param string $ApplicationInterList Application process list.
     * @param string $ApplicationParams Application startup parameters.
     * @param string $ApplicationRunStatus Application running status (ApplicationDeleting: application deletion in progress; ApplicationCreateFail: application creation failed; ApplicationCreating: application creation in progress; ApplicationRunning: normal running; ApplicationNoConfigured: main execution program path not configured).
     * @param string $ApplicationUpdateStatus Application update status (ApplicationUpdateCreating: version creation in progress; ApplicationUpdateCreateFail: version creation failed; ApplicationUpdateNoReleased: version to be released; ApplicationUpdateReleased: version release completed; ApplicationUpdateNormal: none).
     * @param string $ApplicationCreateTime Application creation time.
     * @param array $ApplicationVersions List of application versions.
     * @param ApplicationBaseInfo $ApplicationBaseInfo Application basic data.
     * @param integer $ApplicationUpdateProgress Application update progress.
     * @param string $ApplicationNature Application nature (PUBLIC: public application; PRIVATE: user application).
     * @param array $ApplicationStores Application repository list.
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

        if (array_key_exists("ApplicationExePath",$param) and $param["ApplicationExePath"] !== null) {
            $this->ApplicationExePath = $param["ApplicationExePath"];
        }

        if (array_key_exists("ApplicationInterList",$param) and $param["ApplicationInterList"] !== null) {
            $this->ApplicationInterList = $param["ApplicationInterList"];
        }

        if (array_key_exists("ApplicationParams",$param) and $param["ApplicationParams"] !== null) {
            $this->ApplicationParams = $param["ApplicationParams"];
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

        if (array_key_exists("ApplicationBaseInfo",$param) and $param["ApplicationBaseInfo"] !== null) {
            $this->ApplicationBaseInfo = new ApplicationBaseInfo();
            $this->ApplicationBaseInfo->deserialize($param["ApplicationBaseInfo"]);
        }

        if (array_key_exists("ApplicationUpdateProgress",$param) and $param["ApplicationUpdateProgress"] !== null) {
            $this->ApplicationUpdateProgress = $param["ApplicationUpdateProgress"];
        }

        if (array_key_exists("ApplicationNature",$param) and $param["ApplicationNature"] !== null) {
            $this->ApplicationNature = $param["ApplicationNature"];
        }

        if (array_key_exists("ApplicationStores",$param) and $param["ApplicationStores"] !== null) {
            $this->ApplicationStores = [];
            foreach ($param["ApplicationStores"] as $key => $value){
                $obj = new UserApplicationStore();
                $obj->deserialize($value);
                array_push($this->ApplicationStores, $obj);
            }
        }
    }
}
