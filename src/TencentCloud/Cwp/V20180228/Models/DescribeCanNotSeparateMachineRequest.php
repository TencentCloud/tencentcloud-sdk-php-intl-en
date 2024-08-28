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
 * DescribeCanNotSeparateMachine request structure.
 *
 * @method array getIds() Obtain An array of event IDs that need to be modified, and batch operation is supported.
 * @method void setIds(array $Ids) Set An array of event IDs that need to be modified, and batch operation is supported.
 * @method boolean getUpdateAll() Obtain Whether to update all, i.e. whether to operate on all events; this parameter is invalid when IDs are not left blank.
 * @method void setUpdateAll(boolean $UpdateAll) Set Whether to update all, i.e. whether to operate on all events; this parameter is invalid when IDs are not left blank.
 * @method array getExcludeId() Obtain Excluded event ID: When operating on all events, this ID needs to be excluded.
 * @method void setExcludeId(array $ExcludeId) Set Excluded event ID: When operating on all events, this ID needs to be excluded.
 * @method array getFilters() Obtain <li>IpOrAlias - String - required: no - filter by host IP or alias</li>
<li>FilePath - String - required: no - filter by path</li>
<li>VirusName - String - required: no - filter by description</li>
<li>CreateBeginTime - String - required: no - filter by creation time - start time</li>
<li>CreateEndTime - String - required: no - filter by creation time - end time</li>
<li>Status - String - required: no - status for filtering: 4: pending; 5: trusted; 6: isolated; 10: isolating; 11: canceling isolation</li>
 * @method void setFilters(array $Filters) Set <li>IpOrAlias - String - required: no - filter by host IP or alias</li>
<li>FilePath - String - required: no - filter by path</li>
<li>VirusName - String - required: no - filter by description</li>
<li>CreateBeginTime - String - required: no - filter by creation time - start time</li>
<li>CreateEndTime - String - required: no - filter by creation time - end time</li>
<li>Status - String - required: no - status for filtering: 4: pending; 5: trusted; 6: isolated; 10: isolating; 11: canceling isolation</li>
 */
class DescribeCanNotSeparateMachineRequest extends AbstractModel
{
    /**
     * @var array An array of event IDs that need to be modified, and batch operation is supported.
     */
    public $Ids;

    /**
     * @var boolean Whether to update all, i.e. whether to operate on all events; this parameter is invalid when IDs are not left blank.
     */
    public $UpdateAll;

    /**
     * @var array Excluded event ID: When operating on all events, this ID needs to be excluded.
     */
    public $ExcludeId;

    /**
     * @var array <li>IpOrAlias - String - required: no - filter by host IP or alias</li>
<li>FilePath - String - required: no - filter by path</li>
<li>VirusName - String - required: no - filter by description</li>
<li>CreateBeginTime - String - required: no - filter by creation time - start time</li>
<li>CreateEndTime - String - required: no - filter by creation time - end time</li>
<li>Status - String - required: no - status for filtering: 4: pending; 5: trusted; 6: isolated; 10: isolating; 11: canceling isolation</li>
     */
    public $Filters;

    /**
     * @param array $Ids An array of event IDs that need to be modified, and batch operation is supported.
     * @param boolean $UpdateAll Whether to update all, i.e. whether to operate on all events; this parameter is invalid when IDs are not left blank.
     * @param array $ExcludeId Excluded event ID: When operating on all events, this ID needs to be excluded.
     * @param array $Filters <li>IpOrAlias - String - required: no - filter by host IP or alias</li>
<li>FilePath - String - required: no - filter by path</li>
<li>VirusName - String - required: no - filter by description</li>
<li>CreateBeginTime - String - required: no - filter by creation time - start time</li>
<li>CreateEndTime - String - required: no - filter by creation time - end time</li>
<li>Status - String - required: no - status for filtering: 4: pending; 5: trusted; 6: isolated; 10: isolating; 11: canceling isolation</li>
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

        if (array_key_exists("UpdateAll",$param) and $param["UpdateAll"] !== null) {
            $this->UpdateAll = $param["UpdateAll"];
        }

        if (array_key_exists("ExcludeId",$param) and $param["ExcludeId"] !== null) {
            $this->ExcludeId = $param["ExcludeId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
