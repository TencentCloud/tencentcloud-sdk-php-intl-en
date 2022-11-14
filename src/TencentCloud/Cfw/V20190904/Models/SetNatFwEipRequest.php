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
 * SetNatFwEip request structure.
 *
 * @method string getOperationType() Obtain bind: bind EIP; unbind: unbind EIP; newAdd: add firewall EIP
 * @method void setOperationType(string $OperationType) Set bind: bind EIP; unbind: unbind EIP; newAdd: add firewall EIP
 * @method string getCfwInstance() Obtain Firewall instance ID
 * @method void setCfwInstance(string $CfwInstance) Set Firewall instance ID
 * @method array getEipList() Obtain This field is required when OperationType is "bind" or "unbind".
 * @method void setEipList(array $EipList) Set This field is required when OperationType is "bind" or "unbind".
 */
class SetNatFwEipRequest extends AbstractModel
{
    /**
     * @var string bind: bind EIP; unbind: unbind EIP; newAdd: add firewall EIP
     */
    public $OperationType;

    /**
     * @var string Firewall instance ID
     */
    public $CfwInstance;

    /**
     * @var array This field is required when OperationType is "bind" or "unbind".
     */
    public $EipList;

    /**
     * @param string $OperationType bind: bind EIP; unbind: unbind EIP; newAdd: add firewall EIP
     * @param string $CfwInstance Firewall instance ID
     * @param array $EipList This field is required when OperationType is "bind" or "unbind".
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
        if (array_key_exists("OperationType",$param) and $param["OperationType"] !== null) {
            $this->OperationType = $param["OperationType"];
        }

        if (array_key_exists("CfwInstance",$param) and $param["CfwInstance"] !== null) {
            $this->CfwInstance = $param["CfwInstance"];
        }

        if (array_key_exists("EipList",$param) and $param["EipList"] !== null) {
            $this->EipList = $param["EipList"];
        }
    }
}
