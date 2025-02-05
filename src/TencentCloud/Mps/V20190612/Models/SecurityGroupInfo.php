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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Security group information.
 *
 * @method string getId() Obtain Security group ID.
 * @method void setId(string $Id) Set Security group ID.
 * @method string getName() Obtain Security group name.
 * @method void setName(string $Name) Set Security group name.
 * @method array getWhitelist() Obtain Allowlist list.
 * @method void setWhitelist(array $Whitelist) Set Allowlist list.
 * @method array getOccupiedInputs() Obtain List of bound input streams.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setOccupiedInputs(array $OccupiedInputs) Set List of bound input streams.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getRegion() Obtain Security group address.
 * @method void setRegion(string $Region) Set Security group address.
 * @method array getOccupiedOutputs() Obtain List of bound output streams.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setOccupiedOutputs(array $OccupiedOutputs) Set List of bound output streams.
Note: This field may return null, indicating that no valid value can be obtained.
 */
class SecurityGroupInfo extends AbstractModel
{
    /**
     * @var string Security group ID.
     */
    public $Id;

    /**
     * @var string Security group name.
     */
    public $Name;

    /**
     * @var array Allowlist list.
     */
    public $Whitelist;

    /**
     * @var array List of bound input streams.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $OccupiedInputs;

    /**
     * @var string Security group address.
     */
    public $Region;

    /**
     * @var array List of bound output streams.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $OccupiedOutputs;

    /**
     * @param string $Id Security group ID.
     * @param string $Name Security group name.
     * @param array $Whitelist Allowlist list.
     * @param array $OccupiedInputs List of bound input streams.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Region Security group address.
     * @param array $OccupiedOutputs List of bound output streams.
Note: This field may return null, indicating that no valid value can be obtained.
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

        if (array_key_exists("OccupiedOutputs",$param) and $param["OccupiedOutputs"] !== null) {
            $this->OccupiedOutputs = $param["OccupiedOutputs"];
        }
    }
}
