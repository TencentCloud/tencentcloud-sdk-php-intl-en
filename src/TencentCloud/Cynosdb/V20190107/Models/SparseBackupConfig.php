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
 * @method string getSparseBackupSwitch() Obtain Sparse backup switch: ON/OFF
 * @method void setSparseBackupSwitch(string $SparseBackupSwitch) Set Sparse backup switch: ON/OFF
 * @method array getSparseBackupConfigInfos() Obtain Sparse backup policy list (1-3)
 * @method void setSparseBackupConfigInfos(array $SparseBackupConfigInfos) Set Sparse backup policy list (1-3)
 */
class SparseBackupConfig extends AbstractModel
{
    /**
     * @var string Sparse backup switch: ON/OFF
     */
    public $SparseBackupSwitch;

    /**
     * @var array Sparse backup policy list (1-3)
     */
    public $SparseBackupConfigInfos;

    /**
     * @param string $SparseBackupSwitch Sparse backup switch: ON/OFF
     * @param array $SparseBackupConfigInfos Sparse backup policy list (1-3)
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
