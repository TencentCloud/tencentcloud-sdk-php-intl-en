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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateResourceFile request structure.
 *
 * @method string getProjectId() Obtain Project ID.
 * @method void setProjectId(string $ProjectId) Set Project ID.
 * @method string getResourceName() Obtain Resource file name. should be consistent with the uploaded file name.
 * @method void setResourceName(string $ResourceName) Set Resource file name. should be consistent with the uploaded file name.
 * @method string getBucketName() Obtain Bucket name. can be obtained from the GetResourceCosPath api.
 * @method void setBucketName(string $BucketName) Set Bucket name. can be obtained from the GetResourceCosPath api.
 * @method string getCosRegion() Obtain BucketName specifies the cos storage bucket region.
 * @method void setCosRegion(string $CosRegion) Set BucketName specifies the cos storage bucket region.
 * @method string getParentFolderPath() Obtain Upload path for resource files in the project. value example: /wedata/qxxxm/. root directory, please use /.
 * @method void setParentFolderPath(string $ParentFolderPath) Set Upload path for resource files in the project. value example: /wedata/qxxxm/. root directory, please use /.
 * @method string getResourceFile() Obtain -Upload file and manual entry are two methods, choose one. if both are provided, the sequence is file > manual entry.
-The manually entered value must be an existing cos path. /datastudio/resource/ is the fixed prefix. projectId is the project ID. import a specific value. parentFolderPath is the folder path. name is the file name. value example: /datastudio/resource/projectId/parentFolderPath/name. 

 * @method void setResourceFile(string $ResourceFile) Set -Upload file and manual entry are two methods, choose one. if both are provided, the sequence is file > manual entry.
-The manually entered value must be an existing cos path. /datastudio/resource/ is the fixed prefix. projectId is the project ID. import a specific value. parentFolderPath is the folder path. name is the file name. value example: /datastudio/resource/projectId/parentFolderPath/name. 

 * @method string getBundleId() Obtain Bundle Client ID.
 * @method void setBundleId(string $BundleId) Set Bundle Client ID.
 * @method string getBundleInfo() Obtain bundle client info.
 * @method void setBundleInfo(string $BundleInfo) Set bundle client info.
 */
class CreateResourceFileRequest extends AbstractModel
{
    /**
     * @var string Project ID.
     */
    public $ProjectId;

    /**
     * @var string Resource file name. should be consistent with the uploaded file name.
     */
    public $ResourceName;

    /**
     * @var string Bucket name. can be obtained from the GetResourceCosPath api.
     */
    public $BucketName;

    /**
     * @var string BucketName specifies the cos storage bucket region.
     */
    public $CosRegion;

    /**
     * @var string Upload path for resource files in the project. value example: /wedata/qxxxm/. root directory, please use /.
     */
    public $ParentFolderPath;

    /**
     * @var string -Upload file and manual entry are two methods, choose one. if both are provided, the sequence is file > manual entry.
-The manually entered value must be an existing cos path. /datastudio/resource/ is the fixed prefix. projectId is the project ID. import a specific value. parentFolderPath is the folder path. name is the file name. value example: /datastudio/resource/projectId/parentFolderPath/name. 

     */
    public $ResourceFile;

    /**
     * @var string Bundle Client ID.
     */
    public $BundleId;

    /**
     * @var string bundle client info.
     */
    public $BundleInfo;

    /**
     * @param string $ProjectId Project ID.
     * @param string $ResourceName Resource file name. should be consistent with the uploaded file name.
     * @param string $BucketName Bucket name. can be obtained from the GetResourceCosPath api.
     * @param string $CosRegion BucketName specifies the cos storage bucket region.
     * @param string $ParentFolderPath Upload path for resource files in the project. value example: /wedata/qxxxm/. root directory, please use /.
     * @param string $ResourceFile -Upload file and manual entry are two methods, choose one. if both are provided, the sequence is file > manual entry.
-The manually entered value must be an existing cos path. /datastudio/resource/ is the fixed prefix. projectId is the project ID. import a specific value. parentFolderPath is the folder path. name is the file name. value example: /datastudio/resource/projectId/parentFolderPath/name. 

     * @param string $BundleId Bundle Client ID.
     * @param string $BundleInfo bundle client info.
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

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }

        if (array_key_exists("BucketName",$param) and $param["BucketName"] !== null) {
            $this->BucketName = $param["BucketName"];
        }

        if (array_key_exists("CosRegion",$param) and $param["CosRegion"] !== null) {
            $this->CosRegion = $param["CosRegion"];
        }

        if (array_key_exists("ParentFolderPath",$param) and $param["ParentFolderPath"] !== null) {
            $this->ParentFolderPath = $param["ParentFolderPath"];
        }

        if (array_key_exists("ResourceFile",$param) and $param["ResourceFile"] !== null) {
            $this->ResourceFile = $param["ResourceFile"];
        }

        if (array_key_exists("BundleId",$param) and $param["BundleId"] !== null) {
            $this->BundleId = $param["BundleId"];
        }

        if (array_key_exists("BundleInfo",$param) and $param["BundleInfo"] !== null) {
            $this->BundleInfo = $param["BundleInfo"];
        }
    }
}
