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
 * Cloud application project type.
 *
 * @method string getProjectId() Obtain <p>Project ID.</p>
 * @method void setProjectId(string $ProjectId) Set <p>Project ID.</p>
 * @method string getName() Obtain <p>Project name.</p>
 * @method void setName(string $Name) Set <p>Project name.</p>
 * @method string getDescription() Obtain <p>Project description.</p>
 * @method void setDescription(string $Description) Set <p>Project description.</p>
 * @method string getType() Obtain <p>Concurrency type required for project operation.<br>S1: Small-scale cloud application rendering concurrency<br>M1: Medium cloud application rendering concurrency<br>L1: Large cloud application rendering concurrency<br>L2: Large cloud application rendering concurrency<br>XL2: Ultra-large cloud application rendering concurrency<br>MM1_HD: Performance Cloud ARM concurrency - high-definition<br>MM1_FHD: Performance Cloud ARM concurrency - ultra-high-definition</p>
 * @method void setType(string $Type) Set <p>Concurrency type required for project operation.<br>S1: Small-scale cloud application rendering concurrency<br>M1: Medium cloud application rendering concurrency<br>L1: Large cloud application rendering concurrency<br>L2: Large cloud application rendering concurrency<br>XL2: Ultra-large cloud application rendering concurrency<br>MM1_HD: Performance Cloud ARM concurrency - high-definition<br>MM1_FHD: Performance Cloud ARM concurrency - ultra-high-definition</p>
 * @method string getApplicationId() Obtain <p>Cloud Application ID</p>
 * @method void setApplicationId(string $ApplicationId) Set <p>Cloud Application ID</p>
 * @method boolean getIsPreload() Obtain <p>Pre-launch</p>
 * @method void setIsPreload(boolean $IsPreload) Set <p>Pre-launch</p>
 * @method integer getAmount() Obtain <p>Configured concurrency</p>
 * @method void setAmount(integer $Amount) Set <p>Configured concurrency</p>
 * @method integer getUsing() Obtain <p>Number of concurrencies in use</p>
 * @method void setUsing(integer $Using) Set <p>Number of concurrencies in use</p>
 * @method string getApplicationStatus() Obtain <p>Application status: NoConcurrent - no concurrency package configured, Online - launched, other statuses are cloud application status: applicationCreating - creating, applicationCreateFail - creation failed, applicationDeleting - deleting, applicationNoConfigured - startup parameter not configured</p>
 * @method void setApplicationStatus(string $ApplicationStatus) Set <p>Application status: NoConcurrent - no concurrency package configured, Online - launched, other statuses are cloud application status: applicationCreating - creating, applicationCreateFail - creation failed, applicationDeleting - deleting, applicationNoConfigured - startup parameter not configured</p>
 * @method string getApplicationParams() Obtain <p>Application startup parameter</p>
 * @method void setApplicationParams(string $ApplicationParams) Set <p>Application startup parameter</p>
 * @method string getCreateTime() Obtain <p>Creation time.</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Creation time.</p>
 * @method string getApplicationName() Obtain <p>Application name</p>
 * @method void setApplicationName(string $ApplicationName) Set <p>Application name</p>
 * @method string getResolution() Obtain <p>Resolution, format as "width x height", for example 1920x1080</p>
 * @method void setResolution(string $Resolution) Set <p>Resolution, format as "width x height", for example 1920x1080</p>
 * @method string getProjectType() Obtain <p>Project type.<br>SHARED: Shared by all applications<br>EXCLUSIVE (default value): Dedicated for one application</p>
 * @method void setProjectType(string $ProjectType) Set <p>Project type.<br>SHARED: Shared by all applications<br>EXCLUSIVE (default value): Dedicated for one application</p>
 * @method string getPurpose() Obtain <p>Purpose.<br>EXPERIENCE: Experience</p>
 * @method void setPurpose(string $Purpose) Set <p>Purpose.<br>EXPERIENCE: Experience</p>
 * @method array getApplicationRegions() Obtain <p>Application distribution area (Standard zone: ap-chinese-mainland: Chinese mainland, na-north-america: North America, eu-frankfurt: Frankfurt, ap-mumbai: Mumbai, ap-tokyo: Tokyo, ap-seoul: Seoul, ap-singapore: Singapore, ap-bangkok: Bangkok, ap-hongkong: Hong Kong (China). Fusion region: me-middle-east-fusion: Middle East, na-north-america-fusion: North America, sa-south-america-fusion: South America, ap-tokyo-fusion: Tokyo, ap-seoul-fusion: Seoul, eu-frankfurt-fusion: Frankfurt, ap-singapore-fusion: Singapore, ap-hongkong-fusion: Hong Kong (China))</p>
 * @method void setApplicationRegions(array $ApplicationRegions) Set <p>Application distribution area (Standard zone: ap-chinese-mainland: Chinese mainland, na-north-america: North America, eu-frankfurt: Frankfurt, ap-mumbai: Mumbai, ap-tokyo: Tokyo, ap-seoul: Seoul, ap-singapore: Singapore, ap-bangkok: Bangkok, ap-hongkong: Hong Kong (China). Fusion region: me-middle-east-fusion: Middle East, na-north-america-fusion: North America, sa-south-america-fusion: South America, ap-tokyo-fusion: Tokyo, ap-seoul-fusion: Seoul, eu-frankfurt-fusion: Frankfurt, ap-singapore-fusion: Singapore, ap-hongkong-fusion: Hong Kong (China))</p>
 * @method array getConcurrentRegions() Obtain <p>Concurrent region (Standard zone: ap-chinese-mainland: Chinese mainland, na-north-america: North America, eu-frankfurt: Frankfurt, ap-mumbai: Mumbai, ap-tokyo: Tokyo, ap-seoul: Seoul, ap-singapore: Singapore, ap-bangkok: Bangkok, ap-hongkong: Hong Kong (China), Fusion region: me-middle-east-fusion: Middle East, na-north-america-fusion: North America, sa-south-america-fusion: South America, ap-tokyo-fusion: Tokyo, ap-seoul-fusion: Seoul, eu-frankfurt-fusion: Frankfurt, ap-singapore-fusion: Singapore, ap-hongkong-fusion: Hong Kong (China))</p>
 * @method void setConcurrentRegions(array $ConcurrentRegions) Set <p>Concurrent region (Standard zone: ap-chinese-mainland: Chinese mainland, na-north-america: North America, eu-frankfurt: Frankfurt, ap-mumbai: Mumbai, ap-tokyo: Tokyo, ap-seoul: Seoul, ap-singapore: Singapore, ap-bangkok: Bangkok, ap-hongkong: Hong Kong (China), Fusion region: me-middle-east-fusion: Middle East, na-north-america-fusion: North America, sa-south-america-fusion: South America, ap-tokyo-fusion: Tokyo, ap-seoul-fusion: Seoul, eu-frankfurt-fusion: Frankfurt, ap-singapore-fusion: Singapore, ap-hongkong-fusion: Hong Kong (China))</p>
 * @method string getProjectCategory() Obtain <p>Project category.<br>DESKTOP: On PC, default value<br>MOBILE: Mobile terminal</p>
 * @method void setProjectCategory(string $ProjectCategory) Set <p>Project category.<br>DESKTOP: On PC, default value<br>MOBILE: Mobile terminal</p>
 */
