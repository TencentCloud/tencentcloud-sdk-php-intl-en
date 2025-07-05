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
namespace TencentCloud\Omics\V20221128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Table row
 *
 * @method string getTableRowUuid() Obtain Table row UUID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTableRowUuid(string $TableRowUuid) Set Table row UUID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getContent() Obtain Table row content
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setContent(array $Content) Set Table row content
Note: This field may return null, indicating that no valid values can be obtained.
 */
class TableRow extends AbstractModel
{
    /**
     * @var string Table row UUID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TableRowUuid;

    /**
     * @var array Table row content
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Content;

    /**
     * @param string $TableRowUuid Table row UUID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Content Table row content
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
        if (array_key_exists("TableRowUuid",$param) and $param["TableRowUuid"] !== null) {
            $this->TableRowUuid = $param["TableRowUuid"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }
    }
}
