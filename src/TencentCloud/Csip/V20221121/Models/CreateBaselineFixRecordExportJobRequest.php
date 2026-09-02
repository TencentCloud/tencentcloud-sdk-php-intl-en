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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateBaselineFixRecordExportJob request structure.
 *
 * @method string getName() Obtain <p>Export task name. If not specified, it will be auto generated.</p>
 * @method void setName(string $Name) Set <p>Export task name. If not specified, it will be auto generated.</p>
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method array getFilters() Obtain <p>Universal Filter Criteria. Supported fields: detection item name (blurry), asset name/ID, risk level, and repair time interval.</p>
 * @method void setFilters(array $Filters) Set <p>Universal Filter Criteria. Supported fields: detection item name (blurry), asset name/ID, risk level, and repair time interval.</p>
 */
class CreateBaselineFixRecordExportJobRequest extends AbstractModel
{
    /**
     * @var string <p>Export task name. If not specified, it will be auto generated.</p>
     */
    public $Name;

    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var array <p>Universal Filter Criteria. Supported fields: detection item name (blurry), asset name/ID, risk level, and repair time interval.</p>
     */
    public $Filters;

    /**
     * @param string $Name <p>Export task name. If not specified, it will be auto generated.</p>
     * @param array $MemberId <p>Group account member id</p>
     * @param array $Filters <p>Universal Filter Criteria. Supported fields: detection item name (blurry), asset name/ID, risk level, and repair time interval.</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
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
