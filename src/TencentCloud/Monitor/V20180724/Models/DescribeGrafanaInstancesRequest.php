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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeGrafanaInstances request structure.
 *
 * @method integer getOffset() Obtain Offset for query
 * @method void setOffset(integer $Offset) Set Offset for query
 * @method integer getLimit() Obtain Number of items to be queried
 * @method void setLimit(integer $Limit) Set Number of items to be queried
 * @method array getInstanceIds() Obtain Array of TCMG instance IDs
 * @method void setInstanceIds(array $InstanceIds) Set Array of TCMG instance IDs
 * @method string getInstanceName() Obtain TCMG instance name, which can be fuzzily matched by prefix.
 * @method void setInstanceName(string $InstanceName) Set TCMG instance name, which can be fuzzily matched by prefix.
 * @method array getInstanceStatus() Obtain Query status
 * @method void setInstanceStatus(array $InstanceStatus) Set Query status
 * @method array getTagFilters() Obtain Array of tag filters
 * @method void setTagFilters(array $TagFilters) Set Array of tag filters
 */
class DescribeGrafanaInstancesRequest extends AbstractModel
{
    /**
     * @var integer Offset for query
     */
    public $Offset;

    /**
     * @var integer Number of items to be queried
     */
    public $Limit;

    /**
     * @var array Array of TCMG instance IDs
     */
    public $InstanceIds;

    /**
     * @var string TCMG instance name, which can be fuzzily matched by prefix.
     */
    public $InstanceName;

    /**
     * @var array Query status
     */
    public $InstanceStatus;

    /**
     * @var array Array of tag filters
     */
    public $TagFilters;

    /**
     * @param integer $Offset Offset for query
     * @param integer $Limit Number of items to be queried
     * @param array $InstanceIds Array of TCMG instance IDs
     * @param string $InstanceName TCMG instance name, which can be fuzzily matched by prefix.
     * @param array $InstanceStatus Query status
     * @param array $TagFilters Array of tag filters
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("TagFilters",$param) and $param["TagFilters"] !== null) {
            $this->TagFilters = [];
            foreach ($param["TagFilters"] as $key => $value){
                $obj = new PrometheusTag();
                $obj->deserialize($value);
                array_push($this->TagFilters, $obj);
            }
        }
    }
}
