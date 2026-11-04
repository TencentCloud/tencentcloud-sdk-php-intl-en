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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Common identity information (supports two forms: numeric ID and string ID)
 *
 * @method string getDescription() Obtain Description
 * @method void setDescription(string $Description) Set Description
 * @method string getId() Obtain Digital ID
 * @method void setId(string $Id) Set Digital ID
 * @method string getName() Obtain Name
 * @method void setName(string $Name) Set Name
 * @method string getStrId() Obtain String ID
 * @method void setStrId(string $StrId) Set String ID
 */
class Identity extends AbstractModel
{
    /**
     * @var string Description
     */
    public $Description;

    /**
     * @var string Digital ID
     */
    public $Id;

    /**
     * @var string Name
     */
    public $Name;

    /**
     * @var string String ID
     */
    public $StrId;

    /**
     * @param string $Description Description
     * @param string $Id Digital ID
     * @param string $Name Name
     * @param string $StrId String ID
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
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("StrId",$param) and $param["StrId"] !== null) {
            $this->StrId = $param["StrId"];
        }
    }
}
