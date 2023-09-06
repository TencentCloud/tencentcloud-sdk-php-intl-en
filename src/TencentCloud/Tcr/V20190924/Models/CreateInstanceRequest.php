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
 * CreateInstance request structure.
 *
 * @method string getRegistryName() Obtain Enterprise Edition instance name
 * @method void setRegistryName(string $RegistryName) Set Enterprise Edition instance name
 * @method string getRegistryType() Obtain Enterprise Edition instance type. Valid values: basic: Basic; standard: Standard; premium: Premium.
 * @method void setRegistryType(string $RegistryType) Set Enterprise Edition instance type. Valid values: basic: Basic; standard: Standard; premium: Premium.
 * @method TagSpecification getTagSpecification() Obtain Cloud tag description
 * @method void setTagSpecification(TagSpecification $TagSpecification) Set Cloud tag description
 * @method integer getRegistryChargeType() Obtain Instance billing mode. Valid values: 0: Pay-as-you-go billing; 1: Prepaid. Default value: 0.
 * @method void setRegistryChargeType(integer $RegistryChargeType) Set Instance billing mode. Valid values: 0: Pay-as-you-go billing; 1: Prepaid. Default value: 0.
 * @method RegistryChargePrepaid getRegistryChargePrepaid() Obtain Auto-renewal setting and purchase period
 * @method void setRegistryChargePrepaid(RegistryChargePrepaid $RegistryChargePrepaid) Set Auto-renewal setting and purchase period
 * @method boolean getSyncTag() Obtain Whether to sync TCR cloud tags to the COS bucket
 * @method void setSyncTag(boolean $SyncTag) Set Whether to sync TCR cloud tags to the COS bucket
 * @method boolean getEnableCosMAZ() Obtain Whether to enable the COS Multi-AZ feature
 * @method void setEnableCosMAZ(boolean $EnableCosMAZ) Set Whether to enable the COS Multi-AZ feature
 * @method boolean getDeletionProtection() Obtain Whether to enable deletion protection
 * @method void setDeletionProtection(boolean $DeletionProtection) Set Whether to enable deletion protection
 */
class CreateInstanceRequest extends AbstractModel
{
    /**
     * @var string Enterprise Edition instance name
     */
    public $RegistryName;

    /**
     * @var string Enterprise Edition instance type. Valid values: basic: Basic; standard: Standard; premium: Premium.
     */
    public $RegistryType;

    /**
     * @var TagSpecification Cloud tag description
     */
    public $TagSpecification;

    /**
     * @var integer Instance billing mode. Valid values: 0: Pay-as-you-go billing; 1: Prepaid. Default value: 0.
     */
    public $RegistryChargeType;

    /**
     * @var RegistryChargePrepaid Auto-renewal setting and purchase period
     */
    public $RegistryChargePrepaid;

    /**
     * @var boolean Whether to sync TCR cloud tags to the COS bucket
     */
    public $SyncTag;

    /**
     * @var boolean Whether to enable the COS Multi-AZ feature
     */
    public $EnableCosMAZ;

    /**
     * @var boolean Whether to enable deletion protection
     */
    public $DeletionProtection;

    /**
     * @param string $RegistryName Enterprise Edition instance name
     * @param string $RegistryType Enterprise Edition instance type. Valid values: basic: Basic; standard: Standard; premium: Premium.
     * @param TagSpecification $TagSpecification Cloud tag description
     * @param integer $RegistryChargeType Instance billing mode. Valid values: 0: Pay-as-you-go billing; 1: Prepaid. Default value: 0.
     * @param RegistryChargePrepaid $RegistryChargePrepaid Auto-renewal setting and purchase period
     * @param boolean $SyncTag Whether to sync TCR cloud tags to the COS bucket
     * @param boolean $EnableCosMAZ Whether to enable the COS Multi-AZ feature
     * @param boolean $DeletionProtection Whether to enable deletion protection
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
        if (array_key_exists("RegistryName",$param) and $param["RegistryName"] !== null) {
            $this->RegistryName = $param["RegistryName"];
        }

        if (array_key_exists("RegistryType",$param) and $param["RegistryType"] !== null) {
            $this->RegistryType = $param["RegistryType"];
        }

        if (array_key_exists("TagSpecification",$param) and $param["TagSpecification"] !== null) {
            $this->TagSpecification = new TagSpecification();
            $this->TagSpecification->deserialize($param["TagSpecification"]);
        }

        if (array_key_exists("RegistryChargeType",$param) and $param["RegistryChargeType"] !== null) {
            $this->RegistryChargeType = $param["RegistryChargeType"];
        }

        if (array_key_exists("RegistryChargePrepaid",$param) and $param["RegistryChargePrepaid"] !== null) {
            $this->RegistryChargePrepaid = new RegistryChargePrepaid();
            $this->RegistryChargePrepaid->deserialize($param["RegistryChargePrepaid"]);
        }

        if (array_key_exists("SyncTag",$param) and $param["SyncTag"] !== null) {
            $this->SyncTag = $param["SyncTag"];
        }

        if (array_key_exists("EnableCosMAZ",$param) and $param["EnableCosMAZ"] !== null) {
            $this->EnableCosMAZ = $param["EnableCosMAZ"];
        }

        if (array_key_exists("DeletionProtection",$param) and $param["DeletionProtection"] !== null) {
            $this->DeletionProtection = $param["DeletionProtection"];
        }
    }
}
