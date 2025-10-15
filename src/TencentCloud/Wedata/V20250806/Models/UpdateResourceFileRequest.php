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
 * UpdateResourceFile request structure.
 *
 * @method string getProjectId() Obtain Project ID.
 * @method void setProjectId(string $ProjectId) Set Project ID.
 * @method string getResourceId() Obtain Resource file ID. Can be obtained through the ListResourceFiles API.
 * @method void setResourceId(string $ResourceId) Set Resource file ID. Can be obtained through the ListResourceFiles API.
 * @method string getResourceFile() Obtain -Upload file and manual entry are two methods, choose one. if both are provided, the sequence is file > manual entry.
-The hand-filled value must be an existing cos path. /datastudio/resource/ is the fixed prefix. projectId is the project ID and requires a specific value. parentFolderPath is the parent folder path. name is the file name. 
Hand-filled value example:.
   /datastudio/resource/projectId/parentFolderPath/name 

 * @method void setResourceFile(string $ResourceFile) Set -Upload file and manual entry are two methods, choose one. if both are provided, the sequence is file > manual entry.
-The hand-filled value must be an existing cos path. /datastudio/resource/ is the fixed prefix. projectId is the project ID and requires a specific value. parentFolderPath is the parent folder path. name is the file name. 
Hand-filled value example:.
   /datastudio/resource/projectId/parentFolderPath/name 

 * @method string getResourceName() Obtain Resource name, preferably kept consistent with the file name.
 * @method void setResourceName(string $ResourceName) Set Resource name, preferably kept consistent with the file name.
 * @method string getBundleId() Obtain Bundle Client ID.
 * @method void setBundleId(string $BundleId) Set Bundle Client ID.
 * @method string getBundleInfo() Obtain Bundle Client Name
 * @method void setBundleInfo(string $BundleInfo) Set Bundle Client Name
 */
class UpdateResourceFileRequest extends AbstractModel
{
    /**
     * @var string Project ID.
     */
    public $ProjectId;

    /**
     * @var string Resource file ID. Can be obtained through the ListResourceFiles API.
     */
    public $ResourceId;

    /**
     * @var string -Upload file and manual entry are two methods, choose one. if both are provided, the sequence is file > manual entry.
-The hand-filled value must be an existing cos path. /datastudio/resource/ is the fixed prefix. projectId is the project ID and requires a specific value. parentFolderPath is the parent folder path. name is the file name. 
Hand-filled value example:.
   /datastudio/resource/projectId/parentFolderPath/name 

     */
    public $ResourceFile;

    /**
     * @var string Resource name, preferably kept consistent with the file name.
     */
    public $ResourceName;

    /**
     * @var string Bundle Client ID.
     */
    public $BundleId;

    /**
     * @var string Bundle Client Name
     */
    public $BundleInfo;

    /**
     * @param string $ProjectId Project ID.
     * @param string $ResourceId Resource file ID. Can be obtained through the ListResourceFiles API.
     * @param string $ResourceFile -Upload file and manual entry are two methods, choose one. if both are provided, the sequence is file > manual entry.
-The hand-filled value must be an existing cos path. /datastudio/resource/ is the fixed prefix. projectId is the project ID and requires a specific value. parentFolderPath is the parent folder path. name is the file name. 
Hand-filled value example:.
   /datastudio/resource/projectId/parentFolderPath/name 

     * @param string $ResourceName Resource name, preferably kept consistent with the file name.
     * @param string $BundleId Bundle Client ID.
     * @param string $BundleInfo Bundle Client Name
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

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ResourceFile",$param) and $param["ResourceFile"] !== null) {
            $this->ResourceFile = $param["ResourceFile"];
        }

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }

        if (array_key_exists("BundleId",$param) and $param["BundleId"] !== null) {
            $this->BundleId = $param["BundleId"];
        }

        if (array_key_exists("BundleInfo",$param) and $param["BundleInfo"] !== null) {
            $this->BundleInfo = $param["BundleInfo"];
        }
    }
}
