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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Details of TCB environment instance
 *
 * @method string getID() Obtain Unique ID
 * @method void setID(string $ID) Set Unique ID
 * @method string getSource() Obtain Source.
 * @method void setSource(string $Source) Set Source.
 * @method string getName() Obtain Name
 * @method void setName(string $Name) Set Name
 * @method string getStatus() Obtain Status.
 * @method void setStatus(string $Status) Set Status.
 */
class TCBEnvironment extends AbstractModel
{
    /**
     * @var string Unique ID
     */
    public $ID;

    /**
     * @var string Source.
     */
    public $Source;

    /**
     * @var string Name
     */
    public $Name;

    /**
     * @var string Status.
     */
    public $Status;

    /**
     * @param string $ID Unique ID
     * @param string $Source Source.
     * @param string $Name Name
     * @param string $Status Status.
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
