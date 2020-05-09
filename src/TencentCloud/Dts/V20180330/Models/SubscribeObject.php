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
namespace TencentCloud\Dts\V20180330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Data subscription object
 *
 * @method integer getObjectsType() Obtain Data subscription object type. 0: database, 1: database table
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setObjectsType(integer $ObjectsType) Set Data subscription object type. 0: database, 1: database table
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getDatabaseName() Obtain Name of subscribed database
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDatabaseName(string $DatabaseName) Set Name of subscribed database
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getTableNames() Obtain Array of table names in subscribed database
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTableNames(array $TableNames) Set Array of table names in subscribed database
Note: this field may return null, indicating that no valid values can be obtained.
 */
class SubscribeObject extends AbstractModel
{
    /**
     * @var integer Data subscription object type. 0: database, 1: database table
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ObjectsType;

    /**
     * @var string Name of subscribed database
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $DatabaseName;

    /**
     * @var array Array of table names in subscribed database
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TableNames;

    /**
     * @param integer $ObjectsType Data subscription object type. 0: database, 1: database table
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $DatabaseName Name of subscribed database
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $TableNames Array of table names in subscribed database
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("ObjectsType",$param) and $param["ObjectsType"] !== null) {
            $this->ObjectsType = $param["ObjectsType"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("TableNames",$param) and $param["TableNames"] !== null) {
            $this->TableNames = $param["TableNames"];
        }
    }
}
