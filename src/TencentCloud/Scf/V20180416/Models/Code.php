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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getCosBucketName() Obtain COS bucket name
 * @method void setCosBucketName(string $CosBucketName) Set COS bucket name
 * @method string getCosObjectName() Obtain COS object path
 * @method void setCosObjectName(string $CosObjectName) Set COS object path
 * @method string getZipFile() Obtain It contains a function code file and its dependencies in the ZIP format. When you use this API, the ZIP file needs to be encoded with Base64. Up to 20 MB is supported.
 * @method void setZipFile(string $ZipFile) Set It contains a function code file and its dependencies in the ZIP format. When you use this API, the ZIP file needs to be encoded with Base64. Up to 20 MB is supported.
 * @method string getCosBucketRegion() Obtain COS region. For Beijing regions, you need to import `ap-beijing`. For Beijing Region 1, you need to input `ap-beijing-1`. For other regions, no import is required.
 * @method void setCosBucketRegion(string $CosBucketRegion) Set COS region. For Beijing regions, you need to import `ap-beijing`. For Beijing Region 1, you need to input `ap-beijing-1`. For other regions, no import is required.
 * @method string getDemoId() Obtain `DemoId` is required if Demo is used for the creation.
 * @method void setDemoId(string $DemoId) Set `DemoId` is required if Demo is used for the creation.
 * @method string getTempCosObjectName() Obtain `TempCosObjectName` is required if TempCos is used for the creation.
 * @method void setTempCosObjectName(string $TempCosObjectName) Set `TempCosObjectName` is required if TempCos is used for the creation.
 * @method string getGitUrl() Obtain Git address
 * @method void setGitUrl(string $GitUrl) Set Git address
 * @method string getGitUserName() Obtain Git user name
 * @method void setGitUserName(string $GitUserName) Set Git user name
 * @method string getGitPassword() Obtain Git password
 * @method void setGitPassword(string $GitPassword) Set Git password
 * @method string getGitPasswordSecret() Obtain Git password after encryption. In general, this value is not required.
 * @method void setGitPasswordSecret(string $GitPasswordSecret) Set Git password after encryption. In general, this value is not required.
 * @method string getGitBranch() Obtain Git branch
 * @method void setGitBranch(string $GitBranch) Set Git branch
 * @method string getGitDirectory() Obtain Code path in Git repository
 * @method void setGitDirectory(string $GitDirectory) Set Code path in Git repository
 * @method string getGitCommitId() Obtain Version to be pulled
 * @method void setGitCommitId(string $GitCommitId) Set Version to be pulled
 * @method string getGitUserNameSecret() Obtain Git user name after encryption. In general, this value is not required.
 * @method void setGitUserNameSecret(string $GitUserNameSecret) Set Git user name after encryption. In general, this value is not required.
 */

/**
 *Function code
 */
class Code extends AbstractModel
{
    /**
     * @var string COS bucket name
     */
    public $CosBucketName;

    /**
     * @var string COS object path
     */
    public $CosObjectName;

    /**
     * @var string It contains a function code file and its dependencies in the ZIP format. When you use this API, the ZIP file needs to be encoded with Base64. Up to 20 MB is supported.
     */
    public $ZipFile;

    /**
     * @var string COS region. For Beijing regions, you need to import `ap-beijing`. For Beijing Region 1, you need to input `ap-beijing-1`. For other regions, no import is required.
     */
    public $CosBucketRegion;

    /**
     * @var string `DemoId` is required if Demo is used for the creation.
     */
    public $DemoId;

    /**
     * @var string `TempCosObjectName` is required if TempCos is used for the creation.
     */
    public $TempCosObjectName;

    /**
     * @var string Git address
     */
    public $GitUrl;

    /**
     * @var string Git user name
     */
    public $GitUserName;

    /**
     * @var string Git password
     */
    public $GitPassword;

    /**
     * @var string Git password after encryption. In general, this value is not required.
     */
    public $GitPasswordSecret;

    /**
     * @var string Git branch
     */
    public $GitBranch;

    /**
     * @var string Code path in Git repository
     */
    public $GitDirectory;

    /**
     * @var string Version to be pulled
     */
    public $GitCommitId;

    /**
     * @var string Git user name after encryption. In general, this value is not required.
     */
    public $GitUserNameSecret;
    /**
     * @param string $CosBucketName COS bucket name
     * @param string $CosObjectName COS object path
     * @param string $ZipFile It contains a function code file and its dependencies in the ZIP format. When you use this API, the ZIP file needs to be encoded with Base64. Up to 20 MB is supported.
     * @param string $CosBucketRegion COS region. For Beijing regions, you need to import `ap-beijing`. For Beijing Region 1, you need to input `ap-beijing-1`. For other regions, no import is required.
     * @param string $DemoId `DemoId` is required if Demo is used for the creation.
     * @param string $TempCosObjectName `TempCosObjectName` is required if TempCos is used for the creation.
     * @param string $GitUrl Git address
     * @param string $GitUserName Git user name
     * @param string $GitPassword Git password
     * @param string $GitPasswordSecret Git password after encryption. In general, this value is not required.
     * @param string $GitBranch Git branch
     * @param string $GitDirectory Code path in Git repository
     * @param string $GitCommitId Version to be pulled
     * @param string $GitUserNameSecret Git user name after encryption. In general, this value is not required.
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
        if (array_key_exists("CosBucketName",$param) and $param["CosBucketName"] !== null) {
            $this->CosBucketName = $param["CosBucketName"];
        }

        if (array_key_exists("CosObjectName",$param) and $param["CosObjectName"] !== null) {
            $this->CosObjectName = $param["CosObjectName"];
        }

        if (array_key_exists("ZipFile",$param) and $param["ZipFile"] !== null) {
            $this->ZipFile = $param["ZipFile"];
        }

        if (array_key_exists("CosBucketRegion",$param) and $param["CosBucketRegion"] !== null) {
            $this->CosBucketRegion = $param["CosBucketRegion"];
        }

        if (array_key_exists("DemoId",$param) and $param["DemoId"] !== null) {
            $this->DemoId = $param["DemoId"];
        }

        if (array_key_exists("TempCosObjectName",$param) and $param["TempCosObjectName"] !== null) {
            $this->TempCosObjectName = $param["TempCosObjectName"];
        }

        if (array_key_exists("GitUrl",$param) and $param["GitUrl"] !== null) {
            $this->GitUrl = $param["GitUrl"];
        }

        if (array_key_exists("GitUserName",$param) and $param["GitUserName"] !== null) {
            $this->GitUserName = $param["GitUserName"];
        }

        if (array_key_exists("GitPassword",$param) and $param["GitPassword"] !== null) {
            $this->GitPassword = $param["GitPassword"];
        }

        if (array_key_exists("GitPasswordSecret",$param) and $param["GitPasswordSecret"] !== null) {
            $this->GitPasswordSecret = $param["GitPasswordSecret"];
        }

        if (array_key_exists("GitBranch",$param) and $param["GitBranch"] !== null) {
            $this->GitBranch = $param["GitBranch"];
        }

        if (array_key_exists("GitDirectory",$param) and $param["GitDirectory"] !== null) {
            $this->GitDirectory = $param["GitDirectory"];
        }

        if (array_key_exists("GitCommitId",$param) and $param["GitCommitId"] !== null) {
            $this->GitCommitId = $param["GitCommitId"];
        }

        if (array_key_exists("GitUserNameSecret",$param) and $param["GitUserNameSecret"] !== null) {
            $this->GitUserNameSecret = $param["GitUserNameSecret"];
        }
    }
}
