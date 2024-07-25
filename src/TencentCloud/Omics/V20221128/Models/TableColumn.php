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
namespace TencentCloud\Omics\V20221128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Table column
 *
 * @method string getHeader() Obtain Column name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHeader(string $Header) Set Column name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDataType() Obtain Column data type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDataType(string $DataType) Set Column data type
Note: This field may return null, indicating that no valid values can be obtained.
 */
class TableColumn extends AbstractModel
{
    /**
     * @var string Column name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Header;

    /**
     * @var string Column data type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DataType;

    /**
     * @param string $Header Column name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DataType Column data type
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
        if (array_key_exists("Header",$param) and $param["Header"] !== null) {
            $this->Header = $param["Header"];
        }

        if (array_key_exists("DataType",$param) and $param["DataType"] !== null) {
            $this->DataType = $param["DataType"];
        }
    }
}
