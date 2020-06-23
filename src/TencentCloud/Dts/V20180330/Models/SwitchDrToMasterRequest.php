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
 * SwitchDrToMaster request structure.
 *
 * @method SyncInstanceInfo getDstInfo() Obtain Disaster recovery instance information
 * @method void setDstInfo(SyncInstanceInfo $DstInfo) Set Disaster recovery instance information
 * @method string getDatabaseType() Obtain Database type (such as MySQL)
 * @method void setDatabaseType(string $DatabaseType) Set Database type (such as MySQL)
 */
class SwitchDrToMasterRequest extends AbstractModel
{
    /**
     * @var SyncInstanceInfo Disaster recovery instance information
     */
    public $DstInfo;

    /**
     * @var string Database type (such as MySQL)
     */
    public $DatabaseType;

    /**
     * @param SyncInstanceInfo $DstInfo Disaster recovery instance information
     * @param string $DatabaseType Database type (such as MySQL)
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
        if (array_key_exists("DstInfo",$param) and $param["DstInfo"] !== null) {
            $this->DstInfo = new SyncInstanceInfo();
            $this->DstInfo->deserialize($param["DstInfo"]);
        }

        if (array_key_exists("DatabaseType",$param) and $param["DatabaseType"] !== null) {
            $this->DatabaseType = $param["DatabaseType"];
        }
    }
}
