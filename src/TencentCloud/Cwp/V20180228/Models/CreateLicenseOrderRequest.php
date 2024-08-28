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
 * CreateLicenseOrder request structure.
 *
 * @method array getTags() Obtain Tag array. Leaving it blank indicates no tags need to be bound.
 * @method void setTags(array $Tags) Set Tag array. Leaving it blank indicates no tags need to be bound.
 * @method integer getLicenseType() Obtain Authorization type. 0: Pro Edition-pay-as-you-go; 1: Pro Edition-monthly subscription; 2 - Ultimate Edition-monthly subscriptionThe default is 0.
 * @method void setLicenseType(integer $LicenseType) Set Authorization type. 0: Pro Edition-pay-as-you-go; 1: Pro Edition-monthly subscription; 2 - Ultimate Edition-monthly subscriptionThe default is 0.
 * @method integer getLicenseNum() Obtain Authorization quantity: the number of units that need to be purchased
The default is 1.
 * @method void setLicenseNum(integer $LicenseNum) Set Authorization quantity: the number of units that need to be purchased
The default is 1.
 * @method integer getRegionId() Obtain Region of purchase order. In this case, only 1 - Guangzhou and 9 - Singapore are supported. Guangzhou is recommended. Singapore region is reserved for allowlisted users.
The default is 1.
 * @method void setRegionId(integer $RegionId) Set Region of purchase order. In this case, only 1 - Guangzhou and 9 - Singapore are supported. Guangzhou is recommended. Singapore region is reserved for allowlisted users.
The default is 1.
 * @method integer getProjectId() Obtain Project ID
The default is 0.
 * @method void setProjectId(integer $ProjectId) Set Project ID
The default is 0.
 * @method integer getTimeSpan() Obtain Purchase duration, with a default value of 1. The optional values are 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, and 36
This parameter is only valid for monthly subscription.
 * @method void setTimeSpan(integer $TimeSpan) Set Purchase duration, with a default value of 1. The optional values are 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, and 36
This parameter is only valid for monthly subscription.
 * @method boolean getAutoRenewFlag() Obtain Whether to auto-renew. The default is not to auto-renew.
This parameter is only valid for monthly subscription.
 * @method void setAutoRenewFlag(boolean $AutoRenewFlag) Set Whether to auto-renew. The default is not to auto-renew.
This parameter is only valid for monthly subscription.
 * @method string getAutoProtectOpenConfig() Obtain This field is deprecated.
 * @method void setAutoProtectOpenConfig(string $AutoProtectOpenConfig) Set This field is deprecated.
 * @method OrderModifyObject getModifyConfig() Obtain Reconfiguration Parameters
 * @method void setModifyConfig(OrderModifyObject $ModifyConfig) Set Reconfiguration Parameters
 */
class CreateLicenseOrderRequest extends AbstractModel
{
    /**
     * @var array Tag array. Leaving it blank indicates no tags need to be bound.
     */
    public $Tags;

    /**
     * @var integer Authorization type. 0: Pro Edition-pay-as-you-go; 1: Pro Edition-monthly subscription; 2 - Ultimate Edition-monthly subscriptionThe default is 0.
     */
    public $LicenseType;

    /**
     * @var integer Authorization quantity: the number of units that need to be purchased
The default is 1.
     */
    public $LicenseNum;

    /**
     * @var integer Region of purchase order. In this case, only 1 - Guangzhou and 9 - Singapore are supported. Guangzhou is recommended. Singapore region is reserved for allowlisted users.
The default is 1.
     */
    public $RegionId;

    /**
     * @var integer Project ID
The default is 0.
     */
    public $ProjectId;

    /**
     * @var integer Purchase duration, with a default value of 1. The optional values are 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, and 36
This parameter is only valid for monthly subscription.
     */
    public $TimeSpan;

    /**
     * @var boolean Whether to auto-renew. The default is not to auto-renew.
This parameter is only valid for monthly subscription.
     */
    public $AutoRenewFlag;

    /**
     * @var string This field is deprecated.
     */
    public $AutoProtectOpenConfig;

    /**
     * @var OrderModifyObject Reconfiguration Parameters
     */
    public $ModifyConfig;

    /**
     * @param array $Tags Tag array. Leaving it blank indicates no tags need to be bound.
     * @param integer $LicenseType Authorization type. 0: Pro Edition-pay-as-you-go; 1: Pro Edition-monthly subscription; 2 - Ultimate Edition-monthly subscriptionThe default is 0.
     * @param integer $LicenseNum Authorization quantity: the number of units that need to be purchased
The default is 1.
     * @param integer $RegionId Region of purchase order. In this case, only 1 - Guangzhou and 9 - Singapore are supported. Guangzhou is recommended. Singapore region is reserved for allowlisted users.
The default is 1.
     * @param integer $ProjectId Project ID
The default is 0.
     * @param integer $TimeSpan Purchase duration, with a default value of 1. The optional values are 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, and 36
This parameter is only valid for monthly subscription.
     * @param boolean $AutoRenewFlag Whether to auto-renew. The default is not to auto-renew.
This parameter is only valid for monthly subscription.
     * @param string $AutoProtectOpenConfig This field is deprecated.
     * @param OrderModifyObject $ModifyConfig Reconfiguration Parameters
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
        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tags();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("LicenseType",$param) and $param["LicenseType"] !== null) {
            $this->LicenseType = $param["LicenseType"];
        }

        if (array_key_exists("LicenseNum",$param) and $param["LicenseNum"] !== null) {
            $this->LicenseNum = $param["LicenseNum"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("AutoProtectOpenConfig",$param) and $param["AutoProtectOpenConfig"] !== null) {
            $this->AutoProtectOpenConfig = $param["AutoProtectOpenConfig"];
        }

        if (array_key_exists("ModifyConfig",$param) and $param["ModifyConfig"] !== null) {
            $this->ModifyConfig = new OrderModifyObject();
            $this->ModifyConfig->deserialize($param["ModifyConfig"]);
        }
    }
}
