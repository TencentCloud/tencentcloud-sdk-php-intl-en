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
 * @method string getDBInstanceId() Obtain <p>ID of the instance that is waiting for a switch, which can be obtained through the <a href="https://www.tencentcloud.com/document/api/409/16773?from_cn_redirect=1">DescribeDBInstances</a> API.</p>
 * @method void setDBInstanceId(string $DBInstanceId) Set <p>ID of the instance that is waiting for a switch, which can be obtained through the <a href="https://www.tencentcloud.com/document/api/409/16773?from_cn_redirect=1">DescribeDBInstances</a> API.</p>
 * @method integer getSwitchTag() Obtain <p>If the value of the input parameter is 0, it indicates to switch immediately.</p>
 * @method void setSwitchTag(integer $SwitchTag) Set <p>If the value of the input parameter is 0, it indicates to switch immediately.</p>
 */
class ModifySwitchTimePeriodRequest extends AbstractModel
{
    /**
     * @var string <p>ID of the instance that is waiting for a switch, which can be obtained through the <a href="https://www.tencentcloud.com/document/api/409/16773?from_cn_redirect=1">DescribeDBInstances</a> API.</p>
     */
    public $DBInstanceId;

    /**
     * @var integer <p>If the value of the input parameter is 0, it indicates to switch immediately.</p>
     */
    public $SwitchTag;

    /**
     * @param string $DBInstanceId <p>ID of the instance that is waiting for a switch, which can be obtained through the <a href="https://www.tencentcloud.com/document/api/409/16773?from_cn_redirect=1">DescribeDBInstances</a> API.</p>
     * @param integer $SwitchTag <p>If the value of the input parameter is 0, it indicates to switch immediately.</p>
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
