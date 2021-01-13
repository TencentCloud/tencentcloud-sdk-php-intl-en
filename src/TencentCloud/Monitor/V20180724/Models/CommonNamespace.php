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
 * Unified namespace information
 *
 * @method string getId() Obtain Namespace ID
 * @method void setId(string $Id) Set Namespace ID
 * @method string getName() Obtain Namespace name
 * @method void setName(string $Name) Set Namespace name
 * @method string getValue() Obtain Namespace value
 * @method void setValue(string $Value) Set Namespace value
 * @method string getProductName() Obtain Product name
 * @method void setProductName(string $ProductName) Set Product name
 * @method string getConfig() Obtain Configuration information
 * @method void setConfig(string $Config) Set Configuration information
 * @method array getAvailableRegions() Obtain List of supported regions
 * @method void setAvailableRegions(array $AvailableRegions) Set List of supported regions
 * @method integer getSortId() Obtain Sort ID
 * @method void setSortId(integer $SortId) Set Sort ID
 * @method string getDashboardId() Obtain Unique ID in Dashboard
 * @method void setDashboardId(string $DashboardId) Set Unique ID in Dashboard
 */
class CommonNamespace extends AbstractModel
{
    /**
     * @var string Namespace ID
     */
    public $Id;

    /**
     * @var string Namespace name
     */
    public $Name;

    /**
     * @var string Namespace value
     */
    public $Value;

    /**
     * @var string Product name
     */
    public $ProductName;

    /**
     * @var string Configuration information
     */
    public $Config;

    /**
     * @var array List of supported regions
     */
    public $AvailableRegions;

    /**
     * @var integer Sort ID
     */
    public $SortId;

    /**
     * @var string Unique ID in Dashboard
     */
    public $DashboardId;

    /**
     * @param string $Id Namespace ID
     * @param string $Name Namespace name
     * @param string $Value Namespace value
     * @param string $ProductName Product name
     * @param string $Config Configuration information
     * @param array $AvailableRegions List of supported regions
     * @param integer $SortId Sort ID
     * @param string $DashboardId Unique ID in Dashboard
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = $param["Config"];
        }

        if (array_key_exists("AvailableRegions",$param) and $param["AvailableRegions"] !== null) {
            $this->AvailableRegions = $param["AvailableRegions"];
        }

        if (array_key_exists("SortId",$param) and $param["SortId"] !== null) {
            $this->SortId = $param["SortId"];
        }

        if (array_key_exists("DashboardId",$param) and $param["DashboardId"] !== null) {
            $this->DashboardId = $param["DashboardId"];
        }
    }
}
