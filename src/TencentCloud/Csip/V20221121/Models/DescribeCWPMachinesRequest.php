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
 * DescribeCWPMachines request structure.
 *
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method Filter getFilter() Obtain <p>1. Primary table field filtering (requires specifying OperatorType)<br>MachineName: host name, supports OperatorType 9 (fuzzy), 7 (IN), Values example: ["test-server"]<br>MachineIp: private IP address, supports OperatorType 9 (fuzzy), 7 (IN), Values example: ["10.0.0.1"]<br>MachineWanIp: public network IP, supports OperatorType 9 (fuzzy), 7 (IN), Values example: ["1.2.3.4"]<br>InstanceID: instance ID, supports OperatorType 9 (fuzzy), 7 (IN), Values example: ["ins-xxxxx"]<br>MachineStatus / InstanceStatus: instance status, supports OperatorType 7 (IN), 1 (equal), Values example: ["RUNNING"], available Values: RUNNING/STOPPED/EXPIRED<br>MachineOs: operating system type, supports OperatorType 7 (IN), Values example: ["1"], the value is a numeric code, see OsType description below<br>VpcId: VPC ID, supports OperatorType 7 (IN), 1 (equal), Values example: ["VPC-xxxxx"]<br>CloudFromEnum: cloud service provider, supports OperatorType 7 (IN), 1 (equal), Values example: ["0"], the value is a numeric code, see CloudFrom description below<br>Region: Region, supports OperatorType 7 (IN), 1 (equal), Values example: ["ap-guangzhou"]<br>AppId: account AppId, supports OperatorType 7 (IN), 1 (equal), Values example: ["1234567890"]<br>ProjectId: project ID, supports OperatorType 7 (IN), 1 (equal), Values example: ["0"]</p><p>2. Pre-filter fields (no OperatorType required)<br>AgentStatus: Agent status, single selection, Values example: ["ONLINE"], available Values: ONLINE/OFFLINE/UNINSTALL<br>ProtectType: protection type (comprehensive), Values example: ["ULTIMATE"], available Values: BASIC/PRO/ULTIMATE/NONE<br>CsipProtectType: CSIP protection type, Values example: ["ULTIMATE"], available Values: BASIC/PRO/ULTIMATE/NONE<br>CloudTags: cloud tag, Values example: ["tagKey$tagValue"], format: tagKey$tagValue or tagKey (matches key only), up to 5 Values<br>Tags: asset tag, Values example: ["123"], the value is a tag ID<br>ExposedStatus: exposure status, single selection, Values example: ["EXPOSED"], available Values: NOT_APPLICABLE/EXPOSED/UNEXPOSED</p><p>3. Special filter fields (no OperatorType required)<br>NetworkType: network type, single selection, Values example: ["1"], 1=VPC network, 2=BASIC network, 3=Non-Tencent Cloud Network<br>MachineType: machine type, multiple selections allowed, Values example: ["CVM"], available Values: CVM/BM/ECM/LH/EKS-NATIVE/ECS/EC2/VMS<br>Common: general search, single selection, Values example: ["keyword"], performs fuzzy matching on private IP address, public network IP, host name, and instance ID at the same time</p>
 * @method void setFilter(Filter $Filter) Set <p>1. Primary table field filtering (requires specifying OperatorType)<br>MachineName: host name, supports OperatorType 9 (fuzzy), 7 (IN), Values example: ["test-server"]<br>MachineIp: private IP address, supports OperatorType 9 (fuzzy), 7 (IN), Values example: ["10.0.0.1"]<br>MachineWanIp: public network IP, supports OperatorType 9 (fuzzy), 7 (IN), Values example: ["1.2.3.4"]<br>InstanceID: instance ID, supports OperatorType 9 (fuzzy), 7 (IN), Values example: ["ins-xxxxx"]<br>MachineStatus / InstanceStatus: instance status, supports OperatorType 7 (IN), 1 (equal), Values example: ["RUNNING"], available Values: RUNNING/STOPPED/EXPIRED<br>MachineOs: operating system type, supports OperatorType 7 (IN), Values example: ["1"], the value is a numeric code, see OsType description below<br>VpcId: VPC ID, supports OperatorType 7 (IN), 1 (equal), Values example: ["VPC-xxxxx"]<br>CloudFromEnum: cloud service provider, supports OperatorType 7 (IN), 1 (equal), Values example: ["0"], the value is a numeric code, see CloudFrom description below<br>Region: Region, supports OperatorType 7 (IN), 1 (equal), Values example: ["ap-guangzhou"]<br>AppId: account AppId, supports OperatorType 7 (IN), 1 (equal), Values example: ["1234567890"]<br>ProjectId: project ID, supports OperatorType 7 (IN), 1 (equal), Values example: ["0"]</p><p>2. Pre-filter fields (no OperatorType required)<br>AgentStatus: Agent status, single selection, Values example: ["ONLINE"], available Values: ONLINE/OFFLINE/UNINSTALL<br>ProtectType: protection type (comprehensive), Values example: ["ULTIMATE"], available Values: BASIC/PRO/ULTIMATE/NONE<br>CsipProtectType: CSIP protection type, Values example: ["ULTIMATE"], available Values: BASIC/PRO/ULTIMATE/NONE<br>CloudTags: cloud tag, Values example: ["tagKey$tagValue"], format: tagKey$tagValue or tagKey (matches key only), up to 5 Values<br>Tags: asset tag, Values example: ["123"], the value is a tag ID<br>ExposedStatus: exposure status, single selection, Values example: ["EXPOSED"], available Values: NOT_APPLICABLE/EXPOSED/UNEXPOSED</p><p>3. Special filter fields (no OperatorType required)<br>NetworkType: network type, single selection, Values example: ["1"], 1=VPC network, 2=BASIC network, 3=Non-Tencent Cloud Network<br>MachineType: machine type, multiple selections allowed, Values example: ["CVM"], available Values: CVM/BM/ECM/LH/EKS-NATIVE/ECS/EC2/VMS<br>Common: general search, single selection, Values example: ["keyword"], performs fuzzy matching on private IP address, public network IP, host name, and instance ID at the same time</p>
 * @method boolean getNeedTatStatus() Obtain <p>Whether TAT status information is required</p>
 * @method void setNeedTatStatus(boolean $NeedTatStatus) Set <p>Whether TAT status information is required</p>
 * @method boolean getMoreInformation() Obtain <p>Whether additional information is required, such as security center tags and Tencent Cloud tags</p>
 * @method void setMoreInformation(boolean $MoreInformation) Set <p>Whether additional information is required, such as security center tags and Tencent Cloud tags</p>
 * @method boolean getNeedContainerInfo() Obtain <p>Whether container information is required, such as number of containers, cores, and container protection status</p>
 * @method void setNeedContainerInfo(boolean $NeedContainerInfo) Set <p>Whether container information is required, such as number of containers, cores, and container protection status</p>
 */
