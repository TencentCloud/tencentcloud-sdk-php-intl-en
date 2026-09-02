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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Container mount information.
 *
 * @method string getType() Obtain <p>Mount type</p>
 * @method void setType(string $Type) Set <p>Mount type</p>
 * @method string getSource() Obtain <p>Host path</p>
 * @method void setSource(string $Source) Set <p>Host path</p>
 * @method string getDestination() Obtain <p>Path within container</p>
 * @method void setDestination(string $Destination) Set <p>Path within container</p>
 * @method string getMode() Obtain <p>Mount mode</p>
 * @method void setMode(string $Mode) Set <p>Mount mode</p>
 * @method boolean getRW() Obtain <p>Whether it is readable and writable</p>
 * @method void setRW(boolean $RW) Set <p>Whether it is readable and writable</p>
 * @method string getPropagation() Obtain <p>Spread method</p>
 * @method void setPropagation(string $Propagation) Set <p>Spread method</p>
 * @method string getName() Obtain <p>Mount name</p>
 * @method void setName(string $Name) Set <p>Mount name</p>
 * @method string getDriver() Obtain <p>Driver name</p>
 * @method void setDriver(string $Driver) Set <p>Driver name</p>
 */
class ContainerMountItem extends AbstractModel
{
    /**
     * @var string <p>Mount type</p>
     */
    public $Type;

    /**
     * @var string <p>Host path</p>
     */
    public $Source;

    /**
     * @var string <p>Path within container</p>
     */
    public $Destination;

    /**
     * @var string <p>Mount mode</p>
     */
    public $Mode;

    /**
     * @var boolean <p>Whether it is readable and writable</p>
     */
    public $RW;

    /**
     * @var string <p>Spread method</p>
     */
    public $Propagation;

    /**
     * @var string <p>Mount name</p>
     */
    public $Name;

    /**
     * @var string <p>Driver name</p>
     */
    public $Driver;

    /**
     * @param string $Type <p>Mount type</p>
     * @param string $Source <p>Host path</p>
     * @param string $Destination <p>Path within container</p>
     * @param string $Mode <p>Mount mode</p>
     * @param boolean $RW <p>Whether it is readable and writable</p>
     * @param string $Propagation <p>Spread method</p>
     * @param string $Name <p>Mount name</p>
     * @param string $Driver <p>Driver name</p>
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

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Destination",$param) and $param["Destination"] !== null) {
            $this->Destination = $param["Destination"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("RW",$param) and $param["RW"] !== null) {
            $this->RW = $param["RW"];
        }

        if (array_key_exists("Propagation",$param) and $param["Propagation"] !== null) {
            $this->Propagation = $param["Propagation"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Driver",$param) and $param["Driver"] !== null) {
            $this->Driver = $param["Driver"];
        }
    }
}
