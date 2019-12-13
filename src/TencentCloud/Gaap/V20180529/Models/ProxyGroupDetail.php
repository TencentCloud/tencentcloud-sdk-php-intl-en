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
 * @method integer getCreateTime() 获取Creation time
 * @method void setCreateTime(integer $CreateTime) 设置Creation time
 * @method integer getProjectId() 获取Project ID
 * @method void setProjectId(integer $ProjectId) 设置Project ID
 * @method integer getProxyNum() 获取Number of connections in connection group
 * @method void setProxyNum(integer $ProxyNum) 设置Number of connections in connection group
 * @method integer getStatus() 获取Connection group status:
0: running normally;
1: creating;
4: terminating;
11. Migrating.
 * @method void setStatus(integer $Status) 设置Connection group status:
0: running normally;
1: creating;
4: terminating;
11. Migrating.
 * @method string getOwnerUin() 获取Owner UIN
 * @method void setOwnerUin(string $OwnerUin) 设置Owner UIN
 * @method string getCreateUin() 获取Creation UIN
 * @method void setCreateUin(string $CreateUin) 设置Creation UIN
 * @method string getGroupName() 获取Connection name
 * @method void setGroupName(string $GroupName) 设置Connection name
 * @method string getDnsDefaultIp() 获取Default IP of domain name resolution for connection groups
 * @method void setDnsDefaultIp(string $DnsDefaultIp) 设置Default IP of domain name resolution for connection groups
 * @method string getDomain() 获取Connection group domain name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDomain(string $Domain) 设置Connection group domain name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method RegionDetail getRealServerRegionInfo() 获取Target region
 * @method void setRealServerRegionInfo(RegionDetail $RealServerRegionInfo) 设置Target region
 * @method boolean getIsOldGroup() 获取Whether it is an old connection group, i.e., those created before August 3, 2018.
 * @method void setIsOldGroup(boolean $IsOldGroup) 设置Whether it is an old connection group, i.e., those created before August 3, 2018.
 * @method string getGroupId() 获取Connection group ID
 * @method void setGroupId(string $GroupId) 设置Connection group ID
 * @method array getTagSet() 获取Tag list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTagSet(array $TagSet) 设置Tag list
Note: This field may return null, indicating that no valid values can be obtained.
 */

/**
 *Connection group details
 */
class ProxyGroupDetail extends AbstractModel
{
    /**
     * @var integer Creation time
     */
    public $CreateTime;

    /**
     * @var integer Project ID
     */
    public $ProjectId;

    /**
     * @var integer Number of connections in connection group
     */
    public $ProxyNum;

    /**
     * @var integer Connection group status:
0: running normally;
1: creating;
4: terminating;
11. Migrating.
     */
    public $Status;

    /**
     * @var string Owner UIN
     */
    public $OwnerUin;

    /**
     * @var string Creation UIN
     */
    public $CreateUin;

    /**
     * @var string Connection name
     */
    public $GroupName;

    /**
     * @var string Default IP of domain name resolution for connection groups
     */
    public $DnsDefaultIp;

    /**
     * @var string Connection group domain name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Domain;

    /**
     * @var RegionDetail Target region
     */
    public $RealServerRegionInfo;

    /**
     * @var boolean Whether it is an old connection group, i.e., those created before August 3, 2018.
     */
    public $IsOldGroup;

    /**
     * @var string Connection group ID
     */
    public $GroupId;

    /**
     * @var array Tag list
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TagSet;
    /**
     * @param integer $CreateTime Creation time
     * @param integer $ProjectId Project ID
     * @param integer $ProxyNum Number of connections in connection group
     * @param integer $Status Connection group status:
0: running normally;
1: creating;
4: terminating;
11. Migrating.
     * @param string $OwnerUin Owner UIN
     * @param string $CreateUin Creation UIN
     * @param string $GroupName Connection name
     * @param string $DnsDefaultIp Default IP of domain name resolution for connection groups
     * @param string $Domain Connection group domain name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param RegionDetail $RealServerRegionInfo Target region
     * @param boolean $IsOldGroup Whether it is an old connection group, i.e., those created before August 3, 2018.
     * @param string $GroupId Connection group ID
     * @param array $TagSet Tag list
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProxyNum",$param) and $param["ProxyNum"] !== null) {
            $this->ProxyNum = $param["ProxyNum"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("CreateUin",$param) and $param["CreateUin"] !== null) {
            $this->CreateUin = $param["CreateUin"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("DnsDefaultIp",$param) and $param["DnsDefaultIp"] !== null) {
            $this->DnsDefaultIp = $param["DnsDefaultIp"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("RealServerRegionInfo",$param) and $param["RealServerRegionInfo"] !== null) {
            $this->RealServerRegionInfo = new RegionDetail();
            $this->RealServerRegionInfo->deserialize($param["RealServerRegionInfo"]);
        }

        if (array_key_exists("IsOldGroup",$param) and $param["IsOldGroup"] !== null) {
            $this->IsOldGroup = $param["IsOldGroup"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
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
