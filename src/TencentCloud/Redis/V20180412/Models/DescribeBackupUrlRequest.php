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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBackupUrl request structure.
 *
 * @method string getInstanceId() Obtain Instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
 * @method void setInstanceId(string $InstanceId) Set Instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
 * @method string getBackupId() Obtain Backup ID, which can be obtained through the `RedisBackupSet` parameter returned by the [DescribeInstanceBackups](https://intl.cloud.tencent.com/document/product/239/20011?from_cn_redirect=1) API.
 * @method void setBackupId(string $BackupId) Set Backup ID, which can be obtained through the `RedisBackupSet` parameter returned by the [DescribeInstanceBackups](https://intl.cloud.tencent.com/document/product/239/20011?from_cn_redirect=1) API.
 * @method string getLimitType() Obtain Limit type of the network from which you can download backup files. If this parameter is not configured, the user-defined configuration will be used.
- NoLimit: There is no limit. Backup files can be downloaded from both Tencent Cloud private and public networks.
- LimitOnlyIntranet: Backup files can be downloaded 
 only from the private IP address automatically assigned by Tencent Cloud.
- Customize: Backup files can be downloaded from the user-defined VPC.
 * @method void setLimitType(string $LimitType) Set Limit type of the network from which you can download backup files. If this parameter is not configured, the user-defined configuration will be used.
- NoLimit: There is no limit. Backup files can be downloaded from both Tencent Cloud private and public networks.
- LimitOnlyIntranet: Backup files can be downloaded 
 only from the private IP address automatically assigned by Tencent Cloud.
- Customize: Backup files can be downloaded from the user-defined VPC.
 * @method string getVpcComparisonSymbol() Obtain Only `In` can be passed in for this parameter, indicating that backup files can be downloaded in the custom `LimitVpc`.
 * @method void setVpcComparisonSymbol(string $VpcComparisonSymbol) Set Only `In` can be passed in for this parameter, indicating that backup files can be downloaded in the custom `LimitVpc`.
 * @method string getIpComparisonSymbol() Obtain Whether backup files can be downloaded from the custom IP address specified by LimitIp.
- In: yes. This is the default value.
- NotIn: no.
 * @method void setIpComparisonSymbol(string $IpComparisonSymbol) Set Whether backup files can be downloaded from the custom IP address specified by LimitIp.
- In: yes. This is the default value.
- NotIn: no.
 * @method array getLimitVpc() Obtain VPC ID of the custom backup file download address, which is required if `LimitType` is `Customize`.
 * @method void setLimitVpc(array $LimitVpc) Set VPC ID of the custom backup file download address, which is required if `LimitType` is `Customize`.
 * @method array getLimitIp() Obtain VPC IP of the custom backup file download address, which is required if `LimitType` is `Customize`.
 * @method void setLimitIp(array $LimitIp) Set VPC IP of the custom backup file download address, which is required if `LimitType` is `Customize`.
 */
class DescribeBackupUrlRequest extends AbstractModel
{
    /**
     * @var string Instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
     */
    public $InstanceId;

    /**
     * @var string Backup ID, which can be obtained through the `RedisBackupSet` parameter returned by the [DescribeInstanceBackups](https://intl.cloud.tencent.com/document/product/239/20011?from_cn_redirect=1) API.
     */
    public $BackupId;

    /**
     * @var string Limit type of the network from which you can download backup files. If this parameter is not configured, the user-defined configuration will be used.
- NoLimit: There is no limit. Backup files can be downloaded from both Tencent Cloud private and public networks.
- LimitOnlyIntranet: Backup files can be downloaded 
 only from the private IP address automatically assigned by Tencent Cloud.
- Customize: Backup files can be downloaded from the user-defined VPC.
     */
    public $LimitType;

    /**
     * @var string Only `In` can be passed in for this parameter, indicating that backup files can be downloaded in the custom `LimitVpc`.
     */
    public $VpcComparisonSymbol;

    /**
     * @var string Whether backup files can be downloaded from the custom IP address specified by LimitIp.
- In: yes. This is the default value.
- NotIn: no.
     */
    public $IpComparisonSymbol;

    /**
     * @var array VPC ID of the custom backup file download address, which is required if `LimitType` is `Customize`.
     */
    public $LimitVpc;

    /**
     * @var array VPC IP of the custom backup file download address, which is required if `LimitType` is `Customize`.
     */
    public $LimitIp;

    /**
     * @param string $InstanceId Instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
     * @param string $BackupId Backup ID, which can be obtained through the `RedisBackupSet` parameter returned by the [DescribeInstanceBackups](https://intl.cloud.tencent.com/document/product/239/20011?from_cn_redirect=1) API.
     * @param string $LimitType Limit type of the network from which you can download backup files. If this parameter is not configured, the user-defined configuration will be used.
- NoLimit: There is no limit. Backup files can be downloaded from both Tencent Cloud private and public networks.
- LimitOnlyIntranet: Backup files can be downloaded 
 only from the private IP address automatically assigned by Tencent Cloud.
- Customize: Backup files can be downloaded from the user-defined VPC.
     * @param string $VpcComparisonSymbol Only `In` can be passed in for this parameter, indicating that backup files can be downloaded in the custom `LimitVpc`.
     * @param string $IpComparisonSymbol Whether backup files can be downloaded from the custom IP address specified by LimitIp.
- In: yes. This is the default value.
- NotIn: no.
     * @param array $LimitVpc VPC ID of the custom backup file download address, which is required if `LimitType` is `Customize`.
     * @param array $LimitIp VPC IP of the custom backup file download address, which is required if `LimitType` is `Customize`.
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

        if (array_key_exists("BackupId",$param) and $param["BackupId"] !== null) {
            $this->BackupId = $param["BackupId"];
        }

        if (array_key_exists("LimitType",$param) and $param["LimitType"] !== null) {
            $this->LimitType = $param["LimitType"];
        }

        if (array_key_exists("VpcComparisonSymbol",$param) and $param["VpcComparisonSymbol"] !== null) {
            $this->VpcComparisonSymbol = $param["VpcComparisonSymbol"];
        }

        if (array_key_exists("IpComparisonSymbol",$param) and $param["IpComparisonSymbol"] !== null) {
            $this->IpComparisonSymbol = $param["IpComparisonSymbol"];
        }

        if (array_key_exists("LimitVpc",$param) and $param["LimitVpc"] !== null) {
            $this->LimitVpc = [];
            foreach ($param["LimitVpc"] as $key => $value){
                $obj = new BackupLimitVpcItem();
                $obj->deserialize($value);
                array_push($this->LimitVpc, $obj);
            }
        }

        if (array_key_exists("LimitIp",$param) and $param["LimitIp"] !== null) {
            $this->LimitIp = $param["LimitIp"];
        }
    }
}
