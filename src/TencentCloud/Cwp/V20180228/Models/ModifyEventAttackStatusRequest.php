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
 * ModifyEventAttackStatus request structure.
 *
 * @method array getIds() Obtain An array of event IDs that need to be modified, and batch operation is supported.
 * @method void setIds(array $Ids) Set An array of event IDs that need to be modified, and batch operation is supported.
 * @method boolean getAll() Obtain Whether to update all, i.e. whether to operate on all events; this parameter is invalid when IDs are not left blank.
 * @method void setAll(boolean $All) Set Whether to update all, i.e. whether to operate on all events; this parameter is invalid when IDs are not left blank.
 * @method integer getStatus() Obtain 0: Pending 1: Processed 2: Allowlisted 3: Ignored 4: Deleted 
 * @method void setStatus(integer $Status) Set 0: Pending 1: Processed 2: Allowlisted 3: Ignored 4: Deleted 
 * @method array getFilters() Obtain Filter criteria
<li>Type: String attack status: 0: attempted attack; 1: attack succeeded: required: no</li>
<li>Status: String event processing status: 0: pending 1: processed; 2: allowlisted; 3: ignored; 4: deleted: required: no</li>
<li>SrcIP - String source IP - required: no</li>
<li>DstPort - String attack target port - required: no</li>
<li>MachineName - String host name - required: no</li>
<li>InstanceID - String host instance ID - required: no</li>
<li>Quuids - String host CVM UUID - required: no</li>

 * @method void setFilters(array $Filters) Set Filter criteria
<li>Type: String attack status: 0: attempted attack; 1: attack succeeded: required: no</li>
<li>Status: String event processing status: 0: pending 1: processed; 2: allowlisted; 3: ignored; 4: deleted: required: no</li>
<li>SrcIP - String source IP - required: no</li>
<li>DstPort - String attack target port - required: no</li>
<li>MachineName - String host name - required: no</li>
<li>InstanceID - String host instance ID - required: no</li>
<li>Quuids - String host CVM UUID - required: no</li>

 * @method array getExcludeId() Obtain Excluded IDs
 * @method void setExcludeId(array $ExcludeId) Set Excluded IDs
 */
class ModifyEventAttackStatusRequest extends AbstractModel
{
    /**
     * @var array An array of event IDs that need to be modified, and batch operation is supported.
     */
    public $Ids;

    /**
     * @var boolean Whether to update all, i.e. whether to operate on all events; this parameter is invalid when IDs are not left blank.
     */
    public $All;

    /**
     * @var integer 0: Pending 1: Processed 2: Allowlisted 3: Ignored 4: Deleted 
     */
    public $Status;

    /**
     * @var array Filter criteria
<li>Type: String attack status: 0: attempted attack; 1: attack succeeded: required: no</li>
<li>Status: String event processing status: 0: pending 1: processed; 2: allowlisted; 3: ignored; 4: deleted: required: no</li>
<li>SrcIP - String source IP - required: no</li>
<li>DstPort - String attack target port - required: no</li>
<li>MachineName - String host name - required: no</li>
<li>InstanceID - String host instance ID - required: no</li>
<li>Quuids - String host CVM UUID - required: no</li>

     */
    public $Filters;

    /**
     * @var array Excluded IDs
     */
    public $ExcludeId;

    /**
     * @param array $Ids An array of event IDs that need to be modified, and batch operation is supported.
     * @param boolean $All Whether to update all, i.e. whether to operate on all events; this parameter is invalid when IDs are not left blank.
     * @param integer $Status 0: Pending 1: Processed 2: Allowlisted 3: Ignored 4: Deleted 
     * @param array $Filters Filter criteria
<li>Type: String attack status: 0: attempted attack; 1: attack succeeded: required: no</li>
<li>Status: String event processing status: 0: pending 1: processed; 2: allowlisted; 3: ignored; 4: deleted: required: no</li>
<li>SrcIP - String source IP - required: no</li>
<li>DstPort - String attack target port - required: no</li>
<li>MachineName - String host name - required: no</li>
<li>InstanceID - String host instance ID - required: no</li>
<li>Quuids - String host CVM UUID - required: no</li>

     * @param array $ExcludeId Excluded IDs
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
        if (array_key_exists("Ids",$param) and $param["Ids"] !== null) {
            $this->Ids = $param["Ids"];
        }

        if (array_key_exists("All",$param) and $param["All"] !== null) {
            $this->All = $param["All"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("ExcludeId",$param) and $param["ExcludeId"] !== null) {
            $this->ExcludeId = $param["ExcludeId"];
        }
    }
}
