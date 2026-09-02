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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Baseline synchronization configuration for Group Administrator.
 *
 * @method boolean getAutoSync() Obtain <p>Whether to automatically sync the baseline configuration to member accounts. true indicates enabled, false indicates disabled.</p>
 * @method void setAutoSync(boolean $AutoSync) Set <p>Whether to automatically sync the baseline configuration to member accounts. true indicates enabled, false indicates disabled.</p>
 * @method array getTargetAppidList() Obtain <p>List of Appids of target member accounts for automatic synchronization. This parameter is valid only when AutoSync=true.</p>
 * @method void setTargetAppidList(array $TargetAppidList) Set <p>List of Appids of target member accounts for automatic synchronization. This parameter is valid only when AutoSync=true.</p>
 * @method array getUserConfList() Obtain <p>User Configuration List</p>
 * @method void setUserConfList(array $UserConfList) Set <p>User Configuration List</p>
 */
class BaselineSyncConf extends AbstractModel
{
    /**
     * @var boolean <p>Whether to automatically sync the baseline configuration to member accounts. true indicates enabled, false indicates disabled.</p>
     */
    public $AutoSync;

    /**
     * @var array <p>List of Appids of target member accounts for automatic synchronization. This parameter is valid only when AutoSync=true.</p>
     */
    public $TargetAppidList;

    /**
     * @var array <p>User Configuration List</p>
     */
    public $UserConfList;

    /**
     * @param boolean $AutoSync <p>Whether to automatically sync the baseline configuration to member accounts. true indicates enabled, false indicates disabled.</p>
     * @param array $TargetAppidList <p>List of Appids of target member accounts for automatic synchronization. This parameter is valid only when AutoSync=true.</p>
     * @param array $UserConfList <p>User Configuration List</p>
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
        if (array_key_exists("AutoSync",$param) and $param["AutoSync"] !== null) {
            $this->AutoSync = $param["AutoSync"];
        }

        if (array_key_exists("TargetAppidList",$param) and $param["TargetAppidList"] !== null) {
            $this->TargetAppidList = $param["TargetAppidList"];
        }

        if (array_key_exists("UserConfList",$param) and $param["UserConfList"] !== null) {
            $this->UserConfList = [];
            foreach ($param["UserConfList"] as $key => $value){
                $obj = new UserConfSyncStatus();
                $obj->deserialize($value);
                array_push($this->UserConfList, $obj);
            }
        }
    }
}
