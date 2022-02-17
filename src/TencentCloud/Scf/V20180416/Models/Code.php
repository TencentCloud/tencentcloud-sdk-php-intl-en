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
 * Function code
 *
 * @method string getCosBucketName() Obtain Object bucket name (enter the custom part of the bucket name without `-appid`)
 * @method void setCosBucketName(string $CosBucketName) Set Object bucket name (enter the custom part of the bucket name without `-appid`)
 * @method string getCosObjectName() Obtain File path of code package stored in COS, which should start with “/”
 * @method void setCosObjectName(string $CosObjectName) Set File path of code package stored in COS, which should start with “/”
 * @method string getZipFile() Obtain This parameter contains a .zip file (up to 50 MB) of the function code file and its dependencies. When this API is used, the content of the .zip file needs to be Base64-encoded
 * @method void setZipFile(string $ZipFile) Set This parameter contains a .zip file (up to 50 MB) of the function code file and its dependencies. When this API is used, the content of the .zip file needs to be Base64-encoded
 * @method string getCosBucketRegion() Obtain COS region. For Beijing regions, you need to import `ap-beijing`. For Beijing Region 1, you need to input `ap-beijing-1`. For other regions, no import is required.
 * @method void setCosBucketRegion(string $CosBucketRegion) Set COS region. For Beijing regions, you need to import `ap-beijing`. For Beijing Region 1, you need to input `ap-beijing-1`. For other regions, no import is required.
 * @method string getDemoId() Obtain `DemoId` is required if Demo is used for the creation.
 * @method void setDemoId(string $DemoId) Set `DemoId` is required if Demo is used for the creation.
 * @method string getTempCosObjectName() Obtain `TempCosObjectName` is required if TempCos is used for the creation.
 * @method void setTempCosObjectName(string $TempCosObjectName) Set `TempCosObjectName` is required if TempCos is used for the creation.
 * @method string getGitUrl() Obtain (Disused) Git address
 * @method void setGitUrl(string $GitUrl) Set (Disused) Git address
 * @method string getGitUserName() Obtain (Disused) Git username
 * @method void setGitUserName(string $GitUserName) Set (Disused) Git username
 * @method string getGitPassword() Obtain (Disused) Git password
 * @method void setGitPassword(string $GitPassword) Set (Disused) Git password
 * @method string getGitPasswordSecret() Obtain (Disused) Git password after encryption. It’s usually not required.
 * @method void setGitPasswordSecret(string $GitPasswordSecret) Set (Disused) Git password after encryption. It’s usually not required.
 * @method string getGitBranch() Obtain (Disused) Git branch
 * @method void setGitBranch(string $GitBranch) Set (Disused) Git branch
 * @method string getGitDirectory() Obtain (Disused) Directory to the codes in the Git repository. 
 * @method void setGitDirectory(string $GitDirectory) Set (Disused) Directory to the codes in the Git repository. 
 * @method string getGitCommitId() Obtain (Disused) 
 * @method void setGitCommitId(string $GitCommitId) Set (Disused) 
 * @method string getGitUserNameSecret() Obtain (Disused) Git username after encryption. It’s usually not required.
 * @method void setGitUserNameSecret(string $GitUserNameSecret) Set (Disused) Git username after encryption. It’s usually not required.
 * @method ImageConfig getImageConfig() Obtain TCR image configurations
 * @method void setImageConfig(ImageConfig $ImageConfig) Set TCR image configurations
 */
class Code extends AbstractModel
{
    /**
     * @var string Object bucket name (enter the custom part of the bucket name without `-appid`)
     */
    public $CosBucketName;

    /**
     * @var string File path of code package stored in COS, which should start with “/”
     */
    public $CosObjectName;

    /**
     * @var string This parameter contains a .zip file (up to 50 MB) of the function code file and its dependencies. When this API is used, the content of the .zip file needs to be Base64-encoded
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
     * @var string (Disused) Git address
     */
    public $GitUrl;

    /**
     * @var string (Disused) Git username
     */
    public $GitUserName;

    /**
     * @var string (Disused) Git password
     */
    public $GitPassword;

    /**
     * @var string (Disused) Git password after encryption. It’s usually not required.
     */
    public $GitPasswordSecret;

    /**
     * @var string (Disused) Git branch
     */
    public $GitBranch;

    /**
     * @var string (Disused) Directory to the codes in the Git repository. 
     */
    public $GitDirectory;

    /**
     * @var string (Disused) 
     */
    public $GitCommitId;

    /**
     * @var string (Disused) Git username after encryption. It’s usually not required.
     */
    public $GitUserNameSecret;

    /**
     * @var ImageConfig TCR image configurations
     */
    public $ImageConfig;

    /**
     * @param string $CosBucketName Object bucket name (enter the custom part of the bucket name without `-appid`)
     * @param string $CosObjectName File path of code package stored in COS, which should start with “/”
     * @param string $ZipFile This parameter contains a .zip file (up to 50 MB) of the function code file and its dependencies. When this API is used, the content of the .zip file needs to be Base64-encoded
     * @param string $CosBucketRegion COS region. For Beijing regions, you need to import `ap-beijing`. For Beijing Region 1, you need to input `ap-beijing-1`. For other regions, no import is required.
     * @param string $DemoId `DemoId` is required if Demo is used for the creation.
     * @param string $TempCosObjectName `TempCosObjectName` is required if TempCos is used for the creation.
     * @param string $GitUrl (Disused) Git address
     * @param string $GitUserName (Disused) Git username
     * @param string $GitPassword (Disused) Git password
     * @param string $GitPasswordSecret (Disused) Git password after encryption. It’s usually not required.
     * @param string $GitBranch (Disused) Git branch
     * @param string $GitDirectory (Disused) Directory to the codes in the Git repository. 
     * @param string $GitCommitId (Disused) 
     * @param string $GitUserNameSecret (Disused) Git username after encryption. It’s usually not required.
     * @param ImageConfig $ImageConfig TCR image configurations
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

        if (array_key_exists("ImageConfig",$param) and $param["ImageConfig"] !== null) {
            $this->ImageConfig = new ImageConfig();
            $this->ImageConfig->deserialize($param["ImageConfig"]);
        }
    }
}
