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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Sparse backup configuration
 *
 * @method string getSparseBackupSwitch() Obtain <p>Sparse backup switch: ON/OFF</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSparseBackupSwitch(string $SparseBackupSwitch) Set <p>Sparse backup switch: ON/OFF</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getSparseBackupConfigInfos() Obtain <p>Sparse backup policy list (1-3)</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSparseBackupConfigInfos(array $SparseBackupConfigInfos) Set <p>Sparse backup policy list (1-3)</p>
Note: This field may return null, indicating that no valid values can be obtained.
 */
class SparseBackupConfigRsp extends AbstractModel
{
    /**
     * @var string <p>Sparse backup switch: ON/OFF</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SparseBackupSwitch;

    /**
     * @var array <p>Sparse backup policy list (1-3)</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SparseBackupConfigInfos;

    /**
     * @param string $SparseBackupSwitch <p>Sparse backup switch: ON/OFF</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $SparseBackupConfigInfos <p>Sparse backup policy list (1-3)</p>
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
        if (array_key_exists("SparseBackupSwitch",$param) and $param["SparseBackupSwitch"] !== null) {
            $this->SparseBackupSwitch = $param["SparseBackupSwitch"];
        }

        if (array_key_exists("SparseBackupConfigInfos",$param) and $param["SparseBackupConfigInfos"] !== null) {
            $this->SparseBackupConfigInfos = [];
            foreach ($param["SparseBackupConfigInfos"] as $key => $value){
                $obj = new SparseBackupConfigInfo();
                $obj->deserialize($value);
                array_push($this->SparseBackupConfigInfos, $obj);
            }
        }
    }
}