class DescribeCWPMachinesRequest extends AbstractModel
{
    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var Filter <p>1. Primary table field filtering (requires specifying OperatorType)<br>MachineName: host name, supports OperatorType 9 (fuzzy), 7 (IN), Values example: ["test-server"]<br>MachineIp: private IP address, supports OperatorType 9 (fuzzy), 7 (IN), Values example: ["10.0.0.1"]<br>MachineWanIp: public network IP, supports OperatorType 9 (fuzzy), 7 (IN), Values example: ["1.2.3.4"]<br>InstanceID: instance ID, supports OperatorType 9 (fuzzy), 7 (IN), Values example: ["ins-xxxxx"]<br>MachineStatus / InstanceStatus: instance status, supports OperatorType 7 (IN), 1 (equal), Values example: ["RUNNING"], available Values: RUNNING/STOPPED/EXPIRED<br>MachineOs: operating system type, supports OperatorType 7 (IN), Values example: ["1"], the value is a numeric code, see OsType description below<br>VpcId: VPC ID, supports OperatorType 7 (IN), 1 (equal), Values example: ["VPC-xxxxx"]<br>CloudFromEnum: cloud service provider, supports OperatorType 7 (IN), 1 (equal), Values example: ["0"], the value is a numeric code, see CloudFrom description below<br>Region: Region, supports OperatorType 7 (IN), 1 (equal), Values example: ["ap-guangzhou"]<br>AppId: account AppId, supports OperatorType 7 (IN), 1 (equal), Values example: ["1234567890"]<br>ProjectId: project ID, supports OperatorType 7 (IN), 1 (equal), Values example: ["0"]</p><p>2. Pre-filter fields (no OperatorType required)<br>AgentStatus: Agent status, single selection, Values example: ["ONLINE"], available Values: ONLINE/OFFLINE/UNINSTALL<br>ProtectType: protection type (comprehensive), Values example: ["ULTIMATE"], available Values: BASIC/PRO/ULTIMATE/NONE<br>CsipProtectType: CSIP protection type, Values example: ["ULTIMATE"], available Values: BASIC/PRO/ULTIMATE/NONE<br>CloudTags: cloud tag, Values example: ["tagKey$tagValue"], format: tagKey$tagValue or tagKey (matches key only), up to 5 Values<br>Tags: asset tag, Values example: ["123"], the value is a tag ID<br>ExposedStatus: exposure status, single selection, Values example: ["EXPOSED"], available Values: NOT_APPLICABLE/EXPOSED/UNEXPOSED</p><p>3. Special filter fields (no OperatorType required)<br>NetworkType: network type, single selection, Values example: ["1"], 1=VPC network, 2=BASIC network, 3=Non-Tencent Cloud Network<br>MachineType: machine type, multiple selections allowed, Values example: ["CVM"], available Values: CVM/BM/ECM/LH/EKS-NATIVE/ECS/EC2/VMS<br>Common: general search, single selection, Values example: ["keyword"], performs fuzzy matching on private IP address, public network IP, host name, and instance ID at the same time</p>
     */
    public $Filter;

