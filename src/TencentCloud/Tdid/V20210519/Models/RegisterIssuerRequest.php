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
namespace TencentCloud\Tdid\V20210519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RegisterIssuer request structure.
 *
 * @method string getDid() Obtain The DID.
 * @method void setDid(string $Did) Set The DID.
 * @method string getName() Obtain The issuing authority name.
 * @method void setName(string $Name) Set The issuing authority name.
 * @method string getDescription() Obtain Remarks
 * @method void setDescription(string $Description) Set Remarks
 */
class RegisterIssuerRequest extends AbstractModel
{
    /**
     * @var string The DID.
     */
    public $Did;

    /**
     * @var string The issuing authority name.
     */
    public $Name;

    /**
     * @var string Remarks
     */
    public $Description;

    /**
     * @param string $Did The DID.
     * @param string $Name The issuing authority name.
     * @param string $Description Remarks
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
        if (array_key_exists("Did",$param) and $param["Did"] !== null) {
            $this->Did = $param["Did"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
