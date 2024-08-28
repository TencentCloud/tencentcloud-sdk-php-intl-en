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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Baseline details
 *
 * @method string getDescription() Obtain Baseline description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDescription(string $Description) Set Baseline description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getLevel() Obtain Severity level
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLevel(integer $Level) Set Severity level
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPackageName() Obtain Package name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPackageName(string $PackageName) Set Package name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getParentId() Obtain Parent ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setParentId(integer $ParentId) Set Parent ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getName() Obtain Baseline name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set Baseline name
Note: This field may return null, indicating that no valid values can be obtained.
 */
class BaselineDetail extends AbstractModel
{
    /**
     * @var string Baseline description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Description;

    /**
     * @var integer Severity level
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Level;

    /**
     * @var string Package name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PackageName;

    /**
     * @var integer Parent ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ParentId;

    /**
     * @var string Baseline name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @param string $Description Baseline description
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Level Severity level
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PackageName Package name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ParentId Parent ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Name Baseline name
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
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("PackageName",$param) and $param["PackageName"] !== null) {
            $this->PackageName = $param["PackageName"];
        }

        if (array_key_exists("ParentId",$param) and $param["ParentId"] !== null) {
            $this->ParentId = $param["ParentId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