    /**
     * @var boolean <p>Whether TAT status information is required</p>
     */
    public $NeedTatStatus;

    /**
     * @var boolean <p>Whether additional information is required, such as security center tags and Tencent Cloud tags</p>
     */
    public $MoreInformation;

    /**
     * @var boolean <p>Whether container information is required, such as number of containers, cores, and container protection status</p>
     */
    public $NeedContainerInfo;

    /**
     * @param array $MemberId <p>Group account member id</p>
     * @param Filter $Filter <p>1. Primary table field filtering (requires specifying OperatorType)<br>MachineName: host name, supports OperatorType 9 (fuzzy), 7 (IN), Values example: ["test-server"]<br>MachineIp: private IP address, supports OperatorType 9 (fuzzy), 7 (IN), Values example: ["10.0.0.1"]<br>MachineWanIp: public network IP, supports OperatorType 9 (fuzzy), 7 (IN), Values example: ["1.2.3.4"]<br>InstanceID: instance ID, supports OperatorType 9 (fuzzy), 7 (IN), Values example: ["ins-xxxxx"]<br>MachineStatus / InstanceStatus: instance status, supports OperatorType 7 (IN), 1 (equal), Values example: ["RUNNING"], available Values: RUNNING/STOPPED/EXPIRED<br>MachineOs: operating system type, supports OperatorType 7 (IN), Values example: ["1"], the value is a numeric code, see OsType description below<br>VpcId: VPC ID, supports OperatorType 7 (IN), 1 (equal), Values example: ["VPC-xxxxx"]<br>CloudFromEnum: cloud service provider, supports OperatorType 7 (IN), 1 (equal), Values example: ["0"], the value is a numeric code, see CloudFrom description below<br>Region: Region, supports OperatorType 7 (IN), 1 (equal), Values example: ["ap-guangzhou"]<br>AppId: account AppId, supports OperatorType 7 (IN), 1 (equal), Values example: ["1234567890"]<br>ProjectId: project ID, supports OperatorType 7 (IN), 1 (equal), Values example: ["0"]</p><p>2. Pre-filter fields (no OperatorType required)<br>AgentStatus: Agent status, single selection, Values example: ["ONLINE"], available Values: ONLINE/OFFLINE/UNINSTALL<br>ProtectType: protection type (comprehensive), Values example: ["ULTIMATE"], available Values: BASIC/PRO/ULTIMATE/NONE<br>CsipProtectType: CSIP protection type, Values example: ["ULTIMATE"], available Values: BASIC/PRO/ULTIMATE/NONE<br>CloudTags: cloud tag, Values example: ["tagKey$tagValue"], format: tagKey$tagValue or tagKey (matches key only), up to 5 Values<br>Tags: asset tag, Values example: ["123"], the value is a tag ID<br>ExposedStatus: exposure status, single selection, Values example: ["EXPOSED"], available Values: NOT_APPLICABLE/EXPOSED/UNEXPOSED</p><p>3. Special filter fields (no OperatorType required)<br>NetworkType: network type, single selection, Values example: ["1"], 1=VPC network, 2=BASIC network, 3=Non-Tencent Cloud Network<br>MachineType: machine type, multiple selections allowed, Values example: ["CVM"], available Values: CVM/BM/ECM/LH/EKS-NATIVE/ECS/EC2/VMS<br>Common: general search, single selection, Values example: ["keyword"], performs fuzzy matching on private IP address, public network IP, host name, and instance ID at the same time</p>
     * @param boolean $NeedTatStatus <p>Whether TAT status information is required</p>
     * @param boolean $MoreInformation <p>Whether additional information is required, such as security center tags and Tencent Cloud tags</p>
     * @param boolean $NeedContainerInfo <p>Whether container information is required, such as number of containers, cores, and container protection status</p>
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
        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = new Filter();
            $this->Filter->deserialize($param["Filter"]);
        }

        if (array_key_exists("NeedTatStatus",$param) and $param["NeedTatStatus"] !== null) {
            $this->NeedTatStatus = $param["NeedTatStatus"];
        }

        if (array_key_exists("MoreInformation",$param) and $param["MoreInformation"] !== null) {
            $this->MoreInformation = $param["MoreInformation"];
        }

        if (array_key_exists("NeedContainerInfo",$param) and $param["NeedContainerInfo"] !== null) {
            $this->NeedContainerInfo = $param["NeedContainerInfo"];
        }
    }
}
