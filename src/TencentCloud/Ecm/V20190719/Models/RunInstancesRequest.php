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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RunInstances request structure.
 *
 * @method array getZoneInstanceCountISPSet() Obtain List of AZs in which to create instances, the number of instances to be created, and the ISPs. You can create up to 100 instances in a region at a time.
 * @method void setZoneInstanceCountISPSet(array $ZoneInstanceCountISPSet) Set List of AZs in which to create instances, the number of instances to be created, and the ISPs. You can create up to 100 instances in a region at a time.
 * @method string getPassword() Obtain Instance login password. Different OS types have different limits on password complexity as detailed below:
The password of a Linux instance must contain 8–30 characters in at least two of the following character types: letters, digits, and special symbols [( ) ` ~ ! @ # $ % ^ & - + = | { } [ ] : ; ' , . ? / ]. The password of a Windows instance must contain 12–30 characters in at least three of the following character types: letters, digits, and special symbols [( ) ` ~ ! @ # $ % ^ & - + = | { } [ ] : ; ' , . ? /].
 * @method void setPassword(string $Password) Set Instance login password. Different OS types have different limits on password complexity as detailed below:
The password of a Linux instance must contain 8–30 characters in at least two of the following character types: letters, digits, and special symbols [( ) ` ~ ! @ # $ % ^ & - + = | { } [ ] : ; ' , . ? / ]. The password of a Windows instance must contain 12–30 characters in at least three of the following character types: letters, digits, and special symbols [( ) ` ~ ! @ # $ % ^ & - + = | { } [ ] : ; ' , . ? /].
 * @method integer getInternetMaxBandwidthOut() Obtain Public network outbound bandwidth cap in Mbps.
1. If you don't specify this parameter or specify it as `0`, the default value under the corresponding module will be used.
2. If you don't specify this parameter or specify it as `0` without specifying the module, the value of `InternetMaxBandwidthIn` will be used
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) Set Public network outbound bandwidth cap in Mbps.
1. If you don't specify this parameter or specify it as `0`, the default value under the corresponding module will be used.
2. If you don't specify this parameter or specify it as `0` without specifying the module, the value of `InternetMaxBandwidthIn` will be used
 * @method string getModuleId() Obtain Module ID. If you don't specify this parameter, you must specify the `ImageId`, `InstanceType`, `DataDiskSize`, and `InternetMaxBandwidthOut` parameters
 * @method void setModuleId(string $ModuleId) Set Module ID. If you don't specify this parameter, you must specify the `ImageId`, `InstanceType`, `DataDiskSize`, and `InternetMaxBandwidthOut` parameters
 * @method string getImageId() Obtain Image ID. If you don't specify this parameter or specify it as null, the default value under the corresponding module will be used.
 * @method void setImageId(string $ImageId) Set Image ID. If you don't specify this parameter or specify it as null, the default value under the corresponding module will be used.
 * @method string getInstanceName() Obtain Instance display name.
If this parameter is not specified, `Not named` will be displayed by default.
If you purchase multiple instances and specify the pattern string `{R:x}`, display names will be generated based on `[x, x+n-1]`, where `n` is the number of the purchased instances. For example, if you specify `server\_{R:3}` and purchase 1 instance, the display name will be `server\_3`, and if you purchase 2 instances, the display names will be `server\_3` and `server\_4` respectively.
You can specify multiple pattern strings `{R:x}`.
If you purchase multiple instances and don't specify the pattern string, the instance display names will be suffixed with 1, 2...n, where `n` indicates the number of the purchased instances. For example, if you specify `server_` and purchase 2 instances, the instance display names will be `server\_1` and `server\_2` respectively.
If the purchased instances belong to different regions or ISPs, the above rules will apply to each region and ISP independently.
It can contain up to 60 characters (including pattern string).
 * @method void setInstanceName(string $InstanceName) Set Instance display name.
If this parameter is not specified, `Not named` will be displayed by default.
If you purchase multiple instances and specify the pattern string `{R:x}`, display names will be generated based on `[x, x+n-1]`, where `n` is the number of the purchased instances. For example, if you specify `server\_{R:3}` and purchase 1 instance, the display name will be `server\_3`, and if you purchase 2 instances, the display names will be `server\_3` and `server\_4` respectively.
You can specify multiple pattern strings `{R:x}`.
If you purchase multiple instances and don't specify the pattern string, the instance display names will be suffixed with 1, 2...n, where `n` indicates the number of the purchased instances. For example, if you specify `server_` and purchase 2 instances, the instance display names will be `server\_1` and `server\_2` respectively.
If the purchased instances belong to different regions or ISPs, the above rules will apply to each region and ISP independently.
It can contain up to 60 characters (including pattern string).
 * @method string getHostName() Obtain Server name
`HostName` cannot start or end with a dot or hyphen and cannot contain consecutive dots or hyphens.
Windows instance: the name can contain 2–15 letters, digits, and hyphens but not dots or only digits.
Other types (such as Linux) of instances: the name should be a combination of 2 to 60 characters, supporting multiple dots. A string between two dots can contain letters, digits, and hyphens.
 * @method void setHostName(string $HostName) Set Server name
`HostName` cannot start or end with a dot or hyphen and cannot contain consecutive dots or hyphens.
Windows instance: the name can contain 2–15 letters, digits, and hyphens but not dots or only digits.
Other types (such as Linux) of instances: the name should be a combination of 2 to 60 characters, supporting multiple dots. A string between two dots can contain letters, digits, and hyphens.
 * @method string getClientToken() Obtain The string used to ensure the idempotency of the request. Currently, it is a reserved parameter; therefore, do not use it.
 * @method void setClientToken(string $ClientToken) Set The string used to ensure the idempotency of the request. Currently, it is a reserved parameter; therefore, do not use it.
 * @method EnhancedService getEnhancedService() Obtain Enhanced services. You can use this parameter to specify whether to enable services such as Cloud Security and Cloud Monitor. If this parameter is not specified, Cloud Monitor and Cloud Security will be enabled for public images by default.
 * @method void setEnhancedService(EnhancedService $EnhancedService) Set Enhanced services. You can use this parameter to specify whether to enable services such as Cloud Security and Cloud Monitor. If this parameter is not specified, Cloud Monitor and Cloud Security will be enabled for public images by default.
 * @method array getTagSpecification() Obtain Tag list
 * @method void setTagSpecification(array $TagSpecification) Set Tag list
 * @method string getUserData() Obtain The user data provided to the instance, which needs to be Base64-encoded with a maximum size of 16 KB
 * @method void setUserData(string $UserData) Set The user data provided to the instance, which needs to be Base64-encoded with a maximum size of 16 KB
 * @method string getInstanceType() Obtain Model. If you don't specify this parameter or specify it as null, the default value under the corresponding module will be used.
 * @method void setInstanceType(string $InstanceType) Set Model. If you don't specify this parameter or specify it as null, the default value under the corresponding module will be used.
 * @method integer getDataDiskSize() Obtain Data disk size in GB. If you don't specify this parameter or specify it as `0`, the default value under the corresponding module will be used
 * @method void setDataDiskSize(integer $DataDiskSize) Set Data disk size in GB. If you don't specify this parameter or specify it as `0`, the default value under the corresponding module will be used
 * @method array getSecurityGroupIds() Obtain Security group of the instance, which can be obtained from the `sgId` field in the returned value of the `DescribeSecurityGroups` API. If this parameter is not specified, the default security group will be bound by default.
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set Security group of the instance, which can be obtained from the `sgId` field in the returned value of the `DescribeSecurityGroups` API. If this parameter is not specified, the default security group will be bound by default.
 * @method integer getSystemDiskSize() Obtain System disk size in GB. If you don't specify this parameter or specify it as `0`, the default value under the corresponding module will be used
 * @method void setSystemDiskSize(integer $SystemDiskSize) Set System disk size in GB. If you don't specify this parameter or specify it as `0`, the default value under the corresponding module will be used
 * @method integer getInternetMaxBandwidthIn() Obtain Public network inbound bandwidth cap in Mbps.
1. If you don't specify this parameter or specify it as `0`, the default value under the corresponding module will be used.
2. If you don't specify this parameter or specify it as `0` without specifying the module, the value of `InternetMaxBandwidthOut` will be used
 * @method void setInternetMaxBandwidthIn(integer $InternetMaxBandwidthIn) Set Public network inbound bandwidth cap in Mbps.
1. If you don't specify this parameter or specify it as `0`, the default value under the corresponding module will be used.
2. If you don't specify this parameter or specify it as `0` without specifying the module, the value of `InternetMaxBandwidthOut` will be used
 * @method integer getInstanceChargeType() Obtain Instance billing type. Valid values:
0: postpaid by resource usage, where the daily peak usage of the CPU, memory, and disk will be calculated. This billing mode applies only to non-GNR models;
1: hourly postpaid at the unit price of xx USD/instance/hour. This billing mode applies only to GNR models. To enable it, submit a ticket for application;
2: monthly postpaid at the unit price of xx USD/instance/month. This billing mode applies only to GNR models;
If this field is left empty, `0` will be selected by default for non-GNR models, and `2` will be selected by default for GNR models.
 * @method void setInstanceChargeType(integer $InstanceChargeType) Set Instance billing type. Valid values:
0: postpaid by resource usage, where the daily peak usage of the CPU, memory, and disk will be calculated. This billing mode applies only to non-GNR models;
1: hourly postpaid at the unit price of xx USD/instance/hour. This billing mode applies only to GNR models. To enable it, submit a ticket for application;
2: monthly postpaid at the unit price of xx USD/instance/month. This billing mode applies only to GNR models;
If this field is left empty, `0` will be selected by default for non-GNR models, and `2` will be selected by default for GNR models.
 * @method array getKeyIds() Obtain Key pair.
 * @method void setKeyIds(array $KeyIds) Set Key pair.
 * @method string getKeepImageLogin() Obtain Whether to keep the original settings for the image. You cannot specify this parameter if `Password` or `KeyIds.N` is specified. You can specify this parameter as `TRUE` only when you create an instance by using a custom image, shared image, or image imported from an external resource. Valid values:
TRUE: yes
FALSE: no

Default value: FALSE.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setKeepImageLogin(string $KeepImageLogin) Set Whether to keep the original settings for the image. You cannot specify this parameter if `Password` or `KeyIds.N` is specified. You can specify this parameter as `TRUE` only when you create an instance by using a custom image, shared image, or image imported from an external resource. Valid values:
TRUE: yes
FALSE: no

Default value: FALSE.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method SystemDisk getSystemDisk() Obtain System disk information.
 * @method void setSystemDisk(SystemDisk $SystemDisk) Set System disk information.
 * @method array getDataDisks() Obtain Data disk information.
 * @method void setDataDisks(array $DataDisks) Set Data disk information.
 */
class RunInstancesRequest extends AbstractModel
{
    /**
     * @var array List of AZs in which to create instances, the number of instances to be created, and the ISPs. You can create up to 100 instances in a region at a time.
     */
    public $ZoneInstanceCountISPSet;

    /**
     * @var string Instance login password. Different OS types have different limits on password complexity as detailed below:
The password of a Linux instance must contain 8–30 characters in at least two of the following character types: letters, digits, and special symbols [( ) ` ~ ! @ # $ % ^ & - + = | { } [ ] : ; ' , . ? / ]. The password of a Windows instance must contain 12–30 characters in at least three of the following character types: letters, digits, and special symbols [( ) ` ~ ! @ # $ % ^ & - + = | { } [ ] : ; ' , . ? /].
     */
    public $Password;

    /**
     * @var integer Public network outbound bandwidth cap in Mbps.
1. If you don't specify this parameter or specify it as `0`, the default value under the corresponding module will be used.
2. If you don't specify this parameter or specify it as `0` without specifying the module, the value of `InternetMaxBandwidthIn` will be used
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var string Module ID. If you don't specify this parameter, you must specify the `ImageId`, `InstanceType`, `DataDiskSize`, and `InternetMaxBandwidthOut` parameters
     */
    public $ModuleId;

    /**
     * @var string Image ID. If you don't specify this parameter or specify it as null, the default value under the corresponding module will be used.
     */
    public $ImageId;

    /**
     * @var string Instance display name.
If this parameter is not specified, `Not named` will be displayed by default.
If you purchase multiple instances and specify the pattern string `{R:x}`, display names will be generated based on `[x, x+n-1]`, where `n` is the number of the purchased instances. For example, if you specify `server\_{R:3}` and purchase 1 instance, the display name will be `server\_3`, and if you purchase 2 instances, the display names will be `server\_3` and `server\_4` respectively.
You can specify multiple pattern strings `{R:x}`.
If you purchase multiple instances and don't specify the pattern string, the instance display names will be suffixed with 1, 2...n, where `n` indicates the number of the purchased instances. For example, if you specify `server_` and purchase 2 instances, the instance display names will be `server\_1` and `server\_2` respectively.
If the purchased instances belong to different regions or ISPs, the above rules will apply to each region and ISP independently.
It can contain up to 60 characters (including pattern string).
     */
    public $InstanceName;

    /**
     * @var string Server name
`HostName` cannot start or end with a dot or hyphen and cannot contain consecutive dots or hyphens.
Windows instance: the name can contain 2–15 letters, digits, and hyphens but not dots or only digits.
Other types (such as Linux) of instances: the name should be a combination of 2 to 60 characters, supporting multiple dots. A string between two dots can contain letters, digits, and hyphens.
     */
    public $HostName;

    /**
     * @var string The string used to ensure the idempotency of the request. Currently, it is a reserved parameter; therefore, do not use it.
     */
    public $ClientToken;

    /**
     * @var EnhancedService Enhanced services. You can use this parameter to specify whether to enable services such as Cloud Security and Cloud Monitor. If this parameter is not specified, Cloud Monitor and Cloud Security will be enabled for public images by default.
     */
    public $EnhancedService;

    /**
     * @var array Tag list
     */
    public $TagSpecification;

    /**
     * @var string The user data provided to the instance, which needs to be Base64-encoded with a maximum size of 16 KB
     */
    public $UserData;

    /**
     * @var string Model. If you don't specify this parameter or specify it as null, the default value under the corresponding module will be used.
     */
    public $InstanceType;

    /**
     * @var integer Data disk size in GB. If you don't specify this parameter or specify it as `0`, the default value under the corresponding module will be used
     */
    public $DataDiskSize;

    /**
     * @var array Security group of the instance, which can be obtained from the `sgId` field in the returned value of the `DescribeSecurityGroups` API. If this parameter is not specified, the default security group will be bound by default.
     */
    public $SecurityGroupIds;

    /**
     * @var integer System disk size in GB. If you don't specify this parameter or specify it as `0`, the default value under the corresponding module will be used
     */
    public $SystemDiskSize;

    /**
     * @var integer Public network inbound bandwidth cap in Mbps.
1. If you don't specify this parameter or specify it as `0`, the default value under the corresponding module will be used.
2. If you don't specify this parameter or specify it as `0` without specifying the module, the value of `InternetMaxBandwidthOut` will be used
     */
    public $InternetMaxBandwidthIn;

    /**
     * @var integer Instance billing type. Valid values:
0: postpaid by resource usage, where the daily peak usage of the CPU, memory, and disk will be calculated. This billing mode applies only to non-GNR models;
1: hourly postpaid at the unit price of xx USD/instance/hour. This billing mode applies only to GNR models. To enable it, submit a ticket for application;
2: monthly postpaid at the unit price of xx USD/instance/month. This billing mode applies only to GNR models;
If this field is left empty, `0` will be selected by default for non-GNR models, and `2` will be selected by default for GNR models.
     */
    public $InstanceChargeType;

    /**
     * @var array Key pair.
     */
    public $KeyIds;

    /**
     * @var string Whether to keep the original settings for the image. You cannot specify this parameter if `Password` or `KeyIds.N` is specified. You can specify this parameter as `TRUE` only when you create an instance by using a custom image, shared image, or image imported from an external resource. Valid values:
TRUE: yes
FALSE: no

Default value: FALSE.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $KeepImageLogin;

    /**
     * @var SystemDisk System disk information.
     */
    public $SystemDisk;

    /**
     * @var array Data disk information.
     */
    public $DataDisks;

    /**
     * @param array $ZoneInstanceCountISPSet List of AZs in which to create instances, the number of instances to be created, and the ISPs. You can create up to 100 instances in a region at a time.
     * @param string $Password Instance login password. Different OS types have different limits on password complexity as detailed below:
The password of a Linux instance must contain 8–30 characters in at least two of the following character types: letters, digits, and special symbols [( ) ` ~ ! @ # $ % ^ & - + = | { } [ ] : ; ' , . ? / ]. The password of a Windows instance must contain 12–30 characters in at least three of the following character types: letters, digits, and special symbols [( ) ` ~ ! @ # $ % ^ & - + = | { } [ ] : ; ' , . ? /].
     * @param integer $InternetMaxBandwidthOut Public network outbound bandwidth cap in Mbps.
1. If you don't specify this parameter or specify it as `0`, the default value under the corresponding module will be used.
2. If you don't specify this parameter or specify it as `0` without specifying the module, the value of `InternetMaxBandwidthIn` will be used
     * @param string $ModuleId Module ID. If you don't specify this parameter, you must specify the `ImageId`, `InstanceType`, `DataDiskSize`, and `InternetMaxBandwidthOut` parameters
     * @param string $ImageId Image ID. If you don't specify this parameter or specify it as null, the default value under the corresponding module will be used.
     * @param string $InstanceName Instance display name.
If this parameter is not specified, `Not named` will be displayed by default.
If you purchase multiple instances and specify the pattern string `{R:x}`, display names will be generated based on `[x, x+n-1]`, where `n` is the number of the purchased instances. For example, if you specify `server\_{R:3}` and purchase 1 instance, the display name will be `server\_3`, and if you purchase 2 instances, the display names will be `server\_3` and `server\_4` respectively.
You can specify multiple pattern strings `{R:x}`.
If you purchase multiple instances and don't specify the pattern string, the instance display names will be suffixed with 1, 2...n, where `n` indicates the number of the purchased instances. For example, if you specify `server_` and purchase 2 instances, the instance display names will be `server\_1` and `server\_2` respectively.
If the purchased instances belong to different regions or ISPs, the above rules will apply to each region and ISP independently.
It can contain up to 60 characters (including pattern string).
     * @param string $HostName Server name
`HostName` cannot start or end with a dot or hyphen and cannot contain consecutive dots or hyphens.
Windows instance: the name can contain 2–15 letters, digits, and hyphens but not dots or only digits.
Other types (such as Linux) of instances: the name should be a combination of 2 to 60 characters, supporting multiple dots. A string between two dots can contain letters, digits, and hyphens.
     * @param string $ClientToken The string used to ensure the idempotency of the request. Currently, it is a reserved parameter; therefore, do not use it.
     * @param EnhancedService $EnhancedService Enhanced services. You can use this parameter to specify whether to enable services such as Cloud Security and Cloud Monitor. If this parameter is not specified, Cloud Monitor and Cloud Security will be enabled for public images by default.
     * @param array $TagSpecification Tag list
     * @param string $UserData The user data provided to the instance, which needs to be Base64-encoded with a maximum size of 16 KB
     * @param string $InstanceType Model. If you don't specify this parameter or specify it as null, the default value under the corresponding module will be used.
     * @param integer $DataDiskSize Data disk size in GB. If you don't specify this parameter or specify it as `0`, the default value under the corresponding module will be used
     * @param array $SecurityGroupIds Security group of the instance, which can be obtained from the `sgId` field in the returned value of the `DescribeSecurityGroups` API. If this parameter is not specified, the default security group will be bound by default.
     * @param integer $SystemDiskSize System disk size in GB. If you don't specify this parameter or specify it as `0`, the default value under the corresponding module will be used
     * @param integer $InternetMaxBandwidthIn Public network inbound bandwidth cap in Mbps.
1. If you don't specify this parameter or specify it as `0`, the default value under the corresponding module will be used.
2. If you don't specify this parameter or specify it as `0` without specifying the module, the value of `InternetMaxBandwidthOut` will be used
     * @param integer $InstanceChargeType Instance billing type. Valid values:
0: postpaid by resource usage, where the daily peak usage of the CPU, memory, and disk will be calculated. This billing mode applies only to non-GNR models;
1: hourly postpaid at the unit price of xx USD/instance/hour. This billing mode applies only to GNR models. To enable it, submit a ticket for application;
2: monthly postpaid at the unit price of xx USD/instance/month. This billing mode applies only to GNR models;
If this field is left empty, `0` will be selected by default for non-GNR models, and `2` will be selected by default for GNR models.
     * @param array $KeyIds Key pair.
     * @param string $KeepImageLogin Whether to keep the original settings for the image. You cannot specify this parameter if `Password` or `KeyIds.N` is specified. You can specify this parameter as `TRUE` only when you create an instance by using a custom image, shared image, or image imported from an external resource. Valid values:
TRUE: yes
FALSE: no

Default value: FALSE.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param SystemDisk $SystemDisk System disk information.
     * @param array $DataDisks Data disk information.
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
        if (array_key_exists("ZoneInstanceCountISPSet",$param) and $param["ZoneInstanceCountISPSet"] !== null) {
            $this->ZoneInstanceCountISPSet = [];
            foreach ($param["ZoneInstanceCountISPSet"] as $key => $value){
                $obj = new ZoneInstanceCountISP();
                $obj->deserialize($value);
                array_push($this->ZoneInstanceCountISPSet, $obj);
            }
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("InternetMaxBandwidthOut",$param) and $param["InternetMaxBandwidthOut"] !== null) {
            $this->InternetMaxBandwidthOut = $param["InternetMaxBandwidthOut"];
        }

        if (array_key_exists("ModuleId",$param) and $param["ModuleId"] !== null) {
            $this->ModuleId = $param["ModuleId"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }

        if (array_key_exists("EnhancedService",$param) and $param["EnhancedService"] !== null) {
            $this->EnhancedService = new EnhancedService();
            $this->EnhancedService->deserialize($param["EnhancedService"]);
        }

        if (array_key_exists("TagSpecification",$param) and $param["TagSpecification"] !== null) {
            $this->TagSpecification = [];
            foreach ($param["TagSpecification"] as $key => $value){
                $obj = new TagSpecification();
                $obj->deserialize($value);
                array_push($this->TagSpecification, $obj);
            }
        }

        if (array_key_exists("UserData",$param) and $param["UserData"] !== null) {
            $this->UserData = $param["UserData"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("DataDiskSize",$param) and $param["DataDiskSize"] !== null) {
            $this->DataDiskSize = $param["DataDiskSize"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("SystemDiskSize",$param) and $param["SystemDiskSize"] !== null) {
            $this->SystemDiskSize = $param["SystemDiskSize"];
        }

        if (array_key_exists("InternetMaxBandwidthIn",$param) and $param["InternetMaxBandwidthIn"] !== null) {
            $this->InternetMaxBandwidthIn = $param["InternetMaxBandwidthIn"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("KeyIds",$param) and $param["KeyIds"] !== null) {
            $this->KeyIds = $param["KeyIds"];
        }

        if (array_key_exists("KeepImageLogin",$param) and $param["KeepImageLogin"] !== null) {
            $this->KeepImageLogin = $param["KeepImageLogin"];
        }

        if (array_key_exists("SystemDisk",$param) and $param["SystemDisk"] !== null) {
            $this->SystemDisk = new SystemDisk();
            $this->SystemDisk->deserialize($param["SystemDisk"]);
        }

        if (array_key_exists("DataDisks",$param) and $param["DataDisks"] !== null) {
            $this->DataDisks = [];
            foreach ($param["DataDisks"] as $key => $value){
                $obj = new DataDisk();
                $obj->deserialize($value);
                array_push($this->DataDisks, $obj);
            }
        }
    }
}
