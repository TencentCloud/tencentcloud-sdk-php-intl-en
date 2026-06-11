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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Baseline details
 *
 * @method string getDescription() Obtain Baseline description
 * @method void setDescription(string $Description) Set Baseline description
 * @method integer getLevel() Obtain Severity level
 * @method void setLevel(integer $Level) Set Severity level
 * @method string getPackageName() Obtain package name
 * @method void setPackageName(string $PackageName) Set package name
 * @method integer getParentId() Obtain Parent id
 * @method void setParentId(integer $ParentId) Set Parent id
 * @method string getName() Obtain Baseline name
 * @method void setName(string $Name) Set Baseline name
 */
class BaselineDetail extends AbstractModel
{
    /**
     * @var string Baseline description
     */
    public $Description;

    /**
     * @var integer Severity level
     */
    public $Level;

    /**
     * @var string package name
     */
    public $PackageName;

    /**
     * @var integer Parent id
     */
    public $ParentId;

    /**
     * @var string Baseline name
     */
    public $Name;

    /**
     * @param string $Description Baseline description
     * @param integer $Level Severity level
     * @param string $PackageName package name
     * @param integer $ParentId Parent id
     * @param string $Name Baseline name
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
