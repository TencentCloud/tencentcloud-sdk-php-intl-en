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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TencentDB instance switch records
 *
 * @method string getSwitchTime() Obtain Switch time in the format of yyyy-MM-dd HH:mm:ss, such as 2017-09-03 01:34:31
 * @method void setSwitchTime(string $SwitchTime) Set Switch time in the format of yyyy-MM-dd HH:mm:ss, such as 2017-09-03 01:34:31
 * @method string getSwitchType() Obtain Switch type. Value range: TRANSFER (data migration), MASTER2SLAVE (primary/secondary switch), RECOVERY (primary/secondary recovery)
 * @method void setSwitchType(string $SwitchType) Set Switch type. Value range: TRANSFER (data migration), MASTER2SLAVE (primary/secondary switch), RECOVERY (primary/secondary recovery)
 */
class DBSwitchInfo extends AbstractModel
{
    /**
     * @var string Switch time in the format of yyyy-MM-dd HH:mm:ss, such as 2017-09-03 01:34:31
     */
    public $SwitchTime;

    /**
     * @var string Switch type. Value range: TRANSFER (data migration), MASTER2SLAVE (primary/secondary switch), RECOVERY (primary/secondary recovery)
     */
    public $SwitchType;

    /**
     * @param string $SwitchTime Switch time in the format of yyyy-MM-dd HH:mm:ss, such as 2017-09-03 01:34:31
     * @param string $SwitchType Switch type. Value range: TRANSFER (data migration), MASTER2SLAVE (primary/secondary switch), RECOVERY (primary/secondary recovery)
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
        if (array_key_exists("SwitchTime",$param) and $param["SwitchTime"] !== null) {
            $this->SwitchTime = $param["SwitchTime"];
        }

        if (array_key_exists("SwitchType",$param) and $param["SwitchType"] !== null) {
            $this->SwitchType = $param["SwitchType"];
        }
    }
}
