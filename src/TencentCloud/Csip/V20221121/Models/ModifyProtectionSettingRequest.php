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
 * ModifyProtectionSetting request structure.
 *
 * @method string getAssetType() Obtain Asset type
- CWP host security asset
- TCSS_HOST container host node
-TCSS_EKS container super node
 * @method void setAssetType(string $AssetType) Set Asset type
- CWP host security asset
- TCSS_HOST container host node
-TCSS_EKS container super node
 * @method array getConfig() Obtain Protection configuration
 * @method void setConfig(array $Config) Set Protection configuration
 * @method boolean getIsALL() Obtain Whether to include all. This field must be used in conjunction with Filters.
 * @method void setIsALL(boolean $IsALL) Set Whether to include all. This field must be used in conjunction with Filters.
 * @method array getFilters() Obtain Filter parameter. This parameter takes effect when IsALL is set to true, indicating that the filtered results apply to Config.
 * @method void setFilters(array $Filters) Set Filter parameter. This parameter takes effect when IsALL is set to true, indicating that the filtered results apply to Config.
 */
class ModifyProtectionSettingRequest extends AbstractModel
{
    /**
     * @var string Asset type
- CWP host security asset
- TCSS_HOST container host node
-TCSS_EKS container super node
     */
    public $AssetType;

    /**
     * @var array Protection configuration
     */
    public $Config;

    /**
     * @var boolean Whether to include all. This field must be used in conjunction with Filters.
     */
    public $IsALL;

    /**
     * @var array Filter parameter. This parameter takes effect when IsALL is set to true, indicating that the filtered results apply to Config.
     */
    public $Filters;

    /**
     * @param string $AssetType Asset type
- CWP host security asset
- TCSS_HOST container host node
-TCSS_EKS container super node
     * @param array $Config Protection configuration
     * @param boolean $IsALL Whether to include all. This field must be used in conjunction with Filters.
     * @param array $Filters Filter parameter. This parameter takes effect when IsALL is set to true, indicating that the filtered results apply to Config.
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

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = [];
            foreach ($param["Config"] as $key => $value){
                $obj = new ModifyProtectionSetting();
                $obj->deserialize($value);
                array_push($this->Config, $obj);
            }
        }

        if (array_key_exists("IsALL",$param) and $param["IsALL"] !== null) {
            $this->IsALL = $param["IsALL"];
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
