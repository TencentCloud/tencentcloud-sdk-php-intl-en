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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Container mount information
 *
 * @method string getType() Obtain Mount type: `bind`.
 * @method void setType(string $Type) Set Mount type: `bind`.
 * @method string getSource() Obtain Host path
 * @method void setSource(string $Source) Set Host path
 * @method string getDestination() Obtain Path in the container
 * @method void setDestination(string $Destination) Set Path in the container
 * @method string getMode() Obtain Mode
 * @method void setMode(string $Mode) Set Mode
 * @method boolean getRW() Obtain Read/Write permission
 * @method void setRW(boolean $RW) Set Read/Write permission
 * @method string getPropagation() Obtain Propagation type
 * @method void setPropagation(string $Propagation) Set Propagation type
 * @method string getName() Obtain Name
 * @method void setName(string $Name) Set Name
 * @method string getDriver() Obtain Driver
 * @method void setDriver(string $Driver) Set Driver
 */
class ContainerMount extends AbstractModel
{
    /**
     * @var string Mount type: `bind`.
     */
    public $Type;

    /**
     * @var string Host path
     */
    public $Source;

    /**
     * @var string Path in the container
     */
    public $Destination;

    /**
     * @var string Mode
     */
    public $Mode;

    /**
     * @var boolean Read/Write permission
     */
    public $RW;

    /**
     * @var string Propagation type
     */
    public $Propagation;

    /**
     * @var string Name
     */
    public $Name;

    /**
     * @var string Driver
     */
    public $Driver;

    /**
     * @param string $Type Mount type: `bind`.
     * @param string $Source Host path
     * @param string $Destination Path in the container
     * @param string $Mode Mode
     * @param boolean $RW Read/Write permission
     * @param string $Propagation Propagation type
     * @param string $Name Name
     * @param string $Driver Driver
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
