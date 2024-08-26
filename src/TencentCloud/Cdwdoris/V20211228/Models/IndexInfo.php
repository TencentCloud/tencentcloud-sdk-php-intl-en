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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Index information of the table
 *
 * @method string getIdxName() Obtain Index name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIdxName(string $IdxName) Set Index name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getColumnName() Obtain Column name for creating the index
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setColumnName(string $ColumnName) Set Column name for creating the index
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIdxType() Obtain Index type:
INVERTED: inverted index
NGRAM_BF: N-Gram index

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIdxType(string $IdxType) Set Index type:
INVERTED: inverted index
NGRAM_BF: N-Gram index

Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getIdxProperties() Obtain Index attributes
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIdxProperties(array $IdxProperties) Set Index attributes
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIdxComment() Obtain Index description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIdxComment(string $IdxComment) Set Index description
Note: This field may return null, indicating that no valid values can be obtained.
 */
class IndexInfo extends AbstractModel
{
    /**
     * @var string Index name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IdxName;

    /**
     * @var string Column name for creating the index
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ColumnName;

    /**
     * @var string Index type:
INVERTED: inverted index
NGRAM_BF: N-Gram index

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IdxType;

    /**
     * @var array Index attributes
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IdxProperties;

    /**
     * @var string Index description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IdxComment;

    /**
     * @param string $IdxName Index name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ColumnName Column name for creating the index
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IdxType Index type:
INVERTED: inverted index
NGRAM_BF: N-Gram index

Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $IdxProperties Index attributes
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IdxComment Index description
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
        if (array_key_exists("IdxName",$param) and $param["IdxName"] !== null) {
            $this->IdxName = $param["IdxName"];
        }

        if (array_key_exists("ColumnName",$param) and $param["ColumnName"] !== null) {
            $this->ColumnName = $param["ColumnName"];
        }

        if (array_key_exists("IdxType",$param) and $param["IdxType"] !== null) {
            $this->IdxType = $param["IdxType"];
        }

        if (array_key_exists("IdxProperties",$param) and $param["IdxProperties"] !== null) {
            $this->IdxProperties = [];
            foreach ($param["IdxProperties"] as $key => $value){
                $obj = new Property();
                $obj->deserialize($value);
                array_push($this->IdxProperties, $obj);
            }
        }

        if (array_key_exists("IdxComment",$param) and $param["IdxComment"] !== null) {
            $this->IdxComment = $param["IdxComment"];
        }
    }
}
