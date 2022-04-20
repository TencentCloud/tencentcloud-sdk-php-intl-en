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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDBSyncMode request structure.
 *
 * @method string getInstanceId() Obtain ID of the instance for which to modify the sync mode. The ID is in the format of dcdbt-ow728lmc.
 * @method void setInstanceId(string $InstanceId) Set ID of the instance for which to modify the sync mode. The ID is in the format of dcdbt-ow728lmc.
 * @method integer getSyncMode() Obtain Sync mode. Valid values: `0` (async), `1` (strong sync), `2` (downgradable strong sync).
 * @method void setSyncMode(integer $SyncMode) Set Sync mode. Valid values: `0` (async), `1` (strong sync), `2` (downgradable strong sync).
 */
class ModifyDBSyncModeRequest extends AbstractModel
{
    /**
     * @var string ID of the instance for which to modify the sync mode. The ID is in the format of dcdbt-ow728lmc.
     */
    public $InstanceId;

    /**
     * @var integer Sync mode. Valid values: `0` (async), `1` (strong sync), `2` (downgradable strong sync).
     */
    public $SyncMode;

    /**
     * @param string $InstanceId ID of the instance for which to modify the sync mode. The ID is in the format of dcdbt-ow728lmc.
     * @param integer $SyncMode Sync mode. Valid values: `0` (async), `1` (strong sync), `2` (downgradable strong sync).
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("SyncMode",$param) and $param["SyncMode"] !== null) {
            $this->SyncMode = $param["SyncMode"];
        }
    }
}
