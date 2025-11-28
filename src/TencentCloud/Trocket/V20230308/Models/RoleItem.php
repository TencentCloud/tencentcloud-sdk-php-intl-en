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
 * Role information.
 *
 * @method string getRoleName() Obtain Role name.
 * @method void setRoleName(string $RoleName) Set Role name.
 * @method boolean getPermRead() Obtain Whether to enable consumption.
 * @method void setPermRead(boolean $PermRead) Set Whether to enable consumption.
 * @method boolean getPermWrite() Obtain Whether to enable production
 * @method void setPermWrite(boolean $PermWrite) Set Whether to enable production
 * @method string getAccessKey() Obtain Access Key
 * @method void setAccessKey(string $AccessKey) Set Access Key
 * @method string getSecretKey() Obtain Secret Key
 * @method void setSecretKey(string $SecretKey) Set Secret Key
 * @method string getRemark() Obtain Remarks
 * @method void setRemark(string $Remark) Set Remarks
 * @method integer getCreatedTime() Obtain Role creation time. **It is a Unix timestamp (ms).**
 * @method void setCreatedTime(integer $CreatedTime) Set Role creation time. **It is a Unix timestamp (ms).**
 * @method integer getModifiedTime() Obtain Role update time. **It is a Unix timestamp (ms).**
 * @method void setModifiedTime(integer $ModifiedTime) Set Role update time. **It is a Unix timestamp (ms).**
 * @method string getPermType() Obtain Specifies the types of permissions. the default is to authorize by Cluster (Cluster: at the Cluster level; TopicAndGroup: topic and consumer group level).
 * @method void setPermType(string $PermType) Set Specifies the types of permissions. the default is to authorize by Cluster (Cluster: at the Cluster level; TopicAndGroup: topic and consumer group level).
 * @method array getDetailedRolePerms() Obtain Permission configuration in Topic and Group dimension.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDetailedRolePerms(array $DetailedRolePerms) Set Permission configuration in Topic and Group dimension.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class RoleItem extends AbstractModel
{
    /**
     * @var string Role name.
     */
    public $RoleName;

    /**
     * @var boolean Whether to enable consumption.
     */
    public $PermRead;

    /**
     * @var boolean Whether to enable production
     */
    public $PermWrite;

    /**
     * @var string Access Key
     */
    public $AccessKey;

    /**
     * @var string Secret Key
     */
    public $SecretKey;

    /**
     * @var string Remarks
     */
    public $Remark;

    /**
     * @var integer Role creation time. **It is a Unix timestamp (ms).**
     */
    public $CreatedTime;

    /**
     * @var integer Role update time. **It is a Unix timestamp (ms).**
     */
    public $ModifiedTime;

    /**
     * @var string Specifies the types of permissions. the default is to authorize by Cluster (Cluster: at the Cluster level; TopicAndGroup: topic and consumer group level).
     */
    public $PermType;

    /**
     * @var array Permission configuration in Topic and Group dimension.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DetailedRolePerms;

    /**
     * @param string $RoleName Role name.
     * @param boolean $PermRead Whether to enable consumption.
     * @param boolean $PermWrite Whether to enable production
     * @param string $AccessKey Access Key
     * @param string $SecretKey Secret Key
     * @param string $Remark Remarks
     * @param integer $CreatedTime Role creation time. **It is a Unix timestamp (ms).**
     * @param integer $ModifiedTime Role update time. **It is a Unix timestamp (ms).**
     * @param string $PermType Specifies the types of permissions. the default is to authorize by Cluster (Cluster: at the Cluster level; TopicAndGroup: topic and consumer group level).
     * @param array $DetailedRolePerms Permission configuration in Topic and Group dimension.
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
        if (array_key_exists("RoleName",$param) and $param["RoleName"] !== null) {
            $this->RoleName = $param["RoleName"];
        }

        if (array_key_exists("PermRead",$param) and $param["PermRead"] !== null) {
            $this->PermRead = $param["PermRead"];
        }

        if (array_key_exists("PermWrite",$param) and $param["PermWrite"] !== null) {
            $this->PermWrite = $param["PermWrite"];
        }

        if (array_key_exists("AccessKey",$param) and $param["AccessKey"] !== null) {
            $this->AccessKey = $param["AccessKey"];
        }

        if (array_key_exists("SecretKey",$param) and $param["SecretKey"] !== null) {
            $this->SecretKey = $param["SecretKey"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ModifiedTime",$param) and $param["ModifiedTime"] !== null) {
            $this->ModifiedTime = $param["ModifiedTime"];
        }

        if (array_key_exists("PermType",$param) and $param["PermType"] !== null) {
            $this->PermType = $param["PermType"];
        }

        if (array_key_exists("DetailedRolePerms",$param) and $param["DetailedRolePerms"] !== null) {
            $this->DetailedRolePerms = [];
            foreach ($param["DetailedRolePerms"] as $key => $value){
                $obj = new DetailedRolePerm();
                $obj->deserialize($value);
                array_push($this->DetailedRolePerms, $obj);
            }
        }
    }
}
