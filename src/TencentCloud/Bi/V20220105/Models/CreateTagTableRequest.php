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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateTagTable request structure.
 *
 * @method string getName() Obtain Tag table name
 * @method void setName(string $Name) Set Tag table name
 * @method integer getAutoImportProjectId() Obtain Project id associated with the tag table
 * @method void setAutoImportProjectId(integer $AutoImportProjectId) Set Project id associated with the tag table
 * @method integer getAutoImportTableId() Obtain id of the data table associated with the tag table
 * @method void setAutoImportTableId(integer $AutoImportTableId) Set id of the data table associated with the tag table
 * @method string getAutoImportUinField() Obtain Corresponding field of uin
 * @method void setAutoImportUinField(string $AutoImportUinField) Set Corresponding field of uin
 */
class CreateTagTableRequest extends AbstractModel
{
    /**
     * @var string Tag table name
     */
    public $Name;

    /**
     * @var integer Project id associated with the tag table
     */
    public $AutoImportProjectId;

    /**
     * @var integer id of the data table associated with the tag table
     */
    public $AutoImportTableId;

    /**
     * @var string Corresponding field of uin
     */
    public $AutoImportUinField;

    /**
     * @param string $Name Tag table name
     * @param integer $AutoImportProjectId Project id associated with the tag table
     * @param integer $AutoImportTableId id of the data table associated with the tag table
     * @param string $AutoImportUinField Corresponding field of uin
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

        if (array_key_exists("AutoImportProjectId",$param) and $param["AutoImportProjectId"] !== null) {
            $this->AutoImportProjectId = $param["AutoImportProjectId"];
        }

        if (array_key_exists("AutoImportTableId",$param) and $param["AutoImportTableId"] !== null) {
            $this->AutoImportTableId = $param["AutoImportTableId"];
        }

        if (array_key_exists("AutoImportUinField",$param) and $param["AutoImportUinField"] !== null) {
            $this->AutoImportUinField = $param["AutoImportUinField"];
        }
    }
}
