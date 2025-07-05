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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifySwitchTimePeriod request structure.
 *
 * @method string getDBInstanceId() Obtain The ID of the instance waiting for a switch
 * @method void setDBInstanceId(string $DBInstanceId) Set The ID of the instance waiting for a switch
 * @method integer getSwitchTag() Obtain Valid value: `0` (switch immediately)
 * @method void setSwitchTag(integer $SwitchTag) Set Valid value: `0` (switch immediately)
 */
class ModifySwitchTimePeriodRequest extends AbstractModel
{
    /**
     * @var string The ID of the instance waiting for a switch
     */
    public $DBInstanceId;

    /**
     * @var integer Valid value: `0` (switch immediately)
     */
    public $SwitchTag;

    /**
     * @param string $DBInstanceId The ID of the instance waiting for a switch
     * @param integer $SwitchTag Valid value: `0` (switch immediately)
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
        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("SwitchTag",$param) and $param["SwitchTag"] !== null) {
            $this->SwitchTag = $param["SwitchTag"];
        }
    }
}
