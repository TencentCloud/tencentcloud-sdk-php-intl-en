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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDBInstanceSecurityGroups request structure.
 *
 * @method string getInstanceId() Obtain <p>Network Group id (cynosdbmysql-grp- prefix at the beginning) or Cluster id (such as cynosdbmysql-xxxxxxxx prefix). When configuring security group with instance IP address triplet (UniqVpcId, Vip, Vport), this field must be set to Cluster id (such as cynosdbmysql-xxxxxxxx prefix).</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Network Group id (cynosdbmysql-grp- prefix at the beginning) or Cluster id (such as cynosdbmysql-xxxxxxxx prefix). When configuring security group with instance IP address triplet (UniqVpcId, Vip, Vport), this field must be set to Cluster id (such as cynosdbmysql-xxxxxxxx prefix).</p>
 * @method array getSecurityGroupIds() Obtain <p>List of security group IDs to modify, an array of one or more security group IDs.<br>Note: This input will perform a full replacement of the existing collection, not an incremental update. The modification requires the expected full collection.</p>
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set <p>List of security group IDs to modify, an array of one or more security group IDs.<br>Note: This input will perform a full replacement of the existing collection, not an incremental update. The modification requires the expected full collection.</p>
 * @method string getZone() Obtain <p>AZ.</p>
 * @method void setZone(string $Zone) Set <p>AZ.</p>
 * @method string getUniqVpcId() Obtain <p>ID of the VPC network for instance ownership. (UniqVpcId, Vip, and Vport must be specified simultaneously to uniquely identify the network instance)</p>
 * @method void setUniqVpcId(string $UniqVpcId) Set <p>ID of the VPC network for instance ownership. (UniqVpcId, Vip, and Vport must be specified simultaneously to uniquely identify the network instance)</p>
 * @method string getVip() Obtain <p>Instance IP address, instance IP address triplet (UniqVpcId, Vip, and Vport). These three parameters must be specified simultaneously for unique identification of network instances.</p>
 * @method void setVip(string $Vip) Set <p>Instance IP address, instance IP address triplet (UniqVpcId, Vip, and Vport). These three parameters must be specified simultaneously for unique identification of network instances.</p>
 * @method integer getVport() Obtain <p>Instance port, instance IP address triplet (UniqVpcId, Vip, and Vport). These three parameters must be specified simultaneously for unique identification of network instances.</p>
 * @method void setVport(integer $Vport) Set <p>Instance port, instance IP address triplet (UniqVpcId, Vip, and Vport). These three parameters must be specified simultaneously for unique identification of network instances.</p>
 */
class ModifyDBInstanceSecurityGroupsRequest extends AbstractModel
{
    /**
     * @var string <p>Network Group id (cynosdbmysql-grp- prefix at the beginning) or Cluster id (such as cynosdbmysql-xxxxxxxx prefix). When configuring security group with instance IP address triplet (UniqVpcId, Vip, Vport), this field must be set to Cluster id (such as cynosdbmysql-xxxxxxxx prefix).</p>
     */
    public $InstanceId;

    /**
     * @var array <p>List of security group IDs to modify, an array of one or more security group IDs.<br>Note: This input will perform a full replacement of the existing collection, not an incremental update. The modification requires the expected full collection.</p>
     */
    public $SecurityGroupIds;

    /**
     * @var string <p>AZ.</p>
     */
    public $Zone;

    /**
     * @var string <p>ID of the VPC network for instance ownership. (UniqVpcId, Vip, and Vport must be specified simultaneously to uniquely identify the network instance)</p>
     */
    public $UniqVpcId;

    /**
     * @var string <p>Instance IP address, instance IP address triplet (UniqVpcId, Vip, and Vport). These three parameters must be specified simultaneously for unique identification of network instances.</p>
     */
    public $Vip;

    /**
     * @var integer <p>Instance port, instance IP address triplet (UniqVpcId, Vip, and Vport). These three parameters must be specified simultaneously for unique identification of network instances.</p>
     */
    public $Vport;

    /**
     * @param string $InstanceId <p>Network Group id (cynosdbmysql-grp- prefix at the beginning) or Cluster id (such as cynosdbmysql-xxxxxxxx prefix). When configuring security group with instance IP address triplet (UniqVpcId, Vip, Vport), this field must be set to Cluster id (such as cynosdbmysql-xxxxxxxx prefix).</p>
     * @param array $SecurityGroupIds <p>List of security group IDs to modify, an array of one or more security group IDs.<br>Note: This input will perform a full replacement of the existing collection, not an incremental update. The modification requires the expected full collection.</p>
     * @param string $Zone <p>AZ.</p>
     * @param string $UniqVpcId <p>ID of the VPC network for instance ownership. (UniqVpcId, Vip, and Vport must be specified simultaneously to uniquely identify the network instance)</p>
     * @param string $Vip <p>Instance IP address, instance IP address triplet (UniqVpcId, Vip, and Vport). These three parameters must be specified simultaneously for unique identification of network instances.</p>
     * @param integer $Vport <p>Instance port, instance IP address triplet (UniqVpcId, Vip, and Vport). These three parameters must be specified simultaneously for unique identification of network instances.</p>
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

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }
    }
}
