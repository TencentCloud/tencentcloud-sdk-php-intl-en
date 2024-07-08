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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getFieldName() Obtain Modified Field Name
 * @method void setFieldName(string $FieldName) Set Modified Field Name
 * @method string getOriginalFieldValue() Obtain Value of the field before modification, the original OCR result
 * @method void setOriginalFieldValue(string $OriginalFieldValue) Set Value of the field before modification, the original OCR result
 * @method string getRevisedFieldValue() Obtain Value of the field after modification,the user's manually entered result
 * @method void setRevisedFieldValue(string $RevisedFieldValue) Set Value of the field after modification,the user's manually entered result
 */
class EditDetail extends AbstractModel
{
    /**
     * @var string Modified Field Name
     */
    public $FieldName;

    /**
     * @var string Value of the field before modification, the original OCR result
     */
    public $OriginalFieldValue;

    /**
     * @var string Value of the field after modification,the user's manually entered result
     */
    public $RevisedFieldValue;

    /**
     * @param string $FieldName Modified Field Name
     * @param string $OriginalFieldValue Value of the field before modification, the original OCR result
     * @param string $RevisedFieldValue Value of the field after modification,the user's manually entered result
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

        if (array_key_exists("OriginalFieldValue",$param) and $param["OriginalFieldValue"] !== null) {
            $this->OriginalFieldValue = $param["OriginalFieldValue"];
        }

        if (array_key_exists("RevisedFieldValue",$param) and $param["RevisedFieldValue"] !== null) {
            $this->RevisedFieldValue = $param["RevisedFieldValue"];
        }
    }
}
