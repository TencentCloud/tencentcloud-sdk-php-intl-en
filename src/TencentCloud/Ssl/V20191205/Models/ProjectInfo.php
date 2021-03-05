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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Content of the `ProjectInfo` parameter. `ProjectInfo` is an element of `Certificates` array which is returned by `DescribeCertificates`.
 *
 * @method string getProjectName() Obtain Project name
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setProjectName(string $ProjectName) Set Project name
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getProjectCreatorUin() Obtain UIN of the project creator
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setProjectCreatorUin(integer $ProjectCreatorUin) Set UIN of the project creator
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getProjectCreateTime() Obtain Project creation time
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setProjectCreateTime(string $ProjectCreateTime) Set Project creation time
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getProjectResume() Obtain Brief project information
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setProjectResume(string $ProjectResume) Set Brief project information
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getOwnerUin() Obtain User UIN
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setOwnerUin(integer $OwnerUin) Set User UIN
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getProjectId() Obtain Project ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setProjectId(string $ProjectId) Set Project ID
Note: this field may return null, indicating that no valid values can be obtained.
 */
class ProjectInfo extends AbstractModel
{
    /**
     * @var string Project name
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ProjectName;

    /**
     * @var integer UIN of the project creator
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ProjectCreatorUin;

    /**
     * @var string Project creation time
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ProjectCreateTime;

    /**
     * @var string Brief project information
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ProjectResume;

    /**
     * @var integer User UIN
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $OwnerUin;

    /**
     * @var string Project ID
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ProjectId;

    /**
     * @param string $ProjectName Project name
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $ProjectCreatorUin UIN of the project creator
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ProjectCreateTime Project creation time
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ProjectResume Brief project information
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $OwnerUin User UIN
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ProjectId Project ID
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("ProjectCreatorUin",$param) and $param["ProjectCreatorUin"] !== null) {
            $this->ProjectCreatorUin = $param["ProjectCreatorUin"];
        }

        if (array_key_exists("ProjectCreateTime",$param) and $param["ProjectCreateTime"] !== null) {
            $this->ProjectCreateTime = $param["ProjectCreateTime"];
        }

        if (array_key_exists("ProjectResume",$param) and $param["ProjectResume"] !== null) {
            $this->ProjectResume = $param["ProjectResume"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
