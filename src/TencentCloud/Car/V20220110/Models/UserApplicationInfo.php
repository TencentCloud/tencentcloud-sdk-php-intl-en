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
 * @method string getApplicationId() Obtain <p>Application Id</p>
 * @method void setApplicationId(string $ApplicationId) Set <p>Application Id</p>
 * @method string getApplicationName() Obtain <p>Application name</p>
 * @method void setApplicationName(string $ApplicationName) Set <p>Application name</p>
 * @method string getApplicationType() Obtain <p>Application type (Cloud 3D: Application3D, Cloud XR: ApplicationXR, Cloud Web: ApplicationWeb)</p>
 * @method void setApplicationType(string $ApplicationType) Set <p>Application type (Cloud 3D: Application3D, Cloud XR: ApplicationXR, Cloud Web: ApplicationWeb)</p>
 * @method string getApplicationExePath() Obtain <p>Program execution path</p>
 * @method void setApplicationExePath(string $ApplicationExePath) Set <p>Program execution path</p>
 * @method string getApplicationInterList() Obtain <p>Application process list</p>
 * @method void setApplicationInterList(string $ApplicationInterList) Set <p>Application process list</p>
 * @method string getApplicationParams() Obtain <p>Application startup parameter</p>
 * @method void setApplicationParams(string $ApplicationParams) Set <p>Application startup parameter</p>
 * @method string getApplicationRunStatus() Obtain <p>Application running status (ApplicationDeleting: application deletion in progress; ApplicationCreateFail: application creation failed; ApplicationCreating: application creation in progress; ApplicationRunning: normal running; ApplicationNoConfigured: main execution program path not configured).</p>
 * @method void setApplicationRunStatus(string $ApplicationRunStatus) Set <p>Application running status (ApplicationDeleting: application deletion in progress; ApplicationCreateFail: application creation failed; ApplicationCreating: application creation in progress; ApplicationRunning: normal running; ApplicationNoConfigured: main execution program path not configured).</p>
 * @method string getApplicationUpdateStatus() Obtain <p>Application update status (ApplicationUpdateCreating: version creation in progress; ApplicationUpdateCreateFail: version creation failed; ApplicationUpdateNoReleased: version to be released; ApplicationUpdateReleased: version release completed; ApplicationUpdateNormal: none)</p>
 * @method void setApplicationUpdateStatus(string $ApplicationUpdateStatus) Set <p>Application update status (ApplicationUpdateCreating: version creation in progress; ApplicationUpdateCreateFail: version creation failed; ApplicationUpdateNoReleased: version to be released; ApplicationUpdateReleased: version release completed; ApplicationUpdateNormal: none)</p>
 * @method string getApplicationCreateTime() Obtain <p>Application creation time</p>
 * @method void setApplicationCreateTime(string $ApplicationCreateTime) Set <p>Application creation time</p>
 * @method array getApplicationVersions() Obtain <p>Application version list</p>
 * @method void setApplicationVersions(array $ApplicationVersions) Set <p>Application version list</p>
 * @method ApplicationBaseInfo getApplicationBaseInfo() Obtain <p>Application basic data</p>
 * @method void setApplicationBaseInfo(ApplicationBaseInfo $ApplicationBaseInfo) Set <p>Application basic data</p>
 * @method integer getApplicationUpdateProgress() Obtain <p>Application update progress</p>
 * @method void setApplicationUpdateProgress(integer $ApplicationUpdateProgress) Set <p>Application update progress</p>
 * @method string getApplicationNature() Obtain <p>Application nature (PUBLIC: public application; PRIVATE: user application)</p>
 * @method void setApplicationNature(string $ApplicationNature) Set <p>Application nature (PUBLIC: public application; PRIVATE: user application)</p>
 * @method array getApplicationStores() Obtain <p>Application repository list</p>
 * @method void setApplicationStores(array $ApplicationStores) Set <p>Application repository list</p>
 * @method array getApplicationTags() Obtain <p>Application tag</p>
 * @method void setApplicationTags(array $ApplicationTags) Set <p>Application tag</p>
 */
