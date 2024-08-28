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
 * ModifyWarningHostConfig request structure.
 *
 * @method integer getType() Obtain Alarm type
 * @method void setType(integer $Type) Set Alarm type
 * @method integer getHostRange() Obtain Alarm Host Range Type. 0: All Hosts; 1: By Project; 2: By Tencent Cloud Tag; 3: By Host Security Tag; 4: Custom Hosts
 * @method void setHostRange(integer $HostRange) Set Alarm Host Range Type. 0: All Hosts; 1: By Project; 2: By Tencent Cloud Tag; 3: By Host Security Tag; 4: Custom Hosts
 * @method array getItemLabels() Obtain List of Project or Tag Names, empty for custom hosts
 * @method void setItemLabels(array $ItemLabels) Set List of Project or Tag Names, empty for custom hosts
 * @method array getQuuids() Obtain Machine list
 * @method void setQuuids(array $Quuids) Set Machine list
 * @method array getItemLabelIds() Obtain List of Project or Tag IDs, empty for custom hosts
 * @method void setItemLabelIds(array $ItemLabelIds) Set List of Project or Tag IDs, empty for custom hosts
 * @method array getExcludedQuuids() Obtain 
 * @method void setExcludedQuuids(array $ExcludedQuuids) Set 
 */
class ModifyWarningHostConfigRequest extends AbstractModel
{
    /**
     * @var integer Alarm type
     */
    public $Type;

    /**
     * @var integer Alarm Host Range Type. 0: All Hosts; 1: By Project; 2: By Tencent Cloud Tag; 3: By Host Security Tag; 4: Custom Hosts
     */
    public $HostRange;

    /**
     * @var array List of Project or Tag Names, empty for custom hosts
     */
    public $ItemLabels;

    /**
     * @var array Machine list
     */
    public $Quuids;

    /**
     * @var array List of Project or Tag IDs, empty for custom hosts
     */
    public $ItemLabelIds;

    /**
     * @var array 
     */
    public $ExcludedQuuids;

    /**
     * @param integer $Type Alarm type
     * @param integer $HostRange Alarm Host Range Type. 0: All Hosts; 1: By Project; 2: By Tencent Cloud Tag; 3: By Host Security Tag; 4: Custom Hosts
     * @param array $ItemLabels List of Project or Tag Names, empty for custom hosts
     * @param array $Quuids Machine list
     * @param array $ItemLabelIds List of Project or Tag IDs, empty for custom hosts
     * @param array $ExcludedQuuids 
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

        if (array_key_exists("HostRange",$param) and $param["HostRange"] !== null) {
            $this->HostRange = $param["HostRange"];
        }

        if (array_key_exists("ItemLabels",$param) and $param["ItemLabels"] !== null) {
            $this->ItemLabels = $param["ItemLabels"];
        }

        if (array_key_exists("Quuids",$param) and $param["Quuids"] !== null) {
            $this->Quuids = $param["Quuids"];
        }

        if (array_key_exists("ItemLabelIds",$param) and $param["ItemLabelIds"] !== null) {
            $this->ItemLabelIds = $param["ItemLabelIds"];
        }

        if (array_key_exists("ExcludedQuuids",$param) and $param["ExcludedQuuids"] !== null) {
            $this->ExcludedQuuids = $param["ExcludedQuuids"];
        }
    }
}
