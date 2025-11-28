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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyRole request structure.
 *
 * @method string getInstanceId() Obtain TDMQ RocketMQ instance ID. It can be obtained from the API [DescribeFusionInstanceList](https://www.tencentcloud.comom/document/api/1493/106745?from_cn_redirect=1) or the console.
 * @method void setInstanceId(string $InstanceId) Set TDMQ RocketMQ instance ID. It can be obtained from the API [DescribeFusionInstanceList](https://www.tencentcloud.comom/document/api/1493/106745?from_cn_redirect=1) or the console.
 * @method string getRole() Obtain Role name. It can be obtained from [RoleItem](https://www.tencentcloud.comom/document/api/1493/96031?from_cn_redirect=1#RoleItem) returned by the API [DescribeRoleList](https://www.tencentcloud.comom/document/api/1493/98862?from_cn_redirect=1) or from the console.
 * @method void setRole(string $Role) Set Role name. It can be obtained from [RoleItem](https://www.tencentcloud.comom/document/api/1493/96031?from_cn_redirect=1#RoleItem) returned by the API [DescribeRoleList](https://www.tencentcloud.comom/document/api/1493/98862?from_cn_redirect=1) or from the console.
 * @method boolean getPermRead() Obtain Whether to enable consumption.
 * @method void setPermRead(boolean $PermRead) Set Whether to enable consumption.
 * @method boolean getPermWrite() Obtain Whether to enable production
 * @method void setPermWrite(boolean $PermWrite) Set Whether to enable production
 * @method string getPermType() Obtain Specifies the types of permissions. the default is to authorize by Cluster (Cluster: at the Cluster level; TopicAndGroup: topic and consumer group dimension).
 * @method void setPermType(string $PermType) Set Specifies the types of permissions. the default is to authorize by Cluster (Cluster: at the Cluster level; TopicAndGroup: topic and consumer group dimension).
 * @method string getRemark() Obtain Remarks
 * @method void setRemark(string $Remark) Set Remarks
 * @method array getDetailedPerms() Obtain Permission configuration in the topic/group dimension. It is required when the permission type parameter is set to TopicAndGroup.
 * @method void setDetailedPerms(array $DetailedPerms) Set Permission configuration in the topic/group dimension. It is required when the permission type parameter is set to TopicAndGroup.
 */
class ModifyRoleRequest extends AbstractModel
{
    /**
     * @var string TDMQ RocketMQ instance ID. It can be obtained from the API [DescribeFusionInstanceList](https://www.tencentcloud.comom/document/api/1493/106745?from_cn_redirect=1) or the console.
     */
    public $InstanceId;

    /**
     * @var string Role name. It can be obtained from [RoleItem](https://www.tencentcloud.comom/document/api/1493/96031?from_cn_redirect=1#RoleItem) returned by the API [DescribeRoleList](https://www.tencentcloud.comom/document/api/1493/98862?from_cn_redirect=1) or from the console.
     */
    public $Role;

    /**
     * @var boolean Whether to enable consumption.
     */
    public $PermRead;

    /**
     * @var boolean Whether to enable production
     */
    public $PermWrite;

    /**
     * @var string Specifies the types of permissions. the default is to authorize by Cluster (Cluster: at the Cluster level; TopicAndGroup: topic and consumer group dimension).
     */
    public $PermType;

    /**
     * @var string Remarks
     */
    public $Remark;

    /**
     * @var array Permission configuration in the topic/group dimension. It is required when the permission type parameter is set to TopicAndGroup.
     */
    public $DetailedPerms;

    /**
     * @param string $InstanceId TDMQ RocketMQ instance ID. It can be obtained from the API [DescribeFusionInstanceList](https://www.tencentcloud.comom/document/api/1493/106745?from_cn_redirect=1) or the console.
     * @param string $Role Role name. It can be obtained from [RoleItem](https://www.tencentcloud.comom/document/api/1493/96031?from_cn_redirect=1#RoleItem) returned by the API [DescribeRoleList](https://www.tencentcloud.comom/document/api/1493/98862?from_cn_redirect=1) or from the console.
     * @param boolean $PermRead Whether to enable consumption.
     * @param boolean $PermWrite Whether to enable production
     * @param string $PermType Specifies the types of permissions. the default is to authorize by Cluster (Cluster: at the Cluster level; TopicAndGroup: topic and consumer group dimension).
     * @param string $Remark Remarks
     * @param array $DetailedPerms Permission configuration in the topic/group dimension. It is required when the permission type parameter is set to TopicAndGroup.
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

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("PermRead",$param) and $param["PermRead"] !== null) {
            $this->PermRead = $param["PermRead"];
        }

        if (array_key_exists("PermWrite",$param) and $param["PermWrite"] !== null) {
            $this->PermWrite = $param["PermWrite"];
        }

        if (array_key_exists("PermType",$param) and $param["PermType"] !== null) {
            $this->PermType = $param["PermType"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("DetailedPerms",$param) and $param["DetailedPerms"] !== null) {
            $this->DetailedPerms = [];
            foreach ($param["DetailedPerms"] as $key => $value){
                $obj = new DetailedRolePerm();
                $obj->deserialize($value);
                array_push($this->DetailedPerms, $obj);
            }
        }
    }
}
