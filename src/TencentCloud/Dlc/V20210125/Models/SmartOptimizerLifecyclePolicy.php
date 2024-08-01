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
 * SmartOptimizerLifecyclePolicy
 *
 * @method string getLifecycleEnable() Obtain Enable the lifecycle
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLifecycleEnable(string $LifecycleEnable) Set Enable the lifecycle
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getExpiration() Obtain Expiration time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExpiration(integer $Expiration) Set Expiration time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getDropTable() Obtain Whether to delete the table
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDropTable(boolean $DropTable) Set Whether to delete the table
Note: This field may return null, indicating that no valid values can be obtained.
 */
class SmartOptimizerLifecyclePolicy extends AbstractModel
{
    /**
     * @var string Enable the lifecycle
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LifecycleEnable;

    /**
     * @var integer Expiration time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Expiration;

    /**
     * @var boolean Whether to delete the table
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DropTable;

    /**
     * @param string $LifecycleEnable Enable the lifecycle
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Expiration Expiration time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $DropTable Whether to delete the table
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
        if (array_key_exists("LifecycleEnable",$param) and $param["LifecycleEnable"] !== null) {
            $this->LifecycleEnable = $param["LifecycleEnable"];
        }

        if (array_key_exists("Expiration",$param) and $param["Expiration"] !== null) {
            $this->Expiration = $param["Expiration"];
        }

        if (array_key_exists("DropTable",$param) and $param["DropTable"] !== null) {
            $this->DropTable = $param["DropTable"];
        }
    }
}
