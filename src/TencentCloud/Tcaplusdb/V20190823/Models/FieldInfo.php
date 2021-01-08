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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The list of table field information
 *
 * @method string getFieldName() Obtain Table field name
 * @method void setFieldName(string $FieldName) Set Table field name
 * @method string getIsPrimaryKey() Obtain Whether it is a primary key field
 * @method void setIsPrimaryKey(string $IsPrimaryKey) Set Whether it is a primary key field
 * @method string getFieldType() Obtain Field type
 * @method void setFieldType(string $FieldType) Set Field type
 * @method integer getFieldSize() Obtain Field length
 * @method void setFieldSize(integer $FieldSize) Set Field length
 */
class FieldInfo extends AbstractModel
{
    /**
     * @var string Table field name
     */
    public $FieldName;

    /**
     * @var string Whether it is a primary key field
     */
    public $IsPrimaryKey;

    /**
     * @var string Field type
     */
    public $FieldType;

    /**
     * @var integer Field length
     */
    public $FieldSize;

    /**
     * @param string $FieldName Table field name
     * @param string $IsPrimaryKey Whether it is a primary key field
     * @param string $FieldType Field type
     * @param integer $FieldSize Field length
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

        if (array_key_exists("IsPrimaryKey",$param) and $param["IsPrimaryKey"] !== null) {
            $this->IsPrimaryKey = $param["IsPrimaryKey"];
        }

        if (array_key_exists("FieldType",$param) and $param["FieldType"] !== null) {
            $this->FieldType = $param["FieldType"];
        }

        if (array_key_exists("FieldSize",$param) and $param["FieldSize"] !== null) {
            $this->FieldSize = $param["FieldSize"];
        }
    }
}
