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
 * DescribeRaspPluginList request structure.
 *
 * @method string getAssetType() Obtain Asset type
-CWP host security asset
-TCSS_HOST container host node
-TCSS_EKS Container Super Node
 * @method void setAssetType(string $AssetType) Set Asset type
-CWP host security asset
-TCSS_HOST container host node
-TCSS_EKS Container Super Node
 * @method string getQUUID() Obtain Machine unique ID
 * @method void setQUUID(string $QUUID) Set Machine unique ID
 * @method array getFilters() Obtain Filter parameters
PluginStatus Plug-in status (Injecting, Injected successfully, Timed out, Plug-in exit, Injection failure)
process PID
Main class name of the process
 * @method void setFilters(array $Filters) Set Filter parameters
PluginStatus Plug-in status (Injecting, Injected successfully, Timed out, Plug-in exit, Injection failure)
process PID
Main class name of the process
 * @method integer getOffset() Obtain Offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0.
 * @method integer getLimit() Obtain Maximum number of entries. Default value: 10.
 * @method void setLimit(integer $Limit) Set Maximum number of entries. Default value: 10.
 */
class DescribeRaspPluginListRequest extends AbstractModel
{
    /**
     * @var string Asset type
-CWP host security asset
-TCSS_HOST container host node
-TCSS_EKS Container Super Node
     */
    public $AssetType;

    /**
     * @var string Machine unique ID
     */
    public $QUUID;

    /**
     * @var array Filter parameters
PluginStatus Plug-in status (Injecting, Injected successfully, Timed out, Plug-in exit, Injection failure)
process PID
Main class name of the process
     */
    public $Filters;

    /**
     * @var integer Offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Maximum number of entries. Default value: 10.
     */
    public $Limit;

    /**
     * @param string $AssetType Asset type
-CWP host security asset
-TCSS_HOST container host node
-TCSS_EKS Container Super Node
     * @param string $QUUID Machine unique ID
     * @param array $Filters Filter parameters
PluginStatus Plug-in status (Injecting, Injected successfully, Timed out, Plug-in exit, Injection failure)
process PID
Main class name of the process
     * @param integer $Offset Offset. Default value: 0.
     * @param integer $Limit Maximum number of entries. Default value: 10.
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
        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("QUUID",$param) and $param["QUUID"] !== null) {
            $this->QUUID = $param["QUUID"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filters();
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
