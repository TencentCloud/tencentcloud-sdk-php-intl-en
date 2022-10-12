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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstances request structure.
 *
 * @method array getRegistryids() Obtain List of instance IDs (if it is empty,
it indicates to get all instances under the current account)
 * @method void setRegistryids(array $Registryids) Set List of instance IDs (if it is empty,
it indicates to get all instances under the current account)
 * @method integer getOffset() Obtain Offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0.
 * @method integer getLimit() Obtain Maximum number of output entries. Default value: 20. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Maximum number of output entries. Default value: 20. Maximum value: 100.
 * @method array getFilters() Obtain Filters
 * @method void setFilters(array $Filters) Set Filters
 * @method boolean getAllRegion() Obtain Whether to get the instances in all regions. Default value: False.
 * @method void setAllRegion(boolean $AllRegion) Set Whether to get the instances in all regions. Default value: False.
 */
class DescribeInstancesRequest extends AbstractModel
{
    /**
     * @var array List of instance IDs (if it is empty,
it indicates to get all instances under the current account)
     */
    public $Registryids;

    /**
     * @var integer Offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Maximum number of output entries. Default value: 20. Maximum value: 100.
     */
    public $Limit;

    /**
     * @var array Filters
     */
    public $Filters;

    /**
     * @var boolean Whether to get the instances in all regions. Default value: False.
     */
    public $AllRegion;

    /**
     * @param array $Registryids List of instance IDs (if it is empty,
it indicates to get all instances under the current account)
     * @param integer $Offset Offset. Default value: 0.
     * @param integer $Limit Maximum number of output entries. Default value: 20. Maximum value: 100.
     * @param array $Filters Filters
     * @param boolean $AllRegion Whether to get the instances in all regions. Default value: False.
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
        if (array_key_exists("Registryids",$param) and $param["Registryids"] !== null) {
            $this->Registryids = $param["Registryids"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("AllRegion",$param) and $param["AllRegion"] !== null) {
            $this->AllRegion = $param["AllRegion"];
        }
    }
}
