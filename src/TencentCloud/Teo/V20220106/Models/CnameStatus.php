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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CNAME status
 *
 * @method string getName() Obtain Record name
 * @method void setName(string $Name) Set Record name
 * @method string getCname() Obtain CNAME address
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setCname(string $Cname) Set CNAME address
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getStatus() Obtain Status
`active`: Activated
`moved`: Not activated
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setStatus(string $Status) Set Status
`active`: Activated
`moved`: Not activated
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class CnameStatus extends AbstractModel
{
    /**
     * @var string Record name
     */
    public $Name;

    /**
     * @var string CNAME address
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Cname;

    /**
     * @var string Status
`active`: Activated
`moved`: Not activated
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Status;

    /**
     * @param string $Name Record name
     * @param string $Cname CNAME address
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $Status Status
`active`: Activated
`moved`: Not activated
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Cname",$param) and $param["Cname"] !== null) {
            $this->Cname = $param["Cname"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
