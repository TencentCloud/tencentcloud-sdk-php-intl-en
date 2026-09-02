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
 * ModifyRaspLicenseBinds request structure.
 *
 * @method string getAssetType() Obtain Asset type
- CWP host security assets
- TCSS_HOST container host node
- TCSS_EKS container super node
 * @method void setAssetType(string $AssetType) Set Asset type
- CWP host security assets
- TCSS_HOST container host node
- TCSS_EKS container super node
 * @method string getResourceID() Obtain Resource ID
 * @method void setResourceID(string $ResourceID) Set Resource ID
 * @method string getInquireKey() Obtain Billing item type
-sv_yunjing_vas_small small package
-sv_yunjing_vas_medium medium package
-sv_yunjing_vas_large package
-sv_yunjing_vas_expansion expansion package
 * @method void setInquireKey(string $InquireKey) Set Billing item type
-sv_yunjing_vas_small small package
-sv_yunjing_vas_medium medium package
-sv_yunjing_vas_large package
-sv_yunjing_vas_expansion expansion package
 * @method array getQUUID() Obtain Instance ID array.
 * @method void setQUUID(array $QUUID) Set Instance ID array.
 * @method boolean getIsALL() Obtain Whether to include all host instances.
 * @method void setIsALL(boolean $IsALL) Set Whether to include all host instances.
 * @method array getFilters() Obtain Filter parameter. This parameter takes effect when IsALL is set to true, indicating that the filtered results apply to QUUIDs.
 * @method void setFilters(array $Filters) Set Filter parameter. This parameter takes effect when IsALL is set to true, indicating that the filtered results apply to QUUIDs.
 */
class ModifyRaspLicenseBindsRequest extends AbstractModel
{
    /**
     * @var string Asset type
- CWP host security assets
- TCSS_HOST container host node
- TCSS_EKS container super node
     */
    public $AssetType;

    /**
     * @var string Resource ID
     */
    public $ResourceID;

    /**
     * @var string Billing item type
-sv_yunjing_vas_small small package
-sv_yunjing_vas_medium medium package
-sv_yunjing_vas_large package
-sv_yunjing_vas_expansion expansion package
     */
    public $InquireKey;

    /**
     * @var array Instance ID array.
     */
    public $QUUID;

    /**
     * @var boolean Whether to include all host instances.
     */
    public $IsALL;

    /**
     * @var array Filter parameter. This parameter takes effect when IsALL is set to true, indicating that the filtered results apply to QUUIDs.
     */
    public $Filters;

    /**
     * @param string $AssetType Asset type
- CWP host security assets
- TCSS_HOST container host node
- TCSS_EKS container super node
     * @param string $ResourceID Resource ID
     * @param string $InquireKey Billing item type
-sv_yunjing_vas_small small package
-sv_yunjing_vas_medium medium package
-sv_yunjing_vas_large package
-sv_yunjing_vas_expansion expansion package
     * @param array $QUUID Instance ID array.
     * @param boolean $IsALL Whether to include all host instances.
     * @param array $Filters Filter parameter. This parameter takes effect when IsALL is set to true, indicating that the filtered results apply to QUUIDs.
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

        if (array_key_exists("ResourceID",$param) and $param["ResourceID"] !== null) {
            $this->ResourceID = $param["ResourceID"];
        }

        if (array_key_exists("InquireKey",$param) and $param["InquireKey"] !== null) {
            $this->InquireKey = $param["InquireKey"];
        }

        if (array_key_exists("QUUID",$param) and $param["QUUID"] !== null) {
            $this->QUUID = $param["QUUID"];
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
