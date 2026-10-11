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
 * ExportBaselineItemList request structure.
 *
 * @method array getFilters() Obtain <li>PolicyId - int64 - required: no - policy ID</li>
<li>RuleId - int64 - required: no - rule ID</li>
<li>HostId - string - whether required: no - host ID</li>
<li>HostName - string - required: no - host name</li>
<li>HostIp - string - required: no - host IP</li>
<li>ItemId - String - required: no - detection item ID</li>
<li>ItemName - String - required: no - item name</li>
<li>DetectStatus - int - required: no - detection status [0: not passed|3: passed|5: detecting]</li>
<li>Level - int - Required: No - Risk level</li>
<li>StartTime - string - required: no - start time</li>
<li>EndTime - string - required: no - end time</li>
 * @method void setFilters(array $Filters) Set <li>PolicyId - int64 - required: no - policy ID</li>
<li>RuleId - int64 - required: no - rule ID</li>
<li>HostId - string - whether required: no - host ID</li>
<li>HostName - string - required: no - host name</li>
<li>HostIp - string - required: no - host IP</li>
<li>ItemId - String - required: no - detection item ID</li>
<li>ItemName - String - required: no - item name</li>
<li>DetectStatus - int - required: no - detection status [0: not passed|3: passed|5: detecting]</li>
<li>Level - int - Required: No - Risk level</li>
<li>StartTime - string - required: no - start time</li>
<li>EndTime - string - required: no - end time</li>
 * @method integer getExportAll() Obtain 0: Filtered Result Export; 1: Export All
 * @method void setExportAll(integer $ExportAll) Set 0: Filtered Result Export; 1: Export All
 */
class ExportBaselineItemListRequest extends AbstractModel
{
    /**
     * @var array <li>PolicyId - int64 - required: no - policy ID</li>
<li>RuleId - int64 - required: no - rule ID</li>
<li>HostId - string - whether required: no - host ID</li>
<li>HostName - string - required: no - host name</li>
<li>HostIp - string - required: no - host IP</li>
<li>ItemId - String - required: no - detection item ID</li>
<li>ItemName - String - required: no - item name</li>
<li>DetectStatus - int - required: no - detection status [0: not passed|3: passed|5: detecting]</li>
<li>Level - int - Required: No - Risk level</li>
<li>StartTime - string - required: no - start time</li>
<li>EndTime - string - required: no - end time</li>
     */
    public $Filters;

    /**
     * @var integer 0: Filtered Result Export; 1: Export All
     */
    public $ExportAll;

    /**
     * @param array $Filters <li>PolicyId - int64 - required: no - policy ID</li>
<li>RuleId - int64 - required: no - rule ID</li>
<li>HostId - string - whether required: no - host ID</li>
<li>HostName - string - required: no - host name</li>
<li>HostIp - string - required: no - host IP</li>
<li>ItemId - String - required: no - detection item ID</li>
<li>ItemName - String - required: no - item name</li>
<li>DetectStatus - int - required: no - detection status [0: not passed|3: passed|5: detecting]</li>
<li>Level - int - Required: No - Risk level</li>
<li>StartTime - string - required: no - start time</li>
<li>EndTime - string - required: no - end time</li>
     * @param integer $ExportAll 0: Filtered Result Export; 1: Export All
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
        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("ExportAll",$param) and $param["ExportAll"] !== null) {
            $this->ExportAll = $param["ExportAll"];
        }
    }
}
