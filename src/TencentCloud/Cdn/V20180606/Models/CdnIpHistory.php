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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CDN node activation and deactivation history
 *
 * @method string getStatus() Obtain Operation type
`online`: Nodes activated
`offline`: Nodes deactivated
 * @method void setStatus(string $Status) Set Operation type
`online`: Nodes activated
`offline`: Nodes deactivated
 * @method string getDatetime() Obtain Operation time corresponding to operation type
If its value is `null`, it means there is no status change record.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setDatetime(string $Datetime) Set Operation time corresponding to operation type
If its value is `null`, it means there is no status change record.
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class CdnIpHistory extends AbstractModel
{
    /**
     * @var string Operation type
`online`: Nodes activated
`offline`: Nodes deactivated
     */
    public $Status;

    /**
     * @var string Operation time corresponding to operation type
If its value is `null`, it means there is no status change record.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Datetime;

    /**
     * @param string $Status Operation type
`online`: Nodes activated
`offline`: Nodes deactivated
     * @param string $Datetime Operation time corresponding to operation type
If its value is `null`, it means there is no status change record.
Note: This field may return `null`, indicating that no valid value can be obtained.
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Datetime",$param) and $param["Datetime"] !== null) {
            $this->Datetime = $param["Datetime"];
        }
    }
}
