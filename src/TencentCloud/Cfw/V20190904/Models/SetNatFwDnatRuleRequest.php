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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SetNatFwDnatRule request structure.
 *
 * @method integer getMode() Obtain 0: Create new; 1: Use existing
 * @method void setMode(integer $Mode) Set 0: Create new; 1: Use existing
 * @method string getOperationType() Obtain Operation type. Valid values: add, del, and modify.
 * @method void setOperationType(string $OperationType) Set Operation type. Valid values: add, del, and modify.
 * @method string getCfwInstance() Obtain Firewall instance ID. This field is required.
 * @method void setCfwInstance(string $CfwInstance) Set Firewall instance ID. This field is required.
 * @method array getAddOrDelDnatRules() Obtain List of added/deleted DNAT rules
 * @method void setAddOrDelDnatRules(array $AddOrDelDnatRules) Set List of added/deleted DNAT rules
 * @method CfwNatDnatRule getOriginDnat() Obtain Original DNAT rule before change
 * @method void setOriginDnat(CfwNatDnatRule $OriginDnat) Set Original DNAT rule before change
 * @method CfwNatDnatRule getNewDnat() Obtain New DNAT rule after change
 * @method void setNewDnat(CfwNatDnatRule $NewDnat) Set New DNAT rule after change
 */
class SetNatFwDnatRuleRequest extends AbstractModel
{
    /**
     * @var integer 0: Create new; 1: Use existing
     */
    public $Mode;

    /**
     * @var string Operation type. Valid values: add, del, and modify.
     */
    public $OperationType;

    /**
     * @var string Firewall instance ID. This field is required.
     */
    public $CfwInstance;

    /**
     * @var array List of added/deleted DNAT rules
     */
    public $AddOrDelDnatRules;

    /**
     * @var CfwNatDnatRule Original DNAT rule before change
     */
    public $OriginDnat;

    /**
     * @var CfwNatDnatRule New DNAT rule after change
     */
    public $NewDnat;

    /**
     * @param integer $Mode 0: Create new; 1: Use existing
     * @param string $OperationType Operation type. Valid values: add, del, and modify.
     * @param string $CfwInstance Firewall instance ID. This field is required.
     * @param array $AddOrDelDnatRules List of added/deleted DNAT rules
     * @param CfwNatDnatRule $OriginDnat Original DNAT rule before change
     * @param CfwNatDnatRule $NewDnat New DNAT rule after change
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
        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("OperationType",$param) and $param["OperationType"] !== null) {
            $this->OperationType = $param["OperationType"];
        }

        if (array_key_exists("CfwInstance",$param) and $param["CfwInstance"] !== null) {
            $this->CfwInstance = $param["CfwInstance"];
        }

        if (array_key_exists("AddOrDelDnatRules",$param) and $param["AddOrDelDnatRules"] !== null) {
            $this->AddOrDelDnatRules = [];
            foreach ($param["AddOrDelDnatRules"] as $key => $value){
                $obj = new CfwNatDnatRule();
                $obj->deserialize($value);
                array_push($this->AddOrDelDnatRules, $obj);
            }
        }

        if (array_key_exists("OriginDnat",$param) and $param["OriginDnat"] !== null) {
            $this->OriginDnat = new CfwNatDnatRule();
            $this->OriginDnat->deserialize($param["OriginDnat"]);
        }

        if (array_key_exists("NewDnat",$param) and $param["NewDnat"] !== null) {
            $this->NewDnat = new CfwNatDnatRule();
            $this->NewDnat->deserialize($param["NewDnat"]);
        }
    }
}
