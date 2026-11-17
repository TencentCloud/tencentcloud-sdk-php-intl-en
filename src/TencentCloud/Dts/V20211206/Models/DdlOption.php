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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DDL statement sync processing during data sync
 *
 * @method string getDdlObject() Obtain DDL type. For example: database, table, view, and index.
 * @method void setDdlObject(string $DdlObject) Set DDL type. For example: database, table, view, and index.
 * @method array getDdlValue() Obtain Specific values of DDL. For Database, it can be [Create, Drop, Alter];<br>for Table, it can be [Create, Drop, Alter, Truncate, Rename];<br>for View, it can be [Create, Drop];<br>for Index, it can be [Create, Drop].
 * @method void setDdlValue(array $DdlValue) Set Specific values of DDL. For Database, it can be [Create, Drop, Alter];<br>for Table, it can be [Create, Drop, Alter, Truncate, Rename];<br>for View, it can be [Create, Drop];<br>for Index, it can be [Create, Drop].
 */
class DdlOption extends AbstractModel
{
    /**
     * @var string DDL type. For example: database, table, view, and index.
     */
    public $DdlObject;

    /**
     * @var array Specific values of DDL. For Database, it can be [Create, Drop, Alter];<br>for Table, it can be [Create, Drop, Alter, Truncate, Rename];<br>for View, it can be [Create, Drop];<br>for Index, it can be [Create, Drop].
     */
    public $DdlValue;

    /**
     * @param string $DdlObject DDL type. For example: database, table, view, and index.
     * @param array $DdlValue Specific values of DDL. For Database, it can be [Create, Drop, Alter];<br>for Table, it can be [Create, Drop, Alter, Truncate, Rename];<br>for View, it can be [Create, Drop];<br>for Index, it can be [Create, Drop].
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
        if (array_key_exists("DdlObject",$param) and $param["DdlObject"] !== null) {
            $this->DdlObject = $param["DdlObject"];
        }

        if (array_key_exists("DdlValue",$param) and $param["DdlValue"] !== null) {
            $this->DdlValue = $param["DdlValue"];
        }
    }
}
