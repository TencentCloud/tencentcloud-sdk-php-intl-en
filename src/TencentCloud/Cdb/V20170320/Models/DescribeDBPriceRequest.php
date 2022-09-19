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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBPrice request structure.
 *
 * @method string getZone() Obtain AZ information in the format of "ap-guangzhou-2". You can use the <a href="https://cloud.tencent.com/document/api/236/17229">DescribeDBZoneConfig</a> API to query the values that can be set.
 * @method void setZone(string $Zone) Set AZ information in the format of "ap-guangzhou-2". You can use the <a href="https://cloud.tencent.com/document/api/236/17229">DescribeDBZoneConfig</a> API to query the values that can be set.
 * @method integer getGoodsNum() Obtain Number of instances. Value range: 1-100. Default value: 1.
 * @method void setGoodsNum(integer $GoodsNum) Set Number of instances. Value range: 1-100. Default value: 1.
 * @method integer getMemory() Obtain Instance memory size in MB.
 * @method void setMemory(integer $Memory) Set Instance memory size in MB.
 * @method integer getVolume() Obtain Instance disk size in GB.
 * @method void setVolume(integer $Volume) Set Instance disk size in GB.
 * @method string getPayType() Obtain Billing method. Value range: PRE_PAID (monthly subscribed), HOUR_PAID (pay-as-you-go).
 * @method void setPayType(string $PayType) Set Billing method. Value range: PRE_PAID (monthly subscribed), HOUR_PAID (pay-as-you-go).
 * @method integer getPeriod() Obtain Instance validity period in months. Value range: 1-36. This field is invalid when querying prices of pay-as-you-go instances.
 * @method void setPeriod(integer $Period) Set Instance validity period in months. Value range: 1-36. This field is invalid when querying prices of pay-as-you-go instances.
 * @method string getInstanceRole() Obtain Instance type. Value range: master (master instance), dr (disaster recovery instance), ro (read-only instance). Default value: master.
 * @method void setInstanceRole(string $InstanceRole) Set Instance type. Value range: master (master instance), dr (disaster recovery instance), ro (read-only instance). Default value: master.
 * @method integer getProtectMode() Obtain Data replication mode. Value range: 0 (async), 1 (semi-sync), 2 (strong sync). Default value: 0.
 * @method void setProtectMode(integer $ProtectMode) Set Data replication mode. Value range: 0 (async), 1 (semi-sync), 2 (strong sync). Default value: 0.
 */
class DescribeDBPriceRequest extends AbstractModel
{
    /**
     * @var string AZ information in the format of "ap-guangzhou-2". You can use the <a href="https://cloud.tencent.com/document/api/236/17229">DescribeDBZoneConfig</a> API to query the values that can be set.
     */
    public $Zone;

    /**
     * @var integer Number of instances. Value range: 1-100. Default value: 1.
     */
    public $GoodsNum;

    /**
     * @var integer Instance memory size in MB.
     */
    public $Memory;

    /**
     * @var integer Instance disk size in GB.
     */
    public $Volume;

    /**
     * @var string Billing method. Value range: PRE_PAID (monthly subscribed), HOUR_PAID (pay-as-you-go).
     */
    public $PayType;

    /**
     * @var integer Instance validity period in months. Value range: 1-36. This field is invalid when querying prices of pay-as-you-go instances.
     */
    public $Period;

    /**
     * @var string Instance type. Value range: master (master instance), dr (disaster recovery instance), ro (read-only instance). Default value: master.
     */
    public $InstanceRole;

    /**
     * @var integer Data replication mode. Value range: 0 (async), 1 (semi-sync), 2 (strong sync). Default value: 0.
     */
    public $ProtectMode;

    /**
     * @param string $Zone AZ information in the format of "ap-guangzhou-2". You can use the <a href="https://cloud.tencent.com/document/api/236/17229">DescribeDBZoneConfig</a> API to query the values that can be set.
     * @param integer $GoodsNum Number of instances. Value range: 1-100. Default value: 1.
     * @param integer $Memory Instance memory size in MB.
     * @param integer $Volume Instance disk size in GB.
     * @param string $PayType Billing method. Value range: PRE_PAID (monthly subscribed), HOUR_PAID (pay-as-you-go).
     * @param integer $Period Instance validity period in months. Value range: 1-36. This field is invalid when querying prices of pay-as-you-go instances.
     * @param string $InstanceRole Instance type. Value range: master (master instance), dr (disaster recovery instance), ro (read-only instance). Default value: master.
     * @param integer $ProtectMode Data replication mode. Value range: 0 (async), 1 (semi-sync), 2 (strong sync). Default value: 0.
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("GoodsNum",$param) and $param["GoodsNum"] !== null) {
            $this->GoodsNum = $param["GoodsNum"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Volume",$param) and $param["Volume"] !== null) {
            $this->Volume = $param["Volume"];
        }

        if (array_key_exists("PayType",$param) and $param["PayType"] !== null) {
            $this->PayType = $param["PayType"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("InstanceRole",$param) and $param["InstanceRole"] !== null) {
            $this->InstanceRole = $param["InstanceRole"];
        }

        if (array_key_exists("ProtectMode",$param) and $param["ProtectMode"] !== null) {
            $this->ProtectMode = $param["ProtectMode"];
        }
    }
}
