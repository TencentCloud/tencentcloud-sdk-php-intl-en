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
 * ExportRiskProcessEvents request structure.
 *
 * @method array getFilters() Obtain Filter criteria
<li>HostId - String - Required: No - Host ID</li>
<li>IpOrName - String - whether required: no - host IP or host name</li>
<li>VirusName - String - whether required: no - virus name</li>
<li>ProcessId - String - whether required: no - process ID</li>
<li>ProcessPath - String - whether required: no - process path</li>
<li>BeginTime - String - whether required: no - process startup time - begin</li>
<li>BeginTime - String - whether required: no - process startup time - end</li>
<li>Status - String - whether required: no - filter by status: 0 - pending; 1 - under detection; 2 - detected; 3 - exited; 4 - trusted</li>
 * @method void setFilters(array $Filters) Set Filter criteria
<li>HostId - String - Required: No - Host ID</li>
<li>IpOrName - String - whether required: no - host IP or host name</li>
<li>VirusName - String - whether required: no - virus name</li>
<li>ProcessId - String - whether required: no - process ID</li>
<li>ProcessPath - String - whether required: no - process path</li>
<li>BeginTime - String - whether required: no - process startup time - begin</li>
<li>BeginTime - String - whether required: no - process startup time - end</li>
<li>Status - String - whether required: no - filter by status: 0 - pending; 1 - under detection; 2 - detected; 3 - exited; 4 - trusted</li>
 * @method string getOrder() Obtain Sorting method: [ASC: ascending order|DESC: descending order]
 * @method void setOrder(string $Order) Set Sorting method: [ASC: ascending order|DESC: descending order]
 * @method string getBy() Obtain [StartTime: Process start time | DetectTime: Last detection time]
 * @method void setBy(string $By) Set [StartTime: Process start time | DetectTime: Last detection time]
 */
class ExportRiskProcessEventsRequest extends AbstractModel
{
    /**
     * @var array Filter criteria
<li>HostId - String - Required: No - Host ID</li>
<li>IpOrName - String - whether required: no - host IP or host name</li>
<li>VirusName - String - whether required: no - virus name</li>
<li>ProcessId - String - whether required: no - process ID</li>
<li>ProcessPath - String - whether required: no - process path</li>
<li>BeginTime - String - whether required: no - process startup time - begin</li>
<li>BeginTime - String - whether required: no - process startup time - end</li>
<li>Status - String - whether required: no - filter by status: 0 - pending; 1 - under detection; 2 - detected; 3 - exited; 4 - trusted</li>
     */
    public $Filters;

    /**
     * @var string Sorting method: [ASC: ascending order|DESC: descending order]
     */
    public $Order;

    /**
     * @var string [StartTime: Process start time | DetectTime: Last detection time]
     */
    public $By;

    /**
     * @param array $Filters Filter criteria
<li>HostId - String - Required: No - Host ID</li>
<li>IpOrName - String - whether required: no - host IP or host name</li>
<li>VirusName - String - whether required: no - virus name</li>
<li>ProcessId - String - whether required: no - process ID</li>
<li>ProcessPath - String - whether required: no - process path</li>
<li>BeginTime - String - whether required: no - process startup time - begin</li>
<li>BeginTime - String - whether required: no - process startup time - end</li>
<li>Status - String - whether required: no - filter by status: 0 - pending; 1 - under detection; 2 - detected; 3 - exited; 4 - trusted</li>
     * @param string $Order Sorting method: [ASC: ascending order|DESC: descending order]
     * @param string $By [StartTime: Process start time | DetectTime: Last detection time]
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

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }
    }
}
