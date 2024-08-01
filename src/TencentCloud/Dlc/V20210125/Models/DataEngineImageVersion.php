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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information about the major version of the cluster image
 *
 * @method string getImageVersionId() Obtain ID of the major version of the image
 * @method void setImageVersionId(string $ImageVersionId) Set ID of the major version of the image
 * @method string getImageVersion() Obtain Name of the major version of the image
 * @method void setImageVersion(string $ImageVersion) Set Name of the major version of the image
 * @method string getDescription() Obtain Description of the major version of the image
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDescription(string $Description) Set Description of the major version of the image
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIsPublic() Obtain Whether it is a public version: 1: public version; 2: private version
 * @method void setIsPublic(integer $IsPublic) Set Whether it is a public version: 1: public version; 2: private version
 * @method string getEngineType() Obtain Cluster types: SparkSQL, PrestoSQL, and SparkBatch
 * @method void setEngineType(string $EngineType) Set Cluster types: SparkSQL, PrestoSQL, and SparkBatch
 * @method integer getIsSharedEngine() Obtain Version status. 1: initializing; 2: online; 3: offline
 * @method void setIsSharedEngine(integer $IsSharedEngine) Set Version status. 1: initializing; 2: online; 3: offline
 * @method integer getState() Obtain Version status. 1: initializing; 2: online; 3: offline
 * @method void setState(integer $State) Set Version status. 1: initializing; 2: online; 3: offline
 * @method string getInsertTime() Obtain Insert time
 * @method void setInsertTime(string $InsertTime) Set Insert time
 * @method string getUpdateTime() Obtain Update time
 * @method void setUpdateTime(string $UpdateTime) Set Update time
 */
class DataEngineImageVersion extends AbstractModel
{
    /**
     * @var string ID of the major version of the image
     */
    public $ImageVersionId;

    /**
     * @var string Name of the major version of the image
     */
    public $ImageVersion;

    /**
     * @var string Description of the major version of the image
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Description;

    /**
     * @var integer Whether it is a public version: 1: public version; 2: private version
     */
    public $IsPublic;

    /**
     * @var string Cluster types: SparkSQL, PrestoSQL, and SparkBatch
     */
    public $EngineType;

    /**
     * @var integer Version status. 1: initializing; 2: online; 3: offline
     */
    public $IsSharedEngine;

    /**
     * @var integer Version status. 1: initializing; 2: online; 3: offline
     */
    public $State;

    /**
     * @var string Insert time
     */
    public $InsertTime;

    /**
     * @var string Update time
     */
    public $UpdateTime;

    /**
     * @param string $ImageVersionId ID of the major version of the image
     * @param string $ImageVersion Name of the major version of the image
     * @param string $Description Description of the major version of the image
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $IsPublic Whether it is a public version: 1: public version; 2: private version
     * @param string $EngineType Cluster types: SparkSQL, PrestoSQL, and SparkBatch
     * @param integer $IsSharedEngine Version status. 1: initializing; 2: online; 3: offline
     * @param integer $State Version status. 1: initializing; 2: online; 3: offline
     * @param string $InsertTime Insert time
     * @param string $UpdateTime Update time
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
        if (array_key_exists("ImageVersionId",$param) and $param["ImageVersionId"] !== null) {
            $this->ImageVersionId = $param["ImageVersionId"];
        }

        if (array_key_exists("ImageVersion",$param) and $param["ImageVersion"] !== null) {
            $this->ImageVersion = $param["ImageVersion"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("IsPublic",$param) and $param["IsPublic"] !== null) {
            $this->IsPublic = $param["IsPublic"];
        }

        if (array_key_exists("EngineType",$param) and $param["EngineType"] !== null) {
            $this->EngineType = $param["EngineType"];
        }

        if (array_key_exists("IsSharedEngine",$param) and $param["IsSharedEngine"] !== null) {
            $this->IsSharedEngine = $param["IsSharedEngine"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("InsertTime",$param) and $param["InsertTime"] !== null) {
            $this->InsertTime = $param["InsertTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