class ApplicationProject extends AbstractModel
{
    /**
     * @var string <p>Project ID.</p>
     */
    public $ProjectId;

    /**
     * @var string <p>Project name.</p>
     */
    public $Name;

    /**
     * @var string <p>Project description.</p>
     */
    public $Description;

    /**
     * @var string <p>Concurrency type required for project operation.<br>S1: Small-scale cloud application rendering concurrency<br>M1: Medium cloud application rendering concurrency<br>L1: Large cloud application rendering concurrency<br>L2: Large cloud application rendering concurrency<br>XL2: Ultra-large cloud application rendering concurrency<br>MM1_HD: Performance Cloud ARM concurrency - high-definition<br>MM1_FHD: Performance Cloud ARM concurrency - ultra-high-definition</p>
     */
    public $Type;

    /**
     * @var string <p>Cloud Application ID</p>
     */
    public $ApplicationId;

    /**
     * @var boolean <p>Pre-launch</p>
     */
    public $IsPreload;

    /**
     * @var integer <p>Configured concurrency</p>
     */
    public $Amount;

    /**
     * @var integer <p>Number of concurrencies in use</p>
     */
    public $Using;

    /**
     * @var string <p>Application status: NoConcurrent - no concurrency package configured, Online - launched, other statuses are cloud application status: applicationCreating - creating, applicationCreateFail - creation failed, applicationDeleting - deleting, applicationNoConfigured - startup parameter not configured</p>
     */
    public $ApplicationStatus;

