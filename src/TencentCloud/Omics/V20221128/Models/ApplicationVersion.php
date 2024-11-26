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
namespace TencentCloud\Omics\V20221128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Application version
 *
 * @method string getType() Obtain Version type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setType(string $Type) Set Version type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getApplicationVersionId() Obtain Version ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setApplicationVersionId(string $ApplicationVersionId) Set Version ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getName() Obtain Release name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set Release name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDescription() Obtain Release description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDescription(string $Description) Set Release description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEntrypoint() Obtain Entry file
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEntrypoint(string $Entrypoint) Set Entry file
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Creation time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreatorName() Obtain Creator name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreatorName(string $CreatorName) Set Creator name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreatorId() Obtain Creator ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreatorId(string $CreatorId) Set Creator ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getGitInfo() Obtain Git information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGitInfo(string $GitInfo) Set Git information
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ApplicationVersion extends AbstractModel
{
    /**
     * @var string Version type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Type;

    /**
     * @var string Version ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ApplicationVersionId;

    /**
     * @var string Release name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var string Release description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Description;

    /**
     * @var string Entry file
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Entrypoint;

    /**
     * @var string Creation time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Creator name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreatorName;

    /**
     * @var string Creator ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreatorId;

    /**
     * @var string Git information
Note: This field may return null, indicating that no valid values can be obtained.
     * @deprecated
     */
    public $GitInfo;

    /**
     * @param string $Type Version type
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ApplicationVersionId Version ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Name Release name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Description Release description
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Entrypoint Entry file
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Creation time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreatorName Creator name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreatorId Creator ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $GitInfo Git information
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ApplicationVersionId",$param) and $param["ApplicationVersionId"] !== null) {
            $this->ApplicationVersionId = $param["ApplicationVersionId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Entrypoint",$param) and $param["Entrypoint"] !== null) {
            $this->Entrypoint = $param["Entrypoint"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("CreatorName",$param) and $param["CreatorName"] !== null) {
            $this->CreatorName = $param["CreatorName"];
        }

        if (array_key_exists("CreatorId",$param) and $param["CreatorId"] !== null) {
            $this->CreatorId = $param["CreatorId"];
        }

        if (array_key_exists("GitInfo",$param) and $param["GitInfo"] !== null) {
            $this->GitInfo = $param["GitInfo"];
        }
    }
}
