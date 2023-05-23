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
namespace TencentCloud\Eb\V20210416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Connector basic information
 *
 * @method string getType() Obtain Connector type
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setType(string $Type) Set Connector type
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getStatus() Obtain Connector status
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setStatus(string $Status) Set Connector status
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class ConnectionBrief extends AbstractModel
{
    /**
     * @var string Connector type
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Type;

    /**
     * @var string Connector status
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @param string $Type Connector type
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $Status Connector status
Note: This field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
