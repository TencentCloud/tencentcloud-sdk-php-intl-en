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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Input security group information.
 *
 * @method string getId() Obtain Input security group ID.
 * @method void setId(string $Id) Set Input security group ID.
 * @method string getName() Obtain Input security group name.
 * @method void setName(string $Name) Set Input security group name.
 * @method array getWhitelist() Obtain List of allowlist entries.
 * @method void setWhitelist(array $Whitelist) Set List of allowlist entries.
 * @method array getOccupiedInputs() Obtain List of bound input streams.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setOccupiedInputs(array $OccupiedInputs) Set List of bound input streams.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getRegion() Obtain Input security group address.
 * @method void setRegion(string $Region) Set Input security group address.
 */
class InputSecurityGroupInfo extends AbstractModel
{
    /**
     * @var string Input security group ID.
     */
    public $Id;

    /**
     * @var string Input security group name.
     */
    public $Name;

    /**
     * @var array List of allowlist entries.
     */
    public $Whitelist;

    /**
     * @var array List of bound input streams.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $OccupiedInputs;

    /**
     * @var string Input security group address.
     */
    public $Region;

    /**
     * @param string $Id Input security group ID.
     * @param string $Name Input security group name.
     * @param array $Whitelist List of allowlist entries.
     * @param array $OccupiedInputs List of bound input streams.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Region Input security group address.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Whitelist",$param) and $param["Whitelist"] !== null) {
            $this->Whitelist = $param["Whitelist"];
        }

        if (array_key_exists("OccupiedInputs",$param) and $param["OccupiedInputs"] !== null) {
            $this->OccupiedInputs = $param["OccupiedInputs"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }
    }
}
