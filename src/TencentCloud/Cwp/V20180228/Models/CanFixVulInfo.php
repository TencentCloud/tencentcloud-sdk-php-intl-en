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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Host information for batch vulnerability fixing
 *
 * @method integer getVulId() Obtain Vulnerability ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVulId(integer $VulId) Set Vulnerability ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVulName() Obtain Vulnerability name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVulName(string $VulName) Set Vulnerability name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getHostList() Obtain Information on hosts where this vulnerability can be fixed
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHostList(array $HostList) Set Information on hosts where this vulnerability can be fixed
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getFixTag() Obtain Fixing prompt tag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFixTag(array $FixTag) Set Fixing prompt tag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getVulCategory() Obtain 
 * @method void setVulCategory(integer $VulCategory) Set 
 */
class CanFixVulInfo extends AbstractModel
{
    /**
     * @var integer Vulnerability ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VulId;

    /**
     * @var string Vulnerability name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VulName;

    /**
     * @var array Information on hosts where this vulnerability can be fixed
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HostList;

    /**
     * @var array Fixing prompt tag
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FixTag;

    /**
     * @var integer 
     */
    public $VulCategory;

    /**
     * @param integer $VulId Vulnerability ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $VulName Vulnerability name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $HostList Information on hosts where this vulnerability can be fixed
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $FixTag Fixing prompt tag
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $VulCategory 
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
        if (array_key_exists("VulId",$param) and $param["VulId"] !== null) {
            $this->VulId = $param["VulId"];
        }

        if (array_key_exists("VulName",$param) and $param["VulName"] !== null) {
            $this->VulName = $param["VulName"];
        }

        if (array_key_exists("HostList",$param) and $param["HostList"] !== null) {
            $this->HostList = [];
            foreach ($param["HostList"] as $key => $value){
                $obj = new VulInfoHostInfo();
                $obj->deserialize($value);
                array_push($this->HostList, $obj);
            }
        }

        if (array_key_exists("FixTag",$param) and $param["FixTag"] !== null) {
            $this->FixTag = $param["FixTag"];
        }

        if (array_key_exists("VulCategory",$param) and $param["VulCategory"] !== null) {
            $this->VulCategory = $param["VulCategory"];
        }
    }
}
