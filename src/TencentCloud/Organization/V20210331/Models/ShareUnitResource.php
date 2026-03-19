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
 * @method void setCreateTime(string $CreateTime) Set Creation time.
 * @method string getProductResourceId() Obtain Product resource ID.
 * @method void setProductResourceId(string $ProductResourceId) Set Product resource ID.
 * @method integer getSharedMemberNum() Obtain Number of members in a sharing unit.
 * @method void setSharedMemberNum(integer $SharedMemberNum) Set Number of members in a sharing unit.
 * @method integer getSharedMemberUseNum() Obtain Number of members using shared resources.
 * @method void setSharedMemberUseNum(integer $SharedMemberUseNum) Set Number of members using shared resources.
 * @method integer getShareManagerUin() Obtain Sharing unit administrator.
 * @method void setShareManagerUin(integer $ShareManagerUin) Set Sharing unit administrator.
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
     */
    public $CreateTime;

    /**
     * @var string Product resource ID.
     */
    public $ProductResourceId;

    /**
     * @var integer Number of members in a sharing unit.
     */
    public $SharedMemberNum;

    /**
     * @var integer Number of members using shared resources.
     */
    public $SharedMemberUseNum;

    /**
     * @var integer Sharing unit administrator.
     */
    public $ShareManagerUin;

    /**
     * @param string $ResourceId Shared resource ID.
     * @param string $Type Shared resource type.
     * @param string $CreateTime Creation time.
     * @param string $ProductResourceId Product resource ID.
     * @param integer $SharedMemberNum Number of members in a sharing unit.
     * @param integer $SharedMemberUseNum Number of members using shared resources.
     * @param integer $ShareManagerUin Sharing unit administrator.
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
