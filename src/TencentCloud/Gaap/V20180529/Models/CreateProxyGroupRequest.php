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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getProjectId() 获取Project ID of connection group
 * @method void setProjectId(integer $ProjectId) 设置Project ID of connection group
 * @method string getGroupName() 获取Alias of connection group
 * @method void setGroupName(string $GroupName) 设置Alias of connection group
 * @method string getRealServerRegion() 获取Origin server region; Reference API: DescribeDestRegions; It returnes the `RegionId` of the parameter `RegionDetail`.
 * @method void setRealServerRegion(string $RealServerRegion) 设置Origin server region; Reference API: DescribeDestRegions; It returnes the `RegionId` of the parameter `RegionDetail`.
 * @method array getTagSet() 获取Tag list
 * @method void setTagSet(array $TagSet) 设置Tag list
 */

/**
 *CreateProxyGroup request structure.
 */
class CreateProxyGroupRequest extends AbstractModel
{
    /**
     * @var integer Project ID of connection group
     */
    public $ProjectId;

    /**
     * @var string Alias of connection group
     */
    public $GroupName;

    /**
     * @var string Origin server region; Reference API: DescribeDestRegions; It returnes the `RegionId` of the parameter `RegionDetail`.
     */
    public $RealServerRegion;

    /**
     * @var array Tag list
     */
    public $TagSet;
    /**
     * @param integer $ProjectId Project ID of connection group
     * @param string $GroupName Alias of connection group
     * @param string $RealServerRegion Origin server region; Reference API: DescribeDestRegions; It returnes the `RegionId` of the parameter `RegionDetail`.
     * @param array $TagSet Tag list
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("RealServerRegion",$param) and $param["RealServerRegion"] !== null) {
            $this->RealServerRegion = $param["RealServerRegion"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new TagPair();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }
    }
}
