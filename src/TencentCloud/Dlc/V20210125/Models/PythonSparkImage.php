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
 * Python-spark image information.
 *
 * @method string getSparkImageId() Obtain Unique ID of the spark image
 * @method void setSparkImageId(string $SparkImageId) Set Unique ID of the spark image
 * @method string getChildImageVersionId() Obtain ID of the cluster image of the minor version
 * @method void setChildImageVersionId(string $ChildImageVersionId) Set ID of the cluster image of the minor version
 * @method string getSparkImageVersion() Obtain Name of the spark image
 * @method void setSparkImageVersion(string $SparkImageVersion) Set Name of the spark image
 * @method string getDescription() Obtain Description of the spark image
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDescription(string $Description) Set Description of the spark image
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method string getUpdateTime() Obtain Update time
 * @method void setUpdateTime(string $UpdateTime) Set Update time
 */
class PythonSparkImage extends AbstractModel
{
    /**
     * @var string Unique ID of the spark image
     */
    public $SparkImageId;

    /**
     * @var string ID of the cluster image of the minor version
     */
    public $ChildImageVersionId;

    /**
     * @var string Name of the spark image
     */
    public $SparkImageVersion;

    /**
     * @var string Description of the spark image
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Description;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var string Update time
     */
    public $UpdateTime;

    /**
     * @param string $SparkImageId Unique ID of the spark image
     * @param string $ChildImageVersionId ID of the cluster image of the minor version
     * @param string $SparkImageVersion Name of the spark image
     * @param string $Description Description of the spark image
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Creation time
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
        if (array_key_exists("SparkImageId",$param) and $param["SparkImageId"] !== null) {
            $this->SparkImageId = $param["SparkImageId"];
        }

        if (array_key_exists("ChildImageVersionId",$param) and $param["ChildImageVersionId"] !== null) {
            $this->ChildImageVersionId = $param["ChildImageVersionId"];
        }

        if (array_key_exists("SparkImageVersion",$param) and $param["SparkImageVersion"] !== null) {
            $this->SparkImageVersion = $param["SparkImageVersion"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
