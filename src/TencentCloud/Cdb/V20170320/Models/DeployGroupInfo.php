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
 * @method string getDeployGroupId() Obtain ID of a placement group.
 * @method void setDeployGroupId(string $DeployGroupId) Set ID of a placement group.
 * @method string getDeployGroupName() Obtain Name of a placement group.
 * @method void setDeployGroupName(string $DeployGroupName) Set Name of a placement group.
 * @method string getCreateTime() Obtain Creation time.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
 * @method integer getQuota() Obtain Instance quota of placement group, indicating the maximum number of instances that can be placed in one placement group.
 * @method void setQuota(integer $Quota) Set Instance quota of placement group, indicating the maximum number of instances that can be placed in one placement group.
 * @method string getAffinity() Obtain Affinity policy of placement group. Currently, only policy 1 is supported, indicating to distribute instances across physical machines.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAffinity(string $Affinity) Set Affinity policy of placement group. Currently, only policy 1 is supported, indicating to distribute instances across physical machines.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getLimitNum() Obtain Upper limit of instances in one placement group on one physical machine as defined in affinity policy 1 of placement group.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setLimitNum(integer $LimitNum) Set Upper limit of instances in one placement group on one physical machine as defined in affinity policy 1 of placement group.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getDescription() Obtain Placement group details.
 * @method void setDescription(string $Description) Set Placement group details.
 * @method string getDevClass() Obtain Physical model attribute of placement group.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDevClass(string $DevClass) Set Physical model attribute of placement group.
Note: this field may return null, indicating that no valid values can be obtained.
 */

/**
 *Placement group information
 */
class DeployGroupInfo extends AbstractModel
{
    /**
     * @var string ID of a placement group.
     */
    public $DeployGroupId;

    /**
     * @var string Name of a placement group.
     */
    public $DeployGroupName;

    /**
     * @var string Creation time.
     */
    public $CreateTime;

    /**
     * @var integer Instance quota of placement group, indicating the maximum number of instances that can be placed in one placement group.
     */
    public $Quota;

    /**
     * @var string Affinity policy of placement group. Currently, only policy 1 is supported, indicating to distribute instances across physical machines.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Affinity;

    /**
     * @var integer Upper limit of instances in one placement group on one physical machine as defined in affinity policy 1 of placement group.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $LimitNum;

    /**
     * @var string Placement group details.
     */
    public $Description;

    /**
     * @var string Physical model attribute of placement group.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $DevClass;
    /**
     * @param string $DeployGroupId ID of a placement group.
     * @param string $DeployGroupName Name of a placement group.
     * @param string $CreateTime Creation time.
     * @param integer $Quota Instance quota of placement group, indicating the maximum number of instances that can be placed in one placement group.
     * @param string $Affinity Affinity policy of placement group. Currently, only policy 1 is supported, indicating to distribute instances across physical machines.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $LimitNum Upper limit of instances in one placement group on one physical machine as defined in affinity policy 1 of placement group.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Description Placement group details.
     * @param string $DevClass Physical model attribute of placement group.
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("DeployGroupId",$param) and $param["DeployGroupId"] !== null) {
            $this->DeployGroupId = $param["DeployGroupId"];
        }

        if (array_key_exists("DeployGroupName",$param) and $param["DeployGroupName"] !== null) {
            $this->DeployGroupName = $param["DeployGroupName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Quota",$param) and $param["Quota"] !== null) {
            $this->Quota = $param["Quota"];
        }

        if (array_key_exists("Affinity",$param) and $param["Affinity"] !== null) {
            $this->Affinity = $param["Affinity"];
        }

        if (array_key_exists("LimitNum",$param) and $param["LimitNum"] !== null) {
            $this->LimitNum = $param["LimitNum"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("DevClass",$param) and $param["DevClass"] !== null) {
            $this->DevClass = $param["DevClass"];
        }
    }
}
