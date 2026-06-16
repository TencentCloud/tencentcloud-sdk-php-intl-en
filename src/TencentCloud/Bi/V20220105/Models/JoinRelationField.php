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
 * Join tables and view association information between original tables
 *
 * @method string getFieldJoinId() Obtain Field association id, frontend usage
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFieldJoinId(string $FieldJoinId) Set Field association id, frontend usage
Note: This field may return null, indicating that no valid values can be obtained.
 * @method TableField getSourceField() Obtain Original table field
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSourceField(TableField $SourceField) Set Original table field
Note: This field may return null, indicating that no valid values can be obtained.
 * @method TableField getTargetField() Obtain Target table field
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTargetField(TableField $TargetField) Set Target table field
Note: This field may return null, indicating that no valid values can be obtained.
 */
class JoinRelationField extends AbstractModel
{
    /**
     * @var string Field association id, frontend usage
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FieldJoinId;

    /**
     * @var TableField Original table field
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SourceField;

    /**
     * @var TableField Target table field
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TargetField;

    /**
     * @param string $FieldJoinId Field association id, frontend usage
Note: This field may return null, indicating that no valid values can be obtained.
     * @param TableField $SourceField Original table field
Note: This field may return null, indicating that no valid values can be obtained.
     * @param TableField $TargetField Target table field
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
        if (array_key_exists("FieldJoinId",$param) and $param["FieldJoinId"] !== null) {
            $this->FieldJoinId = $param["FieldJoinId"];
        }

        if (array_key_exists("SourceField",$param) and $param["SourceField"] !== null) {
            $this->SourceField = new TableField();
            $this->SourceField->deserialize($param["SourceField"]);
        }

        if (array_key_exists("TargetField",$param) and $param["TargetField"] !== null) {
            $this->TargetField = new TableField();
            $this->TargetField->deserialize($param["TargetField"]);
        }
    }
}
