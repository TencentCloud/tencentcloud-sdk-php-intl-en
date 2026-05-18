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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method integer getMask() Obtain Permission information of the current account.
- 0: no permissions.
- 1: read-only.
- 3: read-write.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMask(integer $Mask) Set Permission information of the current account.
- 0: no permissions.
- 1: read-only.
- 3: read-write.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getNameSpace() Obtain Specifies the name of the database that has the current account permissions.
- \*: indicates all databases.
- db.name: indicates the database with a specific name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNameSpace(string $NameSpace) Set Specifies the name of the database that has the current account permissions.
- \*: indicates all databases.
- db.name: indicates the database with a specific name.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class Auth extends AbstractModel
{
    /**
     * @var integer Permission information of the current account.
- 0: no permissions.
- 1: read-only.
- 3: read-write.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Mask;

    /**
     * @var string Specifies the name of the database that has the current account permissions.
- \*: indicates all databases.
- db.name: indicates the database with a specific name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NameSpace;

    /**
     * @param integer $Mask Permission information of the current account.
- 0: no permissions.
- 1: read-only.
- 3: read-write.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $NameSpace Specifies the name of the database that has the current account permissions.
- \*: indicates all databases.
- db.name: indicates the database with a specific name.
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
        if (array_key_exists("Mask",$param) and $param["Mask"] !== null) {
            $this->Mask = $param["Mask"];
        }

        if (array_key_exists("NameSpace",$param) and $param["NameSpace"] !== null) {
            $this->NameSpace = $param["NameSpace"];
        }
    }
}
