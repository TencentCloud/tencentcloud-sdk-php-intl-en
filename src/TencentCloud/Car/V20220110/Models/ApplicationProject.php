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
 * Cloud application project type.
 *
 * @method string getProjectId() Obtain Project ID.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProjectId(string $ProjectId) Set Project ID.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getName() Obtain Project name.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set Project name.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDescription() Obtain Project description.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDescription(string $Description) Set Project description.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getType() Obtain Concurrency type required for project operation.S1: concurrency for rendering small cloud applications.M1: concurrency for rendering medium cloud applications.L1: concurrency for rendering large cloud applications.L2: concurrency for rendering large cloud applications.XL2: concurrency for rendering extra large cloud applications.MM1_HD: concurrency for performance-based cloud ARM (HD).MM1_FHD: concurrency for performance-based cloud ARM (FHD).Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setType(string $Type) Set Concurrency type required for project operation.S1: concurrency for rendering small cloud applications.M1: concurrency for rendering medium cloud applications.L1: concurrency for rendering large cloud applications.L2: concurrency for rendering large cloud applications.XL2: concurrency for rendering extra large cloud applications.MM1_HD: concurrency for performance-based cloud ARM (HD).MM1_FHD: concurrency for performance-based cloud ARM (FHD).Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getApplicationId() Obtain Cloud application ID.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setApplicationId(string $ApplicationId) Set Cloud application ID.Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsPreload() Obtain Pre-launch.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsPreload(boolean $IsPreload) Set Pre-launch.Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getAmount() Obtain Number of concurrencies already configured.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAmount(integer $Amount) Set Number of concurrencies already configured.Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getUsing() Obtain Number of concurrencies in use.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUsing(integer $Using) Set Number of concurrencies in use.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getApplicationStatus() Obtain Application status. NoConcurrent: no concurrency pack configured; Online: activated. Cloud application status: applicationCreating: creating; applicationCreateFail: creation failed; applicationDeleting: deleting; applicationNoConfigured: startup parameters not configured.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setApplicationStatus(string $ApplicationStatus) Set Application status. NoConcurrent: no concurrency pack configured; Online: activated. Cloud application status: applicationCreating: creating; applicationCreateFail: creation failed; applicationDeleting: deleting; applicationNoConfigured: startup parameters not configured.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getApplicationParams() Obtain Application startup parameters.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setApplicationParams(string $ApplicationParams) Set Application startup parameters.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Creation time.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation time.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getApplicationName() Obtain Application name.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setApplicationName(string $ApplicationName) Set Application name.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getResolution() Obtain Resolution, in the format of widthxheight, such as 1920x1080.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResolution(string $Resolution) Set Resolution, in the format of widthxheight, such as 1920x1080.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProjectType() Obtain Project type.SHARED: shared by all applications.EXCLUSIVE (default value): dedicated for one application.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProjectType(string $ProjectType) Set Project type.SHARED: shared by all applications.EXCLUSIVE (default value): dedicated for one application.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPurpose() Obtain Purpose.EXPERIENCE: Experience.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPurpose(string $Purpose) Set Purpose.EXPERIENCE: Experience.Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getApplicationRegions() Obtain Application distribution area. Standard areas are as follows. ap-chinese-mainland: Chinese mainland; na-north-america: North America; eu-frankfurt: Frankfurt; ap-mumbai: Mumbai; ap-tokyo: Tokyo; ap-seoul: Seoul; ap-singapore: Singapore; ap-bangkok: Bangkok; ap-hongkong: Hong Kong (China). Fusion areas are as follows. me-middle-east-fusion: Middle East; na-north-america-fusion: North America; sa-south-america-fusion: South America; ap-tokyo-fusion: Tokyo; ap-seoul-fusion: Seoul; eu-frankfurt-fusion: Frankfurt; ap-singapore-fusion: Singapore; ap-hongkong-fusion: Hong Kong (China).Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setApplicationRegions(array $ApplicationRegions) Set Application distribution area. Standard areas are as follows. ap-chinese-mainland: Chinese mainland; na-north-america: North America; eu-frankfurt: Frankfurt; ap-mumbai: Mumbai; ap-tokyo: Tokyo; ap-seoul: Seoul; ap-singapore: Singapore; ap-bangkok: Bangkok; ap-hongkong: Hong Kong (China). Fusion areas are as follows. me-middle-east-fusion: Middle East; na-north-america-fusion: North America; sa-south-america-fusion: South America; ap-tokyo-fusion: Tokyo; ap-seoul-fusion: Seoul; eu-frankfurt-fusion: Frankfurt; ap-singapore-fusion: Singapore; ap-hongkong-fusion: Hong Kong (China).Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getConcurrentRegions() Obtain Concurrency area. Standard areas are as follows. ap-chinese-mainland: Chinese mainland; na-north-america: North America; eu-frankfurt: Frankfurt; ap-mumbai: Mumbai; ap-tokyo: Tokyo; ap-seoul: Seoul; ap-singapore: Singapore; ap-bangkok: Bangkok; ap-hongkong: Hong Kong (China). Fusion areas are as follows. me-middle-east-fusion: Middle East; na-north-america-fusion: North America; sa-south-america-fusion: South America; ap-tokyo-fusion: Tokyo; ap-seoul-fusion: Seoul; eu-frankfurt-fusion: Frankfurt; ap-singapore-fusion: Singapore; ap-hongkong-fusion: Hong Kong (China).Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setConcurrentRegions(array $ConcurrentRegions) Set Concurrency area. Standard areas are as follows. ap-chinese-mainland: Chinese mainland; na-north-america: North America; eu-frankfurt: Frankfurt; ap-mumbai: Mumbai; ap-tokyo: Tokyo; ap-seoul: Seoul; ap-singapore: Singapore; ap-bangkok: Bangkok; ap-hongkong: Hong Kong (China). Fusion areas are as follows. me-middle-east-fusion: Middle East; na-north-america-fusion: North America; sa-south-america-fusion: South America; ap-tokyo-fusion: Tokyo; ap-seoul-fusion: Seoul; eu-frankfurt-fusion: Frankfurt; ap-singapore-fusion: Singapore; ap-hongkong-fusion: Hong Kong (China).Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProjectCategory() Obtain Project category.DESKTOP: desktop (default value).MOBILE: mobile.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProjectCategory(string $ProjectCategory) Set Project category.DESKTOP: desktop (default value).MOBILE: mobile.Note: This field may return null, indicating that no valid values can be obtained.
 */
