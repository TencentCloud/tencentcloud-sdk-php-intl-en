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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateTawInstance request structure.
 *
 * @method integer getAreaId() Obtain Region ID (at least greater than 0)
 * @method void setAreaId(integer $AreaId) Set Region ID (at least greater than 0)
 * @method integer getChargeType() Obtain Billing type (1: Pay-as-you-go).
 * @method void setChargeType(integer $ChargeType) Set Billing type (1: Pay-as-you-go).
 * @method integer getDataRetentionDays() Obtain Data retention period (at least greater than 0)
 * @method void setDataRetentionDays(integer $DataRetentionDays) Set Data retention period (at least greater than 0)
 * @method string getInstanceName() Obtain Instance name (up to 255 bytes)
 * @method void setInstanceName(string $InstanceName) Set Instance name (up to 255 bytes)
 * @method array getTags() Obtain Tag list
 * @method void setTags(array $Tags) Set Tag list
 * @method string getInstanceDesc() Obtain Instance description (up to 1,024 bytes)
 * @method void setInstanceDesc(string $InstanceDesc) Set Instance description (up to 1,024 bytes)
 * @method string getCountNum() Obtain Number of data entries reported per day
 * @method void setCountNum(string $CountNum) Set Number of data entries reported per day
 * @method string getPeriodRetain() Obtain Billing for data storage
 * @method void setPeriodRetain(string $PeriodRetain) Set Billing for data storage
 * @method string getBuyingChannel() Obtain Instance purchase channel. Valid value: `cdn`.
 * @method void setBuyingChannel(string $BuyingChannel) Set Instance purchase channel. Valid value: `cdn`.
 * @method integer getResourcePackageType() Obtain Type of prepaid resource pack (only required for prepaid mode)
 * @method void setResourcePackageType(integer $ResourcePackageType) Set Type of prepaid resource pack (only required for prepaid mode)
 * @method integer getResourcePackageNum() Obtain The number of prepaid resource packs (only required for prepaid mode)
 * @method void setResourcePackageNum(integer $ResourcePackageNum) Set The number of prepaid resource packs (only required for prepaid mode)
 * @method integer getInstanceType() Obtain Instance type. `1`: Web; `2`: Application
 * @method void setInstanceType(integer $InstanceType) Set Instance type. `1`: Web; `2`: Application
 */
class CreateTawInstanceRequest extends AbstractModel
{
    /**
     * @var integer Region ID (at least greater than 0)
     */
    public $AreaId;

    /**
     * @var integer Billing type (1: Pay-as-you-go).
     */
    public $ChargeType;

    /**
     * @var integer Data retention period (at least greater than 0)
     */
    public $DataRetentionDays;

    /**
     * @var string Instance name (up to 255 bytes)
     */
    public $InstanceName;

    /**
     * @var array Tag list
     */
    public $Tags;

    /**
     * @var string Instance description (up to 1,024 bytes)
     */
    public $InstanceDesc;

    /**
     * @var string Number of data entries reported per day
     */
    public $CountNum;

    /**
     * @var string Billing for data storage
     */
    public $PeriodRetain;

    /**
     * @var string Instance purchase channel. Valid value: `cdn`.
     */
    public $BuyingChannel;

    /**
     * @var integer Type of prepaid resource pack (only required for prepaid mode)
     */
    public $ResourcePackageType;

    /**
     * @var integer The number of prepaid resource packs (only required for prepaid mode)
     */
    public $ResourcePackageNum;

    /**
     * @var integer Instance type. `1`: Web; `2`: Application
     */
    public $InstanceType;

    /**
     * @param integer $AreaId Region ID (at least greater than 0)
     * @param integer $ChargeType Billing type (1: Pay-as-you-go).
     * @param integer $DataRetentionDays Data retention period (at least greater than 0)
     * @param string $InstanceName Instance name (up to 255 bytes)
     * @param array $Tags Tag list
     * @param string $InstanceDesc Instance description (up to 1,024 bytes)
     * @param string $CountNum Number of data entries reported per day
     * @param string $PeriodRetain Billing for data storage
     * @param string $BuyingChannel Instance purchase channel. Valid value: `cdn`.
     * @param integer $ResourcePackageType Type of prepaid resource pack (only required for prepaid mode)
     * @param integer $ResourcePackageNum The number of prepaid resource packs (only required for prepaid mode)
     * @param integer $InstanceType Instance type. `1`: Web; `2`: Application
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
        if (array_key_exists("AreaId",$param) and $param["AreaId"] !== null) {
            $this->AreaId = $param["AreaId"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("DataRetentionDays",$param) and $param["DataRetentionDays"] !== null) {
            $this->DataRetentionDays = $param["DataRetentionDays"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("InstanceDesc",$param) and $param["InstanceDesc"] !== null) {
            $this->InstanceDesc = $param["InstanceDesc"];
        }

        if (array_key_exists("CountNum",$param) and $param["CountNum"] !== null) {
            $this->CountNum = $param["CountNum"];
        }

        if (array_key_exists("PeriodRetain",$param) and $param["PeriodRetain"] !== null) {
            $this->PeriodRetain = $param["PeriodRetain"];
        }

        if (array_key_exists("BuyingChannel",$param) and $param["BuyingChannel"] !== null) {
            $this->BuyingChannel = $param["BuyingChannel"];
        }

        if (array_key_exists("ResourcePackageType",$param) and $param["ResourcePackageType"] !== null) {
            $this->ResourcePackageType = $param["ResourcePackageType"];
        }

        if (array_key_exists("ResourcePackageNum",$param) and $param["ResourcePackageNum"] !== null) {
            $this->ResourcePackageNum = $param["ResourcePackageNum"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }
    }
}
