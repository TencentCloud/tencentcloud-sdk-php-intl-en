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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAsset request structure.
 *
 * @method boolean getAll() Obtain Sync all
 * @method void setAll(boolean $All) Set Sync all
 * @method array getHosts() Obtain List of servers to be synced. Either this parameter or `All` (preferred) must be selected.
 * @method void setHosts(array $Hosts) Set List of servers to be synced. Either this parameter or `All` (preferred) must be selected.
 */
class ModifyAssetRequest extends AbstractModel
{
    /**
     * @var boolean Sync all
     */
    public $All;

    /**
     * @var array List of servers to be synced. Either this parameter or `All` (preferred) must be selected.
     */
    public $Hosts;

    /**
     * @param boolean $All Sync all
     * @param array $Hosts List of servers to be synced. Either this parameter or `All` (preferred) must be selected.
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
        if (array_key_exists("All",$param) and $param["All"] !== null) {
            $this->All = $param["All"];
        }

        if (array_key_exists("Hosts",$param) and $param["Hosts"] !== null) {
            $this->Hosts = $param["Hosts"];
        }
    }
}