    /**
     * @var string <p>Application startup parameter</p>
     */
    public $ApplicationParams;

    /**
     * @var string <p>Creation time.</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Application name</p>
     */
    public $ApplicationName;

    /**
     * @var string <p>Resolution, format as "width x height", for example 1920x1080</p>
     */
    public $Resolution;

    /**
     * @var string <p>Project type.<br>SHARED: Shared by all applications<br>EXCLUSIVE (default value): Dedicated for one application</p>
     */
    public $ProjectType;

    /**
     * @var string <p>Purpose.<br>EXPERIENCE: Experience</p>
     */
    public $Purpose;

    /**
     * @var array <p>Application distribution area (Standard zone: ap-chinese-mainland: Chinese mainland, na-north-america: North America, eu-frankfurt: Frankfurt, ap-mumbai: Mumbai, ap-tokyo: Tokyo, ap-seoul: Seoul, ap-singapore: Singapore, ap-bangkok: Bangkok, ap-hongkong: Hong Kong (China). Fusion region: me-middle-east-fusion: Middle East, na-north-america-fusion: North America, sa-south-america-fusion: South America, ap-tokyo-fusion: Tokyo, ap-seoul-fusion: Seoul, eu-frankfurt-fusion: Frankfurt, ap-singapore-fusion: Singapore, ap-hongkong-fusion: Hong Kong (China))</p>
     */
    public $ApplicationRegions;

    /**
     * @var array <p>Concurrent region (Standard zone: ap-chinese-mainland: Chinese mainland, na-north-america: North America, eu-frankfurt: Frankfurt, ap-mumbai: Mumbai, ap-tokyo: Tokyo, ap-seoul: Seoul, ap-singapore: Singapore, ap-bangkok: Bangkok, ap-hongkong: Hong Kong (China), Fusion region: me-middle-east-fusion: Middle East, na-north-america-fusion: North America, sa-south-america-fusion: South America, ap-tokyo-fusion: Tokyo, ap-seoul-fusion: Seoul, eu-frankfurt-fusion: Frankfurt, ap-singapore-fusion: Singapore, ap-hongkong-fusion: Hong Kong (China))</p>
     */
    public $ConcurrentRegions;

    /**
     * @var string <p>Project category.<br>DESKTOP: On PC, default value<br>MOBILE: Mobile terminal</p>
     */
    public $ProjectCategory;

