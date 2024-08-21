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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Source database description
 *
 * @method string getSourceDatabaseName() Obtain Source database name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSourceDatabaseName(string $SourceDatabaseName) Set Source database name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getSourceTableNameList() Obtain Array of table names in the source database
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSourceTableNameList(array $SourceTableNameList) Set Array of table names in the source database
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DMSSourceDatabaseInfo extends AbstractModel
{
    /**
     * @var string Source database name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SourceDatabaseName;

    /**
     * @var array Array of table names in the source database
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SourceTableNameList;

    /**
     * @param string $SourceDatabaseName Source database name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $SourceTableNameList Array of table names in the source database
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
        if (array_key_exists("SourceDatabaseName",$param) and $param["SourceDatabaseName"] !== null) {
            $this->SourceDatabaseName = $param["SourceDatabaseName"];
        }

        if (array_key_exists("SourceTableNameList",$param) and $param["SourceTableNameList"] !== null) {
            $this->SourceTableNameList = $param["SourceTableNameList"];
        }
    }
}
