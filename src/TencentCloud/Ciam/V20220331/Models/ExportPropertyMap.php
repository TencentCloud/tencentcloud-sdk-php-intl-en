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
namespace TencentCloud\Ciam\V20220331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Exported attribute mapping
 *
 * @method string getUserPropertyCode() Obtain User attribute code
 * @method void setUserPropertyCode(string $UserPropertyCode) Set User attribute code
 * @method string getColumnName() Obtain User attribute mapping name
 * @method void setColumnName(string $ColumnName) Set User attribute mapping name
 */
class ExportPropertyMap extends AbstractModel
{
    /**
     * @var string User attribute code
     */
    public $UserPropertyCode;

    /**
     * @var string User attribute mapping name
     */
    public $ColumnName;

    /**
     * @param string $UserPropertyCode User attribute code
     * @param string $ColumnName User attribute mapping name
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
        if (array_key_exists("UserPropertyCode",$param) and $param["UserPropertyCode"] !== null) {
            $this->UserPropertyCode = $param["UserPropertyCode"];
        }

        if (array_key_exists("ColumnName",$param) and $param["ColumnName"] !== null) {
            $this->ColumnName = $param["ColumnName"];
        }
    }
}