    /**
     * @param string $ProjectId <p>Project ID.</p>
     * @param string $Name <p>Project name.</p>
     * @param string $Description <p>Project description.</p>
     * @param string $Type <p>Concurrency type required for project operation.<br>S1: Small-scale cloud application rendering concurrency<br>M1: Medium cloud application rendering concurrency<br>L1: Large cloud application rendering concurrency<br>L2: Large cloud application rendering concurrency<br>XL2: Ultra-large cloud application rendering concurrency<br>MM1_HD: Performance Cloud ARM concurrency - high-definition<br>MM1_FHD: Performance Cloud ARM concurrency - ultra-high-definition</p>
     * @param string $ApplicationId <p>Cloud Application ID</p>
     * @param boolean $IsPreload <p>Pre-launch</p>
     * @param integer $Amount <p>Configured concurrency</p>
     * @param integer $Using <p>Number of concurrencies in use</p>
     * @param string $ApplicationStatus <p>Application status: NoConcurrent - no concurrency package configured, Online - launched, other statuses are cloud application status: applicationCreating - creating, applicationCreateFail - creation failed, applicationDeleting - deleting, applicationNoConfigured - startup parameter not configured</p>
     * @param string $ApplicationParams <p>Application startup parameter</p>
     * @param string $CreateTime <p>Creation time.</p>
     * @param string $ApplicationName <p>Application name</p>
     * @param string $Resolution <p>Resolution, format as "width x height", for example 1920x1080</p>
     * @param string $ProjectType <p>Project type.<br>SHARED: Shared by all applications<br>EXCLUSIVE (default value): Dedicated for one application</p>
     * @param string $Purpose <p>Purpose.<br>EXPERIENCE: Experience</p>
     * @param array $ApplicationRegions <p>Application distribution area (Standard zone: ap-chinese-mainland: Chinese mainland, na-north-america: North America, eu-frankfurt: Frankfurt, ap-mumbai: Mumbai, ap-tokyo: Tokyo, ap-seoul: Seoul, ap-singapore: Singapore, ap-bangkok: Bangkok, ap-hongkong: Hong Kong (China). Fusion region: me-middle-east-fusion: Middle East, na-north-america-fusion: North America, sa-south-america-fusion: South America, ap-tokyo-fusion: Tokyo, ap-seoul-fusion: Seoul, eu-frankfurt-fusion: Frankfurt, ap-singapore-fusion: Singapore, ap-hongkong-fusion: Hong Kong (China))</p>
     * @param array $ConcurrentRegions <p>Concurrent region (Standard zone: ap-chinese-mainland: Chinese mainland, na-north-america: North America, eu-frankfurt: Frankfurt, ap-mumbai: Mumbai, ap-tokyo: Tokyo, ap-seoul: Seoul, ap-singapore: Singapore, ap-bangkok: Bangkok, ap-hongkong: Hong Kong (China), Fusion region: me-middle-east-fusion: Middle East, na-north-america-fusion: North America, sa-south-america-fusion: South America, ap-tokyo-fusion: Tokyo, ap-seoul-fusion: Seoul, eu-frankfurt-fusion: Frankfurt, ap-singapore-fusion: Singapore, ap-hongkong-fusion: Hong Kong (China))</p>
     * @param string $ProjectCategory <p>Project category.<br>DESKTOP: On PC, default value<br>MOBILE: Mobile terminal</p>
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("IsPreload",$param) and $param["IsPreload"] !== null) {
            $this->IsPreload = $param["IsPreload"];
        }

        if (array_key_exists("Amount",$param) and $param["Amount"] !== null) {
            $this->Amount = $param["Amount"];
        }

        if (array_key_exists("Using",$param) and $param["Using"] !== null) {
            $this->Using = $param["Using"];
        }

        if (array_key_exists("ApplicationStatus",$param) and $param["ApplicationStatus"] !== null) {
            $this->ApplicationStatus = $param["ApplicationStatus"];
        }

        if (array_key_exists("ApplicationParams",$param) and $param["ApplicationParams"] !== null) {
            $this->ApplicationParams = $param["ApplicationParams"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ApplicationName",$param) and $param["ApplicationName"] !== null) {
            $this->ApplicationName = $param["ApplicationName"];
        }

        if (array_key_exists("Resolution",$param) and $param["Resolution"] !== null) {
            $this->Resolution = $param["Resolution"];
        }

        if (array_key_exists("ProjectType",$param) and $param["ProjectType"] !== null) {
            $this->ProjectType = $param["ProjectType"];
        }

        if (array_key_exists("Purpose",$param) and $param["Purpose"] !== null) {
            $this->Purpose = $param["Purpose"];
        }

        if (array_key_exists("ApplicationRegions",$param) and $param["ApplicationRegions"] !== null) {
            $this->ApplicationRegions = $param["ApplicationRegions"];
        }

        if (array_key_exists("ConcurrentRegions",$param) and $param["ConcurrentRegions"] !== null) {
            $this->ConcurrentRegions = $param["ConcurrentRegions"];
        }

        if (array_key_exists("ProjectCategory",$param) and $param["ProjectCategory"] !== null) {
            $this->ProjectCategory = $param["ProjectCategory"];
        }
    }
}
