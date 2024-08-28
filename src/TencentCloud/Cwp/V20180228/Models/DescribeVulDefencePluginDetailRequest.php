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
 * DescribeVulDefencePluginDetail request structure.
 *
 * @method string getQuuid() Obtain Host QUUID
 * @method void setQuuid(string $Quuid) Set Host QUUID
 * @method array getFilters() Obtain Filter criterion. Keywords: IP address or host name. Exception and Status support precise match.
 * @method void setFilters(array $Filters) Set Filter criterion. Keywords: IP address or host name. Exception and Status support precise match.
 * @method integer getOffset() Obtain Data offset
 * @method void setOffset(integer $Offset) Set Data offset
 * @method integer getLimit() Obtain Data limit
 * @method void setLimit(integer $Limit) Set Data limit
 */
class DescribeVulDefencePluginDetailRequest extends AbstractModel
{
    /**
     * @var string Host QUUID
     */
    public $Quuid;

    /**
     * @var array Filter criterion. Keywords: IP address or host name. Exception and Status support precise match.
     */
    public $Filters;

    /**
     * @var integer Data offset
     */
    public $Offset;

    /**
     * @var integer Data limit
     */
    public $Limit;

    /**
     * @param string $Quuid Host QUUID
     * @param array $Filters Filter criterion. Keywords: IP address or host name. Exception and Status support precise match.
     * @param integer $Offset Data offset
     * @param integer $Limit Data limit
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
        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
