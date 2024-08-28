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
 * CreateNetAttackWhiteList request structure.
 *
 * @method integer getScope() Obtain Whether the allowlist applies to all hosts. 0: no; 1: yes.
 * @method void setScope(integer $Scope) Set Whether the allowlist applies to all hosts. 0: no; 1: yes.
 * @method array getSrcIp() Obtain Source IP. Single IP: 1.1.1.1, IP Range: 1.1.1.1-1.1.2.1, IP Range: 1.1.1.0/24 
 * @method void setSrcIp(array $SrcIp) Set Source IP. Single IP: 1.1.1.1, IP Range: 1.1.1.1-1.1.2.1, IP Range: 1.1.1.0/24 
 * @method array getQuuidList() Obtain QUUID list
 * @method void setQuuidList(array $QuuidList) Set QUUID list
 * @method integer getEventId() Obtain Event ID
 * @method void setEventId(integer $EventId) Set Event ID
 * @method integer getDealOldEvents() Obtain Whether to allowlist all alarms that match this rule: 1: Yes, 0: No.
 * @method void setDealOldEvents(integer $DealOldEvents) Set Whether to allowlist all alarms that match this rule: 1: Yes, 0: No.
 * @method string getDescription() Obtain Description
 * @method void setDescription(string $Description) Set Description
 */
class CreateNetAttackWhiteListRequest extends AbstractModel
{
    /**
     * @var integer Whether the allowlist applies to all hosts. 0: no; 1: yes.
     */
    public $Scope;

    /**
     * @var array Source IP. Single IP: 1.1.1.1, IP Range: 1.1.1.1-1.1.2.1, IP Range: 1.1.1.0/24 
     */
    public $SrcIp;

    /**
     * @var array QUUID list
     */
    public $QuuidList;

    /**
     * @var integer Event ID
     */
    public $EventId;

    /**
     * @var integer Whether to allowlist all alarms that match this rule: 1: Yes, 0: No.
     */
    public $DealOldEvents;

    /**
     * @var string Description
     */
    public $Description;

    /**
     * @param integer $Scope Whether the allowlist applies to all hosts. 0: no; 1: yes.
     * @param array $SrcIp Source IP. Single IP: 1.1.1.1, IP Range: 1.1.1.1-1.1.2.1, IP Range: 1.1.1.0/24 
     * @param array $QuuidList QUUID list
     * @param integer $EventId Event ID
     * @param integer $DealOldEvents Whether to allowlist all alarms that match this rule: 1: Yes, 0: No.
     * @param string $Description Description
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

        if (array_key_exists("QuuidList",$param) and $param["QuuidList"] !== null) {
            $this->QuuidList = $param["QuuidList"];
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("DealOldEvents",$param) and $param["DealOldEvents"] !== null) {
            $this->DealOldEvents = $param["DealOldEvents"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