class ApplicationProject extends AbstractModel
{
    /**
     * @var string Project ID.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProjectId;

    /**
     * @var string Project name.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var string Project description.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Description;

    /**
     * @var string Concurrency type required for project operation.S1: concurrency for rendering small cloud applications.M1: concurrency for rendering medium cloud applications.L1: concurrency for rendering large cloud applications.L2: concurrency for rendering large cloud applications.XL2: concurrency for rendering extra large cloud applications.MM1_HD: concurrency for performance-based cloud ARM (HD).MM1_FHD: concurrency for performance-based cloud ARM (FHD).Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Type;

    /**
     * @var string Cloud application ID.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ApplicationId;

    /**
     * @var boolean Pre-launch.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsPreload;

    /**
     * @var integer Number of concurrencies already configured.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Amount;

    /**
     * @var integer Number of concurrencies in use.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Using;

    /**
     * @var string Application status. NoConcurrent: no concurrency pack configured; Online: activated. Cloud application status: applicationCreating: creating; applicationCreateFail: creation failed; applicationDeleting: deleting; applicationNoConfigured: startup parameters not configured.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ApplicationStatus;

    /**
     * @var string Application startup parameters.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ApplicationParams;

    /**
     * @var string Creation time.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Application name.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ApplicationName;

    /**
     * @var string Resolution, in the format of widthxheight, such as 1920x1080.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Resolution;

    /**
     * @var string Project type.SHARED: shared by all applications.EXCLUSIVE (default value): dedicated for one application.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProjectType;

    /**
     * @var string Purpose.EXPERIENCE: Experience.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Purpose;

    /**
     * @var array Application distribution area. Standard areas are as follows. ap-chinese-mainland: Chinese mainland; na-north-america: North America; eu-frankfurt: Frankfurt; ap-mumbai: Mumbai; ap-tokyo: Tokyo; ap-seoul: Seoul; ap-singapore: Singapore; ap-bangkok: Bangkok; ap-hongkong: Hong Kong (China). Fusion areas are as follows. me-middle-east-fusion: Middle East; na-north-america-fusion: North America; sa-south-america-fusion: South America; ap-tokyo-fusion: Tokyo; ap-seoul-fusion: Seoul; eu-frankfurt-fusion: Frankfurt; ap-singapore-fusion: Singapore; ap-hongkong-fusion: Hong Kong (China).Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ApplicationRegions;

    /**
     * @var array Concurrency area. Standard areas are as follows. ap-chinese-mainland: Chinese mainland; na-north-america: North America; eu-frankfurt: Frankfurt; ap-mumbai: Mumbai; ap-tokyo: Tokyo; ap-seoul: Seoul; ap-singapore: Singapore; ap-bangkok: Bangkok; ap-hongkong: Hong Kong (China). Fusion areas are as follows. me-middle-east-fusion: Middle East; na-north-america-fusion: North America; sa-south-america-fusion: South America; ap-tokyo-fusion: Tokyo; ap-seoul-fusion: Seoul; eu-frankfurt-fusion: Frankfurt; ap-singapore-fusion: Singapore; ap-hongkong-fusion: Hong Kong (China).Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ConcurrentRegions;

    /**
     * @var string Project category.DESKTOP: desktop (default value).MOBILE: mobile.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProjectCategory;

    /**
     * @param string $ProjectId Project ID.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Name Project name.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Description Project description.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Type Concurrency type required for project operation.S1: concurrency for rendering small cloud applications.M1: concurrency for rendering medium cloud applications.L1: concurrency for rendering large cloud applications.L2: concurrency for rendering large cloud applications.XL2: concurrency for rendering extra large cloud applications.MM1_HD: concurrency for performance-based cloud ARM (HD).MM1_FHD: concurrency for performance-based cloud ARM (FHD).Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ApplicationId Cloud application ID.Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsPreload Pre-launch.Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Amount Number of concurrencies already configured.Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Using Number of concurrencies in use.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ApplicationStatus Application status. NoConcurrent: no concurrency pack configured; Online: activated. Cloud application status: applicationCreating: creating; applicationCreateFail: creation failed; applicationDeleting: deleting; applicationNoConfigured: startup parameters not configured.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ApplicationParams Application startup parameters.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Creation time.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ApplicationName Application name.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Resolution Resolution, in the format of widthxheight, such as 1920x1080.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ProjectType Project type.SHARED: shared by all applications.EXCLUSIVE (default value): dedicated for one application.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Purpose Purpose.EXPERIENCE: Experience.Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ApplicationRegions Application distribution area. Standard areas are as follows. ap-chinese-mainland: Chinese mainland; na-north-america: North America; eu-frankfurt: Frankfurt; ap-mumbai: Mumbai; ap-tokyo: Tokyo; ap-seoul: Seoul; ap-singapore: Singapore; ap-bangkok: Bangkok; ap-hongkong: Hong Kong (China). Fusion areas are as follows. me-middle-east-fusion: Middle East; na-north-america-fusion: North America; sa-south-america-fusion: South America; ap-tokyo-fusion: Tokyo; ap-seoul-fusion: Seoul; eu-frankfurt-fusion: Frankfurt; ap-singapore-fusion: Singapore; ap-hongkong-fusion: Hong Kong (China).Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ConcurrentRegions Concurrency area. Standard areas are as follows. ap-chinese-mainland: Chinese mainland; na-north-america: North America; eu-frankfurt: Frankfurt; ap-mumbai: Mumbai; ap-tokyo: Tokyo; ap-seoul: Seoul; ap-singapore: Singapore; ap-bangkok: Bangkok; ap-hongkong: Hong Kong (China). Fusion areas are as follows. me-middle-east-fusion: Middle East; na-north-america-fusion: North America; sa-south-america-fusion: South America; ap-tokyo-fusion: Tokyo; ap-seoul-fusion: Seoul; eu-frankfurt-fusion: Frankfurt; ap-singapore-fusion: Singapore; ap-hongkong-fusion: Hong Kong (China).Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ProjectCategory Project category.DESKTOP: desktop (default value).MOBILE: mobile.Note: This field may return null, indicating that no valid values can be obtained.
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
