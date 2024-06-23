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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Metadata Field Information
 *
 * @method string getColumnKey() Obtain Column
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setColumnKey(string $ColumnKey) Set Column
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getDescription() Obtain DescriptionNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setDescription(string $Description) Set DescriptionNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getName() Obtain NameNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setName(string $Name) Set NameNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getType() Obtain TypeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setType(string $Type) Set TypeNote: This field may return null, indicating that no valid value can be obtained.
 */
class SchemaDetail extends AbstractModel
{
    /**
     * @var string Column
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ColumnKey;

    /**
     * @var string DescriptionNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $Description;

    /**
     * @var string NameNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $Name;

    /**
     * @var string TypeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $Type;

    /**
     * @param string $ColumnKey Column
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Description DescriptionNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $Name NameNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $Type TypeNote: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("ColumnKey",$param) and $param["ColumnKey"] !== null) {
            $this->ColumnKey = $param["ColumnKey"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
