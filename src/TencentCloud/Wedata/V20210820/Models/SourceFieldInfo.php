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
 * Upstream Node Field Information
 *
 * @method string getFieldName() Obtain Field Name
 * @method void setFieldName(string $FieldName) Set Field Name
 * @method string getFieldType() Obtain Field Type
 * @method void setFieldType(string $FieldType) Set Field Type
 * @method string getAlias() Obtain Field Alias
 * @method void setAlias(string $Alias) Set Field Alias
 * @method string getComment() Obtain Field DescriptionNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setComment(string $Comment) Set Field DescriptionNote: This field may return null, indicating that no valid value can be obtained.
 */
class SourceFieldInfo extends AbstractModel
{
    /**
     * @var string Field Name
     */
    public $FieldName;

    /**
     * @var string Field Type
     */
    public $FieldType;

    /**
     * @var string Field Alias
     */
    public $Alias;

    /**
     * @var string Field DescriptionNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $Comment;

    /**
     * @param string $FieldName Field Name
     * @param string $FieldType Field Type
     * @param string $Alias Field Alias
     * @param string $Comment Field DescriptionNote: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("FieldName",$param) and $param["FieldName"] !== null) {
            $this->FieldName = $param["FieldName"];
        }

        if (array_key_exists("FieldType",$param) and $param["FieldType"] !== null) {
            $this->FieldType = $param["FieldType"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }
    }
}
