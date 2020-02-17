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
 * @method integer getSyncObject() Obtain Sync object. 1: entire instance; 2: specified table
 * @method void setSyncObject(integer $SyncObject) Set Sync object. 1: entire instance; 2: specified table
 * @method integer getRunMode() Obtain Sync start configuration. 1: start immediately
 * @method void setRunMode(integer $RunMode) Set Sync start configuration. 1: start immediately
 * @method integer getSyncType() Obtain Sync mode. 3: full + incremental sync
 * @method void setSyncType(integer $SyncType) Set Sync mode. 3: full + incremental sync
 * @method integer getConsistencyType() Obtain Data consistency check. 1: no configuration required
 * @method void setConsistencyType(integer $ConsistencyType) Set Data consistency check. 1: no configuration required
 */

/**
 *Configuration options of a disaster recovery sync task
 */
class SyncOption extends AbstractModel
{
    /**
     * @var integer Sync object. 1: entire instance; 2: specified table
     */
    public $SyncObject;

    /**
     * @var integer Sync start configuration. 1: start immediately
     */
    public $RunMode;

    /**
     * @var integer Sync mode. 3: full + incremental sync
     */
    public $SyncType;

    /**
     * @var integer Data consistency check. 1: no configuration required
     */
    public $ConsistencyType;
    /**
     * @param integer $SyncObject Sync object. 1: entire instance; 2: specified table
     * @param integer $RunMode Sync start configuration. 1: start immediately
     * @param integer $SyncType Sync mode. 3: full + incremental sync
     * @param integer $ConsistencyType Data consistency check. 1: no configuration required
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
        if (array_key_exists("SyncObject",$param) and $param["SyncObject"] !== null) {
            $this->SyncObject = $param["SyncObject"];
        }

        if (array_key_exists("RunMode",$param) and $param["RunMode"] !== null) {
            $this->RunMode = $param["RunMode"];
        }

        if (array_key_exists("SyncType",$param) and $param["SyncType"] !== null) {
            $this->SyncType = $param["SyncType"];
        }

        if (array_key_exists("ConsistencyType",$param) and $param["ConsistencyType"] !== null) {
            $this->ConsistencyType = $param["ConsistencyType"];
        }
    }
}
