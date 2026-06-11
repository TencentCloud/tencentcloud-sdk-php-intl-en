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
 * Network attack allowlist rules
 *
 * @method integer getId() Obtain Rule ID
 * @method void setId(integer $Id) Set Rule ID
 * @method string getDescription() Obtain Rule description
 * @method void setDescription(string $Description) Set Rule description
 * @method integer getScope() Obtain 0: A group of Quuid 1: All hosts
 * @method void setScope(integer $Scope) Set 0: A group of Quuid 1: All hosts
 * @method integer getDealOldEvents() Obtain Whether to process previous events: 0: do not process; 1: process
 * @method void setDealOldEvents(integer $DealOldEvents) Set Whether to process previous events: 0: do not process; 1: process
 * @method string getQuuids() Obtain Host QUUIDs, separated by semicolons (;).
 * @method void setQuuids(string $Quuids) Set Host QUUIDs, separated by semicolons (;).
 * @method string getSrcIP() Obtain Source IP. Single IP: 1.1.1.1, IP Range: 1.1.1.1-1.1.2.1, IP Range: 1.1.1.0/24, separated by semicolons (;)
 * @method void setSrcIP(string $SrcIP) Set Source IP. Single IP: 1.1.1.1, IP Range: 1.1.1.1-1.1.2.1, IP Range: 1.1.1.0/24, separated by semicolons (;)
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method string getModifyTime() Obtain Modification time
 * @method void setModifyTime(string $ModifyTime) Set Modification time
 */
class NetAttackWhiteRule extends AbstractModel
{
    /**
     * @var integer Rule ID
     */
    public $Id;

    /**
     * @var string Rule description
     */
    public $Description;

    /**
     * @var integer 0: A group of Quuid 1: All hosts
     */
    public $Scope;

    /**
     * @var integer Whether to process previous events: 0: do not process; 1: process
     */
    public $DealOldEvents;

    /**
     * @var string Host QUUIDs, separated by semicolons (;).
     */
    public $Quuids;

    /**
     * @var string Source IP. Single IP: 1.1.1.1, IP Range: 1.1.1.1-1.1.2.1, IP Range: 1.1.1.0/24, separated by semicolons (;)
     */
    public $SrcIP;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var string Modification time
     */
    public $ModifyTime;

    /**
     * @param integer $Id Rule ID
     * @param string $Description Rule description
     * @param integer $Scope 0: A group of Quuid 1: All hosts
     * @param integer $DealOldEvents Whether to process previous events: 0: do not process; 1: process
     * @param string $Quuids Host QUUIDs, separated by semicolons (;).
     * @param string $SrcIP Source IP. Single IP: 1.1.1.1, IP Range: 1.1.1.1-1.1.2.1, IP Range: 1.1.1.0/24, separated by semicolons (;)
     * @param string $CreateTime Creation time
     * @param string $ModifyTime Modification time
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("DealOldEvents",$param) and $param["DealOldEvents"] !== null) {
            $this->DealOldEvents = $param["DealOldEvents"];
        }

        if (array_key_exists("Quuids",$param) and $param["Quuids"] !== null) {
            $this->Quuids = $param["Quuids"];
        }

        if (array_key_exists("SrcIP",$param) and $param["SrcIP"] !== null) {
            $this->SrcIP = $param["SrcIP"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }
    }
}
