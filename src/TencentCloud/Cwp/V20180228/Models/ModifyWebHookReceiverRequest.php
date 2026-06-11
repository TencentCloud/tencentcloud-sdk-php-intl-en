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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyWebHookReceiver request structure.
 *
 * @method integer getId() Obtain id
 * @method void setId(integer $Id) Set id
 * @method string getName() Obtain Receiver name
 * @method void setName(string $Name) Set Receiver name
 * @method string getAddr() Obtain webhook URL
 * @method void setAddr(string $Addr) Set webhook URL
 * @method boolean getIsModify() Obtain Whether to modify
 * @method void setIsModify(boolean $IsModify) Set Whether to modify
 * @method integer getType() Obtain Type
 * @method void setType(integer $Type) Set Type
 * @method string getSCFRegion() Obtain target region
 * @method void setSCFRegion(string $SCFRegion) Set target region
 * @method string getNamespace() Obtain Namespace
 * @method void setNamespace(string $Namespace) Set Namespace
 * @method string getFunctionName() Obtain function name
 * @method void setFunctionName(string $FunctionName) Set function name
 * @method string getFunctionVersion() Obtain Function version
 * @method void setFunctionVersion(string $FunctionVersion) Set Function version
 * @method string getAlias() Obtain Alias
 * @method void setAlias(string $Alias) Set Alias
 */
class ModifyWebHookReceiverRequest extends AbstractModel
{
    /**
     * @var integer id
     */
    public $Id;

    /**
     * @var string Receiver name
     */
    public $Name;

    /**
     * @var string webhook URL
     */
    public $Addr;

    /**
     * @var boolean Whether to modify
     */
    public $IsModify;

    /**
     * @var integer Type
     */
    public $Type;

    /**
     * @var string target region
     */
    public $SCFRegion;

    /**
     * @var string Namespace
     */
    public $Namespace;

    /**
     * @var string function name
     */
    public $FunctionName;

    /**
     * @var string Function version
     */
    public $FunctionVersion;

    /**
     * @var string Alias
     */
    public $Alias;

    /**
     * @param integer $Id id
     * @param string $Name Receiver name
     * @param string $Addr webhook URL
     * @param boolean $IsModify Whether to modify
     * @param integer $Type Type
     * @param string $SCFRegion target region
     * @param string $Namespace Namespace
     * @param string $FunctionName function name
     * @param string $FunctionVersion Function version
     * @param string $Alias Alias
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

        if (array_key_exists("Addr",$param) and $param["Addr"] !== null) {
            $this->Addr = $param["Addr"];
        }

        if (array_key_exists("IsModify",$param) and $param["IsModify"] !== null) {
            $this->IsModify = $param["IsModify"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("SCFRegion",$param) and $param["SCFRegion"] !== null) {
            $this->SCFRegion = $param["SCFRegion"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("FunctionName",$param) and $param["FunctionName"] !== null) {
            $this->FunctionName = $param["FunctionName"];
        }

        if (array_key_exists("FunctionVersion",$param) and $param["FunctionVersion"] !== null) {
            $this->FunctionVersion = $param["FunctionVersion"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }
    }
}
