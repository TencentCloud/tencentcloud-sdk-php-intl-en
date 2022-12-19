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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DDL statement sync processing during data sync
 *
 * @method string getDdlObject() Obtain DDL type, such as database, table, view, and index.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDdlObject(string $DdlObject) Set DDL type, such as database, table, view, and index.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getDdlValue() Obtain DDL value. Valid values: [Create,Drop,Alter] for database <br>[Create,Drop,Alter,Truncate,Rename] for table <br/>[Create,Drop] for view <br/>[Create,Drop] for index
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDdlValue(array $DdlValue) Set DDL value. Valid values: [Create,Drop,Alter] for database <br>[Create,Drop,Alter,Truncate,Rename] for table <br/>[Create,Drop] for view <br/>[Create,Drop] for index
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DdlOption extends AbstractModel
{
    /**
     * @var string DDL type, such as database, table, view, and index.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DdlObject;

    /**
     * @var array DDL value. Valid values: [Create,Drop,Alter] for database <br>[Create,Drop,Alter,Truncate,Rename] for table <br/>[Create,Drop] for view <br/>[Create,Drop] for index
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DdlValue;

    /**
     * @param string $DdlObject DDL type, such as database, table, view, and index.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $DdlValue DDL value. Valid values: [Create,Drop,Alter] for database <br>[Create,Drop,Alter,Truncate,Rename] for table <br/>[Create,Drop] for view <br/>[Create,Drop] for index
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
        if (array_key_exists("DdlObject",$param) and $param["DdlObject"] !== null) {
            $this->DdlObject = $param["DdlObject"];
        }

        if (array_key_exists("DdlValue",$param) and $param["DdlValue"] !== null) {
            $this->DdlValue = $param["DdlValue"];
        }
    }
}
