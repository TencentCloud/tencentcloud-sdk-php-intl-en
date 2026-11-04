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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifySpace request structure.
 *
 * @method string getName() Obtain Workspace name. Maximum length: 30 characters.
 * @method void setName(string $Name) Set Workspace name. Maximum length: 30 characters.
 * @method string getDescription() Obtain Space description. Maximum length: 150 characters.
 * @method void setDescription(string $Description) Set Space description. Maximum length: 150 characters.
 * @method string getSpaceId() Obtain Space id
 * @method void setSpaceId(string $SpaceId) Set Space id
 * @method FieldMask getFieldMask() Obtain Fields to update. `Name` and `Description` supported.
 * @method void setFieldMask(FieldMask $FieldMask) Set Fields to update. `Name` and `Description` supported.
 */
class ModifySpaceRequest extends AbstractModel
{
    /**
     * @var string Workspace name. Maximum length: 30 characters.
     */
    public $Name;

    /**
     * @var string Space description. Maximum length: 150 characters.
     */
    public $Description;

    /**
     * @var string Space id
     */
    public $SpaceId;

    /**
     * @var FieldMask Fields to update. `Name` and `Description` supported.
     */
    public $FieldMask;

    /**
     * @param string $Name Workspace name. Maximum length: 30 characters.
     * @param string $Description Space description. Maximum length: 150 characters.
     * @param string $SpaceId Space id
     * @param FieldMask $FieldMask Fields to update. `Name` and `Description` supported.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("SpaceId",$param) and $param["SpaceId"] !== null) {
            $this->SpaceId = $param["SpaceId"];
        }

        if (array_key_exists("FieldMask",$param) and $param["FieldMask"] !== null) {
            $this->FieldMask = new FieldMask();
            $this->FieldMask->deserialize($param["FieldMask"]);
        }
    }
}
