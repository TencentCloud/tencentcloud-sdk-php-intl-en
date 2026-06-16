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
 * Field remarks
 *
 * @method string getFieldName() Obtain field name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFieldName(string $FieldName) Set field name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getComment() Obtain Field remarks list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setComment(array $Comment) Set Field remarks list
Note: This field may return null, indicating that no valid values can be obtained.
 */
class FieldRemarkDTO extends AbstractModel
{
    /**
     * @var string field name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FieldName;

    /**
     * @var array Field remarks list
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Comment;

    /**
     * @param string $FieldName field name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Comment Field remarks list
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
        if (array_key_exists("FieldName",$param) and $param["FieldName"] !== null) {
            $this->FieldName = $param["FieldName"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }
    }
}
