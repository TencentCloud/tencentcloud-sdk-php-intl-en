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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateVulContainerExportJob request structure.
 *
 * @method string getPocID() Obtain POC ID
 * @method void setPocID(string $PocID) Set POC ID
 * @method integer getLimit() Obtain Number of results to be returned. Default value: `50000`. Maximum value: `50000`.
 * @method void setLimit(integer $Limit) Set Number of results to be returned. Default value: `50000`. Maximum value: `50000`.
 * @method integer getOffset() Obtain Offset. Default value: `0`.
 * @method void setOffset(integer $Offset) Set Offset. Default value: `0`.
 * @method array getFilters() Obtain Filter
<li>OnlyAffectedNewestImage- Bool- Required: No - Show only vulnerabilities that affect the latest image tags</li>
<li>ContainerID- string - Required: No - Container ID</li>
<li>ContainerName- String - Required: No - Container name</li>
 * @method void setFilters(array $Filters) Set Filter
<li>OnlyAffectedNewestImage- Bool- Required: No - Show only vulnerabilities that affect the latest image tags</li>
<li>ContainerID- string - Required: No - Container ID</li>
<li>ContainerName- String - Required: No - Container name</li>
 */
class CreateVulContainerExportJobRequest extends AbstractModel
{
    /**
     * @var string POC ID
     */
    public $PocID;

    /**
     * @var integer Number of results to be returned. Default value: `50000`. Maximum value: `50000`.
     */
    public $Limit;

    /**
     * @var integer Offset. Default value: `0`.
     */
    public $Offset;

    /**
     * @var array Filter
<li>OnlyAffectedNewestImage- Bool- Required: No - Show only vulnerabilities that affect the latest image tags</li>
<li>ContainerID- string - Required: No - Container ID</li>
<li>ContainerName- String - Required: No - Container name</li>
     */
    public $Filters;

    /**
     * @param string $PocID POC ID
     * @param integer $Limit Number of results to be returned. Default value: `50000`. Maximum value: `50000`.
     * @param integer $Offset Offset. Default value: `0`.
     * @param array $Filters Filter
<li>OnlyAffectedNewestImage- Bool- Required: No - Show only vulnerabilities that affect the latest image tags</li>
<li>ContainerID- string - Required: No - Container ID</li>
<li>ContainerName- String - Required: No - Container name</li>
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
        if (array_key_exists("PocID",$param) and $param["PocID"] !== null) {
            $this->PocID = $param["PocID"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new RunTimeFilters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
