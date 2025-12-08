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
namespace TencentCloud\Smh\V20210712\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Traffic package information.
 *
 * @method string getInstanceId() Obtain Specifies the instance ID offset by the traffic package.
 * @method void setInstanceId(string $InstanceId) Set Specifies the instance ID offset by the traffic package.
 * @method string getDomain() Obtain Dedicated domain name. if the instance has no dedicated domain name, this attribute is null.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDomain(string $Domain) Set Dedicated domain name. if the instance has no dedicated domain name, this attribute is null.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getType() Obtain Source type of the traffic package. valid values: 0 (purchase), 1 (complimentary).
 * @method void setType(integer $Type) Set Source type of the traffic package. valid values: 0 (purchase), 1 (complimentary).
 * @method string getSize() Obtain Total traffic in Bytes. since the number type has precision limitations, this field is a String type.
 * @method void setSize(string $Size) Set Total traffic in Bytes. since the number type has precision limitations, this field is a String type.
 * @method integer getSizeGB() Obtain Total traffic in GB.
 * @method void setSizeGB(integer $SizeGB) Set Total traffic in GB.
 * @method string getRemain() Obtain Remaining traffic in Bytes. this field is of String type due to precision limitations of numeric data types.
 * @method void setRemain(string $Remain) Set Remaining traffic in Bytes. this field is of String type due to precision limitations of numeric data types.
 * @method string getUsed() Obtain Used traffic in Bytes. since the number type has precision limitations, this field is a String type.
 * @method void setUsed(string $Used) Set Used traffic in Bytes. since the number type has precision limitations, this field is a String type.
 * @method string getUsedPercentage() Obtain Usage percentage. since the String type is used due to precision limitations of the number type, this field is of String type.
 * @method void setUsedPercentage(string $UsedPercentage) Set Usage percentage. since the String type is used due to precision limitations of the number type, this field is of String type.
 * @method string getEffectiveTime() Obtain Effective time, the order time of the traffic package.
 * @method void setEffectiveTime(string $EffectiveTime) Set Effective time, the order time of the traffic package.
 * @method string getExpireTime() Obtain Expiration time, which is the expiration time of the offset instance. if the traffic package offsets a pay-as-you-go or permanently valid instance, this attribute is null.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExpireTime(string $ExpireTime) Set Expiration time, which is the expiration time of the offset instance. if the traffic package offsets a pay-as-you-go or permanently valid instance, this attribute is null.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class TrafficPackage extends AbstractModel
{
    /**
     * @var string Specifies the instance ID offset by the traffic package.
     */
    public $InstanceId;

    /**
     * @var string Dedicated domain name. if the instance has no dedicated domain name, this attribute is null.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Domain;

    /**
     * @var integer Source type of the traffic package. valid values: 0 (purchase), 1 (complimentary).
     */
    public $Type;

    /**
     * @var string Total traffic in Bytes. since the number type has precision limitations, this field is a String type.
     */
    public $Size;

    /**
     * @var integer Total traffic in GB.
     */
    public $SizeGB;

    /**
     * @var string Remaining traffic in Bytes. this field is of String type due to precision limitations of numeric data types.
     */
    public $Remain;

    /**
     * @var string Used traffic in Bytes. since the number type has precision limitations, this field is a String type.
     */
    public $Used;

    /**
     * @var string Usage percentage. since the String type is used due to precision limitations of the number type, this field is of String type.
     */
    public $UsedPercentage;

    /**
     * @var string Effective time, the order time of the traffic package.
     */
    public $EffectiveTime;

    /**
     * @var string Expiration time, which is the expiration time of the offset instance. if the traffic package offsets a pay-as-you-go or permanently valid instance, this attribute is null.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExpireTime;

    /**
     * @param string $InstanceId Specifies the instance ID offset by the traffic package.
     * @param string $Domain Dedicated domain name. if the instance has no dedicated domain name, this attribute is null.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Type Source type of the traffic package. valid values: 0 (purchase), 1 (complimentary).
     * @param string $Size Total traffic in Bytes. since the number type has precision limitations, this field is a String type.
     * @param integer $SizeGB Total traffic in GB.
     * @param string $Remain Remaining traffic in Bytes. this field is of String type due to precision limitations of numeric data types.
     * @param string $Used Used traffic in Bytes. since the number type has precision limitations, this field is a String type.
     * @param string $UsedPercentage Usage percentage. since the String type is used due to precision limitations of the number type, this field is of String type.
     * @param string $EffectiveTime Effective time, the order time of the traffic package.
     * @param string $ExpireTime Expiration time, which is the expiration time of the offset instance. if the traffic package offsets a pay-as-you-go or permanently valid instance, this attribute is null.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("SizeGB",$param) and $param["SizeGB"] !== null) {
            $this->SizeGB = $param["SizeGB"];
        }

        if (array_key_exists("Remain",$param) and $param["Remain"] !== null) {
            $this->Remain = $param["Remain"];
        }

        if (array_key_exists("Used",$param) and $param["Used"] !== null) {
            $this->Used = $param["Used"];
        }

        if (array_key_exists("UsedPercentage",$param) and $param["UsedPercentage"] !== null) {
            $this->UsedPercentage = $param["UsedPercentage"];
        }

        if (array_key_exists("EffectiveTime",$param) and $param["EffectiveTime"] !== null) {
            $this->EffectiveTime = $param["EffectiveTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }
    }
}
