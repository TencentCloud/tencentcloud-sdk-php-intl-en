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
 * This API is used to obtain project information.
 *
 * @method string getProjectId() Obtain Project ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProjectId(string $ProjectId) Set Project ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProjectName() Obtain Project id, english name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProjectName(string $ProjectName) Set Project id, english name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDisplayName() Obtain Project display name, can be chinese name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDisplayName(string $DisplayName) Set Project display name, can be chinese name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDescription() Obtain Remarks
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDescription(string $Description) Set Remarks
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Creation time.


Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation time.


Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreatorUin() Obtain Project creator id.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreatorUin(string $CreatorUin) Set Project creator id.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProjectOwnerUin() Obtain Project responsible person id.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProjectOwnerUin(string $ProjectOwnerUin) Set Project responsible person id.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain Project status: 0: disabled, 1: enabled, -3: disabled, 2: enabled.
 * @method void setStatus(integer $Status) Set Project status: 0: disabled, 1: enabled, -3: disabled, 2: enabled.
 * @method string getProjectModel() Obtain Project mode, SIMPLE: SIMPLE mode STANDARD: STANDARD mode.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProjectModel(string $ProjectModel) Set Project mode, SIMPLE: SIMPLE mode STANDARD: STANDARD mode.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class Project extends AbstractModel
{
    /**
     * @var string Project ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProjectId;

    /**
     * @var string Project id, english name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProjectName;

    /**
     * @var string Project display name, can be chinese name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DisplayName;

    /**
     * @var string Remarks
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Description;

    /**
     * @var string Creation time.


Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Project creator id.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreatorUin;

    /**
     * @var string Project responsible person id.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProjectOwnerUin;

    /**
     * @var integer Project status: 0: disabled, 1: enabled, -3: disabled, 2: enabled.
     */
    public $Status;

    /**
     * @var string Project mode, SIMPLE: SIMPLE mode STANDARD: STANDARD mode.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProjectModel;

    /**
     * @param string $ProjectId Project ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ProjectName Project id, english name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DisplayName Project display name, can be chinese name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Description Remarks
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Creation time.


Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreatorUin Project creator id.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ProjectOwnerUin Project responsible person id.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Status Project status: 0: disabled, 1: enabled, -3: disabled, 2: enabled.
     * @param string $ProjectModel Project mode, SIMPLE: SIMPLE mode STANDARD: STANDARD mode.
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("CreatorUin",$param) and $param["CreatorUin"] !== null) {
            $this->CreatorUin = $param["CreatorUin"];
        }

        if (array_key_exists("ProjectOwnerUin",$param) and $param["ProjectOwnerUin"] !== null) {
            $this->ProjectOwnerUin = $param["ProjectOwnerUin"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ProjectModel",$param) and $param["ProjectModel"] !== null) {
            $this->ProjectModel = $param["ProjectModel"];
        }
    }
}