class UserApplicationInfo extends AbstractModel
{
    /**
     * @var string <p>Application Id</p>
     */
    public $ApplicationId;

    /**
     * @var string <p>Application name</p>
     */
    public $ApplicationName;

    /**
     * @var string <p>Application type (Cloud 3D: Application3D, Cloud XR: ApplicationXR, Cloud Web: ApplicationWeb)</p>
     */
    public $ApplicationType;

    /**
     * @var string <p>Program execution path</p>
     */
    public $ApplicationExePath;

    /**
     * @var string <p>Application process list</p>
     */
    public $ApplicationInterList;

    /**
     * @var string <p>Application startup parameter</p>
     */
    public $ApplicationParams;

    /**
     * @var string <p>Application running status (ApplicationDeleting: application deletion in progress; ApplicationCreateFail: application creation failed; ApplicationCreating: application creation in progress; ApplicationRunning: normal running; ApplicationNoConfigured: main execution program path not configured).</p>
     */
    public $ApplicationRunStatus;

    /**
     * @var string <p>Application update status (ApplicationUpdateCreating: version creation in progress; ApplicationUpdateCreateFail: version creation failed; ApplicationUpdateNoReleased: version to be released; ApplicationUpdateReleased: version release completed; ApplicationUpdateNormal: none)</p>
     */
    public $ApplicationUpdateStatus;

    /**
     * @var string <p>Application creation time</p>
     */
    public $ApplicationCreateTime;

    /**
     * @var array <p>Application version list</p>
     */
    public $ApplicationVersions;

    /**
     * @var ApplicationBaseInfo <p>Application basic data</p>
     */
    public $ApplicationBaseInfo;

    /**
     * @var integer <p>Application update progress</p>
     */
    public $ApplicationUpdateProgress;

    /**
     * @var string <p>Application nature (PUBLIC: public application; PRIVATE: user application)</p>
     */
    public $ApplicationNature;

    /**
     * @var array <p>Application repository list</p>
     */
    public $ApplicationStores;

    /**
     * @var array <p>Application tag</p>
     */
    public $ApplicationTags;

    /**
     * @param string $ApplicationId <p>Application Id</p>
     * @param string $ApplicationName <p>Application name</p>
     * @param string $ApplicationType <p>Application type (Cloud 3D: Application3D, Cloud XR: ApplicationXR, Cloud Web: ApplicationWeb)</p>
     * @param string $ApplicationExePath <p>Program execution path</p>
     * @param string $ApplicationInterList <p>Application process list</p>
     * @param string $ApplicationParams <p>Application startup parameter</p>
     * @param string $ApplicationRunStatus <p>Application running status (ApplicationDeleting: application deletion in progress; ApplicationCreateFail: application creation failed; ApplicationCreating: application creation in progress; ApplicationRunning: normal running; ApplicationNoConfigured: main execution program path not configured).</p>
     * @param string $ApplicationUpdateStatus <p>Application update status (ApplicationUpdateCreating: version creation in progress; ApplicationUpdateCreateFail: version creation failed; ApplicationUpdateNoReleased: version to be released; ApplicationUpdateReleased: version release completed; ApplicationUpdateNormal: none)</p>
     * @param string $ApplicationCreateTime <p>Application creation time</p>
     * @param array $ApplicationVersions <p>Application version list</p>
     * @param ApplicationBaseInfo $ApplicationBaseInfo <p>Application basic data</p>
     * @param integer $ApplicationUpdateProgress <p>Application update progress</p>
     * @param string $ApplicationNature <p>Application nature (PUBLIC: public application; PRIVATE: user application)</p>
     * @param array $ApplicationStores <p>Application repository list</p>
     * @param array $ApplicationTags <p>Application tag</p>
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

        if (array_key_exists("ApplicationTags",$param) and $param["ApplicationTags"] !== null) {
            $this->ApplicationTags = [];
            foreach ($param["ApplicationTags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->ApplicationTags, $obj);
            }
        }
    }
}
