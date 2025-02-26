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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Shared unit resources
 *
 * @method string getResourceId() Obtain Shared resource ID.
 * @method void setResourceId(string $ResourceId) Set Shared resource ID.
 * @method string getType() Obtain Shared resource type.
 * @method void setType(string $Type) Set Shared resource type.
 * @method string getCreateTime() Obtain Creation time.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation time.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProductResourceId() Obtain Product resource ID.
 * @method void setProductResourceId(string $ProductResourceId) Set Product resource ID.
 * @method integer getSharedMemberNum() Obtain The number of members in a shared unit.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSharedMemberNum(integer $SharedMemberNum) Set The number of members in a shared unit.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getSharedMemberUseNum() Obtain The number of shared unit members in use.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSharedMemberUseNum(integer $SharedMemberUseNum) Set The number of shared unit members in use.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getShareManagerUin() Obtain Shared administrator OwnerUin.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setShareManagerUin(integer $ShareManagerUin) Set Shared administrator OwnerUin.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ShareUnitResource extends AbstractModel
{
    /**
     * @var string Shared resource ID.
     */
    public $ResourceId;

    /**
     * @var string Shared resource type.
     */
    public $Type;

    /**
     * @var string Creation time.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Product resource ID.
     */
    public $ProductResourceId;

    /**
     * @var integer The number of members in a shared unit.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SharedMemberNum;

    /**
     * @var integer The number of shared unit members in use.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SharedMemberUseNum;

    /**
     * @var integer Shared administrator OwnerUin.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ShareManagerUin;

    /**
     * @param string $ResourceId Shared resource ID.
     * @param string $Type Shared resource type.
     * @param string $CreateTime Creation time.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ProductResourceId Product resource ID.
     * @param integer $SharedMemberNum The number of members in a shared unit.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $SharedMemberUseNum The number of shared unit members in use.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ShareManagerUin Shared administrator OwnerUin.
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ProductResourceId",$param) and $param["ProductResourceId"] !== null) {
            $this->ProductResourceId = $param["ProductResourceId"];
        }

        if (array_key_exists("SharedMemberNum",$param) and $param["SharedMemberNum"] !== null) {
            $this->SharedMemberNum = $param["SharedMemberNum"];
        }

        if (array_key_exists("SharedMemberUseNum",$param) and $param["SharedMemberUseNum"] !== null) {
            $this->SharedMemberUseNum = $param["SharedMemberUseNum"];
        }

        if (array_key_exists("ShareManagerUin",$param) and $param["ShareManagerUin"] !== null) {
            $this->ShareManagerUin = $param["ShareManagerUin"];
        }
    }
}
