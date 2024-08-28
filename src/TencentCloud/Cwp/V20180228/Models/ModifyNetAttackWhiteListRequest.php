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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyNetAttackWhiteList request structure.
 *
 * @method integer getScope() Obtain Whether applies all hosts: 0: no; 1: yes
 * @method void setScope(integer $Scope) Set Whether applies all hosts: 0: no; 1: yes
 * @method array getSrcIp() Obtain Source IP. Single IP: 1.1.1.1, IP Range: 1.1.1.1-1.1.2.1, IP Range: 1.1.1.0/24 
 * @method void setSrcIp(array $SrcIp) Set Source IP. Single IP: 1.1.1.1, IP Range: 1.1.1.1-1.1.2.1, IP Range: 1.1.1.0/24 
 * @method integer getDealOldEvents() Obtain Whether to allowlist all alarms that match this rule: 1: Yes, 0: No.
 * @method void setDealOldEvents(integer $DealOldEvents) Set Whether to allowlist all alarms that match this rule: 1: Yes, 0: No.
 * @method integer getId() Obtain Rule ID
 * @method void setId(integer $Id) Set Rule ID
 * @method array getQuuidList() Obtain QUUID list
 * @method void setQuuidList(array $QuuidList) Set QUUID list
 * @method string getDescription() Obtain Rule description
 * @method void setDescription(string $Description) Set Rule description
 */
class ModifyNetAttackWhiteListRequest extends AbstractModel
{
    /**
     * @var integer Whether applies all hosts: 0: no; 1: yes
     */
    public $Scope;

    /**
     * @var array Source IP. Single IP: 1.1.1.1, IP Range: 1.1.1.1-1.1.2.1, IP Range: 1.1.1.0/24 
     */
    public $SrcIp;

    /**
     * @var integer Whether to allowlist all alarms that match this rule: 1: Yes, 0: No.
     */
    public $DealOldEvents;

    /**
     * @var integer Rule ID
     */
    public $Id;

    /**
     * @var array QUUID list
     */
    public $QuuidList;

    /**
     * @var string Rule description
     */
    public $Description;

    /**
     * @param integer $Scope Whether applies all hosts: 0: no; 1: yes
     * @param array $SrcIp Source IP. Single IP: 1.1.1.1, IP Range: 1.1.1.1-1.1.2.1, IP Range: 1.1.1.0/24 
     * @param integer $DealOldEvents Whether to allowlist all alarms that match this rule: 1: Yes, 0: No.
     * @param integer $Id Rule ID
     * @param array $QuuidList QUUID list
     * @param string $Description Rule description
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
        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("SrcIp",$param) and $param["SrcIp"] !== null) {
            $this->SrcIp = $param["SrcIp"];
        }

        if (array_key_exists("DealOldEvents",$param) and $param["DealOldEvents"] !== null) {
            $this->DealOldEvents = $param["DealOldEvents"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("QuuidList",$param) and $param["QuuidList"] !== null) {
            $this->QuuidList = $param["QuuidList"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
